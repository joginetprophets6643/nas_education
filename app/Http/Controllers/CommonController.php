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
use App\Models\AllGradeStateParticipationTBL;
use App\Models\AllGradeNationalParticipationTBL;
use App\Models\NasExamDetails; 

class CommonController extends Controller
{
    public function view_parti_g3_school()
    {
        /*************************************************************
         * Name: Sanjay Kumar
         * Desc: District Process data in all grade
         * Date: 24/12/2021
         * Start Here
         *************************************************************/
        // For Grade 3
        $at3GradeData = DB::table('at3s')
            ->select('nas_exam_details.state_cd','nas_exam_details.district_cd',DB::raw("round((count(CASE 
            WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END)::decimal/count(at3s.id))*100) AS rural_location"),DB::raw("round((count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END)::decimal/count(at3s.id))*100) AS urban_location"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END)::decimal/count(at3s.id))*100) AS govt_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END)::decimal/count(at3s.id))*100) AS govt_aided_school"),DB::raw("round((count(CASE 
            WHEN nas_exam_details.frame= 'F3' THEN 'Private' END)::decimal/count(at3s.id))*100) AS private_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt'
            END)::decimal/count(at3s.id))*100) AS central_govt_school"),DB::raw("count(DISTINCT nas_exam_details.udise_sch_code ) AS total_school"),DB::raw("round((count(CASE 
            WHEN at3s.at3_socgrp= '1' THEN 'SC' END)::decimal/count(at3s.id))*100) AS sc_social_group"),DB::raw("round((count(CASE WHEN at3s.at3_socgrp= '2' THEN 'OBC' END)::decimal/count(at3s.id))*100) AS obc_social_group"),DB::raw("round((count(CASE 
            WHEN at3s.at3_socgrp= '3' THEN 'ST' END)::decimal/count(at3s.id))*100) AS st_social_group"),DB::raw("round((count(CASE WHEN at3s.at3_socgrp= '4' THEN 'General' END)::decimal/count(at3s.id))*100) AS general_social_group"),DB::raw("round((count(CASE 
            WHEN p_qs.pq_gender= '1' THEN 'Boys' END)::decimal/count(at3s.id))*100) AS male_gender"),DB::raw("round((count(CASE WHEN p_qs.pq_gender= '2' THEN 'Girls' END)::decimal/count(at3s.id))*100) AS female_gender"),DB::raw("count(at3s.id)  AS total_student"),DB::raw("count(CASE WHEN at3s.at3_socgrp= '1' THEN 'SC' END) AS sc_social_group_count"),DB::raw("count(CASE WHEN at3s.at3_socgrp= '2' THEN 'OBC' END) AS obc_social_group_count"),DB::raw("count(CASE WHEN at3s.at3_socgrp= '3' THEN 'ST' END) AS st_social_group_count"),DB::raw("count(CASE WHEN at3s.at3_socgrp= '4' THEN 'GENERAL' END) AS general_social_group_count"),DB::raw("count(CASE WHEN pq_gender= '1' THEN 'Boys' END) AS male_gender_count"),DB::raw("count(CASE WHEN pq_gender= '2' THEN 'Girls' END) AS female_gender_count"),DB::raw("count(CASE WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END) AS rural_location_count"),DB::raw("count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END) AS urban_location_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END) AS govt_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END) AS govt_aided_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F3' THEN 'Private' END) AS private_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt' END) AS central_govt_school_count"))
            ->leftJoin('nas_exam_details','nas_exam_details.udise_sch_code','=','at3s.at3_udise')
            ->leftJoin('p_qs','p_qs.pq_bar','=','at3s.at3_parent_bar')
            ->where('nas_exam_details.district_cd','!=','')
            ->groupBy('nas_exam_details.state_cd')
            ->groupBy('nas_exam_details.district_cd')
            ->get();

        $newData = array();
        if(count($at3GradeData)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',3)->truncate();
            foreach($at3GradeData as $at3GradeCounts)
            {
                $newData['state_id'] = (int)$at3GradeCounts->state_cd;
                $newData['district_id'] = (int)$at3GradeCounts->district_cd;
                $newData['grade'] = 03;

                $newData['rural_location'] = isset($at3GradeCounts->rural_location)?$at3GradeCounts->rural_location:0;
                $newData['rural_location_count'] = isset($at3GradeCounts->rural_location_count)?$at3GradeCounts->rural_location_count:0;
                $newData['urban_location'] = isset($at3GradeCounts->urban_location)?$at3GradeCounts->urban_location:0;
                $newData['urban_location_count'] = isset($at3GradeCounts->urban_location_count)?$at3GradeCounts->urban_location_count:0;
                $newData['govt_school'] = isset($at3GradeCounts->govt_school)?$at3GradeCounts->govt_school:0;
                $newData['govt_school_count'] = isset($at3GradeCounts->govt_school_count)?$at3GradeCounts->govt_school_count:0;
                $newData['govt_aided_school'] = isset($at3GradeCounts->govt_aided_school)?$at3GradeCounts->govt_aided_school:0;
                $newData['govt_aided_school_count'] = isset($at3GradeCounts->govt_aided_school_count)?$at3GradeCounts->govt_aided_school_count:0;
                $newData['private_school'] = isset($at3GradeCounts->private_school)?$at3GradeCounts->private_school:0;
                $newData['private_school_count'] = isset($at3GradeCounts->private_school_count)?$at3GradeCounts->private_school_count:0;
                $newData['central_govt_school'] = isset($at3GradeCounts->central_govt_school)?$at3GradeCounts->central_govt_school:0;
                $newData['central_govt_school_count'] = isset($at3GradeCounts->central_govt_school_count)?$at3GradeCounts->central_govt_school_count:0;
                $newData['total_school'] = isset($at3GradeCounts->total_school)?$at3GradeCounts->total_school:0;

                $newData['total_student'] = isset($at3GradeCounts->total_student)?$at3GradeCounts->total_student:0;
                $newData['sc_social_group'] = isset($at3GradeCounts->sc_social_group)?$at3GradeCounts->sc_social_group:0;
                $newData['sc_social_group_count'] = isset($at3GradeCounts->sc_social_group_count)?$at3GradeCounts->sc_social_group_count:0;
                $newData['obc_social_group'] = isset($at3GradeCounts->obc_social_group)?$at3GradeCounts->obc_social_group:0;
                $newData['obc_social_group_count'] = isset($at3GradeCounts->obc_social_group_count)?$at3GradeCounts->obc_social_group_count:0;
                $newData['st_social_group'] = isset($at3GradeCounts->st_social_group)?$at3GradeCounts->st_social_group:0;
                $newData['st_social_group_count'] = isset($at3GradeCounts->st_social_group_count)?$at3GradeCounts->st_social_group_count:0;
                $newData['general_social_group'] = isset($at3GradeCounts->general_social_group)?$at3GradeCounts->general_social_group:0;
                $newData['general_social_group_count'] = isset($at3GradeCounts->general_social_group_count)?$at3GradeCounts->general_social_group_count:0;

                // Get Total no of Teachers in particular district
                $nasExamData = NasExamDetails::select('udise_sch_code')
                    ->where('district_cd',$at3GradeCounts->district_cd)
                    ->pluck('udise_sch_code')->toArray();

                $teacherData = TQs::select('id')
                    ->whereIn('tq_udise',$nasExamData)
                    ->where('tq_grade','03')
                    ->get();

                $newData['total_teacher'] = isset($teacherData)?count($teacherData):0;
                $newData['male_gender'] = isset($at3GradeCounts->male_gender)?$at3GradeCounts->male_gender:0;
                $newData['male_gender_count'] = isset($at3GradeCounts->male_gender_count)?$at3GradeCounts->male_gender_count:0;
                $newData['female_gender'] = isset($at3GradeCounts->female_gender)?$at3GradeCounts->female_gender:0;
                $newData['female_gender_count'] = isset($at3GradeCounts->female_gender_count)?$at3GradeCounts->female_gender_count:0;
                $newData['created_at'] = now();
                $newData['updated_at'] = now();

                $data[]=$newData;
            }
            
        }   
   
        // For Grade 5
        $at5GradeData = DB::table('at5s')
            ->select('nas_exam_details.state_cd','nas_exam_details.district_cd',DB::raw("round((count(CASE 
            WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END)::decimal/count(at5s.id))*100) AS rural_location"),DB::raw("round((count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END)::decimal/count(at5s.id))*100) AS urban_location"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END)::decimal/count(at5s.id))*100) AS govt_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END)::decimal/count(at5s.id))*100) AS govt_aided_school"),DB::raw("round((count(CASE 
            WHEN nas_exam_details.frame= 'F3' THEN 'Private' END)::decimal/count(at5s.id))*100) AS private_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt'
            END)::decimal/count(at5s.id))*100) AS central_govt_school"),DB::raw("count(DISTINCT nas_exam_details.udise_sch_code ) AS total_school"),DB::raw("round((count(CASE 
            WHEN at5s.at5_socgrp= '1' THEN 'SC' END)::decimal/count(at5s.id))*100) AS sc_social_group"),DB::raw("round((count(CASE WHEN at5s.at5_socgrp= '2' THEN 'OBC' END)::decimal/count(at5s.id))*100) AS obc_social_group"),DB::raw("round((count(CASE 
            WHEN at5s.at5_socgrp= '3' THEN 'ST' END)::decimal/count(at5s.id))*100) AS st_social_group"),DB::raw("round((count(CASE WHEN at5s.at5_socgrp= '4' THEN 'General' END)::decimal/count(at5s.id))*100) AS general_social_group"),DB::raw("round((count(CASE 
            WHEN p_qs.pq_gender= '1' THEN 'Boys' END)::decimal/count(at5s.id))*100) AS male_gender"),DB::raw("round((count(CASE WHEN p_qs.pq_gender= '2' THEN 'Girls' END)::decimal/count(at5s.id))*100) AS female_gender"),DB::raw("count(at5s.id)  AS total_student"),DB::raw("count(CASE WHEN at5s.at5_socgrp= '1' THEN 'SC' END) AS sc_social_group_count"),DB::raw("count(CASE WHEN at5s.at5_socgrp= '2' THEN 'OBC' END) AS obc_social_group_count"),DB::raw("count(CASE WHEN at5s.at5_socgrp= '3' THEN 'ST' END) AS st_social_group_count"),DB::raw("count(CASE WHEN at5s.at5_socgrp= '4' THEN 'GENERAL' END) AS general_social_group_count"),DB::raw("count(CASE WHEN pq_gender= '1' THEN 'Boys' END) AS male_gender_count"),DB::raw("count(CASE WHEN pq_gender= '2' THEN 'Girls' END) AS female_gender_count"),DB::raw("count(CASE WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END) AS rural_location_count"),DB::raw("count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END) AS urban_location_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END) AS govt_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END) AS govt_aided_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F3' THEN 'Private' END) AS private_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt' END) AS central_govt_school_count"))
            ->leftJoin('nas_exam_details','nas_exam_details.udise_sch_code','=','at5s.at5_udise')
            ->leftJoin('p_qs','p_qs.pq_bar','=','at5s.at5_parent_bar')
            ->where('nas_exam_details.district_cd','!=','')
            ->groupBy('nas_exam_details.state_cd')
            ->groupBy('nas_exam_details.district_cd')
            ->get();

        $newData5Grade = array();
        if(count($at5GradeData)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',5)->truncate();
            foreach($at5GradeData as $nasDetails5thCounts)
            {
                $newData5Grade['state_id'] = (int)$nasDetails5thCounts->state_cd;
                $newData5Grade['district_id'] = (int)$nasDetails5thCounts->district_cd;
                $newData5Grade['grade'] = 05;
                $newData5Grade['rural_location'] = isset($nasDetails5thCounts->rural_location)?$nasDetails5thCounts->rural_location:0;
                $newData5Grade['rural_location_count'] = isset($nasDetails5thCounts->rural_location_count)?$nasDetails5thCounts->rural_location_count:0;
                $newData5Grade['urban_location'] = isset($nasDetails5thCounts->urban_location)?$nasDetails5thCounts->urban_location:0;
                $newData5Grade['urban_location_count'] = isset($nasDetails5thCounts->urban_location_count)?$nasDetails5thCounts->urban_location_count:0;
                $newData5Grade['govt_school'] = isset($nasDetails5thCounts->govt_school)?$nasDetails5thCounts->govt_school:0;
                $newData5Grade['govt_school_count'] = isset($nasDetails5thCounts->govt_school_count)?$nasDetails5thCounts->govt_school_count:0;
                $newData5Grade['govt_aided_school'] = isset($nasDetails5thCounts->govt_aided_school)?$nasDetails5thCounts->govt_aided_school:0;
                $newData5Grade['govt_aided_school_count'] = isset($nasDetails5thCounts->govt_aided_school_count)?$nasDetails5thCounts->govt_aided_school_count:0;
                $newData5Grade['private_school'] = isset($nasDetails5thCounts->private_school)?$nasDetails5thCounts->private_school:0;
                $newData5Grade['private_school_count'] = isset($nasDetails5thCounts->private_school_count)?$nasDetails5thCounts->private_school_count:0;
                $newData5Grade['central_govt_school'] = isset($nasDetails5thCounts->central_govt_school)?$nasDetails5thCounts->central_govt_school:0;
                $newData5Grade['central_govt_school_count'] = isset($nasDetails5thCounts->central_govt_school_count)?$nasDetails5thCounts->central_govt_school_count:0;
                $newData5Grade['total_school'] = isset($nasDetails5thCounts->total_school)?$nasDetails5thCounts->total_school:0;

                $newData5Grade['total_student'] = isset($nasDetails5thCounts->total_student)?$nasDetails5thCounts->total_student:0;
                $newData5Grade['sc_social_group'] = isset($nasDetails5thCounts->sc_social_group)?$nasDetails5thCounts->sc_social_group:0;
                $newData5Grade['sc_social_group_count'] = isset($nasDetails5thCounts->sc_social_group_count)?$nasDetails5thCounts->sc_social_group_count:0;
                $newData5Grade['obc_social_group'] = isset($nasDetails5thCounts->obc_social_group)?$nasDetails5thCounts->obc_social_group:0;
                $newData5Grade['obc_social_group_count'] = isset($nasDetails5thCounts->obc_social_group_count)?$nasDetails5thCounts->obc_social_group_count:0;
                $newData5Grade['st_social_group'] = isset($nasDetails5thCounts->st_social_group)?$nasDetails5thCounts->st_social_group:0;
                $newData5Grade['st_social_group_count'] = isset($nasDetails5thCounts->st_social_group_count)?$nasDetails5thCounts->st_social_group_count:0;
                $newData5Grade['general_social_group'] = isset($nasDetails5thCounts->general_social_group)?$nasDetails5thCounts->general_social_group:0;
                $newData5Grade['general_social_group_count'] = isset($nasDetails5thCounts->general_social_group_count)?$nasDetails5thCounts->general_social_group_count:0;

                // Get Total no of Teachers in particular district

                $nasExamData5 = NasExamDetails::select('udise_sch_code')
                    ->where('district_cd',$nasDetails5thCounts->district_cd)
                    ->pluck('udise_sch_code')->toArray();

                $teacher5sData = TQs::select('id')
                    ->whereIn('tq_udise',$nasExamData5)
                    ->where('tq_grade','05')
                    ->get();

                $newData5Grade['total_teacher'] = isset($teacher5sData)?count($teacher5sData):0;
                $newData5Grade['male_gender'] = isset($nasDetails5thCounts->male_gender)?$nasDetails5thCounts->male_gender:0;
                $newData5Grade['male_gender_count'] = isset($nasDetails5thCounts->male_gender_count)?$nasDetails5thCounts->male_gender_count:0;
                $newData5Grade['female_gender'] = isset($nasDetails5thCounts->female_gender)?$nasDetails5thCounts->female_gender:0;
                $newData5Grade['female_gender_count'] = isset($nasDetails5thCounts->female_gender_count)?$nasDetails5thCounts->female_gender_count:0;
                $newData5Grade['created_at'] = now();
                $newData5Grade['updated_at'] = now();

                $data5thGrade[]=$newData5Grade;
            }
            
        }             
  
        // For Grade 8th
        $at8GradeData = DB::table('at8')
            ->select('nas_exam_details.state_cd','nas_exam_details.district_cd',DB::raw("round((count(CASE 
            WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END)::decimal/count(at8.id))*100) AS rural_location"),DB::raw("round((count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END)::decimal/count(at8.id))*100) AS urban_location"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END)::decimal/count(at8.id))*100) AS govt_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END)::decimal/count(at8.id))*100) AS govt_aided_school"),DB::raw("round((count(CASE 
            WHEN nas_exam_details.frame= 'F3' THEN 'Private' END)::decimal/count(at8.id))*100) AS private_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt'
            END)::decimal/count(at8.id))*100) AS central_govt_school"),DB::raw("count(DISTINCT nas_exam_details.udise_sch_code ) AS total_school"),DB::raw("round((count(CASE 
            WHEN at8.at8_socgrp= '1' THEN 'SC' END)::decimal/count(at8.id))*100) AS sc_social_group"),DB::raw("round((count(CASE WHEN at8.at8_socgrp= '2' THEN 'OBC' END)::decimal/count(at8.id))*100) AS obc_social_group"),DB::raw("round((count(CASE 
            WHEN at8.at8_socgrp= '3' THEN 'ST' END)::decimal/count(at8.id))*100) AS st_social_group"),DB::raw("round((count(CASE WHEN at8.at8_socgrp= '4' THEN 'General' END)::decimal/count(at8.id))*100) AS general_social_group"),DB::raw("round((count(CASE 
            WHEN p_qs.pq_gender= '1' THEN 'Boys' END)::decimal/count(at8.id))*100) AS male_gender"),DB::raw("round((count(CASE WHEN p_qs.pq_gender= '2' THEN 'Girls' END)::decimal/count(at8.id))*100) AS female_gender"),DB::raw("count(at8.id)  AS total_student"),DB::raw("count(CASE WHEN at8.at8_socgrp= '1' THEN 'SC' END) AS sc_social_group_count"),DB::raw("count(CASE WHEN at8.at8_socgrp= '2' THEN 'OBC' END) AS obc_social_group_count"),DB::raw("count(CASE WHEN at8.at8_socgrp= '3' THEN 'ST' END) AS st_social_group_count"),DB::raw("count(CASE WHEN at8.at8_socgrp= '4' THEN 'GENERAL' END) AS general_social_group_count"),DB::raw("count(CASE WHEN pq_gender= '1' THEN 'Boys' END) AS male_gender_count"),DB::raw("count(CASE WHEN pq_gender= '2' THEN 'Girls' END) AS female_gender_count"),DB::raw("count(CASE WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END) AS rural_location_count"),DB::raw("count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END) AS urban_location_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END) AS govt_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END) AS govt_aided_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F3' THEN 'Private' END) AS private_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt' END) AS central_govt_school_count"))
            ->leftJoin('nas_exam_details','nas_exam_details.udise_sch_code','=','at8.at8_udise')
            ->leftJoin('p_qs','p_qs.pq_bar','=','at8.at8_parent_bar')
            ->where('nas_exam_details.district_cd','!=','')
            ->groupBy('nas_exam_details.state_cd')
            ->groupBy('nas_exam_details.district_cd')
            ->get();


        $newData8Grade = array();
        if(count($at8GradeData)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',8)->truncate();
            foreach($at8GradeData as $nasDetails8thCounts)
            {
                $newData8Grade['state_id'] = (int)$nasDetails8thCounts->state_cd;
                $newData8Grade['district_id'] = (int)$nasDetails8thCounts->district_cd;
                $newData8Grade['grade'] = (int)'08';
                $newData8Grade['rural_location'] = isset($nasDetails8thCounts->rural_location)?$nasDetails8thCounts->rural_location:0;
                $newData8Grade['rural_location_count'] = isset($nasDetails8thCounts->rural_location_count)?$nasDetails8thCounts->rural_location_count:0;
                $newData8Grade['urban_location'] = isset($nasDetails8thCounts->urban_location)?$nasDetails8thCounts->urban_location:0;
                $newData8Grade['urban_location_count'] = isset($nasDetails8thCounts->urban_location_count)?$nasDetails8thCounts->urban_location_count:0;
                $newData8Grade['govt_school'] = isset($nasDetails8thCounts->govt_school)?$nasDetails8thCounts->govt_school:0;
                $newData8Grade['govt_school_count'] = isset($nasDetails8thCounts->govt_school_count)?$nasDetails8thCounts->govt_school_count:0;
                $newData8Grade['govt_aided_school'] = isset($nasDetails8thCounts->govt_aided_school)?$nasDetails8thCounts->govt_aided_school:0;
                $newData8Grade['govt_aided_school_count'] = isset($nasDetails8thCounts->govt_aided_school_count)?$nasDetails8thCounts->govt_aided_school_count:0;
                $newData8Grade['private_school'] = isset($nasDetails8thCounts->private_school)?$nasDetails8thCounts->private_school:0;
                $newData8Grade['private_school_count'] = isset($nasDetails8thCounts->private_school_count)?$nasDetails8thCounts->private_school_count:0;
                $newData8Grade['central_govt_school'] = isset($nasDetails8thCounts->central_govt_school)?$nasDetails8thCounts->central_govt_school:0;
                $newData8Grade['central_govt_school_count'] = isset($nasDetails8thCounts->central_govt_school_count)?$nasDetails8thCounts->central_govt_school_count:0;
                $newData8Grade['total_school'] = isset($nasDetails8thCounts->total_school)?$nasDetails8thCounts->total_school:0;

                $newData8Grade['total_student'] = isset($nasDetails8thCounts->total_student)?$nasDetails8thCounts->total_student:0;
                $newData8Grade['sc_social_group'] = isset($nasDetails8thCounts->sc_social_group)?$nasDetails8thCounts->sc_social_group:0;
                $newData8Grade['sc_social_group_count'] = isset($nasDetails8thCounts->sc_social_group_count)?$nasDetails8thCounts->sc_social_group_count:0;
                $newData8Grade['obc_social_group'] = isset($nasDetails8thCounts->obc_social_group)?$nasDetails8thCounts->obc_social_group:0;
                $newData8Grade['obc_social_group_count'] = isset($nasDetails8thCounts->obc_social_group_count)?$nasDetails8thCounts->obc_social_group_count:0;
                $newData8Grade['st_social_group'] = isset($nasDetails8thCounts->st_social_group)?$nasDetails8thCounts->st_social_group:0;
                $newData8Grade['st_social_group_count'] = isset($nasDetails8thCounts->st_social_group_count)?$nasDetails8thCounts->st_social_group_count:0;
                $newData8Grade['general_social_group'] = isset($nasDetails8thCounts->general_social_group)?$nasDetails8thCounts->general_social_group:0;
                $newData8Grade['general_social_group_count'] = isset($nasDetails8thCounts->general_social_group_count)?$nasDetails8thCounts->general_social_group_count:0;

                // Get Total no of Teachers in particular district

                $nasExamData8 = NasExamDetails::select('udise_sch_code')
                    ->where('district_cd',$nasDetails8thCounts->district_cd)
                    ->pluck('udise_sch_code')->toArray();

                $teacher8sData = TQs::select('id')
                    ->whereIn('tq_udise',$nasExamData8)
                    ->where('tq_grade','08')
                    ->get();

                $newData8Grade['total_teacher'] = isset($teacher8sData)?count($teacher8sData):0;
                $newData8Grade['male_gender'] = isset($nasDetails8thCounts->male_gender)?$nasDetails8thCounts->male_gender:0;
                $newData8Grade['male_gender_count'] = isset($nasDetails8thCounts->male_gender_count)?$nasDetails8thCounts->male_gender_count:0;
                $newData8Grade['female_gender'] = isset($nasDetails8thCounts->female_gender)?$nasDetails8thCounts->female_gender:0;
                $newData8Grade['female_gender_count'] = isset($nasDetails8thCounts->female_gender_count)?$nasDetails8thCounts->female_gender_count:0;
                $newData8Grade['created_at'] = now();
                $newData8Grade['updated_at'] = now();

                $data8thGrade[]=$newData8Grade;
            }
            
        }       
        
        // For Grade 10
        $at10GradeData = DB::table('at10s')
            ->select('nas_exam_details.state_cd','nas_exam_details.district_cd',DB::raw("round((count(CASE 
            WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END)::decimal/count(at10s.id))*100) AS rural_location"),DB::raw("round((count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END)::decimal/count(at10s.id))*100) AS urban_location"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END)::decimal/count(at10s.id))*100) AS govt_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END)::decimal/count(at10s.id))*100) AS govt_aided_school"),DB::raw("round((count(CASE 
            WHEN nas_exam_details.frame= 'F3' THEN 'Private' END)::decimal/count(at10s.id))*100) AS private_school"),DB::raw("round((count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt'
            END)::decimal/count(at10s.id))*100) AS central_govt_school"),DB::raw("count(DISTINCT nas_exam_details.udise_sch_code ) AS total_school"),DB::raw("round((count(CASE 
            WHEN at10s.at1_socgrp= '1' THEN 'SC' END)::decimal/count(at10s.id))*100) AS sc_social_group"),DB::raw("round((count(CASE WHEN at10s.at1_socgrp= '2' THEN 'OBC' END)::decimal/count(at10s.id))*100) AS obc_social_group"),DB::raw("round((count(CASE 
            WHEN at10s.at1_socgrp= '3' THEN 'ST' END)::decimal/count(at10s.id))*100) AS st_social_group"),DB::raw("round((count(CASE WHEN at10s.at1_socgrp= '4' THEN 'General' END)::decimal/count(at10s.id))*100) AS general_social_group"),DB::raw("round((count(CASE 
            WHEN p_qs.pq_gender= '1' THEN 'Boys' END)::decimal/count(at10s.id))*100) AS male_gender"),DB::raw("round((count(CASE WHEN p_qs.pq_gender= '2' THEN 'Girls' END)::decimal/count(at10s.id))*100) AS female_gender"),DB::raw("count(at10s.id)  AS total_student"),DB::raw("count(CASE WHEN at10s.at1_socgrp= '1' THEN 'SC' END) AS sc_social_group_count"),DB::raw("count(CASE WHEN at10s.at1_socgrp= '2' THEN 'OBC' END) AS obc_social_group_count"),DB::raw("count(CASE WHEN at10s.at1_socgrp= '3' THEN 'ST' END) AS st_social_group_count"),DB::raw("count(CASE WHEN at10s.at1_socgrp= '4' THEN 'GENERAL' END) AS general_social_group_count"),DB::raw("count(CASE WHEN pq_gender= '1' THEN 'Boys' END) AS male_gender_count"),DB::raw("count(CASE WHEN pq_gender= '2' THEN 'Girls' END) AS female_gender_count"),DB::raw("count(CASE WHEN nas_exam_details.sch_loc_r_u= '1' THEN 'Rural' END) AS rural_location_count"),DB::raw("count(CASE WHEN nas_exam_details.sch_loc_r_u= '2' THEN 'Urban' END) AS urban_location_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F1' THEN 'Govt School' END) AS govt_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F2' THEN 'Govt Aided' END) AS govt_aided_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F3' THEN 'Private' END) AS private_school_count"),DB::raw("count(CASE WHEN nas_exam_details.frame= 'F4' THEN 'Central govt' END) AS central_govt_school_count"))
            ->leftJoin('nas_exam_details','nas_exam_details.udise_sch_code','=','at10s.at1_udise')
            ->leftJoin('p_qs','p_qs.pq_bar','=','at10s.at1_parent_bar')
            ->where('nas_exam_details.district_cd','!=','')
            ->groupBy('nas_exam_details.state_cd')
            ->groupBy('nas_exam_details.district_cd')
            ->get();

        $newData10Grade = array();
        if(count($at10GradeData)>0)
        {
            $blog = DB::table('all_grade_participation_tbl')->where('grade',10)->truncate();
            foreach($at10GradeData as $nasDetails10thCounts)
            {
                $newData10Grade['state_id'] = (int)$nasDetails10thCounts->state_cd;
                $newData10Grade['district_id'] = (int)$nasDetails10thCounts->district_cd;
                $newData10Grade['grade'] = (int)'10';
                $newData10Grade['rural_location'] = isset($nasDetails10thCounts->rural_location)?$nasDetails10thCounts->rural_location:0;
                $newData10Grade['rural_location_count'] = isset($nasDetails10thCounts->rural_location_count)?$nasDetails10thCounts->rural_location_count:0;
                $newData10Grade['urban_location'] = isset($nasDetails10thCounts->urban_location)?$nasDetails10thCounts->urban_location:0;
                $newData10Grade['urban_location_count'] = isset($nasDetails10thCounts->urban_location_count)?$nasDetails10thCounts->urban_location_count:0;
                $newData10Grade['govt_school'] = isset($nasDetails10thCounts->govt_school)?$nasDetails10thCounts->govt_school:0;
                $newData10Grade['govt_school_count'] = isset($nasDetails10thCounts->govt_school_count)?$nasDetails10thCounts->govt_school_count:0;
                $newData10Grade['govt_aided_school'] = isset($nasDetails10thCounts->govt_aided_school)?$nasDetails10thCounts->govt_aided_school:0;
                $newData10Grade['govt_aided_school_count'] = isset($nasDetails10thCounts->govt_aided_school_count)?$nasDetails10thCounts->govt_aided_school_count:0;
                $newData10Grade['private_school'] = isset($nasDetails10thCounts->private_school)?$nasDetails10thCounts->private_school:0;
                $newData10Grade['private_school_count'] = isset($nasDetails10thCounts->private_school_count)?$nasDetails10thCounts->private_school_count:0;
                $newData10Grade['central_govt_school'] = isset($nasDetails10thCounts->central_govt_school)?$nasDetails10thCounts->central_govt_school:0;
                $newData10Grade['central_govt_school_count'] = isset($nasDetails10thCounts->central_govt_school_count)?$nasDetails10thCounts->central_govt_school_count:0;
                $newData10Grade['total_school'] = isset($nasDetails10thCounts->total_school)?$nasDetails10thCounts->total_school:0;

                $newData10Grade['total_student'] = isset($nasDetails10thCounts->total_student)?$nasDetails10thCounts->total_student:0;
                $newData10Grade['sc_social_group'] = isset($nasDetails10thCounts->sc_social_group)?$nasDetails10thCounts->sc_social_group:0;
                $newData10Grade['sc_social_group_count'] = isset($nasDetails10thCounts->sc_social_group_count)?$nasDetails10thCounts->sc_social_group_count:0;
                $newData10Grade['obc_social_group'] = isset($nasDetails10thCounts->obc_social_group)?$nasDetails10thCounts->obc_social_group:0;
                $newData10Grade['obc_social_group_count'] = isset($nasDetails10thCounts->obc_social_group_count)?$nasDetails10thCounts->obc_social_group_count:0;
                $newData10Grade['st_social_group'] = isset($nasDetails10thCounts->st_social_group)?$nasDetails10thCounts->st_social_group:0;
                $newData10Grade['st_social_group_count'] = isset($nasDetails10thCounts->st_social_group_count)?$nasDetails10thCounts->st_social_group_count:0;
                $newData10Grade['general_social_group'] = isset($nasDetails10thCounts->general_social_group)?$nasDetails10thCounts->general_social_group:0;
                $newData10Grade['general_social_group_count'] = isset($nasDetails10thCounts->general_social_group_count)?$nasDetails10thCounts->general_social_group_count:0;

                $nasExamData10 = NasExamDetails::select('udise_sch_code')
                    ->where('district_cd',$nasDetails10thCounts->district_cd)
                    ->pluck('udise_sch_code')->toArray();

                $teacher10sData = TQs::select('id')
                    ->whereIn('tq_udise',$nasExamData10)
                    ->where('tq_grade','08')
                    ->get();

                $newData10Grade['total_teacher'] = isset($teacher10sData)?count($teacher10sData):0;
                $newData10Grade['male_gender'] = isset($nasDetails10thCounts->male_gender)?$nasDetails10thCounts->male_gender:0;
                $newData10Grade['male_gender_count'] = isset($nasDetails10thCounts->male_gender_count)?$nasDetails10thCounts->male_gender_count:0;
                $newData10Grade['female_gender'] = isset($nasDetails10thCounts->female_gender)?$nasDetails10thCounts->female_gender:0;
                $newData10Grade['female_gender_count'] = isset($nasDetails10thCounts->female_gender_count)?$nasDetails10thCounts->female_gender_count:0;
                $newData10Grade['created_at'] = now();
                $newData10Grade['updated_at'] = now();

                $data10thGrade[]=$newData10Grade;
            }
            
        }  

        $finalData = array_merge($data,$data5thGrade,$data8thGrade,$data10thGrade);
        $districtmsg = AllGradeParticipationTBL::insert($finalData);
        // End Here

        /*************************************************************
         * Name: Sanjay Kumar
         * Desc: State Process data in all grade
         * Date: 24/12/2021
         * Start Here
         *************************************************************/

        $allGradeStateData = DB::table('all_grade_participation_tbl')
            ->select('state_id','grade',DB::raw("SUM(total_student::int) AS total_student"),DB::raw("SUM(total_school::int)  AS total_school"),DB::raw("SUM(total_teacher::int)  AS total_teacher"),DB::raw("round(SUM(rural_location_count::int)) AS rural_location_count"),DB::raw("round((SUM(rural_location::decimal)/SUM(total_student::decimal))*100) AS rural_location"),DB::raw("round(SUM(urban_location_count::int)) AS urban_location_count"),DB::raw("round((SUM(urban_location_count::int)/SUM(total_student::decimal))*100) AS urban_location"),DB::raw("round(SUM(govt_school_count::int)) AS govt_school_count"),DB::raw("round(SUM(govt_aided_school_count::int)) AS govt_aided_school_count"),DB::raw("round(SUM(private_school_count::int)) AS private_school_count"),DB::raw("round(SUM(central_govt_school_count::int)) AS central_govt_school_count"),DB::raw("round((SUM(govt_school_count::int)/SUM(total_student::decimal))*100) AS govt_school"),DB::raw("round((SUM(govt_aided_school_count::int)/SUM(total_student::decimal))*100) AS govt_aided_school"),DB::raw("round((SUM(private_school_count::int)/SUM(total_student::decimal))*100) AS private_school"),DB::raw("round((SUM(central_govt_school_count::int)/SUM(total_student::decimal))*100) AS central_govt_school"),DB::raw("round(SUM(sc_social_group_count::int)) AS sc_social_group_count"),DB::raw("round(SUM(obc_social_group_count::int)) AS obc_social_group_count"),DB::raw("round(SUM(st_social_group_count::int)) AS st_social_group_count"),DB::raw("round(SUM(general_social_group_count::int)) AS general_social_group_count"),DB::raw("round((SUM(sc_social_group_count::int)/SUM(total_student::decimal))*100) AS sc_social_group"),DB::raw("round((SUM(obc_social_group_count::int)/SUM(total_student::decimal))*100) AS obc_social_group"),DB::raw("round((SUM(st_social_group_count::int)/SUM(total_student::decimal))*100) AS st_social_group"),DB::raw("round((SUM(general_social_group_count::int)/SUM(total_student::decimal))*100) AS general_social_group"),DB::raw("round(SUM(male_gender_count::int)) AS male_gender_count"),DB::raw("round(SUM(female_gender_count::int)) AS female_gender_count"),DB::raw("round((SUM(male_gender_count::int)/SUM(total_student::decimal))*100) AS male_gender"),DB::raw("round((SUM(female_gender_count::int)/SUM(total_student::decimal))*100) AS female_gender"))
            ->groupBy('state_id')
            ->groupBy('grade')
            ->get();

        $newStateData = array();
        if(count($allGradeStateData)>0)
        {
            $blogState = DB::table('all_grade_state_participation_tbl')->truncate();
            foreach($allGradeStateData as $nasDetailsStateCounts)
            {
                $newStateData['state_id'] = (int)$nasDetailsStateCounts->state_id;
                $newStateData['grade'] = isset($nasDetailsStateCounts->grade)?$nasDetailsStateCounts->grade:0;
                $newStateData['rural_location'] = isset($nasDetailsStateCounts->rural_location)?$nasDetailsStateCounts->rural_location:0;
                $newStateData['rural_location_count'] = isset($nasDetailsStateCounts->rural_location_count)?$nasDetailsStateCounts->rural_location_count:0;
                $newStateData['urban_location'] = isset($nasDetailsStateCounts->urban_location)?$nasDetailsStateCounts->urban_location:0;
                $newStateData['urban_location_count'] = isset($nasDetailsStateCounts->urban_location_count)?$nasDetailsStateCounts->urban_location_count:0;
                $newStateData['govt_school'] = isset($nasDetailsStateCounts->govt_school)?$nasDetailsStateCounts->govt_school:0;
                $newStateData['govt_school_count'] = isset($nasDetailsStateCounts->govt_school_count)?$nasDetailsStateCounts->govt_school_count:0;
                $newStateData['govt_aided_school'] = isset($nasDetailsStateCounts->govt_aided_school)?$nasDetailsStateCounts->govt_aided_school:0;
                $newStateData['govt_aided_school_count'] = isset($nasDetailsStateCounts->govt_aided_school_count)?$nasDetailsStateCounts->govt_aided_school_count:0;
                $newStateData['private_school'] = isset($nasDetailsStateCounts->private_school)?$nasDetailsStateCounts->private_school:0;
                $newStateData['private_school_count'] = isset($nasDetailsStateCounts->private_school_count)?$nasDetailsStateCounts->private_school_count:0;
                $newStateData['central_govt_school'] = isset($nasDetailsStateCounts->central_govt_school)?$nasDetailsStateCounts->central_govt_school:0;
                $newStateData['central_govt_school_count'] = isset($nasDetailsStateCounts->central_govt_school_count)?$nasDetailsStateCounts->central_govt_school_count:0;
                $newStateData['total_school'] = isset($nasDetailsStateCounts->total_school)?$nasDetailsStateCounts->total_school:0;
                $newStateData['total_student'] = isset($nasDetailsStateCounts->total_student)?$nasDetailsStateCounts->total_student:0;
                $newStateData['sc_social_group'] = isset($nasDetailsStateCounts->sc_social_group)?$nasDetailsStateCounts->sc_social_group:0;
                $newStateData['sc_social_group_count'] = isset($nasDetailsStateCounts->sc_social_group_count)?$nasDetailsStateCounts->sc_social_group_count:0;
                $newStateData['obc_social_group'] = isset($nasDetailsStateCounts->obc_social_group)?$nasDetailsStateCounts->obc_social_group:0;
                $newStateData['obc_social_group_count'] = isset($nasDetailsStateCounts->obc_social_group_count)?$nasDetailsStateCounts->obc_social_group_count:0;
                $newStateData['st_social_group'] = isset($nasDetailsStateCounts->st_social_group)?$nasDetailsStateCounts->st_social_group:0;
                $newStateData['st_social_group_count'] = isset($nasDetailsStateCounts->st_social_group_count)?$nasDetailsStateCounts->st_social_group_count:0;
                $newStateData['general_social_group'] = isset($nasDetailsStateCounts->general_social_group)?$nasDetailsStateCounts->general_social_group:0;
                $newStateData['general_social_group_count'] = isset($nasDetailsStateCounts->general_social_group_count)?$nasDetailsStateCounts->general_social_group_count:0;
                $newStateData['total_teacher'] = isset($nasDetailsStateCounts->general_social_group_count)?$nasDetailsStateCounts->general_social_group_count:0;
                $newStateData['male_gender'] = isset($nasDetailsStateCounts->male_gender)?$nasDetailsStateCounts->male_gender:0;
                $newStateData['male_gender_count'] = isset($nasDetailsStateCounts->male_gender_count)?$nasDetailsStateCounts->male_gender_count:0;
                $newStateData['female_gender'] = isset($nasDetailsStateCounts->female_gender)?$nasDetailsStateCounts->female_gender:0;
                $newStateData['female_gender_count'] = isset($nasDetailsStateCounts->female_gender_count)?$nasDetailsStateCounts->female_gender_count:0;
                $newStateData['created_at'] = now();
                $newStateData['updated_at'] = now();

                $dataStateAllGrade[]=$newStateData;
            } 
        }  
        $statemsg = AllGradeStateParticipationTBL::insert($dataStateAllGrade);
        // End Here

        /*************************************************************
         * Name: Sanjay Kumar
         * Desc: National Process data in all grade
         * Date: 24/12/2021
         * Start Here
         *************************************************************/
        $allGradeNationalData = DB::table('all_grade_participation_tbl')
            ->select('grade',DB::raw("SUM(total_student::int) AS total_student"),DB::raw("SUM(total_school::int)  AS total_school"),DB::raw("SUM(total_teacher::int)  AS total_teacher"),DB::raw("round(SUM(rural_location_count::int)) AS rural_location_count"),DB::raw("round((SUM(rural_location::decimal)/SUM(total_student::decimal))*100) AS rural_location"),DB::raw("round(SUM(urban_location_count::int)) AS urban_location_count"),DB::raw("round((SUM(urban_location_count::int)/SUM(total_student::decimal))*100) AS urban_location"),DB::raw("round(SUM(govt_school_count::int)) AS govt_school_count"),DB::raw("round(SUM(govt_aided_school_count::int)) AS govt_aided_school_count"),DB::raw("round(SUM(private_school_count::int)) AS private_school_count"),DB::raw("round(SUM(central_govt_school_count::int)) AS central_govt_school_count"),DB::raw("round((SUM(govt_school_count::int)/SUM(total_student::decimal))*100) AS govt_school"),DB::raw("round((SUM(govt_aided_school_count::int)/SUM(total_student::decimal))*100) AS govt_aided_school"),DB::raw("round((SUM(private_school_count::int)/SUM(total_student::decimal))*100) AS private_school"),DB::raw("round((SUM(central_govt_school_count::int)/SUM(total_student::decimal))*100) AS central_govt_school"),DB::raw("round(SUM(sc_social_group_count::int)) AS sc_social_group_count"),DB::raw("round(SUM(obc_social_group_count::int)) AS obc_social_group_count"),DB::raw("round(SUM(st_social_group_count::int)) AS st_social_group_count"),DB::raw("round(SUM(general_social_group_count::int)) AS general_social_group_count"),DB::raw("round((SUM(sc_social_group_count::int)/SUM(total_student::decimal))*100) AS sc_social_group"),DB::raw("round((SUM(obc_social_group_count::int)/SUM(total_student::decimal))*100) AS obc_social_group"),DB::raw("round((SUM(st_social_group_count::int)/SUM(total_student::decimal))*100) AS st_social_group"),DB::raw("round((SUM(general_social_group_count::int)/SUM(total_student::decimal))*100) AS general_social_group"),DB::raw("round(SUM(male_gender_count::int)) AS male_gender_count"),DB::raw("round(SUM(female_gender_count::int)) AS female_gender_count"),DB::raw("round((SUM(male_gender_count::int)/SUM(total_student::decimal))*100) AS male_gender"),DB::raw("round((SUM(female_gender_count::int)/SUM(total_student::decimal))*100) AS female_gender"))
            ->groupBy('grade')
            ->get();

        $newNationalData = array();
        if(count($allGradeNationalData)>0)
        {
            $blogState = DB::table('all_grade_national_participation_tbl')->truncate();
            foreach($allGradeNationalData as $nasDetailsNationalCounts)
            {
                $newNationalData['grade'] = isset($nasDetailsNationalCounts->grade)?$nasDetailsNationalCounts->grade:0;
                $newNationalData['rural_location'] = isset($nasDetailsNationalCounts->rural_location)?$nasDetailsNationalCounts->rural_location:0;
                $newNationalData['rural_location_count'] = isset($nasDetailsNationalCounts->rural_location_count)?$nasDetailsNationalCounts->rural_location_count:0;
                $newNationalData['urban_location'] = isset($nasDetailsNationalCounts->urban_location)?$nasDetailsNationalCounts->urban_location:0;
                $newNationalData['urban_location_count'] = isset($nasDetailsNationalCounts->urban_location_count)?$nasDetailsNationalCounts->urban_location_count:0;
                $newNationalData['govt_school'] = isset($nasDetailsNationalCounts->govt_school)?$nasDetailsNationalCounts->govt_school:0;
                $newNationalData['govt_school_count'] = isset($nasDetailsNationalCounts->govt_school_count)?$nasDetailsNationalCounts->govt_school_count:0;
                $newNationalData['govt_aided_school'] = isset($nasDetailsNationalCounts->govt_aided_school)?$nasDetailsNationalCounts->govt_aided_school:0;
                $newNationalData['govt_aided_school_count'] = isset($nasDetailsNationalCounts->govt_aided_school_count)?$nasDetailsNationalCounts->govt_aided_school_count:0;
                $newNationalData['private_school'] = isset($nasDetailsNationalCounts->private_school)?$nasDetailsNationalCounts->private_school:0;
                $newNationalData['private_school_count'] = isset($nasDetailsNationalCounts->private_school_count)?$nasDetailsNationalCounts->private_school_count:0;
                $newNationalData['central_govt_school'] = isset($nasDetailsNationalCounts->central_govt_school)?$nasDetailsNationalCounts->central_govt_school:0;
                $newNationalData['central_govt_school_count'] = isset($nasDetailsNationalCounts->central_govt_school_count)?$nasDetailsNationalCounts->central_govt_school_count:0;
                $newNationalData['total_school'] = isset($nasDetailsNationalCounts->total_school)?$nasDetailsNationalCounts->total_school:0;
                $newNationalData['total_student'] = isset($nasDetailsNationalCounts->total_student)?$nasDetailsNationalCounts->total_student:0;
                $newNationalData['sc_social_group'] = isset($nasDetailsNationalCounts->sc_social_group)?$nasDetailsNationalCounts->sc_social_group:0;
                $newNationalData['sc_social_group_count'] = isset($nasDetailsNationalCounts->sc_social_group_count)?$nasDetailsNationalCounts->sc_social_group_count:0;
                $newNationalData['obc_social_group'] = isset($nasDetailsNationalCounts->obc_social_group)?$nasDetailsNationalCounts->obc_social_group:0;
                $newNationalData['obc_social_group_count'] = isset($nasDetailsNationalCounts->obc_social_group_count)?$nasDetailsNationalCounts->obc_social_group_count:0;
                $newNationalData['st_social_group'] = isset($nasDetailsNationalCounts->st_social_group)?$nasDetailsNationalCounts->st_social_group:0;
                $newNationalData['st_social_group_count'] = isset($nasDetailsNationalCounts->st_social_group_count)?$nasDetailsNationalCounts->st_social_group_count:0;
                $newNationalData['general_social_group'] = isset($nasDetailsNationalCounts->general_social_group)?$nasDetailsNationalCounts->general_social_group:0;
                $newNationalData['general_social_group_count'] = isset($nasDetailsNationalCounts->general_social_group_count)?$nasDetailsNationalCounts->general_social_group_count:0;
                $newNationalData['total_teacher'] = isset($nasDetailsNationalCounts->general_social_group_count)?$nasDetailsNationalCounts->general_social_group_count:0;
                $newNationalData['male_gender'] = isset($nasDetailsNationalCounts->male_gender)?$nasDetailsNationalCounts->male_gender:0;
                $newNationalData['male_gender_count'] = isset($nasDetailsNationalCounts->male_gender_count)?$nasDetailsNationalCounts->male_gender_count:0;
                $newNationalData['female_gender'] = isset($nasDetailsNationalCounts->female_gender)?$nasDetailsNationalCounts->female_gender:0;
                $newNationalData['female_gender_count'] = isset($nasDetailsNationalCounts->female_gender_count)?$nasDetailsNationalCounts->female_gender_count:0;
                $newNationalData['created_at'] = now();
                $newNationalData['updated_at'] = now();

                $dataNationalAllGrade[]=$newNationalData;
            } 
        }  
        $nationalmsg = AllGradeNationalParticipationTBL::insert($dataNationalAllGrade);
        // End Here

        if($nationalmsg)
        {
            return "Process table successfully created.";
        }
        else
        {
            return "Something wrong.";
        }
    }
}
