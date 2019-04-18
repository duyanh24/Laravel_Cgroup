@extends('admin.master')
@section('main')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title" style='font-weight:bold;font-size:28px;'>Thống kê</h3>
					<p class="panel-subtitle">Ngày: {{$date}}</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-credit-card"></i></span>
								<p>
									<span class="number">21</span>
									<span class="title">Mặt hàng</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="lnr lnr-user"></i></span>
								<p>
									<span class="number">54</span>
									<span class="title">Khách hàng</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-shopping-cart"></i></span>
								<p>
									<span class="number">54</span>
									<span class="title">Đơn hàng mới</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-bar-chart"></i></span>
								<p>
									<span class="number">545 VNĐ</span>
									<span class="title">Tổng doanh thu</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END OVERVIEW -->
			
			
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@stop