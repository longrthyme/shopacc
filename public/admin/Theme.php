<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'GIAO DIỆN | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>
 

    <?php
    if(isset($_POST['SaveSettings']))
    {
        if($NDVMEDIA->site('status_demo') == 'ON')
        {
            admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
        }
        if(check_img('backgroundlr') == true)
        {
            $rand = random('0123456789QWERTYUIOPASDGHJKLZXCVBNM', 3);
            $uploads_dir = '../../assets/storage/theme/backgroundlr.png';
            $tmp_name = $_FILES['backgroundlr']['tmp_name'];
            $addlogo = move_uploaded_file($tmp_name, $uploads_dir);
            if($addlogo)
            {
                $NDVMEDIA->update('options', [
                    'value'  => 'assets/storage/theme/backgroundlr.png'
                ], " `name` = 'backgroundlr' ");
            }
        }
        if(check_img('logo_dark') == true)
        {
            $rand = random('0123456789QWERTYUIOPASDGHJKLZXCVBNM', 3);
            $uploads_dir = '../../assets/storage/theme/logo_dark'.$rand.'.png';
            $tmp_name = $_FILES['logo_dark']['tmp_name'];
            $addlogo = move_uploaded_file($tmp_name, $uploads_dir);
            if($addlogo)
            {
                $NDVMEDIA->update('options', [
                    'value'  => 'assets/storage/theme/logo_dark'.$rand.'.png'
                ], " `name` = 'logo_dark' ");
            }
        }
        if(check_img('favicon') == true)
        {
            $rand = random('0123456789QWERTYUIOPASDGHJKLZXCVBNM', 3);
            $uploads_dir = '../../assets/storage/theme/favicon'.$rand.'.png';
            $tmp_name = $_FILES['favicon']['tmp_name'];
            $addlogo = move_uploaded_file($tmp_name, $uploads_dir);
            if($addlogo)
            {
                $NDVMEDIA->update('options', [
                    'value'  => 'assets/storage/theme/favicon'.$rand.'.png'
                ], " `name` = 'favicon' ");
            }
        }
        if(check_img('anhbia') == true)
        {
            $rand = random('0123456789QWERTYUIOPASDGHJKLZXCVBNM', 3);
            $uploads_dir = '../../assets/storage/theme/anhbia'.$rand.'.gif';
            $tmp_name = $_FILES['anhbia']['tmp_name'];
            $addlogo = move_uploaded_file($tmp_name, $uploads_dir);
            if($addlogo)
            {
                $NDVMEDIA->update('options', [
                    'value'  => 'assets/storage/theme/anhbia'.$rand.'.gif'
                ], " `name` = 'anhbia' ");
            }
        }
        if(check_img('banner3') == true)
        {
            $rand = random('0123456789QWERTYUIOPASDGHJKLZXCVBNM', 3);
            $uploads_dir = '../../assets/storage/theme/banner3'.$rand.'.gif';
            $tmp_name = $_FILES['banner3']['tmp_name'];
            $addlogo = move_uploaded_file($tmp_name, $uploads_dir);
            if($addlogo)
            {
                $NDVMEDIA->update('options', [
                    'value'  => 'assets/storage/theme/banner3'.$rand.'.gif'
                ], " `name` = 'banner3' ");
            }
        }
        if(check_img('background') == true)
        {
            $rand = random('0123456789QWERTYUIOPASDGHJKLZXCVBNM', 3);
            $uploads_dir = '../../assets/storage/theme/background'.$rand.'.gif';
            $tmp_name = $_FILES['background']['tmp_name'];
            $addlogo = move_uploaded_file($tmp_name, $uploads_dir);
            if($addlogo)
            {
                $NDVMEDIA->update('options', [
                    'value'  => 'assets/storage/theme/background'.$rand.'.gif'
                ], " `name` = 'background' ");
            }
        }
       die('<script type="text/javascript">if(!alert("Lưu thành công !")){window.history.back().location.reload();}</script>');
    } ?>
    <!-- Main content -->
    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ẢNH VÀ GIAO DIỆN WEB</h4>
                  <p class="card-description">
                    NDV MEDIA
                  </p>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Logo Dark</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="logo_dark">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img width="500px" src="<?=BASE_URL($NDVMEDIA->site('logo_dark'));?>"/><hr>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Favicon</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="favicon">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img width="100px" src="<?=BASE_URL($NDVMEDIA->site('favicon'));?>"/><hr>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">BANNER 1</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="background">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img width="500px" src="<?=BASE_URL($NDVMEDIA->site('background'));?>"/><hr>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">BANNER 2</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="anhbia">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img width="500px" src="<?=BASE_URL($NDVMEDIA->site('anhbia'));?>"/><hr>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">BANNER 3</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="banner3">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img width="500px" src="<?=BASE_URL($NDVMEDIA->site('banner3'));?>"/><hr>
                                    </div>
                            </div>
                            <div class="card-footer clearfix">
                                <button name="SaveSettings" class="btn btn-primary btn-block" type="submit"><i
                                        class="fas fa-save mr-1"></i>Lưu Ngay</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
 
<!-- bs-custom-file-input -->
<script src="<?=BASE_URL('template/AdminLTE3/');?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>  
<?php 
    require_once("../../public/admin/Footer.php");
?>