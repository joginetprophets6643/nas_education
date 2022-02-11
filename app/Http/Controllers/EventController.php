<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Vedios;
use App\Models\Video_Events;
use App\Models\Event_Images;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;

class EventController extends Controller
{
    //Events
    public function index()
    {
        $events=Event::latest()->get();
        return view('admin.events.index',compact('events'));
    }

    
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required|unique:events',
        ]);

        $event= new Event;
        $event->name=$request->name;
        $event->save();
        return Redirect()->back()->with('success','Event Added Successfully');
    }

    public function edit($id)
    {
        $id=decode5t($id);
        $event=DB::table('events')->where('id',$id)->first();
        return view('admin.events.edit',compact('event'));
    }

    public function update(Request $request,$id)
    {
        $id=decode5t($id);
        $event=Event::find($id)->update([
            'name'=>$request->name,
        ]);
        return Redirect()->route('events')->with('success','Event Updated Successfully');
    }

    public function destroy()
    {
        //
    }
    //end Events

    //Video Events
    public function video_event_index()
    {
        $events=Video_Events::latest()->get();
        return view('admin.events.videos.index',compact('events'));
    }

    
    public function video_event_store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required|unique:video_events',
        ]);

        $event= new Video_Events;
        $event->name=$request->name;
        $event->save();
        return Redirect()->back()->with('success','Event Added Successfully');
    }

    public function video_event_edit($id)
    {
        $id=decode5t($id);
        $event=DB::table('video_events')->where('id',$id)->first();
        return view('admin.events.videos.edit',compact('event'));
    }

    public function video_event_update(Request $request,$id)
    {
        $id=decode5t($id);
        $event=Video_Events::find($id)->update([
            'name'=>$request->name,
        ]);
        return Redirect()->route('video-events')->with('success','Event Updated Successfully');
    }

    public function video_event_destroy()
    {
        //
    }

    //end Video Events
    
    //images
    public function getImages($id){
        $id=decode5t($id);
        $name=DB::table('events')->where('id',$id)->first();
        $data=DB::table('event_images')->where('event_id',$id)->first();
        if($data){
        $images=json_decode($data->images);
        return view('admin.events.images.index',compact('images','id','name'));
        }
        $images=0;
        return view('admin.events.images.index',compact('images','id'));
    }

    public function addImages(Request $request,$id){
        $id=decode5t($id);
        $request->validate([
            'images'=>'required',
            'images.*'=>'mimes:jpeg,jpg,png,JPEG,JPG,PNG',
        ]);
        $images=$request->file('images');
        $img= [];
        $n_img= [];
        $allowedfileExtension=['jpeg','jpg','png','JPEG','PNG','JPG'];
        
        foreach($images as $multi){
            $filename = $multi->getClientOriginalName();
            $extension=$multi->getClientOriginalExtension();
            $name=hexdec(uniqid()).'.'.$extension;
            $check=in_array($extension,$allowedfileExtension);
            if($check){
            
            $multi->move(public_path('assets/uploads'),$name);
            $img[]=$name;
            }
            else{
                $n_img[]=$filename;
            }
        }
        $images = json_encode($img);
        $data=DB::table('event_images')->where('event_id',$id)->get();
        if(!$data->isEmpty()){
            $old_img=json_decode($data[0]->images);
            $result=array_merge($img,$old_img);
            $images = json_encode($result);
            DB::table('event_images')->where('event_id',$id)->update([
                'images'=>$images
            ]);
        }
        else{
            DB::table('event_images')->insert([
                'event_id'=>$id,
                'images'=>$images
            ]);
        }

        $id=encode5t($id);
        if($n_img){
            $strimg='';
            foreach($n_img as $img){
                $strimg=$img.' '.$strimg;
            }
            return Redirect()->route('getImages',$id)->with('success', $strimg.' are Invalid Image');
        }
        else{
            return Redirect()->route('getImages',$id)->with('success','Images Uploaded Successfully');
        }
        

    }

    public function deleteImage($image,$id){
        $id=decode5t($id);
        $image=decode5t($image);
        $data=DB::table('event_images')->where('event_id',$id)->first();
        $images=json_decode($data->images);
        
        $key=array_search($image,$images);
        unset($images[$key]);

        if(!$images){
            DB::table('event_images')->where('event_id',$id)->delete();
            unlink(public_path("assets/uploads/".$image));
            $id=encode5t($id);
            return Redirect()->route('getImages',$id)->with('success','Image Deleted Successfully');
        }
        // dd(array_values($images));
        $images=json_encode(array_values($images),true);
        DB::table('event_images')->where('event_id',$id)->update([
                'images'=>$images
        ]);
        unlink("assets/uploads/".$image);
        $id=encode5t($id);
        return Redirect()->route('getImages',$id)->with('success','Image Deleted Successfully');

    }
    //end images

    //videos
    public function getVideos($id){
        $id=decode5t($id);
        $name=DB::table('video_events')->where('id',$id)->first();
        $videos=DB::table('vedios')->where('event_id',$id)->get();
        
        return view('admin.events.videos.view',compact('videos','id','name'));
    }

    public function addVideos(Request $request,$id){

        $id=decode5t($id);
        $request->validate([
            'vedio'=>'required_without_all:url|mimes:mp4,wep',
            'title'=>'required',
            'url'=>'required_without_all:vedio',
            'thumbnail'=>'required_with:vedio|mimes:jpeg,jpg,png,JPEG,JPG,PNG',
        ]);
        $vedio=$request->file('vedio');
        if($request->status){
            $request->status=1;
        }
        else{
            $request->status=0;
        }
        $name=NULL;
        $thumbnail=NULL;
        if($request->vedio){
            $name=hexdec(uniqid()).'.'.$vedio->getClientOriginalExtension();
            $vedio->move(public_path('assets/uploads/vedios'),$name);
            $thumbnail=hexdec(uniqid()).'.'.$request->thumbnail->getClientOriginalExtension();
            $request->thumbnail->move(public_path('assets/uploads/thumbnails'),$thumbnail);
        }

            
            $res=new Vedios;
            $res->event_id=$id;
            $res->title=$request->title;
            $res->url=$request->url ? $request->url: NULL;
            $res->thumbnail=$thumbnail;
            $res->vedio=$name;
            $res->status=$request->status;
            $res->save();

        $id=encode5t($id);
        
        return Redirect()->route('getVideos',$id)->with('success','Video Uploaded Successfully');
    }

    public function deleteVideos(Request $request,$id){
        $id=decode5t($id);      
        $vedio=Vedios::where('id',$id)->first(); 
        //dd($request);
        if($vedio->vedio && $vedio->url){
            if($request->type=="video"){   
                if($vedio->vedio){
                    unlink(public_path("assets/uploads/vedios/".$vedio->vedio));
                    unlink(public_path("assets/uploads/thumbnails/".$vedio->thumbnail));
                    }
                Vedios::where('id',$id)->update(['vedio'=>NULL]);
            }

            if($request->type=="url"){   
                Vedios::where('id',$id)->update(['url'=>NULL]);
            }
        }

        else{
            Vedios::find($id)->delete();
            if($vedio->vedio){
                unlink(public_path("assets/uploads/vedios/".$vedio->vedio));
                unlink(public_path("assets/uploads/thumbnails/".$vedio->thumbnail));
                }
        }
        
        $id=encode5t($vedio->event_id);
        return Redirect()->route('getVideos',$id)->with('success','Video Deleted Successfully');

    }
    //end videos

}
