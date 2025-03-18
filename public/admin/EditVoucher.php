<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'CHỈNH SỬA MÃ GIẢM GIÁ | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<?php
if(isset($_GET['id']) && $getUser['level'] == 'admin')
{
    $row = $NDVMEDIA->get_row(" SELECT * FROM `magiamgia` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}

if(isset($_POST['LuuVoucher']) && $getUser['level'] == 'admin' )
{
    if($NDVMEDIA->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    $NDVMEDIA->update("magiamgia", array(
        'code' => check_string($_POST['code']),
        'solan' => check_string($_POST['solan']),
        'giam' => check_string($_POST['giam']),
        'dichvu' => check_string($_POST['dichvu'])
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
                  <h4 class="card-title">Chỉnh sửa mã giảm giá <?=$row['code'];?></h4>
                  <p class="card-description">
                    EDIT NHÓM
                  </p>

                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mã giảm giá</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="code" id="code" value="<?=$row['code'];?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Số lần sử dụng</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="solan" id="solan" value="<?=$row['solan'];?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">% Giảm giá </label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="giam" id="giam" value="<?=$row['giam'];?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Dịch vụ</label>
                                <div class="col-sm-9">
                                        <select class="form-control show-tick" id="dichvu" name="dichvu" required>
                                            <option <?=$row['dichvu'] == 'caythue' ? 'selected' : '';?> value="caythue">Vật Phẩm</option>
                                            <option <?=$row['dichvu'] == 'robux' ? 'selected' : '';?> value="robux">Robux</option>
                                            <option <?=$row['dichvu'] == 'gamepass' ? 'selected' : '';?> value="gamepass">GamePass</option>
                                            <option <?=$row['dichvu'] == 'muaacc' ? 'selected' : '';?> value="muaacc">Tài Khoản|Mua Acc</option>
                                        </select>
                                    </div>
                                </div>
                            
                            <div class="footer">
                                <button type="submit" name="LuuVoucher" class="btn btn-danger">LƯU NGAY</button>
                                <a type="button" class="btn btn-secondary"
                                    href="<?=BASE_URL('public/admin/Voucher.php/');?>">QUAY LẠI</a>
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