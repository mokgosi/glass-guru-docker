<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'year'];

    public function make()
    {
        return $this->belongsTo('App\Model\VehicleMake');
    }
}
