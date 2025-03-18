<?php
    require_once(__DIR__."/display/config.php");
    require_once(__DIR__."/display/function.php");
    require_once(__DIR__."/class/Mobile_Detect.php");
    $title = 'HOME | '.$NDVMEDIA->site('tenweb');
    require_once(__DIR__."/public/client/Header.php");
    require_once(__DIR__."/public/client/Nav.php");
    require_once(__DIR__."/class/Date/HumanDiff.php");
?>
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
 <br><div data-v-ce09c1fd="">
    <div class="ws-home ws-px-2 ws-mx-auto ws-max-w-7xl ws-my-4" data-v-ce09c1fd="">
        <div class="ws-col-span-12 md:ws-col-span-12" data-v-ce09c1fd="">
            <div class="ws-grid ws-grid-cols-12 ws-gap-5" data-v-ce09c1fd="">
                <div class="ws-col-span-12 md:ws-col-span-6" data-v-ce09c1fd="">
                    <!--[-->
                     
                    <div data-v-ce09c1fd="" class="swiper swiper-initialized swiper-horizontal ws-rounded-lg swiper-desktop swiper-backface-hidden">
                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); transition-delay: 0ms;">
                            <div data-v-ce09c1fd="" class="swiper-slide swiper-slide-active" style="width: 622px;"><a data-v-ce09c1fd="" href="" target="_blank">
                                    <div data-v-ce09c1fd="" class="ws-overflow-hidden ws-select-none !ws-h-[11rem] lg:!ws-h-[19.3rem] !ws-rounded-lg ws-bg-zinc-50" style="">
                                        <img src="https://<?=$_SERVER['SERVER_NAME'];?>/" data-src="<?=BASE_URL($NDVMEDIA->site('background'));?>" class="lazy ws-select-none ws-rounded-lg ws-w-full !ws-h-[11rem] lg:!ws-h-[19.3rem] !ws-rounded-lg lazyload isLoaded" loading="lazy" title="<?=$_SERVER['SERVER_NAME'];?>">
                            <!----></div>
                                </a><!----></div>
                        </div><!----><!---->
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span></div>
                    </div>
                                        <!--]-->
                </div>
                <div class="ws-hidden lg:ws-block ws-col-span-12 md:ws-col-span-3" data-v-ce09c1fd="">
                    <div class="ws-grid ws-grid-cols-12 ws-gap-5" data-v-ce09c1fd=""><!--[-->
                         
                        <div class="ws-col-span-12" data-v-ce09c1fd="">
                            <a href="" target="_blank" data-v-ce09c1fd="">
                                <div class="ws-overflow-hidden ws-select-none !ws-h-[8.95rem] ws-w-full ws-rounded-lg ws-bg-zinc-50 ws-h-[8.95rem] ws-w-full ws-rounded-lg" style="aspect-ratio:16 / 9;" data-v-ce09c1fd="">
                                    <img src="https://<?=$_SERVER['SERVER_NAME'];?>/" data-src="<?=BASE_URL($NDVMEDIA->site('anhbia'));?>" class="lazy ws-select-none ws-rounded-lg ws-w-full !ws-h-[8.95rem] ws-w-full ws-rounded-lg lazyload isLoaded" loading="lazy" title="<?=$_SERVER['SERVER_NAME'];?>">
                        <!----></div>
                            </a><!---->
                        </div>
                         
                        <div class="ws-col-span-12" data-v-ce09c1fd="">
                            <a href="" target="_blank" data-v-ce09c1fd="">
                                <div class="ws-overflow-hidden ws-select-none !ws-h-[8.95rem] ws-w-full ws-rounded-lg ws-bg-zinc-50 ws-h-[8.95rem] ws-w-full ws-rounded-lg" style="aspect-ratio:16 / 9;" data-v-ce09c1fd="">
                                    <img src="https://<?=$_SERVER['SERVER_NAME'];?>/" data-src="<?=BASE_URL($NDVMEDIA->site('banner3'));?>" class="lazy ws-select-none ws-rounded-lg ws-w-full !ws-h-[8.95rem] ws-w-full ws-rounded-lg lazyload isLoaded" loading="lazy" title="<?=$_SERVER['SERVER_NAME'];?>">
                        <!----></div>
                            </a><!---->
                        </div>
                                                <!--]-->
                    </div>
                </div>
            <div class="ws-col-span-12 md:ws-col-span-6 swiper-mobile" data-v-ce09c1fd="">
                <div data-v-ce09c1fd="" class="swiper swiper-initialized swiper-horizontal ws-rounded-lg">
                    <div class="swiper-wrapper">
                                                <div data-v-ce09c1fd="" class="swiper-slide swiper-slide-prev" style="width: 396px;">
                            <a data-v-ce09c1fd="" target="_blank">
                                <div data-v-ce09c1fd="" class="ws-overflow-hidden ws-select-none !ws-h-[11rem] lg:!ws-h-[19.3rem] !ws-rounded-lg ws-bg-zinc-50" style="">
                                    <img src="https://<?=$_SERVER['SERVER_NAME'];?>/" data-src="<?=BASE_URL($NDVMEDIA->site('background'));?>" class="lazy ws-select-none ws-rounded-lg ws-w-full !ws-h-[11rem] lg:!ws-h-[19.3rem] !ws-rounded-lg lazyload isLoaded" loading="lazy" title="<?=$_SERVER['SERVER_NAME'];?>">
                                </div>
                            </a>
                        </div>
                                                <div data-v-ce09c1fd="" class="swiper-slide swiper-slide-prev" style="width: 396px;">
                            <a data-v-ce09c1fd="" target="_blank">
                                <div data-v-ce09c1fd="" class="ws-overflow-hidden ws-select-none !ws-h-[11rem] lg:!ws-h-[19.3rem] !ws-rounded-lg ws-bg-zinc-50" style="">
                                    <img src="https://<?=$_SERVER['SERVER_NAME'];?>/" data-src="<?=BASE_URL($NDVMEDIA->site('anhbia'));?>" class="lazy ws-select-none ws-rounded-lg ws-w-full !ws-h-[11rem] lg:!ws-h-[19.3rem] !ws-rounded-lg lazyload isLoaded" loading="lazy" title="<?=$_SERVER['SERVER_NAME'];?>">
                                </div>
                            </a>
                        </div>
                                                <div data-v-ce09c1fd="" class="swiper-slide swiper-slide-prev" style="width: 396px;">
                            <a data-v-ce09c1fd="" target="_blank">
                                <div data-v-ce09c1fd="" class="ws-overflow-hidden ws-select-none !ws-h-[11rem] lg:!ws-h-[19.3rem] !ws-rounded-lg ws-bg-zinc-50" style="">
                                    <img src="https://<?=$_SERVER['SERVER_NAME'];?>/" data-src="<?=BASE_URL($NDVMEDIA->site('banner3'));?>" class="lazy ws-select-none ws-rounded-lg ws-w-full !ws-h-[11rem] lg:!ws-h-[19.3rem] !ws-rounded-lg lazyload isLoaded" loading="lazy" title="<?=$_SERVER['SERVER_NAME'];?>">
                                </div>
                            </a>
                        </div>
                                            </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
                    <div class="ws-col-span-12 md:ws-col-span-3 ws-rounded-lg ws-bg-white">
                        <div class="ws-min-h-[19.3rem]">
                            <div class="ws-rounded-t-lg ws-bg-white">
                                <label class="ws-py-2 ws-flex ws-text-lg ws-items-center ws-px-3 ws-block ws-text-center ws-font-bold">TOP NẠP THÁNG</label></div>
                                <div class="ws-mb-1 ws-px-2">
                        <div class="ws-border ws-rounded-lg ws-border-zinc-200 ws-grid ws-grid-cols-12 ws-gap-0 ws-py-1 ws-px-1 ws-text-zinc-800 ws-text-base md:ws-text-xs ws-font-medium">
                            <div class="ws-col-span-4 ws-text-center"><span class="ws-cursor-pointer ws-inline-block ws-px-0 md:ws-py-2.5 ws-py-2 ws-w-full ws-rounded-lg tablinks ws-bg-red-500 ws-text-white" onclick="Tab('nap')">Nạp thẻ</span></div>
                            <div class="ws-col-span-4 ws-text-center"><span class="ws-cursor-pointer ws-inline-block ws-px-0 md:ws-py-2.5 ws-py-2 ws-w-full ws-rounded-lg tablinks" onclick="Tab('top')">Tháng này</span></div>
                            <div class="ws-col-span-4 ws-text-center"><span class="ws-cursor-pointer ws-inline-block ws-px-0 md:ws-py-2.5 ws-py-2 ws-w-full ws-rounded-lg tablinks" onclick="Tab('gift')">Phần thưởng</span></div>
                        </div>
                    </div>
                            <div class="ws-px-3 ws-py-1 tabcontent" id="nap">
                                <form id="charge" class="tw-max-w-sm form_data" method="POST">
                                <div id="thongbaonapthe" class="tw-mb-4"></div>
                                <div class="el-form-item is-required asterisk-left">
                                    <div class="el-form-item__content">
                                        <div class="el-select el-select--large" style="width: 100%;">
                                            <div class="select-trigger el-tooltip__trigger el-tooltip__trigger">
                                                <div class="el-input el-input--large el-input--suffix">
                                                    <select id="loaithe" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none">
                                                    <option value="0">-- Chọn Nhà Mạng/Loại Thẻ --</option>
                                                    <option value="VIETTEL">Thẻ Viettel</option>
                                                    <option value="VINAPHONE">Thẻ Vinaphone</option>
                                                    <option value="MOBIFONE">Thẻ Mobifone</option>
                                                    <option value="VNMOBILE">Thẻ Vietnamobile</option>
                                                   
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el-form-item is-required asterisk-left">
                                    <div class="el-form-item__content">
                                        <div class="el-select el-select--large" style="width: 100%;">
                                            <div class="select-trigger el-tooltip__trigger el-tooltip__trigger">
                                                <div class="el-input el-input--large el-input--suffix">
                                                    <select id="menhgia" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none">
                                                    <option value="0">-- Chọn Mệnh Giá. Sai Mất Thẻ! --</option>
                                                    <option value="10000">10,000đ</option>
                                                    <option value="20000">20,000đ</option>
                                                    <option value="30000">30,000đ</option>
                                                    <option value="50000">50,000đ </option>  
                                                    <option value="100000">100,000đ</option>
                                                    <option value="200000">200,000đ </option>
                                                    <option value="300000">300,000đ</option>
                                                    <option value="500000">500,000đ </option>
                                                    <option value="1000000">1,000,000đ </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el-form-item is-required asterisk-left">
                                    <div class="el-form-item__content">
                                        <div class="el-input el-input--large">
                                            <input class="el-input__inner" id="pin" type="text" maxlength="16" autocomplete="off" tabindex="0" placeholder="Nhập Mã Số Thẻ (Cào Lớp Tráng Bạc)...">
                                        </div>
                                    </div>
                                </div>
                                <div class="el-form-item is-required asterisk-left">
                                    <div class="el-form-item__content">
                                        <div class="el-input el-input--large">
                                            <input class="el-input__inner" id="seri" type="text" maxlength="16" autocomplete="off" tabindex="0" placeholder="Nhập Số Serial Thẻ (In Trên Thẻ)...">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="NapThe" class="el-button el-button--primary el-button--large ws-w-full ws-font-extrabold"><span>NẠP THẺ NGAY</span></button>
                                                                </form>
                                </div>
                                <div class="ws-px-3 ws-py-1 tabcontent" id="top" style="display: none;">
                                <div class="ws-px-3 ws-py-1">
                                    <?php $i=1; foreach($NDVMEDIA->get_list("SELECT * FROM `users` ORDER BY `total_money` DESC LIMIT 6 ") as $top) { ?>
                                                                <div class="ws-grid ws-grid-cols-12 ws-gap-2 ws-py-3 md:ws-py-2 ws-px-2 ws-rounded ws-bg-zinc-50">
                                <div class="ws-col-span-6 ws-flex ws-items-center">
                                <img src="https://nickroblox.com/assets/images/upload/top/<?= $i ?>.svg" alt="img" class="ws-h-6">
                                <span class="ws-ml-2 ws-text-sm ws-font-semibold"><?=substr($top['username'], 0, -3) . '***';?></span>
                                </div>
                                <div class="ws-col-span-6 ws-flex ws-justify-end"><span class="ws-block ws-flex ws-items-center ws-justify-center ws-w-32 ws-text-sm md:ws-w-full ws-font-semibold ws-text-center ws-bg-red-500 ws-text-white ws-rounded"><?=format_cash($top['total_money']);?> <small class="ws-relative ws-top-[-2px] ws-font-medium ws-ml-1">đ</small></span></div>
                                </div>
                                <?php $i++; if ($i > 5) break; ?>
                                <?php }?>
                                                               
                                                                </div> 
                            </div>
                            <div class="ws-px-3 ws-py-1 ws-text-sm ws-overflow-auto ws-max-h-[12.6rem] tabcontent" id="gift" style="display: none;">
                        <div>
                                                    <?=$NDVMEDIA->site('motatopnap');?>
                        </div><!---->
                    </div>
                        </div>
                    </div>
                </div>
            <div>
        </div>
    <div>
