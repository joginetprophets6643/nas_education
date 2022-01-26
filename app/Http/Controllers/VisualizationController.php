<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State_Master;
use App\Models\District_Master;
use App\Models\Static_Content;
use Illuminate\Support\Facades\Session;


class VisualizationController extends Controller
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

        $content=Static_Content::where('language',$lang)->where('page_title','Visualization')->first();
        
        $states=State_Master::orderBy('state_name')->get();
        $districts=District_Master::orderBy('district_name')->get();
        return view('front.visualization.index',compact('states','districts','content'));
    }

    public function details(){
        return view('front.visualization.v_image');
    }

    public function mobile(){
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

        $content=Static_Content::where('language',$lang)->where('page_title','Mobile App')->first();
        return view('front.mobile-app.index',compact('content'));
    }
}
