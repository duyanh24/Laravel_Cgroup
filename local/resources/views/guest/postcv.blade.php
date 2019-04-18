@extends('guest.master')
@section('css')

<link rel="stylesheet" href="css/postcv.css">
@stop
@section('header')
<div class="container-fluid">
    <div id="header">
        <div class="logo">
            <a href="{{asset('/')}}"><img src="../images/cgroup.png" alt="Trang chủ" /></a>
        </div>
        <div class="button-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
@stop
@section('main')
<section class="list-news">
    <div class="container">
        <div class="title-company">
            <h2 class="heading-2">NỘP ĐƠN ỨNG TUYỂN</h2>
        </div>
        
        <div class="form">
            <form method="post" action="{{asset('ung-tuyen')}}" enctype="multipart/form-data">

                @include('errors.note')
                <div class="title">Thông tin liên hệ của bạn</div>
                <div class="input">
                    <span>Họ và tên*</span>
                    <input type="text" required name="name"/>
                </div>
                <div class="input">
                    <span>Số điện thoại*</span>
                    <input type="text" required name="phone"/>
                </div>
                <div class="input">
                    <span>Email*</span>
                    <input type="text" required name="email"/>
                </div>
                <div class="input">
                    <span>Ứng tuyển vị trí*</span>
                    <input type="text" required name="position"/>
                </div>
                <div class="input">
                    <span>Giới thiệu bản thân</span>
                    <textarea placeholder="Không quá 3000 kí tự!" required name="introduce"></textarea>
                </div>
                <div class="input">
                    <span>Hồ sơ của bạn*</span>
                    <div class="ip-file">Chọn từ máy tính <i class="fas fa-folder"></i></div>
                    <a class="modal-control" id="toggle-file">Chọn file</a>
                    <input id="file" type="file" name="file_cv" required="">

                </div>
                <div class="input">
                    <span></span>
                    <input type="submit" value="ỨNG TUYỂN"/>
                    <div style="flex:5;"></div>  
                </div>
                {{csrf_field()}}
            </form>
        </div>
        
    </div>

    
</section>
@stop
@section('script')
<script>
$(document).ready(function() {
    $( ".ip-file" ).click(function() {
        $("#file").click();
    });
    $(document).ready(function(){
        $('#toggle-file').click(function(){
            $('').click();
        });
        $('#file').change(function(){
            var string = '';
            for(var i=0; i < $(this)[0].files.length;i++ ){
                string += $(this)[0].files[i].name + ', ';
            }
            $('#toggle-file').html(string);
        });
    });

});
</script>
@stop