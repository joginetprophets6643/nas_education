<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visualization_Participation_Tbl;
use App\Models\Visualization_Performance_Tbl;
use DB;

class VisualizationCalculationController extends Controller
{
    public function visualization_participation()
    {
        
        /*************************************************************
         * Name: Jogi
         * Desc: Visualization for Participations
         * Date: 08/02/2022
         * Start Here
         *************************************************************/
        DB::table('visualization_participation_tbl')->truncate();
        $participationQueryForDistrictLevel = "select district_id,grade,
            SUM(total_school::int)  AS district_school_count,

            SUM(total_teacher::int)  AS district_students_count,

            SUM(total_student::int) AS district_teachers_count

            from all_grade_participation_tbl
            group by district_id,grade";
            

            $participationQueryForDistrictLevel = DB::select($participationQueryForDistrictLevel);
            $participationQueryForDistrictLevel = json_decode(json_encode($participationQueryForDistrictLevel), true);
            
            foreach ($participationQueryForDistrictLevel as $district=> $stateLevel){
                $participationQueryForDistrictLevel[$district]['type'] = 'district';
            };
            Visualization_Participation_Tbl::insert($participationQueryForDistrictLevel);

            // ******************************State Level Participation data********************************************

            $participationQueryForStateLevel = "select state_id,grade,
                (select SUM(table1.total_school::int) from all_grade_participation_tbl as table1 where table1.state_id=all_grade_participation_tbl.state_id and table1.grade=all_grade_participation_tbl.grade) as state_shcools_count,
                (select SUM(table1.total_teacher::int) from all_grade_participation_tbl as table1 where table1.state_id=all_grade_participation_tbl.state_id and table1.grade=all_grade_participation_tbl.grade) as state_teachers_count,
                (select SUM(table1.total_student::int) from all_grade_participation_tbl as table1 where table1.state_id=all_grade_participation_tbl.state_id and table1.grade=all_grade_participation_tbl.grade) as state_students_count           
                from all_grade_participation_tbl
                group by state_id,grade";

            $participationQueryForStateLevel = DB::select($participationQueryForStateLevel);
            $participationQueryForStateLevel = json_decode(json_encode($participationQueryForStateLevel), true);
            foreach ($participationQueryForStateLevel as $state=> $stateLevel){
                $participationQueryForStateLevel[$state]['type'] = 'state';
            };
            Visualization_Participation_Tbl::insert($participationQueryForStateLevel);
          
            // **********************************Nation Level Participation****************************************************************
            $participationQueryForNationalLevel = "select grade,
                (select SUM(table1.total_school::int) from all_grade_participation_tbl as table1 where  table1.grade=all_grade_participation_tbl.grade) as national_schools_count,
                (select SUM(table1.total_teacher::int) from all_grade_participation_tbl as table1 where  table1.grade=all_grade_participation_tbl.grade) as national_teachers_count,
                (select SUM(table1.total_student::int) from all_grade_participation_tbl as table1 where  table1.grade=all_grade_participation_tbl.grade) as national_students_count      
                from all_grade_participation_tbl
                group by grade";

                $participationQueryForNationalLevel = DB::select($participationQueryForNationalLevel);
                $participationQueryForNationalLevel = json_decode(json_encode($participationQueryForNationalLevel), true);
                foreach ($participationQueryForNationalLevel as $national=> $nationalLevel){
                    $participationQueryForNationalLevel[$national]['type'] = 'national';
                }
                $msg = Visualization_Participation_Tbl::insert($participationQueryForNationalLevel);
                if($msg)
                {
                    echo 'Data Submitted Successfully';
                }
                else
                {
                    echo 'Something went wrong';
                }

    }

