<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Employee;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::with('department')->get();
        return view('careers.guest.index', compact('careers'));
    }

    public function adminIndex()
    {
        $careers = Career::withCount('application')->get();
        return view('careers.admin.index', [
            'title'   => 'Careers',
            'careers' => $careers
        ]);
    }

    public function view($id)
    {
        $career = Career::find($id);
        $employees = Employee::orderBy('last_name')
            ->get()
            ->map(fn ($data) => (array) ['email' => $data->work_email, 'name' => $data->last_name . ' ' . $data->first_name])
            ->pluck('name', 'email')
            ->all();

        return view('careers.guest.view', compact('career', 'employees'));
    }
}
