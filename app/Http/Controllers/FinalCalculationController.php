<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FinalCalculationController extends Controller
{
    public function getDRCDataForGrade3()
    {
       //Grade 3 for Participations
       $drcData3Grade =  DB::table('drc_table_data')->take(5)->get();
       $newDataGrade3 = array();
        if(count($drcData)>0)
        {
            foreach($drcData3Grade as $at3GradeCounts)
            {
                $dataGrade3['state_id'] = (int)$at3GradeCounts->udise_state_code;
                $dataGrade3['district_id'] = (int)$at3GradeCounts->udise_district_code;
                $dataGrade3['grade'] = 03;

                $dataGrade3['rural_location'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['rural_location_count'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;

                $dataGrade3['urban_location'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['urban_location_count'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;

                $dataGrade3['govt_school'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['govt_school_count'] = isset($at3GradeCounts->govt_school_count)?$at3GradeCounts->govt_school_count:0;
                $dataGrade3['govt_aided_school'] = isset($at3GradeCounts->govt_aided_school)?$at3GradeCounts->govt_aided_school:0;
                $dataGrade3['govt_aided_school_count'] = isset($at3GradeCounts->govt_aided_school_count)?$at3GradeCounts->govt_aided_school_count:0;
                $dataGrade3['private_school'] = isset($at3GradeCounts->private_school)?$at3GradeCounts->private_school:0;
                $dataGrade3['private_school_count'] = isset($at3GradeCounts->private_school_count)?$at3GradeCounts->private_school_count:0;
                $dataGrade3['central_govt_school'] = isset($at3GradeCounts->central_govt_school)?$at3GradeCounts->central_govt_school:0;
                $dataGrade3['central_govt_school_count'] = isset($at3GradeCounts->central_govt_school_count)?$at3GradeCounts->central_govt_school_count:0;
                
                $dataGrade3['total_school'] = isset($at3GradeCounts->drc_gr3_nsch_tot)?$at3GradeCounts->drc_gr3_nsch_tot:0;
                $dataGrade3['total_student'] = isset($at3GradeCounts->drc_gr3_nstu_tot)?$at3GradeCounts->drc_gr3_nstu_tot:0;
                
                $dataGrade3['sc_social_group'] = isset($at3GradeCounts->sc_social_group)?$at3GradeCounts->sc_social_group:0;
                $dataGrade3['sc_social_group_count'] = isset($at3GradeCounts->sc_social_group_count)?$at3GradeCounts->sc_social_group_count:0;
                $dataGrade3['obc_social_group'] = isset($at3GradeCounts->obc_social_group)?$at3GradeCounts->obc_social_group:0;
                $dataGrade3['obc_social_group_count'] = isset($at3GradeCounts->obc_social_group_count)?$at3GradeCounts->obc_social_group_count:0;
                $dataGrade3['st_social_group'] = isset($at3GradeCounts->st_social_group)?$at3GradeCounts->st_social_group:0;
                $dataGrade3['st_social_group_count'] = isset($at3GradeCounts->st_social_group_count)?$at3GradeCounts->st_social_group_count:0;
                $dataGrade3['general_social_group'] = isset($at3GradeCounts->general_social_group)?$at3GradeCounts->general_social_group:0;
                $dataGrade3['general_social_group_count'] = isset($at3GradeCounts->drc_gr3_ntrs_tot)?$at3GradeCounts->drc_gr3_ntrs_tot:0;
                
                $dataGrade3['total_teacher'] = isset($at3GradeCounts->drc_gr3_ntrs_tot)?$at3GradeCounts->drc_gr3_ntrs_tot:0;
                $dataGrade3['male_gender'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['male_gender_count'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['female_gender'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['female_gender_count'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['created_at'] = now();
                $dataGrade3['updated_at'] = now();
                $newDataGrade3[]=$dataGrade3;
            }
            
        }   
       dd($newDataGrade3);
       $districtmsg = AllGradeParticipationTBL::insert($newDataGrade3GradeWise);
       dd($data);
    }

    public function getDRCDataForGrade5()
    {
        $newDataGrade3 = array();
        if(count($drcData)>0)
        {
            foreach($drcData3Grade as $at3GradeCounts)
            {
                $dataGrade3['state_id'] = (int)$at3GradeCounts->udise_state_code;
                $dataGrade3['district_id'] = (int)$at3GradeCounts->udise_district_code;
                $dataGrade3['grade'] = 03;

                $dataGrade3['rural_location'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['rural_location_count'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;

                $dataGrade3['urban_location'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['urban_location_count'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;

                $dataGrade3['govt_school'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['govt_school_count'] = isset($at3GradeCounts->govt_school_count)?$at3GradeCounts->govt_school_count:0;
                $dataGrade3['govt_aided_school'] = isset($at3GradeCounts->govt_aided_school)?$at3GradeCounts->govt_aided_school:0;
                $dataGrade3['govt_aided_school_count'] = isset($at3GradeCounts->govt_aided_school_count)?$at3GradeCounts->govt_aided_school_count:0;
                $dataGrade3['private_school'] = isset($at3GradeCounts->private_school)?$at3GradeCounts->private_school:0;
                $dataGrade3['private_school_count'] = isset($at3GradeCounts->private_school_count)?$at3GradeCounts->private_school_count:0;
                $dataGrade3['central_govt_school'] = isset($at3GradeCounts->central_govt_school)?$at3GradeCounts->central_govt_school:0;
                $dataGrade3['central_govt_school_count'] = isset($at3GradeCounts->central_govt_school_count)?$at3GradeCounts->central_govt_school_count:0;
                
                $dataGrade3['total_school'] = isset($at3GradeCounts->drc_gr3_nsch_tot)?$at3GradeCounts->drc_gr3_nsch_tot:0;
                $dataGrade3['total_student'] = isset($at3GradeCounts->drc_gr3_nstu_tot)?$at3GradeCounts->drc_gr3_nstu_tot:0;
                
                $dataGrade3['sc_social_group'] = isset($at3GradeCounts->sc_social_group)?$at3GradeCounts->sc_social_group:0;
                $dataGrade3['sc_social_group_count'] = isset($at3GradeCounts->sc_social_group_count)?$at3GradeCounts->sc_social_group_count:0;
                $dataGrade3['obc_social_group'] = isset($at3GradeCounts->obc_social_group)?$at3GradeCounts->obc_social_group:0;
                $dataGrade3['obc_social_group_count'] = isset($at3GradeCounts->obc_social_group_count)?$at3GradeCounts->obc_social_group_count:0;
                $dataGrade3['st_social_group'] = isset($at3GradeCounts->st_social_group)?$at3GradeCounts->st_social_group:0;
                $dataGrade3['st_social_group_count'] = isset($at3GradeCounts->st_social_group_count)?$at3GradeCounts->st_social_group_count:0;
                $dataGrade3['general_social_group'] = isset($at3GradeCounts->general_social_group)?$at3GradeCounts->general_social_group:0;
                $dataGrade3['general_social_group_count'] = isset($at3GradeCounts->drc_gr3_ntrs_tot)?$at3GradeCounts->drc_gr3_ntrs_tot:0;
                
                $dataGrade3['total_teacher'] = isset($at3GradeCounts->drc_gr3_ntrs_tot)?$at3GradeCounts->drc_gr3_ntrs_tot:0;
                $dataGrade3['male_gender'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['male_gender_count'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['female_gender'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['female_gender_count'] = isset($at3GradeCounts->drc_gr3_ps_boys)?$at3GradeCounts->drc_gr3_ps_boys:0;
                $dataGrade3['created_at'] = now();
                $dataGrade3['updated_at'] = now();
                $newDataGrade3[]=$dataGrade3;
            }
            
        }   
        
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
    }
}
