<?php

namespace Database\Seeders;

use App\Models\EmployeeStatus;
use Illuminate\Database\Seeder;

class EmployeeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Onboarding',
            'Probationary',
            'Active',
            'Project Based',
            'Resigned'
        ];
        foreach ($types as $type) {
            $employee = new EmployeeStatus();
            $employee->status = $type;
            $employee->save();
        }
    }
}
