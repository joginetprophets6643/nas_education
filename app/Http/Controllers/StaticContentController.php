<?php

namespace App\Http\Controllers;

use App\Models\Static_Content;
use Illuminate\Http\Request;


class StaticContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents=Static_Content::latest()->get();
        return view('admin.static_content.index',compact('contents'));
    }

    public function add()
    {
        return view('admin.static_content.add');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'language'=>'required|not_in:0',
            'title'=>'required',
            'home_content'=>'required',
            'inner_content'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required'
        ]);

        $content=new Static_Content;
        $content->language=$request->language;
        $content->page_title=$request->title;
        $content->home_page_content=$request->home_content;
        $content->inner_page_content=$request->inner_content;
        $content->page_meta_title=$request->meta_title;
        $content->page_meta_description=$request->meta_description;
        $content->save();

        return Redirect()->route('content')->with('success','Content Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Static_Content  $static_Content
     * @return \Illuminate\Http\Response
     */
    public function show(Static_Content $static_Content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Static_Content  $static_Content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content=Static_Content::where('id',$id)->first();
        return view('admin.static_content.edit',compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatic_ContentRequest  $request
     * @param  \App\Models\Static_Content  $static_Content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'language'=>'required|not_in:0',
            'title'=>'required',
            'home_content'=>'required',
            'inner_content'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required'
        ]);
        
        Static_Content::where('id',$id)->update([
            'language'=>$request->language,
            'page_title'=>$request->title,
            'home_page_content'=>$request->home_content,
            'inner_page_content'=>$request->inner_content,
            'page_meta_title'=>$request->meta_title,
            'page_meta_description'=>$request->meta_description
        ]);

        return Redirect()->route('content')->with('success','Content Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Static_Content  $static_Content
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Static_Content::find($id)->delete();
        return Redirect()->route('content')->with('success','Content Deleted Successfully');
    }
}
