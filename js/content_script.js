
$(window).load(function() {
    
  /* setTimeout(function() {
        $(document).scrollTop(0);
        $(".autor").fadeIn(150);
    }, 100);*/
   /* $(".loader").fadeOut(500, function() {
        $(".autor, .experience, .profit").animate({
            opacity: "1"
        }, 150);
    });*/
});

$(document).ready(function(){
    
    
    document.body.scrollTop = document.documentElement.scrollTop = 0;
    var scrolTop,
        flag_enter = 0,
        flag = 1,
        value_st,
        value_scroll,
        value_display,
        value_name,
        widthClient = document.body.clientWidth,
        heightClient = document.body.clientHeight,
        width_img_autor,//750
        height_img_autor,//909
        width_name_autor;//660
   
   
        
    if($("body").data("hovered")){
        if($(".popup_box").html() === ''){
            flag=0;
        }
    }
    $(document).on('mouseenter', 'body', function(){
        
        if(flag_enter === 0){
            if($(".popup_box").html() === ''){
                flag=0;
                flag_enter = 1;
            }
        }
    });
    
    $(document).on('mouseleave', 'body', function(){
        if(flag === 0){
            $.ajax({
                url: 'ajax/ajax_wind_exit.php',
                type: 'POST',
                cache: false,
                data: false,
                dataType: 'html',
                success: function(data) {
                    $(".popup_box").html(data);
                    $(".popup_box").fadeIn(150);
                    flag=1;
                }
            }); 
            
        }
    });
    $(document).on('click', '.exit_popup', function(){
        
        $(".popup_box").hide();
        $(".popup_box").html("");
        $("body").css({"overflow":"auto"});
    });
    //MASK AGE
    
    $(document).on('focus click', '#old_input', function(){
        const inputElement = document.querySelector('#old_input'); // ищем наш единственный input
        const maskOptions = { // создаем объект параметров
                mask: Date,
                min: new Date(1930, 0, 1),
                max: new Date(2020, 0, 1),
                lazy: false
        };
        IMask(inputElement, maskOptions); // запускаем плагин с переданными параметрами
        $(this)[0].setSelectionRange(0, 0);
        $(".example_date").show();
    });    
     $(document).mouseup(function (e) {
         $(".example_date").hide();
        var container = $('#old_input');
        if (container.has(e.target).length === 0){
            
            container.val('');
        }
    });
    
    $(document).on('focus click', '#old_input_form', function(){
        const inputElement = document.querySelector('#old_input_form'); // ищем наш единственный input
        const maskOptions = { // создаем объект параметров
                mask: Date,
                min: new Date(1990, 0, 1),
                max: new Date(2020, 0, 1),
                lazy: false
        };
        IMask(inputElement, maskOptions); // запускаем плагин с переданными параметрами
        $(this)[0].setSelectionRange(0, 0);
        $(".example_date_form").show();
    });    
     $(document).mouseup(function (e) {
         $(".example_date_form").hide();
        var container = $('#old_input_form');
        if (container.has(e.target).length === 0){
            
            container.val('');
        }
    });    
    $(document).on('click','[data-form-modul = "open_form"]', function(event) {
        event.stopPropagation();
        var value = $(this).attr('data-value');
        var name = $(this).attr('data-name');
        $("body").css({"overflow":"hidden"});
       /* var click_e = $(this).attr('data-status-form');
        var id_e = $(this).attr('data-id');
        var value = $(this).attr('data-value');
        var page = $(this).attr('data-page-name');
        var name = $(this).attr('data-name');*/
        
        $.ajax({
            url: 'ajax/'+value+'.php',
            type: 'POST',
            cache: false,
            data: {'name':name},
            dataType: 'html',
            success: function(data) {
                $(".popup_box").html(data);
                $(".popup_box").fadeIn(150);
            }
        }); 
    });
    
    
    
    scrolTop = $(document).scrollTop();
    if(scrolTop > 400){
        $(".img_autor").css({
            'width':'750px',
            'height':'909px',
        });  
        if($('#lottie-player-1').length === 0){
            $(".info_autor").after('<lottie-player id="lottie-player-1" src="img/content/lottie_fomin.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:rlative;" autoplay></lottie-player>');
        } 
    }
   /* if(widthClient < 1280){
        if($('#lottie-player-1').length === 0){
            $(".info_autor").after('<lottie-player id="lottie-player-1" src="img/content/lottie_fomin.json" background="transparent" speed="0.8" style="width:100%; height: auto; z-index:4; position:rlative;" autoplay></lottie-player>');
        }
    }*/
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
        //}
    });
});