<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities_url = 'https://ph-locations-api.buonzz.com/v1/cities';
        $check_pagination = Http::get($cities_url);
        $check = $check_pagination->json();
        $numberOfLoop = (int)$check['pagination']['lastPage'];
        for($i = 1; $i <= $numberOfLoop; $i++) {
            $response_cities = Http::get("$cities_url?page=$i");
            $city = $response_cities->json();
            foreach ($city['data'] as $val) {
                $query = new City();
                $query->city = $val['name'];
                $query->code = (int)$val['id'];
                $query->region_code = (int)$val['region_code'];
                $query->province_code = (int)$val['province_code'];
                $query->save();
            }
        }
    }
}
