<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('cover');
            $table->tinyInteger('category');
            $table->tinyInteger('color');
            $table->tinyInteger('body_type');
            $table->tinyInteger('breed');
            $table->tinyInteger('gender');
            $table->string('age');
            $table->boolean('is_cut_ear');
            $table->string('current_location');
            $table->string('story');
            $table->string('found_location');
            $table->date('found_date');
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
        Schema::dropIfExists('pets');
    }
}
