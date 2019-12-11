<script>
    function xoaDanhMuc(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }
</script>
<?php 
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page=1;
}

$rowsPerPage=5;
$perRow=$page*$rowsPerPage-$rowsPerPage;

$sqlselect = "SELECT * FROM video_bai_giang INNER JOIN block_khoahoc ON video_bai_giang.id_block=block_khoahoc.id ORDER BY id_vd ASC LIMIT $perRow,$rowsPerPage";
$result = mysqli_query($conn, $sqlselect);
$i = 0;

$totalRows= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM video_bai_giang")) or die;
$totalPages= ceil($totalRows/$rowsPerPage);

$listPage="";
for($i=1;$i<=$totalPages;$i++){
    if($page==$i){
        $listPage.='<li class="active"><a class="page-link" href="index.php?page_layout=video-bai-giang&page='.$i.'">'.$i.'</a></li>';
    }
    else{
        $listPage.='<li><a class="page-link" href="index.php?page_layout=video-bai-giang&page='.$i.'">'.$i.'</a></li>';
    }
}
?>


<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">QUẢN LÝ VIDEO</li>
			</ol>
		</div><!--/.row-->
		
<div class="row">
	<!-- Grid column -->
	<div class="col-md-12">
		<h2 class="py-3 text-center font-bold font-up blue-text">QUẢN LÝ VIDEO</h2>
	</div>
	<!-- Grid column -->
</div>
<hr>
<a href="index.php?page_layout=add-video-giang"><span class="btn btn-warning">Thêm mới +</span></a><br/><br/>
<table class="table table-hover table-responsive mb-0" id="table">
	<!--Table head-->
	<thead>
		<tr>
			<th scope="row">ID</th>
			<th class="th-lg">Tiêu đề</th>
			<th class="th-lg">Nguồn video</th>
			<th class="th-lg">Block</th>
			
		

			<th class="th-lg" colspan="2">Tùy Chọn</th>


		</tr>
	</thead>
	<tbody>
		<?php 
		while ($row = mysqli_fetch_assoc($result)) {
		
		 ?>
		<tr>
			<th scope="row"><?php echo $row['id_vd'] ?></th>
			<td><?php echo $row['tieu_de'] ?></td>
			<td><a href="<?php echo $row['link_video'] ?>"><?php echo $row['link_video'] ?></a></td>
			<td><?php echo $row['ten_block']; ?></td>
			
			<td><a href="index.php?page_layout=edit-video-giang&id=<?php echo $row['id_vd'] ?>"><button type="button"class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
			<td><a onClick="return xoaDanhMuc();" href="index.php?page_layout=delete-video-giang&id=<?php echo $row['id_vd'] ?>"><button type="button"class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a></td>


		</tr>
		<?php 
			}
		 ?>
		



	</tbody>
	<!--Table body-->
</table>
 <ul class="pagination" style="float: right;">
                            <?php 
                            echo $listPage;
                             ?>
                    </ul>
