<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'QUẢN LÝ THÀNH VIÊN | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

   
    <!-- Theme style -->
    <!--<link rel="stylesheet" href="<?=BASE_URL('template/');?>dist/css/info">-->

    
    
 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              
                <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tổng số dư website</h4>
                  <div class="media">
                    <i class="ti-world icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash($NDVMEDIA->get_row("SELECT SUM(`money`) FROM `users` ")['SUM(`money`)']);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tổng số thành viên</h4>
                  <div class="media">
                    <i class="fas fa-users"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `users` "));?>
                                thành viên</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TỔNG ADMIN/CTV/CTVBANACC</h4>
                  <div class="media">
                    <i class="ti-world icon-md text-info d-flex align-self-end mr-3"></i>
                    <div class="media-body">
                      <p class="card-text">Admin:
                                <?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `users` WHERE `level` = 'admin' "));?> / CTV:
                                <?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `users` WHERE `ctv` = 1 "));?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
                

           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">QUẢN LÍ THÀNH VIÊN</h4>
                  <p class="card-description">
                    NDV MEDIA
                  </p>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>USERNAME</th>
                                        <th>MONEY</th>
                                        <th>TOTAL MONEY</th>
                                        <th>ACTION</th>
                                        <th>CTV CÀY THUÊ</th>
                                        <th>CTV BÁN ACC</th>
                                        <th>STATUS</th>
                                        <th>CREATEDATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($NDVMEDIA->get_list(" SELECT * FROM `users` WHERE `username` IS NOT NULL ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$row['id'];?></td>
                                        <td><?=$row['username'];?></td>
                                        <td><?=format_cash($row['money']);?></td>
                                        <td><?=format_cash($row['total_money']);?></td>
                                        <td>
                                            <a type="button" href="<?=BASE_URL('Admin/User/Edit/');?><?=$row['id'];?>"
                                                class="btn btn-primary"><i class="fas fa-edit"></i>
                                                <span>EDIT</span></a>
                                        </td>
                                        <td><?=display_ctv($row['ctv']);?></td>
                                        <td><?=display_ctvacc($row['ctvacc']);?></td>
                                        <td><?=display_banned($row['banned']);?></td>
                                        <td><span class="badge badge-dark"><?=$row['createdate'];?></span></td>
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
function rsTotalMoney() {
    cuteAlert({
        type: "question",
        title: "XÁC NHẬN THAY ĐỔI",
        message: "Bạn có chắc chắn muốn đặt lại top nap tiền không ?",
        confirmText: "Đồng Ý",
        cancelText: "Hủy"
    }).then((e) => {
        if (e) {
            $.ajax({
                url: "<?=BASE_URL("assets/ajaxs/admin/rsTotalMoney.php");?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    action: true
                },
                success: function(respone) {
                    if (respone.status == 'success') {
                        cuteToast({
                            type: "success",
                            message: respone.msg,
                            timer: 5000
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
}
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
        "responsive": true,
        "autoWidth": false,
    });
});
</script>



<?php 
    require_once("../../public/admin/Footer.php");
?>