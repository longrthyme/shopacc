  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/"><img src="https://i.upanh.org/2024/06/26/IMG_564471389ab2dfff2add-removebg-preview5585ddbeddd8d6b1.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/"><img src="https://i.upanh.org/2024/06/26/IMG_564471389ab2dfff2add-removebg-preview5585ddbeddd8d6b1.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Verison <?=$config['version'];?></h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Đơn vị thiết kế NGUYỄN TẤN ĐẠT</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    5/23/2024
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="https://i.upanh.org/2024/06/26/IMG_564471389ab2dfff2add-removebg-preview5585ddbeddd8d6b1.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <a href="/" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title"> Danh Mục Tài Khoản</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Account-Wait');?>">Tài Khoản Chưa bán</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Account-Sold');?>">Tài Khoản Đã bán</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title"> Danh Mục Cày Thuê</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangCayThueXuLy.php');?>">Đơn chưa xử lí</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangCayThueDangCay.php');?>">Đơn đang tiếp nhận</a></li>
                <li class="nav-item"> <a class="nav-link" href="/public/admin/DonHangCayThueHoanTat.php">Đơn đã xử lí</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangCayThueHuy.php');?>">Đơn bị hủy</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title"> Danh Mục Vật Phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangVatPhamXuLy.php');?>">Đơn chưa xử lí</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangVatPhamDangCay.php');?>">Đơn đang tiếp nhận</a></li>
                <li class="nav-item"> <a class="nav-link" href="/public/admin/DonHangVatPhamHoanTat.php">Đơn đã xử lí</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangVatPhamHuy.php');?>">Đơn bị hủy</a></li>
                
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title"> Danh Mục Robux</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangRobuxXuLy.php');?>">Đơn chưa xử lí</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangRobuxDangCay.php');?>">Đơn đang tiếp nhận</a></li>
                <li class="nav-item"> <a class="nav-link" href="/public/admin/DonHangRobuxHoanTat.php">Đơn đã xử lí</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangRobuxHuy.php');?>">Đơn bị hủy</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title"> Danh Mục Gamepass</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangGpassXuLy.php');?>">Đơn chưa xử lí</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangGpassDangCay.php');?>">Đơn đang tiếp nhận</a></li>
                <li class="nav-item"> <a class="nav-link" href="/public/admin/DonHangGpassHoanTat.php">Đơn đã xử lí</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/DonHangGpassHuy.php');?>">Đơn bị hủy</a></li>
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Quản Lí Folder</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Category/Ban-dich-vu/');?>">DM BÁN VẬT PHẨM</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Category/Cay-thue/');?>">DM CÀY THUÊ</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Groups/16');?>">DM TÀI KHOẢN</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/VongQuay');?>">DM MINIGAME</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Category/Robux/');?>">DM ROBUX</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Category/Game-pass/');?>">DM GAMEPASS</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Storage');?>">LƯU TRỮ ẢNH </a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Nạp tiền & Vật phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Cards');?>">Thẻ Cào</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Bank');?>">ATM&MOMO</a></li>
                 <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/WithDraw.php');?>">Xử lí rút robux</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Giảm giá va biến động</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/Voucher.php/');?>"> Mã giảm giá </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/BienDongSoDu.php/');?>"> Biến động số dư </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Cấu hình</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/Users.php');?>">Thành viên</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/Theme.php');?>">Hình ảnh website</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('Admin/Setting');?>">Cấu hình website</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/HienThi.php');?>">Cấu hình hiển thị</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=BASE_URL('public/admin/BotTele.php');?>">Cấu hình bot tele</a></li>
              </ul>
            </div>
          </li>
         
      </nav>