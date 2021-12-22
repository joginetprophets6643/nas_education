<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Static_Content;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

class ContentPagesController extends Controller
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
        $currentroute = Route::currentRouteName();
        $contents = Static_Content::where('language',$lang);

            if ($currentroute == "terms") {
                $contents->where('page_title','Terms & Conditions');
            }

            if ($currentroute == "privacy") {
                $contents->where('page_title','Privacy Policy');
            }

            if ($currentroute == "copyright") {
                $contents->where('page_title','Copyright Policy');
            }

            if ($currentroute == "hyperlink") {
                $contents->where('page_title','Hyper Linking Policy');
            }

            if ($currentroute == "statement") {
                $contents->where('page_title','Accessibility Statement');
            }

            if ($currentroute == "rti") {
                $contents->where('page_title','RTI');
            }

        $content = $contents->first();
        

        return view('front.content.index',compact('content'));
    }
}