</div>   <br><div class="ws-home tw-mb-4 tw-text-red-500 tw-font-bold tw-px-2 tw-bg-white md:tw-rounded tw-py-2 tw-relative ws-px-2 ws-mx-auto ws-max-w-7xl ws-my-4">
    <span class="tw-absolute tw-flex tw-items-center tw-justify-center tw-text-xl tw-h-10 tw-w-10 tw-bg-white md:tw-rounded" style="top: 0px; left: 0px; z-index: 5; color:#dc2626"><i class="bx bxs-bell-ring"></i></span> 
    <div class="tw-flex tw-w-full tw-items-center tw-notification-home">
        <marquee class="tw-w-full" style="color:#dc2626"><?=$NDVMEDIA->site('text_run');?></marquee>
        </div>
</div><br>
<script type="text/javascript">
$("#NapThe").on("click", function() {
  $('#NapThe').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled', true);
  

  $.ajax({
    url: "<?=BASE_URL("assets/ajaxs/NapThe.php");?>",
    method: "POST",
    data: {
      loaithe: $("#loaithe").val(),
      menhgia: $("#menhgia").val(),
      seri: $("#seri").val(),
      pin: $("#pin").val()
    },
    success: function(response) {
      $("#thongbaonapthe").html(response);
      $('#NapThe').html('Nạp Thẻ').prop('disabled', false);
    }
  });
});

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
function GetCard24() {
    $.ajax({
        url: "<?=BASE_URL('api/loaithe.php');?>",
        method: "GET",
        success: function(response) {
            $("#loaithe").html(response);
        }
    });
    $.ajax({
        url: "<?=BASE_URL('api/menhgia.php');?>",
        method: "GET",
        success: function(response) {
            $("#menhgia").html(response);
        }
    });

}
</script>

                     <?php if($NDVMEDIA->site('vatpham') == 'ON') { ?>  
<div class="ws-home-id1000 ws-my-2 ws-py-4">
    <div class="ws-home-child ws-px-2 ws-mx-auto ws-max-w-7xl">
        <div class="ws-my-4 ws-px-1 md:ws-px-2 lg:ws-px-0">
            <div class="ws-mb-4">
                <div class="ws-flex ws-items-start ws-justify-between">
                    <label class="ws-label-title ws-text-base md:ws-text-lg ws-font-bold">🕵 DỊCH VỤ GAME ROBLOX</label>
                    <a href="#"><button ariadisabled="false" type="button" class="el-button el-button--primary el-button--small"><span>Khám Phá</span></button></a>
                </div>
            </div>
            
            <div class="ws-grid ws-grid-cols-12 md:ws-grid-cols-12 lg:ws-grid-cols-10 ws-gap-3 md:ws-gap-4 lg:ws-gap-3">
                 <?php foreach($NDVMEDIA->get_list("SELECT * FROM `category_bandv` WHERE `display` = 'SHOW' ") as $category) { ?> 
                        <div class="ws-wrap-box ws-col-span-6 md:ws-col-span-4 lg:ws-col-span-2">
                <a href="<?=BASE_URL('vat-pham/'.$category['id']);?>" class="ws-block">
                <div class="ws-relative ws-mb-2">
                    <div class="ws-overflow-hidden ws-select-none ws-bg-zinc-50 ws-rounded-lg ws-w-full md:ws-h-[9.5rem] lg:ws-h-[8.4rem]" style="aspect-ratio:16 / 9;">
                        <img src="<?=$category['img'];?>" class="ws-select-none ws-rounded-lg ws-w-full" title="<?=$category['title'];?>">
                    </div>
                    <span class="ws-absolute ws-font-semibold ws-bottom-[5px] ws-right-[5px] ws-bg-blue-600 ws-rounded ws-px-2 ws-text-xs ws-text-white">
                        <small>
                                                <span class="ws-inline-block">Đã Bán : <?php
                                    $total_orders = $NDVMEDIA->num_rows("SELECT id FROM orders_bandv");
                                    
                                    echo isset($total_orders) ? $total_orders : "0";
                                    ?></span>
                                                
                        
                        </small>
                    </span>
                </div>
                <div class="ws-min-h-[50px]">
                    <label class="ws-wrap-box-title ws-block ws-font-medium ws-text-xs md:ws-text-sm ws-text-zinc-900"> <?=$category['title'];?></label>
                                        <span class="ws-mr-2 ws-font-semibold ws-text-xs md:ws-text-base ws-text-red-600">Đang Giảm 85%</span>
            
                                    </div></a>
                                    
            </div>
            <?php } ?>
             </div>
            </div> 
        </div>    
    </div>
</div>
<?php }?>

