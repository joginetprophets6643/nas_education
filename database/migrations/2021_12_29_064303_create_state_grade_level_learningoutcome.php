<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStateGradeLevelLearningoutcome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_grade_level_learningoutcome', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('state_id');
            $table->bigInteger('grade');
            $table->string('subject_code')->nullable();
            $table->string('language')->nullable();
            $table->string('question')->nullable();
            $table->string('total_student')->nullable();
            $table->string('avg')->nullable();  
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
        Schema::dropIfExists('state_grade_level_learningoutcome');
    }
}
