@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h2 class="page-title" style="font-weight: bold;">Cài đặt</h2>
			<form method="post" action="{{asset('admin/setting')}}" enctype="multipart/form-data">
				<div class="row">		
                    <h4>Email</h4>
                    <input type="text" class="form-control" name="email" value="{{$setting->email}}">
                    <h4>Hotline</h4>
                    <input type="text" class="form-control" name="hotline" value="{{$setting->hotline}}">
                    <h4>Link Telegram</h4>
                    <input type="text" class="form-control" name="telegram" value="{{$setting->telegram}}">
                    <h4>Link Google</h4>
                    <input type="text" class="form-control" name="google" value="{{$setting->google}}">
                    <h4>Link Facebook<h4>
                    <input type="text" class="form-control" name="facebook" value="{{$setting->facebook}}">    
                    <h4>Bản đồ</h4>
                    <div style="display:flex;">
                         <div style="flex:1; margin-right:20px;">
                              <span style="font-style:italic;">Kinh độ</span><input type="text" class="form-control" name="kinh_do" value="{{$setting->kinh_do}}">
                         </div>
                         <div style="flex:1;">
                              <span style="font-style:italic;">Vĩ độ</span><input type="text" class="form-control" name="vi_do" value="{{$setting->vi_do}}">
                         </div>
                    </div>
                    <h4>Copyright</h4>
                    <input type="text" class="form-control" name="copyright" value="{{$setting->copyright}}">
                    <h4>Điện thoại Hồ Chí Minh</h4>
                    <input type="text" class="form-control" name="phone_hcm" value="{{$setting->phone_hcm}}">
                    <h4>Địa chỉ Hồ Chí Minh</h4>
                    <input type="text" class="form-control" name="address_hcm" value="{{$setting->address_hcm}}">
                    <h4>Điện thoại Hà Nội</h4>
                    <input type="text" class="form-control" name="phone_hn" value="{{$setting->phone_hn}}">
                    <h4>Địa chỉ Hà Nội</h4>
                    <input type="text" class="form-control" name="address_hn" value="{{$setting->address_hn}}">
                    
				</div>

				<input type="submit" name="" value="Chỉnh sửa" class="btn btn-success" style="margin-top: 30px;">
				{{csrf_field()}}
			</form>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>

@stop

