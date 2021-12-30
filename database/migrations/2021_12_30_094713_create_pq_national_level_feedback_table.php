<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePqNationalLevelFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pq_national_level_feedback', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('grade');
            $table->string('question_code')->nullable();
            $table->string('question_desc')->nullable();
            $table->string('total_parent')->nullable();
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
        Schema::dropIfExists('pq_national_level_feedback');
    }
}
