<?php
require_once("../../display/config.php");
    require_once("../../display/function.php");
require $_SERVER['DOCUMENT_ROOT'] . '/lib/BiasedRandom/Element.php';
require $_SERVER['DOCUMENT_ROOT'] . '/lib/BiasedRandom/Randomizer.php';
$id = intval($_POST['id_vongquay']);
$numrolllop = intval($_POST['numrolllop']); // Lấy số lần quay từ request

$wheel = $NDVMEDIA->get_row("SELECT * FROM `mini_game` WHERE `id` = '$id' ");
$randomizer = new Randomizer();
$randomizer->add(new Element('1', gift($id, 1, 'tyle')))
    ->add(new Element('2', gift($id, 2, 'tyle')))
    ->add(new Element('3', gift($id, 3, 'tyle')))
    ->add(new Element('4', gift($id, 4, 'tyle')))
    ->add(new Element('5', gift($id, 5, 'tyle')))
    ->add(new Element('6', gift($id, 6, 'tyle')))
    ->add(new Element('7', gift($id, 7, 'tyle')))
    ->add(new Element('8', gift($id, 8, 'tyle')));

$gifts = [];
$total_price = $wheel['price'] * $numrolllop; // Tính tổng giá

for ($i = 0; $i < $numrolllop; $i++) {
    $cmsnav = $randomizer->get();
    $location = 0;
    switch ($cmsnav) {
        case '1':
            $location = 360;
            break;
        case '2':
            $location = 320;
            break;
        case '3':
            $location = 270;
            break;
        case '4':
            $location = 230;
            break;
        case '5':
            $location = 180;
            break;
        case '6':
            $location = 130;
            break;
        case '7':
            $location = 85;
            break;
        case '8':
            $location = 44;
            break;
    }
    $rb = $rb + gift($id, $cmsnav, 'kimcuong');
    $gifts[] = [
        'item' => $cmsnav,
        'location' => $location,
        'msg' => gift($id, $cmsnav, 'text'),
        'robux' => $rb,
    ];

    // CỘNG VẬT PHẨM
    $item = gift($id, $cmsnav, 'kimcuong');
    $NDVMEDIA->cong("users", "robux", $item, " `username` = '".$getUser['username']."' ");
    $NDVMEDIA->insert("lichsuvongquay", array(
    'username'  => $getUser['username'],
    'id_game' => $id,
    'soluong'   => $numrolllop,
    'time'      => date('Y/m/d H:i:s'),
    'NA_trathuong' => number_format($item).' RB$'
));
}

if (empty($_SESSION['username'])) {
    $status = 3;
} elseif ($total_price > $getUser['money']) {
    $status = 4;
} else {
    $status = 1;
    // TRỪ TIỀN
    $NDVMEDIA->tru("users", "money", $total_price, " `username` = '".$getUser['username']."' ");
    // GHI LOG DÒNG TIỀN
    $NDVMEDIA->insert("dongtien", array(
        'sotientruoc'   => $getUser['money'] + $total_price,
        'sotienthaydoi' => $total_price,
        'sotiensau'     => $getUser['money'],
        'thoigian'      => gettime(),
        'noidung'       => 'Thực hiện ('.$wheel['name'].')',
        'username'      => $getUser['username']
    ));
    // CỘNG LƯỢT QUAY
    $NDVMEDIA->cong("mini_game", "sudung", $numrolllop, " `id` = '$id' ");
}

// Xuất thông báo cho từng phần quà
echo json_encode([
    'status' => $status,
    'num' => $numrolllop,
    'price' => number_format($total_price).'đ',
    'location' => $location,
    'gifts' => $gifts,
    'tong' => number_format($rb).' RB$',
]);
?>
