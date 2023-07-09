<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_region', function (Blueprint $table) {
          $table->increments('Region_ID');
            $table->string('Region_name');
            $table->string('Region_conditions');
            $table->string('Crop_name');
            $table->increments('Crop_ID');


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
        Schema::dropIfExists('_region');
    }
}
