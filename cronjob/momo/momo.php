<?php
    require_once("../display/config.php");
    require_once("../display/function.php");
    
    if($NDVMEDIA->site('api_momo') == '')
    {
        die('Thiếu API');
    }
    if(time() - $NDVMEDIA->site('check_time_cron') < 10)
    {
        die('Không thể cron vào lúc này!');
    }
    $NDVMEDIA->update("options", [
        'value' => time()
    ], " `name` = 'check_time_cron' ");
    $token = $NDVMEDIA->site('api_momo');
    $response = curl_get('https://apiv3.web2m.com/historyapimomo/'.$token.'');
    echo $response;
    $result = json_decode($response, true);

    foreach($result['momoMsg']['tranList'] as $data)
    {
        $partnerId      = $data['partnerId'];               // SỐ ĐIỆN THOẠI CHUYỂN
        $comment        = $data['comment'];                 // NỘI DUNG CHUYỂN TIỀN
        $tranId         = $data['tranId'];                  // MÃ GIAO DỊCH
        $partnerName    = $data['partnerName'];             // TÊN CHỦ VÍ
        $id             = parse_order_id($comment);         // TÁCH NỘI DUNG CHUYỂN TIỀN
        $amount         = $data['amount'];


        if ($id)
        {
            $row = $NDVMEDIA->get_row(" SELECT * FROM `users` WHERE `id` = '$id' ");
            if($row['id'])
            {
                if($NDVMEDIA->num_rows(" SELECT * FROM `momo` WHERE `tranId` = '$tranId' ") == 0)
                {
                    $create = $NDVMEDIA->insert("momo", array(
                        'tranId'        => $tranId,
                        'username'      => $row['username'],
                        'comment'       => $comment,
                        'time'          => gettime(),
                        'partnerId'     => $partnerId,
                        'amount'        => $amount,
                        'partnerName'   => $partnerName
                    ));
                    if ($create)
                    {
                        $isCheckMoney = $NDVMEDIA->cong("users", "money", $amount, " `username` = '".$row['username']."' ");

                        if($isCheckMoney)
                        {
                            $NDVMEDIA->cong("users", "total_money", $amount, " `username` = '".$row['username']."' ");
                            $NDVMEDIA->insert("dongtien", array(
                                'sotientruoc'   => $row['money'],
                                'sotienthaydoi' => $amount,
                                'sotiensau'     => $row['money'] + $amount,
                                'thoigian'      => gettime(),
                                'noidung'       => 'Nạp tiền tự động qua ví MOMO ('.$tranId.')',
                                'username'      => $row['username']
                            ));
                        }
                    }
                }
            }
        }
    }