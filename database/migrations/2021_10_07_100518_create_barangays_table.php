<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangays', function (Blueprint $table) {
            $table->id();
            $table->string('barangay');
            $table->unsignedBigInteger('code');
            $table->unsignedBigInteger('region_code')->index();
            $table->unsignedBigInteger('province_code')->index();
            $table->unsignedBigInteger('city_code')->index();
            $table->timestamps();

            // $table->foreign('region_code')->references('code')->on('regions');
            // $table->foreign('province_code')->references('code')->on('provinces');
            // $table->foreign('city_code')->references('code')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangays');
    }
}
