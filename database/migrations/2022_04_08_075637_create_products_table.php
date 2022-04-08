<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->bigInteger('productCategory_id')->unsigned();
            $table->string('products_img')->nullable();
            $table->string('products_name');
            $table->string('products_desc');
            $table->string('products_price');
            $table->timestamps();

            $table->foreign('productCategory_id')->references('categories_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
