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
        Schema::create('compontent_meals', function (Blueprint $table) {
            $table->id();
            $table->string('name_compontent_meal',255);
            $table->string('measruing_unit',255);
            $table->double('quantity',null,null,true);
            $table->double('protein',null,null,true);
            $table->double('carb',null,null,true);
            $table->double('fat',null,null,true);
            $table->double('calories',null,null,true);
            $table->double('weight',null,null,true);
            $table->foreignId('meal_id')->constrained('meals','id')->cascadeOnDelete();
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
        Schema::dropIfExists('compontent_meal');
    }
};
