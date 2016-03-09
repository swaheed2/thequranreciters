<?php  
		$path = $_SERVER['DOCUMENT_ROOT'];
	$section = "reciters"; 
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); 
	$current = $urdus["$basename"]; 
	
	    
?>  
<div class="container">
			<div class="row reciter-container">
				<?php 
					echo reciterHeaderNew($current,$user->logged_in); 
				?>
				
			</div> 
		    <div class="row reciter-container" id="youtube-videos">	
					<script>
						var videosURL = ["jFs-xL_GJrE","J9t4sxR6kpI","cdpxysrEL_E","8S0E5jlZgJ4","5Ark2mPTZMs","-N_lhQuewrc","lX3G9UaGAxw","bav_XYNrQ0M","cQ77VaTI_eE","syP-zLBNSqQ","","",""];
					</script>	 
					<?php  include $path . '/pages/videos.php';     ?>  	 	
 
					 
		    </div>  
			<?php  include $path . '/pages/gallery.php';     ?> 
			<div class="row reciter-container">		
				<?php  include $path . '/player/player_code.php';     ?> 
				<div id="playlist_list">
					<!-- local playlist -->
					<ul id='clear'></ul>
					<ul id='playlist1'>
						 
					</ul>
				</div> 	    
		    </div> 
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<p class="reciters"><strong>Biography |  </p>
				</div>
				<div id="reciter-bio">
					<p> </p>
				</div>  	
			</div>

</div>
			 



<?php  include $path . '/pages/footer.php'; ?>

