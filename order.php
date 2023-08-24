
<?php
require 'config.php';

$token = "5959169999:AAFFWMzU0eSRoRDXWFc8juzNi3HiTpx6QME";
$chat_id = "-1001742607911";

if (isset($_POST['order']))
{
    $date = new DateTime();

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $battery = mysqli_real_escape_string($con, $_POST['battery']);
    $payment = mysqli_real_escape_string($con, $_POST['payment']);
    $delivery = mysqli_real_escape_string($con, $_POST['delivery']);
    $method = mysqli_real_escape_string($con, $_POST['method']);

    $txt = "Заявка от <b>" . $date->format('d.m.Y, H:i:s') . "</b><br>" .
           "Имя: <b>$name</b><br>" .
           "Телефон: <a href='tel:$phone'>$phone</a><br><br>";

    if (!empty($battery)) {
        $txt .= "Аккумулятор: <b>$battery</b><br>";
    }

    if (!empty($payment)) {
        $txt .= "Оплата: <b>$payment</b><br>";
    }

    if (!empty($delivery)) {
        $txt .= "Доставка: <b>$delivery</b><br>";
    }

    if (!empty($method)) {
        $txt .= "Способ: <b>$method</b>";
    }

    fopen("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&parse_mode=html&text={$txt}","r");

    $query = mysqli_query($con, "INSERT INTO orders (name, phone, battery, payment, delivery, method) VALUES ('$name','$phone','$battery','$payment','$delivery','$method')");

    if (!$query) {
        die("Ошибка: " . mysqli_error($con));
    }

    echo "<script>alert('Ваша заявка была отправлена');document.location='https://akk-o.kz/'</script>";
}

?>
