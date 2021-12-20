<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyAt10sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy_at10s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sq_scan');
            $table->bigInteger('at1_bar');
            $table->string('at1_udise')->nullable();
            $table->string('state_id')->nullable();
            $table->string('district_id')->nullable();            
            $table->string('at1_set')->nullable();
            $table->string('at1_grade')->nullable();
            $table->string('at1_sect')->nullable();
            $table->string('at1_nasid')->nullable();
            $table->string('at1_socgrp')->nullable();
            $table->string('at1_cwd')->nullable();
            $table->string('at1_q01')->nullable();
            $table->string('at1_q02')->nullable();
            $table->string('at1_q03')->nullable();
            $table->string('at1_q04')->nullable();
            $table->string('at1_q05')->nullable();
            $table->string('at1_q06')->nullable();
            $table->string('at1_q07')->nullable();
            $table->string('at1_q08')->nullable();
            $table->string('at1_q09')->nullable();
            $table->string('at1_q10')->nullable();
            $table->string('at1_q11')->nullable();
            $table->string('at1_q12')->nullable();
            $table->string('at1_q13')->nullable();
            $table->string('at1_q14')->nullable();
            $table->string('at1_q15')->nullable();
            $table->string('at1_q16')->nullable();
            $table->string('at1_q17')->nullable();
            $table->string('at1_q18')->nullable();
            $table->string('at1_q19')->nullable();
            $table->string('at1_q20')->nullable();
            $table->string('at1_q21')->nullable();
            $table->string('at1_q22')->nullable();
            $table->string('at1_q23')->nullable();
            $table->string('at1_q24')->nullable();
            $table->string('at1_q25')->nullable();
            $table->string('at1_q26')->nullable();
            $table->string('at1_q27')->nullable();
            $table->string('at1_q28')->nullable();
            $table->string('at1_q29')->nullable();
            $table->string('at1_q30')->nullable();
            $table->string('at1_q31')->nullable();
            $table->string('at1_q32')->nullable();
            $table->string('at1_q33')->nullable();
            $table->string('at1_q34')->nullable();
            $table->string('at1_q35')->nullable();
            $table->string('at1_q36')->nullable();
            $table->string('at1_q37')->nullable();
            $table->string('at1_q38')->nullable();
            $table->string('at1_q39')->nullable();
            $table->string('at1_q40')->nullable();
            $table->string('at1_q41')->nullable();
            $table->string('at1_q42')->nullable();
            $table->string('at1_q43')->nullable();
            $table->string('at1_q44')->nullable();
            $table->string('at1_q45')->nullable();
            $table->string('at1_q46')->nullable();
            $table->string('at1_q47')->nullable();
            $table->string('at1_q48')->nullable();
            $table->string('at1_q49')->nullable();
            $table->string('at1_q50')->nullable();
            $table->string('at1_q51')->nullable();
            $table->string('at1_q52')->nullable();
            $table->string('at1_q53')->nullable();
            $table->string('at1_q54')->nullable();
            $table->string('at1_q55')->nullable();
            $table->string('at1_q56')->nullable();
            $table->string('at1_q57')->nullable();
            $table->string('at1_q58')->nullable();
            $table->string('at1_q59')->nullable();
            $table->string('at1_q60')->nullable();
            $table->string('at1_q61')->nullable();
            $table->string('at1_q62')->nullable();
            $table->string('at1_q63')->nullable();
            $table->string('at1_q64')->nullable();
            $table->string('at1_q65')->nullable();
            $table->string('at1_q66')->nullable();
            $table->string('at1_q67')->nullable();
            $table->string('at1_q68')->nullable();
            $table->string('at1_q69')->nullable();
            $table->string('at1_q70')->nullable();
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
        Schema::dropIfExists('dummy_at10s');
    }
}
