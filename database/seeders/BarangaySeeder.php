<?php

namespace Database\Seeders;

use App\Models\Barangay;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangay_url = 'https://ph-locations-api.buonzz.com/v1/barangays';
        $check_pagination = Http::get($barangay_url);
        $check = $check_pagination->json();
        $numberOfLoop = (int)$check['pagination']['lastPage'];
        for($i = 1; $i <= $numberOfLoop; $i++) {
            $response_barangays = Http::get("$barangay_url?page=$i");
            $barangay = $response_barangays->json();
            foreach ($barangay['data'] as $val) {
                $query = new Barangay();
                $query->barangay = $val['name'];
                $query->code = (int)$val['id'];
                $query->region_code = (int)$val['region_code'];
                $query->province_code = (int)$val['province_code'];
                $query->city_code = (int)$val['city_code'];
                $query->save();
            }
        }
    }
}
