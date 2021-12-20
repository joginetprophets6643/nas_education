<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyTQsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy_t_qs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sq_scan');
            $table->bigInteger('tq_bar');
            $table->string('tq_udise')->nullable();
            $table->string('state_id')->nullable();
            $table->string('district_id')->nullable();            
            $table->string('tq_grade')->nullable();
            $table->string('tq_section')->nullable();
            $table->string('tq_gender')->nullable();
            $table->string('tq_emp')->nullable();
            $table->string('tq_exp')->nullable();
            $table->string('tq_pqua')->nullable();
            $table->string('tq_subj')->nullable();
            $table->string('tq_age')->nullable();
            $table->string('tq_q01')->nullable();
            $table->string('tq_q02')->nullable();
            $table->string('tq_q03')->nullable();
            $table->string('tq_q04')->nullable();
            $table->string('tq_q05')->nullable();
            $table->string('tq_q06')->nullable();
            $table->string('tq_q07')->nullable();
            $table->string('tq_q08')->nullable();
            $table->string('tq_q09')->nullable();
            $table->string('tq_q10')->nullable();
            $table->string('tq_q11')->nullable();
            $table->string('tq_q12')->nullable();
            $table->string('tq_q13')->nullable();
            $table->string('tq_q14')->nullable();
            $table->string('tq_q15')->nullable();
            $table->string('tq_q16')->nullable();
            $table->string('tq_q17')->nullable();
            $table->string('tq_q18')->nullable();
            $table->string('tq_q19')->nullable();
            $table->string('tq_q20')->nullable();
            $table->string('tq_q21')->nullable();
            $table->string('tq_q22')->nullable();
            $table->string('tq_q23')->nullable();
            $table->string('tq_q24')->nullable();
            $table->string('tq_q25')->nullable();
            $table->string('tq_q26')->nullable();
            $table->string('tq_q27')->nullable();
            $table->string('tq_q28')->nullable();
            $table->string('tq_q29')->nullable();
            $table->string('tq_q30')->nullable();
            $table->string('tq_q31')->nullable();
            $table->string('tq_q32')->nullable();
            $table->string('tq_q33')->nullable();
            $table->string('tq_q34')->nullable();
            $table->string('tq_q35')->nullable();
            $table->string('tq_q36')->nullable();
            $table->string('tq_q37')->nullable();
            $table->string('tq_q38')->nullable();
            $table->string('tq_q39')->nullable();
            $table->string('tq_q40')->nullable();
            $table->string('tq_q41')->nullable();
            $table->string('tq_q42')->nullable();
            $table->string('tq_q43')->nullable();
            $table->string('tq_q44')->nullable();
            $table->string('tq_q45')->nullable();
            $table->string('tq_q46')->nullable();
            $table->string('tq_q47')->nullable();
            $table->string('tq_q48')->nullable();
            $table->string('tq_q49')->nullable();
            $table->string('tq_q50')->nullable();
            $table->string('tq_q51')->nullable();
            $table->string('tq_q52')->nullable();
            $table->string('tq_q53')->nullable();
            $table->string('tq_q54')->nullable();
            $table->string('tq_q55')->nullable();
            $table->string('tq_q56')->nullable();
            $table->string('tq_q57')->nullable();
            $table->string('tq_q58')->nullable();
            $table->string('tq_q59')->nullable();
            $table->string('tq_q60')->nullable();
            $table->string('tq_q61')->nullable();
            $table->string('tq_q62')->nullable();
            $table->string('tq_q63')->nullable();
            $table->string('tq_q64')->nullable();
            $table->string('tq_q65')->nullable();
            $table->string('tq_q66')->nullable();
            $table->string('tq_q67')->nullable();
            $table->string('tq_q68')->nullable();
            $table->string('tq_q69')->nullable();
            $table->string('tq_q70a')->nullable();
            $table->string('tq_q70b')->nullable();
            $table->string('tq_q70c')->nullable();
            $table->string('tq_q70d')->nullable();
            $table->string('tq_q71a')->nullable();
            $table->string('tq_q71b')->nullable();
            $table->string('tq_q71c')->nullable();
            $table->string('tq_q71d')->nullable();
            $table->string('tq_q71e')->nullable();
            $table->string('tq_q71f')->nullable();
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
        Schema::dropIfExists('dummy_t_qs');
    }
}
