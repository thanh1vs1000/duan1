<script type="text/javascript" src="./../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="./../js/jquery-3.2.1.min.js"></script>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container-fluid">
			<div class="navbar-header">
			
			</nav>
			<!-- end menu -->

			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<div class="profile-sidebar">
					<div class="profile-userpic">
						<img src="./images/admin-settings-male.png" class="img-responsive" alt="">
					</div>
					<div class="profile-usertitle">
						<div class="profile-usertitle-name"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?></div>
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
					<li><a href="index.php"><em class="fa fa-dashboard fa-lg">&nbsp;</em> Dashboard</a></li>
					<li><a href="index.php?page_layout=khoa-hoc"><em class="fa fa-calendar fa-lg">&nbsp;</em> Khóa học</a></li>
					<li><a href="index.php?page_layout=block-khoa-hoc"><em class="fa fa-bookmark fa-lg">&nbsp;</em> Khối học</a></li>
					<li><a href="index.php?page_layout=video-bai-giang"><em class="fa fa-youtube fa-lg">&nbsp;</em> Video bài giảng</a></li>
					<li><a href="index.php?page_layout=thanh-vien"><em class="fa fa-users fa-lg">&nbsp;</em> Thành viên</a></li>
					
					<li><a href="index.php?page_layout=cmt"><em class="fa fa-comments-o fa-lg">&nbsp;</em> Bình Luận</a></li>
					
				<li><a href="logout.php"><em class="fa fa-power-off fa-lg">&nbsp;</em> Logout</a></li>
			</ul>
		</div><!--/.sidebar-->
	</div>
</div>
</nav>