<?php

namespace App\Http\Controllers;

use App\Models\Static_Content;
use App\Models\State_Master;
use App\Models\Event;
use App\Models\Banner;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Vedios;
use App\Models\Video_Events;
use App\Models\Team;
use App\Models\Program;
use App\Models\ClientLogo;
use DB;

class FrontController extends Controller
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
        $client_logo = ClientLogo::all();
        $banners=Banner::all();

        $events=Event::join('event_images','events.id','=','event_images.event_id')->get();
        
        $count=[];
        $image=[];
        foreach($events as $event){
            $count[$event->id]=count(json_decode($event->images));
            $image[$event->id]=json_decode($event->images)[0];
        }
        
        $videos=Video_Events::join('vedios','video_events.id','=','vedios.event_id')->where('status',1)->get();
        $states=State_Master::all();

        
        return view('front.index',compact('content','events','image','videos','states','client_logo','banners'));
    }

    public function team(){
        $members=Team::all();
        $members=$members->groupBy('description');
        return view('front.team.index',compact('members'));
    }

    public function data(){
        return view('front.data-share.index');
    }

    public function program(){
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
        
        $programs=Program::where('language',$lang,)->orderBy('id')->get();
        $members=Team::whereIn('name',['Hrushikesh Senapaty','Euphrates Efosi Wose'])->get();
        return view('front.program.index',compact('programs','members'));
    }

    public function gallery(){
        $events=Event::join('event_images','events.id','=','event_images.event_id')->take(4)->get();
        
        $count=[];
        $image=[];
        foreach($events as $event){
            $count[$event->id]=count(json_decode($event->images));
            $image[$event->id]=json_decode($event->images)[0];
        }
        
        $videos=Video_Events::join('vedios','video_events.id','=','vedios.event_id')->where('status',1)->distinct('video_events.id')->take(4)->get();
        
        return view('front.gallery.index',compact('videos','events','image'));
    }
}
