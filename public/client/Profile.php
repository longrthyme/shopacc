<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
    $title = 'THÔNG TIN | '.$NDVMEDIA->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
    CheckLogin();
?>

<?php if($NDVMEDIA->site('theme_web') == 'theme1') { ?>
        <?php require_once('Sidebar.php');?>
        
        <div class="ws-col-span-12 md:ws-col-span-9 ws-min-h-[70vh]">
        <h3 class="ws-text-xl ws-text-zinc-900 ws-mb-4">Thông Tin Tài Khoản</h3>
        <div class="ws-relative">
            <div class="ws-bg-white ws-relative ws-my-1 ws-py-3 md:ws-py-4 ws-px-4 ws-grid ws-grid-cols-12 ws-gap-x-4 ws-gap-y-2 ws-rounded-none md:ws-rounded">
                <div class="ws-absolute ws-border-skz"></div>
                <div class="ws-col-span-12 md:ws-col-span-6">
                    <label class="ws-block ws-mb-4 ws-text-zinc-700"><i class="bx bx-user ws-relative ws-top-[1px] ws-mr-1"></i> Thông Tin Cá Nhân</label>
                    <div class="ws-grid ws-grid-cols-12 ws-gap-4 ws-text-sm ws-px-1 ws-mb-4">
                    <div class="ws-col-span-5 ws-text-zinc-700">ID</div>
                    <div class="ws-col-span-7"><?=$getUser['id'];?></div>
                    </div>
                    <div class="ws-grid ws-grid-cols-12 ws-gap-4 ws-text-sm ws-px-1 ws-mb-4">
                    <div class="ws-col-span-5 ws-text-zinc-700">Tên tài khoản</div>
                    <div class="ws-col-span-7 ws-text-red-500"><?=$getUser['username'];?></div>
                    </div>
                    <div class="ws-grid ws-grid-cols-12 ws-gap-4 ws-text-sm ws-px-1 ws-mb-4">
                    <div class="ws-col-span-5 ws-text-zinc-700">Số Dư Ví</div>
                    <div class="ws-col-span-7 ws-text-red-500 ws-font-semibold"><?=format_cash($getUser['money']);?>đ</div>
                    </div>
                    <div class="ws-grid ws-grid-cols-12 ws-gap-4 ws-text-sm ws-px-1 ws-mb-4">
                    <div class="ws-col-span-5 ws-text-zinc-700">Số Dư Robux</div>
                    <div class="ws-col-span-7 ws-text-red-500 ws-font-semibold"><?=format_cash($getUser['robux']);?>RB</div>
                    </div>
                    <div class="ws-grid ws-grid-cols-12 ws-gap-4 ws-text-sm ws-px-1 ws-mb-4">
                    <div class="ws-col-span-5 ws-text-zinc-700">Ngày Tham Gia</div>
                    <div class="ws-col-span-7"><?=$getUser['createdate'];?> </div>
                    </div>
                </div>
                <div class="ws-col-span-12 md:ws-col-span-6 md:ws-border-l md:ws-pl-6">
                    <div class="ws-update_3 ws-mb-2">
                        <label class="ws-block ws-mb-2 ws-text-zinc-700"><i class="bx bx-lock-alt ws-relative ws-top-[1px] ws-mr-1"></i> Đổi Mật Khẩu</label>
                        <div class="ws-max-w-sm">
                            <form id="form-Pass" class="tw-max-w-sm">
                            <div id="thongbao"></div>
                            
                            <div class="el-form-item is-required asterisk-left">
                                <div class="el-form-item__content">
                                    <label for="old_password">Mật Khẩu Mới</label>
                                    <div class="el-input el-input--large el-input--suffix">
                                        <input class="el-input__inner" type="password" autocomplete="off" tabindex="0" id="password">
                                    </div>
                                </div>
                            </div>
                            <div class="el-form-item is-required asterisk-left">
                                <div class="el-form-item__content">
                                    <label for="old_password">Nhập Lại Mật Khẩu Mới</label>
                                    <div class="el-input el-input--large el-input--suffix">
                                        <input class="el-input__inner" type="password" autocomplete="off" tabindex="0" id="repassword">
                                    </div>
                                </div>
                            </div><br>
                            <button type="button" id="DoiMatKhau" class="el-button el-button--primary el-button--large ws-w-full ws-font-bold"><span>CẬP NHẬT</span></button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
       <script type="text/javascript">
$("#DoiMatKhau").on("click", function() {
    $('#DoiMatKhau').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/Auth.php");?>",
        method: "POST",
        data: {
            type: 'DoiMatKhau',
            password: $("#password").val(),
            repassword: $("#repassword").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#DoiMatKhau').html(
                    'ĐỔI MẬT KHẨU')
                .prop('disabled', false);
        }
    });
});
</script>
<?php }?>



<?php 
    require_once("../../public/client/Footer.php");
?>