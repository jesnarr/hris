<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->unsignedBigInteger('code');
            $table->unsignedBigInteger('region_code')->index();
            $table->unsignedBigInteger('province_code')->index();
            $table->timestamps();

            // $table->foreign('region_code')->references('code')->on('regions');
            // $table->foreign('province_code')->references('code')->on('province');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
