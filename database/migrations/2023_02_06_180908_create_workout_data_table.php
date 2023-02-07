<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_data', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->double('height');
            $table->double('weight');
            $table->boolean('gender');
            $table->string('activity rate')->default('Sedentary');
            $table->string('exercise level')->default('Beginner');
            $table->double('body fat');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('workout_data');
    }
};
