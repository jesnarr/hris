<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MrfSignature extends Model
{
    use HasFactory;

    public function mrf(){
        $this->belongsTo(Mrf::class,'mrf_id','id');
    }
}
