@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h2 class="page-title" style="font-weight: bold;">Thêm Công ty</h2>
			<form method="post" action="{{asset('admin/intro/add')}}" enctype="multipart/form-data">
				<div class="row">

					<div class="col-md-6 col-12">
						<h4>Tên công ty</h4>
                        <input type="text" class="form-control" name="title" required>
                        <h4>Link website/facebook</h4>
						<input type="text" class="form-control" name="link" required>
						<h4>Mô tả</h4>
                        <textarea class="form-control" style="height: 200px;" name="description" required></textarea>

                        <h4>Logo</h4>
						<input class="img2" type="file" name="logo" class="cssInput " onchange="changeImg2(this)" style="display: none;!important;">
						<img style="cursor: pointer;border: 1px solid #ccc;" class="logo" class="cssInput thumbnail tableImgAvatar" width="112" height="60" src="../images/cgroup-backend.png">
					</div>
					<div class="col-md-6 col-12">
						<h4>Ảnh đại diện</h4>
						<input class="img" type="file" name="avatar" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
						<img style="cursor: pointer;border: 1px solid #ccc;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="400" height="300" src="../images/cgroup-backend.png">
					</div>
				</div>

				<input type="submit" name="" value="Thêm mới" class="btn btn-success" style="margin-top: 30px;">
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
