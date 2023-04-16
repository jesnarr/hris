<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DtrController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Employee::get();
            return $this->getDTR($data);
        }
        $data = [
            'response' => $this->response,
            'title' => 'DTR List'
        ];

        return view('dtr.index');
    }

    public function getDTR($data)
    {
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('name', function ($row){
                return ucwords($row->name);
            })
            ->addColumn('date', function ($row){

                return date('F d, Y',strtotime($row->created_at));
            })
            ->addColumn('in', function ($row){

                return date('H:i:s',strtotime($row->in));
            })
            ->addColumn('out', function ($row){
                return isset($row->out) ? date('H:i:s',strtotime($row->out)) : '';
            })
            ->rawColumns(['name','date','in','out'])
            ->make(true);
    }
}
