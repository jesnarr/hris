<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response_region = Http::get('https://ph-locations-api.buonzz.com/v1/regions');
        $region = $response_region->json();
        foreach ($region['data'] as $val) {
            $query = new Region();
            $query->region = $val['name'];
            $query->code = (int)$val['id'];
            $query->save();
        }
    }
}
