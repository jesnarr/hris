<?php

namespace App\Http\Livewire\Tables\Leave;

use App\Models\Eligibility as ModelsEligibility;
use Livewire\Component;
use Yajra\DataTables\Facades\DataTables;

class Eligibility extends Component
{

    public $eligibility;
    public $leave_id;
    public $reponse;

    public function render()
    {
        $this->response = ModelsEligibility::getList($this->leave_id);
        return view('livewire.tables.leave.eligibility');
    }
    // public function eligibilityTable(){


    //     $attendance =
    //     return DataTables::of($attendance)
    //         ->addIndexColumn()
    //         ->addColumn('name', function ($row){

    //             return ucwords($row->name);
    //          })
    //          ->addColumn('email', function ($row){

    //             return date('F',strtotime($row->email));
    //          })
    //          ->addColumn('action', function ($row){
    //             return '<div class="row">
    //                         <button
    //                             wire:click="deleteUser('.$row->id.')"
    //                             class="btn-sm text-blue-500">
    //                             <i class="fal fa-edit "></i></button>
    //                     </div>';
    //          })

    //         ->rawColumns(['name','email','action'])
    //         ->make(true);
    // }

    // public function response(){
    //     $array = [
    //         ["data" => "name"],
    //         ["data" => "email"],
    //         ["data" => "action"],
    //     ];

    //     return $array;
    // }


}
