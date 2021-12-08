<img class="img_autor" src="../img/content/fominyh_krug-minMIN.png">
<div class="info_autor">
    <div class="name_autor">Максим<br>Фоминых</div>
    <div class="status_autor">астро-нумеролог</div>
    <div class="slogan_autor">Звёзды решают всё!</div>                
</div>
<img src="../img/content/author_border.svg" class="border" style="width:100%; height: auto; z-index:4; position:relative;">
<div class="transition_box"></div>

<script>
	$('.img_autor').attr('src','img/content/fominyh_krug-min.jpg');
    
    var widthClient = document.body.clientWidth
    var heightClient = document.body.clientHeight

    scrolTop = $(document).scrollTop();
    if(scrolTop > 400){
        $(".img_autor").css({
            'width':'750px',
            'height':'909px',
        });  
        
    }

    var lastScrollTop = 0;
    var stop_animate = false;
    $(document).scroll(function(){
       scrolTop = $(document).scrollTop();
        if(scrolTop > lastScrollTop){
            if(!stop_animate){
                if(widthClient > 1913 ){
                    value_display = 750;
                    value_name = 660;
                }
                if(widthClient < 1913 && widthClient > 1650){
                    value_display = 750;
                    value_name = 660;
                }
                if(widthClient <= 1650 && widthClient > 1366){
                    value_display = 600;
                    value_name = 520;
                }    
                if(widthClient <= 1366 && widthClient > 1280){
                    value_display = 500;
                    value_name = 520;
                }
                if(widthClient == 1280){
                    value_display = 480;
                    value_name = 480;
                }
                
                if(widthClient >= 1280){
                    if(scrolTop > 30){
                        value_st = scrolTop - 28;//2. Чем ниже, тем больше множетель
                        width_img_autor = value_st;
                        width_name_autor = value_st;
                        height_img_autor = width_img_autor / 0.819581958;
                        
                        if(width_img_autor >= value_display){
                            width_img_autor = value_display;
                            height_img_autor = value_display / 0.819581958;
                            stop_animate = true;
                        }
                        $(".img_autor").css({
                            'width':width_img_autor+'px',
                            'height':height_img_autor+'px',
                        });
                        if(width_img_autor >= value_name){
                            width_img_autor = value_name;
                        }
                        if(width_name_autor >= 720){
                            width_name_autor = 720;
                        }
                        $(".name_autor").css({
                            'width':width_name_autor+'px',
                        });
                    }
                

                    
                    // if(scrolTop >= 300){
                    //     if($('#lottie-player-1').length === 0){
                    //         $(".info_autor").after('<lottie-player id="lottie-player-1" src="img/content/lottie_fomin.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:rlative;" autoplay></lottie-player>');
                    //     }            
                    // }
                    // if(scrolTop >= 500){
                    //     $('.lottie_player-3').show();
                    // }
                }
                // if(widthClient >= 1280){
                //     if(widthClient > 1366){
                //         value_scroll = 600;
                //     }else if(widthClient >= 1280 && widthClient <= 1366){
                //         value_scroll = 400;
                //     }
                //     //alert(value_scroll);
                //     if(scrolTop >= value_scroll){
                //         if($('#lottie-player-2').length === 0){
                //             $(".experience").append('<lottie-player id="lottie-player-2" src="img/content/lf30_7s9lrsqy.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative;" autoplay></lottie-player>');
                //         }            
                //     }
                // }
                // if(widthClient < 1280){
                //     if(scrolTop >= 500){
                //         $('.lottie_player-3').show();
                //     }       
                //     if(widthClient >= 960){
                //         if($('#lottie-player-2').length === 0){
                //             $(".experience").append('<lottie-player id="lottie-player-2" src="img/content/lf30_7s9lrsqy.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:relative;" autoplay></lottie-player>');
                //         }
                //     }
                // }
            }     
        }
        lastScrollTop = scrolTop;
    });
</script>