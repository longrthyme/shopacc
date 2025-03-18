<?php
    require_once("../display/config.php");
    require_once("../display/function.php");


    if ( isset($_GET['request_id']) && isset($_GET['status']) )
    {
        $code = check_string($_GET['request_id']);
        $row = $NDVMEDIA->get_row(" SELECT * FROM `cards` WHERE `code` = '$code' AND `status` = 'xuly' ");
        $thucnhan = check_string($_GET['value']);
        if ($_GET['status'] == 1)
        {
            /* CẬP NHẬT TRẠNG THÁI THẺ CÀO */
            $NDVMEDIA->update("cards", array(
                'status'    => 'thanhcong',
                'thucnhan'  => $thucnhan
            ), " `id` = '".$row['id']."' ");

            $row_user = $NDVMEDIA->get_row(" SELECT * FROM `users` WHERE `username` = '".$row['username']."' ");

            /* CỘNG TIỀN USER */
            $NDVMEDIA->cong("users", "money", $thucnhan, " `id` = '".$row_user['id']."' ");
            $NDVMEDIA->cong("users", "total_money", $thucnhan, " `id` = '".$row_user['id']."' ");
            /* GHI LOG DÒNG TIỀN */
            $NDVMEDIA->insert("dongtien", array(
                'sotientruoc' => $row_user['money'] + $thucnhan,
                'sotienthaydoi' => $thucnhan,
                'sotiensau' => $row_user['money'],
                'thoigian' => gettime(),
                'noidung' => 'Nạp tiền tự động qua thẻ cào seri ('.$row['seri'].')',
                'username' => $row_user['username']
            ));
        }
        else
        {
            /* CẬP NHẬT TRẠNG THÁI THẺ CÀO */
            $NDVMEDIA->update("cards", array(
                'status'    => 'thatbai',
                'thucnhan'  => '0'
            ), " `id` = '".$row['id']."' ");

        }
    }
    else
    {   
        echo json_encode(array('status' => "error", 'msg' => "Code by NDVMEDIA"));
    }
