<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name')->nullable();
            $table->String('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->String('password')->nullable();
            $table->String('gender')->nullable();
            $table->String('address')->nullable();
            $table->String('phone')->nullable();
            $table->String('zip_code')->nullable();
            $table->String('nearby_zip_code')->nullable();
            $table->String('dob')->nullable();
            $table->String('status')->default(1);
            $table->string('avatar')->nullable();
            $table->integer('rating')->nullable();
            $table->text('fcm_token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('drivers');
    }
}
