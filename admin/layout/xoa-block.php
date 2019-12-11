<?php 

$id=$_GET["id"];
$query="DELETE FROM block_khoahoc where id={$id}";
$result=mysqli_query($conn,$query);
 
	header('location:index.php?page_layout=block-khoa-hoc');

 ?>