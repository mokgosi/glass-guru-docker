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
    public function getVehicelDetails(Request $request)
    {
        $vehicle = VehicleModel::with('make')->where('name', $request->get('model'))->first();
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
