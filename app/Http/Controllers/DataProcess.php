<?php

namespace App\Http\Controllers;
use App\Models\District_Master;
use App\Models\AllGradeParticipationTBL;
use App\Models\PerformanceMaster;
use App\Models\DistrictGradeLevelLearningOutCome;
use DB;

use Illuminate\Http\Request;

class DataProcess extends Controller
{


    public function index(){

        $final_data=DB::table('drc_final_data')->get();
        // dd($final_data);

        foreach($final_data as $data){

            District_Master::where('udise_district_code',$data->udise_district_code)->update([

                'total_district_area'=>$data->drc_area_tot,
                'total_population'=>$data->drc_pop_tot,
                'rural_population'=>$data->drc_pop_rur,
                'urban_population'=>$data->drc_pop_urb,
                'density_of_population'=>$data->drc_den_tot,
                'literacy_rate'=>$data->drc_lit_tot,
                'child_sex_ratio'=>$data->drc_csr_tot,
                'no_of_schools'=>$data->drc_sch_tot,
                'state_govt_schools'=>$data->drc_sch_sgov,
                'govt_aided_schools'=>$data->drc_sch_agov,
                'central_govt_schools'=>$data->drc_sch_cgov,
                'private_unaided_reco_schools'=>$data->drc_sch_pvt,
                'teacher_state_govt_schools'=>$data->drc_trs_sgov,
                'teacher_govt_aided_schools'=>$data->drc_trs_agov,
                'teacher_central_govt_schools'=>$data->drc_trs_cgov,
                'teacher_private_unaided_reco_schools'=>$data->drc_trs_pvt

            ]);            

        }

    }


