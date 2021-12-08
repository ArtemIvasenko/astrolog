<?php
$name = htmlspecialchars($_POST['name']);

if($name == "1"){ $left_slide_pos = "left_slide_pos_1"; $data_pos = "0"; }
else if($name == "2"){ $left_slide_pos = "left_slide_pos_2"; $data_pos = "-320";}
else if($name == "3"){ $left_slide_pos = "left_slide_pos_3"; $data_pos = "-640";}
else if($name == "4"){ $left_slide_pos = "left_slide_pos_4"; $data_pos = "-960";}
else if($name == "5"){ $left_slide_pos = "left_slide_pos_5"; $data_pos = "-1280";}
else if($name == "6"){ $left_slide_pos = "left_slide_pos_6"; $data_pos = "-1600";}
else if($name == "7"){ $left_slide_pos = "left_slide_pos_7"; $data_pos = "-1920";}
else if($name == "8"){ $left_slide_pos = "left_slide_pos_8"; $data_pos = "-2240";}
else if($name == "9"){ $left_slide_pos = "left_slide_pos_9"; $data_pos = "-2560";}
else if($name == "10"){ $left_slide_pos = "left_slide_pos_10"; $data_pos = "-2880";}
else if($name == "11"){ $left_slide_pos = "left_slide_pos_11"; $data_pos = "-3200";}
else if($name == "12"){ $left_slide_pos = "left_slide_pos_12"; $data_pos = "-3520";}
else if($name == "13"){ $left_slide_pos = "left_slide_pos_13"; $data_pos = "-3840";}
?>
<div class="exit_popup">✕</div>
<div class="content_popup_fb">
    <button class="slick_prev_popup arrow_slick_rrr" id="arrow_back"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
    <button class="slick_next_popup arrow_slick_rrr" id="arrow_next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
    <div class="flex_box_text <?php echo $left_slide_pos;?>" data-position="<?php echo $data_pos;?>">
        <div class="video_box_slcik"><img src="img/feedback/feedback_002.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_003.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_004.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_005.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_006.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_007.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_008.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_009.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_010.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_011.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_012.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_013.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_014.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        <div class="video_box_slcik"><img src="img/feedback/feedback_015.jpg" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%"></div>
        
        <?/*<img src="img/feedback/<?php echo $name;?>.webp" alt="Отзыв оразборе судьбы от Максима Фоминых" width="100%">*/?>
    </div>
</div>
<script>
    $(document).ready(function(){
        var disabled = false;
        var posdata=$(".flex_box_text").attr("data-position");
        posdata = Number.parseInt(posdata);
        if(posdata == 0){
            $("#arrow_back").hide();
        }else if(posdata == -3840){
            $("#arrow_next").hide();
        }
        $(document).on('click', '.arrow_slick_rrr', function(){
            if(!disabled){
                disabled = true;
                var idarrow=this.id;
                posdata=$(".flex_box_text").attr("data-position");
                posdata = Number.parseInt(posdata);
                if(idarrow == "arrow_back"){
                    $("."+"<?php echo $left_slide_pos;?>").animate({left:posdata+320+"px"}, 500, function() {
                        disabled = false;
                    });
                    $(".flex_box_text").attr("data-position", posdata+320);
                }else if(idarrow == "arrow_next"){
                    $("."+"<?php echo $left_slide_pos;?>").animate({left:posdata-320+"px"}, 500, function() {
                        disabled = false;
                    });
                    
                    $(".flex_box_text").attr("data-position", posdata-320);
                }
                posdata=$(".flex_box_text").attr("data-position");
                posdata = Number.parseInt(posdata);
                if(posdata == 0){
                    $("#arrow_back").hide();
                }else if(posdata == -3840){
                    $("#arrow_next").hide();
                }else{
                    $("#arrow_back, #arrow_next").show();
                }
            }
        });
    });
</script>