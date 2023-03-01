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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->text('name_meal');
            $table->double('calories_meal',null,null,true);
            $table->double('protein',null,null,true);
            $table->double('carb',null,null,true);
            $table->double('fat',null,null,true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_meal');
    }
};
