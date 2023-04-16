<?php

namespace App\Http\Livewire\Schedule;

use Livewire\Component;

class FormLivewire extends Component
{
    public $standard;
    public $monday_hr, $tuesday_hr, $wednesday_hr, $thursday_hr, $friday_hr, $saturday_hr, $sunday_hr;
    public $monday_start;
    public $times = [];
    public $check = [];
    public $breaktime = [];
    public $breaktime_start = [];
    public $breaktime_end = [];
    public $day_start = [];
    public $day_end = [];
    public $schedule = [];
    public $array = [];

    public $days = [
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday',
    ];
    protected $rules = [
        'monday_hr' => 'required',
        'tuesday_hr' => 'required',
        'wednesday_hr' => 'required',
        'thursday_hr' => 'required',
        'friday_hr' => 'required',
        'saturday_hr' => 'required',
        'sunday_hr' => 'required'
    ];

    public function mount()
    {

        for ($i = 0; $i <= 6; $i++) {
            $this->schedule[] = [
                'check' => true,
                'day_start' => '',
                'day_end' => '',
                'breaktime' =>false ,
                'breaktime_start' => '',
                'breaktime_end' => '',
            ];
        }

    }
    public function render()
    {
        for ($i = 0; $i <= 23; $i++) {
            $this->times[$i . '.00'] = $i . ':00';
            $this->times[$i . '.30'] = $i . ':30';
        }

        return view('livewire.schedule.form-livewire');
    }

    public function updatedSchedule()
    {
        // dd($this->schedule[0]['check']);
    }


    public function UpdatedStandard()
    {
        // dd($this->standard);
    }

    public function UpdatedTest()
    {
        // dd($this->check[0]);
    }

    public function save(){
        dd($this->standard);
        // dd($this->schedule[0]['day_start']);
    }
}
