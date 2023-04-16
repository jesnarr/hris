<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvertimeSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overtime_signatures', function (Blueprint $table) {
            $table->id();
            $table->integer('overtime_id');
            $table->integer('head_approval')->nullable();
            $table->integer('head_id')->nullable();
            $table->string('head_signature')->nullable();
            $table->dateTime('head_id_signed_date')->nullable();
            $table->integer('manager_approval')->nullable();
            $table->integer('manager_id')->nullable();
            $table->string('manager_signature')->nullable();
            $table->dateTime('manager_signed_date')->nullable();
            $table->string('received_id')->nullable();
            $table->string('received_signature')->nullable();
            $table->dateTime('hr_signed_date')->nullable();
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
        Schema::dropIfExists('overtime_signatures');
    }
}
