<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LogInController extends Controller
{
    public function getLogin(){
    	if(Auth::check()){
    	}
    	return view('admin.login');
    }
    public function postLogin(Request $request){

		$info = 
		[
			'email' => $request->email, 
			'password' =>$request->password
		];
		if( Auth::attempt($info, true) ) {
			if(Auth::check()){
				return redirect('admin');
			}
		} 
		else {
			return back()->with('error','Tài khoản hoặc mật khẩu không đúng!');
		}
	}
	public function LogOut(){
		Auth::logout();
		return redirect('admin');
	}
}
