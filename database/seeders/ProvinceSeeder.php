<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response_province = Http::get('https://ph-locations-api.buonzz.com/v1/provinces');
        $region = $response_province->json();
        foreach ($region['data'] as $val) {
            $query = new Province();
            $query->province = $val['name'];
            $query->region_code = (int)$val['region_code'];
            $query->save();
        }
    }
}
