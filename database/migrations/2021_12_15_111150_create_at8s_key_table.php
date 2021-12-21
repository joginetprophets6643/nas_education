<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAt8sKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('at8s_key', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sq_scan');
            $table->bigInteger('at8_bar');
            $table->bigInteger('at8_parent_bar');            
            $table->string('at8_udise')->nullable();
            $table->string('state_id')->nullable();
            $table->string('district_id')->nullable();            
            $table->string('at8_set')->nullable();
            $table->string('at8_grade')->nullable();
            $table->string('at8_sect')->nullable();
            $table->string('at8_nasid')->nullable();
            $table->string('at8_socgrp')->nullable();
            $table->string('at8_cwd')->nullable();
            $table->string('at8_q01')->nullable();
            $table->string('at8_q02')->nullable();
            $table->string('at8_q03')->nullable();
            $table->string('at8_q04')->nullable();
            $table->string('at8_q05')->nullable();
            $table->string('at8_q06')->nullable();
            $table->string('at8_q07')->nullable();
            $table->string('at8_q08')->nullable();
            $table->string('at8_q09')->nullable();
            $table->string('at8_q10')->nullable();
            $table->string('at8_q11')->nullable();
            $table->string('at8_q12')->nullable();
            $table->string('at8_q13')->nullable();
            $table->string('at8_q14')->nullable();
            $table->string('at8_q15')->nullable();
            $table->string('at8_q16')->nullable();
            $table->string('at8_q17')->nullable();
            $table->string('at8_q18')->nullable();
            $table->string('at8_q19')->nullable();
            $table->string('at8_q20')->nullable();
            $table->string('at8_q21')->nullable();
            $table->string('at8_q22')->nullable();
            $table->string('at8_q23')->nullable();
            $table->string('at8_q24')->nullable();
            $table->string('at8_q25')->nullable();
            $table->string('at8_q26')->nullable();
            $table->string('at8_q27')->nullable();
            $table->string('at8_q28')->nullable();
            $table->string('at8_q29')->nullable();
            $table->string('at8_q30')->nullable();
            $table->string('at8_q31')->nullable();
            $table->string('at8_q32')->nullable();
            $table->string('at8_q33')->nullable();
            $table->string('at8_q34')->nullable();
            $table->string('at8_q35')->nullable();
            $table->string('at8_q36')->nullable();
            $table->string('at8_q37')->nullable();
            $table->string('at8_q38')->nullable();
            $table->string('at8_q39')->nullable();
            $table->string('at8_q40')->nullable();
            $table->string('at8_q41')->nullable();
            $table->string('at8_q42')->nullable();
            $table->string('at8_q43')->nullable();
            $table->string('at8_q44')->nullable();
            $table->string('at8_q45')->nullable();
            $table->string('at8_q46')->nullable();
            $table->string('at8_q47')->nullable();
            $table->string('at8_q48')->nullable();
            $table->string('at8_q49')->nullable();
            $table->string('at8_q50')->nullable();
            $table->string('at8_q51')->nullable();
            $table->string('at8_q52')->nullable();
            $table->string('at8_q53')->nullable();
            $table->string('at8_q54')->nullable();
            $table->string('at8_q55')->nullable();
            $table->string('at8_q56')->nullable();
            $table->string('at8_q57')->nullable();
            $table->string('at8_q58')->nullable();
            $table->string('at8_q59')->nullable();
            $table->string('at8_q60')->nullable();
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
        Schema::dropIfExists('at8s_key');
    }
}
