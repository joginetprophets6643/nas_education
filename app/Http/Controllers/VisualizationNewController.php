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
                $final_subject_data[$subject_fetch->subject_code] = $subject_fetch->avg;
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
                $final_subject_data[$subject_fetch->subject_code] = $subject_fetch->state_avg;
        }
        return $final_subject_data;

    }

    public function getLOforNational($grade,$subject){
        $lodata = NationalGradeLevelLearningOutCome::select('subject_code','avg')
                  ->where('grade',$grade)
                  ->where('language',$subject)->get();

        $final_subject_data = [];
        foreach ($lodata as $subject_fetch) {
                $final_subject_data[$subject_fetch->subject_code] = $subject_fetch->avg;
        }
        return $final_subject_data;

    }
}
