  <?php 

    include_once"layout/header.php";
    $id = $_GET['id'];
    $sql="SELECT * FROM thanhvien WHERE id=$id";
    $query= mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($query);

    if (isset($_POST['submit'])) {
    $ten_tv=$_POST['ten_tv'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $pass = $_POST['pass'];

    if($_FILES['avatar']['name']==""){
        $avatar=$_POST['avatar'];
    }
    else{
        $avatar=$_FILES['avatar']['name'];
        $tmp_name=$_FILES['avatar']['tmp_name'];
    }
    if(isset($ten_tv) && isset($email) && isset($sdt) && isset($pass)){
      move_uploaded_file($tmp_name, 'admin/images/'.$avatar);

     $sql="UPDATE thanhvien SET ten_tv='$ten_tv',sdt='$sdt',email='$email',pass='$pass',avatar='$avatar' WHERE id=$id";
        $query= mysqli_query($conn, $sql);
        header('location: index.php?page_layout=profile');
    }
  }
   ?>
  <link rel="stylesheet" type="text/CSS" href="css/profile.css" />
    <style type="text/css">
      #huy{
        margin-bottom: 40px;
        padding: 11px;
      }
    </style>
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>HỒ SƠ</h2>
                <div class="page_link">
                  <a href="index.html">Trang chủ</a>
                  <a href="contact.html">hồ sơ</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
         <div class="container">    
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black;">
                            <h2>HỒ SƠ CÁ NHÂN</h2>
                          </div>
                            <hr>
                           
                          <ul class="container details">
                            <form   method="post" role="form"  enctype="multipart/form-data">
                                  <div class="form-row">
                                  <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">Họ và tên</label>
                                    <input type="text" name="ten_tv" class="form-control"  placeholder="First name" 
                                    value="<?php if(isset($_POST['ten_tv'])){echo $_POST['ten_tv'];} else{ echo $row['ten_tv'];} ?>" required>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Số điện thoại</label>
                                    <input type="text" name="sdt" class="form-control"  placeholder="Last name" 
                                    value="<?php if(isset($_POST['sdt'])){echo $_POST['sdt'];} else{ echo $row['sdt'];} ?>" required>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                   
                                    <div class="input-group">
                                      <input type="hidden" name="email" class="form-control" 
                                      placeholder="Username" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} else{ echo $row['email'];} ?>" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="col-md-4 mb-3">
                                    <label for="validationDefault03">Avatar</label>
                                    <input type="file" name="avatar" class="form-control"><input type="hidden" name="avatar" value="<?php if(isset($_POST['avatar'])){echo $_POST['avatar'];} else{ echo $row['avatar'];} ?>">
                                  </div>
                                   <div class="col-md-4 mb-3">
                                    <label for="validationDefault03">Mật khẩu</label>
                                    <input type="password" name="pass" class="form-control"  placeholder="Mật khẩu" value="<?php if(isset($_POST['pass'])){echo $_POST['pass'];} else{ echo $row['pass'];} ?>" required>
                                  </div>
                                 
                                </div>
                              
                                <input type="submit" name="submit" class="btn btn-primary" value="Chỉnh sửa"><a href="index.php?page=profile" class="btn btn-danger" id="huy">Hủy</a>

                            </form>
                          </ul>
                     
                      </div>
                  </div>
                </div>
    </section>
      <?php include_once'footer.php'; ?>