<?php

use App\Models\Setting;
use Illuminate\Support\Facades\DB; 

if (! function_exists('get_setting')) {
    function get_setting() {
       $setting=Setting::first();
       return $setting;
    }
}

if (! function_exists('get_Date')) {
    function get_Date() {
       $date=date('d/m/Y');
       DB::table('last_modified')->where('id',1)->update([
           'date'=>$date,
       ]);
    }
}

if (! function_exists('last_modified_Date')) {
    function last_modified_Date() {
       $date=DB::table('last_modified')->first();
       return $date->date;
    }
}