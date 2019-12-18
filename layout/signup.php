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
  <form method="post" id="signupForm" class="form-horizontal">
    <input type="text" id="ten_tv" class="fadeIn second" name="ten_tv" placeholder="Họ và tên">
    <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
    <input type="text" id="sdt" class="fadeIn second" name="sdt" placeholder="Số điện thoại">
    <input type="password" id="pass" class="fadeIn third" name="pass" placeholder="Mật khẩu">
    <input type="password" id="confirm_password" class="fadeIn third" name="confirm_password" placeholder="Nhập lại mật khẩu">
    <input type="submit" class="fadeIn fourth" name="submit" value="Đăng ký">
  </form>

  <!-- Remind Passowrd -->
  <div id="formFooter">
    <a class="underlineHover" href="#">Forgot Password?</a>
  </div>

</div>
</div>
<script type="text/javascript">
 

    $( document ).ready( function () {
      $( "#signupForm" ).validate( {
        rules: {
        
          ten_tv: {
            required: true,
            minlength: 5
          },
          pass: {
            required: true,
            minlength: 5
          },
          sdt: {
            required: true,
            number: true,
            // matches: "[0-9]+",  // <-- no such method called "matches"!
            minlength:10,
            maxlength:10
          },
          confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#pass"
          },
          email: {
            required: true,
            email: true
          },
        
        },
        messages: {
        
          ten_tv: {
            required: "<br/>Vui lòng nhập tên của bạn",
            minlength: "<br/>Tên của bạn không được dưới 5 ký tự"
          },
          pass: {
            required: "<br/>Vui lòng nhập mật khẩu",
            minlength: "<br/>Mật khẩu của bạn phải nhiều hơn 6 ký tự"
          },
          confirm_password: {
            required: "<br/>Vui lòng xác nhận lại mật khẩu",
            minlength: "<br/>Mật khẩu của bạn nhập lại dưới 6 ký tự",
            equalTo: "<br/>Mật khẩu không khớp"
          },
          email: {
             required: "<br/>Vui lòng điền email của bạn",
             email : "<br/>Email của bạn không đúng định dạng"
          },
          sdt: {
             required: "<br/>Vui lòng điền số điện thoại của bạn",
             number : "<br/>Bạn phải nhập số",
             minlength : "<br/>Không đúng định dạng",
             maxlength :"<br/>Không đúng định dạng"

          },
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `invalid-feedback` class to the error element
          error.addClass( "invalid-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.next( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
      } );

    } );
  </script>
