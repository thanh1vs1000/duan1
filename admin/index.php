<?php 
	session_start();
  include'./ketnoi/ketnoi.php';
  ob_start();
    if (isset($_SESSION['username'])) {
     
 ?>
 


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
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style-rieng.css">

	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	
		<?php 
	include_once"layout/sidebar.php";
	 ?>
		
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<?php
			if (isset($_GET['page_layout'])) {
				switch ($_GET['page_layout']) {
				
					case 'khoa-hoc':
					include_once './layout/khoa-hoc.php';
					break;
					case 'block-khoa-hoc':
					include_once './layout/block-khoa-hoc.php';
					break;
					case 'thanh-vien':
					include_once './layout/thanh-vien.php';
					break;
					case 'video-bai-giang':
					include_once './layout/video-bai-giang.php';
					break;
					case 'add-video-giang':
					include_once './layout/add-link.php';
					break;
					case 'edit-video-giang':
					include_once './layout/edit-link.php';
					break;
					case 'delete-video-giang':
					include_once './layout/xoa-link.php';
					break;
					case 'cmt':
					include_once './layout/cmt.php';
					break;
					case 'xoa-cmt':
					include_once './layout/xoa-cmt.php';
					break;
					case 'add-khoa-hoc':
					include_once './layout/add-khoa-hoc.php';
					break;
					case 'edit-khoa-hoc':
					include_once './layout/edit-khoa-hoc.php';
					break;
					case 'xoa-khoa-hoc':
					include_once './layout/xoa-khoa-hoc.php';
					break;
					case 'add-block':
					include_once './layout/add-block.php';
					break;
					case 'edit-block':
					include_once './layout/edit-block.php';
					break;
					case 'delete-block':
					include_once './layout/xoa-block.php';
					break;
					case 'add-thanhvien':
					include_once './layout/add-thanhvien.php';
					break;
						case 'xoa-thanhvien':
					include_once './layout/xoa-thanhvien.php';
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
<?php 
 }
 else{
  header("location:login.php");
 }
 ?>
