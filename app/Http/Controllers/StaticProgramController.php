<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class StaticProgramController extends Controller
{
    public function index(){
        $programs=Program::all();
        return view('admin.program.index',compact('programs'));
    }

    public function add()
    {
        return view('admin.program.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'language'=>'required|not_in:0',
            'title'=>'required',
            'content'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,PNG,JPEG,JPG',
        ]);

        $image=$request->file('image');
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/program'),$name);

        $program=new Program;
        $program->language=$request->language;
        $program->title=$request->title;
        $program->content=$request->content;
        $program->image=$name;
        
        $program->save();

        return Redirect()->route('program')->with('success','Program Added Successfully');
    }

    public function edit($id)
    {
        $program=Program::where('id',$id)->first();
        return view('admin.program.edit',compact('program'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'language'=>'required|not_in:0',
            'title'=>'required',
            'content'=>'required',
            'image'=>'mimes:jpeg,jpg,png,PNG,JPEG,JPG',
        ]);
        
        if($request->image)
        {
            $image=$request->file('image');
        
        $program=Program::where('id',$id)->first();
        unlink(public_path("assets/uploads/program/".$program->image));
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/team'),$name);
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
        

        return Redirect()->route('program')->with('success','Program Updated Successfully');
    }
}