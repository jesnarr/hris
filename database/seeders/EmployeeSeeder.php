<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\JobInformation;
use App\Models\Position;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withoutVerifying()->post(env('APP_DASHBOARD') . '/api/v1/get-agents', [
            'apiKey' => '/xCD9WMUt3eWS/QJVtaaefGgTMEIqvNz+Nvjrtkoa1o='
        ]);
        $json = $response->json();
        if ($json['status'] === 200) {
            DB::transaction(function () use ($json) {
                foreach($json['data'] as $value) {
                    $user_id = User::insertGetId([
                        'name' => mb_strtoupper($value['last_name']) . ', ' . mb_strtoupper($value['agents_name']),
                        'password' => Hash::make('ilovefilglobal'),
                        'is_admin' => $value['position'] == 'IT WEB DEVELOPER' ? 1 : 0,
                        'email' => $value['email'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                    //gender, maritalstatus,
                    $employee = new Employee();
                    $employee->user_id = $user_id;
                    $employee->first_name = mb_strtoupper($value['agents_name']) ?? '';
                    $employee->last_name = mb_strtoupper($value['last_name']) ?? '';
                    $employee->middle_name = mb_strtoupper($value['middle_name']) ?? '';
                    $employee->suffix = $value['suffix'];
                    $employee->work_email = $value['email'];
                    $employee->birthdate = date('Y-m-d', strtotime($value['dob']));
                    $employee->date_hired = date('Y-m-d', strtotime($value['date_hired']));
                    $employee->contact_number = $value['company_number'];
                    $employee->secondary_number = $value['secondary_number'] ?? null;
                    $employee->tag_id = $this->getTagId($value['tags']);
                    $employee->job_level = $value['job_level'];
                    $employee->image =  null;
                    $employee->save();
                    $employee_id = $employee->id;

                    $job = new JobInformation();
                    $job->position_id = $this->getPositionId($value['position']);
                    $job->employee_id = $employee_id;
                    $job->save();
                }
            });
        }
    }

    private function getPositionId($position)
    {
        $position = Position::where('position', $position)->first();
        return $position->id;
    }

    private function getTagId($tag)
    {
        $tag = Tag::where('tag', $tag)->first();
        return $tag->id ?? 1;
    }
}
