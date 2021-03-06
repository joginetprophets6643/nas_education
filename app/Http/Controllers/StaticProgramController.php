<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\Validator;


class StaticProgramController extends Controller
{
    public function index(){
        $programs=Program::latest()->get();
        return view('admin.program.index',compact('programs'));
    }

    public function add()
    {
        return view('admin.program.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'language'=>'required|not_in:0',
            'title'=>'required',
            'content'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,svg,JPEG,JPG,PNG,SVG',
        ]);

        if ($validator->fails()) {
            return redirect()->route('add-program')
                    ->withErrors($validator)
                    ->withInput();
        }

        $image=$request->file('image');
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/program'),$name);

        $program=new Program;
        $program->language=$request->language;
        $program->title=$request->title;
        $program->content=$request->content;
        $program->image=$name;
        
        $program->save();
        get_Date();
        return Redirect()->route('program')->with('success','Program Added Successfully');
    }

    public function edit($id)
    {
        $id=decode5t($id);
        $program=Program::where('id',$id)->first();
        return view('admin.program.edit',compact('program'));
    }

    public function update(Request $request,$id)
    {
        $id=decode5t($id);
        $validator = Validator::make($request->all(),[
            'language'=>'required|not_in:0',
            'title'=>'required',
            'content'=>'required',
            'image'=>'mimes:jpeg,jpg,png,svg,JPEG,JPG,PNG,SVG',
        ]);

        if ($validator->fails()) {
            return redirect()->route('edit-program',encode5t($id))
                    ->withErrors($validator)
                    ->withInput();
        }
        
        if($request->image)
        {
            $image=$request->file('image');
        
        $program=Program::where('id',$id)->first();
        // unlink(public_path("assets/uploads/program/".$program->image));
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/program'),$name);
        Program::where('id',$id)->update([
            'language'=>$request->language,
            'title'=>$request->title,
            'content'=>$request->content,
            'image'=>$name,
        ]);
        }
        else{
            Program::where('id',$id)->update([
                'language'=>$request->language,
                'title'=>$request->title,
                'content'=>$request->content,
            ]);
        }
        
        get_Date();
        return Redirect()->route('program')->with('success','Program Updated Successfully');
    }
    public function destroy($id)
    {
        $id=decode5t($id);
        Program::where('id',$id)->delete();
        return Redirect()->route('program')->with('success','Program Deleted Successfully');
    }
}
