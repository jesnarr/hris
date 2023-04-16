<?php

namespace App\Http\Controllers;

use App\Models\OvertimeRequest;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class OvertimeController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->getOvertime();
            return $this->getTable($data);
        }

        $data = [
            'response' => $this->response(),
            'title' => 'Overtime Request',
        ];
        return view('overtime.list', $data);
    }


    public function response()
    {
        $array = [
            ['data' => 'full_name'],
            ['data' => 'date'],
            ['data' => 'from'],
            ['data' => 'to'],
            ['data' => 'total_hours'],
            ['data' => 'purpose'],
            ['data' => 'client'],
            ['data' => 'detailed'],
            ['data' => 'head_signature'],
            ['data' => 'line_manager'],
            ['data' => 'status'],


        ];
        if(url()->current() == url('overtime/list')){
            $array[] =  ['data' => 'action'];
        }


        return $array;
    }

    public function getOvertime()
    {
        return OvertimeRequest::leftJoin('job_information as j','j.employee_id','=','overtime_requests.employee_id')
            ->leftJoin('employees as e','e.id','=','overtime_requests.employee_id')
            ->leftJoin('overtime_signatures as os','os.overtime_id','=','overtime_requests.id')
            ->where(function($query){
                if(url()->current() == url('overtime/list')){
                    $query->where('j.line_manager_id',Auth::user()->id)
                          ->orWhere('j.immediate_head_id',Auth::user()->id);
                }else{
                    $query->where('e.id',Auth::user()->id);
                }
            })
            ->select('e.first_name','e.last_name','overtime_requests.date','overtime_requests.from','overtime_requests.to',
            'overtime_requests.purpose','overtime_requests.client','overtime_requests.detailed',
            'os.head_signature','os.manager_signature',
            'overtime_requests.status','overtime_requests.id','j.line_manager_id','j.immediate_head_id','j.employee_id')
            ->get();
    }

    public function getOvertimeList()
    {
        return OvertimeRequest::leftJoin('job_information as j','j.employee_id','=','overtime_requests.employee_id')
            ->leftJoin('employees as e','e.id','=','overtime_requests.employee_id')
            ->leftJoin('overtime_signatures as os','os.overtime_id','=','overtime_requests.id')
            ->where(function($query){
                    $query->where('j.line_manager_id',Auth::user()->id)
                          ->orWhere('j.immediate_head_id',Auth::user()->id);
            })
            ->where('overtime_requests.status',0)
            ->select('e.first_name','e.last_name','overtime_requests.date','overtime_requests.from','overtime_requests.to',
            'overtime_requests.purpose','overtime_requests.client','overtime_requests.detailed',
            'os.head_signature','os.manager_signature',
            'overtime_requests.status','overtime_requests.id','j.line_manager_id','j.immediate_head_id','j.employee_id')
            ->get();
    }
    public function getTable($data)
    {
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('full_name', function ($row) {
                return $row->last_name.', '.$row->first_name;
            })
            ->addColumn('date', function ($row) {
                return date('F d, Y', strtotime($row->date));
            })
            ->addColumn('from', function ($row) {
                return isset($row->from)
                    ? date('g:i A', strtotime($row->from))
                    : '';
            })
            ->addColumn('to', function ($row) {
                return isset($row->to)
                    ? date('g:i A', strtotime($row->to))
                    : '';
            })
            ->addColumn('total_hours', function ($row) {
                $from = new DateTime($row->from);
                $to = new DateTime($row->to);
                $interval = $from->diff($to);
                return $interval->format('%h') . 'h';
            })
            ->addColumn('purpose', function ($row) {
                return $row->purpose;
            })
            ->addColumn('client', function ($row) {
                return $row->client;
            })
            ->addColumn('detailed', function ($row) {
                return $row->detailed;
            })
            ->addColumn('status', function ($row) {
                $status = '';
                if ($row->status == 0) {
                    $status =
                        "<span class='badge badge-warning'>Pending</span>";
                } elseif ($row->status == 1) {
                    $status =
                        "<span class='badge badge-success'>Approved</span>";
                } else {
                    $status =
                        "<span class='badge badge-danger'>Rejected</span>";
                }
                return $status;
            })
            ->addColumn('head_signature', function ($row) {
                $span = '<span class="badge badge-primary">Pending</span>';
                if($row->head_signature)
                  $span = '<span class="badge badge-secondary">Done</span>';
                return $span;
            })
            ->addColumn('line_manager', function ($row) {
                $span = '<span class="badge badge-primary">Pending</span>';
                if($row->manager_signature)
                  $span = '<span class="badge badge-secondary">Done</span>';
                return $span;
            })
            ->addColumn('action', function ($row) {

                $callbacks = '';
                if(Auth::user()->employee->id == $row->immediate_head_id)
                    $callbacks = "updateModal('$row->id','$row->immediate_head_id',1)";
                else if(Auth::user()->employee->id == $row->line_manager_id)
                    $callbacks = "updateModal('$row->id','$row->line_manager_id',2)";

                $button =  '<button onclick="'.$callbacks.'" value="update-overtime" class="badge badge-success">Approval</button>';

                return $button;
            })
            ->rawColumns(['date', 'from', 'to', 'status','line_manager','head_signature', 'action','full_name'])
            ->make(true);
    }

    public function view($id)
    {
        $data = [
            'title' => 'View Overtime',
        ];
        return view('overtime.view', $data);
    }
}
