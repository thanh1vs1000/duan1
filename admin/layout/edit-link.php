<?php
$id = $_GET["id"];
$sqlselect="SELECT * FROM block_khoahoc";
$resultCat=Mysqli_query($conn,$sqlselect) or die("Lỗi truy vấn Danh Mục");

$sql="SELECT * FROM video_bai_giang WHERE id_vd=$id";
$query= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($query);
if(isset($_POST['addlink'])){
    $tieu_de=$_POST['tieu_de'];
    $link_video = $_POST['link_video'];
     $id_block = $_POST['id_block'];

     $sql = "UPDATE video_bai_giang SET tieu_de = '$tieu_de',link_video = '$link_video',id_block = '$id_block' WHERE id_vd=$id";
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
        <h1 class="page-header">Chỉnh sửa video</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Chỉnh sửa video</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">
                        <div class="form-group">
                            <label>Tiêu đề <span style="color: red;">(*)</span>
                            div</label>
                            <input  value="<?php if (isset($_POST['tieu_de'])) {
                                        echo $_POST['tieu_de'];
                                        } else {
                                            echo $row['tieu_de'];
                                        } ?>" name="tieu_de" class="form-control" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label>Nguồn video <span style="color: red;">(*)</span></label>
                            <input value="<?php if (isset($_POST['link_video'])) {
                                        echo $_POST['link_video'];
                                        } else {
                                            echo $row['link_video'];
                                        } ?>" name="link_video" class="form-control" type="text" required="">
                        </div>                          
                        <div class="form-group">
                            <label>Block <span style="color: red;">(*)</span></label>
                            <select name="id_block" id="id_block" class="form-control">
                                <?php
                                while($rowcat= mysqli_fetch_array($resultCat)){
                                ?>
                                <option 
                                    <?php
                                    if($row['id_block']==$rowcat['id']){
                                        echo 'selected="selected"';
                                    }
                                    ?>
                                    value="<?php echo($rowcat["id"]) ?>"><?php echo($rowcat["ten_block"]) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                            <button type="submit" class="btn btn-primary" name="addlink">Chỉnh sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>

                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
    <div style="width: 100%; height: 500px;">
        
    </div><!-- /.row -->
