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
            $table->integer('vehicle_id')->default(0);
            $table->integer('scale_id')->default(0);
            $table->string('where_from');
            $table->integer('floor_from');
            $table->string('where_to');
            $table->integer('floor_to');
            $table->dateTime('when');
            $table->double('distance');
            $table->double('price');
            $table->longText('description')->nullable();
            $table->string('photo_0')->nullable();
            $table->string('photo_1')->nullable();
            $table->string('photo_2')->nullable();
            $table->integer('big_item')->default(0);
            $table->integer('helper_count')->default(0);
            $table->string('phone')->nullable();

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
