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
											<p class="reciters">The Complete Holy Quran | القرآن الكريم</p> 
						</div>
						<?php  include $path . '/player/player_code.php';     ?> 
					
						<div id="playlist_list">
						<!-- local playlist -->
							<ul id='playlist1'> 
								 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//01-al-fatiha.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Fatihah </a><a class='dlink' href=' https://archive.org/download/hodhaifi/01-al-fatiha.mp3' data-dlink=' https://archive.org/download/hodhaifi/01-al-fatiha.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//014-ibrahim.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Ibrahim </a><a class='dlink' href=' https://archive.org/download/hodhaifi/014-ibrahim.mp3' data-dlink=' https://archive.org/download/hodhaifi/014-ibrahim.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//015-al-hijr.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Hijr </a><a class='dlink' href=' https://archive.org/download/hodhaifi/015-al-hijr.mp3' data-dlink=' https://archive.org/download/hodhaifi/015-al-hijr.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//017-al-isra.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Isra </a><a class='dlink' href=' https://archive.org/download/hodhaifi/017-al-isra.mp3' data-dlink=' https://archive.org/download/hodhaifi/017-al-isra.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//018-al-kahf.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Kahf </a><a class='dlink' href=' https://archive.org/download/hodhaifi/018-al-kahf.mp3' data-dlink=' https://archive.org/download/hodhaifi/018-al-kahf.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//019-maryam.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Maryam </a><a class='dlink' href=' https://archive.org/download/hodhaifi/019-maryam.mp3' data-dlink=' https://archive.org/download/hodhaifi/019-maryam.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//021-al-anbiya.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Anbiya' </a><a class='dlink' href=' https://archive.org/download/hodhaifi/021-al-anbiya.mp3' data-dlink=' https://archive.org/download/hodhaifi/021-al-anbiya.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//022-al-hajj.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Hajj </a><a class='dlink' href=' https://archive.org/download/hodhaifi/022-al-hajj.mp3' data-dlink=' https://archive.org/download/hodhaifi/022-al-hajj.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//023-al-moueminoun.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Mu'minun </a><a class='dlink' href=' https://archive.org/download/hodhaifi/023-al-moueminoun.mp3' data-dlink=' https://archive.org/download/hodhaifi/023-al-moueminoun.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//026-as-shua-raa.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Ash-Shu'ara' </a><a class='dlink' href=' https://archive.org/download/hodhaifi/026-as-shua-raa.mp3' data-dlink=' https://archive.org/download/hodhaifi/026-as-shua-raa.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//029-al-ankabout.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-'Ankabut </a><a class='dlink' href=' https://archive.org/download/hodhaifi/029-al-ankabout.mp3' data-dlink=' https://archive.org/download/hodhaifi/029-al-ankabout.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//032-as-sajda.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>As­Sajdah </a><a class='dlink' href=' https://archive.org/download/hodhaifi/032-as-sajda.mp3' data-dlink=' https://archive.org/download/hodhaifi/032-as-sajda.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//035-fater.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Fatir </a><a class='dlink' href=' https://archive.org/download/hodhaifi/035-fater.mp3' data-dlink=' https://archive.org/download/hodhaifi/035-fater.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//044-ad-doukhan.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Ad-Dukhan </a><a class='dlink' href=' https://archive.org/download/hodhaifi/044-ad-doukhan.mp3' data-dlink=' https://archive.org/download/hodhaifi/044-ad-doukhan.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//045-al-jathiya.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Jathiya </a><a class='dlink' href=' https://archive.org/download/hodhaifi/045-al-jathiya.mp3' data-dlink=' https://archive.org/download/hodhaifi/045-al-jathiya.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//049-al-houjourat.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Hujurat </a><a class='dlink' href=' https://archive.org/download/hodhaifi/049-al-houjourat.mp3' data-dlink=' https://archive.org/download/hodhaifi/049-al-houjourat.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//050-qaf.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Qaf </a><a class='dlink' href=' https://archive.org/download/hodhaifi/050-qaf.mp3' data-dlink=' https://archive.org/download/hodhaifi/050-qaf.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//055-ar-rahman.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Ar-Rahman </a><a class='dlink' href=' https://archive.org/download/hodhaifi/055-ar-rahman.mp3' data-dlink=' https://archive.org/download/hodhaifi/055-ar-rahman.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//056-al-waqi-a.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Waqi'ah </a><a class='dlink' href=' https://archive.org/download/hodhaifi/056-al-waqi-a.mp3' data-dlink=' https://archive.org/download/hodhaifi/056-al-waqi-a.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//057-al-hadid.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Hadid </a><a class='dlink' href=' https://archive.org/download/hodhaifi/057-al-hadid.mp3' data-dlink=' https://archive.org/download/hodhaifi/057-al-hadid.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/AhmedAliHodaifi/qaaf-salatul-isha.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>qaaf-salatul-'isha </a><a class='dlink' href=' https://archive.org/download/AhmedAliHodaifi/qaaf-salatul-isha.mp3' data-dlink=' https://archive.org/download/AhmedAliHodaifi/qaaf-salatul-isha.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//taha-salatul-'isha.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>taha-salatul-'isha </a><a class='dlink' href=' https://archive.org/download/hodhaifi/taha-salatul-isha.mp3' data-dlink=' https://archive.org/download/hodhaifi/taha-salatul-isha.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//yaseen-salatul-'isha.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>yaseen-salatul-'isha </a><a class='dlink' href=' https://archive.org/download/hodhaifi/yaseen-salatul-isha.mp3' data-dlink=' https://archive.org/download/hodhaifi/yaseen-salatul-isha.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//03-al-imran.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>03-al-imran </a><a class='dlink' href=' https://archive.org/download/hodhaifi/03-al-imran.mp3' data-dlink=' https://archive.org/download/hodhaifi/03-al-imran.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/hodhaifi//048-al-fath.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>048-al-fath </a><a class='dlink' href=' https://archive.org/download/hodhaifi/048-al-fath.mp3' data-dlink=' https://archive.org/download/hodhaifi/048-al-fath.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
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
					<div class="col-md-4"><iframe width="100%" height="250" src="//www.youtube.com/embed/ZpLpVgsmQxo?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="https://archive.org/download/AhmedAliHodaifi/qaaf-salatul-'isha.mp3" class="btn btn-primary btn-lg btn-block" role="button">Download Mp3</a>
					</div>
					<div class="col-md-4"><iframe width="100%" height="250" src="//www.youtube.com/embed/qtpYgPVbSnE?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="https://archive.org/download/hodhaifi/yaseen-salatul-'isha.mp3" class="btn btn-primary btn-lg btn-block" role="button">Download Mp3</a>
					</div>
					<div class="col-md-4"><iframe width="100%" height="250" src="//www.youtube.com/embed/ELeNA3nDIjE?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="https://archive.org/download/hodhaifi/taha-salatul-'isha.mp3" class="btn btn-primary btn-lg btn-block" role="button">Download Mp3</a>
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
					Imam of Masjid Quba ‏‏‏‏إمام مسجد قباء، دكتور بقسم التفسير وعلوم القرآن بالجامعة الإسلامية بالمدينة المنورة(جمع بين فخامة الصوت، وحسن الأداء، وتنوع المقامات) ليس الحساب الرسمي 
				</div>  	
			</div>

		</diV>
			 



			
		</div>
				  		
		
<?php  include $path . '/pages/footer.php'; ?>

