@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Danh sách đăng kí</h3>

			<table class="table table-bordered" data-toggle="table" data-search="true">
				<thead>
					<tr>
						<th>Email</th>
                        <th>Ngày gửi</th>
						<th>xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($register as $item)
					<tr>                  
                        <td>{{$item->email}}</td>
						<td>{{$item->created_at}}</td>	
						<td>
							<a onclick="return Xoa();" href="{{asset('admin/register/delete/'.$item->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a>
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
