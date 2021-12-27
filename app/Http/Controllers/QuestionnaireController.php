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
class QuestionnaireController extends Controller
{
    public function questionnaireCalculation()
    {
       /* ....Calculation Count for Language , Mathmatics and EVS.... */
       $atteptQuestioninAt3s =  At3s::with(['NasExamDetails'=>function($q){
           $q->select('state_cd','district_cd','udise_sch_code');
       },'PQDetails'=>function($pq){
        $pq->select('pq_bar','pq_gender');
    }])
    //    ->take(5)
       ->get();
    //    dd($atteptQuestioninAt3s);
       $at3sCalculateData = array();
       if(count($atteptQuestioninAt3s)>0)
       {
        foreach ($atteptQuestioninAt3s as $key => $at3) {
            $questionPassArray = array($at3->at3_q01,$at3->at3_q02,$at3->at3_q03,$at3->at3_q04,$at3->at3_q05,$at3->at3_q06,$at3->at3_q07,$at3->at3_q08,$at3->at3_q09,$at3->at3_q10,$at3->at3_q11,$at3->at3_q12,$at3->at3_q13,$at3->at3_q14,$at3->at3_q15,$at3->at3_q16,$at3->at3_q17,$at3->at3_q18,$at3->at3_q19,$at3->at3_q20,$at3->at3_q21,$at3->at3_q22,$at3->at3_q23,$at3->at3_q24,$at3->at3_q25,$at3->at3_q26,$at3->at3_q27,$at3->at3_q28,$at3->at3_q29,$at3->at3_q30,$at3->at3_q31,$at3->at3_q32,$at3->at3_q33,$at3->at3_q34,$at3->at3_q35,$at3->at3_q36,$at3->at3_q37,$at3->at3_q38,$at3->at3_q39,$at3->at3_q40,$at3->at3_q41,$at3->at3_q42,$at3->at3_q43,$at3->at3_q44,$at3->at3_q45,$at3->at3_q46,$at3->at3_q47);
            $at3sCalculateData['sq_scan']       =  $at3->sq_scan;
            $at3sCalculateData['at3_udise']     =  $at3->at3_udise;
            $at3sCalculateData['at3_udise']     =  $at3->at3_udise;
            $at3sCalculateData['state_id']     =  $at3['NasExamDetails']->state_cd;
            $at3sCalculateData['district_id']       =  $at3['NasExamDetails']->district_cd;
            $at3sCalculateData['gender']       =  isset($at3['PQDetails'])?$at3['PQDetails']->pq_gender:'';
            $at3sCalculateData['at3_grade']     =  $at3->at3_grade;
            $checkLaguage                       = $this->checkLaguagefunction($at3->at3_set,$questionPassArray);
            $at3sCalculateData['L_avg']         =  $checkLaguage[0];
            $at3sCalculateData['M_avg']         =  $checkLaguage[1];
            $at3sCalculateData['E_avg']         =  $checkLaguage[2];
            $at3FinalCalculateData[]            =  $at3sCalculateData;
 
        }
       }
    //  $at3FinalCalculateData[]['cal'] = array_sum(array_column($at3FinalCalculateData, 'L_avg'))/count($at3FinalCalculateData);
     dd($at3FinalCalculateData);
     

      
    }

    public function checkLaguagefunction($at3set,$questionNumbers)
    {
         $lagCount = 0 ;
         $mathCount = 0 ;
         $evsCount = 0 ;
         foreach ($questionNumbers as $key => $value) {
          
            if($key>=0 && $key<9)
            {
                $var =  'at3_q0'.$key+1;
            }
            else
            {
                $var =  'at3_q'.$key+1;
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
         $data = [31,32,33,34];
        
        foreach ($data as $key => $value) {
            $at3SetforLanguage = new At3SetForLanguage;
            $at3SetforLanguage->at3_set    = $value;
            $at3SetforLanguage->at3_grade  = 3;
            $at3SetforLanguage->at3_q01   = 'L';
            $at3SetforLanguage->at3_q02   = 'L';
            $at3SetforLanguage->at3_q03   = 'L';
            $at3SetforLanguage->at3_q04   = 'L';
            $at3SetforLanguage->at3_q05   = 'L';
            $at3SetforLanguage->at3_q06   = 'L';
            $at3SetforLanguage->at3_q07   = 'L';
            $at3SetforLanguage->at3_q08   = 'L';
            $at3SetforLanguage->at3_q09   = 'L';
            $at3SetforLanguage->at3_q10   = 'L';
            $at3SetforLanguage->at3_q11   = 'L';
            $at3SetforLanguage->at3_q12   = 'L';
            $at3SetforLanguage->at3_q13   = 'L';
            $at3SetforLanguage->at3_q14   = 'L';
            $at3SetforLanguage->at3_q15   = 'L';
            $at3SetforLanguage->at3_q16   = 'M';
            $at3SetforLanguage->at3_q17   = 'M';
            $at3SetforLanguage->at3_q18   = 'M';
            $at3SetforLanguage->at3_q19   = 'M';
            $at3SetforLanguage->at3_q20   = 'M';
            $at3SetforLanguage->at3_q21   = 'M';
            $at3SetforLanguage->at3_q22   = 'M';
            $at3SetforLanguage->at3_q23   = 'M';
            $at3SetforLanguage->at3_q24   = 'M';
            $at3SetforLanguage->at3_q25   = 'M';
            $at3SetforLanguage->at3_q26   = 'M';
            $at3SetforLanguage->at3_q27   = 'M';
            $at3SetforLanguage->at3_q28   = 'M';
            $at3SetforLanguage->at3_q29   = 'M';
            $at3SetforLanguage->at3_q30   = 'M';
            $at3SetforLanguage->at3_q31   = 'M';
            $at3SetforLanguage->at3_q32   = 'M';
            $at3SetforLanguage->at3_q33   = 'M';
            $at3SetforLanguage->at3_q34   = 'M';
            $at3SetforLanguage->at3_q35   = 'M';
            $at3SetforLanguage->at3_q36   = 'M';
            $at3SetforLanguage->at3_q37   = 'M';
            $at3SetforLanguage->at3_q38   = 'M';
            $at3SetforLanguage->at3_q39   = 'M';
            $at3SetforLanguage->at3_q40   = 'M';
            $at3SetforLanguage->at3_q41   = 'E';
            $at3SetforLanguage->at3_q42   = 'E';
            $at3SetforLanguage->at3_q43   = 'E';
            $at3SetforLanguage->at3_q44   = 'E';
            $at3SetforLanguage->at3_q45   = 'E';
            $at3SetforLanguage->at3_q46   = 'E';
            $at3SetforLanguage->at3_q47   = 'E';         
            $at3SetforLanguage->save();
        }
        return 'Data Saved Successfully.';
    }

}
