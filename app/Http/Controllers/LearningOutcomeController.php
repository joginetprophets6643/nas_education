<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\LearningOutcome;
use App\Models\DistrictGradeLevelLearningOutCome;
use App\Models\NationalGradeLevelLearningOutCome;
use App\Models\StateGradeLevelLearningOutCome;

class LearningOutcomeController extends Controller
{
    public function LearningOutComeProcessData()
    {
        /*************************************************************
         * Name: Sanjay
         * Desc: District wise learning outcome Process data in all grade
         * Date: 28/12/2021
         * Start Here
         *************************************************************/
        $learningOutComeData = DB::table('learning_outcome_data')->select('learning_outcome_data.state_id','learning_outcome_data.district_id','learning_outcome_data.grade','learning_outcome_data.subject_code','learning_outcome_data.language','los_masters.lo_desc as question',DB::raw("count(learning_outcome_data.id)  AS total_student"), DB::raw("(SUM(correct_ans::int)) as avg"))
        ->leftJoin('los_masters','los_masters.lo_id','=','learning_outcome_data.subject_code')
        ->groupBy('learning_outcome_data.state_id')
        ->groupBy('learning_outcome_data.district_id')
        ->groupBy('learning_outcome_data.grade')
        ->groupBy('learning_outcome_data.subject_code')
        ->groupBy('learning_outcome_data.language')
        ->groupBy('los_masters.lo_desc')
        ->get();
        $newlearningOutComeData = array();
        if(count($learningOutComeData)>0)
        {
            DB::table('district_grade_level_performance')->truncate();
            foreach($learningOutComeData as $newLOData)
            {
                $newlearningOutComeData['state_id'] = (int)$newLOData->state_id;
                $newlearningOutComeData['district_id'] = (int)$newLOData->district_id;
                $newlearningOutComeData['grade'] = (int)$newLOData->grade;
                $newlearningOutComeData['subject_code'] = isset($newLOData->subject_code)?$newLOData->subject_code:0;
                $newlearningOutComeData['language'] = isset($newLOData->language)?$newLOData->language:0;
                $newlearningOutComeData['question'] = isset($newLOData->question)?$newLOData->question:0;
                $newlearningOutComeData['total_student'] = isset($newLOData->total_student)?$newLOData->total_student:0;
                $newlearningOutComeData['avg'] = isset($newLOData->avg)?$newLOData->avg:0;
                $newlearningOutComeData['created_at'] = now();
                $newlearningOutComeData['updated_at'] = now();

                $districtLearningOutcomeFinalData[]=$newlearningOutComeData;
            }
        }

        $dNLOData = DistrictGradeLevelLearningOutCome::insert($districtLearningOutcomeFinalData);

        /*************************************************************
         * Name: Sanjay
         * Desc: State wise learning outcome Process data in all grade
         * Date: 28/12/2021
         * Start Here
         *************************************************************/
        // $learningOutComeData = DB::table('learning_outcome_data')->select('learning_outcome_data.state_id','learning_outcome_data.district_id','learning_outcome_data.grade','learning_outcome_data.subject_code','learning_outcome_data.language','los_masters.lo_desc as question',DB::raw("count(learning_outcome_data.id)  AS total_student"), DB::raw("(SUM(correct_ans::int)) as avg"))
        // ->leftJoin('los_masters','los_masters.lo_id','=','learning_outcome_data.subject_code')
        // ->groupBy('learning_outcome_data.state_id')
        // ->groupBy('learning_outcome_data.district_id')
        // ->groupBy('learning_outcome_data.grade')
        // ->groupBy('learning_outcome_data.subject_code')
        // ->groupBy('learning_outcome_data.language')
        // ->groupBy('los_masters.lo_desc')
        // ->get();
        // $newlearningOutComeData = array();
        // if(count($learningOutComeData)>0)
        // {
        //     DB::table('district_grade_level_performance')->truncate();
        //     foreach($learningOutComeData as $newLOData)
        //     {
        //         $newlearningOutComeData['state_id'] = (int)$newLOData->state_id;
        //         $newlearningOutComeData['district_id'] = (int)$newLOData->district_id;
        //         $newlearningOutComeData['grade'] = (int)$newLOData->grade;
        //         $newlearningOutComeData['subject_code'] = isset($newLOData->subject_code)?$newLOData->subject_code:0;
        //         $newlearningOutComeData['language'] = isset($newLOData->language)?$newLOData->language:0;
        //         $newlearningOutComeData['question'] = isset($newLOData->question)?$newLOData->question:0;
        //         $newlearningOutComeData['total_student'] = isset($newLOData->total_student)?$newLOData->total_student:0;
        //         $newlearningOutComeData['avg'] = isset($newLOData->avg)?$newLOData->avg:0;
        //         $newlearningOutComeData['created_at'] = now();
        //         $newlearningOutComeData['updated_at'] = now();

        //         $districtLearningOutcomeFinalData[]=$newlearningOutComeData;
        //     }
        // }

        // $dNLOData = DistrictGradeLevelLearningOutCome::insert($districtLearningOutcomeFinalData);

    }
}
