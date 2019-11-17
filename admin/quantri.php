<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style-rieng.css">

	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
			
			</nav>
			<!-- end menu -->

			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<div class="profile-sidebar">
					<div class="profile-userpic">
						<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
					</div>
					<div class="profile-usertitle">
						<div class="profile-usertitle-name">Username</div>
						<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="divider"></div>
				<form role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
				</form>
				<ul class="nav menu">
					<li><a href="quantri.php"><em class="fa fa-dashboard fa-lg">&nbsp;</em> Dashboard</a></li>
					<li><a href="quantri.php?page=danh-muc"><em class="fa fa-calendar fa-lg">&nbsp;</em> Danh mục</a></li>
					<li><a href="quantri.php?page=khoa-hoc"><em class="fa fa-bookmark fa-lg">&nbsp;</em> Khóa học</a></li>
					<li><a href="quantri.php?page=thanh-vien"><em class="fa fa-users fa-lg">&nbsp;</em> Thành viên</a></li>
					<li><a href="quantri.php?page=video-bai-giang"><em class="fa fa-youtube fa-lg">&nbsp;</em> Video bài giảng</a></li>
					
				<li><a href="login.html"><em class="fa fa-power-off fa-lg">&nbsp;</em> Logout</a></li>
			</ul>
		</div><!--/.sidebar-->
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<?php
			if (isset($_GET['page'])) {
				switch ($_GET['page']) {
				
					case 'danh-muc':
					include_once './layout/danh-muc.php';
					break;
					case 'khoa-hoc':
					include_once './layout/khoa-hoc.php';
					break;
					case 'thanh-vien':
					include_once './layout/thanh-vien.php';
					break;
					case 'video-bai-giang':
					include_once './layout/video-bai-giang.php';
					break;

				}
			}
			else{

				include_once 'layout/database.php';

			}
			?>
		</div>




<!-- footer-->
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>
