<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PQs;
use App\Models\PqAnswerKey;
use App\Models\PQQuestionMaster;
use App\Models\FeedbackData;
use App\Models\PQNationaLevelFeedback;
use App\Models\PQStateLevelFeedback;
use App\Models\PQDistrictLevelFeedback;
use DB;
class FeedbackController extends Controller
{
    public function get_feedback()
    {
        /*************************************************************
         * Name: Sanjay,Jogi
         * Desc: PQ and TQ Calculation 
         * Date: 30/12/2021
         * Start Here
         *************************************************************/
        ini_set('max_execution_time', '500');
        $pqData =  PQs::with(['NasExamDetails'=>function($q){
            $q->select('state_cd','district_cd','udise_sch_code');
        }])->get();

        $allGradeCalculateData = array();
        if(count($pqData)>0)
        {
            
            foreach ($pqData as $key => $pq) 
            {
                $questionPassArray = array($pq->pq_q01,$pq->pq_q02,$pq->pq_q03,$pq->pq_q04,$pq->pq_q05,$pq->pq_q06,$pq->pq_q07,$pq->pq_q08,$pq->pq_q09,$pq->pq_q10,$pq->pq_q11,$pq->pq_q12,$pq->pq_q13,$pq->pq_q14,$pq->pq_q15,$pq->pq_q16,$pq->pq_q17,$pq->pq_q18,$pq->pq_q19,$pq->pq_q20,$pq->pq_q21,$pq->pq_q22,$pq->pq_q23,$pq->pq_q24a,$pq->pq_q24b,$pq->pq_q24c,$pq->pq_q24d,$pq->pq_q24e,$pq->pq_q24f,$pq->pq_q24g,$pq->pq_q24h,$pq->pq_q24i,$pq->pq_q25a,$pq->pq_q25b,$pq->pq_q25c,$pq->pq_q25d,$pq->pq_q25e,$pq->pq_q25f,$pq->pq_q25g,$pq->pq_q25h,$pq->pq_q25i,$pq->pq_q25j,$pq->pq_q26a,$pq->pq_q26b,$pq->pq_q26c,$pq->pq_q26d,$pq->pq_q26e,$pq->pq_q26f,$pq->pq_q26g,$pq->pq_q27a,$pq->pq_q27b,$pq->pq_q27c,$pq->pq_q27d,$pq->pq_q27e,$pq->pq_q27f,$pq->pq_q27g,$pq->pq_q28a,$pq->pq_q28b,$pq->pq_q28c,$pq->pq_q28d,$pq->pq_q28e,$pq->pq_q28f,$pq->pq_q28g,$pq->pq_q28h,$pq->pq_q29a,$pq->pq_q29b,$pq->pq_q29c,$pq->pq_q29d,$pq->pq_q29e,$pq->pq_q29f,$pq->pq_q29g,$pq->pq_q30,$pq->pq_q31,$pq->pq_q32,$pq->pq_q33,$pq->pq_q34,$pq->pq_q35,$pq->pq_q36,$pq->pq_q37,$pq->pq_q38,$pq->pq_q39,$pq->pq_q40);

                $checkLaguage                          =  $this->checkAnswerfunction($pq->pq_grade,$questionPassArray);
                $items=array();
                if(count($checkLaguage[1])>0)
                {
                    foreach($checkLaguage[1] as $key=>$value)
                    {
                        $items[] = [
                            'pq_bar'     =>  $pq->pq_bar,
                            'state_id'     =>  $pq['NasExamDetails']->state_cd,
                            'district_id'   =>  $pq['NasExamDetails']->district_cd,
                            'grade'     =>  $pq->pq_grade,
                            'question_code'=>$key,
                            'correct_ans'=>($value==1)?$value:0,
                            'average_performance_in_percentage'=>($value*100)/1,
                            'created_at' => now(),
                            'updated_at' => now()
                        ];
                        
                    }
                }
                $msgFeed = FeedbackData::insert($items);
                
            }
        }

        /*************************************************************
         * Name: Sanjay
         * Desc: District wise learning outcome Process data in all grade
         * Date: 29/12/2021
         * Start Here
         *************************************************************/
        $FeedbackData = DB::table('feedback_data')->select('feedback_data.state_id','feedback_data.district_id','feedback_data.grade','feedback_data.question_code','pq_question_master.question_desc  as question',DB::raw("count(feedback_data.id)  AS total_parent"), DB::raw("(SUM(average_performance_in_percentage::float)/count(feedback_data.id)) as avg"))
        ->leftJoin('pq_question_master','pq_question_master.question_id','=','feedback_data.question_code')
        ->groupBy('feedback_data.state_id')
        ->groupBy('feedback_data.district_id')
        ->groupBy('feedback_data.grade')
        ->groupBy('feedback_data.question_code')
        ->groupBy('pq_question_master.question_desc')
        ->get();
        $newFeedbackData = array();
        if(count($FeedbackData)>0)
        {
            DB::table('pq_district_level_feedback')->truncate();
            foreach($FeedbackData as $newLOData)
            {
                $newFeedbackData['state_id'] = (int)$newLOData->state_id;
                $newFeedbackData['district_id'] = (int)$newLOData->district_id;
                $newFeedbackData['grade'] = (int)$newLOData->grade;
                $newFeedbackData['level']     =  'pq';
                $newFeedbackData['question_code'] = isset($newLOData->question_code)?$newLOData->question_code:0;
                $newFeedbackData['question_desc'] = isset($newLOData->question)?$newLOData->question:0;
                $newFeedbackData['total_parent'] = isset($newLOData->total_parent)?$newLOData->total_parent:0;
                $newFeedbackData['avg'] = isset($newLOData->avg)?$newLOData->avg:0;
                $newFeedbackData['created_at'] = now();
                $newFeedbackData['updated_at'] = now();

                $districtFeedbackFinalData[]=$newFeedbackData;
            }
        }

        $dNLOData = PQDistrictLevelFeedback::insert($districtFeedbackFinalData);

        /*************************************************************
         * Name: Sanjay
         * Desc: State wise learning outcome Process data in all grade
         * Date: 29/12/2021
         * Start Here
         *************************************************************/
        $FeedbackDataForState = DB::table('feedback_data')->select('feedback_data.state_id','feedback_data.grade','feedback_data.question_code','pq_question_master.question_desc  as question',DB::raw("count(feedback_data.id)  AS total_parent"), DB::raw("(SUM(average_performance_in_percentage::float)/count(feedback_data.id)) as avg"))
        ->leftJoin('pq_question_master','pq_question_master.question_id','=','feedback_data.question_code')
        ->groupBy('feedback_data.state_id')
        ->groupBy('feedback_data.grade')
        ->groupBy('feedback_data.question_code')
        ->groupBy('pq_question_master.question_desc')
        ->get();
        $newFeedbackDataS = array();
        if(count($FeedbackDataForState)>0)
        {
            DB::table('pq_state_level_feedback')->truncate();
            foreach($FeedbackDataForState as $newLODataState)
            {
                $newFeedbackDataS['state_id'] = (int)$newLODataState->state_id;
                $newFeedbackDataS['grade'] = (int)$newLODataState->grade;
                $newFeedbackDataS['level']     =  'pq';
                $newFeedbackDataS['question_code'] = isset($newLODataState->question_code)?$newLODataState->question_code:0;
                $newFeedbackDataS['question_desc'] = isset($newLODataState->question)?$newLODataState->question:0;
                $newFeedbackDataS['total_parent'] = isset($newLODataState->total_parent)?$newLODataState->total_parent:0;
                $newFeedbackDataS['avg'] = isset($newLODataState->avg)?$newLODataState->avg:0;
                $newFeedbackDataS['created_at'] = now();
                $newFeedbackDataS['updated_at'] = now();

                $stateFeedbackFinalData[]=$newFeedbackDataS;
            }
        }

        $dNLODataState = PQStateLevelFeedback::insert($stateFeedbackFinalData);

        /*************************************************************
         * Name: Sanjay
         * Desc: National wise learning outcome Process data in all grade
         * Date: 29/12/2021
         * Start Here
         *************************************************************/
        $FeedbackDataNational = DB::table('feedback_data')->select('feedback_data.grade','feedback_data.question_code','pq_question_master.question_desc  as question',DB::raw("count(feedback_data.id)  AS total_parent"), DB::raw("(SUM(average_performance_in_percentage::float)/count(feedback_data.id)) as avg"))
        ->leftJoin('pq_question_master','pq_question_master.question_id','=','feedback_data.question_code')
        ->groupBy('feedback_data.grade')
        ->groupBy('feedback_data.question_code')
        ->groupBy('pq_question_master.question_desc')
        ->get();
        $newFeedbackDataNational = array();
        if(count($FeedbackDataNational)>0)
        {
            DB::table('pq_national_level_feedback')->truncate();
            foreach($FeedbackDataNational as $newLODataNational)
            {
                $newFeedbackDataNational['grade'] = (int)$newLODataNational->grade;
                $newFeedbackDataNational['level']     =  'pq';
                $newFeedbackDataNational['question_code'] = isset($newLODataNational->question_code)?$newLODataNational->question_code:0;
                $newFeedbackDataNational['question_desc'] = isset($newLODataNational->question)?$newLODataNational->question:0;
                $newFeedbackDataNational['total_parent'] = isset($newLODataNational->total_parent)?$newLODataNational->total_parent:0;
                $newFeedbackDataNational['avg'] = isset($newLODataNational->avg)?$newLODataNational->avg:0;
                $newFeedbackDataNational['created_at'] = now();
                $newFeedbackDataNational['updated_at'] = now();

                $NationalFeedbackFinalData[]=$newFeedbackDataNational;
            }
        }

        $dNLODataNational = PQNationaLevelFeedback::insert($NationalFeedbackFinalData);
        if($dNLODataNational)
        {
            return "FeedBack Process table successfully created.";
        }
        else
        {
            return "Something wrong.";
        }
    }

