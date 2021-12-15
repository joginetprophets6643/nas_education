<?php

namespace App\Imports;

use App\Models\PQs;
use App\Models\DummyPQs;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class ImportPQs implements ToModel,WithStartRow
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
        ini_set('max_execution_time', '500'); //300 seconds = 5 minutes
        $data =  $this->excelrowData($row);
      
       //$row[1] ...Bar Code Validation  ==9
      // $row[2] ...UDISE School code Validation  ==11

    //   if((strlen((integer)$row[1])==9) && (strlen((integer)$row[2])==10))
    // foreach ($row as $key => $value) {
       
    //     echo $row[$key];
    // }
  
     
      if(
          (strlen((integer)$row[1])==9)
           && 
           (strlen((integer)$row[2])==13) 
        //    &&
        //    ($row[6]>=4 && $row[6]<=20)
        //    &&
        //    ($row[7]==1 || $row[7]==2)
        //    &&
        //    ($row[8]>=1 && $row[8]<=6)
        //    &&
        //    ($row[9]>=1 || $row[9]<=3)
        //    &&
        //    ($row[10]==1 || $row[10]==2)
        //    &&
        //    ($row[11]==1 || $row[11]==2)
        //    &&
        //    ($row[12]>=1 && $row[12]<=10)
        //    &&
        //    ($row[13]>=1 && $row[13]<=10)
        //    &&
        //    ($row[14]>=1 && $row[14]<=9)
        //    &&
        //    ($row[15]>=1 && $row[15]<=9)
        //    &&
        //    ($row[16]>=1 && $row[16]<=5)
        //    &&
        //    ($row[17]>=1 && $row[17]<=6)
        //    &&
        //    ($row[18]>=1 && $row[18]<=4)
        //    &&
        //    ($row[19]>=1 && $row[19]<=4)
        //    &&
        //    ($row[20]>=1 && $row[19]<=6)
        //    &&
        //    ($row[21]>=1 && $row[21]<=3)
        //    &&
        //    ($row[22]>=1 && $row[22]<=4)
        //    &&
        //    ($row[23]>=1 && $row[23]<=4)
        //    &&
        //    ($row[24]>=1 && $row[24]<=4)
        //    &&
        //    ($row[25]>=1 || $row[25]<=3)
        //    &&
        //    ($row[26]>=1 || $row[26]<=3)
        //    &&
        //    ($row[27]>=1 || $row[27]<=3)
        //    &&
        //    ($row[28]>=1 || $row[28]<=3)
        //    &&
        //    ($row[29]>=1 || $row[29]<=3)
        //    &&
        //    ($row[30]>=1 || $row[30]<=3)
        //    &&
        //    ($row[31]>=1 || $row[31]<=3)
        //    &&
        //    ($row[32]>=1 || $row[32]<=3)
        //    &&
        //    ($row[33]>=1 || $row[33]<=3)
        //    &&
        //    ($row[34]>=1 || $row[34]<=3)
        //    &&
        //    ($row[35]>=1 || $row[35]<=2) && ($row[36]>=1 || $row[36]<=2) && ($row[37]>=1 || $row[37]<=2)
        //    &&
        //    ($row[38]>=1 || $row[38]<=2) && ($row[39]>=1 || $row[39]<=2) && ($row[40]>=1 || $row[40]<=2)
        //    &&
        //    ($row[41]>=1 || $row[41]<=2) && ($row[42]>=1 || $row[42]<=2) && ($row[43]>=1 || $row[43]<=2)
        //    &&
        //    ($row[44]>=1 || $row[44]<=2) && ($row[45]>=1 || $row[45]<=2) && ($row[46]>=1 || $row[46]<=2)
        //    &&
        //    ($row[47]>=1 || $row[47]<=2) && ($row[48]>=1 || $row[48]<=2) && ($row[49]>=1 || $row[49]<=2)
        //    &&
        //    ($row[50]>=1 || $row[50]<=2) && ($row[51]>=1 || $row[51]<=2) && ($row[52]>=1 || $row[52]<=2)
        //    &&
        //    ($row[53]>=1 || $row[53]<=2) && ($row[54]>=1 || $row[54]<=2) && ($row[55]>=1 || $row[55]<=2)
        //    &&
        //    ($row[56]>=1 || $row[56]<=2) && ($row[57]>=1 || $row[57]<=2) && ($row[58]>=1 || $row[58]<=2)
        //    &&
        //    ($row[59]>=1 || $row[59]<=2) && ($row[60]>=1 || $row[60]<=2) && ($row[61]>=1 || $row[61]<=2)
        //    &&
        //    ($row[62]>=1 || $row[62]<=2) && ($row[63]>=1 || $row[63]<=2) && ($row[64]>=1 || $row[64]<=2)
        //    &&
        //    ($row[65]>=1 || $row[65]<=2) && ($row[66]>=1 || $row[66]<=2) && ($row[67]>=1 || $row[67]<=2)
        //    &&
        //    ($row[68]>=1 || $row[68]<=2) && ($row[69]>=1 || $row[69]<=2) && ($row[70]>=1 || $row[70]<=2)
        //    &&
        //    ($row[71]>=1 || $row[71]<=2) && ($row[72]>=1 || $row[72]<=2) && ($row[73]>=1 || $row[73]<=2)
        //    &&
        //    ($row[74]>=1 || $row[74]<=2) && ($row[75]>=1 || $row[75]<=2) && ($row[76]>=1 || $row[76]<=2)
        //    &&
        //    ($row[77]>=1 || $row[77]<=2) && ($row[78]>=1 || $row[78]<=2) && ($row[79]>=1 || $row[79]<=2)
        //    &&
        //    ($row[80]>=1 || $row[80]<=2) && ($row[81]>=1 || $row[81]<=2) && ($row[82]>=1 || $row[82]<=2)
        //    &&
        //    ($row[83]>=1 || $row[83]<=3) && ($row[84]>=1 || $row[84]<=3) && ($row[85]>=1 || $row[85]<=3) 
        //    && 
        //    ($row[86]>=1 || $row[86]<=4) && ($row[87]>=1 || $row[87]<=4) && ($row[88]>=1 || $row[88]<=2)
        //    && 
        //    ($row[89]>=1 || $row[89]<=2) && ($row[90]>=1 || $row[90]<=2) &&  ($row[91]>=1 || $row[91]<=2)
        //    && 
        //    ($row[92]>=1 || $row[92]<=4)
           )
      {
             $right_counter = 0;
             $total_number_question = 0;
             foreach ($row as $key => $value) {
                if($key>11)
                {
                 $total_number_question = $total_number_question + 1;
                   $check_result = $this->get_attemp_question_count($row[1],$row[$key]);
                    if($check_result==true)
                    {
                        $right_counter = $right_counter+1;
                    }
                }
             }
               $right_counter;
        
             $data['right_count'] = $right_counter;
             $data['percentage'] =  ($right_counter/$total_number_question)*100;
             return new PQs($data);

      }
      else
      {
    
        $right_counter = 0;
        $total_number_question = 0;
        foreach ($row as $key => $value) {
           if($key>11)
           {
            $total_number_question = $total_number_question + 1;
              $check_result = $this->get_attemp_question_count($row[1],$row[$key]);
               if($check_result==true)
               {
                   $right_counter = $right_counter+1;
               }
           }
        }
          $right_counter;
   
            $data['right_count'] = $right_counter;
            $data['percentage'] =  ($right_counter/$total_number_question)*100;
            return new DummyPQs($data);
      }

  
}

    function excelrowData($row)
    {
       
        return [
            'pq_scan'       =>      $row[0],
            'pq_bar'        =>      $row[1], 
            'pq_udise'      =>      $row[2]??'',
            'pq_grade'      =>      $row[3]??'',
            'pq_nasid'      =>      $row[4]??'',
            'pq_section'    =>      $row[5]??'',
            'pq_age'        =>      $row[6]??'', 
            'pq_min'        =>      $row[7]??'', 
            'pq_miny'       =>      $row[8]??'',
            'pq_gender'     =>      $row[9]??'', 
            'pq_bpl'        =>      $row[10]??'', 
            'pq_cwsn'       =>      $row[11]??'', 
            'pq_q01'        =>      $row[12]??'',
            'pq_q02'        =>      $row[13]??'', 
            'pq_q03'        =>      $row[14]??'', 
            'pq_q04'        =>      $row[15]??'', 
            'pq_q05'        =>      $row[16]??'', 
            'pq_q06'        =>      $row[17]??'', 
            'pq_q07'        =>      $row[18]??'', 
            'pq_q08'        =>      $row[19]??'', 
            'pq_q09'        =>      $row[20]??'', 
            'pq_q10'        =>      $row[21]??'',
            'pq_q11'        =>      $row[22]??'', 
            'pq_q12'        =>      $row[23]??'', 
            'pq_q13'        =>      $row[24]??'', 
            'pq_q14'        =>      $row[25]??'',
            'pq_q15'        =>      $row[26]??'', 
            'pq_q16'        =>      $row[27]??'', 
            'pq_q17'        =>      $row[28]??'',
            'pq_q18'        =>      $row[29]??'',
            'pq_q19'        =>      $row[30]??'', 
            'pq_q20'        =>      $row[31]??'', 
            'pq_q21'        =>      $row[32]??'',
            'pq_q22'        =>      $row[33]??'', 
            'pq_q23'        =>      $row[34]??'',
            'pq_q24a'       =>      $row[35]??'',
            'pq_q24b'       =>      $row[36]??'',
            'pq_q24c'       =>      $row[37]??'',
            'pq_q24d'       =>      $row[38]??'', 
            'pq_q24e'       =>      $row[39]??'', 
            'pq_q24f'       =>      $row[40]??'', 
            'pq_q24g'       =>      $row[41]??'',
            'pq_q24h'       =>      $row[42]??'', 
            'pq_q24i'       =>      $row[43]??'',
            'pq_q25a'       =>      $row[44]??'',
            'pq_q25b'       =>      $row[45]??'', 
            'pq_q25c'       =>      $row[46]??'', 
            'pq_q25d'       =>      $row[47]??'',
            'pq_q25e'       =>      $row[48]??'', 
            'pq_q25f'       =>      $row[49]??'',
            'pq_q25g'       =>      $row[50]??'',
            'pq_q25h'       =>      $row[51]??'', 
            'pq_q25i'       =>      $row[52]??'', 
            'pq_q25j'       =>      $row[53]??'',
            'pq_q26a'       =>      $row[54]??'', 
            'pq_q26b'       =>      $row[54]??'', 
            'pq_q26c'       =>      $row[55]??'',
            'pq_q26d'       =>      $row[56]??'',
            'pq_q26e'       =>      $row[57]??'',
            'pq_q26f'       =>      $row[58]??'',
            'pq_q26g'       =>      $row[59]??'',
            'pq_q27a'       =>      $row[60]??'',
            'pq_q27b'       =>      $row[61]??'',
            'pq_q27c'       =>      $row[62]??'',
            'pq_q27d'       =>      $row[63]??'',
            'pq_q27e'       =>      $row[64]??'',
            'pq_q27f'       =>      $row[65]??'',
            'pq_q27g'       =>      $row[66]??'',
            'pq_q28a'       =>      $row[67]??'',
            'pq_q28b'       =>      $row[68]??'',
            'pq_q28c'       =>      $row[69]??'',
            'pq_q28d'       =>      $row[70]??'',
            'pq_q28e'       =>      $row[71]??'',
            'pq_q28f'       =>      $row[72]??'',
            'pq_q28g'       =>      $row[73]??'',
            'pq_q28h'       =>      $row[74]??'',
            'pq_q29a'       =>      $row[75]??'',
            'pq_q29b'       =>      $row[76]??'',
            'pq_q29c'       =>      $row[77]??'',
            'pq_q29d'       =>      $row[78]??'',
            'pq_q29e'       =>      $row[79]??'',
            'pq_q29f'       =>      $row[80]??'',
            'pq_q29g'       =>      $row[81]??'',
            'pq_q30'        =>      $row[82]??'',
            'pq_q31'        =>      $row[83]??'',
            'pq_q32'        =>      $row[84]??'',
            'pq_q33'        =>      $row[85]??'',
            'pq_q34'        =>      $row[86]??'',
            'pq_q35'        =>      $row[87]??'',
            'pq_q36'        =>      $row[88]??'',
            'pq_q37'        =>      $row[89]??'',
            'pq_q38'        =>      $row[90]??'',
            'pq_q39'        =>      $row[91]??'',
            'pq_q40'        =>      $row[92]??''
        ];
    }


    public function get_attemp_question_count($pq_scan,$user_attemp_question)
    {
            return true;
    }

}
