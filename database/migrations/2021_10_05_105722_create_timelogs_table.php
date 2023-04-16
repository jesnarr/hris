<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timelogs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->timestamp('in')->useCurrent();
            $table->timestamp('out')->useCurrent();
            $table->string('in_loc')->nullable();
            $table->string('out_loc')->nullable();
            $table->integer('status')->unsigned()->default(0);
            $table->string('notes')->default(null);
            $table->float('total')->default(0.00);
            $table->float('late')->default(0.00);
            $table->float('ut')->default(0.00);
            $table->float('rate')->default(0.00);
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
        Schema::dropIfExists('timelogs');
    }
}
