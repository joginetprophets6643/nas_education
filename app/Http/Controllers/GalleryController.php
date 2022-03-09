<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Event;
use App\Models\Vedios;
use App\Models\Video_Events;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index($id){
        $id=decode5t($id);
        
        $events=Event::join('event_images','events.id','=','event_images.event_id')->where('state',$id)->get();
        $count=[];
        $image=[];
        foreach($events as $event){
            $count[$event->id]=count(json_decode($event->images));
            $image[$event->id]=json_decode($event->images)[0];
        }
        return view('front.gallery.images.index',compact('events','count','image'));
    }
    public function video($id){
        $id=decode5t($id);

        $videos=Video_Events::join('vedios','video_events.id','=','vedios.event_id')->where('status',1)->where('state',$id)->distinct('vedios.event_id')->select('vedios.*','video_events.name')->get();
        foreach($videos as $key){
            $total_video = DB::table('vedios')->where('event_id',$key->event_id)->whereNotNull('vedio')->where('status',1)->count();
            $total_url = DB::table('vedios')->where('event_id',$key->event_id)->whereNotNull('url')->where('status',1)->count();
            $key->total_videos = ($total_video + $total_url);
        }
        return view('front.gallery.vedios.index',compact('videos'));
    }
    public function view($id){
        $id=decode5t($id);
        $data=Event::join('event_images','events.id','=','event_images.event_id')->where('events.id',$id)->first();
        $images=json_decode($data->images);
        return view('front.gallery.images.view',compact('images','data'));
    }

    public function viewvideos($id){
        $id=decode5t($id);
        $videos=Video_Events::join('vedios','video_events.id','=','vedios.event_id')->where('video_events.id',$id)->where('status',1)->get();
        
        return view('front.gallery.vedios.view',compact('videos'));
    }
}
