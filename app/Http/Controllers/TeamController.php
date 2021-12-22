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
    public function create()
    {
        //
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
            'image'=>'required|mimes:jpeg,jpg,png',
            'description'=>'required',
            'designation'=>'required',
        ]);

        $member=new Team;
        $member->name=$request->name;

        $image=$request->file('image');

        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/team'),$name);

        $member->image=$name;
        $member->designation=$request->designation;
        $member->description=$request->description;
        $member->save();
        return Redirect()->back()->with('success','Member Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=Team::where('id',$id)->first();
        return view('admin.team.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'mimes:jpeg,jpg,png',
            'description'=>'required',
            'designation'=>'required',
        ]);

        if($request->image){
        $image=$request->file('image');
        
        $member=Team::where('id',$id)->first();
        unlink(public_path("assets/uploads/team/".$member->image));
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/team'),$name);
        Team::where('id',$id)->update([
            'name'=>$request->name,
            'image'=>$name,
            'description'=>$request->description,
            'designation'=>$request->designation         
        ]);
        return Redirect()->route('team')->with('success','Member Updated Successfully');
        }
        else{
            Team::where('id',$id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'designation'=>$request->designation         
        ]);
        return Redirect()->route('team')->with('success','Member Updated Successfully');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($image,$id)
    {
        Team::where('id',$id)->delete();
        unlink(public_path("assets/uploads/team/".$image));
        return Redirect()->route('team')->with('success','Member Deleted Successfully');
    }
}
