<?php

include '../config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Контакты</title>
    <link rel="icon" href="../images/logo.png">
	<link rel="icon" href="https://akk-o.kz/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form.css" />
    <link rel="stylesheet" href="../css/select2.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/select2.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.selection').select2();
		});
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-237336208-1');
	</script>

  </head>

  <body>

    <header class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="https://akk-o.kz"><img src="../images/logo.png" class="logo" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="navigation" href="https://akk-o.kz/">Главная</a>
                      <a class="navigation" href="https://akk-o.kz/#battery">Аккумуляторы</a>
                      <a class="navigation" href="https://akk-o.kz/#sale">Скидки</a>
                      <a class="navigation active" href="https://akk-o.kz/contact/">Контакты</a>
                  </div>
              </div>
          </div>
      </nav>
    </header>
    <!---->


    <div class="container2">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Контакты</h3>
          <p class="text">
            Если не знаете какой у вас аккумулятор,
            оставьте заявку и консультант вам поможет
          </p>
          <div class="info">
            <div class="information">
              <img src="../images/location.png" class="icon"/>
              <a href="https://2gis.kz/nur_sultan/branches/70000001018078958/firm/70000001018274965/71.41997%2C51.128012?m=71.419966%2C51.128004%2F18" target="_blank" class="links">
              <br>  
              <p>&nbspДостык, 3</p>
              </a>
            </div>
            <div class="information">
              <a href="https://2gis.kz/nur_sultan/branches/70000001018078958/firm/70000001054626910/71.491916%2C51.14345?m=71.492078%2C51.143478%2F18.98" target="_blank" class="links">
                <p>&nbsp &nbsp &nbsp &nbsp &nbsp Бауыржан Момышулы, 22/13</p>
              </a>
            </div>
            <div class="information">
              <a href="https://2gis.kz/nur_sultan/branches/70000001018078958/firm/70000001018078968/71.467889%2C51.165327?m=71.467882%2C51.165319%2F18" target="_blank" class="links">
                <p>&nbsp &nbsp &nbsp &nbsp &nbsp Абая, 101</p>
              </a>
            </div>
            <div class="information">
              <img src="../images/email.png" class="icon"/>
              <a href="mailto:akko.astana@mail.ru" target="_blank" class="links">
              <br>  
              <p>&nbspakko.astana@mail.ru</p>
              </a>
            </div>
            <div class="information">
              <img src="../images/phone.png" class="icon"/>
              <a href="tel:+77087088800" target="_blank" class="links">
              <br>  
              <p>&nbsp+7 708 708 88 00</p>
              </a>
            </div>
          </div>
          
        </div>

        <div class="contact-form">

        <!--Contact form-->
          <form action="../form.php" method="post">
            <h3 class="title">Оставьте заявку</h3>

            <div class="input-container2">
              <input type="text" name="name" class="input" placeholder="ФИО" required/>
            </div>

            <div class="input-container2">
              <input type="tel" name="phone" class="input" placeholder="Номер телефона" required/>
            </div>
            
            <button type="submit" class="btn" name="contact">Отправить</button>
          </form>
            
          <p>&nbsp &nbsp &nbsp &nbsp &nbspМы всегда готовы ответить на все <br>&nbsp &nbsp &nbsp &nbsp &nbspваши вопросы</p>
            <div style="padding-bottom: 30px;">
            &nbsp &nbsp &nbsp &nbsp&nbsp
              <a href="https://wa.me/77087088800" target="_blank" class="links">
              <img src="../images/whatsapp.svg" class="icon"/>
              </a>
              <a href="https://www.instagram.com/acastana_kz/" target="_blank" style="text-decoration:none;">
              <img src="../images/instagram.svg" class="icon">
              </a>
            </div>

        </div>
        <div class="contact-form">
          <a class="dg-widget-link" href="http://2gis.kz/nur_sultan/profiles/70000001018078968,70000001078282817,70000001078282846,70000001037721619/center/71.44821166992189,51.16642774275137/zoom/12?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">
              Посмотреть на карте Астаны
          </a>
          
          <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
          <script charset="utf-8">
              new DGWidgetLoader({
                  "width": "100%",
                  "height": 487,
                  "borderColor": "#a3a3a3",
                  "pos": {
                      "lat": 51.16, 
                      "lon": 71.434427,
                      "zoom": 12
                  },
                  "opt": {
                      "city":"nur_sultan"
                  },
                  "org":[
                      {
                          "id":"70000001018078968"
                      },
                      {
                          "id":"70000001078282817"
                      },
                      {
                          "id":"70000001078282846"
                      },
                      {
                          "id":"70000001037721619"
                      }
                  ]
              });
          </script>
          <noscript style="color:#c00;font-size:16px;font-weight:bold;">
              Виджет карты использует JavaScript. Включите его в настройках вашего браузера.
          </noscript>
        </div>
      </div>
    </div>

    <script src="../js/bootstrap.min.js"></script>

  </body>
</html>