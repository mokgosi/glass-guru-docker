<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QrCode; 
use Libern\QRCodeReader\QRCodeReader;
use App\Http\Requests\QRCodeRequest;

class QRCodeController extends Controller
{
    public function qrCodeReader($path)
    {
        $QRCodeReader = new QRCodeReader();
        $qrcode_text = $QRCodeReader->decode("/home/pictures/qr_code.png");
        return $qrcode_text;
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
}
