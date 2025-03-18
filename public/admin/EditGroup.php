<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'CHỈNH SỬA NHÓM | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<?php
if(isset($_GET['id']) && $getUser['level'] == 'admin')
{
    $row = $NDVMEDIA->get_row(" SELECT * FROM `groups` WHERE `id` = '".check_string($_GET['id'])."'  ");
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
        $NDVMEDIA->update("groups", array(
            'img'       => check_string($_POST['img']),
        ), " `id` = '".$row['id']."' ");
    }
    $NDVMEDIA->update("groups", array(
        'img'       => check_string($_POST['img']),
        'title'     => check_string($_POST['title']),
        'chitiet'   => base64_encode($_POST['chitiet']),
        'gia'   => check_string($_POST['gia']),
        'display'   => check_string($_POST['display'])
    ), " `id` = '".$row['id']."' ");
    admin_msg_success("Lưu thành công", '', 500);
}

?>

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chỉnh sửa nhóm <?=$row['title'];?></h4>
                  <p class="card-description">
                    THÊM NHÓM MỚI
                  </p>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên nhóm</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="title" value="<?=$row['title'];?>" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gia</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="gia" value="<?=$row['gia'];?>" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh mô tả</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="img" class="form-control" required>
                                    </div>
                                    <i>Up ảnh lấy link tại: upanh.1doi1.com</i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chi tiết nhóm</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea name="chitiet" class="textarea"><?=base64_decode($row['chitiet']);?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hiển thị</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="display" required>
                                        <option value="<?=$row['display'];?>"><?=$row['display'];?></option>
                                        <option value="SHOW">SHOW</option>
                                        <option value="HIDE">HIDE</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="LuuChuyenMuc" class="btn btn-primary btn-block">
                                <span>LƯU NGAY</span></button>
                            <a type="button" href="<?=BASE_URL('Admin/Groups/'.$row['category']);?>"
                                class="btn btn-danger btn-block waves-effect">
                                <span>TRỞ LẠI</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CHI TIẾT DANH MỤC</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <img width="100%" src="<?=BASE_URL($row['img']);?>" />
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>







<?php 
    require_once(__DIR__."/Footer.php");
?>