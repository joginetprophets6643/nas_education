<?php

namespace App\Http\Controllers;
use App\Models\District_Master;
use App\Models\AllGradeParticipationTBL;
use App\Models\PerformanceMaster;
use App\Models\DistrictGradeLevelLearningOutCome;
use App\Models\PQDistrictLevelFeedback;
use DB;

use Illuminate\Http\Request;

class DataProcessController extends Controller
{

//  DRC Final Data District Wise Update District Master
    public function index(){

        $final_data=DB::table('district_school_teacher')->get();
        // dd($final_data);

        foreach($final_data as $data){

            District_Master::where('udise_district_code',$data->code)->update([

                // 'total_district_area'=>$data->drc_area_tot,
                // 'total_population'=>$data->drc_pop_tot,
                // 'rural_population'=>$data->drc_pop_rur,
                // 'urban_population'=>$data->drc_pop_urb,
                // 'density_of_population'=>$data->drc_den_tot,
                // 'literacy_rate'=>$data->drc_lit_tot,
                // 'child_sex_ratio'=>$data->drc_csr_tot,
                'no_of_schools'=>$data->all_management_school,
                'state_govt_schools'=>$data->state_govt_school,
                'govt_aided_schools'=>$data->govt_aided_school,
                'central_govt_schools'=>$data->central_govt_school,
                'private_unaided_reco_schools'=>$data->private_unaided_school,
                'teacher_state_govt_schools'=>$data->state_govt_teacher,
                'teacher_govt_aided_schools'=>$data->govt_aided_teacher,
                'teacher_central_govt_schools'=>$data->central_govt_teacher,
                'teacher_private_unaided_reco_schools'=>$data->private_unaided_teacher

            ]);            

        }

    }

//  DRC Participation Final Data District Wise insert
    public function participation(){
        DB::table('all_grade_participation_tbl')->truncate();
        $final_data=DB::table('drc_final_data')->get();
        foreach($final_data as $data){

            AllGradeParticipationTBL::insert([

                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>3,
                'total_school'=>$data->drc_gr3_nsch_tot,
                'total_student'=>$data->drc_gr3_nstu_tot,
                'total_teacher'=>$data->drc_gr3_ntrs_tot,
                'rural_location'=>$data->drc_gr3_ps_ru,
                'rural_location_count'=>'0',
                'urban_location'=>$data->drc_gr3_ps_ur,
                'urban_location_count'=>'0',
                'govt_school'=>$data->drc_gr3_ps_go,
                'govt_school_count'=>'0',
                'govt_aided_school'=>$data->drc_gr3_ps_ga,
                'govt_aided_school_count'=>'0',
                'private_school'=>$data->drc_gr3_ps_priv,
                'private_school_count'=>'0',
                'central_govt_school'=>$data->drc_gr3_ps_cg,
                'central_govt_school_count'=>'0',
                'sc_social_group'=>$data->drc_gr3_ps_sc,
                'sc_social_group_count'=>'0',
                'obc_social_group'=>$data->drc_gr3_ps_obc,
                'obc_social_group_count'=>'0',
                'st_social_group'=>$data->drc_gr3_ps_st,
                'st_social_group_count'=>'0',
                'general_social_group'=>$data->drc_gr3_ps_gen,
                'general_social_group_count'=>'0',
                'male_gender'=>$data->drc_gr3_ps_boys,
                'male_gender_count'=>'0',
                'female_gender'=>$data->drc_gr3_ps_girls,
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

        return "Participation Table Created";
    }


//  DRC Performance Final Data District Wise insert
    public function performance(){

        DB::table('performance_master')->truncate();
        $final_data=DB::table('drc_final_data')->get();
        
        foreach($final_data as $data){

            $grade_3['language'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr3_pclang_tot)?(string)$data->drc_gr3_pclang_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr3_pclang_boys)?(string)$data->drc_gr3_pclang_boys:'0',"girls"=>isset($data->drc_gr3_pclang_girls)?(string)$data->drc_gr3_pclang_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr3_pclang_ur)?(string)$data->drc_gr3_pclang_ur:'0',"rural"=>isset($data->drc_gr3_pclang_ru)?(string)$data->drc_gr3_pclang_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr3_pclang_go)?(string)$data->drc_gr3_pclang_go:'0',"govt_aided"=>isset($data->drc_gr3_pclang_ga)?(string)$data->drc_gr3_pclang_ga:'0',"private"=>isset($data->drc_gr3_pclang_priv)?(string)$data->drc_gr3_pclang_priv:'0',"central_govt"=>isset($data->drc_gr3_pclang_cg)?(string)$data->drc_gr3_pclang_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr3_pclang_sc)?(string)$data->drc_gr3_pclang_sc:'0',"obc"=>isset($data->drc_gr3_pclang_obc)?(string)$data->drc_gr3_pclang_obc:'0',"st"=>isset($data->drc_gr3_pclang_st)?(string)$data->drc_gr3_pclang_st:'0',"general"=>isset($data->drc_gr3_pclang_gen)?(string)$data->drc_gr3_pclang_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr3_perlang_bba)?(string)$data->drc_gr3_perlang_bba:'0',"basic"=>isset($data->drc_gr3_perlang_bas)?(string)$data->drc_gr3_perlang_bas:'0',"proficient"=>isset($data->drc_gr3_perlang_pro)?(string)$data->drc_gr3_perlang_pro:'0',"advanced"=>isset($data->drc_gr3_perlang_adv)?(string)$data->drc_gr3_perlang_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_3['math'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr3_pcmath_tot)?(string)$data->drc_gr3_pcmath_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr3_pcmath_boys)?(string)$data->drc_gr3_pcmath_boys:'0',"girls"=>isset($data->drc_gr3_pcmath_girls)?(string)$data->drc_gr3_pcmath_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr3_pcmath_ur)?(string)$data->drc_gr3_pcmath_ur:'0',"rural"=>isset($data->drc_gr3_pcmath_ru)?(string)$data->drc_gr3_pcmath_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr3_pcmath_go)?(string)$data->drc_gr3_pcmath_go:'0',"govt_aided"=>isset($data->drc_gr3_pcmath_ga)?(string)$data->drc_gr3_pcmath_ga:'0',"private"=>isset($data->drc_gr3_pcmath_priv)?(string)$data->drc_gr3_pcmath_priv:'0',"central_govt"=>isset($data->drc_gr3_pcmath_cg)?(string)$data->drc_gr3_pcmath_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr3_pcmath_sc)?(string)$data->drc_gr3_pcmath_sc:'0',"obc"=>isset($data->drc_gr3_pcmath_obc)?(string)$data->drc_gr3_pcmath_obc:'0',"st"=>isset($data->drc_gr3_pcmath_st)?(string)$data->drc_gr3_pcmath_st:'0',"general"=>isset($data->drc_gr3_pcmath_gen)?(string)$data->drc_gr3_pcmath_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr3_permath_bba)?(string)$data->drc_gr3_permath_bba:'0',"basic"=>isset($data->drc_gr3_permath_bas)?(string)$data->drc_gr3_permath_bas:'0',"proficient"=>isset($data->drc_gr3_permath_pro)?(string)$data->drc_gr3_permath_pro:'0',"advanced"=>isset($data->drc_gr3_permath_adv)?(string)$data->drc_gr3_permath_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_3['evs'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr3_pcevs_tot)?(string)$data->drc_gr3_pcevs_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr3_pcevs_boys)?(string)$data->drc_gr3_pcevs_boys:'0',"girls"=>isset($data->drc_gr3_pcevs_girls)?(string)$data->drc_gr3_pcevs_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr3_pcevs_ur)?(string)$data->drc_gr3_pcevs_ur:'0',"rural"=>isset($data->drc_gr3_pcevs_ru)?(string)$data->drc_gr3_pcevs_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr3_pcevs_go)?(string)$data->drc_gr3_pcevs_go:'0',"govt_aided"=>isset($data->drc_gr3_pcevs_ga)?(string)$data->drc_gr3_pcevs_ga:'0',"private"=>isset($data->drc_gr3_pcevs_priv)?(string)$data->drc_gr3_pcevs_priv:'0',"central_govt"=>isset($data->drc_gr3_pcevs_cg)?(string)$data->drc_gr3_pcevs_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr3_pcevs_sc)?(string)$data->drc_gr3_pcevs_sc:'0',"obc"=>isset($data->drc_gr3_pcevs_obc)?(string)$data->drc_gr3_pcevs_obc:'0',"st"=>isset($data->drc_gr3_pcevs_st)?(string)$data->drc_gr3_pcevs_st:'0',"general"=>isset($data->drc_gr3_pcevs_gen)?(string)$data->drc_gr3_pcevs_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr3_perevs_bba)?(string)$data->drc_gr3_perevs_bba:'0',"basic"=>isset($data->drc_gr3_perevs_bas)?(string)$data->drc_gr3_perevs_bas:'0',"proficient"=>isset($data->drc_gr3_perevs_pro)?(string)$data->drc_gr3_perevs_pro:'0',"advanced"=>isset($data->drc_gr3_perevs_adv)?(string)$data->drc_gr3_perevs_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
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
                    'district'=>isset($data->drc_gr5_pclang_tot)?(string)$data->drc_gr5_pclang_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr5_pclang_boys)?(string)$data->drc_gr5_pclang_boys:'0',"girls"=>isset($data->drc_gr5_pclang_girls)?(string)$data->drc_gr5_pclang_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr5_pclang_ur)?(string)$data->drc_gr5_pclang_ur:'0',"rural"=>isset($data->drc_gr5_pclang_ru)?(string)$data->drc_gr5_pclang_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr5_pclang_go)?(string)$data->drc_gr5_pclang_go:'0',"govt_aided"=>isset($data->drc_gr5_pclang_ga)?(string)$data->drc_gr5_pclang_ga:'0',"private"=>isset($data->drc_gr5_pclang_priv)?(string)$data->drc_gr5_pclang_priv:'0',"central_govt"=>isset($data->drc_gr5_pclang_cg)?(string)$data->drc_gr5_pclang_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr5_pclang_sc)?(string)$data->drc_gr5_pclang_sc:'0',"obc"=>isset($data->drc_gr5_pclang_obc)?(string)$data->drc_gr5_pclang_obc:'0',"st"=>isset($data->drc_gr5_pclang_st)?(string)$data->drc_gr5_pclang_st:'0',"general"=>isset($data->drc_gr5_pclang_gen)?(string)$data->drc_gr5_pclang_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr5_perlang_bba)?(string)$data->drc_gr5_perlang_bba:'0',"basic"=>isset($data->drc_gr5_perlang_bas)?(string)$data->drc_gr5_perlang_bas:'0',"proficient"=>isset($data->drc_gr5_perlang_pro)?(string)$data->drc_gr5_perlang_pro:'0',"advanced"=>isset($data->drc_gr5_perlang_adv)?(string)$data->drc_gr5_perlang_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_5['math'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr5_pcmath_tot)?(string)$data->drc_gr5_pcmath_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr5_pcmath_boys)?(string)$data->drc_gr5_pcmath_boys:'0',"girls"=>isset($data->drc_gr5_pcmath_girls)?(string)$data->drc_gr5_pcmath_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr5_pcmath_ur)?(string)$data->drc_gr5_pcmath_ur:'0',"rural"=>isset($data->drc_gr5_pcmath_ru)?(string)$data->drc_gr5_pcmath_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr5_pcmath_go)?(string)$data->drc_gr5_pcmath_go:'0',"govt_aided"=>isset($data->drc_gr5_pcmath_ga)?(string)$data->drc_gr5_pcmath_ga:'0',"private"=>isset($data->drc_gr5_pcmath_priv)?(string)$data->drc_gr5_pcmath_priv:'0',"central_govt"=>isset($data->drc_gr5_pcmath_cg)?(string)$data->drc_gr5_pcmath_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr5_pcmath_sc)?(string)$data->drc_gr5_pcmath_sc:'0',"obc"=>isset($data->drc_gr5_pcmath_obc)?(string)$data->drc_gr5_pcmath_obc:'0',"st"=>isset($data->drc_gr5_pcmath_st)?(string)$data->drc_gr5_pcmath_st:'0',"general"=>isset($data->drc_gr5_pcmath_gen)?(string)$data->drc_gr5_pcmath_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr5_permath_bba)?(string)$data->drc_gr5_permath_bba:'0',"basic"=>isset($data->drc_gr5_permath_bas)?(string)$data->drc_gr5_permath_bas:'0',"proficient"=>isset($data->drc_gr5_permath_pro)?(string)$data->drc_gr5_permath_pro:'0',"advanced"=>isset($data->drc_gr5_permath_adv)?(string)$data->drc_gr5_permath_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_5['evs'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr5_pcevs_tot)?(string)$data->drc_gr5_pcevs_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr5_pcevs_boys)?(string)$data->drc_gr5_pcevs_boys:'0',"girls"=>isset($data->drc_gr5_pcevs_girls)?(string)$data->drc_gr5_pcevs_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr5_pcevs_ur)?(string)$data->drc_gr5_pcevs_ur:'0',"rural"=>isset($data->drc_gr5_pcevs_ru)?(string)$data->drc_gr5_pcevs_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr5_pcevs_go)?(string)$data->drc_gr5_pcevs_go:'0',"govt_aided"=>isset($data->drc_gr5_pcevs_ga)?(string)$data->drc_gr5_pcevs_ga:'0',"private"=>isset($data->drc_gr5_pcevs_priv)?(string)$data->drc_gr5_pcevs_priv:'0',"central_govt"=>isset($data->drc_gr5_pcevs_cg)?(string)$data->drc_gr5_pcevs_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr5_pcevs_sc)?(string)$data->drc_gr5_pcevs_sc:'0',"obc"=>isset($data->drc_gr5_pcevs_obc)?(string)$data->drc_gr5_pcevs_obc:'0',"st"=>isset($data->drc_gr5_pcevs_st)?(string)$data->drc_gr5_pcevs_st:'0',"general"=>isset($data->drc_gr5_pcevs_gen)?(string)$data->drc_gr5_pcevs_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr5_perevs_bba)?(string)$data->drc_gr5_perevs_bba:'0',"basic"=>isset($data->drc_gr5_perevs_bas)?(string)$data->drc_gr5_perevs_bas:'0',"proficient"=>isset($data->drc_gr5_perevs_pro)?(string)$data->drc_gr5_perevs_pro:'0',"advanced"=>isset($data->drc_gr5_perevs_adv)?(string)$data->drc_gr5_perevs_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
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
                    'district'=>isset($data->drc_gr8_pclang_tot)?(string)$data->drc_gr8_pclang_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr8_pclang_boys)?(string)$data->drc_gr8_pclang_boys:'0',"girls"=>isset($data->drc_gr8_pclang_girls)?(string)$data->drc_gr8_pclang_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr8_pclang_ur)?(string)$data->drc_gr8_pclang_ur:'0',"rural"=>isset($data->drc_gr8_pclang_ru)?(string)$data->drc_gr8_pclang_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr8_pclang_go)?(string)$data->drc_gr8_pclang_go:'0',"govt_aided"=>isset($data->drc_gr8_pclang_ga)?(string)$data->drc_gr8_pclang_ga:'0',"private"=>isset($data->drc_gr8_pclang_priv)?(string)$data->drc_gr8_pclang_priv:'0',"central_govt"=>isset($data->drc_gr8_pclang_cg)?(string)$data->drc_gr8_pclang_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr8_pclang_sc)?(string)$data->drc_gr8_pclang_sc:'0',"obc"=>isset($data->drc_gr8_pclang_obc)?(string)$data->drc_gr8_pclang_obc:'0',"st"=>isset($data->drc_gr8_pclang_st)?(string)$data->drc_gr8_pclang_st:'0',"general"=>isset($data->drc_gr8_pclang_gen)?(string)$data->drc_gr8_pclang_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr8_perlang_bba)?(string)$data->drc_gr8_perlang_bba:'0',"basic"=>isset($data->drc_gr8_perlang_bas)?(string)$data->drc_gr8_perlang_bas:'0',"proficient"=>isset($data->drc_gr8_perlang_pro)?(string)$data->drc_gr8_perlang_pro:'0',"advanced"=>isset($data->drc_gr8_perlang_adv)?(string)$data->drc_gr8_perlang_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_8['math'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr8_pcmath_tot)?(string)$data->drc_gr8_pcmath_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr8_pcmath_boys)?(string)$data->drc_gr8_pcmath_boys:'0',"girls"=>isset($data->drc_gr8_pcmath_girls)?(string)$data->drc_gr8_pcmath_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr8_pcmath_ur)?(string)$data->drc_gr8_pcmath_ur:'0',"rural"=>isset($data->drc_gr8_pcmath_ru)?(string)$data->drc_gr8_pcmath_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr8_pcmath_go)?(string)$data->drc_gr8_pcmath_go:'0',"govt_aided"=>isset($data->drc_gr8_pcmath_ga)?(string)$data->drc_gr8_pcmath_ga:'0',"private"=>isset($data->drc_gr8_pcmath_priv)?(string)$data->drc_gr8_pcmath_priv:'0',"central_govt"=>isset($data->drc_gr8_pcmath_cg)?(string)$data->drc_gr8_pcmath_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr8_pcmath_sc)?(string)$data->drc_gr8_pcmath_sc:'0',"obc"=>isset($data->drc_gr8_pcmath_obc)?(string)$data->drc_gr8_pcmath_obc:'0',"st"=>isset($data->drc_gr8_pcmath_st)?(string)$data->drc_gr8_pcmath_st:'0',"general"=>isset($data->drc_gr8_pcmath_gen)?(string)$data->drc_gr8_pcmath_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr8_permath_bba)?(string)$data->drc_gr8_permath_bba:'0',"basic"=>isset($data->drc_gr8_permath_bas)?(string)$data->drc_gr8_permath_bas:'0',"proficient"=>isset($data->drc_gr8_permath_pro)?(string)$data->drc_gr8_permath_pro:'0',"advanced"=>isset($data->drc_gr8_permath_adv)?(string)$data->drc_gr8_permath_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_8['sci'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr8_pcsc_tot)?(string)$data->drc_gr8_pcsc_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr8_pcsc_boys)?(string)$data->drc_gr8_pcsc_boys:'0',"girls"=>isset($data->drc_gr8_pcsc_girls)?(string)$data->drc_gr8_pcsc_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr8_pcsc_ur)?(string)$data->drc_gr8_pcsc_ur:'0',"rural"=>isset($data->drc_gr8_pcsc_ru)?(string)$data->drc_gr8_pcsc_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr8_pcsc_go)?(string)$data->drc_gr8_pcsc_go:'0',"govt_aided"=>isset($data->drc_gr8_pcsc_ga)?(string)$data->drc_gr8_pcsc_ga:'0',"private"=>isset($data->drc_gr8_pcsc_priv)?(string)$data->drc_gr8_pcsc_priv:'0',"central_govt"=>isset($data->drc_gr8_pcsc_cg)?(string)$data->drc_gr8_pcsc_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr8_pcsc_sc)?(string)$data->drc_gr8_pcsc_sc:'0',"obc"=>isset($data->drc_gr8_pcsc_obc)?(string)$data->drc_gr8_pcsc_obc:'0',"st"=>isset($data->drc_gr8_pcsc_st)?(string)$data->drc_gr8_pcsc_st:'0',"general"=>isset($data->drc_gr8_pcsc_gen)?(string)$data->drc_gr8_pcsc_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr8_persc_bba)?(string)$data->drc_gr8_persc_bba:'0',"basic"=>isset($data->drc_gr8_persc_bas)?(string)$data->drc_gr8_persc_bas:'0',"proficient"=>isset($data->gr8_persc_pro)?(string)$data->gr8_persc_pro:'0',"advanced"=>isset($data->gr8_persc_adv)?(string)$data->gr8_persc_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_8['sst'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr8_pcsst_tot)?(string)$data->drc_gr8_pcsst_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr8_pcsst_boys)?(string)$data->drc_gr8_pcsst_boys:'0',"girls"=>isset($data->drc_gr8_pcsst_girls)?(string)$data->drc_gr8_pcsst_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr8_pcsst_ur)?(string)$data->drc_gr8_pcsst_ur:'0',"rural"=>isset($data->drc_gr8_pcsst_ru)?(string)$data->drc_gr8_pcsst_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr8_pcsst_go)?(string)$data->drc_gr8_pcsst_go:'0',"govt_aided"=>isset($data->drc_gr8_pcsst_ga)?(string)$data->drc_gr8_pcsst_ga:'0',"private"=>isset($data->drc_gr8_pcsst_priv)?(string)$data->drc_gr8_pcsst_priv:'0',"central_govt"=>isset($data->drc_gr8_pcsst_cg)?(string)$data->drc_gr8_pcsst_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr8_pcsst_sc)?(string)$data->drc_gr8_pcsst_sc:'0',"obc"=>isset($data->drc_gr8_pcsst_obc)?(string)$data->drc_gr8_pcsst_obc:'0',"st"=>isset($data->drc_gr8_pcsst_st)?(string)$data->drc_gr8_pcsst_st:'0',"general"=>isset($data->drc_gr8_pcsst_gen)?(string)$data->drc_gr8_pcsst_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->gr8_persst_bba)?(string)$data->gr8_persst_bba:'0',"basic"=>isset($data->gr8_persst_bas)?(string)$data->gr8_persst_bas:'0',"proficient"=>isset($data->gr8_persst_pro)?(string)$data->gr8_persst_pro:'0',"advanced"=>isset($data->gr8_persst_adv)?(string)$data->gr8_persst_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
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
                    'district'=>isset($data->drc_gr1_pcmil_tot)?(string)$data->drc_gr1_pcmil_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pcmil_boys)?(string)$data->drc_gr1_pcmil_boys:'0',"girls"=>isset($data->drc_gr1_pcmil_girls)?(string)$data->drc_gr1_pcmil_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pcmil_ur)?(string)$data->drc_gr1_pcmil_ur:'0',"rural"=>isset($data->drc_gr1_pcmil_ru)?(string)$data->drc_gr1_pcmil_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pcmil_go)?(string)$data->drc_gr1_pcmil_go:'0',"govt_aided"=>isset($data->drc_gr1_pcmil_ga)?(string)$data->drc_gr1_pcmil_ga:'0',"private"=>isset($data->drc_gr1_pcmil_priv)?(string)$data->drc_gr1_pcmil_priv:'0',"central_govt"=>isset($data->drc_gr1_pcmil_cg)?(string)$data->drc_gr1_pcmil_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pcmil_sc)?(string)$data->drc_gr1_pcmil_sc:'0',"obc"=>isset($data->drc_gr1_pcmil_obc)?(string)$data->drc_gr1_pcmil_obc:'0',"st"=>isset($data->drc_gr1_pcmil_st)?(string)$data->drc_gr1_pcmil_st:'0',"general"=>isset($data->drc_gr1_pcmil_gen)?(string)$data->drc_gr1_pcmil_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_permil_bba)?(string)$data->drc_gr1_permil_bba:'0',"basic"=>isset($data->drc_gr1_permil_bas)?(string)$data->drc_gr1_permil_bas:'0',"proficient"=>isset($data->drc_gr1_permil_pro)?(string)$data->drc_gr1_permil_pro:'0',"advanced"=>isset($data->drc_gr1_permil_adv)?(string)$data->drc_gr1_permil_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_1['math'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr1_pcmath_tot)?(string)$data->drc_gr1_pcmath_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pcmath_boys)?(string)$data->drc_gr1_pcmath_boys:'0',"girls"=>isset($data->drc_gr1_pcmath_girls)?(string)$data->drc_gr1_pcmath_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pcmath_ur)?(string)$data->drc_gr1_pcmath_ur:'0',"rural"=>isset($data->drc_gr1_pcmath_ru)?(string)$data->drc_gr1_pcmath_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pcmath_go)?(string)$data->drc_gr1_pcmath_go:'0',"govt_aided"=>isset($data->drc_gr1_pcmath_ga)?(string)$data->drc_gr1_pcmath_ga:'0',"private"=>isset($data->drc_gr1_pcmath_priv)?(string)$data->drc_gr1_pcmath_priv:'0',"central_govt"=>isset($data->drc_gr1_pcmath_cg)?(string)$data->drc_gr1_pcmath_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pcmath_sc)?(string)$data->drc_gr1_pcmath_sc:'0',"obc"=>isset($data->drc_gr1_pcmath_obc)?(string)$data->drc_gr1_pcmath_obc:'0',"st"=>isset($data->drc_gr1_pcmath_st)?(string)$data->drc_gr1_pcmath_st:'0',"general"=>isset($data->drc_gr1_pcmath_gen)?(string)$data->drc_gr1_pcmath_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_permath_bba)?(string)$data->drc_gr1_permath_bba:'0',"basic"=>isset($data->drc_gr1_permath_bas)?(string)$data->drc_gr1_permath_bas:'0',"proficient"=>isset($data->drc_gr1_permath_pro)?(string)$data->drc_gr1_permath_pro:'0',"advanced"=>isset($data->drc_gr1_permath_adv)?(string)$data->drc_gr1_permath_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_1['sci'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr1_pcsc_tot)?(string)$data->drc_gr1_pcsc_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pcsc_boys)?(string)$data->drc_gr1_pcsc_boys:'0',"girls"=>isset($data->drc_gr1_pcsc_girls)?(string)$data->drc_gr1_pcsc_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pcsc_ur)?(string)$data->drc_gr1_pcsc_ur:'0',"rural"=>isset($data->drc_gr1_pcsc_ru)?(string)$data->drc_gr1_pcsc_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pcsc_go)?(string)$data->drc_gr1_pcsc_go:'0',"govt_aided"=>isset($data->drc_gr1_pcsc_ga)?(string)$data->drc_gr1_pcsc_ga:'0',"private"=>isset($data->drc_gr1_pcsc_priv)?(string)$data->drc_gr1_pcsc_priv:'0',"central_govt"=>isset($data->drc_gr1_pcsc_cg)?(string)$data->drc_gr1_pcsc_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pcsc_sc)?(string)$data->drc_gr1_pcsc_sc:'0',"obc"=>isset($data->drc_gr1_pcsc_obc)?(string)$data->drc_gr1_pcsc_obc:'0',"st"=>isset($data->drc_gr1_pcsc_st)?(string)$data->drc_gr1_pcsc_st:'0',"general"=>isset($data->drc_gr1_pcsc_gen)?(string)$data->drc_gr1_pcsc_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_persc_bba)?(string)$data->drc_gr1_persc_bba:'0',"basic"=>isset($data->drc_gr1_persc_bas)?(string)$data->drc_gr1_persc_bas:'0',"proficient"=>isset($data->drc_gr1_persc_pro)?(string)$data->drc_gr1_persc_pro:'0',"advanced"=>isset($data->drc_gr1_persc_adv)?(string)$data->drc_gr1_persc_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_1['sst'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr1_pcsst_tot)?(string)$data->drc_gr1_pcsst_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pcsst_boys)?(string)$data->drc_gr1_pcsst_boys:'0',"girls"=>isset($data->drc_gr1_pcsst_girls)?(string)$data->drc_gr1_pcsst_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pcsst_ur)?(string)$data->drc_gr1_pcsst_ur:'0',"rural"=>isset($data->drc_gr1_pcsst_ru)?(string)$data->drc_gr1_pcsst_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pcsst_go)?(string)$data->drc_gr1_pcsst_go:'0',"govt_aided"=>isset($data->drc_gr1_pcsst_ga)?(string)$data->drc_gr1_pcsst_ga:'0',"private"=>isset($data->drc_gr1_pcsst_priv)?(string)$data->drc_gr1_pcsst_priv:'0',"central_govt"=>isset($data->drc_gr1_pcsst_cg)?(string)$data->drc_gr1_pcsst_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pcsst_sc)?(string)$data->drc_gr1_pcsst_sc:'0',"obc"=>isset($data->drc_gr1_pcsst_obc)?(string)$data->drc_gr1_pcsst_obc:'0',"st"=>isset($data->drc_gr1_pcsst_st)?(string)$data->drc_gr1_pcsst_st:'0',"general"=>isset($data->drc_gr1_pcsst_gen)?(string)$data->drc_gr1_pcsst_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_persst_bba)?(string)$data->drc_gr1_persst_bba:'0',"basic"=>isset($data->drc_gr1_persst_bas)?(string)$data->drc_gr1_persst_bas:'0',"proficient"=>isset($data->drc_gr1_persst_pro)?(string)$data->drc_gr1_persst_pro:'0',"advanced"=>isset($data->drc_gr1_persst_adv)?(string)$data->drc_gr1_persst_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            $grade_1['eng'] =array(
                'cards'=>array(
                    'district'=>isset($data->drc_gr1_pceng_tot)?(string)$data->drc_gr1_pceng_tot:'0',
                    'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                    'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'
                ),
                'gender'=>array(
                    'district'=>array("boys"=>isset($data->drc_gr1_pceng_boys)?(string)$data->drc_gr1_pceng_boys:'0',"girls"=>isset($data->drc_gr1_pceng_girls)?(string)$data->drc_gr1_pceng_girls:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')
                ),
                'location'=>array(
                    'district'=>array("urban"=>isset($data->drc_gr1_pceng_ur)?(string)$data->drc_gr1_pceng_ur:'0',"rural"=>isset($data->drc_gr1_pceng_ru)?(string)$data->drc_gr1_pceng_ru:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')
                ),
                'management'=>array(
                    'district'=>array("govt"=>isset($data->drc_gr1_pceng_go)?(string)$data->drc_gr1_pceng_go:'0',"govt_aided"=>isset($data->drc_gr1_pceng_ga)?(string)$data->drc_gr1_pceng_ga:'0',"private"=>isset($data->drc_gr1_pceng_priv)?(string)$data->drc_gr1_pceng_priv:'0',"central_govt"=>isset($data->drc_gr1_pceng_cg)?(string)$data->drc_gr1_pceng_cg:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')
                ),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($data->drc_gr1_pceng_sc)?(string)$data->drc_gr1_pceng_sc:'0',"obc"=>isset($data->drc_gr1_pceng_obc)?(string)$data->drc_gr1_pceng_obc:'0',"st"=>isset($data->drc_gr1_pceng_st)?(string)$data->drc_gr1_pceng_st:'0',"general"=>isset($data->drc_gr1_pceng_gen)?(string)$data->drc_gr1_pceng_gen:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')
                ),
                'performance_level'=>array(
                    'district'=>array("below_basic"=>isset($data->drc_gr1_pereng_bba)?(string)$data->drc_gr1_pereng_bba:'0',"basic"=>isset($data->drc_gr1_pereng_bas)?(string)$data->drc_gr1_pereng_bas:'0',"proficient"=>isset($data->drc_gr1_pereng_pro)?(string)$data->drc_gr1_pereng_pro:'0',"advanced"=>isset($data->drc_gr1_pereng_adv)?(string)$data->drc_gr1_pereng_adv:'0'),
                    'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                    'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')
                )
            );

            PerformanceMaster::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>10,
                'data'=>json_encode($grade_1),
            ]);

        } 

        return "Performance Table Created";

    }

