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
    $row = $NDVMEDIA->get_row(" SELECT * FROM `category_caythue` WHERE `id` = '".check_string($_GET['id'])."'  ");
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
<?php require_once('Sidebar.php');?>
<div class="tw-col-span-12 md:tw-col-span-8">
                        <div class="tw-bg-white tw-rounded tw-p-4 md:tw-py-4 md:tw-px-5 tw-w-full tw-mb-4">
                            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-4 tw-text-gray-800">
                                <h2 class="tw-text-lg tw-font-semibold"></h2>
                                <p class="tw-text-xs">
                                                                    </p>
<div class="ws-grid ws-grid-cols-12 ws-gap-2">
            <div class="ws-col-span-12 sm:ws-col-span-12 md:ws-col-span-6">
                <div class="el-form el-form--default el-form--label-right">
                    <div class="ws-mb-8 ws-grid ws-grid-cols-12 ws-gap-4">
                        <div class="ws-col-span-12">
                            <div class="ws-bg-white ws-p-3 ws-rounded">
                                <form id="formSubmit" class="tw-px-2 md:tw-px-0">
                                    <div id="thongbao" style="padding-bottom: 13px;"></div>
                                <label class="ws-inline-block ws-font-semibold ws-text-base ws-mb-2">Tùy Chọn Gói Mua</label>
                                <div class="el-form-item is-required asterisk-left">
                                    <div class="el-form-item__content" style="margin-left:;">
                                        <select class="el-input__inner" role="combobox" aria-controls="el-id-1024-14" aria-expanded="false" aria-autocomplete="none" aria-haspopup="listbox" type="text" autocomplete="off" tabindex="0" style="height: 38px;" placeholder="Gói Mua" name="type" id="dichvu">
                                        <option data-amount="0" value="">Chọn gói</option>
                                        <?php foreach($NDVMEDIA->get_list("SELECT * FROM `groups_caythue` WHERE `category` = '".$row['id']."' ") as $group) {?>
                                            <option data-amount="<?=$group['money'];?>" value="<?=$group['id'];?>" class="tw-front-medium tw-text-red-600"><?=$group['title'];?></option>
                                        <?php }?>
                                    </select>   
                                    </div>
                                </div>
                                <div class="ws-w-28 ws-my-4 ws-border-b ws-border-dashed"></div>
                                <div class="ws-mt-4">
                                    <label class="ws-font-medium ws-block ws-text-zinc-800 ws-text-xs ws-mb-1">CẦN THANH TOÁN:</label>
                                    <input class="el-input__inner2" type="text" autocomplete="off" tabindex="0" name="totalAmount" id="totalAmount" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="ws-col-span-12">
                            <div class="ws-bg-white ws-p-3 ws-rounded"><label class="ws-inline-block ws-font-semibold ws-text-base ws-mb-2">Điền Thông Tin Mua</label><div> 
                                <div class="el-form-item is-required asterisk-left" id="linkContainer" style="display: block;">
                                    <div class="el-form-item__content">
                                        <label class="ws-font-medium ws-block ws-text-zinc-800 ws-text-sm ws-mb-1">Tên Đăng Nhập Nick Roblox:</label>
                                        <div class="el-input el-input--large">
                                            <div class="el-input__wrapper" tabindex="-1">
                                                <input class="el-input__inner2" type="text" autocomplete="off" tabindex="0" placeholder="Nhập Tên Đăng Nhập Nick Roblox..." id="tk">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el-form-item is-required asterisk-left" id="linkContainer" style="display: block;">
                                    <div class="el-form-item__content">
                                        <label class="ws-font-medium ws-block ws-text-zinc-800 ws-text-sm ws-mb-1">Mật Khẩu Đăng Nhập Nick Roblox:</label>
                                        <div class="el-input el-input--large">
                                            <div class="el-input__wrapper" tabindex="-1">
                                                <input class="el-input__inner2" type="text" autocomplete="off" tabindex="0" placeholder="Nhập Mật Khẩu Đăng Nhập Nick Roblox..." id="mk">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el-form-item is-required asterisk-left" id="ghichuContainer" style="display: block;">
                                    <div class="el-form-item__content">
                                        <label class="ws-font-medium ws-block ws-text-zinc-800 ws-text-sm ws-mb-1">Ghi Chú (Không Bắt Buộc):</label>
                                        <div class="el-input el-input--large">
                                            <div class="el-textarea el-input--large" tabindex="-1">
                                                <textarea class="el-textarea__inner" tabindex="0" autocomplete="off" style="min-height: 31px;" placeholder="Nhập Ghi Chú (Không Bắt Buộc)..." id="ghichu"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el-form-item is-required asterisk-left" id="magiamgiaContainer" style="display: block;">
                                    <div class="el-form-item__content">
                                        <label class="ws-font-medium ws-block ws-text-zinc-800 ws-text-sm ws-mb-1">Mã Giảm Giá (Nếu Có):</label>
                                        <div class="el-input el-input--large">
                                            <div class="el-input__wrapper" tabindex="-1">
                                                <input class="el-input__inner2" type="text" autocomplete="off" tabindex="0" id="magiamgia" placeholder="Nhập Mã Giảm Giá (Nếu Có)...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button ariadisabled="false" type="button"  id="Submit" onclick="CayThue()" class="el-button el-button--primary el-button--large" style="display: block;"><span>MUA NGAY</span></button>
                                </div><br>
                                <div id="msgCayThue"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="ws-col-span-12 md:ws-col-span-6">
                <div class="ws-bg-white">
                    <div class="ws-more-show ws-more ws-leading-7 ws-mb-4 ws-bg-white ws-rounded ws-py-2 ws-px-3 ws-transition-all ws-duration-200">
                        <h2><b style="color:red">CỐ TÌNH ĐIỀN SAI THÔNG TIN NHIỀU LẦN HOẶC CHƯA TẮT XÁC MINH 2 BƯỚC CÓ THỂ SẼ DẪN ĐẾN MẤT TIỀN.</b></h2>
                        <span>Kiểm Tra Kỹ Thông Tin,<b> Tắt Xác Minh 2 Bước (2Step)</b> Trước Khi Đặt Đơn Hàng</span><br><img src="https://i.imgur.com/2a4rC40.png"><br>
                        <style>
                        .embed-container { position: relative; padding-bottom: 45.25%; height: 0; overflow: hidden; max-width: 100%; } 
                        .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
                        </style>
                        <div class="embed-container"><iframe src="https://youtube.com/embed/5neCn4WisTw" frameborder="0" allowfullscreen=""></iframe></div>
                    </div>
                </div>
            </div>
        </div></div>
                                    </div>
                <div class="tw-bg-white tw-rounded tw-p-2 md:tw-py-4 md:tw-px-5 tw-w-full">
            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-2 tw-flex tw-items-center tw-justify-between md:tw-mb-4 tw-text-gray-800">
                <div class="tw-inline-block">
                <h2 class="tw-text-lg tw-font-semibold">Lịch Sử Đơn Cày Thuê Gần Đây</h2>
                <p class="tw-text-sm">Cập Nhật Lịch Sử Đơn Cày Thuê 6 Tháng Gần Đây Của Bạn.</p>
                </div>
            </div>
            <table id="list" class="tw-w-full">
                <thead>
                <tr class="tw-text-md tw-font-semibold tw-tracking-wide tw-text-left tw-text-gray-900 tw-border tw-border-b-0 tw-bg-gray-200">
               
                
               <td class="tw-px-2 tw-py-2 tw-w-28 md:tw-w-40">STT</td>
							<td class="tw-px-2 tw-py-2">Gói</td>
							<td class="tw-px-2 tw-py-2">Giá</td>
							<td class="tw-px-2 tw-py-2">Trạng thái</td>
							<td class="tw-px-2 tw-py-2">Username|Password</td>
							<td class="tw-px-2 tw-py-2">Note</td>
							<td class="tw-px-2 tw-py-2">Note Admin</td>
							<td class="tw-px-2 tw-py-2">Thời gian</td>
						</tr>
					 </thead>
					 <tbody class="bg-white tw-border tw-border-t-0 tw-rounded">
							<?php $i = 0; foreach($NDVMEDIA->get_list(" SELECT * FROM `orders_caythue` WHERE `username` = '".$getUser['username']."' ORDER BY id DESC ") as $row){ ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['dichvu'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['money'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=status($row['status']);?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['tk'];?>/<?=$row['mk'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['ghichu'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['reason'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><spanclass="badge badge-danger"><?=$row['createdate'];?></span></td>
                                </tr>
                                <?php }?>
                                </tbody>
                </table>
                                    </div>
                </div>
            </div>
        </div>
            </div>
</div>


<script>
function openModal(e){
    var username = $(e).data('username');
    var password = $(e).data('password');
    var note = $(e).data('note');
    $("#dataItems").modal('show');
    $("#taikhoan").val(username);
    $("#matkhau").val(password);
    $("#ghichu").val(note);
}
$("#dichvu").on('change', function(e){
    var amount = e.target.options[e.target.selectedIndex].dataset.amount;
    $("#anh").show();
    $("#totalAmount").val(formatNumber(amount));
})
function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')+' đ';
}
function SubmitPay(){
   var data = $("#formSubmit").serialize();
   $.ajax({
   url: '/Model/BuyItems',
   data: data,
   dataType: "json",
   type: "POST",
   success: function(data) {
       if (data.status == 'success') {
            $('#msgCard').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded tw-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 tw-text-green-500"><div class="relative">'+data.msg+'</div>');
            setTimeout(function(){window.location.reload();}, 2000);
        } else {
            $('#msgCard').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded tw-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 tw-text-red-500"><div class="relative">'+data.msg+'</div>');
        }
   }
});
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
});
</script>


<script type="text/javascript">
function showPrice() {
    var ketqua = $('#dichvu').children('option:selected').attr('data-money').replace(/(.)(?=(\d{3})+$)/g, '$1.');
    $("#anh").show();
    $("#thanhtoan").html(ketqua);
}
$("#Submit").on("click", function() {

    $('#Submit').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/OdersGame.php");?>",
        method: "POST",
        data: {
            type: 'OrderCayThue',
            tk: $("#tk").val(),
            mk: $("#mk").val(),
            magiamgia: $("#magiamgia").val(),
            ghichu: $("#ghichu").val(),
            dichvu: $("#dichvu").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#Submit').html(
                    'Đặt ngay')
                .prop('disabled', false);
        }
    });
});
</script>
<?php }?>

