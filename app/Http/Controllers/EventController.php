<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Vedios;
use App\Models\Event_Images;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::latest()->get();
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required|unique:events',
        ]);
        // Event::insert([
        //     'name'=>$request->name,
        //     'created_at'=>Carbon::now()
        // ]);

        $event= new Event;
        $event->name=$request->name;
        $event->save();
        return Redirect()->back()->with('success','Event Added Successfully');
    }

    public function edit($id)
    {
        $event=DB::table('events')->where('id',$id)->first();
        return view('admin.events.edit',compact('event'));
    }

    public function update(Request $request,$id)
    {
        $event=Event::find($id)->update([
            'name'=>$request->name,
        ]);
        return Redirect()->route('events')->with('success','Event Updated Successfully');
    }

    public function destroy()
    {
        //
    }

    public function getImages($id){
        $data=DB::table('event_images')->where('event_id',$id)->first();
        if($data){
        $images=json_decode($data->images);
        return view('admin.events.images.index',compact('images','id'));
        }
        $images=0;
        return view('admin.events.images.index',compact('images','id'));
    }

    // public function chooseImages($id){
    //     return view('admin.events.images.add',compact('id'));
    // }

    public function addImages(Request $request,$id){

        $request->validate([
            'images'=>'required',
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
        $data=DB::table('event_images')->where('event_id',$id)->first();
        $images=json_decode($data->images);
        // dd($images);
        $key=array_search($image,$images);
        
        unset($images[$key]);
        if(!$images){
            DB::table('event_images')->where('event_id',$id)->delete();
            unlink(public_path("assets/uploads/".$image));
            return Redirect()->route('getImages',$id)->with('success','Image Deleted Successfully');
        }
        // dd(array_values($images));
        $images=json_encode(array_values($images),true);
        DB::table('event_images')->where('event_id',$id)->update([
                'images'=>$images
        ]);
        unlink("assets/uploads/".$image);
        return Redirect()->route('getImages',$id)->with('success','Image Deleted Successfully');

    }

    public function vedios(){
        $vedios=DB::table('vedios')->get();
        if($vedios->isEmpty()){
            $vedios=0;
        }
        
        return view('admin.events.vedios.index',compact('vedios'));
    }


    public function addVedio(Request $request){
        $request->validate([
            'vedio'=>'required',
            'title'=>'required',
        ]);
        $vedio=$request->file('vedio');
        
        if($request->status){
            $request->status=1;
        }
        else{
            $request->status=0;
        }
        

            $name=hexdec(uniqid()).'.'.$vedio->getClientOriginalExtension();
            $vedio->move(public_path('assets/uploads/vedios'),$name);
            $res=new Vedios;
            $res->title=$request->title;
            $res->vedio=$name;
            $res->status=$request->status;
            $res->save();
        return Redirect()->route('vedios')->with('success','Vedio Uploaded Successfully');
    }


    public function deleteVedio($id){
       
        $vedio=Vedios::find($id)->first();
        Vedios::find($id)->delete();
        unlink(public_path("assets/uploads/vedios/".$vedio->vedio));
        return Redirect()->route('vedios')->with('success','Vedio Deleted Successfully');
    }

}