//  DRC Learning Outcome Final Data District Wise
    public function DRCLO(){
        DB::table('district_grade_level_learningoutcome')->truncate();
        ini_set('max_execution_time', '5000');

        $getAllDrcDataSubjectWiseG3 = $this->GetAllDrcDataSubjectCodeG3();
        $getAllDrcDataSubjectWiseG5 = $this->GetAllDrcDataSubjectCodeG5();
        $getAllDrcDataSubjectWiseG8 = $this->GetAllDrcDataSubjectCodeG8();
        $getAllDrcDataSubjectWiseG10 = $this->GetAllDrcDataSubjectCodeG10();

        $final_dataG3 = DB::select($getAllDrcDataSubjectWiseG3);
        $final_dataG5 = DB::select($getAllDrcDataSubjectWiseG5);
        $final_dataG8 = DB::select($getAllDrcDataSubjectWiseG8);
        $final_dataG10 = DB::select($getAllDrcDataSubjectWiseG10);

        foreach($final_dataG3 as $data){

                DistrictGradeLevelLearningOutCome::insert([
                    'state_id'=>$data->udise_state_code,
                    'district_id'=>$data->udise_district_code,
                    'language'=>$data->language,
                    'subject_code'=>$data->subject_code,
                    'grade'=>3,
                    'question'=>$data->description,
                    'total_student'=>'0',
                    'avg'=>$data->district_avg,
                    'state_avg'=>'0',
                    'national_avg'=>'0',
                ]);
        }

        foreach($final_dataG5 as $data){

            DistrictGradeLevelLearningOutCome::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'language'=>$data->language,
                'subject_code'=>$data->subject_code,
                'grade'=>5,
                'question'=>$data->description,
                'total_student'=>'0',
                'avg'=>$data->district_avg,
                'state_avg'=>'0',
                'national_avg'=>'0',
            ]);
        }

        foreach($final_dataG8 as $data){

            DistrictGradeLevelLearningOutCome::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'language'=>$data->language,
                'subject_code'=>$data->subject_code,
                'grade'=>8,
                'question'=>$data->description,
                'total_student'=>'0',
                'avg'=>$data->district_avg,
                'state_avg'=>'0',
                'national_avg'=>'0',
            ]);
        }

        foreach($final_dataG10 as $data){

            DistrictGradeLevelLearningOutCome::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'language'=>$data->language,
                'subject_code'=>$data->subject_code,
                'grade'=>10,
                'question'=>$data->description,
                'total_student'=>'0',
                'avg'=>$data->district_avg,
                'state_avg'=>'0',
                'national_avg'=>'0',
            ]);
        }

        return "Learning Outcome Table Created";
    }

    //Query For LO DRC data Subject Wise Grade 3
    public function GetAllDrcDataSubjectCodeG3()
    {
        $query = "select id, udise_state_code,udise_district_code, drc_gr3_lang_l304 as district_avg, 'drc_gr3_lang_l304' drc_subject_code, 'L304' subject_code, 'language' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_lang_l312 as district_avg, 'drc_gr3_lang_l312' drc_subject_code, 'L312' subject_code, 'language' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m301 as district_avg, 'drc_gr3_maths_m301' drc_subject_code, 'M301' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m302 as district_avg, 'drc_gr3_maths_m302' drc_subject_code, 'M302' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m303 as district_avg, 'drc_gr3_maths_m303' drc_subject_code, 'M303' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m304 as district_avg, 'drc_gr3_maths_m304' drc_subject_code, 'M304' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m305 as district_avg, 'drc_gr3_maths_m305' drc_subject_code, 'M305' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m306 as district_avg, 'drc_gr3_maths_m306' drc_subject_code, 'M306' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m309 as district_avg, 'drc_gr3_maths_m309' drc_subject_code, 'M309' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m311 as district_avg, 'drc_gr3_maths_m311' drc_subject_code, 'M311' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m312 as district_avg, 'drc_gr3_maths_m312' drc_subject_code, 'M312' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m317 as district_avg, 'drc_gr3_maths_m317' drc_subject_code, 'M317' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m318 as district_avg, 'drc_gr3_maths_m318' drc_subject_code, 'M318' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_maths_m319 as district_avg, 'drc_gr3_maths_m319' drc_subject_code, 'M319' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e302 as district_avg, 'drc_gr3_evs_e302' drc_subject_code, 'EVS302' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e303 as district_avg, 'drc_gr3_evs_e303' drc_subject_code, 'EVS303' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e304 as district_avg, 'drc_gr3_evs_e304' drc_subject_code, 'EVS304' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e305 as district_avg, 'drc_gr3_evs_e305' drc_subject_code, 'EVS305' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e307 as district_avg, 'drc_gr3_evs_e307' drc_subject_code, 'EVS307' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e309 as district_avg, 'drc_gr3_evs_e309' drc_subject_code, 'EVS309' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e310 as district_avg, 'drc_gr3_evs_e310' drc_subject_code, 'EVS310' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e311 as district_avg, 'drc_gr3_evs_e311' drc_subject_code, 'EVS311' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e313 as district_avg, 'drc_gr3_evs_e313' drc_subject_code, 'EVS313' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_evs_e314 as district_avg, 'drc_gr3_evs_e314' drc_subject_code, 'EVS314' subject_code, 'evs' language, '-' description
        from drc_final_data
        ";

        return $query;

    }

    //Query For LO DRC data Subject Wise Grade 5
    public function GetAllDrcDataSubjectCodeG5()
    {
        $query = "select id, udise_state_code,udise_district_code, drc_gr5_lang_l504 as district_avg, 'drc_gr5_lang_l504' drc_subject_code, 'L504' subject_code, 'language' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_lang_l508 as district_avg, 'drc_gr5_lang_l508' drc_subject_code, 'L508' subject_code, 'language' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m401 as district_avg, 'drc_gr5_maths_m401' drc_subject_code, 'M401' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m412 as district_avg, 'drc_gr5_maths_m412' drc_subject_code, 'M412' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m418 as district_avg, 'drc_gr5_maths_m418' drc_subject_code, 'M418' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m421 as district_avg, 'drc_gr5_maths_m421' drc_subject_code, 'M421' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m501 as district_avg, 'drc_gr5_maths_m501' drc_subject_code, 'M501' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m504 as district_avg, 'drc_gr5_maths_m504' drc_subject_code, 'M504' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m505 as district_avg, 'drc_gr5_maths_m505' drc_subject_code, 'M505' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m506 as district_avg, 'drc_gr5_maths_m506' drc_subject_code, 'M506' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m508 as district_avg, 'drc_gr5_maths_m508' drc_subject_code, 'M508' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m509 as district_avg, 'drc_gr5_maths_m509' drc_subject_code, 'M509' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m512 as district_avg, 'drc_gr5_maths_m512' drc_subject_code, 'M512' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m513 as district_avg, 'drc_gr5_maths_m513' drc_subject_code, 'M513' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m514 as district_avg, 'drc_gr5_maths_m514' drc_subject_code, 'M514' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m515 as district_avg, 'drc_gr5_maths_m515' drc_subject_code, 'M515' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_maths_m516 as district_avg, 'drc_gr5_maths_m516' drc_subject_code, 'M516' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e403 as district_avg, 'drc_gr5_evs_e403' drc_subject_code, 'EVS403' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e410 as district_avg, 'drc_gr5_evs_e410' drc_subject_code, 'EVS410' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e501 as district_avg, 'drc_gr5_evs_e501' drc_subject_code, 'EVS501' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e503 as district_avg, 'drc_gr5_evs_e503' drc_subject_code, 'EVS503' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e504 as district_avg, 'drc_gr5_evs_e504' drc_subject_code, 'EVS504' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e505 as district_avg, 'drc_gr5_evs_e505' drc_subject_code, 'EVS505' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e506 as district_avg, 'drc_gr5_evs_e506' drc_subject_code, 'EVS506' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e507 as district_avg, 'drc_gr5_evs_e507' drc_subject_code, 'EVS507' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e508 as district_avg, 'drc_gr5_evs_e508' drc_subject_code, 'EVS508' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e509 as district_avg, 'drc_gr5_evs_e509' drc_subject_code, 'EVS509' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e510 as district_avg, 'drc_gr5_evs_e510' drc_subject_code, 'EVS510' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e512 as district_avg, 'drc_gr5_evs_e512' drc_subject_code, 'EVS512' subject_code, 'evs' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_evs_e513 as district_avg, 'drc_gr5_evs_e513' drc_subject_code, 'EVS513' subject_code, 'evs' language, '-' description
        from drc_final_data";

        return $query;

    }

    //Query For LO DRC data Subject Wise Grade 8
    public function GetAllDrcDataSubjectCodeG8()
    {
        $query = "select id, udise_state_code,udise_district_code, gr8_lang_L813 as district_avg, 'gr8_lang_L813' drc_subject_code, 'L813' subject_code, 'language' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m601 as district_avg, 'gr8_maths_m601' drc_subject_code, 'M601' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m606 as district_avg, 'gr8_maths_m606' drc_subject_code, 'M606' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m620 as district_avg, 'gr8_maths_m620' drc_subject_code, 'M620' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m621 as district_avg, 'gr8_maths_m621' drc_subject_code, 'M621' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m702 as district_avg, 'gr8_maths_m702' drc_subject_code, 'M702' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m705 as district_avg, 'gr8_maths_m705' drc_subject_code, 'M705' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m706 as district_avg, 'gr8_maths_m706' drc_subject_code, 'M706' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m707 as district_avg, 'gr8_maths_m707' drc_subject_code, 'M707' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m710 as district_avg, 'gr8_maths_m710' drc_subject_code, 'M710' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m717 as district_avg, 'gr8_maths_m717' drc_subject_code, 'M717' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m719 as district_avg, 'gr8_maths_m719' drc_subject_code, 'M719' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m721 as district_avg, 'gr8_maths_m721' drc_subject_code, 'M721' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m801 as district_avg, 'gr8_maths_m801' drc_subject_code, 'M801' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m802 as district_avg, 'gr8_maths_m802' drc_subject_code, 'M802' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m803 as district_avg, 'gr8_maths_m803' drc_subject_code, 'M803' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m804 as district_avg, 'gr8_maths_m804' drc_subject_code, 'M804' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m808 as district_avg, 'gr8_maths_m808' drc_subject_code, 'M808' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m812 as district_avg, 'gr8_maths_m812' drc_subject_code, 'M812' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m818 as district_avg, 'gr8_maths_m818' drc_subject_code, 'M818' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_maths_m819 as district_avg, 'gr8_maths_m819' drc_subject_code, 'M819' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci703 as district_avg, 'gr8_sc_sci703' drc_subject_code, 'SCI703' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci704 as district_avg, 'gr8_sc_sci704' drc_subject_code, 'SCI704' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci705 as district_avg, 'gr8_sc_sci705' drc_subject_code, 'SCI705' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci708 as district_avg, 'gr8_sc_sci708' drc_subject_code, 'SCI708' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci710 as district_avg, 'gr8_sc_sci710' drc_subject_code, 'SCI710' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci711 as district_avg, 'gr8_sc_sci711' drc_subject_code, 'SCI711' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci801 as district_avg, 'gr8_sc_sci801' drc_subject_code, 'SCI801' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci804 as district_avg, 'gr8_sc_sci804' drc_subject_code, 'SCI804' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci805 as district_avg, 'gr8_sc_sci805' drc_subject_code, 'SCI805' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci807 as district_avg, 'gr8_sc_sci807' drc_subject_code, 'SCI807' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci811 as district_avg, 'gr8_sc_sci811' drc_subject_code, 'SCI811' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sc_sci813 as district_avg, 'gr8_sc_sci813' drc_subject_code, 'SCI813' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst605 as district_avg, 'gr8_sst_sst605' drc_subject_code, 'SST605' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst610 as district_avg, 'gr8_sst_sst610' drc_subject_code, 'SST610' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst625 as district_avg, 'gr8_sst_sst625' drc_subject_code, 'SST625' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst703 as district_avg, 'gr8_sst_sst703' drc_subject_code, 'SST703' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst704 as district_avg, 'gr8_sst_sst704' drc_subject_code, 'SST704' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst722 as district_avg, 'gr8_sst_sst722' drc_subject_code, 'SST722' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst726 as district_avg, 'gr8_sst_sst726' drc_subject_code, 'SST726' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst731 as district_avg, 'gr8_sst_sst731' drc_subject_code, 'SST731' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst733 as district_avg, 'gr8_sst_sst733' drc_subject_code, 'SST733' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst734 as district_avg, 'gr8_sst_sst734' drc_subject_code, 'SST734' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst802 as district_avg, 'gr8_sst_sst802' drc_subject_code, 'SST802' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst805 as district_avg, 'gr8_sst_sst805' drc_subject_code, 'SST805' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst807 as district_avg, 'gr8_sst_sst807' drc_subject_code, 'SST807' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst809 as district_avg, 'gr8_sst_sst809' drc_subject_code, 'SST809' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst810 as district_avg, 'gr8_sst_sst810' drc_subject_code, 'SST810' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst815 as district_avg, 'gr8_sst_sst815' drc_subject_code, 'SST815' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst816 as district_avg, 'gr8_sst_sst816' drc_subject_code, 'SST816' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst818 as district_avg, 'gr8_sst_sst818' drc_subject_code, 'SST818' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst823 as district_avg, 'gr8_sst_sst823' drc_subject_code, 'SST823' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst827 as district_avg, 'gr8_sst_sst827' drc_subject_code, 'SST827' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst831 as district_avg, 'gr8_sst_sst831' drc_subject_code, 'SST831' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sst_sst833 as district_avg, 'gr8_sst_sst833' drc_subject_code, 'SST833' subject_code, 'sst' language, '-' description
        from drc_final_data";

        return $query;

    }

    //Query For LO DRC data Subject Wise Grade 10
    public function GetAllDrcDataSubjectCodeG10()
    {
        $query = "select id, udise_state_code,udise_district_code, drc_gr1_mil_li_1011 as district_avg, 'drc_gr1_mil_li_1011' drc_subject_code, 'MIL1011' subject_code, 'mil' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1001 as district_avg, 'drc_gr1_maths_m1001' drc_subject_code, 'M1001' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1002 as district_avg, 'drc_gr1_maths_m1002' drc_subject_code, 'M1002' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1003 as district_avg, 'drc_gr1_maths_m1003' drc_subject_code, 'M1003' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1004 as district_avg, 'drc_gr1_maths_m1004' drc_subject_code, 'M1004' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1005 as district_avg, 'drc_gr1_maths_m1005' drc_subject_code, 'M1005' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1006 as district_avg, 'drc_gr1_maths_m1006' drc_subject_code, 'M1006' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1007 as district_avg, 'drc_gr1_maths_m1007' drc_subject_code, 'M1007' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1008 as district_avg, 'drc_gr1_maths_m1008' drc_subject_code, 'M1008' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1009 as district_avg, 'drc_gr1_maths_m1009' drc_subject_code, 'M1009' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1011 as district_avg, 'drc_gr1_maths_m1011' drc_subject_code, 'M1011' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_maths_m1012 as district_avg, 'drc_gr1_maths_m1012' drc_subject_code, 'M1012' subject_code, 'math' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1001 as district_avg, 'drc_gr1_sc_sci1001' drc_subject_code, 'SCI1001' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1002 as district_avg, 'drc_gr1_sc_sci1002' drc_subject_code, 'SCI1002' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1003 as district_avg, 'drc_gr1_sc_sci1003' drc_subject_code, 'SCI1003' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1004 as district_avg, 'drc_gr1_sc_sci1004' drc_subject_code, 'SCI1004' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1005 as district_avg, 'drc_gr1_sc_sci1005' drc_subject_code, 'SCI1005' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1006 as district_avg, 'drc_gr1_sc_sci1006' drc_subject_code, 'SCI1006' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1007 as district_avg, 'drc_gr1_sc_sci1007' drc_subject_code, 'SCI1007' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1008 as district_avg, 'drc_gr1_sc_sci1008' drc_subject_code, 'SCI1008' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1009 as district_avg, 'drc_gr1_sc_sci1009' drc_subject_code, 'SCI1009' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sc_sci1010 as district_avg, 'drc_gr1_sc_sci1010' drc_subject_code, 'SCI1010' subject_code, 'sci' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1001 as district_avg, 'drc_gr1_sst_sst1001' drc_subject_code, 'SST1001' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1002 as district_avg, 'drc_gr1_sst_sst1002' drc_subject_code, 'SST1002' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1003 as district_avg, 'drc_gr1_sst_sst1003' drc_subject_code, 'SST1003' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1004 as district_avg, 'drc_gr1_sst_sst1004' drc_subject_code, 'SST1004' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1005 as district_avg, 'drc_gr1_sst_sst1005' drc_subject_code, 'SST1005' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1006 as district_avg, 'drc_gr1_sst_sst1006' drc_subject_code, 'SST1006' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1007 as district_avg, 'drc_gr1_sst_sst1007' drc_subject_code, 'SST1007' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1008 as district_avg, 'drc_gr1_sst_sst1008' drc_subject_code, 'SST1008' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1009 as district_avg, 'drc_gr1_sst_sst1009' drc_subject_code, 'SST1009' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1010 as district_avg, 'drc_gr1_sst_sst1010' drc_subject_code, 'SST1010' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1011 as district_avg, 'drc_gr1_sst_sst1011' drc_subject_code, 'SST1011' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sst_sst1012 as district_avg, 'drc_gr1_sst_sst1012' drc_subject_code, 'SST1012' subject_code, 'sst' language, '-' description
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_eng_lii1007 as district_avg, 'drc_gr1_eng_lii1007' drc_subject_code, 'E1007' subject_code, 'eng' language, '-' description
        from drc_final_data";

        return $query;

    }

