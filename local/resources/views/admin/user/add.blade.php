@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h2 class="page-title" style="font-weight: bold;">Thêm tài khoản</h2>
			<form method="post" action="{{asset('admin/user/add')}}" enctype="multipart/form-data">
				<div class="row">
					@include('errors.note')
					<div class="col-md-6 col-12">
						<h4>Họ và tên</h4>
                        <input type="text" name="name"class="form-control" name="title" placeholder="Họ và tên">
                        <h4>Số điện Thoại</h4>
                        <input type="text" name="phone" class="form-control" name="title" placeholder="Số điện thoại">
                        <h4>Email</h4>
                        <input type="email" name="email" class="form-control" name="title" required placeholder="Email">
                        <h4>Mật khẩu</h4>
                        <input type="password" name="password" class="form-control" name="title" required placeholder="Mật khẩu">
                        <h4>Chức vụ</h4>
						<select class="form-control" name="level">
                            <option value="2">Quản trị viên</option>
                            <option value="1">Biên tập viên</option>
                        </select>
						
					</div>
					<div class="col-md-6 col-12">				
					</div>
				</div>

				<input type="submit" name="" value="Thêm mới" class="btn btn-success" style="margin-top: 30px;">
				{{csrf_field()}}
			</form>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>

@stop
@section('script')

