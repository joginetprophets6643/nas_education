<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualizationParticipationTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualization_participation_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable(); 
            $table->bigInteger('district_id')->default(0);
            $table->bigInteger('state_id')->default(0);
            $table->bigInteger('grade')->nullable();
            $table->bigInteger('district_schools_count')->default(0);
            $table->bigInteger('district_students_count')->default(0);
            $table->bigInteger('district_teachers_count')->default(0);
            $table->bigInteger('state_schools_count')->default(0);
            $table->bigInteger('state_teachers_count')->default(0);
            $table->bigInteger('state_students_count')->default(0);
            $table->bigInteger('national_schools_count')->default(0);
            $table->bigInteger('national_teachers_count')->default(0);
            $table->bigInteger('national_students_count')->default(0);
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
        Schema::dropIfExists('visualization_participation_tbl');
    }
}
