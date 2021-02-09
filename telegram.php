<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$tariff = $_POST['tariff'];
$token = "1394684525:AAG4TA_Ff8WYn8YCH4qwlXlQkLFzXREw8qY";
$chat_id = "-511971265";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Тариф' => $tariff,

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>
