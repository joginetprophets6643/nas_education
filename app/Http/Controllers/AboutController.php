<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Static_Content;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
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
        
        $content=Static_Content::where('language',$lang,)->where('page_title','About NAS')->first();

        return view('front.about.index',compact('content'));
    }
}
