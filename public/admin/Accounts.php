<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'QUẢN LÝ NHÓM | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<?php
/* BẢN QUYỀN THUỘC VỀ NDVMEDIA.CO | NTTHANH LEADER NT TEAM */
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

if(isset($_POST['ThemTaiKhoan']) && $getUser['level'] == 'admin' )
{
    if($NDVMEDIA->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
   
    $listimg = '';
   

    $listacc = explode(PHP_EOL, check_string($_POST['listacc']));

    foreach($listacc as $data)
    {
        $NDVMEDIA->insert("accounts", array(
        'img'           => check_string($_POST['img']),
        'chitiet'       => check_string($_POST['chitiet']),
        'listimg'       => check_string($_POST['listimg']),
        'account'       => $data,
        'groups'        => check_string($_GET['id']),
        'money'         => check_string($_POST['money']),
        'createdate'    => gettime()
        ));
    }
    $rand = random("QWERTYUIOPASDFGHJKLZXCVBNM0123456789", 12);
    if(check_img('img') == true)
    {
        $uploads_dir = '../../assets/storage/images';
        $tmp_name = $_FILES['img']['tmp_name'];
        $url_img = "/groups_".$rand.".png";
        $create = move_uploaded_file($tmp_name, $uploads_dir.$url_img);
    }
    $NDVMEDIA->insert("groups", array(
        'img'       => 'assets/storage/images'.$url_img,
        'chitiet'   => base64_encode($_POST['chitiet']),
        'category'  => check_string($_GET['id']),
        'title'     => check_string($_POST['title']),
        'display'   => check_string($_POST['display'])
    ));
    admin_msg_success("Thêm tài khoản thành công", '', 500);
}
?>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách tài khoản <?=$row['title'];?></h4>
                  <p class="card-description">
                  
                  </p>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh mô tả</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                       <input type="file" class="form-control" id="exampleInputFile" name="img"
                                                    required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">List tài khoản</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea rows="5" name="listacc"
                                            placeholder="Định dạng: Tài khoản | Mật khẩu (1 dòng 1 nick nếu cần nhập nhiều nick 1 lần)"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chi tiết</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea name="chitiet" rows="5" class="form-control" placeholder="Quân Huy:306
Tướng:20
Skin:30"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">List ảnh mô tả<</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="file" class="form-control" id="exampleInputFile" name="listimg"
                                                    required>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Giá bán</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" name="money" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="ThemTaiKhoan" class="btn btn-primary btn-block">
                                <span>THÊM NGAY</span></button>
                            <a type="button" href="<?=BASE_URL('Admin/Groups/'.$row['id']);?>"
                                class="btn btn-danger btn-block waves-effect">
                                <span>TRỞ LẠI</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">CHI TIẾT NHÓM</h4>
                  <p class="card-description">
                  
                  </p>
        
                    <div class="card-body">
                        <img width="100%" src="<?=BASE_URL($row['img']);?>" />
                    </div>
                </div>
            </div>
            
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DẠNH SÁCH </h4>
                  <p class="card-description">
                  
                  </p>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ẢNH</th>
                                        <th>TÀI KHOẢN</th>
                                        <th>THỜI GIAN ĐĂNG</th>
                                        <th>TRẠNG THÁI</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($NDVMEDIA->get_list(" SELECT * FROM `accounts` WHERE `groups` = '".check_string($_GET['id'])."'  ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td width="5%">#<?=$row['id'];?></td>
                                        <td width="8%"><img width="100%" src="<?=$row['img'];?>" /></td>
                                        <td><?=explode("|", $row['account'])[0];?></td>
                                        <td><?=$row['createdate'];?></td>
                                        <td><?=$row['username'] != NULL ? '<b style="color:red;">Đã bán</b>' : '<b style="color:green;">Đang bán</b>';?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="<?=BASE_URL('Admin/Account/Edit/'.$row['id']);?>"><i
                                                    class="fas fa-edit"></i>
                                                <span>EDIT</span></a>

                                            <button class="btn btn-danger delete" data-id="<?=$row['id'];?>"
                                                data-name="<?=$row['account'];?>"><i class="fas fa-trash"></i>
                                                <span>DELETE</span></button>


                                        </td>
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




<script type="text/javascript">
$(".delete").on("click", function() {
    cuteAlert({
        type: "question",
        title: "Xác Nhận Tài Khoản",
        message: "Bạn có chắc chắn xóa tài khoản (" + $(this).data('name') + ") không ?",
        confirmText: "Đồng Ý",
        cancelText: "Hủy"
    }).then((e) => {
        if (e) {
            $.ajax({
                url: "<?=BASE_URL("assets/ajaxs/admin/delete-account.php");?>",
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
    $("#datatable").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $("#datatable1").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
    $("#datatable2").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});
</script>



<?php 
    require_once(__DIR__."/Footer.php");
?>