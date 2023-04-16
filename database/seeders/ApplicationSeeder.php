<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Console\Command;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withoutVerifying()->post(env('APP_DASHBOARD') . '/api/v1/get-applications', [
            'apiKey' => '/xCD9WMUt3eWS/QJVtaaefGgTMEIqvNz+Nvjrtkoa1o='
        ]);
        $json = $response->json();
        if ($response->successful()) {
            try {
                DB::transaction(function () use ($json) {
                    foreach($json['data'] as $value) {
                        Application::create([
                            'first_name'           => $value['first_name'],
                            'last_name'            => $value['last_name'],
                            'email'                => $value['email'],
                            'contact_number'       => $value['contact_number'],
                            'available_start_date' => $value['start_date'],
                            // 'career'               => $value['career'],
                            'status'               => $value['action'],
                            'referral_email'       => isset($value['referrals']) ? $value['referrals']['email'] : null,
                            'referral_name'        => isset($value['referrals'])
                                ? $value['referrals']['agents_name'] . ' ' . $value['referrals']['last_name']
                                : null,
                        ]);
                    }
                });
            } catch (\Exception $e) {
                Log::info($e->getMessage());
            }
        }
    }
}
