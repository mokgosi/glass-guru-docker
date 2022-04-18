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
                $qrCodeDetails = $this->persisitQrCode($qrCodeDetails, $path, $name ,$pieces[2]);
            } else {
                return $validated->getContent();
            }

            return $qrCodeDetails;
        }
        return response()->json(['error' => 'File upload failed...'], 401);
    }

    public function persisitQrCode(string $qrCodeDetails, string $path, string $name ,string $model) 
    {
        
        $addistional = $this->getAddionalVehicleDetails($model);
        $qrCodeDetails = json_decode($qrCodeDetails, true);
        $qrCodeDetails['additional'] = $addistional;
        $qrCodeDetails = json_encode($qrCodeDetails);
        
        $qrCode = new QrCode();
        $qrCode->name = $name;
        $qrCode->file = $path;
        $qrCode->save();

        return $qrCodeDetails;
    }

    public function validateQRCode(array $qrCodeDetails)
    {
        if($this->licenseExpired($qrCodeDetails[6])) {
            return response()->json(['error' => 'License expired...'], 401);
        }

        //check year - set in .env
        if((int)$qrCodeDetails[3] < (int)env('VEHICLE_SUPPORT_FROM_YEAR')) {
            return response()->json(['error' => "Vehicle Models before ".env('VEHICLE_SUPPORT_FROM_YEAR')." - Not Supported..."], 401);
        }

        if(!$this->makeSupported($qrCodeDetails[1])) {
            return response()->json(['error' => "Vehicle Makes: {$qrCodeDetails[1]} - Not Supported..."], 401);
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
 