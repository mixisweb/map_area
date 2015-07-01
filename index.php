  <!-- Add jQuery library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<!-- Add maphilight plugin -->
	<script src="<?php echo esc_url( get_stylesheet_directory_uri().'/js/jquery.maphilight.js' ); ?>" type="text/javascript"></script>
	<!-- Add RWD Image Maps plugin -->
	<script src="<?php echo esc_url( get_stylesheet_directory_uri().'/js/jquery.rwdImageMaps.min.js' ); ?>" type="text/javascript"></script>
	<!-- Activate RWD Image Maps plugin  -->
	<script type="text/javascript">
		$(document).ready(function(e) {
    		$('img[usemap]').rwdImageMaps();
    		$('img[usemap]').maphilight();
		});
		
		$(window).on("orientationchange",function(){
			location.reload();
		});
		
		$(window).bind('resize', function(e){
			window.resizeEvt;
			$(window).resize(function(){
				clearTimeout(window.resizeEvt);
				window.resizeEvt = setTimeout(function(){
					if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
						location.reload();
					}
				}, 100);
			});
		});
	</script>
