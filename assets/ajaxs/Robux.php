<?php 
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    require_once('../../class/class.smtp.php');
    require_once('../../class/PHPMailerAutoload.php');
    require_once('../../class/class.phpmailer.php');

    if($_POST['type'] == 'Order')
    {
        if(empty($_SESSION['username']))
        {
            msg_error2("Vui lòng đăng nhập để thanh toán !");
        }
        $tk = check_string($_POST['tk']);
        $mk = check_string($_POST['mk']);
        $dichvu = check_string($_POST['dichvu']);
        $ghichu = check_string($_POST['ghichu']);
        if(empty($dichvu))
        {
            msg_error2("Vui lòng chọn gói dịch vụ");
        }
        if(empty($tk))
        {
            msg_error2("Vui lòng nhập tài khoản đăng nhập game");
        }
        if(empty($mk))
        {
            msg_error2("Vui lòng nhập mật khẩu đăng nhập game");
        }
        $group = $NDVMEDIA->get_row("SELECT * FROM `groups_robux` WHERE `id` = '$dichvu' ");
        if(!$group['title'])
        {
            msg_error2("Dịch vụ không hợp lệ");
        }
        if($group['money'] > $getUser['money'])
        {
            msg_error2("Số dư không đủ vui lòng nạp thêm");
        }
        $isMoney = $NDVMEDIA->tru("users", "money", $group['money'], " `username` = '".$getUser['username']."' ");
        if($isMoney)
        {
            $isOrder = $NDVMEDIA->insert("orders_robux", [
                'username' => $getUser['username'],
                'dichvu'   => $group['title'],
                'money'    => $group['money'],
                'tk'       => $tk,
                'mk'       => $mk,
                'createdate' => gettime(),
                'updatedate' => gettime(),
                'status'     => 'xuly',
                'ghichu'     => $ghichu
            ]);
            if($isOrder)
            {
                /* GHI LOG DÒNG TIỀN */
                $NDVMEDIA->insert("dongtien", array(
                    'sotientruoc'   => $getUser['money'] ,
                    'sotienthaydoi' => $group['money'],
                    'sotiensau'     => $getUser['money'] - $group['money'],
                    'thoigian'      => gettime(),
                    'noidung'       => 'Đặt hàng gói ('.$group['title'].')',
                    'username'      => $getUser['username']
                ));
                msg_success("Thanh toán thành công!", BASE_URL("History/Robux/"), 1000);
            }
            else
            {
                $NDVMEDIA->cong("users", "money", $group['money'], " `username` = '".$getUser['username']."' ");
                msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
            }
        }
        else
        {
            msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
        }
    }