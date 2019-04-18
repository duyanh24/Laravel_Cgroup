<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Intro;
use App\Models\Staff;
class IntroduceController extends Controller
{
    public function getIntroduce(){
        $data['banner'] = Banner::where('type',3)->first();
        $data['company'] = Intro::orderBy('intro_id','desc')->limit(6)->get();
        $data['company_first'] = Intro::orderBy('intro_id','desc')->limit(1)->first();
        $data['staff'] = Staff::orderBy('staff_id','desc')->get();
        return view('guest.introduce',$data);
    }
}
