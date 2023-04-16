<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LeaveRequest extends Model
{
    use HasFactory;

    protected $casts = [
        'members' => 'array'
    ];

    public static function getTimeOff($id){
        return DB::table('leave_requests as l')
        ->leftJoin('employees as u','u.id','=','l.user_id')
        ->leftJoin('employees as a','a.id','=','l.approved_id')
        ->leftJoin('leaves','leaves.id','=','l.leave_id')
        ->select('l.from','l.to','l.attachment','l.status','l.leave_id','l.note','l.members',
        'l.total',
        DB::raw('CONCAT(a.last_name, ", ", a.first_name) as name'),
        'leaves.name as leave_name','l.id','l.leave_type','u.id as user_id','leaves.id as leave_id')
        ->where('l.user_id',$id)
        ->get();

    }


    public static function getTeamOff($id){
        return DB::table('leave_requests as l')
        ->leftJoin('employees as u','u.id','=','l.user_id')
        ->leftJoin('employees as a','a.id','=','l.approved_id')
        ->leftJoin('leaves','leaves.id','=','l.leave_id')
        ->leftJoin('job_information as j','j.employee_id','=','l.user_id')
        ->select('l.from','l.to','l.attachment','l.status','l.leave_id','l.note','l.total',
        DB::raw('CONCAT(u.last_name, ", ", u.first_name) as name'),
        'leaves.name as leave_name','l.id','l.leave_type','u.id as user_id','leaves.id as leave_id')
        ->where('j.line_manager_id',$id)
        ->get();

    }
}
