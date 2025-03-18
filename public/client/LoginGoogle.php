<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
    require_once("../../class/GooGle/vendor/autoload.php");
     if($NDVMEDIA->site('client_id_gg') == '' || $NDVMEDIA->site('client_secret_gg
') == '') { die('');
}
    // Lấy những giá trị này từ https://console.cloud.google.com/apis/dashboard
$client_id = $NDVMEDIA->site('client_id_gg'); // ID GG
$client_secret = $NDVMEDIA->site('client_secret_gg
'); // SECRET GG
$redirect_uri = 'https://'.$_SERVER['SERVER_NAME'].'/logingoogle'; // LINK CALLBACK NHẬN DỮ LIỆU
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");
$service = new Google_Service_Oauth2($client);
    if (isset($_GET['code'])) 
    {
        $client->authenticate($_GET['code']);
        $_SESSION['access_token'] = $client->getAccessToken();
        $user = $service->userinfo->get();
        $taikhoan = $user->id;
        $email = $user->email;
        
        $CheckUser = $NDVMEDIA->get_row("SELECT * FROM `users` WHERE `email` = '$email' ");
        if($CheckUser)
        {
            $_SESSION['username'] = $user; // ĐỂ TẠO
        }
    else
    {
        $create = $NDVMEDIA->insert("users", [
            'username'      => $user,
            'email'         => $email,
            'password'      => '".md5($taikhoan.$email)."',
            'token'         => random('qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM', 64),
            'money'         => 0,
            'total_money'   => 0,
            'banned'        => 0,
            'ip'            => myip(),
            'time'          => time(),
            'createdate'    => gettime()
        ]);
      if($create)
      {
          $_SESSION['username'] = $fb_name;
          header("Location: /");
      }
      else
      {
        die("ERROR: CONTACT DUCVIETIT?. FACEBOOK: fb.com/iamducviet.vn");
      }
        }
        die();
    }

        /*ĐÃ LƯU SESSION KHI LOGIN GG - KO PHẢI SESSION USER WEB*/
        if (isset($_SESSION['access_token'])) {
            unset($_SESSION['access_token']);
          header("Location: /logingoogle");
        } else {
            $authUrl = $client->createAuthUrl();
        }
        if (isset($authUrl)){ 
        header("Location: $authUrl"); /*ĐẨY THẲNG QUA LOGIN GOOGLE*/
        } 