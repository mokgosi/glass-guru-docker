<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QRCode; 
use Libern\QRCodeReader\QRCodeReader;
use Validator;

class QRCodeController extends Controller
{
    public function qrCodeReader($path)
    {
        $QRCodeReader = new QRCodeReader();
        $qrcode_text = $QRCodeReader->decode("/home/pictures/qr_code.png");
        return $qrcode_text;
    }

    public function qrCodeUploader(Request $request)
    {
        $validator = Validator::make($request->all(),[ 
            'file' => 'required|mimes:doc,docx,pdf,txt,csv|max:2048',
        ]);   

        if($validator->fails()) {          
            return response()->json(['error'=>$validator->errors()], 401);                        
        }  

        if ($file = $request->file('file')) {
            $path = $file->store('public/files');
            $name = $file->getClientOriginalName();
  
            //store your file into directory and db
            $save = new QRCode();
            $save->name = $file;
            $save->store_path= $path;
            $save->save();
               
            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "file" => $file
            ]);
        }
    }
}
