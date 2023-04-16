<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkSchedule extends Controller
{
    //
    public function index()
    {
        $data =[
            'title' => 'Work Schedule'
        ];
        return view('work.index',$data);
    }
}
