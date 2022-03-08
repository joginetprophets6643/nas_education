<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\District_Master;
use App\Models\State_Master;
use DB;

class Data2017Controller extends Controller
{
    public function state()
    {   
        DB::table('state_data_2017')->truncate();
        $state_data = State_Master::select('state_name','udise_state_code')->get();

        foreach($state_data as $key){
            $key->file_name = str_replace('__', '_', str_replace(' ', '_',preg_replace('/[^a-zA-Z0-9 ]/s','',strtolower($key->state_name)))).".pdf";
            
            DB::table('state_data_2017')->insert([
                'state_id'=>$key->udise_state_code,
                'state_name'=>$key->state_name,
                'year'=>"2017",
                'file_name'=>$key->file_name,
            ]);
        }

        return "State Data for 2017 Table Created.";
        
    }

    public function district()
    {   
        DB::table('district_data_2017')->truncate();
        $district_data = District_Master::select('district_name','udise_district_code')->get();

        foreach($district_data as $key){
            $key->file_name = str_replace('__', '_', str_replace(' ', '_',preg_replace('/[^a-zA-Z0-9 ]/s','',strtolower($key->district_name)))).".pdf";

            DB::table('district_data_2017')->insert([
                'district_id'=>$key->udise_district_code,
                'district_name'=>$key->district_name,
                'year'=>"2017",
                'file_name'=>$key->file_name,
            ]);
        }

        return "District Data for 2017 Table Created.";
    }
}
