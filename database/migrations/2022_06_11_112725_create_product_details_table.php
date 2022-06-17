<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->unsignedBigInteger('propertyId');
            $table->unsignedBigInteger('productId');
            $table->string('value');
            $table->integer('quantity');
            $table->float('price');
            $table->primary(array('propertyId','value','productId'));
            $table->foreign('productId')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('propertyId')->references('id')->on('properties')->onDelete('cascade');
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
        Schema::dropIfExists('product_details');
    }
}
