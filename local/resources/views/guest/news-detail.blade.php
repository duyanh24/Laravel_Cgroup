@extends('guest.master')
@section('title')
<title></title>
@stop
@section('css')
<link rel="stylesheet" href="css/news-detail.css">
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
            <h2 class="heading-2">Tin Tức CGroup</h2>
        </div>
        
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="news-detail">
                    <div class="heading-3">{{$news->title}}</div>
                    <div class="content">
                        {!!$news->content!!}
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class='sidebar'>
                    {{--  <div class="search">Tìm Kiếm</div>
                    <form>
                        <input type="text" placeholder="Tìm kiếm">
                        
                        <img src="../images/magnifying-glass.png" alt="tìm kiếm"/>
                    </form>  --}}
                    <div class="search">Bài đăng gần đây</div>
                    
                    @foreach($list_news as $item)
                    <div class="news">
                        <div class="news-img" style="background: url('../images/{{$item->avatar}}') no-repeat center/cover;"></div>
                       
                        <div class="detail">
                            <div class="news-title">{{substr ($item->title,0 ,60)}}...</div>
                            <div class="date">{{date_format($item->created_at,"Y/m/d")}}</div>
                            <a href="{{asset('tin-tuc/'.$item->slug)}}">xem thêm</a>
                        </div>
                    </div>
                    @endforeach
                </div> 
            </div>
        </div>
    </div>
</section>
@stop