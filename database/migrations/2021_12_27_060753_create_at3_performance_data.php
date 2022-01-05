<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAt3PerformanceData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('at3_performance_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('state_id');
            $table->bigInteger('district_id');
            $table->string('at_bar')->nullable();
            $table->bigInteger('grade');
            $table->string('location')->nullable();
            $table->string('management')->nullable();
            $table->string('gender')->nullable();  
            $table->string('socialgrp')->nullable();   
            $table->string('l_total_no_question')->nullable();
            $table->string('l_total_no_correct_ans')->nullable();       
            $table->string('l_avg')->nullable();
            $table->string('m_total_no_question')->nullable();
            $table->string('m_total_no_correct_ans')->nullable();             
            $table->string('m_avg')->nullable();
            $table->string('e_total_no_question')->nullable();
            $table->string('e_total_no_correct_ans')->nullable();             
            $table->string('e_avg')->nullable();
            $table->string('mil_total_no_question')->nullable();
            $table->string('mil_total_no_correct_ans')->nullable();             
            $table->string('mil_avg')->nullable();
            $table->string('eng_total_no_question')->nullable();
            $table->string('eng_total_no_correct_ans')->nullable();             
            $table->string('eng_avg')->nullable();
            $table->string('sci_total_no_question')->nullable();
            $table->string('sci_total_no_correct_ans')->nullable();             
            $table->string('sci_avg')->nullable();
            $table->string('sst_total_no_question')->nullable();
            $table->string('sst_total_no_correct_ans')->nullable();             
            $table->string('sst_avg')->nullable();
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
        Schema::dropIfExists('at3_performance_data');
    }
}
