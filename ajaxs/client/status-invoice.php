<?php

define("IN_SITE", true);

require_once(__DIR__."/../../display/config.php");
require_once(__DIR__."/../../libs/lang.php");
require_once(__DIR__."/../../libs/helper.php");

$NDVMEDIA = new NDVMEDIA;
 


if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    $row = $NDVMEDIA->get_row("SELECT * FROM `invoices` WHERE `trans_id` = '".check_string($_GET['trans_id'])."' ");
    die(json_encode([
        'status' => display_invoice($row['status']), 
        'return' => $row['status']
    ]));

}
 