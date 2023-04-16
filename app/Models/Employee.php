<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public static function search($txtSearch = null, $department = null, $position = null, $branch = null): Collection
    {
        $query = DB::table('employees')
            ->leftJoin('job_information', 'employees.id', '=', 'job_information.employee_id')
            ->leftJoin('positions', 'job_information.position_id', '=', 'positions.id')
            ->select('employees.*', 'positions.position');

        $query = $query->where(function ($query) use ($txtSearch) {
            $query->where('employees.first_name', 'like', "%$txtSearch%")
                ->orWhere('employees.last_name', 'like', "%$txtSearch%")
                ->orWhere('employees.middle_name', 'like', "%$txtSearch%")
                ->orWhere('employees.work_email', 'like', "%$txtSearch%");
        });

        if ($position) {
            $query = $query->where('positions.id', $position);
        }

        if ($department) {
            $query = $query->where('positions.department', $department);
        }

        if ($branch) {
            $query = $query->where('employees.tag_id', $branch);
        }

        // if (is_bool($sort)) {
        //     $query = $sort === false
        //         ? $query->orderBy('employees.updated_at')
        //         : $query->orderBy('employees.updated_at', 'desc');
        // } else {
        //     $query = $sort === 'asc'
        //         ? $query->orderBy('employees.first_name')
        //         : $query->orderBy('employees.first_name', 'desc');
        // }
        // $query = $query->where('job_information.employee_status_id','!=',5);
        $query = $query->orderBy('employees.first_name');

        $query = $query->get();
        return $query;
    }

    public function getFirstNameAttribute($value)
    {
        return ucwords(mb_strtolower($value));
    }

    public function getLastNameAttribute($value)
    {
        return ucwords(mb_strtolower($value));
    }

}
