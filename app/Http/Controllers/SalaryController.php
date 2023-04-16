<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    //
    public function index()
    {
        $data = ['title' => 'Salary Settings'];
        return view('salary.index',$data);
    }
}
