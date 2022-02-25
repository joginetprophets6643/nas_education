<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalStaticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('national_statistic', function (Blueprint $table) {
            $table->id();
            $table->string('total_district_area')->nullable();
            $table->string('total_population')->nullable();
            $table->string('rural_population')->nullable();
            $table->string('urban_population')->nullable();
            $table->string('density_of_population')->nullable();
            $table->string('literacy_rate')->nullable();
            $table->string('child_sex_ratio')->nullable();
            $table->string('no_of_teachers')->nullable();
            $table->string('no_of_students')->nullable();
            $table->string('no_of_schools')->nullable();
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
        Schema::dropIfExists('national_statistic');
    }
}
