<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=Team::all();
        return view('admin.team.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('admin.team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'mimes:jpeg,jpg,png,PNG,JPEG,JPG',
            'designation'=>'required',
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
        $member=Team::where('id',$id)->first();
        return view('admin.team.edit',compact('member'));
    }

    
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'mimes:jpeg,jpg,png,PNG,JPEG,JPG',
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
        $team=Team::where('id',$id)->first();
        if($team->image){
        unlink(public_path("assets/uploads/team/".$image));
        }
        Team::where('id',$id)->delete();
        return Redirect()->route('team')->with('success','Member Deleted Successfully');
    }
}
