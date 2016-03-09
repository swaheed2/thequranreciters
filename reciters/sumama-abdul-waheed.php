<?php  
	$path = $_SERVER['DOCUMENT_ROOT'];
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); 
	$current = $reciters["$basename"]; 
	$section = 'reciters'; 
	$pageId = $current["name"];
	$pageId = str_replace(' ', '', $pageId);
	    
?>  
<div class="container">
			<div class="row reciter-container">
				<?php 
					echo reciterHeaderNew($current,$user->logged_in);  
				?>   
			</div>  
	        <div class="row reciter-container">	  
					   <div class="row btns-player-catagory">  
							<a href='#' class=" btn btn-success" role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#playlist1'}); return false;"><i class="fa fa-book"></i> Ramadan 2015 - Renaissance Academy - Austin, TX </a> 

							<a href='#' class=" btn " role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#ramadan-2014'}); return false;"><i class="fa fa-book"></i> Ramadan 2014- Atlantic City NJ</a>   

							<a href='#' class="btn btn-black" role="button"  onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#clear'}); return false;"><i class="fa fa-bars"></i> Clear</a> 
						<script>
							$(function() {
							  $('.btn').click( function() {
								$(this).addClass('btn-success').siblings().removeClass('btn-success');
							  });
							});
						</script>
						</div> 
						<?php  include $path . '/player/player_code.php';     ?> 
					
						<div id="playlist_list">
						<!-- local playlist -->
							<ul id='clear'> 
							
							</ul>
							<ul id='playlist1'>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/ramadan-2015-hafidh-sumama-abdul-waheed//Al-imran55-78.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Imran [55-78] </a><a class='dlink' href=' https://archive.org/download/ramadan-2015-hafidh-sumama-abdul-waheed/Al-imran55-78.mp3' data-dlink=' https://archive.org/download/ramadan-2015-hafidh-sumama-abdul-waheed/Al-imran55-78.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/ramadan-2015-hafidh-sumama-abdul-waheed//Al-Baqarah-230-235.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Baqarah-230-235 </a><a class='dlink' href=' https://archive.org/download/ramadan-2015-hafidh-sumama-abdul-waheed/Al-Baqarah-230-235.mp3' data-dlink=' https://archive.org/download/ramadan-2015-hafidh-sumama-abdul-waheed/Al-Baqarah-230-235.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/ramadan-2015-hafidh-sumama-abdul-waheed//Al-araaf94-105.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-A'raaf [94-105] </a><a class='dlink' href=' https://archive.org/download/ramadan-2015-hafidh-sumama-abdul-waheed/Al-araaf94-105.mp3' data-dlink=' https://archive.org/download/ramadan-2015-hafidh-sumama-abdul-waheed/Al-araaf94-105.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							</ul>
							<ul id='ramadan-2014'>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama-abdul-waheed//ghafir-ramadan2014-sw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ghafir-ramadan2014-sw </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama-abdul-waheed/ghafir-ramadan2014-sw.mp3' data-dlink=' https://archive.org/download/hafidh-sumama-abdul-waheed/ghafir-ramadan2014-sw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama-abdul-waheed//qasas-ramadan2014-sw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>qasas-ramadan2014-sw </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama-abdul-waheed/qasas-ramadan2014-sw.mp3' data-dlink=' https://archive.org/download/hafidh-sumama-abdul-waheed/qasas-ramadan2014-sw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama-abdul-waheed//tahreem-ramadan2014-sw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>tahreem-ramadan2014-sw </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama-abdul-waheed/tahreem-ramadan2014-sw.mp3' data-dlink=' https://archive.org/download/hafidh-sumama-abdul-waheed/tahreem-ramadan2014-sw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama-abdul-waheed//al-imran-ramadan2014-sw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>al-imran-ramadan2014-sw </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama-abdul-waheed/al-imran-ramadan2014-sw.mp3' data-dlink=' https://archive.org/download/hafidh-sumama-abdul-waheed/al-imran-ramadan2014-sw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama-abdul-waheed//maaarij-ramadan2014-sw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ma'aarij-ramadan2014-sw </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama-abdul-waheed/maaarij-ramadan2014-sw.mp3' data-dlink=' https://archive.org/download/hafidh-sumama-abdul-waheed/maaarij-ramadan2014-sw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								</ul>
								
								<ul id='others'>
									<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama//79_Naaziaat.MP3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>79_Naaziaat </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama/79_Naaziaat.MP3' data-dlink=' https://archive.org/download/hafidh-sumama/79_Naaziaat.MP3'><img src='media/data/dlink.png' alt = ''/></a></li>
									<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama//An-Nisaa_HSumama.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>An-Nisaa </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama/An-Nisaa_HSumama.mp3' data-dlink=' https://archive.org/download/hafidh-sumama/An-Nisaa_HSumama.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
									<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama//Az-Zukhruf_HSumama.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Az-Zukhruf </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama/Az-Zukhruf_HSumama.mp3' data-dlink=' https://archive.org/download/hafidh-sumama/Az-Zukhruf_HSumama.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
									<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama//Surah Furqan.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Surah Furqan </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama/Surah Furqan.mp3' data-dlink=' https://archive.org/download/hafidh-sumama/Surah Furqan.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
									<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-sumama//Fatir Isha Prayer.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Fatir Isha Prayer </a><a class='dlink' href=' https://archive.org/download/hafidh-sumama/Fatir Isha Prayer.mp3' data-dlink=' https://archive.org/download/hafidh-sumama/Fatir Isha Prayer.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
									</ul>
						</div>  
			</div> 
			<div class="row reciter-container">	
					<div class="col-md-4 col-sm-6 video-div"><iframe width="100%" height="315" src="//www.youtube.com/embed/CaNDZA6HH-0?rel=0" frameborder="0" allowfullscreen></iframe> 
						<a href="http://www.yt-mp3.com/watch?v=CaNDZA6HH-0"  onClick="return YoutubeMp3Script(this)" class="btn btn-danger btn-lg btn-block" role="button"><i class="fa fa-music"> Download Mp3</i></a>
					</div>
					<div class="col-md-4 col-sm-6 video-div"><iframe width="100%" height="315" src="//www.youtube.com/embed/XtY_d7gBqGk?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="http://www.yt-mp3.com/watch?v=XtY_d7gBqGk"  onClick="return YoutubeMp3Script(this)" class="btn btn-danger btn-lg btn-block" role="button"><i class="fa fa-music"> Download Mp3</i></a>
					</div>
					<div class="col-md-4 col-sm-6 video-div"><iframe width="100%" height="315" src="//www.youtube.com/embed/v0RBu4ffrik?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="http://www.yt-mp3.com/watch?v=v0RBu4ffrik"  onClick="return YoutubeMp3Script(this)" class="btn btn-danger btn-lg btn-block" role="button"><i class="fa fa-music"> Download Mp3</i></a>
					</div>
					<div class="col-md-4 col-sm-6 video-div"><iframe width="100%" height="315" src="//www.youtube.com/embed/DuenZxGqqY4?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="http://www.yt-mp3.com/watch?v=DuenZxGqqY4"  onClick="return YoutubeMp3Script(this)" class="btn btn-danger btn-lg btn-block" role="button"><i class="fa fa-music"> Download Mp3</i></a>
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
			    <h1><strong>Biography | سيرة</strong>  </h1>	 <br> 
				<div id="reciter-bio">
					<p>Hafidh Sumama (Thumamah) Abdul Waheed is Qari' and a Qur'an teacher from Dallas, Texas USA. Listen to his  recitations at the Quran Reciters. He has been leading taraweeh in various masajid in the U.S. </p>
				</div>  	
			</div>
 

</div>
			 
 

<?php  include $path . '/pages/footer.php'; ?>

