<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visualization_Participation_Tbl;
use App\Models\Visualization_Performance_Tbl;
use App\Models\Visualization_Performance_Graph_Tbl;
use App\Models\PerformanceMaster;
use App\Models\StateGradeLevelPerformance;
use App\Models\NationalGradeLevelPerformance;
use App\Models\DistrictGradeLevelLearningOutCome;
use App\Models\StateGradeLevelLearningOutCome;
use App\Models\NationalGradeLevelLearningOutCome;
use DB;

class VisualizationNewController extends Controller
{
    public function visualization_graph_performance()
    {   
        DB::table('visualization_performance_graph_tbl')->truncate();
        ini_set('max_execution_time', '5000');
        $district_performance = PerformanceMaster::orderBy('id','ASC')->get();
        $state_performance = StateGradeLevelPerformance::orderBy('id','ASC')->get();
        $national_performance = NationalGradeLevelPerformance::orderBy('id','ASC')->get();

        foreach($district_performance as $data){
            $data->data = json_decode($data->data);
            foreach($data->data as $key=>$value){
                // foreach($value as $k=>$j){
                    
                //     foreach($j as $i=>$f){
                        
                //         foreach($i as $l=>$m){
                //             dd($l);
                //         }
                //     }
                    
                // }
                
                foreach($value->gender as $k=>$j){
                    $j->boys = round($j->boys);
                    $j->girls = round($j->girls);
                    $j->trans_gender = round($j->trans_gender);
                    unset($j->boys_basic_and_below_basic);
                    unset($j->boys_proficient_and_advance);
                    unset($j->girls_basic_and_below_basic);
                    unset($j->girls_proficient_and_advance);
                }
                foreach($value->location as $k=>$j){
                    $j->urban = round($j->urban);
                    $j->rural = round($j->rural);
                    unset($j->rural_basic_and_below_basic);
                    unset($j->urban_basic_and_below_basic);
                    unset($j->rural_proficient_and_advance);
                    unset($j->urban_proficient_and_advance);
                }

                foreach($value->management as $k=>$j){
                    $j->govt = round($j->govt);
                    $j->govt_aided = round($j->govt_aided);
                    $j->private = round($j->private);
                    $j->central_govt = round($j->central_govt);
                    unset($j->govt_basic_and_below_basic);
                    unset($j->govt_aided_basic_and_below_basic);
                    unset($j->govt_proficient_and_advance);
                    unset($j->govt_aided_proficient_and_advance);
                    unset($j->private_basic_and_below_basic);
                    unset($j->central_govt_basic_and_below_basic);
                    unset($j->private_proficient_and_advance);
                    unset($j->central_govt_proficient_and_advance);
                }
                
                foreach($value->socialgroup as $k=>$j){
                    $j->sc = round($j->sc);
                    $j->obc = round($j->obc);
                    $j->st = round($j->st);
                    $j->general = round($j->general);
                    unset($j->sc_basic_and_below_basic);
                    unset($j->obc_basic_and_below_basic);
                    unset($j->sc_proficient_and_advance);
                    unset($j->obc_proficient_and_advance);
                    unset($j->st_basic_and_below_basic);
                    unset($j->general_basic_and_below_basic);
                    unset($j->st_proficient_and_advance);
                    unset($j->general_proficient_and_advance);
                }

                foreach($value->performance_level as $k=>$j){
                    $j->below_basic = round($j->below_basic);
                    $j->basic = round($j->basic);
                    $j->proficient = round($j->proficient);
                    $j->advanced = round($j->advanced);
                }
                
                $value->lo = $this->getLOforDistrict($data->district_id,$data->grade,$key);
                
            }
          
            $insert_district_performance = Visualization_Performance_Graph_Tbl::insert([
                "type" =>"district",
                "district_id"  =>$data->district_id,
                "state_id"  =>0,
                "grade"  =>$data->grade,
                "data"  =>json_encode($data->data) ]);
        }

        foreach($state_performance as $data){

            $data->data = json_decode($data->data);
            
            foreach($data->data as $key=>$value){

                foreach($value->gender as $k=>$j){
                    $j->boys = round($j->boys);
                    $j->girls = round($j->girls);
                    unset($j->trans_gender);
                    unset($j->boys_basic_and_below_basic);
                    unset($j->boys_proficient_and_advance);
                    unset($j->girls_basic_and_below_basic);
                    unset($j->girls_proficient_and_advance);
                }
                foreach($value->location as $k=>$j){
                    $j->urban = round($j->urban);
                    $j->rural = round($j->rural);
                    unset($j->rural_basic_and_below_basic);
                    unset($j->urban_basic_and_below_basic);
                    unset($j->rural_proficient_and_advance);
                    unset($j->urban_proficient_and_advance);
                }

                foreach($value->management as $k=>$j){
                    $j->govt = round($j->govt);
                    $j->govt_aided = round($j->govt_aided);
                    $j->private = round($j->private);
                    $j->central_govt = round($j->central_govt);
                    unset($j->govt_basic_and_below_basic);
                    unset($j->govt_aided_basic_and_below_basic);
                    unset($j->govt_proficient_and_advance);
                    unset($j->govt_aided_proficient_and_advance);
                    unset($j->private_basic_and_below_basic);
                    unset($j->central_govt_basic_and_below_basic);
                    unset($j->private_proficient_and_advance);
                    unset($j->central_govt_proficient_and_advance);
                }
                
                foreach($value->socialgroup as $k=>$j){
                    $j->sc = round($j->sc);
                    $j->obc = round($j->obc);
                    $j->st = round($j->st);
                    $j->general = round($j->general);
                    unset($j->sc_basic_and_below_basic);
                    unset($j->obc_basic_and_below_basic);
                    unset($j->sc_proficient_and_advance);
                    unset($j->obc_proficient_and_advance);
                    unset($j->st_basic_and_below_basic);
                    unset($j->general_basic_and_below_basic);
                    unset($j->st_proficient_and_advance);
                    unset($j->general_proficient_and_advance);
                }

                foreach($value->performance_level as $k=>$j){
                    $j->below_basic = round($j->below_basic);
                    $j->basic = round($j->basic);
                    $j->proficient = round($j->proficient);
                    $j->advanced = round($j->advanced);
                }

                $value->lo = $this->getLOforState($data->state_id,$data->grade,$key);
                
            }

            $insert_state_performance = Visualization_Performance_Graph_Tbl::insert([
                "type" =>"state",
                "district_id"  =>0,
                "state_id"  =>$data->state_id,
                "grade"  =>$data->grade,
                "data"  =>json_encode($data->data) ]);
        }

        foreach($national_performance as $data){

            $data->data = json_decode($data->data);
            
            foreach($data->data as $key=>$value){
                $value->lo = $this->getLOforNational($data->grade,$key);
                
            }
            //dd(json_encode($data));

            $insert_national_performance = Visualization_Performance_Graph_Tbl::insert([
                "type" =>"national",
                "district_id"  =>0,
                "state_id"  =>0,
                "grade"  =>$data->grade,
                "data"  =>json_encode($data->data) ]);
        }
        
        return "Visualization Graph Performance data submit successfully.";
    }

