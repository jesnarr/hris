<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    //
    public $roles = [
        1 => 'Dashboard',
        2 => 'Department',
        3 => 'Position',
        4 => 'Attendance',
        5 => 'Schedule',
    ];

    public function index(){

        $data = [
            'title' => 'Role',
            'roles' => $this->roles
        ];

        return view('role.index',$data);
    }
}
