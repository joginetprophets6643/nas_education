<?php

namespace App\Imports;

use App\Models\At8s;
use App\Models\DummyAt8s;
use App\Models\At8s_key;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportAt8s implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        ini_set('max_execution_time', '500');
        $data =  $this->excelrowData($row);

        $right_counter = 0;
        $total_number_question = 0;
        $i=0;
        $check = 1; 
        foreach ($data as $key => $value) {
            // Get State Code and District Code
            if(strlen((integer)$data['at8_udise'])==11)
            {
                $data['state_id']=substr((integer)$data['at8_udise'], 0, 2);
                $data['district_id']=substr((integer)$data['at8_udise'], 2, 2);
            }
            elseif(strlen((integer)$data['at8_udise'])==10)
            {
                $at8_udise_val = str_pad((integer)$data['at8_udise'], 11, '0', STR_PAD_LEFT);
                $data['state_id']=substr($at8_udise_val, 0, 2);
                $data['district_id']=substr($at8_udise_val, 2, 2);
            }

            $keyDetails = array("sq_scan", "at8_bar", "at8_udise", "at8_set","at8_grade","at8_sect","at8_nasid","at8_socgrp","at8_cwd");
            if(!in_array($key, $keyDetails))
            {
                $total_number_question = $total_number_question + 1;
                if((strlen((integer)$data['at8_bar'])==9) && (strlen((integer)$data['at8_udise'])==10) && in_array($data['at8_set'] ,[81,82,83,84]) && in_array($data[$key],[1,2,3,4,'X','Z']) && in_array($data['at8_socgrp'],[1,2,3,4]) && in_array($data['at8_cwd'],[1,2,3,4,5,6]) && in_array($data['at8_nasid'],[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]))
                {
                    $check_result = $this->get_attemp_question_count($data['at8_bar'],$data['at8_set'],$key,$data[$key]);
                    if($check_result==true)
                    {
                        $right_counter = $right_counter+1;
                    }
                    $check = 1; 
                }
                else
                {
                    $check_result = $this->get_attemp_question_count($data['at8_bar'],$data['at8_set'],$key,$data[$key]);
                    if($check_result==true)
                    {
                        $right_counter = $right_counter+1;
                    }
                    $check = 2; 
                }
            }
        $i++;
        }
        if($check==1)
        {
            $data['right_count'] = $right_counter;
            $data['percentage'] =  ($right_counter/$total_number_question)*100;
            return new At8s($data);
        }
        else
        {
            $data['at8_bar_error_desc']     =        "at8 Bar code should be 9 digits";
            $data['at8_udise_error_desc']   =        "at8 Udise code should be 11 digits";
            $data['at8_set_error_desc']     =        "at8_set code should be 81,82,83,84";
            $data['at8_grade_error_desc']   =        "at8_grade code should be one digit";
            $data['at8_socgrp_error_desc']  =        "at8_socgrp code should be 1,2,3,4";
            $data['at8_nasid_error_desc']  =         "at8_nasid between  1 to 30";
            $data['at8_cwd_error_desc']     =        "at8_cwd should be 1,2,3,4,5,6";
            $data['at8_q01_error_desc']     =        "at8_q01 should be 1,2,3,4,X,Z";
            $data['at8_q02_error_desc']     =        "at8_q02 should be 1,2,3,4,X,Z";
            $data['at8_q03_error_desc']     =        "at8_q03 should be 1,2,3,4,X,Z";
            $data['at8_q04_error_desc']     =        "at8_q04 should be 1,2,3,4,X,Z";
            $data['at8_q05_error_desc']     =        "at8_q05 should be 1,2,3,4,X,Z";
            $data['at8_q06_error_desc']     =        "at8_q06 should be 1,2,3,4,X,Z";
            $data['at8_q07_error_desc']     =        "at8_q07 should be 1,2,3,4,X,Z";
            $data['at8_q08_error_desc']     =        "at8_q08 should be 1,2,3,4,X,Z";
            $data['at8_q09_error_desc']     =        "at8_q09 should be 1,2,3,4,X,Z";
            $data['at8_q10_error_desc']     =        "at8_q10 should be 1,2,3,4,X,Z";
            $data['at8_q11_error_desc']     =        "at8_q11 should be 1,2,3,4,X,Z";
            $data['at8_q12_error_desc']     =        "at8_q12 should be 1,2,3,4,X,Z";
            $data['at8_q13_error_desc']     =        "at8_q13 should be 1,2,3,4,X,Z";
            $data['at8_q14_error_desc']     =        "at8_q14 should be 1,2,3,4,X,Z";
            $data['at8_q15_error_desc']     =        "at8_q15 should be 1,2,3,4,X,Z";
            $data['at8_q16_error_desc']     =        "at8_q16 should be 1,2,3,4,X,Z";
            $data['at8_q17_error_desc']     =        "at8_q17 should be 1,2,3,4,X,Z";
            $data['at8_q18_error_desc']     =        "at8_q18 should be 1,2,3,4,X,Z";
            $data['at8_q19_error_desc']     =        "at8_q19 should be 1,2,3,4,X,Z";
            $data['at8_q20_error_desc']     =        "at8_q20 should be 1,2,3,4,X,Z";
            $data['at8_q21_error_desc']     =        "at8_q21 should be 1,2,3,4,X,Z";
            $data['at8_q22_error_desc']     =        "at8_q22 should be 1,2,3,4,X,Z";
            $data['at8_q23_error_desc']     =        "at8_q23 should be 1,2,3,4,X,Z";
            $data['at8_q24_error_desc']     =        "at8_q24 should be 1,2,3,4,X,Z";
            $data['at8_q25_error_desc']     =        "at8_q25 should be 1,2,3,4,X,Z";
            $data['at8_q26_error_desc']     =        "at8_q26 should be 1,2,3,4,X,Z";
            $data['at8_q27_error_desc']     =        "at8_q27 should be 1,2,3,4,X,Z";
            $data['at8_q28_error_desc']     =        "at8_q28 should be 1,2,3,4,X,Z";
            $data['at8_q29_error_desc']     =        "at8_q29 should be 1,2,3,4,X,Z";
            $data['at8_q30_error_desc']     =        "at8_q30 should be 1,2,3,4,X,Z";
            $data['at8_q31_error_desc']     =        "at8_q31 should be 1,2,3,4,X,Z";
            $data['at8_q32_error_desc']     =        "at8_q32 should be 1,2,3,4,X,Z";
            $data['at8_q33_error_desc']     =        "at8_q33 should be 1,2,3,4,X,Z";
            $data['at8_q34_error_desc']     =        "at8_q34 should be 1,2,3,4,X,Z";
            $data['at8_q35_error_desc']     =        "at8_q35 should be 1,2,3,4,X,Z";
            $data['at8_q36_error_desc']     =        "at8_q36 should be 1,2,3,4,X,Z";
            $data['at8_q37_error_desc']     =        "at8_q37 should be 1,2,3,4,X,Z";
            $data['at8_q38_error_desc']     =        "at8_q38 should be 1,2,3,4,X,Z";
            $data['at8_q39_error_desc']     =        "at8_q39 should be 1,2,3,4,X,Z";
            $data['at8_q40_error_desc']     =        "at8_q40 should be 1,2,3,4,X,Z";
            $data['at8_q41_error_desc']     =        "at8_q41 should be 1,2,3,4,X,Z";
            $data['at8_q42_error_desc']     =        "at8_q42 should be 1,2,3,4,X,Z";
            $data['at8_q43_error_desc']     =        "at8_q43 should be 1,2,3,4,X,Z";
            $data['at8_q44_error_desc']     =        "at8_q44 should be 1,2,3,4,X,Z";
            $data['at8_q45_error_desc']     =        "at8_q45 should be 1,2,3,4,X,Z";
            $data['at8_q46_error_desc']     =        "at8_q46 should be 1,2,3,4,X,Z";
            $data['at8_q47_error_desc']     =        "at8_q47 should be 1,2,3,4,X,Z";
            $data['at8_q48_error_desc']     =        "at8_q48 should be 1,2,3,4,X,Z";
            $data['at8_q49_error_desc']     =        "at8_q49 should be 1,2,3,4,X,Z";
            $data['at8_q50_error_desc']     =        "at8_q50 should be 1,2,3,4,X,Z";
            $data['at8_q51_error_desc']     =        "at8_q51 should be 1,2,3,4,X,Z";
            $data['at8_q52_error_desc']     =        "at8_q52 should be 1,2,3,4,X,Z";
            $data['at8_q53_error_desc']     =        "at8_q53 should be 1,2,3,4,X,Z";
            $data['at8_q54_error_desc']     =        "at8_q54 should be 1,2,3,4,X,Z";
            $data['at8_q55_error_desc']     =        "at8_q55 should be 1,2,3,4,X,Z";
            $data['at8_q56_error_desc']     =        "at8_q56 should be 1,2,3,4,X,Z";
            $data['at8_q57_error_desc']     =        "at8_q57 should be 1,2,3,4,X,Z";
            $data['at8_q58_error_desc']     =        "at8_q58 should be 1,2,3,4,X,Z";
            $data['at8_q59_error_desc']     =        "at8_q59 should be 1,2,3,4,X,Z";
            $data['at8_q60_error_desc']     =        "at8_q60 should be 1,2,3,4,X,Z";
            return new DummyAt8s($data);
        }
    }
    function excelrowData($row)
    {
        return [
            'sq_scan'   => $row[0],
            'at8_bar'   => $row[1], 
            'at8_udise' => $row[2],
            'at8_set'   => $row[3],
            'at8_grade' => $row[4],
            'at8_sect'  => $row[5], 
            'at8_nasid' => $row[6], 
            'at8_socgrp'=> $row[7],
            'at8_cwd'   => $row[8], 
            'at8_q01'   => $row[9],
            'at8_q02'   => $row[10], 
            'at8_q03'   => $row[11], 
            'at8_q04'   => $row[12], 
            'at8_q05'   => $row[13], 
            'at8_q06'   => $row[14], 
            'at8_q07'   => $row[15], 
            'at8_q08'   => $row[16], 
            'at8_q09'   => $row[17], 
            'at8_q10'   => $row[18],
            'at8_q11'   => $row[19], 
            'at8_q12'   => $row[20], 
            'at8_q13'   => $row[21], 
            'at8_q14'   => $row[22],
            'at8_q15'   => $row[23], 
            'at8_q16'   => $row[24], 
            'at8_q17'   => $row[25],
            'at8_q18'   => $row[26],
            'at8_q19'   => $row[27], 
            'at8_q20'   => $row[28], 
            'at8_q21'   => $row[29],
            'at8_q22'   => $row[30], 
            'at8_q23'   => $row[31],
            'at8_q24'   => $row[32],
            'at8_q25'   => $row[33],
            'at8_q26'   => $row[34],
            'at8_q27'   => $row[35], 
            'at8_q28'   => $row[36], 
            'at8_q29'   => $row[37], 
            'at8_q30'   => $row[38],
            'at8_q31'   => $row[39], 
            'at8_q32'   => $row[40],
            'at8_q33'   => $row[41],
            'at8_q34'   => $row[42], 
            'at8_q35'   => $row[43], 
            'at8_q36'   => $row[44],
            'at8_q37'   => $row[45], 
            'at8_q38'   => $row[46],
            'at8_q39'   => $row[47],
            'at8_q40'   => $row[48], 
            'at8_q41'   => $row[49], 
            'at8_q42'   => $row[50],
            'at8_q43'   => $row[51], 
            'at8_q44'   => $row[52], 
            'at8_q45'   => $row[53],
            'at8_q46'   => $row[54],
            'at8_q47'   => $row[55],
            'at8_q48'   => $row[56],
            'at8_q49'   => $row[57],
            'at8_q50'   => $row[58],
            'at8_q51'   => $row[59],
            'at8_q52'   => $row[60],
            'at8_q53'   => $row[61],
            'at8_q54'   => $row[62],
            'at8_q55'   => $row[63],
            'at8_q56'   => $row[64],
            'at8_q57'   => $row[65],
            'at8_q58'   => $row[66],
            'at8_q59'   => $row[67],
            'at8_q60'   => $row[68]
        ];
    }
    public function get_attemp_question_count($pq_bar,$set_number,$quest_number,$user_attemp_question)
    {     
        $result = At8s_key::where('at8_bar',(int)$pq_bar)->where('at8_set',(int)$set_number)
                ->where($quest_number,$user_attemp_question)->first();
        // echo (($result));
        if($result)
        {
            return true;
        }
    }

}
