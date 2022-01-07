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
use App\Models\Permission;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetLinkMail;

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
        $user=User::where('email',$username)->first();
        $modules=['dashboard','profile','logout','User','Media','Team','Content','Program','Master','Statistic','Data','Banner','Client-Logo','Registration','Setting'];
        $modules=json_encode($modules);
        Permission::insert([
            'user_id'=>$user->id,
            'role'=>'1',
            'view'=>$modules,
            'edit'=>$modules,
            'delete'=>$modules,
            'add'=>$modules,
        ]);

    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password','address');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/secure-admin/dashboard')->with('success','Signed in');
        }

        return redirect("secure-admin")->with('success','Login details are not valid');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
            Auth::logout();
            Session::flush();
            return redirect('secure-admin')->with('success','Logout Sucessfully');
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


   public function list(){
       $users=User::whereNotNull('address')->get();
       return view('admin.user_list.index',compact('users'));
   }

   public function proceed(Request $request){
    $request->validate([
        'email' => 'required',
    ]);
    $email=encode5t($request->email);
    $date=encode5t(date('Y-m-d'));
    date_default_timezone_set('Asia/Kolkata');
    $time=encode5t(date('h:i:s'));
    
    $link=url('/').'/token='.$email.'/'.$date.'/'.$time;
    $user=User::where('email',$request->email)->where('address')->first();
    if($user){
        dd($link);
        Mail::to($request->email)->send(new ResetLinkMail($link));
        return redirect()->back()->with('success','Reset Link sent to the given Email address');
    }
    else{
        return redirect('secure-admin')->with('success','Unauthorized User');
    }
   }

   public function viewReset($email,$date,$time){
    $email=decode5t($email);
    $date=decode5t($date);
    $time=decode5t($time);

    $c_date=date('Y-m-d');
    date_default_timezone_set('Asia/Kolkata');
    $c_time=date('h:i:s');
    $min=(int)round(abs(strtotime($c_time)-strtotime($time))/60);

    if($date==$c_date && $min<=10){
        $user=User::where('email',$email)->where('address')->first();
        if($user){
            return view('admin.reset-password',compact('email'));
        }
        else{
            return redirect('secure-admin')->with('success','Unauthorized User');
        }
    }
    else{
        return redirect('forget-password')->with('success','Reset Link Expired.Generate new Reset Link');
    }
    
   }

   public function successful(Request $request,$email){
    $request->validate([
        'password'=>'required|confirmed|min:5',
    ]);
    $email=decode5t($email);
    User::where('email',$email)->update([
        'password'=>Hash::make($request->password),
    ]);
    return view('admin.successful');
   }

}
