<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Timelog extends Model
{
    use HasFactory;
    protected $fillable = [
        'in', 'out', 'status', 'user_id','in_loc','out_loc'
    ];

    public static function my_timelog($id)
    {
        return DB::table('timelogs')
            ->whereDate('in',date('Y-m-d'))
            ->where('user_id', $id)
            ->get();
    }

    public static function getCount($id)
    {
        return DB::table('timelogs')
            ->whereDate('in',date('Y-m-d'))
            ->whereNotNull('out_loc')
            ->where('user_id',$id)
            ->get();
    }

    public static function getAttendance($id)
    {
        return DB::table("timelogs")
            ->leftJoin('users', 'users.id', '=', 'timelogs.user_id')
            ->select('users.name','timelogs.in','timelogs.out','timelogs.created_at')
            ->where('user_id',$id)
            ->orderBy('timelogs.id','desc')
            ->get();
    }

    public static function list()
    {

        return DB::table('timelogs')
            ->select('users.name','timelogs.in','timelogs.out','timelogs.user_id','timelogs.status','users.id')
            ->leftJoin('users', 'users.id', '=', 'timelogs.user_id')
            ->whereDate('in', date('Y-m-d'))
            // ->whereRaw('timelogs.id IN (SELECT MAX(id) FROM timelogs)')
            ->orderBy('timelogs.id', 'desc')
            ->get();
    }

    public static function out_of_work()
    {
        return DB::table('users')
            ->leftJoin('timelogs', 'timelogs.user_id', '=', 'users.id')
            ->where('in', null)
            ->get();
    }

  
}
