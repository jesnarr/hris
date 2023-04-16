<?php

namespace App\Http\Livewire\Modals\Leave;

use App\Models\Employee;
use App\Models\Leave;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Request extends Component
{
    public $leave;
    public $leaves;
    public $from;
    public $to;
    public $total_time;
    public $request_type;
    public $from_multi;
    public $to_multi;
    public $total_day;
    public $file;
    public $note;
    public $employee = [];
    public $single_date;
    public $users;
    public $user;


    protected $listeners = [
        'clearVars'
    ];
    protected $rules = [
        'leave' => 'required',
        'request_type' => 'required',
        'single_date' => "required",
        'from_multi' => 'required',
        'to_multi' => 'required'

    ];
    public $times =
    [
        '00:00' => '00:00',
        '01:00' => '01:00',
        '02:00' => '02:00',
        '03:00' => '03:00',
        '04:00' => '04:00',
        '05:00' => '05:00',
        '06:00' => '06:00',
        '07:00' => '07:00',
        '08:00' => '08:00',
        '09:00' => '09:00',
        '10:00' => '10:00',
        '11:00' => '11:00',
        '12:00' => '12:00',
        '13:00' => '13:00',
        '14:00' => '14:00',
        '15:00' => '15:00',
        '16:00' => '16:00',
        '17:00' => '17:00',
        '18:00' => '18:00',
        '19:00' => '19:00',
        '20:00' => '20:00',
        '21:00' => '21:00',
        '22:00' => '22:00',
        '23:00' => '23:00',
        '24:00' => '24:00',
    ];

    protected $messages = [
        'leave.required' => 'Type name is required',
        'request_type.required' => 'Type of leave is required',
        'single_date.required' => 'Type of leave is required',
        'from_multi.required' => 'Type of leave is required',
        'to_multi.required' => 'Type of leave is required',

    ];

    public function render()
    {
        $this->leaves =  Leave::selectedLeave(Auth::user()->employee->id);
        $this->users = Employee::get();
        return view('livewire.modals.leave.request');
    }


    public function submitRequest(){
        $this->validate();



        dd($this->from_multi.' '.$this->to_multi);
    }


    public function clearVars(){
        $this->reset([
             'leave',
             'leaves',
             'from',
             'to',
        ]);
    }

}
