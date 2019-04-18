@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Danh sách CV</h3>
			<table class="table table-bordered" data-toggle="table" data-search="true">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên</th>
						<th>Vị trí</th>
						<th>Số điện thoại</th>
                        <th>Ngày gửi</th>
                        <th>Chi tiết</th>
                        <th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cv as $key=>$item)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$item->name}}</td>
                        <td>{{$item->position}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->created_at}}</td>
						<td>
							<a href="{{asset('admin/cv/show/'.$item->cv_id)}}" class="btn btn-info">Chi tiết</a>
						</td>
						<td>
							<a onclick="return Xoa();" href="{{asset('admin/cv/delete/'.$item->cv_id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a>
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
