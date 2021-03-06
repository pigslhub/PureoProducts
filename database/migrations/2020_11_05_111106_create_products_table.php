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
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->double('price')->nullable();
            $table->string('description')->nullable();
            $table->string('volumes')->nullable();
            $table->integer('in_stock')->nullable();
            $table->string('instruction')->nullable();
            $table->string('ingredients')->nullable();
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
