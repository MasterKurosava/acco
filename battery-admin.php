<?php

include 'config.php';

session_start();

if (!isset($_SESSION['logged_user'])) {
header('Location: login/login.php');
}

# Add product
if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_total_price = $_POST['p_total_price'];
   $p_discount_price = $_POST['p_discount_price'];
   $p_current = $_POST['p_current'];
   $p_country = $_POST['p_country'];
   $p_warranty = $_POST['p_warranty'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'batteries/'.$p_image;
   $p_flag = $_FILES['p_flag']['name'];
   $p_flag_tmp_name = $_FILES['p_flag']['tmp_name'];
   $p_flag_folder = 'flags/'.$p_flag;

   $insert_query = mysqli_query($con, "INSERT INTO `batteries`(name, total_price, discount_price, image,current,country,flag,warranty) VALUES('$p_name', '$p_total_price', '$p_discount_price', '$p_image','$p_current','$p_country','$p_flag','$p_warranty')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      move_uploaded_file($p_flag_tmp_name, $p_flag_folder);
      $message[] = 'продукт успешно добавлен';
   }else{
      $message[] = 'ошибка';
   }
};

# Delete product
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE FROM `batteries` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      $message[] = 'продукт был удален';
   }else{
      $message[] = 'ошибка';
   };
};

# Edit product
if(isset($_POST['update_product'])){
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_total_price = $_POST['update_p_total_price'];
    $update_p_discount_price = $_POST['update_p_discount_price'];
    $update_p_current = $_POST['update_p_current'];
    $update_p_country = $_POST['update_p_country'];
    $update_p_warranty = $_POST['update_p_warranty'];

    $update_query_string = "UPDATE `batteries` SET 
        name = '$update_p_name', 
        total_price = '$update_p_total_price', 
        discount_price = '$update_p_discount_price', 
        current = '$update_p_current', 
        country = '$update_p_country', 
        warranty = '$update_p_warranty'";

    if (!empty($_FILES['update_p_image']['name'])) {
        $update_p_image = $_FILES['update_p_image']['name'];
        $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
        $update_p_image_folder = 'batteries/'.$update_p_image;
        move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
        $update_query_string .= ", image = '$update_p_image'";
    }

    if (!empty($_FILES['update_p_flag']['name'])) {
        $update_p_flag = $_FILES['update_p_flag']['name'];
        $update_p_flag_tmp_name = $_FILES['update_p_flag']['tmp_name'];
        $update_p_flag_folder = 'flags/'.$update_p_flag;
        move_uploaded_file($update_p_flag_tmp_name, $update_p_flag_folder);
        $update_query_string .= ", flag = '$update_p_flag'";
    }

    $update_query_string .= " WHERE id = '$update_p_id'";

    $update_query = mysqli_query($con, $update_query_string);

    if($update_query){
       header('location:battery-admin.php');
    }else{
       header('location:battery-admin.php');
    }
}

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
                <h3>добавить продукт</h3>
                <input type="text" name="p_name" placeholder="название" class="box" required>
                <input type="text" name="p_total_price" min="0" placeholder="полная цена" class="box" required>
                <input type="text" name="p_discount_price" min="0" placeholder="цена со скидкой" class="box" required>
                <input type="text" name="p_current" placeholder="пусковой ток" class="box" required>
                <input type="text" name="p_country" placeholder="страна" class="box" required>
                <input type="text" name="p_warranty" placeholder="гарантия" class="box" required>
                <label class="box">Флаг</label>
                <input type="file" name="p_flag" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <label class="box">Аккумулятор</label>
                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <input type="submit" value="добавить" name="add_product" class="btn">
            </form>
        </section>

        <section class="display-product-table">
            <table>
                <thead>
                    <th>фото</th>
                    <th>название</th>
                    <th>полная цена</th>
                    <th>цена со скидкой</th>
                    <th>пусковой ток</th>
                    <th>страна</th>
                    <th>гарантия</th>
                    <th>флаг</th>
                    <th>действие</th>
                </thead>
                
                <tbody>
                    <?php
                    
                    $select_batteries = mysqli_query($con, "SELECT * FROM `batteries`");
                    if(mysqli_num_rows($select_batteries) > 0){
                        while($row = mysqli_fetch_assoc($select_batteries)){
                    ?>
                    <tr>
                        <td><img src="batteries/<?php echo $row['image']; ?>" height="100"></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['total_price']; ?> тенге</td>
                        <td><?php echo $row['discount_price']; ?> тенге</td>
                        <td><?php echo $row['current']; ?>А</td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['warranty']; ?></td>
                        <td><img src="flags/<?php echo $row['flag']; ?>" height="100"></td>
                        <td>
							<a href="battery-admin.php?edit=<?php echo $row['id']; ?>" class="btn">изменить</a>
                            <a href="battery-admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('вы точно хотите это удалить?');"> <i class="fas fa-trash"></i> удалить </a>
                        </td>
                    </tr>
                    <?php
                    };    
                }
                ?>
                </tbody>
            </table>
        </section>
		
		<section class="popup">
        <?php
        if(isset($_GET['edit'])){
            $edit_id = $_GET['edit'];
            $edit_query = mysqli_query($con, "SELECT * FROM `batteries` WHERE id = $edit_id");
            if(mysqli_num_rows($edit_query) > 0){
                while($fetch_edit = mysqli_fetch_assoc($edit_query)){
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form">

            <div class="form-element">
            <img src="batteries/<?php echo $fetch_edit['image']; ?>" height="100" alt="" style="display: block; margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-element">
            <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
            </div>

            <div class="form-element">
            <input type="text" class="input-edit" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
            </div>

            <div class="form-element">
            <input type="text" class="input-edit" required name="update_p_total_price" value="<?php echo $fetch_edit['total_price']; ?>">
            </div>

            <div class="form-element">
            <input type="text" class="input-edit" required name="update_p_discount_price" value="<?php echo $fetch_edit['discount_price']; ?>">
            </div>

            <div class="form-element">
            <input type="text" class="input-edit" required name="update_p_current" value="<?php echo $fetch_edit['current']; ?>">
            </div>

            <div class="form-element">
            <input type="text" class="input-edit" required name="update_p_country" value="<?php echo $fetch_edit['country']; ?>">
            </div>

            <div class="form-element">
            <input type="text" class="input-edit" required name="update_p_warranty" value="<?php echo $fetch_edit['warranty']; ?>">
            </div>

            <div class="form-element">
            <label style="font-size: 1.5rem;">Флаг</label>
            <input type="file" class="input-edit" required name="update_p_flag" accept="image/png, image/jpg, image/jpeg">
            </div>

            <div class="form-element">
            <label style="font-size: 1.5rem;">Аккумулятор</label>
            <input type="file" class="input-edit" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
            </div>
            
            <input type="submit" value="изменить" name="update_product" class="btn">
            <button class="btn" onclick="history.back()">отмена</button>
            </div>
        </form>

        <?php
                };
            };
         echo "<script>document.querySelector('.popup').style.display = 'flex';</script>";
        };
        ?>
        </section>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>