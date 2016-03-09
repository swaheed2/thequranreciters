<?php  
		$path = $_SERVER['DOCUMENT_ROOT'];
	$section = "reciters"; 
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); 
	$current = $reciters["$basename"]; 
	
	    
?>  

<div class="container">
			<div class="row reciter-container">
				<?php 
					echo reciterHeaderNew($current,$user->logged_in);  
				?>  
				
			</div> 
	        <div class="row reciter-container">	  
					   <div class=" archive-playlist-title">
											<p class="reciters">Selected Surahs </p> 
						</div>
						<?php  include $path . '/player/player_code.php';     ?> 
					
						<div id="playlist_list">
						<!-- local playlist -->
							<ul id='playlist1'>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/umair-sultan//al-kahf-umair-sultan.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>al-kahf-umair-sultan </a><a class='dlink' href=' https://archive.org/download/umair-sultan/al-kahf-umair-sultan.mp3' data-dlink=' https://archive.org/download/umair-sultan/al-kahf-umair-sultan.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/umair-sultan//yunus-umair-bin-sultan.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>yunus-umair-bin-sultan </a><a class='dlink' href=' https://archive.org/download/umair-sultan/yunus-umair-bin-sultan.mp3' data-dlink=' https://archive.org/download/umair-sultan/yunus-umair-bin-sultan.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/umair-sultan//Mp3.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>سورة إبراهيم  </a><a class='dlink' href=' https://archive.org/download/umair-sultan/Mp3.mp3' data-dlink=' https://archive.org/download/umair-sultan/Mp3.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
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
				<?php 
					echo getGallery($current); 
				?>  
				
				 
			  
		    </div> 
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة</strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p>Umair bin Sultan is a hafidh-ul-qur'an from Saudi Arabia. Listen to his recitation only on the Quran Reciters!
</p>
				</div>  	
			</div>
			
</div>			


<?php echo Core::doForm("passReset",$path . "/pages/login/ajax/user.php");?>
<?php include("footer.php");?>
<?php  include $path . '/pages/footer.php'; ?>