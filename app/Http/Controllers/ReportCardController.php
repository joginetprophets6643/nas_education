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
    public function details(){
        return view('front.report_card.districtcontent');
    }
}
