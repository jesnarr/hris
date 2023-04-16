<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimekeepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeeps', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->timestamp('in')->default('0000-00-00 00:00:00');
            $table->timestamp('out')->default('0000-00-00 00:00:00');
            $table->string('late')->default('00:00');
            $table->string('ut')->default('00:00');
            $table->float('lwop')->default('0.0');
            $table->string('reg_ot')->default('00:00');
            $table->string('ot_rd')->default('00:00');
            $table->string('ot_spc_day')->default('00:00');
            $table->string('reg_hd')->default('00:00');
            $table->string('nd')->default('00:00');
            $table->float('sl')->default('0.0');
            $table->float('vl')->default('0.0');
            $table->float('rate')->default('0.0');
            $table->string('remarks');
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
        Schema::dropIfExists('timekeeps');
    }
}
