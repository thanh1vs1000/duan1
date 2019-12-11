	<script type="text/javascript">
			function xoaDanhMuc(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }


	</script>

	<?php 
		$sql = "SELECT * FROM cmt INNER JOIN block_khoahoc ON cmt.id_block=block_khoahoc.id";
		$query  = mysqli_query($conn,$sql);
	 ?>


	<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">QUẢN LÝ BÌNH LUẬN</li>
			</ol>
		</div><!--/.row-->
		
<div class="row">
	<!-- Grid column -->
	<div class="col-md-12">
		<h2 class="py-3 text-center font-bold font-up blue-text">QUẢN LÝ BÌNH LUẬN</h2>
	</div>
	<!-- Grid column -->
</div>
<hr>
<!-- x -->
<table class="table table-hover table-responsive mb-0" id="table">
	<!--Table head-->
	<thead>
		<tr>
			<th scope="row">ID Bình luận</th>
			<th class="th-lg">Tên Thành viên</th>
			<th class="th-lg">Khối học</th>
			<th class="th-lg">Nội dung</th>

			<th class="th-lg" colspan="2">Tùy Chọn</th>


		</tr>
	</thead>
	<!--Table head-->
	<!--Table body-->
	<tbody>
		<?php while ($row = mysqli_fetch_array($query)) {
		
		 ?>
		<tr>
			<th scope="row"><?php echo $row['id_cmt'] ?></th>
			<td><?php echo $row['ten_tv'] ?></td>
			<td><?php echo $row['ten_block'] ?></td>
			<td><?php echo $row['nd_cmt'] ?></td>
			
			<!-- <td><a href="#"><button type="button"class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td> -->
			<td><a onClick="return xoaDanhMuc();" href="index.php?page_layout=xoa-cmt&id=<?php echo $row['id_cmt'] ?>"><button type="button"class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a>
			</td>
		</tr>

		<?php
		 } 
		 ?>



	</tbody>
	<!--Table body-->
</table>
