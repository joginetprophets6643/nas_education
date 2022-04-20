<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllGradeNationalParticipationTBL;
use App\Models\NationalGradeLevelPerformance;
use App\Models\NationalGradeLevelLearningOutCome;
use App\Models\PQNationalLevelFeedback;
use DB;

class FinalNationalProcessController extends Controller
{
    public function allgradeParticipationData()
    {    
        $nationalLevelPerfomanceData =DB::table('grade3nationaltable')->get();
        dd($nationalLevelPerfomanceData);
        
         DB::table('all_grade_national_participation_tbl')->truncate();
         $grade3PrcoessData = $this->grade3ParticipationData();
         $grade5PrcoessData = $this->grade5ParticipationData();
         $grade8PrcoessData = $this->grade8ParticipationData();
         $grade10PrcoessData = $this->grade10ParticipationData();
    }

    public function grade3ParticipationData()
    {
        
        $final_data=DB::table('grade3nationaltable')->get();

        $national_data= $this->selectData(3);

        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data->state_code,
                "grade"  =>3,
                "total_school" =>$national_data->total_school,
                "total_student" =>$national_data->total_student,
                "total_teacher" =>$national_data->total_teacher,
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
        $final_data=DB::table('grade5nationaltable')->get();
        $national_data= $this->selectData(5);
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data->state_code,
                "grade"  =>5,
                "total_school" =>$national_data->total_school,
                "total_student" =>$national_data->total_student,
                "total_teacher" =>$national_data->total_teacher,
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
        $final_data=DB::table('grade8nationaltable')->get();
        $national_data= $this->selectData(8);
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data->state_code,
                "grade"  =>8,
                "total_school" =>$national_data->total_school,
                "total_student" =>$national_data->total_student,
                "total_teacher" =>$national_data->total_teacher,
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
        $final_data=DB::table('grade10nationaltable')->get();
        $national_data= $this->selectData(10);
        foreach($final_data as $data){
            AllGradeStateParticipationTBL::insert([
                "state_id" =>$data->state_code,
                "grade"  =>10,
                "total_school" =>$national_data->total_school,
                "total_student" =>$national_data->total_student,
                "total_teacher" =>$national_data->total_teacher,
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

    public function selectData($grade){
        $data = DB::table('all_grade_state_participation_tbl')
                ->where('grade', '=', $grade)
                ->select(DB::raw('sum(cast(total_school as double precision)) as total_school'),
                DB::raw('sum(cast(total_student as double precision)) as total_student'),
                DB::raw('sum(cast(total_teacher as double precision)) as total_teacher'))->first();
        return($data);
    }

    public function performance(){
        $nationalLevelPerfomanceData =DB::table('grade3nationaltable')->get();
        dd($nationalLevelPerfomanceData);
    }

    public function glimpes(){
        DB::table('national_result_glimpses')->truncate();
        $grade3PrcoessData = $this->grade3GlimpesData();
        $grade5PrcoessData = $this->grade5GlimpesData();
        $grade8PrcoessData = $this->grade8GlimpesData();
        $grade10PrcoessData = $this->grade10GlimpesData();
        return "Glimpes Data Created Successfully";
    }

    public function grade3GlimpesData()
    {
        $GlimpsesData =DB::table('grade3nationaltable')->get();

        $glimpesArray = array();
        $subjects=['lang','evs','math'];
        $real_subjects=['lang'=> 'language','evs'=>'evs','math'=>'math'];
        foreach($subjects as $subject){

            $cards=array();
            $gender=array();
            $location=array();
            $management=array();
            $social=array();
            foreach($GlimpsesData as $key=>$glimpes){

                if($glimpes->subject==$subject && $glimpes->state_code!=0){
                    $cards[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'ss'=>$glimpes->ss,
                        'se'=>$glimpes->se,
                        'category'=>!is_null($glimpes->indicator)?(int)$glimpes->indicator:3
                    );
                    $gender[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'boys_ss'=>$glimpes->ssb,
                        'boys_se'=>$glimpes->seb,
                        'girls_ss'=>$glimpes->ssg,
                        'girls_se'=>$glimpes->seg,
                        'category'=>!is_null($glimpes->gender_indicator)?(int)$glimpes->gender_indicator:3
                    );
                    $location[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'rural_ss'=>$glimpes->rural_ss,
                        'rural_se'=>$glimpes->rural_se,
                        'urban_ss'=>$glimpes->urban_ss,
                        'urban_se'=>$glimpes->urban_se,
                        'category'=>!is_null($glimpes->area_wise_indicator)?(int)$glimpes->area_wise_indicator:3
                    );
                    $management[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'govt_ss'=>$glimpes->government,
                        'govt_se'=>$glimpes->se_govt,
                        'govt_aided_ss'=>$glimpes->government_aided,
                        'govt_aided_se'=>$glimpes->se_govt_aided,
                        'pvt_ss'=>$glimpes->private,
                        'pvt_se'=>$glimpes->se_private,
                        'central_govt_ss'=>$glimpes->central_govt,
                        'central_govt_se'=>$glimpes->se_central_govt,
                        'category'=>!is_null($glimpes->govt_indicator)?(int)$glimpes->govt_indicator:3,
                        'pvt_category'=>!is_null($glimpes->prvt_indicator)?(int)$glimpes->prvt_indicator:3,
                        'central_govt_category'=>!is_null($glimpes->cent_govt_indicator)?(int)$glimpes->cent_govt_indicator:3,

                    );
                    $social[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'gen_ss'=>$glimpes->general,
                        'gen_se'=>$glimpes->se_gen,
                        'sc_ss'=>$glimpes->sc,
                        'sc_se'=>$glimpes->se_sc,
                        'st_ss'=>$glimpes->st,
                        'st_se'=>$glimpes->se_st,
                        'obc_ss'=>$glimpes->obc,
                        'obc_se'=>$glimpes->se_obc,
                        'gen_category'=>!is_null($glimpes->gen_indicator)?(int)$glimpes->gen_indicator:3,
                        'st_category'=>!is_null($glimpes->st_indicator)?(int)$glimpes->st_indicator:3,
                        'obc_category'=>!is_null($glimpes->obc_indicator)?(int)$glimpes->obc_indicator:3	
                    );
                }
                
            }

            $glimpesArray[$real_subjects[$subject]]=array(
                'cards'=>$cards,
                'gender'=>$gender,
                'location'=>$location,
                'management'=>$management,
                'social'=>$social
            );
        }
        
        // dd($glimpesArray);
        
        $glimpesArr['grade'] = 3;
        $glimpesArr['data']=json_encode($glimpesArray);
        $glimpesArr['created_at'] = now();
        $glimpesArr['updated_at'] = now();
        
        $glimpsesData[]=$glimpesArr;
        DB::table('national_result_glimpses')->insert($glimpsesData);
    }

    public function grade5GlimpesData()
    {
        $GlimpsesData =DB::table('grade5nationaltable')->get();

        $glimpesArray = array();
        $subjects=['lang','evs','math'];
        $real_subjects=['lang'=> 'language','evs'=>'evs','math'=>'math'];
        foreach($subjects as $subject){

            $cards=array();
            $gender=array();
            $location=array();
            $management=array();
            $social=array();
            foreach($GlimpsesData as $key=>$glimpes){

                if($glimpes->subject==$subject && $glimpes->state_code!=0){
                    $cards[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'ss'=>$glimpes->ss,
                        'se'=>$glimpes->se,
                        'category'=>!is_null($glimpes->indicator)?(int)$glimpes->indicator:3
                    );
                    $gender[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'boys_ss'=>$glimpes->ssb,
                        'boys_se'=>$glimpes->seb,
                        'girls_ss'=>$glimpes->ssg,
                        'girls_se'=>$glimpes->seg,
                        'category'=>!is_null($glimpes->gender_indicator)?(int)$glimpes->gender_indicator:3
                    );
                    $location[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'rural_ss'=>$glimpes->rural_ss,
                        'rural_se'=>$glimpes->rural_se,
                        'urban_ss'=>$glimpes->urban_ss,
                        'urban_se'=>$glimpes->urban_se,
                        'category'=>!is_null($glimpes->area_wise_indicator)?(int)$glimpes->area_wise_indicator:3
                    );
                    $management[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'govt_ss'=>$glimpes->government,
                        'govt_se'=>$glimpes->se_govt,
                        'govt_aided_ss'=>$glimpes->government_aided,
                        'govt_aided_se'=>$glimpes->se_govt_aided,
                        'pvt_ss'=>$glimpes->private,
                        'pvt_se'=>$glimpes->se_private,
                        'central_govt_ss'=>$glimpes->central_govt,
                        'central_govt_se'=>$glimpes->se_central_govt,
                        'category'=>!is_null($glimpes->govt_indicator)?(int)$glimpes->govt_indicator:3,
                        'pvt_category'=>!is_null($glimpes->prvt_indicator)?(int)$glimpes->prvt_indicator:3,
                        'central_govt_category'=>!is_null($glimpes->cent_govt_indicator)?(int)$glimpes->cent_govt_indicator:3,

                    );
                    $social[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'gen_ss'=>$glimpes->general,
                        'gen_se'=>$glimpes->se_gen,
                        'sc_ss'=>$glimpes->sc,
                        'sc_se'=>$glimpes->se_sc,
                        'st_ss'=>$glimpes->st,
                        'st_se'=>$glimpes->se_st,
                        'obc_ss'=>$glimpes->obc,
                        'obc_se'=>$glimpes->se_obc,
                        'gen_category'=>!is_null($glimpes->gen_indicator)?(int)$glimpes->gen_indicator:3,
                        'st_category'=>!is_null($glimpes->st_indicator)?(int)$glimpes->st_indicator:3,
                        'obc_category'=>!is_null($glimpes->obc_indicator)?(int)$glimpes->obc_indicator:3	
                    );
                }
                
            }

            $glimpesArray[$real_subjects[$subject]]=array(
                'cards'=>$cards,
                'gender'=>$gender,
                'location'=>$location,
                'management'=>$management,
                'social'=>$social
            );
        }
        
        // dd($glimpesArray);
        
        $glimpesArr['grade'] = 5;
        $glimpesArr['data']=json_encode($glimpesArray);
        $glimpesArr['created_at'] = now();
        $glimpesArr['updated_at'] = now();
        
        $glimpsesData[]=$glimpesArr;
        DB::table('national_result_glimpses')->insert($glimpsesData);
    }

    public function grade8GlimpesData()
    {
        $GlimpsesData =DB::table('grade8nationaltable')->get();

        $glimpesArray = array();
        $subjects=['lang','math','sci','sst'];
        $real_subjects=['lang'=> 'language','sci'=>'sci','sst'=>'sst','math'=>'math'];
        foreach($subjects as $subject){

            $cards=array();
            $gender=array();
            $location=array();
            $management=array();
            $social=array();
            foreach($GlimpsesData as $key=>$glimpes){

                if($glimpes->subject==$subject && $glimpes->state_code!=0){
                    $cards[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'ss'=>$glimpes->ss,
                        'se'=>$glimpes->se,
                        'category'=>!is_null($glimpes->indicator)?(int)$glimpes->indicator:3
                    );
                    $gender[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'boys_ss'=>$glimpes->ssb,
                        'boys_se'=>$glimpes->seb,
                        'girls_ss'=>$glimpes->ssg,
                        'girls_se'=>$glimpes->seg,
                        'category'=>!is_null($glimpes->gender_indicator)?(int)$glimpes->gender_indicator:3
                    );
                    $location[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'rural_ss'=>$glimpes->rural_ss,
                        'rural_se'=>$glimpes->rural_se,
                        'urban_ss'=>$glimpes->urban_ss,
                        'urban_se'=>$glimpes->urban_se,
                        'category'=>!is_null($glimpes->area_wise_indicator)?(int)$glimpes->area_wise_indicator:3
                    );
                    $management[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'govt_ss'=>$glimpes->government,
                        'govt_se'=>$glimpes->se_govt,
                        'govt_aided_ss'=>$glimpes->government_aided,
                        'govt_aided_se'=>$glimpes->se_govt_aided,
                        'pvt_ss'=>$glimpes->private,
                        'pvt_se'=>$glimpes->se_private,
                        'central_govt_ss'=>$glimpes->central_govt,
                        'central_govt_se'=>$glimpes->se_central_govt,
                        'category'=>!is_null($glimpes->govt_indicator)?(int)$glimpes->govt_indicator:3,
                        'pvt_category'=>!is_null($glimpes->prvt_indicator)?(int)$glimpes->prvt_indicator:3,
                        'central_govt_category'=>!is_null($glimpes->cent_govt_indicator)?(int)$glimpes->cent_govt_indicator:3,

                    );
                    $social[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'gen_ss'=>$glimpes->general,
                        'gen_se'=>$glimpes->se_gen,
                        'sc_ss'=>$glimpes->sc,
                        'sc_se'=>$glimpes->se_sc,
                        'st_ss'=>$glimpes->st,
                        'st_se'=>$glimpes->se_st,
                        'obc_ss'=>$glimpes->obc,
                        'obc_se'=>$glimpes->se_obc,
                        'gen_category'=>!is_null($glimpes->gen_indicator)?(int)$glimpes->gen_indicator:3,
                        'st_category'=>!is_null($glimpes->st_indicator)?(int)$glimpes->st_indicator:3,
                        'obc_category'=>!is_null($glimpes->obc_indicator)?(int)$glimpes->obc_indicator:3	
                    );
                }
                
            }

            $glimpesArray[$real_subjects[$subject]]=array(
                'cards'=>$cards,
                'gender'=>$gender,
                'location'=>$location,
                'management'=>$management,
                'social'=>$social
            );
        }
        
        // dd($glimpesArray);
        
        $glimpesArr['grade'] = 8;
        $glimpesArr['data']=json_encode($glimpesArray);
        $glimpesArr['created_at'] = now();
        $glimpesArr['updated_at'] = now();
        
        $glimpsesData[]=$glimpesArr;
        DB::table('national_result_glimpses')->insert($glimpsesData);
    }

    public function grade10GlimpesData()
    {
        $GlimpsesData =DB::table('grade10nationaltable')->get();

        $glimpesArray = array();
        $subjects=['mil','math','sci','sst','eng'];
        $real_subjects=['mil'=>'mil','math'=>'math','sci'=>'sci','sst'=>'sst','eng'=>'eng'];
        foreach($subjects as $subject){

            $cards=array();
            $gender=array();
            $location=array();
            $management=array();
            $social=array();
            foreach($GlimpsesData as $key=>$glimpes){

                if($glimpes->subject==$subject && $glimpes->state_code!=0){
                    $cards[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'ss'=>$glimpes->ss,
                        'se'=>$glimpes->se,
                        'category'=>!is_null($glimpes->indicator)?(int)$glimpes->indicator:3
                    );
                    $gender[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'boys_ss'=>$glimpes->ssb,
                        'boys_se'=>$glimpes->seb,
                        'girls_ss'=>$glimpes->ssg,
                        'girls_se'=>$glimpes->seg,
                        'category'=>!is_null($glimpes->gender_indicator)?(int)$glimpes->gender_indicator:3
                    );
                    $location[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'rural_ss'=>$glimpes->rural_ss,
                        'rural_se'=>$glimpes->rural_se,
                        'urban_ss'=>$glimpes->urban_ss,
                        'urban_se'=>$glimpes->urban_se,
                        'category'=>!is_null($glimpes->area_wise_indicator)?(int)$glimpes->area_wise_indicator:3
                    );
                    $management[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'govt_ss'=>$glimpes->government,
                        'govt_se'=>$glimpes->se_govt,
                        'govt_aided_ss'=>$glimpes->government_aided,
                        'govt_aided_se'=>$glimpes->se_govt_aided,
                        'pvt_ss'=>$glimpes->private,
                        'pvt_se'=>$glimpes->se_private,
                        'central_govt_ss'=>$glimpes->central_govt,
                        'central_govt_se'=>$glimpes->se_central_govt,
                        'category'=>!is_null($glimpes->govt_indicator)?(int)$glimpes->govt_indicator:3,
                        'pvt_category'=>!is_null($glimpes->prvt_indicator)?(int)$glimpes->prvt_indicator:3,
                        'central_govt_category'=>!is_null($glimpes->cent_govt_indicator)?(int)$glimpes->cent_govt_indicator:3,

                    );
                    $social[]=(object)array(
                        'state_id'=>$glimpes->state_code,
                        'gen_ss'=>$glimpes->general,
                        'gen_se'=>$glimpes->se_gen,
                        'sc_ss'=>$glimpes->sc,
                        'sc_se'=>$glimpes->se_sc,
                        'st_ss'=>$glimpes->st,
                        'st_se'=>$glimpes->se_st,
                        'obc_ss'=>$glimpes->obc,
                        'obc_se'=>$glimpes->se_obc,
                        'gen_category'=>!is_null($glimpes->gen_indicator)?(int)$glimpes->gen_indicator:3,
                        'st_category'=>!is_null($glimpes->st_indicator)?(int)$glimpes->st_indicator:3,
                        'obc_category'=>!is_null($glimpes->obc_indicator)?(int)$glimpes->obc_indicator:3	
                    );
                }
                
            }

            $glimpesArray[$real_subjects[$subject]]=array(
                'cards'=>$cards,
                'gender'=>$gender,
                'location'=>$location,
                'management'=>$management,
                'social'=>$social
            );
        }
        
        // dd($glimpesArray);
        
        $glimpesArr['grade'] = 10;
        $glimpesArr['data']=json_encode($glimpesArray);
        $glimpesArr['created_at'] = now();
        $glimpesArr['updated_at'] = now();
        
        $glimpsesData[]=$glimpesArr;
        DB::table('national_result_glimpses')->insert($glimpsesData);
    }

}
