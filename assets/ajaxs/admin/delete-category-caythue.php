<?php 
   require_once __DIR__.'/../../../display/config.php';
    require_once __DIR__.'/../../../display/function.php';
    require_once __DIR__.'/../../../includes/login-admin.php';

    if(isset($_POST['id']))
    {
        $id = check_string($_POST['id']);
        $row = $NDVMEDIA->get_row("SELECT * FROM `category_caythue` WHERE `id` = '$id' ");
        if(!$row)
        {
            $data = json_encode([
                'status'    => 'error',
                'msg'       => 'Chuyên mục này không tồn tại trong hệ thống.'
            ]);
            die($data);
        }
        $isRemove = $NDVMEDIA->remove("category_caythue", " `id` = '$id' ");
        if($isRemove)
        {
            unlink(check_string('../../..'.$row['img']));
            $data = json_encode([
                'status'    => 'success',
                'msg'       => 'Xóa chuyên mục thành công.'
            ]);
            die($data);
        }
    }
    else
    {
        $data = json_encode([
            'status'    => 'error',
            'msg'       => 'Xóa chuyên mục thất bại.'
        ]);
        die($data);
    }