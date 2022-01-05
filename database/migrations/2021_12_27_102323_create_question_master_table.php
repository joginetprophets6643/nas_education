<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_master', function (Blueprint $table) {
            $table->id();
            $table->string('at_set')->nullable();
            $table->string('at_grade')->nullable();
            $table->string('at_q01')->nullable();
            $table->string('at_q02')->nullable();
            $table->string('at_q03')->nullable();
            $table->string('at_q04')->nullable();
            $table->string('at_q05')->nullable();
            $table->string('at_q06')->nullable();
            $table->string('at_q07')->nullable();
            $table->string('at_q08')->nullable();
            $table->string('at_q09')->nullable();
            $table->string('at_q10')->nullable();
            $table->string('at_q11')->nullable();
            $table->string('at_q12')->nullable();
            $table->string('at_q13')->nullable();
            $table->string('at_q14')->nullable();
            $table->string('at_q15')->nullable();
            $table->string('at_q16')->nullable();
            $table->string('at_q17')->nullable();
            $table->string('at_q18')->nullable();
            $table->string('at_q19')->nullable();
            $table->string('at_q20')->nullable();
            $table->string('at_q21')->nullable();
            $table->string('at_q22')->nullable();
            $table->string('at_q23')->nullable();
            $table->string('at_q24')->nullable();
            $table->string('at_q25')->nullable();
            $table->string('at_q26')->nullable();
            $table->string('at_q27')->nullable();
            $table->string('at_q28')->nullable();
            $table->string('at_q29')->nullable();
            $table->string('at_q30')->nullable();
            $table->string('at_q31')->nullable();
            $table->string('at_q32')->nullable();
            $table->string('at_q33')->nullable();
            $table->string('at_q34')->nullable();
            $table->string('at_q35')->nullable();
            $table->string('at_q36')->nullable();
            $table->string('at_q37')->nullable();
            $table->string('at_q38')->nullable();
            $table->string('at_q39')->nullable();
            $table->string('at_q40')->nullable();
            $table->string('at_q41')->nullable();
            $table->string('at_q42')->nullable();
            $table->string('at_q43')->nullable();
            $table->string('at_q44')->nullable();
            $table->string('at_q45')->nullable();
            $table->string('at_q46')->nullable();
            $table->string('at_q47')->nullable();
            $table->string('at_q48')->nullable();
            $table->string('at_q49')->nullable();
            $table->string('at_q50')->nullable();
            $table->string('at_q51')->nullable();
            $table->string('at_q52')->nullable();
            $table->string('at_q53')->nullable();
            $table->string('at_q54')->nullable();
            $table->string('at_q55')->nullable();
            $table->string('at_q56')->nullable();
            $table->string('at_q57')->nullable();
            $table->string('at_q58')->nullable();
            $table->string('at_q59')->nullable();
            $table->string('at_q60')->nullable();
            $table->string('at_q61')->nullable();
            $table->string('at_q62')->nullable();
            $table->string('at_q63')->nullable();
            $table->string('at_q64')->nullable();
            $table->string('at_q65')->nullable();
            $table->string('at_q66')->nullable();
            $table->string('at_q67')->nullable();
            $table->string('at_q68')->nullable();
            $table->string('at_q69')->nullable();
            $table->string('at_q70')->nullable();
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
        Schema::dropIfExists('question_master');
    }
}
