<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use File;
class StaffController extends Controller
{
    public function getListStaff(){
        $data['staff'] = Staff::orderBy('staff_id','desc')->get();
        return view('admin.staff.list',$data);
    }

    // THÊM NHÂN SỰ
    public function getAddStaff(){
        return view('admin.staff.add');
    }
    public function postAddStaff(Request $rq){
        $staff = new Staff;
        $staff->name = $rq->name;
        $staff->position = $rq->position;
        if($rq->avatar == null){
            $filename = 'cgroup-backend.png';
        }
        else{
            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename);
        }          
        $staff->avatar = $filename;
        $staff->save();
        return redirect('admin/staff/list');
    }

    //SỬA NHÂN SỰ
    public function getEditStaff($id){
        $data['staff'] = Staff::find($id);
        return view('admin.staff.edit',$data);
    }
    public function postEditStaff($id,Request $rq){
        $staff = Staff::find($id);
        $staff->name = $rq->name;
        $staff->position = $rq->position;

        if(isset($rq->avatar)){

            $filename = $rq->avatar->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->avatar->storeAs($path,$filename); 
           
            if($staff->avatar != 'cgroup-backend.png'){ 
                File::delete('local/storage/app/public/images/'.$staff->avatar);
            } 
            $staff->avatar = $filename;    
        }
        $staff->save();
        return redirect('admin/staff/list');
    }

    //XÓA NHÂN SỰ
    public function deleteStaff($id){
        $staff = Staff::find($id);
        if($staff->avatar != 'cgroup-backend.png'){
            File::delete('local/storage/app/public/images/'.$staff->avatar);
        }
        Staff::destroy($id);
        return back(); 
    }
}
