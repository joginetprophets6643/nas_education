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
                    echo 'Data  Submitted Successfully';
                }
                else
                {
                    echo 'Something went wrong';
                }
    }
    public function visualization_performance_graph()
    {
        $performanceGraph = array();
        // District Level Change Syntax
        $querySyntax = 'state_id,district_id,';
        $queryGroupSyntax = 'at3_performance_data.state_id, at3_performance_data.district_id,';
        $queryGroupCondition = '';
        $query = $this->queryFunctionVisualizationGraph($querySyntax,$queryGroupSyntax,$queryGroupCondition);
        $performanceDistrictGraph = DB::select($query);

        foreach($performanceDistrictGraph as $performanceDistrictGraph)
        {
            // Calculation Language  for District Level 
            $newArray['language'] =array(
                'gender'=>array(
                    'district'=>array("boys"=>isset($performanceDistrictGraph->l_male_gender)?$performanceDistrictGraph->l_male_gender:'0',"girls"=>isset($performanceDistrictGraph->l_female_gender)?$performanceDistrictGraph->l_female_gender:'0'),
                    'state'=>array("boys"=>isset($statelevel->l_male_gender)?$statelevel->l_male_gender:'0',"girls"=>isset($statelevel->l_female_gender)?$statelevel->l_female_gender:'0'),
                    'national'=>array("boys"=>isset($nationalLevel->l_male_gender)?$nationalLevel->l_male_gender:'0',"girls"=>isset($nationalLevel->l_female_gender)?$nationalLevel->l_female_gender:'0')),
                'location'=>array(
                    'district'=>array("urban"=>isset($performanceDistrictGraph->l_urban_location)?$performanceDistrictGraph->l_urban_location:'0',"rural"=>isset($performanceDistrictGraph->l_rural_location)?$performanceDistrictGraph->l_rural_location:'0'),
                    'state'=>array("urban"=>isset($statelevel->l_urban_location)?$statelevel->l_urban_location:'0',"rural"=>isset($statelevel->l_rural_location)?$statelevel->l_rural_location:'0'),
                    'national'=>array("urban"=>isset($nationalLevel->l_urban_location)?$nationalLevel->l_urban_location:'0',"rural"=>isset($nationalLevel->l_rural_location)?$nationalLevel->l_rural_location:'0')),
                'management'=>array(
                    'district'=>array("govt"=>isset($performanceDistrictGraph->l_govt_management)?$performanceDistrictGraph->l_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->l_govt_aided_management)?$performanceDistrictGraph->l_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->l_private_management)?$performanceDistrictGraph->l_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->l_central_govt_management)?$performanceDistrictGraph->l_central_govt_management:'0'),
                    'state'=>array("govt"=>isset($statelevel->l_govt_management)?$statelevel->l_govt_management:'0',"govt_aided"=>isset($statelevel->l_govt_aided_management)?$statelevel->l_govt_aided_management:'0',"private"=>isset($statelevel->l_private_management)?$statelevel->l_private_management:'0',"central_govt"=>isset($statelevel->l_central_govt_management)?$statelevel->l_central_govt_management:'0'),
                    'national'=>array("govt"=>isset($nationalLevel->l_govt_management)?$nationalLevel->l_govt_management:'0',"govt_aided"=>isset($nationalLevel->l_govt_aided_management)?$nationalLevel->l_govt_aided_management:'0',"private"=>isset($nationalLevel->l_private_management)?$nationalLevel->l_private_management:'0',"central_govt"=>isset($nationalLevel->l_central_govt_management)?$nationalLevel->l_central_govt_management:'0')),
                'socialgroup'=>array(
                    'district'=>array("sc"=>isset($performanceDistrictGraph->l_sc_social_group)?$performanceDistrictGraph->l_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->l_obc_social_group)?$performanceDistrictGraph->l_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->l_st_social_group)?$performanceDistrictGraph->l_st_social_group:'0',"general"=>isset($performanceDistrictGraph->l_general_social_group)?$performanceDistrictGraph->l_general_social_group:'0'),
                    'state'=>array("sc"=>isset($statelevel->l_sc_social_group)?$statelevel->l_sc_social_group:'0',"obc"=>isset($statelevel->l_obc_social_group)?$statelevel->l_obc_social_group:'0',"st"=>isset($statelevel->l_st_social_group)?$statelevel->l_st_social_group:'0',"general"=>isset($statelevel->l_general_social_group)?$statelevel->l_general_social_group:'0'),
                    'national'=>array("sc"=>isset($nationalLevel->l_sc_social_group)?$nationalLevel->l_sc_social_group:'0',"obc"=>isset($nationalLevel->l_obc_social_group)?$nationalLevel->l_obc_social_group:'0',"st"=>isset($nationalLevel->l_st_social_group)?$nationalLevel->l_st_social_group:'0',"general"=>isset($nationalLevel->l_general_social_group)?$nationalLevel->l_general_social_group:'0')),
                );

                // Calculation Math  for District Level 
                $newArray['math'] =array(
                    'gender'=>array(
                        'district'=>array("boys"=>isset($performanceDistrictGraph->m_male_gender)?$performanceDistrictGraph->m_male_gender:'0',"girls"=>isset($performanceDistrictGraph->m_female_gender)?$performanceDistrictGraph->m_female_gender:'0'),
                        'state'=>array("boys"=>isset($statelevel->m_male_gender)?$statelevel->m_male_gender:'0',"girls"=>isset($statelevel->m_female_gender)?$statelevel->m_female_gender:'0'),
                        'national'=>array("boys"=>isset($nationalLevel->m_male_gender)?$nationalLevel->m_male_gender:'0',"girls"=>isset($nationalLevel->m_female_gender)?$nationalLevel->m_female_gender:'0')),
                    'location'=>array(
                        'district'=>array("urban"=>isset($performanceDistrictGraph->m_urban_location)?$performanceDistrictGraph->m_urban_location:'0',"rural"=>isset($performanceDistrictGraph->m_rural_location)?$performanceDistrictGraph->m_rural_location:'0'),
                        'state'=>array("urban"=>isset($statelevel->m_urban_location)?$statelevel->m_urban_location:'0',"rural"=>isset($statelevel->m_rural_location)?$statelevel->m_rural_location:'0'),
                        'national'=>array("urban"=>isset($nationalLevel->m_urban_location)?$nationalLevel->m_urban_location:'0',"rural"=>isset($nationalLevel->m_rural_location)?$nationalLevel->m_rural_location:'0')),
                    'management'=>array(
                        'district'=>array("govt"=>isset($performanceDistrictGraph->m_govt_management)?$performanceDistrictGraph->m_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->m_govt_aided_management)?$performanceDistrictGraph->m_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->m_private_management)?$performanceDistrictGraph->m_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->m_central_govt_management)?$performanceDistrictGraph->m_central_govt_management:'0'),
                        'state'=>array("govt"=>isset($statelevel->m_govt_management)?$statelevel->m_govt_management:'0',"govt_aided"=>isset($statelevel->m_govt_aided_management)?$statelevel->m_govt_aided_management:'0',"private"=>isset($statelevel->m_private_management)?$statelevel->m_private_management:'0',"central_govt"=>isset($statelevel->m_central_govt_management)?$statelevel->m_central_govt_management:'0'),
                        'national'=>array("govt"=>isset($nationalLevel->m_govt_management)?$nationalLevel->m_govt_management:'0',"govt_aided"=>isset($nationalLevel->m_govt_aided_management)?$nationalLevel->m_govt_aided_management:'0',"private"=>isset($nationalLevel->m_private_management)?$nationalLevel->m_private_management:'0',"central_govt"=>isset($nationalLevel->m_central_govt_management)?$nationalLevel->m_central_govt_management:'0')),
                    'socialgroup'=>array(
                        'district'=>array("sc"=>isset($performanceDistrictGraph->m_sc_social_group)?$performanceDistrictGraph->m_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->m_obc_social_group)?$performanceDistrictGraph->m_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->m_st_social_group)?$performanceDistrictGraph->m_st_social_group:'0',"general"=>isset($performanceDistrictGraph->m_general_social_group)?$performanceDistrictGraph->m_general_social_group:'0'),
                        'state'=>array("sc"=>isset($statelevel->m_sc_social_group)?$statelevel->m_sc_social_group:'0',"obc"=>isset($statelevel->m_obc_social_group)?$statelevel->m_obc_social_group:'0',"st"=>isset($statelevel->m_st_social_group)?$statelevel->m_st_social_group:'0',"general"=>isset($statelevel->m_general_social_group)?$statelevel->m_general_social_group:'0'),
                        'national'=>array("sc"=>isset($nationalLevel->m_sc_social_group)?$nationalLevel->m_sc_social_group:'0',"obc"=>isset($nationalLevel->m_obc_social_group)?$nationalLevel->m_obc_social_group:'0',"st"=>isset($nationalLevel->m_st_social_group)?$nationalLevel->m_st_social_group:'0',"general"=>isset($nationalLevel->m_general_social_group)?$nationalLevel->m_general_social_group:'0')),
                    );
                // Calculation EVS  for District Level 
                $newArray['evs'] =array(
                        'gender'=>array(
                            'district'=>array("boys"=>isset($performanceDistrictGraph->e_male_gender)?$performanceDistrictGraph->e_male_gender:'0',"girls"=>isset($performanceDistrictGraph->e_female_gender)?$performanceDistrictGraph->e_female_gender:'0'),
                            'state'=>array("boys"=>isset($statelevel->e_male_gender)?$statelevel->e_male_gender:'0',"girls"=>isset($statelevel->e_female_gender)?$statelevel->e_female_gender:'0'),
                            'national'=>array("boys"=>isset($nationalLevel->e_male_gender)?$nationalLevel->e_male_gender:'0',"girls"=>isset($nationalLevel->e_female_gender)?$nationalLevel->e_female_gender:'0')),
                        'location'=>array(
                            'district'=>array("urban"=>isset($performanceDistrictGraph->e_urban_location)?$performanceDistrictGraph->e_urban_location:'0',"rural"=>isset($performanceDistrictGraph->e_rural_location)?$performanceDistrictGraph->e_rural_location:'0'),
                            'state'=>array("urban"=>isset($statelevel->e_urban_location)?$statelevel->e_urban_location:'0',"rural"=>isset($statelevel->e_rural_location)?$statelevel->e_rural_location:'0'),
                            'national'=>array("urban"=>isset($nationalLevel->e_urban_location)?$nationalLevel->e_urban_location:'0',"rural"=>isset($nationalLevel->e_rural_location)?$nationalLevel->e_rural_location:'0')),
                        'management'=>array(
                            'district'=>array("govt"=>isset($performanceDistrictGraph->e_govt_management)?$performanceDistrictGraph->e_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->e_govt_aided_management)?$performanceDistrictGraph->e_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->e_private_management)?$performanceDistrictGraph->e_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->e_central_govt_management)?$performanceDistrictGraph->e_central_govt_management:'0'),
                            'state'=>array("govt"=>isset($statelevel->e_govt_management)?$statelevel->e_govt_management:'0',"govt_aided"=>isset($statelevel->e_govt_aided_management)?$statelevel->e_govt_aided_management:'0',"private"=>isset($statelevel->e_private_management)?$statelevel->e_private_management:'0',"central_govt"=>isset($statelevel->e_central_govt_management)?$statelevel->e_central_govt_management:'0'),
                            'national'=>array("govt"=>isset($nationalLevel->e_govt_management)?$nationalLevel->e_govt_management:'0',"govt_aided"=>isset($nationalLevel->e_govt_aided_management)?$nationalLevel->e_govt_aided_management:'0',"private"=>isset($nationalLevel->e_private_management)?$nationalLevel->e_private_management:'0',"central_govt"=>isset($nationalLevel->e_central_govt_management)?$nationalLevel->e_central_govt_management:'0')),
                        'socialgroup'=>array(
                            'district'=>array("sc"=>isset($performanceDistrictGraph->e_sc_social_group)?$performanceDistrictGraph->e_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->e_obc_social_group)?$performanceDistrictGraph->e_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->e_st_social_group)?$performanceDistrictGraph->e_st_social_group:'0',"general"=>isset($performanceDistrictGraph->e_general_social_group)?$performanceDistrictGraph->e_general_social_group:'0'),
                            'state'=>array("sc"=>isset($statelevel->e_sc_social_group)?$statelevel->e_sc_social_group:'0',"obc"=>isset($statelevel->e_obc_social_group)?$statelevel->e_obc_social_group:'0',"st"=>isset($statelevel->e_st_social_group)?$statelevel->e_st_social_group:'0',"general"=>isset($statelevel->e_general_social_group)?$statelevel->e_general_social_group:'0'),
                            'national'=>array("sc"=>isset($nationalLevel->e_sc_social_group)?$nationalLevel->e_sc_social_group:'0',"obc"=>isset($nationalLevel->e_obc_social_group)?$nationalLevel->e_obc_social_group:'0',"st"=>isset($nationalLevel->e_st_social_group)?$nationalLevel->e_st_social_group:'0',"general"=>isset($nationalLevel->e_general_social_group)?$nationalLevel->e_general_social_group:'0')),
                        );
                // Calculation EVS  for District Level 
                $newArray['mil'] =array(
                            'gender'=>array(
                                'district'=>array("boys"=>isset($performanceDistrictGraph->mil_male_gender)?$performanceDistrictGraph->mil_male_gender:'0',"girls"=>isset($performanceDistrictGraph->mil_female_gender)?$performanceDistrictGraph->mil_female_gender:'0'),
                                'state'=>array("boys"=>isset($statelevel->mil_male_gender)?$statelevel->mil_male_gender:'0',"girls"=>isset($statelevel->mil_female_gender)?$statelevel->mil_female_gender:'0'),
                                'national'=>array("boys"=>isset($nationalLevel->mil_male_gender)?$nationalLevel->mil_male_gender:'0',"girls"=>isset($nationalLevel->mil_female_gender)?$nationalLevel->mil_female_gender:'0')),
                            'location'=>array(
                                'district'=>array("urban"=>isset($performanceDistrictGraph->mil_urban_location)?$performanceDistrictGraph->mil_urban_location:'0',"rural"=>isset($performanceDistrictGraph->mil_rural_location)?$performanceDistrictGraph->mil_rural_location:'0'),
                                'state'=>array("urban"=>isset($statelevel->mil_urban_location)?$statelevel->mil_urban_location:'0',"rural"=>isset($statelevel->mil_rural_location)?$statelevel->mil_rural_location:'0'),
                                'national'=>array("urban"=>isset($nationalLevel->mil_urban_location)?$nationalLevel->mil_urban_location:'0',"rural"=>isset($nationalLevel->mil_rural_location)?$nationalLevel->mil_rural_location:'0')),
                            'management'=>array(
                                'district'=>array("govt"=>isset($performanceDistrictGraph->mil_govt_management)?$performanceDistrictGraph->mil_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->mil_govt_aided_management)?$performanceDistrictGraph->mil_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->mil_private_management)?$performanceDistrictGraph->mil_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->mil_central_govt_management)?$performanceDistrictGraph->mil_central_govt_management:'0'),
                                'state'=>array("govt"=>isset($statelevel->mil_govt_management)?$statelevel->mil_govt_management:'0',"govt_aided"=>isset($statelevel->mil_govt_aided_management)?$statelevel->mil_govt_aided_management:'0',"private"=>isset($statelevel->mil_private_management)?$statelevel->mil_private_management:'0',"central_govt"=>isset($statelevel->mil_central_govt_management)?$statelevel->mil_central_govt_management:'0'),
                                'national'=>array("govt"=>isset($nationalLevel->mil_govt_management)?$nationalLevel->mil_govt_management:'0',"govt_aided"=>isset($nationalLevel->mil_govt_aided_management)?$nationalLevel->mil_govt_aided_management:'0',"private"=>isset($nationalLevel->mil_private_management)?$nationalLevel->mil_private_management:'0',"central_govt"=>isset($nationalLevel->mil_central_govt_management)?$nationalLevel->mil_central_govt_management:'0')),
                            'socialgroup'=>array(
                                'district'=>array("sc"=>isset($performanceDistrictGraph->mil_sc_social_group)?$performanceDistrictGraph->mil_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->mil_obc_social_group)?$performanceDistrictGraph->mil_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->mil_st_social_group)?$performanceDistrictGraph->mil_st_social_group:'0',"general"=>isset($performanceDistrictGraph->mil_general_social_group)?$performanceDistrictGraph->mil_general_social_group:'0'),
                                'state'=>array("sc"=>isset($statelevel->mil_sc_social_group)?$statelevel->mil_sc_social_group:'0',"obc"=>isset($statelevel->mil_obc_social_group)?$statelevel->mil_obc_social_group:'0',"st"=>isset($statelevel->mil_st_social_group)?$statelevel->mil_st_social_group:'0',"general"=>isset($statelevel->mil_general_social_group)?$statelevel->mil_general_social_group:'0'),
                                'national'=>array("sc"=>isset($nationalLevel->mil_sc_social_group)?$nationalLevel->mil_sc_social_group:'0',"obc"=>isset($nationalLevel->mil_obc_social_group)?$nationalLevel->mil_obc_social_group:'0',"st"=>isset($nationalLevel->mil_st_social_group)?$nationalLevel->mil_st_social_group:'0',"general"=>isset($nationalLevel->mil_general_social_group)?$nationalLevel->mil_general_social_group:'0')),
                            );
                 // Calculation ENGLISH  for District Level 
                $newArray['eng'] =array(
                            'gender'=>array(
                                'district'=>array("boys"=>isset($performanceDistrictGraph->eng_male_gender)?$performanceDistrictGraph->eng_male_gender:'0',"girls"=>isset($performanceDistrictGraph->eng_female_gender)?$performanceDistrictGraph->eng_female_gender:'0'),
                                'state'=>array("boys"=>isset($statelevel->eng_male_gender)?$statelevel->eng_male_gender:'0',"girls"=>isset($statelevel->eng_female_gender)?$statelevel->eng_female_gender:'0'),
                                'national'=>array("boys"=>isset($nationalLevel->eng_male_gender)?$nationalLevel->eng_male_gender:'0',"girls"=>isset($nationalLevel->eng_female_gender)?$nationalLevel->eng_female_gender:'0')),
                            'location'=>array(
                                'district'=>array("urban"=>isset($performanceDistrictGraph->eng_urban_location)?$performanceDistrictGraph->eng_urban_location:'0',"rural"=>isset($performanceDistrictGraph->eng_rural_location)?$performanceDistrictGraph->eng_rural_location:'0'),
                                'state'=>array("urban"=>isset($statelevel->eng_urban_location)?$statelevel->eng_urban_location:'0',"rural"=>isset($statelevel->eng_rural_location)?$statelevel->eng_rural_location:'0'),
                                'national'=>array("urban"=>isset($nationalLevel->eng_urban_location)?$nationalLevel->eng_urban_location:'0',"rural"=>isset($nationalLevel->eng_rural_location)?$nationalLevel->eng_rural_location:'0')),
                            'management'=>array(
                                'district'=>array("govt"=>isset($performanceDistrictGraph->eng_govt_management)?$performanceDistrictGraph->eng_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->eng_govt_aided_management)?$performanceDistrictGraph->eng_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->eng_private_management)?$performanceDistrictGraph->eng_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->eng_central_govt_management)?$performanceDistrictGraph->eng_central_govt_management:'0'),
                                'state'=>array("govt"=>isset($statelevel->eng_govt_management)?$statelevel->eng_govt_management:'0',"govt_aided"=>isset($statelevel->eng_govt_aided_management)?$statelevel->eng_govt_aided_management:'0',"private"=>isset($statelevel->eng_private_management)?$statelevel->eng_private_management:'0',"central_govt"=>isset($statelevel->eng_central_govt_management)?$statelevel->eng_central_govt_management:'0'),
                                'national'=>array("govt"=>isset($nationalLevel->eng_govt_management)?$nationalLevel->eng_govt_management:'0',"govt_aided"=>isset($nationalLevel->eng_govt_aided_management)?$nationalLevel->eng_govt_aided_management:'0',"private"=>isset($nationalLevel->eng_private_management)?$nationalLevel->eng_private_management:'0',"central_govt"=>isset($nationalLevel->eng_central_govt_management)?$nationalLevel->eng_central_govt_management:'0')),
                            'socialgroup'=>array(
                                'district'=>array("sc"=>isset($performanceDistrictGraph->eng_sc_social_group)?$performanceDistrictGraph->eng_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->eng_obc_social_group)?$performanceDistrictGraph->eng_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->eng_st_social_group)?$performanceDistrictGraph->eng_st_social_group:'0',"general"=>isset($performanceDistrictGraph->eng_general_social_group)?$performanceDistrictGraph->eng_general_social_group:'0'),
                                'state'=>array("sc"=>isset($statelevel->eng_sc_social_group)?$statelevel->eng_sc_social_group:'0',"obc"=>isset($statelevel->eng_obc_social_group)?$statelevel->eng_obc_social_group:'0',"st"=>isset($statelevel->eng_st_social_group)?$statelevel->eng_st_social_group:'0',"general"=>isset($statelevel->eng_general_social_group)?$statelevel->eng_general_social_group:'0'),
                                'national'=>array("sc"=>isset($nationalLevel->eng_sc_social_group)?$nationalLevel->eng_sc_social_group:'0',"obc"=>isset($nationalLevel->eng_obc_social_group)?$nationalLevel->eng_obc_social_group:'0',"st"=>isset($nationalLevel->eng_st_social_group)?$nationalLevel->eng_st_social_group:'0',"general"=>isset($nationalLevel->eng_general_social_group)?$nationalLevel->eng_general_social_group:'0')),
                            );
                // Calculation SCIENCE  for District Level 
                            $newArray['sci'] =array(
                                'gender'=>array(
                                    'district'=>array("boys"=>isset($performanceDistrictGraph->sci_male_gender)?$performanceDistrictGraph->sci_male_gender:'0',"girls"=>isset($performanceDistrictGraph->sci_female_gender)?$performanceDistrictGraph->sci_female_gender:'0'),
                                    'state'=>array("boys"=>isset($statelevel->sci_male_gender)?$statelevel->sci_male_gender:'0',"girls"=>isset($statelevel->sci_female_gender)?$statelevel->sci_female_gender:'0'),
                                    'national'=>array("boys"=>isset($nationalLevel->sci_male_gender)?$nationalLevel->sci_male_gender:'0',"girls"=>isset($nationalLevel->sci_female_gender)?$nationalLevel->sci_female_gender:'0')),
                                'location'=>array(
                                    'district'=>array("urban"=>isset($performanceDistrictGraph->sci_urban_location)?$performanceDistrictGraph->sci_urban_location:'0',"rural"=>isset($performanceDistrictGraph->sci_rural_location)?$performanceDistrictGraph->sci_rural_location:'0'),
                                    'state'=>array("urban"=>isset($statelevel->sci_urban_location)?$statelevel->sci_urban_location:'0',"rural"=>isset($statelevel->sci_rural_location)?$statelevel->sci_rural_location:'0'),
                                    'national'=>array("urban"=>isset($nationalLevel->sci_urban_location)?$nationalLevel->sci_urban_location:'0',"rural"=>isset($nationalLevel->sci_rural_location)?$nationalLevel->sci_rural_location:'0')),
                                'management'=>array(
                                    'district'=>array("govt"=>isset($performanceDistrictGraph->sci_govt_management)?$performanceDistrictGraph->sci_govt_management:'0',"govt_aided"=>isset($performanceDistrictGraph->sci_govt_aided_management)?$performanceDistrictGraph->sci_govt_aided_management:'0',"private"=>isset($performanceDistrictGraph->sci_private_management)?$performanceDistrictGraph->sci_private_management:'0',"central_govt"=>isset($performanceDistrictGraph->sci_central_govt_management)?$performanceDistrictGraph->sci_central_govt_management:'0'),
                                    'state'=>array("govt"=>isset($statelevel->sci_govt_management)?$statelevel->sci_govt_management:'0',"govt_aided"=>isset($statelevel->sci_govt_aided_management)?$statelevel->sci_govt_aided_management:'0',"private"=>isset($statelevel->sci_private_management)?$statelevel->sci_private_management:'0',"central_govt"=>isset($statelevel->sci_central_govt_management)?$statelevel->sci_central_govt_management:'0'),
                                    'national'=>array("govt"=>isset($nationalLevel->sci_govt_management)?$nationalLevel->sci_govt_management:'0',"govt_aided"=>isset($nationalLevel->sci_govt_aided_management)?$nationalLevel->sci_govt_aided_management:'0',"private"=>isset($nationalLevel->sci_private_management)?$nationalLevel->sci_private_management:'0',"central_govt"=>isset($nationalLevel->sci_central_govt_management)?$nationalLevel->sci_central_govt_management:'0')),
                                'socialgroup'=>array(
                                    'district'=>array("sc"=>isset($performanceDistrictGraph->sci_sc_social_group)?$performanceDistrictGraph->sci_sc_social_group:'0',"obc"=>isset($performanceDistrictGraph->sci_obc_social_group)?$performanceDistrictGraph->sci_obc_social_group:'0',"st"=>isset($performanceDistrictGraph->sci_st_social_group)?$performanceDistrictGraph->sci_st_social_group:'0',"general"=>isset($performanceDistrictGraph->sci_general_social_group)?$performanceDistrictGraph->sci_general_social_group:'0'),
                                    'state'=>array("sc"=>isset($statelevel->sci_sc_social_group)?$statelevel->sci_sc_social_group:'0',"obc"=>isset($statelevel->sci_obc_social_group)?$statelevel->sci_obc_social_group:'0',"st"=>isset($statelevel->sci_st_social_group)?$statelevel->sci_st_social_group:'0',"general"=>isset($statelevel->sci_general_social_group)?$statelevel->sci_general_social_group:'0'),
                                    'national'=>array("sc"=>isset($nationalLevel->sci_sc_social_group)?$nationalLevel->sci_sc_social_group:'0',"obc"=>isset($nationalLevel->sci_obc_social_group)?$nationalLevel->sci_obc_social_group:'0',"st"=>isset($nationalLevel->sci_st_social_group)?$nationalLevel->sci_st_social_group:'0',"general"=>isset($nationalLevel->sci_general_social_group)?$nationalLevel->sci_general_social_group:'0')),
                                );
                            
        }
        dd($newArray);
        // End  District Level Change Syntax



        
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
        where state_id=7 and grade=3
        group by ".$queryGroupSyntax." at3_performance_data.grade";

        return $query;

    }
}
