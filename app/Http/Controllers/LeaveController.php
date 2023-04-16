<?php

namespace App\Http\Controllers;

use App\Models\Eligibility;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class LeaveController extends Controller
{
    //

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $leave =   Leave::getLeave();
            return DataTables::of($leave)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    $href = '<a href="/leave/view/' . $row->id . '"><u>' . ucfirst($row->name) . '</u></a>';
                    return $href;
                })
                ->addColumn('entitlement', function ($row) {

                    return $row->entitlement;
                })
                ->addColumn('status', function ($row) {
                    $select = '<select class="form-control" onchange="updateStatus(' . $row->id . ',this.value)">';
                    if ($row->status == 0) {
                        $select .= '<option value="0" selected><span class="badge badge-success">Inactive</span></option>';
                        $select .= '<option value="1"><span class="badge badge-success">Active</span></option>';
                    } else {
                        $select .= '<option value="0"><span class="badge badge-success">Inactive</span></option>';
                        $select .= '<option value="1" selected><span class="badge badge-success">Active</span></option>';
                    }
                    $select .= "</select>";

                    return $select;
                })
                ->addColumn('action', function ($row) {
                //     <button onclick="deleteLeave(' . $row->id . ')"
                //     class="btn-sm mr-2 text-red-500"> <i class="fal fa-trash "></i>
                // </button>
                    return '<div class="row">

                            <button onclick="updateLeave(' . $row->id . ')"
                                class="btn-sm text-blue-500">
                                <i class="fal fa-edit "></i></button>
                        </div>';
                })
                ->rawColumns(['name', 'entitlement', 'status', 'action'])
                ->make(true);
        }

        $response = $this->response();

        $data = [
            'response' => $response,
            'title' => 'Leave'
        ];
        return view('leave.index', $data);
    }

    public function response()
    {
        $array = [
            ["data" => "name"],
            ["data" => "entitlement"],
            ["data" => "status"],
            ["data" => "action"],
        ];
        return $array;
    }

    public function updateStatus(Request $request)
    {
        try {
            Leave::where('id', $request->id)->update([
                'status' => $request->status
            ]);
            return response()->json(['message' => 'Status updated', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to update status', 'status' => 400]);
        }
    }
    public function deleteLeave(Request $request)
    {
        try {
            Leave::find($request->id)->delete();
            return response()->json(['message' => 'Leave successfully deleted', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed so delete leave', 'status' => 400]);
        }
    }

    public function viewLeave($id, Request $request)
    {
        if ($request->ajax()) {
            $attendance = Eligibility::getList($id);
            return DataTables::of($attendance)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {

                    return ucwords($row->first_name.', '.$row->last_name);
                })
                ->addColumn('email', function ($row) {

                    return $row->work_email;
                })
                ->addColumn('action', function ($row) {
                    return '<div class="row">
                                <button
                                    onClick="removeUser(' . $row->id . ')"
                                    class="btn-sm text-red-500">
                                    <i class="fal fa-times "></i></button>
                            </div>';
                })

                ->rawColumns(['name', 'email', 'action'])
                ->make(true);
        }

        $response = $this->res();
        $leave = Leave::find($id);
        $data  = [
            'title' => 'Leave',
            'leave' => $leave,
            'response' => $response,
            // 'user' => $user
        ];
        return view('leave.view', $data);
    }


    public function res()
    {
        $array = [
            ["data" => "name"],
            ["data" => "email"],
            ["data" => "action"],
        ];
        return $array;
    }



    public function updateLeaveEligiblity(Request $request)
    {
        try {


            $leave = Leave::find($request->leave_id);
            $leave->eligibility = $request->value;
            $leave->save();

            if ($request->value == 1) {
                $employee = Employee::get();
                foreach ($employee as $user) {

                    $eligibility = Eligibility::where('leave_id',$request->leave_id)->where('user_id',$user->id)->first();
                    if(!$eligibility){
                        $eg = new Eligibility();
                        $eg->user_id = $user->id;
                        $eg->leave_id =  $leave->id;
                        $eg->counter = $leave->entitlement;
                        $eg->save();
                    }
                }
            } else if ($request->value == 2) {
                $employee = Employee::leftJoin('job_information as j', 'j.employee_id', '=', 'employees.id')
                    ->where('j.employee_type_id', 1)
                    ->get();

                foreach ($employee as $user) {
                    $eligibility = Eligibility::where('leave_id',$request->leave_id)->where('user_id',$user->id)->first();
                    if(!$eligibility){
                        $eg = new Eligibility();
                        $eg->user_id = $user->id;
                        $eg->leave_id =  $leave->id;
                        $eg->counter = $leave->entitlement;
                        $eg->save();
                    }
                }
            } else {
                Eligibility::where('leave_id', $request->id)->delete();
            }
            return response()->json(['message' => 'Eligibility Updated', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to update eligibility'.$e->getMessage(), 'status' => 400]);
        }
    }
}
