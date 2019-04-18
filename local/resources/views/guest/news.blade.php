@extends('guest.master')
@section('css')

<link rel="stylesheet" href="css/news.css">
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
                        {{substr ($item->title,0 ,60)}}...
                    </div>
                    <span>{{date_format($item->created_at,"Y/m/d")}}</span>
                </a>
            </div>
            @endforeach
        </div>
        {{$news->links()}}
    </div>

    
</section>
@stop