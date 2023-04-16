<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Add extends Component
{

    public $user;
    public $leave_id;

    protected $listeners = [
        'refresh-users' => '$refresh'
    ];
    public function render()
    {
        $this->user = User::whereDoesntHave('eligibility', function (Builder $query) {
            $query->where('leave_id', $this->leave_id);
        })->get();
        return view('livewire.users.add');
    }
}
