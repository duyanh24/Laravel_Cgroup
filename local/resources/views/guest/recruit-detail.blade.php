@extends('guest.master')
@section('title')
<title></title>
@stop
@section('css')

<link rel="stylesheet" href="css/recruitment.css">
<link rel="stylesheet" href="css/recruit-detail.css">
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
            <h2 class="heading-2">Tuyển dụng CGroup</h2>
        </div>
        
        <div class="info">
            <div class="info-detail">
                <div class="title-recruit">{{$recruit->title}}</div>
                <div class="hinh-thuc">
                    Hình thức làm việc
                    <i class="far fa-clock"></i>
                    <span>{{$recruit->hinh_thuc}}</span>
                </div>
                <div class="salary">
                    Mức lương
                    <i class="far fa-money-bill-alt"></i>
                    <span>{{$recruit->salary}}</span>
                </div>
                
                <div class="address">
                    Địa điểm làm việc
                    <i class="fas fa-map-marker-alt"></i>
                    <span>{{$recruit->address}}</span>
                </div>
                
            </div>
            <div class="ung-tuyen">
                <a href="{{asset('ung-tuyen')}}" class="button">ỨNG TUYỂN VỊ TRÍ NÀY</a>
                
            </div>
        </div>


        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="news-detail">
                    <div class="content">
                        {!!$recruit->content!!}
                    </div>
                    <div class="ung-tuyen">
                        <a href="{{asset('ung-tuyen')}}" class="button">ỨNG TUYỂN VỊ TRÍ NÀY</a>
                
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class='sidebar'>
                    <div class="search">Các vị trí khác</div>
                        @foreach($list_recruit as $item)
                        
                        <a class="recruit" href="{{asset('tuyen-dung/'.$item->slug)}}">
                            <div class="img-recruit" style="background: url('../images/{{$item->avatar}}') no-repeat center/cover;"></div>
                            <div class="box">
                                <div class="title-recruit">
                                    {{$item->title}}
                                </div>
                                <div class="hinh-thuc">
                                    Hình thức làm việc
                                    <i class="far fa-clock"></i>
                                    <span>{{$item->hinh_thuc}}</span>
                                </div>
                                <div class="salary">
                                    Mức lương
                                    <i class="far fa-money-bill-alt"></i>
                                    <span>{{$item->salary}}</span>
                                </div>
                                <div class="deadline">
                                    Hạn nộp hồ sơ
                                    <i class="fas fa-lock"></i>
                                    <span>{{$item->deadline}}</span>
                                </div>
                               
                            </div>
                            
                        </a>
                        @endforeach
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
@stop