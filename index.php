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
	<link rel="icon" href="https://akk-o.kz/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">

	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-237336208-1');
	</script>
</head>
<!---->


<body>
	<script async src="//unisiter.ru/widgets/whatsapp/script.js" uw-phone="77087088800" uw-location="bl"></script>
	
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand logo" style="margin-right: 0 !important;" href="#"><img src="images/logo.png" class="logo" alt=""></a>
				<a class="phone text-center" href="tel:+77087088800" target="_blank"><p>+7 708 708 88 00</p></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="navigation active main" aria-current="page" href="https://akk-o.kz/#">Главная</a>
                        <a class="navigation" href="https://akk-o.kz/#battery">Аккумуляторы</a>
                        <a class="navigation" href="https://akk-o.kz/#sale">Скидки</a>
                        <a class="navigation" href="https://akk-o.kz/contact/">Контакты</a>
                    </div>
                </div>
				<a class="phone2" href="tel:+77087088800" target="_blank"><p>+7 708 708 88 00</p></a>

            </div>
        </nav>
    
        
        <!-- banner -->
        <div id="carouselExampleControls" class="carousel slide bat-slide mt-3 carousel-container" data-bs-ride="carousel">
            <div class="carousel-inner carousel-content">
				
				<div class="carousel-item active left-item p-2">
                    <div class="d-flex row p-5">
                        <div class="col-md-7 left-content">
                            <h2 class="title">Выберите <span>идеальный</span> аккумулятор</h2>
                            <p class="subtext">вместе с нами экспертами</p>
                        </div>
                        <div class="col-md-5 carousel-form">
                            <form action="form.php" method="post" class="form">
                                <div class="input-container">
                                    <input type="text" name="name" class="input w-100" placeholder="ФИО" required/>
                                </div>
                                <div class="input-container2">
                                    <input type="tel" name="phone" class="input w-100" placeholder="Номер телефона" required/>
                                </div>
                                <button type="submit" class="btn w-100 gradient-button" name="contact">Жду звонка</button>
                            </form>
                            <br><br><br><br>
                        </div>
                    </div>
                </div>
				
				<div class="carousel-item center-item crown p-2">
                    <div class="d-flex align-items-center row p-2">
                        <div class="col-md-6">
                            <img src="images/crown.png" class="d-block w-100 banner crown-image">
                        </div>
                        <div class="col-md-6 crown-text">
                            <h2 class="title">Гарантия - залог качества</h2>
                            <p>
                                При соблюдении рекомендаций по эксплуатации, на данный аккумулятор предоставляется гарантия сроком до <span>3-х лет</span>.
                            </p>
                        </div>
                    </div>
                </div>
				
				<div class="carousel-item right-item">
                    <div class="d-flex align-items-center row p-2 orta">
                        <div class="col-md-5 orta-image">
                            <img src="images/logo-banner.png" class="d-block w-100 banner-logo">
                            <br><br>
                        </div>
                        <div class="col-md-7 orta-text">
                            <h2 class="title">Аккумулятор орталығы</h1>
                            <p>
                            Аккумуляторный центр "Астана" предлагает автомобильные масла и маслянные фильтры. Мы гарантируем быструю доставку, выезд, зарядку, проверку плотности и установку аккумуляторов с качественным сервисом.
                            </p>
                        </div>
                    </div>
                </div>
				
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
		
		<div class="text-center mt-3">
            <img src="images/ad.jpg" style="width: 100%; border-radius: 20px;">
        </div>
		
		<div class="text-center mt-3">
            <img src="images/prepare.png" style="width: 100%; border-radius: 15px;">
        </div>
		
    </header>
    
	
    
    <main class="container">

        <!-- batteries --> 
        <section id="battery" class="mt-5 container">
            <h3>Аккумуляторы</h3>

            <form action="" method="POST">
                <div class="input-container2">
                    <button type="submit" class="btn" name="alphabet" href="https://akk-o.kz/#battery">По названию</button>
                    <button type="submit" class="btn" name="asc">По возрастанию цены</button>
                    <button type="submit" class="btn" name="desc">По убыванию цены</button>
                </div>
            </form>


            <div class="row row-cols-1 row-cols-md-3 g-4">

                <?php
                    $sort = "name";
            
                    if( isset($_POST["alphabet"]))
                    {
                        $sort = "name";
                    }
                    
                    if( isset($_POST["asc"]))
                    {
                        $sort = "discount_price ASC";
                    }
        
                    if( isset($_POST["desc"]))
                    {
                        $sort = "discount_price DESC";
                    }

                    $select_batteries = mysqli_query($con, "SELECT * FROM `batteries` ORDER BY $sort");
                    if(mysqli_num_rows($select_batteries) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_batteries)){
                ?>

                <div class="col">
                    <div class="shadow card bat-card h-100">
                        <div class="card-image-container">
                            <img src="batteries/<?php echo $fetch_product['image']; ?>" class="battery">
                            <img src="flags/<?php echo $fetch_product['flag']; ?>" class="flag">
                        </div>
                        <div class="card-body">
                            <div class="card-header">
                                <h5 class="card-title"><?php echo $fetch_product['name']; ?></h5>
                            </div>

                            <span class="tok-value"><?php echo $fetch_product['current']; ?>А</span>

                            <div class="price-container">
                                <span class="new-price">
                                   ₸<?php echo number_format($fetch_product['discount_price'], 0, '.', ' '); ?>
                                    <span class="old-price">
                                        <?php echo number_format($fetch_product['total_price'], 0, '.', ' '); ?>
                                    </span>
                                </span>
                            </div>

                            <label class="fw-light fst-normal card-warning">Цена с учетом старого АКБ</label>

                        </div>
                        <div class="card-footer bat-card-footer">
                            <button type="button" class="btn btn-primary card-button" data-toggle="modal" data-target="#buyModal" name="buy" 
                                data-product-name="<?php echo $fetch_product['name']; ?>" 
                                data-discount-price="<?php echo $fetch_product['discount_price']; ?>" 
                                data-total-price="<?php echo $fetch_product['total_price']; ?>" 
                                data-tok="<?php echo $fetch_product['current']; ?>"
                                data-product-id="<?php echo $fetch_product['id']; ?>">
                                Открыть форму
                            </button>

                            <!-- <a href="battery-buy.php?buy=<?php echo $fetch_product['id']; ?>">
								<button class="btn bat-button card-button" name="buy">Купить >></button>
                            </a> -->
                        </div>
                    </div>
                </div>

                <?php
                        };
                    };
                ?>

            </div>
        </section>

        <br>

        <!-- sales -->
        <!-- <section id="sale" class="mt-5 container">
            <h3>Скидки</h3>

            <form action="" method="POST">
                <div class="input-container2">
                    <button type="submit" class="btn" name="alphabet1">По названию</button>
                    <button type="submit" class="btn" name="asc1">По возрастанию цены</button>
                    <button type="submit" class="btn" name="desc1">По убыванию цены</button>
                </div>
            </form>

            <div class="row row-cols-1 row-cols-md-3 g-4">

                <?php
                    $sort1 = "name";
            
                    if( isset($_POST["alphabet1"]))
                    {
                        $sort1 = "name";
                    }
                    
                    if( isset($_POST["asc1"]))
                    {
                        $sort1 = "new_price ASC";
                    }
        
                    if( isset($_POST["desc1"]))
                    {
                        $sort1 = "new_price DESC";
                    }

                    $select_sales = mysqli_query($con, "SELECT * FROM `sales` ORDER BY $sort1");
                    if(mysqli_num_rows($select_sales) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_sales)){
                ?>
                <div class="col">
                    <div class="shadow card bat-card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch_product['name']; ?></h5>
                            <img src="batteries/<?php echo $fetch_product['image']; ?>" class="battery">
                            <div class="card-body">

                                <p class="tok">Пусковой ток:  
                                    <span class="tok-value"><?php echo $fetch_product['current']; ?>
                                    А</span>
                                </p> 

                                <p class="guarantee">Гарантия: 
                                    <span class="tok-value"><?php echo $fetch_product['warranty']; ?>
                                    А</span>
                                </p> 

                                <p style="flag">Страна: 
                                    <img src="flags/<?php echo $fetch_product['flag']; ?>" style="width: 5%;">
                                    <span style="flag-value"><?php echo $fetch_product['country']; ?></span>
                                </p>

                                <div class="price-container">
                                    <span class="old-price"><?php echo number_format($fetch_product['old_price'], 0, '.', ' '); ?></span>
                                    <span class="new-price">  <?php echo number_format($fetch_product['new_price'], 0, '.', ' '); ?> тенге</span>
                                </div>
                            </div>
                        <div class="card-footer bat-card-footer">
							<button type="button" class="btn bat-button myBtn" name="buy">Купить >></button>
                        </div>
                    </div>
                </div>

                <?php
                        };
                    };
                ?>
            </div>
        </section> -->
        
    </main>
     <!---->


