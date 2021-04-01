

<?php

/* https://api.telegram.org/bot1515531850:AAHY56j2Jk5cwv5GGNFYy1V3u-4KRqtIAJo/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$token = "1515531850:AAHY56j2Jk5cwv5GGNFYy1V3u-4KRqtIAJo";
$chat_id = "-538427452";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение' => $message
);

foreach($arr as $key => $value) {
  $txt .= " "<b>".$key."</b> ".$value."%0A" ";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    echo '<h1 class="success">Спасибо за отправку вашего сообщения!</h1>';
} else {
  echo "Error";
}
?>