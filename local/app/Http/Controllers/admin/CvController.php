<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cv;
use File;
class CvController extends Controller
{
    public function getListCv(){
        $data['cv'] = Cv::orderBy('cv_id','desc')->get();
        return view('admin.cv.list',$data);
    }
    
    public function getShowCv($id){
        $data['cv'] = Cv::find($id);
        return view('admin.cv.show',$data); 
    }

    public function deleteCv($id){
        $cv = Cv::find($id);
        File::delete('local/storage/app/public/cv/'.$cv->file_cv);
        Cv::destroy($id);
        return back(); 
    }
}
