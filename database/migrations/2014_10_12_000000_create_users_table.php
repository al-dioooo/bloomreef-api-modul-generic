<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();

            $table->unsignedBigInteger('application_id');

            $table->string('country_code', 5);
            $table->string('phone')->unique();

            $table->string('password');

            $table->integer('OTP');

            $table->boolean('is_verified')->default(0)->comment('0 = Not yet verified, 1 = Verified');
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
        Schema::dropIfExists('users');
    }
}