//  DRC Feedback Final Data District Wise
    public function DRCFEEDBACK(){
        
        DB::table('pq_district_level_feedback')->truncate();
        ini_set('max_execution_time', '5000');
        $getAllDrcFeedbackDataSubjectWiseG3 = $this->GetAllDrcFeedbackDataSubjectCodeG3();
        $getAllDrcFeedbackDataSubjectWiseG5 = $this->GetAllDrcFeedbackDataSubjectCodeG5();
        $getAllDrcFeedbackDataSubjectWiseG8 = $this->GetAllDrcFeedbackDataSubjectCodeG8();
        $getAllDrcFeedbackDataSubjectWiseG10 = $this->GetAllDrcFeedbackDataSubjectCodeG10();

        $final_dataG3 = DB::select($getAllDrcFeedbackDataSubjectWiseG3);
        $final_dataG5 = DB::select($getAllDrcFeedbackDataSubjectWiseG5);
        $final_dataG8 = DB::select($getAllDrcFeedbackDataSubjectWiseG8);
        $final_dataG10 = DB::select($getAllDrcFeedbackDataSubjectWiseG10);

        foreach($final_dataG3 as $data){

            PQDistrictLevelFeedback::insert([
                    'state_id'=>$data->udise_state_code,
                    'district_id'=>$data->udise_district_code,
                    'grade'=>3,
                    'level'=>$data->level,
                    'question_code'=>$data->question_code,
                    'question_desc'=>$data->question_desc,
                    'total_parent'=>$data->total_parent,
                    'avg'=>$data->district_avg,
                ]);
        }

        foreach($final_dataG5 as $data){

            PQDistrictLevelFeedback::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>5,
                'level'=>$data->level,
                'question_code'=>$data->question_code,
                'question_desc'=>$data->question_desc,
                'total_parent'=>$data->total_parent,
                'avg'=>$data->district_avg,
            ]);
        }

        foreach($final_dataG8 as $data){

            PQDistrictLevelFeedback::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>8,
                'level'=>$data->level,
                'question_code'=>$data->question_code,
                'question_desc'=>$data->question_desc,
                'total_parent'=>$data->total_parent,
                'avg'=>$data->district_avg,
            ]);
        }

        foreach($final_dataG10 as $data){

            PQDistrictLevelFeedback::insert([
                'state_id'=>$data->udise_state_code,
                'district_id'=>$data->udise_district_code,
                'grade'=>10,
                'level'=>$data->level,
                'question_code'=>$data->question_code,
                'question_desc'=>$data->question_desc,
                'total_parent'=>$data->total_parent,
                'avg'=>$data->district_avg,
            ]);
        }
    
    // grade 11 pq feedback data insert
        $stringPQDistrict = 'pq_district_level_feedback.state_id,pq_district_level_feedback.district_id,';
        $wherePQDistrict = "('pq')";
        $stringGroupBYPQDistrict = 'pq_district_level_feedback.state_id,pq_district_level_feedback.district_id,';
        $districtTBLPQ = "pq_district_level_feedback";
        $allDistrictFBPQ = $this->RaqQuery($stringPQDistrict,$wherePQDistrict,$stringGroupBYPQDistrict,$districtTBLPQ);
        $allPQData = DB::select($allDistrictFBPQ);
        $allPQData = json_decode(json_encode($allPQData), true);
        $allDNLODistrictDataPQ = PQDistrictLevelFeedback::insert($allPQData);
    
    // grade 11 tq feedback data insert
        $stringPQDistrict = 'pq_district_level_feedback.state_id,pq_district_level_feedback.district_id,';
        $wherePQDistrict = "('tq')";
        $stringGroupBYPQDistrict = 'pq_district_level_feedback.state_id,pq_district_level_feedback.district_id,';
        $districtTBLPQ = "pq_district_level_feedback";
        $allDistrictFBPQ = $this->RaqQuery($stringPQDistrict,$wherePQDistrict,$stringGroupBYPQDistrict,$districtTBLPQ);
        $allPQData = DB::select($allDistrictFBPQ);
        $allPQData = json_decode(json_encode($allPQData), true);
        $allDNLODistrictDataPQ = PQDistrictLevelFeedback::insert($allPQData);
    
    // grade 11 sq feedback data insert
        $stringPQDistrict = 'pq_district_level_feedback.state_id,pq_district_level_feedback.district_id,';
        $wherePQDistrict = "('sq')";
        $stringGroupBYPQDistrict = 'pq_district_level_feedback.state_id,pq_district_level_feedback.district_id,';
        $districtTBLPQ = "pq_district_level_feedback";
        $allDistrictFBPQ = $this->RaqQuery($stringPQDistrict,$wherePQDistrict,$stringGroupBYPQDistrict,$districtTBLPQ);
        $allPQData = DB::select($allDistrictFBPQ);
        $allPQData = json_decode(json_encode($allPQData), true);
        $allDNLODistrictDataPQ = PQDistrictLevelFeedback::insert($allPQData);

        return "Feedback data successfully created.";
    }

    //Query For Feedback DRC data Subject Wise Grade 3
    public function GetAllDrcFeedbackDataSubjectCodeG3()
    {
        $query = "select id, udise_state_code,udise_district_code, drc_gr3_chi_lik as district_avg , 'pq' level, 'Students like to school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_chi_hlang as district_avg, 'pq' level, 'Students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_chi_teach as district_avg, 'pq' level, 'Students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_chi_play
        as district_avg, 'pq' level, 'Students go out and play during games period' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_chi_dig
        as district_avg, 'pq' level, 'Students have access to any digital device of class 3, 5 and 8 avail computer in the school
        ' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_chi_lab
        as district_avg, 'pq' level, 'students of class 10 have laboratory facility in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_chi_inter
        as district_avg, 'pq' level, 'Students have internet connectivity at home' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_chi_par
        as district_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_trs_inst
        as district_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_trs_wosp
        as district_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_trs_over
        as district_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_trs_rep
        as district_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_trs_dwt
        as district_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_trs_toi
        as district_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_trs_pdev
        as district_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_trs_pint
        as district_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_sch_qsta
        as district_avg, 'sq' level, 'Schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_sch_sups
        as district_avg, 'sq' level, 'Schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_sch_avr
        as district_avg, 'sq' level, 'Schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_sch_lib
        as district_avg, 'sq' level, 'Schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_sch_spo
        as district_avg, 'sq' level, 'Schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr3_sch_libf
        as district_avg, 'sq' level, 'Schools have library facility' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        ";

        return $query;

    }

    //Query For Feedback DRC data Subject Wise Grade 5
    public function GetAllDrcFeedbackDataSubjectCodeG5()
    {
        $query = "select id, udise_state_code,udise_district_code, drc_gr5_chi_lik as district_avg , 'pq' level, 'Students like to school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_chi_hlang as district_avg, 'pq' level, 'Students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_chi_teach as district_avg, 'pq' level, 'Students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_chi_play
        as district_avg, 'pq' level, 'Students go out and play during games period' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_chi_dig
        as district_avg, 'pq' level, 'Students have access to any digital device of class 3, 5 and 8 avail computer in the school
        ' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_chi_lab
        as district_avg, 'pq' level, 'students of class 10 have laboratory facility in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_chi_inter
        as district_avg, 'pq' level, 'Students have internet connectivity at home' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_chi_par
        as district_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_trs_inst
        as district_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_trs_wosp
        as district_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_trs_over
        as district_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_trs_rep
        as district_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_trs_dwt
        as district_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_trs_toi
        as district_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_trs_pdev
        as district_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_trs_pint
        as district_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_sch_qsta
        as district_avg, 'sq' level, 'Schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_sch_sups
        as district_avg, 'sq' level, 'Schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_sch_avr
        as district_avg, 'sq' level, 'Schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_sch_lib
        as district_avg, 'sq' level, 'Schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_sch_spo
        as district_avg, 'sq' level, 'Schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr5_sch_libf
        as district_avg, 'sq' level, 'Schools have library facility' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        ";

        return $query;

    }

    //Query For Feedback DRC data Subject Wise Grade 8
    public function GetAllDrcFeedbackDataSubjectCodeG8()
    {
        $query = "select id, udise_state_code,udise_district_code, gr8_chi_lik as district_avg , 'pq' level, 'Students like to school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_chi_hlang as district_avg, 'pq' level, 'Students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_chi_teach as district_avg, 'pq' level, 'Students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_chi_play
        as district_avg, 'pq' level, 'Students go out and play during games period' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_chi_dig
        as district_avg, 'pq' level, 'Students have access to any digital device of class 3, 5 and 8 avail computer in the school
        ' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_chi_lab
        as district_avg, 'pq' level, 'students of class 10 have laboratory facility in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_chi_inter
        as district_avg, 'pq' level, 'Students have internet connectivity at home' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_chi_par
        as district_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_trs_inst
        as district_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_trs_wosp
        as district_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_trs_over
        as district_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_trs_rep
        as district_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_trs_dwt
        as district_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_trs_toi
        as district_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_trs_pdev
        as district_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_trs_pint
        as district_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sch_qsta
        as district_avg, 'sq' level, 'Schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sch_sups
        as district_avg, 'sq' level, 'Schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sch_avr
        as district_avg, 'sq' level, 'Schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sch_lib
        as district_avg, 'sq' level, 'Schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sch_spo
        as district_avg, 'sq' level, 'Schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, gr8_sch_libf
        as district_avg, 'sq' level, 'Schools have library facility' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        ";

        return $query;

    }

    //Query For Feedback DRC data Subject Wise Grade 10
    public function GetAllDrcFeedbackDataSubjectCodeG10()
    {
        $query = "select id, udise_state_code,udise_district_code, drc_gr1_chi_lik as district_avg , 'pq' level, 'Students like to school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_chi_hlang as district_avg, 'pq' level, 'Students use same language at home as medium of instruction in the class' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_chi_teach as district_avg, 'pq' level, 'Students could understand, what teachers teach in the class' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_chi_play
        as district_avg, 'pq' level, 'Students go out and play during games period' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_chi_dig
        as district_avg, 'pq' level, 'Students have access to any digital device of class 3, 5 and 8 avail computer in the school
        ' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_chi_lab
        as district_avg, 'pq' level, 'students of class 10 have laboratory facility in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_chi_inter
        as district_avg, 'pq' level, 'Students have internet connectivity at home' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_chi_par
        as district_avg, 'pq' level, 'Children get parental support for their educational achievement' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_trs_inst
        as district_avg, 'tq' level, 'Teachers have adequate instructional material and supplies.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_trs_wosp
        as district_avg, 'tq' level, 'Teachers have adequate work space' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_trs_over
        as district_avg, 'tq' level, 'Teachers say that they are overloaded with the work' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_trs_rep
        as district_avg, 'tq' level, 'Teachers have responded that the school building need significant repair.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_trs_dwt
        as district_avg, 'tq' level, 'Teachers have responded that lack of Drinking water facilities in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_trs_toi
        as district_avg, 'tq' level, 'Teachers have responded that inadequate toilet facilities in school' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_trs_pdev
        as district_avg, 'tq' level, 'Teachers participated in professional development program' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_trs_pint
        as district_avg, 'tq' level, 'Parents interest in school activities' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sch_qsta
        as district_avg, 'sq' level, 'Schools have adequate qualified teaching staff.' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sch_sups
        as district_avg, 'sq' level, 'Schools have adequate supporting staff' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sch_avr
        as district_avg, 'sq' level, 'Schools have adequate audio visual resources' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sch_lib
        as district_avg, 'sq' level, 'Schools have adequate library resources' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sch_spo
        as district_avg, 'sq' level, 'Schools participate in sports activities' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
        union all
        select id, udise_state_code,udise_district_code, drc_gr1_sch_libf
        as district_avg, 'sq' level, 'Schools have library facility' question_desc, 0 question_code, 0 total_parent
        from drc_final_data
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
}
