<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'CẤU HÌNH | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>
<?php
if(isset($_POST['btnSaveOption']) && $getUser['level'] == 'admin')
{
    if($NDVMEDIA->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    foreach ($_POST as $key => $value)
    {
        $NDVMEDIA->update("options", array(
            'value' => $value
        ), " `name` = '$key' ");
    }
    admin_msg_success('Lưu thành công', '', 500);
}
?>


<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">MODUN</h4>
                  <p class="card-description">
                                    </p>
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="tenweb" value="<?=$NDVMEDIA->site('tenweb');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mô tả website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="mota" value="<?=$NDVMEDIA->site('mota');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Từ khóa tìm kiếm</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="tukhoa" value="<?=$NDVMEDIA->site('tukhoa');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email Admin</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="email" name="email_admin" value="<?=$NDVMEDIA->site('email_admin');?>"
                                            class="form-control" placeholder="Nhập Email Admin">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Giảm Giá</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="giamgia" value="<?=$NDVMEDIA->site('giamgia');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">APP ID FB</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="app_id" value="<?=$NDVMEDIA->site('app_id');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> app_secret FB</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="app_secret" value="<?=$NDVMEDIA->site('app_secret');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">CLIENT ID GG</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="client_id_gg" value="<?=$NDVMEDIA->site('client_id_gg');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> CLIENT secret GG</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="client_secret_gg" value="<?=$NDVMEDIA->site('client_secret_gg');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> HOTLINE</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="hotline" value="<?=$NDVMEDIA->site('hotline');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> FACEBOOK</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="facebook" value="<?=$NDVMEDIA->site('facebook');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> ZALO </label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="zalo" value="<?=$NDVMEDIA->site('zalo');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> VIDEO YOUTUBE</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="id_video_youtube" value="<?=$NDVMEDIA->site('id_video_youtube');?>"
                                            class="form-control" placeholder="Nhập ID VIDEO">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Thông báo</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="textarea" name="thongbao"
                                            rows="6"><?=$NDVMEDIA->site('thongbao');?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Thông báo chữ chạy </label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="textarea" name="text_run"
                                            rows="6"><?=$NDVMEDIA->site('text_run');?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Thông báo top nạp</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="textarea" name="motatopnap"
                                            rows="6"><?=$NDVMEDIA->site('motatopnap');?></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">HTML-JS Footer</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="form-control" rows="10"
                                            style="background-color: #000;color:#00d230;" name="html_footer"
                                            placeholder="Chèn JS trang trí hay chèn code gì vô cũng được nếu muốn"
                                            rows="6"><?=$NDVMEDIA->site('html_footer');?></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="btnSaveOption" class="btn btn-primary btn-block">
                                <span>LƯU</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
$(function() {
    // Summernote
    $('.textarea').summernote()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });
})
</script>
</div></div></div></div>
<?php 
    require_once("../../public/admin/Footer.php");
?>