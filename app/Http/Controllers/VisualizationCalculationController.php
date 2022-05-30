<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visualization_Participation_Tbl;
use App\Models\Visualization_Performance_Tbl;
use App\Models\Visualization_Performance_Graph_Tbl;
use DB;

class VisualizationCalculationController extends Controller
{


        public function visualization_participation(){
                $state_data=DB::table('all_grade_state_participation_tbl')->get();
                $district_data=DB::table('all_grade_participation_tbl')->get();
                $national_data=DB::table('all_grade_national_participation_tbl')->get();
                DB::table('visualization_participation_tbl')->truncate();

                foreach($state_data as $state){
                        DB::table('visualization_participation_tbl')->insert([
                                'type'=>'state',
                                'state_id'=>$state->state_id,
                                'district_id'=>0,
                                'grade'=>$state->grade,
                                'district_schools_count'=>0,
                                'district_students_count'=>0,
                                'district_teachers_count'=>0,
                                'state_schools_count'=>$state->total_school,
                                'state_teachers_count'=>$state->total_teacher,
                                'state_students_count'=>$state->total_student,
                                'national_schools_count'=>0,
                                'national_teachers_count'=>0,
                                'national_students_count'=>0,
                        ]);
                }
                foreach($national_data as $national){
                        DB::table('visualization_participation_tbl')->insert([
                                'type'=>'national',
                                'state_id'=>0,
                                'district_id'=>0,
                                'grade'=>$national->grade,
                                'district_schools_count'=>0,
                                'district_students_count'=>0,
                                'district_teachers_count'=>0,
                                'state_schools_count'=>0,
                                'state_teachers_count'=>0,
                                'state_students_count'=>0,
                                'national_schools_count'=>$national->total_school,
                                'national_teachers_count'=>$national->total_teacher,
                                'national_students_count'=>$national->total_student,
                        ]);
                }
                foreach($district_data as $district){
                        DB::table('visualization_participation_tbl')->insert([
                                'type'=>'district',
                                'state_id'=>$district->state_id,
                                'district_id'=>$district->district_id,
                                'grade'=>$district->grade,
                                'district_schools_count'=>$district->total_school,
                                'district_students_count'=>$district->total_student,
                                'district_teachers_count'=>$district->total_teacher,
                                'state_schools_count'=>0,
                                'state_teachers_count'=>0,
                                'state_students_count'=>0,
                                'national_schools_count'=>0,
                                'national_teachers_count'=>0,
                                'national_students_count'=>0,
                        ]);
                }

                return "All Visualization Participation Data Created Successfully";
        }
//     public function visualization_participation()
//     {
        
//         /*************************************************************
//          * Name: Jogi
//          * Desc: Visualization for Participations
//          * Date: 08/02/2022
//          * Start Here
//          *************************************************************/
//         DB::table('visualization_participation_tbl')->truncate();
//         $participationQueryForDistrictLevel = "select district_id,grade,
//             SUM(total_school::int)  AS district_schools_count,

//             SUM(total_teacher::int)  AS district_students_count,

//             SUM(total_student::int) AS district_teachers_count

//             from all_grade_participation_tbl
//             group by district_id,grade";
            

//             $participationQueryForDistrictLevel = DB::select($participationQueryForDistrictLevel);
//             $participationQueryForDistrictLevel = json_decode(json_encode($participationQueryForDistrictLevel), true);
            
//             foreach ($participationQueryForDistrictLevel as $district=> $stateLevel){
//                 $participationQueryForDistrictLevel[$district]['type'] = 'district';
//             };
//             Visualization_Participation_Tbl::insert($participationQueryForDistrictLevel);

//             // ******************************State Level Participation data********************************************

//             $participationQueryForStateLevel = "select state_id,grade,
//                 (select SUM(table1.total_school::int) from all_grade_participation_tbl as table1 where table1.state_id=all_grade_participation_tbl.state_id and table1.grade=all_grade_participation_tbl.grade) as state_schools_count,
//                 (select SUM(table1.total_teacher::int) from all_grade_participation_tbl as table1 where table1.state_id=all_grade_participation_tbl.state_id and table1.grade=all_grade_participation_tbl.grade) as state_teachers_count,
//                 (select SUM(table1.total_student::int) from all_grade_participation_tbl as table1 where table1.state_id=all_grade_participation_tbl.state_id and table1.grade=all_grade_participation_tbl.grade) as state_students_count           
//                 from all_grade_participation_tbl
//                 group by state_id,grade";

//             $participationQueryForStateLevel = DB::select($participationQueryForStateLevel);
//             $participationQueryForStateLevel = json_decode(json_encode($participationQueryForStateLevel), true);
//             foreach ($participationQueryForStateLevel as $state=> $stateLevel){
//                 $participationQueryForStateLevel[$state]['type'] = 'state';
//             };
//             Visualization_Participation_Tbl::insert($participationQueryForStateLevel);
          
//             // **********************************Nation Level Participation****************************************************************
//             $participationQueryForNationalLevel = "select grade,
//                 (select SUM(table1.total_school::int) from all_grade_participation_tbl as table1 where  table1.grade=all_grade_participation_tbl.grade) as national_schools_count,
//                 (select SUM(table1.total_teacher::int) from all_grade_participation_tbl as table1 where  table1.grade=all_grade_participation_tbl.grade) as national_teachers_count,
//                 (select SUM(table1.total_student::int) from all_grade_participation_tbl as table1 where  table1.grade=all_grade_participation_tbl.grade) as national_students_count      
//                 from all_grade_participation_tbl
//                 group by grade";

//                 $participationQueryForNationalLevel = DB::select($participationQueryForNationalLevel);
//                 $participationQueryForNationalLevel = json_decode(json_encode($participationQueryForNationalLevel), true);
//                 foreach ($participationQueryForNationalLevel as $national=> $nationalLevel){
//                     $participationQueryForNationalLevel[$national]['type'] = 'national';
//                 }
//                 $msg = Visualization_Participation_Tbl::insert($participationQueryForNationalLevel);
//                 if($msg)
//                 {
//                     echo 'Data Submitted Successfully';
//                 }
//                 else
//                 {
//                     echo 'Something went wrong';
//                 }

//     }

    public function visualization_performance(){
        $subjects=array('language'=>'language','math'=>'math','evs'=>'evs','sci'=>'science','sst'=>'social_science','eng'=>'english','mil'=>'mil');
        $state_data=DB::table('state_grade_level_performance')->get();
        $district_data=DB::table('performance_master')->get();
        $national_data=DB::table('national_grade_level_performance')->get();
        DB::table('visualization_performance_tbl')->truncate();


        foreach($state_data as $state){
                DB::table('visualization_performance_tbl')->insert([
                        'type'=>'state',
                        'district_id'=>0,
                        'state_id'=>$state->state_id,
                        'grade'=>$state->grade,
                        'language_district'=>0,
                        'math_district'=>0,
                        'evs_district'=>0,
                        'mil_district'=>0,
                        'english_district'=>0,
                        'science_district'=>0,
                        'social_science_district'=>0,
                        'language_state'=>0,
                        'math_state'=>0,
                        'evs_state'=>0,
                        'mil_state'=>0,
                        'english_state'=>0,
                        'science_state'=>0,
                        'social_science_state'=>0,
                        'language_national'=>0,
                        'math_national'=>0,
                        'evs_national'=>0,
                        'mil_national'=>0,
                        'english_national'=>0,
                        'science_national'=>0,
                        'social_science_national'=>0,
                ]);
                $formatted_data=json_decode($state->data);
                foreach($formatted_data as $key=>$data){
                        $field=$subjects[$key].'_state';
                        DB::table('visualization_performance_tbl')->where('state_id',$state->state_id)->where('grade',$state->grade)->update([
                                $field=>round((float)$data->cards->state)
                        ]);
                }
        }

        foreach($district_data as $district){
                DB::table('visualization_performance_tbl')->insert([
                        'type'=>'district',
                        'district_id'=>$district->district_id,
                        'state_id'=>$district->state_id,
                        'grade'=>$district->grade,
                        'language_district'=>0,
                        'math_district'=>0,
                        'evs_district'=>0,
                        'mil_district'=>0,
                        'english_district'=>0,
                        'science_district'=>0,
                        'social_science_district'=>0,
                        'language_state'=>0,
                        'math_state'=>0,
                        'evs_state'=>0,
                        'mil_state'=>0,
                        'english_state'=>0,
                        'science_state'=>0,
                        'social_science_state'=>0,
                        'language_national'=>0,
                        'math_national'=>0,
                        'evs_national'=>0,
                        'mil_national'=>0,
                        'english_national'=>0,
                        'science_national'=>0,
                        'social_science_national'=>0,
                ]);
                $formatted_data=json_decode($district->data);
                foreach($formatted_data as $key=>$data){
                        $field=$subjects[$key].'_district';
                        DB::table('visualization_performance_tbl')->where('district_id',$district->district_id)->where('grade',$district->grade)->update([
                                $field=>round((float)$data->cards->district)
                        ]);
                }
        }

        foreach($national_data as $national){
                DB::table('visualization_performance_tbl')->insert([
                        'type'=>'national',
                        'district_id'=>0,
                        'state_id'=>0,
                        'grade'=>$national->grade,
                        'language_district'=>0,
                        'math_district'=>0,
                        'evs_district'=>0,
                        'mil_district'=>0,
                        'english_district'=>0,
                        'science_district'=>0,
                        'social_science_district'=>0,
                        'language_state'=>0,
                        'math_state'=>0,
                        'evs_state'=>0,
                        'mil_state'=>0,
                        'english_state'=>0,
                        'science_state'=>0,
                        'social_science_state'=>0,
                        'language_national'=>0,
                        'math_national'=>0,
                        'evs_national'=>0,
                        'mil_national'=>0,
                        'english_national'=>0,
                        'science_national'=>0,
                        'social_science_national'=>0,
                ]);
                $formatted_data=json_decode($national->data);
                foreach($formatted_data as $key=>$data){
                        $field=$subjects[$key].'_national';
                        DB::table('visualization_performance_tbl')->where('state_id',0)->where('grade',$national->grade)->update([
                                $field=>round((float)$data->cards->national)
                        ]);
                }
        }

        return "All Visualization Performace Card Data Created Successfully";
    }
//     public function visualization_performance()
//     {
//                 /*************************************************************
//          * Name: Jogi
//          * Desc: Visualization for Performance
//          * Date: 08/02/2022
//          * Start Here
//          *************************************************************/
//             // DB::table('visualization_performance_tbl')->truncate();
//             $performanceQueryForDistrictLevel = "select district_id, grade,
//                 round(SUM(L_avg::float)/count(L_avg)) language_district,
//                 round(SUM(m_avg::float)/count(l_avg)) AS math_district,
//                 round(SUM(e_avg::float)/count(e_avg)) AS evs_district,
//                 round(SUM(mil_avg::float)/count(mil_avg)) AS mil_district,
//                 round(SUM(eng_avg::float)/count(eng_avg)) AS english_district,
//                 round(SUM(sci_avg::float)/count(sci_avg)) AS science_district,
//                 round(SUM(sst_avg::float)/count(sst_avg)) AS social_science_district
//                 from at3_performance_data
//                 group by  at3_performance_data.district_id, at3_performance_data.grade";

//             $performanceQueryForDistrictLevel = DB::select($performanceQueryForDistrictLevel);
//             $performanceQueryForDistrictLevel = json_decode(json_encode($performanceQueryForDistrictLevel), true);
            
//             foreach ($performanceQueryForDistrictLevel as $district=> $stateLevel){
//                 $performanceQueryForDistrictLevel[$district]['type'] = 'district';
//             };
//         //    dd($performanceQueryForDistrictLevel);
//             // Visualization_Performance_Tbl::insert($performanceQueryForDistrictLevel);
//             //  dd($performanceQueryForDistrictLevel);
//             // ******************************State Level Performance data********************************************

//             $performanceQueryForStateLevel = "select state_id , grade,
//                 round(SUM(L_avg::float)/count(L_avg)) language_state,
//                 round(SUM(m_avg::float)/count(l_avg)) AS math_state,
//                 round(SUM(e_avg::float)/count(e_avg)) AS evs_state,
//                 round(SUM(mil_avg::float)/count(mil_avg)) AS mil_state,
//                 round(SUM(eng_avg::float)/count(eng_avg)) AS english_state,
//                 round(SUM(sci_avg::float)/count(sci_avg)) AS science_state,
//                 round(SUM(sst_avg::float)/count(sst_avg)) AS social_science_state
//                 from at3_performance_data
//                 group by at3_performance_data.state_id, at3_performance_data.grade";

//             $performanceQueryForStateLevel = DB::select($performanceQueryForStateLevel);
//             $performanceQueryForStateLevel = json_decode(json_encode($performanceQueryForStateLevel), true);
//             foreach ($performanceQueryForStateLevel as $state=> $stateLevel){
//                 $performanceQueryForStateLevel[$state]['type'] = 'state';
//             };
//             // dd($performanceQueryForStateLevel);
//             // Visualization_Performance_Tbl::insert($performanceQueryForStateLevel);
//             // dd($performanceQueryForStateLevel);
//             // **********************************Nation Level Performance****************************************************************
//                 $performanceQueryForNationalLevel = "select  grade,
//                     round(SUM(L_avg::float)/count(L_avg)) language_national,
//                     round(SUM(m_avg::float)/count(l_avg)) AS math_national,
//                     round(SUM(e_avg::float)/count(e_avg)) AS evs_national,
//                     round(SUM(mil_avg::float)/count(mil_avg)) AS mil_national,
//                     round(SUM(eng_avg::float)/count(eng_avg)) AS english_national,
//                     round(SUM(sci_avg::float)/count(sci_avg)) AS science_national,
//                     round(SUM(sst_avg::float)/count(sst_avg)) AS social_science_national
//                     from at3_performance_data
//                     group by  at3_performance_data.grade
//                     ";

//                 $performanceQueryForNationalLevel = DB::select($performanceQueryForNationalLevel);
//                 $performanceQueryForNationalLevel = json_decode(json_encode($performanceQueryForNationalLevel), true);
//                 foreach ($performanceQueryForNationalLevel as $national=> $nationalLevel){
//                     $performanceQueryForNationalLevel[$national]['type'] = 'national';
//                 }
//                 // dd($performanceQueryForNationalLevel);
//                 $msg = Visualization_Performance_Tbl::insert($performanceQueryForNationalLevel);
//                 if($msg)
//                 {
//                     echo 'Data  Submitted Successfully';
//                 }
//                 else
//                 {
//                     echo 'Something went wrong';
//                 }
//     }
    public function visualization_performance_graph()
    {
        DB::table('visualization_performance_graph_tbl')->truncate();
        $districtLevelPerfomanceGraph = $this->getDistrictLevelPerfomanceGraph();
        if($districtLevelPerfomanceGraph)
        {
                $stateLevelPerfomanceGraph = $this->getStateLevelPerfomanceGraph();
                if($stateLevelPerfomanceGraph)
                {
                        $nationLevelPerfomanceGraph = $this->getNationevelPerfomanceGraph();
                        if($nationLevelPerfomanceGraph)
                        {
                                echo 'Performance Graph Data Successfully Inserted';
                        }
                }
        }
        
        
        
    }


