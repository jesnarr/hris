<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\JobInformation;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $title = 'Employees Directory';
        return view('employee.index', [
            'title' => $title
        ]);
    }

    public function view($id)
    {
        $employee = Employee::with('position')->find($id);
        $title = $employee->first_name . ' ' . $employee->last_name;
        $og_image = $employee->image;
        $og_url = env('APP_URL') . '/employee/' . $employee->id;
        return view('employee.view', [
            'employee' => $employee,
            'title' => $title,
            'og_image' => $og_image,
            'og_url' => $og_url,
        ]);
    }
}
