<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
        $title = 'DANH SÁCH TÀI KHOẢN | '.$NDVMEDIA->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
        function phantrang2($url, $start, $total, $kmess)
{
    $out[] = ' <nav class="relative z-0 inline-flex v-pagination mx-auto v-text-1 v-light-theme">';
    $neighbors = 2;
    if ($start >= $total) $start = max(0, $total - (($total % $kmess) == 0 ? $kmess : ($total % $kmess)));
    else $start = max(0, (int)$start - ((int)$start % (int)$kmess));
    $base_link = '<li><a class="mx-1 border border-gray-400 bg-white relative v-page-no w-8 md:w-10 h-8 md:h-10 text-md md:text-lg rounded font-bold inline-flex items-center justify-center px-2 py-2 leading-5 font-medium focus:outline-none transition ease-in-out duration-150 text-gray-800 v-pagination-text disabled" href="' . strtr($url, array('%' => '%%')) . 'page=%d' . '">%s</a></li>';
    $out[] = $start == 0 ? '' : sprintf($base_link, $start / $kmess, '<svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
    <path fill-rule="evenodd"
        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
        clip-rule="evenodd"></path>
</svg>');
    if ($start > $kmess * $neighbors) $out[] = sprintf($base_link, 1, '1');
    if ($start > $kmess * ($neighbors + 1)) $out[] = '<li class="page-item"><a class="page-link">...</a></li>';
    for ($nCont = $neighbors;$nCont >= 1;$nCont--) if ($start >= $kmess * $nCont) {
        $tmpStart = $start - $kmess * $nCont;
        $out[] = sprintf($base_link, $tmpStart / $kmess + 1, $tmpStart / $kmess + 1);
    }
    $out[] = '<li class="border mx-1 w-8 md:w-10 h-8 md:h-10 text-md md:text-lg select-none rounded inline-flex justify-center items-center px-4 py-2 focus:outline-none text-white border-red-600 text-white bg-red-600"><a class="page-link">' . ($start / $kmess + 1) . '</a></li>';
    $tmpMaxPages = (int)(($total - 1) / $kmess) * $kmess;
    for ($nCont = 1;$nCont <= $neighbors;$nCont++) if ($start + $kmess * $nCont <= $tmpMaxPages) {
        $tmpStart = $start + $kmess * $nCont;
        $out[] = sprintf($base_link, $tmpStart / $kmess + 1, $tmpStart / $kmess + 1);
    }
    if ($start + $kmess * ($neighbors + 1) < $tmpMaxPages) $out[] = '<li class="page-item"><a class="page-link">...</a></li>';
    if ($start + $kmess * $neighbors < $tmpMaxPages) $out[] = sprintf($base_link, $tmpMaxPages / $kmess + 1, $tmpMaxPages / $kmess + 1);
    if ($start + $kmess < $total)
    {
        $display_page = ($start + $kmess) > $total ? $total : ($start / $kmess + 2);
        $out[] = sprintf($base_link, $display_page, '<svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
        <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
    </svg>
        ');
    }
    $out[] = '</ul></nav>';
    return implode('', $out);
}
?>
<?php
if(isset($_GET['id']))
{
    $row = $NDVMEDIA->get_row(" SELECT * FROM `groups` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}
$sotin1trang = 16;
if(isset($_GET['page']))
{
    $page = intval($_GET['page']);
}
else
{
    $page = 1;
}
$from = ($page - 1) * $sotin1trang;
if(isset($_GET['amount']))
{
    $amount = check_string($_GET['amount']);
    if($amount == 1)
    {
        $amount = ' AND `money` <= 50000 ';
    }
    else if($amount == 2)
    {
        $amount = ' AND `money` >= 50000 AND `money` <= 100000 ';
    }
    else if($amount == 3)
    {
        $amount = ' AND `money` >= 100000 AND `money` <= 200000 ';
    }
    else if($amount == 4)
    {
        $amount = ' AND `money` >= 200000 AND `money` <= 500000 ';
    }
    else if($amount == 5)
    {
        $amount = ' AND `money` >= 500000 ';
    }
    $type_amount = check_string($_GET['amount']);
}
else
{
    $amount = '';
    $type_amount = '';
}
if(isset($_GET['id_acc']))
{
    $id_acc = check_string($_GET['id_acc']);
}
else
{
    $id_acc = NULL;
}
$listAccount = $NDVMEDIA->get_list("SELECT * FROM `accounts` WHERE `groups` = '".$row['id']."' AND `id` LIKE  '%$id_acc%' AND `username` IS NULL $amount ORDER BY id DESC LIMIT $from,$sotin1trang ");
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
<div class="tw-max-w-6xl tw-mx-auto tw-px-2">
    <span class="tw-text-sm tw-relative" style="top: 1px;">DANH MỤC: </span>
    <h2 class="ws-block ws-font-bold ws-text-lg ws-text-red-500 tw-uppercase"><?=$row['title'];?></h2>
    <div class="tw-mb-2">
    <div class="text-overflow no-overflow">
        <div class="text-overflow-content" style="--nlines: 5; --lineHeight: 24px;">
            <?php if(isset($row['chitiet'])){ ?>
            <div class="relative tw-bg-white tw-py-2 tw-px-3 tw-rounded" role="alert">
                 
            <strong><?=base64_decode($row['chitiet']);?></strong>
            </div>
                            <?php }?>
        </div>
    </div>
</div>

<div class="tw-grid tw-grid-cols-12 tw-gap-3 tw-py-2">
    <div class="tw-col-span-12 tw-mb-4">
        <div class="tw-mb-1">
            <b class="tw-text-xs"> BỘ LỌC TÌM KIẾM </b>
             <form action="<?=BASE_URL('public/client/Accounts.php');?>" method="GET">
                             <input value="<?=check_string($_GET['id']);?>" name="id" type="hidden">
            <div class="md:tw-grid tw-grid-cols-12 tw-gap-3">
                <div class="tw-col-span-12 md:tw-col-span-4">
                    <div class="tw-w-full tw-relative">
                        <label class="tw-inline-block tw-text-gray-500 tw-absolute tw-text-xs tw-font-medium" style="left: 10px; top: 6px">Mã Số Tài Khoản</label> 
                        <div class="el-input">
                            <input type="text" name="id_acc" autocomplete="off" placeholder="Nhập Mã Số Tài Khoản (Ví Dụ: 123456)...." class="el-input__inner" >
                        </div>
                    </div>
                </div>
                <div class="tw-col-span-12 md:tw-col-span-4">
                    <div class="tw-w-full tw-relative">
                        <div class="el-select tw-block tw-w-full el-select--large">
                            <div class="el-input el-input--large el-input--suffix">
                                <select class="el-input__inner" id="amount">
                                <option value="">-- Chọn Giá Tiền --</option>
                                <option value="duoi-50k">Dưới 50K</option>
                                <option value="tu-50k-200k">Từ 50K - 200K</option>
                                <option value="tu-200k-500k">Từ 200K - 500K</option>
                                <option value="tu-500k-1-trieu">Từ 500K - 1 Triệu</option>
                                <option value="tren-1-trieu">Trên 1 Triệu</option>
                                <option value="tren-5-trieu">Trên 5 Triệu</option>
                                <option value="tren-10-trieu">Trên 10 Triệu</option>
                                </select>
                                <span class="el-input__suffix">
                                <span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                                
                        <div class="tw-col-span-12 md:tw-col-span-3">
                <div class="tw-w-full tw-relative">
                    <button type="submit" class="el-button el-button--primary focus:tw-outline-none tw-px-2 tw-h-10 tw-rounded tw-border-2 tw-border-red-500 tw-bg-red-500 tw-text-white tw-w-full tw-text-sm tw-font-semibold hover:tw-bg-red-600 hover:tw-border-red-600 tw-transition tw-duration-200"><i class="tw-relative tw-text-xl bx bxs-filter-alt tw-mr-1" style="top: 2px;"></i> Lọc</button>
                    <a href="<?=BASE_URL('public/client/Accounts.php?id='.check_string($_GET['id']));?>"></a>
                </div>
            </div>
            
        </div>
        </form>
        </div>
    </div>
</div>
 
<div  id="list_account" class="ws-grid ws-grid-cols-10 ws-gap-2">
     <?php foreach($listAccount as $acc) {?>
                        <div class="ws-border ws-col-span-5 md:ws-col-span-2 ws-bg-white ws-rounded-lg hover:ws-shadow-sm">
                <a href="<?=BASE_URL('Orders/'.$acc['id']);?>" class="ws-bg-white">
                <div class="ws-relative ws-w-full ws-inline-block ws-mb-0">
                                        <img src="<?=$acc['img'];?>" class="ws-h-32 md:ws-h-40 ws-w-full ws-object-fill ws-object-center ws-rounded-t-sm ws-rounded-t-lg">
                                                            <span style="background-image:url(https://shopgameroblox.vn/assets/images/voucher3.png);background-size:100% 90%;padding-left:0.575rem;padding-right:0.575rem;" class="ws-absolute ws-top-[5px] ws-right-[5px] ws-text-xs ws-px-2 ws-py-0.5 ws-rounded ws-text-white"><i class="ws-relative ws-top-[1px] bx bxs-check-shield"></i> <?=$acc['id'];?></span>
                                    </div>
                <div class="ws-py-1 ws-px-2 ws-text-red-500 ws-text-base">
                    <div class="ws-flex ws-justify-between ws-items-center">
                        <div class="ws-col-span-7">
                                                        <span class="ws-font-semibold ws-inline-flex ws-items-start"><span class="ws-text-lg"><?=format_cash($acc['money']);?></span><small class="ws-ml-[0.5px]">đ</small></span></div>
                                                        <div class="ws-col-span-5 ws-text-right"><button class="ws-text-xs ws-bg-red-500 ws-text-white ws-rounded ws-px-2 ws-py-1"> Xem<span class="ws-hidden md:ws-inline ws-ml-1">Ngay</span></button></div>
                        </div>
                    </div>
                     
                    <div class="ws-text-sm ws-text-zinc-800 ws-border-t ws-border-dashed ws-py-1 ws-px-2">
                                                <div class="ws-my-1"><span class="ws-w-full ws-block"><span class="ws-mr-1 ws-text-zinc-700"><i class="ws-relative ws-top-[1px] bx bx-caret-right"></i> Nổi Bật: </span><span class="ws-font-medium">  <?=$acc['chitiet'];?></span></span></div>
                                            </div>
                                             
                                        <div class="ws-py-2 ws-truncate ws-text-sm ws-text-zinc-800 ws-px-2 ws-border-t ws-border-dashed"><i class="ws-text-red-600 ws-relative ws-top-[1px] bx bxs-hot"></i> ĐANG GIẢM GIÁ CỰC SỐC</div>
                                    </a>
            </div>
            <?php }?>   
                        
                       
                    </div>
    </div>
</div>



   
                                    <?php
            $tong = $NDVMEDIA->num_rows(" SELECT * FROM `accounts` WHERE `groups` = '".$row['id']."' AND `id` LIKE  '%$id_acc%' AND `username` IS NULL $amount ORDER BY id DESC ");
            if ($tong > $sotin1trang)
            {
                echo '' . phantrang($base_url.'public/client/Accounts.php?id='.check_string($_GET['id']).'&amount='.$type_amount.'&id_acc='.$id_acc.'&', $from, $tong, $sotin1trang) . '';
            }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?> 
<?php if($NDVMEDIA->site('theme_web') == 'theme2') { ?>
<div class="v-theme">
    <div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto">
            <div class="md:mx-0">
                <div class="py-6">
                    <div class="mb-16">
                        <div class="mb-4 py-4 md:p-4 bg-box-dark">
                            <div
                                class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill ">
                                <?=$row['title'];?>
                            </div>
                            <div class="mb-6"><span class="mx-auto block w-40 border-2 border-red-500 "></span>
                            </div>
                            <?php if(isset($row['chitiet'])){ ?>
                                
                            <div class="alert-info" role="alert">
                                <?=base64_decode($row['chitiet']);?>
                            </div>
                            <?php }?>

                            <div class="v-text-1 mb-4 ">
                                <form class="grid grid-cols-8 gap-2 md:gap-6"
                                    action="<?=BASE_URL('public/client/Accounts.php');?>" method="GET">
                                    <input value="<?=check_string($_GET['id']);?>" name="id" type="hidden">
                                    <div class="col-span-8 sm:col-span-2 flex">
                                        <div class="flex -mr-px"><span
                                                class="bg-gray-100 border border-gray-300 w-24 justify-center text-gray-800 font-medium flex items-center leading-normal rounded-none border px-3">Mã
                                                số</span></div>
                                        <div class="flex items-center relative w-full">
                                            <input name="id_acc" placeholder="Ví dụ: 123421"
                                                class="border-2 border-gray-300 rounded-none bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="col-span-8 sm:col-span-2 flex">
                                        <div class="flex -mr-px"><span
                                                class="bg-gray-100 border border-gray-300 w-24 justify-center text-gray-800 font-medium flex items-center leading-normal rounded-none border px-3">Giá
                                                từ</span></div>
                                        <div class="flex items-center relative w-full">
                                            <select name="amount"
                                                class="border-2 border-gray-300 rounded-none bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                                                <option value="">Tìm theo giá</option>
                                                <option value="1">0 - 50.000</option>
                                                <option value="2">50.000 - 100.000</option>
                                                <option value="3">100.000 - 200.000</option>
                                                <option value="4">200.000 - 500.000</option>
                                                <option value="5">> 500.000</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    class="fill-current h-4 w-4">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-8 sm:col-span-2 flex items-center">
                                        <button type="submit"
                                            class="mr-1 bg-red-600 text-white w-full rounded-none font-bold py-2 px-4 rounded focus:outline-none">
                                            Tìm kiếm
                                        </button>
                                        <a href="<?=BASE_URL('public/client/Accounts.php?id='.check_string($_GET['id']));?>"
                                            class="ml-1 bg-gray-700 w-full text-white rounded-none font-bold py-2 px-4 rounded focus:outline-none">
                                            <button type="button"
                                                class="bg-gray-700 w-full text-white rounded-none font-bold rounded focus:outline-none">
                                                Tất cả
                                            </button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                            <div class="my-2"></div>
                            <div class="mb-4 py-4 md:p-4">
                                <div class="grid grid-cols-8 gap-2 md:gap-4 ">
                                    <?php foreach($listAccount as $acc) {?>
                                    <div class="fade-in col-span-8 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 border border-gray-300 relative"
                                        style="padding: 1px;">
                                        <div>
                                            <div class="relative">
                                                <a href="<?=BASE_URL('Orders/'.$acc['id']);?>">
                                                    <div class="relative">
                                                        <img class="h-56 md:h-40 w-full object-fill object-center lazyLoad"
                                                            data-src="<?=$acc['img'];?>" />
                                                        <span
                                                            class="absolute v-text-1 bg-red-700 text-white font-bold text-sm inline-block px-2 rounded-sm"
                                                            style="right: 5px; top: 5px;">#<?=$acc['id'];?></span>
                                                    </div>
                                                </a>
                                                <div class="py-2 bg-gray-200 px-2"></div>
                                                <div class="my-2 py-2 px-2 relative">
                                                    <?php if(!empty($acc['chitiet'])) { ?>
                                                    <div class="grid grid-cols-12 gap-3 text-white font-medium text-sm">
                                                        <?php $a = explode(PHP_EOL, $acc['chitiet']); $i=0;
                                    foreach($a as $b) {  $c = explode(":", $b); $i++; if($i >= 5){break;} ;?>
                                                        <div class="col-span-6 text-center">
                                                            <p>
                                                                <?=$c[0];?>:
                                                                <b class="text-white-800"><?=$c[1];?> </b>
                                                            </p>
                                                        </div>
                                                        <?php }?>
                                                        <div class="col-span-6 text-center">
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </div>
                                                <div class="mt-4 rounded-b-sm grid grid-cols-12 gap-5 p-2">
                                                    <div class="col-span-6">
                                                        <ul class="v-text-1 rounded-sm w-full font-medium"
                                                            style="font-weight: 500;">
                                                            <p
                                                                class="w-full border border-red-600 text-center rounded text-white block px-3 py-1">
                                                                <?=format_cash($acc['money']);?> đ
                                                            </p>
                                                        </ul>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <div class="w-full">
                                                            <a href="<?=BASE_URL('Orders/'.$acc['id']);?>"
                                                                class="cursor-pointer border rounded w-full text-center cursor-pointer border-red-500 hover:border-yellow-500 bg-red-500 transition duration-200 hover:bg-yellow-500 text-white uppercase inline-block font-semibold py-1 px-3">
                                                                Chi tiết
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="mt-3 md:mt-6 w-full flex justify-center items-center">
                                    <?php
            $tong = $NDVMEDIA->num_rows(" SELECT * FROM `accounts` WHERE `groups` = '".$row['id']."' AND `id` LIKE  '%$id_acc%' AND `username` IS NULL $amount ORDER BY id DESC ");
            if ($tong > $sotin1trang)
            {
                echo '<center>' . phantrang2($base_url.'public/client/Accounts.php?id='.check_string($_GET['id']).'&amount='.$type_amount.'&id_acc='.$id_acc.'&', $from, $tong, $sotin1trang) . '</center>';
            }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<?php 
    require_once("../../public/client/Footer.php");
?>