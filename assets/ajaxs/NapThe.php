<?php
// NGUYENTANDATVN.COM 
    require_once("../../display/config.php");
    require_once("../../display/function.php");

    $loaithe = check_string($_POST['loaithe']);
    $menhgia = check_string($_POST['menhgia']);
    $seri = check_string($_POST['seri']);
    $pin = check_string($_POST['pin']);

    if(empty($_SESSION['username']))
    {
        msg_error("Vui lòng đăng nhập ", BASE_URL(''), 2000);
    }
    if(empty($loaithe))
    {
        msg_error2("Vui lòng chọn loại thẻ");
    }
    if(empty($menhgia))
    {
        msg_error2("Vui lòng chọn mệnh giá");
    }
    if(empty($seri))
    {
        msg_error2("Vui lòng nhập seri thẻ");
    }
    if(empty($pin))
    {
        msg_error2("Vui lòng nhập mã thẻ");
    }
    if (strlen($seri) < 5 || strlen($pin) < 5)
    {
        msg_error2("Mã thẻ hoặc seri không đúng định dạng!");
    }
    $request_id= rand(000000000,999999999);
     $url = 'https://thesieure.com/chargingws/v2?sign='.md5($NDVMEDIA->site('Partner_Key').$pin.$seri).'&telco='.$loaithe.'&code='.$pin.'&serial='.$seri.'&amount='.$menhgia.'&request_id='.$request_id.'&partner_id='.$NDVMEDIA->site('Partner_ID').'&command=charging'; //URL GET
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($data, true);
        if ($obj['status'] == 100)
        {
            msg_error2($obj['message']);
        }
        elseif ($obj['status'] == 99)
        {
            $NDVMEDIA->insert("cards", array(
                'code' => $request_id,
                'seri' => $seri,
                'pin'  => $pin,
                'loaithe' => $loaithe,
                'menhgia' => $menhgia,
                'thucnhan' => '0',
                'username' => $getUser['username'],
                'status' => 'xuly',
                'note' => '',
                'createdate' => gettime()
            ));
            msg_success("Nạp thẻ thành công, đang chờ kết quả!", "", 2000);
        }
        else
        {
            msg_error2($obj['message']);
        }