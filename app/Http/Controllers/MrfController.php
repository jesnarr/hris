<?php

namespace App\Http\Controllers;

use App\Models\Mrf;
use App\Models\MrfSignature;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class MrfController extends Controller
{
    //

    public $arr = [
        1 => 'ACCOUNTS',
        2 => 'BUSINESS DEVELOPMENT',
        3 => 'CUSTOMER SERVICE',
        4 => 'DIGITAL SALES',
        5 => 'EXECUTIVE',
        6 => 'HR',
        7 => 'IT',
        8 => 'JVB WCC',
        9 => 'PROGRAMMES',
        10 => 'QUALITY CONTROL',
        11 => 'SALES'
    ];
    public $arr1 = [
        1 => 'Termination',
        2 => 'End of Contract',
        3 => 'Promotion',
        4 => 'Transfer',
    ];
    public $arr2 = [
        1 => 'Justification',
        2 => 'Job Description',
        3 => 'Organizational Chart'
    ];
    public $arr3 = [
        1 => 'Replacement',
        2 => 'Additional Manpower',
        3 => 'Position Upgrade'
    ];

    public $arr4 = [
        1 => 'Rank and File',
        2 => 'Supervisory/Officer',
        3 => 'Manager'
    ];

    public function index()
    {
        $data = [
            'title' => 'MRF',
        ];
        return view('mrf.index',$data);
    }
    public function list()
    {

        $list = Mrf::select('employees.first_name', 'employees.last_name', 'employees.middle_name', 'mrves.*')
            ->leftJoin('employees', 'employees.id', '=', 'mrves.requested_by')
            ->orderBy('id', 'desc')->get();
        $data = [
            'arr' => $this->arr,
            'arr1' => $this->arr1,
            'arr2' => $this->arr2,
            'arr3' => $this->arr3,
            'arr4' => $this->arr4,
            'list' => $list,
            'title' => 'MRF List'
        ];

        return view('mrf.list', $data);
    }

    public function submit_prf(Request $request)
    {


        $validatedData = $request->validate([
            'department' => '',
            'position' => '',
            'number' => '',
            'date_needed' => '',
            'project_based' => '',
            'probationary' => '',
            'regular' => '',
            'specs1' => '',
            'app_status' => '',
            'appointment_status' => '',
            'specs2' => '',
            'qualification' => '',
        ]);
        try {


            $mrf = new Mrf();
            foreach ($validatedData as $field => $value) {
                if (Schema::hasColumn($mrf->getTable(), $field)) {
                    $mrf->$field = $value;
                }
            }
            unset($mrf->_token);
            $mrf->requested_by = Auth::user()->employee->id;
            $mrf->save();

            $destinationPath = 'storage/application/signatures/' . $mrf->id;

            if($request->file('file'))
            {
                $cv = $request->file('file');
                $file_name_cv = time() . '.' . $cv->getClientOriginalExtension();
                $cv->move($destinationPath, $file_name_cv);

                $mrf_signature = new MrfSignature();
                $mrf_signature->r_signature =  $destinationPath . '/' . $file_name_cv;
                $mrf_signature->r_id = Auth::user()->employee->id;
                $mrf_signature->r_date = date('Y-m-d H:i:s');
                $mrf_signature->mrf_id = $mrf->id;
                $mrf_signature->save();
            }

            return response()->json(['message' => "MRF Submitted."]);
        } catch (Exception $e) {
            return response()->json(['message' => "Submit failed, Please try again" ]);
        }
    }

    public function mrfView($id)
    {
        $mrf =  Mrf::find($id);
        $data = [
            'arr' => $this->arr,
            'arr1' => $this->arr1,
            'arr2' => $this->arr2,
            'arr3' => $this->arr3,
            'arr4' => $this->arr4,
            'mrf' => $mrf,
            'title' => 'MRF List'
        ];
        
        return view('mrf.view',$data);
    }


    public function uploadFile(Request $request){

        $destinationPath = 'storage/application/signatures/' . $request->id;

        try {


            $signature = $request->type.'_signature';
            $id = $request->type.'_id';
            $date = $request->type.'_date';

            $cv = $request->file('file');
            $file_name_cv = time() . '.' . $cv->getClientOriginalExtension();
            $cv->move($destinationPath, $file_name_cv);

            $mrf_signature = MrfSignature::where('mrf_id',$request->id)->first();
            $mrf_signature->$signature =  $destinationPath . '/' . $file_name_cv;
            $mrf_signature->$id = Auth::user()->employee->id;
            $mrf_signature->$date = date('Y-m-d H:i:s');
            $mrf_signature->mrf_id = $request->id;
            $mrf_signature->save();

            return response()->json(['message' => 'File uploaded', 'status' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to upload ' , 'status' => 422]);
        }
    }

    public function submitRemarks(Request $request){
        try{
            $arr = ['names','remarks','date_served'];

            $mrf = Mrf::find($request->id);
            foreach ($arr as $field) {
                if (Schema::hasColumn($mrf->getTable(), $field)) {
                    $mrf->$field = $request->$field;
                }
            }
            $mrf->save();
            return response()->json(['message' => 'Remarks added', 'status' => 200]);
        }catch(Exception $e){
            return response()->json(['message' => 'Failed to upload ' , 'status' => 422]);
        }
    }
}
