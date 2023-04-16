<?php

namespace App\Http\Livewire\Modals\Agents;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Add extends Component
{
    public $agent;

    public function render()
    {
        $this->agent = $this->getAgent();
        return view('livewire.modals.agents.add');
    }

    public function getAgent()
    {
        return DB::table('users')
            ->leftJoin('roles','roles.user_id','=','users.id')
            ->whereNotIn('roles.role',[1])
            ->orderBy('users.name','desc')
            ->get();
    }
}
