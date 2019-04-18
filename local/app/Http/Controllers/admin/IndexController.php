<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function getIndex(){
        $data['date'] = time();
        return view('admin.index',$data);
    }
}
