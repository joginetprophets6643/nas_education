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
      
      //  Get State Code And District Code
      if(strlen((integer)$data['pq_udise'])==11)
      {
          $data['state_id']=substr((integer)$data['pq_udise'], 0, 2);
          $data['district_id']=substr((integer)$data['pq_udise'], 2, 2);
      }
      elseif(strlen((integer)$data['pq_udise'])==10)
      {
          $pq_udise = str_pad((integer)$data['pq_udise'], 11, '0', STR_PAD_LEFT);
          $data['state_id']=substr($pq_udise, 0, 2);
          $data['district_id']=substr($pq_udise, 2, 2);
      }

      if(
          (strlen((integer)$data['pq_bar'])==9)
           && 
           (strlen((integer)$data['pq_udise'])==10) 
           &&
           in_array($data['pq_grade'] ,[3,5,8,10])
           &&
           ($data['pq_nasid']>=1 && $data['pq_nasid']<=30)
           &&
           ($data['pq_age']>=4 && $data['pq_age']<=20)
           &&
           (($data['pq_min']==1 || $data['pq_min']==2)||$data['pq_min']=='X' ||$data['pq_min']=='Z')
           &&
           (($data['pq_miny']>=1 && $data['pq_miny']<=6)||$data['pq_miny']=='X' ||$data['pq_miny']=='Z')
           &&
           (($data['pq_gender']>=1 && $data['pq_gender']<=3)||$data['pq_gender']=='X' ||$data['pq_gender']=='Z')
           &&
           (($data['pq_bpl']==1 || $data['pq_bpl']==2)||$data['pq_bpl']=='X' ||$data['pq_bpl']=='Z')
           &&
           (($data['pq_cwsn']==1 || $data['pq_cwsn']==2)||$data['pq_cwsn']=='X' ||$data['pq_cwsn']=='Z')
           &&
           (($data['pq_q01']>=1 && $data['pq_q01']<=10)||$data['pq_q01']=='X' ||$data['pq_q01']=='Z')
           &&
           (($data['pq_q02']>=1 && $data['pq_q02']<=10)||$data['pq_q02']=='X' ||$data['pq_q02']=='Z')
           &&
           (($data['pq_q03']>=1 && $data['pq_q03']<=9)||$data['pq_q03']=='X' ||$data['pq_q03']=='Z')
           &&
           (($data['pq_q04']>=1 && $data['pq_q04']<=9)||$data['pq_q04']=='X' ||$data['pq_q04']=='Z')
           &&
           (($data['pq_q05']>=1 && $data['pq_q05']<=5)||$data['pq_q05']=='X' ||$data['pq_q05']=='Z')
           &&
           (($data['pq_q06']>=1 && $data['pq_q06']<=6)||$data['pq_q06']=='X' ||$data['pq_q06']=='Z')
           &&
           (($data['pq_q07']>=1 && $data['pq_q07']<=4)||$data['pq_q07']=='X' ||$data['pq_q07']=='Z')
           &&
           (($data['pq_q08']>=1 && $data['pq_q08']<=4)||$data['pq_q08']=='X' ||$data['pq_q08']=='Z')
           &&
           (($data['pq_q09']>=1 && $data['pq_q09']<=6)||$data['pq_q09']=='X' ||$data['pq_q09']=='Z')
           &&
           (($data['pq_q10']>=1 && $data['pq_q10']<=3)||$data['pq_q10']=='X' ||$data['pq_q10']=='Z')
           &&
           (($data['pq_q11']>=1 && $data['pq_q11']<=4)||$data['pq_q11']=='X' ||$data['pq_q11']=='Z')
           &&
           (($data['pq_q12']>=1 && $data['pq_q12']<=4)||$data['pq_q12']=='X' ||$data['pq_q12']=='Z')
           &&
           (($data['pq_q13']>=1 && $data['pq_q13']<=4)||$data['pq_q13']=='X' ||$data['pq_q13']=='Z')
           &&
           (($data['pq_q14']>=1 && $data['pq_q14']<=3)||$data['pq_q14']=='X' ||$data['pq_q14']=='Z')
           &&
           (($data['pq_q15']>=1 && $data['pq_q15']<=3)||$data['pq_q15']=='X' ||$data['pq_q15']=='Z')
           &&
           (($data['pq_q16']>=1 && $data['pq_q16']<=3)||$data['pq_q16']=='X' ||$data['pq_q16']=='Z')
           &&
           (($data['pq_q17']>=1 && $data['pq_q17']<=3)||$data['pq_q17']=='X' ||$data['pq_q17']=='Z')
           &&
           (($data['pq_q18']>=1 && $data['pq_q18']<=3)||$data['pq_q18']=='X' ||$data['pq_q18']=='Z')
           &&
           (($data['pq_q19']>=1 && $data['pq_q19']<=3)||$data['pq_q19']=='X' ||$data['pq_q19']=='Z')
           &&
           (($data['pq_q20']>=1 && $data['pq_q20']<=3)||$data['pq_q20']=='X' ||$data['pq_q20']=='Z')
           &&
           (($data['pq_q21']>=1 && $data['pq_q21']<=3)||$data['pq_q21']=='X' ||$data['pq_q21']=='Z')
           &&
           (($data['pq_q22']>=1 && $data['pq_q22']<=3)||$data['pq_q22']=='X' ||$data['pq_q22']=='Z')
           &&
           (($data['pq_q23']>=1 && $data['pq_q23']<=3)||$data['pq_q23']=='X' ||$data['pq_q23']=='Z')
           &&
           (($data['pq_q24a']>=1 && $data['pq_q24a']<=2) ||$data['pq_q24a']=='X' ||$data['pq_q24a']=='Z')
           && 
           (($data['pq_q24b']>=1 && $data['pq_q24b']<=2) ||$data['pq_q24b']=='X' ||$data['pq_q24b']=='Z')
           && 
           (($data['pq_q24c']>=1 && $data['pq_q24c']<=2)||$data['pq_q24c']=='X' ||$data['pq_q24c']=='Z')
           &&
           (($data['pq_q24d']>=1 && $data['pq_q24d']<=2) ||$data['pq_q24d']=='X' ||$data['pq_q24d']=='Z')
           && 
           (($data['pq_q24e']>=1 && $data['pq_q24e']<=2) ||$data['pq_q24e']=='X' ||$data['pq_q24e']=='Z')
           && 
           (($data['pq_q24f']>=1 && $data['pq_q24f']<=2)||$data['pq_q24f']=='X' ||$data['pq_q24f']=='Z')
           &&
           (($data['pq_q24g']>=1 && $data['pq_q24g']<=2) ||$data['pq_q24g']=='X' ||$data['pq_q24g']=='Z')
           && 
           (($data['pq_q24h']>=1 && $data['pq_q24h']<=2) ||$data['pq_q24h']=='X' ||$data['pq_q24h']=='Z')
           && 
           (($data['pq_q24i']>=1 && $data['pq_q24i']<=2)||$data['pq_q24i']=='X' ||$data['pq_q24i']=='Z')
           &&
           (($data['pq_q25a']>=1 && $data['pq_q25a']<=2) ||$data['pq_q25a']=='X' ||$data['pq_q25a']=='Z')
           && 
           (($data['pq_q25b']>=1 && $data['pq_q25b']<=2) ||$data['pq_q25b']=='X' ||$data['pq_q25b']=='Z')
           && 
           (($data['pq_q25c']>=1 && $data['pq_q25c']<=2)||$data['pq_q25c']=='X' ||$data['pq_q25c']=='Z')
           &&
           (($data['pq_q25d']>=1 && $data['pq_q25d']<=2) ||$data['pq_q25d']=='X' ||$data['pq_q25d']=='Z')
           && 
           (($data['pq_q25e']>=1 && $data['pq_q25e']<=2) ||$data['pq_q25e']=='X' ||$data['pq_q25e']=='Z')
           && 
           (($data['pq_q25f']>=1 && $data['pq_q25f']<=2)||$data['pq_q25f']=='X' ||$data['pq_q25f']=='Z')
           &&
           (($data['pq_q25g']>=1 && $data['pq_q25g']<=2) ||$data['pq_q25g']=='X' ||$data['pq_q25g']=='Z')
           && 
           (($data['pq_q25h']>=1 && $data['pq_q25h']<=2) ||$data['pq_q25h']=='X' ||$data['pq_q25h']=='Z')
           && 
           (($data['pq_q25i']>=1 && $data['pq_q25i']<=2)||$data['pq_q25i']=='X' ||$data['pq_q25i']=='Z')
           &&
           (($data['pq_q25j']>=1 && $data['pq_q25j']<=2) ||$data['pq_q25j']=='X' ||$data['pq_q25j']=='Z')
           && 
           (($data['pq_q26a']>=1 && $data['pq_q26a']<=2) ||$data['pq_q26a']=='X' ||$data['pq_q26a']=='Z')
           && 
           (($data['pq_q26b']>=1 && $data['pq_q26b']<=2)||$data['pq_q26b']=='X' ||$data['pq_q26b']=='Z')
           &&
           (($data['pq_q26c']>=1 && $data['pq_q26c']<=2) ||$data['pq_q26c']=='X' ||$data['pq_q26c']=='Z')
           && 
           (($data['pq_q26d']>=1 && $data['pq_q26d']<=2) ||$data['pq_q26d']=='X' ||$data['pq_q26d']=='Z')
           && 
           (($data['pq_q26e']>=1 && $data['pq_q26e']<=2)||$data['pq_q26e']=='X' ||$data['pq_q26e']=='Z')
           &&
           (($data['pq_q26f']>=1 && $data['pq_q26f']<=2) ||$data['pq_q26f']=='X' ||$data['pq_q26f']=='Z')
           && 
           (($data['pq_q26g']>=1 && $data['pq_q26g']<=2) ||$data['pq_q26g']=='X' ||$data['pq_q26g']=='Z')
           && 
           (($data['pq_q27a']>=1 && $data['pq_q27a']<=2)||$data['pq_q27a']=='X' ||$data['pq_q27a']=='Z')
           &&
           (($data['pq_q27b']>=1 && $data['pq_q27b']<=2) ||$data['pq_q27b']=='X' ||$data['pq_q27b']=='Z')
           && 
           (($data['pq_q27c']>=1 && $data['pq_q27c']<=2) ||$data['pq_q27c']=='X' ||$data['pq_q27c']=='Z')
           && 
           (($data['pq_q27d']>=1 && $data['pq_q27d']<=2)||$data['pq_q27d']=='X' ||$data['pq_q27d']=='Z')
           &&
           (($data['pq_q27e']>=1 && $data['pq_q27e']<=2) ||$data['pq_q27e']=='X' ||$data['pq_q27e']=='Z')
           && 
           (($data['pq_q27f']>=1 && $data['pq_q27f']<=2) ||$data['pq_q27f']=='X' ||$data['pq_q27f']=='Z')
           && 
           (($data['pq_q27g']>=1 && $data['pq_q27g']<=2)||$data['pq_q27g']=='X' ||$data['pq_q27g']=='Z')
           &&
           (($data['pq_q28a']>=1 && $data['pq_q28a']<=2) ||$data['pq_q28a']=='X' ||$data['pq_q28a']=='Z')
           && 
           (($data['pq_q28b']>=1 && $data['pq_q28b']<=2) ||$data['pq_q28b']=='X' ||$data['pq_q28b']=='Z')
           && 
           (($data['pq_q28c']>=1 && $data['pq_q28c']<=2)||$data['pq_q28c']=='X' ||$data['pq_q28c']=='Z')
           &&
           (($data['pq_q28d']>=1 && $data['pq_q28d']<=2) ||$data['pq_q28d']=='X' ||$data['pq_q28d']=='Z')
           && 
           (($data['pq_q28e']>=1 && $data['pq_q28e']<=2) ||$data['pq_q28e']=='X' ||$data['pq_q28e']=='Z')
           && 
           (($data['pq_q28f']>=1 && $data['pq_q28f']<=2)||$data['pq_q28f']=='X' ||$data['pq_q28f']=='Z')
           &&
           (($data['pq_q28g']>=1 && $data['pq_q28g']<=2) ||$data['pq_q28g']=='X' ||$data['pq_q28g']=='Z')
           && 
           (($data['pq_q28h']>=1 && $data['pq_q28h']<=2) ||$data['pq_q28h']=='X' ||$data['pq_q28h']=='Z')
           && 
           (($data['pq_q29a']>=1 && $data['pq_q29a']<=2)||$data['pq_q29a']=='X' ||$data['pq_q29a']=='Z')
           &&
           (($data['pq_q29b']>=1 && $data['pq_q29b']<=2) ||$data['pq_q29b']=='X' ||$data['pq_q29b']=='Z')
           && 
           (($data['pq_q29c']>=1 && $data['pq_q29c']<=2) ||$data['pq_q29c']=='X' ||$data['pq_q29c']=='Z')
           && 
           (($data['pq_q29d']>=1 && $data['pq_q29d']<=2)||$data['pq_q29d']=='X' ||$data['pq_q29d']=='Z')
           &&
           (($data['pq_q29e']>=1 && $data['pq_q29e']<=2) ||$data['pq_q29e']=='X' ||$data['pq_q29e']=='Z')
           && 
           (($data['pq_q29f']>=1 && $data['pq_q29f']<=2) ||$data['pq_q29f']=='X' ||$data['pq_q29f']=='Z')
           && 
           (($data['pq_q29g']>=1 && $data['pq_q29g']<=2)||$data['pq_q29g']=='X' ||$data['pq_q29g']=='Z')
           &&
           (($data['pq_q30']>=1 && $data['pq_q30']<=2) ||$data['pq_q30']=='X' ||$data['pq_q30']=='Z')
           && 
           (($data['pq_q31']>=1 && $data['pq_q31']<=3) ||$data['pq_q31']=='X' ||$data['pq_q31']=='Z')
           && 
           (($data['pq_q32']>=1 && $data['pq_q32']<=3) ||$data['pq_q32']=='X' ||$data['pq_q32']=='Z')
           && 
           (($data['pq_q33']>=1 && $data['pq_q33']<=3) ||$data['pq_q33']=='X' ||$data['pq_q33']=='Z')
           && 
           (($data['pq_q34']>=1 && $data['pq_q34']<=4) ||$data['pq_q34']=='X' ||$data['pq_q34']=='Z')
           && 
           (($data['pq_q35']>=1 && $data['pq_q35']<=4)||$data['pq_q35']=='X' ||$data['pq_q35']=='Z')
           && 
           (($data['pq_q36']>=1 && $data['pq_q36']<=4) ||$data['pq_q36']=='X' ||$data['pq_q36']=='Z')
           && 
           (($data['pq_q37']>=1 && $data['pq_q37']<=2) ||$data['pq_q37']=='X' ||$data['pq_q37']=='Z')
           &&  
           (($data['pq_q38']>=1 && $data['pq_q38']<=2)||$data['pq_q38']=='X' ||$data['pq_q38']=='Z')
           && 
           (($data['pq_q39']>=1 && $data['pq_q39']<=2)||$data['pq_q39']=='X' ||$data['pq_q39']=='Z')
           && 
           (($data['pq_q40']>=1 && $data['pq_q40']<=4)||$data['pq_q40']=='X' ||$data['pq_q40']=='Z')
           )
      {
             $right_counter = 0;
             $total_number_question = 0;
             foreach ($data as $key => $value) {
                $keyDetails = array('pq_scan','pq_bar','pq_udise','pq_grade','pq_nasid','pq_section','pq_age','pq_min','pq_miny','pq_gender','pq_bpl','pq_cwsn');
                if(!in_array($key, $keyDetails))
                {
                 $total_number_question = $total_number_question + 1;
                   $check_result = $this->get_attemp_question_count($data['pq_bar'],$data[$key]);
                    if($check_result==true)
                    {
                        $right_counter = $right_counter+1;
                    }
                }
             }
               $right_counter;
        
            //  $data['right_count'] = $right_counter;
            //  $data['percentage'] =  ($right_counter/$total_number_question)*100;
            $data['right_count'] = 0;
            $data['percentage'] =  0;

            return new PQs($data);

      }
      else
      {
    
        $right_counter = 0;
        $total_number_question = 0;
        foreach ($data as $key => $value) {
          $keyDetails = array('pq_scan','pq_bar','pq_udise','pq_grade','pq_nasid','pq_section','pq_age','pq_min','pq_miny','pq_gender','pq_bpl','pq_cwsn');
          if(!in_array($key, $keyDetails))
          {
            $total_number_question = $total_number_question + 1;
            $check_result = $this->get_attemp_question_count($data['pq_bar'],$data[$key]);
              if($check_result==true)
              {
                $right_counter = $right_counter+1;
              }
          }
        }
        $right_counter;   
        // $data['right_count'] = $right_counter;
        // $data['percentage'] =  ($right_counter/$total_number_question)*100;
        $data['right_count'] = 0;
        $data['percentage'] =  0;

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
