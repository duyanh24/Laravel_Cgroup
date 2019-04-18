<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <base href="{{ asset('local/storage/app/public/guest/') }}/">
    <link rel="stylesheet" href="css/master.css">
    @yield('css')
</head>
<body>
    <header>
        @yield('header')
        <div class="menuHide">      
                <div class="logo">
                    <a href="{{asset('/')}}"><img src="../images/cgroup-while.png" alt="Trang chủ" /></a>

                    <div class="button-menu-hide">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="menu-list">
                        <ul>
                            <li><a href="{{asset('/')}}" style="color: #fff;">Trang chủ</a></li>
                            <li><a href="{{asset('gioi-thieu')}}">Giới thiệu</a></li>
                            <li><a href="{{asset('tin-tuc')}}">Tin tức - Sự kiện</a></li>
                            <li><a href="{{asset('lien-he')}}">Liên hệ</a></li>
                            <li><a href="{{asset('tuyen-dung')}}">Tuyển dụng</a></li>
                        </ul>
                    </div>
                </div>
           
        </div>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12 bg-mobile">
                    <div class="heading-4">cgroup</div>
                    <div class="contact">
                        <i class="fas fa-map-marker-alt"></i>
                        {{$setting->address_hn}}
                    </div>
                    <div class="contact">
                        <i class="fas fa-phone"></i>
                        {{$setting->phone_hn}}
                    </div>
                    <div class="contact">
                        <i class="fas fa-envelope"></i>
                        {{$setting->email}}
                    </div>
                    
                </div>
                <div class="col-md-3 col-12 bg-mobile-2">
                    <div class="heading-5">về chúng tôi</div>
                    <div class="contact">
                        <a href="{{asset('gioi-thieu')}}">Giới thiệu</a>
                    </div>
                    <div class="contact">
                        <a href="{{asset('tin-tuc')}}">Tin tức - Sự kiện</a>                 
                    </div>
                    <div class="contact">
                        <a href="{{asset('tuyen-dung')}}">Tuyển dụng</a>           
                    </div>
                    <div class="contact">
                        <a href="{{asset('lien-he')}}">Liên hệ</a> 
                    </div>
                    
                </div>
                <div class="col-md-3 col-12 bg-mobile-2">
                    <div class="heading-5">THAM GIA QUA MẠNG XÃ HỘI</div>
                    <div class="contact">
                        <a href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="{{$setting->telegram}}" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        
                    </div>  
                </div>
                <div class="col-md-3 col-12">
                    <div class="heading-5">đăng kí địa chỉ email</div>
                    <div class="contact">
                        <form method="post" action="{{asset('dang-ki-email')}}" enctype="multipart/form-data">
                            <input type="email" placeholder="Email" required name="email">
                            <input type="submit" value="ĐĂNG KÍ">
                            {{csrf_field()}}
                        </form>
                    </div>  
                    <div class="contact" style="font-style: italic;text-align:justify;">
                        Hãy đang ký ngay email của bạn để nhận được 
                        thông tin sớm nhất về các sự kiện và cũng như 
                        các ưu đãi của CGROUP dành tặng cho khách hàng 
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
        $('.button-menu').click(function(){           
            $('.menuHide').css('right', '0');
        });
        $('.button-menu-mobile').click(function(){           
            $('.menuHide').css('right', '0');
        });
        $('.button-menu-hide').click(function(){           
            $('.menuHide').css('right', '-100%');
        });
    </script>
    @yield('script')
</body>
</html>