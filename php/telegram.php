<?php

/* https://api.telegram.org/bot581725758:AAFaS-pXHD3rARfWFO9QknDMgKDZ1_jhi-U/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$text = $_POST['textarea'];
$token = "581725758:AAFaS-pXHD3rARfWFO9QknDMgKDZ1_jhi-U";
$chat_id = "-25115028";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение' => $textarea
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>