<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District_Master;
use App\Models\State_Master;

class MasterController extends Controller
{
    public function district(){
        $districts=District_Master::leftJoin('state_masters', 'state_masters.state_id', '=', 'district_masters.state_id')
                   ->select('district_masters.*','state_masters.state_name')
                   ->latest()->get();

        return view('admin.master.district.index',compact('districts'));
    }

    public function addDistrict()
    {   
        $states=State_Master::orderBy('state_name','ASC')->get();
        return view('admin.master.district.add',compact('states'));
    }

    public function storeDistrict(Request $request)
    {
        $request->validate([
            'district_id'=>'required',
            'state_id'=>'required',
            'district_name'=>'required',
            'district_code'=>'required',
            'state_code'=>'required',
            'year'=>'required',
            'lgd_district_id'=>'required',
            'lgd_state_id'=>'required',
            'year_id'=>'required',
            
        ]);
        if($request->status){
            $request->status=2;
        }
        else{
            $request->status=1;
        }
        
        $district=new District_Master;
        $district->district_id=$request->district_id;
        $district->state_id=$request->state_id;
        $district->district_name=$request->district_name;
        $district->description=$request->description;
        $district->udise_district_code=$request->district_code;
        $district->udise_state_code=$request->state_code;
        $district->inityear=$request->year;
        $district->lgd_district_id=$request->lgd_district_id;
        $district->lgd_state_id=$request->lgd_state_id;
        $district->is_active=$request->status;
        $district->year_id=$request->year_id;
        $district->total_district_area=$request->total_district_area;
        $district->total_population=$request->total_population;
        $district->rural_population=$request->rural_population;
        $district->urban_population=$request->urban_population;
        $district->density_of_population=$request->density_of_population;
        $district->literacy_rate=$request->literacy_rate;
        $district->child_sex_ratio=$request->child_sex_ratio;

        $district->no_of_schools=$request->no_of_schools;
        $district->state_govt_schools=$request->state_govt_schools;
        $district->govt_aided_schools=$request->govt_aided_schools;
        $district->central_govt_schools=$request->central_govt_schools;
        $district->private_unaided_reco_schools=$request->private_unaided_reco_schools;

        $district->teacher_state_govt_schools=$request->teacher_state_govt_schools;
        $district->teacher_govt_aided_schools=$request->teacher_govt_aided_schools;
        $district->teacher_central_govt_schools=$request->teacher_central_govt_schools;
        $district->teacher_private_unaided_reco_schools=$request->teacher_private_unaided_reco_schools;
        
        $district->save();

        return Redirect()->route('district')->with('success','District Added Successfully');
    }

    public function editDistrict($id)
    {
        $district=District_Master::where('id',$id)->first();
        $states=State_Master::orderBy('state_name','ASC')->get();
        
        return view('admin.master.district.edit',compact('district','states'));
    }

    public function updateDistrict(Request $request,$id)
    {   
        $request->validate([
            'district_id'=>'required',
            'state_id'=>'required',
            'district_name'=>'required',
            
            'district_code'=>'required',
            'state_code'=>'required',
            'year'=>'required',
            'lgd_district_id'=>'required',
            'lgd_state_id'=>'required',
            'year_id'=>'required',
            
        ]);
        
        if($request->status){
            $request->status=2;
        }
        else{
            $request->status=1;
        }
        
        District_Master::where('id',$id)->update([
            'district_id'=>$request->district_id,
            'state_id'=>$request->state_id,
            'district_name'=>$request->district_name,
            'description'=>$request->description,
            'udise_district_code'=>$request->district_code,
            'udise_state_code'=>$request->state_code,
            'inityear'=>$request->year,
            'lgd_district_id'=>$request->lgd_district_id,
            'lgd_state_id'=>$request->lgd_state_id,
            'is_active'=>$request->status,
            'year_id'=>$request->year_id,
            
            'total_district_area'=>$request->total_district_area,
            'total_population'=>$request->total_population,
            'rural_population'=>$request->rural_population,
            'urban_population'=>$request->urban_population,
            'density_of_population'=>$request->density_of_population,
            'literacy_rate'=>$request->literacy_rate,
            'child_sex_ratio'=>$request->child_sex_ratio,
            'no_of_schools'=>$request->no_of_schools,
            'state_govt_schools'=>$request->state_govt_schools,
            'govt_aided_schools'=>$request->govt_aided_schools,
            'central_govt_schools'=>$request->central_govt_schools,
            'private_unaided_reco_schools'=>$request->private_unaided_reco_schools,
            'teacher_state_govt_schools'=>$request->teacher_state_govt_schools,
            'teacher_govt_aided_schools'=>$request->teacher_govt_aided_schools,
            'teacher_central_govt_schools'=>$request->teacher_central_govt_schools,
            'teacher_private_unaided_reco_schools'=>$request->teacher_private_unaided_reco_schools
            
        ]);

        return Redirect()->route('district')->with('success','District Updated Successfully');
    }

