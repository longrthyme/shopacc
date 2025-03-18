<?php
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    require_once(__DIR__."/../../includes/login-ctv.php");
    $title = 'DASHBROAD | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
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
                     <i class="mdi mdi-calendar">DICHVUBOX.VN</i> 
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">NDVMEDIA</a>
                      <a class="dropdown-item" href="#">NGUYỄN ĐỨC VIỆT</a>
                      <a class="dropdown-item" href="#">DỨC VIỆT</a>
                      <a class="dropdown-item" href="#">ARI CODER</a>
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
              <br>👉Chào mừng quý khách đến với hệ thống DICHVUBOX.VN
              <br>🔰Đến với chúng tôi, bạn có những sự lựa chọn siêu ưu đãi
              <br>📨SAU ĐÂY NHỮNG NGÀY CẬP NHẬT CHỨC NĂNG 
              <br> Ngày 1/6 cập nhật thêm chức năng login facebôk và google
              <br> Ngày 19/8 cập nhật thêm chức năng tiếp thị liên kết 
              <br> Ngày 19/8 cập nhật sửa lỗi ctv
              <br> Ngày 19/8 cập nhật sửa lỗi vòng quay x10
              <br>🔑HỖ TRỢ ADMIN: <a href="https://FACEBOOK.COM/" target ="_blank">Admin ( Ấn vào đây để dẫn đến trang )</a>
              </div>

              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Tổng Đơn cày thuê của bạn</p>
                      <p class="fs-30 mb-2"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `orders_caythue` WHERE `receiver` = '".$getUser['username']."' "));?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Tổng Đơn vật phẩm của bạn</p>
                      <p class="fs-30 mb-2"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `orders_bandv` WHERE `receiver` = '".$getUser['username']."' "));?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Tổng Đơn cày thuê đang cày</p>
                      <p class="fs-30 mb-2"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_caythue` WHERE `status` = 'dangcay' ");?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Tổng Đơn vật phẩm đang cày</p>
                      <p class="fs-30 mb-2"><?=$NDVMEDIA->num_rows("SELECT * FROM `orders_bandv` WHERE `status` = 'dangcay' ");?></p>
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
                  <h4 class="card-title">Tổng đơn cày thuê tuần này </h4>
                  <div class="media">
                    <i class="ti-world icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body">
                      <p class="card-text"> <?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `orders_caythue` WHERE `receiver` = '".$getUser['username']."' AND WEEK(createdate, 1) = WEEK(CURDATE(), 1) "));?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tổng đơn vật phẩm tuần này</h4>    <!-- NDVMEDIA -->

                  <div class="media">
                    <i class="fas fa-users"></i>
                    <div class="media-body">
                      <p class="card-text"> <?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `orders_bandv` WHERE `receiver` = '".$getUser['username']."' AND WEEK(createdate, 1) = WEEK(CURDATE(), 1) "));?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tổng đơn cày thuê tháng</h4>
                  <div class="media">    <!-- NDVMEDIA -->

                    <i class="ti-world icon-md text-info d-flex align-self-end mr-3"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `orders_caythue` WHERE `receiver` = '".$getUser['username']."' AND YEAR(createdate) = ".date('Y')." AND MONTH(createdate) = ".date('m')." "));?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tổng đơn vật phẩm tháng này</h4>
                  <div class="media">
                    <i class="mdi mdi-database-plus"></i>
                    <div class="media-body">
                      <p class="card-text"><?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `orders_bandv` WHERE `receiver` = '".$getUser['username']."' AND YEAR(createdate) = ".date('Y')." AND MONTH(createdate) = ".date('m')." "));?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                  </div>
              </div>
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
    require_once("../../public/ctv/Footer.php");
?>