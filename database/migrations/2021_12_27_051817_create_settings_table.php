<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_title')->nullable();
            $table->text('contact_us')->nullable();

            $table->string('website_title_hindi')->nullable();
            $table->text('contact_us_hindi')->nullable();

            $table->string('logo_1')->nullable();
            $table->string('logo_2')->nullable();
            $table->string('email_to')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->string('meta_title_hindi')->nullable();
            $table->text('meta_description_hindi')->nullable();

            $table->string('fb')->nullable();            
            $table->string('twitter')->nullable();            
            $table->string('insta')->nullable();            
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
        Schema::dropIfExists('settings');
    }
}
