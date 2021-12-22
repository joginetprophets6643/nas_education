<?php

namespace App\Http\Controllers;

use App\Models\NationalStatistic;
use Illuminate\Http\Request;

class NationalController extends Controller
{
    public function index(){
        $nationals=NationalStatistic::all();
        return view('admin.master.national.index',compact('nationals'));
    }

    public function add(){
        return view('admin.master.national.add');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'total_district_area'=>'required',
            'total_population'=>'required',
            'rural_population'=>'required',
            'urban_population'=>'required',
            'density_of_population'=>'required',
            'literacy_rate'=>'required',
            'child_sex_ratio'=>'required'
        ]);
        
        $national=new NationalStatistic;
        $national->total_district_area=$request->total_district_area;
        $national->total_population=$request->total_population;
        $national->rural_population=$request->rural_population;
        $national->urban_population=$request->urban_population;
        $national->density_of_population=$request->density_of_population;
        $national->literacy_rate=$request->literacy_rate;
        $national->child_sex_ratio=$request->child_sex_ratio;
        $national->save();

        return Redirect()->route('national')->with('success','National Added Successfully');
    }

    public function edit($id)
    {
        $national=NationalStatistic::where('id',$id)->first();
        return view('admin.master.national.edit',compact('national'));
    }

    public function update(Request $request,$id)
    {
        
        $request->validate([
            'total_district_area'=>'required',
            'total_population'=>'required',
            'rural_population'=>'required',
            'urban_population'=>'required',
            'density_of_population'=>'required',
            'literacy_rate'=>'required',
            'child_sex_ratio'=>'required'
        ]);
        
        NationalStatistic::find($id)->update([
            'total_district_area'=>$request->total_district_area,
            'total_population'=>$request->total_population,
            'rural_population'=>$request->rural_population,
            'urban_population'=>$request->urban_population,
            'density_of_population'=>$request->density_of_population,
            'literacy_rate'=>$request->literacy_rate,
            'child_sex_ratio'=>$request->child_sex_ratio
        ]);

        return Redirect()->route('national')->with('success','National Updated Successfully');
    }

    public function destroy($id){
        NationalStatistic::find($id)->delete();
        return Redirect()->route('state')->with('success','National Deleted Successfully');
    }

}