<?php if($NDVMEDIA->site('accounts') == 'ON') { ?>
<!-- ACC VÀ RANDOM -->
<div class="ws-home-id1000 ws-my-2 ws-py-4">
    <div class="ws-home-child ws-px-2 ws-mx-auto ws-max-w-7xl">
        <div class="ws-my-4 ws-px-1 md:ws-px-2 lg:ws-px-0">
            <div class="ws-mb-4">
                <div class="ws-flex ws-items-start ws-justify-between">
                    <label class="ws-label-title ws-text-base md:ws-text-lg ws-font-bold">🕵️ DANH MỤC TÀI KHOẢN GAME</label>
                    <a href="#"><button ariadisabled="false" type="button" class="el-button el-button--primary el-button--small"><span>Khám Phá</span></button></a>
                </div>
            </div>
            
            <div class="ws-grid ws-grid-cols-12 md:ws-grid-cols-12 lg:ws-grid-cols-10 ws-gap-3 md:ws-gap-4 lg:ws-gap-3">
                 <?php foreach($NDVMEDIA->get_list("SELECT * FROM `groups` WHERE `display` = 'SHOW' ") as $group) { ?>
                        <div class="ws-wrap-box ws-col-span-6 md:ws-col-span-4 lg:ws-col-span-2">
                <a href="<?=BASE_URL('Accounts/'.$group['id']);?>" class="ws-block">
                <div class="ws-relative ws-mb-2">
                    <div class="ws-overflow-hidden ws-select-none ws-bg-zinc-50 ws-rounded-lg ws-w-full md:ws-h-[9.5rem] lg:ws-h-[8.4rem]" style="aspect-ratio:16 / 9;">
                        <img src="<?=$group['img'];?>" class="ws-select-none ws-rounded-lg ws-w-full" title="<?=$group['title'];?>">
                    </div>
                    <span class="ws-absolute ws-font-semibold ws-bottom-[5px] ws-right-[5px] ws-bg-blue-600 ws-rounded ws-px-2 ws-text-xs ws-text-white">
                        <small>
                                                <span class="ws-inline-block">Số tài khoản hiện có : <?=format_cash($NDVMEDIA->num_rows("SELECT * FROM `accounts` WHERE `groups` = '".$group['id']."' AND `username` IS NULL "));?></span>
                                                
                        
                        </small>
                    </span>
                </div>
                <div class="ws-min-h-[50px]">
                    <label class="ws-wrap-box-title ws-block ws-font-medium ws-text-xs md:ws-text-sm ws-text-zinc-900"> <?=$group['title'];?></label>
                                        <span class="ws-mr-2 ws-font-semibold ws-text-xs md:ws-text-base ws-text-red-600"><?=format_cash($group['gia']);?></span>
            <span class="ws-line-through ws-text-zinc-400 ws-text-xs md:ws-text-sm ws-font-semibold"><?=format_cash($group['gia']*3); ?>đ</span>
                                    </div></a>
                                    
            </div>
            <?php }?>
             </div>
            </div> 
        </div>    
    </div>
</div>
<?php }?>

