<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'cost',
        'store_location',
        'client_name',
        'client_phone',
        'vin',
        'make',
        'model',
        'year',
        'registration',
        'license_issue_date',
        'license_expiry_date'
    ];
}
