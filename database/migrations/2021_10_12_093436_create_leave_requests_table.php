<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('leave_id')->unsigned();
            $table->integer('status')->unsigned()->default(0);
            $table->integer('approved_id');
            $table->integer('leave_type')->unsigned()->default(0);
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->double('total')->default(0);
            $table->string('attachment')->nullable();
            $table->string('note')->nullable();
            $table->json('members')->nullable();
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
        Schema::dropIfExists('leave_requests');
    }
}
