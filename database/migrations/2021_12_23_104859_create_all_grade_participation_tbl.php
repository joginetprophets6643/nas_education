<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllGradeParticipationTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_grade_participation_tbl', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('state_id');
            $table->bigInteger('district_id');
            $table->bigInteger('grade');
            $table->string('total_school')->nullable();
            $table->string('total_student')->nullable();
            $table->string('total_teacher')->nullable();            
            $table->string('rural_location')->nullable();
            $table->string('rural_location_count')->nullable();
            $table->string('urban_location')->nullable();
            $table->string('urban_location_count')->nullable();
            $table->string('govt_school')->nullable();
            $table->string('govt_school_count')->nullable();
            $table->string('govt_aided_school')->nullable();
            $table->string('govt_aided_school_count')->nullable();
            $table->string('private_school')->nullable();
            $table->string('private_school_count')->nullable();
            $table->string('central_govt_school')->nullable();
            $table->string('central_govt_school_count')->nullable();
            $table->string('sc_social_group')->nullable();
            $table->string('sc_social_group_count')->nullable();
            $table->string('obc_social_group')->nullable();
            $table->string('obc_social_group_count')->nullable();
            $table->string('st_social_group')->nullable();
            $table->string('st_social_group_count')->nullable();
            $table->string('general_social_group')->nullable();
            $table->string('general_social_group_count')->nullable();
            $table->string('male_gender')->nullable();
            $table->string('male_gender_count')->nullable();
            $table->string('female_gender')->nullable();
            $table->string('female_gender_count')->nullable();
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
        Schema::dropIfExists('all_grade_participation_tbl');
    }
}
