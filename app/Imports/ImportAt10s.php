<?php

namespace App\Imports;

use App\Models\At10s;
use App\Models\DummyAt10s;
use App\Models\At10s_key;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class ImportAt10s implements ToModel,WithStartRow
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
        ini_set('max_execution_time', '500');
        // $data =  $this->excelrowData($row);
        // // $row[1] ...Bar Code Validation  
        // // $row[2] ...UDISE School code Validation  
        $data =  $this->excelrowData($row);
        
        $right_counter = 0;
        $total_number_question = 0;
        $i=0;
        foreach ($data as $key => $value) {
            // Get State Code and District Code
            if(strlen((integer)$data['at1_udise'])==11)
            {
                $data['state_id']=substr((integer)$data['at1_udise'], 0, 2);
                $data['district_id']=substr((integer)$data['at1_udise'], 2, 2);
            }
            elseif(strlen((integer)$data['at1_udise'])==10)
            {
                $at1_udise_val = str_pad((integer)$data['at1_udise'], 11, '0', STR_PAD_LEFT);
                $data['state_id']=substr($at1_udise_val, 0, 2);
                $data['district_id']=substr($at1_udise_val, 2, 2);
            }

            $data['at1_parent_bar']=substr_replace((string)$data['at1_bar'],'1',1,1);

            $keyDetails = array("sq_scan", "at1_bar", "at1_udise", "at1_set","at1_grade","at1_sect","at1_nasid","at1_socgrp","at1_cwd");
           if(!in_array($key, $keyDetails))
           {
                $total_number_question = $total_number_question + 1;
                if((strlen((integer)$data['at1_bar'])==9) && (strlen((integer)$data['at1_udise'])==10) && in_array($data['at1_set'] ,[101,102,103]) && in_array($data[$key],[1,2,3,4,'X','Z']) && in_array($data['at1_socgrp'],[1,2,3,4]) && in_array($data['at1_cwd'],[1,2,3,4,5,6]) && in_array($data['at1_nasid'],[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]))
                {
                    $check_result = $this->get_attemp_question_count($data['at1_bar'],$data['at1_set'],$key,$data[$key]);
                    if($check_result==true)
                    {
                        $right_counter = $right_counter+1;
                    }
                    $check = 1; 
                }
                else
                {
                    $check_result = $this->get_attemp_question_count($data['at1_bar'],$data['at1_set'],$key,$data[$key]);
                    if($check_result==true)
                    {
                        $right_counter = $right_counter+1;
                    }
                    $check = 2; 
                }
           }
        $i++;
        }
        //$check = 1;
        if($check==1)
        {
            $data['right_count'] = $right_counter;
            $data['percentage'] =  ($right_counter/$total_number_question)*100;
            return new At10s($data);
        }
        else
        {
            $data['at1_bar_error_desc']     =        "at1 Bar code should be 9 digits";
            $data['at1_udise_error_desc']   =        "at1 Udise code should be 11 digits";
            $data['at1_set_error_desc']     =        "at1_set code should be 81,82,83,84";
            $data['at1_grade_error_desc']   =        "at1_grade code should be one digit";
            $data['at1_socgrp_error_desc']  =        "at1_socgrp code should be 1,2,3,4";
            $data['at1_nasid_error_desc']  =         "at1_nasid between  1 to 30";
            $data['at1_cwd_error_desc']     =        "at1_cwd should be 1,2,3,4,5,6";
            $data['at1_q01_error_desc']     =        "at1_q01 should be 1,2,3,4,X,Z";
            $data['at1_q02_error_desc']     =        "at1_q02 should be 1,2,3,4,X,Z";
            $data['at1_q03_error_desc']     =        "at1_q03 should be 1,2,3,4,X,Z";
            $data['at1_q04_error_desc']     =        "at1_q04 should be 1,2,3,4,X,Z";
            $data['at1_q05_error_desc']     =        "at1_q05 should be 1,2,3,4,X,Z";
            $data['at1_q06_error_desc']     =        "at1_q06 should be 1,2,3,4,X,Z";
            $data['at1_q07_error_desc']     =        "at1_q07 should be 1,2,3,4,X,Z";
            $data['at1_q08_error_desc']     =        "at1_q08 should be 1,2,3,4,X,Z";
            $data['at1_q09_error_desc']     =        "at1_q09 should be 1,2,3,4,X,Z";
            $data['at1_q10_error_desc']     =        "at1_q10 should be 1,2,3,4,X,Z";
            $data['at1_q11_error_desc']     =        "at1_q11 should be 1,2,3,4,X,Z";
            $data['at1_q12_error_desc']     =        "at1_q12 should be 1,2,3,4,X,Z";
            $data['at1_q13_error_desc']     =        "at1_q13 should be 1,2,3,4,X,Z";
            $data['at1_q14_error_desc']     =        "at1_q14 should be 1,2,3,4,X,Z";
            $data['at1_q15_error_desc']     =        "at1_q15 should be 1,2,3,4,X,Z";
            $data['at1_q16_error_desc']     =        "at1_q16 should be 1,2,3,4,X,Z";
            $data['at1_q17_error_desc']     =        "at1_q17 should be 1,2,3,4,X,Z";
            $data['at1_q18_error_desc']     =        "at1_q18 should be 1,2,3,4,X,Z";
            $data['at1_q19_error_desc']     =        "at1_q19 should be 1,2,3,4,X,Z";
            $data['at1_q20_error_desc']     =        "at1_q20 should be 1,2,3,4,X,Z";
            $data['at1_q21_error_desc']     =        "at1_q21 should be 1,2,3,4,X,Z";
            $data['at1_q22_error_desc']     =        "at1_q22 should be 1,2,3,4,X,Z";
            $data['at1_q23_error_desc']     =        "at1_q23 should be 1,2,3,4,X,Z";
            $data['at1_q24_error_desc']     =        "at1_q24 should be 1,2,3,4,X,Z";
            $data['at1_q25_error_desc']     =        "at1_q25 should be 1,2,3,4,X,Z";
            $data['at1_q26_error_desc']     =        "at1_q26 should be 1,2,3,4,X,Z";
            $data['at1_q27_error_desc']     =        "at1_q27 should be 1,2,3,4,X,Z";
            $data['at1_q28_error_desc']     =        "at1_q28 should be 1,2,3,4,X,Z";
            $data['at1_q29_error_desc']     =        "at1_q29 should be 1,2,3,4,X,Z";
            $data['at1_q30_error_desc']     =        "at1_q30 should be 1,2,3,4,X,Z";
            $data['at1_q31_error_desc']     =        "at1_q31 should be 1,2,3,4,X,Z";
            $data['at1_q32_error_desc']     =        "at1_q32 should be 1,2,3,4,X,Z";
            $data['at1_q33_error_desc']     =        "at1_q33 should be 1,2,3,4,X,Z";
            $data['at1_q34_error_desc']     =        "at1_q34 should be 1,2,3,4,X,Z";
            $data['at1_q35_error_desc']     =        "at1_q35 should be 1,2,3,4,X,Z";
            $data['at1_q36_error_desc']     =        "at1_q36 should be 1,2,3,4,X,Z";
            $data['at1_q37_error_desc']     =        "at1_q37 should be 1,2,3,4,X,Z";
            $data['at1_q38_error_desc']     =        "at1_q38 should be 1,2,3,4,X,Z";
            $data['at1_q39_error_desc']     =        "at1_q39 should be 1,2,3,4,X,Z";
            $data['at1_q40_error_desc']     =        "at1_q40 should be 1,2,3,4,X,Z";
            $data['at1_q41_error_desc']     =        "at1_q41 should be 1,2,3,4,X,Z";
            $data['at1_q42_error_desc']     =        "at1_q42 should be 1,2,3,4,X,Z";
            $data['at1_q43_error_desc']     =        "at1_q43 should be 1,2,3,4,X,Z";
            $data['at1_q44_error_desc']     =        "at1_q44 should be 1,2,3,4,X,Z";
            $data['at1_q45_error_desc']     =        "at1_q45 should be 1,2,3,4,X,Z";
            $data['at1_q46_error_desc']     =        "at1_q46 should be 1,2,3,4,X,Z";
            $data['at1_q47_error_desc']     =        "at1_q47 should be 1,2,3,4,X,Z";
            $data['at1_q48_error_desc']     =        "at1_q48 should be 1,2,3,4,X,Z";
            $data['at1_q49_error_desc']     =        "at1_q49 should be 1,2,3,4,X,Z";
            $data['at1_q50_error_desc']     =        "at1_q50 should be 1,2,3,4,X,Z";
            $data['at1_q51_error_desc']     =        "at1_q51 should be 1,2,3,4,X,Z";
            $data['at1_q52_error_desc']     =        "at1_q52 should be 1,2,3,4,X,Z";
            $data['at1_q53_error_desc']     =        "at1_q53 should be 1,2,3,4,X,Z";
            $data['at1_q54_error_desc']     =        "at1_q54 should be 1,2,3,4,X,Z";
            $data['at1_q55_error_desc']     =        "at1_q55 should be 1,2,3,4,X,Z";
            $data['at1_q56_error_desc']     =        "at1_q56 should be 1,2,3,4,X,Z";
            $data['at1_q57_error_desc']     =        "at1_q57 should be 1,2,3,4,X,Z";
            $data['at1_q58_error_desc']     =        "at1_q58 should be 1,2,3,4,X,Z";
            $data['at1_q59_error_desc']     =        "at1_q59 should be 1,2,3,4,X,Z";
            $data['at1_q60_error_desc']     =        "at1_q60 should be 1,2,3,4,X,Z";
            $data['at1_q61_error_desc']     =        "at1_q61 should be 1,2,3,4,X,Z";
            $data['at1_q62_error_desc']     =        "at1_q62 should be 1,2,3,4,X,Z";
            $data['at1_q63_error_desc']     =        "at1_q63 should be 1,2,3,4,X,Z";
            $data['at1_q64_error_desc']     =        "at1_q64 should be 1,2,3,4,X,Z";
            $data['at1_q65_error_desc']     =        "at1_q65 should be 1,2,3,4,X,Z";
            $data['at1_q66_error_desc']     =        "at1_q66 should be 1,2,3,4,X,Z";
            $data['at1_q67_error_desc']     =        "at1_q67 should be 1,2,3,4,X,Z";
            $data['at1_q68_error_desc']     =        "at1_q68 should be 1,2,3,4,X,Z";
            $data['at1_q69_error_desc']     =        "at1_q69 should be 1,2,3,4,X,Z";
            $data['at1_q70_error_desc']     =        "at1_q70 should be 1,2,3,4,X,Z";
            return new DummyAt10s($data);
        }
    }

    function excelrowData($row)
    {
        return [
            'sq_scan'   => $row[0],
            'at1_bar'   => $row[1], 
            'at1_udise' => $row[2]??'',
            'at1_set'   => $row[3]??'',
            'at1_grade' => $row[4]??'',
            'at1_sect'  => $row[5]??'', 
            'at1_nasid' => $row[6]??'', 
            'at1_socgrp'=> $row[7]??'',
            'at1_cwd'   => $row[8]??'', 
            'at1_q01'   => $row[9]??'',
            'at1_q02'   => $row[10]??'', 
            'at1_q03'   => $row[11]??'', 
            'at1_q04'   => $row[12]??'', 
            'at1_q05'   => $row[13]??'', 
            'at1_q06'   => $row[14]??'', 
            'at1_q07'   => $row[15]??'', 
            'at1_q08'   => $row[16]??'', 
            'at1_q09'   => $row[17]??'', 
            'at1_q10'   => $row[18]??'',
            'at1_q11'   => $row[19]??'', 
            'at1_q12'   => $row[20]??'', 
            'at1_q13'   => $row[21]??'', 
            'at1_q14'   => $row[22]??'',
            'at1_q15'   => $row[23]??'', 
            'at1_q16'   => $row[24]??'', 
            'at1_q17'   => $row[25]??'',
            'at1_q18'   => $row[26]??'',
            'at1_q19'   => $row[27]??'', 
            'at1_q20'   => $row[28]??'', 
            'at1_q21'   => $row[29]??'',
            'at1_q22'   => $row[30]??'', 
            'at1_q23'   => $row[31]??'',
            'at1_q24'   => $row[32]??'',
            'at1_q25'   => $row[33]??'',
            'at1_q26'   => $row[34]??'',
            'at1_q27'   => $row[35]??'', 
            'at1_q28'   => $row[36]??'', 
            'at1_q29'   => $row[37]??'', 
            'at1_q30'   => $row[38]??'',
            'at1_q31'   => $row[39]??'', 
            'at1_q32'   => $row[40]??'',
            'at1_q33'   => $row[41]??'',
            'at1_q34'   => $row[42]??'', 
            'at1_q35'   => $row[43]??'', 
            'at1_q36'   => $row[44]??'',
            'at1_q37'   => $row[45]??'', 
            'at1_q38'   => $row[46]??'',
            'at1_q39'   => $row[47]??'',
            'at1_q40'   => $row[48]??'', 
            'at1_q41'   => $row[49]??'', 
            'at1_q42'   => $row[50]??'',
            'at1_q43'   => $row[51]??'', 
            'at1_q44'   => $row[52]??'', 
            'at1_q45'   => $row[53]??'',
            'at1_q46'   => $row[54]??'',
            'at1_q47'   => $row[55]??'',
            'at1_q48'   => $row[56]??'',
            'at1_q49'   => $row[57]??'',
            'at1_q50'   => $row[58]??'',
            'at1_q51'   => $row[59]??'',
            'at1_q52'   => $row[60]??'',
            'at1_q53'   => $row[61]??'',
            'at1_q54'   => $row[62]??'',
            'at1_q55'   => $row[63]??'',
            'at1_q56'   => $row[64]??'',
            'at1_q57'   => $row[65]??'',
            'at1_q58'   => $row[66]??'',
            'at1_q59'   => $row[67]??'',
            'at1_q60'   => $row[68]??'',
            'at1_q61'   => $row[69]??'',
            'at1_q62'   => $row[70]??'',
            'at1_q63'   => $row[71]??'',
            'at1_q64'   => $row[72]??'',
            'at1_q65'   => $row[73]??'',
            'at1_q66'   => $row[74]??'',
            'at1_q67'   => $row[75]??'',
            'at1_q68'   => $row[76]??'',
            'at1_q69'   => $row[77]??'',
            'at1_q70'   => $row[78]??''
        ];
    }
    public function get_attemp_question_count($pq_bar,$set_number,$quest_number,$user_attemp_question)
    {   
        // where('at1_bar',(int)$pq_bar)->
        $result = At10s_key::where('at1_set',(int)$set_number)
                ->where($quest_number,$user_attemp_question)->first();
        if($result)
        {
            return true;
        }
    }

}
