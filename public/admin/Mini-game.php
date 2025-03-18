<?php
require_once("../../display/config.php");
    require_once("../../display/function.php");
$title = 'QUẢN LÝ VÒNG QUAY | ' . $NDVMEDIA->site('tenweb');
require_once(__DIR__ . "/Header.php");
require_once(__DIR__ . "/Sidebar.php");

if (isset($_POST['ThemVongQuay']) && $getUser['level'] == 'admin') {
    if ($NDVMEDIA->site('status_demo') == 'ON') {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
   
    $sql = $NDVMEDIA->insert('mini_game', array(
        'name' => check_string($_POST['tenvongquay']),
        'price' => check_string($_POST['price']),
        'sudung' => 0,
        'thumb' => check_string($_POST['thumb']),
        'image'       => check_string($_POST['image']),
        'status' => check_string($_POST['status']),
        'time' => time()
    ));
    if ($sql) {
        $last_id = $NDVMEDIA->get_row("SELECT * FROM `mini_game` order by `id` desc limit 1");
        $item = 'text_';
        $kimcuong = 'kimcuong_';
        $tyle = 'tyle_';
        for ($i = 1; $i <= 8; $i++) {
            $data[] = array(
                'text' => $_POST[$item . $i],
                'kimcuong' => $_POST[$kimcuong . $i],
                'tyle' => $_POST[$tyle . $i]
            );
        }
        // INSERT GIFT
        $NDVMEDIA->insert('mini_game_gift', array(
            'id_vongquay' => $last_id['id'],
            'item_1' => json_encode($data[0]),
            'item_2' => json_encode($data[1]),
            'item_3' => json_encode($data[2]),
            'item_4' => json_encode($data[3]),
            'item_5' => json_encode($data[4]),
            'item_6' => json_encode($data[5]),
            'item_7' => json_encode($data[6]),
            'item_8' => json_encode($data[7])
        ));
        admin_msg_success("Thêm vòng quay thành công!", '', 1000);
    } else {
        admin_msg_error("Lỗi truy vấn!", '', 500);
    }
}
?>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">THÊM DANH MỤC VÒNG QUAY</h4>
                  <p class="card-description">
                                    </p>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên vòng quay</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="tenvongquay" class="form-control" placeholder="Nhập tên vòng quay" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Giá tiền</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" name="price" class="form-control" placeholder="Nhập giá tiền" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh thumb</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="thumb" class="form-control" required>
                                    </div>
                                    <i>Up ảnh lấy link tại: upanh.1doi1.com</i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh mô tả</label>
                               <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="image" class="form-control" required>
                                    </div>
                                    <i>Up ảnh lấy link tại: upanh.1doi1.com</i>
                                </div>
                            </div>
                                   
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hiển thị</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="status" required>
                                        <option value="true">HIỂN THỊ</option>
                                        <option value="false">ẨN</option>
                                    </select>
                                </div>
                            </div>
                            <?php for ($x = 1; $x <= 8; $x++) { ?>
                                <div class="card-body">
                                    <b>Thông tin phần quà số <?php echo $x; ?></b>
                                    <hr>
                                    <div class="row">
                                        <div class="col-4">
                                            <input type="text" id="text_<?php echo $x; ?>" name="text_<?php echo $x; ?>" class="form-control" placeholder="Text Hiện Khi Quay Trúng">
                                        </div>
                                        <div class="col-4">
                                            <input type="number" id="kimcuong_<?php echo $x; ?>" name="kimcuong_<?php echo $x; ?>" min="0" class="form-control" placeholder="Robux Trúng" required="">
                                        </div>
                                        <div class="col-4">
                                            <input type="number" id="tyle_<?php echo $x; ?>" name="tyle_<?php echo $x; ?>" min="0" max="100" class="form-control" placeholder="Tỷ Lệ Trúng(%)" required="">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <button type="submit" name="ThemVongQuay" class="btn btn-primary btn-block">
                                <span>THÊM NGAY</span></button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DANH SÁCH MINIGAME</h4>
                  <p class="card-description">
                                    </p>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>ẢNH THUMB</th>
                                        <th>ẢNH MÔ TẢ</th>
                                        <th>TÊN</th>
                                        <th>GIÁ TIỀN</th>
                                        <th>SỬ DỤNG</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($NDVMEDIA->get_list(" SELECT * FROM `mini_game` ORDER BY id DESC ") as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $row['id']; ?></td>
                                            <td width="10%"><img width="100%" src="<?= $row['thumb']; ?>" /></td>
                                            <td width="10%"><img width="100%" src="<?= $row['image']; ?>" /></td>
                                            <td><?= $row['name']; ?></td>
                                            <td><?= number_format($row['price']); ?></td>
                                            <td><?= number_format($row['sudung']); ?></td>
                                            <td>
                                                <form action="" method="post">
                                                    <input type="hidden" name="id_vq" value="<?= $row['id']; ?>">
                                                    <button type="submit" name="Remove" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
if (isset($_POST['Remove']) && $getUser['level'] == 'admin') {
    $NDVMEDIA->remove('mini_game', " `id` = '" . $_POST['id_vq'] . "' ");
    echo admin_msg_success('Xóa thành công!', '', 500);
}
?>
<?php
require_once(__DIR__ . "/Footer.php");
?>