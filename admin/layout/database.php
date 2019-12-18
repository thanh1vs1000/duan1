	<?php 
			$sql = "SELECT COUNT(*) FROM block_khoahoc";
			$query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($query);

			$sql1 = "SELECT COUNT(*) FROM cmt";
			$query1 = mysqli_query($conn,$sql1);
			$row1 = mysqli_fetch_assoc($query1);

			$sql2 = "SELECT COUNT(*) FROM video_bai_giang";
			$query2 = mysqli_query($conn,$sql2);
			$row2 = mysqli_fetch_assoc($query2);

			$sql3 = "SELECT COUNT(*) FROM thanhvien";
			$query3 = mysqli_query($conn,$sql3);
			$row3 = mysqli_fetch_assoc($query3);
	 ?>	



		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<a href="index.php?page_layout=block-khoa-hoc"><div class="row no-padding"><img src="images/icon/test.png" width="50" height="50">
							<div class="large"><?php echo $row['COUNT(*)'] ?></div>
							<div class="text-muted">Tổng Khối Học</div>
						</div></a>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<a href="index.php?page_layout=cmt"><div class="row no-padding"><img src="images/icon/cmt.png" width="50" height="50">
							<div class="large"><?php echo $row1['COUNT(*)'] ?></div>
							<div class="text-muted">Comments</div>
						</div></a>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<a href="index.php?page_layout=video-bai-giang"><div class="row no-padding"><img src="images/icon/video.png" width="50" height="50"></em>
							<div class="large"><?php echo $row2['COUNT(*)'] ?></div>
							<div class="text-muted">Video</div>
						</div></a>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<a href="index.php?page_layout=thanh-vien"><div class="row no-padding"><img src="images/icon/man.png" width="50" height="50"></em>
							<div class="large"><?php echo $row3['COUNT(*)'] ?></div>
							<div class="text-muted">Thành Viên</div>
						</div></a>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		