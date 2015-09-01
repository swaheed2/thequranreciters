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
	        <div class="row reciter-container">
				<div class=" archive-playlist-title">
					<p class="reciters">The Complete Holy Quran | القرآن الكريم</p> 
				</div>
				<div id="player-buttons" class="row btns-player-catagory">  
									<a href='#' class='btn  btn-success' role='button' onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#playlist1'}); return false;"><i class="fa fa-book"></i> Full Quran</a>	   
									
									<a href='#' class=" btn  " role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#clear'}); return false;"><i class="fa fa-book"></i> Clear</a>
									 
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
					<ul id='clear'></ul>
					<ul id='playlist1' class = "full-quran-player">
						<?php 
							$quranURL = "MaulanaTariqJameel-VolumeNumber92";
							$fullQuran = array("10JazbaatKeeQurbani-SaudiaArabicMina-Hajj2011.mp3",
								"09-ApniAkhiratKeFikarKaroo-Muzafarghar-10dec2012-Part2.mp3",
								"07-Madan-e-hasharKaManzar-IjtimaHydrabad-26feb2012-Part2.mp3",
								"04-JannatOrJahanum-Karachi-27feb2012.mp3",
								"05-ShaneyRisalat-Hongkong-19feb2012.mp3",
								"03-AllahKoTalashKaroo-Hongkong-24jan2012.mp3",
								"01-AapKaaGhumOrQiyamat-Hongkong-26jan2012.mp3",
								"08-ApniAkhiratKeFikarKaroo-Muzafarghar-10dec2012-Part1.mp3",
								"02-AllahKoPaneyKaRasta-MasjidKowloonHongkong-25jan2012.mp3",
								"06-Madan-e-hasharKaManzar-IjtimaHydrabad-26feb2012-Part1.mp3");
							
							include $path . '/pages/more/surah-names.php'; 
							
							$lengthFullQuran = count($fullQuran);
							$i = 0;
							foreach ($fullQuran as $fullQuranOne){
									echo "<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/";
									echo $quranURL . "/";
									echo $fullQuranOne;
									echo "' data-ogg='' data-download><a class='playlistNonSelected' href='#'>";
									echo '';
									echo "</a><a class='dlink' href='https://archive.org/download/";
									echo $quranURL . "/";
									echo $fullQuranOne . "' data-dlink='https://archive.org/download/" . $quranURL . "/" . $fullQuranOne;
									echo "'><img src='media/data/dlink.png' alt = ''/></a></li>";
									$i++;
									
							}
						
						?> 
					</ul>
				</div>  
			</div>  
			<?php  include $path . '/pages/gallery.php';     ?>  	 	  	
		    <div class="row reciter-container" id="youtube-videos">	
					<script>
						var videosURL = ["Zcrsfg-EeqM","PD6Ov8JHTfk","wZPdOh6uITc","9UfT8ld39xk"];
					</script>	 
					<?php  include $path . '/pages/videos.php';     ?>  	 	
 
					 
		    </div> 
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة</strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p >Abdul Rahman Ibn Abdul Aziz as-Sudais an-Najdi is a Saudi world renown&nbsp;<a href="http://www.assabile.com/quran" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">qari</a>, he was born in&nbsp;<a href="http://www.assabile.com/quran/Saudi-Arabia" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">Saudi Arabia</a>&nbsp;and he&#39;s originally from the Anza clan. Al Sudais is the leading imam of the Grand mosque in the Islamic city of Mecca.</p>

					<p  >At the age of 12, Al Sudais memorized&nbsp;<a href="http://www.assabile.com/quran/suwar" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">the Holy Quran</a>, and studied in the &#39;Al Muthana Bin Harith&#39; Elementary School and was graduated in 1979 with a grade of excellent in &#39; Riyadh scientific Institution&#39;.</p>

					<p  >Al Sudais studied in Riyadh University and received a degree in Sharia in 1983, and a Master from the Sharia College of Imam Muhammad bin Saud Islamic University in 1987. In 1995 he obtained a Ph.D in Islamic Sharia from Umm al-Qura University.</p>

					<p  >Sheikh AL Sudais is known for the particularity of his voice and for&nbsp;<a href="http://www.assabile.com/abdul-rahman-al-sudais-12/quran" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">his emotional recitation of the Quran</a>&nbsp;in accordance with Tajweed.</p>

					<p  >In 2005, he received the prize of the &#39; Islamic Personality Of the year&#39; in the 9th annual Dubai International Holy Quran Award.</p>
				</div>  	
			</div>
 
			 


</div>
				  		


		
<?php  include $path . '/pages/footer.php'; ?>

