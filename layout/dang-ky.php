<?php 
    if (isset($_POST["submit"])) {
    $ten_tv=$_POST["ten_tv"];
      $email=$_POST["email"];
        $sdt=$_POST["sdt"];
          $pass=$_POST["pass"];
    
    $sql="INSERT INTO thanhvien(ten_tv,email,sdt,pass) VALUES('$ten_tv','$email','$sdt','$pass')";
    mysqli_query($conn,$sql) or die("loi ket noi") ;
    header('location: index.php');
 }

 ?>



 <div class="section_gap registration_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Đăng ký ngay</h1>
                <p>
                 Có một khoảnh khắc trong cuộc đời của bất kỳ nhà thiên văn học khao khát nào đó là đã đến lúc mua chiếc kính thiên văn đầu tiên đó. Thật thú vị khi nghĩ về việc thiết lập trạm xem của riêng bạn.
                </p>
              </div>
              <div class="col clockinner1 clockinner">
                <h1 class="days">150</h1>
                <span class="smalltext">Days</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours">23</h1>
                <span class="smalltext">Hours</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="minutes">47</h1>
                <span class="smalltext">Mins</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="seconds">59</h1>
                <span class="smalltext">Secs</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Tham gia khóa học miễn phí ngay</h3>
              <p>Đó là thời gian cao cho việc học</p>
              <form
                
                method="post"
              >
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <input
                      name="ten_tv"
                      placeholder="Your Name"
                      required=""
                      type="text"
                    />
                    <input
                      name="sdt"
                      placeholder="Your Phone Number"
                      required=""
                    
                      type="tel"
                    />
                    <input
                      name="email"
                      placeholder="Your Email Address"
                      pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                      required=""
                      type="email"
                    />
                    <input
                      name="pass"
                      placeholder="Mật khẩu"
                      required=""
                      type="password"
                    />
                  </div>
                  <div class="col-lg-12 text-center">
                    <input type="submit" class="primary-btn" name="submit" value="Đăng Ký">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>