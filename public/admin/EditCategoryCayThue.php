<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'CHỈNH SỬA CATEGORY CÀY THUÊ | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<?php
if(isset($_GET['id']) && $getUser['level'] == 'admin')
{
    $row = $NDVMEDIA->get_row(" SELECT * FROM `category_caythue` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}

if(isset($_POST['LuuChuyenMuc']) && $getUser['level'] == 'admin' )
{
    if($NDVMEDIA->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    if(check_img('img') == true)
    {
        
        $NDVMEDIA->update("category_caythue", array(
            'img' => check_string($_POST['img']),
        ), " `id` = '".check_string($row['id'])."' ");
    }
    $NDVMEDIA->update("category_caythue", array(
      'img' => check_string($_POST['img']),
        'title' => check_string($_POST['title']),
        'luuy' => $_POST['luuy'],
        'display' => check_string($_POST['display'])
    ), " `id` = '".check_string($row['id'])."' ");
    admin_msg_success("Lưu thành công", '', 500);
}

?>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chỉnh sửa category <?=$row['title'];?></h4>
                  <p class="card-description">
                    EDIT CHUYÊN MỤC CÀY THUÊ
                  </p>

                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tên chuyên mục</label>
                                    <div class="col-sm-8">
                                        <div class="form-line">
                                            <input type="text" name="title" id="title" value="<?=$row['title'];?>"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Lưu ý</label>
                                    <div class="col-sm-8">
                                        <div class="form-line">
                                            <textarea class="textarea" name="luuy"
                                                rows="6"><?=$row['luuy'];?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh mô tả</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="img" value="<?=$row['img'];?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Hiển thị</label>
                                    <div class="col-sm-8">
                                        <select class="form-control show-tick" id="display" name="display" required>
                                            <option <?=$row['display'] == 'SHOW' ? 'selected' : '';?> value="SHOW">SHOW
                                            </option>
                                            <option <?=$row['display'] == 'HIDE' ? 'selected' : '';?> value="HIDE">HIDE
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <button type="submit" name="LuuChuyenMuc" class="btn btn-danger">LƯU NGAY</button>
                                <a type="button" class="btn btn-secondary"
                                    href="<?=BASE_URL('Admin/Category/Cay-thue/');?>">QUAY LẠI</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<script>
$(function() {
    // Summernote
    $('.textarea').summernote()
})
</script>




<?php 
    require_once(__DIR__."/Footer.php");
?>