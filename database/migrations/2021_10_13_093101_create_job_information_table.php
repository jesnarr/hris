<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_status_id')->index()->nullable();
            $table->unsignedBigInteger('employee_type_id')->index()->nullable();
            $table->unsignedBigInteger('position_id')->index()->nullable();
            $table->unsignedBigInteger('employee_id')->index()->nullable();
            $table->date('join_date')->nullable();
            $table->date('probation_start_date')->nullable();
            $table->date('probation_end_date')->nullable();
            // $table->date('probation_date')->nullable();
            $table->date('regularization_date')->nullable();
            $table->date('contract_start_date')->nullable();
            $table->date('contract_end_date')->nullable();
            $table->unsignedBigInteger('line_manager_id')->index()->nullable();
            $table->unsignedBigInteger('immediate_head_id')->index()->nullable();
            $table->timestamps();

            // $table->foreign('employee_type_id')->references('id')->on('employee_types');
            // $table->foreign('employee_status_id')->references('id')->on('employee_statuses');
            // $table->foreign('position_id')->references('id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_information');
    }
}
