<?php 

$sqlDm="SELECT * FROM menu ";
$queryDm= mysqli_query($conn, $sqlDm);
$rowDm= mysqli_fetch_array($queryDm);
   $sql = "SELECT * FROM block_khoahoc INNER JOIN menu ON block_khoahoc.id_khoahoc=menu.id_kh WHERE dac_biet = 1";
   $query = mysqli_query($conn,$sql);


 ?>





 <div class="popular_courses">
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

                while ($row = mysqli_fetch_array($query)) {
            
               ?>
              <div class="single_course">
                <div class="course_head">
                  <img  src="admin/images/<?php echo $row['image'] ?>" width="350" height="250" />
                </div>
                <div class="course_content">
                  <span class="price">$<?php echo $row['hoc_phi'] ?></span>
                  <span class="tag mb-4 d-inline-block"><?php echo $row['ten_kh']; ?></span>
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

             <?php 
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>