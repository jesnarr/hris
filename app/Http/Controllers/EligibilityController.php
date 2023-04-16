<?php

namespace App\Http\Controllers;

use App\Models\Eligibility;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\LeaveRequest;
use App\Models\Timekeep;
use App\Models\User;
use DateInterval;
use DatePeriod;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EligibilityController extends Controller
{
    //

    public function saveUser(Request $request)
    {
        try {
            $leave = Leave::find($request->leave_id);
            $users = Employee::where('work_email', $request->email)->first();

            $user = Eligibility::where('user_id',$users->id)->first();
            if(!$user){
                $user = new Eligibility();
                $user->leave_id = $request->leave_id;
                $user->user_id = $users->id;
                $user->counter = $leave->entitlement;
                $user->save();
            }

            return response()->json(['message' => 'User added', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to add user', 'status' => 400]);
        }
    }

    public function deleteUser(Request $request)
    {
        try {
            Eligibility::where('user_id', $request->id)->delete();
            return response()->json(['message' => 'User removed', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to remove user', 'status' => 400]);
        }
    }

    public function updateStatus(Request $request)
    {
        try {

            $leave = LeaveRequest::find($request->id);
            $eg = Eligibility::where('user_id', $request->user_id)
                ->where('leave_id', $request->leave_id)
                ->first();
            $leave->approved_id = Auth::user()->employee->id;
            if ($eg->counter < $request->total) {
                $leave->status = 2;
                $leave->save();
                return response()->json(['message' => 'Request cancelled, Not enough credits', 'status' => 400]);
            } else {
                $leave->status = 1;

                $getType = Leave::find($request->leave_id);
                $timekeep = Timekeep::where('employee_id', $request->user_id)
                    ->whereDate('in', $leave->from)->first() ?
                    Timekeep::where('employee_id', $request->user_id)
                    ->whereDate('in', $leave->from)->first()
                    : new Timekeep();

            if($leave->type == 1){
                if(!$timekeep){
                    $timekeep->in = $leave->from;
                    $timekeep->out = $leave->to;

                }
                if ($getType->type == 0) {
                    $timekeep->lwop = $leave->total < 1 && $leave->total >= 0.44 ? 0.5 : $leave->total;
                } else {
                    if ($timekeep->leave_id == 6) {
                        $timekeep->sl = $leave->total < 1 && $leave->total >= 0.44 ? 0.5 : $leave->total;
                    } else if ($timekeep) {
                        $timekeep->vl = $leave->total < 1 && $leave->total >= 0.44 ? 0.5 : $leave->total;
                    }
                }

                $timekeep->employee_id = $request->user_id;
                $timekeep->remarks = $leave->note;
                $timekeep->save();
            }else{
                    $periods = new DatePeriod(
                        new DateTime($leave->from),
                        new DateInterval('P1D'),
                        new DateTime(date('Y-m-d', strtotime($leave->to . ' +1 day')))
                    );

                    foreach($periods as $period){
                        $timekeep =  new Timekeep();
                        $timekeep->in =  $period->format('Y-m-d H:i');
                        if ($getType->type == 0) {
                            $timekeep->lwop = 1;
                        } else {
                            if ($timekeep->leave_id == 6) {
                                $timekeep->sl = 1;
                            } else if ($timekeep) {
                                $timekeep->vl =1;
                            }
                        }
                        $timekeep->employee_id = $request->user_id;
                        $timekeep->remarks = $leave->note;
                        $timekeep->save();
                    }


            }
            }
            $total = $eg->counter - $request->total;
            $eg->counter = $total;
            $eg->save();
            $leave->save();


            // $name = Auth::user()->employee->last_name.', '.Auth::user()->employee->first_name;
            // $emp = Employee::find($request->user_id);
            // $email = $emp->work_email;
            // $data = ['name' => ucwords($name),'status' => $leave_status];

            // Mail::send('emails.internal.status', $data, function ($mail) use ($email) {
            //     $mail->from('test@gmail.com', 'gmail');
            //     $mail->subject("Leave Request");
            //     $mail->to($email);
            // });

            return response()->json(['message' => 'Request Approved', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to approve request' . $e->getMessage(), 'status' => 400]);
        }
    }
    public function leaveComputation($time_in, $time_out)
    {
        $out = date('H:i', strtotime($time_in));
        $in = date('H:i', strtotime($time_out));
        $time = date('H:i', strtotime('12:00'));
        $x = 0;
        if ($out <= $time && $in >= $time) {
            $x = 0.5;
            return $x;
        }
    }
}
