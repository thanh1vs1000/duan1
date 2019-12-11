<?php 
    if (isset($_POST["submit"])) {
    $ten_tv=$_POST["ten_tv"];
      $email=$_POST["email"];
        $sdt=$_POST["sdt"];
          $pass=$_POST["pass"];
    
    $sql="INSERT INTO thanhvien(ten_tv,email,sdt,pass) VALUES('$ten_tv','$email','$sdt','$pass')";
    mysqli_query($conn,$sql) or die("loi ket noi") ;
    header('location: index.php?page=login');
 }

 ?>



<link rel="stylesheet" type="text/css" href="css/cssrieng.css">
<div class="wrapper fadeInDown">
<div id="formContent">
  <!-- Tabs Titles -->
  <a href="index.php?page=login"><h2 class="inactive underlineHover"> Đăng nhập</h2></a>
  <h2  class="active" >Đăng ký </h2>


  <!-- Icon -->
  <div class="fadeIn first">
    <img src="img/haha.png" width="300" height="70" 
            />
  </div>

  <!-- Login Form -->
  <form method="post">
    <input type="text" id="ten_tv" class="fadeIn second" name="ten_tv" placeholder="Họ và tên">
    <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
    <input type="text" id="sdt" class="fadeIn second" name="sdt" placeholder="Số điện thoại">
    <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Mật khẩu">
    <input type="submit" class="fadeIn fourth" name="submit" value="Đăng ký">
  </form>

  <!-- Remind Passowrd -->
  <div id="formFooter">
    <a class="underlineHover" href="#">Forgot Password?</a>
  </div>

</div>
</div>