<?php 

$id=$_GET["id"];
$query="DELETE FROM thanhvien where id={$id}";
$result=mysqli_query($conn,$query);
 
	header('location:index.php?page_layout=thanh-vien');

 ?>