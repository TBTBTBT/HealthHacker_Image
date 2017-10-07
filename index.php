

<?php
require('image.php');
$rgb =  imageLoder("./tmp/test.jpg");
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;
var_dump($r, $g, $b);
/*
$json_string = file_get_contents('php://input');
$jsonObj = json_decode($json_string);

$replyToken = $jsonObj->{"events"}[0]->{"replyToken"};
$messageId = $jsonObj->{"events"}[0]->{"message"}->{"id"};

//画像ファイルのバイナリ取得
$ch = curl_init("https://api.line.me/v2/bot/message/".$messageId."/content");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
 'Content-Type: application/json; charser=UTF-8',
 'Authorization: Bearer ' . $accessToken
 ));
$result = curl_exec($ch);
curl_close($ch);
*/
//画像ファイルの作成  

/*
//そのまま画像をオウム返しで送信  
 $response_format_text = [
 "type" => "image",
 "originalContentUrl" => "【画像ファイルのパス】/img/test.jpg",
 "previewImageUrl" => "【画像ファイルのパス】/img/test.jpg"
 ];

$post_data = [
"replyToken" => $replyToken,
"messages" => [$response_format_text]
];
 
$ch = curl_init("https://api.line.me/v2/bot/message/reply");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
 'Content-Type: application/json; charser=UTF-8',
 'Authorization: Bearer ' . $accessToken
 ));
$result = curl_exec($ch);
curl_close($ch);*/
?>