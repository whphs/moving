<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('move_type_id');
            $table->integer('area_id');
            $table->string('size');
            $table->float('load_weight');
            $table->float('volume');
            $table->integer('init_distance');
            $table->integer('init_price');
            $table->double('init_price_for_items');
            $table->integer('price_per_floor');
            $table->integer('price_per_big_item');
            $table->integer('price_per_floor_for_big_item');
            $table->longText('description');
            $table->string('available_items')->nullable();
            $table->string('unavailable_items')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