    public function getLOforDistrict($district_id,$grade,$subject){
        $lodata = DistrictGradeLevelLearningOutCome::where('district_id',$district_id)
                  ->select('subject_code','avg')
                  ->where('grade',$grade)
                  ->where('language',$subject)->get();

        $final_subject_data = [];
        foreach ($lodata as $subject_fetch) {
                $final_subject_data[$subject_fetch->subject_code] = round($subject_fetch->avg);
        }
        return $final_subject_data;

    }

    public function getLOforState($state_id,$grade,$subject){
        $lodata = StateGradeLevelLearningOutCome::where('state_id',$state_id)
                  ->select('subject_code','state_avg')
                  ->where('grade',$grade)
                  ->where('language',$subject)->get();

        $final_subject_data = [];
        foreach ($lodata as $subject_fetch) {
                $final_subject_data[$subject_fetch->subject_code] = round($subject_fetch->state_avg);
        }
        return $final_subject_data;

    }

    public function getLOforNational($grade,$subject){
        $lodata = NationalGradeLevelLearningOutCome::select('subject_code','avg')
                  ->where('grade',$grade)
                  ->where('language',$subject)->get();

        $final_subject_data = [];
        foreach ($lodata as $subject_fetch) {
                $final_subject_data[$subject_fetch->subject_code] = round($subject_fetch->avg);
        }
        return $final_subject_data;

    }
}
