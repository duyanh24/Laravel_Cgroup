@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Quản lý tin tức</h3>
			<a href="{{asset('admin/news/add')}}" class="btn btn-success">Thêm tin tức</a>

			<table class="table table-bordered" data-toggle="table" data-search="true">
				<thead>
					<tr>
						<th>Ảnh đại diện</th>
						<th>Tiêu đề</th>
						<th>Ngày đăng</th>
						<th>Chi tiết</th>
						<th>xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($news as $item)
					<tr>
						<td>
							<img src="../images/{{$item->avatar}}" width="170px" height="120px" style="border-radius: 5px;">
						</td>
						<td>{{$item->title}}</td>
						<td>{{$item->updated_at}}</td>
						<td>
							<a href="{{asset('admin/news/edit/'.$item->news_id)}}" class="btn btn-info">Chi tiết</a>
						</td>
						<td>
							<a onclick="return Xoa();" href="{{asset('admin/news/delete/'.$item->news_id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a>
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
