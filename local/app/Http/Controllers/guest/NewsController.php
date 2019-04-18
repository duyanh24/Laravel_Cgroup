<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
class NewsController extends Controller
{
    public function getNews(){
        $data['news'] = News::orderBy('news_id','desc')->paginate(9);
        return view('guest.news', $data);
    }

    // CHI TIẾT TIN TỨC
    public function getDetail($slug){
        $data['news'] = News::where('slug',$slug)->first();
        $data['list_news'] = News::orderBy('news_id','desc')->limit(5)->get();
        return view('guest.news-detail',$data);
    }
}
