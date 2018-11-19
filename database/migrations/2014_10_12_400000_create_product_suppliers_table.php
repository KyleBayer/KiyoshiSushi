<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product_Suppliers', function (Blueprint $table) {
            $table->increments('Product_Supplier_Id');
            $table->integer('Product_Id');
            $table->integer('Supplier_Id');
            $table->string('Supplier_Address');
            $table->double('Product_Price', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product_Suppliers');
    }
}
