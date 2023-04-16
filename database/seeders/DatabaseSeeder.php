<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            // NationalsTableSeeder::class,
            // EmployeeTypeSeeder::class,
            // EmployeeStatusSeeder::class,
            // RegionSeeder::class,
            // ProvinceSeeder::class,
            // CitiesTableSeeder::class,
            // BarangaysTableSeeder::class,
            // DepartmentSeeder::class,
            // PositionSeeder::class,
            // TagSeeder::class,
            // EmployeeSeeder::class,
            // ApplicationSeeder::class,
            CareerSeeder::class,
        ]);
        $this->call(CitiesTableSeeder::class);
    }
}
