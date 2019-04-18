@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Quản lý tài khoản</h3>
			<a href="{{asset('admin/user/add')}}" class="btn btn-success">Thêm người dùng</a>

			<table class="table table-bordered" data-toggle="table" data-search="true">
				<thead>
					<tr>
						<th>Email</th>
						<th>Chức vụ</th>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
						<th>Sửa</th>
						<th>xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($user as $item)
					<tr>
                        <td>{{$item->email}}</td>
						<td>
                            @if($item->level == 1)
                            Biên tập viên
                            @else
                            Quản trị viên
                            @endif
                        </td>
						<td>{{$item->name}}</td>
						<td>{{$item->phone}}</td>
						<td>
							<a href="{{asset('admin/user/edit/'.$item->id)}}" class="btn btn-info">Sửa</a>
						</td>
						<td>
							<a onclick="return Xoa();" href="{{asset('admin/user/delete/'.$item->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a>
						</td>
					</tr>
        			@endforeach

				</tbody>
			</table>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@stop
