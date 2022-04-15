<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleMake extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code'];

    public function models()
    {
        return $this->hasMany('App\Models\VehicleModel');
    }
}
