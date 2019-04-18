<!doctype html>
<html lang="en">

<head>
	
	<title>Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<base href="{{ asset('local/storage/app/public/admin') }}/">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<link href="assets/css/bootstrap-table.css" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">

			<a href="{{asset('admin')}}"><img src="../images/cgroup-backend.png" alt="Logo" class="brand" width="85px" height="60px" style="padding: unset !important;margin:10px;"></a>

			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>


				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../images/cgroup-backend.png" class="img-circle" alt="Avatar"> <span>admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								
								<li><a href="{{asset('logout')}}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{asset('admin')}}"><i class="lnr lnr-home"></i> <span>Thống kê</span></a></li>
						<li><a href="{{asset('admin/banner/list')}}" class=""><i class="far fa-images"></i> <span>Banner</span></a></li>
						
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="fas fa-info" style="margin-left:5px;"></i> <span style="margin-left:10px;">Giới thiệu</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="{{asset('admin/intro/list')}}" class=""><i class="far fa-building"></i> <span>Danh sách công ty</span></a></li>
									<li><a href="{{asset('admin/staff/list')}}" class=""><i class="fas fa-users"></i> <span>Nhân sự</span></a></li>
								</ul>
							</div>
						</li>
						
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="fa fa-credit-card"></i> <span>Tuyển dụng</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="{{asset('admin/recruit/list')}}" class=""><i class="fa fa-credit-card"></i> <span>Tin tuyển dụng</span></a></li>
									<li><a href="{{asset('admin/cv/list')}}" class=""><i class="far fa-file"></i> <span>Danh sách CV</span></a></li>
								</ul>
							</div>
						</li>	
						<li><a href="{{asset('admin/news/list')}}" class=""><i class="far fa-newspaper"></i> <span>Tin tức - Sự kiện</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fas fa-file-signature"></i> <span>Liên hệ</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="{{asset('admin/contact/list')}}" class=""><i class="far fa-comments"></i> <span>Ý kiến phản hồi</span></a></li>
									<li><a href="{{asset('admin/register/list')}}" class=""><i class="fas fa-mail-bulk"></i> <span>Đăng kí nhận Email</span></a></li>
								</ul>
							</div>
						</li>
						@if(Auth::user()->level > 1)
						<li><a href="{{asset('admin/setting')}}" class=""><i class="fas fa-cogs"></i><span>Cài đặt</span></a></li>
						<li><a href="{{asset('admin/user/list')}}" class=""><i class="far fa-user"></i> <span>Quản lý tài khoản</span></a></li>
						@endif
					
						<li><a href="{{asset('logout')}}" class=""><i class="lnr lnr-exit"></i> <span>Đăng xuất</span></a></li>

					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('main');
		<!-- END MAIN -->
		<div class="clearfix"></div>
		
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script src="assets/scripts/bootstrap-table.min.js"></script>
	<script src="js/xoa.js"></script>
	@yield('script');
</body>

</html>
