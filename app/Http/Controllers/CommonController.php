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

        $at3GradeData = DB::table('dummy_at3s')
            ->select('nas_exam_details.state_cd','nas_exam_details.district_cd',DB::raw("round((count(CASE 
            WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END)::decimal/count(dummy_at3s.id))*100) AS rural_location"),DB::raw("round((count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END)::decimal/count(dummy_at3s.id))*100) AS urban_location"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END)::decimal/count(dummy_at3s.id))*100) AS govt_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END)::decimal/count(dummy_at3s.id))*100) AS govt_aided_school"),DB::raw("round((count(CASE 
            WHEN nas_exam_details.frame= 'F3' THEN 'Private' END)::decimal/count(dummy_at3s.id))*100) AS private_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt'
            END)::decimal/count(dummy_at3s.id))*100) AS central_govt_school"),DB::raw("count(DISTINCT nas_exam_details.udise_sch_code ) AS total_school"),DB::raw("round((count(CASE 
            WHEN dummy_at3s.at3_socgrp= '1' THEN 'SC' END)::decimal/count(dummy_at3s.id))*100) AS sc_social_group"),DB::raw("round((count(CASE WHEN dummy_at3s.at3_socgrp= '2' THEN 'OBC' END)::decimal/count(dummy_at3s.id))*100) AS obc_social_group"),DB::raw("round((count(CASE 
            WHEN dummy_at3s.at3_socgrp= '3' THEN 'ST' END)::decimal/count(dummy_at3s.id))*100) AS st_social_group"),DB::raw("round((count(CASE WHEN dummy_at3s.at3_socgrp= '4' THEN 'General' END)::decimal/count(dummy_at3s.id))*100) AS general_social_group"),DB::raw("round((count(CASE 
            WHEN p_qs.pq_gender= '1' THEN 'Boys' END)::decimal/count(dummy_at3s.id))*100) AS male_gender"),DB::raw("round((count(CASE WHEN p_qs.pq_gender= '2' THEN 'Girls' END)::decimal/count(dummy_at3s.id))*100) AS female_gender"),DB::raw("count(dummy_at3s.id)  AS total_student"))
            ->leftJoin('nas_exam_details','nas_exam_details.udise_sch_code','=','dummy_at3s.at3_udise')
            ->leftJoin('p_qs','p_qs.pq_bar','=','dummy_at3s.at3_parent_bar')
            ->where('nas_exam_details.district_cd','!=','')
            ->groupBy('nas_exam_details.state_cd')
            ->groupBy('nas_exam_details.district_cd')
            ->get();

        $newData = array();
        if(count($at3GradeData)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',3)->delete();
            foreach($at3GradeData as $at3GradeCounts)
            {
                $newData['state_id'] = (int)$at3GradeCounts->state_cd;
                $newData['district_id'] = (int)$at3GradeCounts->district_cd;
                $newData['grade'] = 03;

                $newData['rural_location'] = isset($at3GradeCounts->rural_location)?$at3GradeCounts->rural_location:0;
                $newData['urban_location'] = isset($at3GradeCounts->urban_location)?$at3GradeCounts->urban_location:0;
                $newData['govt_school'] = isset($at3GradeCounts->govt_school)?$at3GradeCounts->govt_school:0;
                $newData['govt_aided_school'] = isset($at3GradeCounts->govt_aided_school)?$at3GradeCounts->govt_aided_school:0;
                $newData['private_school'] = isset($at3GradeCounts->private_school)?$at3GradeCounts->private_school:0;
                $newData['central_govt_school'] = isset($at3GradeCounts->central_govt_school)?$at3GradeCounts->central_govt_school:0;
                $newData['total_school'] = isset($at3GradeCounts->total_school)?$at3GradeCounts->total_school:0;

                $newData['total_student'] = isset($at3GradeCounts->total_student)?$at3GradeCounts->total_student:0;
                $newData['sc_social_group'] = isset($at3GradeCounts->sc_social_group)?$at3GradeCounts->sc_social_group:0;
                $newData['obc_social_group'] = isset($at3GradeCounts->obc_social_group)?$at3GradeCounts->obc_social_group:0;
                $newData['st_social_group'] = isset($at3GradeCounts->st_social_group)?$at3GradeCounts->st_social_group:0;
                $newData['general_social_group'] = isset($at3GradeCounts->general_social_group)?$at3GradeCounts->general_social_group:0;

                // Get Total no of Teachers in particular district
                $nasExamData = NasExamDetails::select('udise_sch_code')
                    ->where('district_cd',$at3GradeCounts->district_cd)
                    ->pluck('udise_sch_code')->toArray();

                $teacherData = DummyTQs::select('id')
                    ->whereIn('tq_udise',$nasExamData)
                    ->where('tq_grade','03')
                    ->get();

                $newData['total_teacher'] = isset($teacherData)?count($teacherData):0;
                $newData['male_gender'] = isset($at3GradeCounts->male_gender)?$at3GradeCounts->male_gender:0;
                $newData['female_gender'] = isset($at3GradeCounts->female_gender)?$at3GradeCounts->female_gender:0;

                $data[]=$newData;
            }
            
        }       
        // For Grade 5

        $at5GradeData = DB::table('dummy_at5s')
            ->select('nas_exam_details.state_cd','nas_exam_details.district_cd',DB::raw("round((count(CASE 
            WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END)::decimal/count(dummy_at5s.id))*100) AS rural_location"),DB::raw("round((count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END)::decimal/count(dummy_at5s.id))*100) AS urban_location"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END)::decimal/count(dummy_at5s.id))*100) AS govt_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END)::decimal/count(dummy_at5s.id))*100) AS govt_aided_school"),DB::raw("round((count(CASE 
            WHEN nas_exam_details.frame= 'F3' THEN 'Private' END)::decimal/count(dummy_at5s.id))*100) AS private_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt'
            END)::decimal/count(dummy_at5s.id))*100) AS central_govt_school"),DB::raw("count(DISTINCT nas_exam_details.udise_sch_code ) AS total_school"),DB::raw("round((count(CASE 
            WHEN dummy_at5s.at5_socgrp= '1' THEN 'SC' END)::decimal/count(dummy_at5s.id))*100) AS sc_social_group"),DB::raw("round((count(CASE WHEN dummy_at5s.at5_socgrp= '2' THEN 'OBC' END)::decimal/count(dummy_at5s.id))*100) AS obc_social_group"),DB::raw("round((count(CASE 
            WHEN dummy_at5s.at5_socgrp= '3' THEN 'ST' END)::decimal/count(dummy_at5s.id))*100) AS st_social_group"),DB::raw("round((count(CASE WHEN dummy_at5s.at5_socgrp= '4' THEN 'General' END)::decimal/count(dummy_at5s.id))*100) AS general_social_group"),DB::raw("round((count(CASE 
            WHEN p_qs.pq_gender= '1' THEN 'Boys' END)::decimal/count(dummy_at5s.id))*100) AS male_gender"),DB::raw("round((count(CASE WHEN p_qs.pq_gender= '2' THEN 'Girls' END)::decimal/count(dummy_at5s.id))*100) AS female_gender"),DB::raw("count(dummy_at5s.id)  AS total_student"))
            ->leftJoin('nas_exam_details','nas_exam_details.udise_sch_code','=','dummy_at5s.at5_udise')
            ->leftJoin('p_qs','p_qs.pq_bar','=','dummy_at5s.at5_parent_bar')
            ->where('nas_exam_details.district_cd','!=','')
            ->groupBy('nas_exam_details.state_cd')
            ->groupBy('nas_exam_details.district_cd')
            ->get();

        $newData5Grade = array();
        if(count($at5GradeData)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',5)->delete();
            foreach($at5GradeData as $nasDetails5thCounts)
            {
                $newData5Grade['state_id'] = (int)$nasDetails5thCounts->state_cd;
                $newData5Grade['district_id'] = (int)$nasDetails5thCounts->district_cd;
                $newData5Grade['grade'] = 05;
                // Get Social Group Count
                    
                $newData5Grade['rural_location'] = isset($nasDetails5thCounts->rural_location)?$nasDetails5thCounts->rural_location:0;
                $newData5Grade['urban_location'] = isset($nasDetails5thCounts->urban_location)?$nasDetails5thCounts->urban_location:0;
                $newData5Grade['govt_school'] = isset($nasDetails5thCounts->govt_school)?$nasDetails5thCounts->govt_school:0;
                $newData5Grade['govt_aided_school'] = isset($nasDetails5thCounts->govt_aided_school)?$nasDetails5thCounts->govt_aided_school:0;
                $newData5Grade['private_school'] = isset($nasDetails5thCounts->private_school)?$nasDetails5thCounts->private_school:0;
                $newData5Grade['central_govt_school'] = isset($nasDetails5thCounts->central_govt_school)?$nasDetails5thCounts->central_govt_school:0;
                $newData5Grade['total_school'] = isset($nasDetails5thCounts->total_school)?$nasDetails5thCounts->total_school:0;

                $newData5Grade['total_student'] = isset($nasDetails5thCounts->total_student)?$nasDetails5thCounts->total_student:0;
                $newData5Grade['sc_social_group'] = isset($nasDetails5thCounts->sc_social_group)?$nasDetails5thCounts->sc_social_group:0;
                $newData5Grade['obc_social_group'] = isset($nasDetails5thCounts->obc_social_group)?$nasDetails5thCounts->obc_social_group:0;
                $newData5Grade['st_social_group'] = isset($nasDetails5thCounts->st_social_group)?$nasDetails5thCounts->st_social_group:0;
                $newData5Grade['general_social_group'] = isset($nasDetails5thCounts->general_social_group)?$nasDetails5thCounts->general_social_group:0;

                // Get Total no of Teachers in particular district

                $nasExamData5 = NasExamDetails::select('udise_sch_code')
                    ->where('district_cd',$nasDetails5thCounts->district_cd)
                    ->pluck('udise_sch_code')->toArray();

                $teacher5sData = DummyTQs::select('id')
                    ->whereIn('tq_udise',$nasExamData5)
                    ->where('tq_grade','05')
                    ->get();

                $newData5Grade['total_teacher'] = isset($teacher5sData)?count($teacher5sData):0;
                // Get gender division in particular district
                $newData5Grade['male_gender'] = isset($nasDetails5thCounts->male_gender)?$nasDetails5thCounts->male_gender:0;
                $newData5Grade['female_gender'] = isset($nasDetails5thCounts->female_gender)?$nasDetails5thCounts->female_gender:0;

                $data5thGrade[]=$newData5Grade;
            }
            
        }             
        
        // For Grade 8th

        $at8GradeData = DB::table('dummy_at8')
            ->select('nas_exam_details.state_cd','nas_exam_details.district_cd',DB::raw("round((count(CASE 
            WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END)::decimal/count(dummy_at8.id))*100) AS rural_location"),DB::raw("round((count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END)::decimal/count(dummy_at8.id))*100) AS urban_location"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END)::decimal/count(dummy_at8.id))*100) AS govt_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END)::decimal/count(dummy_at8.id))*100) AS govt_aided_school"),DB::raw("round((count(CASE 
            WHEN nas_exam_details.frame= 'F3' THEN 'Private' END)::decimal/count(dummy_at8.id))*100) AS private_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt'
            END)::decimal/count(dummy_at8.id))*100) AS central_govt_school"),DB::raw("count(DISTINCT nas_exam_details.udise_sch_code ) AS total_school"),DB::raw("round((count(CASE 
            WHEN dummy_at8.at8_socgrp= '1' THEN 'SC' END)::decimal/count(dummy_at8.id))*100) AS sc_social_group"),DB::raw("round((count(CASE WHEN dummy_at8.at8_socgrp= '2' THEN 'OBC' END)::decimal/count(dummy_at8.id))*100) AS obc_social_group"),DB::raw("round((count(CASE 
            WHEN dummy_at8.at8_socgrp= '3' THEN 'ST' END)::decimal/count(dummy_at8.id))*100) AS st_social_group"),DB::raw("round((count(CASE WHEN dummy_at8.at8_socgrp= '4' THEN 'General' END)::decimal/count(dummy_at8.id))*100) AS general_social_group"),DB::raw("round((count(CASE 
            WHEN p_qs.pq_gender= '1' THEN 'Boys' END)::decimal/count(dummy_at8.id))*100) AS male_gender"),DB::raw("round((count(CASE WHEN p_qs.pq_gender= '2' THEN 'Girls' END)::decimal/count(dummy_at8.id))*100) AS female_gender"),DB::raw("count(dummy_at8.id)  AS total_student"))
            ->leftJoin('nas_exam_details','nas_exam_details.udise_sch_code','=','dummy_at8.at8_udise')
            ->leftJoin('p_qs','p_qs.pq_bar','=','dummy_at8.at8_parent_bar')
            ->where('nas_exam_details.district_cd','!=','')
            ->groupBy('nas_exam_details.state_cd')
            ->groupBy('nas_exam_details.district_cd')
            ->get();


        $newData8Grade = array();
        if(count($at8GradeData)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',8)->delete();
            foreach($at8GradeData as $nasDetails8thCounts)
            {
                $newData8Grade['state_id'] = (int)$nasDetails8thCounts->state_cd;
                $newData8Grade['district_id'] = (int)$nasDetails8thCounts->district_cd;
                $newData8Grade['grade'] = (int)'08';

                // Get Social Group Count
   
                $newData8Grade['rural_location'] = isset($nasDetails8thCounts->rural_location)?$nasDetails8thCounts->rural_location:0;
                $newData8Grade['urban_location'] = isset($nasDetails8thCounts->urban_location)?$nasDetails8thCounts->urban_location:0;
                $newData8Grade['govt_school'] = isset($nasDetails8thCounts->govt_school)?$nasDetails8thCounts->govt_school:0;
                $newData8Grade['govt_aided_school'] = isset($nasDetails8thCounts->govt_aided_school)?$nasDetails8thCounts->govt_aided_school:0;
                $newData8Grade['private_school'] = isset($nasDetails8thCounts->private_school)?$nasDetails8thCounts->private_school:0;
                $newData8Grade['central_govt_school'] = isset($nasDetails8thCounts->central_govt_school)?$nasDetails8thCounts->central_govt_school:0;
                $newData8Grade['total_school'] = isset($nasDetails8thCounts->total_school)?$nasDetails8thCounts->total_school:0;

                $newData8Grade['total_student'] = isset($nasDetails8thCounts->total_student)?$nasDetails8thCounts->total_student:0;
                $newData8Grade['sc_social_group'] = isset($nasDetails8thCounts->sc_social_group)?$nasDetails8thCounts->sc_social_group:0;
                $newData8Grade['obc_social_group'] = isset($nasDetails8thCounts->obc_social_group)?$nasDetails8thCounts->obc_social_group:0;
                $newData8Grade['st_social_group'] = isset($nasDetails8thCounts->st_social_group)?$nasDetails8thCounts->st_social_group:0;
                $newData8Grade['general_social_group'] = isset($nasDetails8thCounts->general_social_group)?$nasDetails8thCounts->general_social_group:0;

                // Get Total no of Teachers in particular district

                $nasExamData8 = NasExamDetails::select('udise_sch_code')
                    ->where('district_cd',$nasDetails8thCounts->district_cd)
                    ->pluck('udise_sch_code')->toArray();

                $teacher8sData = DummyTQs::select('id')
                    ->whereIn('tq_udise',$nasExamData8)
                    ->where('tq_grade','08')
                    ->get();

                $newData8Grade['total_teacher'] = isset($teacher8sData)?count($teacher8sData):0;


                // Get gender division in particular district

                $newData8Grade['male_gender'] = isset($nasDetails8thCounts->male_gender)?$nasDetails8thCounts->male_gender:0;
                $newData8Grade['female_gender'] = isset($nasDetails8thCounts->female_gender)?$nasDetails8thCounts->female_gender:0;
                $data8thGrade[]=$newData8Grade;
            }
            
        }       
        
        // For Grade 10

        $at10GradeData = DB::table('dummy_at10s')
            ->select('nas_exam_details.state_cd','nas_exam_details.district_cd',DB::raw("round((count(CASE 
            WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END)::decimal/count(dummy_at10s.id))*100) AS rural_location"),DB::raw("round((count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END)::decimal/count(dummy_at10s.id))*100) AS urban_location"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END)::decimal/count(dummy_at10s.id))*100) AS govt_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END)::decimal/count(dummy_at10s.id))*100) AS govt_aided_school"),DB::raw("round((count(CASE 
            WHEN nas_exam_details.frame= 'F3' THEN 'Private' END)::decimal/count(dummy_at10s.id))*100) AS private_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt'
            END)::decimal/count(dummy_at10s.id))*100) AS central_govt_school"),DB::raw("count(DISTINCT nas_exam_details.udise_sch_code ) AS total_school"),DB::raw("round((count(CASE 
            WHEN dummy_at10s.at1_socgrp= '1' THEN 'SC' END)::decimal/count(dummy_at10s.id))*100) AS sc_social_group"),DB::raw("round((count(CASE WHEN dummy_at10s.at1_socgrp= '2' THEN 'OBC' END)::decimal/count(dummy_at10s.id))*100) AS obc_social_group"),DB::raw("round((count(CASE 
            WHEN dummy_at10s.at1_socgrp= '3' THEN 'ST' END)::decimal/count(dummy_at10s.id))*100) AS st_social_group"),DB::raw("round((count(CASE WHEN dummy_at10s.at1_socgrp= '4' THEN 'General' END)::decimal/count(dummy_at10s.id))*100) AS general_social_group"),DB::raw("round((count(CASE 
            WHEN p_qs.pq_gender= '1' THEN 'Boys' END)::decimal/count(dummy_at10s.id))*100) AS male_gender"),DB::raw("round((count(CASE WHEN p_qs.pq_gender= '2' THEN 'Girls' END)::decimal/count(dummy_at10s.id))*100) AS female_gender"),DB::raw("count(dummy_at10s.id)  AS total_student"))
            ->leftJoin('nas_exam_details','nas_exam_details.udise_sch_code','=','dummy_at10s.at1_udise')
            ->leftJoin('p_qs','p_qs.pq_bar','=','dummy_at10s.at1_parent_bar')
            ->where('nas_exam_details.district_cd','!=','')
            ->groupBy('nas_exam_details.state_cd')
            ->groupBy('nas_exam_details.district_cd')
            ->get();

        $newData10Grade = array();
        if(count($at10GradeData)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',10)->delete();
            foreach($at10GradeData as $nasDetails10thCounts)
            {
                $newData10Grade['state_id'] = (int)$nasDetails10thCounts->state_cd;
                $newData10Grade['district_id'] = (int)$nasDetails10thCounts->district_cd;
                $newData10Grade['grade'] = (int)'10';
                    
                $newData10Grade['rural_location'] = isset($nasDetails10thCounts->rural_location)?$nasDetails10thCounts->rural_location:0;
                $newData10Grade['urban_location'] = isset($nasDetails10thCounts->urban_location)?$nasDetails10thCounts->urban_location:0;
                $newData10Grade['govt_school'] = isset($nasDetails10thCounts->govt_school)?$nasDetails10thCounts->govt_school:0;
                $newData10Grade['govt_aided_school'] = isset($nasDetails10thCounts->govt_aided_school)?$nasDetails10thCounts->govt_aided_school:0;
                $newData10Grade['private_school'] = isset($nasDetails10thCounts->private_school)?$nasDetails10thCounts->private_school:0;
                $newData10Grade['central_govt_school'] = isset($nasDetails10thCounts->central_govt_school)?$nasDetails10thCounts->central_govt_school:0;
                $newData10Grade['total_school'] = isset($nasDetails10thCounts->total_school)?$nasDetails10thCounts->total_school:0;                

                $newData10Grade['total_student'] = isset($nasDetails10thCounts->total_student)?$nasDetails10thCounts->total_student:0;
                $newData10Grade['sc_social_group'] = isset($nasDetails10thCounts->sc_social_group)?$nasDetails10thCounts->sc_social_group:0;
                $newData10Grade['obc_social_group'] = isset($nasDetails10thCounts->obc_social_group)?$nasDetails10thCounts->obc_social_group:0;
                $newData10Grade['st_social_group'] = isset($nasDetails10thCounts->st_social_group)?$nasDetails10thCounts->st_social_group:0;
                $newData10Grade['general_social_group'] = isset($nasDetails10thCounts->general_social_group)?$nasDetails10thCounts->general_social_group:0;

                $nasExamData10 = NasExamDetails::select('udise_sch_code')
                    ->where('district_cd',$nasDetails10thCounts->district_cd)
                    ->pluck('udise_sch_code')->toArray();

                $teacher10sData = DummyTQs::select('id')
                    ->whereIn('tq_udise',$nasExamData10)
                    ->where('tq_grade','08')
                    ->get();

                $newData10Grade['total_teacher'] = isset($teacher10sData)?count($teacher10sData):0;
                $newData10Grade['male_gender'] = isset($nasDetails10thCounts->male_gender)?$nasDetails10thCounts->male_gender:0;
                $newData10Grade['female_gender'] = isset($nasDetails10thCounts->female_gender)?$nasDetails10thCounts->female_gender:0;

                $data10thGrade[]=$newData10Grade;
            }
            
        }  
        
        $finalData = array_merge($data,$data5thGrade,$data8thGrade,$data10thGrade);
        $msg = AllGradeParticipationTBL::insert($finalData);
        if($msg)
        {
            return "Process table successfully created.";
        }
        else
        {
            return "Something wrong.";
        }
    }
}
