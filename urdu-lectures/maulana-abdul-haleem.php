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
					echo reciterHeader($current); 
				?>  
				
			</div>   	  
		    <div class="row reciter-container" id="youtube-videos">	
				<script>
					var videosURL = ["NoNiHznvbDo","3enEjjuYLD0","Ihyl-YQXUCQ","4amhb0LkSDM","XcwWQLK0Uck",""];
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
				<?php  include $path . '/player/player_code.php';     ?> 
				<div id="playlist_list">
					<!-- local playlist -->
					<ul id='clear'></ul>
					<ul id='playlist1'>
						 
					</ul>
				</div> 	    
		    </div>
			
			<div class="row reciter-container">		
					<br> 			
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Quran Reciters Pages Unit -->
					<ins class="adsbygoogle"
						 style="display:inline-block;width:100%;height:90px"
						 data-ad-client="ca-pub-9126659759556489"
						 data-ad-slot="5287989599"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>    
		    </div> 
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة</strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p>Hafidh Talha Abdul Waheed is Qari' and a Qur'an teacher from Dallas, Texas USA. Listen to his amazing recitations at the Quran Reciters. He has been leading taraweeh in various masajid in the U.S.</p>
				</div>  	
			</div>

</div>
			 



<?php  include $path . '/pages/footer.php'; ?>

