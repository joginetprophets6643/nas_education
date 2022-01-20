<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Permission;
use Hash;
use Auth;

class PermissionController extends Controller
{
    public function index(){
        $users=User::latest()->where('address')->whereNotIn('email',['admin@gmail.com',Auth::user()->email])->get();
        return view('admin.users.index',compact('users'));
    }

    public function add()
    {
        return view('admin.users.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required',
        ]);

        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        
        $user=User::where('email',$request->email)->first();
        $role=new Permission;
        $role->user_id=$user->id;
        $role->role=$request->role;
        $role->view=json_encode(['dashboard','profile','logout']);
        $role->edit=json_encode([]);
        $role->add=json_encode([]);
        $role->delete=json_encode([]);
        
        $role->save();

        return Redirect()->route('user')->with('success','User Added Successfully.Now Grant the Permission to user');
    }
    public function destroy($id)
    {
        $id=decode5t($id);
        User::where('id',$id)->delete();
        Permission::where('user_id',$id)->delete();
        return Redirect()->route('user')->with('success','User Deleted Successfully');
    }

    public function permit($id){
        $id=decode5t($id);
        $user=Permission::where('user_id',$id)->first();
        $user->view=json_decode($user->view);
        $user->add=json_decode($user->add);
        $user->edit=json_decode($user->edit);
        $user->delete=json_decode($user->delete);
        return view('admin.users.permission',compact('user'));
    }

    public function storePermit(Request $request,$id){
        $id=decode5t($id);
        $modules=['User','Media','Team','Content','Program','Master','Statistic','Data','Banner','Client-Logo','Registration','Setting','RTI'];
        $permits=['view','add','edit','delete'];
        $view=['dashboard','profile','logout'];
        $add=[];
        $edit=[];
        $delete=[];
        foreach($permits as $permit)
        {
            foreach($modules as $module){
                $name=$module.'_'.$permit;
                if($request->$name==1){
                    ${$permit}[]=$module;
                }
            }
            ${$permit}=json_encode(${$permit});
        }
        Permission::where('user_id',$id)->update([
            'view'=>$view,
            'add'=>$add,
            'edit'=>$edit,
            'delete'=>$delete,
        ]);
        return Redirect()->route('user')->with('success','Permissions Granted Successfully');
    }
}