    public function checkAnswerfunction($grade,$questionNumbers)
    {

         $lagCount = 0 ;
         $count_subject_wise_total_ans = array();
         foreach ($questionNumbers as $key => $value) 
         {
            //  dd($questionNumbers);
            $pqQuestionNumber  = $this->excelrowData($key);
            $checkquestion = PQQuestionMaster::where('grade',ltrim($grade,"0"))->pluck('question_id')->toArray();
            $result = PqAnswerKey::where('pq_grade',ltrim($grade,"0"))
                         ->where($pqQuestionNumber,$value)->count();
            if(in_array($pqQuestionNumber,$checkquestion))
            {
                if($result==1)
                {
                    @$count_subject_wise_total_ans[$pqQuestionNumber]++;
                    $lagCount++; 
                }
                else
                {
                    @$count_subject_wise_total_ans[$pqQuestionNumber]--;
                }
            } 
    
              
         }
         return array($lagCount,$count_subject_wise_total_ans);
         
    }

    public function generateFeedbackanswerkey()
    {
        $setData = [3,5,8,10];
       foreach ($setData as $key => $value) {
           
           $pq_key = new PqAnswerKey;
           $pq_key->pq_grade  = $value;
           $pq_key->pq_q01  = rand(1,2);
           $pq_key->pq_q02  = rand(1,2);
           $pq_key->pq_q03  = rand(1,2);
           $pq_key->pq_q04  = rand(1,2);
           $pq_key->pq_q05  = rand(1,2);
           $pq_key->pq_q06  = rand(1,2);
           $pq_key->pq_q07  = rand(1,2);
           $pq_key->pq_q08  = rand(1,2);
           $pq_key->pq_q09  = rand(1,2);
           $pq_key->pq_q10  = rand(1,2);
           $pq_key->pq_q11  = rand(1,2);
           $pq_key->pq_q12  = rand(1,2);
           $pq_key->pq_q13  = rand(1,2);
           $pq_key->pq_q14  = rand(1,2);
           $pq_key->pq_q15  = rand(1,2);
           $pq_key->pq_q16  = rand(1,2);
           $pq_key->pq_q17  = rand(1,2);
           $pq_key->pq_q18  = rand(1,2);
           $pq_key->pq_q19  = rand(1,2);
           $pq_key->pq_q20  = rand(1,2);
           $pq_key->pq_q21  = rand(1,2);
           $pq_key->pq_q22  = rand(1,2);
           $pq_key->pq_q23  = rand(1,2);
           $pq_key->pq_q24a  = rand(1,2);
           $pq_key->pq_q24b  = rand(1,2);
           $pq_key->pq_q24c  = rand(1,2);
           $pq_key->pq_q24d  = rand(1,2);
           $pq_key->pq_q24e  = rand(1,2);
           $pq_key->pq_q24f  = rand(1,2);
           $pq_key->pq_q24g  = rand(1,2);
           $pq_key->pq_q24h  = rand(1,2);
           $pq_key->pq_q24i  = rand(1,2);
           $pq_key->pq_q25a  = rand(1,2);
           $pq_key->pq_q25b  = rand(1,2);
           $pq_key->pq_q25c  = rand(1,2);
           $pq_key->pq_q25d  = rand(1,2);
           $pq_key->pq_q25e  = rand(1,2);
           $pq_key->pq_q25f  = rand(1,2);
           $pq_key->pq_q25g  = rand(1,2);
           $pq_key->pq_q25h  = rand(1,2);
           $pq_key->pq_q25i  = rand(1,2);
           $pq_key->pq_q25j  = rand(1,2);
           $pq_key->pq_q26a  = rand(1,2);
           $pq_key->pq_q26b  = rand(1,2);
           $pq_key->pq_q26c  = rand(1,2);
           $pq_key->pq_q26d  = rand(1,2);
           $pq_key->pq_q26e  = rand(1,2);
           $pq_key->pq_q26f  = rand(1,2);
           $pq_key->pq_q26g  = rand(1,2);
           $pq_key->pq_q27a  = rand(1,2);
           $pq_key->pq_q27b  = rand(1,2);
           $pq_key->pq_q27c  = rand(1,2);
           $pq_key->pq_q27d  = rand(1,2);
           $pq_key->pq_q27e  = rand(1,2);
           $pq_key->pq_q27f  = rand(1,2);
           $pq_key->pq_q27g  = rand(1,2);
           $pq_key->pq_q28a  = rand(1,2);
           $pq_key->pq_q28b  = rand(1,2);
           $pq_key->pq_q28c  = rand(1,2);
           $pq_key->pq_q28d  = rand(1,2);
           $pq_key->pq_q28e  = rand(1,2);
           $pq_key->pq_q28f  = rand(1,2);
           $pq_key->pq_q28g  = rand(1,2);
           $pq_key->pq_q28h  = rand(1,2);
           $pq_key->pq_q29a  = rand(1,2);
           $pq_key->pq_q29b  = rand(1,2);
           $pq_key->pq_q29c  = rand(1,2);
           $pq_key->pq_q29d  = rand(1,2);
           $pq_key->pq_q29e  = rand(1,2);
           $pq_key->pq_q29f  = rand(1,2);
           $pq_key->pq_q29g  = rand(1,2);
           $pq_key->pq_q30  = rand(1,2);
           $pq_key->pq_q31  = rand(1,2);
           $pq_key->pq_q32  = rand(1,2);
           $pq_key->pq_q33  = rand(1,2);
           $pq_key->pq_q34  = rand(1,2);
           $pq_key->pq_q35  = rand(1,2);
           $pq_key->pq_q36  = rand(1,2);
           $pq_key->pq_q37  = rand(1,2);
           $pq_key->pq_q38  = rand(1,2);
           $pq_key->pq_q39  = rand(1,2);
           $pq_key->pq_q40  = rand(1,2);
           $pq_key->save();
       }

       return 'Answer Key Generate Succesfully .....'; 
    }

