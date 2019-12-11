	<script>
    function xoaDanhMuc(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }
</script>
<?php 
$sql = "SELECT * FROM menu ";
$query = mysqli_query($conn,$sql)or die("lỗi truy vấn danh mục");


?>



	<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">DANH MỤC</li>
			</ol>
		</div><!--/.row-->
		
<div class="row">
	<!-- Grid column -->
	<div class="col-md-12">
		<h2 class="py-3 text-center font-bold font-up blue-text">QUẢN LÝ MENU</h2>
	</div>
	<!-- Grid column -->
</div>
<hr>
<a href="index.php?page_layout=add-khoa-hoc"><span class="btn btn-warning">Thêm mới +</span></a><br/><br/>
<table class="table table-hover table-responsive mb-0" id="table">
	<!--Table head-->
	<thead>
		<tr>
			<th scope="row">ID</th>
			<th class="th-lg">Tên danh mục</th>
			<th class="th-lg">Trạng Thái</th>
			<th class="th-lg" colspan="2">Tùy Chọn</th>


		</tr>
	</thead>
	<!--Table head-->
	<!--Table body-->
	<tbody>
		<?php 
			  while ($row = mysqli_fetch_array($query)) {
		 ?>
		<tr>
			<th scope="row"><?php echo $row['id_kh'] ?></th>
			<td><?php echo $row['ten_kh'] ?></td>
			<td><?php echo ($row["trangthai"])?'<span class="label label-success">Hiển Thị</span>':'<span class="label label-danger">Ẩn</span>' ?></span></td>
			<td><a href="index.php?page_layout=edit-khoa-hoc&id=<?php echo $row["id_kh"] ?> "><button type="button"class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
			<td><a onClick="return xoaDanhMuc();" href="index.php?page_layout=xoa-khoa-hoc&id=<?php echo $row["id_kh"] ?> "><button type="button"class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a></td>


		</tr>
		<?php 
		} 
	?>


	</tbody>
	<!--Table body-->
</table>
