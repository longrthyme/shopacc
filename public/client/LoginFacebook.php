<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
    require_once("../../class/FaceBook/autoload.php");
    if($NDVMEDIA->site('app_id') == '' || $NDVMEDIA->site('app_secret') == '') { die('');
}
    $fb = new Facebook\Facebook ([
  'app_id' => $NDVMEDIA->site('app_id'), // ID ứng dụng
  'app_secret' => $NDVMEDIA->site('app_secret'), // Khóa bí mật của ứng dụng
  'default_graph_version' => 'v19.0', // UPDATE V MỚI NHẤT
  ]);
  
$domain = 'https://'.$_SERVER['SERVER_NAME'].'/loginfacebook'; // LINK CALLBACK GỬI LÊN PHẢI TRÙNG VỚI LINK ĐÃ CẬP NHẬP TRONG FACEBOOK
$helper = $fb->getRedirectLoginHelper();
if (isset($_GET['state'])) {
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);
}

try {
$accessToken = $helper->getAccessToken($domain);
//$accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
    
    $permissions = array('public_profile','email'); // Optional permissions
    $loginUrl = $helper->getLoginUrl($domain,$permissions);
    header("Location: ".$loginUrl);  
  exit;
}

try {
  // Returns a `Facebook\FacebookResponse` object
  $fields = array('id', 'name', 'email');
//  $response = $fb->get('/me?fields='.implode(',', $fields).'', $accessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$response = $fb->get('/me?fields=id,name,email,gender', $accessToken);
$fb_name = $response->getGraphUser()['name'];
$email = $response->getGraphUser()['email'];
$fb_id = $response->getGraphUser()['id'];
//$sex = $response->getGraphUser()['sex'];

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$api = mt_rand(10000, 99999).random($chars, 8);
$api = sha1($api);
$time = time();
$passmd5 = md5($fb_id);

$CheckUser = $NDVMEDIA->get_row("SELECT * FROM `users` WHERE `username` = '$fb_id' ");
if($CheckUser){
  $_SESSION['username'] = $fb_id; // ĐỂ TẠO
    }
    else
    {
        $create = $NDVMEDIA->insert("users", [
            'username'      => $fb_name,
            'email'         => $email,
            'password'      => md5($fb_id),
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

?>