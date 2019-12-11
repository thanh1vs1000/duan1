
<?php
include_once"./layout/header.php";
$id_kh=$_GET['id_kh'];
$sqlDm="SELECT * FROM menu WHERE id_kh=$id_kh";
$queryDm= mysqli_query($conn, $sqlDm);
$rowDm= mysqli_fetch_array($queryDm);

if(isset($_GET['trang'])){
    $trang=$_GET['trang'];
}
else{
    $trang=1;
}
$rowsPertrang=4;
$perRow=$trang*$rowsPertrang-$rowsPertrang;
$sql2="SELECT * FROM block_khoahoc WHERE id_khoahoc=$id_kh ORDER BY id DESC LIMIT $perRow,$rowsPertrang";
$query2= mysqli_query($conn, $sql2);

//tong so ban ghi
$totalRows= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM block_khoahoc WHERE id_khoahoc=$id_kh"));

//tong so trang
$totaltrangs=ceil($totalRows/$rowsPertrang);

//xay dung thanh phan trang
$listtrang="";
for($i=1; $i<=$totaltrangs; $i++){
    if($trang==$i){
        $listtrang.='<li class="active"><a href="index.php?page=khoa-hoc-dm&id_kh='.$id_kh.'&trang='.$i.'">'.$i.'</a></li>';
    }
    else{
        $listtrang.='<li><a href="index.php?page=khoa-hoc-dm&id_kh='.$id_kh.'&trang='.$i.'">'.$i.'</a></li>';
    }
}
?>




    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                  <h2><?php echo $rowDm['ten_kh'] ?></h2>
                <div class="trang_link">
                  <a href="index.html">Trang chủ</a>/
                  <a href="courses.html">Khóa học</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">CÁC KHÓA HỌC</h2>
              <p>
                Hãy học tiếng anh ngay hôm nay để có thể giao tiếp với người nước ngoài !
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              <?php 
                while ($row = mysqli_fetch_array($query2)) {
             
               ?>
             <div class="single_course">
                <div class="course_head">
                  <img  src="admin/images/<?php echo $row['image'] ?>" width="350" height="250" />
                </div>
                <div class="course_content">
                  <span class="price">$<?php echo $row['hoc_phi'] ?></span>
                  <span class="tag mb-4 d-inline-block"><?php echo $rowDm['ten_kh'] ?></h2></span>
                  <h4 class="mb-3">
                    <a href="index.php?page=chi-tiet-khoa-hoc&id=<?php echo $row['id']; ?>"><?php echo $row['ten_block'] ?></a>
                  </h4>
                  <p>
                   SỐ BUỔI : <?php echo $row['so_buoi'] ?>buổi/khóa.
                  </p>
                   <p>
                   NGÀY KHAI GIẢNG : <?php echo $row['ngay_hoc'] ?>
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                   <!--  <div class="authr_meta">
                      <img src="img/courses/author1.png" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div> -->
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ul class="pagination" style="float: right;">
      <?php 
      echo $listtrang;
      ?>
    </ul>
    <?php 
      include_once"dang-ky.php";
      ?>
      <hr>
      <?php
      include_once"footer.php";
       ?>