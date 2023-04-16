<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMrfSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrf_signatures', function (Blueprint $table) {
            $table->id();
            $table->integer('r_id')->nullable();
            $table->string('r_signature')->nullable();
            $table->timestamp('r_date');
            $table->integer('s_id')->nullable();
            $table->string('s_signature')->nullable();
            $table->timestamp('s_date');
            $table->integer('hr_id')->nullable();
            $table->string('hr_signature')->nullable();
            $table->timestamp('hr_date');
            $table->integer('dir_id')->nullable();
            $table->string('dir_signature')->nullable();
            $table->timestamp('dir_date');
            $table->integer('bir_id')->nullable();
            $table->string('bir_signature')->nullable();
            $table->timestamp('bir_date');
            $table->integer('mrf_id');
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
        Schema::dropIfExists('mrf_signatures');
    }
}
