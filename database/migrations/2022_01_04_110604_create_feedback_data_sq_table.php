<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackDataSqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_data_sq', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('state_id');
            $table->bigInteger('district_id');
            $table->bigInteger('sq_bar');
            $table->bigInteger('grade');
            $table->string('question_code')->nullable();
            $table->string('total_no_question')->nullable();
            $table->string('correct_ans')->nullable(); 
            $table->string('average_performance_in_percentage')->nullable(); 
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
        Schema::dropIfExists('feedback_data_sq');
    }
}
