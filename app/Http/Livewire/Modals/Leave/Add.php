<?php

namespace App\Http\Livewire\Modals\Leave;

use App\Models\Leave;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;

class Add extends Component
{
    public $name;
    public $type = false;
    public $entitlement = 0;
    public $frequency = 1;
    public $prorate = false;
    public $carry_over = 0;
    public $carry_over_exp;
    public $leave_id;

    protected $rules = [
        'name' => 'required',
        'entitlement' => 'required',
        'carry_over' => 'required',
        'carry_over_exp' => 'required'
    ];

    protected $messages = [
        'name.required' => 'Type name is required',
        'entitlement.required' => 'Entitlement is required',
        'carry_over.required' => 'Carry over is required',
        'carry_over_exp.required' => 'Carry over expiration is required',
    ];

    protected $listeners = [
        'clearVars',
        'editPosition',
        'resetAddPosition',
        'reload-datatable',
        'add-leave' => 'updateLeave'
    ];


    public function mount()
    {
        $this->carry_over_exp = date('F d, Y', strtotime('Dec 31'));
    }

    public function render()
    {

        return view('livewire.modals.leave.add');
    }

    public function saveLeave()
    {

        $this->validate();
        // dd($this->type);
        $arr = [
            'name',
            'entitlement',
            'frequency',
            'type',
            'prorate',
            'carry_over',
            'carry_over_exp',
        ];
        $schedule = ($this->leave_id ? Leave::find($this->leave_id) : new Leave());

        foreach ($arr as $field) {
            if (Schema::hasColumn($schedule->getTable(), $field)) {
                $schedule->$field = $this->$field;
            }
        }
        $schedule->save();

        $this->clearVars();
        $this->dispatchBrowserEvent('close-modal', [
            'id' => 'add-leave'
        ]);
        $this->dispatchBrowserEvent('prompt-message', [
            'type' => 'success',
            'message' => 'Leave updated.'
        ]);
    }

    public function updateLeave($id)
    {
        $this->clearVars();

        if ($id) {
            $schedule =  Leave::find($id);
            $arr = [
                'name',
                'entitlement',
                'frequency',
                'type',
                'prorate',
                'carry_over',
                'carry_over_exp',
            ];

            foreach ($arr as $field) {
                $this->$field = $schedule->$field;
            }
            $this->leave_id = $id;

        }
    }

    public function clearVars()
    {
        $this->reset([
            'name',
            'entitlement',
            'frequency',
            'type',
            'prorate',
            'carry_over',
            'carry_over_exp',
        ]);
    }
}
