<?php  
	$path = $_SERVER['DOCUMENT_ROOT']; 
	$section = 'reciters'; 
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); 
	$current = $mujawwads["$basename"]; 
	    
?>  
<div class="container">
			<div class="row reciter-container">
				<?php 
					echo reciterHeader($current); 
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
						<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//ghalwash_hashrbalad.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ghalwash_hashr&balad </a><a class='dlink' href=' https://archive.org/download/quran_462/ghalwash_hashrbalad.mp3' data-dlink=' https://archive.org/download/quran_462/ghalwash_hashrbalad.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
						 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//ghalwash_ibrahim_tanah_new.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ghalwash_ibrahim_tanah_new </a><a class='dlink' href=' https://archive.org/download/quran_462/ghalwash_ibrahim_tanah_new.mp3' data-dlink=' https://archive.org/download/quran_462/ghalwash_ibrahim_tanah_new.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
						 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//Ghalwash_RahmanQessar.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Ghalwash_Rahman&Qessar </a><a class='dlink' href=' https://archive.org/download/quran_462/Ghalwash_RahmanQessar.mp3' data-dlink=' https://archive.org/download/quran_462/Ghalwash_RahmanQessar.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
						 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//ghalwash_qafhaqahalaq.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ghalwash_qafhaqahalaq </a><a class='dlink' href=' https://archive.org/download/quran_462/ghalwash_qafhaqahalaq.mp3' data-dlink=' https://archive.org/download/quran_462/ghalwash_qafhaqahalaq.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
						 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//ghalwash_yonusaala.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ghalwash_yonusaala </a><a class='dlink' href=' https://archive.org/download/quran_462/ghalwash_yonusaala.mp3' data-dlink=' https://archive.org/download/quran_462/ghalwash_yonusaala.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
						 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//Ghalwash-anbiaa1966.ram' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ghalwash-anbiaa 1966 </a><a class='dlink' href=' https://archive.org/download/quran_462/Ghalwash-anbiaa1966.ram' data-dlink=' https://archive.org/download/quran_462/Ghalwash-anbiaa1966.ram'><img src='media/data/dlink.png' alt = ''/></a></li>
						 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//Qaf7aqqabalad3alaqTanboul.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Qaf&7aqqa&balad&3alaq(Tanboul) </a><a class='dlink' href=' https://archive.org/download/quran_462/Qaf7aqqabalad3alaqTanboul.mp3' data-dlink=' https://archive.org/download/quran_462/Qaf7aqqabalad3alaqTanboul.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
						 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//qamar-ghalwash.rm' data-ogg='' data-download><a class='playlistNonSelected' href='#'>qamar-ghalwash </a><a class='dlink' href=' https://archive.org/download/quran_462/qamar-ghalwash.rm' data-dlink=' https://archive.org/download/quran_462/qamar-ghalwash.rm'><img src='media/data/dlink.png' alt = ''/></a></li>
						 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//Ghalwash_qamr__rahman1986.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ghalwash_qamr__rahman 1986 </a><a class='dlink' href=' https://archive.org/download/quran_462/Ghalwash_qamr__rahman1986.mp3' data-dlink=' https://archive.org/download/quran_462/Ghalwash_qamr__rahman1986.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
						 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/quran_462//qalam.rm' data-ogg='' data-download><a class='playlistNonSelected' href='#'>qalam </a><a class='dlink' href=' https://archive.org/download/quran_462/qalam.rm' data-dlink=' https://archive.org/download/quran_462/qalam.rm'><img src='media/data/dlink.png' alt = ''/></a></li> 
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
					<p>he Sheikh Raghib Mostafa Galwash, a Koran recitor at Dassouqi mosque in Dassouqi city. He was born on the 15th of July in 1938 in Barma Village, Tanta centre, in Algharbiya province. He entered the Koutab at a young age to learn Koran.

					At the age of fourteen, he accepted the neighbouring inhabitant’s requests which was about reciting Koran for them.

					During that period, his major rivals were Sheikh Khaleel Al Hosary and Sheikh Mostafa Ismael (they were from the same region as him –Tanta-). He travelled around several countries (Kuwait - UAE - Saudi Arabia) during Ramadan.

					He owns a full recording of the Koran as well.</p>
				</div>  	
			</div>
			 	

</div>


			 



		 
				  		
		
<?php  include $path . '/pages/footer.php'; ?>

