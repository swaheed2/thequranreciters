<?php  
	$path = $_SERVER['DOCUMENT_ROOT'];
	$section = "reciters"; 
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); 
	$current = $englishs["$basename"]; 
 
	    
?>  
<div class="container">
			<div class="row reciter-container">
				<?php  
					echo reciterHeader($current); 
				?>  
				
			</div>
			<div class="row reciter-container">	
					<div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Ramadan 2015</strong>  </h1>
					</div> 
					<iframe src="https://archive.org/embed/ramadan-2015-dr-yasir-qadhi&playlist=1" width="100%" height="190px;" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe> 
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
				<iframe width="100%" height="400" src="//www.youtube.com/embed/videoseries?list=PLAEA99D24CA2F9A8F" frameborder="0" allowfullscreen></iframe>
			</div>

			<div class="row reciter-container">	
					<div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Big collection of videos and and downloadable mp3 audios</strong>  </h1>
					</div> 
					<iframe src="https://archive.org/embed/dr-yasir-qadhi-audio-lectures&playlist=1" width="100%" height="480px" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe> 
		    </div> 
			 
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة</strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p>Sh. Dr. Yasir Qadhi is someone that believes that one's life should be judged by more than just academic degrees and scholastic accomplishments. 
					Friends and foe alike acknowledge that one of his main weaknesses is ice-cream, which he seems to enjoy with a rather sinister passion. 
					The highlight of his day is twirling his little girl (a.k.a. 'my little princess') round and round in the air and watching her squeal with joy. 
					A few tid-bits from his mundane life: Sh. Yasir has a Bachelors in Hadith and a Masters in Theology from Islamic University of Madinah, and a 
					PhD in Islamic Studies from Yale University. He is an instructor and Dean of Academic Affairs at AlMaghrib, and the Resident Scholar of the Memphis Islamic Center.
					</p>
				</div>  	
			</div>
			
</div>			



<?php  include $path . '/pages/footer.php'; ?>
