<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllGradeStateParticipationTBL;
use App\Models\StateGradeLevelPerformance;
use DB;

class FinalParticipationStateController extends Controller
{
    public function allStateParticipationData()
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
        
        $final_data=DB::table('grade3Statetable')->get();
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data,
                "grade"  =>3,
                "total_school" =>$data,
                "total_student" =>$data,
                "total_teacher" =>$data,
                "rural_location" =>$data,
                "rural_location_count" =>'0',
                "urban_location" =>$data,
                "urban_location_count" =>'0',
                "govt_school" =>$data,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data,
                "private_school_count" =>'0',
                "central_govt_school" =>$data,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data,
                "general_social_group_count" =>'0',
                "male_gender" =>$data,
                "male_gender_count" =>'0',
                "female_gender" =>$data,
                "female_gender_count" =>'0',
               

            ]);


    
        }
    }

    public function grade5ParticipationData()
    {
        $final_data=DB::table('grade5Statetable')->get();
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data,
                "grade"  =>5,
                "total_school" =>$data,
                "total_student" =>$data,
                "total_teacher" =>$data,
                "rural_location" =>$data,
                "rural_location_count" =>'0',
                "urban_location" =>$data,
                "urban_location_count" =>'0',
                "govt_school" =>$data,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data,
                "private_school_count" =>'0',
                "central_govt_school" =>$data,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data,
                "general_social_group_count" =>'0',
                "male_gender" =>$data,
                "male_gender_count" =>'0',
                "female_gender" =>$data,
                "female_gender_count" =>'0',
            ]);
        }
    }
    public function grade8ParticipationData()
    {
        $final_data=DB::table('grade8Statetable')->get();
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data,
                "grade"  =>8,
                "total_school" =>$data,
                "total_student" =>$data,
                "total_teacher" =>$data,
                "rural_location" =>$data,
                "rural_location_count" =>'0',
                "urban_location" =>$data,
                "urban_location_count" =>'0',
                "govt_school" =>$data,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data,
                "private_school_count" =>'0',
                "central_govt_school" =>$data,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data,
                "general_social_group_count" =>'0',
                "male_gender" =>$data,
                "male_gender_count" =>'0',
                "female_gender" =>$data,
                "female_gender_count" =>'0',
            ]);
        }
    }
    public function grade10ParticipationData()
    {
        $final_data=DB::table('grade10Statetable')->get();
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data,
                "grade"  =>10,
                "total_school" =>$data,
                "total_student" =>$data,
                "total_teacher" =>$data,
                "rural_location" =>$data,
                "rural_location_count" =>'0',
                "urban_location" =>$data,
                "urban_location_count" =>'0',
                "govt_school" =>$data,
                "govt_school_count" =>'0',
                "govt_aided_school" =>$data,
                "govt_aided_school_count" =>'0',
                "private_school" =>$data,
                "private_school_count" =>'0',
                "central_govt_school" =>$data,
                "central_govt_school_count" =>'0',
                "sc_social_group" =>$data,
                "sc_social_group_count" =>'0',
                "obc_social_group" =>$data,
                "obc_social_group_count" =>'0',
                "st_social_group" =>$data,
                "st_social_group_count" =>'0',
                "general_social_group" =>$data,
                "general_social_group_count" =>'0',
                "male_gender" =>$data,
                "male_gender_count" =>'0',
                "female_gender" =>$data,
                "female_gender_count" =>'0',
            ]);
        }
    }


    public function allStatePerformancedata()
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
        $stateLevelPerfomanceData =DB::table('grade3Statetable')->get();
        foreach($stateLevelPerfomanceData as $k=>$statelevel)
        {
   
            $newStateAay = array();
            $newStateArray['language'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0','trans_gender'=>'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0','rural_basic_and_below_basic'=>'0'  
                    ,'urban_basic_and_below_basic'=>'0' 
                    ,'rural_proficient_and_advance'=>'0'
                    ,'urban_proficient_and_advance'=>'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0','govt_basic_and_below_basic'=>'0'  
                    ,'govt_aided_basic_and_below_basic'=>'0' 
                    ,'govt_proficient_and_advance'=>'0'
                    ,'govt_aided_proficient_and_advance'=>'0'
                    ,'private_basic_and_below_basic'=>'0'  
                    ,'central_govt_basic_and_below_basic'=>'0' 
                    ,'private_proficient_and_advance'=>'0'
                    ,'central_govt_proficient_and_advance'=>'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0','sc_basic_and_below_basic'=>'0'  
                    ,'obc_aided_basic_and_below_basic'=>'0' 
                    ,'sc_proficient_and_advance'=>'0'
                    ,'obc_proficient_and_advance'=>'0'
                    ,'st_basic_and_below_basic'=>'0'  
                    ,'general_basic_and_below_basic'=>'0' 
                    ,'st_proficient_and_advance'=>'0'
                    ,'general_proficient_and_advance'=>'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')));

            $newStateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_m_marks)?$statelevel->avg_m_marks:'0',
                    'national'=>isset($statelevel->avg_m_marks)?$statelevel->avg_m_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->m_avg_below_basic)?$statePerLevel[0]->m_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->m_avg_basic)?$statePerLevel[0]->m_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->m_avg_proficient)?$statePerLevel[0]->m_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->m_avg_advanced)?$statePerLevel[0]->m_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->m_avg_below_basic)?$nationalPerformanceQuery[0]->m_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->m_avg_basic)?$nationalPerformanceQuery[0]->m_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->m_avg_proficient)?$nationalPerformanceQuery[0]->m_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->m_avg_advanced)?$nationalPerformanceQuery[0]->m_avg_advanced:'0')));
            
            $newStateArray['evs'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_e_marks)?$statelevel->avg_e_marks:'0',
                    'national'=>isset($statelevel->avg_e_marks)?$statelevel->avg_e_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->e_avg_below_basic)?$statePerLevel[0]->e_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->e_avg_basic)?$statePerLevel[0]->e_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->e_avg_proficient)?$statePerLevel[0]->e_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->e_avg_advanced)?$statePerLevel[0]->e_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->e_avg_below_basic)?$nationalPerformanceQuery[0]->e_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->e_avg_basic)?$nationalPerformanceQuery[0]->e_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->e_avg_proficient)?$nationalPerformanceQuery[0]->e_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->e_avg_advanced)?$nationalPerformanceQuery[0]->e_avg_advanced:'0')));
            $newStateArray['mil'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_mil_marks)?$statelevel->avg_mil_marks:'0',
                    'national'=>isset($statelevel->avg_mil_marks)?$statelevel->avg_mil_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->mil_avg_below_basic)?$statePerLevel[0]->mil_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->mil_avg_basic)?$statePerLevel[0]->mil_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->mil_avg_proficient)?$statePerLevel[0]->mil_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->mil_avg_advanced)?$statePerLevel[0]->mil_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->mil_avg_below_basic)?$nationalPerformanceQuery[0]->mil_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->mil_avg_basic)?$nationalPerformanceQuery[0]->mil_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->mil_avg_proficient)?$nationalPerformanceQuery[0]->mil_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->mil_avg_advanced)?$nationalPerformanceQuery[0]->mil_avg_advanced:'0')));
            $newStateArray['eng'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_eng_marks)?$statelevel->avg_eng_marks:'0',
                    'national'=>isset($statelevel->avg_eng_marks)?$statelevel->avg_eng_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->eng_avg_below_basic)?$statePerLevel[0]->eng_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->eng_avg_basic)?$statePerLevel[0]->eng_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->eng_avg_proficient)?$statePerLevel[0]->eng_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->eng_avg_advanced)?$statePerLevel[0]->eng_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->eng_avg_below_basic)?$nationalPerformanceQuery[0]->eng_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->eng_avg_basic)?$nationalPerformanceQuery[0]->eng_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->eng_avg_proficient)?$nationalPerformanceQuery[0]->eng_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->eng_avg_advanced)?$nationalPerformanceQuery[0]->eng_avg_advanced:'0')));
            $newStateArray['sci'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_sci_marks)?$statelevel->avg_sci_marks:'0',
                    'national'=>isset($statelevel->avg_sci_marks)?$statelevel->avg_sci_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->sci_avg_below_basic)?$statePerLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sci_avg_basic)?$statePerLevel[0]->sci_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sci_avg_proficient)?$statePerLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sci_avg_advanced)?$statePerLevel[0]->sci_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sci_avg_below_basic)?$nationalPerformanceQuery[0]->sci_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sci_avg_basic)?$nationalPerformanceQuery[0]->sci_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sci_avg_proficient)?$nationalPerformanceQuery[0]->sci_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sci_avg_advanced)?$nationalPerformanceQuery[0]->sci_avg_advanced:'0')));
            $newStateArray['sst'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_sst_marks)?$statelevel->avg_sst_marks:'0',
                    'national'=>isset($statelevel->avg_sst_marks)?$statelevel->avg_sst_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->sst_male_gender)?$statelevel->sst_male_gender:'0',"girls"=>isset($statelevel->sst_female_gender)?$statelevel->sst_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->sst_male_gender)?$statelevel->sst_male_gender:'0',"girls"=>isset($statelevel->sst_female_gender)?$statelevel->sst_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->sst_urban_location)?$statelevel->sst_urban_location:'0',"rural"=>isset($statelevel->sst_rural_location)?$statelevel->sst_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->sst_urban_location)?$statelevel->sst_urban_location:'0',"rural"=>isset($statelevel->sst_rural_location)?$statelevel->sst_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->sst_govt_management)?$statelevel->sst_govt_management:'0',"govt_aided"=>isset($statelevel->sst_govt_aided_management)?$statelevel->sst_govt_aided_management:'0',"private"=>isset($statelevel->sst_private_management)?$statelevel->sst_private_management:'0',"central_govt"=>isset($statelevel->sst_central_govt_management)?$statelevel->sst_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->sst_govt_management)?$statelevel->sst_govt_management:'0',"govt_aided"=>isset($statelevel->sst_govt_aided_management)?$statelevel->sst_govt_aided_management:'0',"private"=>isset($statelevel->sst_private_management)?$statelevel->sst_private_management:'0',"central_govt"=>isset($statelevel->sst_central_govt_management)?$statelevel->sst_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->sst_sc_social_group)?$statelevel->sst_sc_social_group:'0',"obc"=>isset($statelevel->sst_obc_social_group)?$statelevel->sst_obc_social_group:'0',"st"=>isset($statelevel->sst_st_social_group)?$statelevel->sst_st_social_group:'0',"general"=>isset($statelevel->sst_general_social_group)?$statelevel->sst_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->sst_sc_social_group)?$statelevel->sst_sc_social_group:'0',"obc"=>isset($statelevel->sst_obc_social_group)?$statelevel->sst_obc_social_group:'0',"st"=>isset($statelevel->sst_st_social_group)?$statelevel->sst_st_social_group:'0',"general"=>isset($statelevel->sst_general_social_group)?$statelevel->sst_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->sst_avg_below_basic)?$statePerLevel[0]->sst_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sst_avg_basic)?$statePerLevel[0]->sst_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sst_avg_proficient)?$statePerLevel[0]->sst_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sst_avg_advanced)?$statePerLevel[0]->sst_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sst_avg_below_basic)?$nationalPerformanceQuery[0]->sst_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sst_avg_basic)?$nationalPerformanceQuery[0]->sst_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sst_avg_proficient)?$nationalPerformanceQuery[0]->sst_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sst_avg_advanced)?$nationalPerformanceQuery[0]->sst_avg_advanced:'0')));
        }

        $stateArr['state_id'] = (int)$statelevel->state_id;
        $stateArr['grade'] = 3;
        $stateArr['data'] = json_encode($newStateArray);
        $stateArr['created_at'] = now();
        $stateArr['updated_at'] = now();
        
        $statePerformaceData[]=$stateArr;
        StateGradeLevelPerformance::insert($statePerformaceData);
    }

    public function grade5PerformanceData()
    {
        $stateLevelPerfomanceData =DB::table('grade5Statetable')->get();
        foreach($stateLevelPerfomanceData as $k=>$statelevel)
        {
   
            $newStateAay = array();
            $newStateArray['language'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')));

            $newStateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_m_marks)?$statelevel->avg_m_marks:'0',
                    'national'=>isset($statelevel->avg_m_marks)?$statelevel->avg_m_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->m_avg_below_basic)?$statePerLevel[0]->m_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->m_avg_basic)?$statePerLevel[0]->m_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->m_avg_proficient)?$statePerLevel[0]->m_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->m_avg_advanced)?$statePerLevel[0]->m_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->m_avg_below_basic)?$nationalPerformanceQuery[0]->m_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->m_avg_basic)?$nationalPerformanceQuery[0]->m_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->m_avg_proficient)?$nationalPerformanceQuery[0]->m_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->m_avg_advanced)?$nationalPerformanceQuery[0]->m_avg_advanced:'0')));
            
            $newStateArray['evs'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_e_marks)?$statelevel->avg_e_marks:'0',
                    'national'=>isset($statelevel->avg_e_marks)?$statelevel->avg_e_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->e_avg_below_basic)?$statePerLevel[0]->e_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->e_avg_basic)?$statePerLevel[0]->e_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->e_avg_proficient)?$statePerLevel[0]->e_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->e_avg_advanced)?$statePerLevel[0]->e_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->e_avg_below_basic)?$nationalPerformanceQuery[0]->e_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->e_avg_basic)?$nationalPerformanceQuery[0]->e_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->e_avg_proficient)?$nationalPerformanceQuery[0]->e_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->e_avg_advanced)?$nationalPerformanceQuery[0]->e_avg_advanced:'0')));
            $newStateArray['mil'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_mil_marks)?$statelevel->avg_mil_marks:'0',
                    'national'=>isset($statelevel->avg_mil_marks)?$statelevel->avg_mil_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->mil_avg_below_basic)?$statePerLevel[0]->mil_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->mil_avg_basic)?$statePerLevel[0]->mil_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->mil_avg_proficient)?$statePerLevel[0]->mil_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->mil_avg_advanced)?$statePerLevel[0]->mil_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->mil_avg_below_basic)?$nationalPerformanceQuery[0]->mil_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->mil_avg_basic)?$nationalPerformanceQuery[0]->mil_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->mil_avg_proficient)?$nationalPerformanceQuery[0]->mil_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->mil_avg_advanced)?$nationalPerformanceQuery[0]->mil_avg_advanced:'0')));
            $newStateArray['eng'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_eng_marks)?$statelevel->avg_eng_marks:'0',
                    'national'=>isset($statelevel->avg_eng_marks)?$statelevel->avg_eng_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->eng_avg_below_basic)?$statePerLevel[0]->eng_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->eng_avg_basic)?$statePerLevel[0]->eng_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->eng_avg_proficient)?$statePerLevel[0]->eng_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->eng_avg_advanced)?$statePerLevel[0]->eng_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->eng_avg_below_basic)?$nationalPerformanceQuery[0]->eng_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->eng_avg_basic)?$nationalPerformanceQuery[0]->eng_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->eng_avg_proficient)?$nationalPerformanceQuery[0]->eng_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->eng_avg_advanced)?$nationalPerformanceQuery[0]->eng_avg_advanced:'0')));
            $newStateArray['sci'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_sci_marks)?$statelevel->avg_sci_marks:'0',
                    'national'=>isset($statelevel->avg_sci_marks)?$statelevel->avg_sci_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->sci_avg_below_basic)?$statePerLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sci_avg_basic)?$statePerLevel[0]->sci_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sci_avg_proficient)?$statePerLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sci_avg_advanced)?$statePerLevel[0]->sci_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sci_avg_below_basic)?$nationalPerformanceQuery[0]->sci_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sci_avg_basic)?$nationalPerformanceQuery[0]->sci_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sci_avg_proficient)?$nationalPerformanceQuery[0]->sci_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sci_avg_advanced)?$nationalPerformanceQuery[0]->sci_avg_advanced:'0')));
            $newStateArray['sst'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_sst_marks)?$statelevel->avg_sst_marks:'0',
                    'national'=>isset($statelevel->avg_sst_marks)?$statelevel->avg_sst_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->sst_male_gender)?$statelevel->sst_male_gender:'0',"girls"=>isset($statelevel->sst_female_gender)?$statelevel->sst_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->sst_male_gender)?$statelevel->sst_male_gender:'0',"girls"=>isset($statelevel->sst_female_gender)?$statelevel->sst_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->sst_urban_location)?$statelevel->sst_urban_location:'0',"rural"=>isset($statelevel->sst_rural_location)?$statelevel->sst_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->sst_urban_location)?$statelevel->sst_urban_location:'0',"rural"=>isset($statelevel->sst_rural_location)?$statelevel->sst_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->sst_govt_management)?$statelevel->sst_govt_management:'0',"govt_aided"=>isset($statelevel->sst_govt_aided_management)?$statelevel->sst_govt_aided_management:'0',"private"=>isset($statelevel->sst_private_management)?$statelevel->sst_private_management:'0',"central_govt"=>isset($statelevel->sst_central_govt_management)?$statelevel->sst_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->sst_govt_management)?$statelevel->sst_govt_management:'0',"govt_aided"=>isset($statelevel->sst_govt_aided_management)?$statelevel->sst_govt_aided_management:'0',"private"=>isset($statelevel->sst_private_management)?$statelevel->sst_private_management:'0',"central_govt"=>isset($statelevel->sst_central_govt_management)?$statelevel->sst_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->sst_sc_social_group)?$statelevel->sst_sc_social_group:'0',"obc"=>isset($statelevel->sst_obc_social_group)?$statelevel->sst_obc_social_group:'0',"st"=>isset($statelevel->sst_st_social_group)?$statelevel->sst_st_social_group:'0',"general"=>isset($statelevel->sst_general_social_group)?$statelevel->sst_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->sst_sc_social_group)?$statelevel->sst_sc_social_group:'0',"obc"=>isset($statelevel->sst_obc_social_group)?$statelevel->sst_obc_social_group:'0',"st"=>isset($statelevel->sst_st_social_group)?$statelevel->sst_st_social_group:'0',"general"=>isset($statelevel->sst_general_social_group)?$statelevel->sst_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->sst_avg_below_basic)?$statePerLevel[0]->sst_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sst_avg_basic)?$statePerLevel[0]->sst_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sst_avg_proficient)?$statePerLevel[0]->sst_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sst_avg_advanced)?$statePerLevel[0]->sst_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sst_avg_below_basic)?$nationalPerformanceQuery[0]->sst_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sst_avg_basic)?$nationalPerformanceQuery[0]->sst_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sst_avg_proficient)?$nationalPerformanceQuery[0]->sst_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sst_avg_advanced)?$nationalPerformanceQuery[0]->sst_avg_advanced:'0')));
        }

        $stateArr['state_id'] = (int)$statelevel->state_id;
        $stateArr['grade'] = 5;
        $stateArr['data'] = json_encode($newStateArray);
        $stateArr['created_at'] = now();
        $stateArr['updated_at'] = now();
        
        $statePerformaceData[]=$stateArr;
        StateGradeLevelPerformance::insert($statePerformaceData);
    }

    public function grade8PerformanceData()
    {
        $stateLevelPerfomanceData =DB::table('grade8Statetable')->get();
        foreach($stateLevelPerfomanceData as $k=>$statelevel)
        {
   
            $newStateAay = array();
            $newStateArray['language'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')));

            $newStateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_m_marks)?$statelevel->avg_m_marks:'0',
                    'national'=>isset($statelevel->avg_m_marks)?$statelevel->avg_m_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->m_avg_below_basic)?$statePerLevel[0]->m_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->m_avg_basic)?$statePerLevel[0]->m_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->m_avg_proficient)?$statePerLevel[0]->m_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->m_avg_advanced)?$statePerLevel[0]->m_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->m_avg_below_basic)?$nationalPerformanceQuery[0]->m_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->m_avg_basic)?$nationalPerformanceQuery[0]->m_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->m_avg_proficient)?$nationalPerformanceQuery[0]->m_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->m_avg_advanced)?$nationalPerformanceQuery[0]->m_avg_advanced:'0')));
            
            $newStateArray['evs'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_e_marks)?$statelevel->avg_e_marks:'0',
                    'national'=>isset($statelevel->avg_e_marks)?$statelevel->avg_e_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->e_avg_below_basic)?$statePerLevel[0]->e_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->e_avg_basic)?$statePerLevel[0]->e_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->e_avg_proficient)?$statePerLevel[0]->e_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->e_avg_advanced)?$statePerLevel[0]->e_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->e_avg_below_basic)?$nationalPerformanceQuery[0]->e_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->e_avg_basic)?$nationalPerformanceQuery[0]->e_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->e_avg_proficient)?$nationalPerformanceQuery[0]->e_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->e_avg_advanced)?$nationalPerformanceQuery[0]->e_avg_advanced:'0')));
            $newStateArray['mil'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_mil_marks)?$statelevel->avg_mil_marks:'0',
                    'national'=>isset($statelevel->avg_mil_marks)?$statelevel->avg_mil_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->mil_avg_below_basic)?$statePerLevel[0]->mil_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->mil_avg_basic)?$statePerLevel[0]->mil_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->mil_avg_proficient)?$statePerLevel[0]->mil_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->mil_avg_advanced)?$statePerLevel[0]->mil_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->mil_avg_below_basic)?$nationalPerformanceQuery[0]->mil_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->mil_avg_basic)?$nationalPerformanceQuery[0]->mil_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->mil_avg_proficient)?$nationalPerformanceQuery[0]->mil_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->mil_avg_advanced)?$nationalPerformanceQuery[0]->mil_avg_advanced:'0')));
            $newStateArray['eng'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_eng_marks)?$statelevel->avg_eng_marks:'0',
                    'national'=>isset($statelevel->avg_eng_marks)?$statelevel->avg_eng_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->eng_avg_below_basic)?$statePerLevel[0]->eng_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->eng_avg_basic)?$statePerLevel[0]->eng_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->eng_avg_proficient)?$statePerLevel[0]->eng_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->eng_avg_advanced)?$statePerLevel[0]->eng_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->eng_avg_below_basic)?$nationalPerformanceQuery[0]->eng_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->eng_avg_basic)?$nationalPerformanceQuery[0]->eng_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->eng_avg_proficient)?$nationalPerformanceQuery[0]->eng_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->eng_avg_advanced)?$nationalPerformanceQuery[0]->eng_avg_advanced:'0')));
            $newStateArray['sci'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_sci_marks)?$statelevel->avg_sci_marks:'0',
                    'national'=>isset($statelevel->avg_sci_marks)?$statelevel->avg_sci_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->sci_avg_below_basic)?$statePerLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sci_avg_basic)?$statePerLevel[0]->sci_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sci_avg_proficient)?$statePerLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sci_avg_advanced)?$statePerLevel[0]->sci_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sci_avg_below_basic)?$nationalPerformanceQuery[0]->sci_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sci_avg_basic)?$nationalPerformanceQuery[0]->sci_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sci_avg_proficient)?$nationalPerformanceQuery[0]->sci_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sci_avg_advanced)?$nationalPerformanceQuery[0]->sci_avg_advanced:'0')));
            $newStateArray['sst'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_sst_marks)?$statelevel->avg_sst_marks:'0',
                    'national'=>isset($statelevel->avg_sst_marks)?$statelevel->avg_sst_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->sst_male_gender)?$statelevel->sst_male_gender:'0',"girls"=>isset($statelevel->sst_female_gender)?$statelevel->sst_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->sst_male_gender)?$statelevel->sst_male_gender:'0',"girls"=>isset($statelevel->sst_female_gender)?$statelevel->sst_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->sst_urban_location)?$statelevel->sst_urban_location:'0',"rural"=>isset($statelevel->sst_rural_location)?$statelevel->sst_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->sst_urban_location)?$statelevel->sst_urban_location:'0',"rural"=>isset($statelevel->sst_rural_location)?$statelevel->sst_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->sst_govt_management)?$statelevel->sst_govt_management:'0',"govt_aided"=>isset($statelevel->sst_govt_aided_management)?$statelevel->sst_govt_aided_management:'0',"private"=>isset($statelevel->sst_private_management)?$statelevel->sst_private_management:'0',"central_govt"=>isset($statelevel->sst_central_govt_management)?$statelevel->sst_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->sst_govt_management)?$statelevel->sst_govt_management:'0',"govt_aided"=>isset($statelevel->sst_govt_aided_management)?$statelevel->sst_govt_aided_management:'0',"private"=>isset($statelevel->sst_private_management)?$statelevel->sst_private_management:'0',"central_govt"=>isset($statelevel->sst_central_govt_management)?$statelevel->sst_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->sst_sc_social_group)?$statelevel->sst_sc_social_group:'0',"obc"=>isset($statelevel->sst_obc_social_group)?$statelevel->sst_obc_social_group:'0',"st"=>isset($statelevel->sst_st_social_group)?$statelevel->sst_st_social_group:'0',"general"=>isset($statelevel->sst_general_social_group)?$statelevel->sst_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->sst_sc_social_group)?$statelevel->sst_sc_social_group:'0',"obc"=>isset($statelevel->sst_obc_social_group)?$statelevel->sst_obc_social_group:'0',"st"=>isset($statelevel->sst_st_social_group)?$statelevel->sst_st_social_group:'0',"general"=>isset($statelevel->sst_general_social_group)?$statelevel->sst_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->sst_avg_below_basic)?$statePerLevel[0]->sst_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sst_avg_basic)?$statePerLevel[0]->sst_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sst_avg_proficient)?$statePerLevel[0]->sst_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sst_avg_advanced)?$statePerLevel[0]->sst_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sst_avg_below_basic)?$nationalPerformanceQuery[0]->sst_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sst_avg_basic)?$nationalPerformanceQuery[0]->sst_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sst_avg_proficient)?$nationalPerformanceQuery[0]->sst_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sst_avg_advanced)?$nationalPerformanceQuery[0]->sst_avg_advanced:'0')));
        }

        $stateArr['state_id'] = (int)$statelevel->state_id;
        $stateArr['grade'] = 8;
        $stateArr['data'] = json_encode($newStateArray);
        $stateArr['created_at'] = now();
        $stateArr['updated_at'] = now();
        
        $statePerformaceData[]=$stateArr;
        StateGradeLevelPerformance::insert($statePerformaceData);
    }

    public function grade10PerformanceData()
    {
        $stateLevelPerfomanceData =DB::table('grade10Statetable')->get();
        foreach($stateLevelPerfomanceData as $k=>$statelevel)
        {
   
            $newStateAay = array();
            $newStateArray['language'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')));

            $newStateArray['math'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_m_marks)?$statelevel->avg_m_marks:'0',
                    'national'=>isset($statelevel->avg_m_marks)?$statelevel->avg_m_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->m_avg_below_basic)?$statePerLevel[0]->m_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->m_avg_basic)?$statePerLevel[0]->m_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->m_avg_proficient)?$statePerLevel[0]->m_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->m_avg_advanced)?$statePerLevel[0]->m_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->m_avg_below_basic)?$nationalPerformanceQuery[0]->m_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->m_avg_basic)?$nationalPerformanceQuery[0]->m_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->m_avg_proficient)?$nationalPerformanceQuery[0]->m_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->m_avg_advanced)?$nationalPerformanceQuery[0]->m_avg_advanced:'0')));
            
            $newStateArray['evs'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_e_marks)?$statelevel->avg_e_marks:'0',
                    'national'=>isset($statelevel->avg_e_marks)?$statelevel->avg_e_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->e_avg_below_basic)?$statePerLevel[0]->e_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->e_avg_basic)?$statePerLevel[0]->e_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->e_avg_proficient)?$statePerLevel[0]->e_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->e_avg_advanced)?$statePerLevel[0]->e_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->e_avg_below_basic)?$nationalPerformanceQuery[0]->e_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->e_avg_basic)?$nationalPerformanceQuery[0]->e_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->e_avg_proficient)?$nationalPerformanceQuery[0]->e_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->e_avg_advanced)?$nationalPerformanceQuery[0]->e_avg_advanced:'0')));
            $newStateArray['mil'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_mil_marks)?$statelevel->avg_mil_marks:'0',
                    'national'=>isset($statelevel->avg_mil_marks)?$statelevel->avg_mil_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->mil_avg_below_basic)?$statePerLevel[0]->mil_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->mil_avg_basic)?$statePerLevel[0]->mil_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->mil_avg_proficient)?$statePerLevel[0]->mil_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->mil_avg_advanced)?$statePerLevel[0]->mil_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->mil_avg_below_basic)?$nationalPerformanceQuery[0]->mil_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->mil_avg_basic)?$nationalPerformanceQuery[0]->mil_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->mil_avg_proficient)?$nationalPerformanceQuery[0]->mil_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->mil_avg_advanced)?$nationalPerformanceQuery[0]->mil_avg_advanced:'0')));
            $newStateArray['eng'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_eng_marks)?$statelevel->avg_eng_marks:'0',
                    'national'=>isset($statelevel->avg_eng_marks)?$statelevel->avg_eng_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->eng_avg_below_basic)?$statePerLevel[0]->eng_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->eng_avg_basic)?$statePerLevel[0]->eng_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->eng_avg_proficient)?$statePerLevel[0]->eng_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->eng_avg_advanced)?$statePerLevel[0]->eng_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->eng_avg_below_basic)?$nationalPerformanceQuery[0]->eng_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->eng_avg_basic)?$nationalPerformanceQuery[0]->eng_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->eng_avg_proficient)?$nationalPerformanceQuery[0]->eng_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->eng_avg_advanced)?$nationalPerformanceQuery[0]->eng_avg_advanced:'0')));
            $newStateArray['sci'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_sci_marks)?$statelevel->avg_sci_marks:'0',
                    'national'=>isset($statelevel->avg_sci_marks)?$statelevel->avg_sci_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->sci_avg_below_basic)?$statePerLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sci_avg_basic)?$statePerLevel[0]->sci_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sci_avg_proficient)?$statePerLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sci_avg_advanced)?$statePerLevel[0]->sci_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sci_avg_below_basic)?$nationalPerformanceQuery[0]->sci_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sci_avg_basic)?$nationalPerformanceQuery[0]->sci_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sci_avg_proficient)?$nationalPerformanceQuery[0]->sci_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sci_avg_advanced)?$nationalPerformanceQuery[0]->sci_avg_advanced:'0')));
            $newStateArray['sst'] =array(
                'cards'=>array(
                    'state'=>isset($statelevel->avg_sst_marks)?$statelevel->avg_sst_marks:'0',
                    'national'=>isset($statelevel->avg_sst_marks)?$statelevel->avg_sst_marks:'0'),
                'gender'=>array(
                    'state'=>array("boys"=>isset($statelevel->sst_male_gender)?$statelevel->sst_male_gender:'0',"girls"=>isset($statelevel->sst_female_gender)?$statelevel->sst_female_gender:'0'),
                    'national'=>array("boys"=>isset($statelevel->sst_male_gender)?$statelevel->sst_male_gender:'0',"girls"=>isset($statelevel->sst_female_gender)?$statelevel->sst_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($statelevel->sst_urban_location)?$statelevel->sst_urban_location:'0',"rural"=>isset($statelevel->sst_rural_location)?$statelevel->sst_rural_location:'0'),
                    'national'=>array("urban"=>isset($statelevel->sst_urban_location)?$statelevel->sst_urban_location:'0',"rural"=>isset($statelevel->sst_rural_location)?$statelevel->sst_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($statelevel->sst_govt_management)?$statelevel->sst_govt_management:'0',"govt_aided"=>isset($statelevel->sst_govt_aided_management)?$statelevel->sst_govt_aided_management:'0',"private"=>isset($statelevel->sst_private_management)?$statelevel->sst_private_management:'0',"central_govt"=>isset($statelevel->sst_central_govt_management)?$statelevel->sst_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($statelevel->sst_govt_management)?$statelevel->sst_govt_management:'0',"govt_aided"=>isset($statelevel->sst_govt_aided_management)?$statelevel->sst_govt_aided_management:'0',"private"=>isset($statelevel->sst_private_management)?$statelevel->sst_private_management:'0',"central_govt"=>isset($statelevel->sst_central_govt_management)?$statelevel->sst_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($statelevel->sst_sc_social_group)?$statelevel->sst_sc_social_group:'0',"obc"=>isset($statelevel->sst_obc_social_group)?$statelevel->sst_obc_social_group:'0',"st"=>isset($statelevel->sst_st_social_group)?$statelevel->sst_st_social_group:'0',"general"=>isset($statelevel->sst_general_social_group)?$statelevel->sst_general_social_group:'0'),
                    'national'=>array("sc"=>isset($statelevel->sst_sc_social_group)?$statelevel->sst_sc_social_group:'0',"obc"=>isset($statelevel->sst_obc_social_group)?$statelevel->sst_obc_social_group:'0',"st"=>isset($statelevel->sst_st_social_group)?$statelevel->sst_st_social_group:'0',"general"=>isset($statelevel->sst_general_social_group)?$statelevel->sst_general_social_group:'0')),
                'performance_level'=>array(
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->sst_avg_below_basic)?$statePerLevel[0]->sst_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sst_avg_basic)?$statePerLevel[0]->sst_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sst_avg_proficient)?$statePerLevel[0]->sst_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sst_avg_advanced)?$statePerLevel[0]->sst_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sst_avg_below_basic)?$nationalPerformanceQuery[0]->sst_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sst_avg_basic)?$nationalPerformanceQuery[0]->sst_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sst_avg_proficient)?$nationalPerformanceQuery[0]->sst_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sst_avg_advanced)?$nationalPerformanceQuery[0]->sst_avg_advanced:'0')));
        }

        $stateArr['state_id'] = (int)$statelevel->state_id;
        $stateArr['grade'] = 10;
        $stateArr['data'] = json_encode($newStateArray);
        $stateArr['created_at'] = now();
        $stateArr['updated_at'] = now();
        
        $statePerformaceData[]=$stateArr;
        StateGradeLevelPerformance::insert($statePerformaceData);
    }
    
}
