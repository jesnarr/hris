<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mrf extends Model
{
    use HasFactory;

    public function signature()
    {
        return $this->hasOne(MrfSignature::class, 'mrf_id', 'id');
    }
}
