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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('user_type')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('identity_yourself')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('country')->nullable();
            $table->string('state_id')->nullable();
            $table->string('district_id')->nullable();

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
