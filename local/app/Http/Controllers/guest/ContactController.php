<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\RegisterEmail;
class ContactController extends Controller
{
    //LIÊN HỆ
    public function getContact(){   
        return view('guest.contact');
    }

    public function postContact(Request $rq){
        $contact = new Contact;
        $contact->name = $rq->name;
        $contact->phone = $rq->phone;
        $contact->email = $rq->email;
        $contact->content = $rq->content;
        $contact->save();
        return back();
    }

    // ĐĂNG KÍ NHẬN EMAIL
    public function postRegisterEmail(Request $rq){
        $regis = new RegisterEmail;
        $regis->email = $rq->email;
        $regis->save();
        return back();
    }

}
