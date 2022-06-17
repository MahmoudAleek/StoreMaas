<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->string('model');
            $table->longtext('description');
            $table->string('state');
            $table->string('note');
            $table->string('sku',64)->nullable();
            $table->string('upc',12)->nullable();
            $table->string('ean',14)->nullable();
            $table->string('gtin',14)->nullable();
            $table->string('isbn',17)->nullable();
            $table->date('availableTime')->nullable();
            $table->unsignedBigInteger('ownerId');
            $table->unsignedBigInteger('subCategoryId');
            $table->unsignedBigInteger('brandId');
            $table->foreign('ownerId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subCategoryId')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->foreign('brandId')->references('id')->on('brands')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
