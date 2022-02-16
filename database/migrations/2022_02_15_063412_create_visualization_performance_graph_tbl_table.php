<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualizationPerformanceGraphTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualization_performance_graph_tbl', function (Blueprint $table) {
            $table->string('type')->nullable(); 
            $table->bigInteger('district_id')->default(0);
            $table->bigInteger('state_id')->default(0);
            $table->bigInteger('grade')->nullable();
            $table->text('data')->nullable();         
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
        Schema::dropIfExists('visualization_performance_graph_tbl');
    }
}
