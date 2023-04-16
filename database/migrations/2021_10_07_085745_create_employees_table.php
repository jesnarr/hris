<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('last_name', 50);
            $table->string('suffix', 10)->nullable();
            $table->boolean('gender')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('contact_number', 20);
            $table->string('secondary_number', 20)->nullable();
            $table->string('marital_status', 25)->nullable();
            $table->unsignedBigInteger('nationality_id')->index()->nullable();
            $table->string('work_email')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->string('image')->nullable();
            $table->string('job_level', 20);
            $table->date('date_hired');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            // $table->unsignedBigInteger('employee_type_id')->nullable();
            // $table->unsignedBigInteger('employee_status_id')->nullable();
            // $table->unsignedBigInteger('position_id');

            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('employee_type_id')->references('id')->on('employee_types');
            // $table->foreign('employee_status_id')->references('id')->on('employee_statuses');
            // $table->foreign('nationality_id')->references('id')->on('nationals');
            // $table->foreign('position_id')->references('id')->on('positions');
            // $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
