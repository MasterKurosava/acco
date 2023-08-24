<?php
    require "db.php";
    $data=$_POST;
    if(isset($data['do_login']))
    {
    $errors=array();
    $user=R::findOne('users','login=?',array($data['login']));
    if($user)
    {

    if(password_verify($data['pass'],$user->password))
    {
        $_SESSION['logged_user'] = $user;   
        header('Location: ../admin.php');
    }else
    {
    $errors[]='Не верный логин или пароль!';
    }

    }else
    {
    $errors[]='Не верный логин или пароль!';
    }
    if(!empty($errors))
    {
    echo '<div style="color:red";>'.array_shift($errors).'</div><hr>';
    }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Аккумулятор орталығы</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css" />
    </head>
    
    <body>

    <div class="text-center mt-5">
        <form action="login.php" method="POST">
            <input type="text" name="login" placeholder="login">
            <br><br>
            <input type="password" name="pass" placeholder="password">
            <br><br>
            <button type="sumbit" name="do_login" class="btn bat-button">Авторизоваться</button>
        </form>
        <br>
        <a href="../index.php"><button class="btn bat-button">Вернуться на главную</button></a>
    </div>

    </body>
</html>