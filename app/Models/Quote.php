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
        'store_name',
        'store_phone',
        'store_address',
        'client_name',
        'client_phone',
        'client_email',
        'vihicle_vin',
        'vihicle_make',
        'vihicle_manufacturer',
        'vihicle_year',
        'vihicle_registration',
        'vihicle_license_issue_date',
        'vihicle_license_expiry_date'
    ];
}
