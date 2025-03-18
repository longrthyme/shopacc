<?php
    require_once("../display/config.php");
    require_once("../display/function.php");


    if($NDVMEDIA->site('api_bank') == '')
    {
        die('Thiếu API');
    }
    if(time() - $NDVMEDIA->site('check_time_cron_bank') < 10)
    {
        die('Thao tác quá nhanh!');
    }
    $NDVMEDIA->update("options", [
        'value' => time()
    ], " `name` = 'check_time_cron_bank' ");
    
    $api = $NDVMEDIA->site('api_link');
    $version = $NDVMEDIA->site('api_version');
    $token = $NDVMEDIA->site('api_bank');
    $stk = $NDVMEDIA->site('stk_bank');
    $mk = $NDVMEDIA->site('mk_bank');
    $result = curl_get("$api/$version/$mk/$stk/$token");
    $result = json_decode($result, true);
    if($result['status'] != 'success')
    {
        die('Lấy dữ liệu thất bại');
    }
    foreach($result['transactions'] as $data)
    {
        $des = $data['description'];
        $amount = str_replace(',' ,'', $data['amount']);
        $tid = $data['transactionID'];
        $id = parse_order_id($des);
        
        $file = @fopen('bank423.txt', 'a');
        if ($file)
        {
            $data = "tid => $tid description => $des ($id) amount => $amount ".PHP_EOL;
            fwrite($file, $data);
        }
        if ($id)
        {
            $row = $NDVMEDIA->get_row(" SELECT * FROM `users` WHERE `id` = '$id' ");
            if($row['username'])
            {
                if($NDVMEDIA->num_rows(" SELECT * FROM `bank_auto` WHERE `tid` = '$tid' ") == 0)
                {
                    /* GHI LOG BANK AUTO */
                    $create = $NDVMEDIA->insert("bank_auto", array(
                        'tid' => $tid,
                        'description' => $des,
                        'amount' => $amount,
                        'time' => gettime(),
                        'username' => $row['username']
                        ));
                    if ($create)
                    {
                        $real_amount = $amount + $amount * $NDVMEDIA->site('ck_bank') / 100;
                        $isCheckMoney = $NDVMEDIA->cong("users", "money", $real_amount, " `username` = '".$row['username']."' ");
                        if($isCheckMoney)
                        {
                            $NDVMEDIA->cong("users", "total_money", $real_amount, " `username` = '".$row['username']."' ");
                            /* GHI LOG DÒNG TIỀN */
                            $NDVMEDIA->insert("dongtien", array(
                                'sotientruoc' => $row['money'],
                                'sotienthaydoi' => $real_amount,
                                'sotiensau' => $row['money'] + $real_amount,
                                'thoigian' => gettime(),
                                'noidung' => 'Nạp tiền tự động ngân hàng (Vietcombank | '.$tid.')',
                                'username' => $row['username']
                            ));
                        }
                    }
                }
            }
        }    
    }

