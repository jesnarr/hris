<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Leave extends Model
{
    use HasFactory;

    public static function getLeave(){
        return DB::table('leaves')
        ->get();

    }
    public static function selectedLeave($id){
        return DB::table('eligibilities')
        ->leftJoin('leaves','leaves.id','=','eligibilities.leave_id')
        ->where(function ($query)  use ($id){
            $query->where('eligibilities.user_id',$id)
            ->where("leaves.status",1)
            ->where('eligibilities.counter','!=',0);
        })
        ->get();

    }

}
