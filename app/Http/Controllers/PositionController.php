<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PositionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Position::with('department')
                ->get()
                ->map(function ($data) {
                    return [
                        'id' => $data->id,
                        'position' => $data->position,
                        'department' => $data->department,
                        'created_at' => Carbon::parse($data->created_at)->format('F d, Y')
                    ];
                });
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $id = $row['id'];
                    $callbackDelete = 'deleteConfirmationPosition(' . $id . ', "Delete Position")';
                    $callbackEdit = 'editPosition(' . $id . ')';
                    return "
                    <div class='flex justify-center'>
                        <button type='button' class='px-4'>
                            <svg xmlns='http://www.w3.org/2000/svg' onclick='$callbackEdit' class='h-5 w-5 text-indigo-500 cursor-pointer' viewBox='0 0 20 20' fill='currentColor'><path d='M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z' /></svg>
                        </button>
                        <button type='button'>
                            <svg xmlns='http://www.w3.org/2000/svg' onclick='$callbackDelete' class='h-5 w-5 text-red-500 cursor-pointer' viewBox='0 0 20 20' fill='currentColor'><path fill-rule='evenodd' d='M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z' clip-rule='evenodd' /></svg>
                        </button>
                    </div>";
                })
                ->rawColumns(['action'])
                ->make('true');
        }

        $title = 'Position';
        return view('position.index', [
            'title' => $title
        ]);
    }
}
