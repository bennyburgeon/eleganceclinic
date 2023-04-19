<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salons', function (Blueprint $table) {
            $table->increments('salon_id');
            $table->string("name")->nullable();
            $table->string("image")->nullable();
            $table->string("google")->nullable();
            $table->string("facebook")->nullable();
            $table->string("about")->nullable();
            $table->string("opening_hours")->nullable();
            $table->string("facilities")->nullable();
            $table->string("payment")->nullable();
            $table->string("packages")->nullable();
            $table->string("pricelist")->nullable();
            $table->string("gift")->nullable();
            $table->string("map")->nullable();
            $table->string("booking_button")->nullable();
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
        Schema::dropIfExists('salons');
    }
}
