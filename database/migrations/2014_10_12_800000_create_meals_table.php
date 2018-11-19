<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Meals', function (Blueprint $table) {
            $table->increments('Meal_Id');
            $table->string('Meal_Name');
            $table->double('Meal_Price', 8, 2);
            $table->string('Supplier_Address');
            $table->string('Meal_Desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Meals');
    }
}
