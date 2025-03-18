<style type="text/css">
@media screen and (min-width:768px){.swiper-desktop{display:block}.swiper-mobile{display:none}}@media screen and (max-width:767px){.swiper-desktop{display:none}.swiper-mobile{display:block}}.snowflake{position:absolute;width:10px;height:10px;background:linear-gradient(#fff,#fff);border-radius:50%;filter:drop-shadow(0 0 10px #fff)}.custom-buttons-container{position:fixed;bottom:20px;right:20px;display:flex;flex-direction:column;align-items:flex-end}.custom-buttons-container{display:flex;flex-direction:column;align-items:flex-end;position:fixed;right:20px}.custom-buttons-container a{margin-bottom:10px}@media only screen and (min-width:600px){.custom-buttons-container{bottom:20px}}@media only screen and (max-width:599px){.custom-buttons-container{bottom:57px}}.custom-button{display:flex;align-items:center;padding:10px;border-radius:5px;box-shadow:0 2px 4px rgba(0,0,0,.2);cursor:pointer;text-decoration:none;margin-bottom:10px;color:#fff;font-size:14px;font-weight:700;text-align:center;transition:background-color 0.3s}.buy-button{background-color:#d872da}.support-button{background-color:#1B8FD2}.custom-button img{width:30px;height:30px;margin-right:5px}#searchButton{position:relative;z-index:1000}#navbar{position:fixed;top:0;left:0;right:0;z-index:1200;background-color:#fff;border-bottom:1px solid #ddd;padding:10px}#searchPopover{display:none;position:fixed;bottom:60px;left:50%;transform:translateX(-50%);z-index:1500;width:320px}#searchPopover.visible{display:block}@media only screen and (max-width:600px){.ws-sticky-navbar{position:fixed;bottom:0;left:0;right:0;z-index:999;background-color:#fff;border-top:1px solid #ddd;padding:2px 1px;display:flex;justify-content:space-between;align-items:center}.ws-sticky-navbar a{text-decoration:none;color:#333;padding:10px;display:flex;flex-direction:column;align-items:center}.ws-sticky-navbar i{font-size:20px;margin-bottom:5px}.ws-sticky-navbar span{font-weight:700;font-size:12px}}#dropdownContent{position:fixed;display:none;z-index:2001;max-height:100vh;overflow:hidden;white-space:nowrap}.el-input--suffix .el-input__inner{padding-right:30px}.el-select .el-input__inner{cursor:pointer;padding-right:35px}.el-input--suffix .el-input__inner{padding-right:30px}.el-select .el-input__inner{cursor:pointer;padding-right:35px}.el-input__inner{-webkit-appearance:none;background-color:#fff;background-image:none;border-radius:4px;border:1px solid #dcdfe6;box-sizing:border-box;color:#606266;display:inline-block;font-size:inherit;height:40px;line-height:40px;outline:none;padding:0 15px;transition:border-color .2s cubic-bezier(.645,.045,.355,1);width:100%}.custom-swal-container{z-index:2012}.tw-text-red-500{--tw-text-opacity:1;color:rgba(48,184,242,var(--tw-text-opacity))}.tw-font-bold{font-weight:700}.tw-py-2{padding-top:.5rem;padding-bottom:.5rem}.tw-px-2{padding-left:.5rem;padding-right:.5rem}.tw-bg-white{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity))}.tw-mb-4{margin-bottom:1rem}.tw-relative{position:relative}.tw-flex{display:flex}.tw-h-10{height:2.5rem}.tw-items-center{align-items:center}.tw-justify-center{justify-content:center}.tw-flex{display:flex}.tw-justify-center{justify-content:center}@media (min-width:768px) .md\:tw-rounded{border-radius:6rem}.tw-text-xl{font-size:1.25rem;line-height:1.75rem}.tw-bg-white{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity))}.tw-justify-center{justify-content:center}.tw-items-center{align-items:center}.tw-w-10{width:2.5rem}.tw-h-10{height:2.5rem}.tw-flex{display:flex}.tw-absolute{position:absolute}.tw-flex{display:flex}.tw-items-center{align-items:center}.tw-flex{display:flex}.tw-items-center{align-items:center}.tw-w-full{width:100%}.tw-flex{display:flex}.tw-w-full{width:100%}.fade{display:none}.fade.show{display:flex!important}.open{display:block!important}.el-input__inner2{--el-input-inner-height:calc(var(--el-input-height, 40px) + 2px)}.ws-auth .el-input__inner2{color:#000}.el-input--large .el-input__inner2{--el-input-inner-height:calc(var(--el-input-height, 40px) - 2px)}.el-input__inner2{--el-input-inner-height:calc(var(--el-input-height, 32px) - 2px);-webkit-appearance:none;background:none;border:none;box-sizing:border-box;color:var(--el-input-text-color,var(--el-text-color-regular));flex-grow:1;font-size:inherit;height:30px;height:var(--el-input-inner-height);line-height:30px;line-height:var(--el-input-inner-height);outline:none;padding:0;width:100%}
</style>
<body>
    <div class="el-overlay ws-notihomes" style="z-index:197725;display:none;">
    <div role="dialog" aria-modal="true" aria-labelledby="el-id-1024-8" aria-describedby="el-id-1024-9" class="el-overlay-dialog"></div>
</div>
<div id="el-popper-container-1024">
    <div id="dropdownContent" style="z-index: 2001; position: absolute; inset: 6px auto auto -50px; display: none; width: 210px;" class="drop-profile-show-pc el-popper is-light el-popover active" tabindex="-1" aria-hidden="true" role="tooltip" data-popper-reference-hidden="false" data-popper-escaped="false" data-popper-placement="bottom">
        <div class="ws-text-zinc-800 ws-px-1">
            <div class="ws-leading-6">
                <div class="ws-border-b ws-border-gray-100 ws-text-zinc-800 ws-mb-2 ws-pb-2">
                    <div class="ws-relative ws-leading-6">
                        <p class="ws-text-sm"><b>User:</b> <?=$_SESSION['username'];?></p>
                        <p class="ws-text-sm"><b>Số Dư: </b><span class="ws-text-red-600 ws-font-bold"><?=format_cash($getUser['money']);?><small></small></span></p>
                
                    </div>
                </div>
            </div>
            <div class="ws--mx-2">
                <a href="/Auth/profile" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium">Quản Lý Tài Khoản</a>
                <?php if(isset($_SESSION['username']) && $getUser['level'] == 'admin') { ?>
                 <a href="/admin/" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium">Quản Lý Admin</a>
                 <?php }?>
                 <?php if(isset($_SESSION['username']) && $getUser['ctv'] == 1) { ?>
                 <a href="<?=BASE_URL('public/ctv/');?>" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium">Quản Lý CTV</a>
                 <?php }?>
                 <?php if(isset($_SESSION['username']) && $getUser['ctvacc'] == 1) { ?>
                 <a href="<?=BASE_URL('public/ctvacc/');?>" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium">Quản Lý CTV BÁN ACC</a>
                 <?php }?>
                <label class="ws-mt-2 ws-block ws-text-xs ws-font-bold ws-text-red-600 ws-px-2"><small>NẠP TIỀN & RÚT ROBUX</small></label>
                <a href="/user/recharge" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Nạp Thẻ Cào </a>
                                <label class="ws-mt-2 ws-block ws-text-xs ws-font-bold ws-text-red-600 ws-px-2"><small>LỊCH SỬ</small></label>   
                            <?php if($NDVMEDIA->site('accounts') == 'ON') { ?>
<a href="/user/history/acc" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử mua nick</a>
<?php }?>
<?php if($NDVMEDIA->site('caythue') == 'ON') { ?>
<a href="/user/history/caythue" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử cày thuê</a>
<?php }?>
<?php if($NDVMEDIA->site('robux') == 'ON') { ?>
<a href="/user/history/robux" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử mua robux</a>
<?php }?>
<?php if($NDVMEDIA->site('gamepass') == 'ON') { ?>
<a href="/user/history/gamepass" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử mua gamepass</a>
<?php }?>
<?php if($NDVMEDIA->site('vatpham') == 'ON') { ?>
<a href="/user/history/vatpham" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử mua vật phẩm</a>
<?php }?>    
                <a href="/user/recharge" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch Sử Nạp Thẻ</a>
                 <a href="/voucher" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Voucher</a>
                <a href="/Auth/Logout" class="ws-cursor-pointer ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Đăng Xuất</a>
            </div>
        </div>
    </div>
    <div style="z-index: 2008; position: absolute; inset: 40px auto auto 339px; width: 210px; display: none;" class="el-popper drop-profile-show-mobile is-light el-popover" tabindex="-1" aria-hidden="false" role="tooltip" id="el-id-1024-4" data-popper-reference-hidden="false" data-popper-escaped="false" data-popper-placement="bottom">
        <div class="ws-text-zinc-800 ws-px-1">
            <div class="ws-leading-6">
                <div class="ws-border-b ws-border-gray-100 ws-text-zinc-800 ws-mb-2 ws-pb-2">
                    <div class="ws-relative ws-leading-6">
                        <p class="ws-text-sm"><b>User:</b> <?=$_SESSION['username'];?></p>
                        <p class="ws-text-sm"><b>Số Dư: </b><span class="ws-text-red-600 ws-font-bold"><?=format_cash($getUser['money']);?> <small></small></span></p>
                    </div>
                </div>
            </div>
            <div class="ws--mx-2">
                <a href="/Auth/profile" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium">Quản Lý Tài Khoản</a>
                <?php if(isset($_SESSION['username']) && $getUser['level'] == 'admin') { ?>
                 <a href="/admin/" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium">Quản Lý Admin</a>
                 <?php }?>
                 <?php if(isset($_SESSION['username']) && $getUser['ctv'] == 1) { ?>
                 <a href="<?=BASE_URL('public/ctv/');?>" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium">Quản Lý CTV</a>
                 <?php }?>
                 <?php if(isset($_SESSION['username']) && $getUser['ctvacc'] == 1) { ?>
                 <a href="<?=BASE_URL('public/ctvacc/');?>" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium">Quản Lý CTV BÁN ACC</a>
                 <?php }?>
                <label class="ws-mt-2 ws-block ws-text-xs ws-font-bold ws-text-red-600 ws-px-2"><small>NẠP TIỀN & RÚT ROBUX</small></label>
               
                <a href="/user/recharge" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Nạp Thẻ Cào </a>
                                <label class="ws-mt-2 ws-block ws-text-xs ws-font-bold ws-text-red-600 ws-px-2"><small>LỊCH SỬ</small></label>   
                            <?php if($NDVMEDIA->site('accounts') == 'ON') { ?>
<a href="/user/history/acc" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử mua nick</a>
<?php }?>
<?php if($NDVMEDIA->site('caythue') == 'ON') { ?>
<a href="/user/history/caythue" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử cày thuê</a>
<?php }?>
<?php if($NDVMEDIA->site('robux') == 'ON') { ?>
<a href="/user/history/robux" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử mua robux</a>
<?php }?>
<?php if($NDVMEDIA->site('gamepass') == 'ON') { ?>
<a href="/user/history/gamepass" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử mua gamepass</a>
<?php }?>
<?php if($NDVMEDIA->site('vatpham') == 'ON') { ?>
<a href="/user/history/vatpham" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch sử mua vật phẩm</a>
<?php }?>    
                <a href="/user/recharge" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Lịch Sử Nạp Thẻ</a>
                 <a href="/voucher" class="ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Voucher</a>
                <a href="/Auth/Logout" class="ws-cursor-pointer ws-py-2 ws-px-2 ws-block hover:ws-bg-zinc-100 ws-rounded ws-font-medium"><i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i> Đăng Xuất</a>
        </div>
        </div>
    </div>
    <div id="__nuxt">
        <div id="app-layout">
            <div style="z-index:999;" class="ws-bg-white ws-sticky ws-top-0">
                <div class="ws-flex ws-justify-between ws-items-center md:ws-items-start ws-py-1 md:ws-py-2 ws-px-3 ws-mx-auto ws-max-w-7xl">
                    <span class="ws-inline-flex ws-items-start ws-flex-1">
                    <a href="/" class="ws-w-38"><img src="<?=BASE_URL($NDVMEDIA->site('logo_dark'));?>" class="ws-h-12" alt="sansale"></a>
                    <div class="md:ws-block ws-hidden ws-ml-5 ws-w-[70%] ws-mr-4">
									<div class="ws-relative">
										<input id="searchInputpc" class="ws-border focus:ws-outline-none ws-rounded-lg ws-py-2 ws-pl-4 ws-pr-[5rem] ws-w-full ws-text-sm" placeholder="Nhập tìm kiếm...">
										<button class="ws-absolute ws-bg-white ws-font-semibold ws-text-sm ws-text-red-500 ws-top-[1px] ws-right-[5px] ws-py-2 ws-px-3 ws-rounded" onclick="performSearchpc()"> Tìm kiếm </button>
									</div>
								</div>
                    </span>
                     <?php if(empty($_SESSION['username'])) { ?>
                    <span class="md:ws-flex ws-hidden ws-flex-0 ws-items-start ws-justify-end">
                                        <span data-toggle="modal" data-target="#loginModal" class="ws-cursor-pointer ws-bg-gradient-to-l ws-from-red-500 ws-to-pink-500 ws-text-white ws-px-3 ws-h-9 ws-rounded-lg ws-flex ws-justify-center ws-items-center ws-rounded ws-mr-2 md:ws-mr-4"><i class="ws-text-xl bx bxs-dollar-circle"></i><span class="ws-hidden lg:ws-inline-block ws-ml-1 ws-text-sm ws-font-semibold">Nạp Tiền</span></span>
                    <a href="#" class="ws-h-9 ws-w-10 ws-rounded ws-flex ws-justify-center ws-items-center ws-text-red-600 ws-mr-4"><i class="ws-text-2xl bx bx-bell"></i></a>
                    <a class="ws-py-1 ws-h-9 ws-rounded-lg ws-cursor-pointer ws-flex ws-justify-center ws-items-center el-tooltip__trigger el-tooltip__trigger">
                    <span data-toggle="modal" data-target="#loginModal" class="ws-text-red-600 ws-cursor-pointer ws-h-9 ws-rounded ws-flex ws-justify-center ws-items-center ws-rounded btn_login"><i class="ws-flex ws-items-center ws-text-xl bx bxs-user ws-border ws-py-1.5 ws-rounded-lg ws-px-1.5"></i><span class="ws-hidden lg:ws-inline-block ws-ml-2 ws-text-sm ws-font-semibold">Đăng Nhập / Đăng ký</span></span>&nbsp;
                    </a>
                    </span>
                    <span class="ws-inline-flex md:ws-hidden ws-flex-0 ws-items-start ws-justify-end">
                    <a href="#" class="ws-h-9 ws-w-10 ws-rounded ws-flex ws-justify-center ws-items-center ws-text-red-600"><div class="el-badge"><i class="ws-text-2xl bx bx-bell"></i><sup class="el-badge__content el-badge__content--danger is-fixed is-dot"></sup></div></a>
                    <span data-toggle="modal" data-target="#loginModal" class="md:ws-hidden ws-cursor-pointer ws-text-xs ws-bg-gradient-to-l ws-from-red-500 ws-to-pink-500 ws-text-white ws-px-3 ws-h-9 ws-flex ws-justify-center ws-items-center ws-rounded ws-ml-2"><i class="ws-text-lg bx bxs-dollar-circle"></i><span class="ws-ml-1 ws-font-semibold">Nạp tiền</span></span>
                    </span>
                    
<?php } else { ?>
                    <span class="md:ws-flex ws-hidden ws-flex-0 ws-items-start ws-justify-end">
                                        <a href="#"><span data-toggle="modal" data-target="#naptienModal" class="ws-cursor-pointer ws-bg-gradient-to-l ws-from-red-500 ws-to-pink-500 ws-text-white ws-px-3 ws-h-9 ws-rounded-lg ws-flex ws-justify-center ws-items-center ws-rounded ws-mr-2 md:ws-mr-4"><i class="ws-text-xl bx bxs-dollar-circle"></i><span class="ws-hidden lg:ws-inline-block ws-ml-1 ws-text-sm ws-font-semibold">Nạp Tiền</span></span></a>
                    <a href="#" class="ws-h-9 ws-w-10 ws-rounded ws-flex ws-justify-center ws-items-center ws-text-red-600 ws-mr-4"><i class="ws-text-2xl bx bx-bell"></i></a>
                    <a class="ws-py-1 ws-h-9 ws-rounded-lg ws-cursor-pointer ws-flex ws-justify-center ws-items-center el-tooltip__trigger el-tooltip__trigger">
                    <div class="ws-flex ws-items-center" id="dropdownTrigger">
                        <img src="https://ui-avatars.com/api/?background=random&name=<?=$_SESSION['username'];?>" class="ws-h-9 ws-rounded-full">
                        <div class="ws-mr-2 ws-ml-1.5 ws-inline-block">
                            <p class="ws-text-sm ws-truncate ws-w-[5.4rem] ws-font-medium ws-text-black"><small><?=$_SESSION['username'];?></small></p>
                            <p class="ws-text-red-500 ws-relative ws-text-xs ws-font-bold"><span class="ws-ml-0 ws-text-red-600"><?=format_cash($getUser['money']);?> <small></small></span></p>
                        </div>
                        <i class="ws-relative ws-top-[-1px] bx bx-caret-down"></i>
                    </div>
                    </a>
                    </span>
                    <span class="ws-inline-flex md:ws-hidden ws-flex-0 ws-items-start ws-justify-end"><a href="#" class="ws-h-9 ws-w-10 ws-rounded ws-flex ws-justify-center ws-items-center ws-text-red-600">
                    <div class="el-badge"><i class="ws-text-2xl bx bx-bell"></i><sup class="el-badge__content el-badge__content--danger is-fixed is-dot"></sup></div>
                    </a>
                    <a href="#"><span data-toggle="modal" data-target="#chargeModal" class="md:ws-hidden ws-cursor-pointer ws-text-xs ws-bg-gradient-to-l ws-from-red-500 ws-to-pink-500 ws-text-white ws-px-3 ws-h-9 ws-flex ws-justify-center ws-items-center ws-rounded ws-ml-2"><i class="ws-text-lg bx bxs-dollar-circle"></i><span class="ws-ml-1 ws-font-semibold">Nạp Tiền</span></span></a>
                    <span class="ws-ml-2 ws-h-9 ws-w-10 ws-bg-red-50 ws-rounded ws-flex ws-justify-center ws-items-center ws-text-red-600 el-tooltip__trigger el-tooltip__trigger"><i class="ws-text-2xl bx bx-menu"></i></span>
                    </span>
                    <?php }?>
                                        </div>
                </div>
            <div>
        </div>
    <div>
</div>
