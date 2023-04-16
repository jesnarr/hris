<?php

namespace App\Http\Livewire\Employee;

use App\Models\EmployeeRates;
use App\Models\SalarySettings;
use Livewire\Component;

class SettingsInformation extends Component
{
    public $basic_pay = 0.00;
    public $allowance = 0.00;
    public $rate_per_cutoff = 0;
    public $rate_per_day =  0 ;
    public $rate_per_hr = 0;
    public $allowance_per_cutoff, $allowance_per_day, $allowance_per_hr;
    public $settings;
    public $employee;
    public $salary;

    protected $rules = [
        'basic_pay' => 'required',
        'allowance' => 'required',
    ];

    public function mount()
    {
        $this->salary = EmployeeRates::where('employee_id', $this->employee->id)->first();
        $this->basic_pay = isset($this->salary->basic_pay) ? number_format($this->salary->basic_pay, 2) : 0.00;
        $this->allowance = isset($this->salary->allowance) ? number_format($this->salary->allowance, 2) : 0.00;
    }
    public function render()
    {
        $this->settings = SalarySettings::first();
        return view('livewire.employee.settings-information');
    }

    public function calculate_salary()
    {
        $basic_pay = str_replace(',','',$this->basic_pay);
        $this->rate_per_cutoff = number_format($basic_pay / 2, 2);
        $this->rate_per_day = number_format($basic_pay / $this->settings->rate_per_day, 2);
        $this->rate_per_hr = number_format(($basic_pay / $this->settings->rate_per_day) / 8, 2);
    }
    public function calculate_allowance()
    {
        $allowance = str_replace(',','',$this->allowance);
        $this->allowance_per_cutoff = number_format($allowance / 2, 2);
        $this->allowance_per_day = number_format($allowance / $this->settings->allowance_per_day, 2);
        $this->allowance_per_hr = number_format(($allowance / $this->settings->allowance_per_day) / 8, 2);
    }

    public function save()
    {

        $this->validate();
        $rates = $this->salary
            ? EmployeeRates::find($this->salary->id)
            : new EmployeeRates();
        if ($this->basic_pay) {
            $rates->basic_pay = $this->basic_pay;
        }
        // dd(var_dump((double)$this->allowance));
        if ($this->allowance) {
            $rates->allowance = (double)$this->allowance;
        }
        $rates->employee_id = $this->employee->id;
        $rates->save();

        $this->clearVars();
        $this->dispatchBrowserEvent('save-employee-rates');
    }
    public function clearVars()
    {
        $this->reset([
            'basic_pay', 'allowance'
        ]);
    }
}
