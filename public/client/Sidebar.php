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
</script><div class="ws-px-2 ws-py-4 md:ws-py-12 ws-grid ws-grid-cols-12 ws-gap-2 md:ws-max-w-6xl md:ws-mx-auto">
    <div class="md:ws-block ws-col-span-12 md:ws-col-span-3">
        <div class="ws-my-1 md:ws-px-3 md:ws-bg-transparent ws-rounded-none md:ws-rounded">
            <div class="ws-bg-white md:ws-bg-transparent ws-px-3 md:ws-px-0 ws-py-2 md:ws-py-0 ws-flex ws-mb-4">
                <img src="https://shopgameroblox.vn/assets/images/unknown-avatar.jpg" class="ws-h-12 ws-rounded-full">
                <div class="ws-ml-2">
                    <p><?=$getUser['username'];?></p>
                    <p class="ws-text-sm"><b>ID: <?=$getUser['id'];?> </b></p>
                </div>
            </div>
            <div class="sidebar ws-text-sm ws-text-zinc-700">
                <div class="ws-bg-white ws-mb-4 md:ws-rounded">
                    <a href="/Auth/profile" class="router-link-active router-link-exact-active ws-bg-red-600 ws-text-white ws-border-b ws-block ws-relative ws-px-3 ws-py-3.5 md:ws-py-3 ws-rounded-t ws-transition ws-duration-200" aria-current="page">
                    <i class="ws-absolute ws-left-[12px] ws-top-[12px] md:ws-top-[10px] ws-text-2xl bx bxs-user ws-text-white ws-border-red-600"></i><span class="ws-ml-10 ws-inline-block">Thông Tin Tài Khoản</span>
                    </a>
                    <a href="/user/recharge" class="ws-text-zinc-800 ws-border-b ws-block ws-cursor-pointer ws-relative ws-px-3 ws-py-3.5 md:ws-py-3 ws-rounded-b ws-transition ws-duration-200">
                    <i class="ws-absolute ws-left-[12px] ws-top-[12px] md:ws-top-[10px] ws-text-2xl bx bxs-dollar-circle ws-bg-gradient-to-r ws-from-pink-500 ws-to-red-600 ws-bg-clip-text ws-text-transparent"></i><span class="ws-ml-10 ws-inline-block">Nạp Thẻ (Tự Động)</span>
                    </a>
                                        <a href="/user/robux" class="ws-border-b ws-block ws-relative ws-px-3 ws-py-3.5 md:ws-py-3 ws-transition ws-duration-200">
                    <i class="ws-absolute ws-left-[12px] ws-top-[12px] md:ws-top-[10px] ws-text-2xl bx bxs-navigation ws-text-zinc-500"></i><span class="ws-ml-10 ws-inline-block">Rút Robux (Tự Động)</span>
                    </a>
                    </div>
                    <div class="ws-bg-white ws-mb-4 md:ws-rounded">
                                        <a href="/user/history/vatpham" class="ws-border-b ws-block ws-relative ws-px-3 ws-py-3.5 md:ws-py-3 ws-transition ws-duration-200">
                    <i class="ws-absolute ws-left-[12px] ws-top-[12px] md:ws-top-[10px] ws-text-2xl bx bxs-joystick ws-text-zinc-500"></i><span class="ws-ml-10 ws-inline-block">Lịch sử mua vật phẩm</span>
                    </a>
                    <a href="/user/history/acc" class="ws-border-b ws-block ws-relative ws-px-3 ws-py-3.5 md:ws-py-3 ws-transition ws-duration-200">
                    <i class="ws-absolute ws-left-[12px] ws-top-[12px] md:ws-top-[10px] ws-text-2xl bx bxs-basket ws-bg-gradient-to-r ws-from-pink-500 ws-to-red-600 ws-bg-clip-text ws-text-transparent"></i><span class="ws-ml-10 ws-inline-block">Tài Khoản Đã Mua</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php }?>

