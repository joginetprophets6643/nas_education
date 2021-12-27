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
