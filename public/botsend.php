<?php
session_start();

$apiToken = "6081235005:AAECPLARV5neu7_BpmEAhQUB0j79fQX0qH4";
$data = [
    'chat_id' => '1728805087',
    'parse_mode' => 'html',
    'text' => "Naam: <b>" . $_POST['Naam'] . "</b>\nVraag: <i>" . $_POST['Vraag'] . "</i>",
    // 'reply_to_message_id' => '11',
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
// echo $response;

$resOb = json_decode($response);
$_SESSION['messid_' . $resOb->result->message_id] = $resOb->result->text;

// print_r($_SESSION);
header('Location: bot.php');
?>
