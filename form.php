<?php
ob_start(); 
require 'config.php';

$message = 'новая заявка';
$token = "5959169999:AAFFWMzU0eSRoRDXWFc8juzNi3HiTpx6QME";
$chat_id = "-1001742607911";
$arr = array(
  'Сообщение:' => $message
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if (isset($_POST['contact']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    $query = mysqli_query($con, "INSERT INTO orders (name,phone,battery,payment,delivery,method) 
    VALUES ('$name','$phone','','','','')");
    echo '<script>alert("Ваша заявка была отправлена"); location.replace(document.referrer);</script>';
}

?>