    public function participation(){
        $final_data=DB::table('drc_final_data')->get();
        foreach($final_data as $data){

            AllGradeParticipationTBL::insert([

                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>3,
                'total_school'=>$data->drc_gr5_nsch_tot,
                'total_student'=>$data->drc_gr5_nstu_tot,
                'total_teacher'=>$data->drc_gr5_ntrs_tot,
                'rural_location'=>$data->drc_gr5_ps_ru,
                'rural_location_count'=>'0',
                'urban_location'=>$data->drc_gr5_ps_ur,
                'urban_location_count'=>'0',
                'govt_school'=>$data->drc_gr5_ps_go,
                'govt_school_count'=>'0',
                'govt_aided_school'=>$data->drc_gr5_ps_ga,
                'govt_aided_school_count'=>'0',
                'private_school'=>$data->drc_gr5_ps_priv,
                'private_school_count'=>'0',
                'central_govt_school'=>$data->drc_gr5_ps_cg,
                'central_govt_school_count'=>'0',
                'sc_social_group'=>$data->drc_gr5_ps_sc,
                'sc_social_group_count'=>'0',
                'obc_social_group'=>$data->drc_gr5_ps_obc,
                'obc_social_group_count'=>'0',
                'st_social_group'=>$data->drc_gr5_ps_st,
                'st_social_group_count'=>'0',
                'general_social_group'=>$data->drc_gr5_ps_gen,
                'general_social_group_count'=>'0',
                'male_gender'=>$data->drc_gr5_ps_boys,
                'male_gender_count'=>'0',
                'female_gender'=>$data->drc_gr5_ps_girls,
                'female_gender_count'=>'0',

            ]);

            AllGradeParticipationTBL::insert([

                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>5,
                'total_school'=>$data->drc_gr5_nsch_tot,
                'total_student'=>$data->drc_gr5_nstu_tot,
                'total_teacher'=>$data->drc_gr5_ntrs_tot,
                'rural_location'=>$data->drc_gr5_ps_ru,
                'rural_location_count'=>'0',
                'urban_location'=>$data->drc_gr5_ps_ur,
                'urban_location_count'=>'0',
                'govt_school'=>$data->drc_gr5_ps_go,
                'govt_school_count'=>'0',
                'govt_aided_school'=>$data->drc_gr5_ps_ga,
                'govt_aided_school_count'=>'0',
                'private_school'=>$data->drc_gr5_ps_priv,
                'private_school_count'=>'0',
                'central_govt_school'=>$data->drc_gr5_ps_cg,
                'central_govt_school_count'=>'0',
                'sc_social_group'=>$data->drc_gr5_ps_sc,
                'sc_social_group_count'=>'0',
                'obc_social_group'=>$data->drc_gr5_ps_obc,
                'obc_social_group_count'=>'0',
                'st_social_group'=>$data->drc_gr5_ps_st,
                'st_social_group_count'=>'0',
                'general_social_group'=>$data->drc_gr5_ps_gen,
                'general_social_group_count'=>'0',
                'male_gender'=>$data->drc_gr5_ps_boys,
                'male_gender_count'=>'0',
                'female_gender'=>$data->drc_gr5_ps_girls,
                'female_gender_count'=>'0',

            ]);

            AllGradeParticipationTBL::insert([

                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>8,
                'total_school'=>$data->drc_gr8_nsch_tot,
                'total_student'=>$data->drc_gr8_nstu_tot,
                'total_teacher'=>$data->drc_gr8_ntrs_tot,
                'rural_location'=>$data->drc_gr8_ps_ru,
                'rural_location_count'=>'0',
                'urban_location'=>$data->drc_gr8_ps_ur,
                'urban_location_count'=>'0',
                'govt_school'=>$data->drc_gr8_ps_go,
                'govt_school_count'=>'0',
                'govt_aided_school'=>$data->drc_gr8_ps_ga,
                'govt_aided_school_count'=>'0',
                'private_school'=>$data->drc_gr8_ps_priv,
                'private_school_count'=>'0',
                'central_govt_school'=>$data->drc_gr8_ps_cg,
                'central_govt_school_count'=>'0',
                'sc_social_group'=>$data->drc_gr8_ps_sc,
                'sc_social_group_count'=>'0',
                'obc_social_group'=>$data->drc_gr8_ps_obc,
                'obc_social_group_count'=>'0',
                'st_social_group'=>$data->drc_gr8_ps_st,
                'st_social_group_count'=>'0',
                'general_social_group'=>$data->drc_gr8_ps_gen,
                'general_social_group_count'=>'0',
                'male_gender'=>$data->drc_gr8_ps_boys,
                'male_gender_count'=>'0',
                'female_gender'=>$data->drc_gr8_ps_girls,
                'female_gender_count'=>'0',

            ]);


            AllGradeParticipationTBL::insert([

                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>10,
                'total_school'=>$data->drc_gr1_nsch_tot,
                'total_student'=>$data->drc_gr1_nstu_tot,
                'total_teacher'=>$data->drc_gr1_ntrs_tot,
                'rural_location'=>$data->drc_gr1_ps_ru,
                'rural_location_count'=>'0',
                'urban_location'=>$data->drc_gr1_ps_ur,
                'urban_location_count'=>'0',
                'govt_school'=>$data->drc_gr1_ps_go,
                'govt_school_count'=>'0',
                'govt_aided_school'=>$data->drc_gr1_ps_ga,
                'govt_aided_school_count'=>'0',
                'private_school'=>$data->drc_gr1_ps_priv,
                'private_school_count'=>'0',
                'central_govt_school'=>$data->drc_gr1_ps_cg,
                'central_govt_school_count'=>'0',
                'sc_social_group'=>$data->drc_gr1_ps_sc,
                'sc_social_group_count'=>'0',
                'obc_social_group'=>$data->drc_gr1_ps_obc,
                'obc_social_group_count'=>'0',
                'st_social_group'=>$data->drc_gr1_ps_st,
                'st_social_group_count'=>'0',
                'general_social_group'=>$data->drc_gr1_ps_gen,
                'general_social_group_count'=>'0',
                'male_gender'=>$data->drc_gr1_ps_boys,
                'male_gender_count'=>'0',
                'female_gender'=>$data->drc_gr1_ps_girls,
                'female_gender_count'=>'0',

            ]);
        }
    }



