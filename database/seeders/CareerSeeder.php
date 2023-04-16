<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withoutVerifying()->post(env('APP_DASHBOARD') . '/api/v1/get-careers', [
            'apiKey' => '/xCD9WMUt3eWS/QJVtaaefGgTMEIqvNz+Nvjrtkoa1o='
        ]);
        $json = $response->json();
        if ($response->successful()) {
            try {
                DB::transaction(function () use ($json) {
                    foreach($json['data'] as $value) {
                        Career::create([
                            'job_name'             => $value['job_name'],
                            'job_description'      => $value['job_description'],
                            'job_responsibilities' => $value['job_responsibilities'],
                            'job_qualification'    => $value['job_qualification'],
                            'job_available'        => $value['job_available'],
                            'area'                 => $value['job_location'],
                        ]);
                    }
                });
            } catch (\Exception $e) {
                Log::info($e->getMessage());
            }
        }
    }
}
