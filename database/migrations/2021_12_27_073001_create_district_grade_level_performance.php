<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictGradeLevelPerformance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_grade_level_performance', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('state_id');
            $table->bigInteger('district_id');
            $table->bigInteger('grade');
            $table->string('total_student')->nullable();         
            $table->string('rural_location')->nullable();
            $table->string('urban_location')->nullable();
            $table->string('govt_school')->nullable();
            $table->string('govt_aided_school')->nullable();
            $table->string('private_school')->nullable();
            $table->string('central_govt_school')->nullable();
            $table->string('sc_social_group')->nullable();
            $table->string('obc_social_group')->nullable();
            $table->string('st_social_group')->nullable();
            $table->string('general_social_group')->nullable();
            $table->string('male_gender')->nullable();
            $table->string('female_gender')->nullable();
            $table->string('sum_l_marks')->nullable();
            $table->string('avg_l_marks')->nullable();
            $table->string('sum_m_marks')->nullable();
            $table->string('avg_m_marks')->nullable();
            $table->string('sum_e_marks')->nullable();
            $table->string('avg_e_marks')->nullable();
            $table->string('sum_mil_marks')->nullable();
            $table->string('avg_mil_marks')->nullable();
            $table->string('sum_eng_marks')->nullable();
            $table->string('avg_eng_marks')->nullable();
            $table->string('sum_sci_marks')->nullable();
            $table->string('avg_sci_marks')->nullable();
            $table->string('sum_sst_marks')->nullable();
            $table->string('avg_sst_marks')->nullable();
            $table->string('l_sc_social_group')->nullable();
            $table->string('l_obc_social_group')->nullable();
            $table->string('l_st_social_group')->nullable();
            $table->string('l_general_social_group')->nullable();
            $table->string('m_sc_social_group')->nullable();
            $table->string('m_obc_social_group')->nullable();
            $table->string('m_st_social_group')->nullable();
            $table->string('m_general_social_group')->nullable();
            $table->string('evs_sc_social_group')->nullable();
            $table->string('evs_obc_social_group')->nullable();
            $table->string('evs_st_social_group')->nullable();
            $table->string('evs_general_social_group')->nullable();
            $table->string('mil_sc_social_group')->nullable();
            $table->string('mil_obc_social_group')->nullable();
            $table->string('mil_st_social_group')->nullable();
            $table->string('mil_general_social_group')->nullable();
            $table->string('eng_sc_social_group')->nullable();
            $table->string('eng_obc_social_group')->nullable();
            $table->string('eng_st_social_group')->nullable();
            $table->string('eng_general_social_group')->nullable();
            $table->string('sci_sc_social_group')->nullable();
            $table->string('sci_obc_social_group')->nullable();
            $table->string('sci_st_social_group')->nullable();
            $table->string('sci_general_social_group')->nullable();
            $table->string('sst_sc_social_group')->nullable();
            $table->string('sst_obc_social_group')->nullable();
            $table->string('sst_st_social_group')->nullable();
            $table->string('sst_general_social_group')->nullable();
            $table->string('l_govt_management')->nullable();
            $table->string('l_govt_aided_management')->nullable();
            $table->string('l_private_management')->nullable();
            $table->string('l_central_govt_management')->nullable();
            $table->string('m_govt_management')->nullable();
            $table->string('m_govt_aided_management')->nullable();
            $table->string('m_private_management')->nullable();
            $table->string('m_central_govt_management')->nullable();
            $table->string('evs_govt_management')->nullable();
            $table->string('evs_govt_aided_management')->nullable();
            $table->string('evs_private_management')->nullable();
            $table->string('evs_central_govt_management')->nullable();
            $table->string('mil_govt_management')->nullable();
            $table->string('mil_govt_aided_management')->nullable();
            $table->string('mil_private_management')->nullable();
            $table->string('mil_central_govt_management')->nullable();
            $table->string('eng_govt_management')->nullable();
            $table->string('eng_govt_aided_management')->nullable();
            $table->string('eng_private_management')->nullable();
            $table->string('eng_central_govt_management')->nullable();
            $table->string('sci_govt_management')->nullable();
            $table->string('sci_govt_aided_management')->nullable();
            $table->string('sci_private_management')->nullable();
            $table->string('sci_central_govt_management')->nullable();
            $table->string('sst_govt_management')->nullable();
            $table->string('sst_govt_aided_management')->nullable();
            $table->string('sst_private_management')->nullable();
            $table->string('sst_central_govt_management')->nullable();
            $table->string('l_rural_location')->nullable();
            $table->string('l_urban_location')->nullable();
            $table->string('m_rural_location')->nullable();
            $table->string('m_urban_location')->nullable();
            $table->string('e_rural_location')->nullable();
            $table->string('e_urban_location')->nullable();
            $table->string('mil_rural_location')->nullable();
            $table->string('mil_urban_location')->nullable();
            $table->string('eng_rural_location')->nullable();
            $table->string('eng_urban_location')->nullable();
            $table->string('sci_rural_location')->nullable();
            $table->string('sci_urban_location')->nullable();
            $table->string('sst_rural_location')->nullable();
            $table->string('sst_urban_location')->nullable();
            $table->string('l_male_gender')->nullable();
            $table->string('l_female_gender')->nullable();
            $table->string('m_male_gender')->nullable();
            $table->string('m_female_gender')->nullable();
            $table->string('e_male_gender')->nullable();
            $table->string('e_female_gender')->nullable();
            $table->string('mil_male_gender')->nullable();
            $table->string('mil_female_gender')->nullable();
            $table->string('eng_male_gender')->nullable();
            $table->string('eng_female_gender')->nullable();
            $table->string('sci_male_gender')->nullable();
            $table->string('sci_female_gender')->nullable();
            $table->string('sst_male_gender')->nullable();
            $table->string('sst_female_gender')->nullable();
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
        Schema::dropIfExists('district_grade_level_performance');
    }
}