    public function queryFunctionVisualizationGraph($querySyntax,$queryGroupSyntax,$queryGroupCondition)
    {
        $query ="select ".$querySyntax."  grade, count(id) AS total_student, count(CASE WHEN location = '1' THEN 'Rural' END) AS rural_location, count(CASE WHEN location = '2' THEN 'Urban' END) AS urban_location, count(CASE WHEN management= 'F1' THEN 'Govt School' END) AS govt_school, count(CASE WHEN management= 'F2' THEN 'Govt Aided' END) AS govt_aided_school, count(CASE WHEN management= 'F3' THEN 'Private' END) AS private_school, count(CASE WHEN management= 'F4' THEN 'Central govt' END) AS central_govt_school, count(CASE WHEN socialgrp= '1' THEN 'SC' END) AS sc_social_group, count(CASE WHEN socialgrp= '2' THEN 'OBC' END) AS obc_social_group, count(CASE WHEN socialgrp= '3' THEN 'ST' END) AS st_social_group, count(CASE WHEN socialgrp= '4' THEN 'General' END) AS general_social_group, count(CASE WHEN gender= '1' THEN 'Boys' END) AS male_gender, count(CASE WHEN gender= '2' THEN 'Girls' END) AS female_gender,
        round(SUM(L_avg::float)/count(L_avg)) AS avg_l_marks, SUM(l_avg::float) AS sum_l_marks, count(m_avg) AS total_m_student, round(SUM(m_avg::float)/count(l_avg)) AS avg_m_marks, SUM(m_avg::float) AS sum_m_marks, count(e_avg) AS total_e_student, round(SUM(e_avg::float)/count(e_avg)) AS avg_e_marks, SUM(e_avg::float) AS sum_e_marks, count(mil_avg) AS total_mil_student, round(SUM(mil_avg::float)/count(mil_avg)) AS avg_mil_marks, SUM(mil_avg::float) AS sum_mil_marks, count(eng_avg) AS total_eng_student, round(SUM(eng_avg::float)/count(eng_avg)) AS avg_eng_marks, SUM(eng_avg::float) AS sum_eng_marks, count(sci_avg) AS total_sci_student, round(SUM(sci_avg::float)/count(sci_avg)) AS avg_sci_marks, SUM(sci_avg::float) AS sum_sci_marks, count(sst_avg) AS total_sst_student, round(SUM(sst_avg::float)/count(sst_avg)) AS avg_sst_marks, SUM(sst_avg::float) AS sum_sst_marks,
        round(sum((CASE WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.l_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS l_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.l_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS l_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.l_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS l_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.l_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS l_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.m_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS m_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.m_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS m_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.m_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS m_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.m_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS m_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.e_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS evs_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.e_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS evs_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.e_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS evs_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.e_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS evs_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.mil_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS mil_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.mil_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS mil_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.mil_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS mil_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.mil_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS mil_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.eng_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS eng_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.eng_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS eng_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.eng_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS eng_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.eng_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS eng_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.sci_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sci_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.sci_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sci_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.sci_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sci_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.sci_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sci_general_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.sst_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '1' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sst_sc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.sst_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '2' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sst_obc_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.sst_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '3' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sst_st_social_group,
        round(sum((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.sst_avg
                END)::decimal)/count((CASE 
                WHEN at3_performance_data.socialgrp= '4' THEN at3_performance_data.socialgrp
                END)::decimal)) AS sst_general_social_group,
        round(sum(CASE WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS l_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS l_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS l_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS l_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS m_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS m_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS m_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS m_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS evs_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS evs_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS evs_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS evs_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS mil_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS mil_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS mil_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS mil_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS eng_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS eng_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS eng_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS eng_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS sci_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS sci_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS sci_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS sci_central_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F1' THEN at3_performance_data.management
                END)::decimal) AS sst_govt_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F2' THEN at3_performance_data.management
                END)::decimal) AS sst_govt_aided_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F3' THEN at3_performance_data.management
                END)::decimal) AS sst_private_management,
        round(sum(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.management= 'F4' THEN at3_performance_data.management
                END)::decimal) AS sst_central_govt_management,
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS l_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS l_urban_location,
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS m_rural_location
                ,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS m_urban_location,
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS e_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS e_urban_location,        
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS mil_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS mil_urban_location,
        round(sum(CASE WHEN at3_performance_data.location= '1' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS eng_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS eng_urban_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS sci_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS sci_urban_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '1' THEN at3_performance_data.location
                END)::decimal) AS sst_rural_location,
        round(sum(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.location= '2' THEN at3_performance_data.location
                END)::decimal) AS sst_urban_location,
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS l_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.l_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS l_female_gender,
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS m_male_gender
                ,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.m_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS m_female_gender,
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS e_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.e_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS e_female_gender,        
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS mil_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.mil_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS mil_female_gender,
        round(sum(CASE WHEN at3_performance_data.gender= '1' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS eng_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.eng_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS eng_female_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS sci_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.sci_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS sci_female_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '1' THEN at3_performance_data.gender
                END)::decimal) AS sst_male_gender,
        round(sum(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.sst_avg
                END::float)::decimal/count(CASE 
                WHEN at3_performance_data.gender= '2' THEN at3_performance_data.gender
                END)::decimal) AS sst_female_gender
        from at3_performance_data
        ".$queryGroupCondition."
        group by ".$queryGroupSyntax." at3_performance_data.grade";

        return $query;

