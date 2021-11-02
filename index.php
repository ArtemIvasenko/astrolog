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
    <!--<meta name="yandex-verification" content="" />
    <meta name="google-site-verification" content="" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <title>Максим Фоминых. Разбор судьбы</title>
    <link async rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="fonts/roboto/stylesheet.css"/>
    <link rel="stylesheet" href="fonts/segoe/stylesheet.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="css/media.css" rel="stylesheet" type="text/css" media/>
    <link rel="stylesheet" type="text/css" href="libs/slick-1.8.1/slick/slick.css"/>
    
    <!--<link rel="canonical" href="" />-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script defer type="text/javascript" src="js/content_script.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script type="text/javascript" src="libs/slick-1.8.1/slick/slick.min.js"></script>
</head>
<body>
    
    
    <div class="popup_box"></div>
    <!--<div class="loader"><img src="img/757.gif" alt=""></div>-->
    <header class="hdr_box">
    </header>
    <main class="main_box">
        <div class="bckg_box_fixed">
            <img class="img_bckg_rot" src="img/content/2150-min.jpg" alt="">
        </div>
        <section class="video-container">
            <button class="order_form_open first_btn_page" data-value="ajax_form_order" data-form-modul = "open_form">ЗАКАЗАТЬ</button>
            <video class="bgvid" id="videoId" preload="auto" playsinline muted autoplay="autoplay" loop="loop" webkit-playinginline poster="img/content/video_img.jpg">
                <source src="video/1_block.mp4" type="video/mp4">
                <source src="video/1_block.jpg" type="video/webp">
            </video>
            <script>

            </script>
            <div class="transition_box_v"></div>
        </section>
        
        <section class="autor">
            
            <img class="img_autor" src="img/content/fominyh_krug-min.jpg" alt="">
            <div class="info_autor">
                <div class="name_autor">Максим<br>Фоминых</div>
                <div class="status_autor">астро-нумеролог</div>
                <div class="slogan_autor">Звёзды решают всё!</div>                
            </div>
            <lottie-player class="lottie_player" src="img/content/lottie_fomin.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative;" autoplay></lottie-player>
            <div class="transition_box"></div>
        </section>
        
        
        <button class="order_form_open big_btn_page m-b-20 media-m-t-60" data-value="ajax_form_order" data-form-modul = "open_form">ЗАКАЗАТЬ РАЗБОР</button>
        
        <section class="experience">
            
            <img class="img_star_light" src="img/content/star_lights.svg" alt="">
            
            
            <div class="experience_media">
                <div class="box_exp"><lottie-player class="lottie_player" src="img/content/box_anim_exp_1.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative;" autoplay></lottie-player></div>
                <div class="box_exp marg_top_extra"><lottie-player class="lottie_player" src="img/content/box_anim_exp_2.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative;" autoplay></lottie-player></div>
                <div class="box_exp marg_top_extra"><lottie-player class="lottie_player" src="img/content/box_anim_exp_3.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative;" autoplay></lottie-player></div>
                <div class="box_exp marg_top_extra"><lottie-player class="lottie_player" src="img/content/box_anim_exp_4.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative;" autoplay></lottie-player></div>
            </div>
            <lottie-player class="lottie_player-2" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative;" autoplay></lottie-player>
        </section>
        
        <button class="order_form_open big_btn_page m-t-80 m-b-100 media-m-t-40" data-value="ajax_form_order" data-form-modul = "open_form">ХОЧУ РАЗБОР</button>
        
        <section class="profit">
            <h2>Из разбора Вы узнаете</h2>
            <div class="animation_content_box-4">
                <div class="animation_content">
                    <lottie-player loop class="lottie_player-3" src="img/content/box_anim_4_1.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative; display:inline-block;" autoplay></lottie-player>
                    <h3>Скрытые таланты<br>своей души</h3>
                </div>
                <div class="animation_content">
                    <lottie-player loop class="lottie_player-3" src="img/content/box_anim_4_2.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative; display:inline-block;" autoplay></lottie-player>
                    <h3>Ваше предназначение<br>и карьера</h3>
                </div>
                <div class="animation_content">
                    <lottie-player loop class="lottie_player-3" src="img/content/box_anim_4_3.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative; display:inline-block;" autoplay></lottie-player>
                    <h3>Периоды финансовых<br>взлётов и падений</h3>
                </div>
            </div>
            <div class="animation_content_box-4">
                <div class="animation_content">
                    <lottie-player loop class="lottie_player-3" src="img/content/lf30_zp3pyilu.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative; display:inline-block;" autoplay></lottie-player>
                    <h3>Прогноз важных<br>событий на год</h3>
                </div>
                <div class="animation_content">
                    <lottie-player loop class="lottie_player-3" src="img/content/lf30_v12k53f0.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative; display:inline-block;" autoplay></lottie-player>
                    <h3>Рекомендации по питанию,<br>спорту и режиму дня</h3>
                </div>
                <div class="animation_content">
                    <lottie-player loop class="lottie_player-3" src="img/content/lf30_dt1ni6dw.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative; display:inline-block;" autoplay></lottie-player>
                    <h3>Личная жизнь и<br>отношения с партнером</h3>
                </div>
            </div>
        </section>
        
        <button class="order_form_open big_btn_page m-t-80 m-b-10" data-value="ajax_form_order" data-form-modul = "open_form">Записаться по акции</button>
        
        
        
        <section class="profit m-t-100">
            <lottie-player class="lottie_feedback" src="img/content/lf30_b2jqpsxk.json" loop background="transparent"  speed="0.8" autoplay></lottie-player>

            <div class="video_reviews_slider">
              <div class="video_reviews_box">
                  <div class="video_content_box">
                      <div class="icon_big_video" data-name="1" data-value="ajax_feedback_video" data-form-modul = "open_form"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                      <img src="video/feedback/posters/poster_feedback_v001.jpg" alt="Видео Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              
              <div class="video_reviews_box">
                  <div class="video_content_box">
                      <div class="icon_big_video" data-name="2" data-value="ajax_feedback_video" data-form-modul = "open_form"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                      <img src="video/feedback/posters/poster_feedback_v007.jpg" alt="Видео Отзыв о разборе судьбы от Максима Фоминых" width="100%">                      
                  </div>
              </div>
              
              <div class="video_reviews_box">
                  <div class="video_content_box">
                      <div class="icon_big_video" data-name="3" data-value="ajax_feedback_video" data-form-modul = "open_form"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                      <img src="video/feedback/posters/poster_feedback_v002.jpg" alt="Видео Отзыв о разборе судьбы от Максима Фоминых" width="100%">                      
                  </div>
              </div>
              
              <div class="video_reviews_box">
                  <div class="video_content_box">
                      <div class="icon_big_video" data-name="4" data-value="ajax_feedback_video" data-form-modul = "open_form"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                      <img src="video/feedback/posters/poster_feedback_v006.jpg" alt="Видео Отзыв о разборе судьбы от Максима Фоминых" width="100%">                      
                  </div>
              </div>
              
              <div class="video_reviews_box">
                  <div class="video_content_box">
                      <div class="icon_big_video" data-name="5" data-value="ajax_feedback_video" data-form-modul = "open_form"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                      <img src="video/feedback/posters/poster_feedback_v003.jpg" alt="Видео Отзыв о разборе судьбы от Максима Фоминых" width="100%">                      
                  </div>
              </div>
              
              <div class="video_reviews_box">
                  <div class="video_content_box">
                      <div class="icon_big_video" data-name="6" data-value="ajax_feedback_video" data-form-modul = "open_form"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                      <img src="video/feedback/posters/poster_feedback_v005.jpg" alt="Видео Отзыв о разборе судьбы от Максима Фоминых" width="100%">                      
                  </div>
              </div>
              <div class="video_reviews_box">
                  <div class="video_content_box">
                      <div class="icon_big_video" data-name="7" data-value="ajax_feedback_video" data-form-modul = "open_form"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                      <img src="video/feedback/posters/poster_feedback_v004.jpg" alt="Видео Отзыв о разборе судьбы от Максима Фоминых" width="100%">                      
                  </div>
              </div>
              
              
            </div>
        </section>
        
        <section class="profit m-t-80">
            <div class="text_reviews_slider">
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="1" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_002.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="2" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_003.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="3" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_004.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="4" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_005.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="5" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_006.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="6" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_007.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="7" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_008.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="8" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_009.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="9" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_011.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="10" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_012.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="11" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_013.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="12" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_014.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
              <div class="text_reviews_box">
                  <div class="text_content_box">
                      <div class="icon_big_img" data-name="13" data-value="ajax_feedback_text" data-form-modul = "open_form"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <img src="img/feedback/feedback_015.jpg" alt="Отзыв о разборе судьбы от Максима Фоминых" width="100%">
                  </div>
              </div>
            </div>
        </section>
        
        <button class="order_form_open big_btn_page m-t-80 m-b-30" data-value="ajax_form_order" data-form-modul = "open_form">Хочу разбор за<br><span style="color:#FF0035;">299 руб. </span><strike style="color: #FF6500;">1 299 руб.</strike></button>
        
        <section class="profit m-t-100">
            <h2>Как мы работаем</h2>
            <div class="steps_by_steps m-t-40">
                <div class="steps_boxes">
                    <div class="lbl_step"><i class="fa fa-star" aria-hidden="true"></i>&emsp;1 шаг&emsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                    <div class="hdr_step">Заполните заявку</div>
                    <p class="text_step">Заполните три графы в полях и нажмите кнопку далее</p>
                </div>
                <div class="arrow_box_step">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                </div>
                <div class="steps_boxes">
                    <div class="lbl_step"><i class="fa fa-star" aria-hidden="true"></i>&emsp;2 шаг&emsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                    <div class="hdr_step">Оплатите разбор</div>
                    <p class="text_step">Оплатите всего 299 руб., переводом на мою именную карту</p>
                </div>
                <div class="arrow_box_step">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                </div>
                <div class="steps_boxes">
                    <div class="lbl_step"><i class="fa fa-star" aria-hidden="true"></i>&emsp;3 шаг&emsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                    <div class="hdr_step">Ожидайте 24 часа</div>
                    <p class="text_step">Вы получите разбор на свою почту в течении 24 ч. Можно будет задать вопросы</p>
                </div>
                <div class="arrow_box_step">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                </div>
                <div class="steps_boxes">
                    <div class="lbl_step"><i class="fa fa-star" aria-hidden="true"></i>&emsp;4 шаг&emsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                    <div class="hdr_step">Гарантии 100%</div>
                    <p class="text_step">Верну деньги в течение 12 часов, если Вас не устроит качество разбора</p>
                </div>
            </div>
        </section>
        
        <section class="profit m-t-80">
            <h2 class="form_order m-b-30">Заполните заявку</h2>
            <div class="content_page back_page_input m-b-100">
                
                <div class="form_order">
                    
                    <input type="text" class="input_form" placeholder="ФИО (девичья фамилия)" name="fio_input" id="fio_input">
                    <div class="old_box_input">
                        <input type="text" class="input_form_old" placeholder="Дата рождения (чч.мм.гггг)" name="old_input" id="old_input">
                        <div class="example_date">пример: чч.мм.гггг</div>
                    </div>
                    <input type="text" class="input_form" placeholder="Email" id="email_input">
                    <button id="submit" class="btn_form">Далее</button>
                </div>
            </div>
        </section>
        
    </main>
    
    <footer class="footer_content">
        <h2 class="m-b-10">Контакты</h2>
        <div class="footer_contacts">
            <div class="insta_box">
                <a class="insta_link" href="https://instagram.com/astrolog.maksim" target="_blanc"><i class="fa fa-instagram" aria-hidden="true"></i><br>Инстаграм астролога</a>
            </div>
            <div class="name_box m-t-20">
                <span>Фоминых Максим Аркадьевич</span>
            </div>
            <div class="email_box">
                <span>fominyhmaksim576@gmail.com</span>
            </div> 
            <div class="addres_box">
                <span>Санкт-Петербург, Невский проспект, 51, оф. 3</span>
            </div>
            <div class="politic_box m-t-40">
                <a class="politic_link" href="libs/agreement.pdf" target="_blanc">Политика обработки персональных данных</a>
            </div>
        </div>
        
    </footer>
    <script src="js/imask.js"></script>
</body>
</html>