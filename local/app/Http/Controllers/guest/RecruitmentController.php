<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Recruit;
use App\Models\Cv;
class RecruitmentController extends Controller
{
    public function getRecruitment(){
        $data['recruit'] = Recruit::orderBy('recruit_id','desc')->paginate(9);
        return view('guest.recruitment',$data);
    }

    //XEM CHI TIẾT
    public function getDetail($slug){
        $data['recruit'] = Recruit::where('slug',$slug)->first();
        $data['list_recruit'] = Recruit::orderBy('recruit_id','desc')->limit(4)->get();
        return view('guest.recruit-detail',$data);
    }

    //post cv
    public function getFormCv(){
        return view('guest.postcv');
    }

    public function postFormCv(Request $rq){
        $cv = new Cv;
        $cv->name = $rq->name;
        $cv->phone = $rq->phone;
        $cv->email = $rq->email;
        $cv->position = $rq->position;
        $cv->introduce = $rq->introduce;
        $cv->phone = $rq->phone;

        $filename = $rq->file_cv->getClientOriginalName();
        $path = "public/cv";
        $filename = time().$filename;
        $rq->file_cv->storeAs($path,$filename); 
        $cv->file_cv = $filename;    

        $cv->save();
        return back()->with('error','Gửi cv thành công !');;
    }
}
