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
    $row = $NDVMEDIA->get_row(" SELECT * FROM `category_robux` WHERE `id` = '".check_string($_GET['id'])."'  ");
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
                               <h2 class="tw-text-lg tw-font-semibold"><?=$row['title'];?></h2>
                                <p class="tw-text-xs">
                                                                    </p>
                           
                                
        <div class="ws-grid ws-grid-cols-12 ws-gap-2">
            <div class="ws-col-span-12 sm:ws-col-span-12 md:ws-col-span-6">
                <div class="el-form el-form--default el-form--label-right">
                    <div class="ws-mb-8 ws-grid ws-grid-cols-12 ws-gap-4">
                        <div class="ws-col-span-12">
                            <div class="ws-bg-white ws-p-3 ws-rounded">
                                 
                                <form id="formSubmit" class="tw-px-2 md:tw-px-0">
                                <label class="ws-inline-block ws-font-semibold ws-text-base ws-mb-2">Tùy Chọn Gói Mua</label>
                                <div class="el-form-item is-required asterisk-left">
                                    <div class="el-form-item__content" style="margin-left:;">
                                        <select class="el-input__inner" role="combobox" aria-controls="el-id-1024-14" aria-expanded="false" aria-autocomplete="none" aria-haspopup="listbox" type="text" autocomplete="off" tabindex="0" style="height: 38px;" placeholder="Gói Mua" name="type" id="dichvu">
                                       <option data-amount="0" value="">Chọn gói</option>
                                        <?php foreach($NDVMEDIA->get_list("SELECT * FROM `groups_robux` WHERE `category` = '".$row['id']."' ") as $group) {?>
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
                                <div class="el-form-item is-required asterisk-left" id="ghichu"" style="display: block;">
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
                                <button ariadisabled="false" type="button"  id="Submit" class="el-button el-button--primary el-button--large" style="display: block;"><span>MUA NGAY</span></button>
                                </div><br>
                                <div id="thongbao" style="padding-bottom: 13px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="ws-col-span-12 md:ws-col-span-6">
                <div class="ws-bg-white">
                    <div class="ws-more-show ws-more ws-leading-7 ws-mb-4 ws-bg-white ws-rounded ws-py-2 ws-px-3 ws-transition-all ws-duration-200">
                        <?=$row['luuy'];?> 
                        <style>
                        .embed-container { position: relative; padding-bottom: 45.25%; height: 0; overflow: hidden; max-width: 100%; } 
                        .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
                        </style>
                        <div class="embed-container"><iframe src="https://youtube.com/embed/5neCn4WisTw" frameborder="0" allowfullscreen=""></iframe></div>
                    </div>
                </div>
            </div>
        </div> </div>
        </div>
                <div class="tw-bg-white tw-rounded tw-p-2 md:tw-py-4 md:tw-px-5 tw-w-full">
            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-2 tw-flex tw-items-center tw-justify-between md:tw-mb-4 tw-text-gray-800">
                <div class="tw-inline-block">
                <h2 class="tw-text-lg tw-font-semibold">Lịch Sử Đơn Mua Robux Chính Hãng Gần Đây</h2>
                <p class="tw-text-sm">Cập Nhật Lịch Sử Đơn Mua Robux Chính Hãng 6 Tháng Gần Đây Của Bạn.</p>
                </div>
            </div>
            <table id="list" class="tw-w-full">
                <thead>
                <tr class="tw-text-md tw-font-semibold tw-tracking-wide tw-text-left tw-text-gray-900 tw-border tw-border-b-0 tw-bg-gray-200">
                <td class="tw-px-2 tw-py-2">STT</td>
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
							<?php $i = 0; foreach($NDVMEDIA->get_list(" SELECT * FROM `orders_robux` WHERE `username` = '".$getUser['username']."' ORDER BY id DESC ") as $row){ ?>
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
    $("#thanhtoan").html(ketqua);
}
$("#Submit").on("click", function() {

    $('#Submit').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/OdersGame.php");?>",
        method: "POST",
        data: {
            type: 'OrderRobux',
            tk: $("#tk").val(),
            mk: $("#mk").val(),
            magiamgia: $("#magiamgia").val(),
            ghichu: $("#ghichu").val(),
            dichvu: $("#dichvu").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#Submit').html(
                    '<i class="fa fa-cart-plus mr-1" aria-hidden="true"></i>THANH TOÁN')
                .prop('disabled', false);
        }
    });
});
</script>
<?php }?>


<?php 
    require_once("../../public/client/Footer.php");
?>