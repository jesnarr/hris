<?php

namespace App\Http\Livewire\Employee;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class ParentLivewire extends Component
{
    use WithPagination;

    public $title;
    public $department = "";
    public $position = "";
    public $tag = "";
    public $txtSearch = "";

    protected $listeners = [
        'employeeView'
    ];

    public function render()
    {
        return view('livewire.employee.parent-livewire');
    }

    public function mount()
    {
        $this->employeesQuery();
        $this->departments = Department::all();
        $this->tags = Tag::all();
        $this->positionQuery();
    }

    public function positionQuery()
    {
        $this->positions = Position::where('department', 'like', '%'. $this->department .'%')->get();

    }

    public function employeesQuery()
    {
        $this->employees = Employee::search($this->txtSearch, $this->department, $this->position, $this->tag);
    }

    public function updatedTxtSearch()
    {
        $this->employeesQuery();
    }

    public function updatedPosition()
    {
        $this->employeesQuery();
    }

    public function updatedTag()
    {
        $this->employeesQuery();
    }

    public function updatedDepartment()
    {
        $this->positionQuery();
        $this->employeesQuery();
    }
}
