<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Schedule extends Model
{
    use HasFactory;


    public static function getList(){
        return DB::table('schedules')
          ->get();
    }
}
