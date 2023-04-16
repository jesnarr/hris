<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMrvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrves', function (Blueprint $table) {
            $table->id();
            $table->integer('department')->default(0);
            $table->string('position')->nullable();
            $table->integer('number')->default(0);
            $table->string('date_needed')->nullable();
            $table->integer('project_based')->default(0);
            $table->integer('probationary')->default(0);
            $table->integer('regular')->default(0);
            $table->integer('specs1')->default(0);
            $table->integer('app_status')->default(0);
            $table->integer('appointment_status')->default(0);
            $table->integer('specs2')->default(0);
            $table->string('qualification')->nullable();
            $table->string('requested_by')->nullable();
            $table->string('remarks')->nullable();
            $table->string('names')->nullable();
            $table->string('date_served')->nullable();
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
        Schema::dropIfExists('mrves');
    }
}
