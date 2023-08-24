<?php

include 'config.php';

session_start();
  if (!isset($_SESSION['logged_user'])) {
    header('Location: login/login.php');
  }

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE FROM `orders` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      $message[] = 'заказ был удален';
   }else{
      $message[] = 'ошибка';
   };
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аккумулятор орталығы</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<!---->


<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i onclick="this.parentElement.style.display = `none`;">x</i> </div>';
   };
};

?>

    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://akk-o.kz/"><img src="images/logo.png" class="logo" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="font-size:160%;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="https://akk-o.kz/" style="font-size:160%;">Главная</a> &nbsp&nbsp&nbsp
                        <a class="nav-link" style="font-size:160%;" href="admin.php">Админ</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container3">

        <section class="display-product-table">
            <table>
                <thead>
                    <th>имя</th>
                    <th>номер</th>
                    <th>аккумулятор</th>
                    <th>оплата</th>
                    <th>доставка</th>
                    <th>метод</th>
                    <th>время добавления</th>
                    <th>действие</th>
                </thead>
                
                <tbody>
                    <?php
                    
                    $select_messages = mysqli_query($con, "SELECT * FROM `orders`");
                    if(mysqli_num_rows($select_messages) > 0){
                        while($row = mysqli_fetch_assoc($select_messages)){
                    ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['battery']; ?></td>
                        <td><?php echo $row['payment']; ?></td>
                        <td><?php echo $row['delivery']; ?></td>
                        <td><?php echo $row['method']; ?></td>
                        <td><?php echo $row['add_date']; ?></td>
                        <td>
                            <a href="order-admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('вы точно хотите это удалить?');"> <i class="fas fa-trash"></i> удалить </a>
                        </td>
                    </tr>
                    <?php
                    };    
                }
                ?>
                </tbody>
            </table>
        </section>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>