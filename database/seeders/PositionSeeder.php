<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\QueryException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withoutVerifying()->post(env('APP_DASHBOARD') . '/api/v1/get-positions', [
            'apiKey' => '/xCD9WMUt3eWS/QJVtaaefGgTMEIqvNz+Nvjrtkoa1o='
        ]);
        $json = $response->json();
        if ($json['status'] === 200) {
            try {
                DB::transaction(function () use ($json) {
                    foreach($json['data'] as $value) {
                        $department = new Position();
                        $department->position = $value['position'];
                        $department->department = $value['department'];
                        $department->save();
                    }
                });
            } catch (QueryException $e) {
                Log::info($e->getMessage());
            }

        }
    }

    // private function setDepartment($position, $department)
    // {
    //     if ($department == 'EXECUTIVE') {
    //         return $this->getDepartmentId('EXECUTIVE');
    //     }
    //     if ($position == 'DOCUMENT CONTROLLER CLERK') {
    //         return $this->getDepartmentId('QUALITY');
    //     }
    //     if ($position == 'TEAM LEADER') {
    //         if ($department == 'SALES') {
    //             return $this->getDepartmentId('SALES');
    //         }
    //         if ($department == 'DIGITAL SALES') {
    //             return $this->getDepartmentId('DIGITAL SALES');
    //         }
    //     }
    //     if ($department == 'ACCOUNTS' || str_contains($position, 'ACCOUNTING') || str_contains($position, 'ACCOUNTS') || str_contains($position, 'ADMIN')) {
    //         return $this->getDepartmentId('ACCOUNTS');
    //     }
    //     if (str_contains($position, 'DIGITAL')) {
    //         return $this->getDepartmentId('DIGITAL SALES');
    //     }
    //     if (str_contains($position, 'MULTIMEDIA')) {
    //         return $this->getDepartmentId('DIGITAL SALES');
    //     }
    //     if (str_contains($position, 'SALES') || $position == 'MARKETING EXECUTIVE') {
    //         return $this->getDepartmentId('SALES');
    //     }
    //     if (str_contains($position, 'BUSINESS')) {
    //         return $this->getDepartmentId('BUSINESS DEVELOPMENT');
    //     }
    //     if (str_contains($position, 'DOCUMENTATION') || $position == 'MEMBER SUPPORT REPRESENTATIVE' || str_contains($position, 'PROGRAMME') || $position == 'CONTENT WRITER') {
    //         return $this->getDepartmentId('PROGRAMMES');
    //     }
    //     if ($department == 'HR' || str_contains($position, 'HR') || $position == 'LIAISON OFFICER' || $position == 'TRAINING OFFICER') {
    //         return $this->getDepartmentId('HR');
    //     }
    //     if ($department == 'IT') {
    //         return $this->getDepartmentId('IT');
    //     }
    //     if ($department == 'JVB WCC') {
    //         return $this->getDepartmentId('JVB WCC');
    //     }
    //     if ($department == 'QUALITY') {
    //         return $this->getDepartmentId('QUALITY');
    //     }
    //     if ($department == 'LEGAL') {
    //         return $this->getDepartmentId('LEGAL');
    //     }

    // }

    // private function getDepartmentId($position)
    // {
    //     $department = Department::where('department', $position)->first();
    //     return $department->id;
    // }
}
