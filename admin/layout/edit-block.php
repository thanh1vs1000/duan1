<?php 
include_once"sidebar.php";


$id=$_GET['id'];
$sqlselect="SELECT * FROM menu";
$resultCat=Mysqli_query($conn,$sqlselect) or die("Lỗi truy vấn Danh Mục");
$sql="SELECT * FROM block_khoahoc WHERE id=$id";
$query= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($query);

if(isset($_POST['addNew'])){
    $ten_block=$_POST['ten_block'];
    $hoc_phi=$_POST['hoc_phi'];
    $khuyen_mai=$_POST['khuyen_mai'];
    $so_buoi=$_POST['so_buoi'];
    $ngay_hoc=$_POST['ngay_hoc'];
    $mota=$_POST['mota'];

  	if($_FILES['image']['name']==""){
        $image=$_POST['image'];
    }
    else{
        $image=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
    }
    
    
    
    $id_khoahoc=$_POST['id_khoahoc'];
    
    
    $dac_biet=$_POST['dac_biet'];
    
    if(isset($ten_block) && isset($hoc_phi) && isset($so_buoi) && isset($ngay_hoc) && isset($mota) && isset($khuyen_mai) && isset($image) && isset($id_khoahoc) && isset($dac_biet))
    {
        move_uploaded_file($tmp_name, 'images/'.$image);

    $sql="UPDATE block_khoahoc SET ten_block='$ten_block',hoc_phi='$hoc_phi',khuyen_mai='$khuyen_mai',so_buoi='$so_buoi',ngay_hoc='$ngay_hoc',mota='$mota',image='$image',dac_biet='$dac_biet',id_khoahoc='$id_khoahoc' WHERE id=$id";
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
			<input type="text" class="form-control" value="<?php if(isset($_POST['ten_block'])){echo $_POST['ten_block'];} else{ echo $row['ten_block'];} ?>" placeholder="Nhập Tên sản Phẩm"  name="ten_block" id="ten_block" required="">
		</div>
		<div class="form-group">
			<label>Khóa học</label>
			<select name="id_khoahoc" id="id_khoahoc" class="form-control">
				
				<?php 
					while ($rowcat=mysqli_fetch_assoc($resultCat)) {
					?>
					<option 

								<?php
                                    if($row['id']==$rowcat['id_kh']){
                                        echo 'selected="selected"';
                                    }
                                    ?>

					value="<?php echo($rowcat["id_kh"]) ?>"><?php echo($rowcat["ten_kh"]) ?></option>
					<?php
				}

				?>
			</select>
		</div>
		<div class="form-group">
			<label>Ảnh khối học</label>                 
			<input type="file" id="image" name="image">
			<input type="hidden" name="image" value="<?php echo $row['image'] ?>">
		</div>
		<div class="form-group">
			<label>Ngày khai giảng</label>
			<input type="text" id="ngay_hoc" name="ngay_hoc" class="form-control" name="" required="" value="<?php if(isset($_POST['ngay_hoc'])){echo $_POST['ngay_hoc'];} else{ echo $row['ngay_hoc'];} ?>">
		</div>
		<div class="form-group">
			<label>Học phí</label>
			<input type="text" id="hoc_phi" name="hoc_phi" class="form-control" name="" required="" value="<?php if(isset($_POST['hoc_phi'])){echo $_POST['hoc_phi'];} else{ echo $row['hoc_phi'];} ?>">
		</div>
		<div class="form-group">
			<label>Khuyến mãi</label>
			<input type="text" id="khuyen_mai" name="khuyen_mai" class="form-control" name="" required="" value="<?php if(isset($_POST['khuyen_mai'])){echo $_POST['khuyen_mai'];} else{ echo $row['khuyen_mai'];} ?>">
		</div>
		<div class="form-group">
			<label>Số buổi</label>
			<input type="number" id="so_buoi" name="so_buoi" class="form-control" name="" required="" value="<?php if(isset($_POST['so_buoi'])){echo $_POST['so_buoi'];} else{ echo $row['so_buoi'];} ?>">
		</div>
</div>
<div class="col-md-6">
		<div class="form-group">
			<label>Mô Tả</label><br/>
			<textarea name="mota" id="mota" cols="80" rows="10" ><?php if(isset($_POST['mota'])){echo $_POST['mota'];} else{ echo $row['mota'];} ?></textarea> <script type="text/javascript">
                                CKEDITOR.replace('mota');
                            </script>
		</div>
		 <div class="form-group">
                            <label>Sản phẩm đặc biệt</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="dac_biet" 
                                           <?php 
                                           if($row['dac_biet']==1){
                                               echo 'checked';
                                           }
                                           ?>
                                           id="optionsRadios1" value=1>Có
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="dac_biet" 
                                           <?php 
                                           if($row['dac_biet']==0){
                                               echo 'checked';
                                           }
                                           ?>
                                           id="optionsRadios2" value=0>Không
                                </label>
                            </div>

         </div>


	<button type="submit" class="btn btn-primary" name="addNew">Chỉnh sửa</button>
	<button type="reset" class="btn btn-default" name="reset">Làm mới</button>	
</div>
</form>
</div>