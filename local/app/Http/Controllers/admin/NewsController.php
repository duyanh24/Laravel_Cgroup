<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use File;
class NewsController extends Controller
{
    public function getListNews(){
        $data['news'] = News::orderBy('news_id','desc')->get();
        return view('admin.news.list',$data);
    }

    // THÊM TIN TỨC
    public function getAddNews(){
        return view('admin.news.add');
    }
    public function postAddNews(Request $rq){
        $news = new News;
        $news->title = $rq->title;
        $news->content = $rq->content;
        $news->slug = str_slug($rq->title);
        if($rq->avatar == null){
            $filename = 'cgroup-backend.png';
        }
        else{
            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename);
        }          
        $news->avatar = $filename;
        $news->save();
        return redirect('admin/news/list');
    }

    //SỬA TIN TỨC
    public function getEditNews($id){
        $data['news'] = News::find($id);
        return view('admin.news.edit',$data);
    }
    public function postEditNews($id,Request $rq){
        $news = News::find($id);
        $news->title = $rq->title;
        $news->content = $rq->content;
        $news->slug = str_slug($rq->title);
        if(isset($rq->avatar)){

            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename); 
           
            if($news->avatar != 'cgroup-backend.png'){ 
                File::delete('local/storage/app/public/images/'.$news->avatar);
            } 
            $news->avatar = $filename;    
        }
        $news->save();
        return redirect('admin/news/list');
    }

    //XÓA TIN TỨC
    public function deleteNews($id){
        $news = News::find($id);
        if($news->avatar != 'cgroup-backend.png'){
            File::delete('local/storage/app/public/images/'.$news->avatar);
        }
        News::destroy($id);
        return back(); 
    }
}
