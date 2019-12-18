  <?php 

    include_once"layout/header.php";
    $email = $_SESSION['dangnhap'];
    $sqlUser = "SELECT * FROM thanhvien WHERE email = '$email'";
    $queryUser = mysqli_query($conn,$sqlUser) or die;
   
   ?>
   <style type="text/css">
     #anhprofile {
      border-radius: 150px;
     

     }
     .jumbotron {
       box-shadow: 10px 10px 15px 5px #888888;
     }
   </style>
  <link rel="stylesheet" type="text/CSS" href="css/profile.css" />
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
                     <?php while ( $row = mysqli_fetch_array($queryUser)) {
                             ?>

                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="admin/images/<?php echo $row['avatar'] ?>" width="300" height="300" class="img" id="anhprofile">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black;">
                            <h2>HỒ SƠ CÁ NHÂN</h2>
                          </div>
                            <hr>
                                                     <ul class="container details">
                            <li><p>Họ Và Tên : <strong><?php echo $row['ten_tv']; ?></strong></p></li>
                            <li><p>Số điện thoại : <strong><?php echo $row['sdt']; ?></strong></p></li>
                            <li><p>Email : <strong><?php echo $row['email']; ?></strong></p></li>
                            <a href="index.php?page=sua-profile&id=<?php echo $row['id'] ?>"><span class="btn btn-warning">Chỉnh sửa hồ sơ</span></a> <a href="index.php?page=dangxuat"><span class="btn btn-danger">Đăng Xuất</span></a>
                          </ul>
                        <?php } ?>
                      </div>
                  </div>
                </div>
    </section>
      <?php include_once'footer.php'; ?>