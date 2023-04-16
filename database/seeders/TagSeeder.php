<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withoutVerifying()->post(env('APP_DASHBOARD') . '/api/v1/get-tags', [
            'apiKey' => '/xCD9WMUt3eWS/QJVtaaefGgTMEIqvNz+Nvjrtkoa1o='
        ]);
        $json = $response->json();
        if ($json['status'] === 200) {
            foreach($json['data'] as $value) {
                $tag = new Tag();
                $tag->tag = $value['tags'];
                $tag->save();
            }
        }
    }
}
