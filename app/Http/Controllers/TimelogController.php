<?php

namespace App\Http\Controllers;

use App\Models\Timelog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class TimelogController extends Controller
{
    //

    public function index(Request $request){

        if($request->ajax()){
            $data = $this->employeeAttendance();
            $data->whereMonth('timelogs.created_at',date('m'));
            return $this->filteredTable($data);
        }

        $attendance = $this->response();
        $data = [
            'response' => $attendance,
            'title' => 'Attendance'
        ];
        return view('attendance.index',$data);
    }

    public function response(){
        $array = [
            ["data" => "name"],
            ["data" => "date"],
            ["data" => "in"],
            ["data" => "out"]
        ];

        return $array;
    }

    public function attendanceTable(){
        $attendance = Timelog::getAttendance(Auth::user()->employee->id);
        return DataTables::of($attendance)
            ->addIndexColumn()
            ->addColumn('name', function ($row){

                return ucwords($row->name);
             })
             ->addColumn('filter', function ($row){

                return date('F',strtotime($row->created_at));
             })
             ->addColumn('date', function ($row){

                return date('F d, Y',strtotime($row->created_at));
             })
             ->addColumn('in', function ($row){

                return date('g:i:s A',strtotime($row->in));
             })
             ->addColumn('out', function ($row){
                 return isset($row->out) ? date('g:i:s A',strtotime($row->out)) : '';
             })
            ->rawColumns(['name','date','in','out'])
            ->make(true);
    }
    
    public function filter(Request $request)
    {
        if($request->filter == 1)
            return $this->generateMonthly($request);
        
        return $this->generateCustom($request);
    }

    public function generateMonthly($request)
    {
        if ($request->all()) {
            $data = $this->employeeAttendance();
            $data->whereMonth('timelogs.created_at', $request->month)
                // ->groupBy('timelogs.user_id')
                ->get();
            return $this->filteredTable($data);
        }
    }
    public function generateCustom($request)
    {
        if ($request->all()) {
            $data = $this->employeeAttendance();
            $data->whereBetween('timelogs.created_at', [$request->from,$request->to])
                // ->groupBy('timelogs.user_id')
                ->get();
            return $this->filteredTable($data);
        }
    }

    public function filteredTable($data)
    {
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('name', function ($row){

                return ucwords($row->name);
            })
            ->addColumn('date', function ($row){

                return date('F d, Y',strtotime($row->created_at));
            })
            ->addColumn('in', function ($row){

                return date('H:i:s',strtotime($row->in));
            })
            ->addColumn('out', function ($row){
                return isset($row->out) ? date('H:i:s',strtotime($row->out)) : '';
            })
            ->rawColumns(['name','date','in','out'])
            ->make(true);
        }


        public function employeeAttendance()
        {
            return DB::table('timelogs')
                    ->select( DB::raw('CONCAT(employees.last_name, ", ", employees.first_name) as name'),
                        'timelogs.created_at','timelogs.in','timelogs.out',
                    )
                        ->leftJoin('employees','employees.user_id','=','timelogs.user_id');
        }
        
    

}
