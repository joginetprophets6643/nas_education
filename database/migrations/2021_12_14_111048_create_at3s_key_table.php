<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAt3sKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('at3s_key', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sq_scan');
            $table->bigInteger('at3_bar');
            $table->string('at3_udise')->nullable();
            $table->string('at3_set')->nullable();
            $table->string('at3_grade')->nullable();
            $table->string('at3_sect')->nullable();
            $table->string('at3_nasid')->nullable();
            $table->string('at3_socgrp')->nullable();
            $table->string('at3_cwd')->nullable();
            $table->string('at3_q01')->nullable();
            $table->string('at3_q02')->nullable();
            $table->string('at3_q03')->nullable();
            $table->string('at3_q04')->nullable();
            $table->string('at3_q05')->nullable();
            $table->string('at3_q06')->nullable();
            $table->string('at3_q07')->nullable();
            $table->string('at3_q08')->nullable();
            $table->string('at3_q09')->nullable();
            $table->string('at3_q10')->nullable();
            $table->string('at3_q11')->nullable();
            $table->string('at3_q12')->nullable();
            $table->string('at3_q13')->nullable();
            $table->string('at3_q14')->nullable();
            $table->string('at3_q15')->nullable();
            $table->string('at3_q16')->nullable();
            $table->string('at3_q17')->nullable();
            $table->string('at3_q18')->nullable();
            $table->string('at3_q19')->nullable();
            $table->string('at3_q20')->nullable();
            $table->string('at3_q21')->nullable();
            $table->string('at3_q22')->nullable();
            $table->string('at3_q23')->nullable();
            $table->string('at3_q24')->nullable();
            $table->string('at3_q25')->nullable();
            $table->string('at3_q26')->nullable();
            $table->string('at3_q27')->nullable();
            $table->string('at3_q28')->nullable();
            $table->string('at3_q29')->nullable();
            $table->string('at3_q30')->nullable();
            $table->string('at3_q31')->nullable();
            $table->string('at3_q32')->nullable();
            $table->string('at3_q33')->nullable();
            $table->string('at3_q34')->nullable();
            $table->string('at3_q35')->nullable();
            $table->string('at3_q36')->nullable();
            $table->string('at3_q37')->nullable();
            $table->string('at3_q38')->nullable();
            $table->string('at3_q39')->nullable();
            $table->string('at3_q40')->nullable();
            $table->string('at3_q41')->nullable();
            $table->string('at3_q42')->nullable();
            $table->string('at3_q43')->nullable();
            $table->string('at3_q44')->nullable();
            $table->string('at3_q45')->nullable();
            $table->string('at3_q46')->nullable();
            $table->string('at3_q47')->nullable();
            $table->integer('right_count')->nullable();
            $table->float('percentage', 2, 2)->nullable();
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
        Schema::dropIfExists('at3s_key');
    }
}
