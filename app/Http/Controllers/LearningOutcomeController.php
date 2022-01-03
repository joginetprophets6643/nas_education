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
         * Date: 29/12/2021
         * Start Here
         *************************************************************/
        $learningOutComeData = DB::table('learning_outcome_data')->select('learning_outcome_data.state_id','learning_outcome_data.district_id','learning_outcome_data.grade','learning_outcome_data.subject_code','learning_outcome_data.language','los_masters.lo_desc as question',DB::raw("count(learning_outcome_data.id)  AS total_student"),"total_no_question as total_no_question",DB::raw("SUM(correct_ans::int) as right_answer_sum"), DB::raw("(SUM(average_performance_in_percentage::float)/count(total_no_question::int)) as avg"), DB::raw("(select (SUM(average_performance_in_percentage::float)/count(total_no_question::int)) as state_avg
        from learning_outcome_data as l_state
        where l_state.subject_code= learning_outcome_data.subject_code and l_state.state_id= learning_outcome_data.state_id)"), DB::raw("(select (SUM(average_performance_in_percentage::float)/count(total_no_question::int)) as national_avg
        from learning_outcome_data as l_national
        where l_national.subject_code= learning_outcome_data.subject_code)"))
        ->leftJoin('los_masters','los_masters.lo_id','=','learning_outcome_data.subject_code')
        ->groupBy('learning_outcome_data.state_id')
        ->groupBy('learning_outcome_data.district_id')
        ->groupBy('learning_outcome_data.grade')
        ->groupBy('learning_outcome_data.subject_code')
        ->groupBy('learning_outcome_data.language')
        ->groupBy('los_masters.lo_desc')
        ->groupBy('total_no_question')
        ->get();
        $newlearningOutComeData = array();
        if(count($learningOutComeData)>0)
        {
            DB::table('district_grade_level_learningoutcome')->truncate();
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
                $newlearningOutComeData['state_avg'] = isset($newLOData->state_avg)?$newLOData->state_avg:0;
                $newlearningOutComeData['national_avg'] = isset($newLOData->national_avg)?$newLOData->national_avg:0;
                $newlearningOutComeData['created_at'] = now();
                $newlearningOutComeData['updated_at'] = now();

                $districtLearningOutcomeFinalData[]=$newlearningOutComeData;
            }
        }

        $dNLOData = DistrictGradeLevelLearningOutCome::insert($districtLearningOutcomeFinalData);

        /*************************************************************
         * Name: Sanjay
         * Desc: State wise learning outcome Process data in all grade
         * Date: 29/12/2021
         * Start Here
         *************************************************************/
        $learningOutComeDataForState = DB::table('learning_outcome_data')->select('learning_outcome_data.state_id','learning_outcome_data.grade','learning_outcome_data.subject_code','learning_outcome_data.language','los_masters.lo_desc as question',DB::raw("count(learning_outcome_data.id)  AS total_student"),"total_no_question as total_no_question",DB::raw("SUM(correct_ans::int) as right_answer_sum"), DB::raw("(SUM(average_performance_in_percentage::float)/count(total_no_question::int)) as avg"))
        ->leftJoin('los_masters','los_masters.lo_id','=','learning_outcome_data.subject_code')
        ->groupBy('learning_outcome_data.state_id')
        ->groupBy('learning_outcome_data.grade')
        ->groupBy('learning_outcome_data.subject_code')
        ->groupBy('learning_outcome_data.language')
        ->groupBy('los_masters.lo_desc')
        ->groupBy('total_no_question')
        ->get();
        $newlearningOutComeDataS = array();
        if(count($learningOutComeDataForState)>0)
        {
            DB::table('state_grade_level_learningoutcome')->truncate();
            foreach($learningOutComeDataForState as $newLODataState)
            {
                $newlearningOutComeDataS['state_id'] = (int)$newLODataState->state_id;
                $newlearningOutComeDataS['grade'] = (int)$newLODataState->grade;
                $newlearningOutComeDataS['subject_code'] = isset($newLODataState->subject_code)?$newLODataState->subject_code:0;
                $newlearningOutComeDataS['language'] = isset($newLODataState->language)?$newLODataState->language:0;
                $newlearningOutComeDataS['question'] = isset($newLODataState->question)?$newLODataState->question:0;
                $newlearningOutComeDataS['total_student'] = isset($newLODataState->total_student)?$newLODataState->total_student:0;
                $newlearningOutComeDataS['avg'] = isset($newLODataState->avg)?$newLODataState->avg:0;
                $newlearningOutComeDataS['created_at'] = now();
                $newlearningOutComeDataS['updated_at'] = now();

                $stateLearningOutcomeFinalData[]=$newlearningOutComeDataS;
            }
        }

        $dNLODataState = StateGradeLevelLearningOutCome::insert($stateLearningOutcomeFinalData);

        /*************************************************************
         * Name: Sanjay
         * Desc: National wise learning outcome Process data in all grade
         * Date: 29/12/2021
         * Start Here
         *************************************************************/
        $learningOutComeDataNational = DB::table('learning_outcome_data')->select('learning_outcome_data.grade','learning_outcome_data.subject_code','learning_outcome_data.language','los_masters.lo_desc as question',DB::raw("count(learning_outcome_data.id)  AS total_student"),"total_no_question as total_no_question",DB::raw("SUM(correct_ans::int) as right_answer_sum"), DB::raw("(SUM(average_performance_in_percentage::float)/count(total_no_question::int)) as avg"))
        ->leftJoin('los_masters','los_masters.lo_id','=','learning_outcome_data.subject_code')
        ->groupBy('learning_outcome_data.grade')
        ->groupBy('learning_outcome_data.subject_code')
        ->groupBy('learning_outcome_data.language')
        ->groupBy('los_masters.lo_desc')
        ->groupBy('total_no_question')
        ->get();
        $newlearningOutComeDataNational = array();
        if(count($learningOutComeDataNational)>0)
        {
            DB::table('national_grade_level_learningoutcome')->truncate();
            foreach($learningOutComeDataNational as $newLODataNational)
            {
                $newlearningOutComeDataNational['grade'] = (int)$newLODataNational->grade;
                $newlearningOutComeDataNational['subject_code'] = isset($newLODataNational->subject_code)?$newLODataNational->subject_code:0;
                $newlearningOutComeDataNational['language'] = isset($newLODataNational->language)?$newLODataNational->language:0;
                $newlearningOutComeDataNational['question'] = isset($newLODataNational->question)?$newLODataNational->question:0;
                $newlearningOutComeDataNational['total_student'] = isset($newLODataNational->total_student)?$newLODataNational->total_student:0;
                $newlearningOutComeDataNational['avg'] = isset($newLODataNational->avg)?$newLODataNational->avg:0;
                $newlearningOutComeDataNational['created_at'] = now();
                $newlearningOutComeDataNational['updated_at'] = now();

                $NationalLearningOutcomeFinalData[]=$newlearningOutComeDataNational;
            }
        }

        $dNLODataNational = NationalGradeLevelLearningOutCome::insert($NationalLearningOutcomeFinalData);
        if($dNLODataNational)
        {
            return "Learning OutCome Process table successfully created.";
        }
        else
        {
            return "Something wrong.";
        }

    }
}