    public function pqQuestionMaster()
    {
        $setData = [3,5,8,10];
       foreach ($setData as $key => $value) {
           
           $pq_key = new PQQuestionMaster;
           $pq_key->pq_grade  = $value;
           $pq_key->pq_q01  = 'y';
           $pq_key->pq_q02  = 'y';
           $pq_key->pq_q03  = 'y';
           $pq_key->pq_q04  = 'y';
           $pq_key->pq_q05  = 'y';
           $pq_key->pq_q06  = 'y';
           $pq_key->pq_q07  = 'y';
           $pq_key->pq_q08  = 'y';
           $pq_key->pq_q09  = 'y';
           $pq_key->pq_q10  = 'y';
           $pq_key->pq_q11  = 'y';
           $pq_key->pq_q12  = 'y';
           $pq_key->pq_q13  = 'y';
           $pq_key->pq_q14  = 'N';
           $pq_key->pq_q15  = 'N';
           $pq_key->pq_q16  = 'N';
           $pq_key->pq_q17  = 'N';
           $pq_key->pq_q18  = 'N';
           $pq_key->pq_q19  = 'N';
           $pq_key->pq_q20  = 'N';
           $pq_key->pq_q21  = 'N';
           $pq_key->pq_q22  = 'N';
           $pq_key->pq_q23  =  'Y';
           $pq_key->pq_q24a  = 'Y';
           $pq_key->pq_q24b  = 'Y';
           $pq_key->pq_q24c  = 'Y';
           $pq_key->pq_q24d  = 'Y';
           $pq_key->pq_q24e  = 'Y';
           $pq_key->pq_q24f  = 'Y';
           $pq_key->pq_q24g  = 'Y';
           $pq_key->pq_q24h  = 'Y';
           $pq_key->pq_q24i  = 'Y';
           $pq_key->pq_q25a  = 'Y';
           $pq_key->pq_q25b  = 'Y';
           $pq_key->pq_q25c  = 'Y';
           $pq_key->pq_q25d  = 'Y';
           $pq_key->pq_q25e  = 'Y';
           $pq_key->pq_q25f  = 'Y';
           $pq_key->pq_q25g  = 'Y';
           $pq_key->pq_q25h  = 'Y';
           $pq_key->pq_q25i  = 'Y';
           $pq_key->pq_q25j  = 'Y';
           $pq_key->pq_q26a  = 'Y';
           $pq_key->pq_q26b  = 'N';
           $pq_key->pq_q26c  = 'N';
           $pq_key->pq_q26d  = 'N';
           $pq_key->pq_q26e  = 'N';
           $pq_key->pq_q26f  = 'N';
           $pq_key->pq_q26g  = 'N';
           $pq_key->pq_q27a  = 'N';
           $pq_key->pq_q27b  = 'N';
           $pq_key->pq_q27c  = 'N';
           $pq_key->pq_q27d  = 'N';
           $pq_key->pq_q27e  = 'N';
           $pq_key->pq_q27f  = 'N';
           $pq_key->pq_q27g  = 'N';
           $pq_key->pq_q28a  = 'N';
           $pq_key->pq_q28b  = 'N';
           $pq_key->pq_q28c  = 'N';
           $pq_key->pq_q28d  = 'N';
           $pq_key->pq_q28e  = 'N';
           $pq_key->pq_q28f  = 'N';
           $pq_key->pq_q28g  = 'N';
           $pq_key->pq_q28h  = 'N';
           $pq_key->pq_q29a  = 'N';
           $pq_key->pq_q29b  = 'N';
           $pq_key->pq_q29c  = 'N';
           $pq_key->pq_q29d  = 'Y';
           $pq_key->pq_q29e  = 'Y';
           $pq_key->pq_q29f  = 'Y';
           $pq_key->pq_q29g  = 'Y';
           $pq_key->pq_q30  = 'N';
           $pq_key->pq_q31  = 'N';
           $pq_key->pq_q32  = 'N';
           $pq_key->pq_q33  = 'N';
           $pq_key->pq_q34  = 'N';
           $pq_key->pq_q35  = 'N';
           $pq_key->pq_q36  = 'N';
           $pq_key->pq_q37  = 'N';
           $pq_key->pq_q38  = 'N';
           $pq_key->pq_q39  = 'N';
           $pq_key->pq_q40  = 'N';
           $pq_key->save();
       }

       return 'Answer Key Generate Succesfully .....'; 
    }
    function excelrowData($key)
    {
      
       
           $arr= [
                         'pq_q01' 
                         ,'pq_q02'  
                         ,'pq_q03'  
                         ,'pq_q04'  
                         ,'pq_q05'  
                         ,'pq_q06'  
                         ,'pq_q07'  
                         ,'pq_q08'  
                         ,'pq_q09'  
                         ,'pq_q10' 
                         ,'pq_q11'  
                         ,'pq_q12'  
                         ,'pq_q13'  
                         ,'pq_q14' 
                         ,'pq_q15'  
                         ,'pq_q16'  
                         ,'pq_q17' 
                         ,'pq_q18' 
                         ,'pq_q19'  
                         ,'pq_q20'  
                         ,'pq_q21' 
                         ,'pq_q22'  
                         ,'pq_q23' 
                         ,'pq_q24a'
                         ,'pq_q24b'
                         ,'pq_q24c'
                         ,'pq_q24d' 
                         ,'pq_q24e' 
                         ,'pq_q24f' 
                         ,'pq_q24g'
                         ,'pq_q24h' 
                         ,'pq_q24i'
                         ,'pq_q25a'
                         ,'pq_q25b' 
                         ,'pq_q25c' 
                         ,'pq_q25d'
                         ,'pq_q25e' 
                         ,'pq_q25f'
                         ,'pq_q25g'
                         ,'pq_q25h' 
                         ,'pq_q25i' 
                         ,'pq_q25j'
                         ,'pq_q26a' 
                         ,'pq_q26b' 
                         ,'pq_q26c'
                         ,'pq_q26d'
                         ,'pq_q26e'
                         ,'pq_q26f'
                         ,'pq_q26g'
                         ,'pq_q27a'
                         ,'pq_q27b'
                         ,'pq_q27c'
                         ,'pq_q27d'
                         ,'pq_q27e'
                         ,'pq_q27f'
                         ,'pq_q27g'
                         ,'pq_q28a'
                         ,'pq_q28b'
                         ,'pq_q28c'
                         ,'pq_q28d'
                         ,'pq_q28e'
                         ,'pq_q28f'
                         ,'pq_q28g'
                         ,'pq_q28h'
                         ,'pq_q29a'
                         ,'pq_q29b'
                         ,'pq_q29c'
                         ,'pq_q29d'
                         ,'pq_q29e'
                         ,'pq_q29f'
                         ,'pq_q29g'
                         ,'pq_q30' 
                         ,'pq_q31' 
                         ,'pq_q32' 
                         ,'pq_q33' 
                         ,'pq_q34' 
                         ,'pq_q35' 
                         ,'pq_q36' 
                         ,'pq_q37' 
                         ,'pq_q38' 
                         ,'pq_q39' 
                         ,'pq_q40'
                       ];

        return $arr[$key];
    }

}
