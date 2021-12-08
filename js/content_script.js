
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
    
    
    
    
});