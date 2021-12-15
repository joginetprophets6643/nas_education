<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sq_scan');
            $table->bigInteger('at3_bar');
            $table->bigInteger('at3_udise');
            $table->bigInteger('at3_set');
            $table->bigInteger('at3_grade');
            $table->string('at3_sect');
            $table->bigInteger('at3_nasid');
            $table->string('at3_socgrp');
            $table->string('at3_cwd');
            $table->string('at3_q01');
            $table->string('at3_q02');
            $table->string('at3_q03');
            $table->string('at3_q04');
            $table->string('at3_q05');
            $table->string('at3_q06');
            $table->string('at3_q07');
            $table->string('at3_q08');
            $table->string('at3_q09');
            $table->string('at3_q10');
            $table->string('at3_q11');
            $table->string('at3_q12');
            $table->string('at3_q13');
            $table->string('at3_q14');
            $table->string('at3_q15');
            $table->string('at3_q16');
            $table->string('at3_q17');
            $table->string('at3_q18');
            $table->string('at3_q19');
            $table->string('at3_q20');
            $table->string('at3_q21');
            $table->string('at3_q22');
            $table->string('at3_q23');
            $table->string('at3_q24');
            $table->string('at3_q25');
            $table->string('at3_q26');
            $table->string('at3_q27');
            $table->string('at3_q28');
            $table->string('at3_q29');
            $table->string('at3_q30');
            $table->string('at3_q31');
            $table->string('at3_q32');
            $table->string('at3_q33');
            $table->string('at3_q34');
            $table->string('at3_q35');
            $table->string('at3_q36');
            $table->string('at3_q37');
            $table->string('at3_q38');
            $table->string('at3_q39');
            $table->string('at3_q40');
            $table->string('at3_q41');
            $table->string('at3_q42');
            $table->string('at3_q43');
            $table->string('at3_q44');
            $table->string('at3_q45');
            $table->string('at3_q46');
            $table->string('at3_q47');
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
        Schema::dropIfExists('uploads');
    }
}
