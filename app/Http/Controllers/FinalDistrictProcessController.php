<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;
use App\Models\AllGradeParticipationTBL;
use App\Models\PerformanceMaster;
use App\Models\DistrictGradeLevelLearningOutCome;
use App\Models\PQDistrictLevelFeedback;
use DB;

class FinalDistrictProcessController extends Controller
{
    public function alldistrictParticipationData()
    {
         DB::table('all_grade_participation_tbl')->truncate();
         $grade3PrcoessData = $this->grade3ParticipationData();
         $grade5PrcoessData = $this->grade5ParticipationData();
         $grade8PrcoessData = $this->grade8ParticipationData();
         $grade10PrcoessData = $this->grade10ParticipationData();
         return Redirect()->route('performance');
    }

    public function grade3ParticipationData()
    {
        
        $final_data=DB::table('grade3districttable')->get();
        // dd($final_data);
        foreach($final_data as $data){
            AllGradeParticipationTBL::insert([
                "state_id" =>$data->state_code,
                'district_id'=>$data->dist_code,
                "grade"  =>3,
                "total_school" =>$data->dist_n_schools,
                "total_student" =>$data->dist_n,
                "total_teacher" =>$data->dist_n_teachers,
                "rural_location" =>$data->dist_rural_n,
                "rural_location_count" =>'0',
                "urban_location" =>$data->dist_urban_n,
                "urban_location_count" =>'0',
                "govt_school" =>$data->dist_govt_n,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data->dist_govtaid_n,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data->dist_private_n,
                "private_school_count" =>'0',
                "central_govt_school" =>$data->dist_centgovt_n,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data->dist_sc_n,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data->dist_obc_n,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data->dist_st_n,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data->dist_general_n,
                "general_social_group_count" =>'0',
                "male_gender" =>$data->dist_boy_n,
                "male_gender_count" =>'0',
                "female_gender" =>$data->dist_girl_n,
                "female_gender_count" =>'0',
                "trans_gender" =>$data->dist_trans_n,
                "trans_gender_count" =>'0',
               

            ]);


    
        }
    }

    public function grade5ParticipationData()
    {
        $final_data=DB::table('grade5districttable')->get();
        foreach($final_data as $data){
            AllGradeParticipationTBL::insert([
                "state_id" =>$data->state_code,
                'district_id'=>$data->dist_code,
                "grade"  =>5,
                "total_school" =>$data->dist_n_schools,
                "total_student" =>$data->dist_n,
                "total_teacher" =>$data->dist_n_teachers,
                "rural_location" =>$data->dist_rural_n,
                "rural_location_count" =>'0',
                "urban_location" =>$data->dist_urban_n,
                "urban_location_count" =>'0',
                "govt_school" =>$data->dist_govt_n,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data->dist_govtaid_n,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data->dist_private_n,
                "private_school_count" =>'0',
                "central_govt_school" =>$data->dist_centgovt_n,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data->dist_sc_n,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data->dist_obc_n,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data->dist_st_n,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data->dist_general_n,
                "general_social_group_count" =>'0',
                "male_gender" =>$data->dist_boy_n,
                "male_gender_count" =>'0',
                "female_gender" =>$data->dist_girl_n,
                "female_gender_count" =>'0',
                "trans_gender" =>$data->dist_trans_n,
                "trans_gender_count" =>'0',
            ]);
        }
    }
    public function grade8ParticipationData()
    {
        $final_data=DB::table('grade8districttable')->get();
        foreach($final_data as $data){
            AllGradeParticipationTBL::insert([
                "state_id" =>$data->state_code,
                'district_id'=>$data->dist_code,
                "grade"  =>8,
                "total_school" =>$data->dist_n_schools,
                "total_student" =>$data->dist_n,
                "total_teacher" =>$data->dist_n_teachers,
                "rural_location" =>$data->dist_rural_n,
                "rural_location_count" =>'0',
                "urban_location" =>$data->dist_urban_n,
                "urban_location_count" =>'0',
                "govt_school" =>$data->dist_govt_n,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data->dist_govtaid_n,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data->dist_private_n,
                "private_school_count" =>'0',
                "central_govt_school" =>$data->dist_centgovt_n,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data->dist_sc_n,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data->dist_obc_n,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data->dist_st_n,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data->dist_general_n,
                "general_social_group_count" =>'0',
                "male_gender" =>$data->dist_boy_n,
                "male_gender_count" =>'0',
                "female_gender" =>$data->dist_girl_n,
                "female_gender_count" =>'0',
                "trans_gender" =>$data->dist_trans_n,
                "trans_gender_count" =>'0',
            ]);
        }
    }
    public function grade10ParticipationData()
    {
        $final_data=DB::table('grade10districttable')->get();
        foreach($final_data as $data){
            AllGradeParticipationTBL::insert([
                "state_id" =>$data->state_code,
                'district_id'=>$data->dist_code,
                "grade"  =>10,
                "total_school" =>$data->dist_n_schools,
                "total_student" =>$data->dist_n,
                "total_teacher" =>$data->dist_n_teachers,
                "rural_location" =>$data->dist_rural_n,
                "rural_location_count" =>'0',
                "urban_location" =>$data->dist_urban_n,
                "urban_location_count" =>'0',
                "govt_school" =>$data->dist_govt_n,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data->dist_govtaid_n,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data->dist_private_n,
                "private_school_count" =>'0',
                "central_govt_school" =>$data->dist_centgovt_n,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data->dist_sc_n,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data->dist_obc_n,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data->dist_st_n,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data->dist_general_n,
                "general_social_group_count" =>'0',
                "male_gender" =>$data->dist_boy_n,
                "male_gender_count" =>'0',
                "female_gender" =>$data->dist_girl_n,
                "female_gender_count" =>'0',
                "trans_gender" =>$data->dist_trans_n,
                "trans_gender_count" =>'0',
            ]);
        }
    }


    public function alldistrictPerformancedata()
    {
        DB::table('performance_master')->truncate();
        $grade3PrcoessData = $this->grade3PerformanceData();
        $grade5PrcoessData = $this->grade5PerformanceData();
        $grade8PrcoessData = $this->grade8PerformanceData();
        $grade10PrcoessData = $this->grade10PerformanceData();
        return Redirect()->route('lo');
    }


