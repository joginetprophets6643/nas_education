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
        //    $at3_key->at3_parent_bar    = $value->at3_parent_bar;
           $at3_key->at3_udise  = $value->at3_udise;
        //    $at3_key->state_id  = $value->state_id;
        //    $at3_key->district_id  = $value->district_id;
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
           if($key==3){
               exit;
           }
       }
        


    }

    public function index_5s()
    {   
       $data = At5s::get();
       foreach ($data as $key => $value) {
           $at5_key = new At5_key;
           $at5_key->sq_scan    = $value->sq_scan;
           $at5_key->at5_bar    = $value->at5_bar;
           $at5_key->at5_udise  = $value->at5_udise;
           $at5_key->at5_parent_bar    = $value->at5_parent_bar;
           $at5_key->state_id  = $value->state_id;
           $at5_key->district_id  = $value->district_id;
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
           $at5_key->at5_q49   = rand(1,4);
           $at5_key->at5_q50   = rand(1,4);
           $at5_key->at5_q51   = rand(1,4);
           $at5_key->at5_q52   = rand(1,4);
           $at5_key->at5_q53   = rand(1,4);
           $at5_key->save();
       }
    }

    public function index_8s()
    {
       $data = At8s::get();
       foreach ($data as $key => $value) {
          $at8_key = new At8s_key;
           $at8_key->sq_scan    = $value->sq_scan;
           $at8_key->at8_bar    = $value->at8_bar;
           $at8_key->at8_parent_bar    = $value->at8_parent_bar;
           $at8_key->at8_udise  = $value->at8_udise;
           $at8_key->state_id  = $value->state_id;
           $at8_key->district_id  = $value->district_id;
           $at8_key->at8_set    = $value->at8_set;
           $at8_key->at8_grade  = $value->at8_grade;
           $at8_key->at8_sect   = $value->at8_sect;
           $at8_key->at8_nasid  = $value->at8_nasid;
           $at8_key->at8_socgrp = $value->at8_socgrp;
           $at8_key->at8_cwd   = $value->at8_cwd;
           $at8_key->at8_q01   = rand(1,4);
           $at8_key->at8_q02   = rand(1,4);
           $at8_key->at8_q03   = rand(1,4);
           $at8_key->at8_q04   = rand(1,4);
           $at8_key->at8_q05   = rand(1,4);
           $at8_key->at8_q06   = rand(1,4);
           $at8_key->at8_q07   = rand(1,4);
           $at8_key->at8_q08   = rand(1,4);
           $at8_key->at8_q09   = rand(1,4);
           $at8_key->at8_q10   = rand(1,4);
           $at8_key->at8_q11   = rand(1,4);
           $at8_key->at8_q12   = rand(1,4);
           $at8_key->at8_q13   = rand(1,4);
           $at8_key->at8_q14   = rand(1,4);
           $at8_key->at8_q15   = rand(1,4);
           $at8_key->at8_q16   = rand(1,4);
           $at8_key->at8_q17   = rand(1,4);
           $at8_key->at8_q18   = rand(1,4);
           $at8_key->at8_q19   = rand(1,4);
           $at8_key->at8_q20   = rand(1,4);
           $at8_key->at8_q21   = rand(1,4);
           $at8_key->at8_q22   = rand(1,4);
           $at8_key->at8_q23   = rand(1,4);
           $at8_key->at8_q24   = rand(1,4);
           $at8_key->at8_q25   = rand(1,4);
           $at8_key->at8_q26   = rand(1,4);
           $at8_key->at8_q27   = rand(1,4);
           $at8_key->at8_q28   = rand(1,4);
           $at8_key->at8_q29   = rand(1,4);
           $at8_key->at8_q30   = rand(1,4);
           $at8_key->at8_q31   = rand(1,4);
           $at8_key->at8_q32   = rand(1,4);
           $at8_key->at8_q33   = rand(1,4);
           $at8_key->at8_q34   = rand(1,4);
           $at8_key->at8_q35   = rand(1,4);
           $at8_key->at8_q36   = rand(1,4);
           $at8_key->at8_q37   = rand(1,4);
           $at8_key->at8_q38   = rand(1,4);
           $at8_key->at8_q39   = rand(1,4);
           $at8_key->at8_q40   = rand(1,4);
           $at8_key->at8_q41   = rand(1,4);
           $at8_key->at8_q42   = rand(1,4);
           $at8_key->at8_q43   = rand(1,4);
           $at8_key->at8_q44   = rand(1,4);
           $at8_key->at8_q45   = rand(1,4);
           $at8_key->at8_q46   = rand(1,4);
           $at8_key->at8_q47   = rand(1,4);
           $at8_key->at8_q48   = rand(1,4);
           $at8_key->at8_q49   = rand(1,4);
           $at8_key->at8_q50   = rand(1,4);
           $at8_key->at8_q51   = rand(1,4);
           $at8_key->at8_q52   = rand(1,4);
           $at8_key->at8_q53   = rand(1,4);
           $at8_key->at8_q54   = rand(1,4);
           $at8_key->at8_q55   = rand(1,4);
           $at8_key->at8_q56   = rand(1,4);
           $at8_key->at8_q57   = rand(1,4);
           $at8_key->at8_q58   = rand(1,4);
           $at8_key->at8_q59   = rand(1,4);
           $at8_key->at8_q60   = rand(1,4);          
           $at8_key->save();
       }
       return 'Data Saved Successfully.';
    }

    public function index()
    {
       $data = At10s::get();
       foreach ($data as $key => $value) {
          $at10s_key = new At10s_key;
           $at10s_key->sq_scan    = $value->sq_scan;
           $at10s_key->at1_bar    = $value->at1_bar;
           $at10s_key->at1_parent_bar    = $value->at1_parent_bar;
           $at10s_key->at1_udise  = $value->at1_udise;
           $at10s_key->state_id  = $value->state_id;
           $at10s_key->district_id  = $value->district_id;
           $at10s_key->at1_set    = $value->at1_set;
           $at10s_key->at1_grade  = $value->at1_grade;
           $at10s_key->at1_sect   = $value->at1_sect;
           $at10s_key->at1_nasid  = $value->at1_nasid;
           $at10s_key->at1_socgrp = $value->at1_socgrp;
           $at10s_key->at1_cwd   = $value->at1_cwd;
           $at10s_key->at1_q01   = rand(1,4);
           $at10s_key->at1_q02   = rand(1,4);
           $at10s_key->at1_q03   = rand(1,4);
           $at10s_key->at1_q04   = rand(1,4);
           $at10s_key->at1_q05   = rand(1,4);
           $at10s_key->at1_q06   = rand(1,4);
           $at10s_key->at1_q07   = rand(1,4);
           $at10s_key->at1_q08   = rand(1,4);
           $at10s_key->at1_q09   = rand(1,4);
           $at10s_key->at1_q10   = rand(1,4);
           $at10s_key->at1_q11   = rand(1,4);
           $at10s_key->at1_q12   = rand(1,4);
           $at10s_key->at1_q13   = rand(1,4);
           $at10s_key->at1_q14   = rand(1,4);
           $at10s_key->at1_q15   = rand(1,4);
           $at10s_key->at1_q16   = rand(1,4);
           $at10s_key->at1_q17   = rand(1,4);
           $at10s_key->at1_q18   = rand(1,4);
           $at10s_key->at1_q19   = rand(1,4);
           $at10s_key->at1_q20   = rand(1,4);
           $at10s_key->at1_q21   = rand(1,4);
           $at10s_key->at1_q22   = rand(1,4);
           $at10s_key->at1_q23   = rand(1,4);
           $at10s_key->at1_q24   = rand(1,4);
           $at10s_key->at1_q25   = rand(1,4);
           $at10s_key->at1_q26   = rand(1,4);
           $at10s_key->at1_q27   = rand(1,4);
           $at10s_key->at1_q28   = rand(1,4);
           $at10s_key->at1_q29   = rand(1,4);
           $at10s_key->at1_q30   = rand(1,4);
           $at10s_key->at1_q31   = rand(1,4);
           $at10s_key->at1_q32   = rand(1,4);
           $at10s_key->at1_q33   = rand(1,4);
           $at10s_key->at1_q34   = rand(1,4);
           $at10s_key->at1_q35   = rand(1,4);
           $at10s_key->at1_q36   = rand(1,4);
           $at10s_key->at1_q37   = rand(1,4);
           $at10s_key->at1_q38   = rand(1,4);
           $at10s_key->at1_q39   = rand(1,4);
           $at10s_key->at1_q40   = rand(1,4);
           $at10s_key->at1_q41   = rand(1,4);
           $at10s_key->at1_q42   = rand(1,4);
           $at10s_key->at1_q43   = rand(1,4);
           $at10s_key->at1_q44   = rand(1,4);
           $at10s_key->at1_q45   = rand(1,4);
           $at10s_key->at1_q46   = rand(1,4);
           $at10s_key->at1_q47   = rand(1,4);
           $at10s_key->at1_q48   = rand(1,4);
           $at10s_key->at1_q49   = rand(1,4);
           $at10s_key->at1_q50   = rand(1,4);
           $at10s_key->at1_q51   = rand(1,4);
           $at10s_key->at1_q52   = rand(1,4);
           $at10s_key->at1_q53   = rand(1,4);
           $at10s_key->at1_q54   = rand(1,4);
           $at10s_key->at1_q55   = rand(1,4);
           $at10s_key->at1_q56   = rand(1,4);
           $at10s_key->at1_q57   = rand(1,4);
           $at10s_key->at1_q58   = rand(1,4);
           $at10s_key->at1_q59   = rand(1,4);
           $at10s_key->at1_q60   = rand(1,4);   
           $at10s_key->at1_q61   = rand(1,4);
           $at10s_key->at1_q62   = rand(1,4);
           $at10s_key->at1_q63   = rand(1,4);
           $at10s_key->at1_q64   = rand(1,4);
           $at10s_key->at1_q65   = rand(1,4);
           $at10s_key->at1_q66   = rand(1,4);
           $at10s_key->at1_q67   = rand(1,4);
           $at10s_key->at1_q68   = rand(1,4);
           $at10s_key->at1_q69   = rand(1,4);
           $at10s_key->at1_q70   = rand(1,4);                   
           $at10s_key->save();
       }
       
       return 'Data Saved Successfully.';

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
