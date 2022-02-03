<?php

use App\Models\BlogWithTags;
use App\Models\Permission;

use Illuminate\Support\Facades\DB;

//use DB;

function GetMAC(){

    ob_start();

    system('getmac');

    $Content = ob_get_contents();

    ob_clean();

    return substr($Content, strpos($Content,'\\')-20, 17);

}

function encode5t($str)

{

	  for($i=0; $i<5;$i++)

	  {

		$str=strrev(base64_encode($str)); //apply base64 first and then reverse the string

	  }

	  return $str;

}

function decode5t($str)

{

	  	for($i=0; $i<5;$i++)

  		{

    		$str=base64_decode(strrev($str));

  		}

	    return $str;

}



function visit_count()

{

    $ip = DB::table('visit')->where('ip',$_SERVER['REMOTE_ADDR'])->get();



      if(count($ip) < 1){

        $dataArr = [

                 'ip' => $_SERVER['REMOTE_ADDR'],

             ];

             $insert = DB::table('visit')->insertGetId($dataArr);

      }

        $count = DB::table('visit')->get()->count();

        return $count;

}









// eventt imagesx





function eventImage($event_id)

{

    $event = DB::table('events_images')->where('event_id',$event_id)->get()->first();

    return $event;

}



function eventImageFront($event_name)

{

	$name=str_replace('-', ' ',$event_name);

    $event = DB::table('events_images')->where('event_name',$name)->get();

    return $event;



}

function Image($image_id)

{

    $images = DB::table('gallery_images')->where('image_id',$image_id)->get()->first();

    return $images;

}

if (! function_exists('permissions')) {
function permissions($id){
  $user=Permission::where('user_id',$id)->first();
  // $user->view=json_decode($user->view);
  // $user->add=json_decode($user->add);
  // $user->edit=json_decode($user->edit);
  // $user->delete=json_decode($user->delete);
   return $user; 
}
}

