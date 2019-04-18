@extends('guest.master')
@section('title')
<title>Tuyển dụng</title>
@stop
@section('css')
<link rel="stylesheet" href="css/recruitment.css">
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
<section class="list-recruit">
    <div class="container-fluid">
        <div class="title-company">
            <h2 class="heading-2">Tuyển dụng cgroup</h2>
        </div>
        
        <div class="row">
            @foreach($recruit as $item)
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="recruit">
                    <a class="img-recruit" href="{{asset('tuyen-dung/'.$item->slug)}}" style="background: url('../images/{{$item->avatar}}') no-repeat center/cover;"></a>
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
                        <div class="button">
                            <a href="{{asset('ung-tuyen')}}" class="ung-tuyen">
                                ỨNG TUYỂN NGAY
                            </a>
                            <a class="view-more" href="{{asset('tuyen-dung/'.$item->slug)}}">
                                XEM CHI TIẾT
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
           
        </div>
        {{$recruit->links()}}
    </div>
</section>
@stop