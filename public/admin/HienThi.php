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


<!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Hiển thị ở Trang Chủ</h4>
                  <p class="card-description">
                   
                  </p>
                  <form action="" method="POST" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">ON/OFF Danh Mục MiniGame</label>
                      <select class="form-control show-tick" name="minigame" required>
                                        <option value="<?=$NDVMEDIA->site('minigame');?>"><?=$NDVMEDIA->site('minigame');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">ON/OFF Danh Mục Tài Khoản</label>
                      <select class="form-control show-tick" name="accounts" required>
                                        <option value="<?=$NDVMEDIA->site('accounts');?>"><?=$NDVMEDIA->site('accounts');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">ON/OFF Danh Mục Cày thuê</label>
                      <select class="form-control show-tick" name="caythue" required>
                                        <option value="<?=$NDVMEDIA->site('caythue');?>"><?=$NDVMEDIA->site('caythue');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">ON/OFF Danh Mục toilet</label>
                      <select class="form-control show-tick" name="vatpham" required>
                                        <option value="<?=$NDVMEDIA->site('vatpham');?>"><?=$NDVMEDIA->site('vatpham');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">ON/OFF Danh Mục Robux</label>
                      <select class="form-control show-tick" name="robux" required>
                                        <option value="<?=$NDVMEDIA->site('robux');?>"><?=$NDVMEDIA->site('robux');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">ON/OFF Danh Mục gamepass</label>
                      <select class="form-control show-tick" name="gamepass" required>
                                        <option value="<?=$NDVMEDIA->site('minigame');?>"><?=$NDVMEDIA->site('gamepass');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">ON/OFF LOGIN GOOGLE</label>
                      <select class="form-control show-tick" name="logingg" required>
                                        <option value="<?=$NDVMEDIA->site('logingg');?>"><?=$NDVMEDIA->site('logingg');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">ON/OFF LOGIN FACEBOOK</label>
                      <select class="form-control show-tick" name="loginfb" required>
                                        <option value="<?=$NDVMEDIA->site('loginfb');?>"><?=$NDVMEDIA->site('loginfb');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">ON/OFF Block F12</label>
                      <select class="form-control show-tick" name="block_f12" required>
                                        <option value="<?=$NDVMEDIA->site('block_f12');?>"><?=$NDVMEDIA->site('block_f12');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                    </div>
                     <div class="form-group">
                      <label for="exampleInputName1">ON/OFF WEBSITE</label>
                      <select class="form-control show-tick" name="baotri" required>
                                        <option value="<?=$NDVMEDIA->site('baotri');?>"><?=$NDVMEDIA->site('baotri');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                    <i>Nếu bạn OFF, website sẽ bật chế độ bảo trì.</i>
                                    
                    </div>
                     <button type="submit" name="action" class="btn btn-danger btn btn-block resettopnap">Reset Top Nạp</button><hr/>
                    
                    <button type="submit" name="btnSaveOption" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
<script type="text/javascript">
    $(".resettopnap").on("click", function() {
        cuteAlert({
            type: "question",
            title: "Xác Nhận Reset Top Nạp",
            message: "Được Thiết Kế Bởi Fuong.Net",
            confirmText: "Đồng Ý",
            cancelText: "Hủy"
        }).then((e) => {
            if (e) {
                $.ajax({
                    url: "<?=BASE_URL('assets/ajaxs/admin/rsTotalMoney.php');?>",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        action: $(this).attr('name')
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            cuteToast({
                                type: "success",
                                message: response.msg,
                                timer: 3000
                            });
                            location.reload();
                        } else {
                            cuteAlert({
                                type: "error",
                                title: "Error",
                                message: response.msg,
                                buttonText: "Okay"
                            });
                        }
                    },
                    error: function() {
                        cuteAlert({
                            type: "error",
                            title: "Error",
                            message: "Đã xảy ra lỗi, vui lòng thử lại sau.",
                            buttonText: "Okay"
                        });
                        location.reload();
                    }
                });
            }
        });
    });
</script>
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