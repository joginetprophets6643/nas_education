<?php

namespace App\Imports;

use App\Models\TQs;
use App\Models\DummyTQs;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class ImportTQ implements ToModel,WithStartRow
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

            return new TQs($data);

        }
        else
        {
            return new DummyTQs($data);
        }
    }

    function excelrowData($row)
    {
        
        return [
            'sq_scan'   => $row[0],
            'tq_bar'    => $row[1], 
            'tq_udise'  => $row[2]??'',
            'tq_grade'   => $row[3]??'',
            'tq_section' => $row[4]??'',
            'tq_gender'  => $row[5]??'', 
            'tq_emp'    => $row[6]??'', 
            'tq_exp'    => $row[7]??'',
            'tq_pqua'   => $row[8]??'', 
            'tq_subj'   => $row[9]??'', 
            'tq_age'   => $row[10]??'', 
            'tq_q01'   => $row[11]??'',
            'tq_q02'   => $row[12]??'', 
            'tq_q03'   => $row[13]??'', 
            'tq_q04'   => $row[14]??'', 
            'tq_q05'   => $row[15]??'', 
            'tq_q06'   => $row[16]??'', 
            'tq_q07'   => $row[17]??'', 
            'tq_q08'   => $row[18]??'', 
            'tq_q09'   => $row[19]??'', 
            'tq_q10'   => $row[20]??'',
            'tq_q11'   => $row[21]??'', 
            'tq_q12'   => $row[22]??'', 
            'tq_q13'   => $row[23]??'', 
            'tq_q14'   => $row[24]??'',
            'tq_q15'   => $row[25]??'', 
            'tq_q16'   => $row[26]??'', 
            'tq_q17'   => $row[27]??'',
            'tq_q18'   => $row[28]??'',
            'tq_q19'   => $row[29]??'', 
            'tq_q20'   => $row[30]??'', 
            'tq_q21'   => $row[31]??'',
            'tq_q22'   => $row[32]??'', 
            'tq_q23'   => $row[33]??'',
            'tq_q24'   => $row[34]??'',
            'tq_q25'   => $row[35]??'',
            'tq_q26'   => $row[36]??'',
            'tq_q27'   => $row[37]??'', 
            'tq_q28'   => $row[38]??'', 
            'tq_q29'   => $row[39]??'', 
            'tq_q30'   => $row[40]??'',
            'tq_q31'   => $row[41]??'', 
            'tq_q32'   => $row[42]??'',
            'tq_q33'   => $row[43]??'',
            'tq_q34'   => $row[44]??'', 
            'tq_q35'   => $row[45]??'', 
            'tq_q36'   => $row[46]??'',
            'tq_q37'   => $row[47]??'', 
            'tq_q38'   => $row[48]??'',
            'tq_q39'   => $row[49]??'',
            'tq_q40'   => $row[50]??'', 
            'tq_q41'   => $row[51]??'', 
            'tq_q42'   => $row[52]??'',
            'tq_q43'   => $row[53]??'', 
            'tq_q44'   => $row[54]??'', 
            'tq_q45'   => $row[55]??'',
            'tq_q46'   => $row[56]??'',
            'tq_q47'   => $row[57]??'',
            'tq_q48'   => $row[58]??'',
            'tq_q49'   => $row[59]??'',
            'tq_q50'   => $row[60]??'',
            'tq_q51'   => $row[61]??'',
            'tq_q52'   => $row[62]??'',
            'tq_q53'   => $row[63]??'',
            'tq_q54'   => $row[64]??'',
            'tq_q55'   => $row[65]??'',
            'tq_q56'   => $row[66]??'',
            'tq_q57'   => $row[67]??'',
            'tq_q58'   => $row[68]??'',
            'tq_q59'   => $row[69]??'',
            'tq_q60'   => $row[68]??'',
            'tq_q61'   => $row[69]??'',
            'tq_q62'   => $row[70]??'',
            'tq_q63'   => $row[71]??'',
            'tq_q64'   => $row[72]??'',
            'tq_q65'   => $row[73]??'',
            'tq_q67'   => $row[74]??'',
            'tq_q68'   => $row[75]??'',
            'tq_q69'  =>  $row[76]??'',
            'tq_q70a'  => $row[77]??'',
            'tq_q70b'  => $row[78]??'',
            'tq_q70c'  => $row[79]??'',
            'tq_q70d'  => $row[80]??'',
            'tq_q71a'  =>  $row[81]??'',
            'tq_q71b'  => $row[82]??'',
            'tq_q71c'  => $row[83]??'',
            'tq_q71d'   => $row[84]??'',
            'tq_q71e'   => $row[85]??'',
            'tq_q71f'   => $row[86]??''
         
        ];
    }
}
