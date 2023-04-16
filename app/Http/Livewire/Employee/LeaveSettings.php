<?php

namespace App\Http\Livewire\Employee;

use App\Models\Eligibility;
use App\Models\JobInformation;
use App\Models\Leave;
use DateTime;
use Exception;
use Livewire\Component;

class LeaveSettings extends Component
{
    public $leaves;
    public $leave = [];
    public $employee;
    public $job_information;
    protected $listeners = [
        'leave-refresh' => '$refresh'
    ];
    public function render()
    {
        $user = JobInformation::where('employee_id',$this->employee->id)->first();
        if ($user->employee_status_id == 2) {
            $this->leaves = Leave::where('status', 1)->where('type',0)->orderBy('name', 'asc')->get();
        } else {
            $date = date('Y-m-d');
            $today = new DateTime($date);
            $date_hired = new DateTime($user->join_date);
            $interval = $today->diff($date_hired);
            $total = (int)$interval->format('%Y');
            if($total >= 2){
                $this->leaves = Leave::where('status', 1)->orderBy('name', 'asc')->get();
            }else{
                $this->leaves = Leave::where(function($query){
                    $query->where('id','!=',4)
                          ->where('id','!=',8);
                })
                ->where('status',1)
                ->get();
            }
        }
        return view('livewire.employee.leave-settings');
    }

    public function mount()
    {
        $eligibilities = Eligibility::where('user_id', $this->employee->id)->get();
        foreach ($eligibilities as $eg) {
            $this->leave[] = $eg->leave_id;
        };
    }

    public function submit()
    {
        try {
            $job = JobInformation::where('employee_id', $this->employee->id)->first();
            $total = 0;
            if ($job->regularization_date) {
                $date = date('m', strtotime($job->regularization_date));
                $total = 12 - $date;
            }
            $list = Eligibility::where('user_id', $this->employee->id)->get();
            $arr = [];
            foreach ($list as $l) {
                if (in_array($l->leave_id, $this->leave)) {
                    foreach ($this->leave as $leave) {
                        $leaves = Leave::find($leave);
                        $eligibilities = Eligibility::where('user_id', $this->employee->id)->where('leave_id', $leave)->first();
                        if (!$eligibilities) {
                            $eligibilities = new Eligibility();
                            $eligibilities->user_id = $this->employee->id;
                            $eligibilities->leave_id = $leave;
                            if ($leaves->id == 6 || $leaves->id == 1) {
                                $eligibilities->counter = ($leaves->entitlement / 12) * $total;
                            } else {
                                $eligibilities->counter = $leaves->entitlement;
                            }
                            $eligibilities->save();
                        }
                    }
                } else {
                    Eligibility::where('user_id', $this->employee->id)->where('leave_id', $l->leave_id)->delete();
                }
            }

            // 4 1 2
            // 4 1



            $this->clearVars();
            return $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'success',
                'message' => 'Save Successfully.'
            ]);
        } catch (Exception $e) {
            return $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function clearVars()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
