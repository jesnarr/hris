<?php

namespace App\Http\Livewire\Modals\Department;

use App\Models\Department;
use Livewire\Component;

class Add extends Component
{
    public $department;


    protected $listeners = [
        'clearVars',
        'editDepartment',
        'resetAddDepartment'
    ];

    protected $rules = [
        'department' => 'required|unique:departments'
    ];

    public function render()
    {
        return view('livewire.modals.department.add');
    }

    public function save()
    {
        $this->validate();

        $department = $this->department ? Department::where('department',$this->department) : new Department();
        $department->department = $this->department;
        $department->save();

        $this->clearVars();
        $this->dispatchBrowserEvent('close-modal', [
            'id' => 'add-department'
        ]);
        $this->dispatchBrowserEvent('prompt-message', [
            'type' => 'success',
            'message' => 'Added Successfully.'
        ]);
    }

    public function resetAddDepartment()
    {
        $this->clearVars();
    }

    public function editDepartment($id)
    {
        $department = Department::find($id);
        $this->department = $department->department;

    }

    public function clearVars()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
            'department',
        ]);
    }
}
