<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_masters', function (Blueprint $table) {
            $table->id();
            $table->integer('state_id');
            $table->string('state_name');
            $table->text('description')->nullable();
            $table->integer('udise_state_code');
            $table->integer('lgd_state_id')->nullable();
            $table->integer('is_active');
            $table->string('status');
            $table->integer('is_ut');
            $table->integer('view_order');
            $table->integer('map_id')->nullable();
            
            $table->string('total_district_area')->nullable();
            $table->string('total_population')->nullable();
            $table->string('rural_population')->nullable();
            $table->string('urban_population')->nullable();
            $table->string('density_of_population')->nullable();
            $table->string('literacy_rate')->nullable();
            $table->string('child_sex_ratio')->nullable();

            $table->string('no_of_schools')->nullable();
            $table->string('state_govt_schools')->nullable();
            $table->string('govt_aided_schools')->nullable();
            $table->string('central_govt_schools')->nullable();
            $table->string('private_unaided_reco_schools')->nullable();

            $table->string('teacher_state_govt_schools')->nullable();
            $table->string('teacher_govt_aided_schools')->nullable();
            $table->string('teacher_central_govt_schools')->nullable();
            $table->string('teacher_private_unaided_reco_schools')->nullable();

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
        Schema::dropIfExists('state_masters');
    }
}
