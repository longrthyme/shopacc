<?php 
    require_once __DIR__.'/../../../display/config.php';
    require_once __DIR__.'/../../../display/function.php';
    require_once __DIR__.'/../../../includes/login-admin.php';

    if(isset($_POST['id']))
    {
        $id = check_string($_POST['id']);
        $user = $NDVMEDIA->get_row("SELECT * FROM `groups` WHERE `id` = '$id' ");
        if(!$user)
        {
            $data = json_encode([
                'status'    => 'error',
                'msg'       => 'Nhóm này không tồn tại trong hệ thống.'
            ]);
            die($data);
        }
        $isRemove = $NDVMEDIA->remove("groups", " `id` = '$id' ");
        if($isRemove)
        {
            unlink(check_string('../../..'.$row['img']));
            $data = json_encode([
                'status'    => 'success',
                'msg'       => 'Xóa nhóm thành công.'
            ]);
            die($data);
        }
    }
    else
    {
        $data = json_encode([
            'status'    => 'error',
            'msg'       => 'Xóa nhóm thất bại.'
        ]);
        die($data);
    }