        // where state_id=7 and grade=3

    }



 

   
    public function queryFunctionPerformanceLevel($querySyntax,$queryGroupSyntax,$queryGroupCondition)
    {
        $query ="select ".$querySyntax."  grade, count(CASE WHEN round(m_avg::float)<=35 THEN m_avg END) as b,count(m_avg::float),
        round((count(CASE WHEN (l_avg::float)>=1 and(l_avg::float)<=30 THEN l_avg END)::decimal*100)/count(l_avg::float)) AS l_avg_below_basic,
        round((count(CASE WHEN (l_avg::float)>=31 and (l_avg::float)<=50 THEN l_avg END)::decimal*100)/count(l_avg::float)) AS l_avg_basic,
        round((count(CASE WHEN (l_avg::float)>=51 and (l_avg::float)<=75 THEN l_avg END)::decimal*100)/count(l_avg::float)) AS l_avg_proficient,
        round((count(CASE WHEN (l_avg::float)>=76 and (l_avg::float)<=100 THEN l_avg END)::decimal*100)/count(l_avg::float)) AS l_avg_advanced,
        round((count(CASE WHEN (m_avg::float)>=1 and(m_avg::float)<=30 THEN m_avg END)::decimal*100)/count(m_avg::float)) AS m_avg_below_basic,
        round((count(CASE WHEN (m_avg::float)>=31 and (m_avg::float)<=50 THEN m_avg END)::decimal*100)/count(m_avg::float)) AS m_avg_basic,
        round((count(CASE WHEN (m_avg::float)>=51 and (m_avg::float)<=75 THEN m_avg END)::decimal*100)/count(m_avg::float)) AS m_avg_proficient,
        round((count(CASE WHEN (m_avg::float)>=76 and (m_avg::float)<=100 THEN m_avg END)::decimal*100)/count(m_avg::float)) AS m_avg_advanced,
        round((count(CASE WHEN (e_avg::float)>=1 and(e_avg::float)<=30 THEN e_avg END)::decimal*100)/count(e_avg::float)) AS e_avg_below_basic,
        round((count(CASE WHEN (e_avg::float)>=31 and (e_avg::float)<=50 THEN e_avg END)::decimal*100)/count(e_avg::float)) AS e_avg_basic,
        round((count(CASE WHEN (e_avg::float)>=51 and (e_avg::float)<=75 THEN e_avg END)::decimal*100)/count(e_avg::float)) AS e_avg_proficient,
        round((count(CASE WHEN (e_avg::float)>=76 and (e_avg::float)<=100 THEN e_avg END)::decimal*100)/count(e_avg::float)) AS e_avg_advanced,
        round((count(CASE WHEN (mil_avg::float)>=1 and (mil_avg::float)<=30 THEN mil_avg END)::decimal*100)/count(mil_avg::float)) AS mil_avg_below_basic,
        round((count(CASE WHEN (mil_avg::float)>=31 and (mil_avg::float)<=50 THEN mil_avg END)::decimal*100)/count(m_avg::float)) AS mil_avg_basic,
        round((count(CASE WHEN (mil_avg::float)>=51 and (mil_avg::float)<=75 THEN mil_avg END)::decimal*100)/count(m_avg::float)) AS mil_avg_proficient,
        round((count(CASE WHEN (mil_avg::float)>=76 and (mil_avg::float)<=100 THEN mil_avg END)::decimal*100)/count(m_avg::float)) AS mil_avg_advanced,
        round((count(CASE WHEN (eng_avg::float)>=1 and(eng_avg::float)<=30 THEN eng_avg END)::decimal*100)/count(eng_avg::float)) AS eng_avg_below_basic,
        round((count(CASE WHEN (eng_avg::float)>=31 and (eng_avg::float)<=50 THEN eng_avg END)::decimal*100)/count(m_avg::float)) AS eng_avg_basic,
        round((count(CASE WHEN (eng_avg::float)>=51 and (eng_avg::float)<=75 THEN eng_avg END)::decimal*100)/count(m_avg::float)) AS eng_avg_proficient,
        round((count(CASE WHEN (eng_avg::float)>=76 and (eng_avg::float)<=100 THEN eng_avg END)::decimal*100)/count(m_avg::float)) AS mil_avg_advanced,
        round((count(CASE WHEN (sci_avg::float)>=1 and(sci_avg::float)<=30 THEN sci_avg END)::decimal*100)/count(sci_avg::float)) AS sci_avg_below_basic,
        round((count(CASE WHEN (sci_avg::float)>=31 and (sci_avg::float)<=50 THEN sci_avg END)::decimal*100)/count(m_avg::float)) AS sci_avg_basic,
        round((count(CASE WHEN (sci_avg::float)>=51 and (sci_avg::float)<=75 THEN sci_avg END)::decimal*100)/count(m_avg::float)) AS sci_avg_proficient,
        round((count(CASE WHEN (sci_avg::float)>=76 and (sci_avg::float)<=100 THEN sci_avg END)::decimal*100)/count(m_avg::float)) AS sci_avg_advanced,
        round((count(CASE WHEN (sst_avg::float)>=1 and (sst_avg::float)<=30 THEN sst_avg END)::decimal*100)/count(sst_avg::float)) AS sst_avg_below_basic,
        round((count(CASE WHEN (sst_avg::float)>=31 and (sst_avg::float)<=50 THEN sst_avg END)::decimal*100)/count(m_avg::float)) AS sst_avg_basic,
        round((count(CASE WHEN (sst_avg::float)>=51 and (sst_avg::float)<=75 THEN sst_avg END)::decimal*100)/count(m_avg::float)) AS sst_avg_proficient,
        round((count(CASE WHEN (sst_avg::float)>=76 and (sst_avg::float)<=100 THEN sst_avg END)::decimal*100)/count(m_avg::float)) AS sst_avg_advanced
        from at3_performance_data
        ".$queryGroupCondition."
        group by ".$queryGroupSyntax." at3_performance_data.grade";

        return $query;

    }
    public function getDistrictLevelPerfomanceGraph()
    {
        $performanceDistrictLevelGraph = array();
        // District Level Change Syntax
        $querySyntax = 'state_id,district_id,';
        $queryGroupSyntax = 'at3_performance_data.state_id, at3_performance_data.district_id,';
        $queryGroupCondition = '';
        $query = $this->queryFunctionVisualizationGraph($querySyntax,$queryGroupSyntax,$queryGroupCondition);
        $performanceDistrictGraph = DB::select($query);
        // dd($performanceDistrictGraph);
        if(count($performanceDistrictGraph)>0)
        {
        foreach($performanceDistrictGraph as $performanceDistrictGraph)
        {

                $querySyntax = 'state_id,district_id,';
                $queryGroupSyntax = 'at3_performance_data.state_id, at3_performance_data.district_id,';
                $queryGroupCondition = 'where  at3_performance_data.state_id='.(int)$performanceDistrictGraph->state_id.' and grade = '.(int)$performanceDistrictGraph->grade.' and at3_performance_data.district_id = '.(int)$performanceDistrictGraph->district_id;
                $queryPerformanceLevel = $this->queryFunctionPerformanceLevel($querySyntax,$queryGroupSyntax,$queryGroupCondition);
                $districtPerformanceLevel = DB::select($queryPerformanceLevel);
            // Calculation Language  for District Level 
            $newArray['language'] =array(
                'gender'=>array(
                    'district'=>array("boys"=>isset($performanceDistrictGraph->l_male_gender)?$performanceDistrictGraph->l_male_gender:'0',"girls"=>isset($performanceDistrictGraph->l_female_gender)?$performanceDistrictGraph->l_female_gender:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($performanceDistrictGraph->l_urban_location)?$performanceDistrictGraph->l_urban_location:'0',"rural"=>isset($performanceDistrictGraph->l_rural_location)?$performanceDistrictGraph->l_rural_location:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($performanceDistrictGraph->l_govt_management)?$performanceDistrictGraph->l_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->l_govt_aided_management)?$performanceDistrictGraph->l_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->l_private_management)?$performanceDistrictGraph->l_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->l_central_govt_management)?$performanceDistrictGraph->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($performanceDistrictGraph->l_sc_social_group)?$performanceDistrictGraph->l_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->l_obc_social_group)?$performanceDistrictGraph->l_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->l_st_social_group)?$performanceDistrictGraph->l_st_social_group:'0',"general"=>isset($performanceDistrictGraph->l_general_social_group)?$performanceDistrictGraph->l_general_social_group:'0')),
                'performance_level'=>array(
                        'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->m_avg_below_basic)?$districtPerformanceLevel[0]->m_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->m_avg_basic)?$districtPerformanceLevel[0]->m_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->m_avg_proficient)?$districtPerformanceLevel[0]->m_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->m_avg_advanced)?$districtPerformanceLevel[0]->m_avg_advanced:'0')),
                
                'learning_outcome'=>$this->districtLevelLearningOutcome((int)$performanceDistrictGraph->district_id,(int)$performanceDistrictGraph->grade,'L'),
                'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4))))),
                'by_subgroup'=>array('totals'=>((int)$performanceDistrictGraph->l_male_gender+(int)$performanceDistrictGraph->l_female_gender),'boys'=>isset($performanceDistrictGraph->l_male_gender)?$performanceDistrictGraph->l_male_gender:'0','girls'=>isset($performanceDistrictGraph->l_female_gender)?$performanceDistrictGraph->l_female_gender:'0',"urban"=>isset($performanceDistrictGraph->l_urban_location)?$performanceDistrictGraph->l_urban_location:'0',"rural"=>isset($performanceDistrictGraph->l_rural_location)?$performanceDistrictGraph->l_rural_location:'0',"govt"=>isset($performanceDistrictGraph->l_govt_management)?$performanceDistrictGraph->l_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->l_govt_aided_management)?$performanceDistrictGraph->l_govt_aided_management:'0',"sc"=>isset($performanceDistrictGraph->l_sc_social_group)?$performanceDistrictGraph->l_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->l_obc_social_group)?$performanceDistrictGraph->l_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->l_st_social_group)?$performanceDistrictGraph->l_st_social_group:'0',"general"=>isset($performanceDistrictGraph->l_general_social_group)?$performanceDistrictGraph->l_general_social_group:'0') 
                );
            // Calculation Math  for District Level 
            $newArray['math'] =array(
                'gender'=>array(
                    'district'=>array("boys"=>isset($performanceDistrictGraph->m_male_gender)?$performanceDistrictGraph->m_male_gender:'0',"girls"=>isset($performanceDistrictGraph->m_female_gender)?$performanceDistrictGraph->m_female_gender:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($performanceDistrictGraph->m_urban_location)?$performanceDistrictGraph->m_urban_location:'0',"rural"=>isset($performanceDistrictGraph->m_rural_location)?$performanceDistrictGraph->m_rural_location:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($performanceDistrictGraph->m_govt_management)?$performanceDistrictGraph->m_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->m_govt_aided_management)?$performanceDistrictGraph->m_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->m_private_management)?$performanceDistrictGraph->m_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->m_central_govt_management)?$performanceDistrictGraph->m_central_govt_management:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($performanceDistrictGraph->m_sc_social_group)?$performanceDistrictGraph->m_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->m_obc_social_group)?$performanceDistrictGraph->m_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->m_st_social_group)?$performanceDistrictGraph->m_st_social_group:'0',"general"=>isset($performanceDistrictGraph->m_general_social_group)?$performanceDistrictGraph->m_general_social_group:'0')),
                'performance_level'=>array(
                        'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->m_avg_below_basic)?$districtPerformanceLevel[0]->m_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->m_avg_basic)?$districtPerformanceLevel[0]->m_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->m_avg_proficient)?$districtPerformanceLevel[0]->m_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->m_avg_advanced)?$districtPerformanceLevel[0]->m_avg_advanced:'0')),
                'learning_outcome'=>$this->districtLevelLearningOutcome((int)$performanceDistrictGraph->district_id,(int)$performanceDistrictGraph->grade,'M'),
                'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4))))),
                 'by_subgroup'=>array('totals'=>((int)$performanceDistrictGraph->l_male_gender+(int)$performanceDistrictGraph->l_female_gender),"boys"=>isset($performanceDistrictGraph->l_male_gender)?$performanceDistrictGraph->l_male_gender:'0',"girls"=>isset($performanceDistrictGraph->l_female_gender)?$performanceDistrictGraph->l_female_gender:'0',"urban"=>isset($performanceDistrictGraph->m_urban_location)?$performanceDistrictGraph->m_urban_location:'0',"rural"=>isset($performanceDistrictGraph->m_rural_location)?$performanceDistrictGraph->m_rural_location:'0',"govt"=>isset($performanceDistrictGraph->m_govt_management)?$performanceDistrictGraph->m_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->m_govt_aided_management)?$performanceDistrictGraph->m_govt_aided_management:'0',"sc"=>isset($performanceDistrictGraph->m_sc_social_group)?$performanceDistrictGraph->m_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->m_obc_social_group)?$performanceDistrictGraph->m_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->m_st_social_group)?$performanceDistrictGraph->m_st_social_group:'0',"general"=>isset($performanceDistrictGraph->m_general_social_group)?$performanceDistrictGraph->m_general_social_group:'0')
                );
            // Calculation EVS  for District Level 
            $newArray['evs'] =array(
                    'gender'=>array(
                        'district'=>array("boys"=>isset($performanceDistrictGraph->e_male_gender)?$performanceDistrictGraph->e_male_gender:'0',"girls"=>isset($performanceDistrictGraph->e_female_gender)?$performanceDistrictGraph->e_female_gender:'0')),
                    'location'=>array(
                        'district'=>array("urban"=>isset($performanceDistrictGraph->e_urban_location)?$performanceDistrictGraph->e_urban_location:'0',"rural"=>isset($performanceDistrictGraph->e_rural_location)?$performanceDistrictGraph->e_rural_location:'0')),
                    'management'=>array(
                        'district'=>array("govt"=>isset($performanceDistrictGraph->e_govt_management)?$performanceDistrictGraph->e_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->e_govt_aided_management)?$performanceDistrictGraph->e_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->e_private_management)?$performanceDistrictGraph->e_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->e_central_govt_management)?$performanceDistrictGraph->e_central_govt_management:'0')),
                    'socialgroup'=>array(
                        'district'=>array("sc"=>isset($performanceDistrictGraph->e_sc_social_group)?$performanceDistrictGraph->e_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->e_obc_social_group)?$performanceDistrictGraph->e_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->e_st_social_group)?$performanceDistrictGraph->e_st_social_group:'0',"general"=>isset($performanceDistrictGraph->e_general_social_group)?$performanceDistrictGraph->e_general_social_group:'0')),
                    'performance_level'=>array(
                            'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->e_avg_below_basic)?$districtPerformanceLevel[0]->e_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->e_avg_basic)?$districtPerformanceLevel[0]->e_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->e_avg_proficient)?$districtPerformanceLevel[0]->e_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->e_avg_advanced)?$districtPerformanceLevel[0]->e_avg_advanced:'0')),
                    'learning_outcome'=>$this->districtLevelLearningOutcome((int)$performanceDistrictGraph->district_id,(int)$performanceDistrictGraph->grade,'EVS'),
                    'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4))))),
                    'by_subgroup'=>array('totals'=>((int)$performanceDistrictGraph->e_male_gender+(int)$performanceDistrictGraph->e_female_gender),"boys"=>isset($performanceDistrictGraph->e_male_gender)?$performanceDistrictGraph->e_male_gender:'0',"girls"=>isset($performanceDistrictGraph->e_female_gender)?$performanceDistrictGraph->e_female_gender:'0',"urban"=>isset($performanceDistrictGraph->e_urban_location)?$performanceDistrictGraph->e_urban_location:'0',"rural"=>isset($performanceDistrictGraph->e_rural_location)?$performanceDistrictGraph->e_rural_location:'0',"govt"=>isset($performanceDistrictGraph->e_govt_management)?$performanceDistrictGraph->e_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->e_govt_aided_management)?$performanceDistrictGraph->e_govt_aided_management:'0',"sc"=>isset($performanceDistrictGraph->e_sc_social_group)?$performanceDistrictGraph->e_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->e_obc_social_group)?$performanceDistrictGraph->e_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->e_st_social_group)?$performanceDistrictGraph->e_st_social_group:'0',"general"=>isset($performanceDistrictGraph->e_general_social_group)?$performanceDistrictGraph->e_general_social_group:'0') 
                    
                        );
            // Calculation EVS  for District Level 
            $newArray['mil'] =array(
                        'gender'=>array(
                            'district'=>array("boys"=>isset($performanceDistrictGraph->mil_male_gender)?$performanceDistrictGraph->mil_male_gender:'0',"girls"=>isset($performanceDistrictGraph->mil_female_gender)?$performanceDistrictGraph->mil_female_gender:'0')),
                        'location'=>array(
                            'district'=>array("urban"=>isset($performanceDistrictGraph->mil_urban_location)?$performanceDistrictGraph->mil_urban_location:'0',"rural"=>isset($performanceDistrictGraph->mil_rural_location)?$performanceDistrictGraph->mil_rural_location:'0')),
                        'management'=>array(
                            'district'=>array("govt"=>isset($performanceDistrictGraph->mil_govt_management)?$performanceDistrictGraph->mil_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->mil_govt_aided_management)?$performanceDistrictGraph->mil_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->mil_private_management)?$performanceDistrictGraph->mil_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->mil_central_govt_management)?$performanceDistrictGraph->mil_central_govt_management:'0')),
                        'socialgroup'=>array(
                            'district'=>array("sc"=>isset($performanceDistrictGraph->mil_sc_social_group)?$performanceDistrictGraph->mil_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->mil_obc_social_group)?$performanceDistrictGraph->mil_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->mil_st_social_group)?$performanceDistrictGraph->mil_st_social_group:'0',"general"=>isset($performanceDistrictGraph->mil_general_social_group)?$performanceDistrictGraph->mil_general_social_group:'0')),
                        'performance_level'=>array(
                                'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->mil_avg_below_basic)?$districtPerformanceLevel[0]->mil_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->mil_avg_basic)?$districtPerformanceLevel[0]->mil_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->mil_avg_proficient)?$districtPerformanceLevel[0]->mil_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->mil_avg_advanced)?$districtPerformanceLevel[0]->mil_avg_advanced:'0')),
                        'learning_outcome'=>$this->districtLevelLearningOutcome((int)$performanceDistrictGraph->district_id,(int)$performanceDistrictGraph->grade,'MIL'),
                        'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4))))),
                        'by_subgroup'=>array('totals'=>((int)$performanceDistrictGraph->mil_male_gender+(int)$performanceDistrictGraph->mil_female_gender),"boys"=>isset($performanceDistrictGraph->mil_male_gender)?$performanceDistrictGraph->mil_male_gender:'0',"girls"=>isset($performanceDistrictGraph->mil_female_gender)?$performanceDistrictGraph->mil_female_gender:'0',"urban"=>isset($performanceDistrictGraph->mil_urban_location)?$performanceDistrictGraph->mil_urban_location:'0',"rural"=>isset($performanceDistrictGraph->mil_rural_location)?$performanceDistrictGraph->mil_rural_location:'0',"govt"=>isset($performanceDistrictGraph->mil_govt_management)?$performanceDistrictGraph->mil_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->mil_govt_aided_management)?$performanceDistrictGraph->mil_govt_aided_management:'0',"sc"=>isset($performanceDistrictGraph->mil_sc_social_group)?$performanceDistrictGraph->mil_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->mil_obc_social_group)?$performanceDistrictGraph->mil_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->mil_st_social_group)?$performanceDistrictGraph->mil_st_social_group:'0',"general"=>isset($performanceDistrictGraph->mil_general_social_group)?$performanceDistrictGraph->mil_general_social_group:'0')
                            );
            // Calculation ENGLISH  for District Level 
            $newArray['eng'] =array(
                        'gender'=>array(
                            'district'=>array("boys"=>isset($performanceDistrictGraph->eng_male_gender)?$performanceDistrictGraph->eng_male_gender:'0',"girls"=>isset($performanceDistrictGraph->eng_female_gender)?$performanceDistrictGraph->eng_female_gender:'0')),
                        'location'=>array(
                            'district'=>array("urban"=>isset($performanceDistrictGraph->eng_urban_location)?$performanceDistrictGraph->eng_urban_location:'0',"rural"=>isset($performanceDistrictGraph->eng_rural_location)?$performanceDistrictGraph->eng_rural_location:'0')),
                        'management'=>array(
                            'district'=>array("govt"=>isset($performanceDistrictGraph->eng_govt_management)?$performanceDistrictGraph->eng_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->eng_govt_aided_management)?$performanceDistrictGraph->eng_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->eng_private_management)?$performanceDistrictGraph->eng_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->eng_central_govt_management)?$performanceDistrictGraph->eng_central_govt_management:'0')),
                        'socialgroup'=>array(
                            'district'=>array("sc"=>isset($performanceDistrictGraph->eng_sc_social_group)?$performanceDistrictGraph->eng_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->eng_obc_social_group)?$performanceDistrictGraph->eng_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->eng_st_social_group)?$performanceDistrictGraph->eng_st_social_group:'0',"general"=>isset($performanceDistrictGraph->eng_general_social_group)?$performanceDistrictGraph->eng_general_social_group:'0')),
                        'performance_level'=>array(
                                'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->sci_avg_below_basic)?$districtPerformanceLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->sci_avg_basic)?$districtPerformanceLevel[0]->sci_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->sci_avg_proficient)?$districtPerformanceLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->sci_avg_advanced)?$districtPerformanceLevel[0]->sci_avg_advanced:'0')),
                        'learning_outcome'=>$this->districtLevelLearningOutcome((int)$performanceDistrictGraph->district_id,(int)$performanceDistrictGraph->grade,'E'),
                        'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4))))),
                        'by_subgroup'=>array('totals'=>((int)$performanceDistrictGraph->eng_male_gender+(int)$performanceDistrictGraph->eng_female_gender),"boys"=>isset($performanceDistrictGraph->eng_male_gender)?$performanceDistrictGraph->eng_male_gender:'0',"girls"=>isset($performanceDistrictGraph->eng_female_gender)?$performanceDistrictGraph->eng_female_gender:'0',"urban"=>isset($performanceDistrictGraph->eng_urban_location)?$performanceDistrictGraph->eng_urban_location:'0',"rural"=>isset($performanceDistrictGraph->eng_rural_location)?$performanceDistrictGraph->eng_rural_location:'0',"govt"=>isset($performanceDistrictGraph->eng_govt_management)?$performanceDistrictGraph->eng_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->eng_govt_aided_management)?$performanceDistrictGraph->eng_govt_aided_management:'0',"sc"=>isset($performanceDistrictGraph->eng_sc_social_group)?$performanceDistrictGraph->eng_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->eng_obc_social_group)?$performanceDistrictGraph->eng_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->eng_st_social_group)?$performanceDistrictGraph->eng_st_social_group:'0',"general"=>isset($performanceDistrictGraph->eng_general_social_group)?$performanceDistrictGraph->eng_general_social_group:'0') 
                        
                        
                            );
            // Calculation SCIENCE  for District Level 
            $newArray['sci'] =array(
                            'gender'=>array(
                                'district'=>array("boys"=>isset($performanceDistrictGraph->sci_male_gender)?$performanceDistrictGraph->sci_male_gender:'0',"girls"=>isset($performanceDistrictGraph->sci_female_gender)?$performanceDistrictGraph->sci_female_gender:'0')),
                            'location'=>array(
                                'district'=>array("urban"=>isset($performanceDistrictGraph->sci_urban_location)?$performanceDistrictGraph->sci_urban_location:'0',"rural"=>isset($performanceDistrictGraph->sci_rural_location)?$performanceDistrictGraph->sci_rural_location:'0')),
                            'management'=>array(
                                'district'=>array("govt"=>isset($performanceDistrictGraph->sci_govt_management)?$performanceDistrictGraph->sci_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->sci_govt_aided_management)?$performanceDistrictGraph->sci_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->sci_private_management)?$performanceDistrictGraph->sci_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->sci_central_govt_management)?$performanceDistrictGraph->sci_central_govt_management:'0')),
                            'socialgroup'=>array(
                                'district'=>array("sc"=>isset($performanceDistrictGraph->sci_sc_social_group)?$performanceDistrictGraph->sci_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->sci_obc_social_group)?$performanceDistrictGraph->sci_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->sci_st_social_group)?$performanceDistrictGraph->sci_st_social_group:'0',"general"=>isset($performanceDistrictGraph->sci_general_social_group)?$performanceDistrictGraph->sci_general_social_group:'0')),
                            'performance_level'=>array(
                                    'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->sci_avg_below_basic)?$districtPerformanceLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->sci_avg_basic)?$districtPerformanceLevel[0]->sci_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->sci_avg_proficient)?$districtPerformanceLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->sci_avg_advanced)?$districtPerformanceLevel[0]->sci_avg_advanced:'0')),
                            'learning_outcome'=>$this->districtLevelLearningOutcome((int)$performanceDistrictGraph->district_id,(int)$performanceDistrictGraph->grade,'SCI'),
                            'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4))))),
                            'by_subgroup'=>array('totals'=>((int)$performanceDistrictGraph->sci_male_gender+(int)$performanceDistrictGraph->sci_female_gender),"boys"=>isset($performanceDistrictGraph->sci_male_gender)?$performanceDistrictGraph->sci_male_gender:'0',"girls"=>isset($performanceDistrictGraph->sci_female_gender)?$performanceDistrictGraph->sci_female_gender:'0',"urban"=>isset($performanceDistrictGraph->sci_urban_location)?$performanceDistrictGraph->sci_urban_location:'0',"rural"=>isset($performanceDistrictGraph->sci_rural_location)?$performanceDistrictGraph->sci_rural_location:'0',"govt"=>isset($performanceDistrictGraph->sci_govt_management)?$performanceDistrictGraph->sci_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->sci_govt_aided_management)?$performanceDistrictGraph->sci_govt_aided_management:'0',"sc"=>isset($performanceDistrictGraph->sci_sc_social_group)?$performanceDistrictGraph->sci_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->sci_obc_social_group)?$performanceDistrictGraph->sci_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->sci_st_social_group)?$performanceDistrictGraph->sci_st_social_group:'0',"general"=>isset($performanceDistrictGraph->sci_general_social_group)?$performanceDistrictGraph->sci_general_social_group:'0') 
                                );
            
                                // Calculation SST  for District Level 
            $newArray['sst'] =array(
                        'gender'=>array(
                            'district'=>array("boys"=>isset($performanceDistrictGraph->sst_male_gender)?$performanceDistrictGraph->sst_male_gender:'0',"girls"=>isset($performanceDistrictGraph->sst_female_gender)?$performanceDistrictGraph->sst_female_gender:'0')),
                        'location'=>array(
                            'district'=>array("urban"=>isset($performanceDistrictGraph->sst_urban_location)?$performanceDistrictGraph->sst_urban_location:'0',"rural"=>isset($performanceDistrictGraph->sst_rural_location)?$performanceDistrictGraph->sst_rural_location:'0')),
                        'management'=>array(
                            'district'=>array("govt"=>isset($performanceDistrictGraph->sst_govt_management)?$performanceDistrictGraph->sst_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->sst_govt_aided_management)?$performanceDistrictGraph->sst_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->sst_private_management)?$performanceDistrictGraph->sst_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->sst_central_govt_management)?$performanceDistrictGraph->sst_central_govt_management:'0')),
                        'socialgroup'=>array(
                            'district'=>array("sc"=>isset($performanceDistrictGraph->sst_sc_social_group)?$performanceDistrictGraph->sst_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->sst_obc_social_group)?$performanceDistrictGraph->sst_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->sst_st_social_group)?$performanceDistrictGraph->sst_st_social_group:'0',"general"=>isset($performanceDistrictGraph->sst_general_social_group)?$performanceDistrictGraph->sst_general_social_group:'0')),
                        'performance_level'=>array(
                                'district'=>array("below_basic"=>isset($districtPerformanceLevel[0]->sst_avg_below_basic)?$districtPerformanceLevel[0]->sst_avg_below_basic:'0',"basic"=>isset($districtPerformanceLevel[0]->sst_avg_basic)?$districtPerformanceLevel[0]->sst_avg_basic:'0',"proficient"=>isset($districtPerformanceLevel[0]->sst_avg_proficient)?$districtPerformanceLevel[0]->sst_avg_proficient:'0',"advanced"=>isset($districtPerformanceLevel[0]->sst_avg_advanced)?$districtPerformanceLevel[0]->sst_avg_advanced:'0')),
                                'learning_outcome'=>$this->districtLevelLearningOutcome((int)$performanceDistrictGraph->district_id,(int)$performanceDistrictGraph->grade,'SST'),
                                'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$performanceDistrictGraph->state_id,4))))),
                        'by_subgroup'=>array('totals'=>((int)$performanceDistrictGraph->sst_male_gender+(int)$performanceDistrictGraph->sst_female_gender),"boys"=>isset($performanceDistrictGraph->sst_male_gender)?$performanceDistrictGraph->sst_male_gender:'0',"girls"=>isset($performanceDistrictGraph->sst_female_gender)?$performanceDistrictGraph->sst_female_gender:'0',"urban"=>isset($performanceDistrictGraph->sst_urban_location)?$performanceDistrictGraph->sst_urban_location:'0',"rural"=>isset($performanceDistrictGraph->sst_rural_location)?$performanceDistrictGraph->sst_rural_location:'0',"govt"=>isset($performanceDistrictGraph->sst_govt_management)?$performanceDistrictGraph->sst_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->sst_govt_aided_management)?$performanceDistrictGraph->sst_govt_aided_management:'0',"sc"=>isset($performanceDistrictGraph->sst_sc_social_group)?$performanceDistrictGraph->sst_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->sst_obc_social_group)?$performanceDistrictGraph->sst_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->sst_st_social_group)?$performanceDistrictGraph->sst_st_social_group:'0',"general"=>isset($performanceDistrictGraph->sst_general_social_group)?$performanceDistrictGraph->sst_general_social_group:'0')

                            );
            $performanceDistrictLevelGraph['type'] = 'district';
            $performanceDistrictLevelGraph['district_id'] = (int)$performanceDistrictGraph->district_id;
            $performanceDistrictLevelGraph['state_id'] = 0;
            $performanceDistrictLevelGraph['grade'] = (int)$performanceDistrictGraph->grade;
            $performanceDistrictLevelGraph['data'] = json_encode($newArray);
        //     $performanceDistrictLevelGraph['data'] = $newArray;
            $performanceDistrictLevelGraph['created_at'] = now();
            $performanceDistrictLevelGraph['updated_at'] = now();
            $finalArrayOfPerformance[]=$performanceDistrictLevelGraph;
        }
        // dd($finalArrayOfPerformance);
        $msg = Visualization_Performance_Graph_Tbl::insert($finalArrayOfPerformance);
        if($msg)
        {
                return true;
        }
        else
        {
                echo 'Something went wrong';
        }
        
}

}
    public function getStateLevelPerfomanceGraph()
    {
        $querySyntax = 'state_id,';
        $queryGroupSyntax = 'at3_performance_data.state_id,';
        $queryGroupCondition = '';
        $stateQuery =  $this->queryFunctionVisualizationGraph($querySyntax,$queryGroupSyntax,$queryGroupCondition);
        $stateLevelPerfomanceData = DB::select($stateQuery);
       if(count($stateLevelPerfomanceData)>0)
       {
        foreach($stateLevelPerfomanceData as $stateData)
        {

                $querySyntax = 'state_id,';
                $queryGroupSyntax = 'at3_performance_data.state_id,';
                $queryGroupCondition = 'where  at3_performance_data.state_id='.(int)$stateData->state_id.' and grade = '.(int)$stateData->grade;
                $statePerformanceQuery = $this->queryFunctionPerformanceLevel($querySyntax,$queryGroupSyntax,$queryGroupCondition);
                $statePerLevel = DB::select($statePerformanceQuery);
                
            // Calculation Language  for District Level 
            $newStateArray['language'] =array(
                'gender'=>array(
                    'state'=>array("boys"=>isset($stateData->l_male_gender)?$stateData->l_male_gender:'0',"girls"=>isset($stateData->l_female_gender)?$stateData->l_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($stateData->l_urban_location)?$stateData->l_urban_location:'0',"rural"=>isset($stateData->l_rural_location)?$stateData->l_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($stateData->l_govt_management)?$stateData->l_govt_management:'0',"govt_aided"=>isset($stateData->l_govt_aided_management)?$stateData->l_govt_aided_management:'0',"private"=>isset($stateData->l_private_management)?$stateData->l_private_management:'0',"central_govt"=>isset($stateData->l_central_govt_management)?$stateData->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($stateData->l_sc_social_group)?$stateData->l_sc_social_group:'0',"obc"=>isset($stateData->l_obc_social_group)?$stateData->l_obc_social_group:'0',"st"=>isset($stateData->l_st_social_group)?$stateData->l_st_social_group:'0',"general"=>isset($stateData->l_general_social_group)?$stateData->l_general_social_group:'0')),
                'performance_level'=>array(
                        'state'=>array("below_basic"=>isset($statePerLevel[0]->m_avg_below_basic)?$statePerLevel[0]->m_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->m_avg_basic)?$statePerLevel[0]->m_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->m_avg_proficient)?$statePerLevel[0]->m_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->m_avg_advanced)?$statePerLevel[0]->m_avg_advanced:'0')),
                
                'learning_outcome'=>$this->stateLevelLearningOutcome((int)$stateData->state_id,(int)$stateData->grade,'L'),
                'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4))))),
                'by_subgroup'=>array('totals'=>((int)$stateData->l_male_gender+(int)$stateData->l_female_gender),"boys"=>isset($stateData->l_male_gender)?$stateData->l_male_gender:'0',"girls"=>isset($stateData->l_female_gender)?$stateData->l_female_gender:'0',"urban"=>isset($stateData->l_urban_location)?$stateData->l_urban_location:'0',"rural"=>isset($stateData->l_rural_location)?$stateData->l_rural_location:'0',"govt"=>isset($stateData->l_govt_management)?$stateData->l_govt_management:'0',"govt_aided"=>isset($stateData->l_govt_aided_management)?$stateData->l_govt_aided_management:'0',"sc"=>isset($stateData->l_sc_social_group)?$stateData->l_sc_social_group:'0',"obc"=>isset($stateData->l_obc_social_group)?$stateData->l_obc_social_group:'0',"st"=>isset($stateData->l_st_social_group)?$stateData->l_st_social_group:'0',"general"=>isset($stateData->l_general_social_group)?$stateData->l_general_social_group:'0') 
                
                );
            // Calculation Math  for District Level 
            $newStateArray['math'] =array(
                'gender'=>array(
                    'state'=>array("boys"=>isset($stateData->m_male_gender)?$stateData->m_male_gender:'0',"girls"=>isset($stateData->m_female_gender)?$stateData->m_female_gender:'0')),
                'location'=>array(
                    'state'=>array("urban"=>isset($stateData->m_urban_location)?$stateData->m_urban_location:'0',"rural"=>isset($stateData->m_rural_location)?$stateData->m_rural_location:'0')),
                'management'=>array(
                    'state'=>array("govt"=>isset($stateData->m_govt_management)?$stateData->m_govt_management:'0',"govt_aided"=>isset($stateData->m_govt_aided_management)?$stateData->m_govt_aided_management:'0',"private"=>isset($stateData->m_private_management)?$stateData->m_private_management:'0',"central_govt"=>isset($stateData->m_central_govt_management)?$stateData->m_central_govt_management:'0')),
                'socialgroup'=>array(
                    'state'=>array("sc"=>isset($stateData->m_sc_social_group)?$stateData->m_sc_social_group:'0',"obc"=>isset($stateData->m_obc_social_group)?$stateData->m_obc_social_group:'0',"st"=>isset($stateData->m_st_social_group)?$stateData->m_st_social_group:'0',"general"=>isset($stateData->m_general_social_group)?$stateData->m_general_social_group:'0')),
                'performance_level'=>array(
                        'state'=>array("below_basic"=>isset($statePerLevel[0]->m_avg_below_basic)?$statePerLevel[0]->m_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->m_avg_basic)?$statePerLevel[0]->m_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->m_avg_proficient)?$statePerLevel[0]->m_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->m_avg_advanced)?$statePerLevel[0]->m_avg_advanced:'0')),
                'learning_outcome'=>$this->stateLevelLearningOutcome((int)$stateData->state_id,(int)$stateData->grade,'M'),
                'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4))))),
                'by_subgroup'=>array('totals'=>((int)$stateData->m_male_gender+(int)$stateData->m_female_gender),"boys"=>isset($stateData->m_male_gender)?$stateData->m_male_gender:'0',"girls"=>isset($stateData->m_female_gender)?$stateData->m_female_gender:'0',"urban"=>isset($stateData->m_urban_location)?$stateData->m_urban_location:'0',"rural"=>isset($stateData->m_rural_location)?$stateData->m_rural_location:'0',"govt"=>isset($stateData->m_govt_management)?$stateData->m_govt_management:'0',"govt_aided"=>isset($stateData->m_govt_aided_management)?$stateData->m_govt_aided_management:'0',"sc"=>isset($stateData->m_sc_social_group)?$stateData->m_sc_social_group:'0',"obc"=>isset($stateData->m_obc_social_group)?$stateData->m_obc_social_group:'0',"st"=>isset($stateData->m_st_social_group)?$stateData->m_st_social_group:'0',"general"=>isset($stateData->m_general_social_group)?$stateData->m_general_social_group:'0') 
                
                );
            // Calculation EVS  for District Level 
            $newStateArray['evs'] =array(
                    'gender'=>array(
                        'state'=>array("boys"=>isset($stateData->e_male_gender)?$stateData->e_male_gender:'0',"girls"=>isset($stateData->e_female_gender)?$stateData->e_female_gender:'0')),
                    'location'=>array(
                        'state'=>array("urban"=>isset($stateData->e_urban_location)?$stateData->e_urban_location:'0',"rural"=>isset($stateData->e_rural_location)?$stateData->e_rural_location:'0')),
                    'management'=>array(
                        'state'=>array("govt"=>isset($stateData->e_govt_management)?$stateData->e_govt_management:'0',"govt_aided"=>isset($stateData->e_govt_aided_management)?$stateData->e_govt_aided_management:'0',"private"=>isset($stateData->e_private_management)?$stateData->e_private_management:'0',"central_govt"=>isset($stateData->e_central_govt_management)?$stateData->e_central_govt_management:'0')),
                    'socialgroup'=>array(
                        'state'=>array("sc"=>isset($stateData->e_sc_social_group)?$stateData->e_sc_social_group:'0',"obc"=>isset($stateData->e_obc_social_group)?$stateData->e_obc_social_group:'0',"st"=>isset($stateData->e_st_social_group)?$stateData->e_st_social_group:'0',"general"=>isset($stateData->e_general_social_group)?$stateData->e_general_social_group:'0')),
                    'performance_level'=>array(
                            'state'=>array("below_basic"=>isset($statePerLevel[0]->e_avg_below_basic)?$statePerLevel[0]->e_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->e_avg_basic)?$statePerLevel[0]->e_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->e_avg_proficient)?$statePerLevel[0]->e_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->e_avg_advanced)?$statePerLevel[0]->e_avg_advanced:'0')),
                    'learning_outcome'=>$this->stateLevelLearningOutcome((int)$stateData->state_id,(int)$stateData->grade,'EVS'),
                    'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4))))),
                    'by_subgroup'=>array('totals'=>((int)$stateData->e_male_gender+(int)$stateData->e_female_gender),"boys"=>isset($stateData->e_male_gender)?$stateData->e_male_gender:'0',"girls"=>isset($stateData->e_female_gender)?$stateData->e_female_gender:'0',"urban"=>isset($stateData->e_urban_location)?$stateData->e_urban_location:'0',"rural"=>isset($stateData->e_rural_location)?$stateData->e_rural_location:'0',"govt"=>isset($stateData->e_govt_management)?$stateData->e_govt_management:'0',"govt_aided"=>isset($stateData->e_govt_aided_management)?$stateData->e_govt_aided_management:'0',"sc"=>isset($stateData->e_sc_social_group)?$stateData->e_sc_social_group:'0',"obc"=>isset($stateData->e_obc_social_group)?$stateData->e_obc_social_group:'0',"st"=>isset($stateData->e_st_social_group)?$stateData->e_st_social_group:'0',"general"=>isset($stateData->e_general_social_group)?$stateData->e_general_social_group:'0') 
                    
                    
                        );
            // Calculation EVS  for District Level 
            $newStateArray['mil'] =array(
                        'gender'=>array(
                            'state'=>array("boys"=>isset($stateData->mil_male_gender)?$stateData->mil_male_gender:'0',"girls"=>isset($stateData->mil_female_gender)?$stateData->mil_female_gender:'0')),
                        'location'=>array(
                            'state'=>array("urban"=>isset($stateData->mil_urban_location)?$stateData->mil_urban_location:'0',"rural"=>isset($stateData->mil_rural_location)?$stateData->mil_rural_location:'0')),
                        'management'=>array(
                            'state'=>array("govt"=>isset($stateData->mil_govt_management)?$stateData->mil_govt_management:'0',"govt_aided"=>isset($stateData->mil_govt_aided_management)?$stateData->mil_govt_aided_management:'0',"private"=>isset($stateData->mil_private_management)?$stateData->mil_private_management:'0',"central_govt"=>isset($stateData->mil_central_govt_management)?$stateData->mil_central_govt_management:'0')),
                        'socialgroup'=>array(
                            'state'=>array("sc"=>isset($stateData->mil_sc_social_group)?$stateData->mil_sc_social_group:'0',"obc"=>isset($stateData->mil_obc_social_group)?$stateData->mil_obc_social_group:'0',"st"=>isset($stateData->mil_st_social_group)?$stateData->mil_st_social_group:'0',"general"=>isset($stateData->mil_general_social_group)?$stateData->mil_general_social_group:'0')),
                        'performance_level'=>array(
                                'state'=>array("below_basic"=>isset($statePerLevel[0]->mil_avg_below_basic)?$statePerLevel[0]->mil_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->mil_avg_basic)?$statePerLevel[0]->mil_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->mil_avg_proficient)?$statePerLevel[0]->mil_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->mil_avg_advanced)?$statePerLevel[0]->mil_avg_advanced:'0')),
                        'learning_outcome'=>$this->stateLevelLearningOutcome((int)$stateData->state_id,(int)$stateData->grade,'MIL'),
                        'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4))))),
                        'by_subgroup'=>array('totals'=>((int)$stateData->mil_male_gender+(int)$stateData->mil_female_gender),"boys"=>isset($stateData->mil_male_gender)?$stateData->mil_male_gender:'0',"girls"=>isset($stateData->mil_female_gender)?$stateData->mil_female_gender:'0',"urban"=>isset($stateData->mil_urban_location)?$stateData->mil_urban_location:'0',"rural"=>isset($stateData->mil_rural_location)?$stateData->mil_rural_location:'0',"govt"=>isset($stateData->mil_govt_management)?$stateData->mil_govt_management:'0',"govt_aided"=>isset($stateData->mil_govt_aided_management)?$stateData->mil_govt_aided_management:'0',"sc"=>isset($stateData->mil_sc_social_group)?$stateData->mil_sc_social_group:'0',"obc"=>isset($stateData->mil_obc_social_group)?$stateData->mil_obc_social_group:'0',"st"=>isset($stateData->mil_st_social_group)?$stateData->mil_st_social_group:'0',"general"=>isset($stateData->mil_general_social_group)?$stateData->mil_general_social_group:'0')

                            );
            // Calculation ENGLISH  for District Level 
            $newStateArray['eng'] =array(
                        'gender'=>array(
                            'state'=>array("boys"=>isset($stateData->eng_male_gender)?$stateData->eng_male_gender:'0',"girls"=>isset($stateData->eng_female_gender)?$stateData->eng_female_gender:'0')),
                        'location'=>array(
                            'state'=>array("urban"=>isset($stateData->eng_urban_location)?$stateData->eng_urban_location:'0',"rural"=>isset($stateData->eng_rural_location)?$stateData->eng_rural_location:'0')),
                        'management'=>array(
                            'state'=>array("govt"=>isset($stateData->eng_govt_management)?$stateData->eng_govt_management:'0',"govt_aided"=>isset($stateData->eng_govt_aided_management)?$stateData->eng_govt_aided_management:'0',"private"=>isset($stateData->eng_private_management)?$stateData->eng_private_management:'0',"central_govt"=>isset($stateData->eng_central_govt_management)?$stateData->eng_central_govt_management:'0')),
                        'socialgroup'=>array(
                            'state'=>array("sc"=>isset($stateData->eng_sc_social_group)?$stateData->eng_sc_social_group:'0',"obc"=>isset($stateData->eng_obc_social_group)?$stateData->eng_obc_social_group:'0',"st"=>isset($stateData->eng_st_social_group)?$stateData->eng_st_social_group:'0',"general"=>isset($stateData->eng_general_social_group)?$stateData->eng_general_social_group:'0')),
                        'performance_level'=>array(
                                'state'=>array("below_basic"=>isset($statePerLevel[0]->sci_avg_below_basic)?$statePerLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sci_avg_basic)?$statePerLevel[0]->sci_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sci_avg_proficient)?$statePerLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sci_avg_advanced)?$statePerLevel[0]->sci_avg_advanced:'0')),
                        'learning_outcome'=>$this->stateLevelLearningOutcome((int)$stateData->state_id,(int)$stateData->grade,'E'),
                        'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4))))),
                        'by_subgroup'=>array('totals'=>((int)$stateData->eng_male_gender+(int)$stateData->eng_female_gender),"boys"=>isset($stateData->eng_male_gender)?$stateData->eng_male_gender:'0',"girls"=>isset($stateData->eng_female_gender)?$stateData->eng_female_gender:'0',"urban"=>isset($stateData->eng_urban_location)?$stateData->eng_urban_location:'0',"rural"=>isset($stateData->eng_rural_location)?$stateData->eng_rural_location:'0',"govt"=>isset($stateData->eng_govt_management)?$stateData->eng_govt_management:'0',"govt_aided"=>isset($stateData->eng_govt_aided_management)?$stateData->eng_govt_aided_management:'0',"sc"=>isset($stateData->eng_sc_social_group)?$stateData->eng_sc_social_group:'0',"obc"=>isset($stateData->eng_obc_social_group)?$stateData->eng_obc_social_group:'0',"st"=>isset($stateData->eng_st_social_group)?$stateData->eng_st_social_group:'0',"general"=>isset($stateData->eng_general_social_group)?$stateData->eng_general_social_group:'0') 
                            );
            // Calculation SCIENCE  for District Level 
            $newStateArray['sci'] =array(
                            'gender'=>array(
                                'state'=>array("boys"=>isset($stateData->sci_male_gender)?$stateData->sci_male_gender:'0',"girls"=>isset($stateData->sci_female_gender)?$stateData->sci_female_gender:'0')),
                            'location'=>array(
                                'state'=>array("urban"=>isset($stateData->sci_urban_location)?$stateData->sci_urban_location:'0',"rural"=>isset($stateData->sci_rural_location)?$stateData->sci_rural_location:'0')),
                            'management'=>array(
                                'state'=>array("govt"=>isset($stateData->sci_govt_management)?$stateData->sci_govt_management:'0',"govt_aided"=>isset($stateData->sci_govt_aided_management)?$stateData->sci_govt_aided_management:'0',"private"=>isset($stateData->sci_private_management)?$stateData->sci_private_management:'0',"central_govt"=>isset($stateData->sci_central_govt_management)?$stateData->sci_central_govt_management:'0')),
                            'socialgroup'=>array(
                                'state'=>array("sc"=>isset($stateData->sci_sc_social_group)?$stateData->sci_sc_social_group:'0',"obc"=>isset($stateData->sci_obc_social_group)?$stateData->sci_obc_social_group:'0',"st"=>isset($stateData->sci_st_social_group)?$stateData->sci_st_social_group:'0',"general"=>isset($stateData->sci_general_social_group)?$stateData->sci_general_social_group:'0')),
                            'performance_level'=>array(
                                    'state'=>array("below_basic"=>isset($statePerLevel[0]->sci_avg_below_basic)?$statePerLevel[0]->sci_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sci_avg_basic)?$statePerLevel[0]->sci_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sci_avg_proficient)?$statePerLevel[0]->sci_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sci_avg_advanced)?$statePerLevel[0]->sci_avg_advanced:'0')),
                            'learning_outcome'=>$this->stateLevelLearningOutcome((int)$stateData->state_id,(int)$stateData->grade,'SCI'),
                            'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4))))),
                            'by_subgroup'=>array('totals'=>((int)$stateData->sci_male_gender+(int)$stateData->sci_female_gender),"boys"=>isset($stateData->sci_male_gender)?$stateData->sci_male_gender:'0',"girls"=>isset($stateData->sci_female_gender)?$stateData->sci_female_gender:'0',"urban"=>isset($stateData->sci_urban_location)?$stateData->sci_urban_location:'0',"rural"=>isset($stateData->sci_rural_location)?$stateData->sci_rural_location:'0',"govt"=>isset($stateData->sci_govt_management)?$stateData->sci_govt_management:'0',"govt_aided"=>isset($stateData->sci_govt_aided_management)?$stateData->sci_govt_aided_management:'0',"sc"=>isset($stateData->sci_sc_social_group)?$stateData->sci_sc_social_group:'0',"obc"=>isset($stateData->sci_obc_social_group)?$stateData->sci_obc_social_group:'0',"st"=>isset($stateData->sci_st_social_group)?$stateData->sci_st_social_group:'0',"general"=>isset($stateData->sci_general_social_group)?$stateData->sci_general_social_group:'0') 
                            
                                );
            
                                // Calculation SST  for District Level 
            $newStateArray['sst'] =array(
                        'gender'=>array(
                            'state'=>array("boys"=>isset($stateData->sst_male_gender)?$stateData->sst_male_gender:'0',"girls"=>isset($stateData->sst_female_gender)?$stateData->sst_female_gender:'0')),
                        'location'=>array(
                            'state'=>array("urban"=>isset($stateData->sst_urban_location)?$stateData->sst_urban_location:'0',"rural"=>isset($stateData->sst_rural_location)?$stateData->sst_rural_location:'0')),
                        'management'=>array(
                            'state'=>array("govt"=>isset($stateData->sst_govt_management)?$stateData->sst_govt_management:'0',"govt_aided"=>isset($stateData->sst_govt_aided_management)?$stateData->sst_govt_aided_management:'0',"private"=>isset($stateData->sst_private_management)?$stateData->sst_private_management:'0',"central_govt"=>isset($stateData->sst_central_govt_management)?$stateData->sst_central_govt_management:'0')),
                        'socialgroup'=>array(
                            'state'=>array("sc"=>isset($stateData->sst_sc_social_group)?$stateData->sst_sc_social_group:'0',"obc"=>isset($stateData->sst_obc_social_group)?$stateData->sst_obc_social_group:'0',"st"=>isset($stateData->sst_st_social_group)?$stateData->sst_st_social_group:'0',"general"=>isset($stateData->sst_general_social_group)?$stateData->sst_general_social_group:'0')),
                        'performance_level'=>array(
                                'state'=>array("below_basic"=>isset($statePerLevel[0]->sst_avg_below_basic)?$statePerLevel[0]->sst_avg_below_basic:'0',"basic"=>isset($statePerLevel[0]->sst_avg_basic)?$statePerLevel[0]->sst_avg_basic:'0',"proficient"=>isset($statePerLevel[0]->sst_avg_proficient)?$statePerLevel[0]->sst_avg_proficient:'0',"advanced"=>isset($statePerLevel[0]->sst_avg_advanced)?$statePerLevel[0]->sst_avg_advanced:'0')),
                                'learning_outcome'=>$this->stateLevelLearningOutcome((int)$stateData->state_id,(int)$stateData->grade,'SST') ,
                                'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchDistrictData((int)$stateData->state_id,1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchDistrictData((int)$stateData->state_id,2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchDistrictData((int)$stateData->state_id,3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchDistrictData((int)$stateData->state_id,4))))),
                                'by_subgroup'=>array('totals'=>((int)$stateData->sst_male_gender+(int)$stateData->sst_female_gender),"boys"=>isset($stateData->sst_male_gender)?$stateData->sst_male_gender:'0',"girls"=>isset($stateData->sst_female_gender)?$stateData->sst_female_gender:'0',"urban"=>isset($stateData->sst_urban_location)?$stateData->sst_urban_location:'0',"rural"=>isset($stateData->sst_rural_location)?$stateData->sst_rural_location:'0',"govt"=>isset($stateData->sst_govt_management)?$stateData->sst_govt_management:'0',"govt_aided"=>isset($stateData->sst_govt_aided_management)?$stateData->sst_govt_aided_management:'0',"sc"=>isset($stateData->sst_sc_social_group)?$stateData->sst_sc_social_group:'0',"obc"=>isset($stateData->sst_obc_social_group)?$stateData->sst_obc_social_group:'0',"st"=>isset($stateData->sst_st_social_group)?$stateData->sst_st_social_group:'0',"general"=>isset($stateData->sst_general_social_group)?$stateData->sst_general_social_group:'0') 
                                   
                            );
                $stateArr['type'] = 'state';
                $stateArr['district_id'] = 0;
                $stateArr['state_id'] = (int)$stateData->state_id;
                $stateArr['grade'] = (int)$stateData->grade;
                // $stateArr['data'] = $newStateArray;
                $stateArr['data'] = json_encode($newStateArray);
                $stateArr['created_at'] = now();
                $stateArr['updated_at'] = now();
                $statePerformaceData[]=$stateArr;
        
        }
        // dd($statePerformaceData);
        $msg = Visualization_Performance_Graph_Tbl::insert($statePerformaceData);
        if($msg)
        {
                return true;
        }
        else
        {
                echo 'Something went wrong';
        }
  }
        // dd($statePerformaceData);
       
    }

    public function getNationevelPerfomanceGraph()
    {
        $querySyntax = 'grade,';
        $queryGroupSyntax = 'at3_performance_data.grade,';
        $queryGroupCondition = '';
        $nationalQuery =  $this->queryFunctionVisualizationGraph($querySyntax,$queryGroupSyntax,$queryGroupCondition);
        $nationLevelPerfomanceData = DB::select($nationalQuery);
        if(count($nationLevelPerfomanceData)>0)
        {
                foreach($nationLevelPerfomanceData as $nationalLevel)
                {
                     
                            $querySyntax = '';
                            $queryGroupSyntax = '';
                            $queryGroupCondition = 'where grade = '.(int)$nationalLevel->grade;
                            $nationalPerformanceQuery =  $this->queryFunctionPerformanceLevel($querySyntax,$queryGroupSyntax,$queryGroupCondition);
                            $nationalPerformanceQuery = DB::select($nationalPerformanceQuery);
                            // Calculation Language  for District Level 
                        $newNationalArray['language'] =array(
                                'gender'=>array(
                                'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')),
                                'location'=>array(
                                'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')),
                                'management'=>array(
                                'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')),
                                'socialgroup'=>array(
                                'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')),
                                'performance_level'=>array(
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->m_avg_below_basic)?$nationalPerformanceQuery[0]->m_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->m_avg_basic)?$nationalPerformanceQuery[0]->m_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->m_avg_proficient)?$nationalPerformanceQuery[0]->m_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->m_avg_advanced)?$nationalPerformanceQuery[0]->m_avg_advanced:'0')),
                                
                                'learning_outcome'=>$this->nationalLevelLearningOutcome((int)$nationalLevel->grade,'L'),
                                'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4))))),
                                'by_subgroup'=>array('totals'=>((int)$nationalLevel->l_male_gender+(int)$nationalLevel->l_female_gender),"boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0',"urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0',"govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')                                
                                );
                        // Calculation Math  for District Level 
                        $newNationalArray['math'] =array(
                                'gender'=>array(
                                'national'=>array("boys"=>isset($nationalLevel->m_male_gender)?$nationalLevel->m_male_gender:'0',"girls"=>isset($nationalLevel->m_female_gender)?$nationalLevel->m_female_gender:'0')),
                                'location'=>array(
                                'national'=>array("urban"=>isset($nationalLevel->m_urban_location)?$nationalLevel->m_urban_location:'0',"rural"=>isset($nationalLevel->m_rural_location)?$nationalLevel->m_rural_location:'0')),
                                'management'=>array(
                                'national'=>array("govt"=>isset($nationalLevel->m_govt_management)?$nationalLevel->m_govt_management:'0',"govt_aided"=>isset($nationalLevel->m_govt_aided_management)?$nationalLevel->m_govt_aided_management:'0',"private"=>isset($nationalLevel->m_private_management)?$nationalLevel->m_private_management:'0',"central_govt"=>isset($nationalLevel->m_central_govt_management)?$nationalLevel->m_central_govt_management:'0')),
                                'socialgroup'=>array(
                                'national'=>array("sc"=>isset($nationalLevel->m_sc_social_group)?$nationalLevel->m_sc_social_group:'0',"obc"=>isset($nationalLevel->m_obc_social_group)?$nationalLevel->m_obc_social_group:'0',"st"=>isset($nationalLevel->m_st_social_group)?$nationalLevel->m_st_social_group:'0',"general"=>isset($nationalLevel->m_general_social_group)?$nationalLevel->m_general_social_group:'0')),
                                'performance_level'=>array(
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->m_avg_below_basic)?$nationalPerformanceQuery[0]->m_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->m_avg_basic)?$nationalPerformanceQuery[0]->m_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->m_avg_proficient)?$nationalPerformanceQuery[0]->m_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->m_avg_advanced)?$nationalPerformanceQuery[0]->m_avg_advanced:'0')),
                                'learning_outcome'=>$this->nationalLevelLearningOutcome((int)$nationalLevel->grade,'M'),
                                'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4))))),
                                'by_subgroup'=>array('totals'=>((int)$nationalLevel->m_male_gender+(int)$nationalLevel->m_female_gender),"boys"=>isset($nationalLevel->m_male_gender)?$nationalLevel->m_male_gender:'0',"girls"=>isset($nationalLevel->m_female_gender)?$nationalLevel->m_female_gender:'0',"urban"=>isset($nationalLevel->m_urban_location)?$nationalLevel->m_urban_location:'0',"rural"=>isset($nationalLevel->m_rural_location)?$nationalLevel->m_rural_location:'0',"govt"=>isset($nationalLevel->m_govt_management)?$nationalLevel->m_govt_management:'0',"govt_aided"=>isset($nationalLevel->m_govt_aided_management)?$nationalLevel->m_govt_aided_management:'0',"sc"=>isset($nationalLevel->m_sc_social_group)?$nationalLevel->m_sc_social_group:'0',"obc"=>isset($nationalLevel->m_obc_social_group)?$nationalLevel->m_obc_social_group:'0',"st"=>isset($nationalLevel->m_st_social_group)?$nationalLevel->m_st_social_group:'0',"general"=>isset($nationalLevel->m_general_social_group)?$nationalLevel->m_general_social_group:'0')
                                );
                        // Calculation EVS  for District Level 
                        $newNationalArray['evs'] =array(
                                'gender'=>array(
                                        'national'=>array("boys"=>isset($nationalLevel->e_male_gender)?$nationalLevel->e_male_gender:'0',"girls"=>isset($nationalLevel->e_female_gender)?$nationalLevel->e_female_gender:'0')),
                                'location'=>array(
                                        'national'=>array("urban"=>isset($nationalLevel->e_urban_location)?$nationalLevel->e_urban_location:'0',"rural"=>isset($nationalLevel->e_rural_location)?$nationalLevel->e_rural_location:'0')),
                                'management'=>array(
                                        'national'=>array("govt"=>isset($nationalLevel->e_govt_management)?$nationalLevel->e_govt_management:'0',"govt_aided"=>isset($nationalLevel->e_govt_aided_management)?$nationalLevel->e_govt_aided_management:'0',"private"=>isset($nationalLevel->e_private_management)?$nationalLevel->e_private_management:'0',"central_govt"=>isset($nationalLevel->e_central_govt_management)?$nationalLevel->e_central_govt_management:'0')),
                                'socialgroup'=>array(
                                        'national'=>array("sc"=>isset($nationalLevel->e_sc_social_group)?$nationalLevel->e_sc_social_group:'0',"obc"=>isset($nationalLevel->e_obc_social_group)?$nationalLevel->e_obc_social_group:'0',"st"=>isset($nationalLevel->e_st_social_group)?$nationalLevel->e_st_social_group:'0',"general"=>isset($nationalLevel->e_general_social_group)?$nationalLevel->e_general_social_group:'0')),
                                'performance_level'=>array(
                                        'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->e_avg_below_basic)?$nationalPerformanceQuery[0]->e_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->e_avg_basic)?$nationalPerformanceQuery[0]->e_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->e_avg_proficient)?$nationalPerformanceQuery[0]->e_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->e_avg_advanced)?$nationalPerformanceQuery[0]->e_avg_advanced:'0')),
                                'learning_outcome'=>$this->nationalLevelLearningOutcome((int)$nationalLevel->grade,'EVS'),
                                'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4))))),
                                'by_subgroup'=>array('totals'=>((int)$nationalLevel->e_male_gender+(int)$nationalLevel->e_female_gender),"boys"=>isset($nationalLevel->e_male_gender)?$nationalLevel->e_male_gender:'0',"girls"=>isset($nationalLevel->e_female_gender)?$nationalLevel->e_female_gender:'0',"urban"=>isset($nationalLevel->e_urban_location)?$nationalLevel->e_urban_location:'0',"rural"=>isset($nationalLevel->e_rural_location)?$nationalLevel->e_rural_location:'0',"govt"=>isset($nationalLevel->e_govt_management)?$nationalLevel->e_govt_management:'0',"govt_aided"=>isset($nationalLevel->e_govt_aided_management)?$nationalLevel->e_govt_aided_management:'0',"sc"=>isset($nationalLevel->e_sc_social_group)?$nationalLevel->e_sc_social_group:'0',"obc"=>isset($nationalLevel->e_obc_social_group)?$nationalLevel->e_obc_social_group:'0',"st"=>isset($nationalLevel->e_st_social_group)?$nationalLevel->e_st_social_group:'0',"general"=>isset($nationalLevel->e_general_social_group)?$nationalLevel->e_general_social_group:'0')
                                
                                        );
                        // Calculation EVS  for District Level 
                        $newNationalArray['mil'] =array(
                                        'gender'=>array(
                                        'national'=>array("boys"=>isset($nationalLevel->mil_male_gender)?$nationalLevel->mil_male_gender:'0',"girls"=>isset($nationalLevel->mil_female_gender)?$nationalLevel->mil_female_gender:'0')),
                                        'location'=>array(
                                        'national'=>array("urban"=>isset($nationalLevel->mil_urban_location)?$nationalLevel->mil_urban_location:'0',"rural"=>isset($nationalLevel->mil_rural_location)?$nationalLevel->mil_rural_location:'0')),
                                        'management'=>array(
                                        'national'=>array("govt"=>isset($nationalLevel->mil_govt_management)?$nationalLevel->mil_govt_management:'0',"govt_aided"=>isset($nationalLevel->mil_govt_aided_management)?$nationalLevel->mil_govt_aided_management:'0',"private"=>isset($nationalLevel->mil_private_management)?$nationalLevel->mil_private_management:'0',"central_govt"=>isset($nationalLevel->mil_central_govt_management)?$nationalLevel->mil_central_govt_management:'0')),
                                        'socialgroup'=>array(
                                        'national'=>array("sc"=>isset($nationalLevel->mil_sc_social_group)?$nationalLevel->mil_sc_social_group:'0',"obc"=>isset($nationalLevel->mil_obc_social_group)?$nationalLevel->mil_obc_social_group:'0',"st"=>isset($nationalLevel->mil_st_social_group)?$nationalLevel->mil_st_social_group:'0',"general"=>isset($nationalLevel->mil_general_social_group)?$nationalLevel->mil_general_social_group:'0')),
                                        'performance_level'=>array(
                                                'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->mil_avg_below_basic)?$nationalPerformanceQuery[0]->mil_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->mil_avg_basic)?$nationalPerformanceQuery[0]->mil_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->mil_avg_proficient)?$nationalPerformanceQuery[0]->mil_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->mil_avg_advanced)?$nationalPerformanceQuery[0]->mil_avg_advanced:'0')),
                                        'learning_outcome'=>$this->nationalLevelLearningOutcome((int)$nationalLevel->grade,'MIL'),
                                        'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4))))),
                                        'by_subgroup'=>array('totals'=>((int)$nationalLevel->mil_male_gender+(int)$nationalLevel->mil_female_gender),"boys"=>isset($nationalLevel->mil_male_gender)?$nationalLevel->mil_male_gender:'0',"girls"=>isset($nationalLevel->mil_female_gender)?$nationalLevel->mil_female_gender:'0',"urban"=>isset($nationalLevel->mil_urban_location)?$nationalLevel->mil_urban_location:'0',"rural"=>isset($nationalLevel->mil_rural_location)?$nationalLevel->mil_rural_location:'0',"govt"=>isset($nationalLevel->mil_govt_management)?$nationalLevel->mil_govt_management:'0',"govt_aided"=>isset($nationalLevel->mil_govt_aided_management)?$nationalLevel->mil_govt_aided_management:'0',"sc"=>isset($nationalLevel->mil_sc_social_group)?$nationalLevel->mil_sc_social_group:'0',"obc"=>isset($nationalLevel->mil_obc_social_group)?$nationalLevel->mil_obc_social_group:'0',"st"=>isset($nationalLevel->mil_st_social_group)?$nationalLevel->mil_st_social_group:'0',"general"=>isset($nationalLevel->mil_general_social_group)?$nationalLevel->mil_general_social_group:'0')

                                        );
                        // Calculation ENGLISH  for District Level 
                        $newNationalArray['eng'] =array(
                                        'gender'=>array(
                                        'national'=>array("boys"=>isset($nationalLevel->eng_male_gender)?$nationalLevel->eng_male_gender:'0',"girls"=>isset($nationalLevel->eng_female_gender)?$nationalLevel->eng_female_gender:'0')),
                                        'location'=>array(
                                        'national'=>array("urban"=>isset($nationalLevel->eng_urban_location)?$nationalLevel->eng_urban_location:'0',"rural"=>isset($nationalLevel->eng_rural_location)?$nationalLevel->eng_rural_location:'0')),
                                        'management'=>array(
                                        'national'=>array("govt"=>isset($nationalLevel->eng_govt_management)?$nationalLevel->eng_govt_management:'0',"govt_aided"=>isset($nationalLevel->eng_govt_aided_management)?$nationalLevel->eng_govt_aided_management:'0',"private"=>isset($nationalLevel->eng_private_management)?$nationalLevel->eng_private_management:'0',"central_govt"=>isset($nationalLevel->eng_central_govt_management)?$nationalLevel->eng_central_govt_management:'0')),
                                        'socialgroup'=>array(
                                        'national'=>array("sc"=>isset($nationalLevel->eng_sc_social_group)?$nationalLevel->eng_sc_social_group:'0',"obc"=>isset($nationalLevel->eng_obc_social_group)?$nationalLevel->eng_obc_social_group:'0',"st"=>isset($nationalLevel->eng_st_social_group)?$nationalLevel->eng_st_social_group:'0',"general"=>isset($nationalLevel->eng_general_social_group)?$nationalLevel->eng_general_social_group:'0')),
                                        'performance_level'=>array(
                                                'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sci_avg_below_basic)?$nationalPerformanceQuery[0]->sci_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sci_avg_basic)?$nationalPerformanceQuery[0]->sci_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sci_avg_proficient)?$nationalPerformanceQuery[0]->sci_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sci_avg_advanced)?$nationalPerformanceQuery[0]->sci_avg_advanced:'0')),
                                        'learning_outcome'=>$this->nationalLevelLearningOutcome((int)$nationalLevel->grade,'E'),
                                        'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4))))),
                                        'by_subgroup'=>array('totals'=>((int)$nationalLevel->eng_male_gender+(int)$nationalLevel->eng_female_gender),"boys"=>isset($nationalLevel->eng_male_gender)?$nationalLevel->eng_male_gender:'0',"girls"=>isset($nationalLevel->eng_female_gender)?$nationalLevel->eng_female_gender:'0',"urban"=>isset($nationalLevel->eng_urban_location)?$nationalLevel->eng_urban_location:'0',"rural"=>isset($nationalLevel->eng_rural_location)?$nationalLevel->eng_rural_location:'0',"govt"=>isset($nationalLevel->eng_govt_management)?$nationalLevel->eng_govt_management:'0',"govt_aided"=>isset($nationalLevel->eng_govt_aided_management)?$nationalLevel->eng_govt_aided_management:'0',"sc"=>isset($nationalLevel->eng_sc_social_group)?$nationalLevel->eng_sc_social_group:'0',"obc"=>isset($nationalLevel->eng_obc_social_group)?$nationalLevel->eng_obc_social_group:'0',"st"=>isset($nationalLevel->eng_st_social_group)?$nationalLevel->eng_st_social_group:'0',"general"=>isset($nationalLevel->eng_general_social_group)?$nationalLevel->eng_general_social_group:'0')
                                        
                                        
                                        );
                        // Calculation SCIENCE  for District Level 
                        $newNationalArray['sci'] =array(
                                        'gender'=>array(
                                                'national'=>array("boys"=>isset($nationalLevel->sci_male_gender)?$nationalLevel->sci_male_gender:'0',"girls"=>isset($nationalLevel->sci_female_gender)?$nationalLevel->sci_female_gender:'0')),
                                        'location'=>array(
                                                'national'=>array("urban"=>isset($nationalLevel->sci_urban_location)?$nationalLevel->sci_urban_location:'0',"rural"=>isset($nationalLevel->sci_rural_location)?$nationalLevel->sci_rural_location:'0')),
                                        'management'=>array(
                                                'national'=>array("govt"=>isset($nationalLevel->sci_govt_management)?$nationalLevel->sci_govt_management:'0',"govt_aided"=>isset($nationalLevel->sci_govt_aided_management)?$nationalLevel->sci_govt_aided_management:'0',"private"=>isset($nationalLevel->sci_private_management)?$nationalLevel->sci_private_management:'0',"central_govt"=>isset($nationalLevel->sci_central_govt_management)?$nationalLevel->sci_central_govt_management:'0')),
                                        'socialgroup'=>array(
                                                'national'=>array("sc"=>isset($nationalLevel->sci_sc_social_group)?$nationalLevel->sci_sc_social_group:'0',"obc"=>isset($nationalLevel->sci_obc_social_group)?$nationalLevel->sci_obc_social_group:'0',"st"=>isset($nationalLevel->sci_st_social_group)?$nationalLevel->sci_st_social_group:'0',"general"=>isset($nationalLevel->sci_general_social_group)?$nationalLevel->sci_general_social_group:'0')),
                                        'performance_level'=>array(
                                                'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sci_avg_below_basic)?$nationalPerformanceQuery[0]->sci_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sci_avg_basic)?$nationalPerformanceQuery[0]->sci_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sci_avg_proficient)?$nationalPerformanceQuery[0]->sci_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sci_avg_advanced)?$nationalPerformanceQuery[0]->sci_avg_advanced:'0')),
                                        'learning_outcome'=>$this->nationalLevelLearningOutcome((int)$nationalLevel->grade,'SCI'),
                                        'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4))))),
                                        'by_subgroup'=>array('totals'=>((int)$nationalLevel->sci_male_gender+(int)$nationalLevel->sci_female_gender),"boys"=>isset($nationalLevel->sci_male_gender)?$nationalLevel->sci_male_gender:'0',"girls"=>isset($nationalLevel->sci_female_gender)?$nationalLevel->sci_female_gender:'0',"urban"=>isset($nationalLevel->sci_urban_location)?$nationalLevel->sci_urban_location:'0',"rural"=>isset($nationalLevel->sci_rural_location)?$nationalLevel->sci_rural_location:'0',"govt"=>isset($nationalLevel->sci_govt_management)?$nationalLevel->sci_govt_management:'0',"govt_aided"=>isset($nationalLevel->sci_govt_aided_management)?$nationalLevel->sci_govt_aided_management:'0',"sc"=>isset($nationalLevel->sci_sc_social_group)?$nationalLevel->sci_sc_social_group:'0',"obc"=>isset($nationalLevel->sci_obc_social_group)?$nationalLevel->sci_obc_social_group:'0',"st"=>isset($nationalLevel->sci_st_social_group)?$nationalLevel->sci_st_social_group:'0',"general"=>isset($nationalLevel->sci_general_social_group)?$nationalLevel->sci_general_social_group:'0')
                                                );
                        
                                                // Calculation SST  for District Level 
                        $newNationalArray['sst'] =array(
                                        'gender'=>array(
                                        'national'=>array("boys"=>isset($nationalLevel->sst_male_gender)?$nationalLevel->sst_male_gender:'0',"girls"=>isset($nationalLevel->sst_female_gender)?$nationalLevel->sst_female_gender:'0')),
                                        'location'=>array(
                                        'national'=>array("urban"=>isset($nationalLevel->sst_urban_location)?$nationalLevel->sst_urban_location:'0',"rural"=>isset($nationalLevel->sst_rural_location)?$nationalLevel->sst_rural_location:'0')),
                                        'management'=>array(
                                        'national'=>array("govt"=>isset($nationalLevel->sst_govt_management)?$nationalLevel->sst_govt_management:'0',"govt_aided"=>isset($nationalLevel->sst_govt_aided_management)?$nationalLevel->sst_govt_aided_management:'0',"private"=>isset($nationalLevel->sst_private_management)?$nationalLevel->sst_private_management:'0',"central_govt"=>isset($nationalLevel->sst_central_govt_management)?$nationalLevel->sst_central_govt_management:'0')),
                                        'socialgroup'=>array(
                                        'national'=>array("sc"=>isset($nationalLevel->sst_sc_social_group)?$nationalLevel->sst_sc_social_group:'0',"obc"=>isset($nationalLevel->sst_obc_social_group)?$nationalLevel->sst_obc_social_group:'0',"st"=>isset($nationalLevel->sst_st_social_group)?$nationalLevel->sst_st_social_group:'0',"general"=>isset($nationalLevel->sst_general_social_group)?$nationalLevel->sst_general_social_group:'0')),
                                        'performance_level'=>array(
                                                'national'=>array("below_basic"=>isset($nationalPerformanceQuery[0]->sst_avg_below_basic)?$nationalPerformanceQuery[0]->sst_avg_below_basic:'0',"basic"=>isset($nationalPerformanceQuery[0]->sst_avg_basic)?$nationalPerformanceQuery[0]->sst_avg_basic:'0',"proficient"=>isset($nationalPerformanceQuery[0]->sst_avg_proficient)?$nationalPerformanceQuery[0]->sst_avg_proficient:'0',"advanced"=>isset($nationalPerformanceQuery[0]->sst_avg_advanced)?$nationalPerformanceQuery[0]->sst_avg_advanced:'0')),
                                        'learning_outcome'=>$this->nationalLevelLearningOutcome((int)$nationalLevel->grade,'SST') ,
                                        'by_indicator'=>array("dropdown1"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown2"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4)))),"dropdown3"=>array('category1'=>array('range'=>'70-74','data'=>array($this->fetchStatedata(1))),'category2'=>array('range'=>'74-77','data'=>array($this->fetchStatedata(2))),'category3'=>array('range'=>'77-81','data'=>array($this->fetchStatedata(3))),'category4'=>array('range'=>'81-84','data'=>array($this->fetchStatedata(4))))),
                                        'by_subgroup'=>array('totals'=>((int)$nationalLevel->sst_male_gender+(int)$nationalLevel->sst_female_gender),"boys"=>isset($nationalLevel->sst_male_gender)?$nationalLevel->sst_male_gender:'0',"girls"=>isset($nationalLevel->sst_female_gender)?$nationalLevel->sst_female_gender:'0',"urban"=>isset($nationalLevel->sst_urban_location)?$nationalLevel->sst_urban_location:'0',"rural"=>isset($nationalLevel->sst_rural_location)?$nationalLevel->sst_rural_location:'0',"govt"=>isset($nationalLevel->sst_govt_management)?$nationalLevel->sst_govt_management:'0',"govt_aided"=>isset($nationalLevel->sst_govt_aided_management)?$nationalLevel->sst_govt_aided_management:'0',"sc"=>isset($nationalLevel->sst_sc_social_group)?$nationalLevel->sst_sc_social_group:'0',"obc"=>isset($nationalLevel->sst_obc_social_group)?$nationalLevel->sst_obc_social_group:'0',"st"=>isset($nationalLevel->sst_st_social_group)?$nationalLevel->sst_st_social_group:'0',"general"=>isset($nationalLevel->sst_general_social_group)?$nationalLevel->sst_general_social_group:'0') 
                                        );
                                $nationalArray['type'] = 'national';
                                $nationalArray['district_id'] = 0;
                                $nationalArray['state_id'] = 0;
                                $nationalArray['grade'] = (int)$nationalLevel->grade;
                                $nationalArray['data'] = json_encode($newNationalArray);
                                // $nationalArray['data'] = $newNationalArray;
                                $nationalArray['created_at'] = now();
                                $nationalArray['updated_at'] = now();
                                $nationPerfomanceData[]=$nationalArray;
                }
                // dd($nationPerfomanceData);
                $msg = Visualization_Performance_Graph_Tbl::insert($nationPerfomanceData);
                if($msg)
                {
                        return true;
                }
                else
                {
                        echo 'Something went wrong';
                }
               
        }

    }

    public function districtLevelLearningOutcome($district_id,$grade,$code)
    {
        $districtLevelCode = "select subject_code,avg
        from district_grade_level_learningoutcome
         where district_id=$district_id and grade=$grade
        group by district_grade_level_learningoutcome.state_id, district_grade_level_learningoutcome.district_id, district_grade_level_learningoutcome.grade,district_grade_level_learningoutcome.subject_code,district_grade_level_learningoutcome.avg";
        $districtLevelSubjectCode = DB::select($districtLevelCode);
        $final_subject_data = [];
        foreach ($districtLevelSubjectCode as $subject) {
                if(substr($subject->subject_code,0,-3)==$code){
                $final_subject_data[$subject->subject_code] = $subject->avg;
                }                
        }
        return $final_subject_data;
    
    }
    public function stateLevelLearningOutcome($state_id,$grade,$code)
    {
            
            $stateLevelCode = "select subject_code,avg
            from district_grade_level_learningoutcome
             where state_id=$state_id and grade=$grade
            group by district_grade_level_learningoutcome.state_id, district_grade_level_learningoutcome.district_id, district_grade_level_learningoutcome.grade,district_grade_level_learningoutcome.subject_code,district_grade_level_learningoutcome.avg";
            $stateLevelSubjectCode = DB::select($stateLevelCode);
            $final_subject_data = [];
            foreach ($stateLevelSubjectCode as $subject) {
                if(substr($subject->subject_code,0,-3)==$code){
                    $final_subject_data[$subject->subject_code] = $subject->avg;   
                }             
            }
            return $final_subject_data;
    
    }


    public function nationalLevelLearningOutcome($grade,$code)
    {
        
        $nationalLevelCode = "select subject_code,avg
        from district_grade_level_learningoutcome
         where grade=$grade
        group by district_grade_level_learningoutcome.state_id, district_grade_level_learningoutcome.district_id, district_grade_level_learningoutcome.grade,district_grade_level_learningoutcome.subject_code,district_grade_level_learningoutcome.avg";
        $nationalLevelSubjectCode = DB::select($nationalLevelCode);
        $final_subject_data = [];
        foreach ($nationalLevelSubjectCode as $subject) {
                if(substr($subject->subject_code,0,-3)==$code){
                $final_subject_data[$subject->subject_code] = $subject->avg;  
                } 
                       
        }
        return $final_subject_data;
    }


    public function fetchStatedata($value){
        
        switch ($value) {
                case 1:
                        $stateIdWithName = DB::table('state_masters')->pluck('state_id', 'state_name')->take(9)->toArray();
                        $data = [];
                        foreach ($stateIdWithName as $key => $value) {
                                $data[] = "[".$key.",".$value."]";
                        }
                        return $data;
                        break;
                case 2:
                        $stateIdWithName = DB::table('state_masters')->pluck('state_id', 'state_name')->skip(9)->take(9)->toArray();
                        $data = [];
                        foreach ($stateIdWithName as $key => $value) {
                                $data[] = "[".$key.",".$value."]";
                        }
                        return $data;
                        break;
                case 3:
                        $stateIdWithName = DB::table('state_masters')->pluck('state_id', 'state_name')->skip(18)->take(9)->toArray();
                        $data = [];
                        foreach ($stateIdWithName as $key => $value) {
                                $data[] = "[".$key.",".$value."]";
                        }
                        return $data;
                        break;
                case 4:
                        $stateIdWithName = DB::table('state_masters')->pluck('state_id', 'state_name')->skip(27)->take(9)->toArray();
                        $data = [];
                        foreach ($stateIdWithName as $key => $value) {
                                $data[] = "[".$key.",".$value."]";
                        }
                        return $data;
                        break;
                
                default:
                        # code...
                        break;
        }
    


       
    }

    public function fetchDistrictData($state_id,$cat)
    {
     

        $districtIdWithName = DB::table('district_masters')->where('udise_state_code',$state_id)->pluck('udise_district_code', 'district_name')->toArray();
        $data = [];
        foreach ($districtIdWithName as $key => $value) {
                $data[] = "[".$key.",".$value."]";
        }
        $skip1 = (int)round(count($data)/4);
        $skip2 = (int)round($skip1) + (int)round($skip1);
        $skip3 = (int)round($skip1)+(int)round($skip1)+(int)round($skip1);
        $skip4 = count($data)-$skip3;
        
        switch ($cat) {
                case 1:
                        $districtIdWithName = DB::table('district_masters')->where('udise_state_code',$state_id)->pluck('udise_district_code', 'district_name')->take($skip1)->toArray();
                        $data = [];
                        foreach ($districtIdWithName as $key => $value) {
                                $data[] = "[".$key.",".$value."]";
                        }
                        return $data;
                        break;
                case 2:
                        $districtIdWithName = DB::table('district_masters')->where('udise_state_code',$state_id)->pluck('udise_district_code', 'district_name')->skip($skip1)->take($skip1)->toArray();
                        $data = [];
                        foreach ($districtIdWithName as $key => $value) {
                                $data[] = "[".$key.",".$value."]";
                        }
                        return $data;
                        break;
                case 3:
                        $districtIdWithName = DB::table('district_masters')->where('udise_state_code',$state_id)->pluck('udise_district_code', 'district_name')->skip($skip2)->take($skip1)->toArray();
                        $data = [];
                        foreach ($districtIdWithName as $key => $value) {
                                $data[] = "[".$key.",".$value."]";
                        }
                        return $data;
                        break;
                case 4:
                        $districtIdWithName = DB::table('district_masters')->where('udise_state_code',$state_id)->pluck('udise_district_code', 'district_name')->skip($skip3)->take($skip4)->toArray();
                        $data = [];
                        foreach ($districtIdWithName as $key => $value) {
                                $data[] = "[".$key.",".$value."]";
                        }
                        return $data;
                        break;
                
                default:
                        # code...
                        break;
        }
    
        
    }
}