<!--THEME 2-->

<?php if($NDVMEDIA->site('theme_web') == 'theme2') { ?>
<div class="mt-12 relative w-full max-w-6xl mx-auto text-gray-800 pb-8 px-2 md:px-0 ">
    <div class="block fade-in font-extrabold mb-2 md:mb-4 md:py-4 md:text-3xl neles-font2 neles-glass nelesnapthe py-2 text-2xl text-center text-yellow-400 uppercase" style="
    padding: 7px;
">
            <?=$row['title'];?>
        </div>
        <br>
    <div class="mb-4 py-4 md:p-4 bg-box-dark">
        <div
            class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill ">
           
        </div>
        
       <div class="col-span-12 color-grant font-bold gap-2 grid grid-cols-10 nelesnapthe px-2 py-2 rounded select-none sticky text-xl w-1/2" style="
    margin: auto;
">
           
          <div class="col-span-12 md:col-span-12 neles-font neles-glass-boder text-center" style="
">
                SỐ TIỀN CẦN THANH TOÁN: <b id="thanhtoan">0</b>đ
            <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2  text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="card"></ion-icon>
                                            </div>
                                         <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="card"></ion-icon>
                                            </div>    
            </div>
            
         
            
            
        </div>
        <div class="v-account-detail p-2 md:px-0 mt-5">
            <div class="v-infomations ">
                <div class="py-3 px-5">
                    <span class="mb-2 block">
                       <div class="flex items-center relative">
                                            <select id="dichvu" onchange="showPrice()" class="appearance-none bg-trueGray-900 block focus:bg-trueGray-900 focus:border-yellow-500 focus:outline-none leading-tight neles-font2 neles-glass px-3 py-2 rounded text-white w-full">
                                <option data-money="0" value="">* Chọn gói cần mua</option>
                                <?php foreach($NDVMEDIA->get_list("SELECT * FROM `groups_caythue` WHERE `category` = '".$row['id']."' ") as $group) {?>
                                <option data-money="<?=$group['money'];?>" value="<?=$group['id'];?>">
                                    <?=$group['title'];?></option>
                                <?php }?>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                
                               <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                              <ion-icon name="chevron-down-sharp" role="img" class="md hydrated" aria-label="chevron down sharp"></ion-icon>
                                            </div>
  
                            </div>
                            <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 text-trueGray-700" style="color: #ffffff78;">
                                              <ion-icon name="chevron-down-sharp" role="img" class="md hydrated" aria-label="chevron down sharp"></ion-icon>
                                            </div>
                                            <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-back-circle-sharp" role="img" class="md hydrated" aria-label="chevron back circle sharp"></ion-icon>
                                            </div>
                                            
                                            
                            </div>
                        </div>
                    </span>
                                                 <span class="mb-2 block">
                        <div class="flex items-center relative"><input placeholder="Nhập tài khoản đăng nhập" id="tk"
                                class="appearance-none bg-trueGray-900 block focus:bg-trueGray-900 focus:border-yellow-500 focus:outline-none leading-tight neles-font2 neles-glass px-3 py-2 rounded text-white w-full">
                        <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-back-circle-sharp" role="img" class="md hydrated" aria-label="chevron back circle sharp"></ion-icon>
                                            </div>
                                       <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2  text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-forward-circle-sharp" role="img" class="md hydrated" aria-label="chevron forward circle sharp"></ion-icon>
                                            </div>     
                                            
                                            
                                            
                        </div>
                    </span>
                    <span class="mb-2 block">
                        <div class="flex items-center relative"><input placeholder="Nhập mật khẩu" id="mk"
                                class="appearance-none bg-trueGray-900 block focus:bg-trueGray-900 focus:border-yellow-500 focus:outline-none leading-tight neles-font2 neles-glass px-3 py-2 rounded text-white w-full">
                       <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-back-circle-sharp" role="img" class="md hydrated" aria-label="chevron back circle sharp"></ion-icon>
                                            </div>
                                        <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2  text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-forward-circle-sharp" role="img" class="md hydrated" aria-label="chevron forward circle sharp"></ion-icon>
                                            </div>    
                                            
                                            
                        </div>
                    </span>
                    <span class="mb-2 block">
                        <div class="flex items-center relative"><textarea placeholder="Nhập ghi chú nếu có" id="ghichu"
                                class="appearance-none bg-trueGray-900 block focus:bg-trueGray-900 focus:border-yellow-500 focus:outline-none leading-tight neles-font2 neles-glass px-3 py-2 rounded text-white w-full"></textarea>
                        <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-back-circle-sharp" role="img" class="md hydrated" aria-label="chevron back circle sharp"></ion-icon>
                                            </div>
                                    <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2  text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-forward-circle-sharp" role="img" class="md hydrated" aria-label="chevron forward circle sharp"></ion-icon>
                                            </div>        
                                            
                        </div>
                    </span>
                    <span class="mb-2 block">
                        <div class="flex items-center relative"><textarea placeholder="Nhập mã giảm giá nếu có" id="magiamgia"
                                class="appearance-none bg-trueGray-900 block focus:bg-trueGray-900 focus:border-yellow-500 focus:outline-none leading-tight neles-font2 neles-glass px-3 py-2 rounded text-white w-full"></textarea>
                        <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-back-circle-sharp" role="img" class="md hydrated" aria-label="chevron back circle sharp"></ion-icon>
                                            </div>
                                    <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2  text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-forward-circle-sharp" role="img" class="md hydrated" aria-label="chevron forward circle sharp"></ion-icon>
                                            </div>        
                                            
                        </div>
                    </span>
                                                            <center>
                    <button type="button" id="Submit" class="flex focus:outline-none h-10 homepayin items-center justify-center neles-font2 neles-glass-boder2 nelesnapthe pt-1 px-4 rounded text-2xl text-center uppercase" style="">
                                           THANH TOÁN
                                        </button></center>
                                        <style>
                                            .nelesnapthe:hover{
                                                transition: .4s all;
                                                transform: translateY(-3px);
                                                
                                            }
                                             .nelesnapthe{
                                                transition: .7s all;
                                                transform: translateY(3px);
                                                
                                            }
                                            </style>
               
            </div>
        </div>
        <div class="alert-info chino-card-ovf chino-card" role="alert">
            <?=$row['luuy'];?>
        </div>
    </div>    
</div>


<script type="text/javascript">
function showPrice() {
    var ketqua = $('#dichvu').children('option:selected').attr('data-money').replace(/(.)(?=(\d{3})+$)/g, '$1.');
    $("#anh").show();
    $("#thanhtoan").html(ketqua);
}
$("#Submit").on("click", function() {

    $('#Submit').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxstheme2/OdersGame.php");?>",
        method: "POST",
        data: {
            type: 'OrderCayThue',
            tk: $("#tk").val(),
            mk: $("#mk").val(),
            magiamgia: $("#magiamgia").val(),
            ghichu: $("#ghichu").val(),
            dichvu: $("#dichvu").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#Submit').html(
                    'Đặt ngay')
                .prop('disabled', false);
        }
    });
});
</script>
<?php }?>


    
<?php 
    require_once("../../public/client/Footer.php");
?>