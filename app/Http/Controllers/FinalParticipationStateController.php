<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;
use App\Models\AllGradeStateParticipationTBL;
use App\Models\StateGradeLevelPerformance;
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
        $grade10PrcoessData = $this->grade10PerformanceData();
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
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_la_boys_pct)?$statelevel->state_la_boys_pct:'0',"girls"=>isset($statelevel->state_la_girls_pct)?$statelevel->state_la_girls_pct:'0','trans_gender'=>isset($statelevel->state_la_trans_pct)?$statelevel->state_la_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_la_urban_pct)?$statelevel->state_la_urban_pct:'0',"rural"=>isset($statelevel->state_la_rural_pct)?$statelevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_la_rural_pl12)?$statelevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_la_urban_pl12)?$statelevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_la_rural_pl34)?$statelevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_la_urban_pl34)?$statelevel->state_la_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_la_govt_pct)?$statelevel->state_la_govt_pct:'0',"govt_aided"=>isset($statelevel->state_la_govtaid_pct)?$statelevel->state_la_govtaid_pct:'0',"private"=>isset($statelevel->state_la_private_pct)?$statelevel->state_la_private_pct:'0',"central_govt"=>isset($statelevel->state_la_centgovt_pct)?$statelevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_la_govt_pl12)?$statelevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_la_govtaid_pl12)?$statelevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_la_govt_pl34)?$statelevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_la_govtaid_pl34)?$statelevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_la_private_pl12)?$statelevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_la_centgovt_pl12)?$statelevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_la_private_pl34)?$statelevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_la_centgovt_pl34)?$statelevel->state_la_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_la_sc_pct)?$statelevel->state_la_sc_pct:'0',"obc"=>isset($statelevel->state_la_obc_pct)?$statelevel->state_la_obc_pct:'0',"st"=>isset($statelevel->state_la_st_pct)?$statelevel->state_la_st_pct:'0',"general"=>isset($statelevel->state_la_general_pct)?$statelevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_la_sc_pl34)?$statelevel->state_la_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_la_obc_pl12)?$statelevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_la_sc_pl12)?$statelevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_la_obc_pl34)?$statelevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_la_st_pl12)?$statelevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_la_general_pl12)?$statelevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_la_st_pl34)?$statelevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_la_general_pl34)?$statelevel->state_la_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_la_pl1)?$statelevel->state_la_pl1:'0',"basic"=>isset($statelevel->state_la_pl2)?$statelevel->state_la_pl2:'0',"proficient"=>isset($statelevel->state_la_pl3)?$statelevel->state_la_pl3:'0',"advanced"=>isset($statelevel->state_la_pl4)?$statelevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );
            
            $newstateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ma_pct)?$statelevel->state_ma_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ma_boys_pct)?$statelevel->state_ma_boys_pct:'0',"girls"=>isset($statelevel->state_ma_girls_pct)?$statelevel->state_ma_girls_pct:'0','trans_gender'=>isset($statelevel->state_ma_trans_pct)?$statelevel->state_ma_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ma_urban_pct)?$statelevel->state_ma_urban_pct:'0',"rural"=>isset($statelevel->state_ma_rural_pct)?$statelevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ma_rural_pl12)?$statelevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ma_urban_pl12)?$statelevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ma_rural_pl34)?$statelevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ma_urban_pl34)?$statelevel->state_ma_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ma_govt_pct)?$statelevel->state_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ma_govtaid_pct)?$statelevel->state_ma_govtaid_pct:'0',"private"=>isset($statelevel->state_ma_private_pct)?$statelevel->state_ma_private_pct:'0',"central_govt"=>isset($statelevel->state_ma_centgovt_pct)?$statelevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ma_govt_pl12)?$statelevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ma_govtaid_pl12)?$statelevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ma_govt_pl34)?$statelevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ma_govtaid_pl34)?$statelevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ma_private_pl12)?$statelevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ma_centgovt_pl12)?$statelevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ma_private_pl34)?$statelevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ma_centgovt_pl34)?$statelevel->state_ma_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ma_sc_pct)?$statelevel->state_ma_sc_pct:'0',"obc"=>isset($statelevel->state_ma_obc_pct)?$statelevel->state_ma_obc_pct:'0',"st"=>isset($statelevel->state_ma_st_pct)?$statelevel->state_ma_st_pct:'0',"general"=>isset($statelevel->state_ma_general_pct)?$statelevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ma_sc_pl34)?$statelevel->state_ma_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_ma_obc_pl12)?$statelevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ma_sc_pl12)?$statelevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ma_obc_pl34)?$statelevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ma_st_pl12)?$statelevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ma_general_pl12)?$statelevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ma_st_pl34)?$statelevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ma_general_pl34)?$statelevel->state_ma_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ma_pl1)?$statelevel->state_ma_pl1:'0',"basic"=>isset($statelevel->state_ma_pl2)?$statelevel->state_ma_pl2:'0',"proficient"=>isset($statelevel->state_ma_pl3)?$statelevel->state_ma_pl3:'0',"advanced"=>isset($statelevel->state_ma_pl4)?$statelevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );
            
            $newstateArray['evs'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ev_pct)?$statelevel->state_ev_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ev_boys_pct)?$statelevel->state_ev_boys_pct:'0',"girls"=>isset($statelevel->state_ev_girls_pct)?$statelevel->state_ev_girls_pct:'0','trans_gender'=>isset($statelevel->state_ev_trans_pct)?$statelevel->state_ev_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ev_urban_pct)?$statelevel->state_ev_urban_pct:'0',"rural"=>isset($statelevel->state_ev_rural_pct)?$statelevel->state_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ev_rural_pl12)?$statelevel->state_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ev_urban_pl12)?$statelevel->state_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ev_rural_pl34)?$statelevel->state_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ev_urban_pl34)?$statelevel->state_ev_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ev_govt_pct)?$statelevel->state_ev_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ev_govtaid_pct)?$statelevel->state_ev_govtaid_pct:'0',"private"=>isset($statelevel->state_ev_private_pct)?$statelevel->state_ev_private_pct:'0',"central_govt"=>isset($statelevel->state_ev_centgovt_pct)?$statelevel->state_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ev_govt_pl12)?$statelevel->state_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ev_govtaid_pl12)?$statelevel->state_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ev_govt_pl34)?$statelevel->state_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ev_govtaid_pl34)?$statelevel->state_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ev_private_pl12)?$statelevel->state_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ev_centgovt_pl12)?$statelevel->state_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ev_private_pl34)?$statelevel->state_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ev_centgovt_pl34)?$statelevel->state_ev_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ev_sc_pct)?$statelevel->state_ev_sc_pct:'0',"obc"=>isset($statelevel->state_ev_obc_pct)?$statelevel->state_ev_obc_pct:'0',"st"=>isset($statelevel->state_ev_st_pct)?$statelevel->state_ev_st_pct:'0',"general"=>isset($statelevel->state_ev_general_pct)?$statelevel->state_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ev_sc_pl34)?$statelevel->state_ev_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_ev_obc_pl12)?$statelevel->state_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ev_sc_pl12)?$statelevel->state_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ev_obc_pl34)?$statelevel->state_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ev_st_pl12)?$statelevel->state_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ev_general_pl12)?$statelevel->state_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ev_st_pl34)?$statelevel->state_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ev_general_pl34)?$statelevel->state_ev_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ev_pl1)?$statelevel->state_ev_pl1:'0',"basic"=>isset($statelevel->state_ev_pl2)?$statelevel->state_ev_pl2:'0',"proficient"=>isset($statelevel->state_ev_pl3)?$statelevel->state_ev_pl3:'0',"advanced"=>isset($statelevel->state_ev_pl4)?$statelevel->state_ev_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
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
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_la_boys_pct)?$statelevel->state_la_boys_pct:'0',"girls"=>isset($statelevel->state_la_girls_pct)?$statelevel->state_la_girls_pct:'0','trans_gender'=>isset($statelevel->state_la_trans_pct)?$statelevel->state_la_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_la_urban_pct)?$statelevel->state_la_urban_pct:'0',"rural"=>isset($statelevel->state_la_rural_pct)?$statelevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_la_rural_pl12)?$statelevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_la_urban_pl12)?$statelevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_la_rural_pl34)?$statelevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_la_urban_pl34)?$statelevel->state_la_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_la_govt_pct)?$statelevel->state_la_govt_pct:'0',"govt_aided"=>isset($statelevel->state_la_govtaid_pct)?$statelevel->state_la_govtaid_pct:'0',"private"=>isset($statelevel->state_la_private_pct)?$statelevel->state_la_private_pct:'0',"central_govt"=>isset($statelevel->state_la_centgovt_pct)?$statelevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_la_govt_pl12)?$statelevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_la_govtaid_pl12)?$statelevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_la_govt_pl34)?$statelevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_la_govtaid_pl34)?$statelevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_la_private_pl12)?$statelevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_la_centgovt_pl12)?$statelevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_la_private_pl34)?$statelevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_la_centgovt_pl34)?$statelevel->state_la_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_la_sc_pct)?$statelevel->state_la_sc_pct:'0',"obc"=>isset($statelevel->state_la_obc_pct)?$statelevel->state_la_obc_pct:'0',"st"=>isset($statelevel->state_la_st_pct)?$statelevel->state_la_st_pct:'0',"general"=>isset($statelevel->state_la_general_pct)?$statelevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_la_sc_pl34)?$statelevel->state_la_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_la_obc_pl12)?$statelevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_la_sc_pl12)?$statelevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_la_obc_pl34)?$statelevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_la_st_pl12)?$statelevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_la_general_pl12)?$statelevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_la_st_pl34)?$statelevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_la_general_pl34)?$statelevel->state_la_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_la_pl1)?$statelevel->state_la_pl1:'0',"basic"=>isset($statelevel->state_la_pl2)?$statelevel->state_la_pl2:'0',"proficient"=>isset($statelevel->state_la_pl3)?$statelevel->state_la_pl3:'0',"advanced"=>isset($statelevel->state_la_pl4)?$statelevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );
            
            $newstateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ma_pct)?$statelevel->state_ma_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ma_boys_pct)?$statelevel->state_ma_boys_pct:'0',"girls"=>isset($statelevel->state_ma_girls_pct)?$statelevel->state_ma_girls_pct:'0','trans_gender'=>isset($statelevel->state_ma_trans_pct)?$statelevel->state_ma_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ma_urban_pct)?$statelevel->state_ma_urban_pct:'0',"rural"=>isset($statelevel->state_ma_rural_pct)?$statelevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ma_rural_pl12)?$statelevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ma_urban_pl12)?$statelevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ma_rural_pl34)?$statelevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ma_urban_pl34)?$statelevel->state_ma_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ma_govt_pct)?$statelevel->state_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ma_govtaid_pct)?$statelevel->state_ma_govtaid_pct:'0',"private"=>isset($statelevel->state_ma_private_pct)?$statelevel->state_ma_private_pct:'0',"central_govt"=>isset($statelevel->state_ma_centgovt_pct)?$statelevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ma_govt_pl12)?$statelevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ma_govtaid_pl12)?$statelevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ma_govt_pl34)?$statelevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ma_govtaid_pl34)?$statelevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ma_private_pl12)?$statelevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ma_centgovt_pl12)?$statelevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ma_private_pl34)?$statelevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ma_centgovt_pl34)?$statelevel->state_ma_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ma_sc_pct)?$statelevel->state_ma_sc_pct:'0',"obc"=>isset($statelevel->state_ma_obc_pct)?$statelevel->state_ma_obc_pct:'0',"st"=>isset($statelevel->state_ma_st_pct)?$statelevel->state_ma_st_pct:'0',"general"=>isset($statelevel->state_ma_general_pct)?$statelevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ma_sc_pl34)?$statelevel->state_ma_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_ma_obc_pl12)?$statelevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ma_sc_pl12)?$statelevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ma_obc_pl34)?$statelevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ma_st_pl12)?$statelevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ma_general_pl12)?$statelevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ma_st_pl34)?$statelevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ma_general_pl34)?$statelevel->state_ma_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ma_pl1)?$statelevel->state_ma_pl1:'0',"basic"=>isset($statelevel->state_ma_pl2)?$statelevel->state_ma_pl2:'0',"proficient"=>isset($statelevel->state_ma_pl3)?$statelevel->state_ma_pl3:'0',"advanced"=>isset($statelevel->state_ma_pl4)?$statelevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );
            
            $newstateArray['evs'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ev_pct)?$statelevel->state_ev_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ev_boys_pct)?$statelevel->state_ev_boys_pct:'0',"girls"=>isset($statelevel->state_ev_girls_pct)?$statelevel->state_ev_girls_pct:'0','trans_gender'=>isset($statelevel->state_ev_trans_pct)?$statelevel->state_ev_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ev_urban_pct)?$statelevel->state_ev_urban_pct:'0',"rural"=>isset($statelevel->state_ev_rural_pct)?$statelevel->state_ev_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ev_rural_pl12)?$statelevel->state_ev_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ev_urban_pl12)?$statelevel->state_ev_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ev_rural_pl34)?$statelevel->state_ev_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ev_urban_pl34)?$statelevel->state_ev_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ev_govt_pct)?$statelevel->state_ev_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ev_govtaid_pct)?$statelevel->state_ev_govtaid_pct:'0',"private"=>isset($statelevel->state_ev_private_pct)?$statelevel->state_ev_private_pct:'0',"central_govt"=>isset($statelevel->state_ev_centgovt_pct)?$statelevel->state_ev_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ev_govt_pl12)?$statelevel->state_ev_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ev_govtaid_pl12)?$statelevel->state_ev_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ev_govt_pl34)?$statelevel->state_ev_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ev_govtaid_pl34)?$statelevel->state_ev_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ev_private_pl12)?$statelevel->state_ev_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ev_centgovt_pl12)?$statelevel->state_ev_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ev_private_pl34)?$statelevel->state_ev_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ev_centgovt_pl34)?$statelevel->state_ev_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ev_sc_pct)?$statelevel->state_ev_sc_pct:'0',"obc"=>isset($statelevel->state_ev_obc_pct)?$statelevel->state_ev_obc_pct:'0',"st"=>isset($statelevel->state_ev_st_pct)?$statelevel->state_ev_st_pct:'0',"general"=>isset($statelevel->state_ev_general_pct)?$statelevel->state_ev_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ev_sc_pl34)?$statelevel->state_ev_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_ev_obc_pl12)?$statelevel->state_ev_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ev_sc_pl12)?$statelevel->state_ev_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ev_obc_pl34)?$statelevel->state_ev_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ev_st_pl12)?$statelevel->state_ev_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ev_general_pl12)?$statelevel->state_ev_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ev_st_pl34)?$statelevel->state_ev_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ev_general_pl34)?$statelevel->state_ev_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ev_pl1)?$statelevel->state_ev_pl1:'0',"basic"=>isset($statelevel->state_ev_pl2)?$statelevel->state_ev_pl2:'0',"proficient"=>isset($statelevel->state_ev_pl3)?$statelevel->state_ev_pl3:'0',"advanced"=>isset($statelevel->state_ev_pl4)?$statelevel->state_ev_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
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
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_la_boys_pct)?$statelevel->state_la_boys_pct:'0',"girls"=>isset($statelevel->state_la_girls_pct)?$statelevel->state_la_girls_pct:'0','trans_gender'=>isset($statelevel->state_la_trans_pct)?$statelevel->state_la_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_la_urban_pct)?$statelevel->state_la_urban_pct:'0',"rural"=>isset($statelevel->state_la_rural_pct)?$statelevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_la_rural_pl12)?$statelevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_la_urban_pl12)?$statelevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_la_rural_pl34)?$statelevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_la_urban_pl34)?$statelevel->state_la_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_la_govt_pct)?$statelevel->state_la_govt_pct:'0',"govt_aided"=>isset($statelevel->state_la_govtaid_pct)?$statelevel->state_la_govtaid_pct:'0',"private"=>isset($statelevel->state_la_private_pct)?$statelevel->state_la_private_pct:'0',"central_govt"=>isset($statelevel->state_la_centgovt_pct)?$statelevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_la_govt_pl12)?$statelevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_la_govtaid_pl12)?$statelevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_la_govt_pl34)?$statelevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_la_govtaid_pl34)?$statelevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_la_private_pl12)?$statelevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_la_centgovt_pl12)?$statelevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_la_private_pl34)?$statelevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_la_centgovt_pl34)?$statelevel->state_la_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_la_sc_pct)?$statelevel->state_la_sc_pct:'0',"obc"=>isset($statelevel->state_la_obc_pct)?$statelevel->state_la_obc_pct:'0',"st"=>isset($statelevel->state_la_st_pct)?$statelevel->state_la_st_pct:'0',"general"=>isset($statelevel->state_la_general_pct)?$statelevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_la_sc_pl34)?$statelevel->state_la_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_la_obc_pl12)?$statelevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_la_sc_pl12)?$statelevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_la_obc_pl34)?$statelevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_la_st_pl12)?$statelevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_la_general_pl12)?$statelevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_la_st_pl34)?$statelevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_la_general_pl34)?$statelevel->state_la_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_la_pl1)?$statelevel->state_la_pl1:'0',"basic"=>isset($statelevel->state_la_pl2)?$statelevel->state_la_pl2:'0',"proficient"=>isset($statelevel->state_la_pl3)?$statelevel->state_la_pl3:'0',"advanced"=>isset($statelevel->state_la_pl4)?$statelevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );
            
            $newstateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ma_pct)?$statelevel->state_ma_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ma_boys_pct)?$statelevel->state_ma_boys_pct:'0',"girls"=>isset($statelevel->state_ma_girls_pct)?$statelevel->state_ma_girls_pct:'0','trans_gender'=>isset($statelevel->state_ma_trans_pct)?$statelevel->state_ma_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ma_urban_pct)?$statelevel->state_ma_urban_pct:'0',"rural"=>isset($statelevel->state_ma_rural_pct)?$statelevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ma_rural_pl12)?$statelevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ma_urban_pl12)?$statelevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ma_rural_pl34)?$statelevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ma_urban_pl34)?$statelevel->state_ma_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ma_govt_pct)?$statelevel->state_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ma_govtaid_pct)?$statelevel->state_ma_govtaid_pct:'0',"private"=>isset($statelevel->state_ma_private_pct)?$statelevel->state_ma_private_pct:'0',"central_govt"=>isset($statelevel->state_ma_centgovt_pct)?$statelevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ma_govt_pl12)?$statelevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ma_govtaid_pl12)?$statelevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ma_govt_pl34)?$statelevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ma_govtaid_pl34)?$statelevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ma_private_pl12)?$statelevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ma_centgovt_pl12)?$statelevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ma_private_pl34)?$statelevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ma_centgovt_pl34)?$statelevel->state_ma_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ma_sc_pct)?$statelevel->state_ma_sc_pct:'0',"obc"=>isset($statelevel->state_ma_obc_pct)?$statelevel->state_ma_obc_pct:'0',"st"=>isset($statelevel->state_ma_st_pct)?$statelevel->state_ma_st_pct:'0',"general"=>isset($statelevel->state_ma_general_pct)?$statelevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ma_sc_pl34)?$statelevel->state_ma_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_ma_obc_pl12)?$statelevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ma_sc_pl12)?$statelevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ma_obc_pl34)?$statelevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ma_st_pl12)?$statelevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ma_general_pl12)?$statelevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ma_st_pl34)?$statelevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ma_general_pl34)?$statelevel->state_ma_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ma_pl1)?$statelevel->state_ma_pl1:'0',"basic"=>isset($statelevel->state_ma_pl2)?$statelevel->state_ma_pl2:'0',"proficient"=>isset($statelevel->state_ma_pl3)?$statelevel->state_ma_pl3:'0',"advanced"=>isset($statelevel->state_ma_pl4)?$statelevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );
            
            $newstateArray['sci'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_sc_pct)?$statelevel->state_sc_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_sc_boys_pct)?$statelevel->state_sc_boys_pct:'0',"girls"=>isset($statelevel->state_sc_girls_pct)?$statelevel->state_sc_girls_pct:'0','trans_gender'=>isset($statelevel->state_sc_trans_pct)?$statelevel->state_sc_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_sc_urban_pct)?$statelevel->state_sc_urban_pct:'0',"rural"=>isset($statelevel->state_sc_rural_pct)?$statelevel->state_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_sc_rural_pl12)?$statelevel->state_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_sc_urban_pl12)?$statelevel->state_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_sc_rural_pl34)?$statelevel->state_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_sc_urban_pl34)?$statelevel->state_sc_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_sc_govt_pct)?$statelevel->state_sc_govt_pct:'0',"govt_aided"=>isset($statelevel->state_sc_govtaid_pct)?$statelevel->state_sc_govtaid_pct:'0',"private"=>isset($statelevel->state_sc_private_pct)?$statelevel->state_sc_private_pct:'0',"central_govt"=>isset($statelevel->state_sc_centgovt_pct)?$statelevel->state_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_sc_govt_pl12)?$statelevel->state_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_sc_govtaid_pl12)?$statelevel->state_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_sc_govt_pl34)?$statelevel->state_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_sc_govtaid_pl34)?$statelevel->state_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_sc_private_pl12)?$statelevel->state_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_sc_centgovt_pl12)?$statelevel->state_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_sc_private_pl34)?$statelevel->state_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_sc_centgovt_pl34)?$statelevel->state_sc_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_sc_sc_pct)?$statelevel->state_sc_sc_pct:'0',"obc"=>isset($statelevel->state_sc_obc_pct)?$statelevel->state_sc_obc_pct:'0',"st"=>isset($statelevel->state_sc_st_pct)?$statelevel->state_sc_st_pct:'0',"general"=>isset($statelevel->state_sc_general_pct)?$statelevel->state_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_sc_sc_pl34)?$statelevel->state_sc_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_sc_obc_pl12)?$statelevel->state_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_sc_sc_pl12)?$statelevel->state_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_sc_obc_pl34)?$statelevel->state_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_sc_st_pl12)?$statelevel->state_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_sc_general_pl12)?$statelevel->state_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_sc_st_pl34)?$statelevel->state_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_sc_general_pl34)?$statelevel->state_sc_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_sc_pl1)?$statelevel->state_sc_pl1:'0',"basic"=>isset($statelevel->state_sc_pl2)?$statelevel->state_sc_pl2:'0',"proficient"=>isset($statelevel->state_sc_pl3)?$statelevel->state_sc_pl3:'0',"advanced"=>isset($statelevel->state_sc_pl4)?$statelevel->state_sc_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );

            $newstateArray['sst'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ss_pct)?$statelevel->state_ss_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ss_boys_pct)?$statelevel->state_ss_boys_pct:'0',"girls"=>isset($statelevel->state_ss_girls_pct)?$statelevel->state_ss_girls_pct:'0','trans_gender'=>isset($statelevel->state_ss_trans_pct)?$statelevel->state_ss_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ss_urban_pct)?$statelevel->state_ss_urban_pct:'0',"rural"=>isset($statelevel->state_ss_rural_pct)?$statelevel->state_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ss_rural_pl12)?$statelevel->state_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ss_urban_pl12)?$statelevel->state_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ss_rural_pl34)?$statelevel->state_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ss_urban_pl34)?$statelevel->state_ss_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ss_govt_pct)?$statelevel->state_ss_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ss_govtaid_pct)?$statelevel->state_ss_govtaid_pct:'0',"private"=>isset($statelevel->state_ss_private_pct)?$statelevel->state_ss_private_pct:'0',"central_govt"=>isset($statelevel->state_ss_centgovt_pct)?$statelevel->state_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ss_govt_pl12)?$statelevel->state_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ss_govtaid_pl12)?$statelevel->state_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ss_govt_pl34)?$statelevel->state_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ss_govtaid_pl34)?$statelevel->state_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ss_private_pl12)?$statelevel->state_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ss_centgovt_pl12)?$statelevel->state_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ss_private_pl34)?$statelevel->state_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ss_centgovt_pl34)?$statelevel->state_ss_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ss_sc_pct)?$statelevel->state_ss_sc_pct:'0',"obc"=>isset($statelevel->state_ss_obc_pct)?$statelevel->state_ss_obc_pct:'0',"st"=>isset($statelevel->state_ss_st_pct)?$statelevel->state_ss_st_pct:'0',"general"=>isset($statelevel->state_ss_general_pct)?$statelevel->state_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ss_sc_pl34)?$statelevel->state_ss_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_ss_obc_pl12)?$statelevel->state_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ss_sc_pl12)?$statelevel->state_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ss_obc_pl34)?$statelevel->state_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ss_st_pl12)?$statelevel->state_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ss_general_pl12)?$statelevel->state_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ss_st_pl34)?$statelevel->state_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ss_general_pl34)?$statelevel->state_ss_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ss_pl1)?$statelevel->state_ss_pl1:'0',"basic"=>isset($statelevel->state_ss_pl2)?$statelevel->state_ss_pl2:'0',"proficient"=>isset($statelevel->state_ss_pl3)?$statelevel->state_ss_pl3:'0',"advanced"=>isset($statelevel->state_ss_pl4)?$statelevel->state_ss_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
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
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ma_boys_pct)?$statelevel->state_ma_boys_pct:'0',"girls"=>isset($statelevel->state_ma_girls_pct)?$statelevel->state_ma_girls_pct:'0','trans_gender'=>isset($statelevel->state_ma_trans_pct)?$statelevel->state_ma_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ma_urban_pct)?$statelevel->state_ma_urban_pct:'0',"rural"=>isset($statelevel->state_ma_rural_pct)?$statelevel->state_ma_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ma_rural_pl12)?$statelevel->state_ma_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ma_urban_pl12)?$statelevel->state_ma_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ma_rural_pl34)?$statelevel->state_ma_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ma_urban_pl34)?$statelevel->state_ma_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ma_govt_pct)?$statelevel->state_ma_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ma_govtaid_pct)?$statelevel->state_ma_govtaid_pct:'0',"private"=>isset($statelevel->state_ma_private_pct)?$statelevel->state_ma_private_pct:'0',"central_govt"=>isset($statelevel->state_ma_centgovt_pct)?$statelevel->state_ma_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ma_govt_pl12)?$statelevel->state_ma_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ma_govtaid_pl12)?$statelevel->state_ma_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ma_govt_pl34)?$statelevel->state_ma_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ma_govtaid_pl34)?$statelevel->state_ma_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ma_private_pl12)?$statelevel->state_ma_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ma_centgovt_pl12)?$statelevel->state_ma_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ma_private_pl34)?$statelevel->state_ma_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ma_centgovt_pl34)?$statelevel->state_ma_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ma_sc_pct)?$statelevel->state_ma_sc_pct:'0',"obc"=>isset($statelevel->state_ma_obc_pct)?$statelevel->state_ma_obc_pct:'0',"st"=>isset($statelevel->state_ma_st_pct)?$statelevel->state_ma_st_pct:'0',"general"=>isset($statelevel->state_ma_general_pct)?$statelevel->state_ma_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ma_sc_pl34)?$statelevel->state_ma_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_ma_obc_pl12)?$statelevel->state_ma_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ma_sc_pl12)?$statelevel->state_ma_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ma_obc_pl34)?$statelevel->state_ma_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ma_st_pl12)?$statelevel->state_ma_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ma_general_pl12)?$statelevel->state_ma_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ma_st_pl34)?$statelevel->state_ma_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ma_general_pl34)?$statelevel->state_ma_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ma_pl1)?$statelevel->state_ma_pl1:'0',"basic"=>isset($statelevel->state_ma_pl2)?$statelevel->state_ma_pl2:'0',"proficient"=>isset($statelevel->state_ma_pl3)?$statelevel->state_ma_pl3:'0',"advanced"=>isset($statelevel->state_ma_pl4)?$statelevel->state_ma_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );
            
            $newstateArray['sci'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_sc_pct)?$statelevel->state_sc_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_sc_boys_pct)?$statelevel->state_sc_boys_pct:'0',"girls"=>isset($statelevel->state_sc_girls_pct)?$statelevel->state_sc_girls_pct:'0','trans_gender'=>isset($statelevel->state_sc_trans_pct)?$statelevel->state_sc_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_sc_urban_pct)?$statelevel->state_sc_urban_pct:'0',"rural"=>isset($statelevel->state_sc_rural_pct)?$statelevel->state_sc_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_sc_rural_pl12)?$statelevel->state_sc_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_sc_urban_pl12)?$statelevel->state_sc_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_sc_rural_pl34)?$statelevel->state_sc_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_sc_urban_pl34)?$statelevel->state_sc_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_sc_govt_pct)?$statelevel->state_sc_govt_pct:'0',"govt_aided"=>isset($statelevel->state_sc_govtaid_pct)?$statelevel->state_sc_govtaid_pct:'0',"private"=>isset($statelevel->state_sc_private_pct)?$statelevel->state_sc_private_pct:'0',"central_govt"=>isset($statelevel->state_sc_centgovt_pct)?$statelevel->state_sc_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_sc_govt_pl12)?$statelevel->state_sc_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_sc_govtaid_pl12)?$statelevel->state_sc_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_sc_govt_pl34)?$statelevel->state_sc_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_sc_govtaid_pl34)?$statelevel->state_sc_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_sc_private_pl12)?$statelevel->state_sc_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_sc_centgovt_pl12)?$statelevel->state_sc_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_sc_private_pl34)?$statelevel->state_sc_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_sc_centgovt_pl34)?$statelevel->state_sc_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_sc_sc_pct)?$statelevel->state_sc_sc_pct:'0',"obc"=>isset($statelevel->state_sc_obc_pct)?$statelevel->state_sc_obc_pct:'0',"st"=>isset($statelevel->state_sc_st_pct)?$statelevel->state_sc_st_pct:'0',"general"=>isset($statelevel->state_sc_general_pct)?$statelevel->state_sc_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_sc_sc_pl34)?$statelevel->state_sc_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_sc_obc_pl12)?$statelevel->state_sc_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_sc_sc_pl12)?$statelevel->state_sc_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_sc_obc_pl34)?$statelevel->state_sc_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_sc_st_pl12)?$statelevel->state_sc_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_sc_general_pl12)?$statelevel->state_sc_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_sc_st_pl34)?$statelevel->state_sc_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_sc_general_pl34)?$statelevel->state_sc_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_sc_pl1)?$statelevel->state_sc_pl1:'0',"basic"=>isset($statelevel->state_sc_pl2)?$statelevel->state_sc_pl2:'0',"proficient"=>isset($statelevel->state_sc_pl3)?$statelevel->state_sc_pl3:'0',"advanced"=>isset($statelevel->state_sc_pl4)?$statelevel->state_sc_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );

            $newstateArray['sst'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_ss_pct)?$statelevel->state_ss_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_ss_boys_pct)?$statelevel->state_ss_boys_pct:'0',"girls"=>isset($statelevel->state_ss_girls_pct)?$statelevel->state_ss_girls_pct:'0','trans_gender'=>isset($statelevel->state_ss_trans_pct)?$statelevel->state_ss_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_ss_urban_pct)?$statelevel->state_ss_urban_pct:'0',"rural"=>isset($statelevel->state_ss_rural_pct)?$statelevel->state_ss_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_ss_rural_pl12)?$statelevel->state_ss_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_ss_urban_pl12)?$statelevel->state_ss_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_ss_rural_pl34)?$statelevel->state_ss_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_ss_urban_pl34)?$statelevel->state_ss_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_ss_govt_pct)?$statelevel->state_ss_govt_pct:'0',"govt_aided"=>isset($statelevel->state_ss_govtaid_pct)?$statelevel->state_ss_govtaid_pct:'0',"private"=>isset($statelevel->state_ss_private_pct)?$statelevel->state_ss_private_pct:'0',"central_govt"=>isset($statelevel->state_ss_centgovt_pct)?$statelevel->state_ss_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_ss_govt_pl12)?$statelevel->state_ss_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_ss_govtaid_pl12)?$statelevel->state_ss_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_ss_govt_pl34)?$statelevel->state_ss_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_ss_govtaid_pl34)?$statelevel->state_ss_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_ss_private_pl12)?$statelevel->state_ss_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_ss_centgovt_pl12)?$statelevel->state_ss_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_ss_private_pl34)?$statelevel->state_ss_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_ss_centgovt_pl34)?$statelevel->state_ss_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_ss_sc_pct)?$statelevel->state_ss_sc_pct:'0',"obc"=>isset($statelevel->state_ss_obc_pct)?$statelevel->state_ss_obc_pct:'0',"st"=>isset($statelevel->state_ss_st_pct)?$statelevel->state_ss_st_pct:'0',"general"=>isset($statelevel->state_ss_general_pct)?$statelevel->state_ss_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_ss_sc_pl34)?$statelevel->state_ss_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_ss_obc_pl12)?$statelevel->state_ss_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_ss_sc_pl12)?$statelevel->state_ss_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_ss_obc_pl34)?$statelevel->state_ss_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_ss_st_pl12)?$statelevel->state_ss_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_ss_general_pl12)?$statelevel->state_ss_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_ss_st_pl34)?$statelevel->state_ss_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_ss_general_pl34)?$statelevel->state_ss_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_ss_pl1)?$statelevel->state_ss_pl1:'0',"basic"=>isset($statelevel->state_ss_pl2)?$statelevel->state_ss_pl2:'0',"proficient"=>isset($statelevel->state_ss_pl3)?$statelevel->state_ss_pl3:'0',"advanced"=>isset($statelevel->state_ss_pl4)?$statelevel->state_ss_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );

            $newstateArray['eng'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_en_pct)?$statelevel->state_en_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_en_boys_pct)?$statelevel->state_en_boys_pct:'0',"girls"=>isset($statelevel->state_en_girls_pct)?$statelevel->state_en_girls_pct:'0','trans_gender'=>isset($statelevel->state_en_trans_pct)?$statelevel->state_en_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_en_urban_pct)?$statelevel->state_en_urban_pct:'0',"rural"=>isset($statelevel->state_en_rural_pct)?$statelevel->state_en_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_en_rural_pl12)?$statelevel->state_en_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_en_urban_pl12)?$statelevel->state_en_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_en_rural_pl34)?$statelevel->state_en_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_en_urban_pl34)?$statelevel->state_en_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_en_govt_pct)?$statelevel->state_en_govt_pct:'0',"govt_aided"=>isset($statelevel->state_en_govtaid_pct)?$statelevel->state_en_govtaid_pct:'0',"private"=>isset($statelevel->state_en_private_pct)?$statelevel->state_en_private_pct:'0',"central_govt"=>isset($statelevel->state_en_centgovt_pct)?$statelevel->state_en_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_en_govt_pl12)?$statelevel->state_en_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_en_govtaid_pl12)?$statelevel->state_en_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_en_govt_pl34)?$statelevel->state_en_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_en_govtaid_pl34)?$statelevel->state_en_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_en_private_pl12)?$statelevel->state_en_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_en_centgovt_pl12)?$statelevel->state_en_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_en_private_pl34)?$statelevel->state_en_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_en_centgovt_pl34)?$statelevel->state_en_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_en_sc_pct)?$statelevel->state_en_sc_pct:'0',"obc"=>isset($statelevel->state_en_obc_pct)?$statelevel->state_en_obc_pct:'0',"st"=>isset($statelevel->state_en_st_pct)?$statelevel->state_en_st_pct:'0',"general"=>isset($statelevel->state_en_general_pct)?$statelevel->state_en_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_en_sc_pl34)?$statelevel->state_en_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_en_obc_pl12)?$statelevel->state_en_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_en_sc_pl12)?$statelevel->state_en_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_en_obc_pl34)?$statelevel->state_en_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_en_st_pl12)?$statelevel->state_en_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_en_general_pl12)?$statelevel->state_en_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_en_st_pl34)?$statelevel->state_en_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_en_general_pl34)?$statelevel->state_en_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_en_pl1)?$statelevel->state_en_pl1:'0',"basic"=>isset($statelevel->state_en_pl2)?$statelevel->state_en_pl2:'0',"proficient"=>isset($statelevel->state_en_pl3)?$statelevel->state_en_pl3:'0',"advanced"=>isset($statelevel->state_en_pl4)?$statelevel->state_en_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
            );

            $newstateArray['mil'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->state_la_pct)?$statelevel->state_la_pct:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->state_la_boys_pct)?$statelevel->state_la_boys_pct:'0',"girls"=>isset($statelevel->state_la_girls_pct)?$statelevel->state_la_girls_pct:'0','trans_gender'=>isset($statelevel->state_la_trans_pct)?$statelevel->state_la_trans_pct:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->state_la_urban_pct)?$statelevel->state_la_urban_pct:'0',"rural"=>isset($statelevel->state_la_rural_pct)?$statelevel->state_la_rural_pct:'0','rural_basic_and_below_basic'=>isset($statelevel->state_la_rural_pl12)?$statelevel->state_la_rural_pl12:'0'  
                    ,'urban_basic_and_below_basic'=>isset($statelevel->state_la_urban_pl12)?$statelevel->state_la_urban_pl12:'0' 
                    ,'rural_proficient_and_advance'=>isset($statelevel->state_la_rural_pl34)?$statelevel->state_la_rural_pl34:'0'
                    ,'urban_proficient_and_advance'=>isset($statelevel->state_la_urban_pl34)?$statelevel->state_la_urban_pl34:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->state_la_govt_pct)?$statelevel->state_la_govt_pct:'0',"govt_aided"=>isset($statelevel->state_la_govtaid_pct)?$statelevel->state_la_govtaid_pct:'0',"private"=>isset($statelevel->state_la_private_pct)?$statelevel->state_la_private_pct:'0',"central_govt"=>isset($statelevel->state_la_centgovt_pct)?$statelevel->state_la_centgovt_pct:'0','govt_basic_and_below_basic'=>isset($statelevel->state_la_govt_pl12)?$statelevel->state_la_govt_pl12:'0'  
                    ,'govt_aided_basic_and_below_basic'=>isset($statelevel->state_la_govtaid_pl12)?$statelevel->state_la_govtaid_pl12:'0' 
                    ,'govt_proficient_and_advance'=>isset($statelevel->state_la_govt_pl34)?$statelevel->state_la_govt_pl34:'0'
                    ,'govt_aided_proficient_and_advance'=>isset($statelevel->state_la_govtaid_pl34)?$statelevel->state_la_govtaid_pl34:'0'
                    ,'private_basic_and_below_basic'=>isset($statelevel->state_la_private_pl12)?$statelevel->state_la_private_pl12:'0'  
                    ,'central_govt_basic_and_below_basic'=>isset($statelevel->state_la_centgovt_pl12)?$statelevel->state_la_centgovt_pl12:'0' 
                    ,'private_proficient_and_advance'=>isset($statelevel->state_la_private_pl34)?$statelevel->state_la_private_pl34:'0'
                    ,'central_govt_proficient_and_advance'=>isset($statelevel->state_la_centgovt_pl34)?$statelevel->state_la_centgovt_pl34:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->state_la_sc_pct)?$statelevel->state_la_sc_pct:'0',"obc"=>isset($statelevel->state_la_obc_pct)?$statelevel->state_la_obc_pct:'0',"st"=>isset($statelevel->state_la_st_pct)?$statelevel->state_la_st_pct:'0',"general"=>isset($statelevel->state_la_general_pct)?$statelevel->state_la_general_pct:'0','sc_basic_and_below_basic'=>isset($statelevel->state_la_sc_pl34)?$statelevel->state_la_sc_pl34:'0' 
                    ,'obc_aided_basic_and_below_basic'=>isset($statelevel->state_la_obc_pl12)?$statelevel->state_la_obc_pl12:'0' 
                    ,'sc_proficient_and_advance'=>isset($statelevel->state_la_sc_pl12)?$statelevel->state_la_sc_pl12:'0'
                    ,'obc_proficient_and_advance'=>isset($statelevel->state_la_obc_pl34)?$statelevel->state_la_obc_pl34:'0'
                    ,'st_basic_and_below_basic'=>isset($statelevel->state_la_st_pl12)?$statelevel->state_la_st_pl12:'0'  
                    ,'general_basic_and_below_basic'=>isset($statelevel->state_la_general_pl12)?$statelevel->state_la_general_pl12:'0' 
                    ,'st_proficient_and_advance'=>isset($statelevel->state_la_st_pl34)?$statelevel->state_la_st_pl34:'0'
                    ,'general_proficient_and_advance'=>isset($statelevel->state_la_general_pl34)?$statelevel->state_la_general_pl34:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statelevel->state_la_pl1)?$statelevel->state_la_pl1:'0',"basic"=>isset($statelevel->state_la_pl2)?$statelevel->state_la_pl2:'0',"proficient"=>isset($statelevel->state_la_pl3)?$statelevel->state_la_pl3:'0',"advanced"=>isset($statelevel->state_la_pl4)?$statelevel->state_la_pl4:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0'))
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
    
}
