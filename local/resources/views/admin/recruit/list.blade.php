@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Quản lý tuyển dụng</h3>
			<a href="{{asset('admin/recruit/add')}}" class="btn btn-success">Thêm tuyển dụng</a>

			<table class="table table-bordered" data-toggle="table" data-search="true">
				<thead>
					<tr>
                        <th>Tiêu đề</th>
						<th>Ảnh đại diện</th>
                        <th>Hình thức</th>
                        <th>Lương</th>
						<th>Hạn nộp</th>
						<th>Chi tiết</th>
						<th>xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($recruit as $item)
					<tr>
                        <td>{{$item->title}}</td>
						<td>
							<img src="../images/{{$item->avatar}}" width="170px" height="120px" style="border-radius: 5px;">
						</td>
                        <td>{{$item->hinh_thuc}}</td>
                        <td>{{$item->salary}}</td>
                        <td>{{$item->deadline}}</td>
						
						<td>
							<a href="{{asset('admin/recruit/edit/'.$item->recruit_id)}}" class="btn btn-info">Chi tiết</a>
						</td>
						<td>
							<a onclick="return Xoa();" href="{{asset('admin/recruit/delete/'.$item->recruit_id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a>
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
