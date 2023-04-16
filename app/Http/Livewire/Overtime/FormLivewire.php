<?php

namespace App\Http\Livewire\Overtime;

use App\Models\OvertimeRequest;
use App\Models\OvertimeSignature;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormLivewire extends Component
{
    use WithFileUploads;
    public $range = [];
    public $from,$to, $date;
    public $total_hours;
    public $purpose,$client,$detailed,$signature;

    protected $rules = [
        'from' => 'required',
        'to' => 'required',
        'signature' => 'required',
        'purpose' => 'required',
        'client' => 'required',
        'detailed' => "required",
        'signature' => 'required'
    ];
    public function render()
    {
        return view('livewire.overtime.form-livewire');
    }

    public function submit()
    {

        $this->validate();
        $ot = new OvertimeRequest();
        $ot->employee_id = Auth::user()->employee->id;
        $ot->date = $this->date;
        $ot->from = $this->from;
        $ot->to = $this->to;
        $ot->purpose = $this->purpose;
        $ot->client = $this->client;
        $ot->detailed = $this->detailed;
        if ($this->signature) {
            $temp =  Auth::id() . rand(1000, 9999) . Carbon::now()->format('mdyhis') . '.' . $this->signature->getClientOriginalExtension();
            $this->signature->storeAs('public/signatures', $temp);
            $ot->signature = config('app.url') . '/storage/signatures/' . $temp;
        }

        $ot->save();

        $signatures = new OvertimeSignature();
        $signatures->overtime_id = $ot->id;
        $signatures->save();

        $this->dispatchBrowserEvent('save-request');
        $this->clearVars();
    }

    public function clearVars()
    {
        $this->reset([
            'range',
            'purpose',
            'client',
            'detailed',
            'signature',
        ]);
    }
}
