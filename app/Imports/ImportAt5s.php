<?php

namespace App\Imports;

use App\Models\At5s;
use App\Models\At5_key;
use App\Models\DummyAt5s;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class ImportAt5s implements ToModel,WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       
      
        $data =  $this->excelrowData($row);
        

        $right_counter = 0;
        $total_number_question = 0;
        foreach ($row as $key => $value) {
            if(strlen((integer)$row[2])==11)
            {
                $data['state_id']=substr((integer)$row[2], 0, 2);
                $data['district_id']=substr((integer)$row[2], 2, 2);
            }
            elseif(strlen((integer)$row[2])==10)
            {
                $at5_udise_val = str_pad((integer)$row[2], 11, '0', STR_PAD_LEFT);
                $data['state_id']=substr($at5_udise_val, 0, 2);
                $data['district_id']=substr($at5_udise_val, 2, 2);
            }

            $data['at5_parent_bar']=substr_replace((string)$row[1],'1',1,1);

           if($key>8 && $key<54)
           {
          
            $total_number_question = $total_number_question + 1;
            if((strlen((integer)$row[1])==9) && (strlen((integer)$row[2])==10) && in_array($row[3] ,[51,52,53,54]) && in_array($row[$key],[1,2,3,4,'X','Z']) && in_array($row[7],[1,2,3,4]) && in_array($row[8],[1,2,3,4,5,6]))
            {
              $check_result = $this->get_attemp_question_count($row[1],$row[3],$key,$row[$key]);
               if($check_result==true)
               {
                   $right_counter = $right_counter+1;
               }
               $check = 1; 
           }
           else
           {
             $check_result = $this->get_attemp_question_count($row[1],$row[3],$key,$row[$key]);
               if($check_result==true)
               {
                   $right_counter = $right_counter+1;
               }
               $check = 2; 
           }
           }


        }

        if($check==1)
        {
            $data['right_count'] = $right_counter;
            $data['percentage'] =  ($right_counter/$total_number_question)*100;
            return new At5s($data);
        }
        else
        {
            
                           
            $data['at5_bar_error_desc']     =        "at5 Bar code should be 9 digits";
            $data['at5_udise_error_desc']   =        "at5 Udise code should be 11 digits";
            $data['at5_set_error_desc']     =        "at5_set code should be 51,52,53,54";
            $data['at5_grade_error_desc']   =        "at5_grade code should be one digit";
            $data['at5_socgrp_error_desc']  =        "at5_socgrp code should be 1,2,3,4";
            $data['at5_cwd_error_desc']     =        "at5_cwd should be 1,2,3,4,5,6";
            $data['at5_q01_error_desc']     =        "at5_q01 should be 1,2,3,4,X,Z";
            $data['at5_q02_error_desc']     =        "at5_q02 should be 1,2,3,4,X,Z";
            $data['at5_q03_error_desc']     =        "at5_q03 should be 1,2,3,4,X,Z";
            $data['at5_q04_error_desc']     =        "at5_q04 should be 1,2,3,4,X,Z";
            $data['at5_q05_error_desc']     =        "at5_q05 should be 1,2,3,4,X,Z";
            $data['at5_q06_error_desc']     =        "at5_q06 should be 1,2,3,4,X,Z";
            $data['at5_q07_error_desc']     =        "at5_q07 should be 1,2,3,4,X,Z";
            $data['at5_q08_error_desc']     =        "at5_q08 should be 1,2,3,4,X,Z";
            $data['at5_q09_error_desc']     =        "at5_q09 should be 1,2,3,4,X,Z";
            $data['at5_q10_error_desc']     =        "at5_q10 should be 1,2,3,4,X,Z";
            $data['at5_q11_error_desc']     =        "at5_q11 should be 1,2,3,4,X,Z";
            $data['at5_q12_error_desc']     =        "at5_q12 should be 1,2,3,4,X,Z";
            $data['at5_q13_error_desc']     =        "at5_q13 should be 1,2,3,4,X,Z";
            $data['at5_q14_error_desc']     =        "at5_q14 should be 1,2,3,4,X,Z";
            $data['at5_q15_error_desc']     =        "at5_q15 should be 1,2,3,4,X,Z";
            $data['at5_q16_error_desc']     =        "at5_q16 should be 1,2,3,4,X,Z";
            $data['at5_q17_error_desc']     =        "at5_q17 should be 1,2,3,4,X,Z";
            $data['at5_q18_error_desc']     =        "at5_q18 should be 1,2,3,4,X,Z";
            $data['at5_q19_error_desc']     =        "at5_q19 should be 1,2,3,4,X,Z";
            $data['at5_q20_error_desc']     =        "at5_q20 should be 1,2,3,4,X,Z";
            $data['at5_q21_error_desc']     =        "at5_q21 should be 1,2,3,4,X,Z";
            $data['at5_q22_error_desc']     =        "at5_q22 should be 1,2,3,4,X,Z";
            $data['at5_q23_error_desc']     =        "at5_q23 should be 1,2,3,4,X,Z";
            $data['at5_q24_error_desc']     =        "at5_q24 should be 1,2,3,4,X,Z";
            $data['at5_q25_error_desc']     =        "at5_q25 should be 1,2,3,4,X,Z";
            $data['at5_q26_error_desc']     =        "at5_q26 should be 1,2,3,4,X,Z";
            $data['at5_q27_error_desc']     =        "at5_q27 should be 1,2,3,4,X,Z";
            $data['at5_q28_error_desc']     =        "at5_q28 should be 1,2,3,4,X,Z";
            $data['at5_q29_error_desc']     =        "at5_q29 should be 1,2,3,4,X,Z";
            $data['at5_q30_error_desc']     =        "at5_q30 should be 1,2,3,4,X,Z";
            $data['at5_q31_error_desc']     =        "at5_q31 should be 1,2,3,4,X,Z";
            $data['at5_q32_error_desc']     =        "at5_q32 should be 1,2,3,4,X,Z";
            $data['at5_q33_error_desc']     =        "at5_q33 should be 1,2,3,4,X,Z";
            $data['at5_q34_error_desc']     =        "at5_q34 should be 1,2,3,4,X,Z";
            $data['at5_q35_error_desc']     =        "at5_q35 should be 1,2,3,4,X,Z";
            $data['at5_q36_error_desc']     =        "at5_q36 should be 1,2,3,4,X,Z";
            $data['at5_q37_error_desc']     =        "at5_q37 should be 1,2,3,4,X,Z";
            $data['at5_q38_error_desc']     =        "at5_q38 should be 1,2,3,4,X,Z";
            $data['at5_q39_error_desc']     =        "at5_q39 should be 1,2,3,4,X,Z";
            $data['at5_q40_error_desc']     =        "at5_q40 should be 1,2,3,4,X,Z";
            $data['at5_q41_error_desc']     =        "at5_q41 should be 1,2,3,4,X,Z";
            $data['at5_q42_error_desc']     =        "at5_q42 should be 1,2,3,4,X,Z";
            $data['at5_q43_error_desc']     =        "at5_q43 should be 1,2,3,4,X,Z";
            $data['at5_q44_error_desc']     =        "at5_q44 should be 1,2,3,4,X,Z";
            $data['at5_q45_error_desc']     =        "at5_q45 should be 1,2,3,4,X,Z";
            $data['at5_q46_error_desc']     =        "at5_q46 should be 1,2,3,4,X,Z";
            $data['at5_q47_error_desc']     =        "at5_q47 should be 1,2,3,4,X,Z";
            $data['at5_q48_error_desc']     =        "at5_q48 should be 1,2,3,4,X,Z";
            $data['at5_q49_error_desc']     =        "at5_q49 should be 1,2,3,4,X,Z";
            $data['at5_q50_error_desc']     =        "at5_q50 should be 1,2,3,4,X,Z";
            $data['at5_q51_error_desc']     =        "at5_q51 should be 1,2,3,4,X,Z";
            $data['at5_q52_error_desc']     =        "at5_q52 should be 1,2,3,4,X,Z";
            $data['at5_q53_error_desc']     =        "at5_q53 should be 1,2,3,4,X,Z";
            return new DummyAt5s($data);
        }

       
    }


    function excelrowData($row)
    {
        // dd($row);
        return [
            'sq_scan'   => $row[0],
            'at5_bar'   => $row[1], 
            'at5_udise' => $row[2],
            'at5_set'   => $row[3],
            'at5_grade' => $row[4],
            'at5_sect'  => $row[5], 
            'at5_nasid' => $row[6], 
            'at5_socgrp'=> $row[7],
            'at5_cwd'   => $row[8], 
            'at5_q01'   => $row[9],
            'at5_q02'   => $row[10], 
            'at5_q03'   => $row[11], 
            'at5_q04'   => $row[12], 
            'at5_q05'   => $row[13], 
            'at5_q06'   => $row[14], 
            'at5_q07'   => $row[15], 
            'at5_q08'   => $row[16], 
            'at5_q09'   => $row[17], 
            'at5_q10'   => $row[18],
            'at5_q11'   => $row[19], 
            'at5_q12'   => $row[20], 
            'at5_q13'   => $row[21], 
            'at5_q14'   => $row[22],
            'at5_q15'   => $row[23], 
            'at5_q16'   => $row[24], 
            'at5_q17'   => $row[25],
            'at5_q18'   => $row[26],
            'at5_q19'   => $row[27], 
            'at5_q20'   => $row[28], 
            'at5_q21'   => $row[29],
            'at5_q22'   => $row[30], 
            'at5_q23'   => $row[31],
            'at5_q24'   => $row[32],
            'at5_q25'   => $row[33],
            'at5_q26'   => $row[34],
            'at5_q27'   => $row[35], 
            'at5_q28'   => $row[36], 
            'at5_q29'   => $row[37], 
            'at5_q30'   => $row[38],
            'at5_q31'   => $row[39], 
            'at5_q32'   => $row[40],
            'at5_q33'   => $row[41],
            'at5_q34'   => $row[42], 
            'at5_q35'   => $row[43], 
            'at5_q36'   => $row[44],
            'at5_q37'   => $row[45], 
            'at5_q38'   => $row[46],
            'at5_q39'   => $row[47],
            'at5_q40'   => $row[48], 
            'at5_q41'   => $row[49], 
            'at5_q42'   => $row[50],
            'at5_q43'   => $row[51], 
            'at5_q44'   => $row[52], 
            'at5_q45'   => $row[53],
            'at5_q46'   => $row[54],
            'at5_q47'   => $row[55],
            'at5_q48'   => $row[56],
            'at5_q49'   => $row[57],
            'at5_q50'   => $row[58],
            'at5_q51'   => $row[59],
            'at5_q52'   => $row[60],
            'at5_q53'   => $row[61]
        ];
    }


    public function get_attemp_question_count($pq_bar,$set_number,$quest_number,$user_attemp_question)
    {
       
        if($quest_number>9)
        {
           
            $var = 'at5_q'.$quest_number;
        }
        else
        {
            $var = 'at5_q0'.$quest_number;
        }
        // where('at5_bar',(int)$pq_bar)->
            $result = At5_key::where('at5_set',(int)$set_number)
                    ->where($var,$user_attemp_question)->count();
            if($result==1)
            {
                return true;
            }
            else
            {
                return false;
            }
          
    }
}
