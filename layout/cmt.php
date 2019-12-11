                <?php   
                            if (isset($_POST['submit'])) {
                              
                                        $tenkh = $_POST['tenkh'];
                                        $feedback = $_POST['feedback'];
                                        $ngaygio = date("Y-m-d H:i:s");

                                   if (isset($tenkh) && isset($feedback) && isset($ngaygio)) {
                                      $sql = "INSERT INTO cmt(ten_tv,nd_cmt,ngay_cmt,id_block) VALUES ('$tenkh','$feedback','$ngaygio','$id')";
                                      $query = mysqli_query($conn,$sql);
                                      header("location:index.php?chi-tiet-khoa-hoc&id=".$id);

                                   }
                            }

                 ?>


                 <style type="text/css">
                     #name{
                        width: 100%;
                     }
                     #sub{
                      /*  width: 200px;
                        height: 50px;
                        text-align: center;*/
                     }

                 </style>       
                        <div class="feedeback">
                            <form method="post" action="index.php?chi-tiet-khoa-hoc&id=<?php echo $id ?>">
                            <h6>Đánh giá</h6>
                            <div class="form-group">
                                <label> Tên khách hàng:  </label>
                             <input type="text" class="form-control" name="tenkh" id="name" required="">
                            </div>
                            <textarea name="feedback" class="form-control" cols="10" rows="10" required=""></textarea>
                            <div class="mt-10 text-right">
                                <input type="submit"  name="submit" id="sub" value="Bình luận">
                            </div>
                            </form>
                        </div>
                        <div class="comments-area mb-30">
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>