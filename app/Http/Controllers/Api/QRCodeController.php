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
  
            //store your file into directory and db
            $save = new QrCode();
            $save->name = $name;
            $save->path = $path;
            $save->save();

            $qrCodeDetails = $this->qrCodeReader($path);
               
            return $qrCodeDetails;
        }
        return response()->json(['error' => 'File upload failed...'], 401);
    }

    public function getAddionalVehicleDetails($model)
    {
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

    public function checkIfVehicleModelSupported($model): bool
    {
        if(in_array($model, ['BMW', 'Merceds', 'Audi'])) {
            return false;
        }
        return true;
    }
}
