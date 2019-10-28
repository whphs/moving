<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('move_type_id');
            $table->integer('area_id');
            $table->string('vehicle_description');
            $table->string('helper_description');
            $table->double('init_price');
            $table->string('main_photo');
            $table->string('vehicle_photo');
            $table->string('helper_photo');
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
        Schema::dropIfExists('scales');
    }
}
