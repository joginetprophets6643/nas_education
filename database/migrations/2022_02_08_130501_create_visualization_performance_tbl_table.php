<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualizationPerformanceTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualization_performance_tbl', function (Blueprint $table) {

            
            $table->id();
            $table->string('type')->nullable(); 
            $table->bigInteger('district_id')->default(0);
            $table->bigInteger('state_id')->default(0);
            $table->bigInteger('grade')->nullable();

            $table->bigInteger('language_district')->default(0);
            $table->bigInteger('math_district')->default(0);
            $table->bigInteger('evs_district')->default(0);
            $table->bigInteger('mil_district')->default(0);
            $table->bigInteger('english_district')->default(0);
            $table->bigInteger('science_district')->default(0);
            $table->bigInteger('social_science_district')->default(0);

            $table->bigInteger('language_state')->default(0);
            $table->bigInteger('math_state')->default(0);
            $table->bigInteger('evs_state')->default(0);
            $table->bigInteger('mil_state')->default(0);
            $table->bigInteger('english_state')->default(0);
            $table->bigInteger('science_state')->default(0);
            $table->bigInteger('social_science_state')->default(0);
         
            $table->bigInteger('language_national')->default(0);
            $table->bigInteger('math_national')->default(0);
            $table->bigInteger('evs_national')->default(0);
            $table->bigInteger('mil_national')->default(0);
            $table->bigInteger('english_national')->default(0);
            $table->bigInteger('science_national')->default(0);
            $table->bigInteger('social_science_national')->default(0);

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
        Schema::dropIfExists('visualization_performance_tbl');
    }
}
