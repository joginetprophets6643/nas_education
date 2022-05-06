<?php

namespace App\Imports;

use App\Models\Nrc8Datas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class Nrc8DataImport implements ToModel,WithStartRow
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
        foreach($row as $key=>$item){
            if($item==" " || $item==null){
                $row[$key]=0;
            }
        }
        return new Nrc8Datas([
            "state_code"=>$row['0'],
            "state_name"=>$row['1'],
            "subject"=>$row['2'],
            "ss"=>$row['3'],
            "se"=>$row['4'],
            "indicator"=>$row['5'],
            "government"=>$row['6'],
            "government_aided"=>$row['7'],
            "se_govt"=>$row['8'],
            "se_govt_aided"=>$row['9'],
            "govt_indicator"=>$row['10'],
            "private"=>$row['11'],
            "se_private"=>$row['12'],
            "prvt_indicator"=>$row['13'],
            "central_govt"=>$row['14'],
            "se_central_govt"=>$row['15'],
            "cent_govt_indicator"=>$row['16'],
            "ssb"=>$row['17'],
            "ssg"=>$row['18'],
            "seb"=>$row['19'],
            "seg"=>$row['20'],
            "gender_indicator"=>$row['21'],
            "rural_ss"=>$row['22'],
            "rural_se"=>$row['23'],
            "urban_ss"=>$row['24'],
            "urban_se"=>$row['25'],
            "area_wise_indicator"=>$row['26'],
            "general"=>$row['27'],
            "sc"=>$row['28'],
            "se_gen"=>$row['29'],
            "se_sc"=>$row['30'],
            "gen_indicator"=>$row['31'],
            "st"=>$row['32'],
            "se_st"=>$row['33'],
            "st_indicator"=>$row['34'],
            "obc"=>$row['35'],
            "se_obc"=>$row['36'],
            "obc_indicator"=>$row['37']
        ]);
    }
}
