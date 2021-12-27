<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\At3s;
use App\Models\At3_key;
use App\Models\DummyAt3s;
use App\Models\At5s;
use App\Models\DummyAt5s;
use App\Models\At8s;
use App\Models\DummyAt8s;
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
use DB;

class QuestionnaireController extends Controller
{
    public function questionnaireCalculation()
    {
       /* ....Calculation Count for Language , Mathmatics and EVS.... */
       $atteptQuestioninAt3s =  At3s::with(['NasExamDetails'=>function($q){
           $q->select('state_cd','district_cd','udise_sch_code','sch_loc_r_u','frame');
       },'PQDetails'=>function($pq){
        $pq->select('pq_bar','pq_gender');
    }])
    //    ->take(5)
       ->get();
    //    dd($atteptQuestioninAt3s);
       $at3sCalculateData = array();
       if(count($atteptQuestioninAt3s)>0)
       {

        $blog = DB::table('at3_performance_data')->truncate();
        foreach ($atteptQuestioninAt3s as $key => $at3) {
            $questionPassArray = array($at3->at3_q01,$at3->at3_q02,$at3->at3_q03,$at3->at3_q04,$at3->at3_q05,$at3->at3_q06,$at3->at3_q07,$at3->at3_q08,$at3->at3_q09,$at3->at3_q10,$at3->at3_q11,$at3->at3_q12,$at3->at3_q13,$at3->at3_q14,$at3->at3_q15,$at3->at3_q16,$at3->at3_q17,$at3->at3_q18,$at3->at3_q19,$at3->at3_q20,$at3->at3_q21,$at3->at3_q22,$at3->at3_q23,$at3->at3_q24,$at3->at3_q25,$at3->at3_q26,$at3->at3_q27,$at3->at3_q28,$at3->at3_q29,$at3->at3_q30,$at3->at3_q31,$at3->at3_q32,$at3->at3_q33,$at3->at3_q34,$at3->at3_q35,$at3->at3_q36,$at3->at3_q37,$at3->at3_q38,$at3->at3_q39,$at3->at3_q40,$at3->at3_q41,$at3->at3_q42,$at3->at3_q43,$at3->at3_q44,$at3->at3_q45,$at3->at3_q46,$at3->at3_q47);
            // $at3sCalculateData['sq_scan']       =  $at3->sq_scan;
            // $at3sCalculateData['at3_udise']     =  $at3->at3_udise;
            // $at3sCalculateData['at3_udise']     =  $at3->at3_udise;
            $at3sCalculateData['state_id']     =  $at3['NasExamDetails']->state_cd;
            $at3sCalculateData['district_id']       =  $at3['NasExamDetails']->district_cd;
            $at3sCalculateData['location']       =  $at3['NasExamDetails']->sch_loc_r_u;
            $at3sCalculateData['management']       =  $at3['NasExamDetails']->frame;
            $at3sCalculateData['gender']       =  isset($at3['PQDetails'])?$at3['PQDetails']->pq_gender:'';
            $at3sCalculateData['socialgrp']     =  $at3->at3_socgrp;
            $at3sCalculateData['grade']     =  $at3->at3_grade;
            $checkLaguage                       = $this->checkLaguagefunction($at3->at3_set,$questionPassArray);
            $at3sCalculateData['l_avg']         =  $checkLaguage[0];
            $at3sCalculateData['m_avg']         =  $checkLaguage[1];
            $at3sCalculateData['e_avg']         =  $checkLaguage[2];
            $at3sCalculateData['created_at'] = now();
            $at3sCalculateData['updated_at'] = now();

            $at3FinalCalculateData[]            =  $at3sCalculateData;
 
        }
       }
    //  $at3FinalCalculateData[]['cal'] = array_sum(array_column($at3FinalCalculateData, 'L_avg'))/count($at3FinalCalculateData);
     dd($at3FinalCalculateData);

    
    $msg = AT3PerformanceData::insert($at3FinalCalculateData);

    $at3Data = DB::table('at3_performance_data')->select('state_id','district_id',DB::raw("count(id)  AS total_student"), DB::raw("count(CASE WHEN location = '1' THEN 'Rural' END) AS rural_location"),DB::raw("count(CASE  WHEN location = '2' THEN 'Urban' END) AS urban_location"),DB::raw("count(CASE  WHEN management= 'F1' THEN 'Govt School' END) AS govt_school"),DB::raw("count(CASE WHEN management= 'F2' THEN 'Govt Aided' END) AS govt_aided_school"),DB::raw(" count(CASE WHEN management= 'F3' THEN 'Private' END) AS private_school"),DB::raw(" count(CASE WHEN management= 'F4' THEN 'Central govt' END) AS central_govt_school"),DB::raw(" count(CASE WHEN socialgrp= '1' THEN 'SC' END) AS sc_social_group"),DB::raw("count(CASE WHEN socialgrp= '2' THEN 'OBC' END) AS obc_social_group"),DB::raw("count(CASE WHEN socialgrp= '3' THEN 'ST' END) AS st_social_group"),DB::raw("count(CASE WHEN socialgrp= '4' THEN 'General' END) AS general_social_group"),DB::raw("count(CASE WHEN gender= '1' THEN 'Boys' END) AS male_gender"),DB::raw("count(CASE 
    WHEN gender= '2' THEN 'Girls' END) AS female_gender"),DB::raw("count(l_avg) AS total_l_student"),DB::raw("SUM(L_avg::int)/count(L_avg) AS avg_l_marks"),DB::raw("SUM(l_avg::int) AS sum_l_marks"),DB::raw("count(m_avg) AS total_m_student"),DB::raw("SUM(m_avg::int)/count(l_avg) AS avg_m_marks"),DB::raw("SUM(m_avg::int) AS sum_m_marks"),DB::raw("count(e_avg) AS total_e_student"),DB::raw("SUM(e_avg::int)/count(e_avg) AS avg_e_marks"),DB::raw("SUM(e_avg::int) AS sum_e_marks"))
    ->groupBy('at3_performance_data.state_id')
    ->groupBy('at3_performance_data.district_id')
    ->get();
// dd($at3Data);
$newData3Grade = array();
if(count($at3Data)>0)
{
    $blog = DB::table('district_grade_level_performance')->where('grade',3)->truncate();
    foreach($at3Data as $nasDetails3)
    {
        $newData3Grade['state_id'] = (int)$nasDetails3->state_id;
        $newData3Grade['district_id'] = (int)$nasDetails3->district_id;
        $newData3Grade['grade'] = (int)'3';
        $newData3Grade['rural_location'] = isset($nasDetails3->rural_location)?$nasDetails3->rural_location:0;
        $newData3Grade['urban_location'] = isset($nasDetails3->urban_location)?$nasDetails3->urban_location:0;
        $newData3Grade['govt_school'] = isset($nasDetails3->govt_school)?$nasDetails3->govt_school:0;
        $newData3Grade['govt_aided_school'] = isset($nasDetails3->govt_aided_school)?$nasDetails3->govt_aided_school:0;
        $newData3Grade['private_school'] = isset($nasDetails3->private_school)?$nasDetails3->private_school:0;
        $newData3Grade['central_govt_school'] = isset($nasDetails3->central_govt_school)?$nasDetails3->central_govt_school:0;
        $newData3Grade['total_student'] = isset($nasDetails3->total_student)?$nasDetails3->total_student:0;
        $newData3Grade['sc_social_group'] = isset($nasDetails3->sc_social_group)?$nasDetails3->sc_social_group:0;
        $newData3Grade['obc_social_group'] = isset($nasDetails3->obc_social_group)?$nasDetails3->obc_social_group:0;
        $newData3Grade['st_social_group'] = isset($nasDetails3->st_social_group)?$nasDetails3->st_social_group:0;
        $newData3Grade['general_social_group'] = isset($nasDetails3->general_social_group)?$nasDetails3->general_social_group:0;
        $newData3Grade['male_gender'] = isset($nasDetails3->male_gender)?$nasDetails3->male_gender:0;
        $newData3Grade['female_gender'] = isset($nasDetails3->female_gender)?$nasDetails3->female_gender:0;
        $newData3Grade['total_l_student'] = isset($nasDetails3->total_l_student)?$nasDetails3->total_l_student:0;
        $newData3Grade['avg_l_marks'] = isset($nasDetails3->avg_l_marks)?$nasDetails3->avg_l_marks:0;
        $newData3Grade['sum_l_marks'] = isset($nasDetails3->sum_l_marks)?$nasDetails3->sum_l_marks:0;        $newData3Grade['total_m_student'] = isset($nasDetails3->total_m_student)?$nasDetails3->total_m_student:0;
        $newData3Grade['avg_m_marks'] = isset($nasDetails3->avg_m_marks)?$nasDetails3->avg_m_marks:0;
        $newData3Grade['sum_m_marks'] = isset($nasDetails3->sum_m_marks)?$nasDetails3->sum_m_marks:0;        $newData3Grade['total_e_student'] = isset($nasDetails3->total_e_student)?$nasDetails3->total_e_student:0;
        $newData3Grade['avg_e_marks'] = isset($nasDetails3->avg_e_marks)?$nasDetails3->avg_e_marks:0;
        $newData3Grade['sum_e_marks'] = isset($nasDetails3->sum_e_marks)?$nasDetails3->sum_e_marks:0;
        $newData3Grade['created_at'] = now();
        $newData3Grade['updated_at'] = now();

        $getAll3GradeData[]=$newData3Grade;
    }
//    dd($getAll3GradeData);

    $districtMsg = DistrictGradeLevelPerformance::insert($getAll3GradeData);

    /*************************************************************
     * Name: Jogi
     * Desc: State Process data in all grade
     * Date: 27/12/2021
     * Start Here
     *************************************************************/

    $allGradeStateData = DB::table('district_grade_level_performance')
    ->select('state_id','grade',DB::raw("SUM(total_student::int) AS total_student"),DB::raw("round(SUM(rural_location::int)) AS rural_location"),DB::raw("round(SUM(urban_location::int)) AS urban_location"),DB::raw("round(SUM(govt_school::int)) AS govt_school"),DB::raw("round(SUM(govt_aided_school::int)) AS govt_aided_school"),DB::raw("round(SUM(private_school::int)) AS private_school"),DB::raw("round(SUM(central_govt_school::int)) AS central_govt_school"),DB::raw("round(SUM(sc_social_group::int)) AS sc_social_group"),DB::raw("round(SUM(obc_social_group::int)) AS obc_social_group"),DB::raw("round(SUM(st_social_group::int)) AS st_social_group"),DB::raw("round(SUM(general_social_group::int)) AS general_social_group"),DB::raw("round(SUM(male_gender::int)) AS male_gender"),DB::raw("round(SUM(female_gender::int)) AS female_gender"),DB::raw("round(SUM(total_l_student::int)) AS total_l_student"),DB::raw("round(SUM(sum_l_marks::int)) AS sum_l_marks"),DB::raw("SUM(sum_l_marks::int)/count(sum_l_marks) AS avg_l_marks"),DB::raw("round(SUM(total_m_student::int)) AS total_m_student"),DB::raw("round(SUM(sum_m_marks::int)) AS sum_m_marks"),DB::raw("SUM(sum_m_marks::int)/count(sum_m_marks) AS avg_m_marks"),DB::raw("round(SUM(total_e_student::int)) AS total_e_student"),DB::raw("round(SUM(sum_e_marks::int)) AS sum_e_marks"),DB::raw("SUM(sum_e_marks::int)/count(sum_e_marks) AS avg_e_marks"))
    ->groupBy('state_id')
    ->groupBy('grade')
    ->get();

    $newStateData = array();
    if(count($allGradeStateData)>0)
    {
        $blogState = DB::table('state_grade_level_performance')->truncate();
        foreach($allGradeStateData as $nasDetailsStateCounts)
        {
            $newStateData['state_id'] = (int)$nasDetailsStateCounts->state_id;
            $newStateData['grade'] = isset($nasDetailsStateCounts->grade)?$nasDetailsStateCounts->grade:0;
            $newStateData['rural_location'] = isset($nasDetailsStateCounts->rural_location)?$nasDetailsStateCounts->rural_location:0;
            $newStateData['urban_location'] = isset($nasDetailsStateCounts->urban_location)?$nasDetailsStateCounts->urban_location:0;
            $newStateData['govt_school'] = isset($nasDetailsStateCounts->govt_school)?$nasDetailsStateCounts->govt_school:0;
            $newStateData['govt_aided_school'] = isset($nasDetailsStateCounts->govt_aided_school)?$nasDetailsStateCounts->govt_aided_school:0;
            $newStateData['private_school'] = isset($nasDetailsStateCounts->private_school)?$nasDetailsStateCounts->private_school:0;
            $newStateData['central_govt_school'] = isset($nasDetailsStateCounts->central_govt_school)?$nasDetailsStateCounts->central_govt_school:0;
            $newStateData['total_student'] = isset($nasDetailsStateCounts->total_student)?$nasDetailsStateCounts->total_student:0;
            $newStateData['sc_social_group'] = isset($nasDetailsStateCounts->sc_social_group)?$nasDetailsStateCounts->sc_social_group:0;
            $newStateData['obc_social_group'] = isset($nasDetailsStateCounts->obc_social_group)?$nasDetailsStateCounts->obc_social_group:0;
            $newStateData['st_social_group'] = isset($nasDetailsStateCounts->st_social_group)?$nasDetailsStateCounts->st_social_group:0;
            $newStateData['general_social_group'] = isset($nasDetailsStateCounts->general_social_group)?$nasDetailsStateCounts->general_social_group:0;
            $newStateData['male_gender'] = isset($nasDetailsStateCounts->male_gender)?$nasDetailsStateCounts->male_gender:0;
            $newStateData['female_gender'] = isset($nasDetailsStateCounts->female_gender)?$nasDetailsStateCounts->female_gender:0;
            $newStateData['total_l_student'] = isset($nasDetailsStateCounts->total_l_student)?$nasDetailsStateCounts->total_l_student:0;
            $newStateData['avg_l_marks'] = isset($nasDetailsStateCounts->avg_l_marks)?$nasDetailsStateCounts->avg_l_marks:0;
            $newStateData['sum_l_marks'] = isset($nasDetailsStateCounts->sum_l_marks)?$nasDetailsStateCounts->sum_l_marks:0;        
            $newStateData['total_m_student'] = isset($nasDetailsStateCounts->total_m_student)?$nasDetailsStateCounts->total_m_student:0;
            $newStateData['avg_m_marks'] = isset($nasDetailsStateCounts->avg_m_marks)?$nasDetailsStateCounts->avg_m_marks:0;
            $newStateData['sum_m_marks'] = isset($nasDetailsStateCounts->sum_m_marks)?$nasDetailsStateCounts->sum_m_marks:0;        
            $newStateData['total_e_student'] = isset($nasDetailsStateCounts->total_e_student)?$nasDetailsStateCounts->total_e_student:0;
            $newStateData['avg_e_marks'] = isset($nasDetailsStateCounts->avg_e_marks)?$nasDetailsStateCounts->avg_e_marks:0;
            $newStateData['sum_e_marks'] = isset($nasDetailsStateCounts->sum_e_marks)?$nasDetailsStateCounts->sum_e_marks:0;
            $newStateData['created_at'] = now();
            $newStateData['updated_at'] = now();

            $dataStateAllGrade[]=$newStateData;
        } 
    }  
    $statemsg = StateGradeLevelPerformance::insert($dataStateAllGrade);

    /*************************************************************
     * Name: Jogi
     * Desc: National Process data in all grade
     * Date: 27/12/2021
     * Start Here
     *************************************************************/

    $allGradeNationalData = DB::table('district_grade_level_performance')
    ->select('grade',DB::raw("SUM(total_student::int) AS total_student"),DB::raw("round(SUM(rural_location::int)) AS rural_location"),DB::raw("round(SUM(urban_location::int)) AS urban_location"),DB::raw("round(SUM(govt_school::int)) AS govt_school"),DB::raw("round(SUM(govt_aided_school::int)) AS govt_aided_school"),DB::raw("round(SUM(private_school::int)) AS private_school"),DB::raw("round(SUM(central_govt_school::int)) AS central_govt_school"),DB::raw("round(SUM(sc_social_group::int)) AS sc_social_group"),DB::raw("round(SUM(obc_social_group::int)) AS obc_social_group"),DB::raw("round(SUM(st_social_group::int)) AS st_social_group"),DB::raw("round(SUM(general_social_group::int)) AS general_social_group"),DB::raw("round(SUM(male_gender::int)) AS male_gender"),DB::raw("round(SUM(female_gender::int)) AS female_gender"),DB::raw("round(SUM(total_l_student::int)) AS total_l_student"),DB::raw("round(SUM(sum_l_marks::int)) AS sum_l_marks"),DB::raw("SUM(sum_l_marks::int)/count(sum_l_marks) AS avg_l_marks"),DB::raw("round(SUM(total_m_student::int)) AS total_m_student"),DB::raw("round(SUM(sum_m_marks::int)) AS sum_m_marks"),DB::raw("SUM(sum_m_marks::int)/count(sum_m_marks) AS avg_m_marks"),DB::raw("round(SUM(total_e_student::int)) AS total_e_student"),DB::raw("round(SUM(sum_e_marks::int)) AS sum_e_marks"),DB::raw("SUM(sum_e_marks::int)/count(sum_e_marks) AS avg_e_marks"))
    ->groupBy('grade')
    ->get();

    $newNationalData = array();
    if(count($allGradeNationalData)>0)
    {
        $blogState = DB::table('national_grade_level_performance')->truncate();
        foreach($allGradeNationalData as $nasDetailsNationalCounts)
        {
            $newNationalData['grade'] = isset($nasDetailsNationalCounts->grade)?$nasDetailsNationalCounts->grade:0;
            $newNationalData['rural_location'] = isset($nasDetailsNationalCounts->rural_location)?$nasDetailsNationalCounts->rural_location:0;
            $newNationalData['urban_location'] = isset($nasDetailsNationalCounts->urban_location)?$nasDetailsNationalCounts->urban_location:0;
            $newNationalData['govt_school'] = isset($nasDetailsNationalCounts->govt_school)?$nasDetailsNationalCounts->govt_school:0;
            $newNationalData['govt_aided_school'] = isset($nasDetailsNationalCounts->govt_aided_school)?$nasDetailsNationalCounts->govt_aided_school:0;
            $newNationalData['private_school'] = isset($nasDetailsNationalCounts->private_school)?$nasDetailsNationalCounts->private_school:0;
            $newNationalData['central_govt_school'] = isset($nasDetailsNationalCounts->central_govt_school)?$nasDetailsNationalCounts->central_govt_school:0;
            $newNationalData['total_student'] = isset($nasDetailsNationalCounts->total_student)?$nasDetailsNationalCounts->total_student:0;
            $newNationalData['sc_social_group'] = isset($nasDetailsNationalCounts->sc_social_group)?$nasDetailsNationalCounts->sc_social_group:0;
            $newNationalData['obc_social_group'] = isset($nasDetailsNationalCounts->obc_social_group)?$nasDetailsNationalCounts->obc_social_group:0;
            $newNationalData['st_social_group'] = isset($nasDetailsNationalCounts->st_social_group)?$nasDetailsNationalCounts->st_social_group:0;
            $newNationalData['general_social_group'] = isset($nasDetailsNationalCounts->general_social_group)?$nasDetailsNationalCounts->general_social_group:0;
            $newNationalData['male_gender'] = isset($nasDetailsNationalCounts->male_gender)?$nasDetailsNationalCounts->male_gender:0;
            $newNationalData['female_gender'] = isset($nasDetailsNationalCounts->female_gender)?$nasDetailsNationalCounts->female_gender:0;
            $newNationalData['total_l_student'] = isset($nasDetailsNationalCounts->total_l_student)?$nasDetailsNationalCounts->total_l_student:0;
            $newNationalData['avg_l_marks'] = isset($nasDetailsNationalCounts->avg_l_marks)?$nasDetailsNationalCounts->avg_l_marks:0;
            $newNationalData['sum_l_marks'] = isset($nasDetailsNationalCounts->sum_l_marks)?$nasDetailsNationalCounts->sum_l_marks:0;        
            $newNationalData['total_m_student'] = isset($nasDetailsNationalCounts->total_m_student)?$nasDetailsNationalCounts->total_m_student:0;
            $newNationalData['avg_m_marks'] = isset($nasDetailsNationalCounts->avg_m_marks)?$nasDetailsNationalCounts->avg_m_marks:0;
            $newNationalData['sum_m_marks'] = isset($nasDetailsNationalCounts->sum_m_marks)?$nasDetailsNationalCounts->sum_m_marks:0;        
            $newNationalData['total_e_student'] = isset($nasDetailsNationalCounts->total_e_student)?$nasDetailsNationalCounts->total_e_student:0;
            $newNationalData['avg_e_marks'] = isset($nasDetailsNationalCounts->avg_e_marks)?$nasDetailsNationalCounts->avg_e_marks:0;
            $newNationalData['sum_e_marks'] = isset($nasDetailsNationalCounts->sum_e_marks)?$nasDetailsNationalCounts->sum_e_marks:0;
            $newNationalData['created_at'] = now();
            $newNationalData['updated_at'] = now();

            $dataNationalAllGrade[]=$newNationalData;
        } 
    }  
    $nationalmsg = NationalGradeLevelPerformance::insert($dataNationalAllGrade);

    dd($nationalmsg);
    
}  
     
    


      
    }

    public function checkLaguagefunction($at3set,$questionNumbers)
    {
         $lagCount = 0 ;
         $mathCount = 0 ;
         $evsCount = 0 ;
         
         foreach ($questionNumbers as $key => $value) {
          
         
            if($key>=0 && $key<9)
            {
                
                $var =  'at3_q0'.++$key;
            }
            else
            {
                $var =  'at3_q'.++$key;
               
            }
            
           
            $checklang = At3SetForLanguage::where('at3_set',$at3set)->first();
              // Check Question for Language
              if($checklang->$var=='L')
              {
                
                $result = At3_key::where('at3_set',$at3set)
                         ->where($var,$value)->count();
                    if($result==1)
                    {
                        $lagCount++; 
                    }
   
              }
               // Check Question for Mathmatics
              if($checklang->$var=='M')
              {
               
                $result = At3_key::where('at3_set',$at3set)
                ->where($var,$value)->count();
                if($result==1)
                    {
                        $mathCount++; 
                    }
                   
              }
             // Check Question for Evs
              if($checklang->$var=='E')
              {
                $result = At3_key::where('at3_set',$at3set)
                ->where($var,$value)->count();
                if($result==1)
                {
                    $mathCount++; 
                }
               
              }
              
         }
         return array($lagCount, $mathCount, $evsCount);
        //  dd(1);
         
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

}
