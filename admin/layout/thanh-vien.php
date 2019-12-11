<script>
    function xoaDanhMuc(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }
</script>
<?php 
	$sql = "SELECT * FROM thanhvien";
	$query = mysqli_query($conn,$sql);
 ?>
	<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">QUẢN LÝ THÀNH VIÊN</li>
			</ol>
		</div><!--/.row-->
		
<div class="row">
	<!-- Grid column -->
	<div class="col-md-12">
		<h2 class="py-3 text-center font-bold font-up blue-text">QUẢN LÝ THÀNH VIÊN</h2>
	</div>
	<!-- Grid column -->
</div>
<hr>
	<a href="index.php?page_layout=add-thanhvien"><span class="btn btn-warning">Thêm mới +</span></a><br/><br/>
<table class="table table-hover table-responsive mb-0" id="table">
	<!--Table head-->
	<thead>
		<tr>
			<th scope="row">ID</th>
			<th class="th-lg">Tên thành viên</th>
			<th class="th-lg">Email</th>
			<th class="th-lg">Số điện thoại</th>
			
			<th class="th-lg">Mật khẩu</th>

			<th class="th-lg" colspan="2">Tùy Chọn</th>


		</tr>
	</thead>
	<!--Table head-->
	<!--Table body-->
	<tbody>
		<?php while ($row = mysqli_fetch_array($query)) {
		 ?>
		<tr>
			<th scope="row"><?php echo $row['id']; ?></th>
			<td><?php echo $row['ten_tv']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['sdt']; ?></td>
			<td><?php echo $row['pass']; ?></td>
			
			<td><a  onClick="return xoaDanhMuc();" href="index.php?page_layout=xoa-thanhvien&id=<?php echo $row['id'] ?>"><button type="button"class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a></td>


		</tr>
		<?php } ?>



	</tbody>
	<!--Table body-->
</table>
