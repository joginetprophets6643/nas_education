<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePqStateLevelFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pq_state_level_feedback', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('state_id');
            $table->bigInteger('grade');
            $table->string('question_code')->nullable();
            $table->string('level')->nullable();
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
        Schema::dropIfExists('pq_state_level_feedback');
    }
}
