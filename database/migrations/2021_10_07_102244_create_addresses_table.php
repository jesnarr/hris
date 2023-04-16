<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('full_address');
            $table->unsignedBigInteger('region_id')->index();
            $table->unsignedBigInteger('province_id')->index();
            $table->unsignedBigInteger('city_id')->index();
            $table->unsignedBigInteger('barangay_id')->index();
            $table->timestamps();

            // $table->foreign('region_id')->references('id')->on('regions');
            // $table->foreign('province_id')->references('id')->on('provinces');
            // $table->foreign('city_id')->references('id')->on('cities');
            // $table->foreign('barangay_id')->references('id')->on('barangays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
