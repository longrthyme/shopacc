<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
$title = 'RÚT VẬT PHẨM | ' . $NDVMEDIA->site('tenweb');
require_once("../../public/client/Header.php");
require_once("../../public/client/Nav.php");
CheckLogin();
?>
<?php if($NDVMEDIA->site('theme_web') == 'theme1') { ?>
        <?php require_once('Sidebar.php'); ?>
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
        .checkbox-withdraw{
        display: inline-block;
        width: 1.25rem;
        height: 1.25rem;
        border: solid 2px #cd3e3e;
        border-radius: 9999px;
        }

        #xTech-GasForm input[type=radio]{
        display: none;
        }

        #xTech-GasForm input[type=radio]:checked + .checkbox-withdraw{
        background-color: #cd3e3e;
        }
</style>
                    <div class="tw-col-span-12 md:tw-col-span-8">
                        <h2 class="tw-mb-2 tw-font-bold tw-text-xl">RÚT VẬT PHẨM (GAME)</h2>
                        <div class="tw-grid tw-grid-cols-12 tw-mb-4 tw-bg-white">
                            <button class="tablinks tw-col-span-4 tw-py-2 tw-font-semibold tw-border-b-2 tw-relative tw-rounded-tl focus:tw-outline-none hover:tw-border-red-500 vactive" onclick="Tab('rb')">
                                <img class="tw-hidden md:tw-block tw-h-12 tw-absolute tw-left-2" style="top: 6px;" src="/assets/images/icon_roblox1.png" />
                                <span>Rút <span class="tw-hidden md:tw-inline-block">Robux</span><span class="tw-inline-block md:tw-hidden">Robux</span></span>
                                <p class="tw-text-xs md:tw-text-sm tw-font-semibold">
                                    (Roblox)
                                </p>
                             </button>
                        </div>
     <div class="tw-bg-white tw-rounded tw-p-2 md:tw-py-4 md:tw-px-5 tw-w-full tw-mb-4">
					 <!---->
					 <div id="thongbao" style="padding-bottom: 13px;"></div>
					 <div class="tw-form-withdraw" id="main_kimcuong">
						<div>
						   <div class="tw-pb-2 tw-mb-2 tw-border-b tw-border-gray-200 tw-font-bold">
							  Hiện có:
							  <b class="tw-text-red-500 tw-uppercase">
							  <?=format_cash($getUser['robux']);?> RB 
							  </b> | </b>SỐ ROBUX CẦN CÓ ĐỂ RÚT: <b id="show_price" class="tw-text-red-500">0 RB</b> | </b>GIÁ SERVER VIP CẦN ĐẶT: <b id="countRoblox1" class="tw-text-red-500">0</b>
							  <br/> Hạn mức rút còn lại hôm nay <b>5000</b> Robux  
							  <br/>
							  <h2>
								Mua rút robux <b style="color: blue;">120h</b> mới về tài khoản, cần làm đúng theo hướng dẫn  
								"<a target="_blank" href="https://youtube.com/embed/OrM-lO_LtPY"><b style="color: blue;">xem video tại đây</b></a>"
								</h2>
						   </div>
						   <div class="tw-grid tw-grid-cols-12 tw-gap-4">
							  <div class="tw-col-span-12 md:tw-col-span-6">
									<div class="alert alert-success" role="alert" id="success_group" style="padding: 5px 10px; margin-top: 10px;display:none"></div>
									
									<div class="tw-mb-2">
									   <label class="tw-text-gray-700 tw-text-sm"> Chọn Hình Thức: Ưu Tiên Rút Bằng GamePass<span class="text-danger">*</span> </label>
									   <select class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" name="packages_type" id="packages_type">
											<option value="GAMEPASS" class="tw-font-medium tw-text-red-600">Rút robux Bằng Gamepass Sever Vip</option>
											<option value="SVVIP" class="tw-font-medium tw-text-red-600"> (Sever Vip ) bị giới hạn 500 rb, Nên rút bằng gamepass</option>
									   </select>
									</div>
									
									<div class="tw-mb-4">
										<label class="tw-text-gray-700 tw-text-sm"> Số Robux <span class="text-danger">*</span> <br/> </label> 
										<input id="amount" name="amount" value="0" required="required" 
										autocorrect="off" spellcheck="false" autocapitalize="off" tabindex="3" 
										class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none valid" 
										aria-invalid="false">
										<input type="hidden" id="real_amount">
									</div>
									
									<div class="alert alert-danger" role="thongbao1" id="thongbao1" style="padding: 5px 10px; margin-top: 10px;display:none">
									</div>
									
									<div class="tw-mb-2">
									   <label class="tw-block tw-mb-1 tw-text-sm tw-font-semibold"> Nhập Link Svv Hoặc Gamepass *</label>
									   <input name="tk" id="tk" placeholder="Tên Đăng Nhập chữ Hoa vs Chữ Thường trong Roblox" 
									   class="tw-h-10 tw-px-3 tw-rounded tw-font-semibold tw-border tw-border-gray-400 tw-w-full focus:tw-outline-none">
									   <p class="tw-mt-1 tw-mb-2 tw-text-sm tw-text-gray-600"><i>Ví dụ: https://www.roblox.com/game-pass/6028662/2x-Money </i></p>
									</div>
									<!---->
									<!---->
									<div>
									   <button type="button" class="tw-h-10 tw-px-3 tw-text-center tw-font-semibold tw-bg-red-500 tw-text-white tw-w-full tw-rounded focus:tw-outline-none" id="Submit">
									   RÚT NGAY
									   </button>
									</div>
								 </form>
								 <a href="#" class="tw-mt-4 tw-block md:tw-hidden tw-px-1 tw-font-semibold hover:tw-text-red-600">#Xem Danh sách rút vật phẩm</a>
							  </div>
							  <div class="tw-col-span-12 md:tw-col-span-6 tw-text-sm">
								 <div class="tw-border-2 tw-border-amber-300 tw-bg-white tw-rounded tw-text-sm tw-leading-7 tw-px-3 tw-py-1 tw-my-2" style="overflow-y: auto; height: 26.9rem;">
									<div class="relative">
									   <style>
										  .embed-container { position: relative; padding-bottom: 45.25%; height: 0; overflow: hidden; max-width: 100%; } .
										  embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
									   </style>
									   <div  id="ytb-gamepass">
										  <div class="embed-container">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/OrM-lO_LtPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										  </div>
									   </div>
									   <div style="display: none" id="ytb-svvip">
										  <div class="embed-container"></div>
									   </div>
									</div>
								 </div>
							  </div>
						   </div>
						</div>
						<div></div>
						<div></div>
					 </div>
				  </div>
				  <div class="tw-bg-white tw-rounded tw-p-2 md:tw-py-4 md:tw-px-5 tw-w-full">
					 <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-2 tw-flex tw-items-center tw-justify-between md:tw-mb-4 tw-text-gray-800">
						<div class="tw-inline-block">
						   <h2 class="tw-text-lg tw-font-semibold">
							  Danh Sách Rút Vật Phẩm
						   </h2>
						   <p class="tw-text-sm">Lịch sử rút 2 tháng gần nhất.</p>
						</div>
						<a href="javascript:;" class="tw-relative tw-ml-2 block tw-px-1 py-1 tw-text-white tw-bg-red-500 text-sm tw-font-semibold 
						tw-rounded focus:tw-outline-none" style="top: -1px;">
						<i class="relative bx bx-revision mr-1" style="top: 1px;"></i>
						Làm mới
						</a>
					 </div>
					 <!---->
					 <div id="list" class=" overflow-x-auto">
						<table class="tw-w-full tw-rounded-t ">
						   <thead>
							  <tr class="tw-text-md tw-font-semibold tw-tracking-wide tw-text-left tw-text-gray-900 tw-border tw-border-b-0 tw-bg-gray-200">
									<th class="tw-px-2 tw-py-2 tw-w-28 md:tw-w-40">STT</th>
									<th class="tw-px-2 tw-py-2 tw-w-28 md:tw-w-40">Số Robux Rút</th>
									<th class="tw-px-2 tw-py-2 tw-w-28 md:tw-w-40">Link GamePass/Svv</th>
									<th class="tw-px-2 tw-py-2 tw-w-28 md:tw-w-40">Số Robux Cần Có Để Rút</th>
									<th class="tw-px-2 tw-py-2 tw-w-28 md:tw-w-40">Thời Gian Rút</th>
									<th class="tw-px-2 tw-py-2 tw-w-28 md:tw-w-40">Lý do</th>
									<th class="tw-px-2 tw-py-2 tw-w-28 md:tw-w-40">Trạng thái</th>
							  </tr>
						   </thead>
						   <tbody class="bg-white tw-border tw-border-t-0 tw-rounded">
							<?php $i = 0; foreach($NDVMEDIA->get_list(" SELECT * FROM `orders_withdraw` WHERE `username` = '".$getUser['username']."' ORDER BY id DESC ") as $row){ ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-center px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm tw-text-red-500 text-center px-1 py-1 border-b"><?=$row['dichvu'];?>
                                    </td>
                                    <td class="text-sm text-gray-800 text-center px-1 py-1 border-b"><?=$row['tk'];?></td>
                                    <td class="text-sm tw-text-red-500 text-center px-1 py-1 border-b">
                                        <?=format_cash($row['robux']);?> R$</td>
                                    <td class="text-sm text-gray-800 text-center px-1 py-1 border-b"><span
                                            class="badge badge-danger"><?=$row['createdate'];?></span></td>
                                    <td class="text-sm tw-text-red-500 text-center px-1 py-1 border-b"><span
                                            class="badge badge-danger"><?=$row['reason'];?></span></td>
                                    <td class="text-sm text-gray-800 text-center px-1 py-1 border-b">
                                        <?=status($row['status']);?></td>
                                </tr>
                            <?php }?>   
														   </tbody>
						</table>
						<div class="tw-my-2">
						   <div data-v-05c811c3="" class="tw-min-w-max">
							  <section data-v-05c811c3="" class="tw-flex tw-justify-between tw-py-1 tw-text-gray-700 tw-font-montserrat tw-select-none">
								 
							  </section>
						   </div>
						</div>
					 </div>
				  </div>
			   </div>
			   
			   
			</div>
    </div>
</div> 
<script type="text/javascript">

let rate = 70;

$("#amount").on('input', function (e) {
    
    var val = $("#amount").val();
    btMoney = Math.round((+val * 100) / rate);
    if(btMoney < 0) {
        btMoney = 0;
    }
    
    $("#show_price").html(btMoney.toString().replace(/(.)(?=(\d{3})+$)/g, '$1.'));
    btRobux = val;
    var inputRobux = Math.round(+btRobux / 0.7);
    $("#countRoblox1").html(inputRobux.toString().replace(/(.)(?=(\d{3})+$)/g, '$1.')+ ' R$');


});


$("#Submit").on("click", function() {
   


    $('#Submit').html('ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        
        url: "<?=BASE_URL("assets/ajaxs/RutRobux.php");?>",
        method: "POST",
        data: {
            type: 'Order',
            tk: $("#tk").val(),
            mk: ' . ',
            ghichu: $("#ghichu").val(),
            sorb: $("#amount").val(),
            robux: Math.round((+$("#amount").val() * 100) / rate)

        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#Submit').html(
                    'Rút Tiếp')
                .prop('disabled', false);
        }
    });
});

</script>
<?php }?>



<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>
<?php
require_once("../../public/client/Footer.php");
?>