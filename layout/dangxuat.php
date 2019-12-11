<?php 

  session_start();
  if (isset($_SESSION['dangnhap'])) {
    unset($_SESSION['dangnhap']);
    header("location: index.php");
  }else{
    header('location :index.php');
  }


 ?>