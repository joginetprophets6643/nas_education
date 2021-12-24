<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\User;
use App\Models\State_Master;
use App\Models\District_Master;

class UserController extends BaseController
{
    public function register()
    {
        $states=State_Master::all();
        return view('front.registration',compact('states'));
    }

    public function viewLogin()
    {
        return view('front.login');
    }

    public function registered(Request $request)
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
            'email_otp1' => 'required',
            'email_otp2' => 'required',
            'email_otp3' => 'required',
            'email_otp4' => 'required',
            'mobile_otp1' => 'required',
            'mobile_otp2' => 'required',
            'mobile_otp3' => 'required',
            'mobile_otp4' => 'required',
        ]);
        $email_otp=$request->email_otp1.$request->email_otp2.$request->email_otp3.$request->email_otp4;
        $mobile_otp=$request->mobile_otp1.$request->mobile_otp2.$request->mobile_otp3.$request->mobile_otp4;
        if($email_otp===$request->email_otp && $mobile_otp===$request->mobile_otp){
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
            $user->save();
            return Redirect()->route('login');
        }
        else{
            return Redirect()->back();
        }
    }
}
