<?php

namespace App\Http\Livewire\Modals\Career;

use App\Models\Career;
use App\Models\Department;
use App\Models\Position;
use Livewire\Component;

class Add extends Component
{
    public $career_id;
    public $department;
    public $job_name;
    public $job_description;
    public $job_responsibilities;
    public $vacancy;
    public $area;

    protected $rules = [
        'job_name' => 'required',
        'job_description' => 'required',
        'job_responsibilities' => 'required',
        'vacancy' => 'required',
        'area' => 'required',
        'description' => 'required',
    ];

    protected $listeners = [
        'editCareer'
    ];

    public function render()
    {
        return view('livewire.modals.career.add', [
            'departments' => Department::all(),
            'positions' => Position::all()
        ]);
    }

    public function editCareer($id)
    {
        $career = Career::find($id);
        $this->department = $career->department;
        $this->job_name = $career->job_name;
        $this->job_description = $career->job_description;
        $this->job_responsibilities = $career->job_responsibilities;
        $this->vacancy = $career->job_available;
        $this->area = $career->area;
        $this->dispatchBrowserEvent('edit-career');
    }

    public function save()
    {
        $this->validate();
    }

    public function clearVars()
    {
        $this->reset([
            'career_id',
            'department',
            'job_name',
            'job_description',
            'job_responsibilities',
            'vacancy',
            'area',
        ]);
    }
}
