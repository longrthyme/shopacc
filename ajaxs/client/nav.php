<?php

define("IN_SITE", true);

require_once("../../display/config.php");
require_once("../../display/function.php");

$tphatdev = new NDVMEDIA();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $type = $_POST['action'];
    
    if($type == 'taohoadon') {
        $id_bank = $_POST['type'];
        $amount = $_POST['amount'];  // Correct the typo here
        $trans_id = random('QWERTYUOPASDFHJKLZXCVBNM',5);
        if (empty($id_bank)) {
        die(json_encode([
            'status' => 'error',
            'msg' => 'Vui lòng chọn phương thức thanh toán!'
        ]));
    }
        $isInsert = $tphatdev->insert("invoices", array(
                'type' => 'deposit_money',
                'user_id' =>  $getUser['id'],
                'trans_id' => $trans_id,
                'payment_method' => $id_bank,
                'amount' => $amount, 
                'pay' => $amount,
                'create_date' => gettime(),
                'update_date' => gettime(),
                'create_time' => time(),
                'update_time' => time()
            ));
            
        if($isInsert == true) {
            die(json_encode([
                'status' => 'success',
                'msg' => 'Tạo hóa đơn thành công !',
                'trans_id' => $trans_id
            ]));
        } else {
            die(json_encode([
                'status' => 'error',
                'msg' => 'Có lỗi xảy ra trong quá trình xử lý !',
                'error' => $isInsert,  // Include the error message
                'trans_id' => $trans_id
            ]));
        }
    }
}
