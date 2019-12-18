<?php 
include_once"header.php";


$id = $_GET['id'];
$sql="SELECT * FROM block_khoahoc WHERE id=$id";
$query= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($query);

?>
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="banner_content text-center">
            <h2>Chi tiết khóa học</h2>
            <div class="page_link">
              <a href="index.php">Trang Chủ</a>
              <a href="#">Khóa học</a>
              <a href="#">Chi tiết khóa học</a>
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
                <div class="main_image">
                    <img  src="admin/images/<?php echo $row['image']  ?>" width="700" height="400" alt="">
                </div>
                <div class="content_wrapper">
                    <h4 class="title">Mô tả ngắn gọn</h4>
                    <div class="content">
                        <p><?php echo $row['mota']; ?></p>
                    </div>

                </div>
                <?php 

                $sql3 = "SELECT * FROM cmt WHERE id_block=$id ORDER BY id_cmt DESC";
                $query3 = mysqli_query($conn,$sql3);
                    if (!isset($_SESSION['dangnhap'])) {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                Bạn cần đăng nhập để bình luận ! <a href='index.php?page=login'>Đăng Nhập Ngay</a>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                         </button>
                        </div>";
                    }else{
                    if (isset($_POST['submit']) && isset($_SESSION['dangnhap'])) {

                    $tenkh = $_SESSION['dangnhap'];
                    $ndcmt = $_POST['ndcmt'];
                    $ngaygio = date("Y-m-d H:i:s");

                    if (isset($tenkh) && isset($ndcmt)) {
                      $sql2 = "INSERT INTO cmt(ten_tv,nd_cmt,ngay_cmt,id_block) VALUES ('$tenkh','$ndcmt','$ngaygio','$id')";
                      $query2 = mysqli_query($conn,$sql2);
                      header("location:index.php?page=chi-tiet-khoa-hoc&id=".$id);

                } 
              }
          }

              ?>


              <style type="text/css">
               #name{
                width: 100%;
            }


                </style>       
                <h2>Đánh giá từ học viên</h2>
                <div class="comments-area mb-30">
                    <?php 
                        while ($row2 = mysqli_fetch_array($query3)) {
                        
                     ?>
                    <div class="comment-list">
                        <div class="single-comment single-reviews justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/add.jpg" width="50" height="50">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">
                                        <span style="font-weight: bold;"><?php echo $row2['ten_tv']; ?></span></a>
                                        <div class="star">
                                           <?php echo $row2['ngay_cmt']; ?>
                                        </div>
                                    </h5>
                                    <p class="comment">
                                       <?php echo $row2['nd_cmt']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div class="feedeback">
                    <form method="post">
                        <h6>Đánh giá</h6>
                        <!-- <div class="form-group">
                            <label> Tên khách hàng:  </label>
                            <input type="text" class="form-control" name="tenkh" id="name" required="">
                        </div> -->
                        <textarea name="ndcmt" class="form-control" cols="10" rows="10" required=""></textarea>
                        <div class="mt-10 text-right">
                            <input type="submit"  name="submit" id="sub" value="Bình luận">
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-lg-4 right-contents">
                <ul>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Tên khối học</p>
                            <span class="or"><?php  echo $row['ten_block'] ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Giá tiền</p>
                            <span>$<?php  echo $row['hoc_phi'] ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Số buổi học</p>
                            <span><?php  echo $row['so_buoi'] ?>/buổi</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Ngày bắt đầu</p>
                            <span><?php  echo  $row['ngay_hoc'] ?></span>
                        </a>
                    </li>
                </ul>
                <a href="index.php?page=show-video&id=<?php echo $row['id'] ?>" class="primary-btn2 text-uppercase enroll rounded-0 text-white">Tham gia học</a>

                <h4 class="title">Reviews</h4>
                <div class="content">
                    <div class="review-top row pt-40">
                        <div class="col-lg-12">
                            <h6 class="mb-15">Provide Your Rating</h6>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="star">
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Puncuality</span>
                                <div class="star">
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="star">
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                        </div>
                    </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
    include_once"footer.php";
    ?>

