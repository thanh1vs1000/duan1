<?php 

	include_once"sidebar.php";

$id = $_GET["id"];
$sql = "SELECT * FROM menu WHERE id_kh='$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if (isset($_POST['submit'])) {
    $ten_kh = $_POST['ten_kh'];
    $trangthai = $_POST['trangthai'];
    if (isset($ten_kh)) {
        $sql = "UPDATE menu SET ten_kh='$ten_kh',trangthai='$trangthai' WHERE id_kh=$id";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page_layout=khoa-hoc');
    }
}


 ?>
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">KHÓA HỌC</li>
			</ol>
		</div><!--/.row-->
		
<div class="row">
	<!-- Grid column -->
	<div class="col-md-12">
		<h2 class="py-3 text-center font-bold font-up blue-text">SỬA KHÓA HỌC</h2>
	</div>
	<!-- Grid column -->
</div>
<div class="container-fluid  dashboard-content">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
              <!--   <h5 class="card-header">Sửa Danh Muc</h5> -->
                <div class="card-body">
                    <form action="#" id="basicform" method="post" data-parsley-validate="">
                        <div class="form-group">
                            <label for="inputUserName">Tên Khóa học</label>
                            <input name="ten_kh" id="ten_kh" type="text" value="<?php echo $row['ten_kh']; ?> " class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                <label class="be-checkbox custom-control custom-checkbox">
                                    <input type="checkbox" name="trangthai" id="trangthai" class="custom-control-input" value="1"><span class="custom-control-label">Trạng Thái<span>
                                </label>
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary" name="submit"> Sửa</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>