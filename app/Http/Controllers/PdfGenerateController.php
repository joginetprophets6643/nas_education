<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use mikehaertl\wkhtmlto\Pdf;
use File;
use App\Models\District_Master;
use App\Models\State_Master;
use App\Models\NationalStatistic;
use DB;
use App\Models\StateGradeLevelPerformance;

class PdfGenerateController extends Controller
{
    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districtData = District_Master::select('id','state_name','district_name','district_id','udise_district_code','udise_state_code','is_active','total_district_area','total_population','rural_population','urban_population','density_of_population','literacy_rate','child_sex_ratio','no_of_schools','state_govt_schools','govt_aided_schools','central_govt_schools','private_unaided_reco_schools','teacher_state_govt_schools','teacher_govt_aided_schools','teacher_central_govt_schools','teacher_private_unaided_reco_schools')
                            ->with(['DistrictParticipation'=>function($participation){
                                $participation->select('id','state_id','district_id','grade','total_school','total_student','total_teacher','rural_location','urban_location','govt_school','govt_aided_school','private_school','central_govt_school','sc_social_group','obc_social_group','st_social_group','general_social_group','male_gender','female_gender');
                                $participation->with(['DistrictPerformance']);
                                $participation->orderBy('grade','asc');
                            },
                            'DistrictLO'=>function($lo){
                                $lo->orderBy('grade','asc');
                            },
                            'DistrictFeedback'=>function($feedback){
                                $feedback->orderBy('grade','asc');
                            }])
                            // ->whereIn('udise_district_code',['710'])
                            ->get();
        // dd($districtData);
        if(count($districtData)>0)
        {
            foreach($districtData as $districtVal)
            {
                $districtParticipationData = $districtVal['DistrictParticipation'];
                $districtLOData = $districtVal['DistrictLO'];
                $districtFeedbackData = $districtVal['DistrictFeedback'];
                return view('pdf.districtpdf',compact('districtVal','districtParticipationData','districtLOData','districtFeedbackData'));
            }
        }        
    }
   
    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function dwn()
    {
        $districtData = District_Master::select('id','state_name','district_name','udise_district_code','district_id','udise_state_code','is_active','total_district_area','total_population','rural_population','urban_population','density_of_population','literacy_rate','child_sex_ratio','no_of_schools','state_govt_schools','govt_aided_schools','central_govt_schools','private_unaided_reco_schools','teacher_state_govt_schools','teacher_govt_aided_schools','teacher_central_govt_schools','teacher_private_unaided_reco_schools')
                            ->with(['DistrictParticipation'=>function($participation){
                                $participation->select('id','state_id','district_id','grade','total_school','total_student','total_teacher','rural_location','urban_location','govt_school','govt_aided_school','private_school','central_govt_school','sc_social_group','obc_social_group','st_social_group','general_social_group','male_gender','female_gender');
                                $participation->with(['DistrictPerformance']);
                                $participation->orderBy('grade','asc');
                            },
                            'DistrictLO'=>function($lo){
                                $lo->orderBy('grade','asc');
                            },
                            'DistrictFeedback'=>function($feedback){
                                $feedback->orderBy('grade','asc');
                            }])
                            ->whereIn('udise_district_code',['710'])
                            ->get();
        // dd($districtData);
                            //,'721','715'
        if(count($districtData)>0)
        {
            foreach($districtData as $districtVal)
            {
                $districtParticipationData = $districtVal['DistrictParticipation'];
                $districtLOData = $districtVal['DistrictLO'];
                $districtFeedbackData = $districtVal['DistrictFeedback'];
                // dd($districtVal);
                $folderPath = public_path('nas_pdf/national/'.$districtVal->udise_state_code.'/'.$districtVal->udise_district_code.'/');

                if(File::isDirectory($folderPath)){
                    File::deleteDirectory($folderPath);
                }
                if(!File::isDirectory($folderPath)){
                    File::makeDirectory($folderPath, 0777, true, true);
                }

                // $t=time();
                $fileName='nas-district';
                $file_path = $folderPath.''.$fileName.'-report.pdf';
                // if(File::exists($file_path)) File::delete($file_path);
                
                $render = view('pdf.districtpdf',compact('districtVal','districtParticipationData','districtLOData','districtFeedbackData'))->render();
                $pdf = new Pdf;
                $pdf->addPage($render);
                $pdf->setOptions(['javascript-delay' => 5000,'page-size'=>'a2']);
                // ,'page-size'=>'a3'
                // Storage::put('public/pdf/report.pdf', $pdf->output());

                $pdf->saveAs($file_path);            
                // return response()->download($file_path);
            }
        }

        echo 'District Level Pdf generate successfully.';

    }

    /**
    * State Pdf View
    *
    * Date : 15/02/2021
    */
    public function StateIndex()
    {
        $stateData = State_Master::select('id','state_name','udise_state_code','is_active','total_district_area','total_population','rural_population','urban_population','density_of_population','literacy_rate','child_sex_ratio','no_of_schools','state_govt_schools','govt_aided_schools','central_govt_schools','private_unaided_reco_schools','teacher_state_govt_schools','teacher_govt_aided_schools','teacher_central_govt_schools','teacher_private_unaided_reco_schools')
                            ->with(['StatePerformance'=>function($lo){
                                $lo->orderBy('grade','asc');
                            },
                            'StateLO'=>function($lo){
                                $lo->orderBy('grade','asc');
                            }])
                            ->whereIn('udise_state_code',['7'])
                            ->get();
        if(count($stateData)>0)
        {
            foreach($stateData as $stateVal)
            {
                $performanceData = $stateVal['StatePerformance'];
                $stateParticipationQuery = $this->StateParticipationGroupByQuery($stateVal->udise_state_code);
                $stateParticipationData = DB::select($stateParticipationQuery);
                $stateParticipationData = json_decode(json_encode($stateParticipationData), true);
                if(count($stateParticipationData)>0)
                {
                  $sc_social_group = $stateParticipationData[0]['sc_social_group'];
                }
                else
                {
                  $sc_social_group = 0;
                }
                if(count($stateParticipationData)>0)
                {
                  $obc_social_group = $stateParticipationData[0]['obc_social_group'];
                }
                else
                {
                  $obc_social_group = 0;
                }
                if(count($stateParticipationData)>0)
                {
                  $st_social_group = $stateParticipationData[0]['st_social_group'];
                }
                else
                {
                  $st_social_group = 0;
                }
                if(count($stateParticipationData)>0)
                {
                  $general_social_group = $stateParticipationData[0]['general_social_group'];
                }
                else
                {
                  $general_social_group = 0;
                }        
                $scImg = $this->getImgName($sc_social_group,'pink');
                $obcImg = $this->getImgName($obc_social_group,'yellow');
                $stImg = $this->getImgName($st_social_group,'sagegreen');
                $genImg = $this->getImgName($general_social_group,'blue');

                $stateLOData = $stateVal['StateLO'];

                // PQ data
                $whereConditionpq = "and level='pq'";
                $stateFeedbackQuerypq = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionpq);
                $stateFeedbackDatapq = DB::select($stateFeedbackQuerypq);
                // SQ Data
                $whereConditionsq = "and level='sq'";
                $stateFeedbackQuerysq = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionsq);
                $stateFeedbackDatasq = DB::select($stateFeedbackQuerysq);
                // TQ Data
                $whereConditiontq = "and level='tq'";
                $stateFeedbackQuerytq = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditiontq);
                $stateFeedbackDatatq = DB::select($stateFeedbackQuerytq);
                // PQ1 Data
                $whereConditionpq1 = "and level='pq1'";
                $stateFeedbackQuerypq1 = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionpq1);
                $stateFeedbackDatapq1 = DB::select($stateFeedbackQuerypq1);
                // PQ2 Data
                $whereConditionpq2 = "and level='pq2'";
                $stateFeedbackQuerypq2 = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionpq2);
                $stateFeedbackDatapq2 = DB::select($stateFeedbackQuerypq2);
                // PQ3 Data
                $whereConditionpq3 = "and level='pq3'";
                $stateFeedbackQuerypq3 = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionpq3);
                $stateFeedbackDatapq3 = DB::select($stateFeedbackQuerypq3);

                return view('statepdf.index',compact('stateVal','performanceData','stateParticipationData','stateFeedbackDatapq','stateFeedbackDatatq','stateFeedbackDatasq','stateFeedbackDatapq1','stateFeedbackDatapq2','stateFeedbackDatapq3','stateLOData','scImg','obcImg','stImg','genImg'));
            }
        }  
    }

    /**
    * Download State Pdf 
    *
    * Date : 15/02/2021
    */    
    public function Statedwn()
    {
        $stateData = State_Master::select('id','state_name','udise_state_code','is_active','total_district_area','total_population','rural_population','urban_population','density_of_population','literacy_rate','child_sex_ratio','no_of_schools','state_govt_schools','govt_aided_schools','central_govt_schools','private_unaided_reco_schools','teacher_state_govt_schools','teacher_govt_aided_schools','teacher_central_govt_schools','teacher_private_unaided_reco_schools')
                            ->with(['StatePerformance'=>function($lo){
                                $lo->orderBy('grade','asc');
                            },
                            'StateLO'=>function($lo){
                                $lo->orderBy('grade','asc');
                            }])
                            ->whereIn('udise_state_code',['7'])
                            ->get();
                            //,'721','715'
        if(count($stateData)>0)
        {
            foreach($stateData as $stateVal)
            {
                $performanceData = $stateVal['StatePerformance'];
                $stateParticipationQuery = $this->StateParticipationGroupByQuery($stateVal->udise_state_code);
                $stateParticipationData = DB::select($stateParticipationQuery);
                $stateParticipationData = json_decode(json_encode($stateParticipationData), true);
                if(count($stateParticipationData)>0)
                {
                  $sc_social_group = $stateParticipationData[0]['sc_social_group'];
                }
                else
                {
                  $sc_social_group = 0;
                }
                if(count($stateParticipationData)>0)
                {
                  $obc_social_group = $stateParticipationData[0]['obc_social_group'];
                }
                else
                {
                  $obc_social_group = 0;
                }
                if(count($stateParticipationData)>0)
                {
                  $st_social_group = $stateParticipationData[0]['st_social_group'];
                }
                else
                {
                  $st_social_group = 0;
                }
                if(count($stateParticipationData)>0)
                {
                  $general_social_group = $stateParticipationData[0]['general_social_group'];
                }
                else
                {
                  $general_social_group = 0;
                }        
                $scImg = $this->getImgName($sc_social_group,'pink');
                $obcImg = $this->getImgName($obc_social_group,'yellow');
                $stImg = $this->getImgName($st_social_group,'sagegreen');
                $genImg = $this->getImgName($general_social_group,'blue');

                // if(count($stateParticipationData)>0)
                // {
                //     $stateParticipationData[0]=["rural_location"=> "0",
                //                             "urban_location"=> "0",
                //                             "govt_school"=> "0",
                //                             "govt_aided_school"=> "0",
                //                             "private_school"=> "0",
                //                             "central_govt_school"=> "0",
                //                             "sc_social_group"=> "0",
                //                             "obc_social_group"=> "0",
                //                             "st_social_group"=> "0",
                //                             "general_social_group"=> "0",
                //                             "male_gender"=> "0",
                //                             "female_gender"=> "0"];
                //     // dd($stateParticipationData);

                //                             echo $stateParticipationData[0]['urban_location'];

                // }

                $stateLOData = $stateVal['StateLO'];
                // PQ data
                $whereConditionpq = "and level='pq'";
                $stateFeedbackQuerypq = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionpq);
                $stateFeedbackDatapq = DB::select($stateFeedbackQuerypq);
                // SQ Data
                $whereConditionsq = "and level='sq'";
                $stateFeedbackQuerysq = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionsq);
                $stateFeedbackDatasq = DB::select($stateFeedbackQuerysq);
                // TQ Data
                $whereConditiontq = "and level='tq'";
                $stateFeedbackQuerytq = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditiontq);
                $stateFeedbackDatatq = DB::select($stateFeedbackQuerytq);
                // PQ1 Data
                $whereConditionpq1 = "and level='pq1'";
                $stateFeedbackQuerypq1 = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionpq1);
                $stateFeedbackDatapq1 = DB::select($stateFeedbackQuerypq1);
                // PQ2 Data
                $whereConditionpq2 = "and level='pq2'";
                $stateFeedbackQuerypq2 = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionpq2);
                $stateFeedbackDatapq2 = DB::select($stateFeedbackQuerypq2);
                // PQ3 Data
                $whereConditionpq3 = "and level='pq3'";
                $stateFeedbackQuerypq3 = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionpq3);
                $stateFeedbackDatapq3 = DB::select($stateFeedbackQuerypq3);
                // dd($districtVal);
                $folderPath = public_path('nas_pdf/national/'.$stateVal->udise_state_code.'/');

                $fileName='nas-state';
                $file_path = $folderPath.''.$fileName.'-report.pdf';

                if(File::isDirectory($folderPath)){
                    // File::deleteDirectory($folderPath);
                    if(File::exists($file_path))
                    {
                        File::delete($file_path);
                    }
                }
                if(!File::isDirectory($folderPath)){
                    File::makeDirectory($folderPath, 0777, true, true);
                }
               
                $render = view('statepdf.index',compact('stateVal','performanceData','stateParticipationData','stateFeedbackDatapq','stateFeedbackDatatq','stateFeedbackDatasq','stateFeedbackDatapq1','stateFeedbackDatapq2','stateFeedbackDatapq3','stateLOData','scImg','obcImg','stImg','genImg'))->render();
                $pdf = new Pdf;
                $pdf->addPage($render);
                $pdf->setOptions(['javascript-delay' => 5000,'page-size'=>'a4']);
                // ,'page-size'=>'a3'
                // Storage::put('public/pdf/report.pdf', $pdf->output());

                $pdf->saveAs($file_path);            
                // return response()->download($file_path);
            }
        }

        echo 'State Level Pdf generate successfully.';
    }

    /*****************************************
    *   Author: Er. Sanjay Kumar
    *   Desc: Html View For National Pdf Report Card
    *   Date: 21/02/2022
    **********************************/

    public function NationalIndex()
    {
        $nationalData = NationalStatistic::select('id','total_district_area','total_population','rural_population','urban_population','density_of_population','literacy_rate','child_sex_ratio')
                            // ->with(['StatePerformance'=>function($lo){
                            //     $lo->orderBy('grade','asc');
                            // },
                            // 'StateLO'=>function($lo){
                            //     $lo->orderBy('grade','asc');
                            // }])
                            // ->whereIn('udise_state_code',['7'])
                            ->first();
        $nationalPerformance = StateGradeLevelPerformance::distinct('grade')->orderBy('grade','asc')->get();

        // PQ data
        $whereConditionpq = "where level='pq'";
        $nationalFeedbackQuerypq = $this->NationalFeedbackGroupByQuery($whereConditionpq);
        $nationalFeedbackDatapq = DB::select($nationalFeedbackQuerypq);

        // SQ Data
        $whereConditionsq = "where level='sq'";
        $nationalFeedbackQuerysq = $this->NationalFeedbackGroupByQuery($whereConditionsq);
        $nationalFeedbackDatasq = DB::select($nationalFeedbackQuerysq);

        // SQN1 Data
        $whereConditionsqn1 = "where level='sqn1'";
        $nationalFeedbackQuerysqn1 = $this->NationalFeedbackGroupByQuery($whereConditionsqn1);
        $nationalFeedbackDatasqn1 = DB::select($nationalFeedbackQuerysqn1);
        // SQN2 Data
        $whereConditionsqn2 = "where level='sqn2'";
        $nationalFeedbackQuerysqn2 = $this->NationalFeedbackGroupByQuery($whereConditionsqn2);
        $nationalFeedbackDatasqn2 = DB::select($nationalFeedbackQuerysqn2);

        // TQ Data
        $whereConditiontq = "where level='tq'";
        $nationalFeedbackQuerytq = $this->NationalFeedbackGroupByQuery($whereConditiontq);
        $nationalFeedbackDatatq = DB::select($nationalFeedbackQuerytq);

        // TQN Data
        $whereConditiontqn = "where level='tqn'";
        $nationalFeedbackQuerytqn = $this->NationalFeedbackGroupByQuery($whereConditiontqn);
        $nationalFeedbackDatatqn = DB::select($nationalFeedbackQuerytqn);

        // // PQ1 Data
        // $whereConditionpq1 = "and level='pq1'";
        // $stateFeedbackQuerypq1 = $this->StateFeedbackGroupByQuery($stateVal->udise_state_code,$whereConditionpq1);
        // $stateFeedbackDatapq1 = DB::select($stateFeedbackQuerypq1);
        // PQ2 Data
        $whereConditionpq2 = "where level='pq2'";
        $nationalFeedbackQuerypq2 = $this->NationalFeedbackGroupByQuery($whereConditionpq2);
        $nationalFeedbackDatapq2 = DB::select($nationalFeedbackQuerypq2);
        // PQ3 Data
        $whereConditionpq3 = "where level='pq3'";
        $nationalFeedbackQuerypq3 = $this->NationalFeedbackGroupByQuery($whereConditionpq3);
        $nationalFeedbackDatapq3 = DB::select($nationalFeedbackQuerypq3);

        return view('nationalpdf.index',compact('nationalData','nationalPerformance','nationalFeedbackDatapq','nationalFeedbackDatapq2','nationalFeedbackDatapq3','nationalFeedbackDatasq','nationalFeedbackDatasqn1','nationalFeedbackDatasqn2','nationalFeedbackDatatq','nationalFeedbackDatatqn'));
    }

    /*****************************************
    *   Author: Er. Sanjay Kumar
    *   Desc: Download National Pdf Report Card
    *   Date: 21/02/2022
    **********************************/

    public function Nationaldwn()
    {
        $nationalData = NationalStatistic::select('id','total_district_area','total_population','rural_population','urban_population','density_of_population','literacy_rate','child_sex_ratio')
                            ->first();
        $nationalPerformance = StateGradeLevelPerformance::distinct('grade')->orderBy('grade','asc')->get();
        // PQ data
        $whereConditionpq = "where level='pq'";
        $nationalFeedbackQuerypq = $this->NationalFeedbackGroupByQuery($whereConditionpq);
        $nationalFeedbackDatapq = DB::select($nationalFeedbackQuerypq);
        // PQ2 Data
        $whereConditionpq2 = "where level='pq2'";
        $nationalFeedbackQuerypq2 = $this->NationalFeedbackGroupByQuery($whereConditionpq2);
        $nationalFeedbackDatapq2 = DB::select($nationalFeedbackQuerypq2);
        // PQ3 Data
        $whereConditionpq3 = "where level='pq3'";
        $nationalFeedbackQuerypq3 = $this->NationalFeedbackGroupByQuery($whereConditionpq3);
        $nationalFeedbackDatapq3 = DB::select($nationalFeedbackQuerypq3);
        // SQ Data
        $whereConditionsq = "where level='sq'";
        $nationalFeedbackQuerysq = $this->NationalFeedbackGroupByQuery($whereConditionsq);
        $nationalFeedbackDatasq = DB::select($nationalFeedbackQuerysq);
        // SQN1 Data
        $whereConditionsqn1 = "where level='sqn1'";
        $nationalFeedbackQuerysqn1 = $this->NationalFeedbackGroupByQuery($whereConditionsqn1);
        $nationalFeedbackDatasqn1 = DB::select($nationalFeedbackQuerysqn1);
        // SQN2 Data
        $whereConditionsqn2 = "where level='sqn2'";
        $nationalFeedbackQuerysqn2 = $this->NationalFeedbackGroupByQuery($whereConditionsqn2);
        $nationalFeedbackDatasqn2 = DB::select($nationalFeedbackQuerysqn2);
        // TQ Data
        $whereConditiontq = "where level='tq'";
        $nationalFeedbackQuerytq = $this->NationalFeedbackGroupByQuery($whereConditiontq);
        $nationalFeedbackDatatq = DB::select($nationalFeedbackQuerytq);
        // TQN Data
        $whereConditiontqn = "where level='tqn'";
        $nationalFeedbackQuerytqn = $this->NationalFeedbackGroupByQuery($whereConditiontqn);
        $nationalFeedbackDatatqn = DB::select($nationalFeedbackQuerytqn);

        $folderPath = public_path('nas_pdf/national/');
        $fileName='nas-national';
        $file_path = $folderPath.''.$fileName.'-report.pdf';

        if(File::isDirectory($folderPath)){
            // File::deleteDirectory($folderPath);
            if(File::exists($file_path))
            {
                File::delete($file_path);
            }
        }
        if(!File::isDirectory($folderPath)){
            File::makeDirectory($folderPath, 0777, true, true);
        }
       
        $render = view('nationalpdf.index',compact('nationalData','nationalPerformance','nationalFeedbackDatapq','nationalFeedbackDatapq2','nationalFeedbackDatapq3','nationalFeedbackDatasq','nationalFeedbackDatasqn1','nationalFeedbackDatasqn2','nationalFeedbackDatatq','nationalFeedbackDatatqn'))->render();

        $pdf = new Pdf;
        $pdf->addPage($render);
        $pdf->setOptions(['javascript-delay' => 5000,'page-size'=>'a4']);
        $pdf->saveAs($file_path);
        return response()->download($file_path);

    }
    public function StateParticipationGroupByQuery($state_id)
    {
        $query = "select state_id, count(grade) AS all_grade,
                round(SUM(rural_location::float)/count(grade)) as rural_location,
                round(SUM(urban_location::float)/count(grade)) as urban_location ,
                round(SUM(govt_school::float)/count(grade)) as govt_school ,
                round(SUM(govt_aided_school::float)/count(grade)) as govt_aided_school ,
                round(SUM(private_school::float)/count(grade)) as private_school ,
                round(SUM(central_govt_school::float)/count(grade)) as central_govt_school ,
                round(SUM(sc_social_group::float)/count(grade)) as sc_social_group ,
                round(SUM(obc_social_group::float)/count(grade)) as obc_social_group ,
                round(SUM(st_social_group::float)/count(grade)) as st_social_group ,
                round(SUM(general_social_group::float)/count(grade)) as general_social_group ,
                round(SUM(male_gender::float)/count(grade)) as male_gender,  
                round(SUM(female_gender::float)/count(grade)) as female_gender
                from all_grade_state_participation_tbl
                where state_id=".$state_id."
                group by state_id";
        return $query;
    }
    public function StateFeedbackGroupByQuery($state_id,$whereCondition)
    {
        $query = "select state_id, count(grade) AS all_grade,question_code,level,question_desc,
                round(SUM(avg::float)/count(grade)) as avg
                from pq_state_level_feedback
                where state_id=".$state_id."".$whereCondition."
                group by state_id,question_code,level,question_desc";
        return $query;
    }
    public function NationalFeedbackGroupByQuery($whereCondition)
    {
        $query = "select  count(grade) AS all_grade,question_code,level,question_desc,
                round(SUM(avg::float)/count(grade)) as avg
                from pq_national_level_feedback
                ".$whereCondition."
                group by question_code,level,question_desc";
        return $query;
    }

    public function getImgName($value,$color)
    {
      if($value==0)
      {
        return $scImg = 'sg-0.png';
      }
      elseif($value>=1 && $value<=25)
      {
        return $scImg = 'sg-'.$color.'-1.png';
      }
      elseif($value>=26 && $value<=49)
      {
        return $scImg = 'sg-'.$color.'-2.png';
      }
      elseif($value==50)
      {
        return $scImg = 'sg-'.$color.'-3.png';
      }
      elseif($value>=51 && $value<=75) 
      {
        return $scImg = 'sg-'.$color.'-4.png';
      }
      elseif($value>=76 && $value<=99)
      {
        return $scImg = 'sg-'.$color.'-5.png';
      }

      elseif($value==100)
      {
         return $scImg = 'sg-'.$color.'-6.png';
      }
    }
}



//   https://www.tutsmake.com/laravel-8-generate-pdf-with-graph-tutorial-example/