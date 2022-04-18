<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\QRCodeRequest;
use App\Models\QrCode; 
use App\Models\VehicleModel;
use App\Models\VehicleMake;
use Illuminate\Support\Facades\Storage;
use Zxing\QrReader;
use Carbon\Carbon;


class QRCodeController extends Controller
{
    public function qrCodeReader($path)
    {
        if(!empty($path)) {
            $path = Storage::path($path);

            $qrcode = new QrReader($path);
            $text = $qrcode->text(); 

            return response()->json([
                "success" => true,
                "text" => $text,
                "additional" => '',
                "reference" => random_int(10000000, 99999999)
            ]);
        }
        return response()->json(['error' => 'File upload failed..'], 401);
    }

    public function qrCodeUploader(QRCodeRequest $request): string
    {
        if ($file = $request->file('file')) {
            $path = $file->store('public/files');
            $name = $file->getClientOriginalName();

            $qrCodeDetails = $this->qrCodeReader($path);
            $qrCodeDetails = $qrCodeDetails->getContent();
            $decodeQrCodeDetails = json_decode($qrCodeDetails, true);
            $pieces = explode(';', $decodeQrCodeDetails['text']);

            $validated = $this->validateQRCode($pieces);

            if($validated === true) {
                //get full 
                $addistional = $this->getAddionalVehicleDetails($pieces[2]);
                $qrCodeDetails = json_decode($qrCodeDetails, true);
                $qrCodeDetails['additional'] = $addistional;
                $qrCodeDetails = json_encode($qrCodeDetails);
            } else {
                return $validated->getContent();
            }

            //store your file into directory and db
            $qrCode = new QrCode();
            $qrCode->name = $name;
            $qrCode->file = $path;
            $qrCode->save();

            return $qrCodeDetails;
        }
        return response()->json(['error' => 'File upload failed...'], 401);
    }

    public function validateQRCode(array $qrCodeDetails)
    {
        //check if license expired first
        if($this->licenseExpired($qrCodeDetails[6])) {
            return response()->json(['error' => 'License expired...'], 401);
        }

        //check year
        if((int)$qrCodeDetails[3] < 2006) {
            return response()->json(['error' => "Models before 2006 - Not Supported..."], 401);
        }

        //check make supported
        if(!$this->makeSupported($qrCodeDetails[1])) {
            return response()->json(['error' => "Vehicle Make: {$qrCodeDetails[1]} - Not Supported..."], 401);
        }
        return true;
    }

    public function getAddionalVehicleDetails(string $model)
    {
        // $model = $request->get('model');
        $vehicle = VehicleModel::select('code','cost')
            ->where('name', $model)
            ->first();
        return $vehicle;
    }

    public function licenseExpired($expiryDate): bool
    {
        if(Carbon::now() < Carbon::parse($expiryDate)) {
            return false;
        } 
        return true;
    }

    public function makeSupported($make): bool
    {
        $unsupported = VehicleMake::where('supported', 0)->pluck('name')->toArray();
        if(in_array($make, $unsupported)) {
            return false;
        }
        return true;
    }
}
 