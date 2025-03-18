<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
    $title = 'THAY ĐỔI MẬT KHẨU | '.$NDVMEDIA->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
    CheckLogin();
?>
<?php if($NDVMEDIA->site('theme_web') == 'theme1') { ?>
        <?php require_once('Sidebar.php');?>
        <div class="tw-col-span-12 md:tw-col-span-8">
                        <div class="tw-bg-white tw-rounded tw-p-4 md:tw-py-4 md:tw-px-5 tw-w-full">
                            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-4 tw-text-gray-800">
                                <h2 class="tw-text-lg tw-font-semibold">Đổi Mật Khẩu</h2>
                                <p class="tw-text-xs">
                                    Để bảo mật tài khoản, vui lòng không chia sẻ cho người khác.
                                </p>
                            </div>

                            <form class="tw-max-w-sm">
                                <div id="thongbao"></div>
                    
                                <div class="tw-mb-2">
                                    <label class="tw-text-gray-700 tw-text-sm">
                                        Mật khẩu mới
                                    </label>
                                    <input id="password" autocomplete="" type="password" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" />
                                </div>
                    
                                <div class="tw-mb-4">
                                    <label class="tw-text-gray-700 tw-text-sm">
                                        Nhập lại mật khẩu mới
                                    </label>
                                    <input id="repassword" type="password" autocomplete="" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" />
                                </div>
                    
                                <button type="button" id="DoiMatKhau" class="tw-px-8 tw-h-10 tw-bg-red-500 hover:tw-bg-red-600 tw-text-white tw-font-semibold tw-rounded">
                                    Xác Nhận
                                </button>
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