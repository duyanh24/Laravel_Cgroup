@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Danh sách liên hệ</h3>

			<table class="table table-bordered" data-toggle="table" data-search="true">
				<thead>
					<tr>
						<th>Tên</th>
						<th>Email</th>
						<th>Số điện thoại</th>
                        <th>Nội dung</th>
                        <th>Ngày gửi</th>
						<th>xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($contact as $item)
					<tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
						<td>{{$item->content}}</td>
						<td>{{$item->created_at}}</td>	
						<td>
							<a onclick="return Xoa();" href="{{asset('admin/contact/delete/'.$item->contact_id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a>
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
