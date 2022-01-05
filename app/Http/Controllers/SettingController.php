<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $content=Setting::first();
        if($content){
        return view('admin.setting.edit',compact('content'));
        }
        return view('admin.setting.add');
    }

    // public function add()
    // {
    //     return view('admin.setting.add');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'website_title'=>'required',
            'contact_us'=>'required',
            'logo_1'=>'required',
            'logo_2'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'fb'=>'required',
            'twitter'=>'required',
            'insta'=>'required',
        ]);

        $logo1=$request->file('logo_1');
        $logo2=$request->file('logo_2');

        $name1=hexdec(uniqid()).'.'.$logo1->getClientOriginalExtension();
        $name2=hexdec(uniqid()).'.'.$logo2->getClientOriginalExtension();
        $logo1->move(public_path('assets/uploads/logo'),$name1);
        $logo2->move(public_path('assets/uploads/logo'),$name2);

        $content=new Setting;
        $content->website_title=$request->website_title;
        $content->contact_us=$request->contact_us;
        $content->meta_title=$request->meta_title;
        $content->meta_description=$request->meta_description;
        $content->website_title_hindi=$request->website_title_hindi;
        $content->contact_us_hindi=$request->contact_us_hindi;
        $content->meta_title_hindi=$request->meta_title_hindi;
        $content->meta_description_hindi=$request->meta_description_hindi;
        $content->logo_1=$name1;
        $content->logo_2=$name2;
        $content->fb=$request->fb;
        $content->twitter=$request->twitter;
        $content->insta=$request->insta;
        $content->save();

        return Redirect()->route('setting')->with('success','Setting Added Successfully');
    }

    // public function edit()
    // {
    //     $content=Setting::first();
    //     return view('admin.setting.edit',compact('content'));
    // }



    public function update(Request $request,$id)
    {
         $request->validate([
            'website_title'=>'required',
            'contact_us'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'fb'=>'required',
            'twitter'=>'required',
            'insta'=>'required',
        ]);
        Setting::where('id',$id)->update([
        'website_title'=>$request->website_title,
        'contact_us'=>$request->contact_us,
        'meta_title'=>$request->meta_title,
        'meta_description'=>$request->meta_description,
        'website_title_hindi'=>$request->website_title_hindi,
        'contact_us_hindi'=>$request->contact_us_hindi,
        'meta_title_hindi'=>$request->meta_title_hindi,
        'meta_description_hindi'=>$request->meta_description_hindi,
        'fb'=>$request->fb,
        'twitter'=>$request->twitter,
        'insta'=>$request->insta,
        ]);

        if($request->logo_1){
        $image=$request->file('logo_1');
        
        $content=Setting::where('id',$id)->first();
        unlink(public_path("assets/uploads/logo/".$content->logo_1));
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/logo'),$name);
        Setting::where('id',$id)->update([
            'logo_1'=>$name,      
        ]);

        }
        if($request->logo_2){
           $image=$request->file('logo_2');
        
        $content=Setting::where('id',$id)->first();
        unlink(public_path("assets/uploads/logo/".$content->logo_2));
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/logo'),$name);
        Setting::where('id',$id)->update([
            'logo_2'=>$name,      
        ]);        
        }

        return Redirect()->route('setting')->with('success','Setting Details Updated Successfully');

        
    }

    // public function destroy($id)
    // {   
        
    //     $content=Setting::where('id',$id)->first();
        
    //     unlink(public_path("assets/uploads/logo/".$content->logo_1));
    //     unlink(public_path("assets/uploads/logo/".$content->logo_2));
    //     Setting::where('id',$id)->delete();
    //     return Redirect()->route('setting')->with('success','Setting Deleted Successfully');
    // }
}
