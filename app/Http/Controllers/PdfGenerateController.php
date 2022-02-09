<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use mikehaertl\wkhtmlto\Pdf;
use File;
use App\Models\District_Master;

class PdfGenerateController extends Controller
{
    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districtData = District_Master::select('id','state_name','district_name','udise_district_code','udise_state_code','is_active','total_district_area','total_population','rural_population','urban_population','density_of_population','literacy_rate','child_sex_ratio','no_of_schools','state_govt_schools','govt_aided_schools','central_govt_schools','private_unaided_reco_schools','teacher_state_govt_schools','teacher_govt_aided_schools','teacher_central_govt_schools','teacher_private_unaided_reco_schools')
                            ->with(['DistrictParticipation'=>function($participation){
                                $participation->select('id','state_id','district_id','grade','total_school','total_student','total_teacher','rural_location','urban_location','govt_school','govt_aided_school','private_school','central_govt_school','sc_social_group','obc_social_group','st_social_group','general_social_group','male_gender','female_gender');
                                $participation->orderBy('grade','asc');
                            }])
                            ->whereIn('udise_district_code',['710','721','715'])
                            ->get();
        // dd($districtData);
        if(count($districtData)>0)
        {
            foreach($districtData as $districtVal)
            {
                $districtParticipationData = $districtVal['DistrictParticipation'];
                return view('pdf.districtpdf',compact('districtVal','districtParticipationData'));
            }
        }        
    }
   
    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function dwn()
    {
        $districtData = District_Master::select('id','state_name','district_name','udise_district_code','udise_state_code','is_active','total_district_area','total_population','rural_population','urban_population','density_of_population','literacy_rate','child_sex_ratio','no_of_schools','state_govt_schools','govt_aided_schools','central_govt_schools','private_unaided_reco_schools','teacher_state_govt_schools','teacher_govt_aided_schools','teacher_central_govt_schools','teacher_private_unaided_reco_schools')
                            ->with(['DistrictParticipation'=>function($participation){
                                $participation->select('id','state_id','district_id','grade','total_school','total_student','total_teacher','rural_location','urban_location','govt_school','govt_aided_school','private_school','central_govt_school','sc_social_group','obc_social_group','st_social_group','general_social_group','male_gender','female_gender');
                                $participation->orderBy('grade','asc');
                            }])
                            ->whereIn('udise_district_code',['710'])
                            ->get();
        // dd($districtData);
                            //,'721','715'
        if(count($districtData)>0)
        {
            foreach($districtData as $districtVal)
            {
                $districtParticipationData = $districtVal['DistrictParticipation'];
                // dd($districtVal['DistrictParticipation']);
                $folderPath = public_path('nas_pdf/national/'.$districtVal->udise_state_code.'/'.$districtVal->udise_district_code.'/');

                if(File::isDirectory($folderPath)){
                    File::deleteDirectory($folderPath);
                }
                if(!File::isDirectory($folderPath)){
                    File::makeDirectory($folderPath, 0777, true, true);
                }

                // $t=time();
                $fileName='district-'.$districtVal->udise_district_code.'-'.$districtVal->udise_state_code;
                $file_path = $folderPath.''.$fileName.'-report.pdf';
                // if(File::exists($file_path)) File::delete($file_path);
                
                $render = view('pdf.districtpdf',compact('districtVal','districtParticipationData'))->render();
                $pdf = new Pdf;
                $pdf->addPage($render);
                $pdf->setOptions(['javascript-delay' => 5000,'page-size'=>'a2']);
                // ,'page-size'=>'a3'
                // Storage::put('public/pdf/report.pdf', $pdf->output());

                $pdf->saveAs($file_path);            
                // return response()->download($file_path);
            }
        }

        echo 'District Level Pdf generate successfully.';

    }
}



//   https://www.tutsmake.com/laravel-8-generate-pdf-with-graph-tutorial-example/