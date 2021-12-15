<?php

namespace App\Imports;

use App\Models\At10s;
use App\Models\DummyAt10s;
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
        $data =  $this->excelrowData($row);
        // $row[1] ...Bar Code Validation  
        // $row[2] ...UDISE School code Validation  
        if((strlen((integer)$row[1])==9) && (strlen((integer)$row[2])==10))
        {

            return new At10s($data);

        }
        else
        {
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
            'at1_q67'   => $row[74]??'',
            'at1_q68'   => $row[75]??'',
            'at1_q69'   => $row[76]??'',
            'at1_q70'   => $row[77]??''
        ];
    }
}
