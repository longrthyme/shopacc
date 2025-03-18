<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    $title = 'DASHBROAD | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/../../includes/login.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
    function where_not_admin($type){
    global $NDVMEDIA;
    $where_not_admin = "";
    foreach ($NDVMEDIA->get_list("SELECT * FROM `users` WHERE `username` = '".$_SESSION['username']."' AND `level` = 'admin' ") as $qw) {
        $where_not_admin .= " `$type` != '".$qw['id']."' AND";
    }
    return $where_not_admin;
}

?>


<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome ADMIN</h3>
                  <h6 class="font-weight-normal mb-0">VERISON HIỆN TẠI LÀ: <?=$config['version'];?> <span class="text-primary">CHÚC BẠN NGÀY MỚI TỐT LÀNH</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar">FUONG.NET</i> 
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="//fuong.net">FUONG.NET</a>
                      <a class="dropdown-item" href="//api.fuong.net">API.FUONG.NET</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          
          
              <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
              <div style="padding: 20px;">Xin kính chào quý khách
              <br>- Chào mừng quý khách đến với hệ thống quản trị ADMIN
              <br>- Đến với chúng tôi, bạn có những sự lựa chọn siêu ưu đãi
              <br>- Cập nhật thêm chức năng login facebook và google
              <br>- Cập nhật AUTO BANK nạp tiền tự động giá rẻ
              <br>- Nếu bạn cần update tính năng vui lòng liên hệ thông tin bên dưới
              <br>🔑HỖ TRỢ ADMIN: <a href="https://t.me/fuong_net" target ="_blank">BÙI THANH PHƯƠNG (Ấn Vào Đây Để Được Hỗ Trợ Shop)</a>
              </div>

              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">TỔNG SỐ DƯ</p>
                      <p class="fs-30 mb-2"><?=format_cash($NDVMEDIA->get_row("SELECT SUM(`money`) FROM `users` ")['SUM(`money`)']);?>Đ</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">TỔNG THÀNH VIÊN</p>
                      <p class="fs-30 mb-2"><?=$NDVMEDIA->num_rows("SELECT * FROM `users` ");?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">DOANH THU BÁN TÀI KHOẢN HÔM NAY</p>
                      <p class="fs-30 mb-2"><?=format_cash($NDVMEDIA->get_row("SELECT SUM(`money`) FROM `accounts` WHERE `updatedate` >= DATE(NOW()) AND `updatedate` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`money`)']);?>đ</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">THÀNH VIÊN ĐĂNG KÍ HÔM NAY</p>
                      <p class="fs-30 mb-2"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `users` WHERE `createdate` >= DATE(NOW()) AND `createdate` < DATE(NOW()) + INTERVAL 1 DAY "));?></p>
                    </div>
                  </div>
                </div>
                
               
              </div>
            </div>
          </div>
          <div class="row">
           <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TỔNG TIỀN NẠP HÔM NAY</h4>
                  <div class="media">
                    <i class="ti-world icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash(
$NDVMEDIA->get_row("SELECT SUM(`amount`) FROM `bank_auto` WHERE `deletedate` IS NULL AND `time` >= DATE(NOW()) AND `time` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`amount`)'] + 
$NDVMEDIA->get_row("SELECT SUM(`amount`) FROM `momo` WHERE `deletedate` IS NULL AND `time` >= DATE(NOW()) AND `time` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`amount`)'] +
$NDVMEDIA->get_row("SELECT SUM(`thucnhan`) FROM `cards` WHERE `deletedate` IS NULL AND `status` = 'thanhcong' AND `createdate` >= DATE(NOW()) AND `createdate` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`thucnhan`)']);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TỔNG TIỀN THẺ CÀO</h4>  

                  <div class="media">
                    <i class="fas fa-users"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash($NDVMEDIA->get_row("SELECT SUM(`thucnhan`) FROM `cards` WHERE `deletedate` IS NULL AND `status` = 'thanhcong'")['SUM(`thucnhan`)']);?>đ</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TỔNG THẺ CÀO HỢP LỆ</h4>
                  <div class="media">   

                    <i class="ti-world icon-md text-info d-flex align-self-end mr-3"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `cards` WHERE `status` = 'thanhcong' "));?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TÀI KHOẢN ĐANG BÁN</h4>
                  <div class="media">
                    <i class="mdi mdi-database-plus"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `accounts` WHERE `username` IS NULL "));?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TÀI KHOẢN ĐÃ BÁN HÔM NAY</h4>    

                  <div class="media">
                    <i class="mdi mdi-database-plus"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `accounts` WHERE `updatedate` >= DATE(NOW()) AND `updatedate` < DATE(NOW()) + INTERVAL 1 DAY "));?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TÀI KHOẢN ĐÃ BÁN</h4>
                  <div class="media">  

                    <i class="mdi mdi-database-plus"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `accounts` WHERE `username` IS NOT NULL "));?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">TỔNG THỂ DỊCH VỤ CÀY THUÊ</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>TÊN </th>
                          <th>TỔNG SỐ</th>
                          
                          <th>TRUY CẬP</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>TỔNG SỐ ĐƠN CÀY THUÊ ĐANG CHỜ XỬ LÝ</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_caythue` WHERE `status` = 'xuly' ");?></td>
                          
                         <td> <a href="/public/admin/DonHangCayThueXuLy.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN CÀY THUÊ ĐANG CÀY</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_caythue` WHERE `status` = 'dangcay' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangCayThueDangCay.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN CÀY THUÊ ĐÃ HOÀN TẤT
</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_caythue` WHERE `status` = 'hoantat' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangCayThueHoanTat.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN CÀY THUÊ BỊ HỦY</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_caythue` WHERE `status` = 'huy' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangCayThueHuy.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">TỔNG THỂ VẬT PHẨM</h4>
									<div class="list-wrapper pt-2">
										
											
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>TÊN</th>
                          <th>TỔNG SỐ</th>
                          
                          <th>TRUY CẬP</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>TỔNG SỐ ĐƠN VẬT PHẨM ĐANG CHỜ XỬ LÝ</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_bandv` WHERE `status` = 'xuly' ");?></td>
                          
                         <td> <a href="/public/admin/DonHangVatPhamXuLy.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN VẬT PHẨM ĐANG CÀY</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_bandv` WHERE `status` = 'dangcay' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangVatPhamDangCay.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN VẬT PHẨM ĐÃ HOÀN TẤT
</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_bandv` WHERE `status` = 'hoantat' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangVatPhamHoanTat.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN VẬT PHẨM BỊ HỦY</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_bandv` WHERE `status` = 'huy' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangVatPhamHuy.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
            
            

            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">TỔNG THỂ DỊCH VỤ ROBUX</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>TÊN </th>
                          <th>TỔNG SỐ</th>
                          
                          <th>TRUY CẬP</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>TỔNG SỐ ĐƠN ROBUX ĐANG CHỜ XỬ LÝ</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_robux` WHERE `status` = 'xuly' ");?></td>
                          
                         <td> <a href="/public/admin/DonHangRobuxXuLy.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN ROBUX ĐANG NHẬN</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_robux` WHERE `status` = 'dangcay' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangRobuxDangCay.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN ROBUX ĐÃ HOÀN TẤT
</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_robux` WHERE `status` = 'hoantat' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangRobuxHoanTat.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN ROBUX BỊ HỦY</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_robux` WHERE `status` = 'huy' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangRobuxHuy.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">TỔNG THỂ DỊCH VỤ GAME PASS</h4>
									<div class="list-wrapper pt-2">
										
											
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th>TÊN </th>
                          <th>TỔNG SỐ</th>
                          
                          <th>TRUY CẬP</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>TỔNG SỐ ĐƠN GAME PASS ĐANG CHỜ XỬ LÝ</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_gamepass` WHERE `status` = 'xuly' ");?></td>
                          
                         <td> <a href="/public/admin/DonHangGpassXuLy.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN GAME PASS ĐANG CÀY</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_gamepass` WHERE `status` = 'dangcay' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangGpassDangCay.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN GAME PASS ĐÃ HOÀN TẤT
</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_gamepass` WHERE `status` = 'hoantat' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangGpassHoanTat.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        </tr>
                        <tr>
                          <td>TỔNG SỐ ĐƠN GAME PASS BỊ HỦY</td>
                          <td class="font-weight-bold"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_gamepass` WHERE `status` = 'huy' ");?></td>
                          
                          <td> <a href="/public/admin/DonHangGpassHuy.php"class="font-weight-medium"><div class="badge badge-success">QUẢN LÍ</div></a></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
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