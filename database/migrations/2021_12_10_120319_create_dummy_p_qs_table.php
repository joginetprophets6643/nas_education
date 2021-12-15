<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyPQsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy_p_qs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pq_scan');
            $table->bigInteger('pq_bar');
            $table->string('pq_udise')->nullable();
            $table->string('pq_grade')->nullable();
            $table->string('pq_nasid')->nullable();
            $table->string('pq_section')->nullable();
            $table->string('pq_age')->nullable();
            $table->string('pq_min')->nullable();
            $table->string('pq_miny')->nullable();
            $table->string('pq_gender')->nullable();
            $table->string('pq_bpl')->nullable();
            $table->string('pq_cwsn')->nullable();
            $table->string('pq_q01')->nullable();
            $table->string('pq_q02')->nullable();
            $table->string('pq_q03')->nullable();
            $table->string('pq_q04')->nullable();
            $table->string('pq_q05')->nullable();
            $table->string('pq_q06')->nullable();
            $table->string('pq_q07')->nullable();
            $table->string('pq_q08')->nullable();
            $table->string('pq_q09')->nullable();
            $table->string('pq_q10')->nullable();
            $table->string('pq_q11')->nullable();
            $table->string('pq_q12')->nullable();
            $table->string('pq_q13')->nullable();
            $table->string('pq_q14')->nullable();
            $table->string('pq_q15')->nullable();
            $table->string('pq_q16')->nullable();
            $table->string('pq_q17')->nullable();
            $table->string('pq_q18')->nullable();
            $table->string('pq_q19')->nullable();
            $table->string('pq_q20')->nullable();
            $table->string('pq_q21')->nullable();
            $table->string('pq_q22')->nullable();
            $table->string('pq_q23')->nullable();
            $table->string('pq_q24a')->nullable();
            $table->string('pq_q24b')->nullable();
            $table->string('pq_q24c')->nullable();
            $table->string('pq_q24d')->nullable();
            $table->string('pq_q24e')->nullable();
            $table->string('pq_q24f')->nullable();
            $table->string('pq_q24g')->nullable();
            $table->string('pq_q24h')->nullable();
            $table->string('pq_q24i')->nullable();
            $table->string('pq_q25a')->nullable();
            $table->string('pq_q25b')->nullable();
            $table->string('pq_q25c')->nullable();
            $table->string('pq_q25d')->nullable();
            $table->string('pq_q25e')->nullable();
            $table->string('pq_q25f')->nullable();
            $table->string('pq_q25g')->nullable();
            $table->string('pq_q25h')->nullable();
            $table->string('pq_q25i')->nullable();
            $table->string('pq_q25j')->nullable();
            $table->string('pq_q26a')->nullable();
            $table->string('pq_q26b')->nullable();
            $table->string('pq_q26c')->nullable();
            $table->string('pq_q26d')->nullable();
            $table->string('pq_q26e')->nullable();
            $table->string('pq_q26f')->nullable();
            $table->string('pq_q26g')->nullable();
            $table->string('pq_q27a')->nullable();
            $table->string('pq_q27b')->nullable();
            $table->string('pq_q27c')->nullable();
            $table->string('pq_q27d')->nullable();
            $table->string('pq_q27e')->nullable();
            $table->string('pq_q27f')->nullable();
            $table->string('pq_q27g')->nullable();
            $table->string('pq_q28a')->nullable();
            $table->string('pq_q28b')->nullable();
            $table->string('pq_q28c')->nullable();
            $table->string('pq_q28d')->nullable();
            $table->string('pq_q28e')->nullable();
            $table->string('pq_q28f')->nullable();
            $table->string('pq_q28g')->nullable();
            $table->string('pq_q28h')->nullable();
            $table->string('pq_q29a')->nullable();
            $table->string('pq_q29b')->nullable();
            $table->string('pq_q29c')->nullable();
            $table->string('pq_q29d')->nullable();
            $table->string('pq_q29e')->nullable();
            $table->string('pq_q29f')->nullable();
            $table->string('pq_q29g')->nullable();
            $table->string('pq_q30')->nullable();
            $table->string('pq_q31')->nullable();
            $table->string('pq_q32')->nullable();
            $table->string('pq_q33')->nullable();
            $table->string('pq_q34')->nullable();
            $table->string('pq_q35')->nullable();
            $table->string('pq_q36')->nullable();
            $table->string('pq_q37')->nullable();
            $table->string('pq_q38')->nullable();
            $table->string('pq_q39')->nullable();
            $table->string('pq_q40')->nullable();
            $table->integer('right_count')->nullable();
            $table->float('percentage', 2, 2);
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
        Schema::dropIfExists('dummy_p_qs');
    }
}
