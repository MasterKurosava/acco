<?php
ob_start(); 
require 'config.php';

$token = "6284813017:AAErB5Urfgqycv35t02wvQmvIGAc-p9g6lI";
$chat_id = "749243435";


if (isset($_POST['contact']))
{
  $timezone = new DateTimeZone('Etc/GMT-6');
  $date = new DateTime('now', $timezone);

  $name = $_POST['name'];
  $phone = $_POST['phone'];

  $txt = "📢 Заявка от *{$date->format('d.m.Y, H:i:s')}* — " .
          "🔹 Имя: *$name* — " .
          "📞 Телефон: [$phone](tel:$phone)";

  $query = mysqli_query($con, "INSERT INTO orders (name,phone,battery,payment,delivery,method) 
  VALUES ('$name','$phone','','','','')");

  file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&parse_mode=markdown&text=$txt");

  echo '<script>alert("Ваша заявка была отправлена"); location.replace(document.referrer);</script>';
}

?>