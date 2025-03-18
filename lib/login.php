<?php
$NDVMEDIA = new DB();

if (!isset($_SESSION['admin_login'])) {
    redirect(base_url('admin/login'));
} else {
    $getUser = $NDVMEDIA->get_row(" SELECT * FROM `users` WHERE `username` = '".$_SESSION['username']."' AND `level` = 'admin' ");
    // hẹ thống tạo website by ndvmedia
    if (!$getUser) {
        redirect(base_url(''));
    }
    // chuyển hướng khi bị khoá tài khoản
    if ($getUser['banned'] != 0) {
        redirect(base_url('common/banned'));
    }
    // khoá tài khoản trường hợp âm tiền, tránh bug
    if ($getUser['money'] < 0) {
        $NDVMEDIA->update("users", [
            'banned' => 1
        ], " `id` = '".$getUser['id']."' ");
        redirect(base_url('common/banned'));
    }
    if($NDVMEDIA->site('status_security') == 1){
        if(!$NDVMEDIA->get_row("SELECT * FROM `ip_security` WHERE `ip` = '".myip()."' ")){
            redirect(base_url('common/block'));
        }
    }
    /* cập nhật thời gian online */
    $NDVMEDIA->update("users", [
        'time_session'  => time()
    ], " `id` = '".$getUser['id']."' ");
}
