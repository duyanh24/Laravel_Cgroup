<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Recruit;
use File;
class RecruitController extends Controller
{
    public function getListRecruit(){
        $data['recruit'] = Recruit::orderBy('recruit_id','desc')->get();
        return view('admin.recruit.list',$data);
    }

    // THÊM TUYỂN DỤNG
    public function getAddRecruit(){
        return view('admin.recruit.add');
    }
    public function postAddRecruit(Request $rq){
        $recruit = new Recruit;
        $recruit->title = $rq->title;
        $recruit->hinh_thuc = $rq->hinh_thuc;
        $recruit->address = $rq->address;
        $recruit->position = $rq->position;
        $recruit->salary = $rq->salary;
        $recruit->deadline = $rq->deadline;
        $recruit->content = $rq->content;
        $recruit->slug = str_slug($rq->title);
        if($rq->avatar == null){
            $filename = 'cgroup-backend.png';
        }
        else{
            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename);
        }          
        $recruit->avatar = $filename;
        $recruit->save();
        return redirect('admin/recruit/list');
    }

    //SỬA TUYỂN DỤNG
    public function getEditRecruit($id){
        $data['recruit'] = Recruit::find($id);
        return view('admin.recruit.edit',$data);
    }
    public function postEditRecruit($id,Request $rq){
        $recruit = Recruit::find($id);
        $recruit->title = $rq->title;
        $recruit->hinh_thuc = $rq->hinh_thuc;
        $recruit->address = $rq->address;
        $recruit->position = $rq->position;
        $recruit->salary = $rq->salary;
        $recruit->deadline = $rq->deadline;
        $recruit->content = $rq->content;
        $recruit->slug = str_slug($rq->title);
        
        if(isset($rq->avatar)){

            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename); 
           
            if($recruit->avatar != 'cgroup-backend.png'){ 
                File::delete('local/storage/app/public/images/'.$recruit->avatar);
            } 
            $recruit->avatar = $filename;    
        }
        $recruit->save();
        return redirect('admin/recruit/list');
    }

    //XÓA TUYỂN DỤNG
    public function deleteRecruit($id){
        $recruit = Recruit::find($id);
        if($recruit->avatar != 'cgroup-backend.png'){
            File::delete('local/storage/app/public/images/'.$recruit->avatar);
        }
        Recruit::destroy($id);
        return back(); 
    }
}
