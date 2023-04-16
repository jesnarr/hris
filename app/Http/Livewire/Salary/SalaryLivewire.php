<?php

namespace App\Http\Livewire\Salary;

use App\Models\EmployeeRates;
use App\Models\SalarySettings;
use Livewire\Component;

class SalaryLivewire extends Component
{
    public $salary;
    public $basic_pay = 0;
    public $settings;
    public $employee;
    protected $rules = [
        'basic_pay' => 'required'
    ];

    public function render()
    {
        $this->settings = SalarySettings::first() ? SalarySettings::first() : 0;

        return view('livewire.salary.salary-livewire');
    }

    public function submit()
    {

        $this->validate();
        $rates = $this->salary
            ? EmployeeRates::find($this->salary->id)
            : new EmployeeRates();
        $rates->basic_pay = (float)$this->basic_pay;
        $rates->employee_id = $this->employee->id;
        $rates->save();

        $this->clearVars();
        $this->dispatchBrowserEvent('save-employee-basic_pay');
    }
    public function clearVars()
    {
        $this->reset([
            'basic_pay'
        ]);
    }
}
