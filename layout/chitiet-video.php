
<!--================ Start footer Area  =================-->
<?php include_once"layout/header.php" ;

$id = $_GET['id'];
$sql="SELECT * FROM video_bai_giang WHERE id_vd=$id";
$query= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($query);

?>



?>
<style type="text/css">
  .cssvideo,.tv,.tieude{
    position: absolute;
  }
  .tieude{
    z-index: 4;
  }
  #anhtv{
    margin-left: 400px;

  }
  #baoquat{
    height: 800px;
  }
  .tv{
    z-index: 2;
  }
  .cssvideo{
    margin-left: 480px;
    margin-top: 150px;

    z-index: 3
  }
  iframe{
    border-radius: 50px;
  }
  .tieude{ 
    font-size: 25px;
    margin-top: 680px;
    margin-left: 500px;
    font-weight: bold;
    color: #2F4F4F;
 
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
<div class="container-fluid">
  <div class="row" id="baoquat">
    <div class="tv"><img src="admin/images/icon/tv3.png" width="1200" height="800" id="anhtv" ></div>

    <div class="cssvideo">
      <iframe width="900" height="490" src="https://www.youtube.com/embed/<?php echo $row['link_video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="tieude" >
      <span><?php echo $row['tieu_de']; ?></span>
    </div>

  </div>
</div>

<?php include_once"layout/footer.php" ?>