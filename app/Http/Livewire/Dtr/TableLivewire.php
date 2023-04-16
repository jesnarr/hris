<?php

namespace App\Http\Livewire\Dtr;

use DateTime;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Holidays;
use App\Models\Timekeep;
use App\Models\EmployeeRates;
use App\Models\SalarySettings;
use DateInterval;
use DatePeriod;

class TableLivewire extends Component
{
    public $dtr;
    public $from, $to;
    public $counter = 0;
    public $data;
    public $name;

    //arrays
    public $lates = [];
    public $undertimes = [];
    public $overtimes = [];
    public $lwithoutpay = [];
    public $reg_overtimes = [];
    public $ot_restday = [];
    public $ot_special_day = [];
    public $reg_holiday = [];
    public $nightdiff = [];
    public $sickleave = [];
    public $vacationleave = [];
    public $total_array = [];
    public $names = [];

    public $employees_id = [];

    public $total_hours = [];

    protected $listeners = ['filterDTR', 'refresh-dtr' => '$refresh'];

    public function mount()
    {
        $this->filterDTR();
    }
    public function render()
    {

        return view('livewire.dtr.table-livewire');
    }

    public function calculate($data)
    {
        $array = [];
        foreach ($data as $key => $value) {
            $x = 0;
            foreach ($value as $val) {
                $x += str_contains($val, ':')
                    ? floatval(str_replace(':', '.', $val))
                    : $val;
            }
            $array[$key] = $x;
        }
        return $array;
    }

    public function hourFormatter($data)
    {
        return $data != '00:00' ? $data : '';
    }
    public function numberFormatter($data)
    {
        return number_format($data, 2);
    }

    public function computeGross($data)
    {
        $array = [];

        $salary_settings = SalarySettings::first();

        foreach ($data as $key => $id) {
            $rates = EmployeeRates::where('employee_id', $id)->first();

            // --employee rates & salary--//
            $rate = isset($salary_settings->rate_per_day)
                ? $salary_settings->rate_per_day
                : 0;
            $basic_pay = isset($rates->basic_pay) ? $rates->basic_pay : 0;
            $salary = $rate != 0 ? $basic_pay / $rate : 0;
            $salary_per_hour = $salary / 8;
            // -- end -- //

            // --allowance computation -- //
            $allowance = $allowance_per_cutoff = $allowance_per_day = $allowance_per_hr = $a_per_cutoff = 0;

            if (isset($rates->allowance) && $rates->allowance != 0) {
                $allowance = $rates->allowance;
                $allowance_per_cutoff = $allowance / 2;
                $allowance_per_day = $allowance_per_cutoff / $rate;
                $allowance_per_hr = $allowance_per_day / 8;

                $a_per_cutoff =
                    $allowance_per_cutoff -
                    ($this->lates[$key] + $this->undertimes[$key]) *
                        $allowance_per_hr -
                    $this->lwithoutpay[$key] * $allowance_per_day;
            }
            //  -- end allowance -- //

            // -- deductions -- //
            $deductions =
                $salary_per_hour * $this->lates[$key] +
                $salary_per_hour * $this->undertimes[$key] +
                $salary * $this->lwithoutpay[$key];
            $per_cut_off = $basic_pay / 2;
            // -- end deductions -- //

            // -- adjustments -- //
            $adjustments =
                $salary_per_hour *
                    $this->reg_overtimes[$key] *
                    ($salary_settings->reg_ot / 100) +
                $salary_per_hour *
                    $this->ot_restday[$key] *
                    ($salary_settings->ot_rd / 100) +
                $salary_per_hour *
                    $this->ot_special_day[$key] *
                    ($salary_settings->ot_spc_day / 100) +
                $salary_per_hour *
                    $this->nightdiff[$key] *
                    ($salary_settings->nd / 100);
            //  -- adjustments -- //

            // -- get total
            $basic = $per_cut_off - $deductions + $adjustments + $a_per_cutoff;
            $total_gross = $allowance + $basic;

            // -- display to view
            $array[$key] = [
                'late' => $this->numberFormatter(
                    $salary_per_hour * $this->lates[$key]
                ),
                'ut' => $this->numberFormatter(
                    $salary_per_hour * $this->undertimes[$key]
                ),
                'lwop' => $this->numberFormatter(
                    $salary * $this->lwithoutpay[$key]
                ),
                'reg_ot' => $this->numberFormatter(
                    $salary_per_hour *
                        $this->reg_overtimes[$key] *
                        ($salary_settings->reg_ot / 100)
                ),
                'ot_rd' => $this->numberFormatter(
                    $salary_per_hour *
                        $this->ot_restday[$key] *
                        ($salary_settings->ot_rd / 100)
                ),
                'ot_spc_day' => $this->numberFormatter(
                    $salary_per_hour *
                        $this->ot_special_day[$key] *
                        ($salary_settings->ot_spc_day / 100)
                ),
                'reg_hd' => $this->numberFormatter(
                    $salary * $this->reg_holiday[$key]
                ),
                'nd' => $this->numberFormatter(
                    $salary_per_hour *
                        $this->nightdiff[$key] *
                        ($salary_settings->nd / 100)
                ),
                'sl' => $this->numberFormatter(
                    $salary * $this->sickleave[$key]
                ),
                'vl' => $this->numberFormatter(
                    $salary * $this->vacationleave[$key]
                ),
                'basic' => $this->numberFormatter($basic),
                'allowance' => $this->numberFormatter($allowance),
                'total' => $this->numberFormatter($total_gross),
                // 'name '=> $name
            ];
        }
        return $array;
    }

