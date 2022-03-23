<?php

namespace App\Http\Controllers;

use App\Models\Static_Content;
use App\Models\State_Master;
use App\Models\Event;
use App\Models\RTI;
use App\Models\Banner;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Vedios;
use App\Models\Video_Events;
use App\Models\Team;
use App\Models\Program;
use App\Models\ClientLogo;
use DB;
use Hash;

class FrontController extends Controller
{
    public function index(){

        $lang="2";
        if (Session::has('locale')) {
            $lang = Session::get('locale');
            if($lang=="hi")
            {
                $lang='1';
            }
            else{
                $lang='2';
            }
        }
        $content=Static_Content::where('language',$lang,)->where('page_title','About NAS')->first();
        $report=Static_Content::where('language',$lang,)->where('page_title','Report Card')->first();
        $data=Static_Content::where('language',$lang,)->where('page_title','Data Share')->first();
        $visual=Static_Content::where('language',$lang,)->where('page_title','Visualization')->first();
        $mobile=Static_Content::where('language',$lang)->where('page_title','Mobile App')->first();
        $client_logo = ClientLogo::all();
        $banners=Banner::all();

        $events=Event::join('event_images','events.id','=','event_images.event_id')->get();
        
        $count=[];
        $image=[];
        foreach($events as $event){
            $count[$event->id]=count(json_decode($event->images));
            $image[$event->id]=json_decode($event->images)[0];
        }
        
        $videos=Video_Events::join('vedios','video_events.id','=','vedios.event_id')->where('status',1)->get();
        $states=State_Master::orderBy('state_name')->get();

        
        return view('front.index',compact('content','events','image','videos','states','client_logo','banners','report','data','visual','mobile'));
    }

    public function team(){
        $members=Team::all();
        $members=$members->groupBy('description');
        return view('front.team.index',compact('members'));
    }

    public function data(){
        $lang="2";
        if (Session::has('locale')) {
            $lang = Session::get('locale');
            if($lang=="hi")
            {
                $lang='1';
            }
            else{
                $lang='2';
            }
        }

        $content=Static_Content::where('language',$lang)->where('page_title','Data Share')->first();
        
        return view('front.data-share.index',compact('content'));
    }

    public function program(){
        $lang="2";
        if (Session::has('locale')) {
            $lang = Session::get('locale');
            if($lang=="hi")
            {
                $lang='1';
            }
            else{
                $lang='2';
            }
        }
        
        $programs=Program::where('language',$lang,)->orderBy('id')->get();
        $members=Team::whereIn('name',['Hrushikesh Senapaty','Euphrates Efosi Wose'])->get();
        return view('front.program.index',compact('programs','members'));
    }

    public function gallery(){
        // $events=Event::get()->groupBy('state');
        // // dd($events);
        
        // $count=[];
        // foreach($events as $key=>$value){
        //     $state=State_Master::where('state_id',$key)->first();
        //     $count[$key]=array(
        //         'state'=>$state->state_name, 
        //         'count'=> count($value),
        //         'image'=>$state->thumbnail?$state->thumbnail:'broken-1.png'
        //     );
        // }

        // // dd($count);


        
        // $v_events=Video_Events::get()->groupBy('state');
        // $v_count=[];
        // foreach($v_events as $key=>$value){
        //     $state=State_Master::where('state_id',$key)->first();
        //     $v_count[$key]=array(
        //         'state'=>$state->state_name, 
        //         'count'=> count($value),
        //         'image'=>$state->thumbnail?$state->thumbnail:'broken-1.png'
        //     );
        // }
        
        return view('front.gallery.index');
    }

    public function rti(){
        $links=RTI::all();
        return view('front.content.rti',compact('links'));
    }

    public function login(){
        return view('front.auth.login');
    }

    public function checkCredentials(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $email=$request->email;
        $password=$request->password;
        $user=DB::table('auth')->where('email',$email)->first();
        if($user){
            if(password_verify($password, $user->password)){
                Session::put('auth-user',$email);
                return redirect()->route('/')->with('success','Logged In');        
            }
            else{
                return redirect()->route('user-login')->with('success','Login details are not valid');        
            }
        }
        else{
            return redirect()->route('user-login')->with('success','Login details are not valid');        
        }      
    }

    public function logout(){
        Session::flush();
        return redirect()->route('user-login');
    }
}
