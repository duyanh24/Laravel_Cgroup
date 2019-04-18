@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h2 class="page-title" style="font-weight: bold;">Xem cv</h2>
	
            <div class="row">

                <div class="col-md-6 col-12">
                    <h4>Tên</h4>
                    <p class="form-control">{{$cv->name}}</p>
                    <h4>Vị trí</h4>
                    <p class="form-control">{{$cv->position}}</p>
                    <h4>Điện thoại</h4>
                    <p class="form-control">{{$cv->phone}}</p>
                    <h4>Email</h4>
                    <p class="form-control">{{$cv->email}}</p>
                    <h4>File CV</h4>
                    <a class="form-control" href="{{asset('local/storage/app/public/cv/'.$cv->file_cv)}}">{{$cv->file_cv}}</a>
                    <h4>Giới thiệu</h4>
                    <p class="form-control">{{$cv->introduce}}</p>
                    
                </div>
                <div class="col-md-6 col-12">
                        
                </div>
            </div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>

@stop

