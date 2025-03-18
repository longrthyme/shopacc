<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    require_once(__DIR__."/../../includes/login-ctvacc.php");
    $title = 'TÀI KHOẢN ĐÃ BÁN | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section">
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách tài khoản đã bán</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">DANH SÁCH TÀI KHOẢN ĐÃ BÁN</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>ID</th>
                                        <th>ẢNH</th>
                                        <th>TÀI KHOẢN</th>
                                        <th>NGƯỜI MUA</th>
                                        <th>THANH TOÁN</th>
                                        <th>THỜI GIAN ĐĂNG</th>
                                        <th>THỜI GIAN MUA</th>
                                        <th>TRẠNG THÁI</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($NDVMEDIA->get_list(" SELECT * FROM `accounts` WHERE `username` IS NOT NULL AND `receiver` = '".$getUser['username']."' ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td>#<?=$row['id'];?></td>
                                        <td width="8%"><img width="100%" src="<?=BASE_URL($row['img']);?>" /></td>
                                        <td><?=$row['account'];?></td>
                                        <td><?=$row['username'];?></td>
                                        <td><?=format_cash($row['money']);?></td>
                                        <td><?=$row['createdate'];?></td>
                                        <td><?=$row['updatedate'];?></td>
                                        <td><?php if($row['username'] != NULL) { echo 'Đã bán';} else { echo 'Đang bán';};?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="<?=BASE_URL('public/ctvacc/EditAccount.php?id='.$row['id']);?>"><i class="fas fa-edit"></i>
                                                <span>EDIT</span></a>
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




<?php 
    require_once(__DIR__."/Footer.php");
?>