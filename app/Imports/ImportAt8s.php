<?php

namespace App\Imports;

use App\Models\At8s;
use App\Models\DummyAt8s;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportAt8s implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new At8s([
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
        ]);
    }
}
