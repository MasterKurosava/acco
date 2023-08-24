<?php

include 'config.php';

session_start();
  if (!isset($_SESSION['logged_user'])) {
    header('Location: login/login.php');
  }

if(isset($_POST['add_sale'])){
   $p_name = $_POST['p_name'];
   $p_old_price = $_POST['p_old_price'];
   $p_new_price = $_POST['p_new_price'];
   $p_current = $_POST['p_current'];
   $p_country = $_POST['p_country'];
   $p_warranty = $_POST['p_warranty'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'batteries/'.$p_image;
   $p_flag = $_FILES['p_flag']['name'];
   $p_flag_tmp_name = $_FILES['p_flag']['tmp_name'];
   $p_flag_folder = 'flags/'.$p_flag;

   $insert_query = mysqli_query($con, "INSERT INTO `sales`(name, old_price, new_price, image,current,country,flag,warranty) VALUES('$p_name', '$p_old_price', '$p_new_price', '$p_image','$p_current','$p_country','$p_flag','$p_warranty')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      move_uploaded_file($p_flag_tmp_name, $p_flag_folder);
      $message[] = 'скидка успешно добавлена';
   }else{
      $message[] = 'ошибка';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE FROM `sales` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      $message[] = 'скидка была удалена';
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
    <!---->


    <div class="container3">
        <section>
            <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>добавить скидку</h3>
                <input type="text" name="p_name" placeholder="название" class="box" required>
                <input type="text" name="p_old_price" min="0" placeholder="старая цена" class="box" required>
                <input type="text" name="p_new_price" min="0" placeholder="новая цена" class="box" required>
                <input type="text" name="p_current" placeholder="пусковой ток" class="box" required>
                <input type="text" name="p_country" placeholder="страна" class="box" required>
                <input type="text" name="p_warranty" placeholder="гарантия" class="box" required>
                <label class="box">Флаг</label>
                <input type="file" name="p_flag" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <label class="box">Аккумулятор</label>
                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <input type="submit" value="добавить" name="add_sale" class="btn">
            </form>
        </section>

        <section class="display-product-table">
            <table>
                <thead>
                    <th>фото</th>
                    <th>название</th>
                    <th>старая цена</th>
                    <th>новая цена</th>
                    <th>пусковой ток</th>
                    <th>страна</th>
                    <th>гарантия</th>
                    <th>флаг</th>
                    <th>действие</th>
                </thead>
                
                <tbody>
                    <?php
                    
                    $select_sales = mysqli_query($con, "SELECT * FROM `sales`");
                    if(mysqli_num_rows($select_sales) > 0){
                        while($row = mysqli_fetch_assoc($select_sales)){
                    ?>
                    <tr>
                        <td><img src="batteries/<?php echo $row['image']; ?>" height="100"></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['old_price']; ?> тенге</td>
                        <td><?php echo $row['new_price']; ?> тенге</td>
                        <td><?php echo $row['current']; ?>А</td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['warranty']; ?></td>
                        <td><img src="flags/<?php echo $row['flag']; ?>" height="100"></td>
                        <td>
                            <a href="sale-admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('вы точно хотите это удалить?');"> <i class="fas fa-trash"></i> удалить </a>
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