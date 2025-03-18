<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
        $title = 'LỊCH SỬ | '.$NDVMEDIA->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
?>
<?php if($NDVMEDIA->site('theme_web') == 'theme1') { ?>
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
<?php require_once('Sidebar.php');?>
<div class="ws-col-span-12 md:ws-col-span-9 ws-min-h-[70vh]">
    <div>
        <div>
            <!---->
            <div class="ws-bg-white ws-my-1 ws-pb-2 md:ws-py-4 md:ws-px-4 ws-rounded-none md:ws-rounded ws-relative"><!---->
                <div>
                    
                    <div class="el-table--fit el-table--enable-row-hover el-table--enable-row-transition el-table el-table--layout-fixed is-scrolling-none" data-prefix="el" style="width: 100%;">
                        <div class="el-table__inner-wrapper">
                            <div class="hidden-columns">
                                <div></div>
                                <div></div>
                            </div>
                                                        <div class="el-table__header-wrapper">
                                <div class="el-tabs__content">
                                <div>
                                <table class="el-table__header" border="0" cellpadding="0" cellspacing="0" style="width: 536px;">
                                    <colgroup>
                                        <col name="el-table_1_column_1" width="268">
                                        <col name="el-table_1_column_2" width="268">
                                    </colgroup>
                                    <thead class="">
                                        <tr class="">
                                            <th class="el-table_1_column_1 is-leaf el-table__cell" colspan="1" rowspan="1">
                                                <div class="cell">THÔNG TIN ĐƠN<!----><!----></div>
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="el-table__body-wrapper">
                                
                                <div class="el-scrollbar">
                                    <div class="el-scrollbar__wrap el-scrollbar__wrap--hidden-default">
                                        <div class="el-scrollbar__view" style="display: inline-block; vertical-align: middle;">
                                            <table class="el-table__body" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed; width: 536px;">
                                                <colgroup>
                                                    <col name="el-table_1_column_1" width="268">
                                                    <col name="el-table_1_column_2" width="268">
                                                </colgroup><!--v-if-->
                                                <tbody tabindex="-1">
                                                    <?php $i = 0; foreach($NDVMEDIA->get_list(" SELECT * FROM `orders_bandv` WHERE `username` = '".$getUser['username']."' ORDER BY id DESC LIMIT 7") as $row){ ?>
                                                                                                        <tr class="el-table__row">
                                                        <td class="el-table_1_column_1 el-table__cell" rowspan="1" colspan="1">
                                                            <div class="cell"><!---->
                                                                <div>
                                                                    <p class="ws-uppercase ws-font-semibold ws-text-red-500">LỊCH SỬ MUA VẬT PHẨM</p>
                                                                    <div class="ws-border-b ws-border-dashed ws-w-20 ws-my-1"></div>
                                                                    <div class="ws-text-sm ws-text-black ws-leading-5">
                                                                        <p class="ws-font-medium"><span class="ws-text-xs ws-inline-block ws-mr-1">Gói: </span><span class="ws-text-blue-600 ws-capitalize ws-font-extrabold ws-select-all"><?=$row['dichvu'];?></span></p>
                                                                        <p class="ws-font-medium ws-text-xs ws-leading-5"> Ad phản hồi: <span class="ws-text-red-600 ws-rounded ws-px-2 ws-bg-yellow-100 ws-inline-block ws-capitalize"><i></i><?=$row['reason'];?></span></p>
                                                                        <div class="ws-border-b ws-border-dashed ws-w-20 ws-my-1"></div>
                                                                        <p class="ws-font-medium ws-text-zinc-800 ws-text-xs ws-leading-5"><small class="ws-uppercase">Mua lúc:</small><span class="ws-block ws-text-black"><?=$row['createdate'];?></span></p><!---->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="el-table_1_column_2 el-table__cell" rowspan="1" colspan="1">
                                                            <div class="cell"><!---->
                                                                <div>
                                                                    <div class="ws-text-sm ws-text-black ws-leading-5">
                                                                        <p class="ws-font-medium"><span class="ws-text-xs ws-inline-block ws-mr-1">T.K:</span><span class="ws-text-blue-600 ws-font-extrabold ws-select-all"><?=$row['tk'];?></span></p>
                                                                        <p class="ws-font-medium"><span class="ws-text-xs ws-inline-block ws-mr-1">M.K:</span><span class="ws-text-blue-600 ws-font-extrabold ws-select-all"><?=$row['mk'];?></span></p>
                                                                    </div>
                                                                    <div class="ws-border-b ws-border-dashed ws-w-20 ws-my-1"></div>
                                                                    <p class="ws-font-medium ws-leading-5"><label class="ws-block ws-text-zinc-800 ws-text-xs">Giá tiền:</label><span class="ws-text-red-600 ws-font-bold ws-text-base"><?=number_format($row['money']);?>đ</span></p>
                                                                    <div class="ws-border-b ws-border-dashed ws-w-20 ws-my-1"></div>
                                                                    <p class="ws-text-xs ws-font-semibold ws-mb-1"><?=status($row['status']);?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr> <?php }?>
                                                                                                    </tbody><!--v-if-->
                                            </table><!--v-if--><!--v-if-->
                                        </div>
                                    </div>
                                    <div class="el-scrollbar__bar is-horizontal" style="display: none;">
                                        <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                    </div>
                                    <div class="el-scrollbar__bar is-vertical" style="display: none;">
                                        <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                    </div>
                                </div>
                            </div>
                            <!--v-if--><!--v-if-->
                        </div>
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                </div><!----><!---->
            </div>
            <div class="ws-mt-4 ws-px-2 md:ws-px-0">
                <div class="el-pagination is-background">
                                    </div>
            </div>
        </div>
    </div>
</div></div></div>

<?php }?>

<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
});
</script>
<?php 
    require_once("../../public/client/Footer.php");
?>