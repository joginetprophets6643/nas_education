<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictGradeLevelPerformance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_grade_level_performance', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('state_id');
            $table->bigInteger('district_id');
            $table->bigInteger('grade');
            $table->string('total_student')->nullable();         
            $table->string('rural_location')->nullable();
            $table->string('urban_location')->nullable();
            $table->string('govt_school')->nullable();
            $table->string('govt_aided_school')->nullable();
            $table->string('private_school')->nullable();
            $table->string('central_govt_school')->nullable();
            $table->string('sc_social_group')->nullable();
            $table->string('obc_social_group')->nullable();
            $table->string('st_social_group')->nullable();
            $table->string('general_social_group')->nullable();
            $table->string('male_gender')->nullable();
            $table->string('female_gender')->nullable();
            $table->string('total_l_student')->nullable();
            $table->string('sum_l_marks')->nullable();
            $table->string('avg_l_marks')->nullable();
            $table->string('total_m_student')->nullable();
            $table->string('sum_m_marks')->nullable();
            $table->string('avg_m_marks')->nullable();
            $table->string('total_e_student')->nullable();
            $table->string('sum_e_marks')->nullable();
            $table->string('avg_e_marks')->nullable();
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
        Schema::dropIfExists('district_grade_level_performance');
    }
}