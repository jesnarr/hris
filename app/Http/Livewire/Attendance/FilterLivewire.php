<?php

namespace App\Http\Livewire\Attendance;

use Livewire\Component;

class FilterLivewire extends Component
{
    public $filter, $month;
    public $range = [];
    public $months = [
        '1'=>'January',
        '2'=>'February',
        '3'=>'March',
        '4'=>'April',
        '5'=>'May',
        '6'=>'June',
        '7'=>'July',
        '8'=>'August',
        '9'=>'September',
        '10'=>'October',
        '11'=>'November',
        '12'=>'December'
    ];
    public function render()
    {
        return view('livewire.attendance.filter-livewire');
    }

    public function select()
    {
        $this->dispatchBrowserEvent(
            'refresh-attendance-datatable',
            [
                'filter' => 1,
                'month' => $this->month,
                'from' => $this->range[0] ?? null,
                'to' => $this->range[1] ?? null,
            ]
        );

    }

    public function UpdatedRange()
    {

        $this->dispatchBrowserEvent('refresh-attendance-datatable', [
            'filter' => 2,
            'month' => $this->month,
            'from' => $this->range[0] ?? null,
            'to' => $this->range[1] ?? null,
        ]);

    }

}
