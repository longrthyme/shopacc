<?php 
    require_once __DIR__.'/../../../display/config.php';
    require_once __DIR__.'/../../../display/function.php';
    require_once __DIR__.'/../../../includes/login-admin.php';

    if(isset($_POST['id']))
    {
        $id = check_string($_POST['id']);
        $user = $NDVMEDIA->get_row("SELECT * FROM `momo` WHERE `id` = '$id' ");
        if(!$user)
        {
            $data = json_encode([
                'status'    => 'error',
                'msg'       => 'Hóa đơn không tồn tại trong hệ thống'
            ]);
            die($data);
        }
        $isRemove = $NDVMEDIA->update("momo", [
            'deletedate'    => gettime()
        ], " `id` = '$id' ");
        if($isRemove)
        {
            $data = json_encode([
                'status'    => 'success',
                'msg'       => 'Xóa hóa đơn thành công.'
            ]);
            die($data);
        }
    }
    else
    {
        $data = json_encode([
            'status'    => 'error',
            'msg'       => 'Xóa hóa đơn thất bại.'
        ]);
        die($data);
    }