    public function computeTotalHours($data)
    {
        $array = [];
        foreach ($data as $key => $value) {
            $x = 0;
            foreach ($value as $val) {
                $in = date('H:i', strtotime($val['in']));
                $time_in = new DateTime($in);
                $out = date('H:i', strtotime($val['out']));
                $time_out = new DateTime($out);
                $interval = $time_in->diff($time_out);
                $array[$key] = $interval->format('%H:%I');
            }
        }
        return $array;
    }

    public function filterDTR($from = null, $to = null)
    {
        $this->from = $from;
        $this->to = $to;
        $this->dispatchBrowserEvent('refresh-dtr-table');
        $this->getDTR($from, $to);
        $this->getComputation($from, $to);
        $this->emit('refresh-dtr');
        // $this->employeeAttendance($from, $to);
    }

    public function setRange($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function employeeAttendance($from, $to)
    {
        $periods = new DatePeriod(
            new DateTime($from),
            new DateInterval('P1D'),
            new DateTime(date('Y-m-d', strtotime($to . ' +1 day')))
        );




        $x = [];
        foreach ($periods as $value) {
            $date = $value->format('Y-m-d');
            $holidays = Holidays::whereDate('date', $date)->first();
            foreach ($this->employees_id as $key => $value) {
                $exist = Timekeep::whereDate('in', $date)
                    ->where('employee_id', $key)
                    ->first();

                if (!$exist) {
                    $timekeep = new Timekeep();
                    $timekeep->employee_id = $key;
                    $timekeep->late = '00:00';
                    $timekeep->late = '00:00';
                    $timekeep->ut = '00:00';
                    if ($holidays) {
                        $timekeep->lwop = 0;
                    } elseif (
                        Carbon::parse($date)->dayOfWeek == Carbon::SUNDAY ||
                        Carbon::parse($date)->dayOfWeek == Carbon::MONDAY
                    ) {
                        $timekeep->lwop = 0;
                    } else {
                        $timekeep->lwop = 1;
                    }
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

    public function getDTR()
    {
        $now = Carbon::now();

        $this->dtr = Timekeep::leftJoin(
            'employees',
            'employees.id',
            '=',
            'timekeeps.employee_id'
        )
            ->select(
                'timekeeps.in',
                'timekeeps.out',
                'timekeeps.created_at',
                'timekeeps.late',
                'timekeeps.ut',
                'timekeeps.lwop',
                'timekeeps.reg_ot',
                'timekeeps.ot_rd',
                'timekeeps.ot_spc_day',
                'timekeeps.reg_hd',
                'timekeeps.nd',
                'timekeeps.sl',
                'timekeeps.vl',
                'timekeeps.remarks',
                'employees.first_name',
                'employees.last_name',
                'employees.work_email'
            )
            ->when(
                $this->from && $this->to,
                function ($query) {
                    $from = $this->from . ' ' . '00:00:00';
                    $to = $this->to . ' ' . '23:59:59';
                    $start = date('Y-m-d H:i:s', strtotime($from));
                    $end = date('Y-m-d H:i:s', strtotime($to));
                    $query->whereBetween('timekeeps.in', [$start, $end]);
                },
                function ($query) use ($now) {
                    $query->whereBetween('timekeeps.in', [
                        $now->startOfWeek(Carbon::TUESDAY)->format('Y-m-d'),
                        $now->endOfWeek(Carbon::SATURDAY)->format('Y-m-d'),
                    ]);
                }
            )
            ->orderBy('timekeeps.created_at', 'asc')
            ->get()
            ->map(function ($row) {
                $in = date('H:i', strtotime($row->in));
                $time_in = new DateTime($in);
                $out = date('H:i', strtotime($row->out));
                $time_out = new DateTime($out);
                $interval = $time_in->diff($time_out);

                return [
                    'in' => $this->hourFormatter(
                        date('H:i', strtotime($row->in))
                    ),
                    'out' => $this->hourFormatter(
                        date('H:i', strtotime($row->out))
                    ),
                    'created_at' =>
                        Carbon::parse($row->in)->dayOfWeek == Carbon::SUNDAY ||
                        Carbon::parse($row->in)->dayOfWeek == Carbon::MONDAY
                            ? '<span class="text-danger">' .
                                date('l, F d, Y', strtotime($row->in)) .
                                '</span> '
                            : date('l, F d, Y', strtotime($row->in)),
                    'late' => $this->hourFormatter($row->late),
                    'ut' => $this->hourFormatter($row->ut),
                    'reg_ot' => $this->hourFormatter($row->reg_ot),
                    'ot_rd' => $this->hourFormatter($row->ot_rd),
                    'ot_spc_day' => $this->hourFormatter($row->ot_spc_day),
                    'reg_hd' => $this->hourFormatter($row->reg_hd),
                    'nd' => $this->hourFormatter($row->nd),
                    'lwop' => $row->lwop != 0 ? $row->lwop : '',
                    'sl' => $row->sl != 0 ? $row->sl : '',
                    'vl' => $row->vl != 0 ? $row->vl : '',
                    'remarks' => $row->remarks,
                    'total_hr' => $interval->format('%H:%I'),
                    'full_name' => $row->last_name . ', ' . $row->first_name,
                    'work_email' => $row->work_email,
                ];
            });
    }

    public function getComputation($from, $to)
    {
        $now = Carbon::now();

        $response = Timekeep::leftJoin(
            'employees',
            'employees.id',
            '=',
            'timekeeps.employee_id'
        )
            ->select(
                'timekeeps.in',
                'timekeeps.out',
                'timekeeps.created_at',
                'timekeeps.late',
                'timekeeps.ut',
                'timekeeps.lwop',
                'timekeeps.reg_ot',
                'timekeeps.ot_rd',
                'timekeeps.ot_spc_day',
                'timekeeps.reg_hd',
                'timekeeps.nd',
                'timekeeps.sl',
                'timekeeps.vl',
                'employees.work_email',
                'employees.id',
                'employees.first_name',
                'employees.last_name'
            )
            ->when(
                $this->from && $this->to,
                function ($query) {
                    $from = $this->from . ' ' . '00:00:00';
                    $to = $this->to . ' ' . '23:59:59';
                    $start = date('Y-m-d H:i:s', strtotime($from));
                    $end = date('Y-m-d H:i:s', strtotime($to));
                    $query->whereBetween('timekeeps.in', [$start, $end]);
                },
                function ($query) use ($now) {
                    $query->whereBetween('timekeeps.in', [
                        $now->startOfWeek(Carbon::TUESDAY)->format('Y-m-d'),
                        $now->endOfWeek(Carbon::SATURDAY)->format('Y-m-d'),
                    ]);
                }
            )
            // ->where(function ($query) use ($now) {
            //     if ($this->from && $this->to) {

            //     } else {

            //     }
            // })
            ->orderBy('timekeeps.created_at', 'asc')
            ->get();

        $late = $ut = $ot = $lwop = $reg_ot = $ot_rd = $ot_spc_day = $reg_hd = $nd = $sl = $vl = $total = 0;
        $late1 = 0;
        $late_array = $ut_array = $ot_array = $lwop_array = $reg_ot_array = $ot_rd_array = $ot_spc_day_array = $reg_hd_array = $nd_array = $sl_array = $vl_array = $total_array = $names = [];
        $employee_id = [];
        $total_hours = [];
        foreach ($response as $res) {
            $name = $res->last_name . ', ' . $res->first_name;
            $late_array[$name][] = $res->late;
            $ut_array[$name][] = $res->ut;
            $lwop_array[$name][] = $res->lwop;
            $reg_ot_array[$name][] = $res->reg_ot;
            $ot_rd_array[$name][] = $res->ot_rd;
            $ot_spc_day_array[$name][] = $res->ot_spc_day;
            $reg_hd_array[$name][] = $res->reg_hd;
            $nd_array[$name][] = $res->nd;
            $sl_array[$name][] = $res->sl;
            $vl_array[$name][] = $res->vl;
            $employee_id[$name] = $res->id;

            $total_hours[$name][] = ['in' => $res->in, 'out' => $res->out];
            $this->employees_id[$res->id] = $res->id;
        }

        // get data
        $this->lates = $this->calculate($late_array);
        $this->undertimes = $this->calculate($ut_array);
        $this->lwithoutpay = $this->calculate($lwop_array);
        $this->reg_overtimes = $this->calculate($reg_ot_array);
        $this->ot_restday = $this->calculate($ot_rd_array);
        $this->ot_special_day = $this->calculate($ot_spc_day_array);
        $this->reg_holiday = $this->calculate($reg_hd_array);
        $this->nightdiff = $this->calculate($nd_array);
        $this->sickleave = $this->calculate($sl_array);
        $this->vacationleave = $this->calculate($vl_array);
        $this->data = $this->computeGross($employee_id);
        $this->total_hours = $this->computeTotalHours($total_hours);
    }
}
