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
          // $row[1] ...Bar Code Validation ==9
        // $row[2] ...UDISE School code Validation as per prabhat == 11

        // Get State Code and District Code
        if(strlen((integer)$data['sq_udise'])==11)
        {
            $data['state_id']=substr((integer)$data['sq_udise'], 0, 2);
            $data['district_id']=substr((integer)$data['sq_udise'], 2, 2);
        }
        elseif(strlen((integer)$data['sq_udise'])==10)
        {
            $sq_udise = str_pad((integer)$data['sq_udise'], 11, '0', STR_PAD_LEFT);
            $data['state_id']=substr($sq_udise, 0, 2);
            $data['district_id']=substr($sq_udise, 2, 2);
        }

        if(
            (strlen((integer)$data['sq_bar'])==9) 
            && 
            (strlen((integer)$data['sq_udise'])==10)
            &&
            in_array($data['sq_q01'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q02'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q03'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q04'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q05'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q06'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q07'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q08'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q09'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q10'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q11'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q12'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q13'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q14'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q15'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q16'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q17'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q18'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q19'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q20'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q21'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q22'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q23'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q24'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q25'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q26'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q27'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q28'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q29'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q30'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q31'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q32'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q33'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q34'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q35'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q36'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q37'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q38'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q39'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q40'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q41'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q42'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q43'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q44'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q45'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q46'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q47'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q48'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q49'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q50'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q51'],[1,2,3,'X','Z'])
            &&
            in_array($data['sq_q52'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q53'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q54'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q55'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q56'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q57'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q58'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q59'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q60'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q61'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q62'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q63'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q64'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q65'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q66'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q67'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q68'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q69a'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q69b'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q69c'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q69d'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q69e'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q69f'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q69g'],[1,2,'X','Z'])   
            &&
            in_array($data['sq_q69h'],[1,2,'X','Z'])
            &&
            in_array($data['sq_q70'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q71'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q72'],[1,2,3,4,'X','Z'])
            &&
            in_array($data['sq_q73'],[1,2,3,4,'X','Z'])
            )
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
            'sq_q01'   => $row[3]??'',
            'sq_q02'   => $row[4]??'', 
            'sq_q03'   => $row[5]??'', 
            'sq_q04'   => $row[6]??'', 
            'sq_q05'   => $row[7]??'', 
            'sq_q06'   => $row[8]??'', 
            'sq_q07'   => $row[9]??'', 
            'sq_q08'   => $row[10]??'', 
            'sq_q09'   => $row[11]??'', 
            'sq_q10'   => $row[12]??'',
            'sq_q11'   => $row[13]??'', 
            'sq_q12'   => $row[14]??'', 
            'sq_q13'   => $row[15]??'', 
            'sq_q14'   => $row[16]??'',
            'sq_q15'   => $row[17]??'', 
            'sq_q16'   => $row[18]??'', 
            'sq_q17'   => $row[19]??'',
            'sq_q18'   => $row[20]??'',
            'sq_q19'   => $row[21]??'', 
            'sq_q20'   => $row[22]??'', 
            'sq_q21'   => $row[22]??'',
            'sq_q22'   => $row[24]??'', 
            'sq_q23'   => $row[25]??'',
            'sq_q24'   => $row[26]??'',
            'sq_q25'   => $row[27]??'',
            'sq_q26'   => $row[28]??'',
            'sq_q27'   => $row[29]??'', 
            'sq_q28'   => $row[30]??'', 
            'sq_q29'   => $row[31]??'', 
            'sq_q30'   => $row[32]??'',
            'sq_q31'   => $row[33]??'', 
            'sq_q32'   => $row[34]??'',
            'sq_q33'   => $row[35]??'',
            'sq_q34'   => $row[36]??'', 
            'sq_q35'   => $row[37]??'', 
            'sq_q36'   => $row[38]??'',
            'sq_q37'   => $row[39]??'', 
            'sq_q38'   => $row[40]??'',
            'sq_q39'   => $row[41]??'',
            'sq_q40'   => $row[42]??'', 
            'sq_q41'   => $row[43]??'', 
            'sq_q42'   => $row[44]??'',
            'sq_q43'   => $row[45]??'', 
            'sq_q44'   => $row[46]??'', 
            'sq_q45'   => $row[47]??'',
            'sq_q46'   => $row[48]??'',
            'sq_q47'   => $row[49]??'',
            'sq_q48'   => $row[50]??'',
            'sq_q49'   => $row[51]??'',
            'sq_q50'   => $row[52]??'',
            'sq_q51'   => $row[53]??'',
            'sq_q52'   => $row[54]??'',
            'sq_q53'   => $row[55]??'',
            'sq_q54'   => $row[56]??'',
            'sq_q55'   => $row[57]??'',
            'sq_q56'   => $row[58]??'',
            'sq_q57'   => $row[59]??'',
            'sq_q58'   => $row[60]??'',
            'sq_q59'   => $row[61]??'',
            'sq_q60'   => $row[62]??'',
            'sq_q61'   => $row[63]??'',
            'sq_q62'   => $row[64]??'',
            'sq_q63'   => $row[65]??'',
            'sq_q64'   => $row[66]??'',
            'sq_q65'   => $row[67]??'',
            'sq_q66'   => $row[68]??'',
            'sq_q67'   => $row[69]??'',
            'sq_q68'   => $row[70]??'',
            'sq_q69a'   => $row[71]??'',
            'sq_q69b'   => $row[72]??'',
            'sq_q69c'   => $row[73]??'',
            'sq_q69d'   => $row[74]??'',
            'sq_q69e'   => $row[75]??'',
            'sq_q69f'   => $row[76]??'',
            'sq_q69g'   => $row[77]??'',
            'sq_q69h'   => $row[78]??'',
            'sq_q70'   => $row[79]??'',
            'sq_q71'   => $row[80]??'',
            'sq_q72'   => $row[81]??'',
            'sq_q73'   => $row[82]??''
        ];
    }
}
