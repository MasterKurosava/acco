<?php 
  session_start();
  if (!isset($_SESSION['logged_user'])) {
    header('Location: login/login.php');
  } 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Аккумулятор орталығы</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>

    <header class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand logo" href="https://akk-o.kz/"><img src="images/logo.png" class="logo" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-link" href="https://akk-o.kz/">Главная</a>
                      <a class="nav-link active" href="admin.php">Админ</a>
                  </div>
              </div>
          </div>
      </nav>
    </header>

    <div class="mt-5 mb-5 admin">
      <a href="battery-admin.php"><button type="button" class="btn bat-button w-75">Аккумуляторы</button></a>
      <br><br>
      <a href="sale-admin.php"><button type="button" class="btn bat-button w-75">Скидки</button></a>
      <br><br>
	    <a href="order-admin.php"><button type="button" class="btn bat-button w-75">Заказы</button></a>
      <br><br>
      <a href="login/logout.php"><button type="button" class="btn bat-button w-75" >Выйти</button></a>
    </div>


    <script src="js/bootstrap.min.js"></script>
  </body>
</html>