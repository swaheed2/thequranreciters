<?php  
		$path = $_SERVER['DOCUMENT_ROOT'];
	$section = "reciters"; 
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); 
	$current = $reciters["$basename"]; 
	
	$videos = array("dIYkBnT4xv8","a53nusASGB8","Ng1fSpuyFi8");
	    
?>  
<div class="container">
			<div class="row reciter-container">
				<?php 
					echo reciterHeaderNew($current,$user->logged_in);  
				?>  
				
			</div>	
	        <div class="row reciter-container">	  
					   <div class=" archive-playlist-title">
											<p class="reciters">The Complete Holy Quran | القرآن الكريم</p> 
						</div>
						<?php  include $path . '/player/player_code.php';     ?> 
					
						<div id="playlist_list">
						<!-- local playlist -->
							<ul id='playlist1'> 
								  <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/qari-hahsim-abbasi-ramadan-2015//Al-Imran [42-60].mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Imran [42-60] </a><a class='dlink' href=' https://archive.org/download/qari-hahsim-abbasi-ramadan-2015/Al-Imran [42-60].mp3' data-dlink=' https://archive.org/download/qari-hahsim-abbasi-ramadan-2015/Al-Imran [42-60].mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
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
						foreach($videos as $video){
							echo '<div class="col-md-4 col-sm-6"><iframe width="100%" height="250" src="//www.youtube.com/embed/';
							echo $video;
							echo '?rel=0" frameborder="0" allowfullscreen></iframe> <a href="http://www.yt-mp3.com/watch?v=';
							echo $video;
							echo '"  onClick="return YoutubeMp3Script(this)" class="btn btn-danger btn-lg btn-block" role="button"><i class="fa fa-music"> Download Mp3</i></a> </div> '; 
						} 
					?>
			 
		    </div>   
			<div class="row reciter-container">	
				<?php 
					echo getGallery($current); 
				?>  
			  
		    </div> 
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة <strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p>Qari Hashim Abbasi is a famous reciter in the United States known for his excellent teaching style for young students.</p>
				</div>  	
			</div> 
			


</div> 


		 

<?php  include $path . '/pages/footer.php'; ?>		

				