<?php

namespace App\Http\Controllers;


use App\Events\NewNotification;
use App\Models\Employee;
use App\Models\Timekeep;
use App\Models\Timelog;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $title = 'Dashboard';
        $list = Timelog::list();
        $out_of_work = Timelog::out_of_work();
        $employees_count = Employee::count();
        $log = Timelog::my_timelog(Auth::user()->employee->id)->first();
        $counter = Timelog::getCount(Auth::user()->employee->id);
        $count = count($counter);

        $data = [
            'title' => $title,
            'list' => $list,
            'out_of_work' => $out_of_work,
            'log' => $log,
            'count' => $count,
            'employees_count' => $employees_count
        ];

        return view('dashboard.index', $data);
    }

    public function timelog(Request $request)
    {
        try {

            $ip =  request()->ip();
            // $loc = \Location::get($ip);
            $location = '';
            $location = 'Outside';
            if ($request->id) {
                $t_out = date('Y-m-d H:i:s');
                TimeLog::where('id', $request->id)
                    ->update([
                        'out' => $t_out,
                        'status' => 0,
                        'out_loc' => $location
                    ]);


                // undertime computation
                $end_time = new DateTime('17:00');
                $undertime =  date('H:i', strtotime('17:00'));
                $ut = '00:00';
                $out = date('H:i', strtotime($t_out));
                if ($out < $undertime) {
                    $time_out = new DateTime($out);
                    $interval = $time_out->diff($end_time);
                    $ut =  ((int)$interval->format('%I') > 0  || (int)$interval->format('%H') > 0)  ?  $interval->format('%H:%I') : '0.00';
                }

                $timekeep = Timekeep::where('created_at','>=',date('Y-m-d'))->where('employee_id', Auth::user()->employee->id)
                                ->first();
                $timekeep->out = $t_out;
                $timekeep->ut = $this->leaveComputationOut($t_out) == 0 ? $ut : '00:00';
                $timekeep->lwop = $timekeep->lwop ==0 ?  $this->leaveComputationOut($t_out) : $timekeep->lwop ;
                $timekeep->save();
            } else {
                $t_in = date('Y-m-d H:i:s');
                TimeLog::create([
                    'in' => $t_in,
                    'user_id' => Auth::user()->employee->id,
                    'status' => 1,
                    'in_loc' => $location
                ]);


                // late computation
                $grace_period = new DateTime('08:00');
                $x = date('H:i', strtotime('08:15'));
                $late = '00:00';
                $in = date('H:i', strtotime($t_in));
                if ($x < $in) {
                    $time_in = new DateTime($in);
                    $interval = $grace_period->diff($time_in);
                    $late =   ((int)$interval->format('%I') > 0  || (int)$interval->format('%H') > 0)  ?  $interval->format('%H:%I') : '0.00';
                }

                $timekeep = new Timekeep();
                $timekeep->in = $t_in;
                $timekeep->employee_id = Auth::user()->employee->id;
                $timekeep->late = $this->leaveComputationIn($t_in) == 0 ? $late : '00:00';
                $timekeep->lwop = $this->leaveComputationIn($t_in);
                $timekeep->save();
            }
            // event (new NewNotification(Auth::user()->employee->last_name, Auth::user()->employee->first_name));
            return response()->json(['message' => 'Time clock success']);
        } catch (Exception $e) {
            return response()->json(['message' => 'Time clock failed' . $e->getMessage()]);
        }
    }

    public function leaveComputationIn($in)
    {
        $in = date('H:i', strtotime($in));
        $time = date('H:i', strtotime('12:00'));
        $x = 0;
        if ($in >= $time) {
            $x = 0.5;
        }
        if (!$in) {
            $x = 0.5;
        }
        return $x;
    }

    public function leaveComputationOut($out)
    {
        $out = date('H:i', strtotime($out));
        $time = date('H:i', strtotime('12:00'));
        $x = 0;
        if($out <= $time){
            $x = 0.5;
        }
        if(!$out){
            $x = 0.5;
        }
        return $x;
    }
}
