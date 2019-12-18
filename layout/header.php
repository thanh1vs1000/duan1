<?php 
  $sql = "SELECT * FROM menu WHERE trangthai = 1";
  $query = mysqli_query($conn,$sql);

 ?>
   <header class="header_area">
      <div class="main_menu">
      

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php"
              ><img src="img/haha.png" width="300" height="70" 
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=gioi-thieu">Giới thiệu</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Khóa học</a
                  >
                  <ul class="dropdown-menu">
                    <?php while ($row = mysqli_fetch_array($query)) {
                  ?>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?page=khoa-hoc-dm&id_kh=<?php echo $row['id_kh']; ?>"><?php echo $row['ten_kh']; ?></a>
                    </li>
                  <?php } ?>
                  </ul>
                </li>
    
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=lien-he">Liên hệ</a>
                </li>
                <li class="nav-item submenu dropdown" >
                  <a href="index.php?page=login" class="btn btn-warning" style="border-radius: 5px; margin-top: 17px; font-weight:bold;"><img src="img/user.png" width="20" height="20"></a>
                  <?php if (isset($_SESSION['dangnhap'])) {
                   
                  ?>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link">Xin Chào :<p><?php if(isset($_SESSION['dangnhap'])){echo $_SESSION['dangnhap'];} ?></p></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?page=dangxuat">Đăng Xuất</a>
                    </li>
                  </ul>
                <?php } ?>
                </li>
              
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>