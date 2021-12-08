<?php
require "libs/db.php";
require "functions/functions.php";
  $user_agent = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Максим Фоминых. Разбор судьбы</title>
    <!--<meta name="yandex-verification" content="" />
    <meta name="google-site-verification" content="" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    
    <link async rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="fonts/roboto/stylesheet.css"/>
    <link rel="stylesheet" href="fonts/segoe/stylesheet.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="css/media.css" rel="stylesheet" type="text/css" media/>
    <link rel="stylesheet" type="text/css" href="libs/slick-1.8.1/slick/slick.css"/>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" defer></script>
    <script src="js/content_script.js" type="text/javascript" defer></script>
    <script src="libs/slick-1.8.1/slick/slick.min.js" type="text/javascript" defer></script>
    <script src="js/lazyload.js" defer></script>   
    
</head>
<body>
    <div class="popup_box"></div>
    <!--<div class="loader"><img src="img/757.gif" alt=""></div>-->
    <header class="hdr_box">
    </header>
    <main class="main_box">
        <div class="bckg_box_fixed">
            <img class="img_bckg_rot" src="img/content/2150-minMIN.jpg">
        </div>
        <section class="video-container">
            <button class="order_form_open first_btn_page" data-value="ajax_form_order" data-form-modul = "open_form">ЗАКАЗАТЬ</button>
            <img src="video/1_block.jpg" class="bgvid" width="100%">
        </section>
        
        <section class="autor" id='autor'>
            
            
        </section>
        
        
        <button class="order_form_open big_btn_page m-b-20 media-m-t-60" data-value="ajax_form_order" data-form-modul="open_form">ЗАКАЗАТЬ РАЗБОР</button>
        
        <section class="experience" id='experience'>
            <!-- ajax lazy load -->
        </section>

        <button class="order_form_open big_btn_page m-t-80 m-b-100 media-m-t-40" data-value="ajax_form_order" data-form-modul = "open_form">ХОЧУ РАЗБОР</button>
        
        <section class="profit" id="profit">
            <!-- ajax lazy load -->

        </section>
        
        <button class="order_form_open big_btn_page m-t-80 m-b-10" data-value="ajax_form_order" data-form-modul = "open_form">Записаться по акции</button>

        <section class="profit m-t-100 video_reviews" id="video_reviews">
            <!-- ajax lazy load -->
        </section>
        
        <section class="profit m-t-80" id="text_reviews">
            <!-- ajax lazy load -->
        </section>
        
        <button class="order_form_open big_btn_page m-t-80 m-b-30" data-value="ajax_form_order" data-form-modul = "open_form">Хочу разбор за<br><span style="color:#FF0035;">299 руб. </span><strike style="color: #FF6500;">1 299 руб.</strike></button>
        
        <section class="profit m-t-100" id="steps">
            <!-- ajax lazy load -->
        </section>
        
        <section class="profit m-t-80" id="form">
            <!-- ajax lazy load -->
        </section>
        
    </main>
    
    <footer class="footer_content" id="footer">
     
        
    </footer>
    
</body>
</html>