<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictGradeLevelLearningoutcome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_grade_level_learningoutcome', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('state_id');
            $table->bigInteger('district_id');
            $table->bigInteger('grade');
            $table->string('subject_code')->nullable();
            $table->string('language')->nullable();
            $table->text('question')->nullable();
            $table->string('total_student')->nullable();
            $table->string('avg')->nullable();  
            $table->string('state_avg')->nullable();  
            $table->string('national_avg')->nullable();  
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
        Schema::dropIfExists('district_grade_level_learningoutcome');
    }
}
