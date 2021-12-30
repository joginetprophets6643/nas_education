<?php

namespace App\Http\Controllers;

use App\Models\ClientLogo;
use Illuminate\Http\Request;

class ClientLogoController extends Controller
{
    public function index(){
        $client_logo = ClientLogo::all();
        return view('admin.client_logo.index',compact('client_logo'));
    }

    public function store(Request $request){
        $validatedData=$request->validate([
            'title'=>'required',
            'url'=>'required',
            'logo'=>'required|mimes:jpeg,jpg,png,svg',
        ]);

        $client_logo = new ClientLogo;

        $image=$request->file('logo');

        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/client_logo'),$name);
        
        $client_logo->title = $request->title;
        $client_logo->url   = $request->url;
        $client_logo->logo  = $name;
        $client_logo->save();
        return Redirect()->route('client-logo')->with("Success","Client Logo Added Successfully");
    }


    public function edit($id)
    {
        $id=decode5t($id);
        $client_logo = ClientLogo::where('id',$id)->first();
        return view('admin.client_logo.edit',compact('client_logo'));
    }
    

    public function update(Request $request,$id)
    {
        $id=decode5t($id);
        $request->validate([
            'title'=>'required',
            'url'=>'required',
            'logo'=>'mimes:jpeg,jpg,png',
        ]);

        $client_logo = ClientLogo::where('id',$id)->first();

        if($request->logo){
        $image = $request->file('logo');

        unlink("assets/uploads/client_logo/".$client_logo->logo);
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/client_logo'),$name);
        }
        else{
            $name = $client_logo->logo;
        }
        ClientLogo::where('id',$id)->update([
            'title'=>$request->title,
            'url' =>$request->url,
            'logo'=>$name,
        ]);

        return Redirect()->route('client-logo')->with('success','Client Logo Updated Successfully');
        
    }

    public function destroy($id){
        $id=decode5t($id);
        $client_logo = ClientLogo::where('id',$id)->first();
        unlink("assets/uploads/client_logo/".$client_logo->logo);
        ClientLogo::where('id',$id)->delete();

        return Redirect()->route('client-logo')->with('success','Client Logo Deleted Successfully');
    }
}
