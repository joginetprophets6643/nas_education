<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        return view('front.report_card.districtcontent');
    }
}
