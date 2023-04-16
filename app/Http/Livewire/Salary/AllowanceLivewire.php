<?php

namespace App\Http\Livewire\Salary;

use App\Models\EmployeeRates;
use App\Models\SalarySettings;
use Livewire\Component;

class AllowanceLivewire extends Component
{
    public $salary;
    public $allowance = 0;
    public $settings;
    public $employee;

    protected $rules = [
        'allowance' => 'required'
    ];
    public function render()
    {
        $this->settings = SalarySettings::first() ? SalarySettings::first() : 0;
        return view('livewire.salary.allowance-livewire');
    }


    public function submit()
    {
        $this->validate();
        $rates = $this->salary
            ? EmployeeRates::find($this->salary->id)
            : new EmployeeRates();
        $rates->allowance = (float)$this->allowance;
        $rates->employee_id = $this->employee->id;
        $rates->save();

        $this->clearVars();
        $this->dispatchBrowserEvent('save-employee-allowance');
    }
    public function clearVars()
    {
        $this->reset([
            'allowance'
        ]);
    }
}
