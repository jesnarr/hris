<?php

namespace App\Http\Livewire\Overtime;

use App\Models\Holidays;
use App\Models\JobInformation;
use App\Models\OvertimeRequest;
use App\Models\OvertimeSignature;
use App\Models\Position;
use App\Models\Timekeep;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormSignature extends Component
{
    use WithFileUploads;
    public $signature;
    public $manager_approval, $head_approval;
    public $head_signature, $manager_signature, $received_signature;
    public $ot_id;
    public $line_manager;
    public $manager;
    public $head_id;

    protected $rules = [
        'manager_approval' => 'required',
        'manager_signature' => 'required',
    ];
    public $department;
    protected $listeners = [
        'getId'
    ];


    public function render()
    {
        $this->manager = OvertimeRequest::find($this->ot_id);
        $job = JobInformation::with(['position', 'position.department'])
            ->where('employee_id', Auth::user()->employee->id)
            ->first();
        $this->department = $job->position->department;
        return view('livewire.overtime.form-signature');
    }

    public function submit()
    {

        $this->validate();
        $id = Auth::user()->employee->id;
        $signature = OvertimeSignature::where('overtime_id', $this->ot_id)->first();

        // if ($this->head_signature) {

        //     $signature->head_approval = $this->head_approval;
        //     $temp =  $id . rand(1000, 9999) . Carbon::now()->format('mdyhis') . '.' . $this->head_signature->getClientOriginalExtension();
        //     $this->head_signature->storeAs('public/signatures', $temp);
        //     $signature->head_signature = config('app.url') . '/storage/signatures/' . $temp;
        //     $signature->head_id = $id;
        //     $signature->head_id_signed_date = date('Y-m-d H:i:s');
        // }
        // if ($this->received_signature) {
        //     $temp =  $id . rand(1000, 9999) . Carbon::now()->format('mdyhis') . '.' . $this->received_signature->getClientOriginalExtension();
        //     $this->received_signature->storeAs('public/signatures', $temp);
        //     $signature->received_signature = config('app.url') . '/storage/signatures/' . $temp;
        //     $signature->received_id = $id;
        //     $signature->hr_signed_date = date('Y-m-d H:i:s');
        // }


        if ($this->manager_signature) {
            $signature->manager_approval = $this->manager_approval;
            $temp =  $id . rand(1000, 9999) . Carbon::now()->format('mdyhis') . '.' . $this->manager_signature->getClientOriginalExtension();
            $this->manager_signature->storeAs('public/signatures', $temp);
            $signature->manager_signature = config('app.url') . '/storage/signatures/' . $temp;
            $signature->manager_id = $id;
            $signature->manager_signed_date = date('Y-m-d H:i:s');
        }


        $signature->save();
        $overtime = OvertimeRequest::find($this->ot_id);
        $overtime->status = $this->manager_approval;
        $overtime->save();

        $in = date('H:i', strtotime($overtime->from));
        $time_in = new DateTime($in);
        $out = date('H:i', strtotime($overtime->to));
        $time_out = new DateTime($out);
        $interval = $time_in->diff($time_out);

        if ($this->manager_approval == 1) {
            $date = date('Y-m-d', strtotime($overtime->date));
            $timekeep = Timekeep::where(function ($query) use ($overtime, $date) {
                $query->where('employee_id', $overtime->employee_id)
                       ->whereDate('in', $date);
            })->first();

            $holiday = Holidays::whereDate('date', $date)->first();

            if ($holiday)
                $timekeep->ot_spc_day = $interval->format('%H:%I');
            else
                $timekeep->reg_ot = $interval->format('%H:%I');

            $timekeep->save();
        }


        $this->dispatchBrowserEvent('update-overtime', [
            'id' => 'approval-overtime'
        ]);
        $this->clearVars();
    }

    public function clearVars()
    {
        $this->manager_signature = null;
        $this->manager_approval = null;
    }

    public function getId($id, $head_id, $line_manager)
    {
        $this->head_id = $head_id;
        $this->ot_id = $id;
        $this->line_manager = $line_manager;
    }
}
