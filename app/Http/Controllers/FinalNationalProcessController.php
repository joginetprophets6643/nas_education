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
    public function allnationalParticipationData()
    {    
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
            AllGradeNationalParticipationTBL::insert([
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
            AllGradeNationalParticipationTBL::insert([
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
            AllGradeNationalParticipationTBL::insert([
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
            AllGradeNationalParticipationTBL::insert([
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

    public function allnationalPerformancedata()
    {
        DB::table('national_grade_level_performance')->truncate();
        $grade3PrcoessData = $this->grade3PerformanceData();
        $grade5PrcoessData = $this->grade5PerformanceData();
        $grade8PrcoessData = $this->grade8PerformanceData();
        $grade10PrcoessData = $this->grade10PerformanceData();
    }

    public function grade3PerformanceData()
    {
            $newnationalArray = array();
            $newnationalArray['language'] =array(
                'cards'=>array(
                    'national'=>323
                )
            );
            
            $newnationalArray['math'] =array(
                'cards'=>array(
                    'national'=>306
                )
            );
            
            $newnationalArray['evs'] =array(
                'cards'=>array(
                    'national'=>307
                )
            );
                
            $nationalArr['grade'] = 3;
            $nationalArr['data'] = json_encode($newnationalArray);
            $nationalArr['created_at'] = now();
            $nationalArr['updated_at'] = now();
            
            $nationalPerformaceData[]=$nationalArr;
        NationalGradeLevelPerformance::insert($nationalPerformaceData);
    }

    public function grade5PerformanceData()
    {
            $newnationalArray = array();
            $newnationalArray['language'] =array(
                'cards'=>array(
                    'national'=>309
                )
            );
            
            $newnationalArray['math'] =array(
                'cards'=>array(
                    'national'=>284
                )
            );
            
            $newnationalArray['evs'] =array(
                'cards'=>array(
                    'national'=>283
                )
            );
        
        $nationalArr['grade'] = 5;
        $nationalArr['data'] = json_encode($newnationalArray);
        $nationalArr['created_at'] = now();
        $nationalArr['updated_at'] = now();
        
        $nationalPerformaceData[]=$nationalArr;
        NationalGradeLevelPerformance::insert($nationalPerformaceData);
    }

    public function grade8PerformanceData()
    {
            $newnationalArray = array();
            $newnationalArray['language'] =array(
                'cards'=>array(
                    'national'=>302
                )
            );
            
            $newnationalArray['math'] =array(
                'cards'=>array(
                    'national'=>255
                )
            );
            
            $newnationalArray['sci'] =array(
                'cards'=>array(
                    'national'=>250
                )
            );

            $newnationalArray['sst'] =array(
                'cards'=>array(
                    'national'=>255
                )
            );

        
        $nationalArr['grade'] = 8;
        $nationalArr['data'] = json_encode($newnationalArray);
        $nationalArr['created_at'] = now();
        $nationalArr['updated_at'] = now();
        
        $nationalPerformaceData[]=$nationalArr;
        NationalGradeLevelPerformance::insert($nationalPerformaceData);
    }

    public function grade10PerformanceData()
    {
            $newnationalArray = array();
            $newnationalArray['math'] =array(
                'cards'=>array(
                    'national'=>220
                )
            );
            
            $newnationalArray['sci'] =array(
                'cards'=>array(
                    'national'=>206
                )
            );

            $newnationalArray['sst'] =array(
                'cards'=>array(
                    'national'=>231
                )
            );

            $newnationalArray['eng'] =array(
                'cards'=>array(
                    'national'=>277
                )
            );

            $newnationalArray['mil'] =array(
                'cards'=>array(
                    'national'=>260
                )
            );

        $nationalArr['grade'] = 10;
        $nationalArr['data'] = json_encode($newnationalArray);
        $nationalArr['created_at'] = now();
        $nationalArr['updated_at'] = now();
        
        $nationalePerformaceData[]=$nationalArr;
        NationalGradeLevelPerformance::insert($nationalePerformaceData);
    }
}
