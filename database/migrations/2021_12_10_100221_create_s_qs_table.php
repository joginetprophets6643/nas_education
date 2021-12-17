<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSQsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_qs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sq_scan');
            $table->bigInteger('sq_bar');
            $table->string('sq_udise')->nullable();
            $table->string('state_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('sq_q01')->nullable();
            $table->string('sq_q02')->nullable();
            $table->string('sq_q03')->nullable();
            $table->string('sq_q04')->nullable();
            $table->string('sq_q05')->nullable();
            $table->string('sq_q06')->nullable();
            $table->string('sq_q07')->nullable();
            $table->string('sq_q08')->nullable();
            $table->string('sq_q09')->nullable();
            $table->string('sq_q10')->nullable();
            $table->string('sq_q11')->nullable();
            $table->string('sq_q12')->nullable();
            $table->string('sq_q13')->nullable();
            $table->string('sq_q14')->nullable();
            $table->string('sq_q15')->nullable();
            $table->string('sq_q16')->nullable();
            $table->string('sq_q17')->nullable();
            $table->string('sq_q18')->nullable();
            $table->string('sq_q19')->nullable();
            $table->string('sq_q20')->nullable();
            $table->string('sq_q21')->nullable();
            $table->string('sq_q22')->nullable();
            $table->string('sq_q23')->nullable();
            $table->string('sq_q24')->nullable();
            $table->string('sq_q25')->nullable();
            $table->string('sq_q26')->nullable();
            $table->string('sq_q27')->nullable();
            $table->string('sq_q28')->nullable();
            $table->string('sq_q29')->nullable();
            $table->string('sq_q30')->nullable();
            $table->string('sq_q31')->nullable();
            $table->string('sq_q32')->nullable();
            $table->string('sq_q33')->nullable();
            $table->string('sq_q34')->nullable();
            $table->string('sq_q35')->nullable();
            $table->string('sq_q36')->nullable();
            $table->string('sq_q37')->nullable();
            $table->string('sq_q38')->nullable();
            $table->string('sq_q39')->nullable();
            $table->string('sq_q40')->nullable();
            $table->string('sq_q41')->nullable();
            $table->string('sq_q42')->nullable();
            $table->string('sq_q43')->nullable();
            $table->string('sq_q44')->nullable();
            $table->string('sq_q45')->nullable();
            $table->string('sq_q46')->nullable();
            $table->string('sq_q47')->nullable();
            $table->string('sq_q48')->nullable();
            $table->string('sq_q49')->nullable();
            $table->string('sq_q50')->nullable();
            $table->string('sq_q51')->nullable();
            $table->string('sq_q52')->nullable();
            $table->string('sq_q53')->nullable();
            $table->string('sq_q54')->nullable();
            $table->string('sq_q55')->nullable();
            $table->string('sq_q56')->nullable();
            $table->string('sq_q57')->nullable();
            $table->string('sq_q58')->nullable();
            $table->string('sq_q59')->nullable();
            $table->string('sq_q60')->nullable();
            $table->string('sq_q61')->nullable();
            $table->string('sq_q62')->nullable();
            $table->string('sq_q63')->nullable();
            $table->string('sq_q64')->nullable();
            $table->string('sq_q65')->nullable();
            $table->string('sq_q66')->nullable();
            $table->string('sq_q67')->nullable();
            $table->string('sq_q68')->nullable();
            $table->string('sq_q69a')->nullable();
            $table->string('sq_q69b')->nullable();
            $table->string('sq_q69c')->nullable();
            $table->string('sq_q69d')->nullable();
            $table->string('sq_q69e')->nullable();
            $table->string('sq_q69f')->nullable();
            $table->string('sq_q69g')->nullable();
            $table->string('sq_q69h')->nullable();
            $table->string('sq_q70')->nullable();
            $table->string('sq_q71')->nullable();
            $table->string('sq_q72')->nullable();
            $table->string('sq_q73')->nullable();
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
        Schema::dropIfExists('s_qs');
    }
}
