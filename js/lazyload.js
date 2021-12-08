$(document).ready(function() {
	const loadlist = {
		autor: 0,
		experience: 50,
		profit: 500,
		video_reviews: 600,
		text_reviews:  700,
		form: 800,
		footer: 900,

	}

	function loadsite(loadlist) {
		for (load in loadlist) {
			if ($(window).scrollTop() >= loadlist[load] && loadlist[load] !== null){
				loadlist[load] = null;
				
				(function(i){
					$.ajax({
						async: true,
						url: `lazyload/${i}.php`,
						data: {
							
						},
						type: 'POST',
						success: function(data) {
							console.log(i);
							$('#'+i).append(data);
						},
						error: function(data) {
							loadlist[i]=0
						}		
					});
				})(load)
			}
		}
	}

	

	loadsite(loadlist);

	$('.img_bckg_rot').attr('src','img/content/2150-min.jpg');

	$('.video-container img').remove();
	$('.video-container').append('<video class="bgvid" id="videoId" preload="auto" playsinline muted autoplay="autoplay" loop="loop" webkit-playinginline poster="img/content/video_img.jpg" loading="eager"> <source src="video/1_block.mp4" type="video/mp4"> <source src="video/1_block.jpg" type="video/webp"> </video> <div class="transition_box_v"></div>')

	
	
	
	$(window).on("scroll", function(){
		loadsite(loadlist);
	});
});