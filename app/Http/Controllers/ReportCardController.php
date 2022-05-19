<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\State_Master;
use App\Models\District_Master;
use App\Models\Static_Content;

class ReportCardController extends Controller
{
    public function index(){
        $lang="2";
        if (Session::has('locale')) {
            $lang = Session::get('locale');
            if($lang=="hi")
            {
                $lang='1';
            }
            else{
                $lang='2';
            }
        }

        $content=Static_Content::where('language',$lang)->where('page_title','Report Card')->first();
        
        // $allParticipationData = json_decode(file_get_contents('http://localhost:8055/items/all_grade_participation_tbl'),true);

        // if(count($allParticipationData)>0)
        // {
        //     foreach($allParticipationData as $getData)
        //     {
        //         print_r($getData);
        //         exit;
        //     }
        // }
        // dd($data);
        // return view('front.report_card.districtcontent');
        $states=State_Master::orderBy('state_name')->get();
        $districts=District_Master::orderBy('district_name')->get();
        return view('front.report_card.index',compact('states','districts','content'));
    }

    public function landing(){
        return view('front.report_card.landing');
    }

    public function details(){
        return view('front.report_card.districtcontent')->with('container_type','fluid');
    }

    public function webView(Request $request){
        $classes = ['3','5','8','10','all'];
        if($request->has('class')){
            if(!in_array($request->input("class"),$classes)){
                return response(['status'=>404,'message'=>'Page not found']);
            }else{
                return view('front.report_card.glimpses-web-view',['class'=> $request->input("class")]);
            }
        }else{
            return response(['status'=>404,'message'=>'Page not found']);
        }
    }

    public function achievementwebView(Request $request){
        $classes = ['3','5','8','10','all'];
        $states = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','27','28','29','30','31','32','33','34','35','36','37','38'];
        if($request->has('class')){
            if(!in_array($request->input("class"),$classes) || !in_array($request->input("state_id"),$states)){
                return response(['status'=>404,'message'=>'Page not found']);
            }else{
                return view('front.report_card.achievements-web-view',['class'=> $request->input("class"),'state'=> $request->input("state_id")]);
            }
        }else{
            return response(['status'=>404,'message'=>'Page not found']);
        }
    }
}
