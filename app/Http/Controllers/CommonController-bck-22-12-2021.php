<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\At3s;
use App\Models\DummyAt3s;
use App\Models\At5s;
use App\Models\DummyAt5s;
use App\Models\At8s;
use App\Models\DummyAt8s;
use App\Models\At10s;
use App\Models\DummyAt10s;
use App\Models\TQs;
use App\Models\DummyTQs;
use App\Models\AllGradeParticipationTBL;
use App\Models\NasExamDetails; 

class CommonController extends Controller
{
    public function view_parti_g3_school()
    {
        // For Grade 3
        $nasExamDetails = NasExamDetails::select('state_cd','district_cd',DB::raw("count(CASE WHEN sch_loc_r_u= '1' THEN 'Rural' END) AS rural_location"),DB::raw("count(CASE WHEN sch_loc_r_u= '2' THEN 'Urban' END) AS urban_location"),DB::raw("count(CASE WHEN frame= 'F1' THEN 'Govt School' END) AS govt_school"),DB::raw("count(CASE WHEN frame= 'F2' THEN 'Govt Aided' END) AS govt_aided_school"),DB::raw("count(CASE WHEN frame= 'F3' THEN 'Private' END) AS private_school"),DB::raw("count(CASE WHEN frame= 'F4' THEN 'Central govt' END) AS central_govt_school"),DB::raw("count(sch_loc_r_u) AS total_school"))
            // ->where('state_cd','07')
            // ->where('district_cd','722')
            ->where('c3_nas_flag','1')
            ->groupBy('district_cd')
            ->groupBy('state_cd')
            // ->take(2)
            ->get();
        $newData = array();
        if(count($nasExamDetails)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',3)->delete();
            foreach($nasExamDetails as $nasDetailsCounts)
            {
                $newData['state_id'] = (int)$nasDetailsCounts->state_cd;
                $newData['district_id'] = (int)$nasDetailsCounts->district_cd;
                $newData['grade'] = 03;
                $newData['rural_location'] = $nasDetailsCounts->rural_location;
                $newData['urban_location'] = $nasDetailsCounts->urban_location;
                $newData['govt_school'] = $nasDetailsCounts->govt_school;
                $newData['govt_aided_school'] = $nasDetailsCounts->govt_aided_school;
                $newData['private_school'] = $nasDetailsCounts->private_school;
                $newData['central_govt_school'] = $nasDetailsCounts->central_govt_school;
                $newData['total_school'] = $nasDetailsCounts->total_school;

                // Get Social Group Count
                $at3sData = DummyAt3s::select('state_id','district_id',DB::raw("count(CASE WHEN at3_socgrp= '1' THEN 'SC' END) AS sc_social_group"),DB::raw("count(CASE WHEN at3_socgrp= '2' THEN 'OBC' END) AS obc_social_group"),DB::raw("count(CASE WHEN at3_socgrp= '3' THEN 'ST' END) AS st_social_group"),DB::raw("count(CASE WHEN at3_socgrp= '4' THEN 'GENERAL' END) AS general_social_group"),DB::raw("count(district_id) AS total_student"))
                    ->where('state_id',$nasDetailsCounts->state_cd)
                    ->where('district_id',$nasDetailsCounts->district_cd)
                    ->groupBy('district_id')
                    ->groupBy('state_id')
                    ->first();

                $newData['total_student'] = isset($at3sData->total_student)?$at3sData->total_student:0;
                $newData['sc_social_group'] = isset($at3sData->sc_social_group)?$at3sData->sc_social_group:0;
                $newData['obc_social_group'] = isset($at3sData->obc_social_group)?$at3sData->obc_social_group:0;
                $newData['st_social_group'] = isset($at3sData->st_social_group)?$at3sData->st_social_group:0;
                $newData['general_social_group'] = isset($at3sData->general_social_group)?$at3sData->general_social_group:0;

                // Get Total no of Teachers in particular district
                $teacherData = DummyTQs::select('state_id','district_id',DB::raw("count(district_id) AS total_teacher"))
                    ->where('state_id',$nasDetailsCounts->state_cd)
                    ->where('district_id',$nasDetailsCounts->district_cd)
                    ->where('tq_grade','03')
                    ->groupBy('district_id')
                    ->groupBy('state_id')
                    ->first();

                $newData['total_teacher'] = isset($teacherData->total_teacher)?$teacherData->total_teacher:0;

                // Get gender division in particular district
                $at3sGender = DB::table('dummy_at3s')
                    ->select('dummy_at3s.state_id','dummy_at3s.district_id',DB::raw("count(CASE WHEN pq_gender= '1' THEN 'Boys' END) AS male_gender"),DB::raw("count(CASE WHEN pq_gender= '2' THEN 'Girls' END) AS female_gender"))
                    ->leftJoin('p_qs','p_qs.pq_bar','=','dummy_at3s.at3_parent_bar')
                    ->where('dummy_at3s.state_id',$nasDetailsCounts->state_cd)
                    ->where('dummy_at3s.district_id',$nasDetailsCounts->district_cd)
                    ->groupBy('dummy_at3s.district_id')
                    ->groupBy('dummy_at3s.state_id')
                    ->first();
                $newData['male_gender'] = isset($at3sGender->male_gender)?$at3sGender->male_gender:0;
                $newData['female_gender'] = isset($at3sGender->female_gender)?$at3sGender->female_gender:0;

                $data[]=$newData;
            }
            
        }       
        
        // For Grade 5
        $nasExamDetails5Grade = NasExamDetails::select('state_cd','district_cd',DB::raw("count(CASE WHEN sch_loc_r_u= '1' THEN 'Rural' END) AS rural_location"),DB::raw("count(CASE WHEN sch_loc_r_u= '2' THEN 'Urban' END) AS urban_location"),DB::raw("count(CASE WHEN frame= 'F1' THEN 'Govt School' END) AS govt_school"),DB::raw("count(CASE WHEN frame= 'F2' THEN 'Govt Aided' END) AS govt_aided_school"),DB::raw("count(CASE WHEN frame= 'F3' THEN 'Private' END) AS private_school"),DB::raw("count(CASE WHEN frame= 'F4' THEN 'Central govt' END) AS central_govt_school"),DB::raw("count(sch_loc_r_u) AS total_school"))
            // ->where('state_cd','07')
            // ->where('district_cd','722')
            ->where('c5_nas_flag','1')
            ->groupBy('district_cd')
            ->groupBy('state_cd')
            // ->take(2)
            ->get();
        $newData5Grade = array();
        if(count($nasExamDetails5Grade)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',5)->delete();
            foreach($nasExamDetails5Grade as $nasDetails5thCounts)
            {
                $newData5Grade['state_id'] = (int)$nasDetails5thCounts->state_cd;
                $newData5Grade['district_id'] = (int)$nasDetails5thCounts->district_cd;
                $newData5Grade['grade'] = 05;
                $newData5Grade['rural_location'] = $nasDetails5thCounts->rural_location;
                $newData5Grade['urban_location'] = $nasDetails5thCounts->urban_location;
                $newData5Grade['govt_school'] = $nasDetails5thCounts->govt_school;
                $newData5Grade['govt_aided_school'] = $nasDetails5thCounts->govt_aided_school;
                $newData5Grade['private_school'] = $nasDetails5thCounts->private_school;
                $newData5Grade['central_govt_school'] = $nasDetails5thCounts->central_govt_school;
                $newData5Grade['total_school'] = $nasDetails5thCounts->total_school;

                // Get Social Group Count
                $at5sData = DummyAt5s::select('state_id','district_id',DB::raw("count(CASE WHEN at5_socgrp= '1' THEN 'SC' END) AS sc_social_group"),DB::raw("count(CASE WHEN at5_socgrp= '2' THEN 'OBC' END) AS obc_social_group"),DB::raw("count(CASE WHEN at5_socgrp= '3' THEN 'ST' END) AS st_social_group"),DB::raw("count(CASE WHEN at5_socgrp= '4' THEN 'GENERAL' END) AS general_social_group"),DB::raw("count(district_id) AS total_student"))
                    ->where('state_id',$nasDetails5thCounts->state_cd)
                    ->where('district_id',$nasDetails5thCounts->district_cd)
                    ->groupBy('district_id')
                    ->groupBy('state_id')
                    ->first();

                $newData5Grade['total_student'] = isset($at5sData->total_student)?$at5sData->total_student:0;
                $newData5Grade['sc_social_group'] = isset($at5sData->sc_social_group)?$at5sData->sc_social_group:0;
                $newData5Grade['obc_social_group'] = isset($at5sData->obc_social_group)?$at5sData->obc_social_group:0;
                $newData5Grade['st_social_group'] = isset($at5sData->st_social_group)?$at5sData->st_social_group:0;
                $newData5Grade['general_social_group'] = isset($at5sData->general_social_group)?$at5sData->general_social_group:0;

                // Get Total no of Teachers in particular district
                $teacher5sData = DummyTQs::select('state_id','district_id',DB::raw("count(district_id) AS total_teacher"))
                    ->where('state_id',$nasDetails5thCounts->state_cd)
                    ->where('district_id',$nasDetails5thCounts->district_cd)
                    ->where('tq_grade','05')
                    ->groupBy('district_id')
                    ->groupBy('state_id')
                    ->first();

                $newData5Grade['total_teacher'] = isset($teacher5sData->total_teacher)?$teacher5sData->total_teacher:0;

                // Get gender division in particular district
                $at5sGender = DB::table('dummy_at5s')
                    ->select('dummy_at5s.state_id','dummy_at5s.district_id',DB::raw("count(CASE WHEN pq_gender= '1' THEN 'Boys' END) AS male_gender"),DB::raw("count(CASE WHEN pq_gender= '2' THEN 'Girls' END) AS female_gender"))
                    ->leftJoin('p_qs','p_qs.pq_bar','=','dummy_at5s.at5_parent_bar')
                    ->where('dummy_at5s.state_id',$nasDetails5thCounts->state_cd)
                    ->where('dummy_at5s.district_id',$nasDetails5thCounts->district_cd)
                    ->groupBy('dummy_at5s.district_id')
                    ->groupBy('dummy_at5s.state_id')
                    ->first();
                $newData5Grade['male_gender'] = isset($at5sGender->male_gender)?$at5sGender->male_gender:0;
                $newData5Grade['female_gender'] = isset($at5sGender->female_gender)?$at5sGender->female_gender:0;

                $data5thGrade[]=$newData5Grade;
            }
            
        }             

        // For Grade 8th
        $nasExamDetails8Grade = NasExamDetails::select('state_cd','district_cd',DB::raw("count(CASE WHEN sch_loc_r_u= '1' THEN 'Rural' END) AS rural_location"),DB::raw("count(CASE WHEN sch_loc_r_u= '2' THEN 'Urban' END) AS urban_location"),DB::raw("count(CASE WHEN frame= 'F1' THEN 'Govt School' END) AS govt_school"),DB::raw("count(CASE WHEN frame= 'F2' THEN 'Govt Aided' END) AS govt_aided_school"),DB::raw("count(CASE WHEN frame= 'F3' THEN 'Private' END) AS private_school"),DB::raw("count(CASE WHEN frame= 'F4' THEN 'Central govt' END) AS central_govt_school"),DB::raw("count(sch_loc_r_u) AS total_school"))
            // ->where('state_cd','07')
            // ->where('district_cd','722')
            ->where('c8_nas_flag','1')
            ->groupBy('district_cd')
            ->groupBy('state_cd')
            // ->take(2)
            ->get();
        $newData8Grade = array();
        if(count($nasExamDetails8Grade)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',8)->delete();
            foreach($nasExamDetails8Grade as $nasDetails8thCounts)
            {
                $newData8Grade['state_id'] = (int)$nasDetails8thCounts->state_cd;
                $newData8Grade['district_id'] = (int)$nasDetails8thCounts->district_cd;
                $newData8Grade['grade'] = (int)'08';
                $newData8Grade['rural_location'] = $nasDetails8thCounts->rural_location;
                $newData8Grade['urban_location'] = $nasDetails8thCounts->urban_location;
                $newData8Grade['govt_school'] = $nasDetails8thCounts->govt_school;
                $newData8Grade['govt_aided_school'] = $nasDetails8thCounts->govt_aided_school;
                $newData8Grade['private_school'] = $nasDetails8thCounts->private_school;
                $newData8Grade['central_govt_school'] = $nasDetails8thCounts->central_govt_school;
                $newData8Grade['total_school'] = $nasDetails8thCounts->total_school;

                // Get Social Group Count
                $at8sData = DummyAt8s::select('state_id','district_id',DB::raw("count(CASE WHEN at8_socgrp= '1' THEN 'SC' END) AS sc_social_group"),DB::raw("count(CASE WHEN at8_socgrp= '2' THEN 'OBC' END) AS obc_social_group"),DB::raw("count(CASE WHEN at8_socgrp= '3' THEN 'ST' END) AS st_social_group"),DB::raw("count(CASE WHEN at8_socgrp= '4' THEN 'GENERAL' END) AS general_social_group"),DB::raw("count(district_id) AS total_student"))
                    ->where('state_id',$nasDetails8thCounts->state_cd)
                    ->where('district_id',$nasDetails8thCounts->district_cd)
                    ->groupBy('district_id')
                    ->groupBy('state_id')
                    ->first();

                $newData8Grade['total_student'] = isset($at8sData->total_student)?$at8sData->total_student:0;
                $newData8Grade['sc_social_group'] = isset($at8sData->sc_social_group)?$at8sData->sc_social_group:0;
                $newData8Grade['obc_social_group'] = isset($at8sData->obc_social_group)?$at8sData->obc_social_group:0;
                $newData8Grade['st_social_group'] = isset($at8sData->st_social_group)?$at8sData->st_social_group:0;
                $newData8Grade['general_social_group'] = isset($at8sData->general_social_group)?$at8sData->general_social_group:0;

                // Get Total no of Teachers in particular district
                $teacher8sData = DummyTQs::select('state_id','district_id',DB::raw("count(district_id) AS total_teacher"))
                    ->where('state_id',$nasDetails8thCounts->state_cd)
                    ->where('district_id',$nasDetails8thCounts->district_cd)
                    ->where('tq_grade','08')
                    ->groupBy('district_id')
                    ->groupBy('state_id')
                    ->first();

                $newData8Grade['total_teacher'] = isset($teacher8sData->total_teacher)?$teacher8sData->total_teacher:0;

                // Get gender division in particular district
                $at8sGender = DB::table('dummy_at8')
                    ->select('dummy_at8.state_id','dummy_at8.district_id',DB::raw("count(CASE WHEN pq_gender= '1' THEN 'Boys' END) AS male_gender"),DB::raw("count(CASE WHEN pq_gender= '2' THEN 'Girls' END) AS female_gender"))
                    ->leftJoin('p_qs','p_qs.pq_bar','=','dummy_at8.at8_parent_bar')
                    ->where('dummy_at8.state_id',$nasDetails8thCounts->state_cd)
                    ->where('dummy_at8.district_id',$nasDetails8thCounts->district_cd)
                    ->groupBy('dummy_at8.district_id')
                    ->groupBy('dummy_at8.state_id')
                    ->first();
                $newData8Grade['male_gender'] = isset($at8sGender->male_gender)?$at8sGender->male_gender:0;
                $newData8Grade['female_gender'] = isset($at8sGender->female_gender)?$at8sGender->female_gender:0;
                    // echo "<pre>";
                    // dd($at3s);
                $data8thGrade[]=$newData8Grade;
            }
            
        }       

        // For Grade 10

        $nasExamDetails10Grade = NasExamDetails::select('state_cd','district_cd',DB::raw("count(CASE WHEN sch_loc_r_u= '1' THEN 'Rural' END) AS rural_location"),DB::raw("count(CASE WHEN sch_loc_r_u= '2' THEN 'Urban' END) AS urban_location"),DB::raw("count(CASE WHEN frame= 'F1' THEN 'Govt School' END) AS govt_school"),DB::raw("count(CASE WHEN frame= 'F2' THEN 'Govt Aided' END) AS govt_aided_school"),DB::raw("count(CASE WHEN frame= 'F3' THEN 'Private' END) AS private_school"),DB::raw("count(CASE WHEN frame= 'F4' THEN 'Central govt' END) AS central_govt_school"),DB::raw("count(sch_loc_r_u) AS total_school"))
            // ->where('state_cd','07')
            // ->where('district_cd','722')
            ->where('c10_nas_flag','1')
            ->groupBy('district_cd')
            ->groupBy('state_cd')
            // ->take(2)
            ->get();
        $newData10Grade = array();
        if(count($nasExamDetails10Grade)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',10)->delete();
            foreach($nasExamDetails10Grade as $nasDetails10thCounts)
            {
                $newData10Grade['state_id'] = (int)$nasDetails10thCounts->state_cd;
                $newData10Grade['district_id'] = (int)$nasDetails10thCounts->district_cd;
                $newData10Grade['grade'] = (int)'10';
                $newData10Grade['rural_location'] = $nasDetails10thCounts->rural_location;
                $newData10Grade['urban_location'] = $nasDetails10thCounts->urban_location;
                $newData10Grade['govt_school'] = $nasDetails10thCounts->govt_school;
                $newData10Grade['govt_aided_school'] = $nasDetails10thCounts->govt_aided_school;
                $newData10Grade['private_school'] = $nasDetails10thCounts->private_school;
                $newData10Grade['central_govt_school'] = $nasDetails10thCounts->central_govt_school;
                $newData10Grade['total_school'] = $nasDetails10thCounts->total_school;

                // Get Social Group Count
                $at10sData = DummyAt10s::select('state_id','district_id',DB::raw("count(CASE WHEN at1_socgrp = '1' THEN 'SC' END) AS sc_social_group"),DB::raw("count(CASE WHEN at1_socgrp = '2' THEN 'OBC' END) AS obc_social_group"),DB::raw("count(CASE WHEN at1_socgrp = '3' THEN 'ST' END) AS st_social_group"),DB::raw("count(CASE WHEN at1_socgrp = '4' THEN 'GENERAL' END) AS general_social_group"),DB::raw("count(district_id) AS total_student"))
                    ->where('state_id',$nasDetails10thCounts->state_cd)
                    ->where('district_id',$nasDetails10thCounts->district_cd)
                    ->groupBy('district_id')
                    ->groupBy('state_id')
                    ->first();

                $newData10Grade['total_student'] = isset($at10sData->total_student)?$at10sData->total_student:0;
                $newData10Grade['sc_social_group'] = isset($at10sData->sc_social_group)?$at10sData->sc_social_group:0;
                $newData10Grade['obc_social_group'] = isset($at10sData->obc_social_group)?$at10sData->obc_social_group:0;
                $newData10Grade['st_social_group'] = isset($at10sData->st_social_group)?$at10sData->st_social_group:0;
                $newData10Grade['general_social_group'] = isset($at10sData->general_social_group)?$at10sData->general_social_group:0;

                // Get Total no of Teachers in particular district
                $teacher10sData = DummyTQs::select('state_id','district_id',DB::raw("count(district_id) AS total_teacher"))
                    ->where('state_id',$nasDetails10thCounts->state_cd)
                    ->where('district_id',$nasDetails10thCounts->district_cd)
                    ->where('tq_grade','10')
                    ->groupBy('district_id')
                    ->groupBy('state_id')
                    ->first();

                $newData10Grade['total_teacher'] = isset($teacher10sData->total_teacher)?$teacher10sData->total_teacher:0;

                // Get gender division in particular district
                $at10sGender = DB::table('dummy_at10s')
                    ->select('dummy_at10s.state_id','dummy_at10s.district_id',DB::raw("count(CASE WHEN pq_gender= '1' THEN 'Boys' END) AS male_gender"),DB::raw("count(CASE WHEN pq_gender= '2' THEN 'Girls' END) AS female_gender"))
                    ->leftJoin('p_qs','p_qs.pq_bar','=','dummy_at10s.at1_parent_bar')
                    ->where('dummy_at10s.state_id',$nasDetails10thCounts->state_cd)
                    ->where('dummy_at10s.district_id',$nasDetails10thCounts->district_cd)
                    ->groupBy('dummy_at10s.district_id')
                    ->groupBy('dummy_at10s.state_id')
                    ->first();
                $newData10Grade['male_gender'] = isset($at10sGender->male_gender)?$at10sGender->male_gender:0;
                $newData10Grade['female_gender'] = isset($at10sGender->female_gender)?$at10sGender->female_gender:0;
                    // echo "<pre>";
                    // dd($at3s);
                $data10thGrade[]=$newData10Grade;
            }
            
        }  

        $finalData = array_merge($data,$data5thGrade,$data8thGrade,$data10thGrade);
        return AllGradeParticipationTBL::insert($finalData);
        // dd($data);



        // $at3s = DB::table('dummy_at3s')->get();
        // foreach ($at3s as $key => $value) {

        //     $string = (string)$value->at3_bar;
        //     $length = strlen($string);
        //     for($i=0; $i<$length; $i++){
        //         if($i==1){
        //             $string[$i] = 1;
        //         }
        //         else
        //         {
        //             $string[$i];
        //         }

        //        }
             

        //     $pq = DB::table('p_qs')->where('pq_bar',(int)$string)->first();
        //     if($pq!=null)
        //     {
        //         echo "<pre>";
        //         // echo $pq->state_id ."===".$pq->district_id;
        //          $nas_exam_details = DB::table('nas_exam_details')
        //                              ->where('c3_nas_flag',1)
        //                             //  ->where('district_cd',$value->district_id)
        //                             //  ->where('state_cd',$value->state_id)
        //                              ->get();

        //         foreach ($nas_exam_details as $key1 => $v) {
        //             echo "<pre>";
        //             echo " State ID ".$value->state_id;
        //             echo " District ID ".$value->district_id;
        //             echo " Frame ".$v->frame;
        //             echo " Grade ".$value->at3_grade;
        //             echo " school Udise Code ". $v->udise_sch_code;
        //             echo " School Location ".$v->sch_loc_r_u;
                    
        //         }
        //         dd($nas_exam_details);
        //         // echo $pq->pq_bar ."==".$nas_exam_details;
        //     }
           

        // }
        
        // dd($at3s);
    }
    // function ParticipationRowData($row)
    // {
    //     return [
    //         'state_id'   => $row[0],
    //         'district_id'   => $row[1], 
    //         'grade' => $row[2],
    //         'rural_location'   => $row[3],
    //         'urban_location' => $row[4],
    //         'govt_school'  => $row[5], 
    //         'govt_aided_school' => $row[6], 
    //         'private_school'=> $row[7],
    //         'central_govt_school'   => $row[8], 
    //         'total_school'   => $row[9],
    //         'total_student'   => $row[10], 
    //         'sc_social_group'   => $row[11], 
    //         'obc_social_group'   => $row[12], 
    //         'st_social_group'   => $row[13], 
    //         'general_social_group'   => $row[14], 
    //         'total_teacher'   => $row[15], 
    //         'male_gender'   => $row[16], 
    //         'female_gender'   => $row[17]
    //     ];
    // }

}
