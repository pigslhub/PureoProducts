<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('_token')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('status')->default(1);
            $table->text('fcm_token')->nullable();
            // $table->string('api_token', 60)->unique()->nullable();
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
        Schema::dropIfExists('customers');
    }
}
