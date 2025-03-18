<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'QUẢN LÝ NẠP THẺ | '.$NDVMEDIA->site('tenweb');
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
        msg_error("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    foreach ($_POST as $key => $value)
    {
        $NDVMEDIA->update("options", array(
            'value' => $value
        ), " `name` = '$key' ");
    }
    msg_success('Lưu thành công', '', 500);
}
?>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Setting Bot Telegram </h4>
                  <p class="card-description">
                    
                  </p>
                  <form action="" method="POST" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Token telegram: </label>
                      <input type="text" name="Token_tele" value="<?=$NDVMEDIA->site('Token_tele');?>"
                                            class="form-control" placeholder="Token_tele" required autofocus>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">ID telegram: </label>
                      <input type="text" name="ID_tele" value="<?=$NDVMEDIA->site('ID_tele');?>"
                                            class="form-control" placeholder="ID_tele" required autofocus>
                    </div>
                    <a href="https://www.fayedark.com/2022/07/huong-dan-tao-bot-va-lay-group-id-trong.html"><b>Cách Lấy ID Và Token Bot Telegram Tại Đây</b></a><br><hr>
                    <button type="submit" name="btnSaveOption" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
                    
                </div>
            </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- summernote -->
<div class="modal fade" id="modal-hd-nap-the">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">HƯỚNG DẪN TÍCH HỢP NẠP THẺ CÀO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Bước 1: Truy cập vào <a target="_blank"
                            href="<?=$NDVMEDIA->site('domain_cardv3');?>/account/login"><?=$NDVMEDIA->site('domain_cardv3');?>/account/login</a> <b>đăng
                            ký</b> tài khoản và <b>đăng nhập</b>.</li>
                    <li>Bước 2: Truy cập vào <a target="_blank" href="<?=$NDVMEDIA->site('domain_cardv3');?>/merchant/list">đây</a> để tiến
                        hành tạo API mới.</li>
                    <li>Bước 3: Nhập lần lượt như sau:</li>
                    <b>Tên mô tả:</b> => <i><?=check_string($_SERVER['SERVER_NAME']);?> - NDVMEDIA</i><br>
                    <b>Chọn ví giao dịch:</b> => <i>VND</i><br>
                    <b>Kiểu:</b> => <i>GET</i><br>
                    <b>Đường dẫn nhận dữ liệu (Callback Url):</b> => <i><?=BASE_URL('callback/card.php');?></i><br>
                    <b>Địa chỉ IP (không bắt buộc):</b> => <i></i><br>
                    <li>Bước 4: Không hiểu thì hãy <a target="_blank" href="<?=file_get_contents('https://fb.me/ngtandat.mmo');?>">inbox</a>.</li>
                    <li>Bước 5: Copy Partner ID dán vào ô Partner ID trên hệ thống.</li>
                    <li>Bước 6: Copy Partner Key dán vào ô Partner Key trên hệ thống.</li>
                </ul>
                <h4 class="text-center">Chúc quý khách thành công <img
                        src="https://i.pinimg.com/736x/c4/2c/98/c42c983e8908fdbd6574c2135212f7e4.jpg" width="45px;">
                </h4>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script>
$(function() {
    // Summernote
    $('.textarea').summernote()
})
</script>
<script>
$(function() {
    $("#datatable").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
});
</script>



<?php 
    require_once("./Footer.php");
?>