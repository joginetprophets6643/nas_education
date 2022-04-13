<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;
use App\Models\AllGradeStateParticipationTBL;
use App\Models\StateGradeLevelPerformance;
use App\Models\StateGradeLevelLearningOutCome;
use App\Models\PQStateLevelFeedback;
use DB;

class FinalParticipationstateController extends Controller
{
    public function allstateParticipationData()
    {
         DB::table('all_grade_state_participation_tbl')->truncate();
         $grade3PrcoessData = $this->grade3ParticipationData();
         $grade5PrcoessData = $this->grade5ParticipationData();
         $grade8PrcoessData = $this->grade8ParticipationData();
         $grade10PrcoessData = $this->grade10ParticipationData();
         return "Participation Table Created";
    }

    public function grade3ParticipationData()
    {
        
        $final_data=DB::table('grade3statetable')->get();
        // dd($final_data);
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data->state_code,
                "grade"  =>3,
                "total_school" =>$data->state_n_schools,
                "total_student" =>$data->state_n,
                "total_teacher" =>$data->state_n_teachers,
                "rural_location" =>$data->state_rural_n,
                "rural_location_count" =>'0',
                "urban_location" =>$data->state_urban_n,
                "urban_location_count" =>'0',
                "govt_school" =>$data->state_govt_n,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data->state_govtaid_n,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data->state_private_n,
                "private_school_count" =>'0',
                "central_govt_school" =>$data->state_centgovt_n,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data->state_sc_n,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data->state_obc_n,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data->state_st_n,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data->state_general_n,
                "general_social_group_count" =>'0',
                "male_gender" =>$data->state_boy_n,
                "male_gender_count" =>'0',
                "female_gender" =>$data->state_girl_n,
                "female_gender_count" =>'0',
                "trans_gender" =>$data->state_trans_n,
                "trans_gender_count" =>'0',
               

            ]);


    
        }
    }

    public function grade5ParticipationData()
    {
        $final_data=DB::table('grade5statetable')->get();
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data->state_code,
                "grade"  =>5,
                "total_school" =>$data->state_n_schools,
                "total_student" =>$data->state_n,
                "total_teacher" =>$data->state_n_teachers,
                "rural_location" =>$data->state_rural_n,
                "rural_location_count" =>'0',
                "urban_location" =>$data->state_urban_n,
                "urban_location_count" =>'0',
                "govt_school" =>$data->state_govt_n,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data->state_govtaid_n,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data->state_private_n,
                "private_school_count" =>'0',
                "central_govt_school" =>$data->state_centgovt_n,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data->state_sc_n,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data->state_obc_n,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data->state_st_n,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data->state_general_n,
                "general_social_group_count" =>'0',
                "male_gender" =>$data->state_boy_n,
                "male_gender_count" =>'0',
                "female_gender" =>$data->state_girl_n,
                "female_gender_count" =>'0',
                "trans_gender" =>$data->state_trans_n,
                "trans_gender_count" =>'0',
            ]);
        }
    }
    public function grade8ParticipationData()
    {
        $final_data=DB::table('grade8statetable')->get();
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data->state_code,
                "grade"  =>8,
                "total_school" =>$data->state_n_schools,
                "total_student" =>$data->state_n,
                "total_teacher" =>$data->state_n_teachers,
                "rural_location" =>$data->state_rural_n,
                "rural_location_count" =>'0',
                "urban_location" =>$data->state_urban_n,
                "urban_location_count" =>'0',
                "govt_school" =>$data->state_govt_n,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data->state_govtaid_n,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data->state_private_n,
                "private_school_count" =>'0',
                "central_govt_school" =>$data->state_centgovt_n,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data->state_sc_n,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data->state_obc_n,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data->state_st_n,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data->state_general_n,
                "general_social_group_count" =>'0',
                "male_gender" =>$data->state_boy_n,
                "male_gender_count" =>'0',
                "female_gender" =>$data->state_girl_n,
                "female_gender_count" =>'0',
                "trans_gender" =>$data->state_trans_n,
                "trans_gender_count" =>'0',
            ]);
        }
    }
    public function grade10ParticipationData()
    {
        $final_data=DB::table('grade10statetable')->get();
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data->state_code,
                "grade"  =>10,
                "total_school" =>$data->state_n_schools,
                "total_student" =>$data->state_n,
                "total_teacher" =>$data->state_n_teachers,
                "rural_location" =>$data->state_rural_n,
                "rural_location_count" =>'0',
                "urban_location" =>$data->state_urban_n,
                "urban_location_count" =>'0',
                "govt_school" =>$data->state_govt_n,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data->state_govtaid_n,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data->state_private_n,
                "private_school_count" =>'0',
                "central_govt_school" =>$data->state_centgovt_n,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data->state_sc_n,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data->state_obc_n,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data->state_st_n,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data->state_general_n,
                "general_social_group_count" =>'0',
                "male_gender" =>$data->state_boy_n,
                "male_gender_count" =>'0',
                "female_gender" =>$data->state_girl_n,
                "female_gender_count" =>'0',
                "trans_gender" =>$data->state_trans_n,
                "trans_gender_count" =>'0',
            ]);
        }
    }


    public function allstatePerformancedata()
    {
        DB::table('state_grade_level_performance')->truncate();
        $grade3PrcoessData = $this->grade3PerformanceData();
        $grade5PrcoessData = $this->grade5PerformanceData();
        $grade8PrcoessData = $this->grade8PerformanceData();
        // $grade10PrcoessData = $this->grade10PerformanceData();
        return "Performance Table Created";
    }


    public function grade3PerformanceData()
    {
        $stateLevelPerfomanceData =DB::table('grade3statetable')->get();
        foreach($stateLevelPerfomanceData as $k=>$statelevel)
        {
   
            $newstateArray = array();
            
            $newstateArray['language'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_la_pct)?$statelevel->state_la_pct:'0',
                    'national'=>isset($statelevel->india_la_pct)?$statelevel->india_la_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_la_boys_pct)?$statelevel->state_la_boys_pct:'0',"girls"=>isset($statelevel->state_la_girls_pct)?$statelevel->state_la_girls_pct:'0','trans_gender'=>isset($statelevel->state_la_trans_pct)?$statelevel->state_la_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_la_boys_pl12)?$statelevel->state_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_la_boys_pl34)?$statelevel->state_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_la_girls_pl12)?$statelevel->state_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_la_girls_pl34)?$statelevel->state_la_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_la_boys_pct)?$statelevel->india_la_boys_pct:'0',"girls"=>isset($statelevel->india_la_girls_pct)?$statelevel->india_la_girls_pct:'0','trans_gender'=>isset($statelevel->india_la_trans_pct)?$statelevel->india_la_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_la_boys_pl12)?$statelevel->india_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_la_boys_pl34)?$statelevel->india_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_la_girls_pl12)?$statelevel->india_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_la_girls_pl34)?$statelevel->india_la_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_la_urban_pct)?$statelevel->state_la_urban_pct:'0',"rural"=>isset($statelevel->state_la_rural_pct)?$statelevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_la_rural_pl12)?$statelevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_la_urban_pl12)?$statelevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_la_rural_pl34)?$statelevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_la_urban_pl34)?$statelevel->state_la_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_la_urban_pct)?$statelevel->india_la_urban_pct:'0',"rural"=>isset($statelevel->india_la_rural_pct)?$statelevel->india_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_la_rural_pl12)?$statelevel->india_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_la_urban_pl12)?$statelevel->india_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_la_rural_pl34)?$statelevel->india_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_la_urban_pl34)?$statelevel->india_la_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_la_govt_pct)?$statelevel->state_la_govt_pct:'0',"govt_aided"=>isset($statelevel->state_la_govtaid_pct)?$statelevel->state_la_govtaid_pct:'0',"private"=>isset($statelevel->state_la_private_pct)?$statelevel->state_la_private_pct:'0',"central_govt"=>isset($statelevel->state_la_centgovt_pct)?$statelevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_la_govt_pl12)?$statelevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_la_govtaid_pl12)?$statelevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_la_govt_pl34)?$statelevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_la_govtaid_pl34)?$statelevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_la_private_pl12)?$statelevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_la_centgovt_pl12)?$statelevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_la_private_pl34)?$statelevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_la_centgovt_pl34)?$statelevel->state_la_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_la_govt_pct)?$statelevel->india_la_govt_pct:'0',"govt_aided"=>isset($statelevel->india_la_govtaid_pct)?$statelevel->india_la_govtaid_pct:'0',"private"=>isset($statelevel->india_la_private_pct)?$statelevel->india_la_private_pct:'0',"central_govt"=>isset($statelevel->india_la_centgovt_pct)?$statelevel->india_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_la_govt_pl12)?$statelevel->india_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_la_govtaid_pl12)?$statelevel->india_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_la_govt_pl34)?$statelevel->india_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_la_govtaid_pl34)?$statelevel->india_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_la_private_pl12)?$statelevel->india_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_la_centgovt_pl12)?$statelevel->india_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_la_private_pl34)?$statelevel->india_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_la_centgovt_pl34)?$statelevel->india_la_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_la_sc_pct)?$statelevel->state_la_sc_pct:'0',"obc"=>isset($statelevel->state_la_obc_pct)?$statelevel->state_la_obc_pct:'0',"st"=>isset($statelevel->state_la_st_pct)?$statelevel->state_la_st_pct:'0',"general"=>isset($statelevel->state_la_general_pct)?$statelevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_la_sc_pl34)?$statelevel->state_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_la_obc_pl12)?$statelevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_la_sc_pl12)?$statelevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_la_obc_pl34)?$statelevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_la_st_pl12)?$statelevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_la_general_pl12)?$statelevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_la_st_pl34)?$statelevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_la_general_pl34)?$statelevel->state_la_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_la_sc_pct)?$statelevel->india_la_sc_pct:'0',"obc"=>isset($statelevel->india_la_obc_pct)?$statelevel->india_la_obc_pct:'0',"st"=>isset($statelevel->india_la_st_pct)?$statelevel->india_la_st_pct:'0',"general"=>isset($statelevel->india_la_general_pct)?$statelevel->india_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_la_sc_pl34)?$statelevel->india_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_la_obc_pl12)?$statelevel->india_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_la_sc_pl12)?$statelevel->india_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_la_obc_pl34)?$statelevel->india_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_la_st_pl12)?$statelevel->india_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_la_general_pl12)?$statelevel->india_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_la_st_pl34)?$statelevel->india_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_la_general_pl34)?$statelevel->india_la_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_la_pl1)?$statelevel->state_la_pl1:'0',"basic"=>isset($statelevel->state_la_pl2)?$statelevel->state_la_pl2:'0',"proficient"=>isset($statelevel->state_la_pl3)?$statelevel->state_la_pl3:'0',"advanced"=>isset($statelevel->state_la_pl4)?$statelevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_la_pl1)?$statelevel->india_la_pl1:'0',"basic"=>isset($statelevel->india_la_pl2)?$statelevel->india_la_pl2:'0',"proficient"=>isset($statelevel->india_la_pl3)?$statelevel->india_la_pl3:'0',"advanced"=>isset($statelevel->india_la_pl4)?$statelevel->india_la_pl4:'0'))
            );
            
            $newstateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ma_pct)?$statelevel->state_ma_pct:'0',
                    'national'=>isset($statelevel->india_ma_pct)?$statelevel->india_ma_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ma_boys_pct)?$statelevel->state_ma_boys_pct:'0',"girls"=>isset($statelevel->state_ma_girls_pct)?$statelevel->state_ma_girls_pct:'0','trans_gender'=>isset($statelevel->state_ma_trans_pct)?$statelevel->state_ma_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_ma_boys_pl12)?$statelevel->state_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_ma_boys_pl34)?$statelevel->state_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_ma_girls_pl12)?$statelevel->state_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_ma_girls_pl34)?$statelevel->state_ma_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_ma_boys_pct)?$statelevel->india_ma_boys_pct:'0',"girls"=>isset($statelevel->india_ma_girls_pct)?$statelevel->india_ma_girls_pct:'0','trans_gender'=>isset($statelevel->india_ma_trans_pct)?$statelevel->india_ma_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_ma_boys_pl12)?$statelevel->india_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_ma_boys_pl34)?$statelevel->india_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_ma_girls_pl12)?$statelevel->india_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_ma_girls_pl34)?$statelevel->india_ma_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ma_urban_pct)?$statelevel->state_ma_urban_pct:'0',"rural"=>isset($statelevel->state_ma_rural_pct)?$statelevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ma_rural_pl12)?$statelevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ma_urban_pl12)?$statelevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ma_rural_pl34)?$statelevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ma_urban_pl34)?$statelevel->state_ma_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_ma_urban_pct)?$statelevel->india_ma_urban_pct:'0',"rural"=>isset($statelevel->india_ma_rural_pct)?$statelevel->india_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_ma_rural_pl12)?$statelevel->india_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_ma_urban_pl12)?$statelevel->india_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_ma_rural_pl34)?$statelevel->india_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_ma_urban_pl34)?$statelevel->india_ma_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ma_govt_pct)?$statelevel->state_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ma_govtaid_pct)?$statelevel->state_ma_govtaid_pct:'0',"private"=>isset($statelevel->state_ma_private_pct)?$statelevel->state_ma_private_pct:'0',"central_govt"=>isset($statelevel->state_ma_centgovt_pct)?$statelevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ma_govt_pl12)?$statelevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ma_govtaid_pl12)?$statelevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ma_govt_pl34)?$statelevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ma_govtaid_pl34)?$statelevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ma_private_pl12)?$statelevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ma_centgovt_pl12)?$statelevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ma_private_pl34)?$statelevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ma_centgovt_pl34)?$statelevel->state_ma_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_ma_govt_pct)?$statelevel->india_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->india_ma_govtaid_pct)?$statelevel->india_ma_govtaid_pct:'0',"private"=>isset($statelevel->india_ma_private_pct)?$statelevel->india_ma_private_pct:'0',"central_govt"=>isset($statelevel->india_ma_centgovt_pct)?$statelevel->india_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_ma_govt_pl12)?$statelevel->india_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_ma_govtaid_pl12)?$statelevel->india_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_ma_govt_pl34)?$statelevel->india_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_ma_govtaid_pl34)?$statelevel->india_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_ma_private_pl12)?$statelevel->india_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_ma_centgovt_pl12)?$statelevel->india_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_ma_private_pl34)?$statelevel->india_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_ma_centgovt_pl34)?$statelevel->india_ma_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ma_sc_pct)?$statelevel->state_ma_sc_pct:'0',"obc"=>isset($statelevel->state_ma_obc_pct)?$statelevel->state_ma_obc_pct:'0',"st"=>isset($statelevel->state_ma_st_pct)?$statelevel->state_ma_st_pct:'0',"general"=>isset($statelevel->state_ma_general_pct)?$statelevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ma_sc_pl34)?$statelevel->state_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_ma_obc_pl12)?$statelevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ma_sc_pl12)?$statelevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ma_obc_pl34)?$statelevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ma_st_pl12)?$statelevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ma_general_pl12)?$statelevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ma_st_pl34)?$statelevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ma_general_pl34)?$statelevel->state_ma_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_ma_sc_pct)?$statelevel->india_ma_sc_pct:'0',"obc"=>isset($statelevel->india_ma_obc_pct)?$statelevel->india_ma_obc_pct:'0',"st"=>isset($statelevel->india_ma_st_pct)?$statelevel->india_ma_st_pct:'0',"general"=>isset($statelevel->india_ma_general_pct)?$statelevel->india_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_ma_sc_pl34)?$statelevel->india_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_ma_obc_pl12)?$statelevel->india_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_ma_sc_pl12)?$statelevel->india_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_ma_obc_pl34)?$statelevel->india_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_ma_st_pl12)?$statelevel->india_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_ma_general_pl12)?$statelevel->india_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_ma_st_pl34)?$statelevel->india_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_ma_general_pl34)?$statelevel->india_ma_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ma_pl1)?$statelevel->state_ma_pl1:'0',"basic"=>isset($statelevel->state_ma_pl2)?$statelevel->state_ma_pl2:'0',"proficient"=>isset($statelevel->state_ma_pl3)?$statelevel->state_ma_pl3:'0',"advanced"=>isset($statelevel->state_ma_pl4)?$statelevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_ma_pl1)?$statelevel->india_ma_pl1:'0',"basic"=>isset($statelevel->india_ma_pl2)?$statelevel->india_ma_pl2:'0',"proficient"=>isset($statelevel->india_ma_pl3)?$statelevel->india_ma_pl3:'0',"advanced"=>isset($statelevel->india_ma_pl4)?$statelevel->india_ma_pl4:'0'))
            );
            
            $newstateArray['evs'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ev_pct)?$statelevel->state_ev_pct:'0',
                    'national'=>isset($statelevel->india_ev_pct)?$statelevel->india_ev_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ev_boys_pct)?$statelevel->state_ev_boys_pct:'0',"girls"=>isset($statelevel->state_ev_girls_pct)?$statelevel->state_ev_girls_pct:'0','trans_gender'=>isset($statelevel->state_ev_trans_pct)?$statelevel->state_ev_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_ev_boys_pl12)?$statelevel->state_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_ev_boys_pl34)?$statelevel->state_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_ev_girls_pl12)?$statelevel->state_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_ev_girls_pl34)?$statelevel->state_ev_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_ev_boys_pct)?$statelevel->india_ev_boys_pct:'0',"girls"=>isset($statelevel->india_ev_girls_pct)?$statelevel->india_ev_girls_pct:'0','trans_gender'=>isset($statelevel->india_ev_trans_pct)?$statelevel->india_ev_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_ev_boys_pl12)?$statelevel->india_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_ev_boys_pl34)?$statelevel->india_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_ev_girls_pl12)?$statelevel->india_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_ev_girls_pl34)?$statelevel->india_ev_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ev_urban_pct)?$statelevel->state_ev_urban_pct:'0',"rural"=>isset($statelevel->state_ev_rural_pct)?$statelevel->state_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ev_rural_pl12)?$statelevel->state_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ev_urban_pl12)?$statelevel->state_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ev_rural_pl34)?$statelevel->state_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ev_urban_pl34)?$statelevel->state_ev_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_ev_urban_pct)?$statelevel->india_ev_urban_pct:'0',"rural"=>isset($statelevel->india_ev_rural_pct)?$statelevel->india_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_ev_rural_pl12)?$statelevel->india_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_ev_urban_pl12)?$statelevel->india_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_ev_rural_pl34)?$statelevel->india_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_ev_urban_pl34)?$statelevel->india_ev_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ev_govt_pct)?$statelevel->state_ev_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ev_govtaid_pct)?$statelevel->state_ev_govtaid_pct:'0',"private"=>isset($statelevel->state_ev_private_pct)?$statelevel->state_ev_private_pct:'0',"central_govt"=>isset($statelevel->state_ev_centgovt_pct)?$statelevel->state_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ev_govt_pl12)?$statelevel->state_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ev_govtaid_pl12)?$statelevel->state_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ev_govt_pl34)?$statelevel->state_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ev_govtaid_pl34)?$statelevel->state_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ev_private_pl12)?$statelevel->state_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ev_centgovt_pl12)?$statelevel->state_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ev_private_pl34)?$statelevel->state_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ev_centgovt_pl34)?$statelevel->state_ev_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_ev_govt_pct)?$statelevel->india_ev_govt_pct:'0',"govt_aided"=>isset($statelevel->india_ev_govtaid_pct)?$statelevel->india_ev_govtaid_pct:'0',"private"=>isset($statelevel->india_ev_private_pct)?$statelevel->india_ev_private_pct:'0',"central_govt"=>isset($statelevel->india_ev_centgovt_pct)?$statelevel->india_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_ev_govt_pl12)?$statelevel->india_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_ev_govtaid_pl12)?$statelevel->india_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_ev_govt_pl34)?$statelevel->india_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_ev_govtaid_pl34)?$statelevel->india_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_ev_private_pl12)?$statelevel->india_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_ev_centgovt_pl12)?$statelevel->india_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_ev_private_pl34)?$statelevel->india_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_ev_centgovt_pl34)?$statelevel->india_ev_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ev_sc_pct)?$statelevel->state_ev_sc_pct:'0',"obc"=>isset($statelevel->state_ev_obc_pct)?$statelevel->state_ev_obc_pct:'0',"st"=>isset($statelevel->state_ev_st_pct)?$statelevel->state_ev_st_pct:'0',"general"=>isset($statelevel->state_ev_general_pct)?$statelevel->state_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ev_sc_pl34)?$statelevel->state_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_ev_obc_pl12)?$statelevel->state_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ev_sc_pl12)?$statelevel->state_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ev_obc_pl34)?$statelevel->state_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ev_st_pl12)?$statelevel->state_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ev_general_pl12)?$statelevel->state_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ev_st_pl34)?$statelevel->state_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ev_general_pl34)?$statelevel->state_ev_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_ev_sc_pct)?$statelevel->india_ev_sc_pct:'0',"obc"=>isset($statelevel->india_ev_obc_pct)?$statelevel->india_ev_obc_pct:'0',"st"=>isset($statelevel->india_ev_st_pct)?$statelevel->india_ev_st_pct:'0',"general"=>isset($statelevel->india_ev_general_pct)?$statelevel->india_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_ev_sc_pl34)?$statelevel->india_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_ev_obc_pl12)?$statelevel->india_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_ev_sc_pl12)?$statelevel->india_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_ev_obc_pl34)?$statelevel->india_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_ev_st_pl12)?$statelevel->india_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_ev_general_pl12)?$statelevel->india_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_ev_st_pl34)?$statelevel->india_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_ev_general_pl34)?$statelevel->india_ev_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ev_pl1)?$statelevel->state_ev_pl1:'0',"basic"=>isset($statelevel->state_ev_pl2)?$statelevel->state_ev_pl2:'0',"proficient"=>isset($statelevel->state_ev_pl3)?$statelevel->state_ev_pl3:'0',"advanced"=>isset($statelevel->state_ev_pl4)?$statelevel->state_ev_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_ev_pl1)?$statelevel->india_ev_pl1:'0',"basic"=>isset($statelevel->india_ev_pl2)?$statelevel->india_ev_pl2:'0',"proficient"=>isset($statelevel->india_ev_pl3)?$statelevel->india_ev_pl3:'0',"advanced"=>isset($statelevel->india_ev_pl4)?$statelevel->india_ev_pl4:'0'))
            );
                
            $stateArr['state_id'] = (int)$statelevel->state_code;
            $stateArr['grade'] = 3;
            $stateArr['data'] = json_encode($newstateArray);
            $stateArr['created_at'] = now();
            $stateArr['updated_at'] = now();
            
            $statePerformaceData[]=$stateArr;
        }
            StateGradeLevelPerformance::insert($statePerformaceData);
    }

    public function grade5PerformanceData()
    {
        $stateLevelPerfomanceData =DB::table('grade5statetable')->get();
        foreach($stateLevelPerfomanceData as $k=>$statelevel)
        {
   
            $newstateArray = array();
            $newstateArray['language'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_la_pct)?$statelevel->state_la_pct:'0',
                    'national'=>isset($statelevel->india_la_pct)?$statelevel->india_la_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_la_boys_pct)?$statelevel->state_la_boys_pct:'0',"girls"=>isset($statelevel->state_la_girls_pct)?$statelevel->state_la_girls_pct:'0','trans_gender'=>isset($statelevel->state_la_trans_pct)?$statelevel->state_la_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_la_boys_pl12)?$statelevel->state_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_la_boys_pl34)?$statelevel->state_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_la_girls_pl12)?$statelevel->state_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_la_girls_pl34)?$statelevel->state_la_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_la_boys_pct)?$statelevel->india_la_boys_pct:'0',"girls"=>isset($statelevel->india_la_girls_pct)?$statelevel->india_la_girls_pct:'0','trans_gender'=>isset($statelevel->india_la_trans_pct)?$statelevel->india_la_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_la_boys_pl12)?$statelevel->india_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_la_boys_pl34)?$statelevel->india_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_la_girls_pl12)?$statelevel->india_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_la_girls_pl34)?$statelevel->india_la_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_la_urban_pct)?$statelevel->state_la_urban_pct:'0',"rural"=>isset($statelevel->state_la_rural_pct)?$statelevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_la_rural_pl12)?$statelevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_la_urban_pl12)?$statelevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_la_rural_pl34)?$statelevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_la_urban_pl34)?$statelevel->state_la_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_la_urban_pct)?$statelevel->india_la_urban_pct:'0',"rural"=>isset($statelevel->india_la_rural_pct)?$statelevel->india_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_la_rural_pl12)?$statelevel->india_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_la_urban_pl12)?$statelevel->india_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_la_rural_pl34)?$statelevel->india_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_la_urban_pl34)?$statelevel->india_la_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_la_govt_pct)?$statelevel->state_la_govt_pct:'0',"govt_aided"=>isset($statelevel->state_la_govtaid_pct)?$statelevel->state_la_govtaid_pct:'0',"private"=>isset($statelevel->state_la_private_pct)?$statelevel->state_la_private_pct:'0',"central_govt"=>isset($statelevel->state_la_centgovt_pct)?$statelevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_la_govt_pl12)?$statelevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_la_govtaid_pl12)?$statelevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_la_govt_pl34)?$statelevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_la_govtaid_pl34)?$statelevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_la_private_pl12)?$statelevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_la_centgovt_pl12)?$statelevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_la_private_pl34)?$statelevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_la_centgovt_pl34)?$statelevel->state_la_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_la_govt_pct)?$statelevel->india_la_govt_pct:'0',"govt_aided"=>isset($statelevel->india_la_govtaid_pct)?$statelevel->india_la_govtaid_pct:'0',"private"=>isset($statelevel->india_la_private_pct)?$statelevel->india_la_private_pct:'0',"central_govt"=>isset($statelevel->india_la_centgovt_pct)?$statelevel->india_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_la_govt_pl12)?$statelevel->india_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_la_govtaid_pl12)?$statelevel->india_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_la_govt_pl34)?$statelevel->india_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_la_govtaid_pl34)?$statelevel->india_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_la_private_pl12)?$statelevel->india_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_la_centgovt_pl12)?$statelevel->india_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_la_private_pl34)?$statelevel->india_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_la_centgovt_pl34)?$statelevel->india_la_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_la_sc_pct)?$statelevel->state_la_sc_pct:'0',"obc"=>isset($statelevel->state_la_obc_pct)?$statelevel->state_la_obc_pct:'0',"st"=>isset($statelevel->state_la_st_pct)?$statelevel->state_la_st_pct:'0',"general"=>isset($statelevel->state_la_general_pct)?$statelevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_la_sc_pl34)?$statelevel->state_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_la_obc_pl12)?$statelevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_la_sc_pl12)?$statelevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_la_obc_pl34)?$statelevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_la_st_pl12)?$statelevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_la_general_pl12)?$statelevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_la_st_pl34)?$statelevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_la_general_pl34)?$statelevel->state_la_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_la_sc_pct)?$statelevel->india_la_sc_pct:'0',"obc"=>isset($statelevel->india_la_obc_pct)?$statelevel->india_la_obc_pct:'0',"st"=>isset($statelevel->india_la_st_pct)?$statelevel->india_la_st_pct:'0',"general"=>isset($statelevel->india_la_general_pct)?$statelevel->india_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_la_sc_pl34)?$statelevel->india_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_la_obc_pl12)?$statelevel->india_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_la_sc_pl12)?$statelevel->india_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_la_obc_pl34)?$statelevel->india_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_la_st_pl12)?$statelevel->india_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_la_general_pl12)?$statelevel->india_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_la_st_pl34)?$statelevel->india_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_la_general_pl34)?$statelevel->india_la_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_la_pl1)?$statelevel->state_la_pl1:'0',"basic"=>isset($statelevel->state_la_pl2)?$statelevel->state_la_pl2:'0',"proficient"=>isset($statelevel->state_la_pl3)?$statelevel->state_la_pl3:'0',"advanced"=>isset($statelevel->state_la_pl4)?$statelevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_la_pl1)?$statelevel->india_la_pl1:'0',"basic"=>isset($statelevel->india_la_pl2)?$statelevel->india_la_pl2:'0',"proficient"=>isset($statelevel->india_la_pl3)?$statelevel->india_la_pl3:'0',"advanced"=>isset($statelevel->india_la_pl4)?$statelevel->india_la_pl4:'0'))
            );
            
            $newstateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ma_pct)?$statelevel->state_ma_pct:'0',
                    'national'=>isset($statelevel->india_ma_pct)?$statelevel->india_ma_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ma_boys_pct)?$statelevel->state_ma_boys_pct:'0',"girls"=>isset($statelevel->state_ma_girls_pct)?$statelevel->state_ma_girls_pct:'0','trans_gender'=>isset($statelevel->state_ma_trans_pct)?$statelevel->state_ma_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_ma_boys_pl12)?$statelevel->state_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_ma_boys_pl34)?$statelevel->state_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_ma_girls_pl12)?$statelevel->state_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_ma_girls_pl34)?$statelevel->state_ma_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_ma_boys_pct)?$statelevel->india_ma_boys_pct:'0',"girls"=>isset($statelevel->india_ma_girls_pct)?$statelevel->india_ma_girls_pct:'0','trans_gender'=>isset($statelevel->india_ma_trans_pct)?$statelevel->india_ma_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_ma_boys_pl12)?$statelevel->india_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_ma_boys_pl34)?$statelevel->india_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_ma_girls_pl12)?$statelevel->india_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_ma_girls_pl34)?$statelevel->india_ma_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ma_urban_pct)?$statelevel->state_ma_urban_pct:'0',"rural"=>isset($statelevel->state_ma_rural_pct)?$statelevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ma_rural_pl12)?$statelevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ma_urban_pl12)?$statelevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ma_rural_pl34)?$statelevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ma_urban_pl34)?$statelevel->state_ma_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_ma_urban_pct)?$statelevel->india_ma_urban_pct:'0',"rural"=>isset($statelevel->india_ma_rural_pct)?$statelevel->india_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_ma_rural_pl12)?$statelevel->india_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_ma_urban_pl12)?$statelevel->india_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_ma_rural_pl34)?$statelevel->india_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_ma_urban_pl34)?$statelevel->india_ma_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ma_govt_pct)?$statelevel->state_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ma_govtaid_pct)?$statelevel->state_ma_govtaid_pct:'0',"private"=>isset($statelevel->state_ma_private_pct)?$statelevel->state_ma_private_pct:'0',"central_govt"=>isset($statelevel->state_ma_centgovt_pct)?$statelevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ma_govt_pl12)?$statelevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ma_govtaid_pl12)?$statelevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ma_govt_pl34)?$statelevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ma_govtaid_pl34)?$statelevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ma_private_pl12)?$statelevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ma_centgovt_pl12)?$statelevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ma_private_pl34)?$statelevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ma_centgovt_pl34)?$statelevel->state_ma_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_ma_govt_pct)?$statelevel->india_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->india_ma_govtaid_pct)?$statelevel->india_ma_govtaid_pct:'0',"private"=>isset($statelevel->india_ma_private_pct)?$statelevel->india_ma_private_pct:'0',"central_govt"=>isset($statelevel->india_ma_centgovt_pct)?$statelevel->india_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_ma_govt_pl12)?$statelevel->india_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_ma_govtaid_pl12)?$statelevel->india_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_ma_govt_pl34)?$statelevel->india_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_ma_govtaid_pl34)?$statelevel->india_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_ma_private_pl12)?$statelevel->india_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_ma_centgovt_pl12)?$statelevel->india_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_ma_private_pl34)?$statelevel->india_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_ma_centgovt_pl34)?$statelevel->india_ma_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ma_sc_pct)?$statelevel->state_ma_sc_pct:'0',"obc"=>isset($statelevel->state_ma_obc_pct)?$statelevel->state_ma_obc_pct:'0',"st"=>isset($statelevel->state_ma_st_pct)?$statelevel->state_ma_st_pct:'0',"general"=>isset($statelevel->state_ma_general_pct)?$statelevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ma_sc_pl34)?$statelevel->state_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_ma_obc_pl12)?$statelevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ma_sc_pl12)?$statelevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ma_obc_pl34)?$statelevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ma_st_pl12)?$statelevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ma_general_pl12)?$statelevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ma_st_pl34)?$statelevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ma_general_pl34)?$statelevel->state_ma_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_ma_sc_pct)?$statelevel->india_ma_sc_pct:'0',"obc"=>isset($statelevel->india_ma_obc_pct)?$statelevel->india_ma_obc_pct:'0',"st"=>isset($statelevel->india_ma_st_pct)?$statelevel->india_ma_st_pct:'0',"general"=>isset($statelevel->india_ma_general_pct)?$statelevel->india_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_ma_sc_pl34)?$statelevel->india_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_ma_obc_pl12)?$statelevel->india_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_ma_sc_pl12)?$statelevel->india_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_ma_obc_pl34)?$statelevel->india_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_ma_st_pl12)?$statelevel->india_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_ma_general_pl12)?$statelevel->india_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_ma_st_pl34)?$statelevel->india_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_ma_general_pl34)?$statelevel->india_ma_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ma_pl1)?$statelevel->state_ma_pl1:'0',"basic"=>isset($statelevel->state_ma_pl2)?$statelevel->state_ma_pl2:'0',"proficient"=>isset($statelevel->state_ma_pl3)?$statelevel->state_ma_pl3:'0',"advanced"=>isset($statelevel->state_ma_pl4)?$statelevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_ma_pl1)?$statelevel->india_ma_pl1:'0',"basic"=>isset($statelevel->india_ma_pl2)?$statelevel->india_ma_pl2:'0',"proficient"=>isset($statelevel->india_ma_pl3)?$statelevel->india_ma_pl3:'0',"advanced"=>isset($statelevel->india_ma_pl4)?$statelevel->india_ma_pl4:'0'))
            );
            
            $newstateArray['evs'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ev_pct)?$statelevel->state_ev_pct:'0',
                    'national'=>isset($statelevel->india_ev_pct)?$statelevel->india_ev_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ev_boys_pct)?$statelevel->state_ev_boys_pct:'0',"girls"=>isset($statelevel->state_ev_girls_pct)?$statelevel->state_ev_girls_pct:'0','trans_gender'=>isset($statelevel->state_ev_trans_pct)?$statelevel->state_ev_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_ev_boys_pl12)?$statelevel->state_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_ev_boys_pl34)?$statelevel->state_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_ev_girls_pl12)?$statelevel->state_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_ev_girls_pl34)?$statelevel->state_ev_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_ev_boys_pct)?$statelevel->india_ev_boys_pct:'0',"girls"=>isset($statelevel->india_ev_girls_pct)?$statelevel->india_ev_girls_pct:'0','trans_gender'=>isset($statelevel->india_ev_trans_pct)?$statelevel->india_ev_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_ev_boys_pl12)?$statelevel->india_ev_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_ev_boys_pl34)?$statelevel->india_ev_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_ev_girls_pl12)?$statelevel->india_ev_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_ev_girls_pl34)?$statelevel->india_ev_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ev_urban_pct)?$statelevel->state_ev_urban_pct:'0',"rural"=>isset($statelevel->state_ev_rural_pct)?$statelevel->state_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ev_rural_pl12)?$statelevel->state_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ev_urban_pl12)?$statelevel->state_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ev_rural_pl34)?$statelevel->state_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ev_urban_pl34)?$statelevel->state_ev_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_ev_urban_pct)?$statelevel->india_ev_urban_pct:'0',"rural"=>isset($statelevel->india_ev_rural_pct)?$statelevel->india_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_ev_rural_pl12)?$statelevel->india_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_ev_urban_pl12)?$statelevel->india_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_ev_rural_pl34)?$statelevel->india_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_ev_urban_pl34)?$statelevel->india_ev_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ev_govt_pct)?$statelevel->state_ev_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ev_govtaid_pct)?$statelevel->state_ev_govtaid_pct:'0',"private"=>isset($statelevel->state_ev_private_pct)?$statelevel->state_ev_private_pct:'0',"central_govt"=>isset($statelevel->state_ev_centgovt_pct)?$statelevel->state_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ev_govt_pl12)?$statelevel->state_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ev_govtaid_pl12)?$statelevel->state_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ev_govt_pl34)?$statelevel->state_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ev_govtaid_pl34)?$statelevel->state_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ev_private_pl12)?$statelevel->state_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ev_centgovt_pl12)?$statelevel->state_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ev_private_pl34)?$statelevel->state_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ev_centgovt_pl34)?$statelevel->state_ev_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_ev_govt_pct)?$statelevel->india_ev_govt_pct:'0',"govt_aided"=>isset($statelevel->india_ev_govtaid_pct)?$statelevel->india_ev_govtaid_pct:'0',"private"=>isset($statelevel->india_ev_private_pct)?$statelevel->india_ev_private_pct:'0',"central_govt"=>isset($statelevel->india_ev_centgovt_pct)?$statelevel->india_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_ev_govt_pl12)?$statelevel->india_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_ev_govtaid_pl12)?$statelevel->india_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_ev_govt_pl34)?$statelevel->india_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_ev_govtaid_pl34)?$statelevel->india_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_ev_private_pl12)?$statelevel->india_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_ev_centgovt_pl12)?$statelevel->india_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_ev_private_pl34)?$statelevel->india_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_ev_centgovt_pl34)?$statelevel->india_ev_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ev_sc_pct)?$statelevel->state_ev_sc_pct:'0',"obc"=>isset($statelevel->state_ev_obc_pct)?$statelevel->state_ev_obc_pct:'0',"st"=>isset($statelevel->state_ev_st_pct)?$statelevel->state_ev_st_pct:'0',"general"=>isset($statelevel->state_ev_general_pct)?$statelevel->state_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ev_sc_pl34)?$statelevel->state_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_ev_obc_pl12)?$statelevel->state_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ev_sc_pl12)?$statelevel->state_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ev_obc_pl34)?$statelevel->state_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ev_st_pl12)?$statelevel->state_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ev_general_pl12)?$statelevel->state_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ev_st_pl34)?$statelevel->state_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ev_general_pl34)?$statelevel->state_ev_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_ev_sc_pct)?$statelevel->india_ev_sc_pct:'0',"obc"=>isset($statelevel->india_ev_obc_pct)?$statelevel->india_ev_obc_pct:'0',"st"=>isset($statelevel->india_ev_st_pct)?$statelevel->india_ev_st_pct:'0',"general"=>isset($statelevel->india_ev_general_pct)?$statelevel->india_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_ev_sc_pl34)?$statelevel->india_ev_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_ev_obc_pl12)?$statelevel->india_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_ev_sc_pl12)?$statelevel->india_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_ev_obc_pl34)?$statelevel->india_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_ev_st_pl12)?$statelevel->india_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_ev_general_pl12)?$statelevel->india_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_ev_st_pl34)?$statelevel->india_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_ev_general_pl34)?$statelevel->india_ev_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ev_pl1)?$statelevel->state_ev_pl1:'0',"basic"=>isset($statelevel->state_ev_pl2)?$statelevel->state_ev_pl2:'0',"proficient"=>isset($statelevel->state_ev_pl3)?$statelevel->state_ev_pl3:'0',"advanced"=>isset($statelevel->state_ev_pl4)?$statelevel->state_ev_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_ev_pl1)?$statelevel->india_ev_pl1:'0',"basic"=>isset($statelevel->india_ev_pl2)?$statelevel->india_ev_pl2:'0',"proficient"=>isset($statelevel->india_ev_pl3)?$statelevel->india_ev_pl3:'0',"advanced"=>isset($statelevel->india_ev_pl4)?$statelevel->india_ev_pl4:'0'))
            );
        $stateArr['state_id'] = (int)$statelevel->state_code;
        $stateArr['grade'] = 5;
        $stateArr['data'] = json_encode($newstateArray);
        $stateArr['created_at'] = now();
        $stateArr['updated_at'] = now();
        
        $statePerformaceData[]=$stateArr;
        }
        StateGradeLevelPerformance::insert($statePerformaceData);
    }

    public function grade8PerformanceData()
    {
        $stateLevelPerfomanceData =DB::table('grade8statetable')->get();
        foreach($stateLevelPerfomanceData as $k=>$statelevel)
        {
   
            $newstateArray = array();
            $newstateArray['language'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_la_pct)?$statelevel->state_la_pct:'0',
                    'national'=>isset($statelevel->india_la_pct)?$statelevel->india_la_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_la_boys_pct)?$statelevel->state_la_boys_pct:'0',"girls"=>isset($statelevel->state_la_girls_pct)?$statelevel->state_la_girls_pct:'0','trans_gender'=>isset($statelevel->state_la_trans_pct)?$statelevel->state_la_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_la_boys_pl12)?$statelevel->state_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_la_boys_pl34)?$statelevel->state_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_la_girls_pl12)?$statelevel->state_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_la_girls_pl34)?$statelevel->state_la_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_la_boys_pct)?$statelevel->india_la_boys_pct:'0',"girls"=>isset($statelevel->india_la_girls_pct)?$statelevel->india_la_girls_pct:'0','trans_gender'=>isset($statelevel->india_la_trans_pct)?$statelevel->india_la_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_la_boys_pl12)?$statelevel->india_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_la_boys_pl34)?$statelevel->india_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_la_girls_pl12)?$statelevel->india_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_la_girls_pl34)?$statelevel->india_la_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_la_urban_pct)?$statelevel->state_la_urban_pct:'0',"rural"=>isset($statelevel->state_la_rural_pct)?$statelevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_la_rural_pl12)?$statelevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_la_urban_pl12)?$statelevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_la_rural_pl34)?$statelevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_la_urban_pl34)?$statelevel->state_la_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_la_urban_pct)?$statelevel->india_la_urban_pct:'0',"rural"=>isset($statelevel->india_la_rural_pct)?$statelevel->india_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_la_rural_pl12)?$statelevel->india_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_la_urban_pl12)?$statelevel->india_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_la_rural_pl34)?$statelevel->india_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_la_urban_pl34)?$statelevel->india_la_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_la_govt_pct)?$statelevel->state_la_govt_pct:'0',"govt_aided"=>isset($statelevel->state_la_govtaid_pct)?$statelevel->state_la_govtaid_pct:'0',"private"=>isset($statelevel->state_la_private_pct)?$statelevel->state_la_private_pct:'0',"central_govt"=>isset($statelevel->state_la_centgovt_pct)?$statelevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_la_govt_pl12)?$statelevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_la_govtaid_pl12)?$statelevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_la_govt_pl34)?$statelevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_la_govtaid_pl34)?$statelevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_la_private_pl12)?$statelevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_la_centgovt_pl12)?$statelevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_la_private_pl34)?$statelevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_la_centgovt_pl34)?$statelevel->state_la_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_la_govt_pct)?$statelevel->india_la_govt_pct:'0',"govt_aided"=>isset($statelevel->india_la_govtaid_pct)?$statelevel->india_la_govtaid_pct:'0',"private"=>isset($statelevel->india_la_private_pct)?$statelevel->india_la_private_pct:'0',"central_govt"=>isset($statelevel->india_la_centgovt_pct)?$statelevel->india_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_la_govt_pl12)?$statelevel->india_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_la_govtaid_pl12)?$statelevel->india_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_la_govt_pl34)?$statelevel->india_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_la_govtaid_pl34)?$statelevel->india_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_la_private_pl12)?$statelevel->india_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_la_centgovt_pl12)?$statelevel->india_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_la_private_pl34)?$statelevel->india_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_la_centgovt_pl34)?$statelevel->india_la_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_la_sc_pct)?$statelevel->state_la_sc_pct:'0',"obc"=>isset($statelevel->state_la_obc_pct)?$statelevel->state_la_obc_pct:'0',"st"=>isset($statelevel->state_la_st_pct)?$statelevel->state_la_st_pct:'0',"general"=>isset($statelevel->state_la_general_pct)?$statelevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_la_sc_pl34)?$statelevel->state_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_la_obc_pl12)?$statelevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_la_sc_pl12)?$statelevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_la_obc_pl34)?$statelevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_la_st_pl12)?$statelevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_la_general_pl12)?$statelevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_la_st_pl34)?$statelevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_la_general_pl34)?$statelevel->state_la_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_la_sc_pct)?$statelevel->india_la_sc_pct:'0',"obc"=>isset($statelevel->india_la_obc_pct)?$statelevel->india_la_obc_pct:'0',"st"=>isset($statelevel->india_la_st_pct)?$statelevel->india_la_st_pct:'0',"general"=>isset($statelevel->india_la_general_pct)?$statelevel->india_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_la_sc_pl34)?$statelevel->india_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_la_obc_pl12)?$statelevel->india_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_la_sc_pl12)?$statelevel->india_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_la_obc_pl34)?$statelevel->india_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_la_st_pl12)?$statelevel->india_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_la_general_pl12)?$statelevel->india_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_la_st_pl34)?$statelevel->india_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_la_general_pl34)?$statelevel->india_la_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_la_pl1)?$statelevel->state_la_pl1:'0',"basic"=>isset($statelevel->state_la_pl2)?$statelevel->state_la_pl2:'0',"proficient"=>isset($statelevel->state_la_pl3)?$statelevel->state_la_pl3:'0',"advanced"=>isset($statelevel->state_la_pl4)?$statelevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_la_pl1)?$statelevel->india_la_pl1:'0',"basic"=>isset($statelevel->india_la_pl2)?$statelevel->india_la_pl2:'0',"proficient"=>isset($statelevel->india_la_pl3)?$statelevel->india_la_pl3:'0',"advanced"=>isset($statelevel->india_la_pl4)?$statelevel->india_la_pl4:'0'))
            );
            
            $newstateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ma_pct)?$statelevel->state_ma_pct:'0',
                    'national'=>isset($statelevel->india_ma_pct)?$statelevel->india_ma_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ma_boys_pct)?$statelevel->state_ma_boys_pct:'0',"girls"=>isset($statelevel->state_ma_girls_pct)?$statelevel->state_ma_girls_pct:'0','trans_gender'=>isset($statelevel->state_ma_trans_pct)?$statelevel->state_ma_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_ma_boys_pl12)?$statelevel->state_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_ma_boys_pl34)?$statelevel->state_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_ma_girls_pl12)?$statelevel->state_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_ma_girls_pl34)?$statelevel->state_ma_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_ma_boys_pct)?$statelevel->india_ma_boys_pct:'0',"girls"=>isset($statelevel->india_ma_girls_pct)?$statelevel->india_ma_girls_pct:'0','trans_gender'=>isset($statelevel->india_ma_trans_pct)?$statelevel->india_ma_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_ma_boys_pl12)?$statelevel->india_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_ma_boys_pl34)?$statelevel->india_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_ma_girls_pl12)?$statelevel->india_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_ma_girls_pl34)?$statelevel->india_ma_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ma_urban_pct)?$statelevel->state_ma_urban_pct:'0',"rural"=>isset($statelevel->state_ma_rural_pct)?$statelevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ma_rural_pl12)?$statelevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ma_urban_pl12)?$statelevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ma_rural_pl34)?$statelevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ma_urban_pl34)?$statelevel->state_ma_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_ma_urban_pct)?$statelevel->india_ma_urban_pct:'0',"rural"=>isset($statelevel->india_ma_rural_pct)?$statelevel->india_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_ma_rural_pl12)?$statelevel->india_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_ma_urban_pl12)?$statelevel->india_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_ma_rural_pl34)?$statelevel->india_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_ma_urban_pl34)?$statelevel->india_ma_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ma_govt_pct)?$statelevel->state_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ma_govtaid_pct)?$statelevel->state_ma_govtaid_pct:'0',"private"=>isset($statelevel->state_ma_private_pct)?$statelevel->state_ma_private_pct:'0',"central_govt"=>isset($statelevel->state_ma_centgovt_pct)?$statelevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ma_govt_pl12)?$statelevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ma_govtaid_pl12)?$statelevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ma_govt_pl34)?$statelevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ma_govtaid_pl34)?$statelevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ma_private_pl12)?$statelevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ma_centgovt_pl12)?$statelevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ma_private_pl34)?$statelevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ma_centgovt_pl34)?$statelevel->state_ma_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_ma_govt_pct)?$statelevel->india_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->india_ma_govtaid_pct)?$statelevel->india_ma_govtaid_pct:'0',"private"=>isset($statelevel->india_ma_private_pct)?$statelevel->india_ma_private_pct:'0',"central_govt"=>isset($statelevel->india_ma_centgovt_pct)?$statelevel->india_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_ma_govt_pl12)?$statelevel->india_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_ma_govtaid_pl12)?$statelevel->india_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_ma_govt_pl34)?$statelevel->india_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_ma_govtaid_pl34)?$statelevel->india_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_ma_private_pl12)?$statelevel->india_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_ma_centgovt_pl12)?$statelevel->india_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_ma_private_pl34)?$statelevel->india_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_ma_centgovt_pl34)?$statelevel->india_ma_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ma_sc_pct)?$statelevel->state_ma_sc_pct:'0',"obc"=>isset($statelevel->state_ma_obc_pct)?$statelevel->state_ma_obc_pct:'0',"st"=>isset($statelevel->state_ma_st_pct)?$statelevel->state_ma_st_pct:'0',"general"=>isset($statelevel->state_ma_general_pct)?$statelevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ma_sc_pl34)?$statelevel->state_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_ma_obc_pl12)?$statelevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ma_sc_pl12)?$statelevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ma_obc_pl34)?$statelevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ma_st_pl12)?$statelevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ma_general_pl12)?$statelevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ma_st_pl34)?$statelevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ma_general_pl34)?$statelevel->state_ma_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_ma_sc_pct)?$statelevel->india_ma_sc_pct:'0',"obc"=>isset($statelevel->india_ma_obc_pct)?$statelevel->india_ma_obc_pct:'0',"st"=>isset($statelevel->india_ma_st_pct)?$statelevel->india_ma_st_pct:'0',"general"=>isset($statelevel->india_ma_general_pct)?$statelevel->india_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_ma_sc_pl34)?$statelevel->india_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_ma_obc_pl12)?$statelevel->india_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_ma_sc_pl12)?$statelevel->india_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_ma_obc_pl34)?$statelevel->india_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_ma_st_pl12)?$statelevel->india_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_ma_general_pl12)?$statelevel->india_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_ma_st_pl34)?$statelevel->india_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_ma_general_pl34)?$statelevel->india_ma_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ma_pl1)?$statelevel->state_ma_pl1:'0',"basic"=>isset($statelevel->state_ma_pl2)?$statelevel->state_ma_pl2:'0',"proficient"=>isset($statelevel->state_ma_pl3)?$statelevel->state_ma_pl3:'0',"advanced"=>isset($statelevel->state_ma_pl4)?$statelevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_ma_pl1)?$statelevel->india_ma_pl1:'0',"basic"=>isset($statelevel->india_ma_pl2)?$statelevel->india_ma_pl2:'0',"proficient"=>isset($statelevel->india_ma_pl3)?$statelevel->india_ma_pl3:'0',"advanced"=>isset($statelevel->india_ma_pl4)?$statelevel->india_ma_pl4:'0'))
            );
            
            $newstateArray['sci'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_sc_pct)?$statelevel->state_sc_pct:'0',
                    'national'=>isset($statelevel->india_sc_pct)?$statelevel->india_sc_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_sc_boys_pct)?$statelevel->state_sc_boys_pct:'0',"girls"=>isset($statelevel->state_sc_girls_pct)?$statelevel->state_sc_girls_pct:'0','trans_gender'=>isset($statelevel->state_sc_trans_pct)?$statelevel->state_sc_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_sc_boys_pl12)?$statelevel->state_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_sc_boys_pl34)?$statelevel->state_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_sc_girls_pl12)?$statelevel->state_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_sc_girls_pl34)?$statelevel->state_sc_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_sc_boys_pct)?$statelevel->india_sc_boys_pct:'0',"girls"=>isset($statelevel->india_sc_girls_pct)?$statelevel->india_sc_girls_pct:'0','trans_gender'=>isset($statelevel->india_sc_trans_pct)?$statelevel->india_sc_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_sc_boys_pl12)?$statelevel->india_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_sc_boys_pl34)?$statelevel->india_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_sc_girls_pl12)?$statelevel->india_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_sc_girls_pl34)?$statelevel->india_sc_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_sc_urban_pct)?$statelevel->state_sc_urban_pct:'0',"rural"=>isset($statelevel->state_sc_rural_pct)?$statelevel->state_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_sc_rural_pl12)?$statelevel->state_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_sc_urban_pl12)?$statelevel->state_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_sc_rural_pl34)?$statelevel->state_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_sc_urban_pl34)?$statelevel->state_sc_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_sc_urban_pct)?$statelevel->india_sc_urban_pct:'0',"rural"=>isset($statelevel->india_sc_rural_pct)?$statelevel->india_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_sc_rural_pl12)?$statelevel->india_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_sc_urban_pl12)?$statelevel->india_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_sc_rural_pl34)?$statelevel->india_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_sc_urban_pl34)?$statelevel->india_sc_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_sc_govt_pct)?$statelevel->state_sc_govt_pct:'0',"govt_aided"=>isset($statelevel->state_sc_govtaid_pct)?$statelevel->state_sc_govtaid_pct:'0',"private"=>isset($statelevel->state_sc_private_pct)?$statelevel->state_sc_private_pct:'0',"central_govt"=>isset($statelevel->state_sc_centgovt_pct)?$statelevel->state_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_sc_govt_pl12)?$statelevel->state_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_sc_govtaid_pl12)?$statelevel->state_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_sc_govt_pl34)?$statelevel->state_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_sc_govtaid_pl34)?$statelevel->state_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_sc_private_pl12)?$statelevel->state_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_sc_centgovt_pl12)?$statelevel->state_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_sc_private_pl34)?$statelevel->state_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_sc_centgovt_pl34)?$statelevel->state_sc_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_sc_govt_pct)?$statelevel->india_sc_govt_pct:'0',"govt_aided"=>isset($statelevel->india_sc_govtaid_pct)?$statelevel->india_sc_govtaid_pct:'0',"private"=>isset($statelevel->india_sc_private_pct)?$statelevel->india_sc_private_pct:'0',"central_govt"=>isset($statelevel->india_sc_centgovt_pct)?$statelevel->india_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_sc_govt_pl12)?$statelevel->india_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_sc_govtaid_pl12)?$statelevel->india_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_sc_govt_pl34)?$statelevel->india_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_sc_govtaid_pl34)?$statelevel->india_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_sc_private_pl12)?$statelevel->india_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_sc_centgovt_pl12)?$statelevel->india_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_sc_private_pl34)?$statelevel->india_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_sc_centgovt_pl34)?$statelevel->india_sc_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_sc_sc_pct)?$statelevel->state_sc_sc_pct:'0',"obc"=>isset($statelevel->state_sc_obc_pct)?$statelevel->state_sc_obc_pct:'0',"st"=>isset($statelevel->state_sc_st_pct)?$statelevel->state_sc_st_pct:'0',"general"=>isset($statelevel->state_sc_general_pct)?$statelevel->state_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_sc_sc_pl34)?$statelevel->state_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_sc_obc_pl12)?$statelevel->state_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_sc_sc_pl12)?$statelevel->state_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_sc_obc_pl34)?$statelevel->state_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_sc_st_pl12)?$statelevel->state_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_sc_general_pl12)?$statelevel->state_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_sc_st_pl34)?$statelevel->state_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_sc_general_pl34)?$statelevel->state_sc_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_sc_sc_pct)?$statelevel->india_sc_sc_pct:'0',"obc"=>isset($statelevel->india_sc_obc_pct)?$statelevel->india_sc_obc_pct:'0',"st"=>isset($statelevel->india_sc_st_pct)?$statelevel->india_sc_st_pct:'0',"general"=>isset($statelevel->india_sc_general_pct)?$statelevel->india_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_sc_sc_pl34)?$statelevel->india_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_sc_obc_pl12)?$statelevel->india_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_sc_sc_pl12)?$statelevel->india_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_sc_obc_pl34)?$statelevel->india_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_sc_st_pl12)?$statelevel->india_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_sc_general_pl12)?$statelevel->india_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_sc_st_pl34)?$statelevel->india_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_sc_general_pl34)?$statelevel->india_sc_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_sc_pl1)?$statelevel->state_sc_pl1:'0',"basic"=>isset($statelevel->state_sc_pl2)?$statelevel->state_sc_pl2:'0',"proficient"=>isset($statelevel->state_sc_pl3)?$statelevel->state_sc_pl3:'0',"advanced"=>isset($statelevel->state_sc_pl4)?$statelevel->state_sc_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_sc_pl1)?$statelevel->india_sc_pl1:'0',"basic"=>isset($statelevel->india_sc_pl2)?$statelevel->india_sc_pl2:'0',"proficient"=>isset($statelevel->india_sc_pl3)?$statelevel->india_sc_pl3:'0',"advanced"=>isset($statelevel->india_sc_pl4)?$statelevel->india_sc_pl4:'0'))
            );

            $newstateArray['sst'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ss_pct)?$statelevel->state_ss_pct:'0',
                    'national'=>isset($statelevel->india_ss_pct)?$statelevel->india_ss_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ss_boys_pct)?$statelevel->state_ss_boys_pct:'0',"girls"=>isset($statelevel->state_ss_girls_pct)?$statelevel->state_ss_girls_pct:'0','trans_gender'=>isset($statelevel->state_ss_trans_pct)?$statelevel->state_ss_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_ss_boys_pl12)?$statelevel->state_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_ss_boys_pl34)?$statelevel->state_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_ss_girls_pl12)?$statelevel->state_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_ss_girls_pl34)?$statelevel->state_ss_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_ss_boys_pct)?$statelevel->india_ss_boys_pct:'0',"girls"=>isset($statelevel->india_ss_girls_pct)?$statelevel->india_ss_girls_pct:'0','trans_gender'=>isset($statelevel->india_ss_trans_pct)?$statelevel->india_ss_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_ss_boys_pl12)?$statelevel->india_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_ss_boys_pl34)?$statelevel->india_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_ss_girls_pl12)?$statelevel->india_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_ss_girls_pl34)?$statelevel->india_ss_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ss_urban_pct)?$statelevel->state_ss_urban_pct:'0',"rural"=>isset($statelevel->state_ss_rural_pct)?$statelevel->state_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ss_rural_pl12)?$statelevel->state_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ss_urban_pl12)?$statelevel->state_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ss_rural_pl34)?$statelevel->state_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ss_urban_pl34)?$statelevel->state_ss_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_ss_urban_pct)?$statelevel->india_ss_urban_pct:'0',"rural"=>isset($statelevel->india_ss_rural_pct)?$statelevel->india_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_ss_rural_pl12)?$statelevel->india_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_ss_urban_pl12)?$statelevel->india_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_ss_rural_pl34)?$statelevel->india_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_ss_urban_pl34)?$statelevel->india_ss_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ss_govt_pct)?$statelevel->state_ss_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ss_govtaid_pct)?$statelevel->state_ss_govtaid_pct:'0',"private"=>isset($statelevel->state_ss_private_pct)?$statelevel->state_ss_private_pct:'0',"central_govt"=>isset($statelevel->state_ss_centgovt_pct)?$statelevel->state_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ss_govt_pl12)?$statelevel->state_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ss_govtaid_pl12)?$statelevel->state_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ss_govt_pl34)?$statelevel->state_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ss_govtaid_pl34)?$statelevel->state_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ss_private_pl12)?$statelevel->state_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ss_centgovt_pl12)?$statelevel->state_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ss_private_pl34)?$statelevel->state_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ss_centgovt_pl34)?$statelevel->state_ss_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_ss_govt_pct)?$statelevel->india_ss_govt_pct:'0',"govt_aided"=>isset($statelevel->india_ss_govtaid_pct)?$statelevel->india_ss_govtaid_pct:'0',"private"=>isset($statelevel->india_ss_private_pct)?$statelevel->india_ss_private_pct:'0',"central_govt"=>isset($statelevel->india_ss_centgovt_pct)?$statelevel->india_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_ss_govt_pl12)?$statelevel->india_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_ss_govtaid_pl12)?$statelevel->india_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_ss_govt_pl34)?$statelevel->india_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_ss_govtaid_pl34)?$statelevel->india_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_ss_private_pl12)?$statelevel->india_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_ss_centgovt_pl12)?$statelevel->india_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_ss_private_pl34)?$statelevel->india_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_ss_centgovt_pl34)?$statelevel->india_ss_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ss_sc_pct)?$statelevel->state_ss_sc_pct:'0',"obc"=>isset($statelevel->state_ss_obc_pct)?$statelevel->state_ss_obc_pct:'0',"st"=>isset($statelevel->state_ss_st_pct)?$statelevel->state_ss_st_pct:'0',"general"=>isset($statelevel->state_ss_general_pct)?$statelevel->state_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ss_sc_pl34)?$statelevel->state_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_ss_obc_pl12)?$statelevel->state_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ss_sc_pl12)?$statelevel->state_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ss_obc_pl34)?$statelevel->state_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ss_st_pl12)?$statelevel->state_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ss_general_pl12)?$statelevel->state_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ss_st_pl34)?$statelevel->state_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ss_general_pl34)?$statelevel->state_ss_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_ss_sc_pct)?$statelevel->india_ss_sc_pct:'0',"obc"=>isset($statelevel->india_ss_obc_pct)?$statelevel->india_ss_obc_pct:'0',"st"=>isset($statelevel->india_ss_st_pct)?$statelevel->india_ss_st_pct:'0',"general"=>isset($statelevel->india_ss_general_pct)?$statelevel->india_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_ss_sc_pl34)?$statelevel->india_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_ss_obc_pl12)?$statelevel->india_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_ss_sc_pl12)?$statelevel->india_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_ss_obc_pl34)?$statelevel->india_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_ss_st_pl12)?$statelevel->india_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_ss_general_pl12)?$statelevel->india_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_ss_st_pl34)?$statelevel->india_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_ss_general_pl34)?$statelevel->india_ss_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ss_pl1)?$statelevel->state_ss_pl1:'0',"basic"=>isset($statelevel->state_ss_pl2)?$statelevel->state_ss_pl2:'0',"proficient"=>isset($statelevel->state_ss_pl3)?$statelevel->state_ss_pl3:'0',"advanced"=>isset($statelevel->state_ss_pl4)?$statelevel->state_ss_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_ss_pl1)?$statelevel->india_ss_pl1:'0',"basic"=>isset($statelevel->india_ss_pl2)?$statelevel->india_ss_pl2:'0',"proficient"=>isset($statelevel->india_ss_pl3)?$statelevel->india_ss_pl3:'0',"advanced"=>isset($statelevel->india_ss_pl4)?$statelevel->india_ss_pl4:'0'))
            );

        $stateArr['state_id'] = (int)$statelevel->state_code;
        $stateArr['grade'] = 8;
        $stateArr['data'] = json_encode($newstateArray);
        $stateArr['created_at'] = now();
        $stateArr['updated_at'] = now();
        
        $statePerformaceData[]=$stateArr;
        }
        StateGradeLevelPerformance::insert($statePerformaceData);
    }

    public function grade10PerformanceData()
    {
        $stateLevelPerfomanceData =DB::table('grade10statetable')->get();
        foreach($stateLevelPerfomanceData as $k=>$statelevel)
        {
   
            $newstateArray = array();
            $newstateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ma_pct)?$statelevel->state_ma_pct:'0',
                    'national'=>isset($statelevel->india_ma_pct)?$statelevel->india_ma_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ma_boys_pct)?$statelevel->state_ma_boys_pct:'0',"girls"=>isset($statelevel->state_ma_girls_pct)?$statelevel->state_ma_girls_pct:'0','trans_gender'=>isset($statelevel->state_ma_trans_pct)?$statelevel->state_ma_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_ma_boys_pl12)?$statelevel->state_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_ma_boys_pl34)?$statelevel->state_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_ma_girls_pl12)?$statelevel->state_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_ma_girls_pl34)?$statelevel->state_ma_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_ma_boys_pct)?$statelevel->india_ma_boys_pct:'0',"girls"=>isset($statelevel->india_ma_girls_pct)?$statelevel->india_ma_girls_pct:'0','trans_gender'=>isset($statelevel->india_ma_trans_pct)?$statelevel->india_ma_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_ma_boys_pl12)?$statelevel->india_ma_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_ma_boys_pl34)?$statelevel->india_ma_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_ma_girls_pl12)?$statelevel->india_ma_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_ma_girls_pl34)?$statelevel->india_ma_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ma_urban_pct)?$statelevel->state_ma_urban_pct:'0',"rural"=>isset($statelevel->state_ma_rural_pct)?$statelevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ma_rural_pl12)?$statelevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ma_urban_pl12)?$statelevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ma_rural_pl34)?$statelevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ma_urban_pl34)?$statelevel->state_ma_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_ma_urban_pct)?$statelevel->india_ma_urban_pct:'0',"rural"=>isset($statelevel->india_ma_rural_pct)?$statelevel->india_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_ma_rural_pl12)?$statelevel->india_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_ma_urban_pl12)?$statelevel->india_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_ma_rural_pl34)?$statelevel->india_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_ma_urban_pl34)?$statelevel->india_ma_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ma_govt_pct)?$statelevel->state_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ma_govtaid_pct)?$statelevel->state_ma_govtaid_pct:'0',"private"=>isset($statelevel->state_ma_private_pct)?$statelevel->state_ma_private_pct:'0',"central_govt"=>isset($statelevel->state_ma_centgovt_pct)?$statelevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ma_govt_pl12)?$statelevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ma_govtaid_pl12)?$statelevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ma_govt_pl34)?$statelevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ma_govtaid_pl34)?$statelevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ma_private_pl12)?$statelevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ma_centgovt_pl12)?$statelevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ma_private_pl34)?$statelevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ma_centgovt_pl34)?$statelevel->state_ma_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_ma_govt_pct)?$statelevel->india_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->india_ma_govtaid_pct)?$statelevel->india_ma_govtaid_pct:'0',"private"=>isset($statelevel->india_ma_private_pct)?$statelevel->india_ma_private_pct:'0',"central_govt"=>isset($statelevel->india_ma_centgovt_pct)?$statelevel->india_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_ma_govt_pl12)?$statelevel->india_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_ma_govtaid_pl12)?$statelevel->india_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_ma_govt_pl34)?$statelevel->india_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_ma_govtaid_pl34)?$statelevel->india_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_ma_private_pl12)?$statelevel->india_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_ma_centgovt_pl12)?$statelevel->india_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_ma_private_pl34)?$statelevel->india_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_ma_centgovt_pl34)?$statelevel->india_ma_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ma_sc_pct)?$statelevel->state_ma_sc_pct:'0',"obc"=>isset($statelevel->state_ma_obc_pct)?$statelevel->state_ma_obc_pct:'0',"st"=>isset($statelevel->state_ma_st_pct)?$statelevel->state_ma_st_pct:'0',"general"=>isset($statelevel->state_ma_general_pct)?$statelevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ma_sc_pl34)?$statelevel->state_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_ma_obc_pl12)?$statelevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ma_sc_pl12)?$statelevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ma_obc_pl34)?$statelevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ma_st_pl12)?$statelevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ma_general_pl12)?$statelevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ma_st_pl34)?$statelevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ma_general_pl34)?$statelevel->state_ma_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_ma_sc_pct)?$statelevel->india_ma_sc_pct:'0',"obc"=>isset($statelevel->india_ma_obc_pct)?$statelevel->india_ma_obc_pct:'0',"st"=>isset($statelevel->india_ma_st_pct)?$statelevel->india_ma_st_pct:'0',"general"=>isset($statelevel->india_ma_general_pct)?$statelevel->india_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_ma_sc_pl34)?$statelevel->india_ma_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_ma_obc_pl12)?$statelevel->india_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_ma_sc_pl12)?$statelevel->india_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_ma_obc_pl34)?$statelevel->india_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_ma_st_pl12)?$statelevel->india_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_ma_general_pl12)?$statelevel->india_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_ma_st_pl34)?$statelevel->india_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_ma_general_pl34)?$statelevel->india_ma_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ma_pl1)?$statelevel->state_ma_pl1:'0',"basic"=>isset($statelevel->state_ma_pl2)?$statelevel->state_ma_pl2:'0',"proficient"=>isset($statelevel->state_ma_pl3)?$statelevel->state_ma_pl3:'0',"advanced"=>isset($statelevel->state_ma_pl4)?$statelevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_ma_pl1)?$statelevel->india_ma_pl1:'0',"basic"=>isset($statelevel->india_ma_pl2)?$statelevel->india_ma_pl2:'0',"proficient"=>isset($statelevel->india_ma_pl3)?$statelevel->india_ma_pl3:'0',"advanced"=>isset($statelevel->india_ma_pl4)?$statelevel->india_ma_pl4:'0'))
            );
            
            $newstateArray['sci'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_sc_pct)?$statelevel->state_sc_pct:'0',
                    'national'=>isset($statelevel->india_sc_pct)?$statelevel->india_sc_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_sc_boys_pct)?$statelevel->state_sc_boys_pct:'0',"girls"=>isset($statelevel->state_sc_girls_pct)?$statelevel->state_sc_girls_pct:'0','trans_gender'=>isset($statelevel->state_sc_trans_pct)?$statelevel->state_sc_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_sc_boys_pl12)?$statelevel->state_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_sc_boys_pl34)?$statelevel->state_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_sc_girls_pl12)?$statelevel->state_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_sc_girls_pl34)?$statelevel->state_sc_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_sc_boys_pct)?$statelevel->india_sc_boys_pct:'0',"girls"=>isset($statelevel->india_sc_girls_pct)?$statelevel->india_sc_girls_pct:'0','trans_gender'=>isset($statelevel->india_sc_trans_pct)?$statelevel->india_sc_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_sc_boys_pl12)?$statelevel->india_sc_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_sc_boys_pl34)?$statelevel->india_sc_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_sc_girls_pl12)?$statelevel->india_sc_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_sc_girls_pl34)?$statelevel->india_sc_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_sc_urban_pct)?$statelevel->state_sc_urban_pct:'0',"rural"=>isset($statelevel->state_sc_rural_pct)?$statelevel->state_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_sc_rural_pl12)?$statelevel->state_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_sc_urban_pl12)?$statelevel->state_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_sc_rural_pl34)?$statelevel->state_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_sc_urban_pl34)?$statelevel->state_sc_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_sc_urban_pct)?$statelevel->india_sc_urban_pct:'0',"rural"=>isset($statelevel->india_sc_rural_pct)?$statelevel->india_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_sc_rural_pl12)?$statelevel->india_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_sc_urban_pl12)?$statelevel->india_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_sc_rural_pl34)?$statelevel->india_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_sc_urban_pl34)?$statelevel->india_sc_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_sc_govt_pct)?$statelevel->state_sc_govt_pct:'0',"govt_aided"=>isset($statelevel->state_sc_govtaid_pct)?$statelevel->state_sc_govtaid_pct:'0',"private"=>isset($statelevel->state_sc_private_pct)?$statelevel->state_sc_private_pct:'0',"central_govt"=>isset($statelevel->state_sc_centgovt_pct)?$statelevel->state_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_sc_govt_pl12)?$statelevel->state_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_sc_govtaid_pl12)?$statelevel->state_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_sc_govt_pl34)?$statelevel->state_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_sc_govtaid_pl34)?$statelevel->state_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_sc_private_pl12)?$statelevel->state_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_sc_centgovt_pl12)?$statelevel->state_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_sc_private_pl34)?$statelevel->state_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_sc_centgovt_pl34)?$statelevel->state_sc_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_sc_govt_pct)?$statelevel->india_sc_govt_pct:'0',"govt_aided"=>isset($statelevel->india_sc_govtaid_pct)?$statelevel->india_sc_govtaid_pct:'0',"private"=>isset($statelevel->india_sc_private_pct)?$statelevel->india_sc_private_pct:'0',"central_govt"=>isset($statelevel->india_sc_centgovt_pct)?$statelevel->india_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_sc_govt_pl12)?$statelevel->india_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_sc_govtaid_pl12)?$statelevel->india_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_sc_govt_pl34)?$statelevel->india_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_sc_govtaid_pl34)?$statelevel->india_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_sc_private_pl12)?$statelevel->india_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_sc_centgovt_pl12)?$statelevel->india_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_sc_private_pl34)?$statelevel->india_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_sc_centgovt_pl34)?$statelevel->india_sc_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_sc_sc_pct)?$statelevel->state_sc_sc_pct:'0',"obc"=>isset($statelevel->state_sc_obc_pct)?$statelevel->state_sc_obc_pct:'0',"st"=>isset($statelevel->state_sc_st_pct)?$statelevel->state_sc_st_pct:'0',"general"=>isset($statelevel->state_sc_general_pct)?$statelevel->state_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_sc_sc_pl34)?$statelevel->state_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_sc_obc_pl12)?$statelevel->state_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_sc_sc_pl12)?$statelevel->state_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_sc_obc_pl34)?$statelevel->state_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_sc_st_pl12)?$statelevel->state_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_sc_general_pl12)?$statelevel->state_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_sc_st_pl34)?$statelevel->state_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_sc_general_pl34)?$statelevel->state_sc_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_sc_sc_pct)?$statelevel->india_sc_sc_pct:'0',"obc"=>isset($statelevel->india_sc_obc_pct)?$statelevel->india_sc_obc_pct:'0',"st"=>isset($statelevel->india_sc_st_pct)?$statelevel->india_sc_st_pct:'0',"general"=>isset($statelevel->india_sc_general_pct)?$statelevel->india_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_sc_sc_pl34)?$statelevel->india_sc_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_sc_obc_pl12)?$statelevel->india_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_sc_sc_pl12)?$statelevel->india_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_sc_obc_pl34)?$statelevel->india_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_sc_st_pl12)?$statelevel->india_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_sc_general_pl12)?$statelevel->india_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_sc_st_pl34)?$statelevel->india_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_sc_general_pl34)?$statelevel->india_sc_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_sc_pl1)?$statelevel->state_sc_pl1:'0',"basic"=>isset($statelevel->state_sc_pl2)?$statelevel->state_sc_pl2:'0',"proficient"=>isset($statelevel->state_sc_pl3)?$statelevel->state_sc_pl3:'0',"advanced"=>isset($statelevel->state_sc_pl4)?$statelevel->state_sc_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_sc_pl1)?$statelevel->india_sc_pl1:'0',"basic"=>isset($statelevel->india_sc_pl2)?$statelevel->india_sc_pl2:'0',"proficient"=>isset($statelevel->india_sc_pl3)?$statelevel->india_sc_pl3:'0',"advanced"=>isset($statelevel->india_sc_pl4)?$statelevel->india_sc_pl4:'0'))
            );

            $newstateArray['sst'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ss_pct)?$statelevel->state_ss_pct:'0',
                    'national'=>isset($statelevel->india_ss_pct)?$statelevel->india_ss_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ss_boys_pct)?$statelevel->state_ss_boys_pct:'0',"girls"=>isset($statelevel->state_ss_girls_pct)?$statelevel->state_ss_girls_pct:'0','trans_gender'=>isset($statelevel->state_ss_trans_pct)?$statelevel->state_ss_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_ss_boys_pl12)?$statelevel->state_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_ss_boys_pl34)?$statelevel->state_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_ss_girls_pl12)?$statelevel->state_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_ss_girls_pl34)?$statelevel->state_ss_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_ss_boys_pct)?$statelevel->india_ss_boys_pct:'0',"girls"=>isset($statelevel->india_ss_girls_pct)?$statelevel->india_ss_girls_pct:'0','trans_gender'=>isset($statelevel->india_ss_trans_pct)?$statelevel->india_ss_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_ss_boys_pl12)?$statelevel->india_ss_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_ss_boys_pl34)?$statelevel->india_ss_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_ss_girls_pl12)?$statelevel->india_ss_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_ss_girls_pl34)?$statelevel->india_ss_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ss_urban_pct)?$statelevel->state_ss_urban_pct:'0',"rural"=>isset($statelevel->state_ss_rural_pct)?$statelevel->state_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ss_rural_pl12)?$statelevel->state_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ss_urban_pl12)?$statelevel->state_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ss_rural_pl34)?$statelevel->state_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ss_urban_pl34)?$statelevel->state_ss_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_ss_urban_pct)?$statelevel->india_ss_urban_pct:'0',"rural"=>isset($statelevel->india_ss_rural_pct)?$statelevel->india_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_ss_rural_pl12)?$statelevel->india_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_ss_urban_pl12)?$statelevel->india_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_ss_rural_pl34)?$statelevel->india_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_ss_urban_pl34)?$statelevel->india_ss_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ss_govt_pct)?$statelevel->state_ss_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ss_govtaid_pct)?$statelevel->state_ss_govtaid_pct:'0',"private"=>isset($statelevel->state_ss_private_pct)?$statelevel->state_ss_private_pct:'0',"central_govt"=>isset($statelevel->state_ss_centgovt_pct)?$statelevel->state_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ss_govt_pl12)?$statelevel->state_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ss_govtaid_pl12)?$statelevel->state_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ss_govt_pl34)?$statelevel->state_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ss_govtaid_pl34)?$statelevel->state_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ss_private_pl12)?$statelevel->state_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ss_centgovt_pl12)?$statelevel->state_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ss_private_pl34)?$statelevel->state_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ss_centgovt_pl34)?$statelevel->state_ss_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_ss_govt_pct)?$statelevel->india_ss_govt_pct:'0',"govt_aided"=>isset($statelevel->india_ss_govtaid_pct)?$statelevel->india_ss_govtaid_pct:'0',"private"=>isset($statelevel->india_ss_private_pct)?$statelevel->india_ss_private_pct:'0',"central_govt"=>isset($statelevel->india_ss_centgovt_pct)?$statelevel->india_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_ss_govt_pl12)?$statelevel->india_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_ss_govtaid_pl12)?$statelevel->india_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_ss_govt_pl34)?$statelevel->india_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_ss_govtaid_pl34)?$statelevel->india_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_ss_private_pl12)?$statelevel->india_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_ss_centgovt_pl12)?$statelevel->india_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_ss_private_pl34)?$statelevel->india_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_ss_centgovt_pl34)?$statelevel->india_ss_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ss_sc_pct)?$statelevel->state_ss_sc_pct:'0',"obc"=>isset($statelevel->state_ss_obc_pct)?$statelevel->state_ss_obc_pct:'0',"st"=>isset($statelevel->state_ss_st_pct)?$statelevel->state_ss_st_pct:'0',"general"=>isset($statelevel->state_ss_general_pct)?$statelevel->state_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ss_sc_pl34)?$statelevel->state_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_ss_obc_pl12)?$statelevel->state_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ss_sc_pl12)?$statelevel->state_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ss_obc_pl34)?$statelevel->state_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ss_st_pl12)?$statelevel->state_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ss_general_pl12)?$statelevel->state_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ss_st_pl34)?$statelevel->state_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ss_general_pl34)?$statelevel->state_ss_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_ss_sc_pct)?$statelevel->india_ss_sc_pct:'0',"obc"=>isset($statelevel->india_ss_obc_pct)?$statelevel->india_ss_obc_pct:'0',"st"=>isset($statelevel->india_ss_st_pct)?$statelevel->india_ss_st_pct:'0',"general"=>isset($statelevel->india_ss_general_pct)?$statelevel->india_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_ss_sc_pl34)?$statelevel->india_ss_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_ss_obc_pl12)?$statelevel->india_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_ss_sc_pl12)?$statelevel->india_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_ss_obc_pl34)?$statelevel->india_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_ss_st_pl12)?$statelevel->india_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_ss_general_pl12)?$statelevel->india_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_ss_st_pl34)?$statelevel->india_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_ss_general_pl34)?$statelevel->india_ss_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ss_pl1)?$statelevel->state_ss_pl1:'0',"basic"=>isset($statelevel->state_ss_pl2)?$statelevel->state_ss_pl2:'0',"proficient"=>isset($statelevel->state_ss_pl3)?$statelevel->state_ss_pl3:'0',"advanced"=>isset($statelevel->state_ss_pl4)?$statelevel->state_ss_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_ss_pl1)?$statelevel->india_ss_pl1:'0',"basic"=>isset($statelevel->india_ss_pl2)?$statelevel->india_ss_pl2:'0',"proficient"=>isset($statelevel->india_ss_pl3)?$statelevel->india_ss_pl3:'0',"advanced"=>isset($statelevel->india_ss_pl4)?$statelevel->india_ss_pl4:'0'))
            );

            $newstateArray['eng'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_en_pct)?$statelevel->state_en_pct:'0',
                    'national'=>isset($statelevel->india_en_pct)?$statelevel->india_en_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_en_boys_pct)?$statelevel->state_en_boys_pct:'0',"girls"=>isset($statelevel->state_en_girls_pct)?$statelevel->state_en_girls_pct:'0','trans_gender'=>isset($statelevel->state_en_trans_pct)?$statelevel->state_en_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_en_boys_pl12)?$statelevel->state_en_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_en_boys_pl34)?$statelevel->state_en_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_en_girls_pl12)?$statelevel->state_en_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_en_girls_pl34)?$statelevel->state_en_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_en_boys_pct)?$statelevel->india_en_boys_pct:'0',"girls"=>isset($statelevel->india_en_girls_pct)?$statelevel->india_en_girls_pct:'0','trans_gender'=>isset($statelevel->india_en_trans_pct)?$statelevel->india_en_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_en_boys_pl12)?$statelevel->india_en_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_en_boys_pl34)?$statelevel->india_en_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_en_girls_pl12)?$statelevel->india_en_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_en_girls_pl34)?$statelevel->india_en_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_en_urban_pct)?$statelevel->state_en_urban_pct:'0',"rural"=>isset($statelevel->state_en_rural_pct)?$statelevel->state_en_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_en_rural_pl12)?$statelevel->state_en_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_en_urban_pl12)?$statelevel->state_en_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_en_rural_pl34)?$statelevel->state_en_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_en_urban_pl34)?$statelevel->state_en_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_en_urban_pct)?$statelevel->india_en_urban_pct:'0',"rural"=>isset($statelevel->india_en_rural_pct)?$statelevel->india_en_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_en_rural_pl12)?$statelevel->india_en_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_en_urban_pl12)?$statelevel->india_en_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_en_rural_pl34)?$statelevel->india_en_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_en_urban_pl34)?$statelevel->india_en_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_en_govt_pct)?$statelevel->state_en_govt_pct:'0',"govt_aided"=>isset($statelevel->state_en_govtaid_pct)?$statelevel->state_en_govtaid_pct:'0',"private"=>isset($statelevel->state_en_private_pct)?$statelevel->state_en_private_pct:'0',"central_govt"=>isset($statelevel->state_en_centgovt_pct)?$statelevel->state_en_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_en_govt_pl12)?$statelevel->state_en_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_en_govtaid_pl12)?$statelevel->state_en_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_en_govt_pl34)?$statelevel->state_en_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_en_govtaid_pl34)?$statelevel->state_en_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_en_private_pl12)?$statelevel->state_en_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_en_centgovt_pl12)?$statelevel->state_en_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_en_private_pl34)?$statelevel->state_en_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_en_centgovt_pl34)?$statelevel->state_en_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_en_govt_pct)?$statelevel->india_en_govt_pct:'0',"govt_aided"=>isset($statelevel->india_en_govtaid_pct)?$statelevel->india_en_govtaid_pct:'0',"private"=>isset($statelevel->india_en_private_pct)?$statelevel->india_en_private_pct:'0',"central_govt"=>isset($statelevel->india_en_centgovt_pct)?$statelevel->india_en_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_en_govt_pl12)?$statelevel->india_en_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_en_govtaid_pl12)?$statelevel->india_en_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_en_govt_pl34)?$statelevel->india_en_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_en_govtaid_pl34)?$statelevel->india_en_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_en_private_pl12)?$statelevel->india_en_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_en_centgovt_pl12)?$statelevel->india_en_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_en_private_pl34)?$statelevel->india_en_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_en_centgovt_pl34)?$statelevel->india_en_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_en_sc_pct)?$statelevel->state_en_sc_pct:'0',"obc"=>isset($statelevel->state_en_obc_pct)?$statelevel->state_en_obc_pct:'0',"st"=>isset($statelevel->state_en_st_pct)?$statelevel->state_en_st_pct:'0',"general"=>isset($statelevel->state_en_general_pct)?$statelevel->state_en_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_en_sc_pl34)?$statelevel->state_en_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_en_obc_pl12)?$statelevel->state_en_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_en_sc_pl12)?$statelevel->state_en_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_en_obc_pl34)?$statelevel->state_en_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_en_st_pl12)?$statelevel->state_en_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_en_general_pl12)?$statelevel->state_en_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_en_st_pl34)?$statelevel->state_en_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_en_general_pl34)?$statelevel->state_en_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_en_sc_pct)?$statelevel->india_en_sc_pct:'0',"obc"=>isset($statelevel->india_en_obc_pct)?$statelevel->india_en_obc_pct:'0',"st"=>isset($statelevel->india_en_st_pct)?$statelevel->india_en_st_pct:'0',"general"=>isset($statelevel->india_en_general_pct)?$statelevel->india_en_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_en_sc_pl34)?$statelevel->india_en_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_en_obc_pl12)?$statelevel->india_en_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_en_sc_pl12)?$statelevel->india_en_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_en_obc_pl34)?$statelevel->india_en_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_en_st_pl12)?$statelevel->india_en_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_en_general_pl12)?$statelevel->india_en_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_en_st_pl34)?$statelevel->india_en_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_en_general_pl34)?$statelevel->india_en_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_en_pl1)?$statelevel->state_en_pl1:'0',"basic"=>isset($statelevel->state_en_pl2)?$statelevel->state_en_pl2:'0',"proficient"=>isset($statelevel->state_en_pl3)?$statelevel->state_en_pl3:'0',"advanced"=>isset($statelevel->state_en_pl4)?$statelevel->state_en_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_en_pl1)?$statelevel->india_en_pl1:'0',"basic"=>isset($statelevel->india_en_pl2)?$statelevel->india_en_pl2:'0',"proficient"=>isset($statelevel->india_en_pl3)?$statelevel->india_en_pl3:'0',"advanced"=>isset($statelevel->india_en_pl4)?$statelevel->india_en_pl4:'0'))
            );

            $newstateArray['mil'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_la_pct)?$statelevel->state_la_pct:'0',
                    'national'=>isset($statelevel->india_la_pct)?$statelevel->india_la_pct:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_la_boys_pct)?$statelevel->state_la_boys_pct:'0',"girls"=>isset($statelevel->state_la_girls_pct)?$statelevel->state_la_girls_pct:'0','trans_gender'=>isset($statelevel->state_la_trans_pct)?$statelevel->state_la_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->state_la_boys_pl12)?$statelevel->state_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->state_la_boys_pl34)?$statelevel->state_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->state_la_girls_pl12)?$statelevel->state_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->state_la_girls_pl34)?$statelevel->state_la_girls_pl34:'0'),

                    'national'=>array("boys"=>isset($statelevel->india_la_boys_pct)?$statelevel->india_la_boys_pct:'0',"girls"=>isset($statelevel->india_la_girls_pct)?$statelevel->india_la_girls_pct:'0','trans_gender'=>isset($statelevel->india_la_trans_pct)?$statelevel->india_la_trans_pct:'0'
                    ,'boys_basic_and_below_basic'=>isset($statelevel->india_la_boys_pl12)?$statelevel->india_la_boys_pl12:'0'
                    ,'boys_proficient_and_advance'=>isset($statelevel->india_la_boys_pl34)?$statelevel->india_la_boys_pl34:'0'
                    ,'girls_basic_and_below_basic'=>isset($statelevel->india_la_girls_pl12)?$statelevel->india_la_girls_pl12:'0'
                    ,'girls_proficient_and_advance'=>isset($statelevel->india_la_girls_pl34)?$statelevel->india_la_girls_pl34:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_la_urban_pct)?$statelevel->state_la_urban_pct:'0',"rural"=>isset($statelevel->state_la_rural_pct)?$statelevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_la_rural_pl12)?$statelevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_la_urban_pl12)?$statelevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_la_rural_pl34)?$statelevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_la_urban_pl34)?$statelevel->state_la_urban_pl34:'0'),
                    
                    'national'=>array("urban"=>isset($statelevel->india_la_urban_pct)?$statelevel->india_la_urban_pct:'0',"rural"=>isset($statelevel->india_la_rural_pct)?$statelevel->india_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->india_la_rural_pl12)?$statelevel->india_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->india_la_urban_pl12)?$statelevel->india_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->india_la_rural_pl34)?$statelevel->india_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->india_la_urban_pl34)?$statelevel->india_la_urban_pl34:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_la_govt_pct)?$statelevel->state_la_govt_pct:'0',"govt_aided"=>isset($statelevel->state_la_govtaid_pct)?$statelevel->state_la_govtaid_pct:'0',"private"=>isset($statelevel->state_la_private_pct)?$statelevel->state_la_private_pct:'0',"central_govt"=>isset($statelevel->state_la_centgovt_pct)?$statelevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_la_govt_pl12)?$statelevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_la_govtaid_pl12)?$statelevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_la_govt_pl34)?$statelevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_la_govtaid_pl34)?$statelevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_la_private_pl12)?$statelevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_la_centgovt_pl12)?$statelevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_la_private_pl34)?$statelevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_la_centgovt_pl34)?$statelevel->state_la_centgovt_pl34:'0'),
                    
                    'national'=>array("govt"=>isset($statelevel->india_la_govt_pct)?$statelevel->india_la_govt_pct:'0',"govt_aided"=>isset($statelevel->india_la_govtaid_pct)?$statelevel->india_la_govtaid_pct:'0',"private"=>isset($statelevel->india_la_private_pct)?$statelevel->india_la_private_pct:'0',"central_govt"=>isset($statelevel->india_la_centgovt_pct)?$statelevel->india_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->india_la_govt_pl12)?$statelevel->india_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->india_la_govtaid_pl12)?$statelevel->india_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->india_la_govt_pl34)?$statelevel->india_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->india_la_govtaid_pl34)?$statelevel->india_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->india_la_private_pl12)?$statelevel->india_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->india_la_centgovt_pl12)?$statelevel->india_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->india_la_private_pl34)?$statelevel->india_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->india_la_centgovt_pl34)?$statelevel->india_la_centgovt_pl34:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_la_sc_pct)?$statelevel->state_la_sc_pct:'0',"obc"=>isset($statelevel->state_la_obc_pct)?$statelevel->state_la_obc_pct:'0',"st"=>isset($statelevel->state_la_st_pct)?$statelevel->state_la_st_pct:'0',"general"=>isset($statelevel->state_la_general_pct)?$statelevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_la_sc_pl34)?$statelevel->state_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->state_la_obc_pl12)?$statelevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_la_sc_pl12)?$statelevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_la_obc_pl34)?$statelevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_la_st_pl12)?$statelevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_la_general_pl12)?$statelevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_la_st_pl34)?$statelevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_la_general_pl34)?$statelevel->state_la_general_pl34:'0'),
                    
                    'national'=>array("sc"=>isset($statelevel->india_la_sc_pct)?$statelevel->india_la_sc_pct:'0',"obc"=>isset($statelevel->india_la_obc_pct)?$statelevel->india_la_obc_pct:'0',"st"=>isset($statelevel->india_la_st_pct)?$statelevel->india_la_st_pct:'0',"general"=>isset($statelevel->india_la_general_pct)?$statelevel->india_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->india_la_sc_pl34)?$statelevel->india_la_sc_pl34:'0' 
                    ,'obc_basic_and_below_basic'=>isset($statelevel->india_la_obc_pl12)?$statelevel->india_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->india_la_sc_pl12)?$statelevel->india_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->india_la_obc_pl34)?$statelevel->india_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->india_la_st_pl12)?$statelevel->india_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->india_la_general_pl12)?$statelevel->india_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->india_la_st_pl34)?$statelevel->india_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->india_la_general_pl34)?$statelevel->india_la_general_pl34:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_la_pl1)?$statelevel->state_la_pl1:'0',"basic"=>isset($statelevel->state_la_pl2)?$statelevel->state_la_pl2:'0',"proficient"=>isset($statelevel->state_la_pl3)?$statelevel->state_la_pl3:'0',"advanced"=>isset($statelevel->state_la_pl4)?$statelevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($statelevel->india_la_pl1)?$statelevel->india_la_pl1:'0',"basic"=>isset($statelevel->india_la_pl2)?$statelevel->india_la_pl2:'0',"proficient"=>isset($statelevel->india_la_pl3)?$statelevel->india_la_pl3:'0',"advanced"=>isset($statelevel->india_la_pl4)?$statelevel->india_la_pl4:'0'))
            );

        $stateArr['state_id'] = (int)$statelevel->state_code;
        $stateArr['grade'] = 10;
        $stateArr['data'] = json_encode($newstateArray);
        $stateArr['created_at'] = now();
        $stateArr['updated_at'] = now();
        
        $statePerformaceData[]=$stateArr;
        }
        StateGradeLevelPerformance::insert($statePerformaceData);
    }


    /******************************************************************************
     * Desc: Create Feedback data for tq,sq and pq for grade 3,5,8 and 10
     *       We are also create data for all grade as 11th grade
     *****************************************************************************/
    public function StateFeedback(){
            
        DB::table('pq_state_level_feedback')->truncate();
        ini_set('max_execution_time', '5000');
        $GetFeedbackDataFor_3_Grade = $this->GetFeedbackDataFor_3_Grade();
        $GetFeedbackDataFor_5_Grade = $this->GetFeedbackDataFor_5_Grade();
        $GetFeedbackDataFor_8_Grade = $this->GetFeedbackDataFor_8_Grade();
        $GetFeedbackDataFor_10_Grade = $this->GetFeedbackDataFor_10_Grade();

        $final_dataG3 = DB::select($GetFeedbackDataFor_3_Grade);
        $final_dataG5 = DB::select($GetFeedbackDataFor_5_Grade);
        $final_dataG8 = DB::select($GetFeedbackDataFor_8_Grade);
        $final_dataG10 = DB::select($GetFeedbackDataFor_10_Grade);

        if(count($final_dataG3)>0)
        {
            foreach($final_dataG3 as $data){

                PQStateLevelFeedback::insert([
                        'state_id'=>$data->state_code,
                        'grade'=>3,
                        'level'=>$data->level,
                        'question_code'=>$data->question_code,
                        'question_desc'=>$data->question_desc,
                        'total_parent'=>$data->total_parent,
                        'avg'=>$data->state_avg,
                    ]);
            }
        }

        if(count($final_dataG5)>0)
        {
            foreach($final_dataG5 as $data){

                PQStateLevelFeedback::insert([
                    'state_id'=>$data->state_code,
                    'grade'=>5,
                    'level'=>$data->level,
                    'question_code'=>$data->question_code,
                    'question_desc'=>$data->question_desc,
                    'total_parent'=>$data->total_parent,
                    'avg'=>$data->state_avg,
                ]);
            }
        }

        if(count($final_dataG8)>0)
        {
            foreach($final_dataG8 as $data){

                PQStateLevelFeedback::insert([
                    'state_id'=>$data->state_code,
                    'grade'=>8,
                    'level'=>$data->level,
                    'question_code'=>$data->question_code,
                    'question_desc'=>$data->question_desc,
                    'total_parent'=>$data->total_parent,
                    'avg'=>$data->state_avg,
                ]);
            }
        }

        if(count($final_dataG10)>0)
        {
            foreach($final_dataG10 as $data){

                PQStateLevelFeedback::insert([
                    'state_id'=>$data->state_code,
                    'grade'=>10,
                    'level'=>$data->level,
                    'question_code'=>$data->question_code,
                    'question_desc'=>$data->question_desc,
                    'total_parent'=>$data->total_parent,
                    'avg'=>$data->state_avg,
                ]);
            }
        }


    // grade 11 pq feedback data insert
        $stringPQState = 'pq_state_level_feedback.state_id,';
        $wherePQState = "('pq','pq1','pq2','pq3')";
        $stringGroupBYPQState = 'pq_state_level_feedback.state_id,';
        $stateTBLPQ = "pq_state_level_feedback";
        $allStateFBPQ = $this->RaqQuery($stringPQState,$wherePQState,$stringGroupBYPQState,$stateTBLPQ);
        $allPQStateData = DB::select($allStateFBPQ);
        $allPQStateData = json_decode(json_encode($allPQStateData), true);
        $allDNLODataStatePQ = PQStateLevelFeedback::insert($allPQStateData);  

    // grade 11 tq feedback data insert
        $stringTQState = 'pq_state_level_feedback.state_id,';
        $whereTQState = "('tq')";
        $stringGroupBYTQState = 'pq_state_level_feedback.state_id,';
        $stateTBLTQ = "pq_state_level_feedback";
        $allStateFBTQ = $this->RaqQuery($stringTQState,$whereTQState,$stringGroupBYTQState,$stateTBLTQ);
        $allTQStateData = DB::select($allStateFBTQ);
        $allTQStateData = json_decode(json_encode($allTQStateData), true);
        $alldNLODataStateTQ = PQStateLevelFeedback::insert($allTQStateData);   

    // grade 11 sq feedback data insert
        $stringSQState = 'pq_state_level_feedback.state_id,';
        $whereSQState = "('sq')";
        $stringGroupBYSQState = 'pq_state_level_feedback.state_id,';
        $stateTBLSQ = "pq_state_level_feedback";
        $allStateFBSQ = $this->RaqQuery($stringSQState,$whereSQState,$stringGroupBYSQState,$stateTBLSQ);
        $allSQStateData = DB::select($allStateFBSQ);
        $allSQStateData = json_decode(json_encode($allSQStateData), true);
        $allDNLODataStateSQ = PQStateLevelFeedback::insert($allSQStateData); 

        return "Feedback data successfully created.";
    }

    //Query For Feedback SRC data Subject Wise Grade 3
    public function GetFeedbackDataFor_3_Grade()
    {
        $query = "select id, state_code, state_pq_q14 as state_avg , 'pq' level, 'students like to go to school' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code,state_pq_q17 as state_avg, 'pq' level, 'students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_pq_q32 as state_avg, 'pq' level, 'CWSN students get facilities from school' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_pq_q18
        as state_avg, 'pq' level, 'students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_pq_q29f
        as state_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q30
        as state_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q33
        as state_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q31
        as state_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q32
        as state_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q34
        as state_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q36
        as state_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q04
        as state_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q28
        as state_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_sq_q31
        as state_avg, 'sq' level, 'of schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_sq_q32
        as state_avg, 'sq' level, 'of schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_sq_q34
        as state_avg, 'sq' level, 'of schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_sq_q35
        as state_avg, 'sq' level, 'of schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_sq_q14
        as state_avg, 'sq' level, 'of schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_sq_q09
        as state_avg, 'sq' level, 'of schools have library facility' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q18
        as state_avg, 'pq3' level, 'Protocal for COVID symptoms reporting' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q17
        as state_avg, 'pq3' level, 'Measures to be taken for wellbeing of children and school staff' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, state_tq_q16
        as state_avg, 'pq3' level, 'School reopening guidelines for teacher' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, State_pq_q26
        as state_avg, 'pq1' level, 'I learn Many things during the pandemic like' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, State_pq_q27_a_d
        as state_avg, 'pq2' level, 'Learning from pandemic ' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, State_pq_q27_e_g
        as state_avg, 'pq3' level, 'I experienced obstacles to my learning during pandemic' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, State_pq_q27f
        as state_avg, 'pq2' level, 'No Digital Device at Home' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, State_pq_q28a
        as state_avg, 'pq2' level, 'Follow the Covid-19 hygiene protocols' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, State_pq_q28c
        as state_avg, 'pq2' level, 'Experienced worry anxiety and fear during pandemic' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        union all
        select id, state_code, State_pq_q28f
        as state_avg, 'pq2' level, 'Happy to spend time at home with my own self' question_desc, 0 question_code, 0 total_parent
        from grade3statetable
        ";
        return $query;
    }
    //Query For SRC Feedback data for Grade 5
    public function GetFeedbackDataFor_5_Grade()
    {
        $query = "select id, state_code, state_pq_q14 as state_avg , 'pq' level, 'students like to go to school' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code,state_pq_q17 as state_avg, 'pq' level, 'students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_pq_q32 as state_avg, 'pq' level, 'CWSN students get facilities from school' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_pq_q18
        as state_avg, 'pq' level, 'students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_pq_q29f
        as state_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q30
        as state_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q33
        as state_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q31
        as state_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q32
        as state_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q34
        as state_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q36
        as state_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q04
        as state_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q28
        as state_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_sq_q31
        as state_avg, 'sq' level, 'of schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_sq_q32
        as state_avg, 'sq' level, 'of schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_sq_q34
        as state_avg, 'sq' level, 'of schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_sq_q35
        as state_avg, 'sq' level, 'of schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_sq_q14
        as state_avg, 'sq' level, 'of schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_sq_q09
        as state_avg, 'sq' level, 'of schools have library facility' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q18
        as state_avg, 'pq3' level, 'Protocal for COVID symptoms reporting' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q17
        as state_avg, 'pq3' level, 'Measures to be taken for wellbeing of children and school staff' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, state_tq_q16
        as state_avg, 'pq3' level, 'School reopening guidelines for teacher' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, State_pq_q26
        as state_avg, 'pq1' level, 'I learn Many things during the pandemic like' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, State_pq_q27_a_d
        as state_avg, 'pq2' level, 'Learning from pandemic ' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, State_pq_q27_e_g
        as state_avg, 'pq3' level, 'I experienced obstacles to my learning during pandemic' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, State_pq_q27f
        as state_avg, 'pq2' level, 'No Digital Device at Home' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, State_pq_q28a
        as state_avg, 'pq2' level, 'Follow the Covid-19 hygiene protocols' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, State_pq_q28c
        as state_avg, 'pq2' level, 'Experienced worry anxiety and fear during pandemic' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        union all
        select id, state_code, State_pq_q28f
        as state_avg, 'pq2' level, 'Happy to spend time at home with my own self' question_desc, 0 question_code, 0 total_parent
        from grade5statetable
        ";
        return $query;
    }
    //Query For SRC Feedback data for Grade 8
    public function GetFeedbackDataFor_8_Grade()
    {
        $query = "select id, state_code, state_LA_pq_q14 as state_avg , 'pq' level, 'students like to go to school' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code,state_LA_pq_q17 as state_avg, 'pq' level, 'students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_LA_pq_q32 as state_avg, 'pq' level, 'CWSN students get facilities from school' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_LA_pq_q18
        as state_avg, 'pq' level, 'students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_LA_pq_q29f
        as state_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q30
        as state_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q33
        as state_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q31
        as state_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q32
        as state_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q34
        as state_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q36
        as state_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q04
        as state_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q28
        as state_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_sq_q31
        as state_avg, 'sq' level, 'of schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_sq_q32
        as state_avg, 'sq' level, 'of schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_sq_q34
        as state_avg, 'sq' level, 'of schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_sq_q35
        as state_avg, 'sq' level, 'of schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_sq_q14
        as state_avg, 'sq' level, 'of schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_sq_q09
        as state_avg, 'sq' level, 'of schools have library facility' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q18
        as state_avg, 'pq3' level, 'Protocal for COVID symptoms reporting' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q17
        as state_avg, 'pq3' level, 'Measures to be taken for wellbeing of children and school staff' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, state_tq_q16
        as state_avg, 'pq3' level, 'School reopening guidelines for teacher' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, State_pq_q26
        as state_avg, 'pq1' level, 'I learn Many things during the pandemic like' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, State_pq_q27_a_d
        as state_avg, 'pq2' level, 'Learning from pandemic ' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, State_pq_q27_e_g
        as state_avg, 'pq3' level, 'I experienced obstacles to my learning during pandemic' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, State_pq_q27f
        as state_avg, 'pq2' level, 'No Digital Device at Home' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, State_pq_q28a
        as state_avg, 'pq2' level, 'Follow the Covid-19 hygiene protocols' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, State_pq_q28c
        as state_avg, 'pq2' level, 'Experienced worry anxiety and fear during pandemic' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        union all
        select id, state_code, State_pq_q28f
        as state_avg, 'pq2' level, 'Happy to spend time at home with my own self' question_desc, 0 question_code, 0 total_parent
        from grade8statetable
        ";
        return $query;
    }
    //Query For SRC Feedback data for Grade 10
    public function GetFeedbackDataFor_10_Grade()
    {
        $query = "select id, state_code, state_LA_pq_q14 as state_avg , 'pq' level, 'students like to go to school' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code,state_LA_pq_q17 as state_avg, 'pq' level, 'students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_LA_pq_q32 as state_avg, 'pq' level, 'CWSN students get facilities from school' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_LA_pq_q18
        as state_avg, 'pq' level, 'students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_LA_pq_q29f
        as state_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q30
        as state_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q33
        as state_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q31
        as state_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q32
        as state_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q34
        as state_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q36
        as state_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q04
        as state_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q28
        as state_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_sq_q31
        as state_avg, 'sq' level, 'of schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_sq_q32
        as state_avg, 'sq' level, 'of schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_sq_q34
        as state_avg, 'sq' level, 'of schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_sq_q35
        as state_avg, 'sq' level, 'of schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_sq_q14
        as state_avg, 'sq' level, 'of schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_sq_q09
        as state_avg, 'sq' level, 'of schools have library facility' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q18
        as state_avg, 'pq3' level, 'Protocal for COVID symptoms reporting' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q17
        as state_avg, 'pq3' level, 'Measures to be taken for wellbeing of children and school staff' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, state_tq_q16
        as state_avg, 'pq3' level, 'School reopening guidelines for teacher' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, State_pq_q26
        as state_avg, 'pq1' level, 'I learn Many things during the pandemic like' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, State_pq_q27_a_d
        as state_avg, 'pq2' level, 'Learning from pandemic ' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, State_pq_q27_e_g
        as state_avg, 'pq3' level, 'I experienced obstacles to my learning during pandemic' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, State_pq_q27f
        as state_avg, 'pq2' level, 'No Digital Device at Home' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, State_pq_q28a
        as state_avg, 'pq2' level, 'Follow the Covid-19 hygiene protocols' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, State_pq_q28c
        as state_avg, 'pq2' level, 'Experienced worry anxiety and fear during pandemic' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
        union all
        select id, state_code, State_pq_q28f
        as state_avg, 'pq2' level, 'Happy to spend time at home with my own self' question_desc, 0 question_code, 0 total_parent
        from grade10statetable
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
        ".$tbl_name.".level, ".$tbl_name.".question_code, ".$tbl_name.".question_desc, 
        sum(".$tbl_name.".total_parent::float) AS total_parent,
         round(SUM(avg::float)/count(".$tbl_name.".id)) as avg 
        from ".$tbl_name."
        where ".$tbl_name.".level in ".$wherePQNational."
        group by ".$groupByString." ".$tbl_name.".question_code, ".$tbl_name.".question_desc,".$tbl_name.".level";

        return $query;
    }

    // Learning Outcome Final Data State Wise
    public function StateWiseLO(){
        DB::table('state_grade_level_learningoutcome')->truncate();
        ini_set('max_execution_time', '5000');

        $getAllStateDataSubjectWiseG3 = $this->GetAllStateDataSubjectCodeG3();
        $getAllStateDataSubjectWiseG5 = $this->GetAllStateDataSubjectCodeG5();
        $getAllStateDataSubjectWiseG8 = $this->GetAllStateDataSubjectCodeG8();
        $getAllStateDataSubjectWiseG10 = $this->GetAllStateDataSubjectCodeG10();

        $final_dataG3 = DB::select($getAllStateDataSubjectWiseG3);
        $final_dataG5 = DB::select($getAllStateDataSubjectWiseG5);
        $final_dataG8 = DB::select($getAllStateDataSubjectWiseG8);
        $final_dataG10 = DB::select($getAllStateDataSubjectWiseG10);

        foreach($final_dataG3 as $data){

                StateGradeLevelLearningOutCome::insert([
                    'state_id'=>$data->state_code,
                    'grade'=>3,
                    'subject_code'=>$data->subject_code,
                    'language'=>$data->language,
                    'question'=>$data->description,
                    'total_student'=>'0',
                    'state_avg'=>$data->state_avg,
                    'national_avg'=>$data->national_avg,
                ]);
        }

        foreach($final_dataG5 as $data){

            StateGradeLevelLearningOutCome::insert([
                'state_id'=>$data->state_code,
                'grade'=>5,
                'subject_code'=>$data->subject_code,
                'language'=>$data->language,
                'question'=>$data->description,
                'total_student'=>'0',
                'state_avg'=>$data->state_avg,
                'national_avg'=>$data->national_avg,
            ]);
        }

        foreach($final_dataG8 as $data){

            StateGradeLevelLearningOutCome::insert([
                'state_id'=>$data->state_code,
                'grade'=>8,
                'subject_code'=>$data->subject_code,
                'language'=>$data->language,
                'question'=>$data->description,
                'total_student'=>'0',
                'state_avg'=>$data->state_avg,
                'national_avg'=>$data->national_avg,
            ]);
        }

        foreach($final_dataG10 as $data){

            StateGradeLevelLearningOutCome::insert([
                'state_id'=>$data->state_code,
                'grade'=>10,
                'subject_code'=>$data->subject_code,
                'language'=>$data->language,
                'question'=>$data->description,
                'total_student'=>'0',
                'state_avg'=>$data->state_avg,
                'national_avg'=>$data->national_avg,
            ]);
        }

        return "State Learning Outcome Table Created";
    }

    //Query For LO SRC data Subject Wise Grade 3
    public function GetAllStateDataSubjectCodeG3()
    {
        $query = "select id, state_code, State_LA_psub3_1 as state_avg, India_LA_psub3_1 as national_avg, 'State_LA_psub3_1' src_subject_code, 'L304' subject_code, 'language' language, 'Reads small texts with comprehension i.e., identifies main ideas, details,sequence and draws conclusions' description
        from grade3Statetable
        union all
        select id, state_code, State_LA_psub3_2 as state_avg, India_LA_psub3_2 as national_avg, 'State_LA_psub3_2' src_subject_code, 'L312' subject_code, 'language' language, 'Reads printed scripts on the classroom walls: poems, posters, charts etc.' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_1 as state_avg, India_MA_psub3_1 as national_avg, 'State_MA_psub3_1' src_subject_code, 'M301' subject_code, 'math' language, 'Reads and writes numbers up to 999 using place value' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_2 as state_avg, India_MA_psub3_2 as national_avg, 'State_MA_psub3_2' src_subject_code, 'M302' subject_code, 'math' language, 'Compares numbers up to 999 based on their place values' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_3 as state_avg, India_MA_psub3_3 as national_avg, 'State_MA_psub3_3' src_subject_code, 'M303' subject_code, 'math' language, 'Solves simple daily life problems using addition and subtraction of three digit numbers with and without regrouping' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_4 as state_avg, India_MA_psub3_4 as national_avg, 'State_MA_psub3_4' src_subject_code, 'M304' subject_code, 'math' language, 'Constructs and uses the multiplication facts (up till 10) in daily life situations' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_5 as state_avg, India_MA_psub3_5 as national_avg, 'State_MA_psub3_5' src_subject_code, 'M305' subject_code, 'math' language, 'Analyses and applies an appropriate number operation in the situation/ context' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_6 as state_avg, India_MA_psub3_6 as national_avg, 'State_MA_psub3_6' src_subject_code, 'M306' subject_code, 'math' language, 'Explains the meaning of division facts by equal grouping/sharing and finds it by repeated subtraction' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_7 as state_avg, India_MA_psub3_7 as national_avg, 'State_MA_psub3_7' src_subject_code, 'M309' subject_code, 'math' language, 'Identifies and makes 2D-shapes by paper folding. paper cutting on the dot grid, using straight lines etc.' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_8 as state_avg, India_MA_psub3_8 as national_avg, 'State_MA_psub3_8' src_subject_code, 'M311' subject_code, 'math' language, 'Fills a given region leaving no gaps using a tile of a given shape' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_9 as state_avg, India_MA_psub3_9 as national_avg, 'State_MA_psub3_9' src_subject_code, 'M312' subject_code, 'math' language, 'Estimates and measures length and distance using standard units like centimeters or meters & identifies relationships' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_10 as state_avg, India_MA_psub3_10 as national_avg, 'State_MA_psub3_10' src_subject_code, 'M317' subject_code, 'math' language, 'Reads the time correctly to the hour using a clock/watch' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_11 as state_avg, India_MA_psub3_11 as national_avg, 'State_MA_psub3_11' src_subject_code, 'M318' subject_code, 'math' language, 'Extends patterns in simple shapes and numbers' description
        from grade3Statetable
        union all
        select id, state_code, State_MA_psub3_12 as state_avg, India_MA_psub3_12 as national_avg, 'State_MA_psub3_12' src_subject_code, 'M319' subject_code, 'math' language, 'Records data using tally marks, represents pictorially and draws' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_1 as state_avg, India_EV_psub3_1 as national_avg, 'State_EV_psub3_1' src_subject_code, 'EVS302' subject_code, 'evs' language, 'Identifies simple features (e.g. movement, at places found/ kept, eating habits, sounds) of animals and birds in the immediate surroundings.' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_2 as state_avg, India_EV_psub3_2 as national_avg, 'State_EV_psub3_2' src_subject_code, 'EVS303' subject_code, 'evs' language, 'Identifies relationships with and among family members' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_3 as state_avg, India_EV_psub3_3 as national_avg, 'State_EV_psub3_3' src_subject_code, 'EVS304' subject_code, 'evs' language, 'Identifies objects, signs (vessels, stoves, transport, means of communication, transport, signboards etc.), places (types of houses/shelters, bus stand, petrol pump etc.) activities (works people do, cooking processes, etc.) at home/school/ neighborhoods' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_4 as state_avg, India_EV_psub3_4 as national_avg, 'State_EV_psub3_4' src_subject_code, 'EVS305' subject_code, 'evs' language, 'Describes need of food for people of different age groups, animals/birds, availability of food and water and use of water at home and surroundings.' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_5 as state_avg, India_EV_psub3_5 as national_avg, 'State_EV_psub3_5' src_subject_code, 'EVS307' subject_code, 'evs' language, 'Groups objects, birds, animals, features, activities according to differences/ similarities using different senses. (e.g. appearance/place of living/ food/ movement/ likes-dislikes/ any other features)' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_6 as state_avg, India_EV_psub3_6 as national_avg, 'State_EV_psub3_6' src_subject_code, 'EVS309' subject_code, 'evs' language, 'Identifies directions, location of objects/places in simple maps using signs/symbols/ verbally' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_7 as state_avg, India_EV_psub3_7 as national_avg, 'State_EV_psub3_7' src_subject_code, 'EVS310' subject_code, 'evs' language, 'Guesses properties, estimates quantities of materials/activities in daily life and verifies using symbols/non-standard units' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_8 as state_avg, India_EV_psub3_8 as national_avg, 'State_EV_psub3_8' src_subject_code, 'EVS311' subject_code, 'evs' language, 'Records observations, experiences, information on objects/activities/places visited in different ways and predicts patterns etc' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_9 as state_avg, India_EV_psub3_9 as national_avg, 'State_EV_psub3_9' src_subject_code, 'EVS313' subject_code, 'evs' language, 'Observes rules in games (local, indoor, outdoor)' description
        from grade3Statetable
        union all
        select id, state_code, State_EV_psub3_10 as state_avg, India_EV_psub3_10 as national_avg, 'State_EV_psub3_10' src_subject_code, 'EVS314' subject_code, 'evs' language, 'Voices opinion on good/bad touch , stereotypes for tasks/play/food in family w.r.t gender, misuse/wastage of food and water in family and school.' description
        from grade3Statetable
        ";

        return $query;

    }

    //Query For LO SRC data Subject Wise Grade 5
    public function GetAllStateDataSubjectCodeG5()
    {
        $query = "select id, state_code, State_LA_psub3_1 as state_avg, India_LA_psub3_1 as national_avg, 'State_LA_psub3_1' src_subject_code, 'L508' subject_code, 'language' language, 'Reads text with comprehension, locates details and sequence of events' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_1 as state_avg, India_MA_psub3_1 as national_avg, 'State_MA_psub3_1' src_subject_code, 'M401' subject_code, 'math' language, 'Applies operations of numbers in daily life situations' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_2 as state_avg, India_MA_psub3_2 as national_avg, 'State_MA_psub3_2' src_subject_code, 'M412' subject_code, 'math' language, 'Explores the area and perimeter of simple geometrical shapes (triangle, rectangle, square) in terms of given shape as a unit' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_3 as state_avg, India_MA_psub3_3 as national_avg, 'State_MA_psub3_3' src_subject_code, 'M418' subject_code, 'math' language, 'Calculates time intervals/duration of familiar daily life events by using forward or backward counting/addition and subtraction' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_4 as state_avg, India_MA_psub3_4 as national_avg, 'State_MA_psub3_4' src_subject_code, 'M421' subject_code, 'math' language, 'Represent the collected information in tables and bar graphs and draws inferences from these' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_5 as state_avg, India_MA_psub3_5 as national_avg, 'State_MA_psub3_5' src_subject_code, 'M501' subject_code, 'math' language, 'Reads and writes numbers bigger than 1000 being used in her/his surroundings' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_6 as state_avg, India_MA_psub3_6 as national_avg, 'State_MA_psub3_6' src_subject_code, 'M504' subject_code, 'math' language, 'Estimates sum. difference, product and quotient of numbers and verifies the same using different strategies like using standard algorithms or breaking a number and then using operation' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_7 as state_avg, India_MA_psub3_7 as national_avg, 'State_MA_psub3_7' src_subject_code, 'M505' subject_code, 'math' language, 'Finds the number corresponding to part of a collection' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_8 as state_avg, India_MA_psub3_8 as national_avg, 'State_MA_psub3_8' src_subject_code, 'M506' subject_code, 'math' language, 'Identifies and forms equivalent fractions of a given fraction' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_9 as state_avg, India_MA_psub3_9 as national_avg, 'State_MA_psub3_9' src_subject_code, 'M508' subject_code, 'math' language, 'Converts fractions into decimals and vice versa' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_10 as state_avg, India_MA_psub3_10 as national_avg, 'State_MA_psub3_10' src_subject_code, 'M509' subject_code, 'math' language, 'Classifies angles into right angle, acute angle, obtuse angle and represents the same by drawing and tracing' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_11 as state_avg, India_MA_psub3_11 as national_avg, 'State_MA_psub3_11' src_subject_code, 'M512' subject_code, 'math' language, 'Relates different commonly used larger and smaller units of length, weight and volume and converts larger units to smaller units and vice versa' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_12 as state_avg, India_MA_psub3_12 as national_avg, 'State_MA_psub3_12' src_subject_code, 'M513' subject_code, 'math' language, 'Estimates the volume of a solid body in known units.' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_13 as state_avg, India_MA_psub3_13 as national_avg, 'State_MA_psub3_13' src_subject_code, 'M514' subject_code, 'math' language, 'Applies the four fundamental arithmetic operations in solving problems involving money, length, mass, capacity and time intervals' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_14 as state_avg, India_MA_psub3_14 as national_avg, 'State_MA_psub3_14' src_subject_code, 'M515' subject_code, 'math' language, 'Identifies the pattern in triangular numbers and square number' description
        from grade5statetable
        union all
        select id, state_code, State_MA_psub3_15 as state_avg, India_MA_psub3_15 as national_avg, 'State_MA_psub3_15' src_subject_code, 'M516' subject_code, 'math' language, 'Collects data related to various daily life situations. represents it in tabular form and as bar graphs and interprets it' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_1 as state_avg, India_EV_psub3_1 as national_avg, 'State_EV_psub3_1' src_subject_code, 'EVS403' subject_code, 'evs' language, 'Identifies relationship with and among family members in extended family' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_2 as state_avg, India_EV_psub3_2 as national_avg, 'State_EV_psub3_2' src_subject_code, 'EVS410' subject_code, 'evs' language, 'Records observations/experiences/information for objects, activities, phenomena, places visited in different ways and predicts patterns and activities/ phenomena' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_3 as state_avg, India_EV_psub3_3 as national_avg, 'State_EV_psub3_3' src_subject_code, 'EVS501' subject_code, 'evs' language, 'Explains the super senses and unusual features (sight, smell, hear, sleep, sound, etc.) of animals and their responses to light, sound, food etc.' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_4 as state_avg, India_EV_psub3_4 as national_avg, 'State_EV_psub3_4' src_subject_code, 'EVS503' subject_code, 'evs' language, 'Describes the interdependence among animals, plants and humans' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_5 as state_avg, India_EV_psub3_5 as national_avg, 'State_EV_psub3_5' src_subject_code, 'EVS504' subject_code, 'evs' language, 'Explains the role and functions of different institutions in daily life (Bank, Panchayat, cooperatives. police station, etc.)' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_6 as state_avg, India_EV_psub3_6 as national_avg, 'State_EV_psub3_6' src_subject_code, 'EVS505' subject_code, 'evs' language, 'Establishes linkages among terrain, climate, resources (food, water, shelter, livelihood) and cultural life. (e.g. life in distant/difficult areas like hot/cold deserts)' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_7 as state_avg, India_EV_psub3_7 as national_avg, 'State_EV_psub3_7' src_subject_code, 'EVS506' subject_code, 'evs' language, 'Groups objects, materials, activities for features/properties such as shape, taste, color , texture, sound, traits etc.' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_8 as state_avg, India_EV_psub3_8 as national_avg, 'State_EV_psub3_8' src_subject_code, 'EVS507' subject_code, 'evs' language, 'Traces the changes in practices, customs, techniques of past and present through coins, paintings, monuments, museum etc. and interacting with elders' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_9 as state_avg, India_EV_psub3_9 as national_avg, 'State_EV_psub3_9' src_subject_code, 'EVS508' subject_code, 'evs' language, 'Guesses (properties, conditions of phenomena), estimates spatial quantities (distance, area, volume, weight etc. ) and time in simple standard units and verifies using simple tools/set ups' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_10 as state_avg, India_EV_psub3_10 as national_avg, 'State_EV_psub3_10' src_subject_code, 'EVS509' subject_code, 'evs' language, 'Records observations/experiences/information in an organized manner (e.g. in tables/ sketches/ bar graphs/ pie charts) and predicts patterns in activities/ phenomena (e.g. floating, sinking, mixing, evaporation , germination, spoilage) to establish relation between cause and effect.' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_11 as state_avg, India_EV_psub3_11 as national_avg, 'State_EV_psub3_11' src_subject_code, 'EVS510' subject_code, 'evs' language, 'Identifies signs, directions, location of different objects/landmarks of a locality / place visited in maps and predicts directions w.r.t. positions at different places for a location' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_12 as state_avg, India_EV_psub3_12 as national_avg, 'State_EV_psub3_12' src_subject_code, 'EVS512' subject_code, 'evs' language, 'Voices opinions on issues observed/experienced and relates practices/happenings to larger issues of society' description
        from grade5statetable
        union all
        select id, state_code, State_EV_psub3_13 as state_avg, India_EV_psub3_13 as national_avg, 'State_EV_psub3_13' src_subject_code, 'EVS513' subject_code, 'evs' language, 'Suggests ways for hygiene, health, managing waste. disaster/emergency situations and protecting/saving resources' description
        from grade5statetable";

        return $query;

    }

    //Query For LO SRC data Subject Wise Grade 8
    public function GetAllStateDataSubjectCodeG8()
    {
        $query = "select id, state_code, State_LA_psub3_1 as state_avg, India_LA_psub3_1 as national_avg, 'State_LA_psub3_1' src_subject_code, 'L813' subject_code, 'language' language, 'Read textual/non-textual materials with comprehension and identifies the details, characters, main idea and sequence of ideas and events while reading' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_1 as state_avg, India_MA_psub3_1 as national_avg, 'State_MA_psub3_1' src_subject_code, 'M601' subject_code, 'math' language, 'Solves problems involving large numbers by applying appropriate operations' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_2 as state_avg, India_MA_psub3_2 as national_avg, 'State_MA_psub3_2' src_subject_code, 'M606' subject_code, 'math' language, 'Solves problems on daily life situations involving addition and subtraction of fractions / decimals' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_3 as state_avg, India_MA_psub3_3 as national_avg, 'State_MA_psub3_3' src_subject_code, 'M620' subject_code, 'math' language, 'Finds out the perimeter and area of rectangular objects in the surroundings like floor of the class room, surfaces of a chalk box etc.' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_4 as state_avg, India_MA_psub3_4 as national_avg, 'State_MA_psub3_4' src_subject_code, 'M621' subject_code, 'math' language, 'Arranges given/collected information in the form of table, pictograph and bar graph and interprets them' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_5 as state_avg, India_MA_psub3_5 as national_avg, 'State_MA_psub3_5' src_subject_code, 'M702' subject_code, 'math' language, 'Interprets the division and multiplication of fractions' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_6 as state_avg, India_MA_psub3_6 as national_avg, 'State_MA_psub3_6' src_subject_code, 'M705' subject_code, 'math' language, 'Solves problems related to daily life situations involving rational numbers' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_7 as state_avg, India_MA_psub3_7 as national_avg, 'State_MA_psub3_7' src_subject_code, 'M706' subject_code, 'math' language, 'Uses exponential form of numbers to simplify problems involving multiplication and division of large numbers' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_8 as state_avg, India_MA_psub3_8 as national_avg, 'State_MA_psub3_8' src_subject_code, 'M707' subject_code, 'math' language, 'Adds/subtracts algebraic expressions' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_9 as state_avg, India_MA_psub3_9 as national_avg, 'State_MA_psub3_9' src_subject_code, 'M710' subject_code, 'math' language, 'Solves problems related to conversion of percentage to fraction and decimal and vice versa' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_10 as state_avg, India_MA_psub3_10 as national_avg, 'State_MA_psub3_10' src_subject_code, 'M717' subject_code, 'math' language, 'Finds out approximate area of closed shapes by using unit square grid/graph sheet' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_11 as state_avg, India_MA_psub3_11 as national_avg, 'State_MA_psub3_11' src_subject_code, 'M719' subject_code, 'math' language, 'Finds various representative values for simple data from her/his daily life contexts like mean, median and mode' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_12 as state_avg, India_MA_psub3_12 as national_avg, 'State_MA_psub3_12' src_subject_code, 'M721' subject_code, 'math' language, 'Interprets data using bar graph' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_13 as state_avg, India_MA_psub3_13 as national_avg, 'State_MA_psub3_13' src_subject_code, 'M801' subject_code, 'math' language, 'Generalizes properties of addition, subtraction, multiplication and division of rational numbers through patterns' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_14 as state_avg, India_MA_psub3_14 as national_avg, 'State_MA_psub3_14' src_subject_code, 'M802' subject_code, 'math' language, 'Finds rational numbers between two given rational numbers' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_15 as state_avg, India_MA_psub3_15 as national_avg, 'State_MA_psub3_15' src_subject_code, 'M803' subject_code, 'math' language, 'Proves divisibility rules of 2, 3,4, 5, 6, 9 and 11' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_16 as state_avg, India_MA_psub3_16 as national_avg, 'State_MA_psub3_16' src_subject_code, 'M804' subject_code, 'math' language, 'Finds squares,cubes,square roots and cube roots of numbers using different methods' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_17 as state_avg, India_MA_psub3_17 as national_avg, 'State_MA_psub3_17' src_subject_code, 'M808' subject_code, 'math' language, 'uses various algebric identities in solving problem of daily life.' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_18 as state_avg, India_MA_psub3_18 as national_avg, 'State_MA_psub3_18' src_subject_code, 'M812' subject_code, 'math' language, 'Verifies properties of parallelogram and establishes the relationship between them through reasoning' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_19 as state_avg, India_MA_psub3_19 as national_avg, 'State_MA_psub3_19' src_subject_code, 'M818' subject_code, 'math' language, 'Verifies properties of parallelogram and establishes the relationship between them through reasoning' description
        from grade8statetable
        union all
        select id, state_code, State_MA_psub3_20 as state_avg, India_MA_psub3_20 as national_avg, 'State_MA_psub3_20' src_subject_code, 'M819' subject_code, 'math' language, 'Draws and interprets bar charts and pie charts' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_1 as state_avg, India_SC_psub3_1 as national_avg, 'State_SC_psub3_1' src_subject_code, 'SCI703' subject_code, 'sci' language, 'Classifies materials and organisms based on properties/characteristics' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_2 as state_avg, India_SC_psub3_2 as national_avg, 'State_SC_psub3_2' src_subject_code, 'SCI704' subject_code, 'sci' language, 'Conducts simple investigation to seek answers to queries' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_3 as state_avg, India_SC_psub3_3 as national_avg, 'State_SC_psub3_3' src_subject_code, 'SCI705' subject_code, 'sci' language, 'Relates processes and phenomenon with causes' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_4 as state_avg, India_SC_psub3_4 as national_avg, 'State_SC_psub3_4' src_subject_code, 'SCI708' subject_code, 'sci' language, 'Measures and calculates e.g.. temperature; pulse rate; speed of moving objects; time period of a simple pendulum, etc.' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_5 as state_avg, India_SC_psub3_5 as national_avg, 'State_SC_psub3_5' src_subject_code, 'SCI710' subject_code, 'sci' language, 'Plots and interprets graphs' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_6 as state_avg, India_SC_psub3_6 as national_avg, 'State_SC_psub3_6' src_subject_code, 'SCI711' subject_code, 'sci' language, 'Constructs models using materials from surroundings and explains their working' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_7 as state_avg, India_SC_psub3_7 as national_avg, 'State_SC_psub3_7' src_subject_code, 'SCI801' subject_code, 'sci' language, 'Differentiates materials, organism and processes' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_8 as state_avg, India_SC_psub3_8 as national_avg, 'State_SC_psub3_8' src_subject_code, 'SCI804' subject_code, 'sci' language, 'Relates processes and phenomenon with causes' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_9 as state_avg, India_SC_psub3_9 as national_avg, 'State_SC_psub3_9' src_subject_code, 'SCI805' subject_code, 'sci' language, 'Explains processes and phenomenon' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_10 as state_avg, India_SC_psub3_10 as national_avg, 'State_SC_psub3_10' src_subject_code, 'SCI807' subject_code, 'sci' language, 'Measures angles of incidence and reflection, etc.' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_11 as state_avg, India_SC_psub3_11 as national_avg, 'State_SC_psub3_11' src_subject_code, 'SCI811' subject_code, 'sci' language, 'Applies learning of scientific concepts in day-to-day life' description
        from grade8statetable
        union all
        select id, state_code, State_SC_psub3_12 as state_avg, India_SC_psub3_12 as national_avg, 'State_SC_psub3_12' src_subject_code, 'SCI813' subject_code, 'sci' language, 'Makes efforts to protect environment' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_1 as state_avg, India_SS_psub3_1 as national_avg, 'State_SS_psub3_1' src_subject_code, 'SST605' subject_code, 'sst' language, 'Identifies latitudes and longitudes, e.g., poles, equator, tropics, States /Ws of India and other neighboring countries on globe and the world map' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_2 as state_avg, India_SS_psub3_2 as national_avg, 'State_SS_psub3_2' src_subject_code, 'SST610' subject_code, 'sst' language, 'Locates important historical sites, places on an outline map of India.' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_3 as state_avg, India_SS_psub3_3 as national_avg, 'State_SS_psub3_3' src_subject_code, 'SST625' subject_code, 'sst' language, 'Describes the functioning of rural and urban local government bodies in sectors like health and education' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_4 as state_avg, India_SS_psub3_4 as national_avg, 'State_SS_psub3_4' src_subject_code, 'SST703' subject_code, 'sst' language, 'Explains preventive actions to be undertaken in the event of disasters' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_5 as state_avg, India_SS_psub3_5 as national_avg, 'State_SS_psub3_5' src_subject_code, 'SST704' subject_code, 'sst' language, 'Describes formation of landforms due to various factors' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_6 as state_avg, India_SS_psub3_6 as national_avg, 'State_SS_psub3_6' src_subject_code, 'SST722' subject_code, 'sst' language, 'Explains the significance of equality in democracy' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_7 as state_avg, India_SS_psub3_7 as national_avg, 'State_SS_psub3_7' src_subject_code, 'SST726' subject_code, 'sst' language, 'Describes the process of election to the legislative assembly' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_8 as state_avg, India_SS_psub3_8 as national_avg, 'State_SS_psub3_8' src_subject_code, 'SST731' subject_code, 'sst' language, 'Explains the functioning of media with appropriate examples from newspapers' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_9 as state_avg, India_SS_psub3_9 as national_avg, 'State_SS_psub3_9' src_subject_code, 'SST733' subject_code, 'sst' language, 'Differentiates between different kinds of markets' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_10 as state_avg, India_SS_psub3_10 as national_avg, 'State_SS_psub3_10' src_subject_code, 'SST734' subject_code, 'sst' language, 'Traces how goods travel through various market places' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_11 as state_avg, India_SS_psub3_11 as national_avg, 'State_SS_psub3_11' src_subject_code, 'SST802' subject_code, 'sst' language, 'Describes major crops, types of farming and agricultural practices in her/his own areaistate' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_12 as state_avg, India_SS_psub3_12 as national_avg, 'State_SS_psub3_12' src_subject_code, 'SST805' subject_code, 'sst' language, 'Locates distribution of important minerals e.g. coal and mineral oil on the world map' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_13 as state_avg, India_SS_psub3_13 as national_avg, 'State_SS_psub3_13' src_subject_code, 'SST807' subject_code, 'sst' language, 'Justifies judicious use of natural resources' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_14 as state_avg, India_SS_psub3_14 as national_avg, 'State_SS_psub3_14' src_subject_code, 'SST809' subject_code, 'sst' language, 'Draws interrelationship between types of farming and development in different regions of the world' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_15 as state_avg, India_SS_psub3_15 as national_avg, 'State_SS_psub3_15' src_subject_code, 'SST810' subject_code, 'sst' language, 'Distinguishes the modern period from the medieval and the ancient periods through the use of sources' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_16 as state_avg, India_SS_psub3_16 as national_avg, 'State_SS_psub3_16' src_subject_code, 'SST815' subject_code, 'sst' language, 'Explains the origin, nature and spread of the revolt of 1857 and the lessons learned from it.' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_17 as state_avg, India_SS_psub3_17 as national_avg, 'State_SS_psub3_17' src_subject_code, 'SST816' subject_code, 'sst' language, 'Analyses the decline of pre-existing urban centers and handicraft industries and the development of new urban centers and industries in India during the colonial period' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_18 as state_avg, India_SS_psub3_18 as national_avg, 'State_SS_psub3_18' src_subject_code, 'SST818' subject_code, 'sst' language, 'Analyses the issues related to caste, women, widow remarriage, child marriage, social reforms and the laws and policies of colonial administration towards these issues' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_19 as state_avg, India_SS_psub3_19 as national_avg, 'State_SS_psub3_19' src_subject_code, 'SST823' subject_code, 'sst' language, 'Applies the knowledge of the Fundamental Rights to find out about their violation. protection and promotion in a given situation' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_20 as state_avg, India_SS_psub3_20 as national_avg, 'State_SS_psub3_20' src_subject_code, 'SST827' subject_code, 'sst' language, 'Describes the process of making a taw. (e.g. Domestic Violence Act, RTI Act, RTE Act)' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_21 as state_avg, India_SS_psub3_21 as national_avg, 'State_SS_psub3_21' src_subject_code, 'SST831' subject_code, 'sst' language, 'Identifies the role of Government in providing public facilities such as water, sanitation, road, electricity etc, and recognizes their availability' description
        from grade8statetable
        union all
        select id, state_code, State_SS_psub3_22 as state_avg, India_SS_psub3_22 as national_avg, 'State_SS_psub3_22' src_subject_code, 'SST833' subject_code, 'sst' language, 'Draws bar diagram to show population of different countries/India/states' description
        from grade8statetable";

        return $query;

    }

    //Query For LO SRC data Subject Wise Grade 10
    public function GetAllStateDataSubjectCodeG10()
    {
        $query = "select id, state_code, State_EN_psub3_1 as state_avg, India_EN_psub3_1 as national_avg, 'State_EN_psub3_1' src_subject_code, 'E1007' subject_code, 'eng' language, 'Reads, comprehends and responds to complex texts independently.' description
        from grade10statetable
        union all
        select id, state_code, State_LA_psub3_1 as state_avg, India_LA_psub3_1 as national_avg, 'State_LA_psub3_1' src_subject_code, 'MIL1011' subject_code, 'mil' language, 'पाठ्यवस्तु में शामिल रचनाओं के अतिरिक्‍त अन्य कविता, कहानी,एकांकी को पढ़ते-लिखते और मंचन करते हैं।' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_1 as state_avg, India_MA_psub3_1 as national_avg, 'State_MA_psub3_1' src_subject_code, 'M1001' subject_code, 'math' language, 'Generalises properties of numbers and relations among them studied earlier to evolve results, such as, Euclid’s division algorithm, Fundamental Theorem of Arithmetic and applies them to solve problems related to real life contexts.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_2 as state_avg, India_MA_psub3_2 as national_avg, 'State_MA_psub3_2' src_subject_code, 'M1002' subject_code, 'math' language, 'Develops a relationship between algebraic and graphical methods of finding the zeroes of a polynomial.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_3 as state_avg, India_MA_psub3_3 as national_avg, 'State_MA_psub3_3' src_subject_code, 'M1003' subject_code, 'math' language, 'Finds solutions of pairs of linear equations in two variables using graphical and different algebraic methods.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_4 as state_avg, India_MA_psub3_4 as national_avg, 'State_MA_psub3_4' src_subject_code, 'M1004' subject_code, 'math' language, 'Demonstrates strategies of finding roots and determining the nature of roots of a quadratic equation.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_5 as state_avg, India_MA_psub3_5 as national_avg, 'State_MA_psub3_5' src_subject_code, 'M1005' subject_code, 'math' language, 'Develops strategies to apply the concept of A.P. to daily life situations. Works out ways to differentiate between congruent and similar figures.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_6 as state_avg, India_MA_psub3_6 as national_avg, 'State_MA_psub3_6' src_subject_code, 'M1006' subject_code, 'math' language, 'Establishes properties for similarity of two triangles logically using different geometric criteria established earlier such as, Basic Proportionality Theorem, etc.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_7 as state_avg, India_MA_psub3_7 as national_avg, 'State_MA_psub3_7' src_subject_code, 'M1007' subject_code, 'math' language, 'Derives formulae to establish relations for geometrical shapes in the context of a coordinate plane, such as, finding the distance between two given points, to determine the coordinates of a point between any two given points, to find the area of a triangle
        etc.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_8 as state_avg, India_MA_psub3_8 as national_avg, 'State_MA_psub3_8' src_subject_code, 'M1008' subject_code, 'math' language, 'Determines all trigonometric ratios with respect to a given acute angle (of a right triangle) and uses them in solving problems in daily life contexts like finding heights of different structures or distance from them.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_9 as state_avg, India_MA_psub3_9 as national_avg, 'State_MA_psub3_9' src_subject_code, 'M1009' subject_code, 'math' language, 'Derives proofs of theorems related to the tangents of circles.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_10 as state_avg, India_MA_psub3_10 as national_avg, 'State_MA_psub3_10' src_subject_code, 'M1010' subject_code, 'math' language, 'Examines the steps of geometrical constructions and reason out each step' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_11 as state_avg, India_MA_psub3_11 as national_avg, 'State_MA_psub3_11' src_subject_code, 'M1011' subject_code, 'math' language, 'Finds surface areas and volumes of objects in the surroundings by visualising them as a combination of different solids like cylinder and a cone, cylinder and a hemisphere, combination of different cubes, etc.' description
        from grade10statetable
        union all
        select id, state_code, State_MA_psub3_12 as state_avg, India_MA_psub3_12 as national_avg, 'State_MA_psub3_12' src_subject_code, 'M1012' subject_code, 'math' language, 'Calculates mean, median and mode for different sets of data related with real life contexts.' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_1 as state_avg, India_SC_psub3_1 as national_avg, 'State_SC_psub3_1' src_subject_code, 'SCI1001' subject_code, 'sci' language, 'Differentiates materials, objects, organisms, phenomena, and processes, based on, properties and characteristics.' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_2 as state_avg, India_SC_psub3_2 as national_avg, 'State_SC_psub3_2' src_subject_code, 'SCI1002' subject_code, 'sci' language, 'Classifies materials, objects, organisms, phenomena, and processes, based on properties and characteristics.' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_3 as state_avg, India_SC_psub3_3 as national_avg, 'State_SC_psub3_3' src_subject_code, 'SCI1003' subject_code, 'sci' language, 'Relates processes and phenomena with causes and effects' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_4 as state_avg, India_SC_psub3_4 as national_avg, 'State_SC_psub3_4' src_subject_code, 'SCI1004' subject_code, 'sci' language, 'Explains processes and phenomena.' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_5 as state_avg, India_SC_psub3_5 as national_avg, 'State_SC_psub3_5' src_subject_code, 'SCI1005' subject_code, 'sci' language, 'Analyses and interprets data, graphs, and figures' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_6 as state_avg, India_SC_psub3_6 as national_avg, 'State_SC_psub3_6' src_subject_code, 'SCI1006' subject_code, 'sci' language, 'Calculates using the data given' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_7 as state_avg, India_SC_psub3_7 as national_avg, 'State_SC_psub3_7' src_subject_code, 'SCI1007' subject_code, 'sci' language, 'Uses scientific conventions to represent units of various quantities, symbols, formulae, and equations.' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_8 as state_avg, India_SC_psub3_8 as national_avg, 'State_SC_psub3_8' src_subject_code, 'SCI1008' subject_code, 'sci' language, 'Applies learning to hypothetical situations' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_9 as state_avg, India_SC_psub3_9 as national_avg, 'State_SC_psub3_9' src_subject_code, 'SCI1009' subject_code, 'sci' language, 'Applies scientific concepts in daily life and solving problems' description
        from grade10statetable
        union all
        select id, state_code, State_SC_psub3_10 as state_avg, India_SC_psub3_10 as national_avg, 'State_SC_psub3_10' src_subject_code, 'SCI1010' subject_code, 'sci' language, 'Derives formulae, equations, and laws' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_1 as state_avg, India_SS_psub3_1 as national_avg, 'State_SS_psub3_1' src_subject_code, 'SST1001' subject_code, 'sst' language, 'Recognises and retrieves facts, figures, and narrate processes.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_2 as state_avg, India_SS_psub3_2 as national_avg, 'State_SS_psub3_2' src_subject_code, 'SST1002' subject_code, 'sst' language, 'Classifies and compares events, facts, data, and figures.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_3 as state_avg, India_SS_psub3_3 as national_avg, 'State_SS_psub3_3' src_subject_code, 'SST1003' subject_code, 'sst' language, 'Explains cause and effect relationship between phenomena, events, and their occurrence.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_4 as state_avg, India_SS_psub3_4 as national_avg, 'State_SS_psub3_4' src_subject_code, 'SST1004' subject_code, 'sst' language, 'Analyses and evaluates information.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_5 as state_avg, India_SS_psub3_5 as national_avg, 'State_SS_psub3_5' src_subject_code, 'SST1005' subject_code, 'sst' language, 'Interprets.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_6 as state_avg, India_SS_psub3_6 as national_avg, 'State_SS_psub3_6' src_subject_code, 'SST1006' subject_code, 'sst' language, 'Draws interlinkages within Social Science.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_7 as state_avg, India_SS_psub3_7 as national_avg, 'State_SS_psub3_7' src_subject_code, 'SST1007' subject_code, 'sst' language, 'Identifies assumptions, biases, prejudices, or stereotypes about various aspects.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_8 as state_avg, India_SS_psub3_8 as national_avg, 'State_SS_psub3_8' src_subject_code, 'SST1008' subject_code, 'sst' language, 'Demonstrates inquisitiveness, enquiry.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_9 as state_avg, India_SS_psub3_9 as national_avg, 'State_SS_psub3_9' src_subject_code, 'SST1009' subject_code, 'sst' language, 'Constructs views, arguments, and ideas on the basis of collected or given information.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_10 as state_avg, India_SS_psub3_10 as national_avg, 'State_SS_psub3_10' src_subject_code, 'SST1010' subject_code, 'sst' language, 'Extrapolates and predicts events and phenomena.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_11 as state_avg, India_SS_psub3_11 as national_avg, 'State_SS_psub3_11' src_subject_code, 'SST1011' subject_code, 'sst' language, 'Illustrates decision making/problem solving skills.' description
        from grade10statetable
        union all
        select id, state_code, State_SS_psub3_12 as state_avg, India_SS_psub3_12 as national_avg, 'State_SS_psub3_12' src_subject_code, 'SST1012' subject_code, 'sst' language, 'Shows sensitivity and appreciation skills.' description
        from grade10statetable";

        return $query;

    }
}
