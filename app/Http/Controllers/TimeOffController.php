<?php

namespace App\Http\Controllers;

use App\Models\Eligibility;
use App\Models\Employee;
use App\Models\JobInformation;
use App\Models\Leave;
use App\Models\LeaveRequest;
use DateInterval;
use DatePeriod;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class TimeOffController extends Controller
{
    //

    public function index(Request $request)
    {

        $current = url()->current();
        if ($request->ajax()) {
            if ($current == url('timeoff')) {
                $leave =  LeaveRequest::getTimeOff(Auth::user()->employee->id);
            } else {
                $leave =  LeaveRequest::getTeamOff(Auth::user()->employee->id);
            }

            return  $this->getRequests($leave);
        }

        $response = $this->resLeave();
        $available_leave = Leave::selectedLeave(Auth::user()->employee->id);

        // dd($available_leave);
        // dd($available_leave);
        $data = [
            'available_leave' => $available_leave,
            'response' => $response,
            'title' => $current == url('timeoff') ? 'My Requests' : 'Team Requests',
            'current' => $current,
        ];

        return view('leave.request', $data);
    }

    public function resLeave()
    {
        $array = [
            ['data' => 'from'],
            ['data' => 'to'],
            ['data' => 'total'],
            ['data' => 'type'],
            ['data' => 'attachment'],
            ['data' => 'status'],
            ['data' => 'approved_by'],
            ['data' => 'action']
        ];
        return $array;
    }
    public function getRequests($leave)
    {
        $current = url()->current();
        return DataTables::of($leave)
            ->addIndexColumn()
            ->addColumn('from', function ($row) {
                return date('d M Y', strtotime($row->from));
            })
            ->addColumn('to', function ($row) {
                // ->select('l.from','l.to','l.attachment','l.status','l.leave_id','l.note','l.total','a.approved_name','u.name')
                return date('d M Y', strtotime($row->to));
            })
            ->addColumn('total', function ($row) {
                $day = $row->total . ' Days ';
                if ($row->leave_type == 1) {
                    $day .= date('g:i', strtotime($row->from)) . ' - ' . date('g:i', strtotime($row->to));
                }
                return $day;
            })
            ->addColumn('type', function ($row) {
                return ucwords($row->leave_name);
            })
            ->addColumn('attachment', function ($row) {

                $file = $row->attachment ? '<a href="' . $row->attachment . '" target="_blank"><span class="badge badge-secondary">View</span></a>' : '';
                return $file;
            })
            ->addColumn('status', function ($row) {
                $status = '';
                if ($row->status == 2)
                    $status = '<span class="badge badge-primary">Cancelled</span>';
                else if ($row->status == 1)
                    $status = '<span class="badge badge-success">Approved</span>';
                else if ($row->status == 3)
                    $status = '<span class="badge badge-danger">Rejected</span>';
                // else if ($row->status == 4)
                //     $status = '<span class="badge badge-info">Waiting for final approval</span>';
                else
                    $status = '<span class="badge badge-warning">Pending</span>';
                return $status;
            })
            ->addColumn('approved_by', function ($row) {
                return $row->name;
                // '<a href="/employee/'.$row->user_id.'" target="_blank">'.$row->name.'</a>';
            })
            ->addColumn('action', function ($row) use ($current) {
                $button = '';
                if ($current == url('timeoff')) {
                    if ($row->status != 2) {
                        $button = '<button
                            onClick="uploadFile(' . $row->id . ')"
                            class="btn-sm text-white-500 font-weight-500">
                            <i class="fal fa-file "></i>
                        </button>';
                    }
                    if ($row->status == 0)
                        $button .= '<button
                            onClick="cancelRequest(' . $row->id . ',2)"
                            class="btn-sm text-red-500 " title="Cancel request">
                            <i class="fal fa-times"></i>
                            </button>';
                } else {

                    if ($row->status  == 0) {
                        $day = $row->total;
                        $button = '<button
                            onClick="approveRequest(' . $row->id . ',' . $row->user_id . ',' . $row->leave_id . ',' . $day . ',1)"
                            class="btn-sm text-white-500 font-blue-500" title="Approve request">
                            <i class="fal fa-check "></i>
                        </button>';

                        $button .= '<button
                            onClick="cancelRequest(' . $row->id . ',3)"
                            class="btn-sm text-red-500 " title="Reject request">
                            <i class="fal fa-times"></i>
                            </button>';
                    }
                }

                return '<div class="row">' . $button . '</div>';
            })

            ->rawColumns(['from', 'to', 'total', 'status', 'type', 'attachment', 'status', 'action', 'approved_by'])
            ->make(true);
    }



    public function submitRequest(Request $request)
    {

        $arr = ['note', 'leave_id', 'leave_type', 'members'];

        try {
            $user_request = new LeaveRequest();
            $leave = Eligibility::where(array('user_id' => Auth::user()->employee->id, 'leave_id' => $request->leave_id))->first();

            $counter = $leave->counter;
            $date_to = date('Y-m-d', strtotime($request->to));
            $date_from = date('Y-m-d', strtotime($request->from));

            // get all dates
            $period = new DatePeriod(
                new DateTime($date_from),
                new DateInterval('P1D'),
                new DateTime($date_to)
            );

            // validate type of leave (single / multi day)
            $count = 0;
            if ($request->total <= 0)
                return response()->json(['message' => 'You can request a minimum 1h/1d based on your work schedule', 'status' => 400]);

            if ($request->leave_type == 1) {

                $counter_valid = number_format((($counter * 9) - $request->total) / 9, 2);
                $count = $counter - $counter_valid;
                if ($counter_valid <= 0)
                    return response()->json(['message' => 'You do not have enough credit left in your account.', 'status' => 400]);
            } else {
                $y = 0;
                foreach ($period as $k => $v) {
                    $x = date('w', strtotime($v->format('Y-m-d')));
                    if ($x == 1 || $x == 0) {
                        $y++;
                    }
                }
                $counter_valid = $counter - ($request->total - $y);
                $count = $request->total - $y;
                if ($counter_valid < 0)
                    return response()->json(['message' => 'You do not have enough credit left in your account', 'status' => 400]);
            }

            // insert file
            if ($request->file('attachment')) {
                $destinationPath = 'storage/application/leave/' . Auth::user()->employee->id;
                $c = $request->file('attachment');
                $attachment = time() . '.' . $c->getClientOriginalExtension();
                $c->move($destinationPath, $attachment);
                $user_request->attachment = $destinationPath . '/' . $attachment;
            }
            foreach ($arr as $field) {
                if (Schema::hasColumn($user_request->getTable(), $field)) {
                    $user_request->$field = $request->$field;
                }
            }
            $user_request->user_id = Auth::user()->employee->id;
            $user_request->total = $count;
            $user_request->to = date('Y-m-d g:i', strtotime($request->to));
            $user_request->from = date('Y-m-d g:i', strtotime($request->from));
            $user_request->save();

            $line_manager = Employee::leftJoin('job_information as j', 'j.line_manager_id', '=', 'employees.id')
                ->where('j.employee_id', Auth::user()->employee->id)
                ->select('employees.work_email')
                ->first();

            // email line manager and other members
            $name = Auth::user()->employee->last_name . ', ' . Auth::user()->employee->first_name;
            $email = '';
            if ($line_manager) {
                $email = $line_manager->work_email;
            }
            $data = [
                'name' => ucwords($name),
                'from' => $date_from,
                'to' => $date_to,
                'note' => $request->note,
                'leave_type' => $request->leave_type
            ];
            $members = [];
            if($request->members){
                $members = explode(',', $request->members);
            }

            return response()->json(['message' => 'Request submitted', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to submit request' . $e->getMessage(), 'status' => 400]);
        }
    }

    public function updateRequest(Request $request)
    {
        try {
            if ($request->status == 3) {
                LeaveRequest::where('id', $request->id)->update([
                    'status' => 3
                ]);
            } else {
                LeaveRequest::where('id', $request->id)->update([
                    'status' => 2
                ]);
            }

            return response()->json(['message' => 'Request cancelled', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to cancel request', 'status' => 400]);
        }
    }

    public function uploadFile(Request $request)
    {
        try {

            $u = LeaveRequest::find($request->id);
            $destinationPath = 'storage/application/leave/' . Auth::user()->employee->id;
            $c = $request->file('attachment');
            $attachment = time() . '.' . $c->getClientOriginalExtension();
            $c->move($destinationPath, $attachment);
            $u->attachment = $destinationPath . '/' . $attachment;
            $u->save();

            return response()->json(['message' => 'Upload success', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Upload Failed', 'status' => 400]);
        }
    }
}
