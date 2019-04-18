<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Intro;
use App\Models\News;
class HomeController extends Controller
{
    public function getHome(){
        $data['banner1'] = Banner::where('type',1)->first();
        $data['banner2'] = Banner::where('type',2)->first();
        $data['company'] = Intro::orderBy('intro_id','desc')->limit(6)->get();
        $data['news'] = News::orderBy('news_id','desc')->limit(3)->get();
        return view('guest.home',$data);
    }
}
