<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('entitlement')->unsigned()->default(0);
            $table->integer('frequency')->unsigned()->default(0);
            $table->integer('type')->unsigned()->default(0);
            $table->integer('procrate')->unsigned()->default(0);
            $table->integer('carry_over')->unsigned()->default(0);
            $table->string('carry_over_exp')->nullable();
            $table->integer('status')->default(0);
            $table->integer('eligibility')->default(0);
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
        Schema::dropIfExists('leaves');
    }
}
