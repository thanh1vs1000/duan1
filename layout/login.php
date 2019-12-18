<?php 
if (isset($_SESSION['dangnhap'])) {
  header('location:index.php?page=profile');}
  else{
  if (isset($_POST["dangnhap"])) {
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $email = strip_tags($email);
    $email = addslashes($email);
    $pass = strip_tags($pass);
    $pass = addslashes($pass);
    if ($email == "" || $pass =="") {
        echo "<div class='alert alert-danger' style='width: 850px; margin-left:600px;' role='alert'>
  Vui lòng nhập email và mật khẩu!
</div>";
    }else{
        $sql = "SELECT * from thanhvien where email = '$email' and pass = '$pass' ";
        echo $sql;
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            echo "tên đăng nhập hoặc mật khẩu không đúng !";
        }else{
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['dangnhap'] = $email;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
            header('location: index.php');
        }
    }
}
}
?>


<link rel="stylesheet" type="text/css" href="css/cssrieng.css">
<div class="wrapper fadeInDown">
<div id="formContent">
  <!-- Tabs Titles -->
  <h2 class="active"><a href="index.php?page=login"> Đăng nhập</a></h2>
  <h2 class="inactive underlineHover"><a href="index.php?page=signup">Đăng ký</a> </h2>

  <!-- Icon -->
  <div class="fadeIn first">
  <img src="img/haha.png" width="300" height="70" 
            />
  </div>

  <!-- Login Form -->
  <form method="post" id="loginForm">
    <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
    <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Mật khẩu">
    <input type="submit" class="fadeIn fourth" name="dangnhap" value="Đăng nhập">
  </form>

  <!-- Remind Passowrd -->
  <div id="formFooter">
    <a class="underlineHover" href="#">Forgot Password?</a>
  </div>

</div>
</div>
