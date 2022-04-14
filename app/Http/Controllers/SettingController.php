<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\RTI;
use Illuminate\Support\Facades\Validator;


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
        $validator = Validator::make($request->all(),[
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
        if ($validator->fails()) {
            return redirect()->route('setting')
                    ->withErrors($validator)
                    ->withInput();
        }

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
        get_Date();

        return Redirect()->route('setting')->with('success','Setting Added Successfully');
    }

    // public function edit()
    // {
    //     $content=Setting::first();
    //     return view('admin.setting.edit',compact('content'));
    // }



    public function update(Request $request,$id)
    {
         $validator = Validator::make($request->all(),[
            'website_title'=>'required',
            'contact_us'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'fb'=>'required',
            'twitter'=>'required',
            'insta'=>'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('setting',encode5t($id))
                    ->withErrors($validator)
                    ->withInput();
        }

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
        get_Date();

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

    public function rti(){
        $files=RTI::latest()->get();
        return view('admin.rti.index',compact('files'));
    }

    public function storeRTI(Request $request){
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'files'=>'required',
            'files.*'=>'mimes:pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->route('manage-rti')
                    ->withErrors($validator)
                    ->withInput();
        }

        $files=$request->file('files');
        $file= [];
        
        foreach($files as $multi){
            $filename = $multi->getClientOriginalName();
            $extension=$multi->getClientOriginalExtension();
            $name=hexdec(uniqid()).'.'.$extension;
            
            $multi->move(public_path('assets/uploads/rti'),$name);
            $file[]=$name;
        }
        $files = json_encode($file);
        $rti=new RTI;
        $rti->title=$request->title;        
        $rti->file=$files;        
        $rti->save();
        get_Date();
        return Redirect()->route('manage-rti')->with('success','RTI Added Successfully');
    }

    public function editRTI($id){
        $id=decode5t($id);
        $file=RTI::where('id',$id)->first();
        return view('admin.rti.edit',compact('file'));
    }

    public function updateRTI($id,Request $request){
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'files.*'=>'mimes:pdf'
        ]);

        $id=decode5t($id);

        if ($validator->fails()) {
            return redirect()->route('edit-rti',encode5t($id))
                    ->withErrors($validator)
                    ->withInput();
        }

        $rti=RTI::where('id',$id)->first();
        $file=json_decode($rti->file);
        if($request->file('files'))
        {
            $files=$request->file('files');            
            foreach($files as $multi){
                $filename = $multi->getClientOriginalName();
                $extension=$multi->getClientOriginalExtension();
                $name=hexdec(uniqid()).'.'.$extension;
                
                $multi->move(public_path('assets/uploads/rti'),$name);
                $file[]=$name;
            }
            $files=json_encode($file);
            RTI::where('id',$id)->update([
                'title'=>$request->title,
                'file'=>$files,        
            ]);
        }
        else{
            RTI::where('id',$id)->update([
                'title'=>$request->title,
            ]);
        }
        get_Date();
        return Redirect()->route('manage-rti')->with('success','RTI Updated Successfully');
    }

    public function deleteFile($id,$file){
        $id=decode5t($id);
        $file=decode5t($file);

        $rti=RTI::where('id',$id)->first();
        $files=json_decode($rti->file);

        $files=array_diff($files,[$file]);
        unlink(public_path("assets/uploads/rti/".$file));
        RTI::where('id',$id)->update([
            'file'=>$files
        ]);

        $id=encode5t($id);
        return Redirect()->route('edit-rti',$id)->with('success','File Deleted Successfully');
    }
    
    public function destroy($id){
        $id=decode5t($id);

        $rti=RTI::where('id',$id)->first();
        $files=json_decode($rti->file);
        foreach($files as $file){
            unlink(public_path("assets/uploads/rti/".$file));
        }
        RTI::where('id',$id)->delete();
        return Redirect()->route('manage-rti')->with('success','RTI Deleted Successfully');
    }

}
