<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
class SettingController extends Controller
{
    public function getSetting(){
        $data['setting'] = Setting::limit(1)->first();
        return view('admin.setting.setting',$data);
    }
    public function postSetting(Request $rq){
        $setting = Setting::limit(1)->first();
        $setting->email = $rq->email;
        $setting->hotline = $rq->hotline;
        $setting->telegram = $rq->telegram;
        $setting->google = $rq->google;
        $setting->facebook = $rq->facebook;
        $setting->kinh_do = $rq->kinh_do;
        $setting->vi_do = $rq->vi_do;
        $setting->copyright = $rq->copyright;
        $setting->phone_hcm = $rq->phone_hcm;
        $setting->phone_hn = $rq->phone_hn;
        $setting->address_hcm = $rq->address_hcm;
        $setting->address_hn = $rq->address_hn;
        $setting->save();
        return redirect('admin/setting');
    }
}
