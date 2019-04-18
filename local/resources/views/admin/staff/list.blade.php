@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Quản lý nhân sự</h3>
			<a href="{{asset('admin/staff/add')}}" class="btn btn-success">Thêm nhân sự</a>

			<table class="table table-bordered" data-toggle="table" data-search="true">
				<thead>
					<tr>
                        <th>Họ và tên</th>
                        <th>Chức vụ</th>
						<th>Ảnh đại diện</th>
						
						<th>Sửa</th>
						<th>xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($staff as $item)
					<tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->position}}</td>
						<td>
							<img src="../images/{{$item->avatar}}" width="170px" height="120px" style="border-radius: 5px;">
						</td>
						
						<td>
							<a href="{{asset('admin/staff/edit/'.$item->staff_id)}}" class="btn btn-info">Chi tiết</a>
						</td>
						<td>
							<a onclick="return Xoa();" href="{{asset('admin/staff/delete/'.$item->staff_id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a>
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

