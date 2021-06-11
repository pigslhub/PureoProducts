<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->double('purchase_price')->nullable();
            $table->double('selling_price')->nullable();
            $table->double('wholesalePrice')->nullable();
            $table->string('description')->nullable();
            $table->integer('in_stock')->nullable();
            $table->string('product_code')->nullable();
            $table->string('min_price')->nullable();
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
