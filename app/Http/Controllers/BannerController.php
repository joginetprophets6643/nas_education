<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function index(){
        $banners=Banner::latest()->get();
        return view('admin.banner.index',compact('banners'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,svg,JPEG,JPG,PNG,SVG',
        ]);

        if ($validator->fails()) {
            return redirect()->route('manage-banner')
                    ->withErrors($validator)
                    ->withInput();
        }

        $banner=new Banner;

        $image=$request->file('image');

        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/banner'),$name);

        $banner->description=$request->description;
        $banner->image=$name;
        $banner->save();
        return Redirect()->route('manage-banner')->with("Success","Banner Added Successfully");
    }


    public function edit($id)
    {
        $id=decode5t($id);
        $banner=Banner::where('id',$id)->first();
        return view('admin.banner.edit',compact('banner'));
    }
    

    public function update(Request $request,$id)
    {
        $id=decode5t($id);
        $validator = Validator::make($request->all(),[
            'image'=>'mimes:jpeg,jpg,png,svg,JPEG,JPG,PNG,SVG',
            'description'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('edit-banner',encode5t($id))
                    ->withErrors($validator)
                    ->withInput();
        }

        if($request->image){
        $image=$request->file('image');
        
        $banner=Banner::where('id',$id)->first();
        unlink(public_path("assets/uploads/banner/".$banner->image));
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/banner'),$name);
        Banner::where('id',$id)->update([
            'image'=>$name,
            'description'=>$request->description,
        ]);
        return Redirect()->route('manage-banner')->with('success','Banner Updated Successfully');
        }
        else{
            Banner::where('id',$id)->update([
            'description'=>$request->description,
        ]);
        return Redirect()->route('manage-banner')->with('success','Banner Updated Successfully');
        }
        
    }


    public function destroy($image,$id){
        $id=decode5t($id);
        Banner::where('id',$id)->delete();
        // unlink(public_path("assets/uploads/banner/".$image));
        return Redirect()->route('manage-banner')->with('success','Banner Deleted Successfully');
    }
}
