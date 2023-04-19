<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->increments('treatment_id');
            $table->string('image')->nullable();
            $table->integer('category_id')->unsigned()->references('category_id')->on('categories')->nullable(); 
            $table->string('headline')->nullable();
            $table->string('treatment')->nullable();
            $table->string('description')->nullable();
            $table->string('benefit')->nullable();
            $table->string('faq')->nullable();
            $table->string('galImg1')->nullable();
            $table->string('galImg2')->nullable();
            $table->string('disPacks')->nullable();
            $table->string('bkngLink')->nullable();
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
        Schema::dropIfExists('treatments');
    }
}
