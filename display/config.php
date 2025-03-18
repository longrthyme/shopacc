<?php
session_start();
$base_url = 'https://v2.fuong.net/'; // Thay url web bạn
class NDVMEDIA
{
    private $ketnoi;
    function connect()
    {
        if (!$this->ketnoi)
        {
            $this->ketnoi = mysqli_connect('localhost', 'user1', '123456Long*', 'shopacc') or die ('ĐƠN VỊ THIẾT KẾ FUONG.NET!');
            mysqli_query($this->ketnoi, "set names 'utf8'");
        }
    }
    function dis_connect()
    {
        if ($this->ketnoi)
        {
            mysqli_close($this->ketnoi);
        }
    }
    
    function getUser($username)
    {
        $this->connect();
        $row = $this->ketnoi->query("SELECT * FROM `users` WHERE `username` = '$username' ")->fetch_array();
        return $row;
    }
     
    function site($data)
    {
        $this->connect();
        $row = $this->ketnoi->query("SELECT * FROM `options` WHERE `name` = '$data' ")->fetch_array();
        return $row['value'];
    }
    function query($sql)
    {
        $this->connect();
        $row = $this->ketnoi->query($sql);
        return $row;
    }
    function cong($table, $data, $sotien, $where)
    {
        $this->connect();
        $row = $this->ketnoi->query("UPDATE `$table` SET `$data` = `$data` + '$sotien' WHERE $where ");
        return $row;
    }
    function tru($table, $data, $sotien, $where)
    {
        $this->connect();
        $row = $this->ketnoi->query("UPDATE `$table` SET `$data` = `$data` - '$sotien' WHERE $where ");
        return $row;
    }
    function insert($table, $data)
    {
        $this->connect();
        $field_list = '';
        $value_list = '';
        foreach ($data as $key => $value)
        {
            $field_list .= ",$key";
            $value_list .= ",'".mysqli_real_escape_string($this->ketnoi, $value)."'";
        }
        $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
 
        return mysqli_query($this->ketnoi, $sql);
    }
    function update($table, $data, $where)
    {
        $this->connect();
        $sql = '';
        foreach ($data as $key => $value)
        {
            $sql .= "$key = '".mysqli_real_escape_string($this->ketnoi, $value)."',";
        }
        $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
        return mysqli_query($this->ketnoi, $sql);
    }
    function update_value($table, $data, $where, $value1)
    {
        $this->connect();
        $sql = '';
        foreach ($data as $key => $value){
            $sql .= "$key = '".mysqli_real_escape_string($this->ketnoi, $value)."',";
        }
        $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where.' LIMIT '.$value1;
        return mysqli_query($this->ketnoi, $sql);
    }
    function remove($table, $where)
    {
        $this->connect();
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->ketnoi, $sql);
    }
    function get_list($sql)
    {
        $this->connect();
        $result = mysqli_query($this->ketnoi, $sql);
        if (!$result)
        {
            die ('Câu truy vấn bị sai');
        }
        $return = array();
        while ($row = mysqli_fetch_assoc($result))
        {
            $return[] = $row;
        }
        mysqli_free_result($result);
        return $return;
    }
    function get_row($sql)
    {
        $this->connect();
        $result = mysqli_query($this->ketnoi, $sql);
        if (!$result)
        {
            die ('Câu truy vấn bị sai');
        }
        $row = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if ($row)
        {
            return $row;
        }
        return false;
    }
    function num_rows($sql)
    {
        $this->connect();
        $result = mysqli_query($this->ketnoi, $sql);
        if (!$result)
        {
            die ('Câu truy vấn bị sai');
        }
        $row = mysqli_num_rows($result);
        mysqli_free_result($result);
        if ($row)
        {
            return $row;
        }
        return false;
    }
}

if (isset($_SESSION['username'])) 
{ 
    $NDVMEDIA = new NDVMEDIA;
    $getUser = $NDVMEDIA->get_row(" SELECT * FROM users WHERE username = '".$_SESSION['username']."' ");
    $my_username = True;
    $my_money = $getUser['money'];
    $my_level = $getUser['level'];
    if(!$getUser)
    {
        session_start();
        session_destroy();
        header('location: /');
    }
    if ($getUser['money'] < 0)
    {
        $NDVMEDIA->update("users", array(
            'banned' => 1
        ), "username = '".$_SESSION['username']."' ");
        session_start();
        session_destroy();
        header('location: /');
        die();
    }
}
else
{
    $my_level = NULL;
    $my_money = 0;
}
function CheckLogin()
{
    global $my_username;
    if($my_username != True)
    {
        return die('<script type="text/javascript">setTimeout(function(){ location.href = "'.BASE_URL('').'" }, 0);</script>');
    }
}
function sendDiscordMessage($message) {
    $webhookUrl = "https://discord.com/api/webhooks/";
    
    $json_data = json_encode([
        "content" => $message
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    
    $ch = curl_init($webhookUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-type: application/json']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}

function CheckAdmin()
{
    global $my_level;
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
    $baseUrl = $_SERVER['HTTP_HOST'];
   
    if($my_level != 'admin')
    {
        die('<script type="text/javascript">setTimeout(function(){ location.href = "'.BASE_URL('').'" }, 0);</script>');
    } else {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $message = "Admin $username vừa đăng nhập vào hệ thống $baseUrl";
        sendDiscordMessage($message);
    }
}