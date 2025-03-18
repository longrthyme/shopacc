<?php if($NDVMEDIA->site('theme_web') == 'theme1') { ?>

<section>
<div class="tw-sticky tw-top-0 tw-bg-white tw-border-b tw-border-gray-100" style="z-index: 1000;">
<div class="tw-max-w-6xl tw-mx-auto tw-flex tw-justify-between tw-items-center tw-px-2 tw-py-1 md:tw-py-2">
<div class="tw-menu-left tw-flex tw-items-center">
<a href="/"><img class="tw-h-11"  src="<?=BASE_URL($NDVMEDIA->site('logo_dark'));?>" /></a>
<a href="/user/recharge" class="hidden-cs md:tw-flex tw-ml-10 tw-font-bold tw-text-red-600 hover:tw-text-red-500 tw-px-3 tw-text-sm tw-items-center tw-cursor-pointer"><span class=" tw-inline-flex tw-items-center tw-justify-center tw-h-6 tw-w-7 tw-rounded tw-bg-red-100 tw-mr-2"><i class="tw-text-lg bx bx-dollar"></i></span>
NẠP THẺ
</a><a class="hidden-cs md:tw-flex tw-ml-10 tw-font-bold tw-text-red-600  hover:tw-text-red-500 tw-px-3 tw-text-sm tw-items-center tw-cursor-pointer" data-toggle="modal" data-target="#chargeModal"><span class=" tw-inline-flex tw-items-center tw-justify-center tw-h-6 tw-w-7 tw-rounded tw-bg-red-100 tw-mr-2"><i class="tw-text-lg bx bx-credit-card-front"></i></span>NẠP ATM/MOMO</a>
<a href="/voucher" class="hidden-cs md:tw-flex tw-ml-10 tw-font-bold tw-text-red-600 hover:tw-text-red-500 tw-px-3 tw-text-sm tw-items-center tw-cursor-pointer"><span class=" tw-inline-flex tw-items-center tw-justify-center tw-h-6 tw-w-7 tw-rounded tw-bg-red-100 tw-mr-2"><i class="tw-text-lg fas fa-percent"></i></span>
MÃ GIẢM GIÁ
</a>
</div>
<div class="tw-menu-right tw-flex tw-flex-wrap tw-items-center tw-justify-right">
<button class="tw-mr-1 md:tw-mr-2 tw-bg-gray-200 tw-items-center tw-flex tw-justify-center tw-border tw-border-gray-200 tw-w-8 md:tw-w-10 tw-rounded-full tw-text-red-600 tw-text-lg md:tw-text-2xl tw-h-8 md:tw-h-10">
<a href="<?=$NDVMEDIA->site('facebook');?>">
<i class="bx bxl-facebook"></i>
</a>
</button>
<?php if(empty($_SESSION['username'])) { ?>
<button class="tw-bg-red-500 hover:tw-bg-red-600 tw-transition tw-duration-200 tw-text-white tw-text-sm tw-px-4 tw-rounded-full tw-font-semibold tw-h-8 md:tw-h-10 tw-relative" data-toggle="modal" data-target="#LoginModal">
<span class="tw-hidden md:tw-inline-block"><i class="tw-absolute tw-text-lg bx bxs-user" style="top: 10px;"></i></span> 
<span class="md:tw-ml-6">ĐĂNG NHẬP</span>
</button>
<?php } else { ?>
<div class="tw-relative dropdown-profile">
<button class="tw-bg-red-500 hover:tw-bg-red-500 tw-transition tw-duration-200 tw-text-white tw-text-sm tw-flex tw-items-center tw-pr-8 tw-pl-2 md:tw-pl-3 tw-rounded-full tw-font-semibold tw-h-8 md:tw-h-10 tw-relative"style="min-width: 4rem;">
<span><img class="tw-hidden md:tw-block tw-w-6 tw-rounded-full tw-border" src="/assets/images/unknown-avatar.jpg" /></span>
<span class="tw-hidden md:tw-block tw-relative tw-ml-1" style="top: -1px;">|</span>
<span class="tw-ml-1 tw-font-bold"> <?=format_cash($getUser['money']);?>đ/<?=format_cash($getUser['robux']);?></span> 
<i class="tw-top-1.5 md:tw-top-2.5 tw-text-lg tw-absolute bx bx-caret-down-circle" style="right: 8px;"></i>
</button>
<div class="tw-absolute tw-max-w-md tw-w-64 tw-rounded tw-bg-white tw-shadow-lg dropdown-content" style="display: none; top: 46px; z-index: 2; right: 0px;">
<div class="tw-w-64">
<div class="tw-border-b tw-border-gray-100 tw-grid tw-grid-cols-12 tw-gap-2 tw-p-2">
<div class="tw-col-span-2 tw-flex tw-items-center tw-justify-content"><img class="tw-w-full tw-rounded-full" src="/assets/images/unknown-avatar.jpg" /></div>
<div class="tw-col-span-9">
<p><b>ID:</b> <?=$getUser['id'];?></p>
<p><b>User:</b> <?=$_SESSION['username'];?></p>
<p><b>Số dư:</b> <span class="tw-text-red-600 tw-font-bold"><?=format_cash($getUser['money']);?>đ</span></p>
</div>
</div>
<div class="tw-text-sm">

<span class="tw-mt-2 tw-text-red-500 tw-font-bold tw-text-sm tw-block tw-px-3">
TÀI KHOẢN
</span>
<div class="tw-px-2">
<?php if(isset($_SESSION['username']) && $getUser['level'] == 'admin') { ?>
<a href="<?=BASE_URL('admin/');?>" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Trang quản trị</a>
<?php }?>
 <?php if(isset($_SESSION['username']) && $getUser['ctv'] == 1) { ?>
<a href="<?=BASE_URL('public/ctv/');?>" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Trang cộng tác viên</a>
<?php }?>
 <?php if(isset($_SESSION['username']) && $getUser['ctvacc'] == 1) { ?>
<a href="<?=BASE_URL('public/ctvacc/');?>" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Trang cộng tác viên accounts</a>
<?php }?>
<a href="/user/profile" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Thông tin chung</a>
</div>
<span class="tw-text-red-500 tw-font-bold tw-text-sm tw-my-1 tw-block tw-px-3">
<i class="tw-relative bx bxs-dollar-circle" style="top:1px;"></i>
NẠP TIỀN & RÚT VẬT PHẨM
</span>
<div class="tw-px-2">
<a href="/user/recharge" class="tw-font-semibold hover:tw-bg-gray-100 hover:tw-text-gray-800 tw-block tw-py-1 tw-px-3">
<i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Nạp thẻ cào (tự động)
</a>
<a class="tw-font-semibold hover:tw-bg-gray-100 hover:tw-text-gray-800 tw-block tw-py-1 tw-px-3" data-toggle="modal" data-target="#chargeModal"><span></span></i></span>
<i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Nạp ATM/MOMO (tự động)
</a>
</a>
</div>
<span class="tw-text-red-500 tw-font-bold tw-text-sm tw-my-1 tw-block tw-px-3">
LỊCH SỬ
</span>
<div class="tw-px-2">
<?php if($NDVMEDIA->site('accounts') == 'ON') { ?>
<a href="/user/history/acc" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Lịch sử mua nick</a>
<?php }?>
<?php if($NDVMEDIA->site('caythue') == 'ON') { ?>
<a href="/user/history/caythue" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Lịch sử cày thuê</a>
<?php }?>
<?php if($NDVMEDIA->site('robux') == 'ON') { ?>
<a href="/user/history/robux" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Lịch sử mua robux</a>
<?php }?>
<?php if($NDVMEDIA->site('gamepass') == 'ON') { ?>
<a href="/user/history/gamepass" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Lịch sử mua gamepass</a>
<?php }?>
<?php if($NDVMEDIA->site('vatpham') == 'ON') { ?>
<a href="/user/history/vatpham" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Lịch sử mua vật phẩm</a>
<?php }?>
<a href="/user/recharge" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Lịch sử nạp thẻ</a>
</div>
<span class="tw-text-red-500 tw-font-bold tw-text-sm tw-my-1 tw-block tw-px-3">
KHÁC
</span>
<div class="tw-px-2">
<a href="user/robux" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Rút Robux</a>
</div>
<div class="tw-px-2">
<a href="/voucher" class="tw-font-semibold hover:tw-text-gray-800 hover:tw-bg-gray-100 tw-block tw-py-1 tw-px-3"><i class="tw-relative bx bx-chevron-right" style="top: 1px;"></i> Mã Giảm Giá</a>
</div>
<div class="tw-p-2">
<a href="<?=BASE_URL('Auth/Logout');?>">
<button class="tw-py-1 tw-rounded tw-text-center tw-bg-red-500 hover:tw-bg-red-600 tw-text-white tw-font-semibold tw-w-full">
Đăng xuất
</button>
</a>
</div>
</div>
</div>
</div>   
</div>
<?php }?>

</div>
</div>
</div>
<?php }?>
