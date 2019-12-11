<?php 
include_once"sidebar.php";

$sqlselect="SELECT * FROM menu";
$resultCat=Mysqli_query($conn,$sqlselect) or die("Lỗi truy vấn Danh Mục");

if(isset($_POST['addNew'])){
	$ten_block=$_POST['ten_block'];
	$hoc_phi=$_POST['hoc_phi'];
	$khuyen_mai=$_POST['khuyen_mai'];
	$so_buoi=$_POST['so_buoi'];
	$ngay_hoc=$_POST['ngay_hoc'];
	$mota=$_POST['mota'];
	if($_FILES['image']['name']==''){
		$error_image='<span style="color: red;">Ảnh không hợp lệ</span>';
	}
	else{
		$image=$_FILES['image']['name'];
		$tmp_name=$_FILES['image']['tmp_name'];
	}

	if($_POST['id_khoahoc']=='unselect'){
		$error_id_khoahoc='<span style="color: red;">(*)</span>';
	}
	else{
		$id_khoahoc=$_POST['id_khoahoc'];
	}

	$dac_biet=$_POST['dac_biet'];

	if(isset($ten_block) && isset($hoc_phi) && isset($so_buoi) && isset($ngay_hoc) && isset($mota) && isset($khuyen_mai) && isset($image) && isset($id_khoahoc) && isset($dac_biet)){
		move_uploaded_file($tmp_name, 'images/'.$image);

		$sql="INSERT INTO block_khoahoc(ten_block,hoc_phi,so_buoi,ngay_hoc,mota,khuyen_mai,image,id_khoahoc,dac_biet) 
		VALUES('$ten_block','$hoc_phi','$so_buoi','$ngay_hoc','$mota','$khuyen_mai','$image','$id_khoahoc','$dac_biet')";
		$query= mysqli_query($conn, $sql);
		header('location: index.php?page_layout=block-khoa-hoc');
	}
}
?>




<div style="width: 100%; height: 1000px;">
	

	<form method="post" role="form" style="width: 100%;" enctype="multipart/form-data">
		<div class="col-md-6">

			<div class="form-group">
				<label>Tên khối học</label>
				<input type="text" class="form-control" placeholder="Nhập Tên sản Phẩm"  name="ten_block" id="ten_block" required="">
			</div>
			<div class="form-group">
				<label>Khóa học</label><?php if(isset($error_id_khoahoc)){echo $error_id_khoahoc;} ?>
				<select name="id_khoahoc" id="id_khoahoc" class="form-control">
					<option value="unselect" >--Chọn khóa học--</option>
					<?php 
					while ($rowcat=mysqli_fetch_assoc($resultCat)) {
						?>
						<option value="<?php echo($rowcat["id_kh"]) ?>"><?php echo($rowcat["ten_kh"]) ?></option>
						<?php
					}

					?>
				</select>
			</div>
			<div class="form-group">
				<label>Ảnh khối học</label>                 
				<input type="file" id="image" name="image">
			</div>
			<div class="form-group">
				<label>Ngày khai giảng</label>
				<input type="text" id="ngay_hoc" name="ngay_hoc" class="form-control" name="" required="">
			</div>
			<div class="form-group">
				<label>Học phí</label>
				<input type="text" id="hoc_phi" name="hoc_phi" class="form-control" name="" required="">
			</div>
			<div class="form-group">
				<label>Khuyến mãi</label>
				<input type="text" id="khuyen_mai" name="khuyen_mai" class="form-control" name="" required="">
			</div>
			<div class="form-group">
				<label>Số buổi</label>
				<input type="number" id="so_buoi" name="so_buoi" class="form-control" name="" required="">
			</div>
			
		</div>
		<div class="col-md-6">

			
			
			<div class="form-group">
				<label>Mô Tả</label><br/>
				<textarea name="mota" id="mota" cols="80" rows="10"></textarea>
				<script type="text/javascript">
					CKEDITOR.replace('mota');
				</script>
			</div>
			<div class="form-group">
				<label>Sản phẩm đặc biệt</label>
				<div class="radio">
					<label>
						<input type="radio" name="dac_biet" id="optionsRadios1" value=1>Có
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="dac_biet" id="optionsRadios2" value=0 checked>Không
					</label>
				</div>
			</div>


			<button type="submit" class="btn btn-primary" name="addNew">Thêm mới</button>
			<button type="reset" class="btn btn-default" name="reset">Làm mới</button>
		</div>

	</form>
</div>