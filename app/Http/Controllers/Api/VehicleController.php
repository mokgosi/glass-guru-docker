<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Libern\QRCodeReader\QRCodeReader;

class VehicleController extends Controller
{
    public function getVehicelDetails(): array
    {
        $vehicle = [];
        return $vehicle;
    }

    public function checkExpiredLicense(): bool
    {
        return false;
    }

    public function checkModelSupported(): bool
    {
        return true;
    }
}