<?php if($NDVMEDIA->site('minigame') == 'ON') { ?>
<!-- Vòng quay -->
<div class="ws-home-id1000 ws-my-2 ws-py-4">
    <div class="ws-home-child ws-px-2 ws-mx-auto ws-max-w-7xl">
        <div class="ws-my-4 ws-px-1 md:ws-px-2 lg:ws-px-0">
            <div class="ws-mb-4">
                <div class="ws-flex ws-items-start ws-justify-between">
                    <label class="ws-label-title ws-text-base md:ws-text-lg ws-font-bold">🕵️ TRÒ CHƠI ROBLOX TRÚNG LÊN TỚI 19.999 RB</label>
                    <a href="#"><button ariadisabled="false" type="button" class="el-button el-button--primary el-button--small"><span>Khám Phá</span></button></a>
                </div>
            </div>
            
            <div class="ws-grid ws-grid-cols-12 md:ws-grid-cols-12 lg:ws-grid-cols-10 ws-gap-3 md:ws-gap-4 lg:ws-gap-3">
                  <?php foreach ($NDVMEDIA->get_list("SELECT * FROM `mini_game` WHERE `status` = 'true' ") as $minigame) { ?>
                        <div class="ws-wrap-box ws-col-span-6 md:ws-col-span-4 lg:ws-col-span-2">
                <a href="<?=BASE_URL('VongQuay/' . $minigame['id']); ?>" class="ws-block">
                <div class="ws-relative ws-mb-2">
                    <div class="ws-overflow-hidden ws-select-none ws-bg-zinc-50 ws-rounded-lg ws-w-full md:ws-h-[9.5rem] lg:ws-h-[8.4rem]" style="aspect-ratio:16 / 9;">
                        <img src="<?=mini_game($minigame['id'], 'thumb'); ?>" class="ws-select-none ws-rounded-lg ws-w-full" title="<?=$minigame['name']; ?>">
                    </div>
                    <span class="ws-absolute ws-font-semibold ws-bottom-[5px] ws-right-[5px] ws-bg-blue-600 ws-rounded ws-px-2 ws-text-xs ws-text-white">
                        <small>
                                                <span class="ws-inline-block">Đã chơi : <?=$minigame['sudung']; ?></span>
                                                
                        
                        </small>
                    </span>
                </div>
                <div class="ws-min-h-[50px]">
                    <label class="ws-wrap-box-title ws-block ws-font-medium ws-text-xs md:ws-text-sm ws-text-zinc-900"> <?=$minigame['name']; ?></label>
                                        <span class="ws-mr-2 ws-font-semibold ws-text-xs md:ws-text-base ws-text-red-600"><?=$minigame['price']; ?>đ </span>
            <span class="ws-line-through ws-text-zinc-400 ws-text-xs md:ws-text-sm ws-font-semibold"><?=$minigame['price']*3; ?>đ</span>
                                    </div></a>
                                    
            </div>
            <?php }?>
             </div>
            </div> 
        </div>    
    </div>
</div>
<?php }?>

    <?php if($NDVMEDIA->site('robux') == 'ON') { ?>  
<!-- code thuộc quyền thiết kế lại bởi đức việt it -->
<div class="ws-home-id1000 ws-my-2 ws-py-4">
    <div class="ws-home-child ws-px-2 ws-mx-auto ws-max-w-7xl">
        <div class="ws-my-4 ws-px-1 md:ws-px-2 lg:ws-px-0">
            <div class="ws-mb-4">
                <div class="ws-flex ws-items-start ws-justify-between">
                    <label class="ws-label-title ws-text-base md:ws-text-lg ws-font-bold">🕵️ MUA ROBUX 120H CHÍNH HÃNG</label>
                    <a href="#"><button ariadisabled="false" type="button" class="el-button el-button--primary el-button--small"><span>Khám Phá</span></button></a>
                </div>
            </div>
            
            <div class="ws-grid ws-grid-cols-12 md:ws-grid-cols-12 lg:ws-grid-cols-10 ws-gap-3 md:ws-gap-4 lg:ws-gap-3">
                 <?php foreach($NDVMEDIA->get_list("SELECT * FROM `category_robux` WHERE `display` = 'SHOW' ") as $category) { ?> 
                        <div class="ws-wrap-box ws-col-span-6 md:ws-col-span-4 lg:ws-col-span-2">
                <a href="<?=BASE_URL('Robux/'.$category['id']);?>" class="ws-block">
                <div class="ws-relative ws-mb-2">
                    <div class="ws-overflow-hidden ws-select-none ws-bg-zinc-50 ws-rounded-lg ws-w-full md:ws-h-[9.5rem] lg:ws-h-[8.4rem]" style="aspect-ratio:16 / 9;">
                        <img src="<?=$category['img'];?>" class="ws-select-none ws-rounded-lg ws-w-full" title="<?=$category['title'];?>">
                    </div>
                    <span class="ws-absolute ws-font-semibold ws-bottom-[5px] ws-right-[5px] ws-bg-blue-600 ws-rounded ws-px-2 ws-text-xs ws-text-white">
                        <small>
                                                <span class="ws-inline-block">Đã Bán : <?php
                                    $total_orders = $NDVMEDIA->num_rows("SELECT id FROM orders_bandv");
                                    
                                    echo isset($total_orders) ? $total_orders : "0";
                                    ?></span>
                                                
                        
                        </small>
                    </span>
                </div>
                <div class="ws-min-h-[50px]">
                    <label class="ws-wrap-box-title ws-block ws-font-medium ws-text-xs md:ws-text-sm ws-text-zinc-900"> <?=$category['title'];?></label>
                                        <span class="ws-mr-2 ws-font-semibold ws-text-xs md:ws-text-base ws-text-red-600">Đang Giảm 85%</span>
            
                                    </div></a>
                                    
            </div>
            <?php } ?>
             </div>
            </div> 
        </div>    
    </div>
</div>
<?php }?>
<?php if($NDVMEDIA->site('caythue') == 'ON') { ?>  
<!-- code thuộc quyền thiết kế lại bởi đức việt it -->
<div class="ws-home-id1000 ws-my-2 ws-py-4">
    <div class="ws-home-child ws-px-2 ws-mx-auto ws-max-w-7xl">
        <div class="ws-my-4 ws-px-1 md:ws-px-2 lg:ws-px-0">
            <div class="ws-mb-4">
                <div class="ws-flex ws-items-start ws-justify-between">
                    <label class="ws-label-title ws-text-base md:ws-text-lg ws-font-bold">🕵️ CÀY THUÊ ROBLOX GIÁ RẺ</label>
                    <a href="#"><button ariadisabled="false" type="button" class="el-button el-button--primary el-button--small"><span>Khám Phá</span></button></a>
                </div>
            </div>
            
            <div class="ws-grid ws-grid-cols-12 md:ws-grid-cols-12 lg:ws-grid-cols-10 ws-gap-3 md:ws-gap-4 lg:ws-gap-3">
                 <?php foreach($NDVMEDIA->get_list("SELECT * FROM `category_caythue` WHERE `display` = 'SHOW' ") as $category) { ?> 
                        <div class="ws-wrap-box ws-col-span-6 md:ws-col-span-4 lg:ws-col-span-2">
                <a href="<?=BASE_URL('dich-vu/'.$category['id']);?>" class="ws-block">
                <div class="ws-relative ws-mb-2">
                    <div class="ws-overflow-hidden ws-select-none ws-bg-zinc-50 ws-rounded-lg ws-w-full md:ws-h-[9.5rem] lg:ws-h-[8.4rem]" style="aspect-ratio:16 / 9;">
                        <img src="<?=$category['img'];?>" class="ws-select-none ws-rounded-lg ws-w-full" title="<?=$category['title'];?>">
                    </div>
                    <span class="ws-absolute ws-font-semibold ws-bottom-[5px] ws-right-[5px] ws-bg-blue-600 ws-rounded ws-px-2 ws-text-xs ws-text-white">
                        <small>
                                                <span class="ws-inline-block">Đã Bán : <?php
                                    $total_orders = $NDVMEDIA->num_rows("SELECT id FROM orders_bandv");
                                    
                                    echo isset($total_orders) ? $total_orders : "0";
                                    ?></span>
                                                
                        
                        </small>
                    </span>
                </div>
                <div class="ws-min-h-[50px]">
                    <label class="ws-wrap-box-title ws-block ws-font-medium ws-text-xs md:ws-text-sm ws-text-zinc-900"> <?=$category['title'];?></label>
                                        <span class="ws-mr-2 ws-font-semibold ws-text-xs md:ws-text-base ws-text-red-600">Đang Giảm 85%</span>
            
                                    </div></a>
                                    
            </div>
            <?php } ?>
             </div>
            </div> 
        </div>    
    </div>
</div>
<?php }?>
<?php if($NDVMEDIA->site('gamepass') == 'ON') { ?>  
<!-- code thuộc quyền thiết kế lại bởi đức việt it -->
<div class="ws-home-id1000 ws-my-2 ws-py-4">
    <div class="ws-home-child ws-px-2 ws-mx-auto ws-max-w-7xl">
        <div class="ws-my-4 ws-px-1 md:ws-px-2 lg:ws-px-0">
            <div class="ws-mb-4">
                <div class="ws-flex ws-items-start ws-justify-between">
                    <label class="ws-label-title ws-text-base md:ws-text-lg ws-font-bold">🕵️ MUA GAMEPASS VĨNH VIỄN</label>
                    <a href="#"><button ariadisabled="false" type="button" class="el-button el-button--primary el-button--small"><span>Khám Phá</span></button></a>
                </div>
            </div>
            
            <div class="ws-grid ws-grid-cols-12 md:ws-grid-cols-12 lg:ws-grid-cols-10 ws-gap-3 md:ws-gap-4 lg:ws-gap-3">
                 <?php foreach($NDVMEDIA->get_list("SELECT * FROM `category_gamepass` WHERE `display` = 'SHOW' ") as $category) { ?> 
                        <div class="ws-wrap-box ws-col-span-6 md:ws-col-span-4 lg:ws-col-span-2">
                <a href="<?=BASE_URL('gpasssv/'.$category['id']);?>" class="ws-block">
                <div class="ws-relative ws-mb-2">
                    <div class="ws-overflow-hidden ws-select-none ws-bg-zinc-50 ws-rounded-lg ws-w-full md:ws-h-[9.5rem] lg:ws-h-[8.4rem]" style="aspect-ratio:16 / 9;">
                        <img src="<?=$category['img'];?>" class="ws-select-none ws-rounded-lg ws-w-full" title="<?=$category['title'];?>">
                    </div>
                    <span class="ws-absolute ws-font-semibold ws-bottom-[5px] ws-right-[5px] ws-bg-blue-600 ws-rounded ws-px-2 ws-text-xs ws-text-white">
                        <small>
                                                <span class="ws-inline-block">Đã Bán : <?php
                                    $total_orders = $NDVMEDIA->num_rows("SELECT id FROM orders_bandv");
                                    
                                    echo isset($total_orders) ? $total_orders : "0";
                                    ?></span>
                                                
                        
                        </small>
                    </span>
                </div>
                <div class="ws-min-h-[50px]">
                    <label class="ws-wrap-box-title ws-block ws-font-medium ws-text-xs md:ws-text-sm ws-text-zinc-900"> <?=$category['title'];?></label>
                                        <span class="ws-mr-2 ws-font-semibold ws-text-xs md:ws-text-base ws-text-red-600">Đang Giảm 85%</span>
            
                                    </div></a>
                                    
            </div>
            <?php } ?>
             </div>
            </div> 
        </div>    
    </div>
</div>
<?php }?>

            
            
   
        
