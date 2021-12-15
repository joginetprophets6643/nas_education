<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Http\Requests\StoreUploadRequest;
use App\Http\Requests\UpdateUploadRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportSQs;
use App\Imports\ImportTQ;
use App\Imports\ImportPQs;
use App\Imports\ImportAt10s;
use App\Imports\ImportAt5s;
use App\Imports\ImportAt3s;
use App\Imports\ImportAt8s;
use Validator;
use App\Models\PQs;
use App\Models\At3s;
use App\Models\At3_key;
use App\Models\At10s;
use App\Models\At10s_key;
use App\Models\At8s;
use App\Models\At8s_key;
use App\Models\At5s;
use App\Models\At5_key;
use App\Models\DummyPQs;
use App\Models\Ans_key;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_At3()
    {
       
       $data = At3s::get();
       foreach ($data as $key => $value) {
          $at3_key = new At3_key;
           $at3_key->sq_scan    = $value->sq_scan;
           $at3_key->at3_bar    = $value->at3_bar;
           $at3_key->at3_udise  = $value->at3_udise;
           $at3_key->at3_set    = $value->at3_set;
           $at3_key->at3_grade  = $value->at3_grade;
           $at3_key->at3_sect   = $value->at3_sect;
           $at3_key->at3_nasid  = $value->at3_nasid;
           $at3_key->at3_socgrp = $value->at3_socgrp;
           $at3_key->at3_cwd   = $value->at3_cwd;
           $at3_key->at3_q01   = rand(1,4);
           $at3_key->at3_q02   = rand(1,4);
           $at3_key->at3_q03   = rand(1,4);
           $at3_key->at3_q04   = rand(1,4);
           $at3_key->at3_q05   = rand(1,4);
           $at3_key->at3_q06   = rand(1,4);
           $at3_key->at3_q07   = rand(1,4);
           $at3_key->at3_q08   = rand(1,4);
           $at3_key->at3_q09   = rand(1,4);
           $at3_key->at3_q10   = rand(1,4);
           $at3_key->at3_q11   = rand(1,4);
           $at3_key->at3_q12   = rand(1,4);
           $at3_key->at3_q13   = rand(1,4);
           $at3_key->at3_q14   = rand(1,4);
           $at3_key->at3_q15   = rand(1,4);
           $at3_key->at3_q16   = rand(1,4);
           $at3_key->at3_q17   = rand(1,4);
           $at3_key->at3_q18   = rand(1,4);
           $at3_key->at3_q19   = rand(1,4);
           $at3_key->at3_q20   = rand(1,4);
           $at3_key->at3_q21   = rand(1,4);
           $at3_key->at3_q22   = rand(1,4);
           $at3_key->at3_q23   = rand(1,4);
           $at3_key->at3_q24   = rand(1,4);
           $at3_key->at3_q25   = rand(1,4);
           $at3_key->at3_q26   = rand(1,4);
           $at3_key->at3_q27   = rand(1,4);
           $at3_key->at3_q28   = rand(1,4);
           $at3_key->at3_q29   = rand(1,4);
           $at3_key->at3_q30   = rand(1,4);
           $at3_key->at3_q31   = rand(1,4);
           $at3_key->at3_q32   = rand(1,4);
           $at3_key->at3_q33   = rand(1,4);
           $at3_key->at3_q34   = rand(1,4);
           $at3_key->at3_q35   = rand(1,4);
           $at3_key->at3_q36   = rand(1,4);
           $at3_key->at3_q37   = rand(1,4);
           $at3_key->at3_q38   = rand(1,4);
           $at3_key->at3_q39   = rand(1,4);
           $at3_key->at3_q40   = rand(1,4);
           $at3_key->at3_q41   = rand(1,4);
           $at3_key->at3_q42   = rand(1,4);
           $at3_key->at3_q43   = rand(1,4);
           $at3_key->at3_q44   = rand(1,4);
           $at3_key->at3_q45   = rand(1,4);
           $at3_key->at3_q46   = rand(1,4);
           $at3_key->at3_q47   = rand(1,4);
           $at3_key->save();
       }
       


    }

    public function index()
    {
       
       $data = At5s::get();
       foreach ($data as $key => $value) {
           $at5_key = new At5_key;
           $at5_key->sq_scan    = $value->sq_scan;
           $at5_key->at5_bar    = $value->at5_bar;
           $at5_key->at5_udise  = $value->at5_udise;
           $at5_key->at5_set    = $value->at5_set;
           $at5_key->at5_grade  = $value->at5_grade;
           $at5_key->at5_sect   = $value->at5_sect;
           $at5_key->at5_nasid  = $value->at5_nasid;
           $at5_key->at5_socgrp = $value->at5_socgrp;
           $at5_key->at5_cwd   = $value->at5_cwd;
           $at5_key->at5_q01   = rand(1,4);
           $at5_key->at5_q02   = rand(1,4);
           $at5_key->at5_q03   = rand(1,4);
           $at5_key->at5_q04   = rand(1,4);
           $at5_key->at5_q05   = rand(1,4);
           $at5_key->at5_q06   = rand(1,4);
           $at5_key->at5_q07   = rand(1,4);
           $at5_key->at5_q08   = rand(1,4);
           $at5_key->at5_q09   = rand(1,4);
           $at5_key->at5_q10   = rand(1,4);
           $at5_key->at5_q11   = rand(1,4);
           $at5_key->at5_q12   = rand(1,4);
           $at5_key->at5_q13   = rand(1,4);
           $at5_key->at5_q14   = rand(1,4);
           $at5_key->at5_q15   = rand(1,4);
           $at5_key->at5_q16   = rand(1,4);
           $at5_key->at5_q17   = rand(1,4);
           $at5_key->at5_q18   = rand(1,4);
           $at5_key->at5_q19   = rand(1,4);
           $at5_key->at5_q20   = rand(1,4);
           $at5_key->at5_q21   = rand(1,4);
           $at5_key->at5_q22   = rand(1,4);
           $at5_key->at5_q23   = rand(1,4);
           $at5_key->at5_q24   = rand(1,4);
           $at5_key->at5_q25   = rand(1,4);
           $at5_key->at5_q26   = rand(1,4);
           $at5_key->at5_q27   = rand(1,4);
           $at5_key->at5_q28   = rand(1,4);
           $at5_key->at5_q29   = rand(1,4);
           $at5_key->at5_q30   = rand(1,4);
           $at5_key->at5_q31   = rand(1,4);
           $at5_key->at5_q32   = rand(1,4);
           $at5_key->at5_q33   = rand(1,4);
           $at5_key->at5_q34   = rand(1,4);
           $at5_key->at5_q35   = rand(1,4);
           $at5_key->at5_q36   = rand(1,4);
           $at5_key->at5_q37   = rand(1,4);
           $at5_key->at5_q38   = rand(1,4);
           $at5_key->at5_q39   = rand(1,4);
           $at5_key->at5_q40   = rand(1,4);
           $at5_key->at5_q41   = rand(1,4);
           $at5_key->at5_q42   = rand(1,4);
           $at5_key->at5_q43   = rand(1,4);
           $at5_key->at5_q44   = rand(1,4);
           $at5_key->at5_q45   = rand(1,4);
           $at5_key->at5_q46   = rand(1,4);
           $at5_key->at5_q47   = rand(1,4);
           $at5_key->at5_q48   = rand(1,4);
           $at5_key->at5_q50   = rand(1,4);
           $at5_key->at5_q51   = rand(1,4);
           $at5_key->at5_q52   = rand(1,4);
           $at5_key->at5_q53   = rand(1,4);
           $at5_key->save();
       }
       


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUploadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUploadRequest $request)
    {
      
        if($request->selected==1)
        {
            // SQ
            Excel::import(new ImportSQs, $request->file('file')->store('temp'));
        }
        if($request->selected==2)
        {
            // TQ
            Excel::import(new ImportTQ, $request->file('file')->store('temp'));
        }
        if($request->selected==3)
        {
            //PQ
            Excel::import(new ImportPQs, $request->file('file')->store('temp'));
        }
        if($request->selected==4)
        {
            // AT3
            Excel::import(new ImportAt3s, $request->file('file')->store('temp'));
        }
        if($request->selected==5)
        {
            // AT5
            Excel::import(new ImportAt5s, $request->file('file')->store('temp'));
        }
        if($request->selected==8)
        {
            // AT5
            Excel::import(new ImportAt8s, $request->file('file')->store('temp'));
        }

        if($request->selected==10)
        {
            // AT10
            Excel::import(new ImportAt10s, $request->file('file')->store('temp'));
        }


        dd('here');
        
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUploadRequest  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUploadRequest $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
