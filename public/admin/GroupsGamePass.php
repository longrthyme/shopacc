<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'QUẢN LÝ NHÓM CÀY THUÊ | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<?php
if(isset($_GET['id']) && $getUser['level'] == 'admin')
{
    $row = $NDVMEDIA->get_row(" SELECT * FROM `category_gamepass` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}

if(isset($_GET['delete']) && $getUser['level'] == 'admin')
{
    $delete = check_string($_GET['delete']);
    $isDelete = $NDVMEDIA->remove("groups_gamepass", " `id` = '$delete' ");
    if($isDelete)
    {
        admin_msg_success("Xóa thành công !", BASE_URL('public/admin/GroupsGamePass.php?id='.$_GET['id']), 500);
    }
}


if(isset($_POST['ThemChuyenMuc']) && $getUser['level'] == 'admin' )
{
    if($NDVMEDIA->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    $rand = random("QWERTYUIOPASDFGHJKLZXCVBNM0123456789", 12);

    $NDVMEDIA->insert("groups_gamepass", array(
        'category'  => check_string($_GET['id']),
        'title'     => check_string($_POST['title']),
        'money'     => check_string($_POST['money'])
    ));
    admin_msg_success("Thêm thành công", '', 500);
}

?>

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Nhóm chuyên mục <?=$row['title'];?></h4>
                  <p class="card-description">
                    THÊM NHÓM MỚI
                  </p>

                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên nhóm</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Số tiền</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" name="money" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="ThemChuyenMuc" class="btn btn-primary btn-block">
                                <span>THÊM NGAY</span></button>
                            <a type="button" href="<?=BASE_URL('public/admin/CategoryGamePass.php');?>"
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
                  <h4 class="card-title"></h4>
                  <p class="card-description">
                    DANH SÁCH NHÓM MỚI
                  </p>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>TÊN NHÓM</th>
                                        <th>SỐ TIỀN</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($NDVMEDIA->get_list(" SELECT * FROM `groups_gamepass` WHERE `category` = '".check_string($_GET['id'])."'  ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['title'];?></td>
                                        <td><?=format_cash($row['money']);?></td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="<?=BASE_URL('public/admin/EditGroupsGamePass.php?id='.$row['id']);?>"><i
                                                    class="fas fa-edit"></i>
                                                <span>EDIT</span></a>
                                            <a class="btn btn-danger"
                                                href="<?=BASE_URL('public/admin/GroupsGamePass.php?delete='.$row['id'].'&id='.$_GET['id']);?>"><i
                                                    class="fas fa-trash"></i>
                                                <span>DELETE</span></a>
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




<script>
$(function() {
    $("#datatable").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
    $("#datatable1").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
    $("#datatable2").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
});
</script>



<?php 
    require_once(__DIR__."/Footer.php");
?>