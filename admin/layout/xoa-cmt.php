<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM cmt WHERE id_cmt={$id}";
	$query = mysqli_query($conn,$sql);
	header('location:index.php?page_layout=cmt');

 ?>