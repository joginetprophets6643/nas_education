<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\At3s;
use App\Models\At3_key;
use App\Models\DummyAt3s;
use App\Models\At5s;
use App\Models\At5_key;
use App\Models\DummyAt5s;
use App\Models\At8s;
use App\Models\At8s_key;
use App\Models\DummyAt8s;
use App\Models\At10s_key;
use App\Models\At10s;
use App\Models\DummyAt10s;
use App\Models\TQs;
use App\Models\DummyTQs;
use App\Models\AllGradeParticipationTBL;
use App\Models\NasExamDetails; 
use App\Models\At3SetForLanguage; 
use App\Models\QuestionMaster; 
use App\Models\AT3PerformanceData;
use App\Models\DistrictGradeLevelPerformance;
use App\Models\NationalGradeLevelPerformance;
use App\Models\StateGradeLevelPerformance;
use App\Models\PerformanceMaster;
use DB;
use App\Models\LearningOutcome;

class PerformanceController extends Controller
{
    public function questionnaireCalculation()
    {
        ini_set('max_execution_time', '500');
        /*************************************************************
         * Name: Sanjay,Jogi,Chanky
         * Desc: District wise learning outcome and Performance Process data in 3rd grade
         * Date: 28/12/2021
         * subject: Calculation Count for Language , math and EVS
         * Start Here
         *************************************************************/

        $atteptQuestioninAt3s =  At3s::with(['NasExamDetails'=>function($q){
                $q->select('state_cd','district_cd','udise_sch_code','sch_loc_r_u','frame');
            },'PQDetails'=>function($pq){
                $pq->select('pq_bar','pq_gender');
                }])
            ->get();

        DB::table('at3_performance_data')->truncate();
        DB::table('learning_outcome_data')->truncate();
        $at3sCalculateData = array();
        if(count($atteptQuestioninAt3s)>0)
        {
            foreach ($atteptQuestioninAt3s as $key => $at3) 
            {
                $questionPassArray = array($at3->at3_q01,$at3->at3_q02,$at3->at3_q03,$at3->at3_q04,$at3->at3_q05,$at3->at3_q06,$at3->at3_q07,$at3->at3_q08,$at3->at3_q09,$at3->at3_q10,$at3->at3_q11,$at3->at3_q12,$at3->at3_q13,$at3->at3_q14,$at3->at3_q15,$at3->at3_q16,$at3->at3_q17,$at3->at3_q18,$at3->at3_q19,$at3->at3_q20,$at3->at3_q21,$at3->at3_q22,$at3->at3_q23,$at3->at3_q24,$at3->at3_q25,$at3->at3_q26,$at3->at3_q27,$at3->at3_q28,$at3->at3_q29,$at3->at3_q30,$at3->at3_q31,$at3->at3_q32,$at3->at3_q33,$at3->at3_q34,$at3->at3_q35,$at3->at3_q36,$at3->at3_q37,$at3->at3_q38,$at3->at3_q39,$at3->at3_q40,$at3->at3_q41,$at3->at3_q42,$at3->at3_q43,$at3->at3_q44,$at3->at3_q45,$at3->at3_q46,$at3->at3_q47);
                $at3sCalculateData['state_id']         =  $at3['NasExamDetails']->state_cd;
                $at3sCalculateData['district_id']      =  $at3['NasExamDetails']->district_cd;
                $at3sCalculateData['at_bar']           =  $at3->at3_bar;
                $at3sCalculateData['location']         =  $at3['NasExamDetails']->sch_loc_r_u;
                $at3sCalculateData['management']       =  $at3['NasExamDetails']->frame;
                $at3sCalculateData['gender']           =  isset($at3['PQDetails'])?$at3['PQDetails']->pq_gender:'';
                $at3sCalculateData['socialgrp']        =  $at3->at3_socgrp;
                $at3sCalculateData['grade']            =  $at3->at3_grade;
                $checkLaguage                          =  $this->checkLaguagefunction($at3->at3_set,$questionPassArray);
                // $at3sCalculateData['l_avg']            =  $checkLaguage[0];
                // $at3sCalculateData['m_avg']            =  $checkLaguage[1];
                // $at3sCalculateData['e_avg']            =  $checkLaguage[2];
                // $at3sCalculateData['mil_avg']          =  0;
                // $at3sCalculateData['eng_avg']          =  0;
                // $at3sCalculateData['sci_avg']          =  0;
                // $at3sCalculateData['sst_avg']          =  0;

                $at3sCalculateData['l_total_no_question']         =  $checkLaguage[5];
                $at3sCalculateData['l_total_no_correct_ans']         =  $checkLaguage[0];
                $at3sCalculateData['l_avg']         =  ($checkLaguage[5]>0)?($checkLaguage[0]*100)/$checkLaguage[5]:0;
                $at3sCalculateData['m_total_no_question']         =  $checkLaguage[6];
                $at3sCalculateData['m_total_no_correct_ans']         =  $checkLaguage[1];
                $at3sCalculateData['m_avg']         =  ($checkLaguage[6]>0)?($checkLaguage[1]*100)/$checkLaguage[6]:0;
                $at3sCalculateData['e_total_no_question']         =  $checkLaguage[7];
                $at3sCalculateData['e_total_no_correct_ans']         =  $checkLaguage[2];
                $at3sCalculateData['e_avg']         =  ($checkLaguage[7]>0)?($checkLaguage[2]*100)/$checkLaguage[7]:0;
                $at3sCalculateData['mil_total_no_question']         =  0;
                $at3sCalculateData['mil_total_no_correct_ans']         =  0;
                $at3sCalculateData['mil_avg']       =  0;
                $at3sCalculateData['eng_total_no_question']         =  0;
                $at3sCalculateData['eng_total_no_correct_ans']         =  0;
                $at3sCalculateData['eng_avg']       =  0;
                $at3sCalculateData['sci_total_no_question']         =  0;
                $at3sCalculateData['sci_total_no_correct_ans']         =  0;
                $at3sCalculateData['sci_avg']       =  0;
                $at3sCalculateData['sst_total_no_question']         =  0;
                $at3sCalculateData['sst_total_no_correct_ans']         =  0;
                $at3sCalculateData['sst_avg']       =  0;

                $items=array();
                if(count($checkLaguage[4])>0)
                {
                    foreach($checkLaguage[4] as $key=>$value)
                    {
                        $items[] = [
                            'at3_bar'     =>  $at3->at3_bar,
                            'state_id'     =>  $at3['NasExamDetails']->state_cd,
                            'district_id'   =>  $at3['NasExamDetails']->district_cd,
                            'grade'     =>  $at3->at3_grade,
                            'subject_code'=>$key,
                            'language'=>substr($key,0,-3),
                            'total_no_question'=>$checkLaguage[3][$key],
                            'correct_ans'=>$value,
                            'average_performance_in_percentage'=>($value*100)/$checkLaguage[3][$key],
                            'created_at' => now(),
                            'updated_at' => now()
                        ];
                        
                    }
                }
                $at3sCalculateData['created_at']       =  now();
                $at3sCalculateData['updated_at']       =  now();
                $at3FinalCalculateData[]               =  $at3sCalculateData;
                $msglo = LearningOutcome::insert($items);
            }
        }
        $msg3 = AT3PerformanceData::insert($at3FinalCalculateData);

        // dd($at3FinalCalculateData);
        // End here for 3rd grade
        /*************************************************************
         * Name: Sanjay,Jogi,Chanky
         * Desc: District wise learning outcome and Performance Process data in 5th grade
         * Date: 28/12/2021
         * subject: Calculation Count for Language , math and EVS
         * Start Here
         *************************************************************/

        $atteptQuestioninAt5s =  At5s::with(['NasExamDetails'=>function($q){
                    $q->select('state_cd','district_cd','udise_sch_code','sch_loc_r_u','frame');
                },'PQDetails'=>function($pq){
                $pq->select('pq_bar','pq_gender');
            }])
            ->get();

        $at5sCalculateData = array();
        if(count($atteptQuestioninAt5s)>0)
        {
            foreach ($atteptQuestioninAt5s as $key => $at5) 
            {
                $questionPassArray = array($at5->at5_q01,$at5->at5_q02,$at5->at5_q03,$at5->at5_q04,$at5->at5_q05,$at5->at5_q06,$at5->at5_q07,$at5->at5_q08,$at5->at5_q09,$at5->at5_q10,$at5->at5_q11,$at5->at5_q12,$at5->at5_q13,$at5->at5_q14,$at5->at5_q15,$at5->at5_q16,$at5->at5_q17,$at5->at5_q18,$at5->at5_q19,$at5->at5_q20,$at5->at5_q21,$at5->at5_q22,$at5->at5_q23,$at5->at5_q24,$at5->at5_q25,$at5->at5_q26,$at5->at5_q27,$at5->at5_q28,$at5->at5_q29,$at5->at5_q30,$at5->at5_q31,$at5->at5_q32,$at5->at5_q33,$at5->at5_q34,$at5->at5_q35,$at5->at5_q36,$at5->at5_q37,$at5->at5_q38,$at5->at5_q39,$at5->at5_q40,$at5->at5_q41,$at5->at5_q42,$at5->at5_q43,$at5->at5_q44,$at5->at5_q45,$at5->at5_q46,$at5->at5_q47,$at5->at5_q48,$at5->at5_q49,$at5->at5_q50,$at5->at5_q51,$at5->at5_q52,$at5->at5_q53);
                $at5sCalculateData['state_id']      =  $at5['NasExamDetails']->state_cd;
                $at5sCalculateData['district_id']   =  $at5['NasExamDetails']->district_cd;
                $at5sCalculateData['at_bar']           =  $at5->at5_bar;
                $at5sCalculateData['location']      =  $at5['NasExamDetails']->sch_loc_r_u;
                $at5sCalculateData['management']    =  $at5['NasExamDetails']->frame;
                $at5sCalculateData['gender']        =  isset($at5['PQDetails'])?$at5['PQDetails']->pq_gender:'';
                $at5sCalculateData['socialgrp']     =  $at5->at5_socgrp;
                $at5sCalculateData['grade']         =  $at5->at5_grade;
                $checkLaguage                       =  $this->checkLaguagefunctionAt5($at5->at5_set,$questionPassArray);
                $at5sCalculateData['l_total_no_question']         =  $checkLaguage[5];
                $at5sCalculateData['l_total_no_correct_ans']         =  $checkLaguage[0];
                $at5sCalculateData['l_avg']         =  ($checkLaguage[5]>0)?($checkLaguage[0]*100)/$checkLaguage[5]:0;
                $at5sCalculateData['m_total_no_question']         =  $checkLaguage[6];
                $at5sCalculateData['m_total_no_correct_ans']         =  $checkLaguage[1];
                $at5sCalculateData['m_avg']         =  ($checkLaguage[6]>0)?($checkLaguage[1]*100)/$checkLaguage[6]:0;
                $at5sCalculateData['e_total_no_question']         =  $checkLaguage[7];
                $at5sCalculateData['e_total_no_correct_ans']         =  $checkLaguage[2];
                $at5sCalculateData['e_avg']         =  ($checkLaguage[7]>0)?($checkLaguage[2]*100)/$checkLaguage[7]:0;
                $at5sCalculateData['mil_total_no_question']         =  0;
                $at5sCalculateData['mil_total_no_correct_ans']         =  0;
                $at5sCalculateData['mil_avg']       =  0;
                $at5sCalculateData['eng_total_no_question']         =  0;
                $at5sCalculateData['eng_total_no_correct_ans']         =  0;
                $at5sCalculateData['eng_avg']       =  0;
                $at5sCalculateData['sci_total_no_question']         =  0;
                $at5sCalculateData['sci_total_no_correct_ans']         =  0;
                $at5sCalculateData['sci_avg']       =  0;
                $at5sCalculateData['sst_total_no_question']         =  0;
                $at5sCalculateData['sst_total_no_correct_ans']         =  0;
                $at5sCalculateData['sst_avg']       =  0;
                $items5=array();
                if(count($checkLaguage[4])>0)
                {
                    foreach($checkLaguage[4] as $key5=>$value5)
                    {
                        $items5[] = [
                            'at3_bar'     =>  $at5->at5_bar,
                            'state_id'     =>  $at5['NasExamDetails']->state_cd,
                            'district_id'   =>  $at5['NasExamDetails']->district_cd,
                            'grade'     =>  $at5->at5_grade,
                            'subject_code'=>$key5,
                            'language'=>substr($key5,0,-3),
                            'total_no_question'=>$checkLaguage[3][$key5],
                            'correct_ans'=>$value5,
                            'average_performance_in_percentage'=>($value5*100)/$checkLaguage[3][$key5],
                            'created_at' => now(),
                            'updated_at' => now()
                        ];
                        
                    }
                }
                $at5sCalculateData['created_at']    =  now();
                $at5sCalculateData['updated_at']    =  now();
                $at5FinalCalculateData[]            =  $at5sCalculateData;
                $msglo = LearningOutcome::insert($items5);

            }
        }

        $msg5 = AT3PerformanceData::insert($at5FinalCalculateData);

        // End here for 5th grade
        /*************************************************************
         * Name: Sanjay,Jogi,Chanky
         * Desc: District wise learning outcome and Performance Process data in 8th grade
         * Date: 28/12/2021
         * subject: Calculation Count for Language, Math, Science, Social Science
         * Start Here
         *************************************************************/

        $atteptQuestioninAt8s =  At8s::with(['NasExamDetails'=>function($q){
                    $q->select('state_cd','district_cd','udise_sch_code','sch_loc_r_u','frame');
                },'PQDetails'=>function($pq){
                $pq->select('pq_bar','pq_gender');
            }])
            ->get();

        $at8sCalculateData = array();
        if(count($atteptQuestioninAt8s)>0)
        {
            foreach ($atteptQuestioninAt8s as $key => $at8) 
            {
                $questionPassArray = array($at8->at8_q01,$at8->at8_q02,$at8->at8_q03,$at8->at8_q04,$at8->at8_q05,$at8->at8_q06,$at8->at8_q07,$at8->at8_q08,$at8->at8_q09,$at8->at8_q10,$at8->at8_q11,$at8->at8_q12,$at8->at8_q13,$at8->at8_q14,$at8->at8_q15,$at8->at8_q16,$at8->at8_q17,$at8->at8_q18,$at8->at8_q19,$at8->at8_q20,$at8->at8_q21,$at8->at8_q22,$at8->at8_q23,$at8->at8_q24,$at8->at8_q25,$at8->at8_q26,$at8->at8_q27,$at8->at8_q28,$at8->at8_q29,$at8->at8_q30,$at8->at8_q31,$at8->at8_q32,$at8->at8_q33,$at8->at8_q34,$at8->at8_q35,$at8->at8_q36,$at8->at8_q37,$at8->at8_q38,$at8->at8_q39,$at8->at8_q40,$at8->at8_q41,$at8->at8_q42,$at8->at8_q43,$at8->at8_q44,$at8->at8_q45,$at8->at8_q46,$at8->at8_q47,$at8->at8_q48,$at8->at8_q49,$at8->at8_q50,$at8->at8_q51,$at8->at8_q52,$at8->at8_q53,$at8->at8_q54,$at8->at8_q55,$at8->at8_q56,$at8->at8_q57,$at8->at8_q58,$at8->at8_q59,$at8->at8_q60);
                $at8sCalculateData['state_id']      =  $at8['NasExamDetails']->state_cd;
                $at8sCalculateData['district_id']   =  $at8['NasExamDetails']->district_cd;
                $at8sCalculateData['at_bar']           =  $at8->at8_bar;
                $at8sCalculateData['location']      =  $at8['NasExamDetails']->sch_loc_r_u;
                $at8sCalculateData['management']    =  $at8['NasExamDetails']->frame;
                $at8sCalculateData['gender']        =  isset($at8['PQDetails'])?$at8['PQDetails']->pq_gender:'';
                $at8sCalculateData['socialgrp']     =  $at8->at8_socgrp;
                $at8sCalculateData['grade']         =  $at8->at8_grade;
                $checkLaguage                       =  $this->checkLaguagefunctionAt8($at8->at8_set,$questionPassArray);
                // $at8sCalculateData['l_avg']         =  $checkLaguage[0];
                // $at8sCalculateData['m_avg']         =  $checkLaguage[1];
                // $at8sCalculateData['e_avg']         =  0;
                // $at8sCalculateData['mil_avg']       =  0;
                // $at8sCalculateData['eng_avg']       =  0;
                // $at8sCalculateData['sci_avg']       =  $checkLaguage[2];
                // $at8sCalculateData['sst_avg']       =  $checkLaguage[3];

                $at8sCalculateData['l_total_no_question']         =  $checkLaguage[6];
                $at8sCalculateData['l_total_no_correct_ans']         =  $checkLaguage[0];
                $at8sCalculateData['l_avg']         =  ($checkLaguage[6]>0)?($checkLaguage[0]*100)/$checkLaguage[6]:0;
                $at8sCalculateData['m_total_no_question']         =  $checkLaguage[7];
                $at8sCalculateData['m_total_no_correct_ans']         =  $checkLaguage[1];
                $at8sCalculateData['m_avg']         =  ($checkLaguage[7]>0)?($checkLaguage[1]*100)/$checkLaguage[7]:0;
                $at8sCalculateData['e_total_no_question']         =  0;
                $at8sCalculateData['e_total_no_correct_ans']         =  0;
                $at8sCalculateData['e_avg']         =  0;
                $at8sCalculateData['mil_total_no_question']         =  0;
                $at8sCalculateData['mil_total_no_correct_ans']         =  0;
                $at8sCalculateData['mil_avg']       =  0;
                $at8sCalculateData['eng_total_no_question']         =  0;
                $at8sCalculateData['eng_total_no_correct_ans']         =  0;
                $at8sCalculateData['eng_avg']       =  0;
                $at8sCalculateData['sci_total_no_question']         =  $checkLaguage[8];
                $at8sCalculateData['sci_total_no_correct_ans']         =  $checkLaguage[2];
                $at8sCalculateData['sci_avg']       =  ($checkLaguage[8]>0)?($checkLaguage[2]*100)/$checkLaguage[8]:0;
                $at8sCalculateData['sst_total_no_question']         =  $checkLaguage[9];
                $at8sCalculateData['sst_total_no_correct_ans']         =  $checkLaguage[3];
                $at8sCalculateData['sst_avg']       =  ($checkLaguage[9]>0)?($checkLaguage[3]*100)/$checkLaguage[9]:0;


                $items8=array();
                if(count($checkLaguage[5])>0)
                {
                    foreach($checkLaguage[5] as $key8=>$value8)
                    {
                        $items8[] = [
                            'at3_bar'     =>  $at8->at8_bar,
                            'state_id'     =>  $at8['NasExamDetails']->state_cd,
                            'district_id'   =>  $at8['NasExamDetails']->district_cd,
                            'grade'     =>  $at8->at8_grade,
                            'subject_code'=>$key8,
                            'language'=>substr($key8,0,-3),
                            'total_no_question'=>$checkLaguage[4][$key8],
                            'correct_ans'=>$value8,
                            'average_performance_in_percentage'=>($value8*100)/$checkLaguage[4][$key8],
                            'created_at' => now(),
                            'updated_at' => now()
                        ];
                        
                    }
                }
                $at8sCalculateData['created_at']    =  now();
                $at8sCalculateData['updated_at']    =  now();
                $at8FinalCalculateData[]            =  $at8sCalculateData;
                $msglo8 = LearningOutcome::insert($items8);
            }
        }

        $msg8 = AT3PerformanceData::insert($at8FinalCalculateData);

        // End here for 8th grade
        /*************************************************************
         * Name: Sanjay,Jogi,Chanky
         * Desc: District wise learning outcome and Performance Process data in 10th grade
         * Date: 28/12/2021
         * subject: Calculation Count for Modern India Language, English, Math, Science, Social Science
         * Start Here
         *************************************************************/

        $atteptQuestioninAt10s =  At10s::with(['NasExamDetails'=>function($q){
                    $q->select('state_cd','district_cd','udise_sch_code','sch_loc_r_u','frame');
                },'PQDetails'=>function($pq){
                $pq->select('pq_bar','pq_gender');
            }])
            ->get();

        $at10sCalculateData = array();
        if(count($atteptQuestioninAt10s)>0)
        {
            foreach ($atteptQuestioninAt10s as $key => $at10) 
            {
                $questionPassArray = array($at10->at1_q01,$at10->at1_q02,$at10->at1_q03,$at10->at1_q04,$at10->at1_q05,$at10->at1_q06,$at10->at1_q07,$at10->at1_q08,$at10->at1_q09,$at10->at1_q10,$at10->at1_q11,$at10->at1_q12,$at10->at1_q13,$at10->at1_q14,$at10->at1_q15,$at10->at1_q16,$at10->at1_q17,$at10->at1_q18,$at10->at1_q19,$at10->at1_q20,$at10->at1_q21,$at10->at1_q22,$at10->at1_q23,$at10->at1_q24,$at10->at1_q25,$at10->at1_q26,$at10->at1_q27,$at10->at1_q28,$at10->at1_q29,$at10->at1_q30,$at10->at1_q31,$at10->at1_q32,$at10->at1_q33,$at10->at1_q34,$at10->at1_q35,$at10->at1_q36,$at10->at1_q37,$at10->at1_q38,$at10->at1_q39,$at10->at1_q40,$at10->at1_q41,$at10->at1_q42,$at10->at1_q43,$at10->at1_q44,$at10->at1_q45,$at10->at1_q46,$at10->at1_q47,$at10->at1_q48,$at10->at1_q49,$at10->at1_q50,$at10->at1_q51,$at10->at1_q52,$at10->at1_q53,$at10->at1_q54,$at10->at1_q55,$at10->at1_q56,$at10->at1_q57,$at10->at1_q58,$at10->at1_q59,$at10->at1_q60,$at10->at1_q61,$at10->at1_q62,$at10->at1_q63,$at10->at1_q64,$at10->at1_q65,$at10->at1_q66,$at10->at1_q67,$at10->at1_q68,$at10->at1_q69,$at10->at1_q70);
                $at10sCalculateData['state_id']     =  $at10['NasExamDetails']->state_cd;
                $at10sCalculateData['district_id']  =  $at10['NasExamDetails']->district_cd;
                $at10sCalculateData['at_bar']           =  $at10->at1_bar;
                $at10sCalculateData['location']     =  $at10['NasExamDetails']->sch_loc_r_u;
                $at10sCalculateData['management']   =  $at10['NasExamDetails']->frame;
                $at10sCalculateData['gender']       =  isset($at10['PQDetails'])?$at10['PQDetails']->pq_gender:'';
                $at10sCalculateData['socialgrp']    =  $at10->at1_socgrp;
                $at10sCalculateData['grade']        =  $at10->at1_grade;
                $checkLaguage                       =  $this->checkLaguagefunctionAt10($at10->at1_set,$questionPassArray);
                // $at10sCalculateData['l_avg']        =  0;
                // $at10sCalculateData['m_avg']        =  $checkLaguage[2];
                // $at10sCalculateData['e_avg']        =  0;
                // $at10sCalculateData['mil_avg']      =  $checkLaguage[0];
                // $at10sCalculateData['eng_avg']      =  $checkLaguage[1];
                // $at10sCalculateData['sci_avg']      =  $checkLaguage[3];
                // $at10sCalculateData['sst_avg']      =  $checkLaguage[4];


                $at10sCalculateData['l_total_no_question']         =  0;
                $at10sCalculateData['l_total_no_correct_ans']         =  0;
                $at10sCalculateData['l_avg']         =  0;
                $at10sCalculateData['m_total_no_question']         =  $checkLaguage[9];
                $at10sCalculateData['m_total_no_correct_ans']         =  $checkLaguage[2];
                $at10sCalculateData['m_avg']         =  ($checkLaguage[2]*100)/$checkLaguage[9];
                $at10sCalculateData['e_total_no_question']         =  0;
                $at10sCalculateData['e_total_no_correct_ans']         =  0;
                $at10sCalculateData['e_avg']         =  0;
                $at10sCalculateData['mil_total_no_question']         =  $checkLaguage[7];
                $at10sCalculateData['mil_total_no_correct_ans']         =  $checkLaguage[0];
                $at10sCalculateData['mil_avg']       =  ($checkLaguage[0]*100)/$checkLaguage[7];
                $at10sCalculateData['eng_total_no_question']         =  $checkLaguage[8];
                $at10sCalculateData['eng_total_no_correct_ans']         =  $checkLaguage[1];
                $at10sCalculateData['eng_avg']       =  ($checkLaguage[1]*100)/$checkLaguage[8];
                $at10sCalculateData['sci_total_no_question']         =  $checkLaguage[10];
                $at10sCalculateData['sci_total_no_correct_ans']         =  $checkLaguage[3];
                $at10sCalculateData['sci_avg']       =  ($checkLaguage[3]*100)/$checkLaguage[10];
                $at10sCalculateData['sst_total_no_question']         =  $checkLaguage[11];
                $at10sCalculateData['sst_total_no_correct_ans']         =  $checkLaguage[4];
                $at10sCalculateData['sst_avg']       =  ($checkLaguage[4]*100)/$checkLaguage[11];


                $items10=array();
                if(count($checkLaguage[6])>0)
                {
                    foreach($checkLaguage[6] as $key10=>$value10)
                    {
                        $items10[] = [
                            'at3_bar'     =>  $at10->at1_bar,
                            'state_id'     =>  $at10['NasExamDetails']->state_cd,
                            'district_id'   =>  $at10['NasExamDetails']->district_cd,
                            'grade'     =>  $at10->at1_grade,
                            'subject_code'=>$key10,
                            'language'=>substr($key10,0,-3),
                            'total_no_question'=>$checkLaguage[5][$key10],
                            'correct_ans'=>$value10,
                            'average_performance_in_percentage'=>($value10*100)/$checkLaguage[5][$key10],
                            'created_at' => now(),
                            'updated_at' => now()
                        ];
                        
                    }
                }
                $at10sCalculateData['created_at']   =  now();
                $at10sCalculateData['updated_at']   =  now();
                $at10FinalCalculateData[]           =  $at10sCalculateData;

                $msglo10 = LearningOutcome::insert($items10);
            }
        }
        $msg10 = AT3PerformanceData::insert($at10FinalCalculateData);

        // $finalmsg = AT3PerformanceData::insert(array_merge($at3FinalCalculateData,$at5FinalCalculateData,$at8FinalCalculateData,$at10FinalCalculateData));
        // End 10th Grade Here

        // District wise learning outcome Process data in all grade End Here

        /*************************************************************
         * Name: Jogi
         * Desc: All Grade Performance table
         * Date: 05/01/2022
         * Start Here
         *************************************************************/
        $district = 1;
        if($district==1)
        {
            $querySyntax = 'state_id,district_id,';
            $queryGroupSyntax = 'at3_performance_data.state_id, at3_performance_data.district_id,';
            $queryGroupCondition = '';
            $query = $this->queryFunction($querySyntax,$queryGroupSyntax,$queryGroupCondition);
        }
        $at3Data = DB::select($query);
        
        $newData3Grade = array();
        if(count($at3Data)>0)
        {
            $stateLevel = 1;
            $districtPerLevel = 1;
            $blog = DB::table('performance_master')->truncate();
            foreach($at3Data as $nasDetails3)
            {
                if($districtPerLevel==1)
                {
                    $querySyntax = 'state_id,district_id,';
                    $queryGroupSyntax = 'at3_performance_data.state_id, at3_performance_data.district_id,';
                    $queryGroupCondition = 'where  at3_performance_data.state_id='.(int)$nasDetails3->state_id.' and grade = '.(int)$nasDetails3->grade.' and at3_performance_data.district_id = '.(int)$nasDetails3->district_id;
                    $queryPerformanceLevel = $this->queryFunctionPerformanceLevel($querySyntax,$queryGroupSyntax,$queryGroupCondition);
                }
                $districtPerformanceLevel = DB::select($queryPerformanceLevel);
                // dd($districtPerformanceLevel[0]->l_avg_below_basic);
                if($stateLevel==1)
                {
                    $querySyntax = 'state_id,';
                    $queryGroupSyntax = 'at3_performance_data.state_id,';
                    $queryGroupCondition = 'where  at3_performance_data.state_id='.(int)$nasDetails3->state_id.' and grade = '.(int)$nasDetails3->grade;
                    $stateQuery =  $this->queryFunction($querySyntax,$queryGroupSyntax,$queryGroupCondition);
                }
                $stateLevelPerfomanceData = DB::select($stateQuery);
                if(count($stateLevelPerfomanceData)>0)
                {
                    $nationalLevel = 1;
                    $statePerformanceLevel = 1;
                    foreach($stateLevelPerfomanceData as $statelevel)
                    {
                        if($statePerformanceLevel==1)
                        {
                            $querySyntax = 'state_id,';
                            $queryGroupSyntax = 'at3_performance_data.state_id,';
                            $queryGroupCondition = 'where  at3_performance_data.state_id='.(int)$nasDetails3->state_id.' and grade = '.(int)$nasDetails3->grade;
                            $statePerformanceQuery =  $this->queryFunctionPerformanceLevel($querySyntax,$queryGroupSyntax,$queryGroupCondition);
                        }
                        $statePerLevel = DB::select($statePerformanceQuery);
                        // dd($statePerLevel);
                        if($nationalLevel==1)
                        {
                            $querySyntax = '';
                            $queryGroupSyntax = '';
                            $queryGroupCondition = 'where grade = '.(int)$nasDetails3->grade;
                            $nationalQuery =  $this->queryFunction($querySyntax,$queryGroupSyntax,$queryGroupCondition);
                        }
                        $nationalLevelPerfomanceData = DB::select($nationalQuery);
                        if(count($nationalLevelPerfomanceData)>0)
                        {
                            $nationalPerformaceLevel = 1;
                            foreach($nationalLevelPerfomanceData as $nationalLevel)
                            {
                                if($nationalPerformaceLevel==1)
                                {
                                    $querySyntax = '';
                                    $queryGroupSyntax = '';
                                    $queryGroupCondition = 'where grade = '.(int)$nasDetails3->grade;
                                    $nationalPerformanceQuery =  $this->queryFunctionPerformanceLevel($querySyntax,$queryGroupSyntax,$queryGroupCondition);
                                }
                                $nationalPerformanceQuery = DB::select($nationalPerformanceQuery);

                                $newArray['language'] =array(
                                    'cards'=>array(
                                        'district'=>isset($nasDetails3->avg_l_marks)?$nasDetails3->avg_l_marks:'0',
                                        'state'=>isset($statelevel->avg_l_marks)?$statelevel->avg_l_marks:'0',
                                        'national'=>isset($nationalLevel->avg_l_marks)?$nationalLevel->avg_l_marks:'0'),
                                    'gender'=>array(
                                        'district'=>array("boys"=>isset($nasDetails3->l_male_gender)?$nasDetails3->l_male_gender:'0',"girls"=>isset($nasDetails3->l_female_gender)?$nasDetails3->l_female_gender:'0'),
                                        'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                                        'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')),
                                    'location'=>array(
                                        'district'=>array("urban"=>isset($nasDetails3->l_urban_location)?$nasDetails3->l_urban_location:'0',"rural"=>isset($nasDetails3->l_rural_location)?$nasDetails3->l_rural_location:'0'),
                                        'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                                        'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')),
                                    'management'=>array(
                                        'district'=>array("govt"=>isset($nasDetails3->l_govt_management)?$nasDetails3->l_govt_management:'0',"govt_aided"=>isset($nasDetails3->l_govt_aided_management)?$nasDetails3->l_govt_aided_management:'0',"private"=>isset($nasDetails3->l_private_management)?$nasDetails3->l_private_management:'0',"central_govt"=>isset($nasDetails3->l_central_govt_management)?$nasDetails3->l_central_govt_management:'0'),
                                        'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                                        'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')),
                                    'socialgroup'=>array(
                                        'district'=>array("sc"=>isset($nasDetails3->l_sc_social_group)?$nasDetails3->l_sc_social_group:'0',"obc"=>isset($nasDetails3->l_obc_social_group)?$nasDetails3->l_obc_social_group:'0',"st"=>isset($nasDetails3->l_st_social_group)?$nasDetails3->l_st_social_group:'0',"general"=>isset($nasDetails3->l_general_social_group)?$nasDetails3->l_general_social_group:'0'),
                                        'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                                        'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')),
                                    'performance_level'=>array(
                                        'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->l_avg_below_basic)?$districtPerformanceLevel[0]->l_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->l_avg_basic)?$districtPerformanceLevel[0]->l_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->l_avg_proficient)?$districtPerformanceLevel[0]->l_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->l_avg_advanced)?$districtPerformanceLevel[0]->l_avg_advanced:'0'),
                                        'state'=>array("below_basic"=>isset($statePerLevel[0]->l_avg_below_basic)?$statePerLevel[0]->l_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->l_avg_basic)?$statePerLevel[0]->l_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->l_avg_proficient)?$statePerLevel[0]->l_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->l_avg_advanced)?$statePerLevel[0]->l_avg_advanced:'0'),
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->l_avg_below_basic)?$nationalPerformanceQuery[0]->l_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->l_avg_basic)?$nationalPerformanceQuery[0]->l_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->l_avg_proficient)?$nationalPerformanceQuery[0]->l_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->l_avg_advanced)?$nationalPerformanceQuery[0]->l_avg_advanced:'0')));
                
                                $newArray['math'] =array(
                                    'cards'=>array(
                                        'district'=>isset($nasDetails3->avg_m_marks)?$nasDetails3->avg_m_marks:'0',
                                        'state'=>isset($statelevel->avg_m_marks)?$statelevel->avg_m_marks:'0',
                                        'national'=>isset($nationalLevel->avg_m_marks)?$nationalLevel->avg_m_marks:'0'),
                                    'gender'=>array(
                                        'district'=>array("boys"=>isset($nasDetails3->m_male_gender)?$nasDetails3->m_male_gender:'0',"girls"=>isset($nasDetails3->m_female_gender)?$nasDetails3->m_female_gender:'0'),
                                        'state'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0'),
                                        'national'=>array("boys"=>isset($nationalLevel->m_male_gender)?$nationalLevel->m_male_gender:'0',"girls"=>isset($nationalLevel->m_female_gender)?$nationalLevel->m_female_gender:'0')),
                                    'location'=>array(
                                        'district'=>array("urban"=>isset($nasDetails3->m_urban_location)?$nasDetails3->m_urban_location:'0',"rural"=>isset($nasDetails3->m_rural_location)?$nasDetails3->m_rural_location:'0'),
                                        'state'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0'),
                                        'national'=>array("urban"=>isset($nationalLevel->m_urban_location)?$nationalLevel->m_urban_location:'0',"rural"=>isset($nationalLevel->m_rural_location)?$nationalLevel->m_rural_location:'0')),
                                    'management'=>array(
                                        'district'=>array("govt"=>isset($nasDetails3->m_govt_management)?$nasDetails3->m_govt_management:'0',"govt_aided"=>isset($nasDetails3->m_govt_aided_management)?$nasDetails3->m_govt_aided_management:'0',"private"=>isset($nasDetails3->m_private_management)?$nasDetails3->m_private_management:'0',"central_govt"=>isset($nasDetails3->m_central_govt_management)?$nasDetails3->m_central_govt_management:'0'),
                                        'state'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0'),
                                        'national'=>array("govt"=>isset($nationalLevel->m_govt_management)?$nationalLevel->m_govt_management:'0',"govt_aided"=>isset($nationalLevel->m_govt_aided_management)?$nationalLevel->m_govt_aided_management:'0',"private"=>isset($nationalLevel->m_private_management)?$nationalLevel->m_private_management:'0',"central_govt"=>isset($nationalLevel->m_central_govt_management)?$nationalLevel->m_central_govt_management:'0')),
                                    'socialgroup'=>array(
                                        'district'=>array("sc"=>isset($nasDetails3->m_sc_social_group)?$nasDetails3->m_sc_social_group:'0',"obc"=>isset($nasDetails3->m_obc_social_group)?$nasDetails3->m_obc_social_group:'0',"st"=>isset($nasDetails3->m_st_social_group)?$nasDetails3->m_st_social_group:'0',"general"=>isset($nasDetails3->m_general_social_group)?$nasDetails3->m_general_social_group:'0'),
                                        'state'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0'),
                                        'national'=>array("sc"=>isset($nationalLevel->m_sc_social_group)?$nationalLevel->m_sc_social_group:'0',"obc"=>isset($nationalLevel->m_obc_social_group)?$nationalLevel->m_obc_social_group:'0',"st"=>isset($nationalLevel->m_st_social_group)?$nationalLevel->m_st_social_group:'0',"general"=>isset($nationalLevel->m_general_social_group)?$nationalLevel->m_general_social_group:'0')),
                                    'performance_level'=>array(
                                        'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->m_avg_below_basic)?$districtPerformanceLevel[0]->m_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->m_avg_basic)?$districtPerformanceLevel[0]->m_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->m_avg_proficient)?$districtPerformanceLevel[0]->m_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->m_avg_advanced)?$districtPerformanceLevel[0]->m_avg_advanced:'0'),
                                        'state'=>array("below_basic"=>isset($statePerLevel[0]->m_avg_below_basic)?$statePerLevel[0]->m_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->m_avg_basic)?$statePerLevel[0]->m_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->m_avg_proficient)?$statePerLevel[0]->m_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->m_avg_advanced)?$statePerLevel[0]->m_avg_advanced:'0'),
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->m_avg_below_basic)?$nationalPerformanceQuery[0]->m_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->m_avg_basic)?$nationalPerformanceQuery[0]->m_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->m_avg_proficient)?$nationalPerformanceQuery[0]->m_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->m_avg_advanced)?$nationalPerformanceQuery[0]->m_avg_advanced:'0')));
                                $newArray['evs'] =array(
                                    'cards'=>array(
                                        'district'=>isset($nasDetails3->avg_e_marks)?$nasDetails3->avg_e_marks:'0',
                                        'state'=>isset($statelevel->avg_e_marks)?$statelevel->avg_e_marks:'0',
                                        'national'=>isset($nationalLevel->avg_e_marks)?$nationalLevel->avg_e_marks:'0'),
                                    'gender'=>array(
                                        'district'=>array("boys"=>isset($nasDetails3->e_male_gender)?$nasDetails3->e_male_gender:'0',"girls"=>isset($nasDetails3->e_female_gender)?$nasDetails3->e_female_gender:'0'),
                                        'state'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0'),
                                        'national'=>array("boys"=>isset($nationalLevel->e_male_gender)?$nationalLevel->e_male_gender:'0',"girls"=>isset($nationalLevel->e_female_gender)?$nationalLevel->e_female_gender:'0')),
                                    'location'=>array(
                                        'district'=>array("urban"=>isset($nasDetails3->e_urban_location)?$nasDetails3->e_urban_location:'0',"rural"=>isset($nasDetails3->e_rural_location)?$nasDetails3->e_rural_location:'0'),
                                        'state'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0'),
                                        'national'=>array("urban"=>isset($nationalLevel->e_urban_location)?$nationalLevel->e_urban_location:'0',"rural"=>isset($nationalLevel->e_rural_location)?$nationalLevel->e_rural_location:'0')),
                                    'management'=>array(
                                        'district'=>array("govt"=>isset($nasDetails3->e_govt_management)?$nasDetails3->e_govt_management:'0',"govt_aided"=>isset($nasDetails3->e_govt_aided_management)?$nasDetails3->e_govt_aided_management:'0',"private"=>isset($nasDetails3->e_private_management)?$nasDetails3->e_private_management:'0',"central_govt"=>isset($nasDetails3->e_central_govt_management)?$nasDetails3->e_central_govt_management:'0'),
                                        'state'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0'),
                                        'national'=>array("govt"=>isset($nationalLevel->e_govt_management)?$nationalLevel->e_govt_management:'0',"govt_aided"=>isset($nationalLevel->e_govt_aided_management)?$nationalLevel->e_govt_aided_management:'0',"private"=>isset($nationalLevel->e_private_management)?$nationalLevel->e_private_management:'0',"central_govt"=>isset($nationalLevel->e_central_govt_management)?$nationalLevel->e_central_govt_management:'0')),
                                    'socialgroup'=>array(
                                        'district'=>array("sc"=>isset($nasDetails3->e_sc_social_group)?$nasDetails3->e_sc_social_group:'0',"obc"=>isset($nasDetails3->e_obc_social_group)?$nasDetails3->e_obc_social_group:'0',"st"=>isset($nasDetails3->e_st_social_group)?$nasDetails3->e_st_social_group:'0',"general"=>isset($nasDetails3->e_general_social_group)?$nasDetails3->e_general_social_group:'0'),
                                        'state'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0'),
                                        'national'=>array("sc"=>isset($nationalLevel->e_sc_social_group)?$nationalLevel->e_sc_social_group:'0',"obc"=>isset($nationalLevel->e_obc_social_group)?$nationalLevel->e_obc_social_group:'0',"st"=>isset($nationalLevel->e_st_social_group)?$nationalLevel->e_st_social_group:'0',"general"=>isset($nationalLevel->e_general_social_group)?$nationalLevel->e_general_social_group:'0')),
                                    'performance_level'=>array(
                                        'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->e_avg_below_basic)?$districtPerformanceLevel[0]->e_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->e_avg_basic)?$districtPerformanceLevel[0]->e_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->e_avg_proficient)?$districtPerformanceLevel[0]->e_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->e_avg_advanced)?$districtPerformanceLevel[0]->e_avg_advanced:'0'),
                                        'state'=>array("below_basic"=>isset($statePerLevel[0]->e_avg_below_basic)?$statePerLevel[0]->e_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->e_avg_basic)?$statePerLevel[0]->e_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->e_avg_proficient)?$statePerLevel[0]->e_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->e_avg_advanced)?$statePerLevel[0]->e_avg_advanced:'0'),
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->e_avg_below_basic)?$nationalPerformanceQuery[0]->e_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->e_avg_basic)?$nationalPerformanceQuery[0]->e_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->e_avg_proficient)?$nationalPerformanceQuery[0]->e_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->e_avg_advanced)?$nationalPerformanceQuery[0]->e_avg_advanced:'0')));
                                $newArray['mil'] =array(
                                    'cards'=>array(
                                        'district'=>isset($nasDetails3->avg_mil_marks)?$nasDetails3->avg_mil_marks:'0',
                                        'state'=>isset($statelevel->avg_mil_marks)?$statelevel->avg_mil_marks:'0',
                                        'national'=>isset($nationalLevel->avg_mil_marks)?$nationalLevel->avg_mil_marks:'0'),
                                    'gender'=>array(
                                        'district'=>array("boys"=>isset($nasDetails3->mil_male_gender)?$nasDetails3->mil_male_gender:'0',"girls"=>isset($nasDetails3->mil_female_gender)?$nasDetails3->mil_female_gender:'0'),
                                        'state'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0'),
                                        'national'=>array("boys"=>isset($nationalLevel->mil_male_gender)?$nationalLevel->mil_male_gender:'0',"girls"=>isset($nationalLevel->mil_female_gender)?$nationalLevel->mil_female_gender:'0')),
                                    'location'=>array(
                                        'district'=>array("urban"=>isset($nasDetails3->mil_urban_location)?$nasDetails3->mil_urban_location:'0',"rural"=>isset($nasDetails3->mil_rural_location)?$nasDetails3->mil_rural_location:'0'),
                                        'state'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0'),
                                        'national'=>array("urban"=>isset($nationalLevel->mil_urban_location)?$nationalLevel->mil_urban_location:'0',"rural"=>isset($nationalLevel->mil_rural_location)?$nationalLevel->mil_rural_location:'0')),
                                    'management'=>array(
                                        'district'=>array("govt"=>isset($nasDetails3->mil_govt_management)?$nasDetails3->mil_govt_management:'0',"govt_aided"=>isset($nasDetails3->mil_govt_aided_management)?$nasDetails3->mil_govt_aided_management:'0',"private"=>isset($nasDetails3->mil_private_management)?$nasDetails3->mil_private_management:'0',"central_govt"=>isset($nasDetails3->mil_central_govt_management)?$nasDetails3->mil_central_govt_management:'0'),
                                        'state'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0'),
                                        'national'=>array("govt"=>isset($nationalLevel->mil_govt_management)?$nationalLevel->mil_govt_management:'0',"govt_aided"=>isset($nationalLevel->mil_govt_aided_management)?$nationalLevel->mil_govt_aided_management:'0',"private"=>isset($nationalLevel->mil_private_management)?$nationalLevel->mil_private_management:'0',"central_govt"=>isset($nationalLevel->mil_central_govt_management)?$nationalLevel->mil_central_govt_management:'0')),
                                    'socialgroup'=>array(
                                        'district'=>array("sc"=>isset($nasDetails3->mil_sc_social_group)?$nasDetails3->mil_sc_social_group:'0',"obc"=>isset($nasDetails3->mil_obc_social_group)?$nasDetails3->mil_obc_social_group:'0',"st"=>isset($nasDetails3->mil_st_social_group)?$nasDetails3->mil_st_social_group:'0',"general"=>isset($nasDetails3->mil_general_social_group)?$nasDetails3->mil_general_social_group:'0'),
                                        'state'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0'),
                                        'national'=>array("sc"=>isset($nationalLevel->mil_sc_social_group)?$nationalLevel->mil_sc_social_group:'0',"obc"=>isset($nationalLevel->mil_obc_social_group)?$nationalLevel->mil_obc_social_group:'0',"st"=>isset($nationalLevel->mil_st_social_group)?$nationalLevel->mil_st_social_group:'0',"general"=>isset($nationalLevel->mil_general_social_group)?$nationalLevel->mil_general_social_group:'0')),
                                    'performance_level'=>array(
                                        'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->mil_avg_below_basic)?$districtPerformanceLevel[0]->mil_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->mil_avg_basic)?$districtPerformanceLevel[0]->mil_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->mil_avg_proficient)?$districtPerformanceLevel[0]->mil_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->mil_avg_advanced)?$districtPerformanceLevel[0]->mil_avg_advanced:'0'),
                                        'state'=>array("below_basic"=>isset($statePerLevel[0]->mil_avg_below_basic)?$statePerLevel[0]->mil_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->mil_avg_basic)?$statePerLevel[0]->mil_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->mil_avg_proficient)?$statePerLevel[0]->mil_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->mil_avg_advanced)?$statePerLevel[0]->mil_avg_advanced:'0'),
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->mil_avg_below_basic)?$nationalPerformanceQuery[0]->mil_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->mil_avg_basic)?$nationalPerformanceQuery[0]->mil_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->mil_avg_proficient)?$nationalPerformanceQuery[0]->mil_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->mil_avg_advanced)?$nationalPerformanceQuery[0]->mil_avg_advanced:'0')));
                                $newArray['eng'] =array(
                                    'cards'=>array(
                                        'district'=>isset($nasDetails3->avg_eng_marks)?$nasDetails3->avg_eng_marks:'0',
                                        'state'=>isset($statelevel->avg_eng_marks)?$statelevel->avg_eng_marks:'0',
                                        'national'=>isset($nationalLevel->avg_eng_marks)?$nationalLevel->avg_eng_marks:'0'),
                                    'gender'=>array(
                                        'district'=>array("boys"=>isset($nasDetails3->eng_male_gender)?$nasDetails3->eng_male_gender:'0',"girls"=>isset($nasDetails3->eng_female_gender)?$nasDetails3->eng_female_gender:'0'),
                                        'state'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0'),
                                        'national'=>array("boys"=>isset($nationalLevel->eng_male_gender)?$nationalLevel->eng_male_gender:'0',"girls"=>isset($nationalLevel->eng_female_gender)?$nationalLevel->eng_female_gender:'0')),
                                    'location'=>array(
                                        'district'=>array("urban"=>isset($nasDetails3->eng_urban_location)?$nasDetails3->eng_urban_location:'0',"rural"=>isset($nasDetails3->eng_rural_location)?$nasDetails3->eng_rural_location:'0'),
                                        'state'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0'),
                                        'national'=>array("urban"=>isset($nationalLevel->eng_urban_location)?$nationalLevel->eng_urban_location:'0',"rural"=>isset($nationalLevel->eng_rural_location)?$nationalLevel->eng_rural_location:'0')),
                                    'management'=>array(
                                        'district'=>array("govt"=>isset($nasDetails3->eng_govt_management)?$nasDetails3->eng_govt_management:'0',"govt_aided"=>isset($nasDetails3->eng_govt_aided_management)?$nasDetails3->eng_govt_aided_management:'0',"private"=>isset($nasDetails3->eng_private_management)?$nasDetails3->eng_private_management:'0',"central_govt"=>isset($nasDetails3->eng_central_govt_management)?$nasDetails3->eng_central_govt_management:'0'),
                                        'state'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0'),
                                        'national'=>array("govt"=>isset($nationalLevel->eng_govt_management)?$nationalLevel->eng_govt_management:'0',"govt_aided"=>isset($nationalLevel->eng_govt_aided_management)?$nationalLevel->eng_govt_aided_management:'0',"private"=>isset($nationalLevel->eng_private_management)?$nationalLevel->eng_private_management:'0',"central_govt"=>isset($nationalLevel->eng_central_govt_management)?$nationalLevel->eng_central_govt_management:'0')),
                                    'socialgroup'=>array(
                                        'district'=>array("sc"=>isset($nasDetails3->eng_sc_social_group)?$nasDetails3->eng_sc_social_group:'0',"obc"=>isset($nasDetails3->eng_obc_social_group)?$nasDetails3->eng_obc_social_group:'0',"st"=>isset($nasDetails3->eng_st_social_group)?$nasDetails3->eng_st_social_group:'0',"general"=>isset($nasDetails3->eng_general_social_group)?$nasDetails3->eng_general_social_group:'0'),
                                        'state'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0'),
                                        'national'=>array("sc"=>isset($nationalLevel->eng_sc_social_group)?$nationalLevel->eng_sc_social_group:'0',"obc"=>isset($nationalLevel->eng_obc_social_group)?$nationalLevel->eng_obc_social_group:'0',"st"=>isset($nationalLevel->eng_st_social_group)?$nationalLevel->eng_st_social_group:'0',"general"=>isset($nationalLevel->eng_general_social_group)?$nationalLevel->eng_general_social_group:'0')),
                                    'performance_level'=>array(
                                        'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->eng_avg_below_basic)?$districtPerformanceLevel[0]->eng_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->eng_avg_basic)?$districtPerformanceLevel[0]->eng_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->eng_avg_proficient)?$districtPerformanceLevel[0]->eng_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->eng_avg_advanced)?$districtPerformanceLevel[0]->eng_avg_advanced:'0'),
                                        'state'=>array("below_basic"=>isset($statePerLevel[0]->eng_avg_below_basic)?$statePerLevel[0]->eng_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->eng_avg_basic)?$statePerLevel[0]->eng_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->eng_avg_proficient)?$statePerLevel[0]->eng_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->eng_avg_advanced)?$statePerLevel[0]->eng_avg_advanced:'0'),
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->eng_avg_below_basic)?$nationalPerformanceQuery[0]->eng_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->eng_avg_basic)?$nationalPerformanceQuery[0]->eng_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->eng_avg_proficient)?$nationalPerformanceQuery[0]->eng_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->eng_avg_advanced)?$nationalPerformanceQuery[0]->eng_avg_advanced:'0')));
                                $newArray['sci'] =array(
                                    'cards'=>array(
                                        'district'=>isset($nasDetails3->avg_sci_marks)?$nasDetails3->avg_sci_marks:'0',
                                        'state'=>isset($statelevel->avg_sci_marks)?$statelevel->avg_sci_marks:'0',
                                        'national'=>isset($nationalLevel->avg_sci_marks)?$nationalLevel->avg_sci_marks:'0'),
                                    'gender'=>array(
                                        'district'=>array("boys"=>isset($nasDetails3->sci_male_gender)?$nasDetails3->sci_male_gender:'0',"girls"=>isset($nasDetails3->sci_female_gender)?$nasDetails3->sci_female_gender:'0'),
                                        'state'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0'),
                                        'national'=>array("boys"=>isset($nationalLevel->sci_male_gender)?$nationalLevel->sci_male_gender:'0',"girls"=>isset($nationalLevel->sci_female_gender)?$nationalLevel->sci_female_gender:'0')),
                                    'location'=>array(
                                        'district'=>array("urban"=>isset($nasDetails3->sci_urban_location)?$nasDetails3->sci_urban_location:'0',"rural"=>isset($nasDetails3->sci_rural_location)?$nasDetails3->sci_rural_location:'0'),
                                        'state'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0'),
                                        'national'=>array("urban"=>isset($nationalLevel->sci_urban_location)?$nationalLevel->sci_urban_location:'0',"rural"=>isset($nationalLevel->sci_rural_location)?$nationalLevel->sci_rural_location:'0')),
                                    'management'=>array(
                                        'district'=>array("govt"=>isset($nasDetails3->sci_govt_management)?$nasDetails3->sci_govt_management:'0',"govt_aided"=>isset($nasDetails3->sci_govt_aided_management)?$nasDetails3->sci_govt_aided_management:'0',"private"=>isset($nasDetails3->sci_private_management)?$nasDetails3->sci_private_management:'0',"central_govt"=>isset($nasDetails3->sci_central_govt_management)?$nasDetails3->sci_central_govt_management:'0'),
                                        'state'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0'),
                                        'national'=>array("govt"=>isset($nationalLevel->sci_govt_management)?$nationalLevel->sci_govt_management:'0',"govt_aided"=>isset($nationalLevel->sci_govt_aided_management)?$nationalLevel->sci_govt_aided_management:'0',"private"=>isset($nationalLevel->sci_private_management)?$nationalLevel->sci_private_management:'0',"central_govt"=>isset($nationalLevel->sci_central_govt_management)?$nationalLevel->sci_central_govt_management:'0')),
                                    'socialgroup'=>array(
                                        'district'=>array("sc"=>isset($nasDetails3->sci_sc_social_group)?$nasDetails3->sci_sc_social_group:'0',"obc"=>isset($nasDetails3->sci_obc_social_group)?$nasDetails3->sci_obc_social_group:'0',"st"=>isset($nasDetails3->sci_st_social_group)?$nasDetails3->sci_st_social_group:'0',"general"=>isset($nasDetails3->sci_general_social_group)?$nasDetails3->sci_general_social_group:'0'),
                                        'state'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0'),
                                        'national'=>array("sc"=>isset($nationalLevel->sci_sc_social_group)?$nationalLevel->sci_sc_social_group:'0',"obc"=>isset($nationalLevel->sci_obc_social_group)?$nationalLevel->sci_obc_social_group:'0',"st"=>isset($nationalLevel->sci_st_social_group)?$nationalLevel->sci_st_social_group:'0',"general"=>isset($nationalLevel->sci_general_social_group)?$nationalLevel->sci_general_social_group:'0')),
                                    'performance_level'=>array(
                                        'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->sci_avg_below_basic)?$districtPerformanceLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->sci_avg_basic)?$districtPerformanceLevel[0]->sci_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->sci_avg_proficient)?$districtPerformanceLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->sci_avg_advanced)?$districtPerformanceLevel[0]->sci_avg_advanced:'0'),
                                        'state'=>array("below_basic"=>isset($statePerLevel[0]->sci_avg_below_basic)?$statePerLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sci_avg_basic)?$statePerLevel[0]->sci_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sci_avg_proficient)?$statePerLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sci_avg_advanced)?$statePerLevel[0]->sci_avg_advanced:'0'),
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sci_avg_below_basic)?$nationalPerformanceQuery[0]->sci_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sci_avg_basic)?$nationalPerformanceQuery[0]->sci_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sci_avg_proficient)?$nationalPerformanceQuery[0]->sci_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sci_avg_advanced)?$nationalPerformanceQuery[0]->sci_avg_advanced:'0')));
                                $newArray['sst'] =array(
                                    'cards'=>array(
                                        'district'=>isset($nasDetails3->avg_sst_marks)?$nasDetails3->avg_sst_marks:'0',
                                        'state'=>isset($statelevel->avg_sst_marks)?$statelevel->avg_sst_marks:'0',
                                        'national'=>isset($nationalLevel->avg_sst_marks)?$nationalLevel->avg_sst_marks:'0'),
                                    'gender'=>array(
                                        'district'=>array("boys"=>isset($nasDetails3->sst_male_gender)?$nasDetails3->sst_male_gender:'0',"girls"=>isset($nasDetails3->sst_female_gender)?$nasDetails3->sst_female_gender:'0'),
                                        'state'=>array("boys"=>isset($statelevel->sst_male_gender)?$statelevel->sst_male_gender:'0',"girls"=>isset($statelevel->sst_female_gender)?$statelevel->sst_female_gender:'0'),
                                        'national'=>array("boys"=>isset($nationalLevel->sst_male_gender)?$nationalLevel->sst_male_gender:'0',"girls"=>isset($nationalLevel->sst_female_gender)?$nationalLevel->sst_female_gender:'0')),
                                    'location'=>array(
                                        'district'=>array("urban"=>isset($nasDetails3->sst_urban_location)?$nasDetails3->sst_urban_location:'0',"rural"=>isset($nasDetails3->sst_rural_location)?$nasDetails3->sst_rural_location:'0'),
                                        'state'=>array("urban"=>isset($statelevel->sst_urban_location)?$statelevel->sst_urban_location:'0',"rural"=>isset($statelevel->sst_rural_location)?$statelevel->sst_rural_location:'0'),
                                        'national'=>array("urban"=>isset($nationalLevel->sst_urban_location)?$nationalLevel->sst_urban_location:'0',"rural"=>isset($nationalLevel->sst_rural_location)?$nationalLevel->sst_rural_location:'0')),
                                    'management'=>array(
                                        'district'=>array("govt"=>isset($nasDetails3->sst_govt_management)?$nasDetails3->sst_govt_management:'0',"govt_aided"=>isset($nasDetails3->sst_govt_aided_management)?$nasDetails3->sst_govt_aided_management:'0',"private"=>isset($nasDetails3->sst_private_management)?$nasDetails3->sst_private_management:'0',"central_govt"=>isset($nasDetails3->sst_central_govt_management)?$nasDetails3->sst_central_govt_management:'0'),
                                        'state'=>array("govt"=>isset($statelevel->sst_govt_management)?$statelevel->sst_govt_management:'0',"govt_aided"=>isset($statelevel->sst_govt_aided_management)?$statelevel->sst_govt_aided_management:'0',"private"=>isset($statelevel->sst_private_management)?$statelevel->sst_private_management:'0',"central_govt"=>isset($statelevel->sst_central_govt_management)?$statelevel->sst_central_govt_management:'0'),
                                        'national'=>array("govt"=>isset($nationalLevel->sst_govt_management)?$nationalLevel->sst_govt_management:'0',"govt_aided"=>isset($nationalLevel->sst_govt_aided_management)?$nationalLevel->sst_govt_aided_management:'0',"private"=>isset($nationalLevel->sst_private_management)?$nationalLevel->sst_private_management:'0',"central_govt"=>isset($nationalLevel->sst_central_govt_management)?$nationalLevel->sst_central_govt_management:'0')),
                                    'socialgroup'=>array(
                                        'district'=>array("sc"=>isset($nasDetails3->sst_sc_social_group)?$nasDetails3->sst_sc_social_group:'0',"obc"=>isset($nasDetails3->sst_obc_social_group)?$nasDetails3->sst_obc_social_group:'0',"st"=>isset($nasDetails3->sst_st_social_group)?$nasDetails3->sst_st_social_group:'0',"general"=>isset($nasDetails3->sst_general_social_group)?$nasDetails3->sst_general_social_group:'0'),
                                        'state'=>array("sc"=>isset($statelevel->sst_sc_social_group)?$statelevel->sst_sc_social_group:'0',"obc"=>isset($statelevel->sst_obc_social_group)?$statelevel->sst_obc_social_group:'0',"st"=>isset($statelevel->sst_st_social_group)?$statelevel->sst_st_social_group:'0',"general"=>isset($statelevel->sst_general_social_group)?$statelevel->sst_general_social_group:'0'),
                                        'national'=>array("sc"=>isset($nationalLevel->sst_sc_social_group)?$nationalLevel->sst_sc_social_group:'0',"obc"=>isset($nationalLevel->sst_obc_social_group)?$nationalLevel->sst_obc_social_group:'0',"st"=>isset($nationalLevel->sst_st_social_group)?$nationalLevel->sst_st_social_group:'0',"general"=>isset($nationalLevel->sst_general_social_group)?$nationalLevel->sst_general_social_group:'0')),
                                    'performance_level'=>array(
                                        'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->sst_avg_below_basic)?$districtPerformanceLevel[0]->sst_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->sst_avg_basic)?$districtPerformanceLevel[0]->sst_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->sst_avg_proficient)?$districtPerformanceLevel[0]->sst_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->sst_avg_advanced)?$districtPerformanceLevel[0]->sst_avg_advanced:'0'),
                                        'state'=>array("below_basic"=>isset($statePerLevel[0]->sst_avg_below_basic)?$statePerLevel[0]->sst_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sst_avg_basic)?$statePerLevel[0]->sst_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sst_avg_proficient)?$statePerLevel[0]->sst_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sst_avg_advanced)?$statePerLevel[0]->sst_avg_advanced:'0'),
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sst_avg_below_basic)?$nationalPerformanceQuery[0]->sst_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sst_avg_basic)?$nationalPerformanceQuery[0]->sst_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sst_avg_proficient)?$nationalPerformanceQuery[0]->sst_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sst_avg_advanced)?$nationalPerformanceQuery[0]->sst_avg_advanced:'0')));
                            }
                        }
                    }
                }
                $newData3Grade['state_id'] = (int)$nasDetails3->state_id;
                $newData3Grade['district_id'] = (int)$nasDetails3->district_id;
                $newData3Grade['grade'] = (int)$nasDetails3->grade;
                $newData3Grade['data'] = json_encode($newArray);
                $newData3Grade['created_at'] = now();
                $newData3Grade['updated_at'] = now();
                $getAll3GradeData[]=$newData3Grade;
            }
        }
        $performanceMaster = PerformanceMaster::insert($getAll3GradeData);
        
        if($performanceMaster)
        {
            return "Performance table successfully created.";
        }
        else
        {
            return "Something wrong.";
        }
    }

    public function checkLaguagefunction($at3set,$questionNumbers)
    {
         $lagCount = 0 ;
         $mathCount = 0 ;
         $evsCount = 0 ;
         $l_total_no_question = 0;
         $m_total_no_question  = 0;
         $e_total_no_question = 0;
         $count_subject_wise_total_ans = array();
         foreach ($questionNumbers as $key => $value) {
            $k=$key;
            $kk= $key;
            if($key>=0 && $key<9)
            {
                
                $var =  'at_q0'.++$k;
                $var3 =  'at3_q0'.++$kk;
            }
            else
            {
                $var =  'at_q'.++$k;
                $var3 =  'at3_q'.++$kk;
               
            }            
           
            $checklang = QuestionMaster::select('at_q01', 'at_q02', 'at_q03', 'at_q04', 'at_q05', 'at_q06', 'at_q07', 'at_q08', 'at_q09', 'at_q10', 'at_q11', 'at_q12', 'at_q13', 'at_q14', 'at_q15', 'at_q16', 'at_q17', 'at_q18', 'at_q19', 'at_q20', 'at_q21', 'at_q22', 'at_q23', 'at_q24', 'at_q25', 'at_q26', 'at_q27', 'at_q28', 'at_q29', 'at_q30', 'at_q31', 'at_q32', 'at_q33', 'at_q34', 'at_q35', 'at_q36', 'at_q37', 'at_q38', 'at_q39', 'at_q40', 'at_q41', 'at_q42', 'at_q43', 'at_q44', 'at_q45', 'at_q46', 'at_q47')->where('at_set',$at3set)->first();

            $count_subject_wise_total_que = array();
            $language = array();
            foreach ($checklang->toArray() as $k=>$a) {
                @$count_subject_wise_total_que[$a]++;
                
                if(!in_array(substr($a,0,-3), $language, true)){
                    array_push($language,substr($a,0,-3));
                }
                
            }

              // Check Question for Language
              if(substr($checklang->$var,0,-3)=='L')
              {
                
                $result = At3_key::where('at3_set',$at3set)
                         ->where($var3,$value)->count();
                    if($result==1)
                    {
                        @$count_subject_wise_total_ans[$checklang->$var]++;
                        $lagCount++; 
                        $l_total_no_question++;
                    }
                    else{
                        $l_total_no_question++;
                    }
   
              }
               // Check Question for math
              if(substr($checklang->$var,0,-3)=='M')
              {
               
                $result = At3_key::where('at3_set',$at3set)
                ->where($var3,$value)->count();
                if($result==1)
                {
                        @$count_subject_wise_total_ans[$checklang->$var]++;
                        $mathCount++; 
                        $m_total_no_question++;
                }
                else{
                        $m_total_no_question++;
                }
                   
              }
             // Check Question for Evs
              if(substr($checklang->$var,0,-3)=='EVS')
              {
                $result = At3_key::where('at3_set',$at3set)
                ->where($var3,$value)->count();
                if($result==1)
                {
                    @$count_subject_wise_total_ans[$checklang->$var]++;
                    $evsCount++; 
                    $e_total_no_question++;
                }
                else{
                        $e_total_no_question++;
                }
               
              }
              
         }
         return array($lagCount, $mathCount, $evsCount,$count_subject_wise_total_que,$count_subject_wise_total_ans,$l_total_no_question,$m_total_no_question,$e_total_no_question);
        //  dd(1);
         
    }

    public function checkLaguagefunctionAt5($at5set,$questionNumbers)
    {
         $lagCount = 0 ;
         $mathCount = 0 ;
         $evsCount = 0 ;
         $l_total_no_question = 0;
         $m_total_no_question  = 0;
         $e_total_no_question = 0;
         $count_subject_wise_total_ans5 = array();
         foreach ($questionNumbers as $key => $value) {
          
            $k=$key;
            $kk= $key;
            if($key>=0 && $key<9)
            {
                
                $var =  'at_q0'.++$k;
                $var5 =  'at5_q0'.++$kk;
            }
            else
            {
                $var =  'at_q'.++$k;
                $var5 =  'at5_q'.++$kk;
               
            }
            
           
            $checklang = QuestionMaster::select('at_q01','at_q02','at_q03','at_q04','at_q05','at_q06','at_q07','at_q08','at_q09','at_q10','at_q11','at_q12','at_q13','at_q14','at_q15','at_q16','at_q17','at_q18','at_q19','at_q20','at_q21','at_q22','at_q23','at_q24','at_q25','at_q26','at_q27','at_q28','at_q29','at_q30','at_q31','at_q32','at_q33','at_q34','at_q35','at_q36','at_q37','at_q38','at_q39','at_q40','at_q41','at_q42','at_q43','at_q44','at_q45','at_q46','at_q47','at_q48','at_q49','at_q50','at_q51','at_q52','at_q53')->where('at_set',$at5set)->first();
            $count_subject_wise_total_que5 = array();
            $language = array();
            foreach ($checklang->toArray() as $k=>$a) {
                @$count_subject_wise_total_que5[$a]++;
                
                if(!in_array(substr($a,0,-3), $language, true)){
                    array_push($language,substr($a,0,-3));
                }
                
            }
              // Check Question for Language
              if(substr($checklang->$var,0,-3)=='L')
              {
                
                $result = At5_key::where('at5_set',$at5set)
                          ->where($var5,$value)->count();
                    if($result==1)
                    {
                        @$count_subject_wise_total_ans5[$checklang->$var]++;
                        $lagCount++; 
                        $l_total_no_question++;
                    }
                    else{
                        $l_total_no_question++;
                    }
   
              }
               // Check Question for math
              if(substr($checklang->$var,0,-3)=='M')
              {
               
                $result = At5_key::where('at5_set',$at5set)
                ->where($var5,$value)->count();
                if($result==1)
                    {
                        @$count_subject_wise_total_ans5[$checklang->$var]++;
                        $mathCount++; 
                        $m_total_no_question++;
                    }
                    else{
                        $m_total_no_question++;
                    }
                   
              }
             // Check Question for Evs
              if(substr($checklang->$var,0,-3)=='E')
              {
                $result = $result = At5_key::where('at5_set',$at5set)
                ->where($var5,$value)->count();
                if($result==1)
                {
                    @$count_subject_wise_total_ans5[$checklang->$var]++;
                    $evsCount++; 
                    $e_total_no_question++;
                }
                else{
                        $e_total_no_question++;
                }
               
              }
              
         }
         return array($lagCount, $mathCount, $evsCount,$count_subject_wise_total_que5,$count_subject_wise_total_ans5,$l_total_no_question,$m_total_no_question,$e_total_no_question);
        //  dd(1);
         
    }

    public function checkLaguagefunctionAt8($at8set,$questionNumbers)
    {
         $lagCount = 0 ;
         $mathCount = 0 ;
         $sciCount = 0 ;
         $sstCount = 0 ;
         $l_total_no_question = 0;
         $m_total_no_question  = 0;
         $sci_total_no_question = 0;
         $sst_total_no_question = 0;

         $count_subject_wise_total_ans8 = array();
         foreach ($questionNumbers as $key => $value) {
          
            $k=$key;
            $kk= $key;
            if($key>=0 && $key<9)
            {
                
                $var =  'at_q0'.++$k;
                $var8 =  'at8_q0'.++$kk;
            }
            else
            {
                $var =  'at_q'.++$k;
                $var8 =  'at8_q'.++$kk;
               
            }            
           
            $checklang = QuestionMaster::select('at_q01','at_q02','at_q03','at_q04','at_q05','at_q06','at_q07','at_q08','at_q09','at_q10','at_q11','at_q12','at_q13','at_q14','at_q15','at_q16','at_q17','at_q18','at_q19','at_q20','at_q21','at_q22','at_q23','at_q24','at_q25','at_q26','at_q27','at_q28','at_q29','at_q30','at_q31','at_q32','at_q33','at_q34','at_q35','at_q36','at_q37','at_q38','at_q39','at_q40','at_q41','at_q42','at_q43','at_q44','at_q45','at_q46','at_q47','at_q48','at_q49','at_q50','at_q51','at_q52','at_q53', 'at_q54', 'at_q55', 'at_q56', 'at_q57', 'at_q58', 'at_q59', 'at_q60')->where('at_set',$at8set)->first();
            
            $count_subject_wise_total_que8 = array();
            $language = array();
            foreach ($checklang->toArray() as $k=>$a) {
                @$count_subject_wise_total_que8[$a]++;
                
                if(!in_array(substr($a,0,-3), $language, true)){
                    array_push($language,substr($a,0,-3));
                }
                
            }            
            
            // Check Question for Language
              if(substr($checklang->$var,0,-3)=='L')
              {
                
                $result = At8s_key::where('at8_set',$at8set)
                         ->where($var8,$value)->count();
                    if($result==1)
                    {
                        @$count_subject_wise_total_ans8[$checklang->$var]++;
                        $lagCount++; 
                        $l_total_no_question++;
                    }
                    else{
                            $l_total_no_question++;
                    }
              }
               // Check Question for math
              if(substr($checklang->$var,0,-3)=='M')
              {
               
                $result = At8s_key::where('at8_set',$at8set)
                ->where($var8,$value)->count();
                if($result==1)
                    {
                        @$count_subject_wise_total_ans8[$checklang->$var]++;
                        $mathCount++; 
                        $m_total_no_question++;
                    }   
                    else{
                            $m_total_no_question++;
                    }
              }
             // Check Question for Science
              if(substr($checklang->$var,0,-3)=='SCI')
              {
                $result = At8s_key::where('at8_set',$at8set)
                ->where($var8,$value)->count();
                if($result==1)
                {
                    @$count_subject_wise_total_ans8[$checklang->$var]++;
                    $sciCount++; 
                    $sci_total_no_question++;
                }
                else{
                        $sci_total_no_question++;
                }
              }

              // Check Question for Social Science
              if(substr($checklang->$var,0,-3)=='SST')
              {
                $result = At8s_key::where('at8_set',$at8set)
                ->where($var8,$value)->count();
                if($result==1)
                {
                    @$count_subject_wise_total_ans8[$checklang->$var]++;
                    $sstCount++; 
                    $sst_total_no_question++;
                }
                else{
                        $sst_total_no_question++;
                }
              }   
         }
         return array($lagCount, $mathCount, $sciCount, $sstCount,$count_subject_wise_total_que8,$count_subject_wise_total_ans8,$l_total_no_question,$m_total_no_question,$sci_total_no_question,$sst_total_no_question);
    }

    public function checkLaguagefunctionAt10($at10set,$questionNumbers)
    {
         $milCount = 0 ;
         $engCount = 0 ;
         $mathCount = 0 ;
         $sciCount = 0 ;
         $sstCount = 0 ;

         $mil_total_no_question = 0;
         $eng_total_no_question  = 0;
         $m_total_no_question = 0;
         $sci_total_no_question = 0;
         $sst_total_no_question = 0;

         $count_subject_wise_total_ans10 = array();
         
         foreach ($questionNumbers as $key => $value) {
            $k=$key;
            $kk= $key;
            if($key>=0 && $key<9)
            {
                
                $var =  'at_q0'.++$k;
                $var10 =  'at1_q0'.++$kk;
            }
            else
            {
                $var =  'at_q'.++$k;
                $var10 =  'at1_q'.++$kk;
               
            }    

            $checklang = QuestionMaster::select('at_q01','at_q02','at_q03','at_q04','at_q05','at_q06','at_q07','at_q08','at_q09','at_q10','at_q11','at_q12','at_q13','at_q14','at_q15','at_q16','at_q17','at_q18','at_q19','at_q20','at_q21','at_q22','at_q23','at_q24','at_q25','at_q26','at_q27','at_q28','at_q29','at_q30','at_q31','at_q32','at_q33','at_q34','at_q35','at_q36','at_q37','at_q38','at_q39','at_q40','at_q41','at_q42','at_q43','at_q44','at_q45','at_q46','at_q47','at_q48','at_q49','at_q50','at_q51','at_q52','at_q53', 'at_q54', 'at_q55', 'at_q56', 'at_q57', 'at_q58', 'at_q59', 'at_q60', 'at_q61', 'at_q62', 'at_q63', 'at_q64', 'at_q65', 'at_q66', 'at_q67', 'at_q68', 'at_q69', 'at_q70')->where('at_set',$at10set)->first();

            $count_subject_wise_total_que10 = array();
            $language = array();
            foreach ($checklang->toArray() as $k=>$a) {
                @$count_subject_wise_total_que10[$a]++;
                
                if(!in_array(substr($a,0,-3), $language, true)){
                    array_push($language,substr($a,0,-3));
                }
                
            }  
              // Check Question for Language
              if(substr($checklang->$var,0,-3)=='MIL')
              {
                
                $result = At10s_key::where('at1_set',$at10set)
                         ->where($var10,$value)->count();
                    if($result==1)
                    {
                        @$count_subject_wise_total_ans10[$checklang->$var]++;
                        $milCount++; 
                        $mil_total_no_question++;
                    }
                    else
                    {
                        $mil_total_no_question++;
                    }
   
              }

              // Check Question for English
              if(substr($checklang->$var,0,-3)=='E')
              {
               
                $result = At10s_key::where('at1_set',$at10set)
                ->where($var10,$value)->count();
                if($result==1)
                    {
                        @$count_subject_wise_total_ans10[$checklang->$var]++;
                        $engCount++; 
                        $eng_total_no_question++;
                    }
                    else{
                        $eng_total_no_question++;
                    }
                   
              }
               // Check Question for math
              if(substr($checklang->$var,0,-3)=='M')
              {
               
                $result = At10s_key::where('at1_set',$at10set)
                ->where($var10,$value)->count();
                if($result==1)
                    {
                        @$count_subject_wise_total_ans10[$checklang->$var]++;
                        $mathCount++; 
                        $m_total_no_question++;
                    }
                    else
                    {
                        $m_total_no_question++;
                    }
                   
              }
             // Check Question for Science
              if(substr($checklang->$var,0,-3)=='SCI')
              {
                $result = At10s_key::where('at1_set',$at10set)
                ->where($var10,$value)->count();
                if($result==1)
                {
                    @$count_subject_wise_total_ans10[$checklang->$var]++;
                    $sciCount++; 
                    $sci_total_no_question++;
                }
                else
                {
                        $sci_total_no_question++;
                }
               
              }

              // Check Question for Social Science
              if(substr($checklang->$var,0,-3)=='SST')
              {
                $result = At10s_key::where('at1_set',$at10set)
                ->where($var10,$value)->count();
                if($result==1)
                {
                    @$count_subject_wise_total_ans10[$checklang->$var]++;
                    $sstCount++; 
                    $sst_total_no_question++;
                }
                else
                {
                        $sst_total_no_question++;
                }
               
              }
              
         }
         return array($milCount, $engCount, $mathCount, $sciCount, $sstCount,$count_subject_wise_total_que10,$count_subject_wise_total_ans10,$mil_total_no_question,$eng_total_no_question,$m_total_no_question,$sci_total_no_question,$sst_total_no_question);        
    }

    public function generateAt3SetForLanguage()
    {
         $grade3 = [31,32,33,34];
         $grade5 = [51,52,53,54];
         $grade8 = [81,82,83,84];
         $grade10 = [101,102,103];
        
        foreach ($grade3 as $key => $value) {
            $QuestionMaster = new QuestionMaster;
            $QuestionMaster->at_set  = $value;
            $QuestionMaster->at_grade = 3;
            $QuestionMaster->at_q01   = 'L';
            $QuestionMaster->at_q02   = 'L';
            $QuestionMaster->at_q03   = 'L';
            $QuestionMaster->at_q04   = 'L';
            $QuestionMaster->at_q05   = 'L';
            $QuestionMaster->at_q06   = 'L';
            $QuestionMaster->at_q07   = 'L';
            $QuestionMaster->at_q08   = 'L';
            $QuestionMaster->at_q09   = 'L';
            $QuestionMaster->at_q10   = 'L';
            $QuestionMaster->at_q11   = 'L';
            $QuestionMaster->at_q12   = 'L';
            $QuestionMaster->at_q13   = 'L';
            $QuestionMaster->at_q14   = 'L';
            $QuestionMaster->at_q15   = 'L';
            $QuestionMaster->at_q16   = 'M';
            $QuestionMaster->at_q17   = 'M';
            $QuestionMaster->at_q18   = 'M';
            $QuestionMaster->at_q19   = 'M';
            $QuestionMaster->at_q20   = 'M';
            $QuestionMaster->at_q21   = 'M';
            $QuestionMaster->at_q22   = 'M';
            $QuestionMaster->at_q23   = 'M';
            $QuestionMaster->at_q24   = 'M';
            $QuestionMaster->at_q25   = 'M';
            $QuestionMaster->at_q26   = 'M';
            $QuestionMaster->at_q27   = 'M';
            $QuestionMaster->at_q28   = 'M';
            $QuestionMaster->at_q29   = 'M';
            $QuestionMaster->at_q30   = 'M';
            $QuestionMaster->at_q31   = 'M';
            $QuestionMaster->at_q32   = 'M';
            $QuestionMaster->at_q33   = 'M';
            $QuestionMaster->at_q34   = 'M';
            $QuestionMaster->at_q35   = 'M';
            $QuestionMaster->at_q36   = 'M';
            $QuestionMaster->at_q37   = 'M';
            $QuestionMaster->at_q38   = 'M';
            $QuestionMaster->at_q39   = 'M';
            $QuestionMaster->at_q40   = 'M';
            $QuestionMaster->at_q41   = 'E';
            $QuestionMaster->at_q42   = 'E';
            $QuestionMaster->at_q43   = 'E';
            $QuestionMaster->at_q44   = 'E';
            $QuestionMaster->at_q45   = 'E';
            $QuestionMaster->at_q46   = 'E';
            $QuestionMaster->at_q47   = 'E';         
            $QuestionMaster->save();
        }

        foreach ($grade5 as $key => $value) {
            $QuestionMaster = new QuestionMaster;
            $QuestionMaster->at_set  = $value;
            $QuestionMaster->at_grade = 5;
            $QuestionMaster->at_q01   = 'L';
            $QuestionMaster->at_q02   = 'L';
            $QuestionMaster->at_q03   = 'L';
            $QuestionMaster->at_q04   = 'L';
            $QuestionMaster->at_q05   = 'L';
            $QuestionMaster->at_q06   = 'L';
            $QuestionMaster->at_q07   = 'L';
            $QuestionMaster->at_q08   = 'L';
            $QuestionMaster->at_q09   = 'L';
            $QuestionMaster->at_q10   = 'L';
            $QuestionMaster->at_q11   = 'L';
            $QuestionMaster->at_q12   = 'L';
            $QuestionMaster->at_q13   = 'L';
            $QuestionMaster->at_q14   = 'L';
            $QuestionMaster->at_q15   = 'L';
            $QuestionMaster->at_q16   = 'M';
            $QuestionMaster->at_q17   = 'M';
            $QuestionMaster->at_q18   = 'M';
            $QuestionMaster->at_q19   = 'M';
            $QuestionMaster->at_q20   = 'M';
            $QuestionMaster->at_q21   = 'M';
            $QuestionMaster->at_q22   = 'M';
            $QuestionMaster->at_q23   = 'M';
            $QuestionMaster->at_q24   = 'M';
            $QuestionMaster->at_q25   = 'M';
            $QuestionMaster->at_q26   = 'M';
            $QuestionMaster->at_q27   = 'M';
            $QuestionMaster->at_q28   = 'M';
            $QuestionMaster->at_q29   = 'M';
            $QuestionMaster->at_q30   = 'M';
            $QuestionMaster->at_q31   = 'M';
            $QuestionMaster->at_q32   = 'M';
            $QuestionMaster->at_q33   = 'M';
            $QuestionMaster->at_q34   = 'M';
            $QuestionMaster->at_q35   = 'M';
            $QuestionMaster->at_q36   = 'M';
            $QuestionMaster->at_q37   = 'M';
            $QuestionMaster->at_q38   = 'M';
            $QuestionMaster->at_q39   = 'M';
            $QuestionMaster->at_q40   = 'M';
            $QuestionMaster->at_q41   = 'E';
            $QuestionMaster->at_q42   = 'E';
            $QuestionMaster->at_q43   = 'E';
            $QuestionMaster->at_q44   = 'E';
            $QuestionMaster->at_q45   = 'E';
            $QuestionMaster->at_q46   = 'E';
            $QuestionMaster->at_q47   = 'E';
            $QuestionMaster->at_q48   = 'E';
            $QuestionMaster->at_q49   = 'E';
            $QuestionMaster->at_q50   = 'E';
            $QuestionMaster->at_q51   = 'E';
            $QuestionMaster->at_q52   = 'E';
            $QuestionMaster->at_q53   = 'E';              
            $QuestionMaster->save();
        }

        foreach ($grade8 as $key => $value) {
            $QuestionMaster = new QuestionMaster;
            $QuestionMaster->at_set  = $value;
            $QuestionMaster->at_grade = 8;
            $QuestionMaster->at_q01   = 'L';
            $QuestionMaster->at_q02   = 'L';
            $QuestionMaster->at_q03   = 'L';
            $QuestionMaster->at_q04   = 'L';
            $QuestionMaster->at_q05   = 'L';
            $QuestionMaster->at_q06   = 'L';
            $QuestionMaster->at_q07   = 'L';
            $QuestionMaster->at_q08   = 'L';
            $QuestionMaster->at_q09   = 'L';
            $QuestionMaster->at_q10   = 'L';
            $QuestionMaster->at_q11   = 'L';
            $QuestionMaster->at_q12   = 'L';
            $QuestionMaster->at_q13   = 'L';
            $QuestionMaster->at_q14   = 'L';
            $QuestionMaster->at_q15   = 'L';
            $QuestionMaster->at_q16   = 'M';
            $QuestionMaster->at_q17   = 'M';
            $QuestionMaster->at_q18   = 'M';
            $QuestionMaster->at_q19   = 'M';
            $QuestionMaster->at_q20   = 'M';
            $QuestionMaster->at_q21   = 'M';
            $QuestionMaster->at_q22   = 'M';
            $QuestionMaster->at_q23   = 'M';
            $QuestionMaster->at_q24   = 'M';
            $QuestionMaster->at_q25   = 'M';
            $QuestionMaster->at_q26   = 'M';
            $QuestionMaster->at_q27   = 'M';
            $QuestionMaster->at_q28   = 'M';
            $QuestionMaster->at_q29   = 'M';
            $QuestionMaster->at_q30   = 'M';
            $QuestionMaster->at_q31   = 'S';
            $QuestionMaster->at_q32   = 'S';
            $QuestionMaster->at_q33   = 'S';
            $QuestionMaster->at_q34   = 'S';
            $QuestionMaster->at_q35   = 'S';
            $QuestionMaster->at_q36   = 'S';
            $QuestionMaster->at_q37   = 'S';
            $QuestionMaster->at_q38   = 'S';
            $QuestionMaster->at_q39   = 'S';
            $QuestionMaster->at_q40   = 'S';
            $QuestionMaster->at_q41   = 'S';
            $QuestionMaster->at_q42   = 'S';
            $QuestionMaster->at_q43   = 'S';
            $QuestionMaster->at_q44   = 'S';
            $QuestionMaster->at_q45   = 'S';
            $QuestionMaster->at_q46   = 'SS';
            $QuestionMaster->at_q47   = 'SS';
            $QuestionMaster->at_q48   = 'SS';
            $QuestionMaster->at_q49   = 'SS';
            $QuestionMaster->at_q50   = 'SS';
            $QuestionMaster->at_q51   = 'SS';
            $QuestionMaster->at_q52   = 'SS';
            $QuestionMaster->at_q53   = 'SS';
            $QuestionMaster->at_q54   = 'SS';
            $QuestionMaster->at_q55   = 'SS';
            $QuestionMaster->at_q56   = 'SS';
            $QuestionMaster->at_q57   = 'SS';
            $QuestionMaster->at_q58   = 'SS';
            $QuestionMaster->at_q59   = 'SS';
            $QuestionMaster->at_q60   = 'SS';
            $QuestionMaster->save();
        }

        foreach ($grade10 as $key => $value) {
            $QuestionMaster = new QuestionMaster;
            $QuestionMaster->at_set  = $value;
            $QuestionMaster->at_grade = 10;
            $QuestionMaster->at_q01   = 'MIL';
            $QuestionMaster->at_q02   = 'MIL';
            $QuestionMaster->at_q03   = 'MIL';
            $QuestionMaster->at_q04   = 'MIL';
            $QuestionMaster->at_q05   = 'MIL';
            $QuestionMaster->at_q06   = 'MIL';
            $QuestionMaster->at_q07   = 'MIL';
            $QuestionMaster->at_q08   = 'MIL';
            $QuestionMaster->at_q09   = 'MIL';
            $QuestionMaster->at_q10   = 'MIL';
            $QuestionMaster->at_q11   = 'MIL';
            $QuestionMaster->at_q12   = 'MIL';
            $QuestionMaster->at_q13   = 'MIL';
            $QuestionMaster->at_q14   = 'MIL';
            $QuestionMaster->at_q15   = 'MIL';
            $QuestionMaster->at_q16   = 'ENG';
            $QuestionMaster->at_q17   = 'ENG';
            $QuestionMaster->at_q18   = 'ENG';
            $QuestionMaster->at_q19   = 'ENG';
            $QuestionMaster->at_q20   = 'ENG';
            $QuestionMaster->at_q21   = 'ENG';
            $QuestionMaster->at_q22   = 'ENG';
            $QuestionMaster->at_q23   = 'ENG';
            $QuestionMaster->at_q24   = 'ENG';
            $QuestionMaster->at_q25   = 'ENG';
            $QuestionMaster->at_q26   = 'ENG';
            $QuestionMaster->at_q27   = 'ENG';
            $QuestionMaster->at_q28   = 'ENG';
            $QuestionMaster->at_q29   = 'ENG';
            $QuestionMaster->at_q30   = 'ENG';
            $QuestionMaster->at_q31   = 'M';
            $QuestionMaster->at_q32   = 'M';
            $QuestionMaster->at_q33   = 'M';
            $QuestionMaster->at_q34   = 'M';
            $QuestionMaster->at_q35   = 'M';
            $QuestionMaster->at_q36   = 'M';
            $QuestionMaster->at_q37   = 'M';
            $QuestionMaster->at_q38   = 'M';
            $QuestionMaster->at_q39   = 'M';
            $QuestionMaster->at_q40   = 'M';
            $QuestionMaster->at_q41   = 'M';
            $QuestionMaster->at_q42   = 'M';
            $QuestionMaster->at_q43   = 'M';
            $QuestionMaster->at_q44   = 'M';
            $QuestionMaster->at_q45   = 'M';
            $QuestionMaster->at_q46   = 'S';
            $QuestionMaster->at_q47   = 'S';
            $QuestionMaster->at_q48   = 'S';
            $QuestionMaster->at_q49   = 'S';
            $QuestionMaster->at_q50   = 'S';
            $QuestionMaster->at_q51   = 'S';
            $QuestionMaster->at_q52   = 'S';
            $QuestionMaster->at_q53   = 'S';
            $QuestionMaster->at_q54   = 'S';
            $QuestionMaster->at_q55   = 'S';
            $QuestionMaster->at_q56   = 'S';
            $QuestionMaster->at_q57   = 'S';
            $QuestionMaster->at_q58   = 'S';
            $QuestionMaster->at_q59   = 'S';
            $QuestionMaster->at_q60   = 'S';
            $QuestionMaster->at_q61   = 'SS';
            $QuestionMaster->at_q61   = 'SS';
            $QuestionMaster->at_q62   = 'SS';
            $QuestionMaster->at_q63   = 'SS';
            $QuestionMaster->at_q64   = 'SS';
            $QuestionMaster->at_q65   = 'SS';
            $QuestionMaster->at_q66   = 'SS';
            $QuestionMaster->at_q67   = 'SS';
            $QuestionMaster->at_q68   = 'SS';
            $QuestionMaster->at_q69   = 'SS';
            $QuestionMaster->at_q70   = 'SS';
            $QuestionMaster->save();
        }
        return 'Data Saved Successfully.';
    }

    public function queryFunction($querySyntax,$queryGroupSyntax,$queryGroupCondition)
    {
        $query ="select ".$querySyntax."  grade, count(id) AS total_student, count(CASE WHEN location = '1' THEN 'Rural' END) AS rural_location, count(CASE WHEN location = '2' THEN 'Urban' END) AS urban_location, count(CASE WHEN management= 'F1' THEN 'Govt School' END) AS govt_school, count(CASE WHEN management= 'F2' THEN 'Govt Aided' END) AS govt_aided_school, count(CASE WHEN management= 'F3' THEN 'Private' END) AS private_school, count(CASE WHEN management= 'F4' THEN 'Central govt' END) AS central_govt_school, count(CASE WHEN socialgrp= '1' THEN 'SC' END) AS sc_social_group, count(CASE WHEN socialgrp= '2' THEN 'OBC' END) AS obc_social_group, count(CASE WHEN socialgrp= '3' THEN 'ST' END) AS st_social_group, count(CASE WHEN socialgrp= '4' THEN 'General' END) AS general_social_group, count(CASE WHEN gender= '1' THEN 'Boys' END) AS male_gender, count(CASE WHEN gender= '2' THEN 'Girls' END) AS female_gender,
        SUM(L_avg::float)/count(L_avg) AS avg_l_marks, SUM(l_avg::float) AS sum_l_marks, count(m_avg) AS total_m_student, SUM(m_avg::float)/count(l_avg) AS avg_m_marks, SUM(m_avg::float) AS sum_m_marks, count(e_avg) AS total_e_student, SUM(e_avg::float)/count(e_avg) AS avg_e_marks, SUM(e_avg::float) AS sum_e_marks, count(mil_avg) AS total_mil_student, SUM(mil_avg::float)/count(mil_avg) AS avg_mil_marks, SUM(mil_avg::float) AS sum_mil_marks, count(eng_avg) AS total_eng_student, SUM(eng_avg::float)/count(eng_avg) AS avg_eng_marks, SUM(eng_avg::float) AS sum_eng_marks, count(sci_avg) AS total_sci_student, SUM(sci_avg::float)/count(sci_avg) AS avg_sci_marks, SUM(sci_avg::float) AS sum_sci_marks, count(sst_avg) AS total_sst_student, SUM(sst_avg::float)/count(sst_avg) AS avg_sst_marks, SUM(sst_avg::float) AS sum_sst_marks,
        round(sum((CASE WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.l_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS l_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.l_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS l_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.l_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS l_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.l_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS l_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.m_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS m_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.m_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS m_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.m_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS m_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.m_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS m_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.e_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS evs_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.e_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS evs_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.e_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS evs_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.e_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS evs_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.mil_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS mil_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.mil_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS mil_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.mil_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS mil_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.mil_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS mil_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.eng_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS eng_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.eng_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS eng_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.eng_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS eng_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.eng_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS eng_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.sci_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sci_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.sci_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sci_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.sci_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sci_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.sci_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sci_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.sst_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sst_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.sst_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sst_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.sst_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sst_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.sst_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sst_general_social_group,
        round(sum(CASE WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS l_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS l_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS l_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS l_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS m_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS m_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS m_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS m_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS evs_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS evs_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS evs_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS evs_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS mil_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS mil_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS mil_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS mil_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS eng_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS eng_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS eng_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS eng_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS sci_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS sci_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS sci_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS sci_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS sst_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS sst_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS sst_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS sst_central_govt_management,
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS l_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS l_urban_location,
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS m_rural_location
                ,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS m_urban_location,
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS e_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS e_urban_location,        
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS mil_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS mil_urban_location,
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS eng_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS eng_urban_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS sci_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS sci_urban_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS sst_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS sst_urban_location,
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS l_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS l_female_gender,
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS m_male_gender
                ,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS m_female_gender,
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS e_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS e_female_gender,        
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS mil_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS mil_female_gender,
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS eng_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS eng_female_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS sci_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS sci_female_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS sst_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS sst_female_gender
        from at3_performance_data
        ".$queryGroupCondition."
        group by ".$queryGroupSyntax." at3_performance_data.grade";

        return $query;

    }
    public function queryFunctionPerformanceLevel($querySyntax,$queryGroupSyntax,$queryGroupCondition)
    {
        $query ="select ".$querySyntax."  grade, count(CASE WHEN round(m_avg::float)<=35 THEN m_avg END) as b,count(m_avg::float),
        round((count(CASE WHEN (l_avg::float)>=1 and(l_avg::float)<=35 THEN l_avg END)::decimal*100)/count(l_avg::float),2) AS l_avg_below_basic,
        round((count(CASE WHEN (l_avg::float)>=36 and (l_avg::float)<=50 THEN l_avg END)::decimal*100)/count(l_avg::float),2) AS l_avg_basic,
        round((count(CASE WHEN (l_avg::float)>=51 and (l_avg::float)<=75 THEN l_avg END)::decimal*100)/count(l_avg::float),2) AS l_avg_proficient,
        round((count(CASE WHEN (l_avg::float)>=76 and (l_avg::float)<=100 THEN l_avg END)::decimal*100)/count(l_avg::float),2) AS l_avg_advanced,
        round((count(CASE WHEN (m_avg::float)>=1 and(m_avg::float)<=35 THEN m_avg END)::decimal*100)/count(m_avg::float),2) AS m_avg_below_basic,
        round((count(CASE WHEN (m_avg::float)>=36 and (m_avg::float)<=50 THEN m_avg END)::decimal*100)/count(m_avg::float),2) AS m_avg_basic,
        round((count(CASE WHEN (m_avg::float)>=51 and (m_avg::float)<=75 THEN m_avg END)::decimal*100)/count(m_avg::float),2) AS m_avg_proficient,
        round((count(CASE WHEN (m_avg::float)>=76 and (m_avg::float)<=100 THEN m_avg END)::decimal*100)/count(m_avg::float),2) AS m_avg_advanced,
        round((count(CASE WHEN (e_avg::float)>=1 and(e_avg::float)<=35 THEN e_avg END)::decimal*100)/count(e_avg::float),2) AS e_avg_below_basic,
        round((count(CASE WHEN (e_avg::float)>=36 and (e_avg::float)<=50 THEN e_avg END)::decimal*100)/count(e_avg::float),2) AS e_avg_basic,
        round((count(CASE WHEN (e_avg::float)>=51 and (e_avg::float)<=75 THEN e_avg END)::decimal*100)/count(e_avg::float),2) AS e_avg_proficient,
        round((count(CASE WHEN (e_avg::float)>=76 and (e_avg::float)<=100 THEN e_avg END)::decimal*100)/count(e_avg::float),2) AS e_avg_advanced,
        round((count(CASE WHEN (mil_avg::float)>=1 and (mil_avg::float)<=35 THEN mil_avg END)::decimal*100)/count(mil_avg::float),2) AS mil_avg_below_basic,
        round((count(CASE WHEN (mil_avg::float)>=36 and (mil_avg::float)<=50 THEN mil_avg END)::decimal*100)/count(m_avg::float),2) AS mil_avg_basic,
        round((count(CASE WHEN (mil_avg::float)>=51 and (mil_avg::float)<=75 THEN mil_avg END)::decimal*100)/count(m_avg::float),2) AS mil_avg_proficient,
        round((count(CASE WHEN (mil_avg::float)>=76 and (mil_avg::float)<=100 THEN mil_avg END)::decimal*100)/count(m_avg::float),2) AS mil_avg_advanced,
        round((count(CASE WHEN (eng_avg::float)>=1 and(eng_avg::float)<=35 THEN eng_avg END)::decimal*100)/count(eng_avg::float),2) AS eng_avg_below_basic,
        round((count(CASE WHEN (eng_avg::float)>=36 and (eng_avg::float)<=50 THEN eng_avg END)::decimal*100)/count(m_avg::float),2) AS eng_avg_basic,
        round((count(CASE WHEN (eng_avg::float)>=51 and (eng_avg::float)<=75 THEN eng_avg END)::decimal*100)/count(m_avg::float),2) AS eng_avg_proficient,
        round((count(CASE WHEN (eng_avg::float)>=76 and (eng_avg::float)<=100 THEN eng_avg END)::decimal*100)/count(m_avg::float),2) AS mil_avg_advanced,
        round((count(CASE WHEN (sci_avg::float)>=1 and(sci_avg::float)<=35 THEN sci_avg END)::decimal*100)/count(sci_avg::float),2) AS sci_avg_below_basic,
        round((count(CASE WHEN (sci_avg::float)>=36 and (sci_avg::float)<=50 THEN sci_avg END)::decimal*100)/count(m_avg::float),2) AS sci_avg_basic,
        round((count(CASE WHEN (sci_avg::float)>=51 and (sci_avg::float)<=75 THEN sci_avg END)::decimal*100)/count(m_avg::float),2) AS sci_avg_proficient,
        round((count(CASE WHEN (sci_avg::float)>=76 and (sci_avg::float)<=100 THEN sci_avg END)::decimal*100)/count(m_avg::float),2) AS sci_avg_advanced,
        round((count(CASE WHEN (sst_avg::float)>=1 and (sst_avg::float)<=35 THEN sst_avg END)::decimal*100)/count(sst_avg::float),2) AS sst_avg_below_basic,
        round((count(CASE WHEN (sst_avg::float)>=36 and (sst_avg::float)<=50 THEN sst_avg END)::decimal*100)/count(m_avg::float),2) AS sst_avg_basic,
        round((count(CASE WHEN (sst_avg::float)>=51 and (sst_avg::float)<=75 THEN sst_avg END)::decimal*100)/count(m_avg::float),2) AS sst_avg_proficient,
        round((count(CASE WHEN (sst_avg::float)>=76 and (sst_avg::float)<=100 THEN sst_avg END)::decimal*100)/count(m_avg::float),2) AS sst_avg_advanced
        from at3_performance_data
        ".$queryGroupCondition."
        group by ".$queryGroupSyntax." at3_performance_data.grade";

        return $query;

    }


}
