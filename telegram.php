<?php

/* https://api.telegram.org/bot1033022399:AAF2md-XIv--F3tujX6UuHnEiehbEZny7HY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['input-email'];
$text = $_POST['input-text'];
$token = "1033022399:AAF2md-XIv--F3tujX6UuHnEiehbEZny7HY";
$chat_id = "-394756670"; //-394756670 401815738
$arr = array(
  'Email: ' => $name,
  'Заявка: ' => $text
);


if(empty($name)) {
    echo "enter name <a href='index.html'>ENTER</a>";
} elseif(empty($text)) {
    echo "enter text <a href='index.html'>ENTER</a>";
} else {



foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");



if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
    }
?>
