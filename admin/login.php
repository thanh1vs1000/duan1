<?php
      ob_start();
      session_start();
      include'./ketnoi/ketnoi.php';
      if (isset($_POST["submit"])) {
        $ten_dn=$_POST["ten_dn"];
        $pass=$_POST["pass"];
        $ten_dn = strip_tags($ten_dn);
        $ten_dn = addslashes($ten_dn);
        $pass = strip_tags($pass);
        $pass = addslashes($pass);
        if ($ten_dn == "" || $pass =="") {
          echo "ten_dn hoặc mật khẩu bạn không được để trống!";
        }else{
          $sql = "SELECT * from user where ten_dn = '$ten_dn' and pass = '$pass' ";
          $query = mysqli_query($conn,$sql);
          $num_rows = mysqli_num_rows($query);
          if ($num_rows==0) {
            echo "tên đăng nhập hoặc mật khẩu không đúng !";
          }else{
                      //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $ten_dn;
                      // Thực thi hành động sau khi lưu thông tin vào session
            header('Location: index.php');
          }
        }
      }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="js/jquery-1.11.1.min.js"></script>
 
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

    <div>

      <div id="form">
        <div class="logo">
          <img src="images/admin-settings-male.png" width="150" height="150">
        </g>
      </svg>
    </div>
    <form method="post" role="form">
    <div class="form-item">
      <p class="formLabel">Tên đăng nhập</p>
      <input type="text" name="ten_dn" id="ten_dn" class="form-style" autocomplete="off"/>
    </div>
    <div class="form-item">
      <p class="formLabel">Password</p>
      <input type="password" name="pass" id="pass" class="form-style" />
      <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
      <p><a href="#" ><small>Forgot Password ?</small></a></p>  
    </div>
    <div class="form-item">
      <input type="submit" class="login pull-right" name="submit" value="Đăng nhập">
      <div class="clear-fix"></div>
    </div>
    </form>
  </div>

</div>
<script type="text/javascript">
  $(document).ready(function(){
    var formInputs = $('input[type="text"],input[type="password"]');
    formInputs.focus(function() {
     $(this).parent().children('p.formLabel').addClass('formTop');
     $('div#formWrapper').addClass('darken-bg');
     $('div.logo').addClass('logo-active');
   });
    formInputs.focusout(function() {
      if ($.trim($(this).val()).length == 0){
        $(this).parent().children('p.formLabel').removeClass('formTop');
      }
      $('div#formWrapper').removeClass('darken-bg');
      $('div.logo').removeClass('logo-active');
    });
    $('p.formLabel').click(function(){
     $(this).parent().children('.form-style').focus();
   });
  });
</script>
</body>
</html>