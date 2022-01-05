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
use App\Models\TQs;
use App\Models\TqAnswerKey;
use App\Models\TQQuestionMaster;
use App\Models\FeedbackDataTq;
use App\Models\SQs;
use App\Models\SqAnswerKey;
use App\Models\SQQuestionMaster;
use App\Models\FeedbackDataSq;
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
        ini_set('max_execution_time', '1500');
        DB::table('feedback_data')->truncate();
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
            DB::table('pq_district_level_feedback')->where('level','pq')->delete();
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
            DB::table('pq_state_level_feedback')->where('level','pq')->delete();
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
            DB::table('pq_national_level_feedback')->where('level','pq')->delete();
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
   //Feedback For TQ
    public function get_feedback_tq()
    {   
        ini_set('max_execution_time', '1500');
        DB::table('feedback_data_tq')->truncate();
        $tqData =  TQs::with(['NasExamDetails'=>function($q){
            $q->select('state_cd','district_cd','udise_sch_code');
        }])->get();
        
        $allGradeCalculateData = array();
        if(count($tqData)>0)
        {
            
            foreach ($tqData as $key => $tq) 
            {
                $questionPassArray = array($tq->tq_q01,$tq->tq_q02,$tq->tq_q03,$tq->tq_q04,$tq->tq_q05,$tq->tq_q06,$tq->tq_q07,$tq->tq_q08,$tq->tq_q09,$tq->tq_q10,$tq->tq_q11,$tq->tq_q12,$tq->tq_q13,$tq->tq_q14,$tq->tq_q15,$tq->tq_q16,$tq->tq_q17,$tq->tq_q18,$tq->tq_q19,$tq->tq_q20,$tq->tq_q21,$tq->tq_q22,$tq->tq_q23,$tq->tq_q24,$tq->tq_q25,$tq->tq_q26,$tq->tq_q27,$tq->tq_q28,$tq->tq_q29,$tq->tq_q30,$tq->tq_q31,$tq->tq_q32,$tq->tq_q33,$tq->tq_q34,$tq->tq_q35,$tq->tq_q36,$tq->tq_q37,$tq->tq_q38,$tq->tq_q39,$tq->tq_q40,$tq->tq_q41,$tq->tq_q42,$tq->tq_q43,$tq->tq_q44,$tq->tq_q45,$tq->tq_q46,$tq->tq_q47,$tq->tq_q48,$tq->tq_q49,$tq->tq_q50,$tq->tq_q51,$tq->tq_q52,$tq->tq_q53,$tq->tq_q54,$tq->tq_q55,$tq->tq_q56,$tq->tq_q57,$tq->tq_q58,$tq->tq_q59,$tq->tq_q60,$tq->tq_q61,$tq->tq_q62,$tq->tq_q63,$tq->tq_q64,$tq->tq_q65,$tq->tq_q66,$tq->tq_q67,$tq->tq_q68,$tq->tq_q69,$tq->tq_q70a,$tq->tq_q70b,$tq->tq_q70c,$tq->tq_q70d,$tq->tq_q71a,$tq->tq_q71b,$tq->tq_q71c,$tq->tq_q71d,$tq->tq_q71e,$tq->tq_q71f);

                $checkLaguage =  $this->checkAnswerfunctiontq($tq->tq_grade,$questionPassArray);
                $items=array();
                if(count($checkLaguage[1])>0)
                {
                    foreach($checkLaguage[1] as $key=>$value)
                    {
                        $items[] = [
                            'tq_bar'     =>  $tq->tq_bar,
                            'state_id'     =>  $tq['NasExamDetails']->state_cd,
                            'district_id'   =>  $tq['NasExamDetails']->district_cd,
                            'grade'     =>  $tq->tq_grade,
                            'question_code'=>$key,
                            'correct_ans'=>($value==1)?$value:0,
                            'average_performance_in_percentage'=>($value*100)/1,
                            'created_at' => now(),
                            'updated_at' => now()
                        ];
                        
                    }
                }
                $msgFeed = FeedbackDataTq::insert($items);
                
            }
        }

        $FeedbackData = DB::table('feedback_data_tq')->select('feedback_data_tq.state_id','feedback_data_tq.district_id','feedback_data_tq.grade','feedback_data_tq.question_code','tq_question_master.question_desc  as question',DB::raw("count(feedback_data_tq.id)  AS total_parent"), DB::raw("(SUM(average_performance_in_percentage::float)/count(feedback_data_tq.id)) as avg"))
        ->leftJoin('tq_question_master','tq_question_master.question_id','=','feedback_data_tq.question_code')
        ->groupBy('feedback_data_tq.state_id')
        ->groupBy('feedback_data_tq.district_id')
        ->groupBy('feedback_data_tq.grade')
        ->groupBy('feedback_data_tq.question_code')
        ->groupBy('tq_question_master.question_desc')
        ->get();
        
        $newFeedbackData = array();
        if(count($FeedbackData)>0)
        {
            DB::table('pq_district_level_feedback')->where('level','tq')->delete();
            foreach($FeedbackData as $newLOData)
            {
                $newFeedbackData['state_id'] = (int)$newLOData->state_id;
                $newFeedbackData['district_id'] = (int)$newLOData->district_id;
                $newFeedbackData['grade'] = (int)$newLOData->grade;
                $newFeedbackData['level']     =  'tq';
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

        $FeedbackDataForState = DB::table('feedback_data_tq')->select('feedback_data_tq.state_id','feedback_data_tq.grade','feedback_data_tq.question_code','tq_question_master.question_desc  as question',DB::raw("count(feedback_data_tq.id)  AS total_parent"), DB::raw("(SUM(average_performance_in_percentage::float)/count(feedback_data_tq.id)) as avg"))
        ->leftJoin('tq_question_master','tq_question_master.question_id','=','feedback_data_tq.question_code')
        ->groupBy('feedback_data_tq.state_id')
        ->groupBy('feedback_data_tq.grade')
        ->groupBy('feedback_data_tq.question_code')
        ->groupBy('tq_question_master.question_desc')
        ->get();
        $newFeedbackDataS = array();
        if(count($FeedbackDataForState)>0)
        {
            DB::table('pq_state_level_feedback')->where('level','tq')->delete();
            foreach($FeedbackDataForState as $newLODataState)
            {
                $newFeedbackDataS['state_id'] = (int)$newLODataState->state_id;
                $newFeedbackDataS['grade'] = (int)$newLODataState->grade;
                $newFeedbackDataS['level']     =  'tq';
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

        $FeedbackDataNational = DB::table('feedback_data_tq')->select('feedback_data_tq.grade','feedback_data_tq.question_code','tq_question_master.question_desc  as question',DB::raw("count(feedback_data_tq.id)  AS total_parent"), DB::raw("(SUM(average_performance_in_percentage::float)/count(feedback_data_tq.id)) as avg"))
        ->leftJoin('tq_question_master','tq_question_master.question_id','=','feedback_data_tq.question_code')
        ->groupBy('feedback_data_tq.grade')
        ->groupBy('feedback_data_tq.question_code')
        ->groupBy('tq_question_master.question_desc')
        ->get();
        $newFeedbackDataNational = array();
        if(count($FeedbackDataNational)>0)
        {
            DB::table('pq_national_level_feedback')->where('level','tq')->delete();
            foreach($FeedbackDataNational as $newLODataNational)
            {
                $newFeedbackDataNational['grade'] = (int)$newLODataNational->grade;
                $newFeedbackDataNational['level']     =  'tq';
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

    public function checkAnswerfunctiontq($grade,$questionNumbers)
    {
         $lagCount = 0 ;
         $count_subject_wise_total_ans = array();
         foreach ($questionNumbers as $key => $value) 
         {
            //  dd($questionNumbers);
            $tqQuestionNumber  = $this->excelrowDataTq($key);
            $checkquestion = TQQuestionMaster::where('grade',ltrim($grade,"0"))->pluck('question_id')->toArray();
            $result = TqAnswerKey::where('tq_grade',ltrim($grade,"0"))
                         ->where($tqQuestionNumber,$value)->count();
            if(in_array($tqQuestionNumber,$checkquestion))
            {
                if($result==1)
                {
                    @$count_subject_wise_total_ans[$tqQuestionNumber]++;
                    $lagCount++; 
                }
                else
                {
                    @$count_subject_wise_total_ans[$tqQuestionNumber]--;
                }
            } 
    
              
         }
         return array($lagCount,$count_subject_wise_total_ans);  
    }

    public function generateFeedbackanswerkeyTq()
    {
       $setData = [3,5,8,10];
       foreach ($setData as $key => $value) {
           
        $tq_key = new TqAnswerKey;
        $tq_key->tq_grade  = $value;
        $tq_key->tq_q01  = rand(1,2);
        $tq_key->tq_q02  = rand(1,2);
        $tq_key->tq_q03  = rand(1,2);
        $tq_key->tq_q04  = rand(1,2);
        $tq_key->tq_q05  = rand(1,2);
        $tq_key->tq_q06  = rand(1,2);
        $tq_key->tq_q07  = rand(1,2);
        $tq_key->tq_q08  = rand(1,2);
        $tq_key->tq_q09  = rand(1,2);
        $tq_key->tq_q10  = rand(1,2);
        $tq_key->tq_q11  = rand(1,2);
        $tq_key->tq_q12  = rand(1,2);
        $tq_key->tq_q13  = rand(1,2);
        $tq_key->tq_q14  = rand(1,2);
        $tq_key->tq_q15  = rand(1,2);
        $tq_key->tq_q16  = rand(1,2);
        $tq_key->tq_q17  = rand(1,2);
        $tq_key->tq_q18  = rand(1,2);
        $tq_key->tq_q19  = rand(1,2);
        $tq_key->tq_q20  = rand(1,2);
        $tq_key->tq_q21  = rand(1,2);
        $tq_key->tq_q22  = rand(1,2);
        $tq_key->tq_q23  = rand(1,2);
        $tq_key->tq_q24  = rand(1,2);
        $tq_key->tq_q25  = rand(1,2);
        $tq_key->tq_q26  = rand(1,2);
        $tq_key->tq_q27  = rand(1,2);
        $tq_key->tq_q28  = rand(1,2);
        $tq_key->tq_q29  = rand(1,2);
        $tq_key->tq_q30  = rand(1,2);
        $tq_key->tq_q31  = rand(1,2);
        $tq_key->tq_q32  = rand(1,2);
        $tq_key->tq_q33  = rand(1,2);
        $tq_key->tq_q34  = rand(1,2);
        $tq_key->tq_q35  = rand(1,2);
        $tq_key->tq_q36  = rand(1,2);
        $tq_key->tq_q37  = rand(1,2);
        $tq_key->tq_q38  = rand(1,2);
        $tq_key->tq_q39  = rand(1,2);
        $tq_key->tq_q40  = rand(1,2);
        $tq_key->tq_q41  = rand(1,2);
        $tq_key->tq_q42  = rand(1,2);
        $tq_key->tq_q43  = rand(1,2);
        $tq_key->tq_q44  = rand(1,2);
        $tq_key->tq_q45  = rand(1,2);
        $tq_key->tq_q46  = rand(1,2);
        $tq_key->tq_q47  = rand(1,2);
        $tq_key->tq_q48  = rand(1,2);
        $tq_key->tq_q49  = rand(1,2);
        $tq_key->tq_q50  = rand(1,2);
        $tq_key->tq_q51  = rand(1,2);
        $tq_key->tq_q52  = rand(1,2);
        $tq_key->tq_q53  = rand(1,2);
        $tq_key->tq_q54  = rand(1,2);
        $tq_key->tq_q55  = rand(1,2);
        $tq_key->tq_q56  = rand(1,2);
        $tq_key->tq_q57  = rand(1,2);
        $tq_key->tq_q58  = rand(1,2);
        $tq_key->tq_q59  = rand(1,2);
        $tq_key->tq_q60  = rand(1,2);
        $tq_key->tq_q61  = rand(1,2);
        $tq_key->tq_q62  = rand(1,2);
        $tq_key->tq_q63  = rand(1,2);
        $tq_key->tq_q64  = rand(1,2);
        $tq_key->tq_q65  = rand(1,2);
        $tq_key->tq_q66  = rand(1,2);
        $tq_key->tq_q67  = rand(1,2);
        $tq_key->tq_q68  = rand(1,2);
        $tq_key->tq_q69  = rand(1,2);
        $tq_key->tq_q70a  = rand(1,2);
        $tq_key->tq_q70b  = rand(1,2);
        $tq_key->tq_q70a  = rand(1,2);
        $tq_key->tq_q70c  = rand(1,2);
        $tq_key->tq_q70d  = rand(1,2);
        $tq_key->tq_q71a  = rand(1,2);
        $tq_key->tq_q71b  = rand(1,2);
        $tq_key->tq_q71c  = rand(1,2);
        $tq_key->tq_q71d  = rand(1,2);
        $tq_key->tq_q71e  = rand(1,2);
        $tq_key->tq_q71f  = rand(1,2);
        $tq_key->save();
       }

       return 'Answer Key Generate Succesfully .....'; 
    }

    function excelrowDataTq($key)
    {
      
       
           $arr= [
             'tq_q01'
            ,'tq_q02' 
            ,'tq_q03' 
            ,'tq_q04' 
            ,'tq_q05' 
            ,'tq_q06' 
            ,'tq_q07' 
            ,'tq_q08' 
            ,'tq_q09' 
            ,'tq_q10' 
            ,'tq_q11' 
            ,'tq_q12' 
            ,'tq_q13' 
            ,'tq_q14' 
            ,'tq_q15' 
            ,'tq_q16' 
            ,'tq_q17' 
            ,'tq_q18' 
            ,'tq_q19' 
            ,'tq_q20' 
            ,'tq_q21' 
            ,'tq_q22' 
            ,'tq_q23' 
            ,'tq_q24' 
            ,'tq_q25' 
            ,'tq_q26' 
            ,'tq_q27' 
            ,'tq_q28' 
            ,'tq_q29' 
            ,'tq_q30' 
            ,'tq_q31' 
            ,'tq_q32' 
            ,'tq_q33' 
            ,'tq_q34' 
            ,'tq_q35' 
            ,'tq_q36' 
            ,'tq_q37' 
            ,'tq_q38' 
            ,'tq_q39' 
            ,'tq_q40' 
            ,'tq_q41' 
            ,'tq_q42' 
            ,'tq_q43' 
            ,'tq_q44' 
            ,'tq_q45' 
            ,'tq_q46' 
            ,'tq_q47' 
            ,'tq_q48' 
            ,'tq_q49' 
            ,'tq_q50' 
            ,'tq_q51' 
            ,'tq_q52' 
            ,'tq_q53' 
            ,'tq_q54' 
            ,'tq_q55' 
            ,'tq_q56' 
            ,'tq_q57' 
            ,'tq_q58' 
            ,'tq_q59' 
            ,'tq_q60' 
            ,'tq_q61' 
            ,'tq_q62' 
            ,'tq_q63' 
            ,'tq_q64' 
            ,'tq_q65' 
            ,'tq_q66' 
            ,'tq_q67' 
            ,'tq_q68' 
            ,'tq_q69' 
            ,'tq_q70a' 
            ,'tq_q70b' 
            ,'tq_q70c' 
            ,'tq_q70d' 
            ,'tq_q71a' 
            ,'tq_q71b' 
            ,'tq_q71c' 
            ,'tq_q71d' 
            ,'tq_q71e' 
            ,'tq_q71f'
            ];

        return $arr[$key];
    }

    //Feedback For SQ

    public function get_feedback_sq()
    {
        ini_set('max_execution_time', '1500');
        DB::table('feedback_data_sq')->truncate();
        $sqData =  SQs::with(['NasExamDetails'=>function($q){
            $q->select('state_cd','district_cd','udise_sch_code');
        }])->get();

        $allGradeCalculateData = array();
        if(count($sqData)>0)
        {
            
            foreach ($sqData as $key => $sq) 
            {
                $questionPassArray = array($sq->sq_q01,$sq->sq_q02,$sq->sq_q03,$sq->sq_q04,$sq->sq_q05,$sq->sq_q06,$sq->sq_q07,$sq->sq_q08,$sq->sq_q09,$sq->sq_q10,$sq->sq_q11,$sq->sq_q12,$sq->sq_q13,$sq->sq_q14,$sq->sq_q15,$sq->sq_q16,$sq->sq_q17,$sq->sq_q18,$sq->sq_q19,$sq->sq_q20,$sq->sq_q21,$sq->sq_q22,$sq->sq_q23,$sq->sq_q24,$sq->sq_q25,$sq->sq_q26,$sq->sq_q27,$sq->sq_q28,$sq->sq_q29,$sq->sq_q30,$sq->sq_q31,$sq->sq_q32,$sq->sq_q33,$sq->sq_q34,$sq->sq_q35,$sq->sq_q36,$sq->sq_q37,$sq->sq_q38,$sq->sq_q39,$sq->sq_q40,$sq->sq_q41,$sq->sq_q42,$sq->sq_q43,$sq->sq_q44,$sq->sq_q45,$sq->sq_q46,$sq->sq_q47,$sq->sq_q48,$sq->sq_q49,$sq->sq_q50,$sq->sq_q51,$sq->sq_q52,$sq->sq_q53,$sq->sq_q54,$sq->sq_q55,$sq->sq_q56,$sq->sq_q57,$sq->sq_q58,$sq->sq_q59,$sq->sq_q60,$sq->sq_q61,$sq->sq_q62,$sq->sq_q63,$sq->sq_q64,$sq->sq_q65,$sq->sq_q66,$sq->sq_q67,$sq->sq_q68,$sq->sq_q69a,$sq->sq_q69b,$sq->sq_q69c,$sq->sq_q69d,$sq->sq_q69e,$sq->sq_q69f,$sq->sq_q69g,$sq->sq_q69h,$sq->sq_q70,$sq->sq_q71,$sq->sq_q72,$sq->sq_q73);

                $checkLaguage  =  $this->checkAnswerfunctionsq($questionPassArray);
                $items=array();
                if(count($checkLaguage[1])>0)
                {
                    foreach($checkLaguage[1] as $key=>$value)
                    {
                        $items[] = [
                            'sq_bar'     =>  $sq->sq_bar,
                            'state_id'     =>  $sq['NasExamDetails']->state_cd,
                            'district_id'   =>  $sq['NasExamDetails']->district_cd,
                            'grade'     =>  0,
                            'question_code'=>$key,
                            'correct_ans'=>($value==1)?$value:0,
                            'average_performance_in_percentage'=>($value*100)/1,
                            'created_at' => now(),
                            'updated_at' => now()
                        ];
                        
                    }
                }
                $msgFeed = FeedbackDataSq::insert($items);
                
            }
        }

        $FeedbackDataSq = DB::table('feedback_data_sq')->select('feedback_data_sq.state_id','feedback_data_sq.district_id','feedback_data_sq.grade','feedback_data_sq.question_code','sq_question_master.question_desc  as question',DB::raw("count(feedback_data_sq.id)  AS total_parent"), DB::raw("(SUM(average_performance_in_percentage::float)/count(feedback_data_sq.id)) as avg"))
        ->leftJoin('sq_question_master','sq_question_master.question_id','=','feedback_data_sq.question_code')
        ->groupBy('feedback_data_sq.state_id')
        ->groupBy('feedback_data_sq.grade')
        ->groupBy('feedback_data_sq.district_id')
        ->groupBy('feedback_data_sq.question_code')
        ->groupBy('sq_question_master.question_desc')
        ->get();
        $newFeedbackData = array();
        if(count($FeedbackDataSq)>0)
        {
            DB::table('pq_district_level_feedback')->where('level','sq')->delete();
            foreach($FeedbackDataSq as $newLOData)
            {
                $newFeedbackData['state_id'] = (int)$newLOData->state_id;
                $newFeedbackData['district_id'] = (int)$newLOData->district_id;
                $newFeedbackData['grade'] = (int)$newLOData->grade;
                $newFeedbackData['level']     =  'sq';
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

        $FeedbackDataForState = DB::table('feedback_data_sq')->select('feedback_data_sq.state_id','feedback_data_sq.grade','feedback_data_sq.question_code','sq_question_master.question_desc  as question',DB::raw("count(feedback_data_sq.id)  AS total_parent"), DB::raw("(SUM(average_performance_in_percentage::float)/count(feedback_data_sq.id)) as avg"))
        ->leftJoin('sq_question_master','sq_question_master.question_id','=','feedback_data_sq.question_code')
        ->groupBy('feedback_data_sq.state_id')
        ->groupBy('feedback_data_sq.grade')
        ->groupBy('feedback_data_sq.question_code')
        ->groupBy('sq_question_master.question_desc')
        ->get();
        $newFeedbackDataS = array();
        if(count($FeedbackDataForState)>0)
        {
            DB::table('pq_state_level_feedback')->where('level','sq')->delete();
            foreach($FeedbackDataForState as $newLODataState)
            {
                $newFeedbackDataS['state_id'] = (int)$newLODataState->state_id;
                $newFeedbackDataS['grade'] = (int)$newLODataState->grade;
                $newFeedbackDataS['level']     =  'sq';
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

        $FeedbackDataNational = DB::table('feedback_data_sq')->select('feedback_data_sq.grade','feedback_data_sq.question_code','sq_question_master.question_desc  as question',DB::raw("count(feedback_data_sq.id)  AS total_parent"), DB::raw("(SUM(average_performance_in_percentage::float)/count(feedback_data_sq.id)) as avg"))
        ->leftJoin('sq_question_master','sq_question_master.question_id','=','feedback_data_sq.question_code')
        ->groupBy('feedback_data_sq.grade')
        ->groupBy('feedback_data_sq.question_code')
        ->groupBy('sq_question_master.question_desc')
        ->get();

        $newFeedbackDataNational = array();
        if(count($FeedbackDataNational)>0)
        {
            DB::table('pq_national_level_feedback')->where('level','sq')->delete();
            foreach($FeedbackDataNational as $newLODataNational)
            {
                $newFeedbackDataNational['grade'] = (int)$newLODataNational->grade;
                $newFeedbackDataNational['level']     =  'sq';
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

    public function checkAnswerfunctionsq($questionNumbers)
    {
         $lagCount = 0 ;
         $count_subject_wise_total_ans = array();
         foreach ($questionNumbers as $key => $value) 
         {
            $sqQuestionNumber  = $this->excelrowDataSq($key);
            $checkquestion = SQQuestionMaster::pluck('question_id')->toArray();
            $result = SqAnswerKey::where($sqQuestionNumber,$value)->count();
            if(in_array($sqQuestionNumber,$checkquestion))
            {
                if($result==1)
                {
                    @$count_subject_wise_total_ans[$sqQuestionNumber]++;
                    $lagCount++; 
                }
                else
                {
                    @$count_subject_wise_total_ans[$sqQuestionNumber]--;
                }
            } 
    
              
         }
         return array($lagCount,$count_subject_wise_total_ans);  
    }

    public function generateFeedbackanswerkeySq()
    {  
        $sq_key = new SqAnswerKey;
        $sq_key->sq_q01  = rand(1,2);
        $sq_key->sq_q02  = rand(1,2);
        $sq_key->sq_q03  = rand(1,2);
        $sq_key->sq_q04  = rand(1,2);
        $sq_key->sq_q05  = rand(1,2);
        $sq_key->sq_q06  = rand(1,2);
        $sq_key->sq_q07  = rand(1,2);
        $sq_key->sq_q08  = rand(1,2);
        $sq_key->sq_q09  = rand(1,2);
        $sq_key->sq_q10  = rand(1,2);
        $sq_key->sq_q11  = rand(1,2);
        $sq_key->sq_q12  = rand(1,2);
        $sq_key->sq_q13  = rand(1,2);
        $sq_key->sq_q14  = rand(1,2);
        $sq_key->sq_q15  = rand(1,2);
        $sq_key->sq_q16  = rand(1,2);
        $sq_key->sq_q17  = rand(1,2);
        $sq_key->sq_q18  = rand(1,2);
        $sq_key->sq_q19  = rand(1,2);
        $sq_key->sq_q20  = rand(1,2);
        $sq_key->sq_q21  = rand(1,2);
        $sq_key->sq_q22  = rand(1,2);
        $sq_key->sq_q23  = rand(1,2);
        $sq_key->sq_q24  = rand(1,2);
        $sq_key->sq_q25  = rand(1,2);
        $sq_key->sq_q26  = rand(1,2);
        $sq_key->sq_q27  = rand(1,2);
        $sq_key->sq_q28  = rand(1,2);
        $sq_key->sq_q29  = rand(1,2);
        $sq_key->sq_q30  = rand(1,2);
        $sq_key->sq_q31  = rand(1,2);
        $sq_key->sq_q32  = rand(1,2);
        $sq_key->sq_q33  = rand(1,2);
        $sq_key->sq_q34  = rand(1,2);
        $sq_key->sq_q35  = rand(1,2);
        $sq_key->sq_q36  = rand(1,2);
        $sq_key->sq_q37  = rand(1,2);
        $sq_key->sq_q38  = rand(1,2);
        $sq_key->sq_q39  = rand(1,2);
        $sq_key->sq_q40  = rand(1,2);
        $sq_key->sq_q41  = rand(1,2);
        $sq_key->sq_q42  = rand(1,2);
        $sq_key->sq_q43  = rand(1,2);
        $sq_key->sq_q44  = rand(1,2);
        $sq_key->sq_q45  = rand(1,2);
        $sq_key->sq_q46  = rand(1,2);
        $sq_key->sq_q47  = rand(1,2);
        $sq_key->sq_q48  = rand(1,2);
        $sq_key->sq_q49  = rand(1,2);
        $sq_key->sq_q50  = rand(1,2);
        $sq_key->sq_q51  = rand(1,2);
        $sq_key->sq_q52  = rand(1,2);
        $sq_key->sq_q53  = rand(1,2);
        $sq_key->sq_q54  = rand(1,2);
        $sq_key->sq_q55  = rand(1,2);
        $sq_key->sq_q56  = rand(1,2);
        $sq_key->sq_q57  = rand(1,2);
        $sq_key->sq_q58  = rand(1,2);
        $sq_key->sq_q59  = rand(1,2);
        $sq_key->sq_q60  = rand(1,2);
        $sq_key->sq_q61  = rand(1,2);
        $sq_key->sq_q62  = rand(1,2);
        $sq_key->sq_q63  = rand(1,2);
        $sq_key->sq_q64  = rand(1,2);
        $sq_key->sq_q65  = rand(1,2);
        $sq_key->sq_q66  = rand(1,2);
        $sq_key->sq_q67  = rand(1,2);
        $sq_key->sq_q68  = rand(1,2);
        $sq_key->sq_q69a  = rand(1,2);
        $sq_key->sq_q69b  = rand(1,2);
        $sq_key->sq_q69c  = rand(1,2);
        $sq_key->sq_q69d  = rand(1,2);
        $sq_key->sq_q69e  = rand(1,2);
        $sq_key->sq_q69f  = rand(1,2);
        $sq_key->sq_q69g  = rand(1,2);
        $sq_key->sq_q69h  = rand(1,2);
        $sq_key->sq_q70  = rand(1,2);
        $sq_key->sq_q71  = rand(1,2);
        $sq_key->sq_q72  = rand(1,2);
        $sq_key->sq_q73  = rand(1,2);
        $sq_key->save();

       return 'Answer Key Generate Succesfully .....'; 
    }

    function excelrowDataSq($key)
    {
      
       
           $arr= [
             'sq_q01'
            ,'sq_q02' 
            ,'sq_q03' 
            ,'sq_q04' 
            ,'sq_q05' 
            ,'sq_q06' 
            ,'sq_q07' 
            ,'sq_q08' 
            ,'sq_q09' 
            ,'sq_q10' 
            ,'sq_q11' 
            ,'sq_q12' 
            ,'sq_q13' 
            ,'sq_q14' 
            ,'sq_q15' 
            ,'sq_q16' 
            ,'sq_q17' 
            ,'sq_q18' 
            ,'sq_q19' 
            ,'sq_q20' 
            ,'sq_q21' 
            ,'sq_q22' 
            ,'sq_q23' 
            ,'sq_q24' 
            ,'sq_q25' 
            ,'sq_q26' 
            ,'sq_q27' 
            ,'sq_q28' 
            ,'sq_q29' 
            ,'sq_q30' 
            ,'sq_q31' 
            ,'sq_q32' 
            ,'sq_q33' 
            ,'sq_q34' 
            ,'sq_q35' 
            ,'sq_q36' 
            ,'sq_q37' 
            ,'sq_q38' 
            ,'sq_q39' 
            ,'sq_q40' 
            ,'sq_q41' 
            ,'sq_q42' 
            ,'sq_q43' 
            ,'sq_q44' 
            ,'sq_q45' 
            ,'sq_q46' 
            ,'sq_q47' 
            ,'sq_q48' 
            ,'sq_q49' 
            ,'sq_q50' 
            ,'sq_q51' 
            ,'sq_q52' 
            ,'sq_q53' 
            ,'sq_q54' 
            ,'sq_q55' 
            ,'sq_q56' 
            ,'sq_q57' 
            ,'sq_q58' 
            ,'sq_q59' 
            ,'sq_q60' 
            ,'sq_q61' 
            ,'sq_q62' 
            ,'sq_q63' 
            ,'sq_q64' 
            ,'sq_q65' 
            ,'sq_q66' 
            ,'sq_q67' 
            ,'sq_q68' 
            ,'sq_q69a' 
            ,'sq_q69b' 
            ,'sq_q69c' 
            ,'sq_q69d' 
            ,'sq_q69e' 
            ,'sq_q69f' 
            ,'sq_q69g' 
            ,'sq_q69h' 
            ,'sq_q70' 
            ,'sq_q71' 
            ,'sq_q72'
            ,'sq_q73'
            ];

        return $arr[$key];
    }

}
