<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistancePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distance_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vehicle_id')->default(0);
            $table->integer('scale_id')->default(0);
            $table->integer('from')->nullable();
            $table->integer('to')->nullable();
            $table->float('amount')->nullable();
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
        Schema::dropIfExists('distance_prices');
    }
}