    public function performance(){
        $final_data=DB::table('drc_final_data')->get();

        foreach($final_data as $data){

            $grade_3['language'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr3_pclang_tot)?$data->drc_gr3_pclang_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr3_pclang_boys)?$data->drc_gr3_pclang_boys:'0',"girls"=>isset($data->drc_gr3_pclang_girls)?$data->drc_gr3_pclang_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr3_pclang_ur)?$data->drc_gr3_pclang_ur:'0',"rural"=>isset($data->drc_gr3_pclang_ru)?$data->drc_gr3_pclang_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr3_pclang_go)?$data->drc_gr3_pclang_go:'0',"govt_aided"=>isset($data->drc_gr3_pclang_ga)?$data->drc_gr3_pclang_ga:'0',"private"=>isset($data->drc_gr3_pclang_priv)?$data->drc_gr3_pclang_priv:'0',"central_govt"=>isset($data->drc_gr3_pclang_cg)?$data->drc_gr3_pclang_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr3_pclang_sc)?$data->drc_gr3_pclang_sc:'0',"obc"=>isset($data->drc_gr3_pclang_obc)?$data->drc_gr3_pclang_obc:'0',"st"=>isset($data->drc_gr3_pclang_st)?$data->drc_gr3_pclang_st:'0',"general"=>isset($data->drc_gr3_pclang_gen)?$data->drc_gr3_pclang_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr3_perlang_bba)?$data->drc_gr3_perlang_bba:'0',"basic"=>isset($data->drc_gr3_perlang_bas)?$data->drc_gr3_perlang_bas:'0',"proficient"=>isset($data->drc_gr3_perlang_pro)?$data->drc_gr3_perlang_pro:'0',"advanced"=>isset($data->drc_gr3_perlang_adv)?$data->drc_gr3_perlang_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_3['math'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr3_pcmath_tot)?$data->drc_gr3_pcmath_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr3_pcmath_boys)?$data->drc_gr3_pcmath_boys:'0',"girls"=>isset($data->drc_gr3_pcmath_girls)?$data->drc_gr3_pcmath_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr3_pcmath_ur)?$data->drc_gr3_pcmath_ur:'0',"rural"=>isset($data->drc_gr3_pcmath_ru)?$data->drc_gr3_pcmath_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr3_pcmath_go)?$data->drc_gr3_pcmath_go:'0',"govt_aided"=>isset($data->drc_gr3_pcmath_ga)?$data->drc_gr3_pcmath_ga:'0',"private"=>isset($data->drc_gr3_pcmath_priv)?$data->drc_gr3_pcmath_priv:'0',"central_govt"=>isset($data->drc_gr3_pcmath_cg)?$data->drc_gr3_pcmath_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr3_pcmath_sc)?$data->drc_gr3_pcmath_sc:'0',"obc"=>isset($data->drc_gr3_pcmath_obc)?$data->drc_gr3_pcmath_obc:'0',"st"=>isset($data->drc_gr3_pcmath_st)?$data->drc_gr3_pcmath_st:'0',"general"=>isset($data->drc_gr3_pcmath_gen)?$data->drc_gr3_pcmath_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr3_permath_bba)?$data->drc_gr3_permath_bba:'0',"basic"=>isset($data->drc_gr3_permath_bas)?$data->drc_gr3_permath_bas:'0',"proficient"=>isset($data->drc_gr3_permath_pro)?$data->drc_gr3_permath_pro:'0',"advanced"=>isset($data->drc_gr3_permath_adv)?$data->drc_gr3_permath_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_3['evs'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr3_pcevs_tot)?$data->drc_gr3_pcevs_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr3_pcevs_boys)?$data->drc_gr3_pcevs_boys:'0',"girls"=>isset($data->drc_gr3_pcevs_girls)?$data->drc_gr3_pcevs_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr3_pcevs_ur)?$data->drc_gr3_pcevs_ur:'0',"rural"=>isset($data->drc_gr3_pcevs_ru)?$data->drc_gr3_pcevs_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr3_pcevs_go)?$data->drc_gr3_pcevs_go:'0',"govt_aided"=>isset($data->drc_gr3_pcevs_ga)?$data->drc_gr3_pcevs_ga:'0',"private"=>isset($data->drc_gr3_pcevs_priv)?$data->drc_gr3_pcevs_priv:'0',"central_govt"=>isset($data->drc_gr3_pcevs_cg)?$data->drc_gr3_pcevs_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr3_pcevs_sc)?$data->drc_gr3_pcevs_sc:'0',"obc"=>isset($data->drc_gr3_pcevs_obc)?$data->drc_gr3_pcevs_obc:'0',"st"=>isset($data->drc_gr3_pcevs_st)?$data->drc_gr3_pcevs_st:'0',"general"=>isset($data->drc_gr3_pcevs_gen)?$data->drc_gr3_pcevs_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr3_perevs_bba)?$data->drc_gr3_perevs_bba:'0',"basic"=>isset($data->drc_gr3_perevs_bas)?$data->drc_gr3_perevs_bas:'0',"proficient"=>isset($data->drc_gr3_perevs_pro)?$data->drc_gr3_perevs_pro:'0',"advanced"=>isset($data->drc_gr3_perevs_adv)?$data->drc_gr3_perevs_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            PerformanceMaster::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>3,
                'data'=>json_encode($grade_3),
            ]);

        }

        foreach($final_data as $data){

            $grade_5['language'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr5_pclang_tot)?$data->drc_gr5_pclang_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr5_pclang_boys)?$data->drc_gr5_pclang_boys:'0',"girls"=>isset($data->drc_gr5_pclang_girls)?$data->drc_gr5_pclang_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr5_pclang_ur)?$data->drc_gr5_pclang_ur:'0',"rural"=>isset($data->drc_gr5_pclang_ru)?$data->drc_gr5_pclang_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr5_pclang_go)?$data->drc_gr5_pclang_go:'0',"govt_aided"=>isset($data->drc_gr5_pclang_ga)?$data->drc_gr5_pclang_ga:'0',"private"=>isset($data->drc_gr5_pclang_priv)?$data->drc_gr5_pclang_priv:'0',"central_govt"=>isset($data->drc_gr5_pclang_cg)?$data->drc_gr5_pclang_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr5_pclang_sc)?$data->drc_gr5_pclang_sc:'0',"obc"=>isset($data->drc_gr5_pclang_obc)?$data->drc_gr5_pclang_obc:'0',"st"=>isset($data->drc_gr5_pclang_st)?$data->drc_gr5_pclang_st:'0',"general"=>isset($data->drc_gr5_pclang_gen)?$data->drc_gr5_pclang_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr5_perlang_bba)?$data->drc_gr5_perlang_bba:'0',"basic"=>isset($data->drc_gr5_perlang_bas)?$data->drc_gr5_perlang_bas:'0',"proficient"=>isset($data->drc_gr5_perlang_pro)?$data->drc_gr5_perlang_pro:'0',"advanced"=>isset($data->drc_gr5_perlang_adv)?$data->drc_gr5_perlang_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_5['math'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr5_pcmath_tot)?$data->drc_gr5_pcmath_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr5_pcmath_boys)?$data->drc_gr5_pcmath_boys:'0',"girls"=>isset($data->drc_gr5_pcmath_girls)?$data->drc_gr5_pcmath_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr5_pcmath_ur)?$data->drc_gr5_pcmath_ur:'0',"rural"=>isset($data->drc_gr5_pcmath_ru)?$data->drc_gr5_pcmath_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr5_pcmath_go)?$data->drc_gr5_pcmath_go:'0',"govt_aided"=>isset($data->drc_gr5_pcmath_ga)?$data->drc_gr5_pcmath_ga:'0',"private"=>isset($data->drc_gr5_pcmath_priv)?$data->drc_gr5_pcmath_priv:'0',"central_govt"=>isset($data->drc_gr5_pcmath_cg)?$data->drc_gr5_pcmath_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr5_pcmath_sc)?$data->drc_gr5_pcmath_sc:'0',"obc"=>isset($data->drc_gr5_pcmath_obc)?$data->drc_gr5_pcmath_obc:'0',"st"=>isset($data->drc_gr5_pcmath_st)?$data->drc_gr5_pcmath_st:'0',"general"=>isset($data->drc_gr5_pcmath_gen)?$data->drc_gr5_pcmath_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr5_permath_bba)?$data->drc_gr5_permath_bba:'0',"basic"=>isset($data->drc_gr5_permath_bas)?$data->drc_gr5_permath_bas:'0',"proficient"=>isset($data->drc_gr5_permath_pro)?$data->drc_gr5_permath_pro:'0',"advanced"=>isset($data->drc_gr5_permath_adv)?$data->drc_gr5_permath_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_5['evs'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr5_pcevs_tot)?$data->drc_gr5_pcevs_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr5_pcevs_boys)?$data->drc_gr5_pcevs_boys:'0',"girls"=>isset($data->drc_gr5_pcevs_girls)?$data->drc_gr5_pcevs_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr5_pcevs_ur)?$data->drc_gr5_pcevs_ur:'0',"rural"=>isset($data->drc_gr5_pcevs_ru)?$data->drc_gr5_pcevs_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr5_pcevs_go)?$data->drc_gr5_pcevs_go:'0',"govt_aided"=>isset($data->drc_gr5_pcevs_ga)?$data->drc_gr5_pcevs_ga:'0',"private"=>isset($data->drc_gr5_pcevs_priv)?$data->drc_gr5_pcevs_priv:'0',"central_govt"=>isset($data->drc_gr5_pcevs_cg)?$data->drc_gr5_pcevs_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr5_pcevs_sc)?$data->drc_gr5_pcevs_sc:'0',"obc"=>isset($data->drc_gr5_pcevs_obc)?$data->drc_gr5_pcevs_obc:'0',"st"=>isset($data->drc_gr5_pcevs_st)?$data->drc_gr5_pcevs_st:'0',"general"=>isset($data->drc_gr5_pcevs_gen)?$data->drc_gr5_pcevs_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr5_perevs_bba)?$data->drc_gr5_perevs_bba:'0',"basic"=>isset($data->drc_gr5_perevs_bas)?$data->drc_gr5_perevs_bas:'0',"proficient"=>isset($data->drc_gr5_perevs_pro)?$data->drc_gr5_perevs_pro:'0',"advanced"=>isset($data->drc_gr5_perevs_adv)?$data->drc_gr5_perevs_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            PerformanceMaster::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>5,
                'data'=>json_encode($grade_5),
            ]);

        }

        foreach($final_data as $data){

            $grade_8['language'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr8_pclang_tot)?$data->drc_gr8_pclang_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr8_pclang_boys)?$data->drc_gr8_pclang_boys:'0',"girls"=>isset($data->drc_gr8_pclang_girls)?$data->drc_gr8_pclang_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr8_pclang_ur)?$data->drc_gr8_pclang_ur:'0',"rural"=>isset($data->drc_gr8_pclang_ru)?$data->drc_gr8_pclang_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr8_pclang_go)?$data->drc_gr8_pclang_go:'0',"govt_aided"=>isset($data->drc_gr8_pclang_ga)?$data->drc_gr8_pclang_ga:'0',"private"=>isset($data->drc_gr8_pclang_priv)?$data->drc_gr8_pclang_priv:'0',"central_govt"=>isset($data->drc_gr8_pclang_cg)?$data->drc_gr8_pclang_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr8_pclang_sc)?$data->drc_gr8_pclang_sc:'0',"obc"=>isset($data->drc_gr8_pclang_obc)?$data->drc_gr8_pclang_obc:'0',"st"=>isset($data->drc_gr8_pclang_st)?$data->drc_gr8_pclang_st:'0',"general"=>isset($data->drc_gr8_pclang_gen)?$data->drc_gr8_pclang_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr8_perlang_bba)?$data->drc_gr8_perlang_bba:'0',"basic"=>isset($data->drc_gr8_perlang_bas)?$data->drc_gr8_perlang_bas:'0',"proficient"=>isset($data->drc_gr8_perlang_pro)?$data->drc_gr8_perlang_pro:'0',"advanced"=>isset($data->drc_gr8_perlang_adv)?$data->drc_gr8_perlang_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_8['math'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr8_pcmath_tot)?$data->drc_gr8_pcmath_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr8_pcmath_boys)?$data->drc_gr8_pcmath_boys:'0',"girls"=>isset($data->drc_gr8_pcmath_girls)?$data->drc_gr8_pcmath_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr8_pcmath_ur)?$data->drc_gr8_pcmath_ur:'0',"rural"=>isset($data->drc_gr8_pcmath_ru)?$data->drc_gr8_pcmath_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr8_pcmath_go)?$data->drc_gr8_pcmath_go:'0',"govt_aided"=>isset($data->drc_gr8_pcmath_ga)?$data->drc_gr8_pcmath_ga:'0',"private"=>isset($data->drc_gr8_pcmath_priv)?$data->drc_gr8_pcmath_priv:'0',"central_govt"=>isset($data->drc_gr8_pcmath_cg)?$data->drc_gr8_pcmath_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr8_pcmath_sc)?$data->drc_gr8_pcmath_sc:'0',"obc"=>isset($data->drc_gr8_pcmath_obc)?$data->drc_gr8_pcmath_obc:'0',"st"=>isset($data->drc_gr8_pcmath_st)?$data->drc_gr8_pcmath_st:'0',"general"=>isset($data->drc_gr8_pcmath_gen)?$data->drc_gr8_pcmath_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr8_permath_bba)?$data->drc_gr8_permath_bba:'0',"basic"=>isset($data->drc_gr8_permath_bas)?$data->drc_gr8_permath_bas:'0',"proficient"=>isset($data->drc_gr8_permath_pro)?$data->drc_gr8_permath_pro:'0',"advanced"=>isset($data->drc_gr8_permath_adv)?$data->drc_gr8_permath_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_8['sci'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr8_pcsc_tot)?$data->drc_gr8_pcsc_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr8_pcsc_boys)?$data->drc_gr8_pcsc_boys:'0',"girls"=>isset($data->drc_gr8_pcsc_girls)?$data->drc_gr8_pcsc_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr8_pcsc_ur)?$data->drc_gr8_pcsc_ur:'0',"rural"=>isset($data->drc_gr8_pcsc_ru)?$data->drc_gr8_pcsc_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr8_pcsc_go)?$data->drc_gr8_pcsc_go:'0',"govt_aided"=>isset($data->drc_gr8_pcsc_ga)?$data->drc_gr8_pcsc_ga:'0',"private"=>isset($data->drc_gr8_pcsc_priv)?$data->drc_gr8_pcsc_priv:'0',"central_govt"=>isset($data->drc_gr8_pcsc_cg)?$data->drc_gr8_pcsc_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr8_pcsc_sc)?$data->drc_gr8_pcsc_sc:'0',"obc"=>isset($data->drc_gr8_pcsc_obc)?$data->drc_gr8_pcsc_obc:'0',"st"=>isset($data->drc_gr8_pcsc_st)?$data->drc_gr8_pcsc_st:'0',"general"=>isset($data->drc_gr8_pcsc_gen)?$data->drc_gr8_pcsc_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr8_persc_bba)?$data->drc_gr8_persc_bba:'0',"basic"=>isset($data->drc_gr8_persc_bas)?$data->drc_gr8_persc_bas:'0',"proficient"=>isset($data->drc_gr8_persc_pro)?$data->drc_gr8_persc_pro:'0',"advanced"=>isset($data->drc_gr8_persc_adv)?$data->drc_gr8_persc_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_8['sst'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr8_pcsst_tot)?$data->drc_gr8_pcsst_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr8_pcsst_boys)?$data->drc_gr8_pcsst_boys:'0',"girls"=>isset($data->drc_gr8_pcsst_girls)?$data->drc_gr8_pcsst_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr8_pcsst_ur)?$data->drc_gr8_pcsst_ur:'0',"rural"=>isset($data->drc_gr8_pcsst_ru)?$data->drc_gr8_pcsst_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr8_pcsst_go)?$data->drc_gr8_pcsst_go:'0',"govt_aided"=>isset($data->drc_gr8_pcsst_ga)?$data->drc_gr8_pcsst_ga:'0',"private"=>isset($data->drc_gr8_pcsst_priv)?$data->drc_gr8_pcsst_priv:'0',"central_govt"=>isset($data->drc_gr8_pcsst_cg)?$data->drc_gr8_pcsst_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr8_pcsst_sc)?$data->drc_gr8_pcsst_sc:'0',"obc"=>isset($data->drc_gr8_pcsst_obc)?$data->drc_gr8_pcsst_obc:'0',"st"=>isset($data->drc_gr8_pcsst_st)?$data->drc_gr8_pcsst_st:'0',"general"=>isset($data->drc_gr8_pcsst_gen)?$data->drc_gr8_pcsst_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr8_persst_bba)?$data->drc_gr8_persst_bba:'0',"basic"=>isset($data->drc_gr8_persst_bas)?$data->drc_gr8_persst_bas:'0',"proficient"=>isset($data->drc_gr8_persst_pro)?$data->drc_gr8_persst_pro:'0',"advanced"=>isset($data->drc_gr8_persst_adv)?$data->drc_gr8_persst_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            PerformanceMaster::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>8,
                'data'=>json_encode($grade_8),
            ]);

        }

        foreach($final_data as $data){

            $grade_1['mil'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr1_pcmil_tot)?$data->drc_gr1_pcmil_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pcmil_boys)?$data->drc_gr1_pcmil_boys:'0',"girls"=>isset($data->drc_gr1_pcmil_girls)?$data->drc_gr1_pcmil_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pcmil_ur)?$data->drc_gr1_pcmil_ur:'0',"rural"=>isset($data->drc_gr1_pcmil_ru)?$data->drc_gr1_pcmil_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pcmil_go)?$data->drc_gr1_pcmil_go:'0',"govt_aided"=>isset($data->drc_gr1_pcmil_ga)?$data->drc_gr1_pcmil_ga:'0',"private"=>isset($data->drc_gr1_pcmil_priv)?$data->drc_gr1_pcmil_priv:'0',"central_govt"=>isset($data->drc_gr1_pcmil_cg)?$data->drc_gr1_pcmil_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pcmil_sc)?$data->drc_gr1_pcmil_sc:'0',"obc"=>isset($data->drc_gr1_pcmil_obc)?$data->drc_gr1_pcmil_obc:'0',"st"=>isset($data->drc_gr1_pcmil_st)?$data->drc_gr1_pcmil_st:'0',"general"=>isset($data->drc_gr1_pcmil_gen)?$data->drc_gr1_pcmil_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_permil_bba)?$data->drc_gr1_permil_bba:'0',"basic"=>isset($data->drc_gr1_permil_bas)?$data->drc_gr1_permil_bas:'0',"proficient"=>isset($data->drc_gr1_permil_pro)?$data->drc_gr1_permil_pro:'0',"advanced"=>isset($data->drc_gr1_permil_adv)?$data->drc_gr1_permil_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_1['math'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr1_pcmath_tot)?$data->drc_gr1_pcmath_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pcmath_boys)?$data->drc_gr1_pcmath_boys:'0',"girls"=>isset($data->drc_gr1_pcmath_girls)?$data->drc_gr1_pcmath_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pcmath_ur)?$data->drc_gr1_pcmath_ur:'0',"rural"=>isset($data->drc_gr1_pcmath_ru)?$data->drc_gr1_pcmath_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pcmath_go)?$data->drc_gr1_pcmath_go:'0',"govt_aided"=>isset($data->drc_gr1_pcmath_ga)?$data->drc_gr1_pcmath_ga:'0',"private"=>isset($data->drc_gr1_pcmath_priv)?$data->drc_gr1_pcmath_priv:'0',"central_govt"=>isset($data->drc_gr1_pcmath_cg)?$data->drc_gr1_pcmath_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pcmath_sc)?$data->drc_gr1_pcmath_sc:'0',"obc"=>isset($data->drc_gr1_pcmath_obc)?$data->drc_gr1_pcmath_obc:'0',"st"=>isset($data->drc_gr1_pcmath_st)?$data->drc_gr1_pcmath_st:'0',"general"=>isset($data->drc_gr1_pcmath_gen)?$data->drc_gr1_pcmath_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_permath_bba)?$data->drc_gr1_permath_bba:'0',"basic"=>isset($data->drc_gr1_permath_bas)?$data->drc_gr1_permath_bas:'0',"proficient"=>isset($data->drc_gr1_permath_pro)?$data->drc_gr1_permath_pro:'0',"advanced"=>isset($data->drc_gr1_permath_adv)?$data->drc_gr1_permath_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_1['sci'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr1_pcsc_tot)?$data->drc_gr1_pcsc_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pcsc_boys)?$data->drc_gr1_pcsc_boys:'0',"girls"=>isset($data->drc_gr1_pcsc_girls)?$data->drc_gr1_pcsc_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pcsc_ur)?$data->drc_gr1_pcsc_ur:'0',"rural"=>isset($data->drc_gr1_pcsc_ru)?$data->drc_gr1_pcsc_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pcsc_go)?$data->drc_gr1_pcsc_go:'0',"govt_aided"=>isset($data->drc_gr1_pcsc_ga)?$data->drc_gr1_pcsc_ga:'0',"private"=>isset($data->drc_gr1_pcsc_priv)?$data->drc_gr1_pcsc_priv:'0',"central_govt"=>isset($data->drc_gr1_pcsc_cg)?$data->drc_gr1_pcsc_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pcsc_sc)?$data->drc_gr1_pcsc_sc:'0',"obc"=>isset($data->drc_gr1_pcsc_obc)?$data->drc_gr1_pcsc_obc:'0',"st"=>isset($data->drc_gr1_pcsc_st)?$data->drc_gr1_pcsc_st:'0',"general"=>isset($data->drc_gr1_pcsc_gen)?$data->drc_gr1_pcsc_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_persc_bba)?$data->drc_gr1_persc_bba:'0',"basic"=>isset($data->drc_gr1_persc_bas)?$data->drc_gr1_persc_bas:'0',"proficient"=>isset($data->drc_gr1_persc_pro)?$data->drc_gr1_persc_pro:'0',"advanced"=>isset($data->drc_gr1_persc_adv)?$data->drc_gr1_persc_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_1['sst'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr1_pcsst_tot)?$data->drc_gr1_pcsst_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pcsst_boys)?$data->drc_gr1_pcsst_boys:'0',"girls"=>isset($data->drc_gr1_pcsst_girls)?$data->drc_gr1_pcsst_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pcsst_ur)?$data->drc_gr1_pcsst_ur:'0',"rural"=>isset($data->drc_gr1_pcsst_ru)?$data->drc_gr1_pcsst_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pcsst_go)?$data->drc_gr1_pcsst_go:'0',"govt_aided"=>isset($data->drc_gr1_pcsst_ga)?$data->drc_gr1_pcsst_ga:'0',"private"=>isset($data->drc_gr1_pcsst_priv)?$data->drc_gr1_pcsst_priv:'0',"central_govt"=>isset($data->drc_gr1_pcsst_cg)?$data->drc_gr1_pcsst_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pcsst_sc)?$data->drc_gr1_pcsst_sc:'0',"obc"=>isset($data->drc_gr1_pcsst_obc)?$data->drc_gr1_pcsst_obc:'0',"st"=>isset($data->drc_gr1_pcsst_st)?$data->drc_gr1_pcsst_st:'0',"general"=>isset($data->drc_gr1_pcsst_gen)?$data->drc_gr1_pcsst_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_persst_bba)?$data->drc_gr1_persst_bba:'0',"basic"=>isset($data->drc_gr1_persst_bas)?$data->drc_gr1_persst_bas:'0',"proficient"=>isset($data->drc_gr1_persst_pro)?$data->drc_gr1_persst_pro:'0',"advanced"=>isset($data->drc_gr1_persst_adv)?$data->drc_gr1_persst_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_1['eng'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr1_pceng_tot)?$data->drc_gr1_pceng_tot:'0',
                    // 'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    // 'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pceng_boys)?$data->drc_gr1_pceng_boys:'0',"girls"=>isset($data->drc_gr1_pceng_girls)?$data->drc_gr1_pceng_girls:'0'),
                    // //'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    // //'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pceng_ur)?$data->drc_gr1_pceng_ur:'0',"rural"=>isset($data->drc_gr1_pceng_ru)?$data->drc_gr1_pceng_ru:'0'),
                    //'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    //'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pceng_go)?$data->drc_gr1_pceng_go:'0',"govt_aided"=>isset($data->drc_gr1_pceng_ga)?$data->drc_gr1_pceng_ga:'0',"private"=>isset($data->drc_gr1_pceng_priv)?$data->drc_gr1_pceng_priv:'0',"central_govt"=>isset($data->drc_gr1_pceng_cg)?$data->drc_gr1_pceng_cg:'0'),
                    //'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    //'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pceng_sc)?$data->drc_gr1_pceng_sc:'0',"obc"=>isset($data->drc_gr1_pceng_obc)?$data->drc_gr1_pceng_obc:'0',"st"=>isset($data->drc_gr1_pceng_st)?$data->drc_gr1_pceng_st:'0',"general"=>isset($data->drc_gr1_pceng_gen)?$data->drc_gr1_pceng_gen:'0'),
                    //'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    //'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_pereng_bba)?$data->drc_gr1_pereng_bba:'0',"basic"=>isset($data->drc_gr1_pereng_bas)?$data->drc_gr1_pereng_bas:'0',"proficient"=>isset($data->drc_gr1_pereng_pro)?$data->drc_gr1_pereng_pro:'0',"advanced"=>isset($data->drc_gr1_pereng_adv)?$data->drc_gr1_pereng_adv:'0'),
                    //'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    //'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            PerformanceMaster::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>10,
                'data'=>json_encode($grade_1),
            ]);

        }

    }

    public function lo(){

        foreach($final_data as $data){

            foreach($codes as $code){

                DistrictGradeLevelLearningOutCome::insert([
                    'state_id'=>$data->udise_state_code,
                    'district_id'=>$data->udise_district_code,
                    'language'=>$code->key,
                    'subject_code'=>$code->value,
                    'grade'=>3,
                    'question'=>'-',
                    'total_student'=>'0',
                    'state_avg'=>'0',
                    'national_avg'=>'0',
                ]);

                DistrictGradeLevelLearningOutCome::insert([
                    'state_id'=>$data->udise_state_code,
                    'district_id'=>$data->udise_district_code,
                    'language'=>$code->key,
                    'subject_code'=>$code->value,
                    'grade'=>5,
                    'question'=>'-',
                    'total_student'=>'0',
                    'state_avg'=>'0',
                    'national_avg'=>'0',
                ]);

                DistrictGradeLevelLearningOutCome::insert([
                    'state_id'=>$data->udise_state_code,
                    'district_id'=>$data->udise_district_code,
                    'language'=>$code->key,
                    'subject_code'=>$code->value,
                    'grade'=>8,
                    'question'=>'-',
                    'total_student'=>'0',
                    'state_avg'=>'0',
                    'national_avg'=>'0',
                ]);

                DistrictGradeLevelLearningOutCome::insert([
                    'state_id'=>$data->udise_state_code,
                    'district_id'=>$data->udise_district_code,
                    'language'=>$code->key,
                    'subject_code'=>$code->value,
                    'grade'=>10,
                    'question'=>'-',
                    'total_student'=>'0',
                    'state_avg'=>'0',
                    'national_avg'=>'0',
                ]);

            }           

        }

        foreach($final_data as $data){
            foreach($codes as $code){
                DistrictGradeLevelLearningOutCome::where('district_id',$data->udise_district_code)->where('grade',3)->where('subject_code',)->update([

                ]);
            }
        }
    }
}
