<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State_Master;
use App\Models\District_Master;


class VisualizationController extends Controller
{
    public function index(){

        $states=State_Master::all();
        $districts=District_Master::orderBy('district_name')->get();
        return view('front.visualization.index',compact('states','districts'));
    }
}
