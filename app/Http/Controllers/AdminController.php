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
class AdminController extends BaseController
{
    public function index()
    {
        return view('admin.login');
    }
    public function register()
    {
        $username = 'admin@gmail.com';
        $pass = '123456';
        $password = Hash::make($pass);

        User::create([
        'name' => 'Admin',
        'email' => $username,
        'password' => $password
        ]);

    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }

        return redirect("secure-admin")->withSuccess('Login details are not valid');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
            Auth::logout();
            Session::flush();
            return redirect('secure-admin')->with('adminlogout','Admin Logout Sucessfully .');
    }

    public function profile(){
        $user=Auth::user();
        return view('admin.profile',compact('user'));
    }

    public function updateProfile(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $user=Auth::user();
       
        if(!$request->password){        
            User::where('email',$request->email)->update([
            'name'=>$request->name,
            'password'=>$user->password
            ]);
        }
        else{
            User::where('email',$request->email)->update([
            'name'=>$request->name,
            'password'=>Hash::make($request->password)
            ]);
        }
        return Redirect()->route('dashboard');
   }

}
