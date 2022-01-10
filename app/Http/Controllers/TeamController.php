<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    
    public function index()
    {
        $members=Team::latest()->get();
        return view('admin.team.index',compact('members'));
    }

    
    public function add()
    {
        return view('admin.team.add');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'mimes:jpeg,jpg,png,svg,JPEG,JPG,PNG,SVG',
            'designation'=>'required',
            'mobile'=>'numeric|nullable'
        ]);
        $name='';
        if($request->image)
        {
        $image=$request->file('image');
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/team'),$name);
        }

        $member=new Team;
        $member->name=$request->name;        
        $member->mobile=$request->mobile;        
        $member->address=$request->address;        
        $member->date=$request->date;        
        $member->image=$name;
        $member->designation=$request->designation;
        $member->description=$request->description;
        $member->save();
        return Redirect()->route('team')->with('success','Member Added Successfully');
    }

    
    public function edit($id)
    {
        $id=decode5t($id);
        $member=Team::where('id',$id)->first();
        return view('admin.team.edit',compact('member'));
    }

    
    public function update(Request $request,$id)
    {
        $id=decode5t($id);
        $request->validate([
            'name'=>'required',
            'image'=>'mimes:jpeg,jpg,png,svg,JPEG,JPG,PNG,SVG',
            'designation'=>'required',
        ]);

        $name="";

        if($request->image)
        {
        $image=$request->file('image');
        $member=Team::where('id',$id)->first();
        unlink(public_path("assets/uploads/team/".$member->image));
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        }

        Team::where('id',$id)->update([
        'name'=>$request->name,
        'description'=>$request->description,
        'designation'=>$request->designation,
        'mobile'=>$request->mobile,
        'date'=>$request->date,
        'image'=>$name,
        'address'=>$request->address         
        ]);
        return Redirect()->route('team')->with('success','Member Updated Successfully');
        
    }

    
    public function destroy($id)
    {
        $id=decode5t($id);
        $team=Team::where('id',$id)->first();
        if($team->image){
        unlink(public_path("assets/uploads/team/".$image));
        }
        Team::where('id',$id)->delete();
        return Redirect()->route('team')->with('success','Member Deleted Successfully');
    }
}
