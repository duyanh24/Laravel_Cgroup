@extends('guest.master')
@section('css')
<link rel="stylesheet" href="css/home.css">
@stop
@section('main')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="logo">
                    <a href="{{asset('/')}}"><img src="../images/cgroup.png" alt="Trang chủ" /></a>

                    <div class="button-menu-mobile">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="produce">
                    <div class="slogan">
                        Hãy là những gì bạn muốn
                    </div>  
                    <h1 class="heading-1">
                        {{$banner1->title}}
                    </h1>
                    <div class="description">
                        {{$banner1->description}}
                    </div>
                    <a class="button-viewmore" href="{{asset('gioi-thieu')}}">
                        LEARN MORE
                        <span>
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-12">
                
                <div class="banner">
                        <div class="images" style="background: url('../images/{{$banner1->avatar}}') no-repeat center/cover;"></div>
                </div>
                <div class="button-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="bg-banner">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="title-company">
            <h2 class="heading-2">MEMBER COMPANYS</h2>
        </div>
        
        <div class="row">
            @foreach($company as $item)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="company">
                    <div class="mask"></div>
                    <div class="bg-company">background: url('../images/{{$item->avatar}}') no-repeat center/cover;</div>
                    <div class="content">
                        <h3 class="heading-3">{{$item->title}}</h3>
                        <div class="description">
                            {{substr ($item->description,0 ,200)}}...

                        </div>
                        <a class="button-viewmore" href="{{$item->link}}" target="_blank">
                            LEARN MORE
                            <span>
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </a>
                    </div>            
                </div> 
            </div>
            @endforeach
            
           
            
        </div>
    </div>
</section>

<section>
    <div class="recruitment">
        <div class="description-re">
            <h2 class="heading-2">
                {{$banner2->title}}
            </h2>
            <div class="description">
                {{$banner2->description}}
            </div>
            <a class="button-viewmore" href="{{asset('tuyen-dung')}}">
                THAM GIA
                <span>
                    <i class="fas fa-chevron-right"></i>
                </span>
            </a>
        </div>
        <div class="images-re" style="background: url('../images/{{$banner2->avatar}}') no-repeat center/cover;">

        </div>
    </div>
</section>
<section class="list-news">
        <div class="container-fluid">
            <div class="title-company">
                <h2 class="heading-2">Tin Tức CGroup</h2>
            </div>
            
            <div class="row">
                @foreach($news as $item)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a class="news" href="{{asset('tin-tuc/'.$item->slug)}}">
                        <div class="img-news" style="background: url('../images/{{$item->avatar}}') no-repeat center/cover;"></div>
                        <div class="title-news">
                            {{$item->title}} 
                        </div>
                        <span>{{date_format($item->created_at,"Y/m/d")}}</span>
                    </a>
                </div>
                @endforeach
                
            </div>
            <div class="title-company">
                <a class="button-viewmore" href="{{asset('tin-tuc')}}">
                    XEM TẤT CẢ
                    <span>
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
            
        </div>
    </section>
@stop
@section('script')
<script>
$(document).ready(function() {
    $( ".company" ).hover(function() {
        $(this).find(".description").css("color","#fff");
        $(this).find(".mask").css("background","#b7b7b7");
        var bg = $(this).find('.bg-company').text();
        $(this).attr('style', bg);
    },function(){
        $(this).find(".description").css("color","#222");
        $(this).find(".mask").css("background","none");
        $(this).attr('style', "");
    });

    var widthtmp;
    widthtmp = $('.banner').width();
    $('.banner').height(widthtmp);
});
</script>
@stop