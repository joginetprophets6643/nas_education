<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasExamDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nas_exam_details', function (Blueprint $table) {
            $table->id();
            $table->string('state_id')->nullable();
            $table->string('state_cd')->nullable();
            $table->string('state_name')->nullable();            
            $table->string('district_id')->nullable();
            $table->string('district_cd')->nullable();
            $table->string('district_name')->nullable();
            $table->string('udise_sch_code')->nullable();
            $table->string('school_name')->nullable();
            $table->string('frame')->nullable();
            $table->string('nas_flag')->nullable();
            $table->string('c3_nas_flag')->nullable();
            $table->string('c3_res')->nullable();
            $table->string('c3_stu_app')->nullable();
            $table->string('c5_nas_flag')->nullable();
            $table->string('c5_res')->nullable();
            $table->string('c5_stu_app')->nullable();
            $table->string('c8_nas_flag')->nullable();
            $table->string('c8_res')->nullable();
            $table->string('c8_stu_app')->nullable();
            $table->string('c10_nas_flag')->nullable();
            $table->string('c10_res')->nullable();
            $table->string('c10_stu_app')->nullable();
            $table->string('state_overall')->nullable();
            $table->string('block_name')->nullable();
            $table->string('village_name')->nullable();
            $table->string('sch_address')->nullable();
            $table->string('pincode')->nullable();
            $table->boolean('is_active')->default(0);
            $table->string('updated_by')->nullable();
            $table->string('updated_time')->nullable();
            $table->string('is_kv')->nullable();
            $table->string('samp_org')->nullable();
            $table->string('samp_rep')->nullable();
            $table->string('sch_loc_r_u')->nullable();
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
        Schema::dropIfExists('nas_exam_details');
    }
}
