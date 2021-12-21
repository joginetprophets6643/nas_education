<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyAt3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy_at3s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sq_scan');

            $table->bigInteger('at3_bar');
            $table->string('at3_bar_error_desc')->nullable();
            $table->bigInteger('at3_parent_bar');
            $table->string('at3_udise')->nullable();
            $table->string('at3_udise_error_desc')->nullable();

            $table->string('state_id')->nullable();
            $table->string('district_id')->nullable();

            $table->string('at3_set')->nullable();
            $table->string('at3_set_error_desc')->nullable();

            $table->string('at3_grade')->nullable();
            $table->string('at3_grade_error_desc')->nullable();

            $table->string('at3_sect')->nullable();
            $table->string('at3_nasid')->nullable();

            $table->string('at3_socgrp')->nullable();
            $table->string('at3_socgrp_error_desc')->nullable();

            $table->string('at3_cwd')->nullable();
            $table->string('at3_cwd_error_desc')->nullable();

            $table->string('at3_q01')->nullable();
            $table->string('at3_q01_error_desc')->nullable();

            $table->string('at3_q02')->nullable();
            $table->string('at3_q02_error_desc')->nullable();

            $table->string('at3_q03')->nullable();
            $table->string('at3_q03_error_desc')->nullable();

            $table->string('at3_q04')->nullable();
            $table->string('at3_q04_error_desc')->nullable();

            $table->string('at3_q05')->nullable();
            $table->string('at3_q05_error_desc')->nullable();

            $table->string('at3_q06')->nullable();
            $table->string('at3_q06_error_desc')->nullable();

            $table->string('at3_q07')->nullable();
            $table->string('at3_q07_error_desc')->nullable();

            $table->string('at3_q08')->nullable();
            $table->string('at3_q08_error_desc')->nullable();

            $table->string('at3_q09')->nullable();
            $table->string('at3_q09_error_desc')->nullable();

            $table->string('at3_q10')->nullable();
            $table->string('at3_q10_error_desc')->nullable();

            $table->string('at3_q11')->nullable();
            $table->string('at3_q11_error_desc')->nullable();

            $table->string('at3_q12')->nullable();
            $table->string('at3_q12_error_desc')->nullable();

            $table->string('at3_q13')->nullable();
            $table->string('at3_q13_error_desc')->nullable();

            $table->string('at3_q14')->nullable();
            $table->string('at3_q14_error_desc')->nullable();

            $table->string('at3_q15')->nullable();
            $table->string('at3_q15_error_desc')->nullable();

            $table->string('at3_q16')->nullable();
            $table->string('at3_q16_error_desc')->nullable();

            $table->string('at3_q17')->nullable();
            $table->string('at3_q17_error_desc')->nullable();

            $table->string('at3_q18')->nullable();
            $table->string('at3_q18_error_desc')->nullable();

            $table->string('at3_q19')->nullable();
            $table->string('at3_q19_error_desc')->nullable();

            $table->string('at3_q20')->nullable();
            $table->string('at3_q20_error_desc')->nullable();

            $table->string('at3_q21')->nullable();
            $table->string('at3_q21_error_desc')->nullable();

            $table->string('at3_q22')->nullable();
            $table->string('at3_q22_error_desc')->nullable();

            $table->string('at3_q23')->nullable();
            $table->string('at3_q23_error_desc')->nullable();

            $table->string('at3_q24')->nullable();
            $table->string('at3_q24_error_desc')->nullable();

            $table->string('at3_q25')->nullable();
            $table->string('at3_q25_error_desc')->nullable();

            $table->string('at3_q26')->nullable();
            $table->string('at3_q26_error_desc')->nullable();

            $table->string('at3_q27')->nullable();
            $table->string('at3_q27_error_desc')->nullable();

            $table->string('at3_q28')->nullable();
            $table->string('at3_q28_error_desc')->nullable();

            $table->string('at3_q29')->nullable();
            $table->string('at3_q29_error_desc')->nullable();

            $table->string('at3_q30')->nullable();
            $table->string('at3_q30_error_desc')->nullable();

            $table->string('at3_q31')->nullable();
            $table->string('at3_q31_error_desc')->nullable();

            $table->string('at3_q32')->nullable();
            $table->string('at3_q32_error_desc')->nullable();

            $table->string('at3_q33')->nullable();
            $table->string('at3_q33_error_desc')->nullable();

            $table->string('at3_q34')->nullable();
            $table->string('at3_q34_error_desc')->nullable();

            $table->string('at3_q35')->nullable();
            $table->string('at3_q35_error_desc')->nullable();

            $table->string('at3_q36')->nullable();
            $table->string('at3_q36_error_desc')->nullable();

            $table->string('at3_q37')->nullable();
            $table->string('at3_q37_error_desc')->nullable();

            $table->string('at3_q38')->nullable();
            $table->string('at3_q38_error_desc')->nullable();

            $table->string('at3_q39')->nullable();
            $table->string('at3_q39_error_desc')->nullable();

            $table->string('at3_q40')->nullable();
            $table->string('at3_q40_error_desc')->nullable();
            
            $table->string('at3_q41')->nullable();
            $table->string('at3_q41_error_desc')->nullable();

            $table->string('at3_q42')->nullable();
            $table->string('at3_q42_error_desc')->nullable();

            $table->string('at3_q43')->nullable();
            $table->string('at3_q43_error_desc')->nullable();

            $table->string('at3_q44')->nullable();
            $table->string('at3_q44_error_desc')->nullable();

            $table->string('at3_q45')->nullable();
            $table->string('at3_q45_error_desc')->nullable();

            $table->string('at3_q46')->nullable();
            $table->string('at3_q46_error_desc')->nullable();

            $table->string('at3_q47')->nullable();
            $table->string('at3_q47_error_desc')->nullable();
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
        Schema::dropIfExists('dummy_at3s');
    }
}
