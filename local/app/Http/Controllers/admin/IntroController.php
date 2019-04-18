<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Intro;
use File;
class IntroController extends Controller
{
    public function getListIntro(){
        $data['intro'] = Intro::orderBy('intro_id','desc')->get();
        return view('admin.intro.list',$data);
    }

    // THÊM CTY
    public function getAddIntro(){
        return view('admin.intro.add');
    }
    public function postAddIntro(Request $rq){
        $intro = new Intro;
        $intro->title = $rq->title;
        $intro->description = $rq->description;
        $intro->link = $rq->link;
        if($rq->avatar == null){
            $filename = 'cgroup-backend.png';
        }
        else{
            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename);
        }          
        $intro->avatar = $filename;

        if($rq->logo == null){
            $filename2 = 'cgroup-backend.png';
        }
        else{
            $filename2 = $rq->logo->getClientOriginalName();
            $path = "public/images";
            $filename2 = time().$filename2;
            $rq->logo->storeAs($path,$filename2);
        }          
        $intro->logo = $filename2;


        $intro->save();
        return redirect('admin/intro/list');
    }

    //SỬA CTY
    public function getEditIntro($id){
        $data['intro'] = Intro::find($id);
        return view('admin.intro.edit',$data);
    }
    public function postEditIntro($id,Request $rq){
        $intro = Intro::find($id);
        $intro->title = $rq->title;
        $intro->link = $rq->link;
        $intro->description = $rq->description;

        if(isset($rq->avatar)){

            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename); 
           
            if($intro->avatar != 'cgroup-backend.png'){ 
                File::delete('local/storage/app/public/images/'.$intro->avatar);
            } 
            $intro->avatar = $filename;    
        }

        if(isset($rq->logo)){

            $filename2 = $rq->logo->getClientOriginalName();
            $path = "public/images";
            $filename2 = time().$filename2;
            $rq->logo->storeAs($path,$filename2); 
           
            if($intro->logo != 'cgroup-backend.png'){ 
                File::delete('local/storage/app/public/images/'.$intro->logo);
            } 
            $intro->logo = $filename2;    
        }

        $intro->save();
        return redirect('admin/intro/list');
    }

    //XÓA CTY
    public function deleteIntro($id){
        $intro = Intro::find($id);
        if($intro->avatar != 'cgroup-backend.png'){
            File::delete('local/storage/app/public/images/'.$intro->avatar);
        }
        if($intro->logo != 'cgroup-backend.png'){
            File::delete('local/storage/app/public/images/'.$intro->logo);
        }
        Intro::destroy($id);
        return back(); 
    }
}
