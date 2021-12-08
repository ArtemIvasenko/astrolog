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
<script>
    $('.video_reviews_slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="slick_prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slick_next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>',
        responsive: [
            {
              breakpoint: 1651,
              settings: {
                slidesToShow:3
              }
            },
            {
              breakpoint: 1481,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 960,
              settings: {
                slidesToShow: 1
              }
            },
            {
              breakpoint: 481,
              settings: {
                centerMode: true,
                centerPadding: '35px',
                slidesToShow: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    }); 
</script>