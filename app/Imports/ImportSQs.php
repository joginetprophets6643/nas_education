<?php

namespace App\Imports;

use App\Models\SQs;
use App\Models\DummySQs;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class ImportSQs implements ToModel,WithStartRow
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
          // $row[1] ...Bar Code Validation  ==9
        // $row[2] ...UDISE School code Validation as per prabhat == 11
        if((strlen((integer)$row[1])==9) && (strlen((integer)$row[2])==10))
        {

            return new SQs($data);

        }
        else
        {
            return new DummySQs($data);
        }
    }

    function excelrowData($row)
    {
     
        return [
            'sq_scan'   => $row[0],
            'sq_bar'   => $row[1], 
            'sq_udise' => $row[2]??'',
            'sq_set'   => $row[3]??'',
            'sq_grade' => $row[4]??'',
            'sq_sect'  => $row[5]??'', 
            'sq_nasid' => $row[6]??'', 
            'sq_socgrp'=> $row[7]??'',
            'sq_cwd'   => $row[8]??'', 
            'sq_q01'   => $row[9]??'',
            'sq_q02'   => $row[10]??'', 
            'sq_q03'   => $row[11]??'', 
            'sq_q04'   => $row[12]??'', 
            'sq_q05'   => $row[13]??'', 
            'sq_q06'   => $row[14]??'', 
            'sq_q07'   => $row[15]??'', 
            'sq_q08'   => $row[16]??'', 
            'sq_q09'   => $row[17]??'', 
            'sq_q10'   => $row[18]??'',
            'sq_q11'   => $row[19]??'', 
            'sq_q12'   => $row[20]??'', 
            'sq_q13'   => $row[21]??'', 
            'sq_q14'   => $row[22]??'',
            'sq_q15'   => $row[23]??'', 
            'sq_q16'   => $row[24]??'', 
            'sq_q17'   => $row[25]??'',
            'sq_q18'   => $row[26]??'',
            'sq_q19'   => $row[27]??'', 
            'sq_q20'   => $row[28]??'', 
            'sq_q21'   => $row[29]??'',
            'sq_q22'   => $row[30]??'', 
            'sq_q23'   => $row[31]??'',
            'sq_q24'   => $row[32]??'',
            'sq_q25'   => $row[33]??'',
            'sq_q26'   => $row[34]??'',
            'sq_q27'   => $row[35]??'', 
            'sq_q28'   => $row[36]??'', 
            'sq_q29'   => $row[37]??'', 
            'sq_q30'   => $row[38]??'',
            'sq_q31'   => $row[39]??'', 
            'sq_q32'   => $row[40]??'',
            'sq_q33'   => $row[41]??'',
            'sq_q34'   => $row[42]??'', 
            'sq_q35'   => $row[43]??'', 
            'sq_q36'   => $row[44]??'',
            'sq_q37'   => $row[45]??'', 
            'sq_q38'   => $row[46]??'',
            'sq_q39'   => $row[47]??'',
            'sq_q40'   => $row[48]??'', 
            'sq_q41'   => $row[49]??'', 
            'sq_q42'   => $row[50]??'',
            'sq_q43'   => $row[51]??'', 
            'sq_q44'   => $row[52]??'', 
            'sq_q45'   => $row[53]??'',
            'sq_q46'   => $row[54]??'',
            'sq_q47'   => $row[55]??'',
            'sq_q48'   => $row[56]??'',
            'sq_q49'   => $row[57]??'',
            'sq_q50'   => $row[58]??'',
            'sq_q51'   => $row[59]??'',
            'sq_q52'   => $row[60]??'',
            'sq_q53'   => $row[61]??'',
            'sq_q54'   => $row[62]??'',
            'sq_q55'   => $row[63]??'',
            'sq_q56'   => $row[64]??'',
            'sq_q57'   => $row[65]??'',
            'sq_q58'   => $row[66]??'',
            'sq_q59'   => $row[67]??'',
            'sq_q60'   => $row[68]??'',
            'sq_q61'   => $row[69]??'',
            'sq_q62'   => $row[70]??'',
            'sq_q63'   => $row[71]??'',
            'sq_q64'   => $row[72]??'',
            'sq_q65'   => $row[73]??'',
            'sq_q67'   => $row[74]??'',
            'sq_q68'   => $row[75]??'',
            'sq_q69a'   => $row[76]??'',
            'sq_q69b'   => $row[77]??'',
            'sq_q69c'   => $row[78]??'',
            'sq_q69d'   => $row[79]??'',
            'sq_q69e'   => $row[80]??'',
            'sq_q69f'   => $row[81]??'',
            'sq_q69g'   => $row[82]??'',
            'sq_q69h'   => $row[83]??'',
            'sq_q70'   => $row[84]??'',
            'sq_q71'   => $row[85]??'',
            'sq_q72'   => $row[86]??'',
            'sq_q73'   => $row[87]??''
        ];
    }
}
