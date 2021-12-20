<?php

namespace App\Imports;

use App\Models\At3s;
use App\Models\DummyAt3s;
use App\Models\At3_key;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportAt3s implements ToModel ,WithStartRow
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
        $at3_set = env('at3_set');
        $quest_numbers = env('quest_numbers');
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
                $at3_udise_val = str_pad((integer)$row[2], 11, '0', STR_PAD_LEFT);
                $data['state_id']=substr($at3_udise_val, 0, 2);
                $data['district_id']=substr($at3_udise_val, 2, 2);
            }

           if($key>8 && $key<48)
           {
          
            $total_number_question = $total_number_question + 1;
            if((strlen((integer)$row[1])==9) && (strlen((integer)$row[2])==10 || strlen((integer)$row[2])==11) && in_array($row[3] ,[31,32,33,34]) && in_array($row[$key],[1,2,3,4,'X','Z']) && in_array($row[7],[1,2,3,4]) && in_array($row[8],[1,2,3,4,5,6]))
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
            return new At3s($data);
        }
        else
        {
                        
            $data['at3_bar_error_desc']     =        "at3 Bar code should be 9 digits";
            $data['at3_udise_error_desc']   =        "at3 Udise code should be 11 digits";
            $data['at3_set_error_desc']     =        "at3_set code should be 31,32,33,34";
            $data['at3_grade_error_desc']   =        "at3_grade code should be one digit";
            $data['at3_socgrp_error_desc']  =        "at3_cwd code should be 1,2,3,4";
            $data['at3_cwd_error_desc']     =        "at3_cwd should be 1,2,3,4,5,6";
            $data['at3_q01_error_desc']     =        "at3_q01 should be 1,2,3,4,X,Z";
            $data['at3_q02_error_desc']     =        "at3_q02 should be 1,2,3,4,X,Z";
            $data['at3_q03_error_desc']     =        "at3_q03 should be 1,2,3,4,X,Z";
            $data['at3_q04_error_desc']     =        "at3_q04 should be 1,2,3,4,X,Z";
            $data['at3_q05_error_desc']     =        "at3_q05 should be 1,2,3,4,X,Z";
            $data['at3_q06_error_desc']     =        "at3_q06 should be 1,2,3,4,X,Z";
            $data['at3_q07_error_desc']     =        "at3_q07 should be 1,2,3,4,X,Z";
            $data['at3_q08_error_desc']     =        "at3_q08 should be 1,2,3,4,X,Z";
            $data['at3_q09_error_desc']     =        "at3_q09 should be 1,2,3,4,X,Z";
            $data['at3_q10_error_desc']     =        "at3_q10 should be 1,2,3,4,X,Z";
            $data['at3_q11_error_desc']     =        "at3_q11 should be 1,2,3,4,X,Z";
            $data['at3_q12_error_desc']     =        "at3_q12 should be 1,2,3,4,X,Z";
            $data['at3_q13_error_desc']     =        "at3_q13 should be 1,2,3,4,X,Z";
            $data['at3_q14_error_desc']     =        "at3_q14 should be 1,2,3,4,X,Z";
            $data['at3_q15_error_desc']     =        "at3_q15 should be 1,2,3,4,X,Z";
            $data['at3_q16_error_desc']     =        "at3_q16 should be 1,2,3,4,X,Z";
            $data['at3_q17_error_desc']     =        "at3_q17 should be 1,2,3,4,X,Z";
            $data['at3_q18_error_desc']     =        "at3_q18 should be 1,2,3,4,X,Z";
            $data['at3_q19_error_desc']     =        "at3_q19 should be 1,2,3,4,X,Z";
            $data['at3_q20_error_desc']     =        "at3_q20 should be 1,2,3,4,X,Z";
            $data['at3_q21_error_desc']     =        "at3_q21 should be 1,2,3,4,X,Z";
            $data['at3_q22_error_desc']     =        "at3_q22 should be 1,2,3,4,X,Z";
            $data['at3_q23_error_desc']     =        "at3_q23 should be 1,2,3,4,X,Z";
            $data['at3_q24_error_desc']     =        "at3_q24 should be 1,2,3,4,X,Z";
            $data['at3_q25_error_desc']     =        "at3_q25 should be 1,2,3,4,X,Z";
            $data['at3_q26_error_desc']     =        "at3_q26 should be 1,2,3,4,X,Z";
            $data['at3_q27_error_desc']     =        "at3_q27 should be 1,2,3,4,X,Z";
            $data['at3_q28_error_desc']     =        "at3_q28 should be 1,2,3,4,X,Z";
            $data['at3_q29_error_desc']     =        "at3_q29 should be 1,2,3,4,X,Z";
            $data['at3_q30_error_desc']     =        "at3_q30 should be 1,2,3,4,X,Z";
            $data['at3_q31_error_desc']     =        "at3_q31 should be 1,2,3,4,X,Z";
            $data['at3_q32_error_desc']     =        "at3_q32 should be 1,2,3,4,X,Z";
            $data['at3_q33_error_desc']     =        "at3_q33 should be 1,2,3,4,X,Z";
            $data['at3_q34_error_desc']     =        "at3_q34 should be 1,2,3,4,X,Z";
            $data['at3_q35_error_desc']     =        "at3_q35 should be 1,2,3,4,X,Z";
            $data['at3_q36_error_desc']     =        "at3_q36 should be 1,2,3,4,X,Z";
            $data['at3_q37_error_desc']     =        "at3_q37 should be 1,2,3,4,X,Z";
            $data['at3_q38_error_desc']     =        "at3_q38 should be 1,2,3,4,X,Z";
            $data['at3_q39_error_desc']     =        "at3_q39 should be 1,2,3,4,X,Z";
            $data['at3_q40_error_desc']     =        "at3_q40 should be 1,2,3,4,X,Z";
            $data['at3_q41_error_desc']     =        "at3_q41 should be 1,2,3,4,X,Z";
            $data['at3_q42_error_desc']     =        "at3_q42 should be 1,2,3,4,X,Z";
            $data['at3_q43_error_desc']     =        "at3_q43 should be 1,2,3,4,X,Z";
            $data['at3_q44_error_desc']     =        "at3_q44 should be 1,2,3,4,X,Z";
            $data['at3_q45_error_desc']     =        "at3_q45 should be 1,2,3,4,X,Z";
            $data['at3_q46_error_desc']     =        "at3_q46 should be 1,2,3,4,X,Z";
            $data['at3_q47_error_desc']     =        "at3_q47 should be 1,2,3,4,X,Z";
            return new DummyAt3s($data);
        }
    }


    function excelrowData($row)
    {
        return [
            'sq_scan'   => $row[0],
            'at3_bar'   => $row[1], 
            'at3_udise' => $row[2],
            'at3_set'   => $row[3],
            'at3_grade' => $row[4],
            'at3_sect'  => $row[5], 
            'at3_nasid' => $row[6], 
            'at3_socgrp'=> $row[7],
            'at3_cwd'   => $row[8], 
            'at3_q01'   => $row[9],
            'at3_q02'   => $row[10], 
            'at3_q03'   => $row[11], 
            'at3_q04'   => $row[12], 
            'at3_q05'   => $row[13], 
            'at3_q06'   => $row[14], 
            'at3_q07'   => $row[15], 
            'at3_q08'   => $row[16], 
            'at3_q09'   => $row[17], 
            'at3_q10'   => $row[18],
            'at3_q11'   => $row[19], 
            'at3_q12'   => $row[20], 
            'at3_q13'   => $row[21], 
            'at3_q14'   => $row[22],
            'at3_q15'   => $row[23], 
            'at3_q16'   => $row[24], 
            'at3_q17'   => $row[25],
            'at3_q18'   => $row[26],
            'at3_q19'   => $row[27], 
            'at3_q20'   => $row[28], 
            'at3_q21'   => $row[29],
            'at3_q22'   => $row[30], 
            'at3_q23'   => $row[31],
            'at3_q24'   => $row[32],
            'at3_q25'   => $row[33],
            'at3_q26'   => $row[34],
            'at3_q27'   => $row[35], 
            'at3_q28'   => $row[36], 
            'at3_q29'   => $row[37], 
            'at3_q30'   => $row[38],
            'at3_q31'   => $row[39], 
            'at3_q32'   => $row[40],
            'at3_q33'   => $row[41],
            'at3_q34'   => $row[42], 
            'at3_q35'   => $row[43], 
            'at3_q36'   => $row[44],
            'at3_q37'   => $row[45], 
            'at3_q38'   => $row[46],
            'at3_q39'   => $row[47],
            'at3_q40'   => $row[48], 
            'at3_q41'   => $row[49], 
            'at3_q42'   => $row[50],
            'at3_q43'   => $row[51], 
            'at3_q44'   => $row[52], 
            'at3_q45'   => $row[53],
            'at3_q46'   => $row[54],
            'at3_q47'   => $row[55]
        ];
    }

    public function get_attemp_question_count($pq_bar,$set_number,$quest_number,$user_attemp_question)
    {
       
        if($quest_number>9)
        {
           
            $var = 'at3_q'.$quest_number;
        }
        else
        {
            $var = 'at3_q0'.$quest_number;
        }
           
            $result = At3_key::where('at3_bar',(int)$pq_bar)->where('at3_set',(int)$set_number)
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