<!-- Modal -->
<div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog buy-modal" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Оформление заявки</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body row">
            <div class="col-md-6 modal-left">
                <div class="image-container">
                    <img src="batteries/inci60.jpg">
                    <p class="modal-name">Bars 100</p>
                    <p class="modal-amper">800 A</p>
                    <p class="modal-price">48 000 тг</p>
                </div>
            </div>
            <div class="col-md-6 modal-right">
                <form action="order.php" method="post" id="orderForm">
                    <input type="hidden" name="name" class="form-control" id="battery">
                    <div class="form-group name-group">
                        <label for="userName">Имя:</label>
                        <input type="text" name="name" class="form-control" id="userName" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group phone-group">
                        <label for="userPhone">Телефон:</label>
                        <input type="tel" name="phone" class="form-control" id="userPhone" placeholder="Введите ваш номер телефона">
                    </div>
                    <div class="form-group pay-group">
                        <label for="paymentMethod">Выбор оплаты:</label>
                        <select class="form-control" id="paymentMethod" name="payment">
                            <option>Наличными</option>
                            <option>Банковская карта</option>
                        </select>
                    </div>
                    <div class="form-group delivery-group">
                        <label for="deliveryMethod">Способ доставки:</label>
                        <select class="form-control" id="deliveryMethod" name="delivery">
                            <option>Курьер</option>
                            <option>Самовывоз</option>
                        </select>
                    </div>
                    <div class="form-group discount-group">
                        <label for="oldBatteryDiscount">Получить скидку за старый АКБ:</label>
                        <select class="form-control" id="oldBatteryDiscount" name="method">
                            <option>Да</option>
                            <option>Нет</option>
                        </select>
                    </div>
                </form>
             </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary close" data-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary send" id="submitButton">Отправить</button>
        </div>
    </div>
  </div>
</div>


    <footer class="text-center mt-5">
        <p>© 2021-2023 Аккумулятор Орталығы. Астана, Казахстан. Все права защищены.</p>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>


    
</body>

</html>