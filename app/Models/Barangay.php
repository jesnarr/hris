<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    public function province()
    {
        $this->belongsTo(Province::class, 'province_code', 'code');
    }

    public function region()
    {
        $this->belongsTo(Region::class, 'region_code', 'code');
    }

    public function city()
    {
        $this->belongsTo(City::class, 'city_code', 'code');
    }
}
