@extends('guest.master')
@section('css')
<link rel="stylesheet" href="css/introduce.css">
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
<div class="container-fluid">
    <div class="title">
        <h2 class="heading-2">{{$banner->title}}</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="content-1">
        <div class="description">
            {{$banner->description}}
        </div>
        <div class="images">
            <div class="bg-banner">
                <div class="banner" style="background: url('../images/{{$banner->avatar}}') no-repeat center/cover;"></div>
            </div>
        </div>
    </div>
</div>
</section>

<section>
    <div class="container">
        <div class="title-company">
            <h2 class="heading-2">tập đoàn cgroup</h2>
        </div>
        <ul class="list-company">
            @foreach($company as $item)
            <li class="company">
                <div class="logo-company">
                    <img class="img-lg" src="../images/{{$item->logo}}" alt="Trang chủ"/>
                </div>
                <div class="com-description">{{$item->description}}</div>
                <div class="com-name">{{$item->title}}</div>
                <div class="com-avatar">background: url('../images/{{$item->avatar}}') no-repeat center/cover;</div>
            </li>
            @endforeach
        </ul>

        <div class="row">
            <div class="col-md-6 col-12">
                <div class="images-company" style="background: url('../images/{{$company_first->avatar}}') no-repeat center/cover;"></div>
            </div>
            <div class="col-md-6 col-12">
                <div class="desciption-company">
                    <h3 class="heading-3 name-company">{{$company_first->title}}</h3>
                    <div class="description description-company">
                            {{$company_first->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team-leader">
    <div class="container">
        <h3 class="heading-3">Ban lãnh đạo <span>Cgroup</span></h3>
        <div class="row">
            @foreach($staff as $item)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="leader">
                    <div class="images-leader" style="background: url('../images/{{$item->avatar}}') no-repeat center/cover;"></div>
                </div>
                <div class="name-leader">{{$item->name}}</div>
                <div class="position">{{$item->position}}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@stop
@section('script')
<script>
$(document).ready(function() {
    $( ".company" ).click(function() {
        var com_description = $(this).find('.com-description').text();
        var com_name = $(this).find('.com-name').text();
        var com_avatar = $(this).find('.com-avatar').text();
        $(".images-company").attr('style', com_avatar);
        $(".name-company").text(com_name);
        $(".description-company").text(com_description);

        var widthtmp2;
        widthtmp2 = $('.images-company').width();
        $('.images-company').height(widthtmp2);
    });

    var width_cpn;
    width_cpn = $('.company').width();
    $('.company').height(width_cpn);
    var width_cpn2 = width_cpn/2;
    
    
 

    var widthtmp;
    widthtmp = $('.images-company').width();
    $('.images-company').height(widthtmp);
    if(screen.width > 768){
        $('.desciption-company').height(widthtmp);
    }
    

    var width_images_leader;
    width_images_leader = $('.images-leader').width();
    $('.images-leader').height(width_images_leader);
});


</script>
@stop