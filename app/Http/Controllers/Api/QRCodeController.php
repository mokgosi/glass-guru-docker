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

class QRCodeController extends Controller
{
    public function qrCodeReader($path='')
    {
        $path = Storage::path('public/files/9fuCFog1BV0Qu474udAmTobGeUBWkv4RYQCK7roY.png');

        $qrcode = new QrReader($path);
        $text = $qrcode->text(); 
        
        // $this->checkIfLicenseExpired($text);
        
        return response()->json([
            "success" => true,
            "text" => $text,
        ]);
    }

    public function qrCodeUploader(QRCodeRequest $request)
    {
        if ($file = $request->file('path')) {
            $path = $file->store('public/files');
            $name = $file->getClientOriginalName();
  
            //store your file into directory and db
            $save = new QrCode();
            $save->name = $file;
            $save->path = $path;
            $save->save();
               
            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "file" => $file
            ]);
        }
        return response()->json(['error' => 'File upload failed '], 401);
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
