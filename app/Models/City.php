<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
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
}
