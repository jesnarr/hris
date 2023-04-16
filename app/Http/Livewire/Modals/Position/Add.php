<?php

namespace App\Http\Livewire\Modals\Position;

use App\Models\Department;
use App\Models\Position;
use Livewire\Component;

class Add extends Component
{
    public $department;
    public $position;
    public $departments;
    public $position_id;

    protected $listeners = [
        'clearVars',
        'editPosition',
        'resetAddPosition'
    ];

    protected $rules = [
        'department' => 'required',
        'position' => 'required|unique:positions'
    ];

    public function render()
    {
        return view('livewire.modals.position.add');
    }

    public function mount()
    {
        $this->departments = Department::all();
    }

    public function save()
    {
        $this->validate();

        $position = $this->position_id ? Position::find($this->position_id) : new Position();
        $position->department = $this->department;
        $position->position = $this->position;
        $position->save();

        $this->clearVars();
        $this->dispatchBrowserEvent('close-modal', [
        'id' => 'add-position'
        ]);
        $this->dispatchBrowserEvent('prompt-message', [
            'type' => 'success',
            'message' => 'Added Successfully.'
        ]);
    }

    public function resetAddPosition()
    {
        $this->clearVars();
    }

    public function editPosition($id)
    {
        $this->position_id = $id;
        $position = Position::find($id);
        $this->position = $position->position;
        $this->department = $position->department;
    }

    public function clearVars()
    {
        $this->reset([
            'department',
            'position',
            'position_id',
        ]);
    }
}
