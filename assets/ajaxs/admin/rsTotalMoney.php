<?php 
    require_once __DIR__.'/../../../display/config.php';
    require_once __DIR__.'/../../../display/function.php';
    require_once __DIR__.'/../../../includes/login-admin.php';

    if(isset($_POST['action']))
    {
        $isUpdate = $NDVMEDIA->update("users", [
            'total_money'    => 0
        ], " `total_money` > 0 ");
        if($isUpdate)
        {
            $data = json_encode([
                'status'    => 'success',
                'msg'       => 'Reset top nạp thành công!'
            ]);
            die($data);
        }
        else
        {
            $data = json_encode([
                'status'    => 'error',
                'msg'       => 'Reset top nạp thất bại!'
            ]);
            die($data);
        }
    }
    else
    {
        $data = json_encode([
            'status'    => 'error',
            'msg'       => 'Hành động không tồn tại'
        ]);
        die($data);
    }
 