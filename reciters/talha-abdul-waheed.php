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
					   <div class="row btns-player-catagory">  
							<a href='#' class=" btn btn-success" role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#playlist1'}); return false;"><i class="fa fa-book"></i> Ramadan 2015 - Renaissance Academy - Austin, TX </a> 

							<a href='#' class=" btn " role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#ramadan-2014'}); return false;"><i class="fa fa-book"></i> Ramadan 2014</a> 

							<a href='#' class=" btn " role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#ramadan-2013'}); return false;"><i class="fa fa-book"></i>  Ramadan 2013</a>  

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
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/ramadan-2105-hafidh-talha-abdul-waheed//Al-Baqarah [14-20].mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Baqarah [14-20] </a><a class='dlink' href=' https://archive.org/download/ramadan-2105-hafidh-talha-abdul-waheed/Al-Baqarah [14-20].mp3' data-dlink=' https://archive.org/download/ramadan-2105-hafidh-talha-abdul-waheed/Al-Baqarah [14-20].mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
						    </ul>
							<ul id='ramadan-2014'>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-talha-abdul-waheed//ahraf-ramadan2014-tw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ahraf-ramadan2014-tw </a><a class='dlink' href=' https://archive.org/download/hafidh-talha-abdul-waheed/ahraf-ramadan2014-tw.mp3' data-dlink=' https://archive.org/download/hafidh-talha-abdul-waheed/ahraf-ramadan2014-tw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-talha-abdul-waheed//ibrahim-ramadan2014-tw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>ibrahim-ramadan2014-tw </a><a class='dlink' href=' https://archive.org/download/hafidh-talha-abdul-waheed/ibrahim-ramadan2014-tw.mp3' data-dlink=' https://archive.org/download/hafidh-talha-abdul-waheed/ibrahim-ramadan2014-tw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-talha-abdul-waheed//isra-ramadan2014-tw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>isra-ramadan2014-tw </a><a class='dlink' href=' https://archive.org/download/hafidh-talha-abdul-waheed/isra-ramadan2014-tw.mp3' data-dlink=' https://archive.org/download/hafidh-talha-abdul-waheed/isra-ramadan2014-tw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hafidh-talha-abdul-waheed//qaaf-ramadan2014-tw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>qaaf-ramadan2014-tw </a><a class='dlink' href=' https://archive.org/download/hafidh-talha-abdul-waheed/qaaf-ramadan2014-tw.mp3' data-dlink=' https://archive.org/download/hafidh-talha-abdul-waheed/qaaf-ramadan2014-tw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								</ul>  
								
						<ul id='ramadan-2013'>
							<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-A%27raaf%20Part%202.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-A'raaf Part 2 </a><a class='dlink' href=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-A'raaf Part 2.mp3' data-dlink=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-A'raaf Part 2.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/taraweeh-2013-hafiz-talha-waheed//Al-Baqarah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Baqarah </a><a class='dlink' href=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-Baqarah.mp3' data-dlink=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-Baqarah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/taraweeh-2013-hafiz-talha-waheed//Al-Mumtahina.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Mumtahina </a><a class='dlink' href=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-Mumtahina.mp3' data-dlink=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-Mumtahina.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/taraweeh-2013-hafiz-talha-waheed//Al-Qasas.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Qasas </a><a class='dlink' href=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-Qasas.mp3' data-dlink=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-Qasas.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/taraweeh-2013-hafiz-talha-waheed//An-Nahl.MP3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>SurahNahl </a><a class='dlink' href=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/An-Nahl.MP3' data-dlink=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/An-Nahl.MP3'><img src='media/data/dlink.png' alt = ''/></a></li>
							<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/taraweeh-2013-hafiz-talha-waheed//Al-A'raaf-Part 2.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-A'raaf-Part 2 </a><a class='dlink' href=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-A'raaf-Part 2.mp3' data-dlink=' https://archive.org/download/taraweeh-2013-hafiz-talha-waheed/Al-A'raaf-Part 2.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
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
					<div class="col-md-4 col-sm-6"><iframe width="100%" height="250" src="//www.youtube.com/embed/0h_k5pbc3-0?rel=0" frameborder="0" allowfullscreen></iframe>  
						<a href="" class="btn btn-primary btn-lg btn-block" role="button">Download Mp3</a>
					</div> 
					<div class="col-md-4 col-sm-6"><iframe width="100%" height="250" src="//www.youtube.com/embed/a6KgxDb0j7s?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="" class="btn btn-primary btn-lg btn-block" role="button">Download Mp3</a>
					</div> 
					<div class="col-md-4 col-sm-6"><iframe width="100%" height="250" src="//www.youtube.com/embed/QYRJ3u_S9oU?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="" class="btn btn-primary btn-lg btn-block" role="button">Download Mp3</a>
					</div> 
					<div class="col-md-4 col-sm-6"><iframe width="100%" height="250" src="//www.youtube.com/embed/f0XkkMfHziY?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="" class="btn btn-primary btn-lg btn-block" role="button">Download Mp3</a>
					</div>	   
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
					<p>Hafidh Talha Abdul Waheed is Qari' and a Qur'an teacher from Dallas, Texas USA. Listen to his amazing recitations at the Quran Reciters. He has been leading taraweeh in various masajid in the U.S.</p>
				</div>  	
			</div> 
			


</div> 


		 

<?php  include $path . '/pages/footer.php'; ?>