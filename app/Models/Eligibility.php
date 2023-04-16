<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Eligibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','leave_id','counter'
    ];

    public static function getList($id){
        return DB::table('eligibilities')
            ->leftJoin('employees','employees.id','=','eligibilities.user_id')
            ->where('eligibilities.leave_id',$id)
            ->get();
    }
}
