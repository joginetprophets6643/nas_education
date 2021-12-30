<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Event;
use App\Models\Vedios;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $events=Event::join('event_images','events.id','=','event_images.event_id')->get();
        $count=[];
        $image=[];
        foreach($events as $event){
            $count[$event->id]=count(json_decode($event->images));
            $image[$event->id]=json_decode($event->images)[0];
        }
        return view('front.gallery.images.index',compact('events','count','image'));
    }
    public function vedio(){
        $vedios=Vedios::where('status','1')->get();
        return view('front.gallery.vedios.index',compact('vedios'));
    }
    public function view($id){
        $id=decode5t($id);
        $data=Event::join('event_images','events.id','=','event_images.event_id')->where('events.id',$id)->first();
        $images=json_decode($data->images);
        return view('front.gallery.images.view',compact('images','data'));
    }
}
