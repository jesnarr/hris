<?php

namespace App\Http\Livewire\Dtr;

use DateTime;
use DatePeriod;
use DateInterval;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Holidays;
use App\Models\Timekeep;
use Illuminate\Support\Facades\Auth;

class FilterLivewire extends Component
{

    public $range = [];
    public $start,$end;


    public function render()
    {
        $now = Carbon::now();
        $this->start = $now->startOfWeek(Carbon::TUESDAY)->format('Y-m-d');
        $this->end = $now->endOfWeek(Carbon::SATURDAY)->format('Y-m-d');
        return view('livewire.dtr.filter-livewire');
    }

    public function UpdatedRange()
    {
        $this->employeeAttendance();
        $this->dispatchBrowserEvent('filter-dtr-table', [
            'from' => $this->range[0] ?? null,
            'to' => $this->range[1] ?? null,
        ]);

    }


    public function employeeAttendance()
    {
            $periods = new DatePeriod(
                new DateTime($this->range[0]),
                new DateInterval('P1D'),
                new DateTime(date('Y-m-d', strtotime($this->range[1] . ' +1 day')))
            );
            $x = [];

            $employees = Employee::leftJoin('job_information', 'employees.id', '=', 'job_information.employee_id')
            ->where('job_information.employee_status_id','!=',5)
            ->select('employees.id')
            ->get();
            foreach($employees as $emp){
                foreach($periods as $value)
                {
                    $date = $value->format('Y-m-d');
                    $exist = Timekeep::whereDate('in',$date)->where('employee_id',$emp->id)->first();
                    $holidays = Holidays::whereDate('date',$date)->first();

                    if(!$exist) {
                        $timekeep = new Timekeep();
                        $timekeep->employee_id = $emp->id;
                        $timekeep->late = '00:00';
                        $timekeep->late = '00:00';
                        $timekeep->ut = '00:00';
                        if($holidays)
                            $timekeep->lwop = 0;
                        else if(Carbon::parse($date)->dayOfWeek == Carbon::SUNDAY || Carbon::parse($date)->dayOfWeek == Carbon::MONDAY)
                            $timekeep->lwop = 0;
                        else
                            $timekeep->lwop = 1;
                        $timekeep->reg_ot = '00:00';
                        $timekeep->ot_rd = '00:00';
                        $timekeep->ot_spc_day = '00:00';
                        $timekeep->reg_hd = '00:00';
                        $timekeep->nd = '00:00';
                        $timekeep->sl = 0;
                        $timekeep->vl = 0;
                        $timekeep->in = $date;
                        $timekeep->remarks = $holidays ? $holidays->title : '';
                        $timekeep->save();
                    }

                }
            }



    }
}
