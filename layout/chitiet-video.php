
    <!--================ Start footer Area  =================-->
   <?php include_once"layout/header.php" ;

    $id = $_GET['id'];
    $sql="SELECT * FROM video_bai_giang WHERE id_vd=$id";
    $query= mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($query);

 ?>



   ?>
   <style type="text/css">
     .cssvideo{
      background: #FFA200 !important;
      width: 700px; height: 420px;
      border: 1px solid;
      padding: 10px;  
      border-radius: 10px;
      margin-left: 200px;
      box-shadow: 10px 10px 15px 5px #888888;
     }
     .tieude{
      height: 300px;
     }

   </style>
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>BÀI GIẢNG</h2>
                <div class="page_link">
                  <a href="index.html">Trang chủ</a>
                  <a href="courses.html">Video</a>
                  <a href="course-details.html">Bài 1</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<hr>
  <div class="container">
    <div class="row">
      <div>
        <div class="cssvideo">
          <iframe width="680" height="400" src="https://www.youtube.com/embed/<?php echo $row['link_video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="tieude" >
         <span style="font-size: 25px; margin-left: 230px;"><?php echo $row['tieu_de']; ?></span>
      </div>
      
    </div>
  </div>

   <?php include_once"layout/footer.php" ?>