@extends('admin.master')
@section('main')
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h2 class="page-title" style="font-weight: bold;">Sửa tin tức</h2>
			<form method="post" action="{{asset('admin/news/edit/'.$news->news_id)}}" enctype="multipart/form-data">
				<div class="row">

					<div class="col-md-6 col-12">
						<h4>Tiêu đề</h4>
						<input type="text" class="form-control" name="title" value="{{$news->title}}" required>
						<h4>Nội dung</h4>
						<textarea class="form-control" style="height: 200px;" name="content" required>{{$news->content}}</textarea>
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
						<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="400" height="300px" src="../images/{{$news->avatar}}">
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
 </script>
 @stop
