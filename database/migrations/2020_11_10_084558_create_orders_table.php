<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->string('description')->nullable();
            $table->double('amount')->nullable();
            $table->string('due_date')->nullable();
            $table->string('pickup_date')->nullable();
            $table->string('pickup_time')->nullable();
            $table->string('due_time')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('status')->nullable();
            $table->string('purchased')->default(0);
            $table->string('order_type')->nullable();
            $table->string('checkout_session')->nullable();
            $table->string('checkout_session_status')->nullable();
            $table->integer('has_cart')->default(1);
            $table->string('payment_type')->nullable();
            $table->string('shop_rating')->nullable();
            $table->string('driver_rating')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
