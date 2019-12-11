<script>
    function xoaDanhMuc(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }
</script>
<?php 
$sqlselect="SELECT * FROM menu";
$resultCat=Mysqli_query($conn,$sqlselect) or die("Lỗi truy vấn Danh Mục");

if(isset($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page=1;
}

$rowsPerPage=5;
$perRow=$page*$rowsPerPage-$rowsPerPage;

$sqlselect = "SELECT * FROM block_khoahoc INNER JOIN menu ON block_khoahoc.id_khoahoc=menu.id_kh ORDER BY id ASC LIMIT $perRow,$rowsPerPage";
$result = mysqli_query($conn, $sqlselect)or die("lỗi truy vấn danh mục");
$i = 0;

$totalRows= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM block_khoahoc"));
$totalPages= ceil($totalRows/$rowsPerPage);

$listPage="";
for($i=1;$i<=$totalPages;$i++){
    if($page==$i){
        $listPage.='<li class="active"><a class="page-link" href="index.php?page_layout=block-khoa-hoc&page='.$i.'">'.$i.'</a></li>';
    }
    else{
        $listPage.='<li><a class="page-link" href="index.php?page_layout=block-khoa-hoc&page='.$i.'">'.$i.'</a></li>';
    }
}
?>
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">QUẢN LÝ KHÓA HỌC</li>
			</ol>
		</div><!--/.row-->
		
<div class="row">
	<!-- Grid column -->
	<div class="col-md-12">
		<h2 class="py-3 text-center font-bold font-up blue-text">QUẢN LÝ KHÓA HỌC</h2>
	</div>
	<!-- Grid column -->
</div>
<hr>
<a href="index.php?page_layout=add-block"><span class="btn btn-warning">Thêm mới +</span></a><br/><br/>
<table class="table table-hover table-responsive mb-0" id="table">
	<!--Table head-->
	<thead>
		<tr>
			<th scope="row">ID</th>
			<th class="th-lg">Tên khóa học</th>
			<th class="th-lg">Ảnh</th>
			<th class="th-lg">Học phí</th>
			<th class="th-lg">Khóa học</th>

			<th class="th-lg">Số buổi học</th>
			<th class="th-lg">Ngày khai giảng</th>

			<th class="th-lg" colspan="2">Tùy Chọn</th>


		</tr>
	</thead>
	<!--Table head-->
	<!--Table body-->
	<tbody>
		<?php 
			
			 while ($row = mysqli_fetch_assoc($result)) {

                            $i++;
		
		 ?>
		<tr>
			<th scope="row"><?php echo $row['id'] ?></th>
			<td><span style="font-size: 15px;"><?php echo $row['ten_block'] ?></span></td>
			<td><img src="images/<?php echo $row['image'] ?>" style="width:60px; height: 60px;"></td>
			<td><?php echo $row['hoc_phi'] ?>$</td>
			<td><?php echo $row['ten_kh']; ?></td>
			<td><span class="label label-danger"><?php echo $row['so_buoi'] ?></span></td>
			<td><?php echo $row['ngay_hoc'] ?></td>
			<td><a href="index.php?page_layout=edit-block&id=<?php echo $row['id'] ?>"><button type="button"class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
			<td><a onClick="return xoaDanhMuc();" href="index.php?page_layout=delete-block&id=<?php echo $row['id'] ?>"><button type="button"class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a></td>


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
