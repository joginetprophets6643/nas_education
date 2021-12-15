<?php

namespace App\Imports;

use App\Models\Upload;
use App\Models\DummyUpload;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
class UpoadImport implements ToModel,WithStartRow
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
        if((strlen((integer)$row[1])==8) && (strlen((integer)$row[2])==10))
        {
             return new Upload([
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
   
        ]);
      
        }
        else
        {
            return new DummyUpload([
              
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
       
            ]);
        }
       
     
    }
}
