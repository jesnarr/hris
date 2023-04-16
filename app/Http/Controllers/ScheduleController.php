<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class ScheduleController extends Controller
{
    //

    public function index(Request $request)
    {

        if($request->ajax()){
            return $this->work_schedule();
        }

        $response = $this->response();

        $title = 'Schedule';
        $data = [
            'days' => $this->days,
            'time' => $this->time,
            'title' => $title,
            'response' => $response
        ];
        return view('schedule.index', $data);
    }

    public function saveSchedule(Request $request)
    {
        try {
            $arr = ['to' => $request->to, 'from' => $request->from, 'day' => $request->day];
            $schedule = ($request->id ? Schedule::find($request->id) : new Schedule());
            $exist = Schedule::where('to',$request->to)
                ->where('from',$request->from)
                ->where('day',$request->day)->first();
                if($exist){
                    return response()->json(['message' => 'This schedule is already existing.','status'=>400]);
                }


            foreach ($arr as $field => $value) {
                if (Schema::hasColumn($schedule->getTable(), $field)) {
                    $schedule->$field = $value;
                }
            }
            $schedule->save();
            return response()->json(['message' => 'Record updated','status'=>200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed so add schedule','status'=>400]);
        }
    }

    public function action(Request $request)
    {
        try {
            Schedule::find($request->id)->delete();
            return response()->json(['message' => 'Schedule deleted','status'=>200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed so add schedule','status'=>400]);
        }
    }

    public function work_schedule(){

        $work_schedule = Schedule::getList();
        return DataTables::of($work_schedule)
            ->addIndexColumn()
            ->addColumn('day', function ($row){

                return $this->days[$row->day];
             })
             ->addColumn('action', function ($row) {
                return '<div class="row">
                            <button onclick="deleteSchedule('.$row->id.')"
                                class="btn-sm mr-2 text-red-500"> <i class="fal fa-trash "></i>
                            </button>
                            <button onclick="add_schedule('.$row->id.')"
                                class="btn-sm text-blue-500">
                                <i class="fal fa-edit "></i></button>
                        </div>';
            })
            ->rawColumns(['day','action'])
            ->make(true);
    }
    public function response(){
        $array = [
            ["data" => "id"],
            ["data" => "day"],
            ["data" => "from"],
            ["data" => "to"],
            ["data" => "action"]
        ];
        return $array;
    }

    public function setSchedule()
    {
        $data = [
            'title' => 'Set Schedule'
        ];
        return view('schedule.view',$data);
    }

}
