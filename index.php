<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
setcookie("visit_count", 1, strtotime("+30 days"));
?>
<!DOCTYPE HTML>
<HTML>
<head>
    <title> Fashion Store</title>
    <link href="style/block.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/data/data_time.js"></script>
    <script type="text/javascript" src="js/time.js"></script>
    <script type="text/javascript" src="js/data/data_dynamicHtml.js"></script>
    <script type="text/javascript" src="js/dynamicHtml.js"></script>

</head>
<body onload="dyn(0)">
<?php include "php/admin_part.php"; ?>
<! -- Подключение модуля Реклама -->
<div class="wrapper">
    <div class="one">
        <! -- Подключение модуля Логотип -->
        <?php include "php/logo.php"; ?>
    </div>
    <div class="two">
        <! -- Подключение модуля Реклама -->
        <?php include "php/ad_0.php"; ?>
    </div>
    <div class="three">
        <! -- Подключение модуля (Бокового) меню -->
        <?php include "php/menu.php"; ?>
    </div>
    <div class="four">
        <! -- Подключение модуля Основого контента -->
        <?php include "php/bodyContent.php"; ?>
    </div>
    <div class="five">
        <! -- Подключение модуля Контакт -->
        <?php include "php/contact.php"; ?>
    </div>
    <div class="six">
        <! -- Подключение модуля меню аккаунта -->
        <?php include "php/account.php"; ?>


    </div>
</div>
<footer class="footer">
    <?php include "php/footer.php"; ?>
</footer>
</body>
</HTML>