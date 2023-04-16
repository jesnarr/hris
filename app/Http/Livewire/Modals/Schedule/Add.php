<?php

namespace App\Http\Livewire\Modals\Schedule;

use App\Models\Schedule;
use Livewire\Component;

class Add extends Component
{

    public $days;
    public $time;
    public $from;
    public $to;
    public $day;
    public $schedule_id;

    protected $listeners = [
        'add-schedule' => 'addSchedule'
    ];

    public function render()
    {
        return view('livewire.modals.schedule.add');
    }

    public function addSchedule($id)
    {
        $this->clearVars();
        if ($id) {

            $schedule = Schedule::find($id);
            $this->day = $schedule->day;
            $this->from = $schedule->from;
            $this->to = $schedule->to;
            $this->schedule_id = $id;
        }

    }

    public function clearVars()
    {
        $this->reset([
            'from',
            'to',
            'day',
        ]);
    }
}
