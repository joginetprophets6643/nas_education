<?php

namespace App\Http\Controllers;

use App\Models\NationalStatistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class NationalController extends Controller
{
    public function index(){
        $nationals=NationalStatistic::latest()->get();
        return view('admin.master.national.index',compact('nationals'));
    }

    public function add(){
        return view('admin.master.national.add');
    }

    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'total_district_area'=>'required|numeric',
            'total_population'=>'required|numeric',
            'rural_population'=>'required|numeric',
            'urban_population'=>'required|numeric',
            'density_of_population'=>'required|numeric',
            'literacy_rate'=>'required|numeric',
            'child_sex_ratio'=>'required|numeric',
            'no_of_schools'=>'required|numeric',
            'no_of_teachers'=>'required|numeric',
            'no_of_students'=>'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->route('add-national')
                    ->withErrors($validator)
                    ->withInput();
        }
        
        $national=new NationalStatistic;
        $national->total_district_area=$request->total_district_area;
        $national->total_population=$request->total_population;
        $national->rural_population=$request->rural_population;
        $national->urban_population=$request->urban_population;
        $national->density_of_population=$request->density_of_population;
        $national->literacy_rate=$request->literacy_rate;
        $national->child_sex_ratio=$request->child_sex_ratio;
        $national->no_of_schools=$request->no_of_schools;
        $national->no_of_teachers=$request->no_of_teachers;
        $national->no_of_students=$request->no_of_students;
        $national->save();

        return Redirect()->route('national')->with('success','National Added Successfully');
    }

    public function edit($id)
    {
        $id=decode5t($id);
        $national=NationalStatistic::where('id',$id)->first();
        return view('admin.master.national.edit',compact('national'));
    }

    public function update(Request $request,$id)
    {
        $id=decode5t($id);
        $validator = Validator::make($request->all(),[
            'total_district_area'=>'required|numeric',
            'total_population'=>'required|numeric',
            'rural_population'=>'required|numeric',
            'urban_population'=>'required|numeric',
            'density_of_population'=>'required|numeric',
            'literacy_rate'=>'required|numeric',
            'child_sex_ratio'=>'required|numeric',
            'no_of_schools'=>'required|numeric',
            'no_of_teachers'=>'required|numeric',
            'no_of_students'=>'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->route('edit-national',encode5t($id))
                    ->withErrors($validator)
                    ->withInput();
        }
        
        NationalStatistic::where('id',$id)->update([
            'total_district_area'=>$request->total_district_area,
            'total_population'=>$request->total_population,
            'rural_population'=>$request->rural_population,
            'urban_population'=>$request->urban_population,
            'density_of_population'=>$request->density_of_population,
            'literacy_rate'=>$request->literacy_rate,
            'child_sex_ratio'=>$request->child_sex_ratio,
            'no_of_schools'=>$request->no_of_schools,
            'no_of_teachers'=>$request->no_of_teachers,
            'no_of_students'=>$request->no_of_students
        ]);

        return Redirect()->route('national')->with('success','National Updated Successfully');
    }

    public function destroy($id){
        $id=decode5t($id);
        NationalStatistic::where('id',$id)->delete();
        return Redirect()->route('national')->with('success','National Deleted Successfully');
    }

}
