@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Danh sách công ty</h3>
			<a href="{{asset('admin/intro/add')}}" class="btn btn-success">Thêm công ty</a>

			<table class="table table-bordered" data-toggle="table" data-search="true">
				<thead>
					<tr>
						<th>Tên công ty</th>
						<th>Logo</th>
                        <th>Ảnh đại diện</th>
                        <th>Mô tả</th>
						<th>Sửa</th>
						<th>xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($intro as $item)
					<tr>
                        <td>{{$item->title}}</td>
						<td>
							<img src="../images/{{$item->logo}}" width="112px" height="60px">
                        </td>
                        <td>
                            <img src="../images/{{$item->avatar}}" width="170px" height="120px" style="border-radius: 5px;">
                        </td>
						<td>{{$item->description}}</td>
						<td>
							<a href="{{asset('admin/intro/edit/'.$item->intro_id)}}" class="btn btn-info">Sửa</a>
						</td>
						<td>
							<a onclick="return Xoa();" href="{{asset('admin/intro/delete/'.$item->intro_id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a>
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