    public function destroyDistrict($id)
    {
        District_Master::find($id)->delete();
        return Redirect()->route('district')->with('success','District Deleted Successfully');
    }

    public function state(){
        $states=State_Master::latest()->get();
        return view('admin.master.state.index',compact('states'));
    }

    public function addState()
    {
        return view('admin.master.state.add');
    }
    

    public function storeState(Request $request)
    {
        
        $request->validate([
            'state_id'=>'required',
            'state_name'=>'required',
            'state_code'=>'required',
            'ut'=>'required',
            'lgd_state_id'=>'required',
            'view_order'=>'required',
            'status'=>'required',
            
        ]);
        
        if($request->status){
            $request->status=2;
        }
        else{
            $request->status=1;
        }
        
        $state=new State_Master;
        $state->state_id=$request->state_id;
        $state->state_name=$request->state_name;
        $state->description=$request->description;
        $state->udise_state_code=$request->state_code;
        $state->is_ut=$request->ut;
        $state->status=$request->status;
        $state->lgd_state_id=$request->lgd_state_id;
        $state->is_active=$request->status;
        $state->view_order=$request->view_order;
        $state->total_district_area=$request->total_district_area;
        $state->total_population=$request->total_population;
        $state->rural_population=$request->rural_population;
        $state->urban_population=$request->urban_population;
        $state->density_of_population=$request->density_of_population;
        $state->literacy_rate=$request->literacy_rate;
        $state->child_sex_ratio=$request->child_sex_ratio;

        $state->no_of_schools=$request->no_of_schools;
        $state->state_govt_schools=$request->state_govt_schools;
        $state->govt_aided_schools=$request->govt_aided_schools;
        $state->central_govt_schools=$request->central_govt_schools;
        $state->private_unaided_reco_schools=$request->private_unaided_reco_schools;

        $state->teacher_state_govt_schools=$request->teacher_state_govt_schools;
        $state->teacher_govt_aided_schools=$request->teacher_govt_aided_schools;
        $state->teacher_central_govt_schools=$request->teacher_central_govt_schools;
        $state->teacher_private_unaided_reco_schools=$request->teacher_private_unaided_reco_schools;
        
        $state->save();

        return Redirect()->route('state')->with('success','State Added Successfully');
    }

    public function editState($id)
    {
        $state=State_Master::where('id',$id)->first();
        return view('admin.master.state.edit',compact('state'));
    }

    public function updateState(Request $request,$id)
    {
        $request->validate([
            'state_id'=>'required',
            'state_name'=>'required',
            'state_code'=>'required',
            'ut'=>'required',
            'lgd_state_id'=>'required',
            'view_order'=>'required',
            'status'=>'required',
            
        ]);
        
        if($request->status){
            $request->status=2;
        }
        else{
            $request->status=1;
        }
        
        State_Master::where('id',$id)->update([
            'state_id'=>$request->state_id,
            'state_name'=>$request->state_name,
            'description'=>$request->description,
            'udise_state_code'=>$request->state_code,
            'is_ut'=>$request->ut,
            'lgd_state_id'=>$request->lgd_state_id,
            'is_active'=>$request->status,
            'view_order'=>$request->view_order,
            'status'=>$request->status,

            'total_district_area'=>$request->total_district_area,
            'total_population'=>$request->total_population,
            'rural_population'=>$request->rural_population,
            'urban_population'=>$request->urban_population,
            'density_of_population'=>$request->density_of_population,
            'literacy_rate'=>$request->literacy_rate,
            'child_sex_ratio'=>$request->child_sex_ratio,
            'no_of_schools'=>$request->no_of_schools,
            'state_govt_schools'=>$request->state_govt_schools,
            'govt_aided_schools'=>$request->govt_aided_schools,
            'central_govt_schools'=>$request->central_govt_schools,
            'private_unaided_reco_schools'=>$request->private_unaided_reco_schools,
            'teacher_state_govt_schools'=>$request->teacher_state_govt_schools,
            'teacher_govt_aided_schools'=>$request->teacher_govt_aided_schools,
            'teacher_central_govt_schools'=>$request->teacher_central_govt_schools,
            'teacher_private_unaided_reco_schools'=>$request->teacher_private_unaided_reco_schools
            
        ]);

        return Redirect()->route('state')->with('success','State Updated Successfully');
    }

    public function destroyState($id)
    {
        State_Master::find($id)->delete();
        return Redirect()->route('state')->with('success','State Deleted Successfully');
    }
}