    public function visualization_performance()
    {
                /*************************************************************
         * Name: Jogi
         * Desc: Visualization for Performance
         * Date: 08/02/2022
         * Start Here
         *************************************************************/
            // DB::table('visualization_performance_tbl')->truncate();
            $performanceQueryForDistrictLevel = "select district_id, grade,
                round(SUM(L_avg::float)/count(L_avg)) language_district,
                round(SUM(m_avg::float)/count(l_avg)) AS math_district,
                round(SUM(e_avg::float)/count(e_avg)) AS evs_district,
                round(SUM(mil_avg::float)/count(mil_avg)) AS mil_district,
                round(SUM(eng_avg::float)/count(eng_avg)) AS english_district,
                round(SUM(sci_avg::float)/count(sci_avg)) AS science_district,
                round(SUM(sst_avg::float)/count(sst_avg)) AS social_science_district
                from at3_performance_data
                group by  at3_performance_data.district_id, at3_performance_data.grade";

            $performanceQueryForDistrictLevel = DB::select($performanceQueryForDistrictLevel);
            $performanceQueryForDistrictLevel = json_decode(json_encode($performanceQueryForDistrictLevel), true);
            
            foreach ($performanceQueryForDistrictLevel as $district=> $stateLevel){
                $performanceQueryForDistrictLevel[$district]['type'] = 'district';
            };
        //    dd($performanceQueryForDistrictLevel);
            // Visualization_Performance_Tbl::insert($performanceQueryForDistrictLevel);
            //  dd($performanceQueryForDistrictLevel);
            // ******************************State Level Performance data********************************************

            $performanceQueryForStateLevel = "select state_id , grade,
                round(SUM(L_avg::float)/count(L_avg)) language_state,
                round(SUM(m_avg::float)/count(l_avg)) AS math_state,
                round(SUM(e_avg::float)/count(e_avg)) AS evs_state,
                round(SUM(mil_avg::float)/count(mil_avg)) AS mil_state,
                round(SUM(eng_avg::float)/count(eng_avg)) AS english_state,
                round(SUM(sci_avg::float)/count(sci_avg)) AS science_state,
                round(SUM(sst_avg::float)/count(sst_avg)) AS social_science_state
                from at3_performance_data
                group by at3_performance_data.state_id, at3_performance_data.grade";

            $performanceQueryForStateLevel = DB::select($performanceQueryForStateLevel);
            $performanceQueryForStateLevel = json_decode(json_encode($performanceQueryForStateLevel), true);
            foreach ($performanceQueryForStateLevel as $state=> $stateLevel){
                $performanceQueryForStateLevel[$state]['type'] = 'state';
            };
            // dd($performanceQueryForStateLevel);
            // Visualization_Performance_Tbl::insert($performanceQueryForStateLevel);
            // dd($performanceQueryForStateLevel);
            // **********************************Nation Level Performance****************************************************************
                $performanceQueryForNationalLevel = "select  grade,
                    round(SUM(L_avg::float)/count(L_avg)) language_national,
                    round(SUM(m_avg::float)/count(l_avg)) AS math_national,
                    round(SUM(e_avg::float)/count(e_avg)) AS evs_national,
                    round(SUM(mil_avg::float)/count(mil_avg)) AS mil_national,
                    round(SUM(eng_avg::float)/count(eng_avg)) AS english_national,
                    round(SUM(sci_avg::float)/count(sci_avg)) AS science_national,
                    round(SUM(sst_avg::float)/count(sst_avg)) AS social_science_national
                    from at3_performance_data
                    group by  at3_performance_data.grade
                    ";

                $performanceQueryForNationalLevel = DB::select($performanceQueryForNationalLevel);
                $performanceQueryForNationalLevel = json_decode(json_encode($performanceQueryForNationalLevel), true);
                foreach ($performanceQueryForNationalLevel as $national=> $nationalLevel){
                    $performanceQueryForNationalLevel[$national]['type'] = 'national';
                }
                // dd($performanceQueryForNationalLevel);
                $msg = Visualization_Performance_Tbl::insert($performanceQueryForNationalLevel);
                if($msg)
                {
                    echo 'Data Submitted Successfully';
                }
                else
                {
                    echo 'Something went wrong';
                }
    }
}
