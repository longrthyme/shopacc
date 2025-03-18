<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
        $title = 'THANH TOÁN | '.$NDVMEDIA->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
?>
<?php
if(isset($_GET['id']))
{
    $row = $NDVMEDIA->get_row(" SELECT * FROM `accounts` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}

?>

<?php if($NDVMEDIA->site('theme_web') == 'theme1') { ?>
<script>
function Tab(id){var i,tabcontent,tablinks;tabcontent=document.getElementsByClassName("tabcontent");for(i=0;i<tabcontent.length;i++){tabcontent[i].style.display="none"}
tablinks=document.getElementsByClassName("tablinks");for(i=0;i<tablinks.length;i++){tablinks[i].className=tablinks[i].className.replace(" ws-bg-red-500 ws-text-white","")}
document.getElementById(id).style.display="block";event.currentTarget.className+=" ws-bg-red-500 ws-text-white"}
document.addEventListener('DOMContentLoaded',function(){var dropdownContentMobile=document.querySelector('.drop-profile-show-mobile');var mobileMenuTrigger=document.querySelector('.ws-text-2xl.bx.bx-menu');mobileMenuTrigger.addEventListener('click',function(event){event.stopPropagation();if(dropdownContentMobile.style.display==='none'){dropdownContentMobile.style.display='block';updateMobileDropdownPosition()}else{dropdownContentMobile.style.display='none'}});document.addEventListener('click',function(event){var isClickInsideMobileDropdown=mobileMenuTrigger.contains(event.target)||dropdownContentMobile.contains(event.target);if(!isClickInsideMobileDropdown){dropdownContentMobile.style.display='none'}});function updateMobileDropdownPosition(){var triggerRect=mobileMenuTrigger.getBoundingClientRect();var windowWidth=window.innerWidth;var dropdownWidth=dropdownContentMobile.offsetWidth;var leftValue=Math.min(triggerRect.left+24,windowWidth-dropdownWidth)-20;var currentInset=dropdownContentMobile.style.inset;var topValue=triggerRect.bottom+window.scrollY;var newInset=`${topValue}px auto auto ${leftValue}px`;if(triggerRect.bottom+dropdownContentMobile.offsetHeight>window.innerHeight){var newTopValue=window.innerHeight-dropdownContentMobile.offsetHeight+window.scrollY;newInset=`${newTopValue}px auto auto ${leftValue}px`}
dropdownContentMobile.style.inset=newInset;dropdownContentMobile.style.left=leftValue+'px'}
window.addEventListener('scroll',updateMobileDropdownPosition);window.addEventListener('resize',updateMobileDropdownPosition);updateMobileDropdownPosition()});var dropdownContent=document.getElementById('dropdownContent');var dropdownTrigger=document.getElementById('dropdownTrigger');var arrow=document.querySelector('.el-popper__arrow');var initialDropdownWidth=210;dropdownTrigger.addEventListener('click',toggleDropdown);dropdownTrigger.addEventListener('touchstart',toggleDropdown);document.addEventListener('click',function(event){var isClickInside=dropdownTrigger.contains(event.target)||dropdownContent.contains(event.target);if(!isClickInside){dropdownContent.style.display='none'}});function updateDropdownPosition(){var triggerRect=dropdownTrigger.getBoundingClientRect();var dropdownRect=dropdownContent.getBoundingClientRect();if(triggerRect.bottom+dropdownRect.height>window.innerHeight){dropdownContent.style.top=window.innerHeight-dropdownRect.height+'px'}else{dropdownContent.style.top=triggerRect.bottom+'px'}
var topValue=triggerRect.bottom+window.scrollY-11+17;var leftValue=triggerRect.left+window.scrollX-50;dropdownContent.style.left=leftValue+'px';arrow.style.left=triggerRect.left+(triggerRect.width/2)-20+'px';var insetValue=`${topValue}px auto auto ${leftValue}px`;dropdownContent.style.inset=insetValue}
window.addEventListener('scroll',updateDropdownPosition);window.addEventListener('resize',updateDropdownPosition);updateDropdownPosition();function toggleDropdown(event){event.stopPropagation();if(dropdownContent.style.display==='none'){dropdownContent.style.display='block';updateDropdownPosition()}else{dropdownContent.style.display='none'}}
</script>
<link rel="stylesheet" href="https://transvelo.github.io/electro-html/2.0/assets/vendor/slick-carousel/slick/slick.css">
<style>
.d-flex {
    display: flex;
}
.slick-current img {
    --tw-border-opacity: 1;
    border-color: rgba(220, 38, 38, var(--tw-border-opacity));
}
.slick-active {
    display: block;
}
.u-slick--transform-off.slick-transform-off .slick-track {
    -webkit-transform: none !important;
    transform: none !important;
}
</style>
<div class="tw-max-w-6xl tw-mx-auto tw-px-2">
    <div class="md:tw-bg-white tw-grid tw-grid-cols-12 tw-gap-4 md:tw-p-3 tw-rounded">
        <div class="tw-col-span-12 md:tw-col-span-6">
            <div class="tw-relative">
                <span class="tw-absolute tw-inline-block tw-px-2 tw-rounded tw-text-sm tw-cursor-pointer tw-font-semibold tw-text-white tw-bg-gray-800" style="bottom: 5px; left: 5px;z-index:2;"> Nhấn Vào Để Phóng To</span>
                <div id="sliderSyncingNav" class="js-slick-carousel u-slick tw-relative" data-infinite="true" data-arrows-classes="d-none d-lg-inline-block" data-arrow-left-classes="bx bx-chevron-left d-flex tw-arrow-left tw-absolute tw-h-8 tw-w-8 tw-rounded tw-inline-flex tw-text-lg tw-text-gray-800 tw-items-center tw-justify-center tw-cursor-pointer" data-arrow-right-classes="bx bx-chevron-right d-flex tw-arrow-right tw-absolute tw-h-8 tw-w-8 tw-rounded tw-inline-flex tw-text-lg tw-text-gray-800 tw-items-center tw-justify-center tw-cursor-pointer" data-nav-for="#sliderSyncingThumb">
                                                <div class="js-slide"><img class="tw-h-56 md:tw-h-72 tw-w-full tw-object-fill tw-object-center tw-rounded tw-cursor-pointer" src="<?=$NDVMEDIA->get_row(" SELECT * FROM `groups` WHERE `id` = '".$row['groups']."'  ")['img'];?>"></div>
                                 
            </div>
        </div>
        <div class="tw-relative tw-px-10 tw-mt-4">
            <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off" data-infinite="true" data-slides-show="5" data-is-thumbs="true" data-nav-for="#sliderSyncingNav">
                                                <div class="js-slide tw-rounded tw-h-12 tw-text-white tw-flex tw-flex-col tw-items-center tw-justify-center tw-cursor-pointer tw-select-none"><img class="tw-w-full tw-h-12 tw-object-fill tw-object-center tw-rounded tw-border-2" src="<?=$NDVMEDIA->get_row(" SELECT * FROM `groups` WHERE `id` = '".$row['groups']."'  ")['img'];?>"></div>
                                  
            </div>
        </div>
    </div>
    <div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="viewModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
        <div class="modal-dialog tw-relative tw-max-w-7xl tw-mx-auto tw-grid tw-grid-cols-12 tw-gap-2 tw-bg-white tw-p-2 tw-rounded">
            <span class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-rounded-full tw-text-sm tw-font-bold tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800 " style="top: -15px; right: -5px; z-index: 100;" data-dismiss="modal" aria-label="Close"><i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i></span>
            <div class="tw-relative tw-col-span-8">
                <div id="sliderLarge" class="js-slick-carousel2 u-slick tw-relative" data-infinite="true" data-arrows-classes="d-none d-lg-inline-block" data-arrow-left-classes="bx bx-chevron-left d-flex tw-arrow-left tw-absolute tw-h-8 tw-w-8 tw-rounded tw-inline-flex tw-text-lg tw-text-gray-800 tw-items-center tw-justify-center tw-cursor-pointer" data-arrow-right-classes="bx bx-chevron-right d-flex tw-arrow-right tw-absolute tw-h-8 tw-w-8 tw-rounded tw-inline-flex tw-text-lg tw-text-gray-800 tw-items-center tw-justify-center tw-cursor-pointer" data-nav-for="#sliderSmall">
                                                <div class="js-slide"><img class="tw-h-full tw-w-full tw-object-fill tw-object-center tw-rounded" src="<?=$NDVMEDIA->get_row(" SELECT * FROM `groups` WHERE `id` = '".$row['groups']."'  ")['img'];?>"></div>
                                  
                </div>
            </div>
            <div class="tw-relative tw-col-span-4">
                <div class="tw-my-3 md:tw-mb-3 md:tw-mt-0 tw-bg-red-700 tw-text-white tw-py-1 tw-px-2 tw-rounded">
                                        <div class="tw-uppercase tw-font-bold tw-text-xl">M.Số: #<?=($row['id']);?></div>
                                        <div class="tw-text-xs tw-text-red-100 tw-relative tw-font-medium tw-uppercase"><?=$NDVMEDIA->get_row(" SELECT * FROM `groups` WHERE `id` = '".$row['groups']."'  ")['title'];?></div>
                </div>
                <style>
                #sliderSmall .slick-track {
                    width: auto !important;
                }
                #sliderSmall.u-slick--slider-syncing-size .slick-slide {
                    width: 5rem !important;
                }
                </style>
                <div id="sliderSmall" class="js-slick-carousel2 u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off" data-infinite="true" data-slides-show="1" data-is-thumbs="true" data-nav-for="#sliderLarge" style="max-height: 46vh; overflow-y: auto;">
                                                <div class="js-slide tw-col-span-3 tw-cursor-pointer"><img class="tw-w-full tw-h-16 tw-border-2 tw-object-fill tw-object-center tw-rounded hover:tw-border-red-500 tw-border-transparent" src="<?=$NDVMEDIA->get_row(" SELECT * FROM `groups` WHERE `id` = '".$row['groups']."'  ")['img'];?>"></div>
                                                </div>
            </div>
        </div>
    </div>
    <div class="tw-col-span-12 md:tw-col-span-6">
        <div class="tw-my-3 md:tw-mb-3 md:tw-mt-0 tw-bg-red-700 tw-text-white tw-py-1 tw-px-2 tw-rounded">
                        <div class="tw-uppercase tw-font-bold tw-text-xl">MÃ SỐ: #<?=($row['id']);?></div>
                        <div class="tw-text-xs tw-text-red-100 tw-relative tw-font-medium tw-uppercase"><?=$NDVMEDIA->get_row(" SELECT * FROM `groups` WHERE `id` = '".$row['groups']."'  ")['title'];?></div>
        </div>
        <div class="ws-my-4 ws-grid ws-grid-cols-12 ws-gap-0">
            <div class="ws-col-span-12">
                <div style="background:linear-gradient(100deg,rgb(255, 66, 78),rgb(253, 130, 10));" class="ws-flex ws-rounded ws-items-center ws-justify-between ws-px-3 ws-py-1">
                <div>
                <span class="ws-text-white ws-text-sm ws-text-xs ws-font-semibold">ATM, MOMO <i class="bx bxs-hot ws-relative ws-top-[0.8px]"></i></span>
                <h2 class="ws-text-white ws-stroke-red-500 ws-font-extrabold ws-text-2xl"><?=format_cash($row['money']);?><small>đ</small></h2>
                                <p class="ws-font-medium ws-text-sm" style="color:rgba(255, 255, 255, 0.8);"><span class="ws-line-through"><?=format_cash($row['money']*3);?></span></p>
                                </div>
                <div class="el-divider el-divider--vertical" style="--el-border-style:solid;" role="separator"></div>
                <div>
                <span class="ws-text-white ws-text-xs ws-font-semibold">THẺ CÀO (CARD)</span>
                <h2 class="ws-text-white ws-font-extrabold ws-text-2xl"><?=format_cash($row['money']);?><small>đ</small></h2>
                                <p style="color:rgba(255, 255, 255, 0.8);" class="ws-font-medium ws-text-sm"><span class="ws-text-xs ws-uppercase">Giá Gốc: </span><span class="ws-line-through"><?=format_cash($row['money']*3);?></span></p>
                                </div>
                </div>
            </div>
        </div>
        <div class="ws-bg-white ws-mb-4"><label class="ws-text-sm ws-font-medium ws-uppercase ws-mb-2 ws-block">Thông Tin Chi Tiết</label><div>
            <div class="ws-grid ws-grid-cols-12 ws-gap-1 ws-text-sm">
                                <div class="ws-mb-0.5 ws-col-span-4 md:ws-col-span-3 ws-py-2 ws-font-medium ws-px-2 ws-text-zinc-700 ws-bg-zinc-100">Nổi Bật:</div>
                <div class="ws-bg-zinc-50 ws-col-span-8 md:ws-col-span-9 ws-py-2 ws-px-2 ws-text-zinc-700"><?=($row['chitiet']);?></div>
                            </div>                                    
        </div>
    </div>
    <label><i>Khuyến Mãi Khi Nạp Qua ATM/MOMO</i></label>
    <style>
    .fade {
        display: none;
    }
    .fade.show:not(#champModal,
    #skinModal,
    #infoModal) {
        display: flex !important;
    }
    </style>
    <div class="ws-mt-4">
        <button ariadisabled="false" type="button" data-toggle="modal" data-target="#buyModal" class="el-button el-button--primary el-button--large ws-w-full md:ws-w-[20rem]" style="font-size:1.2rem;--el-button-size:46px;"><i class="el-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path fill="currentColor" d="M192 352h640l64 544H128zm128 224h64V448h-64zm320 0h64V448h-64zM384 288h-64a192 192 0 1 1 384 0h-64a128 128 0 1 0-256 0"></path></svg></i><span>MUA NGAY</span></button></div>
        <div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="buyModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
            <div class="modal-dialog tw-max-w-md tw-w-full tw-rounded tw-shadow tw-bg-white">
                <div class="tw-relative tw-bg-red-600 tw-px-2 tw-py-1 tw-text-xl tw-text-white tw-font-bold tw-text-center tw-border-b tw-rounded-t">
                    <header class="el-dialog__header">
                    <div class="ws-flex ws-items-center ws-justify-between">
                        <div class="ws-text-white ws-font-semibold">
                        <small><span>XÁC NHẬN </span>MUA TÀI KHOẢN</small>
                                                <p class="ws-text-2xl" data-dismiss="modal" aria-label="Close">#<?=($row['id']);?></p>
                                                </div>
                        <button class="focus:ws-outline-none ws-w-4 ws-h-4 ws-flex ws-items-center ws-justify-center ws-rounded ws-text-xl ws-text-white" data-dismiss="modal" aria-label="Close"><i class="bx bx-x"></i></button>
                    </div>
                    </header>
                </div>    
                <div class="tw-p-2 md:tw-p-4">
                    <div class="ws-mb-2">
                        <label class="ws-text-sm ws-font-medium ws-uppercase ws-text-zinc-800 ws-mb-2 ws-block">Thông Tin Chi Tiết</label>
                        <div class="ws-grid ws-grid-cols-12 ws-gap-1 ws-text-sm">
                                                <div class="ws-mb-0.5 ws-col-span-4 md:ws-col-span-3 ws-py-2 ws-font-medium ws-px-2 ws-text-zinc-700 ws-bg-zinc-100">Nổi Bật:</div>
                        <div class="ws-bg-zinc-50 ws-col-span-8 md:ws-col-span-9 ws-py-2 ws-px-2 ws-text-red-600"><?=($row['chitiet']);?></div>
                                                </div>
                    </div>
                <div class="tw-mb-4">
                            <div id="msgBuy"></div></br>
            <div class="ws-mb-4">
                <div class="ws-flex ws-justify-between ws-items-center">
                    <div class="ws-relative ws-font-medium ws-text-zinc-700 ws-uppercase"><span>Số Dư Của Bạn</span></div>
                        <div class="ws-text-right ws-font-bold ws-text-base ws-text-red-600"><?=format_cash($getUser['money']);?>đ <a data-toggle="modal" data-target="#naptienModal"><button class="ws-px-1"><i class="ws-text-red-500 ws-relative ws-text-xl bx bxs-plus-square" style="top: 3px;"></i></button></a></div>
                    </div>
                </div>
                <div class="tw-mb-3">
                                <label class="tw-block tw-font-semibold tw-text-sm tw-text-blue-900">
                                    Mã giảm giá (Nếu có): 
                                </label>
                                <input id="magiamgia" placeholder="Mã giảm giá" type="text" class="tw-w-full tw-border tw-border-blue-800 tw-rounded tw-h-11 tw-px-3 tw-font-semibold">
                            </div>
                        </div>
                        <div class="tw-mb-4">
                                                <div id="thongbao"></div></br>
                            <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-mb-2 tw-text-gray-700">
                                <div class="tw-relative tw-col-span-6 tw-font-semibold tw-text-base"><span>Số dư của bạn</span></div>
                                <div class="tw-col-span-6 tw-text-right tw-font-bold">
                                    <?=format_cash($getUser['money']);?>đ
                                    <a href="/user/recharge"><button class="tw-px-1"><i class="tw-text-red-500 tw-relative tw-text-xl bx bxs-plus-square" style="top: 3px;"></i></button></a>
                                </div>
                            </div>
                            <!---->
                            <div class="tw-grid tw-grid-cols-12 tw-gap-2">
                                <div class="tw-col-span-6 tw-font-semibold tw-text-base tw-relative tw-text-red-600"><span class="tw-relative" style="top: 2px;">GIÁ TÀI KHOẢN</span></div>
                                <div class="tw-col-span-6 tw-text-right tw-font-bold tw-text-xl tw-text-red-600" id="amount">
                                <?=format_cash($row['money']);?>đ
                                </div>
                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2">
                            <div class="tw-col-span-8">
                                <div>
                                    <button id="btnThanhToan" class="tw-bg-red-500 tw-border tw-border-red-500 tw-px-2 tw-py-2 tw-rounded tw-text-white tw-font-bold tw-w-full">
                                        XÁC NHẬN MUA
                                    </button>
                                </div>
                            </div>
                            <div class="tw-col-span-4">
                                <button class="tw-py-2 tw-px-3 tw-text-center tw-border tw-rounded tw-w-full" data-dismiss="modal">
                                    Đóng
                                </button> </div>
            </div>
        </div>
                </div>
    </div></div>
</div></div>

<script type="text/javascript">
$("#btnThanhToan").on("click", function() {

    $('#btnThanhToan').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/Orders.php");?>",
        method: "POST",
        data: {
            id: <?=$row['id'];?>,
            magiamgia: $("#magiamgia").val(),
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#btnThanhToan').html(
                    'THANH TOÁN')
                .prop('disabled', false);
        }
    });
});
</script>
<?php }?>



<?php 
    require_once("../../public/client/Footer.php");
?>