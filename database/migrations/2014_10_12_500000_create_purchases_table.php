<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Purchases', function (Blueprint $table) {
            $table->increments('Purchase_Id');
            $table->integer('Product_Supplier_Id');
            $table->double('Price_Purchased', 8, 2);
            $table->date('Date_Purchased');
            $table->integer('Product_Qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Purchases');
    }
}
