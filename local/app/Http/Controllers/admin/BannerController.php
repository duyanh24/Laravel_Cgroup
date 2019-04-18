<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\banner;
use File;
class BannerController extends Controller
{
    public function getListBanner(){
        $data['banner'] = Banner::orderBy('banner_id','desc')->get();
        return view('admin.banner.list',$data);
    }

    // THÊM TIN TỨC
    public function getAddBanner(){
        return view('admin.banner.add');
    }
    public function postAddBanner(Request $rq){
        $banner = new Banner;
        $banner->title = $rq->title;
        $banner->type = $rq->type;
        $banner->description = $rq->description;

        if($rq->avatar == null){
            $filename = 'cgroup-backend.png';
        }
        else{
            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename);
        }          
        $banner->avatar = $filename;
        $banner->save();
        return redirect('admin/banner/list');
    }

    //SỬA TIN TỨC
    public function getEditBanner($id){
        $data['banner'] = Banner::find($id);
        return view('admin.banner.edit',$data);
    }
    public function postEditBanner($id,Request $rq){
        $banner = Banner::find($id);
        $banner->title = $rq->title;
        $banner->type = $rq->type;
        $banner->description = $rq->description;

        if(isset($rq->avatar)){

            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename); 
           
            if($banner->avatar != 'cgroup-backend.png'){ 
                File::delete('local/storage/app/public/images/'.$banner->avatar);
            } 
            $banner->avatar = $filename;    
        }
        $banner->save();
        return redirect('admin/banner/list');
    }

    //XÓA TIN TỨC
    public function deleteBanner($id){
        $banner = Banner::find($id);
        if($banner->avatar != 'cgroup-backend.png'){
            File::delete('local/storage/app/public/images/'.$banner->avatar);
        }
        Banner::destroy($id);
        return back(); 
    }
}
