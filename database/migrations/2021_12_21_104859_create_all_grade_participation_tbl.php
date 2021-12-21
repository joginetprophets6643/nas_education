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
            $table->bigInteger('rural_location');
            $table->bigInteger('urban_location');
            $table->bigInteger('govt_school');
            $table->bigInteger('govt_aided_school');
            $table->bigInteger('private_school');
            $table->bigInteger('central_govt_school');
            $table->bigInteger('total_school');
            $table->bigInteger('total_student');
            $table->bigInteger('sc_social_group');
            $table->bigInteger('obc_social_group');
            $table->bigInteger('st_social_group');
            $table->bigInteger('general_social_group');
            $table->bigInteger('total_teacher');
            $table->bigInteger('male_gender');
            $table->bigInteger('female_gender');
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
