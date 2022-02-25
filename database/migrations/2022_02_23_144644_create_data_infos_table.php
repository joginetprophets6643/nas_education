<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_infos', function (Blueprint $table) {
            $table->id();
            $table->string('type_id');
            $table->string('acc_year');
            $table->string('type');
            $table->string('file_title');
            $table->string('file_name');
            $table->string('file_description');
            $table->string('file_table');
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
        Schema::dropIfExists('data_infos');
    }
}
