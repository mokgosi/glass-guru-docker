<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Libern\QRCodeReader\QRCodeReader;
use App\Http\Requests\QRCodeRequest;
use App\Models\QrCode; 
use Zxing\QrReader;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\VehicleModel;
use App\Models\VehicleMake;

class QRCodeController extends Controller
{
    public function qrCodeReader($path='')
    {
        if(!empty($path)) {
            $path = Storage::path($path);

            $qrcode = new QrReader($path);
            $text = $qrcode->text(); 

            return response()->json([
                "success" => true,
                "text" => $text,
                "additional" => ''
            ]);
        }
        return response()->json(['error' => 'File upload failed..'], 401);

    }

    public function qrCodeUploader(QRCodeRequest $request)
    {
        if ($file = $request->file('path')) {
            $path = $file->store('public/files');
            $name = $file->getClientOriginalName();

            $qrCodeDetails = $this->qrCodeReader($path);
            $valid = $this->validateQRCodeDetails($qrCodeDetails);
            
            if(!is_bool(gettype($valid))) {
                return $valid; //json formatt error response
            } else {
                //get full 
            }
            //store your file into directory and db
            $save = new QrCode();
            $save->name = $name;
            $save->path = $path;
            $save->save();

            return $qrCodeDetails;
        }
        return response()->json(['error' => 'File upload failed...'], 401);
    }

    public function validateQRCodeDetails($qrCodeDetails)
    {
        $qrCodeDetails = json_decode($qrCodeDetails->getContent(), true);
        $pieces = explode(';', $qrCodeDetails['text']);

        //check if license expired first
        if($this->checkIfLicenseExpired($pieces[6])) {
            return response()->json(['error' => 'License expired...'], 401);
        }

        //check year
        if($pieces[3] < 2006) {
            return response()->json(['error' => "Models before 2006 - Not Supported..."], 401);
        }

        //check make supported
        if($this->checkIfVehicleMakeSupported($pieces[1])) {
            return response()->json(['error' => "Vehicle Make: {$pieces[1]} - Not Supported..."], 401);
        }
        return true;
    }

    public function getAddionalVehicleDetails(Request $request)
    {
        $model = $request->get('model');
        $vehicle = VehicleModel::with('make')->where('name', $model)->first();
        return $vehicle;
    }

    public function checkIfLicenseExpired($expiryDate): bool
    {
        if(Carbon::now() > Carbon::parse($expiryDate) ) {
            return true;
        } 
        
        return false;
    }

    public function checkIfVehicleMakeSupported($make): bool
    {
        // $make = $request->get('make'); //have to check make case-sensetive

        $unsupported = VehicleMake::where('supported', 0)->pluck('name')->toArray();
        
        if(in_array($make, $unsupported)) {
            return false;
        }
        return true;
    }
}
