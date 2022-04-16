<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Libern\QRCodeReader\QRCodeReader;
use Carbon\Carbon;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
class VehicleController extends Controller
{
    public function getVehicleDetails(Request $request)
    {
        $vehicle = VehicleModel::with('make')->where('name', $request->get('model'))->first();
        return $vehicle;
    }
}
