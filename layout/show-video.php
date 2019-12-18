<?php 
if (!isset($_SESSION['dangnhap'])) {
    header("location:index.php?page=login");
}else{
include_once"layout/header.php";
$id=$_GET['id'];
$sqlDm="SELECT * FROM block_khoahoc WHERE id=$id";
$queryDm= mysqli_query($conn, $sqlDm);
$rowDm= mysqli_fetch_array($queryDm);

$sql = "SELECT * FROM video_bai_giang WHERE id_block =$id";
$query= mysqli_query($conn, $sql);



?>
<style type="text/css">
    #anhk{ border-radius: 75px; }
   
  

</style>
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="banner_content text-center">
            <h2>Các Khóa học</h2>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="courses.html">Courses</a>
              <a href="course-details.html"><?php echo $rowDm['ten_block']; ?></a>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Start Course Details Area =================-->
<section class="course_details_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 course_details_left">
                
                <div class="content_wrapper">
                  <h2>KHÓA HỌC : <?php echo $rowDm['ten_block']; ?></h2>
                  <center><img id="anhk" src="admin/images/<?php echo $rowDm['image'];  ?>" height="150" width="150"></center>
                    <h4 class="title" >VIDEO LỘ TRÌNH HỌC</h4>
                    <div class="content">
                        <ul class="course_list">
                            <?php while ($row = mysqli_fetch_array($query)) {
                             ?>
                             <li class="justify-content-between d-flex">
                                <p><?php echo $row['tieu_de'] ?></p>
                                <a class="primary-btn text-uppercase" href="index.php?page=detail-video&id=<?php echo $row['id_vd'] ?>">Xem video</a>
                            </li>
                            
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>


        
    </div>
</div>
</section>
<!--================ End Course Details Area =================-->

<!--================ Start footer Area  =================-->
<?php include_once"layout/footer.php"  ?>
<?php } ?>