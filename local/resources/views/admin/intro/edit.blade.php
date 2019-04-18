@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h2 class="page-title" style="font-weight: bold;">Sửa công ty</h2>
			<form method="post" action="{{asset('admin/intro/edit/'.$intro->intro_id)}}" enctype="multipart/form-data">
				<div class="row">

					<div class="col-md-6 col-12">
						<h4>Tên công ty</h4>
                        <input type="text" class="form-control" name="title" value="{{$intro->title}}" required>
                        
                        <h4>Link website/facebook</h4>
						<input type="text" class="form-control" name="link" required value="{{$intro->link}}">
						<h4>Mô tả</h4>
                        <textarea class="form-control" style="height: 200px;" name="description" required>{{$intro->description}}</textarea>
                        
                        <h4>Ảnh đại diện</h4>
						<input class="img2" type="file" name="logo" class="cssInput " onchange="changeImg2(this)" style="display: none;!important;">
						<img style="cursor: pointer;" class="logo" class="cssInput thumbnail tableImgAvatar" width="112" height="60px" src="../images/{{$intro->logo}}">
					</div>
					<div class="col-md-6 col-12">
						<h4>Ảnh đại diện</h4>
						<input class="img" type="file" name="avatar" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
						<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="400" height="300px" src="../images/{{$intro->avatar}}">
					</div>
				</div>

				<input type="submit" name="" value="Chỉnh sửa" class="btn btn-success" style="margin-top: 30px;">
				{{csrf_field()}}
			</form>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>

@stop
@section('script')
<script type="text/javascript">
	function changeImg(input){
         //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
         if(input.files && input.files[0]){
         	var reader = new FileReader();
             //Sự kiện file đã được load vào website
             reader.onload = function(e){
                 //Thay đổi đường dẫn ảnh
                 $('.avatar').attr('src',e.target.result);
             }
             reader.readAsDataURL(input.files[0]);
         }
     }
     $(document).ready(function() {
     	$('.avatar').click(function(){
     		$('.img').click();
     	});
     });


     function changeImg2(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('.logo').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('.logo').click(function(){
            $('.img2').click();
        });
    });
 </script>
 @stop
