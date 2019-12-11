<?php

$sqlselect="SELECT * FROM block_khoahoc";
$resultCat=Mysqli_query($conn,$sqlselect) or die("Lỗi truy vấn Danh Mục");
if(isset($_POST['addlink'])){
    $ten_tv=$_POST['ten_tv'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $pass = $_POST['pass'];
    $sql="INSERT INTO thanhvien(ten_tv,email,sdt,pass) VALUES('$ten_tv','$email','$sdt','$pass')";
    $query= mysqli_query($conn, $sql);
    header('location: index.php?page_layout=thanh-vien');
}
?>




<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thêm mới thành viên</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm mới thành viên</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">
                        <div class="form-group">
                            <label>Tên thành viên<span style="color: red;">(*)</span>
                            div</label>
                            <input name="ten_tv" class="form-control" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label>Email<span style="color: red;">(*)</span></label>
                            <input name="email" class="form-control" type="text" required="">
                        </div>
                          <div class="form-group">
                            <label>Số điện thoại<span style="color: red;">(*)</span></label>
                            <input name="sdt" class="form-control" type="text" required="">
                        </div>
                          <div class="form-group">
                            <label>Mật khẩu<span style="color: red;">(*)</span></label>
                            <input name="pass" class="form-control" type="password" required="">
                        </div>                            
                        
                            <button type="submit" class="btn btn-primary" name="addlink">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>

                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
    <div style="width: 100% ; height: 500px;">
        
    </div><!-- /.row -->
