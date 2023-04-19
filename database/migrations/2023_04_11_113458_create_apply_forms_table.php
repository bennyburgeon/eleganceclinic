<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_forms', function (Blueprint $table) {
            $table->id();
            $table->string("job_title");
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("street");
            $table->string("city");
            $table->string("postal");
            $table->string("country");
            $table->string("right_to_work");
            $table->string("day");
            $table->string("month");
            $table->string("year");
            $table->string("cover_note");
            $table->string("file");
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
        Schema::dropIfExists('apply_forms');
    }
}
