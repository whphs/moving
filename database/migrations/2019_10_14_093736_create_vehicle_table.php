<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('move_type_id');
            $table->integer('area_id');
            $table->string('size');
            $table->float('load_weight');
            $table->float('volume');
            $table->longText('description');
            $table->string('available_baggages')->nullable();
            $table->string('unavailable_baggages')->nullable();
            $table->string('vehicle_thumb')->nullable();
            $table->string('baggage_thumb')->nullable();
            $table->string('photo_0')->nullable();
            $table->string('photo_1')->nullable();
            $table->string('photo_2')->nullable();
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
        Schema::dropIfExists('vehicle');
    }
}
