<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyAt5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy_at5s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sq_scan');
            $table->bigInteger('at5_bar');
            $table->string('at5_bar_error_desc')->nullable();
            $table->bigInteger('at5_parent_bar');            
            $table->string('at5_udise')->nullable();
            $table->string('at5_udise_error_desc')->nullable();

            $table->string('state_id')->nullable();
            $table->string('district_id')->nullable();  

            $table->string('at5_set')->nullable();
            $table->string('at5_set_error_desc')->nullable();

            $table->string('at5_grade')->nullable();
            $table->string('at5_grade_error_desc')->nullable();

            $table->string('at5_sect')->nullable();
            $table->string('at5_nasid')->nullable();

            $table->string('at5_socgrp')->nullable();
            $table->string('at5_socgrp_error_desc')->nullable();

            $table->string('at5_cwd')->nullable();
            $table->string('at5_cwd_error_desc')->nullable();

            $table->string('at5_q01')->nullable();
            $table->string('at5_q01_error_desc')->nullable();

            $table->string('at5_q02')->nullable();
            $table->string('at5_q02_error_desc')->nullable();

            $table->string('at5_q03')->nullable();
            $table->string('at5_q03_error_desc')->nullable();

            $table->string('at5_q04')->nullable();
            $table->string('at5_q04_error_desc')->nullable();

            $table->string('at5_q05')->nullable();
            $table->string('at5_q05_error_desc')->nullable();

            $table->string('at5_q06')->nullable();
            $table->string('at5_q06_error_desc')->nullable();

            $table->string('at5_q07')->nullable();
            $table->string('at5_q07_error_desc')->nullable();

            $table->string('at5_q08')->nullable();
            $table->string('at5_q08_error_desc')->nullable();

            $table->string('at5_q09')->nullable();
            $table->string('at5_q09_error_desc')->nullable();

            $table->string('at5_q10')->nullable();
            $table->string('at5_q10_error_desc')->nullable();

            $table->string('at5_q11')->nullable();
            $table->string('at5_q11_error_desc')->nullable();

            $table->string('at5_q12')->nullable();
            $table->string('at5_q12_error_desc')->nullable();

            $table->string('at5_q13')->nullable();
            $table->string('at5_q13_error_desc')->nullable();

            $table->string('at5_q14')->nullable();
            $table->string('at5_q14_error_desc')->nullable();

            $table->string('at5_q15')->nullable();
            $table->string('at5_q15_error_desc')->nullable();

            $table->string('at5_q16')->nullable();
            $table->string('at5_q16_error_desc')->nullable();

            $table->string('at5_q17')->nullable();
            $table->string('at5_q17_error_desc')->nullable();

            $table->string('at5_q18')->nullable();
            $table->string('at5_q18_error_desc')->nullable();

            $table->string('at5_q19')->nullable();
            $table->string('at5_q19_error_desc')->nullable();

            $table->string('at5_q20')->nullable();
            $table->string('at5_q20_error_desc')->nullable();

            $table->string('at5_q21')->nullable();
            $table->string('at5_q21_error_desc')->nullable();

            $table->string('at5_q22')->nullable();
            $table->string('at5_q22_error_desc')->nullable();

            $table->string('at5_q23')->nullable();
            $table->string('at5_q23_error_desc')->nullable();

            $table->string('at5_q24')->nullable();
            $table->string('at5_q24_error_desc')->nullable();

            $table->string('at5_q25')->nullable();
            $table->string('at5_q25_error_desc')->nullable();

            $table->string('at5_q26')->nullable();
            $table->string('at5_q26_error_desc')->nullable();

            $table->string('at5_q27')->nullable();
            $table->string('at5_q27_error_desc')->nullable();

            $table->string('at5_q28')->nullable();
            $table->string('at5_q28_error_desc')->nullable();

            $table->string('at5_q29')->nullable();
            $table->string('at5_q29_error_desc')->nullable();

            $table->string('at5_q30')->nullable();
            $table->string('at5_q30_error_desc')->nullable();

            $table->string('at5_q31')->nullable();
            $table->string('at5_q31_error_desc')->nullable();

            $table->string('at5_q32')->nullable();
            $table->string('at5_q32_error_desc')->nullable();

            $table->string('at5_q33')->nullable();
            $table->string('at5_q33_error_desc')->nullable();

            $table->string('at5_q34')->nullable();
            $table->string('at5_q34_error_desc')->nullable();

            $table->string('at5_q35')->nullable();
            $table->string('at5_q35_error_desc')->nullable();

            $table->string('at5_q36')->nullable();
            $table->string('at5_q36_error_desc')->nullable();

            $table->string('at5_q37')->nullable();
            $table->string('at5_q37_error_desc')->nullable();

            $table->string('at5_q38')->nullable();
            $table->string('at5_q38_error_desc')->nullable();

            $table->string('at5_q39')->nullable();
            $table->string('at5_q39_error_desc')->nullable();

            $table->string('at5_q40')->nullable();
            $table->string('at5_q40_error_desc')->nullable();

            $table->string('at5_q41')->nullable();
            $table->string('at5_q41_error_desc')->nullable();

            $table->string('at5_q42')->nullable();
            $table->string('at5_q42_error_desc')->nullable();

            $table->string('at5_q43')->nullable();
            $table->string('at5_q43_error_desc')->nullable();

            $table->string('at5_q44')->nullable();
            $table->string('at5_q44_error_desc')->nullable();

            $table->string('at5_q45')->nullable();
            $table->string('at5_q45_error_desc')->nullable();

            $table->string('at5_q46')->nullable();
            $table->string('at5_q46_error_desc')->nullable();

            $table->string('at5_q47')->nullable();
            $table->string('at5_q47_error_desc')->nullable();

            $table->string('at5_q48')->nullable();
            $table->string('at5_q48_error_desc')->nullable();

            $table->string('at5_q49')->nullable();
            $table->string('at5_q49_error_desc')->nullable();

            $table->string('at5_q50')->nullable();
            $table->string('at5_q50_error_desc')->nullable();

            $table->string('at5_q51')->nullable();
            $table->string('at5_q51_error_desc')->nullable();

            $table->string('at5_q52')->nullable();
            $table->string('at5_q52_error_desc')->nullable();

            $table->string('at5_q53')->nullable();
            $table->string('at5_q53_error_desc')->nullable();
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
        Schema::dropIfExists('dummy_at5s');
    }
}
