<?php

namespace Database\Seeders;

use App\Models\EmployeeType;
use Illuminate\Database\Seeder;

class EmployeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Full-time',
            'Freelancer',
            'Contractor',
            'Intern',
            'Part-time'
        ];
        foreach ($types as $type) {
            $employee = new EmployeeType();
            $employee->employee_type = $type;
            $employee->save();
        }
    }
}
