<?php

use App\Models\Setting;

if (! function_exists('get_setting')) {
    function get_setting() {
       $setting=Setting::first();
       return $setting;
    }
}