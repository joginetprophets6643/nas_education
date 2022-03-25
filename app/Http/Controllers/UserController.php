<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use App\Models\User;
use App\Models\State_Master;
use App\Models\DataInfo;
use App\Models\UserInfo;
use App\Models\District_Master;
use Illuminate\Support\Facades\Validator;

class UserController extends BaseController
{
    public function register()
    {
        $states=State_Master::orderBy('state_name')->get();
        return view('front.data-share.registration.registration',compact('states'));
    }

    public function resetPassword()
    {
        return view('front.data-share.login.reset_password');
    }
    
    public function changePassword(Request $request)
    {

        User::where('mobile_no',$request->user)->update([
            'password'=>Hash::make($request->password),
        ]);

        return true;
    }

    public function viewLogin()
    {
        return view('front.data-share.login.login');
    }

    public function registered(Request $request)
    {
       
        $ip=$request->ip();
        if($request->country=='India')
        {
            $request->validate([
                'email' => 'required|unique:users',
                'address' => 'required',
                'gender' => 'required',
                'name' => 'required',
                'user_type' => 'required',
                'identify_yourself'=> 'required',
                'state' => 'required',
                'country' => 'required',
                'district' => 'required',
                'mobile_no' => 'required|unique:users|digits:10',
                'password'=>'required|confirmed|min:5',
                'captcha_code' => 'required',
                
                // 'email_otp1' => 'required',
                // 'email_otp2' => 'required',
                // 'email_otp3' => 'required',
                // 'email_otp4' => 'required',
                // 'mobile_otp1' => 'required',
                // 'mobile_otp2' => 'required',
                // 'mobile_otp3' => 'required',
                // 'mobile_otp4' => 'required',
            ],
            [
            'mobile_no.required' => 'The mobile number field is required.',
            ]
        );

            if($request->captcha_code!==$request->captcha){
                return redirect()->back()->with('captcha','Captcha is not correct');
            }
            
            //$email_otp=$request->email_otp1.$request->email_otp2.$request->email_otp3.$request->email_otp4;
            // $mobile_otp=$request->mobile_otp1.$request->mobile_otp2.$request->mobile_otp3.$request->mobile_otp4;
            
            $user=new User;
            $user->email=$request->email;
            $user->address=$request->address;
            $user->gender=$request->gender;
            $user->name=$request->name;
            $user->user_type=$request->user_type;
            $user->identity_yourself=$request->identify_yourself;
            $user->state_id=$request->state;
            $user->mobile_no=$request->mobile_no;
            $user->country=$request->country;
            $user->district_id=$request->district;
            $user->password=Hash::make($request->password);
            $user->ip_address=$ip;
            $user->save();
            return Redirect()->route('success');
            
        }
        else{

            $request->validate([
                'email' => 'required|unique:users',
                'address' => 'required',
                'gender' => 'required',
                'name' => 'required',
                'user_type' => 'required',
                'identify_yourself'=> 'required',
                'country' => 'required',
                'password'=>'required|confirmed|min:5',
                'captcha_code' => 'required',
                
                // 'email_otp1' => 'required',
                // 'email_otp2' => 'required',
                // 'email_otp3' => 'required',
                // 'email_otp4' => 'required',
                // 'mobile_otp1' => 'required',
                // 'mobile_otp2' => 'required',
                // 'mobile_otp3' => 'required',
                // 'mobile_otp4' => 'required',
            ]);

            if($request->captcha_code!==$request->captcha){
                return redirect()->back()->with('captcha','Captcha is not correct');
            }
            
            
            $user=new User;
            $user->email=$request->email;
            $user->address=$request->address;
            $user->gender=$request->gender;
            $user->name=$request->name;
            $user->user_type=$request->user_type;
            $user->identity_yourself=$request->identify_yourself;
            $user->state_id=$request->state;
            $user->mobile_no=$request->mobile_no;
            $user->country=$request->country;
            $user->district_id=$request->district;
            $user->password=Hash::make($request->password);
            $user->ip_address=$ip;
            $user->save();
            return Redirect()->route('success');
            
            
        }
    }
    public function login(Request $request){

         $validator = Validator::make($request->all(),[
                    'mobile_no' => 'required|digits:10',
                    'password' => 'required',
                    'captcha_code' => 'required',
                ]);
        if ($validator->fails()) {
            return redirect()->route('login')
                    ->withErrors($validator)
                    ->withInput();
        }        
        
        if($request->captcha_code!==$request->captcha){
            return redirect()->route('login')->with('error','Captcha is not correct');
        }
        $credentials = $request->only('mobile_no', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('successLogin');
        }
        return redirect()->route('login')->with('success','Login details are not valid');
    }
    // public function login(Request $request){
    //     $request->validate([
    //         'mobile_no' => 'required|digits:10',
    //         'password' => 'required',
    //         'captcha_code' => 'required',
    //     ]);
    //     if($request->captcha_code!==$request->captcha){
    //         return redirect()->back()->with('error','Captcha is not correct');
    //     }
    //     $credentials = $request->only('mobile_no', 'password');
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->route('successLogin');
    //     }

    //     return redirect()->back()->with('success','Login details are not valid');
    // }

    public function successLogin(){
        $states=State_Master::orderBy('state_name')->get();
        return view('front.data-share.login.successlogin',compact('states'));
    }

    public function success(){
        return view('front.data-share.registration.successful');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Logout Sucessfully');
    }

    public function getData(Request $request){

        $data='';

        if($request->state==''){
            $data=DataInfo::where('acc_year',$request->acc_year)->where('type','national')->get();
        }
        elseif($request->district==''){
            $data=DataInfo::where('acc_year',$request->acc_year)->where('type','state')->where('type_id',$request->state)->get();
        }
        else{
            $data=DataInfo::where('acc_year',$request->acc_year)->where('type','district')->where('type_id',$request->district)->get();
        }
        
        $id=[];
        foreach($data as $item){
            $id[]=$item->id;
        }

        UserInfo::insert([
            'user_id'=>Auth::user()->id,
            'data_id'=>json_encode($id),
            'purpose'=>$request->purpose,
        ]);

        return $data;
    }
}
