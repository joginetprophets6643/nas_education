<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CommonController extends Controller
{
    public function view_parti_g3_school()
    {
        
        $at3s = DB::table('dummy_at3s')->get();
        foreach ($at3s as $key => $value) {

            $string = (string)$value->at3_bar;
            $length = strlen($string);
            for($i=0; $i<$length; $i++){
                if($i==1){
                    $string[$i] = 1;
                }
                else
                {
                    $string[$i];
                }

               }
             

            $pq = DB::table('p_qs')->where('pq_bar',(int)$string)->first();
            if($pq!=null)
            {
                echo "<pre>";
                // echo $pq->state_id ."===".$pq->district_id;
                 $nas_exam_details = DB::table('nas_exam_details')
                                     ->where('c3_nas_flag',1)
                                    //  ->where('district_cd',$value->district_id)
                                    //  ->where('state_cd',$value->state_id)
                                     ->get();

                foreach ($nas_exam_details as $key1 => $v) {
                    echo "<pre>";
                    echo " State ID ".$value->state_id;
                    echo " District ID ".$value->district_id;
                    echo " Frame ".$v->frame;
                    echo " Grade ".$value->at3_grade;
                    echo " school Udise Code ". $v->udise_sch_code;
                    echo " School Location ".$v->sch_loc_r_u;
                    
                }
                dd($nas_exam_details);
                // echo $pq->pq_bar ."==".$nas_exam_details;
            }
           

        }
        
        // dd($at3s);
    }
}
