<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\District_Master;
use App\Models\State_Master;
use DB;
use Response;
use ZipArchive;
use File;
use Storage;

class Data2017Controller extends Controller
{
    public function state()
    {   
        DB::table('state_data_2017')->truncate();
        $state_data = State_Master::select('state_name','udise_state_code')->get();

        foreach($state_data as $key){
            $key->file_name = str_replace('__', '_', str_replace(' ', '_',preg_replace('/[^a-zA-Z0-9 ]/s','',strtolower($key->state_name)))).".pdf";
            
            DB::table('state_data_2017')->insert([
                'state_id'=>$key->udise_state_code,
                'state_name'=>$key->state_name,
                'year'=>"2017",
                'file_name'=>$key->file_name,
            ]);
        }

        return "State Data for 2017 Table Created.";
        
    }

    public function district()
    {   
        DB::table('district_data_2017')->truncate();
        $district_data = District_Master::select('district_name','state_name','udise_district_code')->get();

        foreach($district_data as $key){
            $key->file_name = strtolower($key->district_name);
            $key->state_name = str_replace('__', '_', str_replace(' ', '_',preg_replace('/[^a-zA-Z0-9 ]/s','',strtolower($key->state_name))));

            DB::table('district_data_2017')->insert([
                'district_id'=>$key->udise_district_code,
                'district_name'=>$key->district_name,
                'state_name'=>$key->state_name,
                'year'=>"2017",
                'file_name'=>$key->file_name,
            ]);
        }

        return "District Data for 2017 Table Created.";
    }

    public function index()
    {
        return view('front.download-2017.index');
    }
    
    //start State Wise Data 2017
    public function stateDownloadView()
    {   
        $state_data = DB::table('state_data_2017')->get();
        return view('front.download-2017.state',compact('state_data'));
    }

    public function getDownload($id)
    {   
        $file= public_path(). "/assets/front/state2017/all-grade/".$id;

        return Response::download($file, $id);
    }

    public function getDownloadhi($id)
    {   
        $id = preg_replace('/\\.[^.\\s]{3,4}$/', '', $id);
        $file_name = $id."-hi.pdf";
        
        $file= public_path(). "/assets/front/state2017/all-grade/".$file_name;
        
        return Response::download($file, $file_name);
    }

    public function getDownload10($id)
    {   
        $file= public_path(). "/assets/front/state2017/grade-10/".$id;

        return Response::download($file, $id);
    }
    //end state wise data 2017

    //start district wise data 2017

    public function districtDownloadView()
    {   
        $district_data = DB::table('district_data_2017')->get();
        return view('front.download-2017.district',compact('district_data'));
    }

    public function districtDownload(Request $request, $district)
    {   
        $data = explode('/', $request->name);
        $state_name = $data[0];
        $file_name = $data[1];
        
        if($file_name == "all3"){
            
            $file1 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[2].".pdf";
            $file2 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[3].".pdf";
            $file3 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[4].".pdf";

            $files = array($file1, $file2, $file3);
            $zipname = $district."_grade-3".".zip";
            $zip = new ZipArchive;
            $zip->open($zipname, ZipArchive::CREATE);
            foreach ($files as $file => $value) {
            $relativeNameInZipFile = basename($value);
            $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();

            return response()->download(public_path($zipname))->deleteFileAfterSend(true);

        }

        if($file_name == "all5"){
            $file1 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[2].".pdf";
            $file2 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[3].".pdf";
            $file3 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[4].".pdf";

            $files = array($file1, $file2, $file3);
            $zipname = $district."_grade-5".".zip";
            $zip = new ZipArchive;
            $zip->open($zipname, ZipArchive::CREATE);
            foreach ($files as $file => $value) {
            $relativeNameInZipFile = basename($value);
            $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();

            return response()->download(public_path($zipname))->deleteFileAfterSend(true);
        }

        if($file_name == "all8"){
            $file1 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[2].".pdf";
            $file2 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[3].".pdf";
            $file3 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[4].".pdf";
            $file4 = public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$data[5].".pdf";
            
            $files = array($file1, $file2, $file3, $file5);
            $zipname = $district."_grade-8".".zip";
            $zip = new ZipArchive;
            $zip->open($zipname, ZipArchive::CREATE);
            foreach ($files as $file => $value) {
            $relativeNameInZipFile = basename($value);
            $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();

            return response()->download(public_path($zipname))->deleteFileAfterSend(true);

        }

        if($file_name == "all")
        {
            $zip = new ZipArchive;
   
            $fileName = $district."all_grade".".zip";
    
            if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
            {
                $files = File::files(public_path(). "/assets/front/district2017/".$state_name."/".$district);
    
                foreach ($files as $key => $value) {
                    $relativeNameInZipFile = basename($value);
                    $zip->addFile($value, $relativeNameInZipFile);
                }
                
                $zip->close();
            }
        
            return response()->download(public_path($fileName))->deleteFileAfterSend(true);
        }

        else{
            $filename = $file_name.".pdf";
            $file= public_path(). "/assets/front/district2017/".$state_name."/".$district."/".$file_name.".pdf";
        
            return Response::download($file, $filename)->deleteFileAfterSend(true);
        }
        
    }

    //end district wise data 2017

}
