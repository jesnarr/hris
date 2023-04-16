<?php

namespace App\Http\Livewire\Tables\Leave;

use Livewire\Component;

class Display extends Component
{

    public $leave;

    public function render()
    {
        return view('livewire.tables.leave.display');
    }
}
