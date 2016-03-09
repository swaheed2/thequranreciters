
	<?php 
		
		if($user->logged_in == FALSE){ 
			echo '<script>'; 
				$result = $_SERVER['REQUEST_URI'];
				echo '$( "a.dlink" ).replaceWith("';
				echo "<a class='dlink-login' href='/login/index.php?location=";
				echo $result;
				echo "'data-dlink='"; 
				echo '/login/index.php?location=';
				echo $result;
				echo "' >Login to download</a>";
				echo '" );';
			echo '</script>';
			//echo "<script> $('.dlink').addClass('hide-div');</script>";
		}
 


		$host = $_SERVER['REQUEST_URI']; 
		$path = $_SERVER['DOCUMENT_ROOT'];
		if((strpos($host, 'login') == FALSE) || (strpos($host, 'privacypolicy') == FALSE)  ) {
			include $path. '/pages/comments/leave-comment.php'; 
		}
	?>
	<div class="container">
		<div class="row reciters-container">
			<center><p> Copyright &copy; <?php echo date("Y") ?>. All Right Reserved . <a href = "/pages/more/privacypolicy">Privacy Policy</a> </p></center>
		</div>
	</div>
		
			 
<script type="text/javascript">
	<?php 
		if($current != "home"){
			$pageId = $current["name"];
		}
		else 
			$pageId = $current;
		$pageId = str_replace(' ', '', $pageId);
		$path = $_SERVER['DOCUMENT_ROOT']; 
		
		
		
	?>
	  
	var pageId = "<?php echo $pageId; ?>";
	 
	
	 
	
</script>  
		
        
        <script src="/js/plugins.js"></script>
        <script src="/js/bootstrap.min.js"></script>
		<script src="/js/jquery.meanmenu.js"></script> 
		<script src='https://www.google.com/recaptcha/api.js'></script>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		<script src="/js/jquery.switchButton.js"></script>
		
		<script>
			jQuery(document).ready(function($) {
              $('.owl-carousel').owlCarousel({
                items: 4,
				center: true,
				loop:true,
				nav: false,
				autoplay: true,
                lazyLoad: true,
                loop: true, 
                margin: 10,
				autoWidth: true,
				responsive: true,
				responsive : {
					350:{
						items:3
					},
					600:{
						items:3 
					}, 
					1000:{
						items:5,
					}
				}
				
              });
            });
		</script> 
		
		<!-- Include js plugin -->
		<script src="/img/owl-carousel/owl.carousel.min.js"></script> 
		
		<?php
			$host = $_SERVER['REQUEST_URI']; 
			if( (strpos($host, 'reciters') !== FALSE) || (strpos($host, 'hajjaj-al-hindawi') != FALSE) || (strpos($host, 'english-lectures') != FALSE) || (strpos($host, 'urdu-lectures') != FALSE) ){  
				echo '<script type="text/javascript" src="/player/js/swfobject.js"></script>' ;	
				echo '' ;	
				echo '<script type="text/javascript" src="/player/js/jquery.mousewheel.min.js"></script>' ;	
				echo '<script type="text/javascript" src="/player/js/jquery.jscrollpane.min.js"></script>' ;	
				echo '<script type="text/javascript" src="/player/js/id3-minimized.js"></script>' ;	
				echo '<script type="text/javascript" src="/player/js/jquery.html5audio.min.js"></script>' ;	
				echo '<script type="text/javascript" src="/player/js/jquery.html5audio.func.js"></script>' ;	
				echo '<script type="text/javascript" src="/player/js/jquery.html5audio.settings_full2.js"></script>' ;	 
			}
		?> 
    </body>
</html>
