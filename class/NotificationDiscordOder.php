<?php 
    require_once("../config/config.php");
    require_once("../config/function.php");

function webhookautorobux($service, $username) {
    $url = "https://discord.com/api/webhooks/";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***CÓ NGƯỜI VỪA MUA ROBUX***",
        "embeds" => [
            [
                "title" => "SỐ ROBUX KHÁCH MUA",
                "type" => "rich",
                "description" => "**$service**",
                "url" => BASE_URL,
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "SUCCESS"
                ],
                "fields" => [
                    [
                        "name" => "SỐ ROBUX",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}    
function webhookcaythue($service, $username) {
    $url = "https://discord.com/api/webhooks/";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***Có Đơn Đặt Cày Thuê Mới***",
        "embeds" => [
            [
                "title" => "GÓI KHÁCH ĐẶT",
                "type" => "rich",
                "description" => "**$service**",
                "url" => BASE_URL,
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "CTV CÀY THUÊ ĐÂU RÒI LÊN SHOP DUYỆT ĐI MẤY EM"
                ],
                "fields" => [
                    [
                        "name" => "Dịch vụ",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}
function webhookgamepass($service, $username) {
    $url = "https://discord.com/api/webhooks/";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***Có Đơn Đặt Cày Thuê Mới  *** <@894108203674107914>",
        "embeds" => [
            [
                "title" => "GÓI KHÁCH ĐẶT",
                "type" => "rich",
                "description" => "**$service**",
                "url" => BASE_URL,
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "CTV GAMEPASS ĐÂU RÒI LÊN SHOP DUYỆT ĐƠN ĐI NÀO"
                ],
                "fields" => [
                    [
                        "name" => "Dịch vụ",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}
function webhookrobux($service, $username) {
    $url = "https://discord.com/api/webhooks/";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***Có Đơn Đặt Cày Thuê Mới  *** <@894108203674107914>",
        "embeds" => [
            [
                "title" => "GÓI KHÁCH ĐẶT",
                "type" => "rich",
                "description" => "**$service**",
                "url" => BASE_URL,
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "CTV ROBUX ĐÂU RÒI LÊN SHOP DUYỆT ĐƠN ĐI NÀO"
                ],
                "fields" => [
                    [
                        "name" => "Dịch vụ",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}