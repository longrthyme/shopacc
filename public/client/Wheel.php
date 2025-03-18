<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
$title = 'VÒNG QUAY | ' . $NDVMEDIA->site('tenweb');
require_once("../../public/client/Header.php");
require_once("../../public/client/Nav.php");
?>
<?php
if (isset($_GET['id'])) {
    $row = $NDVMEDIA->get_row(" SELECT * FROM `mini_game` WHERE `id` = '" . check_string($_GET['id']) . "'  ");
    if (!$row) {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
} else {
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}
$id = intval($_GET['id']);
?>
<script src="/template/js/rotate.js"></script>
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
<div class="tw-max-w-7xl tw-mx-auto md:tw-px-2 tw-my-8">
    <div class="ws-breadcrumb ws-text-sm ws-text-zinc-700 ws-py-2 ws-mb-2">
        <a href="https://shopgameroblox.vn/">Trang Chủ</a>
        <i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i>
        <a><span>Trò Chơi</span></a>
        <i class="ws-relative ws-top-[1px] bx bx-chevron-right"></i>
        <span><?=mini_game($id, 'name');?></span>
    </div>
    <div class="ws-grid ws-grid-cols-12 ws-gap-x-6 ws-gap-y-2">
        <div class="ws-col-span-12 lg:ws-col-span-9 ws--mx-2 md:ws-mx-0">
            <div class="ws-bg-white ws-rounded">
                <div class="ws-p-3 ws-px-4 ws-border-b ws-border-zinc-100">
                    <h2 class="ws-mb-1 ws-block ws-uppercase ws-font-bold ws-text-xl ws-text-red-500"><?=mini_game($id, 'name');?></h2>
                    <div class="ws-font-medium ws-flex ws-items-center ws-justify-between">
                        <div class="ws-text-sm ws-flex ws-items-center ws-relative">
                            <span class="el-tag el-tag--success el-tag--dark" style="background-color:;">
                            <span class="el-tag__content">Đang Chơi: <b id="result">430</b><i class="ws-ml-1 ws-relative ws-top-[1px] bx bxs-user"></i></span>
                            </span>
                        </div>
                        <div>
                        <span data-toggle="modal" data-target="#theleModal" class="thele el-tag el-tag--light ws-mr-2" style="background-color:;"><span class="el-tag__content">Thể Lệ</span></span>
                        <a href=""><span class="el-tag el-tag--light" style="background-color:;"><span class="el-tag__content">Lịch Sử Chơi</span></span></a>
                        </div>
                    </div>
                </div>
<div style="center center; background-size: cover; background-repeat: no-repeat" class="ws-gwrapper">
                    <div>
                    <div class="ws-gmain ws-relative">
                        <div class="ws-bg-zinc-100 ws-rounded ws-px-2 ws-py-1 ws-h-9 ws-absolute ws-top-[2%] ws-right-[2%] ws-left-[2%]">
                            <span style="z-index:1;" class="ws-absolute ws-top-[2px] ws-bg-zinc-100 ws-h-6 ws-w-8 ws-inline-block"><i class="ws-bg-gradient-to-r ws-from-pink-500 ws-to-red-600 ws-bg-clip-text ws-text-transparent ws-text-2xl bx bxs-volume-full"></i></span>
                            <marquee behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">
                            <span class="ws-text-xs ws-mr-2"> Danh Sách Trúng Thưởng:</span>
                            <?php $i = 0;foreach($NDVMEDIA->get_list(" SELECT * FROM `lichsuvongquay` ORDER BY id DESC LIMIT 20 ") as $value){ ?>
                                                        <span class="ws-inline-block ws-text-zinc-600 ws-font-medium ws-mr-8 ws-text-xs"><b class="ws-text-red-600"><i class="ws-relative ws-top-[1.5px] bx bxs-user"></i> <?=$i++;?>
</b> - <span class="ws-capitalize">Trúng <?=format_cash($value['soluong']);?> Robux Lúc <?=timeAgo($value['time']);?></span></span>
                                                       <?php }?>
                                                        </marquee>
                        </div>
                        <div class="ws-flex ws-items-center ws-justify-center ws-relative ws-pt-14 ws-py-10 md:ws-py-20">
                            <img alt="Play" class="ws-w-[90%] md:ws-w-[70%] ws-fz" style="transform: rotate(0deg);" src="<?= mini_game($id, 'image'); ?>" id="rotate">
                            <img id="start" src="https://cdns.hulteam.vn/images/upload/setting/b3266827676f06041be122b49ca933ab.png" class="start-played ws-absolute ws-top-[38%] md:ws-top-[37%] ws-w-[19%] md:ws-w-[15%] ws-cursor-pointer" id="rotate">
                        </div>
                    </div>
                    <div class="ws-py-4 ws-flex ws-items-center ws-justify-center ws-px-5 ws-w-full">
                        <div class="ws-grid ws-grid-cols-12 ws-gap-4 ws-w-full md:ws-max-w-[70%]">
                            <div class="ws-col-span-12 md:ws-col-span-6 lg:ws-col-span-6">
                                <div class="el-select el-select--large ws-w-full">
                                    <div class="select-trigger el-tooltip__trigger el-tooltip__trigger">
                                        <div class="el-input el-input--large el-input--suffix">
                                            <select class="el-input__inner " id="x" name="x">
							<option value="1">Mua X1 - <?= number_format(mini_game($id, 'price')); ?> Tiền shop / 1 Lần Quay</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="ws-dbz ws-col-span-6 md:ws-col-span-3 lg:ws-col-span-3">
                                <button id="start" class="start-played el-button el-button--primary el-button--large ws-w-full" id="plays"><span>Chơi Ngay</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ws-col-span-12 lg:ws-col-span-3">
        <div class="ws-grid ws-grid-cols-12 md:ws-gap-2 ws-gap-4 ws-bg-red-500 ws-rounded ws-py-2 ws-px-3 ws-mb-4">
            <div class="ws-col-span-6">
                <a href="/user/recharge">
                <button ariadisabled="false" type="button" class="el-button el-button--large ws-w-full" style="--el-button-bg-color:white;--el-button-text-color:var(--el-color-black);--el-button-border-color:white;--el-button-hover-bg-color:rgb(255, 255, 255);--el-button-hover-text-color:var(--el-color-black);--el-button-hover-border-color:rgb(255, 255, 255);--el-button-active-bg-color:rgb(208, 208, 208);--el-button-active-border-color:rgb(208, 208, 208);"><span>Nạp Tiền</span></button>
                </a>
            </div>

            <div class="ws-col-span-6">
                <a href="/user/history/acc" class="ws-w-full">
                <button ariadisabled="false" type="button" class="el-button el-button--large ws-w-full" style="--el-button-bg-color:white;--el-button-text-color:var(--el-color-black);--el-button-border-color:white;--el-button-hover-bg-color:rgb(255, 255, 255);--el-button-hover-text-color:var(--el-color-black);--el-button-hover-border-color:rgb(255, 255, 255);--el-button-active-bg-color:rgb(208, 208, 208);--el-button-active-border-color:rgb(208, 208, 208);"><span>Lịch Sử</span></button>
                </a>
            </div>
        </div>
    <div>
    <label class="ws-block ws-mb-1 md:ws-text-lg ws-font-bold">MINIGAME ĐỀ XUẤT</label>
    <div class="ws-grid ws-grid-cols-12 ws-gap-3 md:ws-gap-4 lg:ws-gap-5">
        <?php foreach ($NDVMEDIA->get_list("SELECT * FROM `mini_game` WHERE `status` = 'true' ") as $minigame) { ?>
                <div class="ws-col-span-6 md:ws-col-span-12">
            <a href="<?= BASE_URL('VongQuay/' . $minigame['id']); ?>">
            <div class="ws-relative">
                <img src="<?= mini_game($minigame['id'], 'thumb'); ?>" class="ws-rounded-lg ws-w-full md:ws-h-[9.5rem]" title="<?= mini_game($minigame['id'], 'thumb'); ?>">
                <span class="ws-absolute ws-font-semibold ws-bottom-[5px] ws-right-[5px] ws-bg-blue-600 ws-rounded ws-px-2 ws-text-xs ws-text-white">
                <small>
                <span class="ws-inline-block">Đã Chơi: <?= $minigame['sudung']; ?></span>
                <div class="el-divider el-divider--vertical" style="--el-border-style: solid;" role="separator"></div>
                <span class="ws-inline-block">Xem: 654</span>
                </small>
                </span>
            </div>
            <div class="ws-min-h-[50px]">
                <label class="ws-block ws-font-medium ws-text-xs md:ws-text-sm ws-text-zinc-900"><?= $minigame['name']; ?></label>
            <div>
            <span class="ws-mr-2 ws-font-semibold ws-text-xs md:ws-text-base ws-text-red-600"><?= $minigame['price']; ?></span>
            <span class="ws-line-through ws-text-zinc-400 ws-text-xs md:ws-text-sm ws-font-semibold">75,000đ</span>
            </div>
            </div></a>
        </div>
                <?php } ?>
        
            </div>
</div>
<div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="theleModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
    <div class="modal-dialog tw-max-w-md tw-w-full tw-rounded tw-shadow tw-bg-white">
        <div class="tw-relative tw-bg-red-600 tw-px-2 tw-py-1 tw-text-xl tw-text-white tw-font-bold tw-text-center tw-border-b tw-rounded-t">
            <span class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-text-sm tw-font-bold tw-rounded-full tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800" style="top: -15px; right: -5px; z-index: 100;"  data-dismiss="modal" aria-label="Close"><i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i></span>
            <div class="tw-col-span-12 tw-py-3 tw-rounded-t tw-font-bold">THỂ LỆ</div>
        </div>
        <div class="tw-p-2 md:tw-p-4"><p class="text-md"><p>Vòng Quay Mỗi Lượt Quay Tốn 19K Càng Quay Nhiều Tỉ Lệ Trúng 9.999 Robux Càng Cao.</p>

<p>Cơ Hội Nhận Được Nhiều Phần Quà Hấp Dẫn Như: 9.999 Robux, 5.000 Robux, 3.0000 Robux,... Chúc Bạn Một Ngày Vui Vẻ Quay Trúng Nhiều Quà!!!</p></p></div>
    </div>                    
</div></div></div>






			
       
<?php }?>

    <script type="text/javascript">
        $(document).ready(function() {
            var bRotate = false;

            function rotateFn(angles, txt, type) {
                bRotate = !bRotate;
                $('#rotate').stopRotate();
                $('#rotate').rotate({
                    angle: 0,
                    animateTo: angles + 1800,
                    duration: 4000,
                    callback: function() {
                        var awar = txt;
                        Swal.fire('Thành công !', awar, 'success')
                        document.getElementById('modalMinigame').classList.add(isVisible);
                        bRotate = !bRotate;
                    }
                })
            }
            $('#start').click(function() {
                console.log('Click button');

                if (bRotate);

                $.ajax({
                    type: 'post',
                    dataType: "JSON",
                    url: '/assets/ajaxs/Quay.php',
                    data: {
                        id_vongquay: <?= $id; ?>
                    },
                    success: function(json) {
                        if (json.status == 3) {
                            Swal.fire('Oops !', 'Vui lòng đăng nhập !', 'error')
                        } else if (json.status == 4) {
                            Swal.fire('Oops !', 'Bạn không đủ tiền để quay !', 'error')
                        } else if (json.status == 1) {
                            if (json.item > 0 && json.item < 9) {
                                rotateFn(json.location, json.msg, "success");
                            } else {
                                Swal.fire('Oops !', 'Đã có lỗi xảy ra !', 'error')
                            }
                        } else {
                            Swal.fire('Oops !', 'Hệ thống đang bảo trì !', 'error')
                        }
                    }
                });

            });

        });
    </script>

    <?php
    require_once("../../public/client/Footer.php");
    ?>