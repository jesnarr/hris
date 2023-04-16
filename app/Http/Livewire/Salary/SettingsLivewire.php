<?php

namespace App\Http\Livewire\Salary;

use App\Models\SalarySettings;
use Livewire\Component;

class SettingsLivewire extends Component
{
    public $rate_per_day = 0.00;
    public $allowance_per_day = 0.00;
    public $ot_spc_day = 0.00;
    public $reg_ot = 0.00;
    public $ot_rd = 0.00;
    public $night_diff = 0.00;
    public $settings;
    public $rules = [
        'rate_per_day' => 'numeric|required',
        'allowance_per_day' => 'numeric|required',
        'ot_spc_day' => 'numeric|required',
        'reg_ot' => 'numeric|required',
        'ot_rd' => 'numeric|required',
        'night_diff' => 'numeric|required'
    ];
    protected $listeners =[
        'salary-settings' => '$refresh'
    ];


    public function mount()
    {
        $this->settings = SalarySettings::first();
        $this->rate_per_day  = isset($this->settings->rate_per_day) ? $this->settings->rate_per_day : 0 ;
        $this->allowance_per_day  =  isset($this->settings->allowance_per_day) ? $this->settings->allowance_per_day : 0;
        $this->ot_spc_day  =  isset($this->settings->ot_spc_day) ? $this->settings->ot_spc_day : 0 ;
        $this->reg_ot  =  isset($this->settings->reg_ot) ? $this->settings->reg_ot : 0;
        $this->ot_rd  =  isset($this->settings->ot_rd) ? $this->settings->ot_rd :0;
        $this->night_diff  =  isset($this->settings->night_diff) ? $this->settings->night_diff : 0 ;
    }
    public function render()
    {

        return view('livewire.salary.settings-livewire');
    }

    public function save()
    {
        $this->validate();

        $settings = SalarySettings::first();
        $settings->rate_per_day = $this->rate_per_day;
        $settings->allowance_per_day = $this->allowance_per_day;
        $settings->ot_spc_day = $this->ot_spc_day;
        $settings->reg_ot = $this->reg_ot;
        $settings->ot_rd = $this->ot_rd;
        $settings->night_diff = $this->night_diff;
        $settings->save();

        $this->clearVars();
        $this->dispatchBrowserEvent('save-salary');
    }

    public function clearVars()
    {
        $this->reset([
            'rate_per_day',
            'allowance_per_day',
            'ot_spc_day',
            'reg_ot',
            'ot_rd',
            'night_diff',

        ]);
    }
}
