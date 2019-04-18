@extends('guest.master')
@section('title')
<title>Liên hệ</title>
@stop
@section('css')
<link rel="stylesheet" href="css/contact.css">
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
<section>
    <div class="container">
        <div class="contact-title">
            <h2 class="heading-2">liên hệ</h2>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-12 col-sm-12">
                <div class="submit-form">
                    <div class="title">
                        Gửi tin nhắn tới Cgroup
                    </div>
                    <form method="post" action="{{asset('them-lien-he')}}" enctype="multipart/form-data">
                        <input type="text" placeholder="Name" name="name" required> </br>
                        <input type="email" placeholder="Email address" name="email" required>
                        <input type="text" placeholder="Phone" name="phone" required>
                        <textarea placeholder="Content" name="content" required></textarea>
                        <button type="submit">ĐĂNG KÝ</button>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-12 col-sm-12">
                <div class="phone">
                    <i class="fas fa-phone-volume"></i>
                    {{$setting->phone_hn}} 
                </div>
                <div id="map"></div>
                <div class="address">
                    <div class="place">
                        <div class="place-title">Cở sở 1</div>
                        <div>
                            {{$setting->address_hn}} 
                        </div>
                    </div>
                    <div class="place">
                        <div class="place-title">Cở sở 2</div>
                        <div>
                                {{$setting->address_hcm}} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="list-images">
        <div class="images" style="background: url('../images/IMG_4517.png') no-repeat center/cover;"></div>
        <div class="images" style="background: url('../images/IMG_4563.png') no-repeat center/cover;"></div>
        <div class="images" style="background: url('../images/IMG_4579.png') no-repeat center/cover;"></div>
    </div>
</section>
@stop
@section('script')
<script>
    function initMap() {
        var uluru = {lat: {{$setting->vi_do}}, lng: {{$setting->kinh_do}}};
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 17, center: uluru});
        var marker = new google.maps.Marker({position: uluru, map: map});
    }

</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOc88r0unTZkaOlPWE9oYQ6l6_WpZvUAY&callback=initMap">
</script>


@stop