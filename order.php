
<?php
require 'config.php';

$token = "5959169999:AAFFWMzU0eSRoRDXWFc8juzNi3HiTpx6QME";
$chat_id = "-1001742607911";

if (isset($_POST['order']))
{
    $timezone = new DateTimeZone('Etc/GMT-6');
    $date = new DateTime('now', $timezone);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $battery = mysqli_real_escape_string($con, $_POST['battery']);
    $payment = mysqli_real_escape_string($con, $_POST['payment']);
    $delivery = mysqli_real_escape_string($con, $_POST['delivery']);
    $method = mysqli_real_escape_string($con, $_POST['method']);

    $txt = "📢 Заявка от *{$date->format('d.m.Y, H:i:s')}* — " .
           "🔹 Имя: *$name* — " .
           "📞 Телефон: [$phone](tel:$phone) ";

    if (!empty($battery)) {
        $txt .= "— 🔋 Аккумулятор: *$battery* ";
    }

    if ($payment == "cash") $payment = "Наличными";
    else if ($payment == "kaspi") $payment = "Переводом";
    else $payment = "Картой";

    if (!empty($payment)) {
        $txt .= "— 💳 Оплата: *$payment* ";
    }

    if ($delivery == "delivery") $delivery = "Да";
    else $delivery = "Самовывоз";

    if (!empty($delivery)) {
        $txt .= "— 🚚 Доставка: *$delivery* ";
    }

    if ($method == "total") $method = "Полная цена";
    else $method = "Сдать старый";

    if (!empty($method)) {
        $txt .= "— 🛠 Способ: *$method* ";
    }

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&parse_mode=markdown&text=$txt");

    $query = mysqli_query($con, "INSERT INTO orders (name, phone, battery, payment, delivery, method) VALUES ('$name','$phone','$battery','$payment','$delivery','$method')");

    if (!$query) {
        die("Ошибка: " . mysqli_error($con));
    }

    echo "<script>alert('Ваша заявка была отправлена');document.location='https://akk-o.kz/'</script>";
}

?>
