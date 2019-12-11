<?php

$sqlselect="SELECT * FROM block_khoahoc";
$resultCat=Mysqli_query($conn,$sqlselect) or die("Lỗi truy vấn Danh Mục");
if(isset($_POST['addlink'])){
    $tieu_de=$_POST['tieu_de'];
    $link_video = $_POST['link_video'];
    if($_POST['id_block']=='unselect'){
        $error_id_block='<span style="color: red;">(*)</span>';
    }
    else{
        $id_block=$_POST['id_block'];
    }

    $sql="INSERT INTO video_bai_giang(tieu_de,link_video,id_block) VALUES('$tieu_de','$link_video','$id_block')";
    $query= mysqli_query($conn, $sql);
    header('location: index.php?page_layout=video-bai-giang');
}
?>




<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thêm mới video</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm mới vidoe</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">
                        <div class="form-group">
                            <label>Tiêu đề <span style="color: red;">(*)</span>
                            div</label>
                            <input name="tieu_de" class="form-control" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label>Nguồn video <span style="color: red;">(*)</span></label>
                            <input name="link_video" class="form-control" type="text" required="">
                        </div>                          
                        <div class="form-group">
                            <label>Block <span style="color: red;">(*)</span></label><?php if(isset($error_id_block)){echo $error_id_block;} ?>
                            <select name="id_block" id="id_block" class="form-control">
                                <option value="unselect" >--Chọn block--</option>
                                <?php 
                                while ($rowcat=mysqli_fetch_assoc($resultCat)) {
                                    ?>
                                    <option value="<?php echo($rowcat["id"]) ?>"><?php echo($rowcat["ten_block"]) ?></option>
                                    <?php
                                }

                                ?>
                            </select>
                        </div>
                            <button type="submit" class="btn btn-primary" name="addlink">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>

                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
    <div style="width: 100% ; height: 500px;">
        
    </div><!-- /.row -->