    public function grade3PerformanceData()
    {
        $districtLevelPerfomanceData =DB::table('grade3districttable')->get();
        foreach($districtLevelPerfomanceData as $k=>$districtlevel)
        {
   
            $newdistrictArray = array();
            
            $newdistrictArray['language'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_la_pct)?$districtlevel->dist_la_pct:'0',
                    'state'=>isset($districtlevel->state_la_pct)?$districtlevel->state_la_pct:'0',
                    'national'=>isset($districtlevel->india_la_pct)?$districtlevel->india_la_pct:'0',
                    'se_district'=>isset($districtlevel->dist_la_se)?$districtlevel->dist_la_se:'0',
                    'se_state'=>isset($districtlevel->state_la_se)?$districtlevel->state_la_se:'0',
                    'se_national'=>isset($districtlevel->india_la_se)?$districtlevel->india_la_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_la_boys_pct)?$districtlevel->dist_la_boys_pct:'0',"girls"=>isset($districtlevel->dist_la_girls_pct)?$districtlevel->dist_la_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_la_transg_pct)?$districtlevel->dist_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_la_boys_pl12)?$districtlevel->dist_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_la_boys_pl34)?$districtlevel->dist_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_la_girls_pl12)?$districtlevel->dist_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_la_girls_pl34)?$districtlevel->dist_la_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_la_boys_pct)?$districtlevel->state_la_boys_pct:'0',"girls"=>isset($districtlevel->state_la_girls_pct)?$districtlevel->state_la_girls_pct:'0','trans_gender'=>isset($districtlevel->state_la_transg_pct)?$districtlevel->state_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_la_boys_pl12)?$districtlevel->state_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_la_boys_pl34)?$districtlevel->state_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_la_girls_pl12)?$districtlevel->state_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_la_girls_pl34)?$districtlevel->state_la_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_la_boys_pct)?$districtlevel->india_la_boys_pct:'0',"girls"=>isset($districtlevel->india_la_girls_pct)?$districtlevel->india_la_girls_pct:'0','trans_gender'=>isset($districtlevel->india_la_transg_pct)?$districtlevel->india_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_la_boys_pl12)?$districtlevel->india_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_la_boys_pl34)?$districtlevel->india_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_la_girls_pl12)?$districtlevel->india_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_la_girls_pl34)?$districtlevel->india_la_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_la_urban_pct)?$districtlevel->dist_la_urban_pct:'0',"rural"=>isset($districtlevel->dist_la_rural_pct)?$districtlevel->dist_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_la_rural_pl12)?$districtlevel->dist_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_la_urban_pl12)?$districtlevel->dist_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_la_rural_pl34)?$districtlevel->dist_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_la_urban_pl34)?$districtlevel->dist_la_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_la_urban_pct)?$districtlevel->state_la_urban_pct:'0',"rural"=>isset($districtlevel->state_la_rural_pct)?$districtlevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_la_rural_pl12)?$districtlevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_la_urban_pl12)?$districtlevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_la_rural_pl34)?$districtlevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_la_urban_pl34)?$districtlevel->state_la_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_la_urban_pct)?$districtlevel->india_la_urban_pct:'0',"rural"=>isset($districtlevel->india_la_rural_pct)?$districtlevel->india_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_la_rural_pl12)?$districtlevel->india_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_la_urban_pl12)?$districtlevel->india_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_la_rural_pl34)?$districtlevel->india_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_la_urban_pl34)?$districtlevel->india_la_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_la_govt_pct)?$districtlevel->dist_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_la_govtaid_pct)?$districtlevel->dist_la_govtaid_pct:'0',"private"=>isset($districtlevel->dist_la_private_pct)?$districtlevel->dist_la_private_pct:'0',"central_govt"=>isset($districtlevel->dist_la_centgovt_pct)?$districtlevel->dist_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_la_govt_pl12)?$districtlevel->dist_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_la_govtaid_pl12)?$districtlevel->dist_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_la_govt_pl34)?$districtlevel->dist_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_la_govtaid_pl34)?$districtlevel->dist_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_la_private_pl12)?$districtlevel->dist_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_la_centgovt_pl12)?$districtlevel->dist_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_la_private_pl34)?$districtlevel->dist_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_la_centgovt_pl34)?$districtlevel->dist_la_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_la_govt_pct)?$districtlevel->state_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_la_govtaid_pct)?$districtlevel->state_la_govtaid_pct:'0',"private"=>isset($districtlevel->state_la_private_pct)?$districtlevel->state_la_private_pct:'0',"central_govt"=>isset($districtlevel->state_la_centgovt_pct)?$districtlevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_la_govt_pl12)?$districtlevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_la_govtaid_pl12)?$districtlevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_la_govt_pl34)?$districtlevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_la_govtaid_pl34)?$districtlevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_la_private_pl12)?$districtlevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_la_centgovt_pl12)?$districtlevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_la_private_pl34)?$districtlevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_la_centgovt_pl34)?$districtlevel->state_la_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_la_govt_pct)?$districtlevel->india_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_la_govtaid_pct)?$districtlevel->india_la_govtaid_pct:'0',"private"=>isset($districtlevel->india_la_private_pct)?$districtlevel->india_la_private_pct:'0',"central_govt"=>isset($districtlevel->india_la_centgovt_pct)?$districtlevel->india_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_la_govt_pl12)?$districtlevel->india_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_la_govtaid_pl12)?$districtlevel->india_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_la_govt_pl34)?$districtlevel->india_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_la_govtaid_pl34)?$districtlevel->india_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_la_private_pl12)?$districtlevel->india_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_la_centgovt_pl12)?$districtlevel->india_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_la_private_pl34)?$districtlevel->india_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_la_centgovt_pl34)?$districtlevel->india_la_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_la_sc_pct)?$districtlevel->dist_la_sc_pct:'0',"obc"=>isset($districtlevel->dist_la_obc_pct)?$districtlevel->dist_la_obc_pct:'0',"st"=>isset($districtlevel->dist_la_st_pct)?$districtlevel->dist_la_st_pct:'0',"general"=>isset($districtlevel->dist_la_general_pct)?$districtlevel->dist_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_la_sc_pl34)?$districtlevel->dist_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_la_obc_pl12)?$districtlevel->dist_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_la_sc_pl12)?$districtlevel->dist_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_la_obc_pl34)?$districtlevel->dist_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_la_st_pl12)?$districtlevel->dist_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_la_general_pl12)?$districtlevel->dist_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_la_st_pl34)?$districtlevel->dist_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_la_general_pl34)?$districtlevel->dist_la_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_la_sc_pct)?$districtlevel->state_la_sc_pct:'0',"obc"=>isset($districtlevel->state_la_obc_pct)?$districtlevel->state_la_obc_pct:'0',"st"=>isset($districtlevel->state_la_st_pct)?$districtlevel->state_la_st_pct:'0',"general"=>isset($districtlevel->state_la_general_pct)?$districtlevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_la_sc_pl34)?$districtlevel->state_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_la_obc_pl12)?$districtlevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_la_sc_pl12)?$districtlevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_la_obc_pl34)?$districtlevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_la_st_pl12)?$districtlevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_la_general_pl12)?$districtlevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_la_st_pl34)?$districtlevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_la_general_pl34)?$districtlevel->state_la_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_la_sc_pct)?$districtlevel->india_la_sc_pct:'0',"obc"=>isset($districtlevel->india_la_obc_pct)?$districtlevel->india_la_obc_pct:'0',"st"=>isset($districtlevel->india_la_st_pct)?$districtlevel->india_la_st_pct:'0',"general"=>isset($districtlevel->india_la_general_pct)?$districtlevel->india_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_la_sc_pl34)?$districtlevel->india_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_la_obc_pl12)?$districtlevel->india_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_la_sc_pl12)?$districtlevel->india_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_la_obc_pl34)?$districtlevel->india_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_la_st_pl12)?$districtlevel->india_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_la_general_pl12)?$districtlevel->india_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_la_st_pl34)?$districtlevel->india_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_la_general_pl34)?$districtlevel->india_la_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_la_pl1)?$districtlevel->dist_la_pl1:'0',"basic"=>isset($districtlevel->dist_la_pl2)?$districtlevel->dist_la_pl2:'0',"proficient"=>isset($districtlevel->dist_la_pl3)?$districtlevel->dist_la_pl3:'0',"advanced"=>isset($districtlevel->dist_la_pl4)?$districtlevel->dist_la_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_la_pl1)?$districtlevel->state_la_pl1:'0',"basic"=>isset($districtlevel->state_la_pl2)?$districtlevel->state_la_pl2:'0',"proficient"=>isset($districtlevel->state_la_pl3)?$districtlevel->state_la_pl3:'0',"advanced"=>isset($districtlevel->state_la_pl4)?$districtlevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_la_pl1)?$districtlevel->india_la_pl1:'0',"basic"=>isset($districtlevel->india_la_pl2)?$districtlevel->india_la_pl2:'0',"proficient"=>isset($districtlevel->india_la_pl3)?$districtlevel->india_la_pl3:'0',"advanced"=>isset($districtlevel->india_la_pl4)?$districtlevel->india_la_pl4:'0'))
            );
            
            $newdistrictArray['math'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_ma_pct)?$districtlevel->dist_ma_pct:'0',
                    'state'=>isset($districtlevel->state_ma_pct)?$districtlevel->state_ma_pct:'0',
                    'national'=>isset($districtlevel->india_ma_pct)?$districtlevel->india_ma_pct:'0',
                    'se_district'=>isset($districtlevel->dist_ma_se)?$districtlevel->dist_ma_se:'0',
                    'se_state'=>isset($districtlevel->state_ma_se)?$districtlevel->state_ma_se:'0',
                    'se_national'=>isset($districtlevel->india_ma_se)?$districtlevel->india_ma_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_ma_boys_pct)?$districtlevel->dist_ma_boys_pct:'0',"girls"=>isset($districtlevel->dist_ma_girls_pct)?$districtlevel->dist_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_ma_transg_pct)?$districtlevel->dist_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_ma_boys_pl12)?$districtlevel->dist_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_ma_boys_pl34)?$districtlevel->dist_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_ma_girls_pl12)?$districtlevel->dist_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_ma_girls_pl34)?$districtlevel->dist_ma_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_ma_boys_pct)?$districtlevel->state_ma_boys_pct:'0',"girls"=>isset($districtlevel->state_ma_girls_pct)?$districtlevel->state_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->state_ma_transg_pct)?$districtlevel->state_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_ma_boys_pl12)?$districtlevel->state_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_ma_boys_pl34)?$districtlevel->state_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_ma_girls_pl12)?$districtlevel->state_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_ma_girls_pl34)?$districtlevel->state_ma_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_ma_boys_pct)?$districtlevel->india_ma_boys_pct:'0',"girls"=>isset($districtlevel->india_ma_girls_pct)?$districtlevel->india_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->india_ma_transg_pct)?$districtlevel->india_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_ma_boys_pl12)?$districtlevel->india_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_ma_boys_pl34)?$districtlevel->india_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_ma_girls_pl12)?$districtlevel->india_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_ma_girls_pl34)?$districtlevel->india_ma_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_ma_urban_pct)?$districtlevel->dist_ma_urban_pct:'0',"rural"=>isset($districtlevel->dist_ma_rural_pct)?$districtlevel->dist_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_ma_rural_pl12)?$districtlevel->dist_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_ma_urban_pl12)?$districtlevel->dist_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_ma_rural_pl34)?$districtlevel->dist_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_ma_urban_pl34)?$districtlevel->dist_ma_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_ma_urban_pct)?$districtlevel->state_ma_urban_pct:'0',"rural"=>isset($districtlevel->state_ma_rural_pct)?$districtlevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_ma_rural_pl12)?$districtlevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_ma_urban_pl12)?$districtlevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_ma_rural_pl34)?$districtlevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_ma_urban_pl34)?$districtlevel->state_ma_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_ma_urban_pct)?$districtlevel->india_ma_urban_pct:'0',"rural"=>isset($districtlevel->india_ma_rural_pct)?$districtlevel->india_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_ma_rural_pl12)?$districtlevel->india_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_ma_urban_pl12)?$districtlevel->india_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_ma_rural_pl34)?$districtlevel->india_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_ma_urban_pl34)?$districtlevel->india_ma_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_ma_govt_pct)?$districtlevel->dist_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_ma_govtaid_pct)?$districtlevel->dist_ma_govtaid_pct:'0',"private"=>isset($districtlevel->dist_ma_private_pct)?$districtlevel->dist_ma_private_pct:'0',"central_govt"=>isset($districtlevel->dist_ma_centgovt_pct)?$districtlevel->dist_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_ma_govt_pl12)?$districtlevel->dist_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_ma_govtaid_pl12)?$districtlevel->dist_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_ma_govt_pl34)?$districtlevel->dist_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_ma_govtaid_pl34)?$districtlevel->dist_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_ma_private_pl12)?$districtlevel->dist_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_ma_centgovt_pl12)?$districtlevel->dist_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_ma_private_pl34)?$districtlevel->dist_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_ma_centgovt_pl34)?$districtlevel->dist_ma_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_ma_govt_pct)?$districtlevel->state_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_ma_govtaid_pct)?$districtlevel->state_ma_govtaid_pct:'0',"private"=>isset($districtlevel->state_ma_private_pct)?$districtlevel->state_ma_private_pct:'0',"central_govt"=>isset($districtlevel->state_ma_centgovt_pct)?$districtlevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_ma_govt_pl12)?$districtlevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_ma_govtaid_pl12)?$districtlevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_ma_govt_pl34)?$districtlevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_ma_govtaid_pl34)?$districtlevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_ma_private_pl12)?$districtlevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_ma_centgovt_pl12)?$districtlevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_ma_private_pl34)?$districtlevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_ma_centgovt_pl34)?$districtlevel->state_ma_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_ma_govt_pct)?$districtlevel->india_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_ma_govtaid_pct)?$districtlevel->india_ma_govtaid_pct:'0',"private"=>isset($districtlevel->india_ma_private_pct)?$districtlevel->india_ma_private_pct:'0',"central_govt"=>isset($districtlevel->india_ma_centgovt_pct)?$districtlevel->india_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_ma_govt_pl12)?$districtlevel->india_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_ma_govtaid_pl12)?$districtlevel->india_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_ma_govt_pl34)?$districtlevel->india_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_ma_govtaid_pl34)?$districtlevel->india_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_ma_private_pl12)?$districtlevel->india_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_ma_centgovt_pl12)?$districtlevel->india_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_ma_private_pl34)?$districtlevel->india_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_ma_centgovt_pl34)?$districtlevel->india_ma_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_ma_sc_pct)?$districtlevel->dist_ma_sc_pct:'0',"obc"=>isset($districtlevel->dist_ma_obc_pct)?$districtlevel->dist_ma_obc_pct:'0',"st"=>isset($districtlevel->dist_ma_st_pct)?$districtlevel->dist_ma_st_pct:'0',"general"=>isset($districtlevel->dist_ma_general_pct)?$districtlevel->dist_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_ma_sc_pl34)?$districtlevel->dist_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_ma_obc_pl12)?$districtlevel->dist_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_ma_sc_pl12)?$districtlevel->dist_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_ma_obc_pl34)?$districtlevel->dist_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_ma_st_pl12)?$districtlevel->dist_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_ma_general_pl12)?$districtlevel->dist_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_ma_st_pl34)?$districtlevel->dist_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_ma_general_pl34)?$districtlevel->dist_ma_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_ma_sc_pct)?$districtlevel->state_ma_sc_pct:'0',"obc"=>isset($districtlevel->state_ma_obc_pct)?$districtlevel->state_ma_obc_pct:'0',"st"=>isset($districtlevel->state_ma_st_pct)?$districtlevel->state_ma_st_pct:'0',"general"=>isset($districtlevel->state_ma_general_pct)?$districtlevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_ma_sc_pl34)?$districtlevel->state_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_ma_obc_pl12)?$districtlevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_ma_sc_pl12)?$districtlevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_ma_obc_pl34)?$districtlevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_ma_st_pl12)?$districtlevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_ma_general_pl12)?$districtlevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_ma_st_pl34)?$districtlevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_ma_general_pl34)?$districtlevel->state_ma_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_ma_sc_pct)?$districtlevel->india_ma_sc_pct:'0',"obc"=>isset($districtlevel->india_ma_obc_pct)?$districtlevel->india_ma_obc_pct:'0',"st"=>isset($districtlevel->india_ma_st_pct)?$districtlevel->india_ma_st_pct:'0',"general"=>isset($districtlevel->india_ma_general_pct)?$districtlevel->india_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_ma_sc_pl34)?$districtlevel->india_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_ma_obc_pl12)?$districtlevel->india_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_ma_sc_pl12)?$districtlevel->india_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_ma_obc_pl34)?$districtlevel->india_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_ma_st_pl12)?$districtlevel->india_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_ma_general_pl12)?$districtlevel->india_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_ma_st_pl34)?$districtlevel->india_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_ma_general_pl34)?$districtlevel->india_ma_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_ma_pl1)?$districtlevel->dist_ma_pl1:'0',"basic"=>isset($districtlevel->dist_ma_pl2)?$districtlevel->dist_ma_pl2:'0',"proficient"=>isset($districtlevel->dist_ma_pl3)?$districtlevel->dist_ma_pl3:'0',"advanced"=>isset($districtlevel->dist_ma_pl4)?$districtlevel->dist_ma_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_ma_pl1)?$districtlevel->state_ma_pl1:'0',"basic"=>isset($districtlevel->state_ma_pl2)?$districtlevel->state_ma_pl2:'0',"proficient"=>isset($districtlevel->state_ma_pl3)?$districtlevel->state_ma_pl3:'0',"advanced"=>isset($districtlevel->state_ma_pl4)?$districtlevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_ma_pl1)?$districtlevel->india_ma_pl1:'0',"basic"=>isset($districtlevel->india_ma_pl2)?$districtlevel->india_ma_pl2:'0',"proficient"=>isset($districtlevel->india_ma_pl3)?$districtlevel->india_ma_pl3:'0',"advanced"=>isset($districtlevel->india_ma_pl4)?$districtlevel->india_ma_pl4:'0'))
            );
            
            $newdistrictArray['evs'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_ev_pct)?$districtlevel->dist_ev_pct:'0',
                    'state'=>isset($districtlevel->state_ev_pct)?$districtlevel->state_ev_pct:'0',
                    'national'=>isset($districtlevel->india_ev_pct)?$districtlevel->india_ev_pct:'0',
                    'se_district'=>isset($districtlevel->dist_ev_se)?$districtlevel->dist_ev_se:'0',
                    'se_state'=>isset($districtlevel->state_ev_se)?$districtlevel->state_ev_se:'0',
                    'se_national'=>isset($districtlevel->india_ev_se)?$districtlevel->india_ev_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_ev_boys_pct)?$districtlevel->dist_ev_boys_pct:'0',"girls"=>isset($districtlevel->dist_ev_girls_pct)?$districtlevel->dist_ev_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_ev_transg_pct)?$districtlevel->dist_ev_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_ev_boys_pl12)?$districtlevel->dist_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_ev_boys_pl34)?$districtlevel->dist_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_ev_girls_pl12)?$districtlevel->dist_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_ev_girls_pl34)?$districtlevel->dist_ev_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_ev_boys_pct)?$districtlevel->state_ev_boys_pct:'0',"girls"=>isset($districtlevel->state_ev_girls_pct)?$districtlevel->state_ev_girls_pct:'0','trans_gender'=>isset($districtlevel->state_ev_transg_pct)?$districtlevel->state_ev_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_ev_boys_pl12)?$districtlevel->state_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_ev_boys_pl34)?$districtlevel->state_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_ev_girls_pl12)?$districtlevel->state_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_ev_girls_pl34)?$districtlevel->state_ev_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_ev_boys_pct)?$districtlevel->india_ev_boys_pct:'0',"girls"=>isset($districtlevel->india_ev_girls_pct)?$districtlevel->india_ev_girls_pct:'0','trans_gender'=>isset($districtlevel->india_ev_transg_pct)?$districtlevel->india_ev_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_ev_boys_pl12)?$districtlevel->india_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_ev_boys_pl34)?$districtlevel->india_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_ev_girls_pl12)?$districtlevel->india_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_ev_girls_pl34)?$districtlevel->india_ev_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_ev_urban_pct)?$districtlevel->dist_ev_urban_pct:'0',"rural"=>isset($districtlevel->dist_ev_rural_pct)?$districtlevel->dist_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_ev_rural_pl12)?$districtlevel->dist_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_ev_urban_pl12)?$districtlevel->dist_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_ev_rural_pl34)?$districtlevel->dist_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_ev_urban_pl34)?$districtlevel->dist_ev_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_ev_urban_pct)?$districtlevel->state_ev_urban_pct:'0',"rural"=>isset($districtlevel->state_ev_rural_pct)?$districtlevel->state_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_ev_rural_pl12)?$districtlevel->state_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_ev_urban_pl12)?$districtlevel->state_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_ev_rural_pl34)?$districtlevel->state_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_ev_urban_pl34)?$districtlevel->state_ev_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_ev_urban_pct)?$districtlevel->india_ev_urban_pct:'0',"rural"=>isset($districtlevel->india_ev_rural_pct)?$districtlevel->india_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_ev_rural_pl12)?$districtlevel->india_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_ev_urban_pl12)?$districtlevel->india_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_ev_rural_pl34)?$districtlevel->india_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_ev_urban_pl34)?$districtlevel->india_ev_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_ev_govt_pct)?$districtlevel->dist_ev_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_ev_govtaid_pct)?$districtlevel->dist_ev_govtaid_pct:'0',"private"=>isset($districtlevel->dist_ev_private_pct)?$districtlevel->dist_ev_private_pct:'0',"central_govt"=>isset($districtlevel->dist_ev_centgovt_pct)?$districtlevel->dist_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_ev_govt_pl12)?$districtlevel->dist_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_ev_govtaid_pl12)?$districtlevel->dist_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_ev_govt_pl34)?$districtlevel->dist_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_ev_govtaid_pl34)?$districtlevel->dist_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_ev_private_pl12)?$districtlevel->dist_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_ev_centgovt_pl12)?$districtlevel->dist_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_ev_private_pl34)?$districtlevel->dist_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_ev_centgovt_pl34)?$districtlevel->dist_ev_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_ev_govt_pct)?$districtlevel->state_ev_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_ev_govtaid_pct)?$districtlevel->state_ev_govtaid_pct:'0',"private"=>isset($districtlevel->state_ev_private_pct)?$districtlevel->state_ev_private_pct:'0',"central_govt"=>isset($districtlevel->state_ev_centgovt_pct)?$districtlevel->state_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_ev_govt_pl12)?$districtlevel->state_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_ev_govtaid_pl12)?$districtlevel->state_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_ev_govt_pl34)?$districtlevel->state_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_ev_govtaid_pl34)?$districtlevel->state_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_ev_private_pl12)?$districtlevel->state_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_ev_centgovt_pl12)?$districtlevel->state_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_ev_private_pl34)?$districtlevel->state_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_ev_centgovt_pl34)?$districtlevel->state_ev_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_ev_govt_pct)?$districtlevel->india_ev_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_ev_govtaid_pct)?$districtlevel->india_ev_govtaid_pct:'0',"private"=>isset($districtlevel->india_ev_private_pct)?$districtlevel->india_ev_private_pct:'0',"central_govt"=>isset($districtlevel->india_ev_centgovt_pct)?$districtlevel->india_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_ev_govt_pl12)?$districtlevel->india_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_ev_govtaid_pl12)?$districtlevel->india_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_ev_govt_pl34)?$districtlevel->india_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_ev_govtaid_pl34)?$districtlevel->india_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_ev_private_pl12)?$districtlevel->india_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_ev_centgovt_pl12)?$districtlevel->india_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_ev_private_pl34)?$districtlevel->india_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_ev_centgovt_pl34)?$districtlevel->india_ev_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_ev_sc_pct)?$districtlevel->dist_ev_sc_pct:'0',"obc"=>isset($districtlevel->dist_ev_obc_pct)?$districtlevel->dist_ev_obc_pct:'0',"st"=>isset($districtlevel->dist_ev_st_pct)?$districtlevel->dist_ev_st_pct:'0',"general"=>isset($districtlevel->dist_ev_general_pct)?$districtlevel->dist_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_ev_sc_pl34)?$districtlevel->dist_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_ev_obc_pl12)?$districtlevel->dist_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_ev_sc_pl12)?$districtlevel->dist_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_ev_obc_pl34)?$districtlevel->dist_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_ev_st_pl12)?$districtlevel->dist_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_ev_general_pl12)?$districtlevel->dist_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_ev_st_pl34)?$districtlevel->dist_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_ev_general_pl34)?$districtlevel->dist_ev_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_ev_sc_pct)?$districtlevel->state_ev_sc_pct:'0',"obc"=>isset($districtlevel->state_ev_obc_pct)?$districtlevel->state_ev_obc_pct:'0',"st"=>isset($districtlevel->state_ev_st_pct)?$districtlevel->state_ev_st_pct:'0',"general"=>isset($districtlevel->state_ev_general_pct)?$districtlevel->state_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_ev_sc_pl34)?$districtlevel->state_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_ev_obc_pl12)?$districtlevel->state_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_ev_sc_pl12)?$districtlevel->state_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_ev_obc_pl34)?$districtlevel->state_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_ev_st_pl12)?$districtlevel->state_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_ev_general_pl12)?$districtlevel->state_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_ev_st_pl34)?$districtlevel->state_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_ev_general_pl34)?$districtlevel->state_ev_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_ev_sc_pct)?$districtlevel->india_ev_sc_pct:'0',"obc"=>isset($districtlevel->india_ev_obc_pct)?$districtlevel->india_ev_obc_pct:'0',"st"=>isset($districtlevel->india_ev_st_pct)?$districtlevel->india_ev_st_pct:'0',"general"=>isset($districtlevel->india_ev_general_pct)?$districtlevel->india_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_ev_sc_pl34)?$districtlevel->india_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_ev_obc_pl12)?$districtlevel->india_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_ev_sc_pl12)?$districtlevel->india_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_ev_obc_pl34)?$districtlevel->india_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_ev_st_pl12)?$districtlevel->india_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_ev_general_pl12)?$districtlevel->india_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_ev_st_pl34)?$districtlevel->india_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_ev_general_pl34)?$districtlevel->india_ev_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_ev_pl1)?$districtlevel->dist_ev_pl1:'0',"basic"=>isset($districtlevel->dist_ev_pl2)?$districtlevel->dist_ev_pl2:'0',"proficient"=>isset($districtlevel->dist_ev_pl3)?$districtlevel->dist_ev_pl3:'0',"advanced"=>isset($districtlevel->dist_ev_pl4)?$districtlevel->dist_ev_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_ev_pl1)?$districtlevel->state_ev_pl1:'0',"basic"=>isset($districtlevel->state_ev_pl2)?$districtlevel->state_ev_pl2:'0',"proficient"=>isset($districtlevel->state_ev_pl3)?$districtlevel->state_ev_pl3:'0',"advanced"=>isset($districtlevel->state_ev_pl4)?$districtlevel->state_ev_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_ev_pl1)?$districtlevel->india_ev_pl1:'0',"basic"=>isset($districtlevel->india_ev_pl2)?$districtlevel->india_ev_pl2:'0',"proficient"=>isset($districtlevel->india_ev_pl3)?$districtlevel->india_ev_pl3:'0',"advanced"=>isset($districtlevel->india_ev_pl4)?$districtlevel->india_ev_pl4:'0'))
            );
                
            $districtArr['state_id'] = (int)$districtlevel->state_code;
            $districtArr['district_id'] = (int)$districtlevel->dist_code;
            $districtArr['grade'] = 3;
            $districtArr['data'] = json_encode($newdistrictArray);
            $districtArr['created_at'] = now();
            $districtArr['updated_at'] = now();
            
            $districtPerformaceData[]=$districtArr;
        }
            PerformanceMaster::insert($districtPerformaceData);
    }

    public function grade5PerformanceData()
    {
        $districtLevelPerfomanceData =DB::table('grade5districttable')->get();
        foreach($districtLevelPerfomanceData as $k=>$districtlevel)
        {
   
            $newdistrictArray = array();
            $newdistrictArray['language'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_la_pct)?$districtlevel->dist_la_pct:'0',
                    'state'=>isset($districtlevel->state_la_pct)?$districtlevel->state_la_pct:'0',
                    'national'=>isset($districtlevel->india_la_pct)?$districtlevel->india_la_pct:'0',
                    'se_district'=>isset($districtlevel->dist_la_se)?$districtlevel->dist_la_se:'0',
                    'se_state'=>isset($districtlevel->state_la_se)?$districtlevel->state_la_se:'0',
                    'se_national'=>isset($districtlevel->india_la_se)?$districtlevel->india_la_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_la_boys_pct)?$districtlevel->dist_la_boys_pct:'0',"girls"=>isset($districtlevel->dist_la_girls_pct)?$districtlevel->dist_la_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_la_transg_pct)?$districtlevel->dist_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_la_boys_pl12)?$districtlevel->dist_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_la_boys_pl34)?$districtlevel->dist_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_la_girls_pl12)?$districtlevel->dist_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_la_girls_pl34)?$districtlevel->dist_la_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_la_boys_pct)?$districtlevel->state_la_boys_pct:'0',"girls"=>isset($districtlevel->state_la_girls_pct)?$districtlevel->state_la_girls_pct:'0','trans_gender'=>isset($districtlevel->state_la_transg_pct)?$districtlevel->state_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_la_boys_pl12)?$districtlevel->state_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_la_boys_pl34)?$districtlevel->state_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_la_girls_pl12)?$districtlevel->state_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_la_girls_pl34)?$districtlevel->state_la_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_la_boys_pct)?$districtlevel->india_la_boys_pct:'0',"girls"=>isset($districtlevel->india_la_girls_pct)?$districtlevel->india_la_girls_pct:'0','trans_gender'=>isset($districtlevel->india_la_transg_pct)?$districtlevel->india_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_la_boys_pl12)?$districtlevel->india_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_la_boys_pl34)?$districtlevel->india_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_la_girls_pl12)?$districtlevel->india_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_la_girls_pl34)?$districtlevel->india_la_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_la_urban_pct)?$districtlevel->dist_la_urban_pct:'0',"rural"=>isset($districtlevel->dist_la_rural_pct)?$districtlevel->dist_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_la_rural_pl12)?$districtlevel->dist_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_la_urban_pl12)?$districtlevel->dist_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_la_rural_pl34)?$districtlevel->dist_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_la_urban_pl34)?$districtlevel->dist_la_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_la_urban_pct)?$districtlevel->state_la_urban_pct:'0',"rural"=>isset($districtlevel->state_la_rural_pct)?$districtlevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_la_rural_pl12)?$districtlevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_la_urban_pl12)?$districtlevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_la_rural_pl34)?$districtlevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_la_urban_pl34)?$districtlevel->state_la_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_la_urban_pct)?$districtlevel->india_la_urban_pct:'0',"rural"=>isset($districtlevel->india_la_rural_pct)?$districtlevel->india_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_la_rural_pl12)?$districtlevel->india_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_la_urban_pl12)?$districtlevel->india_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_la_rural_pl34)?$districtlevel->india_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_la_urban_pl34)?$districtlevel->india_la_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_la_govt_pct)?$districtlevel->dist_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_la_govtaid_pct)?$districtlevel->dist_la_govtaid_pct:'0',"private"=>isset($districtlevel->dist_la_private_pct)?$districtlevel->dist_la_private_pct:'0',"central_govt"=>isset($districtlevel->dist_la_centgovt_pct)?$districtlevel->dist_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_la_govt_pl12)?$districtlevel->dist_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_la_govtaid_pl12)?$districtlevel->dist_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_la_govt_pl34)?$districtlevel->dist_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_la_govtaid_pl34)?$districtlevel->dist_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_la_private_pl12)?$districtlevel->dist_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_la_centgovt_pl12)?$districtlevel->dist_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_la_private_pl34)?$districtlevel->dist_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_la_centgovt_pl34)?$districtlevel->dist_la_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_la_govt_pct)?$districtlevel->state_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_la_govtaid_pct)?$districtlevel->state_la_govtaid_pct:'0',"private"=>isset($districtlevel->state_la_private_pct)?$districtlevel->state_la_private_pct:'0',"central_govt"=>isset($districtlevel->state_la_centgovt_pct)?$districtlevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_la_govt_pl12)?$districtlevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_la_govtaid_pl12)?$districtlevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_la_govt_pl34)?$districtlevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_la_govtaid_pl34)?$districtlevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_la_private_pl12)?$districtlevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_la_centgovt_pl12)?$districtlevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_la_private_pl34)?$districtlevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_la_centgovt_pl34)?$districtlevel->state_la_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_la_govt_pct)?$districtlevel->india_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_la_govtaid_pct)?$districtlevel->india_la_govtaid_pct:'0',"private"=>isset($districtlevel->india_la_private_pct)?$districtlevel->india_la_private_pct:'0',"central_govt"=>isset($districtlevel->india_la_centgovt_pct)?$districtlevel->india_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_la_govt_pl12)?$districtlevel->india_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_la_govtaid_pl12)?$districtlevel->india_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_la_govt_pl34)?$districtlevel->india_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_la_govtaid_pl34)?$districtlevel->india_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_la_private_pl12)?$districtlevel->india_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_la_centgovt_pl12)?$districtlevel->india_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_la_private_pl34)?$districtlevel->india_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_la_centgovt_pl34)?$districtlevel->india_la_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_la_sc_pct)?$districtlevel->dist_la_sc_pct:'0',"obc"=>isset($districtlevel->dist_la_obc_pct)?$districtlevel->dist_la_obc_pct:'0',"st"=>isset($districtlevel->dist_la_st_pct)?$districtlevel->dist_la_st_pct:'0',"general"=>isset($districtlevel->dist_la_general_pct)?$districtlevel->dist_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_la_sc_pl34)?$districtlevel->dist_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_la_obc_pl12)?$districtlevel->dist_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_la_sc_pl12)?$districtlevel->dist_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_la_obc_pl34)?$districtlevel->dist_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_la_st_pl12)?$districtlevel->dist_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_la_general_pl12)?$districtlevel->dist_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_la_st_pl34)?$districtlevel->dist_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_la_general_pl34)?$districtlevel->dist_la_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_la_sc_pct)?$districtlevel->state_la_sc_pct:'0',"obc"=>isset($districtlevel->state_la_obc_pct)?$districtlevel->state_la_obc_pct:'0',"st"=>isset($districtlevel->state_la_st_pct)?$districtlevel->state_la_st_pct:'0',"general"=>isset($districtlevel->state_la_general_pct)?$districtlevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_la_sc_pl34)?$districtlevel->state_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_la_obc_pl12)?$districtlevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_la_sc_pl12)?$districtlevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_la_obc_pl34)?$districtlevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_la_st_pl12)?$districtlevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_la_general_pl12)?$districtlevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_la_st_pl34)?$districtlevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_la_general_pl34)?$districtlevel->state_la_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_la_sc_pct)?$districtlevel->india_la_sc_pct:'0',"obc"=>isset($districtlevel->india_la_obc_pct)?$districtlevel->india_la_obc_pct:'0',"st"=>isset($districtlevel->india_la_st_pct)?$districtlevel->india_la_st_pct:'0',"general"=>isset($districtlevel->india_la_general_pct)?$districtlevel->india_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_la_sc_pl34)?$districtlevel->india_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_la_obc_pl12)?$districtlevel->india_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_la_sc_pl12)?$districtlevel->india_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_la_obc_pl34)?$districtlevel->india_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_la_st_pl12)?$districtlevel->india_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_la_general_pl12)?$districtlevel->india_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_la_st_pl34)?$districtlevel->india_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_la_general_pl34)?$districtlevel->india_la_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_la_pl1)?$districtlevel->dist_la_pl1:'0',"basic"=>isset($districtlevel->dist_la_pl2)?$districtlevel->dist_la_pl2:'0',"proficient"=>isset($districtlevel->dist_la_pl3)?$districtlevel->dist_la_pl3:'0',"advanced"=>isset($districtlevel->dist_la_pl4)?$districtlevel->dist_la_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_la_pl1)?$districtlevel->state_la_pl1:'0',"basic"=>isset($districtlevel->state_la_pl2)?$districtlevel->state_la_pl2:'0',"proficient"=>isset($districtlevel->state_la_pl3)?$districtlevel->state_la_pl3:'0',"advanced"=>isset($districtlevel->state_la_pl4)?$districtlevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_la_pl1)?$districtlevel->india_la_pl1:'0',"basic"=>isset($districtlevel->india_la_pl2)?$districtlevel->india_la_pl2:'0',"proficient"=>isset($districtlevel->india_la_pl3)?$districtlevel->india_la_pl3:'0',"advanced"=>isset($districtlevel->india_la_pl4)?$districtlevel->india_la_pl4:'0'))
            );
            
            $newdistrictArray['math'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_ma_pct)?$districtlevel->dist_ma_pct:'0',
                    'state'=>isset($districtlevel->state_ma_pct)?$districtlevel->state_ma_pct:'0',
                    'national'=>isset($districtlevel->india_ma_pct)?$districtlevel->india_ma_pct:'0',
                    'se_district'=>isset($districtlevel->dist_math_se)?$districtlevel->dist_math_se:'0',
                    'se_state'=>isset($districtlevel->state_math_se)?$districtlevel->state_math_se:'0',
                    'se_national'=>isset($districtlevel->india_math_se)?$districtlevel->india_math_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_ma_boys_pct)?$districtlevel->dist_ma_boys_pct:'0',"girls"=>isset($districtlevel->dist_ma_girls_pct)?$districtlevel->dist_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_ma_transg_pct)?$districtlevel->dist_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_ma_boys_pl12)?$districtlevel->dist_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_ma_boys_pl34)?$districtlevel->dist_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_ma_girls_pl12)?$districtlevel->dist_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_ma_girls_pl34)?$districtlevel->dist_ma_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_ma_boys_pct)?$districtlevel->state_ma_boys_pct:'0',"girls"=>isset($districtlevel->state_ma_girls_pct)?$districtlevel->state_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->state_ma_transg_pct)?$districtlevel->state_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_ma_boys_pl12)?$districtlevel->state_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_ma_boys_pl34)?$districtlevel->state_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_ma_girls_pl12)?$districtlevel->state_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_ma_girls_pl34)?$districtlevel->state_ma_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_ma_boys_pct)?$districtlevel->india_ma_boys_pct:'0',"girls"=>isset($districtlevel->india_ma_girls_pct)?$districtlevel->india_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->india_ma_transg_pct)?$districtlevel->india_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_ma_boys_pl12)?$districtlevel->india_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_ma_boys_pl34)?$districtlevel->india_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_ma_girls_pl12)?$districtlevel->india_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_ma_girls_pl34)?$districtlevel->india_ma_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_ma_urban_pct)?$districtlevel->dist_ma_urban_pct:'0',"rural"=>isset($districtlevel->dist_ma_rural_pct)?$districtlevel->dist_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_ma_rural_pl12)?$districtlevel->dist_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_ma_urban_pl12)?$districtlevel->dist_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_ma_rural_pl34)?$districtlevel->dist_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_ma_urban_pl34)?$districtlevel->dist_ma_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_ma_urban_pct)?$districtlevel->state_ma_urban_pct:'0',"rural"=>isset($districtlevel->state_ma_rural_pct)?$districtlevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_ma_rural_pl12)?$districtlevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_ma_urban_pl12)?$districtlevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_ma_rural_pl34)?$districtlevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_ma_urban_pl34)?$districtlevel->state_ma_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_ma_urban_pct)?$districtlevel->india_ma_urban_pct:'0',"rural"=>isset($districtlevel->india_ma_rural_pct)?$districtlevel->india_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_ma_rural_pl12)?$districtlevel->india_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_ma_urban_pl12)?$districtlevel->india_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_ma_rural_pl34)?$districtlevel->india_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_ma_urban_pl34)?$districtlevel->india_ma_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_ma_govt_pct)?$districtlevel->dist_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_ma_govtaid_pct)?$districtlevel->dist_ma_govtaid_pct:'0',"private"=>isset($districtlevel->dist_ma_private_pct)?$districtlevel->dist_ma_private_pct:'0',"central_govt"=>isset($districtlevel->dist_ma_centgovt_pct)?$districtlevel->dist_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_ma_govt_pl12)?$districtlevel->dist_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_ma_govtaid_pl12)?$districtlevel->dist_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_ma_govt_pl34)?$districtlevel->dist_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_ma_govtaid_pl34)?$districtlevel->dist_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_ma_private_pl12)?$districtlevel->dist_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_ma_centgovt_pl12)?$districtlevel->dist_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_ma_private_pl34)?$districtlevel->dist_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_ma_centgovt_pl34)?$districtlevel->dist_ma_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_ma_govt_pct)?$districtlevel->state_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_ma_govtaid_pct)?$districtlevel->state_ma_govtaid_pct:'0',"private"=>isset($districtlevel->state_ma_private_pct)?$districtlevel->state_ma_private_pct:'0',"central_govt"=>isset($districtlevel->state_ma_centgovt_pct)?$districtlevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_ma_govt_pl12)?$districtlevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_ma_govtaid_pl12)?$districtlevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_ma_govt_pl34)?$districtlevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_ma_govtaid_pl34)?$districtlevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_ma_private_pl12)?$districtlevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_ma_centgovt_pl12)?$districtlevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_ma_private_pl34)?$districtlevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_ma_centgovt_pl34)?$districtlevel->state_ma_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_ma_govt_pct)?$districtlevel->india_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_ma_govtaid_pct)?$districtlevel->india_ma_govtaid_pct:'0',"private"=>isset($districtlevel->india_ma_private_pct)?$districtlevel->india_ma_private_pct:'0',"central_govt"=>isset($districtlevel->india_ma_centgovt_pct)?$districtlevel->india_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_ma_govt_pl12)?$districtlevel->india_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_ma_govtaid_pl12)?$districtlevel->india_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_ma_govt_pl34)?$districtlevel->india_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_ma_govtaid_pl34)?$districtlevel->india_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_ma_private_pl12)?$districtlevel->india_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_ma_centgovt_pl12)?$districtlevel->india_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_ma_private_pl34)?$districtlevel->india_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_ma_centgovt_pl34)?$districtlevel->india_ma_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_ma_sc_pct)?$districtlevel->dist_ma_sc_pct:'0',"obc"=>isset($districtlevel->dist_ma_obc_pct)?$districtlevel->dist_ma_obc_pct:'0',"st"=>isset($districtlevel->dist_ma_st_pct)?$districtlevel->dist_ma_st_pct:'0',"general"=>isset($districtlevel->dist_ma_general_pct)?$districtlevel->dist_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_ma_sc_pl34)?$districtlevel->dist_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_ma_obc_pl12)?$districtlevel->dist_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_ma_sc_pl12)?$districtlevel->dist_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_ma_obc_pl34)?$districtlevel->dist_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_ma_st_pl12)?$districtlevel->dist_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_ma_general_pl12)?$districtlevel->dist_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_ma_st_pl34)?$districtlevel->dist_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_ma_general_pl34)?$districtlevel->dist_ma_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_ma_sc_pct)?$districtlevel->state_ma_sc_pct:'0',"obc"=>isset($districtlevel->state_ma_obc_pct)?$districtlevel->state_ma_obc_pct:'0',"st"=>isset($districtlevel->state_ma_st_pct)?$districtlevel->state_ma_st_pct:'0',"general"=>isset($districtlevel->state_ma_general_pct)?$districtlevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_ma_sc_pl34)?$districtlevel->state_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_ma_obc_pl12)?$districtlevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_ma_sc_pl12)?$districtlevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_ma_obc_pl34)?$districtlevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_ma_st_pl12)?$districtlevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_ma_general_pl12)?$districtlevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_ma_st_pl34)?$districtlevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_ma_general_pl34)?$districtlevel->state_ma_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_ma_sc_pct)?$districtlevel->india_ma_sc_pct:'0',"obc"=>isset($districtlevel->india_ma_obc_pct)?$districtlevel->india_ma_obc_pct:'0',"st"=>isset($districtlevel->india_ma_st_pct)?$districtlevel->india_ma_st_pct:'0',"general"=>isset($districtlevel->india_ma_general_pct)?$districtlevel->india_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_ma_sc_pl34)?$districtlevel->india_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_ma_obc_pl12)?$districtlevel->india_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_ma_sc_pl12)?$districtlevel->india_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_ma_obc_pl34)?$districtlevel->india_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_ma_st_pl12)?$districtlevel->india_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_ma_general_pl12)?$districtlevel->india_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_ma_st_pl34)?$districtlevel->india_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_ma_general_pl34)?$districtlevel->india_ma_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_ma_pl1)?$districtlevel->dist_ma_pl1:'0',"basic"=>isset($districtlevel->dist_ma_pl2)?$districtlevel->dist_ma_pl2:'0',"proficient"=>isset($districtlevel->dist_ma_pl3)?$districtlevel->dist_ma_pl3:'0',"advanced"=>isset($districtlevel->dist_ma_pl4)?$districtlevel->dist_ma_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_ma_pl1)?$districtlevel->state_ma_pl1:'0',"basic"=>isset($districtlevel->state_ma_pl2)?$districtlevel->state_ma_pl2:'0',"proficient"=>isset($districtlevel->state_ma_pl3)?$districtlevel->state_ma_pl3:'0',"advanced"=>isset($districtlevel->state_ma_pl4)?$districtlevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_ma_pl1)?$districtlevel->india_ma_pl1:'0',"basic"=>isset($districtlevel->india_ma_pl2)?$districtlevel->india_ma_pl2:'0',"proficient"=>isset($districtlevel->india_ma_pl3)?$districtlevel->india_ma_pl3:'0',"advanced"=>isset($districtlevel->india_ma_pl4)?$districtlevel->india_ma_pl4:'0'))
            );
            
            $newdistrictArray['evs'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_ev_pct)?$districtlevel->dist_ev_pct:'0',
                    'state'=>isset($districtlevel->state_ev_pct)?$districtlevel->state_ev_pct:'0',
                    'national'=>isset($districtlevel->india_ev_pct)?$districtlevel->india_ev_pct:'0',
                    'se_district'=>isset($districtlevel->dist_evs_se)?$districtlevel->dist_evs_se:'0',
                    'se_state'=>isset($districtlevel->state_evs_se)?$districtlevel->state_evs_se:'0',
                    'se_national'=>isset($districtlevel->india_evs_se)?$districtlevel->india_evs_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_ev_boys_pct)?$districtlevel->dist_ev_boys_pct:'0',"girls"=>isset($districtlevel->dist_ev_girls_pct)?$districtlevel->dist_ev_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_ev_transg_pct)?$districtlevel->dist_ev_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_ev_boys_pl12)?$districtlevel->dist_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_ev_boys_pl34)?$districtlevel->dist_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_ev_girls_pl12)?$districtlevel->dist_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_ev_girls_pl34)?$districtlevel->dist_ev_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_ev_boys_pct)?$districtlevel->state_ev_boys_pct:'0',"girls"=>isset($districtlevel->state_ev_girls_pct)?$districtlevel->state_ev_girls_pct:'0','trans_gender'=>isset($districtlevel->state_ev_transg_pct)?$districtlevel->state_ev_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_ev_boys_pl12)?$districtlevel->state_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_ev_boys_pl34)?$districtlevel->state_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_ev_girls_pl12)?$districtlevel->state_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_ev_girls_pl34)?$districtlevel->state_ev_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_ev_boys_pct)?$districtlevel->india_ev_boys_pct:'0',"girls"=>isset($districtlevel->india_ev_girls_pct)?$districtlevel->india_ev_girls_pct:'0','trans_gender'=>isset($districtlevel->india_ev_transg_pct)?$districtlevel->india_ev_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_ev_boys_pl12)?$districtlevel->india_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_ev_boys_pl34)?$districtlevel->india_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_ev_girls_pl12)?$districtlevel->india_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_ev_girls_pl34)?$districtlevel->india_ev_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_ev_urban_pct)?$districtlevel->dist_ev_urban_pct:'0',"rural"=>isset($districtlevel->dist_ev_rural_pct)?$districtlevel->dist_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_ev_rural_pl12)?$districtlevel->dist_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_ev_urban_pl12)?$districtlevel->dist_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_ev_rural_pl34)?$districtlevel->dist_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_ev_urban_pl34)?$districtlevel->dist_ev_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_ev_urban_pct)?$districtlevel->state_ev_urban_pct:'0',"rural"=>isset($districtlevel->state_ev_rural_pct)?$districtlevel->state_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_ev_rural_pl12)?$districtlevel->state_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_ev_urban_pl12)?$districtlevel->state_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_ev_rural_pl34)?$districtlevel->state_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_ev_urban_pl34)?$districtlevel->state_ev_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_ev_urban_pct)?$districtlevel->india_ev_urban_pct:'0',"rural"=>isset($districtlevel->india_ev_rural_pct)?$districtlevel->india_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_ev_rural_pl12)?$districtlevel->india_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_ev_urban_pl12)?$districtlevel->india_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_ev_rural_pl34)?$districtlevel->india_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_ev_urban_pl34)?$districtlevel->india_ev_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_ev_govt_pct)?$districtlevel->dist_ev_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_ev_govtaid_pct)?$districtlevel->dist_ev_govtaid_pct:'0',"private"=>isset($districtlevel->dist_ev_private_pct)?$districtlevel->dist_ev_private_pct:'0',"central_govt"=>isset($districtlevel->dist_ev_centgovt_pct)?$districtlevel->dist_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_ev_govt_pl12)?$districtlevel->dist_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_ev_govtaid_pl12)?$districtlevel->dist_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_ev_govt_pl34)?$districtlevel->dist_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_ev_govtaid_pl34)?$districtlevel->dist_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_ev_private_pl12)?$districtlevel->dist_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_ev_centgovt_pl12)?$districtlevel->dist_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_ev_private_pl34)?$districtlevel->dist_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_ev_centgovt_pl34)?$districtlevel->dist_ev_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_ev_govt_pct)?$districtlevel->state_ev_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_ev_govtaid_pct)?$districtlevel->state_ev_govtaid_pct:'0',"private"=>isset($districtlevel->state_ev_private_pct)?$districtlevel->state_ev_private_pct:'0',"central_govt"=>isset($districtlevel->state_ev_centgovt_pct)?$districtlevel->state_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_ev_govt_pl12)?$districtlevel->state_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_ev_govtaid_pl12)?$districtlevel->state_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_ev_govt_pl34)?$districtlevel->state_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_ev_govtaid_pl34)?$districtlevel->state_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_ev_private_pl12)?$districtlevel->state_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_ev_centgovt_pl12)?$districtlevel->state_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_ev_private_pl34)?$districtlevel->state_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_ev_centgovt_pl34)?$districtlevel->state_ev_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_ev_govt_pct)?$districtlevel->india_ev_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_ev_govtaid_pct)?$districtlevel->india_ev_govtaid_pct:'0',"private"=>isset($districtlevel->india_ev_private_pct)?$districtlevel->india_ev_private_pct:'0',"central_govt"=>isset($districtlevel->india_ev_centgovt_pct)?$districtlevel->india_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_ev_govt_pl12)?$districtlevel->india_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_ev_govtaid_pl12)?$districtlevel->india_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_ev_govt_pl34)?$districtlevel->india_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_ev_govtaid_pl34)?$districtlevel->india_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_ev_private_pl12)?$districtlevel->india_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_ev_centgovt_pl12)?$districtlevel->india_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_ev_private_pl34)?$districtlevel->india_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_ev_centgovt_pl34)?$districtlevel->india_ev_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_ev_sc_pct)?$districtlevel->dist_ev_sc_pct:'0',"obc"=>isset($districtlevel->dist_ev_obc_pct)?$districtlevel->dist_ev_obc_pct:'0',"st"=>isset($districtlevel->dist_ev_st_pct)?$districtlevel->dist_ev_st_pct:'0',"general"=>isset($districtlevel->dist_ev_general_pct)?$districtlevel->dist_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_ev_sc_pl34)?$districtlevel->dist_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_ev_obc_pl12)?$districtlevel->dist_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_ev_sc_pl12)?$districtlevel->dist_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_ev_obc_pl34)?$districtlevel->dist_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_ev_st_pl12)?$districtlevel->dist_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_ev_general_pl12)?$districtlevel->dist_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_ev_st_pl34)?$districtlevel->dist_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_ev_general_pl34)?$districtlevel->dist_ev_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_ev_sc_pct)?$districtlevel->state_ev_sc_pct:'0',"obc"=>isset($districtlevel->state_ev_obc_pct)?$districtlevel->state_ev_obc_pct:'0',"st"=>isset($districtlevel->state_ev_st_pct)?$districtlevel->state_ev_st_pct:'0',"general"=>isset($districtlevel->state_ev_general_pct)?$districtlevel->state_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_ev_sc_pl34)?$districtlevel->state_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_ev_obc_pl12)?$districtlevel->state_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_ev_sc_pl12)?$districtlevel->state_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_ev_obc_pl34)?$districtlevel->state_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_ev_st_pl12)?$districtlevel->state_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_ev_general_pl12)?$districtlevel->state_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_ev_st_pl34)?$districtlevel->state_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_ev_general_pl34)?$districtlevel->state_ev_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_ev_sc_pct)?$districtlevel->india_ev_sc_pct:'0',"obc"=>isset($districtlevel->india_ev_obc_pct)?$districtlevel->india_ev_obc_pct:'0',"st"=>isset($districtlevel->india_ev_st_pct)?$districtlevel->india_ev_st_pct:'0',"general"=>isset($districtlevel->india_ev_general_pct)?$districtlevel->india_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_ev_sc_pl34)?$districtlevel->india_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_ev_obc_pl12)?$districtlevel->india_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_ev_sc_pl12)?$districtlevel->india_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_ev_obc_pl34)?$districtlevel->india_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_ev_st_pl12)?$districtlevel->india_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_ev_general_pl12)?$districtlevel->india_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_ev_st_pl34)?$districtlevel->india_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_ev_general_pl34)?$districtlevel->india_ev_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_ev_pl1)?$districtlevel->dist_ev_pl1:'0',"basic"=>isset($districtlevel->dist_ev_pl2)?$districtlevel->dist_ev_pl2:'0',"proficient"=>isset($districtlevel->dist_ev_pl3)?$districtlevel->dist_ev_pl3:'0',"advanced"=>isset($districtlevel->dist_ev_pl4)?$districtlevel->dist_ev_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_ev_pl1)?$districtlevel->state_ev_pl1:'0',"basic"=>isset($districtlevel->state_ev_pl2)?$districtlevel->state_ev_pl2:'0',"proficient"=>isset($districtlevel->state_ev_pl3)?$districtlevel->state_ev_pl3:'0',"advanced"=>isset($districtlevel->state_ev_pl4)?$districtlevel->state_ev_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_ev_pl1)?$districtlevel->india_ev_pl1:'0',"basic"=>isset($districtlevel->india_ev_pl2)?$districtlevel->india_ev_pl2:'0',"proficient"=>isset($districtlevel->india_ev_pl3)?$districtlevel->india_ev_pl3:'0',"advanced"=>isset($districtlevel->india_ev_pl4)?$districtlevel->india_ev_pl4:'0'))
            );
        $districtArr['state_id'] = (int)$districtlevel->state_code;
        $districtArr['district_id'] = (int)$districtlevel->dist_code;
        $districtArr['grade'] = 5;
        $districtArr['data'] = json_encode($newdistrictArray);
        $districtArr['created_at'] = now();
        $districtArr['updated_at'] = now();
        
        $districtPerformaceData[]=$districtArr;
        }
        PerformanceMaster::insert($districtPerformaceData);
    }

    public function grade8PerformanceData()
    {
        $districtLevelPerfomanceData =DB::table('grade8districttable')->get();
        foreach($districtLevelPerfomanceData as $k=>$districtlevel)
        {
   
            $newdistrictArray = array();
            $newdistrictArray['language'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_la_pct)?$districtlevel->dist_la_pct:'0',
                    'state'=>isset($districtlevel->state_la_pct)?$districtlevel->state_la_pct:'0',
                    'national'=>isset($districtlevel->india_la_pct)?$districtlevel->india_la_pct:'0',
                    'se_district'=>isset($districtlevel->dist_la_se)?$districtlevel->dist_la_se:'0',
                    'se_state'=>isset($districtlevel->state_la_se)?$districtlevel->state_la_se:'0',
                    'se_national'=>isset($districtlevel->india_la_se)?$districtlevel->india_la_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_la_boys_pct)?$districtlevel->dist_la_boys_pct:'0',"girls"=>isset($districtlevel->dist_la_girls_pct)?$districtlevel->dist_la_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_la_transg_pct)?$districtlevel->dist_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_la_boys_pl12)?$districtlevel->dist_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_la_boys_pl34)?$districtlevel->dist_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_la_girls_pl12)?$districtlevel->dist_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_la_girls_pl34)?$districtlevel->dist_la_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_la_boys_pct)?$districtlevel->state_la_boys_pct:'0',"girls"=>isset($districtlevel->state_la_girls_pct)?$districtlevel->state_la_girls_pct:'0','trans_gender'=>isset($districtlevel->state_la_transg_pct)?$districtlevel->state_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_la_boys_pl12)?$districtlevel->state_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_la_boys_pl34)?$districtlevel->state_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_la_girls_pl12)?$districtlevel->state_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_la_girls_pl34)?$districtlevel->state_la_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_la_boys_pct)?$districtlevel->india_la_boys_pct:'0',"girls"=>isset($districtlevel->india_la_girls_pct)?$districtlevel->india_la_girls_pct:'0','trans_gender'=>isset($districtlevel->india_la_transg_pct)?$districtlevel->india_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_la_boys_pl12)?$districtlevel->india_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_la_boys_pl34)?$districtlevel->india_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_la_girls_pl12)?$districtlevel->india_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_la_girls_pl34)?$districtlevel->india_la_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_la_urban_pct)?$districtlevel->dist_la_urban_pct:'0',"rural"=>isset($districtlevel->dist_la_rural_pct)?$districtlevel->dist_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_la_rural_pl12)?$districtlevel->dist_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_la_urban_pl12)?$districtlevel->dist_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_la_rural_pl34)?$districtlevel->dist_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_la_urban_pl34)?$districtlevel->dist_la_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_la_urban_pct)?$districtlevel->state_la_urban_pct:'0',"rural"=>isset($districtlevel->state_la_rural_pct)?$districtlevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_la_rural_pl12)?$districtlevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_la_urban_pl12)?$districtlevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_la_rural_pl34)?$districtlevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_la_urban_pl34)?$districtlevel->state_la_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_la_urban_pct)?$districtlevel->india_la_urban_pct:'0',"rural"=>isset($districtlevel->india_la_rural_pct)?$districtlevel->india_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_la_rural_pl12)?$districtlevel->india_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_la_urban_pl12)?$districtlevel->india_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_la_rural_pl34)?$districtlevel->india_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_la_urban_pl34)?$districtlevel->india_la_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_la_govt_pct)?$districtlevel->dist_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_la_govtaid_pct)?$districtlevel->dist_la_govtaid_pct:'0',"private"=>isset($districtlevel->dist_la_private_pct)?$districtlevel->dist_la_private_pct:'0',"central_govt"=>isset($districtlevel->dist_la_centgovt_pct)?$districtlevel->dist_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_la_govt_pl12)?$districtlevel->dist_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_la_govtaid_pl12)?$districtlevel->dist_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_la_govt_pl34)?$districtlevel->dist_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_la_govtaid_pl34)?$districtlevel->dist_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_la_private_pl12)?$districtlevel->dist_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_la_centgovt_pl12)?$districtlevel->dist_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_la_private_pl34)?$districtlevel->dist_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_la_centgovt_pl34)?$districtlevel->dist_la_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_la_govt_pct)?$districtlevel->state_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_la_govtaid_pct)?$districtlevel->state_la_govtaid_pct:'0',"private"=>isset($districtlevel->state_la_private_pct)?$districtlevel->state_la_private_pct:'0',"central_govt"=>isset($districtlevel->state_la_centgovt_pct)?$districtlevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_la_govt_pl12)?$districtlevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_la_govtaid_pl12)?$districtlevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_la_govt_pl34)?$districtlevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_la_govtaid_pl34)?$districtlevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_la_private_pl12)?$districtlevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_la_centgovt_pl12)?$districtlevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_la_private_pl34)?$districtlevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_la_centgovt_pl34)?$districtlevel->state_la_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_la_govt_pct)?$districtlevel->india_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_la_govtaid_pct)?$districtlevel->india_la_govtaid_pct:'0',"private"=>isset($districtlevel->india_la_private_pct)?$districtlevel->india_la_private_pct:'0',"central_govt"=>isset($districtlevel->india_la_centgovt_pct)?$districtlevel->india_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_la_govt_pl12)?$districtlevel->india_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_la_govtaid_pl12)?$districtlevel->india_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_la_govt_pl34)?$districtlevel->india_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_la_govtaid_pl34)?$districtlevel->india_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_la_private_pl12)?$districtlevel->india_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_la_centgovt_pl12)?$districtlevel->india_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_la_private_pl34)?$districtlevel->india_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_la_centgovt_pl34)?$districtlevel->india_la_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_la_sc_pct)?$districtlevel->dist_la_sc_pct:'0',"obc"=>isset($districtlevel->dist_la_obc_pct)?$districtlevel->dist_la_obc_pct:'0',"st"=>isset($districtlevel->dist_la_st_pct)?$districtlevel->dist_la_st_pct:'0',"general"=>isset($districtlevel->dist_la_general_pct)?$districtlevel->dist_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_la_sc_pl34)?$districtlevel->dist_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_la_obc_pl12)?$districtlevel->dist_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_la_sc_pl12)?$districtlevel->dist_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_la_obc_pl34)?$districtlevel->dist_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_la_st_pl12)?$districtlevel->dist_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_la_general_pl12)?$districtlevel->dist_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_la_st_pl34)?$districtlevel->dist_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_la_general_pl34)?$districtlevel->dist_la_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_la_sc_pct)?$districtlevel->state_la_sc_pct:'0',"obc"=>isset($districtlevel->state_la_obc_pct)?$districtlevel->state_la_obc_pct:'0',"st"=>isset($districtlevel->state_la_st_pct)?$districtlevel->state_la_st_pct:'0',"general"=>isset($districtlevel->state_la_general_pct)?$districtlevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_la_sc_pl34)?$districtlevel->state_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_la_obc_pl12)?$districtlevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_la_sc_pl12)?$districtlevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_la_obc_pl34)?$districtlevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_la_st_pl12)?$districtlevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_la_general_pl12)?$districtlevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_la_st_pl34)?$districtlevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_la_general_pl34)?$districtlevel->state_la_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_la_sc_pct)?$districtlevel->india_la_sc_pct:'0',"obc"=>isset($districtlevel->india_la_obc_pct)?$districtlevel->india_la_obc_pct:'0',"st"=>isset($districtlevel->india_la_st_pct)?$districtlevel->india_la_st_pct:'0',"general"=>isset($districtlevel->india_la_general_pct)?$districtlevel->india_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_la_sc_pl34)?$districtlevel->india_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_la_obc_pl12)?$districtlevel->india_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_la_sc_pl12)?$districtlevel->india_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_la_obc_pl34)?$districtlevel->india_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_la_st_pl12)?$districtlevel->india_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_la_general_pl12)?$districtlevel->india_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_la_st_pl34)?$districtlevel->india_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_la_general_pl34)?$districtlevel->india_la_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_la_pl1)?$districtlevel->dist_la_pl1:'0',"basic"=>isset($districtlevel->dist_la_pl2)?$districtlevel->dist_la_pl2:'0',"proficient"=>isset($districtlevel->dist_la_pl3)?$districtlevel->dist_la_pl3:'0',"advanced"=>isset($districtlevel->dist_la_pl4)?$districtlevel->dist_la_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_la_pl1)?$districtlevel->state_la_pl1:'0',"basic"=>isset($districtlevel->state_la_pl2)?$districtlevel->state_la_pl2:'0',"proficient"=>isset($districtlevel->state_la_pl3)?$districtlevel->state_la_pl3:'0',"advanced"=>isset($districtlevel->state_la_pl4)?$districtlevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_la_pl1)?$districtlevel->india_la_pl1:'0',"basic"=>isset($districtlevel->india_la_pl2)?$districtlevel->india_la_pl2:'0',"proficient"=>isset($districtlevel->india_la_pl3)?$districtlevel->india_la_pl3:'0',"advanced"=>isset($districtlevel->india_la_pl4)?$districtlevel->india_la_pl4:'0'))
            );
            
            $newdistrictArray['math'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_ma_pct)?$districtlevel->dist_ma_pct:'0',
                    'state'=>isset($districtlevel->state_ma_pct)?$districtlevel->state_ma_pct:'0',
                    'national'=>isset($districtlevel->india_ma_pct)?$districtlevel->india_ma_pct:'0',
                    'se_district'=>isset($districtlevel->dist_ma_se)?$districtlevel->dist_ma_se:'0',
                    'se_state'=>isset($districtlevel->state_ma_se)?$districtlevel->state_ma_se:'0',
                    'se_national'=>isset($districtlevel->india_ma_se)?$districtlevel->india_ma_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_ma_boys_pct)?$districtlevel->dist_ma_boys_pct:'0',"girls"=>isset($districtlevel->dist_ma_girls_pct)?$districtlevel->dist_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_ma_transg_pct)?$districtlevel->dist_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_ma_boys_pl12)?$districtlevel->dist_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_ma_boys_pl34)?$districtlevel->dist_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_ma_girls_pl12)?$districtlevel->dist_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_ma_girls_pl34)?$districtlevel->dist_ma_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_ma_boys_pct)?$districtlevel->state_ma_boys_pct:'0',"girls"=>isset($districtlevel->state_ma_girls_pct)?$districtlevel->state_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->state_ma_transg_pct)?$districtlevel->state_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_ma_boys_pl12)?$districtlevel->state_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_ma_boys_pl34)?$districtlevel->state_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_ma_girls_pl12)?$districtlevel->state_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_ma_girls_pl34)?$districtlevel->state_ma_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_ma_boys_pct)?$districtlevel->india_ma_boys_pct:'0',"girls"=>isset($districtlevel->india_ma_girls_pct)?$districtlevel->india_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->india_ma_transg_pct)?$districtlevel->india_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_ma_boys_pl12)?$districtlevel->india_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_ma_boys_pl34)?$districtlevel->india_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_ma_girls_pl12)?$districtlevel->india_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_ma_girls_pl34)?$districtlevel->india_ma_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_ma_urban_pct)?$districtlevel->dist_ma_urban_pct:'0',"rural"=>isset($districtlevel->dist_ma_rural_pct)?$districtlevel->dist_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_ma_rural_pl12)?$districtlevel->dist_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_ma_urban_pl12)?$districtlevel->dist_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_ma_rural_pl34)?$districtlevel->dist_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_ma_urban_pl34)?$districtlevel->dist_ma_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_ma_urban_pct)?$districtlevel->state_ma_urban_pct:'0',"rural"=>isset($districtlevel->state_ma_rural_pct)?$districtlevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_ma_rural_pl12)?$districtlevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_ma_urban_pl12)?$districtlevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_ma_rural_pl34)?$districtlevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_ma_urban_pl34)?$districtlevel->state_ma_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_ma_urban_pct)?$districtlevel->india_ma_urban_pct:'0',"rural"=>isset($districtlevel->india_ma_rural_pct)?$districtlevel->india_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_ma_rural_pl12)?$districtlevel->india_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_ma_urban_pl12)?$districtlevel->india_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_ma_rural_pl34)?$districtlevel->india_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_ma_urban_pl34)?$districtlevel->india_ma_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_ma_govt_pct)?$districtlevel->dist_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_ma_govtaid_pct)?$districtlevel->dist_ma_govtaid_pct:'0',"private"=>isset($districtlevel->dist_ma_private_pct)?$districtlevel->dist_ma_private_pct:'0',"central_govt"=>isset($districtlevel->dist_ma_centgovt_pct)?$districtlevel->dist_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_ma_govt_pl12)?$districtlevel->dist_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_ma_govtaid_pl12)?$districtlevel->dist_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_ma_govt_pl34)?$districtlevel->dist_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_ma_govtaid_pl34)?$districtlevel->dist_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_ma_private_pl12)?$districtlevel->dist_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_ma_centgovt_pl12)?$districtlevel->dist_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_ma_private_pl34)?$districtlevel->dist_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_ma_centgovt_pl34)?$districtlevel->dist_ma_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_ma_govt_pct)?$districtlevel->state_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_ma_govtaid_pct)?$districtlevel->state_ma_govtaid_pct:'0',"private"=>isset($districtlevel->state_ma_private_pct)?$districtlevel->state_ma_private_pct:'0',"central_govt"=>isset($districtlevel->state_ma_centgovt_pct)?$districtlevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_ma_govt_pl12)?$districtlevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_ma_govtaid_pl12)?$districtlevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_ma_govt_pl34)?$districtlevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_ma_govtaid_pl34)?$districtlevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_ma_private_pl12)?$districtlevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_ma_centgovt_pl12)?$districtlevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_ma_private_pl34)?$districtlevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_ma_centgovt_pl34)?$districtlevel->state_ma_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_ma_govt_pct)?$districtlevel->india_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_ma_govtaid_pct)?$districtlevel->india_ma_govtaid_pct:'0',"private"=>isset($districtlevel->india_ma_private_pct)?$districtlevel->india_ma_private_pct:'0',"central_govt"=>isset($districtlevel->india_ma_centgovt_pct)?$districtlevel->india_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_ma_govt_pl12)?$districtlevel->india_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_ma_govtaid_pl12)?$districtlevel->india_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_ma_govt_pl34)?$districtlevel->india_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_ma_govtaid_pl34)?$districtlevel->india_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_ma_private_pl12)?$districtlevel->india_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_ma_centgovt_pl12)?$districtlevel->india_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_ma_private_pl34)?$districtlevel->india_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_ma_centgovt_pl34)?$districtlevel->india_ma_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_ma_sc_pct)?$districtlevel->dist_ma_sc_pct:'0',"obc"=>isset($districtlevel->dist_ma_obc_pct)?$districtlevel->dist_ma_obc_pct:'0',"st"=>isset($districtlevel->dist_ma_st_pct)?$districtlevel->dist_ma_st_pct:'0',"general"=>isset($districtlevel->dist_ma_general_pct)?$districtlevel->dist_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_ma_sc_pl34)?$districtlevel->dist_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_ma_obc_pl12)?$districtlevel->dist_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_ma_sc_pl12)?$districtlevel->dist_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_ma_obc_pl34)?$districtlevel->dist_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_ma_st_pl12)?$districtlevel->dist_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_ma_general_pl12)?$districtlevel->dist_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_ma_st_pl34)?$districtlevel->dist_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_ma_general_pl34)?$districtlevel->dist_ma_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_ma_sc_pct)?$districtlevel->state_ma_sc_pct:'0',"obc"=>isset($districtlevel->state_ma_obc_pct)?$districtlevel->state_ma_obc_pct:'0',"st"=>isset($districtlevel->state_ma_st_pct)?$districtlevel->state_ma_st_pct:'0',"general"=>isset($districtlevel->state_ma_general_pct)?$districtlevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_ma_sc_pl34)?$districtlevel->state_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_ma_obc_pl12)?$districtlevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_ma_sc_pl12)?$districtlevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_ma_obc_pl34)?$districtlevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_ma_st_pl12)?$districtlevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_ma_general_pl12)?$districtlevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_ma_st_pl34)?$districtlevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_ma_general_pl34)?$districtlevel->state_ma_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_ma_sc_pct)?$districtlevel->india_ma_sc_pct:'0',"obc"=>isset($districtlevel->india_ma_obc_pct)?$districtlevel->india_ma_obc_pct:'0',"st"=>isset($districtlevel->india_ma_st_pct)?$districtlevel->india_ma_st_pct:'0',"general"=>isset($districtlevel->india_ma_general_pct)?$districtlevel->india_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_ma_sc_pl34)?$districtlevel->india_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_ma_obc_pl12)?$districtlevel->india_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_ma_sc_pl12)?$districtlevel->india_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_ma_obc_pl34)?$districtlevel->india_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_ma_st_pl12)?$districtlevel->india_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_ma_general_pl12)?$districtlevel->india_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_ma_st_pl34)?$districtlevel->india_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_ma_general_pl34)?$districtlevel->india_ma_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_ma_pl1)?$districtlevel->dist_ma_pl1:'0',"basic"=>isset($districtlevel->dist_ma_pl2)?$districtlevel->dist_ma_pl2:'0',"proficient"=>isset($districtlevel->dist_ma_pl3)?$districtlevel->dist_ma_pl3:'0',"advanced"=>isset($districtlevel->dist_ma_pl4)?$districtlevel->dist_ma_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_ma_pl1)?$districtlevel->state_ma_pl1:'0',"basic"=>isset($districtlevel->state_ma_pl2)?$districtlevel->state_ma_pl2:'0',"proficient"=>isset($districtlevel->state_ma_pl3)?$districtlevel->state_ma_pl3:'0',"advanced"=>isset($districtlevel->state_ma_pl4)?$districtlevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_ma_pl1)?$districtlevel->india_ma_pl1:'0',"basic"=>isset($districtlevel->india_ma_pl2)?$districtlevel->india_ma_pl2:'0',"proficient"=>isset($districtlevel->india_ma_pl3)?$districtlevel->india_ma_pl3:'0',"advanced"=>isset($districtlevel->india_ma_pl4)?$districtlevel->india_ma_pl4:'0'))
            );
            
            $newdistrictArray['sci'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_sc_pct)?$districtlevel->dist_sc_pct:'0',
                    'state'=>isset($districtlevel->state_sc_pct)?$districtlevel->state_sc_pct:'0',
                    'national'=>isset($districtlevel->india_sc_pct)?$districtlevel->india_sc_pct:'0',
                    'se_district'=>isset($districtlevel->dist_sc_se)?$districtlevel->dist_sc_se:'0',
                    'se_state'=>isset($districtlevel->state_sc_se)?$districtlevel->state_sc_se:'0',
                    'se_national'=>isset($districtlevel->india_sc_se)?$districtlevel->india_sc_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_sc_boys_pct)?$districtlevel->dist_sc_boys_pct:'0',"girls"=>isset($districtlevel->dist_sc_girls_pct)?$districtlevel->dist_sc_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_sc_transg_pct)?$districtlevel->dist_sc_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_sc_boys_pl12)?$districtlevel->dist_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_sc_boys_pl34)?$districtlevel->dist_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_sc_girls_pl12)?$districtlevel->dist_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_sc_girls_pl34)?$districtlevel->dist_sc_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_sc_boys_pct)?$districtlevel->state_sc_boys_pct:'0',"girls"=>isset($districtlevel->state_sc_girls_pct)?$districtlevel->state_sc_girls_pct:'0','trans_gender'=>isset($districtlevel->state_sc_transg_pct)?$districtlevel->state_sc_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_sc_boys_pl12)?$districtlevel->state_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_sc_boys_pl34)?$districtlevel->state_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_sc_girls_pl12)?$districtlevel->state_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_sc_girls_pl34)?$districtlevel->state_sc_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_sc_boys_pct)?$districtlevel->india_sc_boys_pct:'0',"girls"=>isset($districtlevel->india_sc_girls_pct)?$districtlevel->india_sc_girls_pct:'0','trans_gender'=>isset($districtlevel->india_sc_transg_pct)?$districtlevel->india_sc_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_sc_boys_pl12)?$districtlevel->india_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_sc_boys_pl34)?$districtlevel->india_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_sc_girls_pl12)?$districtlevel->india_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_sc_girls_pl34)?$districtlevel->india_sc_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_sc_urban_pct)?$districtlevel->dist_sc_urban_pct:'0',"rural"=>isset($districtlevel->dist_sc_rural_pct)?$districtlevel->dist_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_sc_rural_pl12)?$districtlevel->dist_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_sc_urban_pl12)?$districtlevel->dist_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_sc_rural_pl34)?$districtlevel->dist_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_sc_urban_pl34)?$districtlevel->dist_sc_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_sc_urban_pct)?$districtlevel->state_sc_urban_pct:'0',"rural"=>isset($districtlevel->state_sc_rural_pct)?$districtlevel->state_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_sc_rural_pl12)?$districtlevel->state_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_sc_urban_pl12)?$districtlevel->state_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_sc_rural_pl34)?$districtlevel->state_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_sc_urban_pl34)?$districtlevel->state_sc_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_sc_urban_pct)?$districtlevel->india_sc_urban_pct:'0',"rural"=>isset($districtlevel->india_sc_rural_pct)?$districtlevel->india_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_sc_rural_pl12)?$districtlevel->india_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_sc_urban_pl12)?$districtlevel->india_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_sc_rural_pl34)?$districtlevel->india_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_sc_urban_pl34)?$districtlevel->india_sc_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_sc_govt_pct)?$districtlevel->dist_sc_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_sc_govtaid_pct)?$districtlevel->dist_sc_govtaid_pct:'0',"private"=>isset($districtlevel->dist_sc_private_pct)?$districtlevel->dist_sc_private_pct:'0',"central_govt"=>isset($districtlevel->dist_sc_centgovt_pct)?$districtlevel->dist_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_sc_govt_pl12)?$districtlevel->dist_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_sc_govtaid_pl12)?$districtlevel->dist_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_sc_govt_pl34)?$districtlevel->dist_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_sc_govtaid_pl34)?$districtlevel->dist_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_sc_private_pl12)?$districtlevel->dist_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_sc_centgovt_pl12)?$districtlevel->dist_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_sc_private_pl34)?$districtlevel->dist_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_sc_centgovt_pl34)?$districtlevel->dist_sc_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_sc_govt_pct)?$districtlevel->state_sc_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_sc_govtaid_pct)?$districtlevel->state_sc_govtaid_pct:'0',"private"=>isset($districtlevel->state_sc_private_pct)?$districtlevel->state_sc_private_pct:'0',"central_govt"=>isset($districtlevel->state_sc_centgovt_pct)?$districtlevel->state_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_sc_govt_pl12)?$districtlevel->state_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_sc_govtaid_pl12)?$districtlevel->state_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_sc_govt_pl34)?$districtlevel->state_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_sc_govtaid_pl34)?$districtlevel->state_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_sc_private_pl12)?$districtlevel->state_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_sc_centgovt_pl12)?$districtlevel->state_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_sc_private_pl34)?$districtlevel->state_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_sc_centgovt_pl34)?$districtlevel->state_sc_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_sc_govt_pct)?$districtlevel->india_sc_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_sc_govtaid_pct)?$districtlevel->india_sc_govtaid_pct:'0',"private"=>isset($districtlevel->india_sc_private_pct)?$districtlevel->india_sc_private_pct:'0',"central_govt"=>isset($districtlevel->india_sc_centgovt_pct)?$districtlevel->india_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_sc_govt_pl12)?$districtlevel->india_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_sc_govtaid_pl12)?$districtlevel->india_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_sc_govt_pl34)?$districtlevel->india_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_sc_govtaid_pl34)?$districtlevel->india_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_sc_private_pl12)?$districtlevel->india_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_sc_centgovt_pl12)?$districtlevel->india_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_sc_private_pl34)?$districtlevel->india_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_sc_centgovt_pl34)?$districtlevel->india_sc_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_sc_sc_pct)?$districtlevel->dist_sc_sc_pct:'0',"obc"=>isset($districtlevel->dist_sc_obc_pct)?$districtlevel->dist_sc_obc_pct:'0',"st"=>isset($districtlevel->dist_sc_st_pct)?$districtlevel->dist_sc_st_pct:'0',"general"=>isset($districtlevel->dist_sc_general_pct)?$districtlevel->dist_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_sc_sc_pl34)?$districtlevel->dist_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_sc_obc_pl12)?$districtlevel->dist_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_sc_sc_pl12)?$districtlevel->dist_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_sc_obc_pl34)?$districtlevel->dist_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_sc_st_pl12)?$districtlevel->dist_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_sc_general_pl12)?$districtlevel->dist_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_sc_st_pl34)?$districtlevel->dist_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_sc_general_pl34)?$districtlevel->dist_sc_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_sc_sc_pct)?$districtlevel->state_sc_sc_pct:'0',"obc"=>isset($districtlevel->state_sc_obc_pct)?$districtlevel->state_sc_obc_pct:'0',"st"=>isset($districtlevel->state_sc_st_pct)?$districtlevel->state_sc_st_pct:'0',"general"=>isset($districtlevel->state_sc_general_pct)?$districtlevel->state_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_sc_sc_pl34)?$districtlevel->state_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_sc_obc_pl12)?$districtlevel->state_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_sc_sc_pl12)?$districtlevel->state_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_sc_obc_pl34)?$districtlevel->state_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_sc_st_pl12)?$districtlevel->state_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_sc_general_pl12)?$districtlevel->state_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_sc_st_pl34)?$districtlevel->state_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_sc_general_pl34)?$districtlevel->state_sc_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_sc_sc_pct)?$districtlevel->india_sc_sc_pct:'0',"obc"=>isset($districtlevel->india_sc_obc_pct)?$districtlevel->india_sc_obc_pct:'0',"st"=>isset($districtlevel->india_sc_st_pct)?$districtlevel->india_sc_st_pct:'0',"general"=>isset($districtlevel->india_sc_general_pct)?$districtlevel->india_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_sc_sc_pl34)?$districtlevel->india_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_sc_obc_pl12)?$districtlevel->india_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_sc_sc_pl12)?$districtlevel->india_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_sc_obc_pl34)?$districtlevel->india_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_sc_st_pl12)?$districtlevel->india_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_sc_general_pl12)?$districtlevel->india_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_sc_st_pl34)?$districtlevel->india_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_sc_general_pl34)?$districtlevel->india_sc_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_sc_pl1)?$districtlevel->dist_sc_pl1:'0',"basic"=>isset($districtlevel->dist_sc_pl2)?$districtlevel->dist_sc_pl2:'0',"proficient"=>isset($districtlevel->dist_sc_pl3)?$districtlevel->dist_sc_pl3:'0',"advanced"=>isset($districtlevel->dist_sc_pl4)?$districtlevel->dist_sc_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_sc_pl1)?$districtlevel->state_sc_pl1:'0',"basic"=>isset($districtlevel->state_sc_pl2)?$districtlevel->state_sc_pl2:'0',"proficient"=>isset($districtlevel->state_sc_pl3)?$districtlevel->state_sc_pl3:'0',"advanced"=>isset($districtlevel->state_sc_pl4)?$districtlevel->state_sc_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_sc_pl1)?$districtlevel->india_sc_pl1:'0',"basic"=>isset($districtlevel->india_sc_pl2)?$districtlevel->india_sc_pl2:'0',"proficient"=>isset($districtlevel->india_sc_pl3)?$districtlevel->india_sc_pl3:'0',"advanced"=>isset($districtlevel->india_sc_pl4)?$districtlevel->india_sc_pl4:'0'))
            );

            $newdistrictArray['sst'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_ss_pct)?$districtlevel->dist_ss_pct:'0',
                    'state'=>isset($districtlevel->state_ss_pct)?$districtlevel->state_ss_pct:'0',
                    'national'=>isset($districtlevel->india_ss_pct)?$districtlevel->india_ss_pct:'0',
                    'se_district'=>isset($districtlevel->dist_sst_se)?$districtlevel->dist_sst_se:'0',
                    'se_state'=>isset($districtlevel->state_sst_se)?$districtlevel->state_sst_se:'0',
                    'se_national'=>isset($districtlevel->india_sst_se)?$districtlevel->india_sst_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_ss_boys_pct)?$districtlevel->dist_ss_boys_pct:'0',"girls"=>isset($districtlevel->dist_ss_girls_pct)?$districtlevel->dist_ss_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_ss_transg_pct)?$districtlevel->dist_ss_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_ss_boys_pl12)?$districtlevel->dist_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_ss_boys_pl34)?$districtlevel->dist_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_ss_girls_pl12)?$districtlevel->dist_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_ss_girls_pl34)?$districtlevel->dist_ss_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_ss_boys_pct)?$districtlevel->state_ss_boys_pct:'0',"girls"=>isset($districtlevel->state_ss_girls_pct)?$districtlevel->state_ss_girls_pct:'0','trans_gender'=>isset($districtlevel->state_ss_transg_pct)?$districtlevel->state_ss_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_ss_boys_pl12)?$districtlevel->state_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_ss_boys_pl34)?$districtlevel->state_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_ss_girls_pl12)?$districtlevel->state_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_ss_girls_pl34)?$districtlevel->state_ss_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_ss_boys_pct)?$districtlevel->india_ss_boys_pct:'0',"girls"=>isset($districtlevel->india_ss_girls_pct)?$districtlevel->india_ss_girls_pct:'0','trans_gender'=>isset($districtlevel->india_ss_transg_pct)?$districtlevel->india_ss_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_ss_boys_pl12)?$districtlevel->india_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_ss_boys_pl34)?$districtlevel->india_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_ss_girls_pl12)?$districtlevel->india_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_ss_girls_pl34)?$districtlevel->india_ss_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_ss_urban_pct)?$districtlevel->dist_ss_urban_pct:'0',"rural"=>isset($districtlevel->dist_ss_rural_pct)?$districtlevel->dist_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_ss_rural_pl12)?$districtlevel->dist_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_ss_urban_pl12)?$districtlevel->dist_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_ss_rural_pl34)?$districtlevel->dist_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_ss_urban_pl34)?$districtlevel->dist_ss_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_ss_urban_pct)?$districtlevel->state_ss_urban_pct:'0',"rural"=>isset($districtlevel->state_ss_rural_pct)?$districtlevel->state_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_ss_rural_pl12)?$districtlevel->state_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_ss_urban_pl12)?$districtlevel->state_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_ss_rural_pl34)?$districtlevel->state_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_ss_urban_pl34)?$districtlevel->state_ss_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_ss_urban_pct)?$districtlevel->india_ss_urban_pct:'0',"rural"=>isset($districtlevel->india_ss_rural_pct)?$districtlevel->india_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_ss_rural_pl12)?$districtlevel->india_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_ss_urban_pl12)?$districtlevel->india_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_ss_rural_pl34)?$districtlevel->india_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_ss_urban_pl34)?$districtlevel->india_ss_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_ss_govt_pct)?$districtlevel->dist_ss_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_ss_govtaid_pct)?$districtlevel->dist_ss_govtaid_pct:'0',"private"=>isset($districtlevel->dist_ss_private_pct)?$districtlevel->dist_ss_private_pct:'0',"central_govt"=>isset($districtlevel->dist_ss_centgovt_pct)?$districtlevel->dist_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_ss_govt_pl12)?$districtlevel->dist_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_ss_govtaid_pl12)?$districtlevel->dist_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_ss_govt_pl34)?$districtlevel->dist_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_ss_govtaid_pl34)?$districtlevel->dist_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_ss_private_pl12)?$districtlevel->dist_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_ss_centgovt_pl12)?$districtlevel->dist_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_ss_private_pl34)?$districtlevel->dist_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_ss_centgovt_pl34)?$districtlevel->dist_ss_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_ss_govt_pct)?$districtlevel->state_ss_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_ss_govtaid_pct)?$districtlevel->state_ss_govtaid_pct:'0',"private"=>isset($districtlevel->state_ss_private_pct)?$districtlevel->state_ss_private_pct:'0',"central_govt"=>isset($districtlevel->state_ss_centgovt_pct)?$districtlevel->state_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_ss_govt_pl12)?$districtlevel->state_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_ss_govtaid_pl12)?$districtlevel->state_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_ss_govt_pl34)?$districtlevel->state_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_ss_govtaid_pl34)?$districtlevel->state_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_ss_private_pl12)?$districtlevel->state_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_ss_centgovt_pl12)?$districtlevel->state_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_ss_private_pl34)?$districtlevel->state_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_ss_centgovt_pl34)?$districtlevel->state_ss_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_ss_govt_pct)?$districtlevel->india_ss_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_ss_govtaid_pct)?$districtlevel->india_ss_govtaid_pct:'0',"private"=>isset($districtlevel->india_ss_private_pct)?$districtlevel->india_ss_private_pct:'0',"central_govt"=>isset($districtlevel->india_ss_centgovt_pct)?$districtlevel->india_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_ss_govt_pl12)?$districtlevel->india_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_ss_govtaid_pl12)?$districtlevel->india_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_ss_govt_pl34)?$districtlevel->india_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_ss_govtaid_pl34)?$districtlevel->india_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_ss_private_pl12)?$districtlevel->india_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_ss_centgovt_pl12)?$districtlevel->india_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_ss_private_pl34)?$districtlevel->india_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_ss_centgovt_pl34)?$districtlevel->india_ss_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_ss_sc_pct)?$districtlevel->dist_ss_sc_pct:'0',"obc"=>isset($districtlevel->dist_ss_obc_pct)?$districtlevel->dist_ss_obc_pct:'0',"st"=>isset($districtlevel->dist_ss_st_pct)?$districtlevel->dist_ss_st_pct:'0',"general"=>isset($districtlevel->dist_ss_general_pct)?$districtlevel->dist_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_ss_sc_pl34)?$districtlevel->dist_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_ss_obc_pl12)?$districtlevel->dist_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_ss_sc_pl12)?$districtlevel->dist_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_ss_obc_pl34)?$districtlevel->dist_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_ss_st_pl12)?$districtlevel->dist_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_ss_general_pl12)?$districtlevel->dist_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_ss_st_pl34)?$districtlevel->dist_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_ss_general_pl34)?$districtlevel->dist_ss_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_ss_sc_pct)?$districtlevel->state_ss_sc_pct:'0',"obc"=>isset($districtlevel->state_ss_obc_pct)?$districtlevel->state_ss_obc_pct:'0',"st"=>isset($districtlevel->state_ss_st_pct)?$districtlevel->state_ss_st_pct:'0',"general"=>isset($districtlevel->state_ss_general_pct)?$districtlevel->state_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_ss_sc_pl34)?$districtlevel->state_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_ss_obc_pl12)?$districtlevel->state_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_ss_sc_pl12)?$districtlevel->state_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_ss_obc_pl34)?$districtlevel->state_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_ss_st_pl12)?$districtlevel->state_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_ss_general_pl12)?$districtlevel->state_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_ss_st_pl34)?$districtlevel->state_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_ss_general_pl34)?$districtlevel->state_ss_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_ss_sc_pct)?$districtlevel->india_ss_sc_pct:'0',"obc"=>isset($districtlevel->india_ss_obc_pct)?$districtlevel->india_ss_obc_pct:'0',"st"=>isset($districtlevel->india_ss_st_pct)?$districtlevel->india_ss_st_pct:'0',"general"=>isset($districtlevel->india_ss_general_pct)?$districtlevel->india_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_ss_sc_pl34)?$districtlevel->india_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_ss_obc_pl12)?$districtlevel->india_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_ss_sc_pl12)?$districtlevel->india_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_ss_obc_pl34)?$districtlevel->india_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_ss_st_pl12)?$districtlevel->india_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_ss_general_pl12)?$districtlevel->india_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_ss_st_pl34)?$districtlevel->india_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_ss_general_pl34)?$districtlevel->india_ss_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_ss_pl1)?$districtlevel->dist_ss_pl1:'0',"basic"=>isset($districtlevel->dist_ss_pl2)?$districtlevel->dist_ss_pl2:'0',"proficient"=>isset($districtlevel->dist_ss_pl3)?$districtlevel->dist_ss_pl3:'0',"advanced"=>isset($districtlevel->dist_ss_pl4)?$districtlevel->dist_ss_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_ss_pl1)?$districtlevel->state_ss_pl1:'0',"basic"=>isset($districtlevel->state_ss_pl2)?$districtlevel->state_ss_pl2:'0',"proficient"=>isset($districtlevel->state_ss_pl3)?$districtlevel->state_ss_pl3:'0',"advanced"=>isset($districtlevel->state_ss_pl4)?$districtlevel->state_ss_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_ss_pl1)?$districtlevel->india_ss_pl1:'0',"basic"=>isset($districtlevel->india_ss_pl2)?$districtlevel->india_ss_pl2:'0',"proficient"=>isset($districtlevel->india_ss_pl3)?$districtlevel->india_ss_pl3:'0',"advanced"=>isset($districtlevel->india_ss_pl4)?$districtlevel->india_ss_pl4:'0'))
            );

        $districtArr['state_id'] = (int)$districtlevel->state_code;
        $districtArr['district_id'] = (int)$districtlevel->dist_code;
        $districtArr['grade'] = 8;
        $districtArr['data'] = json_encode($newdistrictArray);
        $districtArr['created_at'] = now();
        $districtArr['updated_at'] = now();
        
        $districtPerformaceData[]=$districtArr;
        }
        PerformanceMaster::insert($districtPerformaceData);
    }

    public function grade10PerformanceData()
    {
        $districtLevelPerfomanceData =DB::table('grade10districttable')->get();
        foreach($districtLevelPerfomanceData as $k=>$districtlevel)
        {
   
            $newdistrictArray = array();
            $newdistrictArray['math'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_ma_pct)?$districtlevel->dist_ma_pct:'0',
                    'state'=>isset($districtlevel->state_ma_pct)?$districtlevel->state_ma_pct:'0',
                    'national'=>isset($districtlevel->india_ma_pct)?$districtlevel->india_ma_pct:'0',
                    'se_district'=>isset($districtlevel->dist_math_se)?$districtlevel->dist_math_se:'0',
                    'se_state'=>isset($districtlevel->state_math_se)?$districtlevel->state_math_se:'0',
                    'se_national'=>isset($districtlevel->india_math_se)?$districtlevel->india_math_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_ma_boys_pct)?$districtlevel->dist_ma_boys_pct:'0',"girls"=>isset($districtlevel->dist_ma_girls_pct)?$districtlevel->dist_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_ma_transg_pct)?$districtlevel->dist_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_ma_boys_pl12)?$districtlevel->dist_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_ma_boys_pl34)?$districtlevel->dist_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_ma_girls_pl12)?$districtlevel->dist_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_ma_girls_pl34)?$districtlevel->dist_ma_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_ma_boys_pct)?$districtlevel->state_ma_boys_pct:'0',"girls"=>isset($districtlevel->state_ma_girls_pct)?$districtlevel->state_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->state_ma_transg_pct)?$districtlevel->state_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_ma_boys_pl12)?$districtlevel->state_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_ma_boys_pl34)?$districtlevel->state_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_ma_girls_pl12)?$districtlevel->state_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_ma_girls_pl34)?$districtlevel->state_ma_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_ma_boys_pct)?$districtlevel->india_ma_boys_pct:'0',"girls"=>isset($districtlevel->india_ma_girls_pct)?$districtlevel->india_ma_girls_pct:'0','trans_gender'=>isset($districtlevel->india_ma_transg_pct)?$districtlevel->india_ma_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_ma_boys_pl12)?$districtlevel->india_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_ma_boys_pl34)?$districtlevel->india_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_ma_girls_pl12)?$districtlevel->india_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_ma_girls_pl34)?$districtlevel->india_ma_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_ma_urban_pct)?$districtlevel->dist_ma_urban_pct:'0',"rural"=>isset($districtlevel->dist_ma_rural_pct)?$districtlevel->dist_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_ma_rural_pl12)?$districtlevel->dist_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_ma_urban_pl12)?$districtlevel->dist_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_ma_rural_pl34)?$districtlevel->dist_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_ma_urban_pl34)?$districtlevel->dist_ma_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_ma_urban_pct)?$districtlevel->state_ma_urban_pct:'0',"rural"=>isset($districtlevel->state_ma_rural_pct)?$districtlevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_ma_rural_pl12)?$districtlevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_ma_urban_pl12)?$districtlevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_ma_rural_pl34)?$districtlevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_ma_urban_pl34)?$districtlevel->state_ma_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_ma_urban_pct)?$districtlevel->india_ma_urban_pct:'0',"rural"=>isset($districtlevel->india_ma_rural_pct)?$districtlevel->india_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_ma_rural_pl12)?$districtlevel->india_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_ma_urban_pl12)?$districtlevel->india_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_ma_rural_pl34)?$districtlevel->india_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_ma_urban_pl34)?$districtlevel->india_ma_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_ma_govt_pct)?$districtlevel->dist_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_ma_govtaid_pct)?$districtlevel->dist_ma_govtaid_pct:'0',"private"=>isset($districtlevel->dist_ma_private_pct)?$districtlevel->dist_ma_private_pct:'0',"central_govt"=>isset($districtlevel->dist_ma_centgovt_pct)?$districtlevel->dist_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_ma_govt_pl12)?$districtlevel->dist_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_ma_govtaid_pl12)?$districtlevel->dist_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_ma_govt_pl34)?$districtlevel->dist_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_ma_govtaid_pl34)?$districtlevel->dist_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_ma_private_pl12)?$districtlevel->dist_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_ma_centgovt_pl12)?$districtlevel->dist_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_ma_private_pl34)?$districtlevel->dist_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_ma_centgovt_pl34)?$districtlevel->dist_ma_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_ma_govt_pct)?$districtlevel->state_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_ma_govtaid_pct)?$districtlevel->state_ma_govtaid_pct:'0',"private"=>isset($districtlevel->state_ma_private_pct)?$districtlevel->state_ma_private_pct:'0',"central_govt"=>isset($districtlevel->state_ma_centgovt_pct)?$districtlevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_ma_govt_pl12)?$districtlevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_ma_govtaid_pl12)?$districtlevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_ma_govt_pl34)?$districtlevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_ma_govtaid_pl34)?$districtlevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_ma_private_pl12)?$districtlevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_ma_centgovt_pl12)?$districtlevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_ma_private_pl34)?$districtlevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_ma_centgovt_pl34)?$districtlevel->state_ma_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_ma_govt_pct)?$districtlevel->india_ma_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_ma_govtaid_pct)?$districtlevel->india_ma_govtaid_pct:'0',"private"=>isset($districtlevel->india_ma_private_pct)?$districtlevel->india_ma_private_pct:'0',"central_govt"=>isset($districtlevel->india_ma_centgovt_pct)?$districtlevel->india_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_ma_govt_pl12)?$districtlevel->india_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_ma_govtaid_pl12)?$districtlevel->india_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_ma_govt_pl34)?$districtlevel->india_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_ma_govtaid_pl34)?$districtlevel->india_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_ma_private_pl12)?$districtlevel->india_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_ma_centgovt_pl12)?$districtlevel->india_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_ma_private_pl34)?$districtlevel->india_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_ma_centgovt_pl34)?$districtlevel->india_ma_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_ma_sc_pct)?$districtlevel->dist_ma_sc_pct:'0',"obc"=>isset($districtlevel->dist_ma_obc_pct)?$districtlevel->dist_ma_obc_pct:'0',"st"=>isset($districtlevel->dist_ma_st_pct)?$districtlevel->dist_ma_st_pct:'0',"general"=>isset($districtlevel->dist_ma_general_pct)?$districtlevel->dist_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_ma_sc_pl34)?$districtlevel->dist_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_ma_obc_pl12)?$districtlevel->dist_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_ma_sc_pl12)?$districtlevel->dist_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_ma_obc_pl34)?$districtlevel->dist_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_ma_st_pl12)?$districtlevel->dist_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_ma_general_pl12)?$districtlevel->dist_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_ma_st_pl34)?$districtlevel->dist_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_ma_general_pl34)?$districtlevel->dist_ma_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_ma_sc_pct)?$districtlevel->state_ma_sc_pct:'0',"obc"=>isset($districtlevel->state_ma_obc_pct)?$districtlevel->state_ma_obc_pct:'0',"st"=>isset($districtlevel->state_ma_st_pct)?$districtlevel->state_ma_st_pct:'0',"general"=>isset($districtlevel->state_ma_general_pct)?$districtlevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_ma_sc_pl34)?$districtlevel->state_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_ma_obc_pl12)?$districtlevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_ma_sc_pl12)?$districtlevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_ma_obc_pl34)?$districtlevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_ma_st_pl12)?$districtlevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_ma_general_pl12)?$districtlevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_ma_st_pl34)?$districtlevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_ma_general_pl34)?$districtlevel->state_ma_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_ma_sc_pct)?$districtlevel->india_ma_sc_pct:'0',"obc"=>isset($districtlevel->india_ma_obc_pct)?$districtlevel->india_ma_obc_pct:'0',"st"=>isset($districtlevel->india_ma_st_pct)?$districtlevel->india_ma_st_pct:'0',"general"=>isset($districtlevel->india_ma_general_pct)?$districtlevel->india_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_ma_sc_pl34)?$districtlevel->india_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_ma_obc_pl12)?$districtlevel->india_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_ma_sc_pl12)?$districtlevel->india_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_ma_obc_pl34)?$districtlevel->india_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_ma_st_pl12)?$districtlevel->india_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_ma_general_pl12)?$districtlevel->india_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_ma_st_pl34)?$districtlevel->india_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_ma_general_pl34)?$districtlevel->india_ma_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_ma_pl1)?$districtlevel->dist_ma_pl1:'0',"basic"=>isset($districtlevel->dist_ma_pl2)?$districtlevel->dist_ma_pl2:'0',"proficient"=>isset($districtlevel->dist_ma_pl3)?$districtlevel->dist_ma_pl3:'0',"advanced"=>isset($districtlevel->dist_ma_pl4)?$districtlevel->dist_ma_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_ma_pl1)?$districtlevel->state_ma_pl1:'0',"basic"=>isset($districtlevel->state_ma_pl2)?$districtlevel->state_ma_pl2:'0',"proficient"=>isset($districtlevel->state_ma_pl3)?$districtlevel->state_ma_pl3:'0',"advanced"=>isset($districtlevel->state_ma_pl4)?$districtlevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_ma_pl1)?$districtlevel->india_ma_pl1:'0',"basic"=>isset($districtlevel->india_ma_pl2)?$districtlevel->india_ma_pl2:'0',"proficient"=>isset($districtlevel->india_ma_pl3)?$districtlevel->india_ma_pl3:'0',"advanced"=>isset($districtlevel->india_ma_pl4)?$districtlevel->india_ma_pl4:'0'))
            );
            
            $newdistrictArray['sci'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_sc_pct)?$districtlevel->dist_sc_pct:'0',
                    'state'=>isset($districtlevel->state_sc_pct)?$districtlevel->state_sc_pct:'0',
                    'national'=>isset($districtlevel->india_sc_pct)?$districtlevel->india_sc_pct:'0',
                    'se_district'=>isset($districtlevel->dist_sci_se)?$districtlevel->dist_sci_se:'0',
                    'se_state'=>isset($districtlevel->state_sci_se)?$districtlevel->state_sci_se:'0',
                    'se_national'=>isset($districtlevel->india_sci_se)?$districtlevel->india_sci_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_sc_boys_pct)?$districtlevel->dist_sc_boys_pct:'0',"girls"=>isset($districtlevel->dist_sc_girls_pct)?$districtlevel->dist_sc_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_sc_transg_pct)?$districtlevel->dist_sc_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_sc_boys_pl12)?$districtlevel->dist_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_sc_boys_pl34)?$districtlevel->dist_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_sc_girls_pl12)?$districtlevel->dist_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_sc_girls_pl34)?$districtlevel->dist_sc_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_sc_boys_pct)?$districtlevel->state_sc_boys_pct:'0',"girls"=>isset($districtlevel->state_sc_girls_pct)?$districtlevel->state_sc_girls_pct:'0','trans_gender'=>isset($districtlevel->state_sc_transg_pct)?$districtlevel->state_sc_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_sc_boys_pl12)?$districtlevel->state_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_sc_boys_pl34)?$districtlevel->state_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_sc_girls_pl12)?$districtlevel->state_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_sc_girls_pl34)?$districtlevel->state_sc_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_sc_boys_pct)?$districtlevel->india_sc_boys_pct:'0',"girls"=>isset($districtlevel->india_sc_girls_pct)?$districtlevel->india_sc_girls_pct:'0','trans_gender'=>isset($districtlevel->india_sc_transg_pct)?$districtlevel->india_sc_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_sc_boys_pl12)?$districtlevel->india_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_sc_boys_pl34)?$districtlevel->india_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_sc_girls_pl12)?$districtlevel->india_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_sc_girls_pl34)?$districtlevel->india_sc_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_sc_urban_pct)?$districtlevel->dist_sc_urban_pct:'0',"rural"=>isset($districtlevel->dist_sc_rural_pct)?$districtlevel->dist_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_sc_rural_pl12)?$districtlevel->dist_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_sc_urban_pl12)?$districtlevel->dist_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_sc_rural_pl34)?$districtlevel->dist_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_sc_urban_pl34)?$districtlevel->dist_sc_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_sc_urban_pct)?$districtlevel->state_sc_urban_pct:'0',"rural"=>isset($districtlevel->state_sc_rural_pct)?$districtlevel->state_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_sc_rural_pl12)?$districtlevel->state_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_sc_urban_pl12)?$districtlevel->state_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_sc_rural_pl34)?$districtlevel->state_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_sc_urban_pl34)?$districtlevel->state_sc_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_sc_urban_pct)?$districtlevel->india_sc_urban_pct:'0',"rural"=>isset($districtlevel->india_sc_rural_pct)?$districtlevel->india_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_sc_rural_pl12)?$districtlevel->india_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_sc_urban_pl12)?$districtlevel->india_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_sc_rural_pl34)?$districtlevel->india_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_sc_urban_pl34)?$districtlevel->india_sc_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_sc_govt_pct)?$districtlevel->dist_sc_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_sc_govtaid_pct)?$districtlevel->dist_sc_govtaid_pct:'0',"private"=>isset($districtlevel->dist_sc_private_pct)?$districtlevel->dist_sc_private_pct:'0',"central_govt"=>isset($districtlevel->dist_sc_centgovt_pct)?$districtlevel->dist_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_sc_govt_pl12)?$districtlevel->dist_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_sc_govtaid_pl12)?$districtlevel->dist_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_sc_govt_pl34)?$districtlevel->dist_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_sc_govtaid_pl34)?$districtlevel->dist_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_sc_private_pl12)?$districtlevel->dist_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_sc_centgovt_pl12)?$districtlevel->dist_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_sc_private_pl34)?$districtlevel->dist_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_sc_centgovt_pl34)?$districtlevel->dist_sc_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_sc_govt_pct)?$districtlevel->state_sc_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_sc_govtaid_pct)?$districtlevel->state_sc_govtaid_pct:'0',"private"=>isset($districtlevel->state_sc_private_pct)?$districtlevel->state_sc_private_pct:'0',"central_govt"=>isset($districtlevel->state_sc_centgovt_pct)?$districtlevel->state_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_sc_govt_pl12)?$districtlevel->state_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_sc_govtaid_pl12)?$districtlevel->state_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_sc_govt_pl34)?$districtlevel->state_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_sc_govtaid_pl34)?$districtlevel->state_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_sc_private_pl12)?$districtlevel->state_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_sc_centgovt_pl12)?$districtlevel->state_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_sc_private_pl34)?$districtlevel->state_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_sc_centgovt_pl34)?$districtlevel->state_sc_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_sc_govt_pct)?$districtlevel->india_sc_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_sc_govtaid_pct)?$districtlevel->india_sc_govtaid_pct:'0',"private"=>isset($districtlevel->india_sc_private_pct)?$districtlevel->india_sc_private_pct:'0',"central_govt"=>isset($districtlevel->india_sc_centgovt_pct)?$districtlevel->india_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_sc_govt_pl12)?$districtlevel->india_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_sc_govtaid_pl12)?$districtlevel->india_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_sc_govt_pl34)?$districtlevel->india_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_sc_govtaid_pl34)?$districtlevel->india_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_sc_private_pl12)?$districtlevel->india_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_sc_centgovt_pl12)?$districtlevel->india_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_sc_private_pl34)?$districtlevel->india_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_sc_centgovt_pl34)?$districtlevel->india_sc_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_sc_sc_pct)?$districtlevel->dist_sc_sc_pct:'0',"obc"=>isset($districtlevel->dist_sc_obc_pct)?$districtlevel->dist_sc_obc_pct:'0',"st"=>isset($districtlevel->dist_sc_st_pct)?$districtlevel->dist_sc_st_pct:'0',"general"=>isset($districtlevel->dist_sc_general_pct)?$districtlevel->dist_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_sc_sc_pl34)?$districtlevel->dist_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_sc_obc_pl12)?$districtlevel->dist_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_sc_sc_pl12)?$districtlevel->dist_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_sc_obc_pl34)?$districtlevel->dist_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_sc_st_pl12)?$districtlevel->dist_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_sc_general_pl12)?$districtlevel->dist_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_sc_st_pl34)?$districtlevel->dist_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_sc_general_pl34)?$districtlevel->dist_sc_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_sc_sc_pct)?$districtlevel->state_sc_sc_pct:'0',"obc"=>isset($districtlevel->state_sc_obc_pct)?$districtlevel->state_sc_obc_pct:'0',"st"=>isset($districtlevel->state_sc_st_pct)?$districtlevel->state_sc_st_pct:'0',"general"=>isset($districtlevel->state_sc_general_pct)?$districtlevel->state_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_sc_sc_pl34)?$districtlevel->state_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_sc_obc_pl12)?$districtlevel->state_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_sc_sc_pl12)?$districtlevel->state_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_sc_obc_pl34)?$districtlevel->state_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_sc_st_pl12)?$districtlevel->state_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_sc_general_pl12)?$districtlevel->state_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_sc_st_pl34)?$districtlevel->state_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_sc_general_pl34)?$districtlevel->state_sc_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_sc_sc_pct)?$districtlevel->india_sc_sc_pct:'0',"obc"=>isset($districtlevel->india_sc_obc_pct)?$districtlevel->india_sc_obc_pct:'0',"st"=>isset($districtlevel->india_sc_st_pct)?$districtlevel->india_sc_st_pct:'0',"general"=>isset($districtlevel->india_sc_general_pct)?$districtlevel->india_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_sc_sc_pl34)?$districtlevel->india_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_sc_obc_pl12)?$districtlevel->india_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_sc_sc_pl12)?$districtlevel->india_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_sc_obc_pl34)?$districtlevel->india_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_sc_st_pl12)?$districtlevel->india_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_sc_general_pl12)?$districtlevel->india_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_sc_st_pl34)?$districtlevel->india_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_sc_general_pl34)?$districtlevel->india_sc_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_sc_pl1)?$districtlevel->dist_sc_pl1:'0',"basic"=>isset($districtlevel->dist_sc_pl2)?$districtlevel->dist_sc_pl2:'0',"proficient"=>isset($districtlevel->dist_sc_pl3)?$districtlevel->dist_sc_pl3:'0',"advanced"=>isset($districtlevel->dist_sc_pl4)?$districtlevel->dist_sc_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_sc_pl1)?$districtlevel->state_sc_pl1:'0',"basic"=>isset($districtlevel->state_sc_pl2)?$districtlevel->state_sc_pl2:'0',"proficient"=>isset($districtlevel->state_sc_pl3)?$districtlevel->state_sc_pl3:'0',"advanced"=>isset($districtlevel->state_sc_pl4)?$districtlevel->state_sc_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_sc_pl1)?$districtlevel->india_sc_pl1:'0',"basic"=>isset($districtlevel->india_sc_pl2)?$districtlevel->india_sc_pl2:'0',"proficient"=>isset($districtlevel->india_sc_pl3)?$districtlevel->india_sc_pl3:'0',"advanced"=>isset($districtlevel->india_sc_pl4)?$districtlevel->india_sc_pl4:'0'))
            );

            $newdistrictArray['sst'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_ss_pct)?$districtlevel->dist_ss_pct:'0',
                    'state'=>isset($districtlevel->state_ss_pct)?$districtlevel->state_ss_pct:'0',
                    'national'=>isset($districtlevel->india_ss_pct)?$districtlevel->india_ss_pct:'0',
                    'se_district'=>isset($districtlevel->dist_sst_se)?$districtlevel->dist_sst_se:'0',
                    'se_state'=>isset($districtlevel->state_sst_se)?$districtlevel->state_sst_se:'0',
                    'se_national'=>isset($districtlevel->india_sst_se)?$districtlevel->india_sst_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_ss_boys_pct)?$districtlevel->dist_ss_boys_pct:'0',"girls"=>isset($districtlevel->dist_ss_girls_pct)?$districtlevel->dist_ss_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_ss_transg_pct)?$districtlevel->dist_ss_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_ss_boys_pl12)?$districtlevel->dist_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_ss_boys_pl34)?$districtlevel->dist_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_ss_girls_pl12)?$districtlevel->dist_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_ss_girls_pl34)?$districtlevel->dist_ss_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_ss_boys_pct)?$districtlevel->state_ss_boys_pct:'0',"girls"=>isset($districtlevel->state_ss_girls_pct)?$districtlevel->state_ss_girls_pct:'0','trans_gender'=>isset($districtlevel->state_ss_transg_pct)?$districtlevel->state_ss_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_ss_boys_pl12)?$districtlevel->state_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_ss_boys_pl34)?$districtlevel->state_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_ss_girls_pl12)?$districtlevel->state_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_ss_girls_pl34)?$districtlevel->state_ss_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_ss_boys_pct)?$districtlevel->india_ss_boys_pct:'0',"girls"=>isset($districtlevel->india_ss_girls_pct)?$districtlevel->india_ss_girls_pct:'0','trans_gender'=>isset($districtlevel->india_ss_transg_pct)?$districtlevel->india_ss_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_ss_boys_pl12)?$districtlevel->india_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_ss_boys_pl34)?$districtlevel->india_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_ss_girls_pl12)?$districtlevel->india_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_ss_girls_pl34)?$districtlevel->india_ss_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_ss_urban_pct)?$districtlevel->dist_ss_urban_pct:'0',"rural"=>isset($districtlevel->dist_ss_rural_pct)?$districtlevel->dist_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_ss_rural_pl12)?$districtlevel->dist_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_ss_urban_pl12)?$districtlevel->dist_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_ss_rural_pl34)?$districtlevel->dist_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_ss_urban_pl34)?$districtlevel->dist_ss_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_ss_urban_pct)?$districtlevel->state_ss_urban_pct:'0',"rural"=>isset($districtlevel->state_ss_rural_pct)?$districtlevel->state_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_ss_rural_pl12)?$districtlevel->state_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_ss_urban_pl12)?$districtlevel->state_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_ss_rural_pl34)?$districtlevel->state_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_ss_urban_pl34)?$districtlevel->state_ss_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_ss_urban_pct)?$districtlevel->india_ss_urban_pct:'0',"rural"=>isset($districtlevel->india_ss_rural_pct)?$districtlevel->india_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_ss_rural_pl12)?$districtlevel->india_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_ss_urban_pl12)?$districtlevel->india_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_ss_rural_pl34)?$districtlevel->india_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_ss_urban_pl34)?$districtlevel->india_ss_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_ss_govt_pct)?$districtlevel->dist_ss_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_ss_govtaid_pct)?$districtlevel->dist_ss_govtaid_pct:'0',"private"=>isset($districtlevel->dist_ss_private_pct)?$districtlevel->dist_ss_private_pct:'0',"central_govt"=>isset($districtlevel->dist_ss_centgovt_pct)?$districtlevel->dist_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_ss_govt_pl12)?$districtlevel->dist_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_ss_govtaid_pl12)?$districtlevel->dist_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_ss_govt_pl34)?$districtlevel->dist_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_ss_govtaid_pl34)?$districtlevel->dist_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_ss_private_pl12)?$districtlevel->dist_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_ss_centgovt_pl12)?$districtlevel->dist_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_ss_private_pl34)?$districtlevel->dist_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_ss_centgovt_pl34)?$districtlevel->dist_ss_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_ss_govt_pct)?$districtlevel->state_ss_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_ss_govtaid_pct)?$districtlevel->state_ss_govtaid_pct:'0',"private"=>isset($districtlevel->state_ss_private_pct)?$districtlevel->state_ss_private_pct:'0',"central_govt"=>isset($districtlevel->state_ss_centgovt_pct)?$districtlevel->state_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_ss_govt_pl12)?$districtlevel->state_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_ss_govtaid_pl12)?$districtlevel->state_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_ss_govt_pl34)?$districtlevel->state_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_ss_govtaid_pl34)?$districtlevel->state_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_ss_private_pl12)?$districtlevel->state_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_ss_centgovt_pl12)?$districtlevel->state_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_ss_private_pl34)?$districtlevel->state_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_ss_centgovt_pl34)?$districtlevel->state_ss_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_ss_govt_pct)?$districtlevel->india_ss_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_ss_govtaid_pct)?$districtlevel->india_ss_govtaid_pct:'0',"private"=>isset($districtlevel->india_ss_private_pct)?$districtlevel->india_ss_private_pct:'0',"central_govt"=>isset($districtlevel->india_ss_centgovt_pct)?$districtlevel->india_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_ss_govt_pl12)?$districtlevel->india_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_ss_govtaid_pl12)?$districtlevel->india_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_ss_govt_pl34)?$districtlevel->india_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_ss_govtaid_pl34)?$districtlevel->india_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_ss_private_pl12)?$districtlevel->india_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_ss_centgovt_pl12)?$districtlevel->india_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_ss_private_pl34)?$districtlevel->india_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_ss_centgovt_pl34)?$districtlevel->india_ss_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_ss_sc_pct)?$districtlevel->dist_ss_sc_pct:'0',"obc"=>isset($districtlevel->dist_ss_obc_pct)?$districtlevel->dist_ss_obc_pct:'0',"st"=>isset($districtlevel->dist_ss_st_pct)?$districtlevel->dist_ss_st_pct:'0',"general"=>isset($districtlevel->dist_ss_general_pct)?$districtlevel->dist_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_ss_sc_pl34)?$districtlevel->dist_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_ss_obc_pl12)?$districtlevel->dist_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_ss_sc_pl12)?$districtlevel->dist_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_ss_obc_pl34)?$districtlevel->dist_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_ss_st_pl12)?$districtlevel->dist_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_ss_general_pl12)?$districtlevel->dist_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_ss_st_pl34)?$districtlevel->dist_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_ss_general_pl34)?$districtlevel->dist_ss_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_ss_sc_pct)?$districtlevel->state_ss_sc_pct:'0',"obc"=>isset($districtlevel->state_ss_obc_pct)?$districtlevel->state_ss_obc_pct:'0',"st"=>isset($districtlevel->state_ss_st_pct)?$districtlevel->state_ss_st_pct:'0',"general"=>isset($districtlevel->state_ss_general_pct)?$districtlevel->state_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_ss_sc_pl34)?$districtlevel->state_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_ss_obc_pl12)?$districtlevel->state_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_ss_sc_pl12)?$districtlevel->state_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_ss_obc_pl34)?$districtlevel->state_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_ss_st_pl12)?$districtlevel->state_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_ss_general_pl12)?$districtlevel->state_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_ss_st_pl34)?$districtlevel->state_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_ss_general_pl34)?$districtlevel->state_ss_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_ss_sc_pct)?$districtlevel->india_ss_sc_pct:'0',"obc"=>isset($districtlevel->india_ss_obc_pct)?$districtlevel->india_ss_obc_pct:'0',"st"=>isset($districtlevel->india_ss_st_pct)?$districtlevel->india_ss_st_pct:'0',"general"=>isset($districtlevel->india_ss_general_pct)?$districtlevel->india_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_ss_sc_pl34)?$districtlevel->india_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_ss_obc_pl12)?$districtlevel->india_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_ss_sc_pl12)?$districtlevel->india_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_ss_obc_pl34)?$districtlevel->india_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_ss_st_pl12)?$districtlevel->india_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_ss_general_pl12)?$districtlevel->india_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_ss_st_pl34)?$districtlevel->india_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_ss_general_pl34)?$districtlevel->india_ss_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_ss_pl1)?$districtlevel->dist_ss_pl1:'0',"basic"=>isset($districtlevel->dist_ss_pl2)?$districtlevel->dist_ss_pl2:'0',"proficient"=>isset($districtlevel->dist_ss_pl3)?$districtlevel->dist_ss_pl3:'0',"advanced"=>isset($districtlevel->dist_ss_pl4)?$districtlevel->dist_ss_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_ss_pl1)?$districtlevel->state_ss_pl1:'0',"basic"=>isset($districtlevel->state_ss_pl2)?$districtlevel->state_ss_pl2:'0',"proficient"=>isset($districtlevel->state_ss_pl3)?$districtlevel->state_ss_pl3:'0',"advanced"=>isset($districtlevel->state_ss_pl4)?$districtlevel->state_ss_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_ss_pl1)?$districtlevel->india_ss_pl1:'0',"basic"=>isset($districtlevel->india_ss_pl2)?$districtlevel->india_ss_pl2:'0',"proficient"=>isset($districtlevel->india_ss_pl3)?$districtlevel->india_ss_pl3:'0',"advanced"=>isset($districtlevel->india_ss_pl4)?$districtlevel->india_ss_pl4:'0'))
            );

            $newdistrictArray['eng'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_en_pct)?$districtlevel->dist_en_pct:'0',
                    'state'=>isset($districtlevel->state_en_pct)?$districtlevel->state_en_pct:'0',
                    'national'=>isset($districtlevel->india_en_pct)?$districtlevel->india_en_pct:'0',
                    'se_district'=>isset($districtlevel->dist_eng_se)?$districtlevel->dist_eng_se:'0',
                    'se_state'=>isset($districtlevel->state_eng_se)?$districtlevel->state_eng_se:'0',
                    'se_national'=>isset($districtlevel->india_eng_se)?$districtlevel->india_eng_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_en_boys_pct)?$districtlevel->dist_en_boys_pct:'0',"girls"=>isset($districtlevel->dist_en_girls_pct)?$districtlevel->dist_en_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_en_transg_pct)?$districtlevel->dist_en_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_en_boys_pl12)?$districtlevel->dist_en_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_en_boys_pl34)?$districtlevel->dist_en_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_en_girls_pl12)?$districtlevel->dist_en_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_en_girls_pl34)?$districtlevel->dist_en_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_en_boys_pct)?$districtlevel->state_en_boys_pct:'0',"girls"=>isset($districtlevel->state_en_girls_pct)?$districtlevel->state_en_girls_pct:'0','trans_gender'=>isset($districtlevel->state_en_transg_pct)?$districtlevel->state_en_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_en_boys_pl12)?$districtlevel->state_en_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_en_boys_pl34)?$districtlevel->state_en_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_en_girls_pl12)?$districtlevel->state_en_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_en_girls_pl34)?$districtlevel->state_en_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_en_boys_pct)?$districtlevel->india_en_boys_pct:'0',"girls"=>isset($districtlevel->india_en_girls_pct)?$districtlevel->india_en_girls_pct:'0','trans_gender'=>isset($districtlevel->india_en_transg_pct)?$districtlevel->india_en_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_en_boys_pl12)?$districtlevel->india_en_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_en_boys_pl34)?$districtlevel->india_en_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_en_girls_pl12)?$districtlevel->india_en_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_en_girls_pl34)?$districtlevel->india_en_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_en_urban_pct)?$districtlevel->dist_en_urban_pct:'0',"rural"=>isset($districtlevel->dist_en_rural_pct)?$districtlevel->dist_en_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_en_rural_pl12)?$districtlevel->dist_en_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_en_urban_pl12)?$districtlevel->dist_en_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_en_rural_pl34)?$districtlevel->dist_en_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_en_urban_pl34)?$districtlevel->dist_en_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_en_urban_pct)?$districtlevel->state_en_urban_pct:'0',"rural"=>isset($districtlevel->state_en_rural_pct)?$districtlevel->state_en_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_en_rural_pl12)?$districtlevel->state_en_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_en_urban_pl12)?$districtlevel->state_en_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_en_rural_pl34)?$districtlevel->state_en_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_en_urban_pl34)?$districtlevel->state_en_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_en_urban_pct)?$districtlevel->india_en_urban_pct:'0',"rural"=>isset($districtlevel->india_en_rural_pct)?$districtlevel->india_en_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_en_rural_pl12)?$districtlevel->india_en_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_en_urban_pl12)?$districtlevel->india_en_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_en_rural_pl34)?$districtlevel->india_en_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_en_urban_pl34)?$districtlevel->india_en_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_en_govt_pct)?$districtlevel->dist_en_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_en_govtaid_pct)?$districtlevel->dist_en_govtaid_pct:'0',"private"=>isset($districtlevel->dist_en_private_pct)?$districtlevel->dist_en_private_pct:'0',"central_govt"=>isset($districtlevel->dist_en_centgovt_pct)?$districtlevel->dist_en_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_en_govt_pl12)?$districtlevel->dist_en_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_en_govtaid_pl12)?$districtlevel->dist_en_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_en_govt_pl34)?$districtlevel->dist_en_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_en_govtaid_pl34)?$districtlevel->dist_en_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_en_private_pl12)?$districtlevel->dist_en_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_en_centgovt_pl12)?$districtlevel->dist_en_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_en_private_pl34)?$districtlevel->dist_en_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_en_centgovt_pl34)?$districtlevel->dist_en_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_en_govt_pct)?$districtlevel->state_en_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_en_govtaid_pct)?$districtlevel->state_en_govtaid_pct:'0',"private"=>isset($districtlevel->state_en_private_pct)?$districtlevel->state_en_private_pct:'0',"central_govt"=>isset($districtlevel->state_en_centgovt_pct)?$districtlevel->state_en_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_en_govt_pl12)?$districtlevel->state_en_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_en_govtaid_pl12)?$districtlevel->state_en_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_en_govt_pl34)?$districtlevel->state_en_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_en_govtaid_pl34)?$districtlevel->state_en_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_en_private_pl12)?$districtlevel->state_en_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_en_centgovt_pl12)?$districtlevel->state_en_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_en_private_pl34)?$districtlevel->state_en_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_en_centgovt_pl34)?$districtlevel->state_en_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_en_govt_pct)?$districtlevel->india_en_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_en_govtaid_pct)?$districtlevel->india_en_govtaid_pct:'0',"private"=>isset($districtlevel->india_en_private_pct)?$districtlevel->india_en_private_pct:'0',"central_govt"=>isset($districtlevel->india_en_centgovt_pct)?$districtlevel->india_en_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_en_govt_pl12)?$districtlevel->india_en_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_en_govtaid_pl12)?$districtlevel->india_en_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_en_govt_pl34)?$districtlevel->india_en_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_en_govtaid_pl34)?$districtlevel->india_en_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_en_private_pl12)?$districtlevel->india_en_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_en_centgovt_pl12)?$districtlevel->india_en_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_en_private_pl34)?$districtlevel->india_en_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_en_centgovt_pl34)?$districtlevel->india_en_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_en_sc_pct)?$districtlevel->dist_en_sc_pct:'0',"obc"=>isset($districtlevel->dist_en_obc_pct)?$districtlevel->dist_en_obc_pct:'0',"st"=>isset($districtlevel->dist_en_st_pct)?$districtlevel->dist_en_st_pct:'0',"general"=>isset($districtlevel->dist_en_general_pct)?$districtlevel->dist_en_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_en_sc_pl34)?$districtlevel->dist_en_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_en_obc_pl12)?$districtlevel->dist_en_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_en_sc_pl12)?$districtlevel->dist_en_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_en_obc_pl34)?$districtlevel->dist_en_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_en_st_pl12)?$districtlevel->dist_en_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_en_general_pl12)?$districtlevel->dist_en_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_en_st_pl34)?$districtlevel->dist_en_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_en_general_pl34)?$districtlevel->dist_en_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_en_sc_pct)?$districtlevel->state_en_sc_pct:'0',"obc"=>isset($districtlevel->state_en_obc_pct)?$districtlevel->state_en_obc_pct:'0',"st"=>isset($districtlevel->state_en_st_pct)?$districtlevel->state_en_st_pct:'0',"general"=>isset($districtlevel->state_en_general_pct)?$districtlevel->state_en_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_en_sc_pl34)?$districtlevel->state_en_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_en_obc_pl12)?$districtlevel->state_en_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_en_sc_pl12)?$districtlevel->state_en_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_en_obc_pl34)?$districtlevel->state_en_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_en_st_pl12)?$districtlevel->state_en_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_en_general_pl12)?$districtlevel->state_en_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_en_st_pl34)?$districtlevel->state_en_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_en_general_pl34)?$districtlevel->state_en_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_en_sc_pct)?$districtlevel->india_en_sc_pct:'0',"obc"=>isset($districtlevel->india_en_obc_pct)?$districtlevel->india_en_obc_pct:'0',"st"=>isset($districtlevel->india_en_st_pct)?$districtlevel->india_en_st_pct:'0',"general"=>isset($districtlevel->india_en_general_pct)?$districtlevel->india_en_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_en_sc_pl34)?$districtlevel->india_en_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_en_obc_pl12)?$districtlevel->india_en_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_en_sc_pl12)?$districtlevel->india_en_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_en_obc_pl34)?$districtlevel->india_en_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_en_st_pl12)?$districtlevel->india_en_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_en_general_pl12)?$districtlevel->india_en_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_en_st_pl34)?$districtlevel->india_en_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_en_general_pl34)?$districtlevel->india_en_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_en_pl1)?$districtlevel->dist_en_pl1:'0',"basic"=>isset($districtlevel->dist_en_pl2)?$districtlevel->dist_en_pl2:'0',"proficient"=>isset($districtlevel->dist_en_pl3)?$districtlevel->dist_en_pl3:'0',"advanced"=>isset($districtlevel->dist_en_pl4)?$districtlevel->dist_en_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_en_pl1)?$districtlevel->state_en_pl1:'0',"basic"=>isset($districtlevel->state_en_pl2)?$districtlevel->state_en_pl2:'0',"proficient"=>isset($districtlevel->state_en_pl3)?$districtlevel->state_en_pl3:'0',"advanced"=>isset($districtlevel->state_en_pl4)?$districtlevel->state_en_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_en_pl1)?$districtlevel->india_en_pl1:'0',"basic"=>isset($districtlevel->india_en_pl2)?$districtlevel->india_en_pl2:'0',"proficient"=>isset($districtlevel->india_en_pl3)?$districtlevel->india_en_pl3:'0',"advanced"=>isset($districtlevel->india_en_pl4)?$districtlevel->india_en_pl4:'0'))
            );

            $newdistrictArray['mil'] =array(
                'cards'=>array(
                    'district'=>isset($districtlevel->dist_la_pct)?$districtlevel->dist_la_pct:'0',
                    'state'=>isset($districtlevel->state_la_pct)?$districtlevel->state_la_pct:'0',
                    'national'=>isset($districtlevel->india_la_pct)?$districtlevel->india_la_pct:'0',
                    'se_district'=>isset($districtlevel->dist_lang_se)?$districtlevel->dist_lang_se:'0',
                    'se_state'=>isset($districtlevel->state_lang_se)?$districtlevel->state_lang_se:'0',
                    'se_national'=>isset($districtlevel->india_lang_se)?$districtlevel->india_lang_se:'0'),
                'gender'=>array(
                    'district'=>array("boys"=>isset($districtlevel->dist_la_boys_pct)?$districtlevel->dist_la_boys_pct:'0',"girls"=>isset($districtlevel->dist_la_girls_pct)?$districtlevel->dist_la_girls_pct:'0','trans_gender'=>isset($districtlevel->dist_la_transg_pct)?$districtlevel->dist_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->dist_la_boys_pl12)?$districtlevel->dist_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->dist_la_boys_pl34)?$districtlevel->dist_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->dist_la_girls_pl12)?$districtlevel->dist_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->dist_la_girls_pl34)?$districtlevel->dist_la_girls_pl34:'0'),

                    'state'=>array("boys"=>isset($districtlevel->state_la_boys_pct)?$districtlevel->state_la_boys_pct:'0',"girls"=>isset($districtlevel->state_la_girls_pct)?$districtlevel->state_la_girls_pct:'0','trans_gender'=>isset($districtlevel->state_la_transg_pct)?$districtlevel->state_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->state_la_boys_pl12)?$districtlevel->state_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->state_la_boys_pl34)?$districtlevel->state_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->state_la_girls_pl12)?$districtlevel->state_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->state_la_girls_pl34)?$districtlevel->state_la_girls_pl34:'0'),
                    
                    'national'=>array("boys"=>isset($districtlevel->india_la_boys_pct)?$districtlevel->india_la_boys_pct:'0',"girls"=>isset($districtlevel->india_la_girls_pct)?$districtlevel->india_la_girls_pct:'0','trans_gender'=>isset($districtlevel->india_la_transg_pct)?$districtlevel->india_la_transg_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($districtlevel->india_la_boys_pl12)?$districtlevel->india_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($districtlevel->india_la_boys_pl34)?$districtlevel->india_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($districtlevel->india_la_girls_pl12)?$districtlevel->india_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($districtlevel->india_la_girls_pl34)?$districtlevel->india_la_girls_pl34:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($districtlevel->dist_la_urban_pct)?$districtlevel->dist_la_urban_pct:'0',"rural"=>isset($districtlevel->dist_la_rural_pct)?$districtlevel->dist_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->dist_la_rural_pl12)?$districtlevel->dist_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->dist_la_urban_pl12)?$districtlevel->dist_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->dist_la_rural_pl34)?$districtlevel->dist_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->dist_la_urban_pl34)?$districtlevel->dist_la_urban_pl34:'0'),
                    
                    'state'=>array("urban"=>isset($districtlevel->state_la_urban_pct)?$districtlevel->state_la_urban_pct:'0',"rural"=>isset($districtlevel->state_la_rural_pct)?$districtlevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->state_la_rural_pl12)?$districtlevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->state_la_urban_pl12)?$districtlevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->state_la_rural_pl34)?$districtlevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->state_la_urban_pl34)?$districtlevel->state_la_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($districtlevel->india_la_urban_pct)?$districtlevel->india_la_urban_pct:'0',"rural"=>isset($districtlevel->india_la_rural_pct)?$districtlevel->india_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($districtlevel->india_la_rural_pl12)?$districtlevel->india_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($districtlevel->india_la_urban_pl12)?$districtlevel->india_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($districtlevel->india_la_rural_pl34)?$districtlevel->india_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($districtlevel->india_la_urban_pl34)?$districtlevel->india_la_urban_pl34:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($districtlevel->dist_la_govt_pct)?$districtlevel->dist_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->dist_la_govtaid_pct)?$districtlevel->dist_la_govtaid_pct:'0',"private"=>isset($districtlevel->dist_la_private_pct)?$districtlevel->dist_la_private_pct:'0',"central_govt"=>isset($districtlevel->dist_la_centgovt_pct)?$districtlevel->dist_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->dist_la_govt_pl12)?$districtlevel->dist_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->dist_la_govtaid_pl12)?$districtlevel->dist_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->dist_la_govt_pl34)?$districtlevel->dist_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->dist_la_govtaid_pl34)?$districtlevel->dist_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->dist_la_private_pl12)?$districtlevel->dist_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->dist_la_centgovt_pl12)?$districtlevel->dist_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->dist_la_private_pl34)?$districtlevel->dist_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->dist_la_centgovt_pl34)?$districtlevel->dist_la_centgovt_pl34:'0'),
                    
                    'state'=>array("govt"=>isset($districtlevel->state_la_govt_pct)?$districtlevel->state_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->state_la_govtaid_pct)?$districtlevel->state_la_govtaid_pct:'0',"private"=>isset($districtlevel->state_la_private_pct)?$districtlevel->state_la_private_pct:'0',"central_govt"=>isset($districtlevel->state_la_centgovt_pct)?$districtlevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->state_la_govt_pl12)?$districtlevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->state_la_govtaid_pl12)?$districtlevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->state_la_govt_pl34)?$districtlevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->state_la_govtaid_pl34)?$districtlevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->state_la_private_pl12)?$districtlevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->state_la_centgovt_pl12)?$districtlevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->state_la_private_pl34)?$districtlevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->state_la_centgovt_pl34)?$districtlevel->state_la_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($districtlevel->india_la_govt_pct)?$districtlevel->india_la_govt_pct:'0',"govt_aided"=>isset($districtlevel->india_la_govtaid_pct)?$districtlevel->india_la_govtaid_pct:'0',"private"=>isset($districtlevel->india_la_private_pct)?$districtlevel->india_la_private_pct:'0',"central_govt"=>isset($districtlevel->india_la_centgovt_pct)?$districtlevel->india_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($districtlevel->india_la_govt_pl12)?$districtlevel->india_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($districtlevel->india_la_govtaid_pl12)?$districtlevel->india_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($districtlevel->india_la_govt_pl34)?$districtlevel->india_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($districtlevel->india_la_govtaid_pl34)?$districtlevel->india_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($districtlevel->india_la_private_pl12)?$districtlevel->india_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($districtlevel->india_la_centgovt_pl12)?$districtlevel->india_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($districtlevel->india_la_private_pl34)?$districtlevel->india_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($districtlevel->india_la_centgovt_pl34)?$districtlevel->india_la_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($districtlevel->dist_la_sc_pct)?$districtlevel->dist_la_sc_pct:'0',"obc"=>isset($districtlevel->dist_la_obc_pct)?$districtlevel->dist_la_obc_pct:'0',"st"=>isset($districtlevel->dist_la_st_pct)?$districtlevel->dist_la_st_pct:'0',"general"=>isset($districtlevel->dist_la_general_pct)?$districtlevel->dist_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->dist_la_sc_pl34)?$districtlevel->dist_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->dist_la_obc_pl12)?$districtlevel->dist_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->dist_la_sc_pl12)?$districtlevel->dist_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->dist_la_obc_pl34)?$districtlevel->dist_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->dist_la_st_pl12)?$districtlevel->dist_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->dist_la_general_pl12)?$districtlevel->dist_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->dist_la_st_pl34)?$districtlevel->dist_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->dist_la_general_pl34)?$districtlevel->dist_la_general_pl34:'0'),
                    
                    'state'=>array("sc"=>isset($districtlevel->state_la_sc_pct)?$districtlevel->state_la_sc_pct:'0',"obc"=>isset($districtlevel->state_la_obc_pct)?$districtlevel->state_la_obc_pct:'0',"st"=>isset($districtlevel->state_la_st_pct)?$districtlevel->state_la_st_pct:'0',"general"=>isset($districtlevel->state_la_general_pct)?$districtlevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->state_la_sc_pl34)?$districtlevel->state_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->state_la_obc_pl12)?$districtlevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->state_la_sc_pl12)?$districtlevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->state_la_obc_pl34)?$districtlevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->state_la_st_pl12)?$districtlevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->state_la_general_pl12)?$districtlevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->state_la_st_pl34)?$districtlevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->state_la_general_pl34)?$districtlevel->state_la_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($districtlevel->india_la_sc_pct)?$districtlevel->india_la_sc_pct:'0',"obc"=>isset($districtlevel->india_la_obc_pct)?$districtlevel->india_la_obc_pct:'0',"st"=>isset($districtlevel->india_la_st_pct)?$districtlevel->india_la_st_pct:'0',"general"=>isset($districtlevel->india_la_general_pct)?$districtlevel->india_la_general_pct:'0','sc_basic_and_below_basic'=>isset($districtlevel->india_la_sc_pl34)?$districtlevel->india_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($districtlevel->india_la_obc_pl12)?$districtlevel->india_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($districtlevel->india_la_sc_pl12)?$districtlevel->india_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($districtlevel->india_la_obc_pl34)?$districtlevel->india_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($districtlevel->india_la_st_pl12)?$districtlevel->india_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($districtlevel->india_la_general_pl12)?$districtlevel->india_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($districtlevel->india_la_st_pl34)?$districtlevel->india_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($districtlevel->india_la_general_pl34)?$districtlevel->india_la_general_pl34:'0')),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($districtlevel->dist_la_pl1)?$districtlevel->dist_la_pl1:'0',"basic"=>isset($districtlevel->dist_la_pl2)?$districtlevel->dist_la_pl2:'0',"proficient"=>isset($districtlevel->dist_la_pl3)?$districtlevel->dist_la_pl3:'0',"advanced"=>isset($districtlevel->dist_la_pl4)?$districtlevel->dist_la_pl4:'0'),
                    'state'=>array("below_basic"=>isset($districtlevel->state_la_pl1)?$districtlevel->state_la_pl1:'0',"basic"=>isset($districtlevel->state_la_pl2)?$districtlevel->state_la_pl2:'0',"proficient"=>isset($districtlevel->state_la_pl3)?$districtlevel->state_la_pl3:'0',"advanced"=>isset($districtlevel->state_la_pl4)?$districtlevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($districtlevel->india_la_pl1)?$districtlevel->india_la_pl1:'0',"basic"=>isset($districtlevel->india_la_pl2)?$districtlevel->india_la_pl2:'0',"proficient"=>isset($districtlevel->india_la_pl3)?$districtlevel->india_la_pl3:'0',"advanced"=>isset($districtlevel->india_la_pl4)?$districtlevel->india_la_pl4:'0'))
            );

        $districtArr['state_id'] = (int)$districtlevel->state_code;
        $districtArr['district_id'] = (int)$districtlevel->dist_code;
        $districtArr['grade'] = 10;
        $districtArr['data'] = json_encode($newdistrictArray);
        $districtArr['created_at'] = now();
        $districtArr['updated_at'] = now();
        
        $districtPerformaceData[]=$districtArr;
        }
        PerformanceMaster::insert($districtPerformaceData);
    }


    //Create Feedback data for tq,sq and pq for grade 3,5,8 and 10 We are also create data for all grade as 11th grade
    public function districtFeedback(){
            
        DB::table('pq_district_level_feedback')->truncate();
        ini_set('max_execution_time', '5000');
        $GetFeedbackDataFor_3_Grade = $this->GetFeedbackDataFor_3_Grade();
        $GetFeedbackDataFor_5_Grade = $this->GetFeedbackDataFor_5_Grade();
        $GetFeedbackDataFor_8_Grade = $this->GetFeedbackDataFor_8_Grade();
        $GetFeedbackDataFor_10_Grade = $this->GetFeedbackDataFor_10_Grade();

        $final_dataG3 = DB::select($GetFeedbackDataFor_3_Grade);
        $final_dataG5 = DB::select($GetFeedbackDataFor_5_Grade);
        $final_dataG8 = DB::select($GetFeedbackDataFor_8_Grade);
        $final_dataG10 = DB::select($GetFeedbackDataFor_10_Grade);

        foreach($final_dataG3 as $data){

            PQDistrictLevelFeedback::insert([
                    'state_id'=>$data->state_code,
                    'district_id'=>$data->dist_code,
                    'grade'=>3,
                    'level'=>$data->level,
                    'question_code'=>$data->question_code,
                    'question_desc'=>$data->question_desc,
                    'total_parent'=>$data->total_parent,
                    'avg'=>$data->dist_avg,
                ]);
        }

        foreach($final_dataG5 as $data){

            PQDistrictLevelFeedback::insert([
                'state_id'=>$data->state_code,
                'district_id'=>$data->dist_code,
                'grade'=>5,
                'level'=>$data->level,
                'question_code'=>$data->question_code,
                'question_desc'=>$data->question_desc,
                'total_parent'=>$data->total_parent,
                'avg'=>$data->dist_avg,
            ]);
        }

        foreach($final_dataG8 as $data){

            PQDistrictLevelFeedback::insert([
                'state_id'=>$data->state_code,
                'district_id'=>$data->dist_code,
                'grade'=>8,
                'level'=>$data->level,
                'question_code'=>$data->question_code,
                'question_desc'=>$data->question_desc,
                'total_parent'=>$data->total_parent,
                'avg'=>$data->dist_avg,
            ]);
        }

        foreach($final_dataG10 as $data){

            PQDistrictLevelFeedback::insert([
                'state_id'=>$data->state_code,
                'district_id'=>$data->dist_code,
                'grade'=>10,
                'level'=>$data->level,
                'question_code'=>$data->question_code,
                'question_desc'=>$data->question_desc,
                'total_parent'=>$data->total_parent,
                'avg'=>$data->dist_avg,
            ]);
        }

    // grade 11 pq feedback data insert
        $stringPQdistrict = 'pq_district_level_feedback.district_id,';
        $wherePQdistrict = "('pq','pq1','pq2','pq3')";
        $stringGroupBYPQdistrict = 'pq_district_level_feedback.district_id,';
        $districtTBLPQ = "pq_district_level_feedback";
        $alldistrictFBPQ = $this->RaqQuery($stringPQdistrict,$wherePQdistrict,$stringGroupBYPQdistrict,$districtTBLPQ);
        $allPQdistrictData = DB::select($alldistrictFBPQ);
        $allPQdistrictData = json_decode(json_encode($allPQdistrictData), true);
        $allDNLODatadistrictPQ = PQDistrictLevelFeedback::insert($allPQdistrictData);  

    // grade 11 tq feedback data insert
        $stringTQdistrict = 'pq_district_level_feedback.district_id,';
        $whereTQdistrict = "('tq')";
        $stringGroupBYTQdistrict = 'pq_district_level_feedback.district_id,';
        $districtTBLTQ = "pq_district_level_feedback";
        $alldistrictFBTQ = $this->RaqQuery($stringTQdistrict,$whereTQdistrict,$stringGroupBYTQdistrict,$districtTBLTQ);
        $allTQdistrictData = DB::select($alldistrictFBTQ);
        $allTQdistrictData = json_decode(json_encode($allTQdistrictData), true);
        $alldNLODatadistrictTQ = PQDistrictLevelFeedback::insert($allTQdistrictData);   

    // grade 11 sq feedback data insert
        $stringSQdistrict = 'pq_district_level_feedback.district_id,';
        $whereSQdistrict = "('sq')";
        $stringGroupBYSQdistrict = 'pq_district_level_feedback.district_id,';
        $districtTBLSQ = "pq_district_level_feedback";
        $alldistrictFBSQ = $this->RaqQuery($stringSQdistrict,$whereSQdistrict,$stringGroupBYSQdistrict,$districtTBLSQ);
        $allSQdistrictData = DB::select($alldistrictFBSQ);
        $allSQdistrictData = json_decode(json_encode($allSQdistrictData), true);
        $allDNLODatadistrictSQ = PQDistrictLevelFeedback::insert($allSQdistrictData); 

        return "All data successfully created.";
    }

    //Query For Feedback DRC data Subject Wise Grade 3
    public function GetFeedbackDataFor_3_Grade()
    {
        $query = "select id, state_code, dist_code, Dist_pq_q14 as dist_avg , 'pq' level, 'students like to go to school' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_pq_q17 as dist_avg, 'pq' level, 'students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_pq_q18 as dist_avg, 'pq' level, 'students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_pq_q10 as dist_avg, 'pq' level, 'Students go out and play during games period' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_pq_q08 as dist_avg, 'pq' level, 'Students have access to any digital device of class 3, 5 and 8 avail computer in the school' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_pq_q30 as dist_avg, 'pq' level, 'students of class 10 have laboratory facility in school' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_pq_q27g as dist_avg, 'pq' level, 'Students have internet connectivity at home' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_pq_q29f as dist_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q30 as dist_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q33 as dist_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q31 as dist_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q32 as dist_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q34 as dist_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q36 as dist_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q04 as dist_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q28 as dist_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_sq_q31 as dist_avg, 'sq' level, 'of schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_sq_q32 as dist_avg, 'sq' level, 'of schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_sq_q34 as dist_avg, 'sq' level, 'of schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_sq_q35 as dist_avg, 'sq' level, 'of schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_sq_q14 as dist_avg, 'sq' level, 'of schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_sq_q09 as dist_avg, 'sq' level, 'of schools have library facility' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q18 as dist_avg, 'tq' level, 'Protocal for COVID symptoms reporting' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q17 as dist_avg, 'tq' level, 'Measures to be taken for wellbeing of children and school staff' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        union all
        select id, state_code, dist_code, Dist_tq_q16 as dist_avg, 'tq' level, 'School reopening guidelines for teacher' question_desc, 0 question_code, 0 total_parent
        from grade3districttable
        ";
        return $query;
    }
    //Query For DRC Feedback data for Grade 5
    public function GetFeedbackDataFor_5_Grade()
    {
        $query = "select id, state_code, dist_code, Dist_pq_q14 as dist_avg, 'pq' level, 'students like to go to school' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_pq_q17 as dist_avg, 'pq' level, 'students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_pq_q18
        as dist_avg, 'pq' level, 'students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_pq_q10 as dist_avg, 'pq' level, 'Students go out and play during games period' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_pq_q08 as dist_avg, 'pq' level, 'Students have access to any digital device of class 3, 5 and 8 avail computer in the school' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_pq_q30 as dist_avg, 'pq' level, 'Students of class 10 have laboratory facility in school' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_pq_q27g as dist_avg, 'pq' level, 'Students have internet connectivity at home' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_pq_q29f as dist_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q30 as dist_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q33 as dist_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q31 as dist_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q32 as dist_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q34 as dist_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q36 as dist_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q04 as dist_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q28 as dist_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_sq_q31 as dist_avg, 'sq' level, 'of schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_sq_q32 as dist_avg, 'sq' level, 'of schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_sq_q34 as dist_avg, 'sq' level, 'of schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_sq_q35 as dist_avg, 'sq' level, 'of schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_sq_q14 as dist_avg, 'sq' level, 'of schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_sq_q09 as dist_avg, 'sq' level, 'of schools have library facility' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q18 as dist_avg, 'tq' level, 'Protocal for COVID symptoms reporting' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q17 as dist_avg, 'tq' level, 'Measures to be taken for wellbeing of children and school staff' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        union all
        select id, state_code, dist_code, Dist_tq_q16 as dist_avg, 'tq' level, 'School reopening guidelines for teacher' question_desc, 0 question_code, 0 total_parent
        from grade5districttable
        ";
        return $query;
    }
    //Query For DRC Feedback data for Grade 8
    public function GetFeedbackDataFor_8_Grade()
    {
        $query = "select id, state_code, dist_code, Dist_pq_q14 as dist_avg, 'pq' level, 'students like to go to school' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_pq_q17 as dist_avg, 'pq' level, 'students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_pq_q18 as dist_avg, 'pq' level, 'students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_pq_q10 as dist_avg, 'pq' level, 'Students go out and play during games period' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_pq_q08 as dist_avg, 'pq' level, 'Students have access to any digital device of class 3, 5 and 8 avail computer in the school' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_pq_q30 as dist_avg, 'pq' level, 'Students of class 10 have laboratory facility in school' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_pq_q27g as dist_avg, 'pq' level, 'Students have internet connectivity at home' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_pq_q29f as dist_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q30 as dist_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q33 as dist_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q31 as dist_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q32 as dist_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q34 as dist_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q36 as dist_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q04 as dist_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q28 as dist_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_sq_q31 as dist_avg, 'sq' level, 'of schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_sq_q32 as dist_avg, 'sq' level, 'of schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_sq_q34 as dist_avg, 'sq' level, 'of schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_sq_q35 as dist_avg, 'sq' level, 'of schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_sq_q14 as dist_avg, 'sq' level, 'of schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_sq_q09 as dist_avg, 'sq' level, 'of schools have library facility' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q18 as dist_avg, 'tq' level, 'Protocal for COVID symptoms reporting' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q17 as dist_avg, 'tq' level, 'Measures to be taken for wellbeing of children and school staff' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        union all
        select id, state_code, dist_code, Dist_tq_q16 as dist_avg, 'tq' level, 'School reopening guidelines for teacher' question_desc, 0 question_code, 0 total_parent
        from grade8districttable
        ";
        return $query;
    }
    //Query For DRC Feedback data for Grade 10
    public function GetFeedbackDataFor_10_Grade()
    {
        $query = "select id, state_code, dist_code, Dist_pq_q14 as dist_avg, 'pq' level, 'students like to go to school' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_pq_q17 as dist_avg, 'pq' level, 'students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_pq_q18 as dist_avg, 'pq' level, 'students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_pq_q10 as dist_avg, 'pq' level, 'Students go out and play during games period' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_pq_q08 as dist_avg, 'pq' level, 'Students have access to any digital device of class 3, 5 and 8 avail computer in the school' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_pq_q30 as dist_avg, 'pq' level, 'students of class 10 have laboratory facility in school' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_pq_q27g as dist_avg, 'pq' level, 'Students have internet connectivity at home' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_pq_q29f as dist_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q30 as dist_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q33 as dist_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q31 as dist_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q32 as dist_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q34 as dist_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q36 as dist_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q04 as dist_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q28 as dist_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_sq_q31 as dist_avg, 'sq' level, 'of schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_sq_q32 as dist_avg, 'sq' level, 'of schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_sq_q34 as dist_avg, 'sq' level, 'of schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_sq_q35 as dist_avg, 'sq' level, 'of schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_sq_q14 as dist_avg, 'sq' level, 'of schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_sq_q09 as dist_avg, 'sq' level, 'of schools have library facility' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q18 as dist_avg, 'tq' level, 'Protocal for COVID symptoms reporting' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q17 as dist_avg, 'tq' level, 'Measures to be taken for wellbeing of children and school staff' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        union all
        select id, state_code, dist_code, Dist_tq_q16 as dist_avg, 'tq' level, 'School reopening guidelines for teacher' question_desc, 0 question_code, 0 total_parent
        from grade10districttable
        ";
        return $query;
    }
    //Query For Feedback DRC data Subject Wise Grade 11
    public function RaqQuery($string,$wherePQNational,$groupByString,$tbl_name)
    {
        $query = "select ".$string."
        CASE 
             WHEN ".$tbl_name.".question_code IS NOT NULL THEN '11' 
               ELSE ".$tbl_name.".question_code
             END AS grade,
             ".$tbl_name.".state_id, ".$tbl_name.".level, ".$tbl_name.".question_code, ".$tbl_name.".question_desc, 
        sum(".$tbl_name.".total_parent::float) AS total_parent,
         round(SUM(avg::float)/count(".$tbl_name.".id)) as avg 
        from ".$tbl_name."
        where ".$tbl_name.".level in ".$wherePQNational."
        group by ".$groupByString." ".$tbl_name.".question_code, ".$tbl_name.".question_desc,".$tbl_name.".level,".$tbl_name.".state_id";

        return $query;
    }

    // Learning Outcome Final Data district Wise
    public function districtWiseLO(){
        DB::table('district_grade_level_learningoutcome')->truncate();
        ini_set('max_execution_time', '5000');

        $getAlldistrictDataSubjectWiseG3 = $this->GetAlldistrictDataSubjectCodeG3();
        $getAlldistrictDataSubjectWiseG5 = $this->GetAlldistrictDataSubjectCodeG5();
        $getAlldistrictDataSubjectWiseG8 = $this->GetAlldistrictDataSubjectCodeG8();
        $getAlldistrictDataSubjectWiseG10 = $this->GetAlldistrictDataSubjectCodeG10();

        $final_dataG3 = DB::select($getAlldistrictDataSubjectWiseG3);
        $final_dataG5 = DB::select($getAlldistrictDataSubjectWiseG5);
        $final_dataG8 = DB::select($getAlldistrictDataSubjectWiseG8);
        $final_dataG10 = DB::select($getAlldistrictDataSubjectWiseG10);

        foreach($final_dataG3 as $data){

                DistrictGradeLevelLearningOutCome::insert([
                    'state_id'=>$data->state_code,
                    'district_id'=>$data->dist_code,
                    'grade'=>3,
                    'subject_code'=>$data->subject_code,
                    'language'=>$data->language,
                    'question'=>$data->description,
                    'total_student'=>'0',
                    'avg'=>$data->district_avg,
                    'state_avg'=>$data->state_avg,
                    'national_avg'=>$data->national_avg,
                ]);
        }

        foreach($final_dataG5 as $data){

            DistrictGradeLevelLearningOutCome::insert([
                'state_id'=>$data->state_code,
                'district_id'=>$data->dist_code,
                'grade'=>5,
                'subject_code'=>$data->subject_code,
                'language'=>$data->language,
                'question'=>$data->description,
                'total_student'=>'0',
                'avg'=>$data->district_avg,
                'state_avg'=>$data->state_avg,
                'national_avg'=>$data->national_avg,
            ]);
        }

        foreach($final_dataG8 as $data){

            DistrictGradeLevelLearningOutCome::insert([
                'state_id'=>$data->state_code,
                'district_id'=>$data->dist_code,
                'grade'=>8,
                'subject_code'=>$data->subject_code,
                'language'=>$data->language,
                'question'=>$data->description,
                'total_student'=>'0',
                'avg'=>$data->district_avg,
                'state_avg'=>$data->state_avg,
                'national_avg'=>$data->national_avg,
            ]);
        }

        foreach($final_dataG10 as $data){

            DistrictGradeLevelLearningOutCome::insert([
                'state_id'=>$data->state_code,
                'district_id'=>$data->dist_code,
                'grade'=>10,
                'subject_code'=>$data->subject_code,
                'language'=>$data->language,
                'question'=>$data->description,
                'total_student'=>'0',
                'avg'=>$data->district_avg,
                'state_avg'=>$data->state_avg,
                'national_avg'=>$data->national_avg,
            ]);
        }

        return Redirect()->route('feedback');
    }

    //Query For LO DRC data Subject Wise Grade 3
    public function GetAlldistrictDataSubjectCodeG3()
    {
        $query = "select id, state_code, dist_code, State_LA_psub3_1 as state_avg, India_LA_psub3_1 as national_avg, Dist_LA_psub3_1 as district_avg, 'L304' subject_code, 'language' language, 'Reads small texts with comprehension i.e., identifies main ideas, details,sequence and draws conclusions' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_LA_psub3_2 as state_avg, India_LA_psub3_2 as national_avg, Dist_LA_psub3_2 as district_avg, 'L312' subject_code, 'language' language, 'Reads printed scripts on the classroom walls: poems, posters, charts etc.' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_1 as state_avg, India_MA_psub3_1 as national_avg, Dist_MA_psub3_1 as district_avg, 'M301' subject_code, 'math' language, 'Reads and writes numbers up to 999 using place value' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_2 as state_avg, India_MA_psub3_2 as national_avg, Dist_MA_psub3_2 as district_avg, 'M302' subject_code, 'math' language, 'Compares numbers up to 999 based on their place values' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_3 as state_avg, India_MA_psub3_3 as national_avg, Dist_MA_psub3_3 as district_avg, 'M303' subject_code, 'math' language, 'Solves simple daily life problems using addition and subtraction of three digit numbers with and without regrouping' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_4 as state_avg, India_MA_psub3_4 as national_avg, Dist_MA_psub3_4 as district_avg, 'M304' subject_code, 'math' language, 'Constructs and uses the multiplication facts (up till 10) in daily life situations' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_5 as state_avg, India_MA_psub3_5 as national_avg, Dist_MA_psub3_5 as district_avg, 'M305' subject_code, 'math' language, 'Analyses and applies an appropriate number operation in the situation/ context' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_6 as state_avg, India_MA_psub3_6 as national_avg, Dist_MA_psub3_6 as district_avg, 'M306' subject_code, 'math' language, 'Explains the meaning of division facts by equal grouping/sharing and finds it by repeated subtraction' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_7 as state_avg, India_MA_psub3_7 as national_avg, Dist_MA_psub3_7 as district_avg, 'M309' subject_code, 'math' language, 'Identifies and makes 2D-shapes by paper folding. paper cutting on the dot grid, using straight lines etc.' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_8 as state_avg, India_MA_psub3_8 as national_avg, Dist_MA_psub3_8 as district_avg, 'M311' subject_code, 'math' language, 'Fills a given region leaving no gaps using a tile of a given shape' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_9 as state_avg, India_MA_psub3_9 as national_avg, Dist_MA_psub3_9 as district_avg, 'M312' subject_code, 'math' language, 'Estimates and measures length and distance using standard units like centimeters or meters & identifies relationships' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_10 as state_avg, India_MA_psub3_10 as national_avg, Dist_MA_psub3_10 as district_avg, 'M317' subject_code, 'math' language, 'Reads the time correctly to the hour using a clock/watch' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_11 as state_avg, India_MA_psub3_11 as national_avg, Dist_MA_psub3_11 as district_avg, 'M318' subject_code, 'math' language, 'Extends patterns in simple shapes and numbers' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_12 as state_avg, India_MA_psub3_12 as national_avg, Dist_MA_psub3_12 as district_avg, 'M319' subject_code, 'math' language, 'Records data using tally marks, represents pictorially and draws' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_1 as state_avg, India_EV_psub3_1 as national_avg, Dist_EV_psub3_1 as district_avg, 'EVS302' subject_code, 'evs' language, 'Identifies simple features (e.g. movement, at places found/ kept, eating habits, sounds) of animals and birds in the immediate surroundings.' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_2 as state_avg, India_EV_psub3_2 as national_avg, Dist_EV_psub3_2 as district_avg, 'EVS303' subject_code, 'evs' language, 'Identifies relationships with and among family members' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_3 as state_avg, India_EV_psub3_3 as national_avg, Dist_EV_psub3_3 as district_avg, 'EVS304' subject_code, 'evs' language, 'Identifies objects, signs (vessels, stoves, transport, means of communication, transport, signboards etc.), places (types of houses/shelters, bus stand, petrol pump etc.) activities (works people do, cooking processes, etc.) at home/school/ neighborhoods' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_4 as state_avg, India_EV_psub3_4 as national_avg, Dist_EV_psub3_4 as district_avg, 'EVS305' subject_code, 'evs' language, 'Describes need of food for people of different age groups, animals/birds, availability of food and water and use of water at home and surroundings.' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_5 as state_avg, India_EV_psub3_5 as national_avg, Dist_EV_psub3_5 as district_avg, 'EVS307' subject_code, 'evs' language, 'Groups objects, birds, animals, features, activities according to differences/ similarities using different senses. (e.g. appearance/place of living/ food/ movement/ likes-dislikes/ any other features)' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_6 as state_avg, India_EV_psub3_6 as national_avg, Dist_EV_psub3_6 as district_avg, 'EVS309' subject_code, 'evs' language, 'Identifies directions, location of objects/places in simple maps using signs/symbols/ verbally' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_7 as state_avg, India_EV_psub3_7 as national_avg, Dist_EV_psub3_7 as district_avg, 'EVS310' subject_code, 'evs' language, 'Guesses properties, estimates quantities of materials/activities in daily life and verifies using symbols/non-standard units' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_8 as state_avg, India_EV_psub3_8 as national_avg, Dist_EV_psub3_8 as district_avg, 'EVS311' subject_code, 'evs' language, 'Records observations, experiences, information on objects/activities/places visited in different ways and predicts patterns etc' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_9 as state_avg, India_EV_psub3_9 as national_avg, Dist_EV_psub3_9 as district_avg, 'EVS313' subject_code, 'evs' language, 'Observes rules in games (local, indoor, outdoor)' description
        from grade3districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_10 as state_avg, India_EV_psub3_10 as national_avg, Dist_EV_psub3_10 as district_avg, 'EVS314' subject_code, 'evs' language, 'Voices opinion on good/bad touch , stereotypes for tasks/play/food in family w.r.t gender, misuse/wastage of food and water in family and school.' description
        from grade3districttable
        ";

        return $query;

    }

    //Query For LO DRC data Subject Wise Grade 5
    public function GetAlldistrictDataSubjectCodeG5()
    {
        $query = "select id, state_code, dist_code, State_LA_psub3_1 as state_avg, India_LA_psub3_1 as national_avg, Dist_LA_psub3_1 as district_avg, 'L508' subject_code, 'language' language, 'Reads text with comprehension, locates details and sequence of events' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_1 as state_avg, India_MA_psub3_1 as national_avg, Dist_MA_psub3_1 as district_avg, 'M401' subject_code, 'math' language, 'Applies operations of numbers in daily life situations' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_2 as state_avg, India_MA_psub3_2 as national_avg, Dist_MA_psub3_2 as district_avg, 'M412' subject_code, 'math' language, 'Explores the area and perimeter of simple geometrical shapes (triangle, rectangle, square) in terms of given shape as a unit' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_3 as state_avg, India_MA_psub3_3 as national_avg, Dist_MA_psub3_3 as district_avg, 'M418' subject_code, 'math' language, 'Calculates time intervals/duration of familiar daily life events by using forward or backward counting/addition and subtraction' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_4 as state_avg, India_MA_psub3_4 as national_avg, Dist_MA_psub3_4 as district_avg, 'M421' subject_code, 'math' language, 'Represent the collected information in tables and bar graphs and draws inferences from these' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_5 as state_avg, India_MA_psub3_5 as national_avg, Dist_MA_psub3_5 as district_avg, 'M501' subject_code, 'math' language, 'Reads and writes numbers bigger than 1000 being used in her/his surroundings' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_6 as state_avg, India_MA_psub3_6 as national_avg, Dist_MA_psub3_6 as district_avg, 'M504' subject_code, 'math' language, 'Estimates sum. difference, product and quotient of numbers and verifies the same using different strategies like using standard algorithms or breaking a number and then using operation' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_7 as state_avg, India_MA_psub3_7 as national_avg, Dist_MA_psub3_7 as district_avg, 'M505' subject_code, 'math' language, 'Finds the number corresponding to part of a collection' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_8 as state_avg, India_MA_psub3_8 as national_avg, Dist_MA_psub3_8 as district_avg, 'M506' subject_code, 'math' language, 'Identifies and forms equivalent fractions of a given fraction' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_9 as state_avg, India_MA_psub3_9 as national_avg, Dist_MA_psub3_9 as district_avg, 'M508' subject_code, 'math' language, 'Converts fractions into decimals and vice versa' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_10 as state_avg, India_MA_psub3_10 as national_avg, Dist_MA_psub3_10 as district_avg, 'M509' subject_code, 'math' language, 'Classifies angles into right angle, acute angle, obtuse angle and represents the same by drawing and tracing' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_11 as state_avg, India_MA_psub3_11 as national_avg, Dist_MA_psub3_11 as district_avg, 'M512' subject_code, 'math' language, 'Relates different commonly used larger and smaller units of length, weight and volume and converts larger units to smaller units and vice versa' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_12 as state_avg, India_MA_psub3_12 as national_avg, Dist_MA_psub3_12 as district_avg, 'M513' subject_code, 'math' language, 'Estimates the volume of a solid body in known units.' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_13 as state_avg, India_MA_psub3_13 as national_avg, Dist_MA_psub3_13 as district_avg, 'M514' subject_code, 'math' language, 'Applies the four fundamental arithmetic operations in solving problems involving money, length, mass, capacity and time intervals' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_14 as state_avg, India_MA_psub3_14 as national_avg, Dist_MA_psub3_14 as district_avg, 'M515' subject_code, 'math' language, 'Identifies the pattern in triangular numbers and square number' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_15 as state_avg, India_MA_psub3_15 as national_avg, Dist_MA_psub3_15 as district_avg, 'M516' subject_code, 'math' language, 'Collects data related to various daily life situations. represents it in tabular form and as bar graphs and interprets it' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_1 as state_avg, India_EV_psub3_1 as national_avg, Dist_EV_psub3_1 as district_avg, 'EVS403' subject_code, 'evs' language, 'Identifies relationship with and among family members in extended family' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_2 as state_avg, India_EV_psub3_2 as national_avg, Dist_EV_psub3_2 as district_avg, 'EVS410' subject_code, 'evs' language, 'Records observations/experiences/information for objects, activities, phenomena, places visited in different ways and predicts patterns and activities/ phenomena' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_3 as state_avg, India_EV_psub3_3 as national_avg, Dist_EV_psub3_3 as district_avg, 'EVS501' subject_code, 'evs' language, 'Explains the super senses and unusual features (sight, smell, hear, sleep, sound, etc.) of animals and their responses to light, sound, food etc.' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_4 as state_avg, India_EV_psub3_4 as national_avg, Dist_EV_psub3_4 as district_avg, 'EVS503' subject_code, 'evs' language, 'Describes the interdependence among animals, plants and humans' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_5 as state_avg, India_EV_psub3_5 as national_avg, Dist_EV_psub3_5 as district_avg, 'EVS504' subject_code, 'evs' language, 'Explains the role and functions of different institutions in daily life (Bank, Panchayat, cooperatives. police station, etc.)' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_6 as state_avg, India_EV_psub3_6 as national_avg, Dist_EV_psub3_6 as district_avg, 'EVS505' subject_code, 'evs' language, 'Establishes linkages among terrain, climate, resources (food, water, shelter, livelihood) and cultural life. (e.g. life in distant/difficult areas like hot/cold deserts)' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_7 as state_avg, India_EV_psub3_7 as national_avg, Dist_EV_psub3_7 as district_avg, 'EVS506' subject_code, 'evs' language, 'Groups objects, materials, activities for features/properties such as shape, taste, color , texture, sound, traits etc.' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_8 as state_avg, India_EV_psub3_8 as national_avg, Dist_EV_psub3_8 as district_avg, 'EVS507' subject_code, 'evs' language, 'Traces the changes in practices, customs, techniques of past and present through coins, paintings, monuments, museum etc. and interacting with elders' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_9 as state_avg, India_EV_psub3_9 as national_avg, Dist_EV_psub3_9 as district_avg, 'EVS508' subject_code, 'evs' language, 'Guesses (properties, conditions of phenomena), estimates spatial quantities (distance, area, volume, weight etc. ) and time in simple standard units and verifies using simple tools/set ups' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_10 as state_avg, India_EV_psub3_10 as national_avg, Dist_EV_psub3_10 as district_avg, 'EVS509' subject_code, 'evs' language, 'Records observations/experiences/information in an organized manner (e.g. in tables/ sketches/ bar graphs/ pie charts) and predicts patterns in activities/ phenomena (e.g. floating, sinking, mixing, evaporation , germination, spoilage) to establish relation between cause and effect.' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_11 as state_avg, India_EV_psub3_11 as national_avg, Dist_EV_psub3_11 as district_avg, 'EVS510' subject_code, 'evs' language, 'Identifies signs, directions, location of different objects/landmarks of a locality / place visited in maps and predicts directions w.r.t. positions at different places for a location' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_12 as state_avg, India_EV_psub3_12 as national_avg, Dist_EV_psub3_12 as district_avg, 'EVS512' subject_code, 'evs' language, 'Voices opinions on issues observed/experienced and relates practices/happenings to larger issues of society' description
        from grade5districttable
        union all
        select id, state_code, dist_code, State_EV_psub3_13 as state_avg, India_EV_psub3_13 as national_avg, Dist_EV_psub3_13 as district_avg, 'EVS513' subject_code, 'evs' language, 'Suggests ways for hygiene, health, managing waste. disaster/emergency situations and protecting/saving resources' description
        from grade5districttable";

        return $query;

    }

    //Query For LO DRC data Subject Wise Grade 8
    public function GetAlldistrictDataSubjectCodeG8()
    {
        $query = "select id, state_code, dist_code, State_LA_psub3_1 as state_avg, India_LA_psub3_1 as national_avg, Dist_LA_psub3_1 as district_avg, 'L813' subject_code, 'language' language, 'Read textual/non-textual materials with comprehension and identifies the details, characters, main idea and sequence of ideas and events while reading' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_1 as state_avg, India_MA_psub3_1 as national_avg, Dist_MA_psub3_1 as district_avg, 'M601' subject_code, 'math' language, 'Solves problems involving large numbers by applying appropriate operations' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_2 as state_avg, India_MA_psub3_2 as national_avg, Dist_MA_psub3_2 as district_avg, 'M606' subject_code, 'math' language, 'Solves problems on daily life situations involving addition and subtraction of fractions / decimals' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_3 as state_avg, India_MA_psub3_3 as national_avg, Dist_MA_psub3_3 as district_avg, 'M620' subject_code, 'math' language, 'Finds out the perimeter and area of rectangular objects in the surroundings like floor of the class room, surfaces of a chalk box etc.' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_4 as state_avg, India_MA_psub3_4 as national_avg, Dist_MA_psub3_4 as district_avg, 'M621' subject_code, 'math' language, 'Arranges given/collected information in the form of table, pictograph and bar graph and interprets them' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_5 as state_avg, India_MA_psub3_5 as national_avg, Dist_MA_psub3_5 as district_avg, 'M702' subject_code, 'math' language, 'Interprets the division and multiplication of fractions' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_6 as state_avg, India_MA_psub3_6 as national_avg, Dist_MA_psub3_6 as district_avg, 'M705' subject_code, 'math' language, 'Solves problems related to daily life situations involving rational numbers' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_7 as state_avg, India_MA_psub3_7 as national_avg, Dist_MA_psub3_7 as district_avg, 'M706' subject_code, 'math' language, 'Uses exponential form of numbers to simplify problems involving multiplication and division of large numbers' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_8 as state_avg, India_MA_psub3_8 as national_avg, Dist_MA_psub3_8 as district_avg, 'M707' subject_code, 'math' language, 'Adds/subtracts algebraic expressions' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_9 as state_avg, India_MA_psub3_9 as national_avg, Dist_MA_psub3_9 as district_avg, 'M710' subject_code, 'math' language, 'Solves problems related to conversion of percentage to fraction and decimal and vice versa' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_10 as state_avg, India_MA_psub3_10 as national_avg, Dist_MA_psub3_10 as district_avg, 'M717' subject_code, 'math' language, 'Finds out approximate area of closed shapes by using unit square grid/graph sheet' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_11 as state_avg, India_MA_psub3_11 as national_avg, Dist_MA_psub3_11 as district_avg, 'M719' subject_code, 'math' language, 'Finds various representative values for simple data from her/his daily life contexts like mean, median and mode' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_12 as state_avg, India_MA_psub3_12 as national_avg, Dist_MA_psub3_12 as district_avg, 'M721' subject_code, 'math' language, 'Interprets data using bar graph' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_13 as state_avg, India_MA_psub3_13 as national_avg, Dist_MA_psub3_13 as district_avg, 'M801' subject_code, 'math' language, 'Generalizes properties of addition, subtraction, multiplication and division of rational numbers through patterns' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_14 as state_avg, India_MA_psub3_14 as national_avg, Dist_MA_psub3_14 as district_avg, 'M802' subject_code, 'math' language, 'Finds rational numbers between two given rational numbers' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_15 as state_avg, India_MA_psub3_15 as national_avg, Dist_MA_psub3_15 as district_avg, 'M803' subject_code, 'math' language, 'Proves divisibility rules of 2, 3,4, 5, 6, 9 and 11' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_16 as state_avg, India_MA_psub3_16 as national_avg, Dist_MA_psub3_16 as district_avg, 'M804' subject_code, 'math' language, 'Finds squares,cubes,square roots and cube roots of numbers using different methods' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_17 as state_avg, India_MA_psub3_17 as national_avg, Dist_MA_psub3_17 as district_avg, 'M808' subject_code, 'math' language, 'uses various algebric identities in solving problem of daily life.' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_18 as state_avg, India_MA_psub3_18 as national_avg, Dist_MA_psub3_18 as district_avg, 'M812' subject_code, 'math' language, 'Verifies properties of parallelogram and establishes the relationship between them through reasoning' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_19 as state_avg, India_MA_psub3_19 as national_avg, Dist_MA_psub3_19 as district_avg, 'M818' subject_code, 'math' language, 'Verifies properties of parallelogram and establishes the relationship between them through reasoning' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_20 as state_avg, India_MA_psub3_20 as national_avg, Dist_MA_psub3_20 as district_avg, 'M819' subject_code, 'math' language, 'Draws and interprets bar charts and pie charts' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_1 as state_avg, India_SC_psub3_1 as national_avg, Dist_SC_psub3_1 as district_avg, 'SCI703' subject_code, 'sci' language, 'Classifies materials and organisms based on properties/characteristics' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_2 as state_avg, India_SC_psub3_2 as national_avg, Dist_SC_psub3_2 as district_avg, 'SCI704' subject_code, 'sci' language, 'Conducts simple investigation to seek answers to queries' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_3 as state_avg, India_SC_psub3_3 as national_avg, Dist_SC_psub3_3 as district_avg, 'SCI705' subject_code, 'sci' language, 'Relates processes and phenomenon with causes' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_4 as state_avg, India_SC_psub3_4 as national_avg, Dist_SC_psub3_4 as district_avg, 'SCI708' subject_code, 'sci' language, 'Measures and calculates e.g.. temperature; pulse rate; speed of moving objects; time period of a simple pendulum, etc.' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_5 as state_avg, India_SC_psub3_5 as national_avg, Dist_SC_psub3_5 as district_avg, 'SCI710' subject_code, 'sci' language, 'Plots and interprets graphs' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_6 as state_avg, India_SC_psub3_6 as national_avg, Dist_SC_psub3_6 as district_avg, 'SCI711' subject_code, 'sci' language, 'Constructs models using materials from surroundings and explains their working' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_7 as state_avg, India_SC_psub3_7 as national_avg, Dist_SC_psub3_7 as district_avg, 'SCI801' subject_code, 'sci' language, 'Differentiates materials, organism and processes' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_8 as state_avg, India_SC_psub3_8 as national_avg, Dist_SC_psub3_8 as district_avg, 'SCI804' subject_code, 'sci' language, 'Relates processes and phenomenon with causes' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_9 as state_avg, India_SC_psub3_9 as national_avg, Dist_SC_psub3_9 as district_avg, 'SCI805' subject_code, 'sci' language, 'Explains processes and phenomenon' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_10 as state_avg, India_SC_psub3_10 as national_avg, Dist_SC_psub3_10 as district_avg, 'SCI807' subject_code, 'sci' language, 'Measures angles of incidence and reflection, etc.' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_11 as state_avg, India_SC_psub3_11 as national_avg, Dist_SC_psub3_11 as district_avg, 'SCI811' subject_code, 'sci' language, 'Applies learning of scientific concepts in day-to-day life' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_12 as state_avg, India_SC_psub3_12 as national_avg, Dist_SC_psub3_12 as district_avg, 'SCI813' subject_code, 'sci' language, 'Makes efforts to protect environment' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_1 as state_avg, India_SS_psub3_1 as national_avg, Dist_SS_psub3_1 as district_avg, 'SST605' subject_code, 'sst' language, 'Identifies latitudes and longitudes, e.g., poles, equator, tropics, States /Ws of India and other neighboring countries on globe and the world map' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_2 as state_avg, India_SS_psub3_2 as national_avg, Dist_SS_psub3_2 as district_avg, 'SST610' subject_code, 'sst' language, 'Locates important historical sites, places on an outline map of India.' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_3 as state_avg, India_SS_psub3_3 as national_avg, Dist_SS_psub3_3 as district_avg, 'SST625' subject_code, 'sst' language, 'Describes the functioning of rural and urban local government bodies in sectors like health and education' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_4 as state_avg, India_SS_psub3_4 as national_avg, Dist_SS_psub3_4 as district_avg, 'SST703' subject_code, 'sst' language, 'Explains preventive actions to be undertaken in the event of disasters' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_5 as state_avg, India_SS_psub3_5 as national_avg, Dist_SS_psub3_5 as district_avg, 'SST704' subject_code, 'sst' language, 'Describes formation of landforms due to various factors' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_6 as state_avg, India_SS_psub3_6 as national_avg, Dist_SS_psub3_6 as district_avg, 'SST722' subject_code, 'sst' language, 'Explains the significance of equality in democracy' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_7 as state_avg, India_SS_psub3_7 as national_avg, Dist_SS_psub3_7 as district_avg, 'SST726' subject_code, 'sst' language, 'Describes the process of election to the legislative assembly' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_8 as state_avg, India_SS_psub3_8 as national_avg, Dist_SS_psub3_8 as district_avg, 'SST731' subject_code, 'sst' language, 'Explains the functioning of media with appropriate examples from newspapers' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_9 as state_avg, India_SS_psub3_9 as national_avg, Dist_SS_psub3_9 as district_avg, 'SST733' subject_code, 'sst' language, 'Differentiates between different kinds of markets' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_10 as state_avg, India_SS_psub3_10 as national_avg, Dist_SS_psub3_10 as district_avg, 'SST734' subject_code, 'sst' language, 'Traces how goods travel through various market places' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_11 as state_avg, India_SS_psub3_11 as national_avg, Dist_SS_psub3_11 as district_avg, 'SST802' subject_code, 'sst' language, 'Describes major crops, types of farming and agricultural practices in her/his own areaistate' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_12 as state_avg, India_SS_psub3_12 as national_avg, Dist_SS_psub3_12 as district_avg, 'SST805' subject_code, 'sst' language, 'Locates distribution of important minerals e.g. coal and mineral oil on the world map' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_13 as state_avg, India_SS_psub3_13 as national_avg, Dist_SS_psub3_13 as district_avg, 'SST807' subject_code, 'sst' language, 'Justifies judicious use of natural resources' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_14 as state_avg, India_SS_psub3_14 as national_avg, Dist_SS_psub3_14 as district_avg, 'SST809' subject_code, 'sst' language, 'Draws interrelationship between types of farming and development in different regions of the world' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_15 as state_avg, India_SS_psub3_15 as national_avg, Dist_SS_psub3_15 as district_avg, 'SST810' subject_code, 'sst' language, 'Distinguishes the modern period from the medieval and the ancient periods through the use of sources' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_16 as state_avg, India_SS_psub3_16 as national_avg, Dist_SS_psub3_16 as district_avg, 'SST815' subject_code, 'sst' language, 'Explains the origin, nature and spread of the revolt of 1857 and the lessons learned from it.' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_17 as state_avg, India_SS_psub3_17 as national_avg, Dist_SS_psub3_17 as district_avg, 'SST816' subject_code, 'sst' language, 'Analyses the decline of pre-existing urban centers and handicraft industries and the development of new urban centers and industries in India during the colonial period' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_18 as state_avg, India_SS_psub3_18 as national_avg, Dist_SS_psub3_18 as district_avg, 'SST818' subject_code, 'sst' language, 'Analyses the issues related to caste, women, widow remarriage, child marriage, social reforms and the laws and policies of colonial administration towards these issues' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_19 as state_avg, India_SS_psub3_19 as national_avg, Dist_SS_psub3_19 as district_avg, 'SST823' subject_code, 'sst' language, 'Applies the knowledge of the Fundamental Rights to find out about their violation. protection and promotion in a given situation' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_20 as state_avg, India_SS_psub3_20 as national_avg, Dist_SS_psub3_20 as district_avg, 'SST827' subject_code, 'sst' language, 'Describes the process of making a taw. (e.g. Domestic Violence Act, RTI Act, RTE Act)' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_21 as state_avg, India_SS_psub3_21 as national_avg, Dist_SS_psub3_21 as district_avg, 'SST831' subject_code, 'sst' language, 'Identifies the role of Government in providing public facilities such as water, sanitation, road, electricity etc, and recognizes their availability' description
        from grade8districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_22 as state_avg, India_SS_psub3_22 as national_avg, Dist_SS_psub3_22 as district_avg, 'SST833' subject_code, 'sst' language, 'Draws bar diagram to show population of different countries/India/states' description
        from grade8districttable";

        return $query;

    }

    //Query For LO DRC data Subject Wise Grade 10
    public function GetAlldistrictDataSubjectCodeG10()
    {
        $query = "select id, state_code, dist_code, State_EN_psub3_1 as state_avg, India_EN_psub3_1 as national_avg, Dist_EN_psub3_1 as district_avg, 'E1007' subject_code, 'eng' language, 'Reads, comprehends and responds to complex texts independently.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_LA_psub3_1 as state_avg, India_LA_psub3_1 as national_avg, Dist_LA_psub3_1 as district_avg, 'MIL1011' subject_code, 'mil' language, 'पाठ्यवस्तु में शामिल रचनाओं के अतिरिक्‍त अन्य कविता, कहानी,एकांकी को पढ़ते-लिखते और मंचन करते हैं।' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_1 as state_avg, India_MA_psub3_1 as national_avg, Dist_MA_psub3_1 as district_avg, 'M1001' subject_code, 'math' language, 'Generalises properties of numbers and relations among them studied earlier to evolve results, such as, Euclid’s division algorithm, Fundamental Theorem of Arithmetic and applies them to solve problems related to real life contexts.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_2 as state_avg, India_MA_psub3_2 as national_avg, Dist_MA_psub3_2 as district_avg, 'M1002' subject_code, 'math' language, 'Develops a relationship between algebraic and graphical methods of finding the zeroes of a polynomial.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_3 as state_avg, India_MA_psub3_3 as national_avg, Dist_MA_psub3_3 as district_avg, 'M1003' subject_code, 'math' language, 'Finds solutions of pairs of linear equations in two variables using graphical and different algebraic methods.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_4 as state_avg, India_MA_psub3_4 as national_avg, Dist_MA_psub3_4 as district_avg, 'M1004' subject_code, 'math' language, 'Demonstrates strategies of finding roots and determining the nature of roots of a quadratic equation.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_5 as state_avg, India_MA_psub3_5 as national_avg, Dist_MA_psub3_5 as district_avg, 'M1005' subject_code, 'math' language, 'Develops strategies to apply the concept of A.P. to daily life situations. Works out ways to differentiate between congruent and similar figures.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_6 as state_avg, India_MA_psub3_6 as national_avg, Dist_MA_psub3_6 as district_avg, 'M1006' subject_code, 'math' language, 'Establishes properties for similarity of two triangles logically using different geometric criteria established earlier such as, Basic Proportionality Theorem, etc.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_7 as state_avg, India_MA_psub3_7 as national_avg, Dist_MA_psub3_7 as district_avg, 'M1007' subject_code, 'math' language, 'Derives formulae to establish relations for geometrical shapes in the context of a coordinate plane, such as, finding the distance between two given points, to determine the coordinates of a point between any two given points, to find the area of a triangle
        etc.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_8 as state_avg, India_MA_psub3_8 as national_avg, Dist_MA_psub3_8 as district_avg, 'M1008' subject_code, 'math' language, 'Determines all trigonometric ratios with respect to a given acute angle (of a right triangle) and uses them in solving problems in daily life contexts like finding heights of different structures or distance from them.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_9 as state_avg, India_MA_psub3_9 as national_avg, Dist_MA_psub3_9 as district_avg, 'M1009' subject_code, 'math' language, 'Derives proofs of theorems related to the tangents of circles.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_10 as state_avg, India_MA_psub3_10 as national_avg, Dist_MA_psub3_10 as district_avg, 'M1010' subject_code, 'math' language, 'Examines the steps of geometrical constructions and reason out each step' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_11 as state_avg, India_MA_psub3_11 as national_avg, Dist_MA_psub3_11 as district_avg, 'M1011' subject_code, 'math' language, 'Finds surface areas and volumes of objects in the surroundings by visualising them as a combination of different solids like cylinder and a cone, cylinder and a hemisphere, combination of different cubes, etc.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_MA_psub3_12 as state_avg, India_MA_psub3_12 as national_avg, Dist_MA_psub3_12 as district_avg, 'M1012' subject_code, 'math' language, 'Calculates mean, median and mode for different sets of data related with real life contexts.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_1 as state_avg, India_SC_psub3_1 as national_avg, Dist_SC_psub3_1 as district_avg, 'SCI1001' subject_code, 'sci' language, 'Differentiates materials, objects, organisms, phenomena, and processes, based on, properties and characteristics.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_2 as state_avg, India_SC_psub3_2 as national_avg, Dist_SC_psub3_2 as district_avg, 'SCI1002' subject_code, 'sci' language, 'Classifies materials, objects, organisms, phenomena, and processes, based on properties and characteristics.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_3 as state_avg, India_SC_psub3_3 as national_avg, Dist_SC_psub3_3 as district_avg, 'SCI1003' subject_code, 'sci' language, 'Relates processes and phenomena with causes and effects' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_4 as state_avg, India_SC_psub3_4 as national_avg, Dist_SC_psub3_4 as district_avg, 'SCI1004' subject_code, 'sci' language, 'Explains processes and phenomena.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_5 as state_avg, India_SC_psub3_5 as national_avg, Dist_SC_psub3_5 as district_avg, 'SCI1005' subject_code, 'sci' language, 'Analyses and interprets data, graphs, and figures' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_6 as state_avg, India_SC_psub3_6 as national_avg, Dist_SC_psub3_6 as district_avg, 'SCI1006' subject_code, 'sci' language, 'Calculates using the data given' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_7 as state_avg, India_SC_psub3_7 as national_avg, Dist_SC_psub3_7 as district_avg, 'SCI1007' subject_code, 'sci' language, 'Uses scientific conventions to represent units of various quantities, symbols, formulae, and equations.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_8 as state_avg, India_SC_psub3_8 as national_avg, Dist_SC_psub3_8 as district_avg, 'SCI1008' subject_code, 'sci' language, 'Applies learning to hypothetical situations' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_9 as state_avg, India_SC_psub3_9 as national_avg, Dist_SC_psub3_9 as district_avg, 'SCI1009' subject_code, 'sci' language, 'Applies scientific concepts in daily life and solving problems' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SC_psub3_10 as state_avg, India_SC_psub3_10 as national_avg, Dist_SC_psub3_10 as district_avg, 'SCI1010' subject_code, 'sci' language, 'Derives formulae, equations, and laws' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_1 as state_avg, India_SS_psub3_1 as national_avg, Dist_SS_psub3_1 as district_avg, 'SST1001' subject_code, 'sst' language, 'Recognises and retrieves facts, figures, and narrate processes.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_2 as state_avg, India_SS_psub3_2 as national_avg, Dist_SS_psub3_2 as district_avg, 'SST1002' subject_code, 'sst' language, 'Classifies and compares events, facts, data, and figures.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_3 as state_avg, India_SS_psub3_3 as national_avg, Dist_SS_psub3_3 as district_avg, 'SST1003' subject_code, 'sst' language, 'Explains cause and effect relationship between phenomena, events, and their occurrence.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_4 as state_avg, India_SS_psub3_4 as national_avg, Dist_SS_psub3_4 as district_avg, 'SST1004' subject_code, 'sst' language, 'Analyses and evaluates information.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_5 as state_avg, India_SS_psub3_5 as national_avg, Dist_SS_psub3_5 as district_avg, 'SST1005' subject_code, 'sst' language, 'Interprets.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_6 as state_avg, India_SS_psub3_6 as national_avg, Dist_SS_psub3_6 as district_avg, 'SST1006' subject_code, 'sst' language, 'Draws interlinkages within Social Science.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_7 as state_avg, India_SS_psub3_7 as national_avg, Dist_SS_psub3_7 as district_avg, 'SST1007' subject_code, 'sst' language, 'Identifies assumptions, biases, prejudices, or stereotypes about various aspects.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_8 as state_avg, India_SS_psub3_8 as national_avg, Dist_SS_psub3_8 as district_avg, 'SST1008' subject_code, 'sst' language, 'Demonstrates inquisitiveness, enquiry.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_9 as state_avg, India_SS_psub3_9 as national_avg, Dist_SS_psub3_9 as district_avg, 'SST1009' subject_code, 'sst' language, 'Constructs views, arguments, and ideas on the basis of collected or given information.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_10 as state_avg, India_SS_psub3_10 as national_avg, Dist_SS_psub3_10 as district_avg, 'SST1010' subject_code, 'sst' language, 'Extrapolates and predicts events and phenomena.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_11 as state_avg, India_SS_psub3_11 as national_avg, Dist_SS_psub3_11 as district_avg, 'SST1011' subject_code, 'sst' language, 'Illustrates decision making/problem solving skills.' description
        from grade10districttable
        union all
        select id, state_code, dist_code, State_SS_psub3_12 as state_avg, India_SS_psub3_12 as national_avg, Dist_SS_psub3_12 as district_avg, 'SST1012' subject_code, 'sst' language, 'Shows sensitivity and appreciation skills.' description
        from grade10districttable";

        return $query;

    }
}
