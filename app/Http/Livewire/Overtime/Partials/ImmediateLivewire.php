<?php

namespace App\Http\Livewire\Overtime\Partials;

use App\Http\Livewire\Employee\JobInformation;
use App\Models\OvertimeRequest;
use App\Models\OvertimeSignature;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImmediateLivewire extends Component
{
    use WithFileUploads;


    public $head_approval;
    public $head_signature;
    public $ot_id;


    public $rules = [
        'head_approval' =>'required',
        'head_signature' => 'required'
    ];
    protected $listeners = [
        'getOT'
    ];

    public function render()
    {
        return view('livewire.overtime.partials.immediate-livewire');
    }

    public function save()
    {

        $this->validate();
        $signature = OvertimeSignature::where('overtime_id',$this->ot_id)->first();

        if ($this->head_signature) {

            $signature->head_approval = $this->head_approval;
            $temp =  Auth::user()->employee->id . rand(1000, 9999) . Carbon::now()->format('mdyhis') . '.' . $this->head_signature->getClientOriginalExtension();
            $this->head_signature->storeAs('public/signatures', $temp);
            $signature->head_signature = config('app.url') . '/storage/signatures/' . $temp;
            $signature->head_id = Auth::user()->employee->id;
            $signature->head_id_signed_date = date('Y-m-d H:i:s');
        }
        $signature->save();

        if($this->head_approval == 2){
            $overtime = OvertimeRequest::find($this->ot_id);
            $overtime->status = 2;
            $overtime->save();
        }
        $this->dispatchBrowserEvent('update-overtime',[
            'id' => 'update-overtime'
        ]);
        $this->clearVars();
    }

    public function getOT($id)
    {
        $this->ot_id = $id;
    }
    public function clearVars()
    {
        $this->reset([
            'head_approval',
            'head_signature'
        ]);
    }
}
