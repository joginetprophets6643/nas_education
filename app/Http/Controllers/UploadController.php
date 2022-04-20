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
use Illuminate\Http\Request;
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
    public function genrate_key()
    {
       
        $grade3 = [31,32,33,34];
        $grade5 = [51,52,53,54];
        $grade8 = [81,82,83,84];
        $grade10 = [101,102,103];

       foreach ($grade3 as $key => $value) {
           
          $at3_key = new At3_key;
           $at3_key->at3_set   =  $value;
           $at3_key->at3_grade = 3;
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

       foreach ($grade5 as $key => $value) {
        $at5_key = new At5_key;
        $at5_key->at5_set   = $value;
        $at5_key->at5_grade = 5;
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

    foreach ($grade8 as $key => $value) {
        $at8_key = new At8s_key;
         $at8_key->at8_set   = $value;
         $at8_key->at8_grade = 8;
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

     foreach ($grade10 as $key => $value) {
        $at10s_key = new At10s_key;
         $at10s_key->at1_set   = $value;
         $at10s_key->at1_grade = 10;
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

    // public function index_5s()
    // {   
    //    $data = At5s::get();
       
    // }

    // public function index_8s()
    // {
    //    $data = At8s::get();
       
    //    return 'Data Saved Successfully.';
    // }

    // public function index()
    // {
    //    $data = At10s::get();
       

    // }


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
        return back()->with('success','Excel File Import Successfully');

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

    public function district(Request $request){
        
        if($request->file('final'))
        {
            $files=$request->file('final');
            $name=[];
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $csv=public_path($filename);
                if($filename=="G03y21_DistrictReports.csv" || $filename=="G05y21_DistrictReports.csv" || $filename=="G08y21_DistrictReports.csv" || $filename=="G10y21_DistrictReports.csv" || $filename=="G03y21_StateReports.csv" || $filename=="G05y21_StateReports.csv" || $filename=="G08y21_StateReports.csv" || $filename=="G10y21_StateReports.csv"){
                    $file->move(public_path(''),$filename);
                }
                else{
                    $name[]=$filename;
                }
            }
            if(count($name)>0){
                dd(implode(",",$name)." Not Allowed");
            }
            else{
                dd("Uploaded successfully");
            }

        }
        else{
            return redirect('/final-upload-view');
        }
        
    }
}
