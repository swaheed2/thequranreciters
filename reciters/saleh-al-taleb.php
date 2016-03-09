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
						<?php  include $path . '/pages/more/complete-quran-text.php';     ?> 
						<?php  include $path . '/player/player_code.php';     ?> 
					
						<div id="playlist_list">
						<!-- local playlist -->
							<ul id='clear'></ul>
							<ul id='playlist1' class = "full-quran-player">
								<?php 
									$quranURL = "Quran-Salih-al-Talib";
									$suName = array( "Al-Fatihah", "Al-Furqan", "Saba'", "Sad", "Az-Zumar", "Ad-Dukhan", "Al-Jathiya", "Al-Ahqaf", "Muhammad", "Ar-Rahman", "Al-Waqi'ah", "Al-Hadid", "Al-Mujadilah", "Al-Hashr", "Al-Mumtahinah", "As-Saff", "Al-Ma'arij", "Al-Jinn", "Al-Muzzammil", "Al-Muddaththir", "Al-Qiyamah", "Al-Insan", "Al-Mursalat", "An-Naba'", "An-Nazi'at", "'Abasa", "At-Takwir", "Al-Infitar", "Al-Mutaffifin", "Al-Inshiqaq", "Al-Buruj", "At-Tariq"); 

									$fullQuran = array( "001.MP3", "025.MP3", "034.MP3", "038.MP3", "039.MP3", "044.MP3", "045.MP3", "046.MP3", "047.MP3", "055.MP3", "056.MP3", "057.MP3", "058.MP3", "059.MP3", "060.MP3", "061.MP3", "070.MP3", "072.MP3", "073.MP3", "074.MP3", "075.MP3", "076.MP3", "077.MP3", "078.MP3", "079.MP3", "080.MP3", "081.MP3", "082.MP3", "083.MP3", "084.MP3", "085.MP3", "086.MP3" );
									
									include $path . '/pages/more/surah-names.php'; 
									
									$lengthFullQuran = count($fullQuran);
									$i = 0;
									foreach ($fullQuran as $fullQuranOne){
											echo "<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne;
											echo "' data-ogg='' data-download><a class='playlistNonSelected' href='#'>";
											echo $suName[$i] ;
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
					<p >Shaikh Saleh Muhammad Ibrahim Aal Talib is the IMAM AND KHATEEB Of the Grand Mosque of Makkah ( KA'ABA TUL ALLAH)since past 8 years. Shaikh Saleh is Famous for his Pleasing voice and delightful recitaions. </p>
				</div>  	
			</div>
 
			 


</div>
				  		


		
<?php  include $path . '/pages/footer.php'; ?>

