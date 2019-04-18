@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Banner</h3>
			<a href="{{asset('admin/banner/add')}}" class="btn btn-success">Thêm Banner</a>

			<table class="table table-bordered" data-toggle="table" data-search="true">
				<thead>
					<tr>
                        <th>Tiêu đề</th>
						<th>Ảnh đại diện</th>
                        <th>Loại</th>
						<th>Chi tiết</th>
						<th>xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($banner as $item)
					<tr>
                        <td>{{$item->title}}</td>
						<td>
							<img src="../images/{{$item->avatar}}" width="170px" height="120px" style="border-radius: 5px;">
						</td>
                        <td>
							@if($item->type == 1)
							Banner trang chủ 1
							@elseif($item->type == 2)
							Banner trang chủ 2
							@else
							Banner giới thiệu
							@endif
						</td>
						
						<td>
							<a href="{{asset('admin/banner/edit/'.$item->banner_id)}}" class="btn btn-info">Chi tiết</a>
						</td>
						<td>
							<a onclick="return Xoa();" href="{{asset('admin/banner/delete/'.$item->banner_id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a>
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
