<?php 

$id=$_GET["id"];
$query="DELETE FROM video_bai_giang where id_vd={$id}";
$result=mysqli_query($conn,$query);
 
	header('location:index.php?page_layout=video-bai-giang');

 ?>