<div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="noticeModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
    <div class="modal-dialog tw-max-w-md tw-w-full tw-rounded tw-shadow tw-bg-white tw-relative tw-max-w-lg tw-w-full tw-mx-auto tw-bg-white tw-rounded tw-rounded el-dialog">
        <header class="el-dialog__header">
        <div class="ws-text-red-500 ws-font-bold"><i class="ws-relative bx bxs-bell-ring ws-text-xl" style="top: 3px;"></i> THÔNG BÁO</div>
        <button data-dismiss="modal" aria-label="Close" class="el-dialog__headerbtn" type="button"><i class="el-icon el-dialog__close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path fill="currentColor" d="M764.288 214.592 512 466.88 259.712 214.592a31.936 31.936 0 0 0-45.12 45.12L466.752 512 214.528 764.224a31.936 31.936 0 1 0 45.12 45.184L512 557.184l252.288 252.288a31.936 31.936 0 0 0 45.12-45.12L557.12 512.064l252.288-252.352a31.936 31.936 0 1 0-45.12-45.184z"></path></svg></i></button>
        </header>
        <div id="el-id-1024-7" class="el-dialog__body"><center><strong><?=$NDVMEDIA->site('thongbao');?></center></div>
        <footer class="el-dialog__footer">
        <span class="dialog-footer"><button aria-disabled="false" type="submit" class="btn-turnoff-noti el-button" data-dismiss="modal" aria-label="Close"><span>Đóng Trong 1 Tiếng</span></button></span>
        <span class="dialog-footer"><button aria-disabled="false" type="submit" class="el-button" data-dismiss="modal" aria-label="Close"><span>Tắt Thông Báo</span></button></span>
        </footer>
        </div>                    
    </div>
</div>
<script>
$(document).ready(function() {
if ($.cookie('noticeModal') != '1') {
$('#noticeModal').modal('show')
}
$('.btn-turnoff-noti').click(function(e) {
var date = new Date();
var minutes = 60;
    date.setTime(date.getTime() + (minutes * 60 * 1000));
$.cookie('noticeModal', '1', {
expires: date
});
});
});
</script>
    
<?php 
    require_once(__DIR__."/public/client/Footer.php");
?>