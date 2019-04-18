@extends('admin.master')
@section('main')
<div class="main">
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h2 class="page-title" style="font-weight: bold;">Thêm tuyển dụng</h2>
			<form method="post" action="{{asset('admin/recruit/add')}}" enctype="multipart/form-data">
				<div class="row">

					<div class="col-md-6 col-12">
						<h4>Tiêu đề</h4>
                        <input type="text" class="form-control" name="title" required placeholder="Tiêu đề">
                        <h4>Hình thức</h4>
                        <input type="text" class="form-control" name="hinh_thuc" required placeholder="Hình thức">
                        <h4>Địa điểm</h4>
                        <input type="text" class="form-control" name="address" required placeholder="Địa điểm">
                        <h4>Bộ phận</h4>
                        <input type="text" class="form-control" name="position" required placeholder="Bộ phận">
                        <h4>Lương</h4>
                        <input type="text" class="form-control" name="salary" required placeholder="10.000.000 - 20.000.000">
                        <h4>Hạn nộp</h4>
                        <input type="text" class="form-control" name="deadline" required placeholder="01-01-2019">
                        
						<h4>Nội dung</h4>
						<textarea class="form-control" style="height: 200px;" name="content" required></textarea>
						<script>
							CKEDITOR.replace( 'content', {
								filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
								filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
								filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?type=Flash',
								filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
								filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
								filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
							} );
						</script>
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
 </script>
 @stop
