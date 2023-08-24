<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аккумулятор орталығы</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<!---->


<body>
    
<div class="popup">

<?php
if(isset($_GET['buy'])){
    $buy_id = $_GET['buy'];
    $buy_query = mysqli_query($con, "SELECT * FROM `batteries` WHERE id = $buy_id");
    if(mysqli_num_rows($buy_query) > 0){
        while($fetch_edit = mysqli_fetch_assoc($buy_query)){
?>

            <form action="order.php" method="post">
                <div class="close-btn" onclick="history.back()">x</div>
                <div class="form">
                    <h2>Оставить заявку</h2>

                    <div class="form-element">
                        <input type="text" name="battery" class="input w-100" value="<?php echo $fetch_edit['name']; ?>" placeholder="Название аккумулятора" required/>
                    </div>
                    
                    <div class="form-element">
                        <input type="text" name="name" class="input w-100" placeholder="ФИО" required/>
                    </div>
                
                    <div class="form-element">
                        <input type="tel" name="phone" class="input w-100" placeholder="Номер телефона" required/>  
                    </div>
                
                    <div class="form-element">  
                        <select name="payment" class="input w-100" required>
                            <option value="" selected disabled>Способ оплаты</option>
                            <option value="cash">Наличные</option>
                            <option value="card">Банковская карта</option>
                        </select>
                    </div>

                    <div class="form-element">
                        <select name="delivery" class="input w-100" required>
                            <option value="" selected disabled>Способ доставки</option>
                            <option value="delivery">Доставка(бесплатно)</option>
                            <option value="self">Самовывоз</option>
                        </select>
                    </div>

                    <div class="form-element">
                        <select name="method" class="input w-100" required>
                            <option value="" selected disabled>Выбрать опцию</option>
                            <option value="total">Полная цена</option>
                            <option value="discount">Сдать старый(получить скидку)</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn w-100" name="order">Отправить</button>
                    
                </div>
            </form>

            <?php
            };
        };
        echo "<script>document.querySelector('.popup').style.display = 'flex';</script>";
    };
    ?>
</div>

</body>

</html>