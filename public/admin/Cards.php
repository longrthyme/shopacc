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
                  <h4 class="card-title">Setting nạp thẻ </h4>
                  <p class="card-description">
                  
                  </p>
                  <form action="" method="POST" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Partner_ID</label>
                      <input type="text" name="Partner_ID" value="<?=$NDVMEDIA->site('Partner_ID');?>"
                                            class="form-control" placeholder="Partner_ID" required autofocus>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Partner_Key</label>
                      <input type="text" name="Partner_Key" value="<?=$NDVMEDIA->site('Partner_Key');?>"
                                            class="form-control" placeholder="Partner_Key" required autofocus>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Điền Link Callback( KIỂU GET):</label>
                      <div class="col-sm-9">
                      <div class="form-line">
                                            <b class="form-control">https://<?=$_SERVER['SERVER_NAME'];?>/callback/card.php</b>
                    </div>
                    
                    <button type="submit" name="btnSaveOption" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
                    
                </div>
            </div>
           
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Nhật kí hoạt động</h4>
                  <p class="card-description">
                  
                  </p>
           
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>USERNAME</th>
                                        <th>SERI</th>
                                        <th>PIN</th>
                                        <th>LOẠI THẺ</th>
                                        <th>MỆNH GIÁ</th>
                                        <th>THỰC NHẬN</th>
                                        <th>THỜI GIAN</th>
                                        <th>TRẠNG THÁI</th>
                                        <th>GHI CHÚ</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($NDVMEDIA->get_list(" SELECT * FROM `cards` WHERE `deletedate` IS NULL ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i;?> <?php $i++;?></td>
                                        <td><a href="<?=BASE_URL('Admin/User/Edit/'.$NDVMEDIA->getUser($row['username'])['id']);?>"><?=$row['username'];?></a></td>
                                        <td><?=$row['seri'];?></td>
                                        <td><?=$row['pin'];?></td>
                                        <td><?=loaithe($row['loaithe']);?></td>
                                        <td><?=format_cash($row['menhgia']);?></td>
                                        <td><?=format_cash($row['thucnhan']);?></td>
                                        <td><span class="badge badge-dark"><?=$row['createdate'];?></span></td>
                                        <td><?=status($row['status']);?></td>
                                        <td><?=$row['note'];?></td>
                                        <td><button class="btn btn-danger delete" data-id="<?=$row['id'];?>" ><i class="fas fa-trash"></i>
                                                <span>DELETE</span></button></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>

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




<script type="text/javascript">
$(".delete").on("click", function() {
    cuteAlert({
        type: "question",
        title: "Xác Nhận Xóa Bill",
        message: " ",
        confirmText: "Đồng Ý",
        cancelText: "Hủy"
    }).then((e) => {
        if (e) {
            $.ajax({
                url: "<?=BASE_URL("assets/ajaxs/admin/delete-card.php");?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: $(this).data('id')
                },
                success: function(respone) {
                    if (respone.status == 'success') {
                        cuteToast({
                            type: "success",
                            message: respone.msg,
                            timer: 3000
                        });
                        location.reload();
                    } else {
                        cuteAlert({
                            type: "error",
                            title: "Error",
                            message: respone.msg,
                            buttonText: "Okay"
                        });
                    }
                },
                error: function() {
                    alert(html(response));
                    location.reload();
                }
            });
        }
    })
});
</script>


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