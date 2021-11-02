<?php
$name = htmlspecialchars($_POST['name']);
$autoplay_v1="";
$autoplay_v2="";
$autoplay_v3="";
$autoplay_v4="";
if($name == "1"){ $left_slide_pos = "left_slide_pos_1"; $data_pos = "0"; $autoplay_v1="autoplay";}
else if($name == "2"){ $left_slide_pos = "left_slide_pos_2"; $data_pos = "-320";$autoplay_v2="autoplay";}
else if($name == "3"){ $left_slide_pos = "left_slide_pos_3"; $data_pos = "-640";$autoplay_v3="autoplay";}
else if($name == "4"){ $left_slide_pos = "left_slide_pos_4"; $data_pos = "-960";$autoplay_v4="autoplay";}
else if($name == "5"){ $left_slide_pos = "left_slide_pos_5"; $data_pos = "-640";$autoplay_v3="autoplay";}
else if($name == "6"){ $left_slide_pos = "left_slide_pos_6"; $data_pos = "-960";$autoplay_v4="autoplay";}
else if($name == "7"){ $left_slide_pos = "left_slide_pos_7"; $data_pos = "-960";$autoplay_v4="autoplay";}
?>
<div class="exit_popup">✕</div>
<div class="content_popup_fb none_border_rad">
    <button class="slick_prev_popup arrow_slick_rrr" id="arrow_back"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
    <button class="slick_next_popup arrow_slick_rrr" id="arrow_next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
    <div class="flex_box_videos <?php echo $left_slide_pos;?>" data-position="<?php echo $data_pos;?>">
        <div class="video_box_slcik">
            <video width="100%" controls="controls" id="video0">
               <source src="video/feedback/feedback_v001.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div>
        <div class="video_box_slcik">
            <video width="100%" controls="controls" id="video-320">
               <source src="video/feedback/feedback_v007.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div>
        <div class="video_box_slcik">
            <video width="100%" controls="controls" id="video-640">
               <source src="video/feedback/feedback_v002.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div>
        <div class="video_box_slcik">
            <video width="100%" controls="controls" id="video-960">
               <source src="video/feedback/feedback_v006.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div>
        <div class="video_box_slcik">
            <video width="100%" controls="controls" id="video-1280">
               <source src="video/feedback/feedback_v003.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div> 
        <div class="video_box_slcik">
            <video width="100%" controls="controls" id="video-1600">
               <source src="video/feedback/feedback_v005.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div> 
        <div class="video_box_slcik">
            <video width="100%" controls="controls" id="video-1920">
               <source src="video/feedback/feedback_v004.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div> 
    </div>
</div>

<script type="text/javascript" src="libs/slick-1.8.1/slick/slick.min.js"></script>
<script>
   $(document).ready(function(){
        var disabled = false;
        var posdata=$(".flex_box_videos").attr("data-position");
        posdata = Number.parseInt(posdata);
        
        
        if(posdata == 0){
            $("#arrow_back").hide();
        }else if(posdata == -1920){
            $("#arrow_next").hide();
        }
       
        $(document).on('click', '.arrow_slick_rrr', function(){
            if(!disabled){
                disabled = true;
                var idarrow=this.id;
                posdata=$(".flex_box_videos").attr("data-position");
                posdata = Number.parseInt(posdata);
                if(idarrow == "arrow_back"){
                   // $("#video"+posdata).trigger('pause');
                    $("."+"<?php echo $left_slide_pos;?>").animate({left:posdata+320+"px"}, 500, function() {
                      //  $("#video"+posdata).trigger('play');
                        disabled = false;
                    });
                    $(".flex_box_videos").attr("data-position", posdata+320);
                }else if(idarrow == "arrow_next"){
                    //$("#video"+posdata).trigger('pause');
                    $("."+"<?php echo $left_slide_pos;?>").animate({left:posdata-320+"px"}, 500, function() {
                       // $("#video"+posdata).trigger('play');
                        disabled = false;
                    });
                    
                    $(".flex_box_videos").attr("data-position", posdata-320);
                }
                posdata=$(".flex_box_videos").attr("data-position");
                posdata = Number.parseInt(posdata);
                if(posdata == 0){
                    $("#arrow_back").hide();
                }else if(posdata == -1920){
                    $("#arrow_next").hide();
                }else{
                    $("#arrow_back, #arrow_next").show();
                }
            }
        });
        
   });
</script>