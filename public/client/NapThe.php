<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
    $title = 'NẠP THẺ CÀO | '.$NDVMEDIA->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
    CheckLogin();
?>


<?php if($NDVMEDIA->site('theme_web') == 'theme1') { ?>
            <script>
                function Tab(id){
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" vactive", "");
                    }
                    document.getElementById(id).style.display = "block";
                    event.currentTarget.className += " vactive";
                }
            </script>
            <style>
                .vactive{
                    --tw-border-opacity: 1;
                    border-color: rgba(239,68,68,var(--tw-border-opacity));
                    --tw-bg-opacity: 1;
                    background-color: rgba(239,68,68,var(--tw-bg-opacity));
                    font-weight: 800 !important;
                    --tw-text-opacity: 1;
                    color: rgba(255,255,255,var(--tw-text-opacity));
                }
            </style>
            <?php require_once('Sidebar.php');?>
             <div class="ws-col-span-12 md:ws-col-span-9 ws-min-h-[70vh]">
        <h3 class="ws-text-xl ws-text-zinc-900 ws-mb-4">Nạp Thẻ Cào (Tự Động)</h3>
        <div class="ws-relative">
            <div class="ws-bg-white ws-relative ws-my-1 ws-py-3 md:ws-py-4 ws-px-4 ws-grid ws-grid-cols-12 ws-gap-x-4 ws-gap-y-2 ws-rounded-none md:ws-rounded">
                <div class="ws-absolute ws-border-skz"></div>
                <div class="ws-col-span-12 md:ws-col-span-6">
                    <div class="ws-update_3 ws-mb-2">
                        <label class="ws-block ws-mb-2 ws-text-zinc-700">Chọn Đúng Mệnh Giá Thẻ. Sai Mất Thẻ!</label>
                        <div class="ws-max-w-sm">
                            <form id="charge" class="tw-max-w-sm form_data" method="POST">
                            <div id="thongbaonapthe" style="padding-bottom: 13px;"></div>
                            <div class="el-form-item is-required asterisk-left">
                                <div class="el-form-item__content">
                                    <label for="old_password">Chọn Loại Thẻ/Nhà Mạng (Ưu Tiên <b>Viettel, Vinaphone</b>)</label>
                                    <div class="el-input el-input--large el-input--suffix">
                                        <select class="el-input__inner" id="loaithe" style="height: 38px;" placeholder="Chọn Nhà Mạng/Loại Thẻ">
                                        <option value="0">-- Chọn Nhà Mạng/Loại Thẻ --</option>
                                        <option value="VIETTEL">Thẻ Viettel</option>
                                        <option value="VINAPHONE">Thẻ Vinaphone</option>
                                        <option value="MOBIFONE">Thẻ Mobifone</option>
                                        <option value="VNMOBILE">Thẻ Vietnamobile</option>
                                        <option value="ZING">Thẻ Zing</option>
                                        <option value="GATE">Thẻ Gate</option>
                                        <option value="GARENA">Thẻ Garena</option>
                                        <option value="VCOIN">Thẻ VCoin</option>
                                        <option value="WINTEL">Thẻ Wintel</option>
                                        <option value="FUNCARD">Thẻ Funcard</option>
                                        <option value="GOSU">Thẻ Gosu</option>
                                        <option value="APPOTA">Thẻ Appota</option>
                                        <option value="KUL">Thẻ Kul</option>
                                        <option value="SOHACOIN">Thẻ Sohacoin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="el-form-item is-required asterisk-left">
                                <div class="el-form-item__content">
                                    <label for="old_password">Chọn Mệnh Giá Thẻ</label>
                                    <div class="el-input el-input--large el-input--suffix">
                                        <select class="el-input__inner" style="height: 38px;" placeholder="Chọn Mệnh Giá Thẻ" id="menhgia">
                                        <option value="0">-- Chọn Mệnh Giá. Sai Mất Thẻ! --</option>
                                        <option value="10000">10,000đ</option>
                                        <option value="20000">20,000đ</option>
                                        <option value="30000">30,000đ</option>
                                        <option value="50000">50,000đ </option>  
                                        <option value="100000">100,000đ (Có Cơ Hội Nhận 950 Robux)</option>
                                        <option value="200000">200,000đ (Có Cơ Hội Nhận 1.900 Robux)</option>
                                        <option value="300000">300,000đ (Có Cơ Hội Nhận 2.800 Robux)</option>
                                        <option value="500000">500,000đ (Có Cơ Hội Nhận 3.700 Robux)</option>
                                        <option value="1000000">1,000,000đ (Có Cơ Hội Nhận 5.000 Robux)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="el-form-item is-required asterisk-left">
                                <div class="el-form-item__content">
                                    <label for="old_password">Mã Số Thẻ</label>
                                    <div class="el-input el-input--large el-input--suffix">
                                        <input class="el-input__inner" type="text" autocomplete="off" tabindex="0" maxlength="16" id="pin" placeholder="Nhập Mã Số Thẻ (Cào Lớp Tráng Bạc)...">
                                    </div>
                                </div>
                            </div>
                            <div class="el-form-item is-required asterisk-left">
                                <div class="el-form-item__content">
                                    <label for="old_password">Số Serial Thẻ</label>
                                    <div class="el-input el-input--large el-input--suffix">
                                        <input class="el-input__inner" type="text" autocomplete="off" tabindex="0" maxlength="16" id="seri" placeholder="Nhập Số Serial Thẻ (In Trên Thẻ)...">
                                    </div>
                                </div>
                            </div><br>
                            <button type="button" id="NapThe" class="el-button el-button--primary el-button--large ws-w-full ws-font-bold"><span>NẠP THẺ</span></button>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="ws-col-span-12 md:ws-col-span-6 md:ws-border-l md:ws-pl-6">
                    <div class="tw-border-2 tw-border-amber-300 tw-bg-white tw-rounded tw-text-sm tw-leading-7 tw-px-3 tw-py-1 tw-my-2">
                        <div class="relative">
                        <!--
                        <style>
                        .embed-container { position: relative; padding-bottom: 45.25%; height: 0; overflow: hidden; max-width: 100%; } 
                        .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
                        </style>
                        <div class="embed-container"><iframe src="https://youtube.com/embed/4MqQj_eF85U" frameborder="0" allowfullscreen=""></iframe></div>
                        -->
                        <p><span style="color: rgb(220, 38, 38);"><strong>Lưu Ý: </strong></span></p>
                        <p><span style="color: rgb(220, 38, 38);"><strong>- Ưu Tiên Thẻ Viettel, Vinaphone Với Nhiều Ưu Đãi Hấp Dẫn.</strong></span></p>
                        <p><span style="color: rgb(220, 38, 38);"><strong>- Vui Lòng Kiểm Tra Kỹ Mệnh Giá Thẻ Trước Khi Nạp. Sai Mệnh Giá Được Tính Là "Thẻ Sai" Không Được Cộng Tiền Vào Tài Khoản.</strong></span></p>
                        <p><span style="color: rgb(220, 38, 38);"><strong>- Nhập Đúng Số Serial Thẻ Để Được Xử Lý Thẻ Nhanh Nhất. Trường Hợp Nhập Sai Số Serial Liên Hệ Với CSKH Để Được Hỗ Trợ Duyệt Thẻ.</strong></span></p>
                        <p><span style="color: rgb(220, 38, 38);"><strong>- Thẻ Cào Bị Lỗi "Đợt Duyệt..." Quá 15 Phút Kể Từ Lúc Nạp Thẻ Liên Hệ Với CSKH Ở Góc Phải Màn Hình Để Được Hỗ Trợ!</strong></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
            <div class="tw-bg-white tw-rounded tw-p-2 md:tw-py-4 md:tw-px-5 tw-w-full" bis_skin_checked="1">
            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-2 tw-flex tw-items-center tw-justify-between md:tw-mb-4 tw-text-gray-800" bis_skin_checked="1">
                <div class="tw-inline-block" bis_skin_checked="1">
                    <h2 class="tw-text-lg tw-font-semibold">Lịch Sử Nạp Thẻ Gần Đây</h2>
                    <p class="tw-text-sm">Cập Nhật Lịch Sử Nạp Thẻ 6 Tháng Gần Đây Của Bạn.</p>
                </div>
                <a href="?reload=true"><button type="button" class="tw-relative tw-ml-2 block tw-px-1 py-1 tw-text-white ws-bg-red-500 text-sm tw-font-semibold tw-rounded focus:tw-outline-none" style="top: -1px;"><i class="relative bx bx-revision mr-1" style="top: 1px;"></i>Làm Mới</button></a>
            </div>
            <table id="list" class="tw-w-full">
                <thead>
                <tr class="tw-text-md tw-font-semibold tw-tracking-wide tw-text-left tw-text-gray-900 tw-border tw-border-b-0 tw-bg-gray-200">
                <th class="tw-px-2 tw-py-2">Thẻ Nạp</th>
                <th class="tw-px-2 tw-py-2">
                <span class="tw-hidden md:tw-block">Mã Thẻ/Serial Thẻ</span>
                <span class="tw-block md:tw-hidden">Chi Tiết</span></th>
                <th class="tw-px-2 tw-py-2 tw-hidden md:tw-block">Mệnh Giá - Thực Nhận</th>
                </tr>
                </thead>
                <tbody class="bg-white tw-border tw-border-t-0 tw-rounded">
                    <?php $i = 0; foreach($NDVMEDIA->get_list("SELECT * FROM `cards` WHERE `username` = '".$getUser['username']."' ") as $cards) { ?>
                                <tr class="tw-text-gray-700 tw-border-b">
                <td class="tw-px-2 tw-py-1 md:tw-py-2 tw-text-xs"><div bis_skin_checked="1">
                <p class="tw-font-bold text-black"><?=$cards['loaithe'];?></p>
                <p class="text-xs text-gray-600 tw-font-semibold"><?=$cards['createdate'];?></p>
                <p class="tw-mt-1 text-xs text-gray-600 tw-font-semibold"><span class="tw-text-red-600"><?=status($cards['status']);?></span></p>
                </div>
                </td>
                <td class="tw-px-2 tw-py-2 tw-text-xs">
                <div class="tw-text-xs md:tw-text-sm" bis_skin_checked="1">
                <p class="tw-font-bold text-black">Mã Số Thẻ: <?=$cards['pin'];?></p>
                <p class="tw-font-semibold text-xs">Số Serial Thẻ: <?=$cards['seri'];?></p>
                </div>
                <div class="tw-block md:tw-hidden tw-border-t tw-mt-2 tw-pt-2 tw-font-semibold tw-leading-5" bis_skin_checked="1">
                <p class="tw-text-gray-800"><i class="bx bxs-upvote tw-relative" style="top: 1px;"></i>Gửi Thẻ: <?=format_cash($cards['menhgia']);?>đ</p>
                <p class="tw-text-sm tw-text-red-600"><i class="bx bxs-downvote tw-relative" style="top: 1px;"></i>Nhận: <b><?=$cards['thucnhan'];?>đ</b></p>
                </div>
                </td>
                <td class="tw-px-2 tw-py-1 tw-text-xs tw-hidden md:tw-block">
                <div class="tw-block md:tw-block tw-hidden tw-pt-2 tw-font-semibold tw-leading-5" bis_skin_checked="1">
                <p class="tw-text-gray-800"><i class="bx bxs-upvote tw-relative" style="top: 1px;"></i>Gửi Thẻ: <?=format_cash($cards['menhgia']);?>đ</p>
                <p class="tw-text-sm tw-text-red-600"><i class="bx bxs-downvote tw-relative" style="top: 1px;"></i>Nhận:<b><?=$cards['thucnhan'];?>đ</b></p>
                </div>
                </td>
                </tr>
                <?php }?>
                                </tbody>
            </table>
                        <div class="tw-pb-8" bis_skin_checked="1">
                <div class="tw-min-w-max" bis_skin_checked="1">
                    <section class="tw-flex tw-justify-between tw-py-1 tw-text-gray-700 tw-font-montserrat tw-select-none">
                    <ul class="tw-flex tw-items-center">
                                                            <li href="" class="tw-pr-2">
                    <a class="tw-cursor-pointer"><div class="tw-flex hover:tw-bg-red-600 hover:tw-text-white tw-transition tw-duration-200 tw-rounded-md tw-transform tw-h-6 tw-px-2 tw-text-sm tw-items-center tw-justify-center tw-bg-red-500 tw-text-white" bis_skin_checked="1"><span class="transform">1</span></div></a>
                    </li>
                                                            <li href="#" class="tw-pr-2">
                    <a class="tw-cursor-pointer">
                    <div class="tw-flex tw-items-center tw-justify-center hover:tw-bg-gray-200 tw-rounded-md tw-transform tw-text-sm tw-h-6 tw-px-2" bis_skin_checked="1">
                    <div class="tw-transform" bis_skin_checked="1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="tw-h-4 tw-w-4"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    </div>
                    </a>
                    </li>
                    </ul>
                    </section>
                </div>
            </div>
                        </div>
			<!-- begin lich su -->
			
            <!--- here -->
        </div>
    </div>
</div>
<?php }?>


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

<?php 
    require_once("../../public/client/Footer.php");
?>