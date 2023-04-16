<?php

namespace App\Http\Livewire\Position;

use App\Models\JobInformation;
use App\Models\Position;
use Livewire\Component;

class ParentLivewire extends Component
{
    protected $listeners = [
        'deletePosition'
    ];

    public function render()
    {
        return view('livewire.position.parent-livewire');
    }

    public function deletePosition($id)
    {
        $check = JobInformation::find($id);
        if ($check) {
            return $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'error',
                'message' => 'This position is associated with some employees'
            ]);
        }
        $position = Position::find($id)->delete();
        if ($position) {
            $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'success',
                'message' => 'Deleted Successfully.'
            ]);

            return $this->dispatchBrowserEvent('reload-datatable');
        }
    }

}
