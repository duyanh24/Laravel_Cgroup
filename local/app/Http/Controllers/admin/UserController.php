<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class UserController extends Controller
{
    public function getListUser(){
        $data['user'] = User::OrderBy('level','desc')->get();
        return view('admin.user.list',$data);
    }

    //THÊM TÀI KHOẢN
    public function getAddUser(){
        return view('admin.user.add');
    }
    public function postAddUser(Request $rq){
        $check = User::where('email',$rq->email)->first();
        if($check != null){
            return back()->with('error','Email này đã được sử dụng!');
        }
        $user = new User;
        $user->name = $rq->name;
        $user->phone = $rq->phone;
        $user->email = $rq->email;
        $user->password = bcrypt($rq->password);
        $user->level = $rq->level;
    
        $user->save();
        return redirect('admin/user/list');
    }

    //SỬA TÀI KHOẢN
    public function getEditUser($id){
        $data['user'] = User::find($id);
        return view('admin.user.edit',$data);
    }
    public function postEditUser($id,Request $rq){
        $check = User::where('email',$rq->email)->first();
        $user = User::find($id);
        if($check != null && $check->email != $user->email){
            return back()->with('error','Email này đã được sử dụng!');
        }
        $user->name = $rq->name;
        $user->phone = $rq->phone;
        $user->email = $rq->email;
        if(isset($rq->password)){
            $user->password = bcrypt($rq->password);
        }
        $user->level = $rq->level;
        $user->save();
        return redirect('admin/user/list');
    }

    //XÓA TÀI KHOẢN
    public function deleteUser($id){
        User::destroy($id);
        return back();
    }
}
