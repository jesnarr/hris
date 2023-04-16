<?php

namespace App\Http\Livewire\Department;

use App\Models\Department;
use App\Models\Position;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ParentLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'deleteDepartment'
    ];

    public function render()
    {
        return view('livewire.department.parent-livewire');
    }

    public function deleteDepartment($id)
    {
        $position = Position::where('department', $id)->first();

        if ($position) {
            $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'error',
                'message' => 'This department is associated with ' . $position->position
            ]);
            return $this->dispatchBrowserEvent('reload-datatable');
        }

        $department = Department::find($id)->delete();
        if ($department) {
            $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'success',
                'message' => 'Deleted Successfully.'
            ]);

            return $this->dispatchBrowserEvent('reload-datatable');
        }
    }

    public function test($id)
    {
        dd($id);
    }
}
