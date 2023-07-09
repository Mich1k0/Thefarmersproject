<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_farmer', function (Blueprint $table) {
            $table->increments ('Farmer_ID');
            $table->string ('Name',100);
            $table->unsignedInteger ('National_ID');
            $table->integer ('phone_Number');
            $table->string('Username');
            $table->string('password');
            $table->increments('Region_ID');
            $table->increments ('Crop_ID');


            $table->foreign('Region_ID')->references('Region_ID')->on('region');
            $table->foreign('Crop_ID')->references('Crop_ID')->on('crop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_farmer');
    }
}
