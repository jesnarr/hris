<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeRates;
use App\Models\Holidays;
use App\Models\OvertimeRequest;
use App\Models\SalarySettings;
use App\Models\Timekeep;
use App\Models\Timelog;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class TimekeepController extends Controller
{
    //
    public function index(Request $request)
    {

        $now = Carbon::now();
        if($request->ajax())
        {
            $response = $this->getData();
            $response->where(function($query) use($now){
                $query->whereBetween('timekeeps.in', [
                    $now->startOfWeek(Carbon::TUESDAY)->format('Y-m-d'),
                    $now->endOfWeek(Carbon::SATURDAY)->format('Y-m-d'),
                ]);


            })->orderBy('timekeeps.in','asc');

            $response->get();

            return $this->timekeepTable($response);
        }

        $data = [
            'title' => 'Timekeep',
            'response' => $this->response(),
            'start' => $now->startOfWeek(Carbon::TUESDAY)->format('Y-m-d'),
            'end' => $now->endOfWeek(Carbon::SATURDAY)->format('Y-m-d'),

        ];
        return view('timekeep.index',$data);
    }


    public function hourFormatter($data)
    {
        return $data != '00:00' ? $data : '';
    }

    public function view(Request $request)
    {

        if($request->ajax())
        {

            $data = $this->getEmployeeData();
            $data->where(function($query) use ($request) {
                $id = $request->id ? $request->id : Auth::user()->employee->id;
                $query->where('employees.id',$id);
            });
            $data->get();

            return $this->employeeTable($data);
        }

    }


    // post request
    public function getDtr(Request $request)
    {
        if($request->ajax())
        {

            $response = $this->getData();
            $response->where(function($query) use ($request){
                if($request->from && $request->to){
                    $from = $request->from.' '.'00:00:00';
                    $to = $request->to.' '.'23:59:59';
                    $start = date('Y-m-d H:i:s',strtotime($from));
                    $end = date('Y-m-d H:i:s',strtotime($to));
                    $query->whereBetween('timekeeps.in',[$start,$end]);
                }

            })->orderBy('timekeeps.in','asc');
            $response->get();

            return $this->timekeepTable($response);
        }
    }

    public function getTotal(Request $request)
    {
        try{
            $this->employeeAttendance($request);
            $response = Timekeep::leftJoin('employees','employees.id','=','timekeeps.employee_id')
            ->select('timekeeps.in','timekeeps.out','timekeeps.created_at',
             'timekeeps.late','timekeeps.ut','timekeeps.lwop','timekeeps.reg_ot',
             'timekeeps.ot_rd','timekeeps.ot_spc_day','timekeeps.reg_hd','timekeeps.nd',
             'timekeeps.sl','timekeeps.vl')
             ->where('timekeeps.employee_id',$request->id)
             ->where(function($query) use ($request){
                if($request->from && $request->to){
                    $from = $request->from.' '.'00:00:00';
                    $to = $request->to.' '.'23:59:59';
                    $start = date('Y-m-d H:i:s',strtotime($from));
                    $end = date('Y-m-d H:i:s',strtotime($to));
                    $query->whereBetween('timekeeps.in',[$start,$end]);
                }
             })
            ->orderBy('timekeeps.created_at','asc')
            ->get();
            $late = $ut = $ot = $lwop = $reg_ot = $ot_rd = $ot_spc_day = $reg_hd = $nd = $sl = $vl = $total = 0;
            $late1 = 0;



            foreach($response as $res){
                $late += floatval(str_replace(":", ".", $res->late));
                $ut += floatval(str_replace(":", ".", $res->ut));
                $lwop += $res->lwop;
                $reg_ot += floatval(str_replace(":", ".", $res->reg_ot));
                $ot_rd += floatval(str_replace(":", ".", $res->ot_rd));
                $ot_spc_day += floatval(str_replace(":", ".", $res->ot_spc_day));
                $reg_hd +=floatval(str_replace(":", ".", $res->reg_hd));
                $nd += floatval(str_replace(":", ".", $res->nd));
                $sl += $res->sl;
                $vl += $res->vl;

            }
        $salary_settings = SalarySettings::first();
        $rates = EmployeeRates::where('employee_id',$request->id)->first();

        $rate = isset($salary_settings->rate_per_day) ? $salary_settings->rate_per_day : 0;
        $basic_pay = $rates->basic_pay;
        $salary = $basic_pay / $rate;
        $salary_per_hour = $salary/8;

        $allowance = $allowance_per_cutoff = $allowance_per_day =  $allowance_per_hr = $a_per_cutoff =  0;
        if($rates->allowance != 0){
            $allowance = $rates->allowance;
            $allowance_per_cutoff = $allowance / 2;
            $allowance_per_day = $allowance_per_cutoff / $rate;
            $allowance_per_hr = $allowance_per_day / 8;

            $a_per_cutoff = $allowance_per_cutoff -
                (($late + $ut) * $allowance_per_hr)
                -($lwop * $allowance_per_day);
        }

        $deductions = ($salary_per_hour * $late) + ($salary_per_hour * $ut) + ($salary * $lwop);
        $per_cut_off = $basic_pay / 2;

        $adjustments = $salary_per_hour * $reg_ot * ($salary_settings->reg_ot/100)
          + $salary_per_hour * $ot_rd * ($salary_settings->ot_rd/100)
          + $salary_per_hour * $ot_spc_day * ($salary_settings->ot_spc_day/100)
          + $salary_per_hour * $nd * ($salary_settings->nd/100);

        $total_gross = $per_cut_off - $deductions + $adjustments + $a_per_cutoff;


        $data = [
            'late' => number_format($salary_per_hour * $late,2),
            'ut' => number_format($salary_per_hour * $ut,2),
            'lwop' => number_format($salary * $lwop,2),
            'reg_ot' => number_format($salary_per_hour * $reg_ot * ($salary_settings->reg_ot/100),2),
            'ot_rd' => number_format($salary_per_hour * $ot_rd * ($salary_settings->ot_rd/100),2),
            'ot_spc_day' =>number_format($salary_per_hour * $ot_spc_day * ($salary_settings->ot_spc_day/100),2),
            'reg_hd' => number_format($salary * $reg_hd,2),
            'nd' => number_format($salary_per_hour * $nd * ($salary_settings->nd/100),2),
            'sl' => number_format($salary * $sl,2),
            'vl' => number_format($salary * $vl,2),
            'total' => number_format($total_gross,2)
        ];

            return response()->json(['data' => $data,'status' => 200],200);
        }catch(Exception $e){
            return response()->json(['message' => 'Something went wrong'.$e->getMessage(),'status' => 400],400);
        }



    }

    public function employeeAttendance(Request $request)
    {
            $periods = new DatePeriod(
                new DateTime($request->from),
                new DateInterval('P1D'),
                new DateTime(date('Y-m-d', strtotime($request->to . ' +1 day')))
            );
            $x = [];
            foreach($periods as $value)
            {
                $date = $value->format('Y-m-d');
                $exist = Timekeep::whereDate('in',$date)->where('employee_id',$request->id)->first();
                $holidays = Holidays::whereDate('date',$date)->first();

                if(!$exist) {
                    $timekeep = new Timekeep();
                    $timekeep->employee_id = $request->id;
                    $timekeep->late = '00:00';
                    $timekeep->late = '00:00';
                    $timekeep->ut = '00:00';
                    if($holidays)
                        $timekeep->lwop = 0;
                    else if(Carbon::parse($date)->dayOfWeek == Carbon::SUNDAY || Carbon::parse($date)->dayOfWeek == Carbon::MONDAY)
                        $timekeep->lwop = 0;
                    else
                        $timekeep->lwop = 1;
                    $timekeep->reg_ot = '00:00';
                    $timekeep->ot_rd = '00:00';
                    $timekeep->ot_spc_day = '00:00';
                    $timekeep->reg_hd = '00:00';
                    $timekeep->nd = '00:00';
                    $timekeep->sl = 0;
                    $timekeep->vl = 0;
                    $timekeep->in = $date;
                    $timekeep->remarks = $holidays ? $holidays->title : '';
                    $timekeep->save();
                }

            }



    }

    public function getData()
    {


      return    Timekeep::leftJoin(
                'employees',
                'employees.id',
                '=',
                'timekeeps.employee_id'
            )
                ->select(
                    'timekeeps.in',
                    'timekeeps.out',
                    'timekeeps.created_at',
                    'timekeeps.late',
                    'timekeeps.ut',
                    'timekeeps.lwop',
                    'timekeeps.reg_ot',
                    'timekeeps.ot_rd',
                    'timekeeps.ot_spc_day',
                    'timekeeps.reg_hd',
                    'timekeeps.nd',
                    'timekeeps.sl',
                    'timekeeps.vl',
                    'timekeeps.remarks',
                    'employees.first_name',
                    'employees.last_name',
                    'employees.work_email'
                );

    }

    public function timekeepTable($data)
    {


        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('full_name',function($row){
            return mb_strtoupper($row->last_name).', '.mb_strtoupper($row->first_name);
        })
        ->addColumn('created_at', function ($row) {

            return Carbon::parse($row->in)->dayOfWeek == Carbon::SUNDAY ||
            Carbon::parse($row->in)->dayOfWeek == Carbon::MONDAY
                ? '<span class="text-danger">' .
                    date('l, F d, Y', strtotime($row->in)) .
                    '</span> '
                : date('l, F d, Y', strtotime($row->in));
        })
        ->addColumn('in', function ($row) {

            return $this->hourFormatter(date('H:i', strtotime($row->in)));
        })
        ->addColumn('out', function ($row) {

            return  $this->hourFormatter(date('H:i', strtotime($row->out)));
        })
        ->addColumn('late', function ($row) {
           return $this->hourFormatter($row->late);
        })
        ->addColumn('ut', function ($row) {
           return $this->hourFormatter($row->ut);
        })
        ->addColumn('lwop', function ($row) {
            return $row->lwop != 0 ? $row->lwop : '';
        })
        ->addColumn('reg_ot', function ($row) {
            return $this->hourFormatter($row->reg_ot);
        })
        ->addColumn('ot_rd', function ($row) {

            return $this->hourFormatter($row->ot_rd);
        })
        ->addColumn('ot_spc_day', function ($row) {

            return $this->hourFormatter($row->ot_spc_day);
        })
        ->addColumn('reg_hd', function ($row) {

            return $this->hourFormatter($row->reg_hd);
        })
        ->addColumn('nd', function ($row) {

            return $this->hourFormatter($row->nd);
        })
        ->addColumn('sl', function ($row) {

            return $row->sl != 0 ? $row->sl : '';
        })
        ->addColumn('vl', function ($row) {

            return $row->vl != 0 ? $row->vl : '';
        })
        ->addColumn('total_hour', function ($row) {
            $in = date('H:i',strtotime($row->in));
            $time_in = new DateTime($in);
            $out = date('H:i',strtotime($row->out));
            $time_out = new DateTime($out);
            $interval = $time_in->diff($time_out);
            return $interval->format('%H:%I');

        })
        ->addColumn('remarks', function ($row) {

            return $row->remarks;
        })
        ->addColumn('basic', function ($row) {

            return '';
        })
        ->addColumn('allow', function ($row) {

            return '';
        })
        ->addColumn('total', function ($row) {

            return '';
        })
        ->rawColumns(['full_name', 'created_at', 'in','out','late','ut','lwop','reg_ot','nd','sl','vl','total_hour','date','total','allow','basic'])
        ->make(true);
    }

    public function totalDataTable($data)
    {

        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('date', function ($row) {

            return date('l, F d, Y',strtotime($row->in));
        })
        ->addColumn('time_in', function ($row) {

            return date('H:i',strtotime($row->in));
        })
        ->addColumn('time_out', function ($row) {

            return date('H:i',strtotime($row->out));
        })
        ->addColumn('late', function ($row) {
           return $row->late;
        })
        ->addColumn('ut', function ($row) {
           return $row->ut;
        })
        ->addColumn('lwop', function ($row) {
            return $row->lwop;
        })
        ->addColumn('reg_ot', function ($row) {
            return $row->reg_ot;
        })
        ->addColumn('ot_rd', function ($row) {

            return $row->ot_rd;
        })
        ->addColumn('ot_spc_day', function ($row) {

            return $row->ot_spc_day;
        })
        ->addColumn('reg_hd', function ($row) {

            return $row->reg_hd;
        })
        ->addColumn('night_diff', function ($row) {

            return $row->nd;
        })
        ->addColumn('sl', function ($row) {

            return $row->sl;
        })
        ->addColumn('vl', function ($row) {

            return $row->vl;
        })
        ->addColumn('total_hour', function ($row) {
            $in = date('H:i',strtotime($row->in));
            $time_in = new DateTime($in);
            $out = date('H:i',strtotime($row->out));
            $time_out = new DateTime($out);
            $interval = $time_in->diff($time_out);
            return $interval->format('%H:%I');

        })
        ->addColumn('remarks', function ($row) {

            return $row->remarks;
        })
        ->rawColumns(['name', 'email', 'action','total_hour'])
        ->make(true);
    }


    public function leaveComputation($row){
        $out = date('H:i',strtotime($row->out));
        $in = date('H:i',strtotime($row->in));
        $time = date('H:i',strtotime('12:00'));

        $x = 0;
        if($out <= $time){
            $x = 0.5;
        }
        if($in >= $time){
            $x = 0.5;
        }
        if(!$out){
            $x = 0.5;
        }
        if(!$in)
        {
            $x = 0.5;
        }
        if(!$in && !$out){
            $x = 1;
        }

        return $x;
    }

    public function response()
    {


        $array = [
            ['data' => 'full_name'],
            ['data' => 'created_at'],
            ['data' => 'in'],
            ['data' => 'out'],
            ['data' => 'late'],
            ['data' => 'ut'],
            ['data' => 'lwop'],
            ['data' => 'reg_ot'],
            ['data' => 'ot_rd'],
            ['data' => 'ot_spc_day'],
            ['data' => 'reg_hd'],
            ['data' => 'nd'],
            ['data' => 'sl'],
            ['data' => 'vl'],
            ['data' => 'total_hour'],
            ['data' => 'remarks'],
            ['data' => 'basic'],
            ['data' => 'allow'],
            ['data' => 'total'],
        ];

        return $array;
    }

}
