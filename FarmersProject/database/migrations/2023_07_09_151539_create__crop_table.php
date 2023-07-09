<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_crop', function (Blueprint $table) {
            $table->string('Crop_name');
            $table->increments('Crop_ID');
            $table->increments('Region_ID');
            $table->string('Crop_conditions');

            $table->foreign('Region_ID')->references('Region_ID')->on('region');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_crop');
    }
}
