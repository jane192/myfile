<?php session_start();
require_once('config/config.php');
?>   

<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Hurts</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js" ></script>
</head>

<body>
   
    <header class="header">
        <div class="logo col-md-10">
            <a href="/">
                <h1>Hurts</h1>
            </a>
            <p>The Hottest Heartbreakers in the World</p>
        </div>
        <div class="icons col-md-2">
            <a href="#"><img class="facebook" src="images/facebook.jpg" alt="facebook"></a>
            <a href="#"><img class="twitter"src="images/twitter.png" alt="twitter"></a>
            <a href="#"><img class="googleplus"src="images/googleplus.jpg" alt="googleplus"></a>
            <a href="#"><img class="youtube" src="images/youtube.jpg" alt="youtube"></a>
            <a href="#"><img class="vk" src="images/vk.jpg" alt="vk"></a>
        </div>
        <nav class="menutop">
            <a href="/" data-url="Photo/go.jpg" data-title="Hurts"class="active">Главная</a>
            <a href="#" data-url="Photo/go.jpg" data-title="Видео">Видео</a>
            <a href="#"data-url="Photo/go.jpg" data-title="Песни">Песни</a>
            <a href="#"data-url="Photo/go.jpg" data-title="Тексты песен">Тексты песен</a>            
            <a href="/index.php?url=content"data-url="Photo/go.jpg" data-title="About Hurts">О группе</a>
            <a href="cart.php"data-url="Photo/go.jpg" data-title="Заказ">Заказ</a>
            
           <? if (isset($_SESSION['user_id'])){
    ?>
<a href = "products.php" data-url="Photo/go.jpg" data-title="Продукты"> Продукты</a>
<a href = "cabinet.php"data-url="Photo/go.jpg" data-title="Кабинет"> Кабинет</a>
<a href = "logout.php"data-url="Photo/go.jpg" data-title="Выход">Выход</a>

<?
}else{
 
            ?>
            <a href="reg.php">Регистрация</a>
    <a href="login.php">Вход</a>
       <?php
}
?>
        </nav>
    </header>