<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('vehicle_id');
            $table->string('where_from');
            $table->integer('from_floor');
            $table->string('where_to');
            $table->integer('to_floor');
            $table->float('distance');
            $table->float('price');
            $table->dateTime('when');
            $table->longText('description');
            $table->string('photo_0');
            $table->string('photo_1');
            $table->string('photo_2');
            $table->integer('big_item');
            $table->integer('helper_count');
            $table->string('phone');

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
        Schema::dropIfExists('bookings');
    }
}
