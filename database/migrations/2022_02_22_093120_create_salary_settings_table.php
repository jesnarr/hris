<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalarySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_settings', function (Blueprint $table) {
            $table->id();
            $table->float('rate_per_day', 10, 3)->default(0);
            $table->float('allowance_per_day',10, 3)->default(0);
            $table->float('ot_rd',10, 3)->default(0);
            $table->float('reg_ot',10, 3)->default(0);
            $table->float('ot_spc_day',10, 3)->default(0);
            $table->float('night_diff',10, 3)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salary_settings');
    }
}
