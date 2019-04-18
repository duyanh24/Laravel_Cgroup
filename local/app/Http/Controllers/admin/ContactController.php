<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\RegisterEmail;
class ContactController extends Controller
{
    // LIÊN HỆ
    public function getListContact(){
        $data['contact'] = Contact::orderBy('contact_id','desc')->get();
        return view('admin.contact.list',$data);
    }

    //XÓA LIÊN HỆ
    public function deleteContact($id){
        
        Contact::destroy($id);
        return back(); 
    }

    // ĐĂNG KÍ NHẬN EMAIL
    public function getListRegister(){
        $data['register'] = RegisterEmail::orderBy('id','desc')->get();
        return view('admin.register.list',$data);
    }
    //XÓA EMAIL
    public function deleteRegister($id){
        RegisterEmail::destroy($id);
        return back(); 
    }
}
