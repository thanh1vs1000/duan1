<?php 

$id=$_GET["id"];
$query="DELETE FROM menu where id_kh={$id}";
$result=mysqli_query($conn,$query);
 
	header('location:index.php?page_layout=khoa-hoc');

 ?>