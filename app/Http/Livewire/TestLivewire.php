<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TestLivewire extends Component
{
    protected $listeners = [
        'echo:notification,NewNotification' => 'message'
    ];

    public function render()
    {
        return view('livewire.test-livewire');
    }

    public function message($event)
    {
        $this->dispatchBrowserEvent('new-notification', [
            'title' => 'New Notification',
            'message' => $event['message'],
        ]);
    }
}
