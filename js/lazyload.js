$(document).ready(function() {
	$('.img_bckg_rot').attr('src','img/content/2150-min.jpg');
	$('.img_autor').attr('src','img/content/fominyh_krug-min.jpg');

	$('.video-container img').remove();
	$('.video-container').append('<video class="bgvid" id="videoId" preload="auto" playsinline muted autoplay="autoplay" loop="loop" webkit-playinginline poster="img/content/video_img.jpg" loading="eager"> <source src="video/1_block.mp4" type="video/mp4"> <source src="video/1_block.jpg" type="video/webp"> </video> <div class="transition_box_v"></div>')

	var load = false
	$(window).on("scroll", function() {

    if (($(window).scrollTop() > 50) && (load == false)) {
	    	$.ajax({
	        async: false,
	        url: 'lazyload/experience.php',
	        data: {
	         
	        },
	        type: 'POST',
	        success: function(data) {
	            $('.experience').append(data);
	        },
	        error: function(data) {

	        }
	    });
	    $.ajax({
	        async: false,
	        url: 'lazyload/profit.php',
	        data: {
	         
	        },
	        type: 'POST',
	        success: function(data) {
	            $('#profit').append(data);
	        },
	        error: function(data) {

	        }
	    });
	    load = true;
	    }
    });

    var load_footer = false
	$(window).on("scroll", function() {

    if (($(window).scrollTop() > 500) && (load_footer == false)) {
	    	
	    $.ajax({
	        async: false,
	        url: 'lazyload/footer.php',
	        data: {
	         
	        },
	        type: 'POST',
	        success: function(data) {
	            $('.footer_content').append(data);
	        },
	        error: function(data) {

	        }
	    });
	    load_footer = true;
	    }
    });

    var load_steps = false
	$(window).on("scroll", function() {

    if (($(window).scrollTop() > 500) && (load_steps == false)) {
	    	
	    $.ajax({
	        async: false,
	        url: 'lazyload/steps.php',
	        data: {
	         
	        },
	        type: 'POST',
	        success: function(data) {
	            $('#steps').append(data);
	        },
	        error: function(data) {

	        }
	    });
	    load_steps = true;
	    }
    });
	
});