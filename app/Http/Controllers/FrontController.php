<?php

namespace App\Http\Controllers;

use App\Models\Static_Content;
use App\Models\State_Master;
use App\Models\Event;
use App\Models\Banner;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Vedios;
use App\Models\ClientLogo;


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
        $vedios=Vedios::where('status','1')->get();
        $states=State_Master::all();

        
        return view('front.index',compact('content','events','image','vedios','states','client_logo','banners'));
    }
}
