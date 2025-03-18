<?php 
    require_once("../../display/config.php");
    require_once("../../display/function.php");
    require_once('../../class/class.smtp.php');
    require_once('../../class/PHPMailerAutoload.php');
    require_once('../../class/class.phpmailer.php');
function sendTelegramMessage($message) {
    $NDVMEDIA = new NDVMEDIA;
    $telegramApiUrl = "https://api.telegram.org/bot" .$NDVMEDIA->site('Token_tele'). "/sendMessage";
    $data = [
        'chat_id' => $NDVMEDIA->site('ID_tele'),
        'text' => $message,
        'parse_mode' => 'HTML'
    ];
    
    $ch = curl_init($telegramApiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        error_log('Error:' . curl_error($ch));
    }
    curl_close($ch);
    $responseData = json_decode($response, true);
    if (!$responseData['ok']) {
        error_log('Telegram API Error: ' . $responseData['description'] .$telegramApiUrl);
    } else {
        error_log('Telegram message sent successfully');
    }
}
    if($_POST['type'] == 'OrderCayThue')
    {
        if(empty($_SESSION['username']))
        {
            msg_error2("Vui lòng đăng nhập để thanh toán !");
        }
        $tk = check_string($_POST['tk']);
        $mk = check_string($_POST['mk']);
        $dichvu = check_string($_POST['dichvu']);
        $ghichu = check_string($_POST['ghichu']);
        $magiamgia = check_string($_POST['magiamgia']);
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
        $group = $NDVMEDIA->get_row("SELECT * FROM `groups_caythue` WHERE `id` = '$dichvu' ");
        if(!$group['title'])
        {
            msg_error2("Dịch vụ không hợp lệ");
        }
        $sotien = $group['money'];
        if($magiamgia){
             $checkmagiamgia = $NDVMEDIA->get_row("SELECT * FROM `magiamgia` WHERE `code` = '$magiamgia' AND `solan` > '0'");
            if($checkmagiamgia){
                if($checkmagiamgia['dichvu'] == 'caythue'){
                    $sotien = $group['money'] - ($group['money'] * $checkmagiamgia['giam'] / 100);
                }else{
                     msg_error2("Không có% giảm");
                }
            }else{
                msg_error2("Mã giảm giá của bạn không tồn tại hoặc hết lượt dùng");
                 $sotien = $group['money'] - ($group['money'] * $checkmagiamgia['giam'] / 100);
            }
        }
        if($sotien > $getUser['money'])
        {
            msg_error2("Số dư không đủ vui lòng nạp thêm");
        }
        $isMoney = $NDVMEDIA->tru("users", "money", $sotien, " `username` = '".$getUser['username']."' ");
        if($isMoney)
        {
            $isOrder = $NDVMEDIA->insert("orders_caythue", [
                'username' => $getUser['username'],
                'dichvu'   => $group['title'],
                'money'    => $sotien,
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
                    'sotienthaydoi' =>$sotien,
                    'sotiensau'     => $getUser['money'] - $sotien,
                    'thoigian'      => gettime(),
                    'noidung'       => 'Đặt hàng gói ('.$group['title'].')',
                    'username'      => $getUser['username']
                ));
                $NDVMEDIA->tru("magiamgia", "solan", '1', " `code` = '".$magiamgia."' ");
                $resone = 'Đặt hàng gói ('.$group['title'].')';
                webhookcaythue($resone, $getUser['username'], $ghichu);
                sendTelegramMessage("Thanh toán thành công! Người dùng: " . $getUser['username'] . ", Gói dịch vụ: " . $group['title'] . ", Số tiền: " . $sotien);
                msg_success("Thanh toán thành công!", (""), 1000);
            }
            else
            {
                $NDVMEDIA->cong("users", "money", $sotien, " `username` = '".$getUser['username']."' ");
                msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
            }
        }
        else
        {
            msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
        }
    }
    if($_POST['type'] == 'OrderGpass')
    {
        if(empty($_SESSION['username']))
        {
            msg_error2("Vui lòng đăng nhập để thanh toán !");
        }
        $tk = check_string($_POST['tk']);
        $mk = check_string($_POST['mk']);
        $dichvu = check_string($_POST['dichvu']);
        $ghichu = check_string($_POST['ghichu']);
        $magiamgia = check_string($_POST['magiamgia']);
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
        $group = $NDVMEDIA->get_row("SELECT * FROM `groups_gamepass` WHERE `id` = '$dichvu' ");
        if(!$group['title'])
        {
            msg_error2("Dịch vụ không hợp lệ");
        }
        $sotien = $group['money'];
        if($magiamgia){
             $checkmagiamgia = $NDVMEDIA->get_row("SELECT * FROM `magiamgia` WHERE `code` = '$magiamgia' AND `solan` > '0'");
            if($checkmagiamgia){
                if($checkmagiamgia['dichvu'] == 'gamepass'){
                    $sotien = $group['money'] - ($group['money'] * $checkmagiamgia['giam'] / 100);
                }else{
                     msg_error2("Không có% giảm");
                }
            }else{
                msg_error2("Mã giảm giá của bạn không tồn tại hoặc hết lượt dùng");
                 $sotien = $group['money'] - ($group['money'] * $checkmagiamgia['giam'] / 100);
            }
        }
        if($sotien > $getUser['money'])
        {
            msg_error2("Số dư không đủ vui lòng nạp thêm");
        }
        $isMoney = $NDVMEDIA->tru("users", "money", $sotien, " `username` = '".$getUser['username']."' ");
        if($isMoney)
        {
            $isOrder = $NDVMEDIA->insert("orders_gamepass", [
                'username' => $getUser['username'],
                'dichvu'   => $group['title'],
                'money'    => $sotien,
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
                    'sotienthaydoi' =>$sotien,
                    'sotiensau'     => $getUser['money'] - $sotien,
                    'thoigian'      => gettime(),
                    'noidung'       => 'Đặt hàng gói ('.$group['title'].')',
                    'username'      => $getUser['username']
                ));
                $NDVMEDIA->tru("magiamgia", "solan", '1', " `code` = '".$magiamgia."' ");
                $resone = 'Đặt hàng gói ('.$group['title'].')';
                webhookgamepass($resone, $getUser['username'], $ghichu);
                sendTelegramMessage("Thanh toán thành công! Người dùng: " . $getUser['username'] . ", Gói dịch vụ: " . $group['title'] . ", Số tiền: " . $sotien);
                msg_success("Thanh toán thành công!", (""), 1000);
            }
            else
            {
                $NDVMEDIA->cong("users", "money", $sotien, " `username` = '".$getUser['username']."' ");
                msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
            }
        }
        else
        {
            msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
        }
    }
    if($_POST['type'] == 'OrderRobux')
    {
        if(empty($_SESSION['username']))
        {
            msg_error2("Vui lòng đăng nhập để thanh toán !");
        }
        $tk = check_string($_POST['tk']);
        $mk = check_string($_POST['mk']);
        $dichvu = check_string($_POST['dichvu']);
        $ghichu = check_string($_POST['ghichu']);
        $magiamgia = check_string($_POST['magiamgia']);
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
        $sotien = $group['money'];
        if($magiamgia){
             $checkmagiamgia = $NDVMEDIA->get_row("SELECT * FROM `magiamgia` WHERE `code` = '$magiamgia' AND `solan` > '0'");
            if($checkmagiamgia){
                if($checkmagiamgia['dichvu'] == 'robux'){
                    $sotien = $group['money'] - ($group['money'] * $checkmagiamgia['giam'] / 100);
                }else{
                     msg_error2("Không có% giảm");
                }
            }else{
                msg_error2("Mã giảm giá của bạn không tồn tại hoặc hết lượt dùng");
                 $sotien = $group['money'] - ($group['money'] * $checkmagiamgia['giam'] / 100);
            }
        }
        if($sotien > $getUser['money'])
        {
            msg_error2("Số dư không đủ vui lòng nạp thêm");
        }
        $isMoney = $NDVMEDIA->tru("users", "money", $sotien, " `username` = '".$getUser['username']."' ");
        if($isMoney)
        {
            $isOrder = $NDVMEDIA->insert("orders_robux", [
                'username' => $getUser['username'],
                'dichvu'   => $group['title'],
                'money'    => $sotien,
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
                    'sotienthaydoi' =>$sotien,
                    'sotiensau'     => $getUser['money'] - $sotien,
                    'thoigian'      => gettime(),
                    'noidung'       => 'Đặt hàng gói ('.$group['title'].')',
                    'username'      => $getUser['username']
                ));
                $NDVMEDIA->tru("magiamgia", "solan", '1', " `code` = '".$magiamgia."' ");
                $resone = 'Đặt hàng gói ('.$group['title'].')';
                webhookrobux($resone, $getUser['username'], $ghichu);
                sendTelegramMessage("Thanh toán thành công! Người dùng: " . $getUser['username'] . ", Gói dịch vụ: " . $group['title'] . ", Số tiền: " . $sotien);
                msg_success("Thanh toán thành công!", (""), 1000);
            }
            else
            {
                $NDVMEDIA->cong("users", "money", $sotien, " `username` = '".$getUser['username']."' ");
                msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
            }
        }
        else
        {
            msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
        }
    }
     if($_POST['type'] == 'OrderRobuxV2')
    {
        if(empty($_SESSION['username']))
        {
            msg_error2("Vui lòng đăng nhập để thanh toán !");
        }
        $tk = check_string($_POST['tk']);
        $mk = check_string($_POST['mk']);
        $ghichu = check_string($_POST['ghichu']);
        $magiamgia = check_string($_POST['magiamgia']);
        $money = check_string($_POST['money']);
        $sorb = check_string($_POST['sorb']);
        
        if(empty($sorb))
        {
            msg_error2("Vui lòng nhập số robux");
        }
        if($sorb < 10)
        {
            msg_error2("Số robux tối thiếu mua được là 10R$");
        }
        if(empty($tk))
        {
            msg_error2("Vui lòng nhập tài khoản đăng nhập game");
        }
        if(empty($mk))
        {
            msg_error2("Vui lòng nhập mật khẩu đăng nhập game");
        }
        if($money > $getUser['money'])
        {
            msg_error2("Số dư không đủ vui lòng nạp thêm");
        }
        $sotien = $money;
        if($magiamgia){
             $checkmagiamgia = $NDVMEDIA->get_row("SELECT * FROM `magiamgia` WHERE `code` = '$magiamgia' AND `solan` > '0'");
            if($checkmagiamgia){
                if($checkmagiamgia['dichvu'] == 'robux'){
                    $sotien = $money - ($money * $checkmagiamgia['giam'] / 100);
                }else{
                     msg_error2("Không có % giảm");
                }
            }else{
                msg_error2("Mã giảm giá của bạn không tồn tại hoặc hết lượt dùng");
                 $sotien = $money - ($money * $checkmagiamgia['giam'] / 100);
            }
        }
        $isMoney = $NDVMEDIA->tru("users", "money", $money, " `username` = '".$getUser['username']."' ");
        if($isMoney)
        {
            $isOrder = $NDVMEDIA->insert("orders_robux", [
                'username' => $getUser['username'],
                'dichvu'   => round(+$sorb).'R$',
                'money'    => $money,
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
                    'sotientruoc'   => $getUser['money'] + $money,
                    'sotienthaydoi' => $money,
                    'sotiensau'     => $getUser['money'],
                    'thoigian'      => gettime(),
                    'noidung'       => 'Đặt hàng gói ('.round(+$sorb / 0.7).') R$',
                    'username'      => $getUser['username']
                ));
                $NDVMEDIA->tru("magiamgia", "solan", '1', " `code` = '".$magiamgia."' ");
                sendTelegramMessage("Thanh toán thành công! Người dùng: " . $getUser['username'] . ", Gói dịch vụ: " . $group['title'] . ", Số tiền: " . $sotien);
                msg_success("Thanh toán thành công!", (""), 1000);
            }
            else
            {
                $NDVMEDIA->cong("users", "money", $money, " `username` = '".$getUser['username']."' ");
                msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
            }
        }
        else
        {
            msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
        }
    }
    if($_POST['type'] == 'OrderVatPham')
    {
        if(empty($_SESSION['username']))
        {
            msg_error2("Vui lòng đăng nhập để thanh toán !");
        }
        $tk = check_string($_POST['tk']);
        $mk = check_string($_POST['mk']);
        $dichvu = check_string($_POST['dichvu']);
        $ghichu = check_string($_POST['ghichu']);
        $magiamgia = check_string($_POST['magiamgia']);
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
        $group = $NDVMEDIA->get_row("SELECT * FROM `groups_bandv` WHERE `id` = '$dichvu' ");
        if(!$group['title'])
        {
            msg_error2("Dịch vụ không hợp lệ");
        }
        $sotien = $group['money'];
        if($magiamgia){
             $checkmagiamgia = $NDVMEDIA->get_row("SELECT * FROM `magiamgia` WHERE `code` = '$magiamgia' AND `solan` > '0'");
            if($checkmagiamgia){
                if($checkmagiamgia['dichvu'] == 'bandv'){
                    $sotien = $group['money'] - ($group['money'] * $checkmagiamgia['giam'] / 100);
                }else{
                     msg_error2("Không có% giảm");
                }
            }else{
                msg_error2("Mã giảm giá của bạn không tồn tại hoặc hết lượt dùng");
                 $sotien = $group['money'] - ($group['money'] * $checkmagiamgia['giam'] / 100);
            }
        }
        if($sotien > $getUser['money'])
        {
            msg_error2("Số dư không đủ vui lòng nạp thêm");
        }
        $isMoney = $NDVMEDIA->tru("users", "money", $sotien, " `username` = '".$getUser['username']."' ");
        if($isMoney)
        {
            $isOrder = $NDVMEDIA->insert("orders_bandv", [
                'username' => $getUser['username'],
                'dichvu'   => $group['title'],
                'money'    => $sotien,
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
                    'sotienthaydoi' =>$sotien,
                    'sotiensau'     => $getUser['money'] - $sotien,
                    'thoigian'      => gettime(),
                    'noidung'       => 'Đặt hàng gói ('.$group['title'].')',
                    'username'      => $getUser['username']
                ));
                $NDVMEDIA->tru("magiamgia", "solan", '1', " `code` = '".$magiamgia."' ");
                $resone = 'Đặt hàng gói ('.$group['title'].')';
                webhookcaythue($resone, $getUser['username'], $ghichu);
                sendTelegramMessage("Thanh toán thành công! Người dùng: " . $getUser['username'] . ", Gói dịch vụ: " . $group['title'] . ", Số tiền: " . $sotien);
                msg_success("Thanh toán thành công!", (""), 1000);
            }
            else
            {
                $NDVMEDIA->cong("users", "money", $sotien, " `username` = '".$getUser['username']."' ");
                msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
            }
        }
        else
        {
            msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
        }
    }