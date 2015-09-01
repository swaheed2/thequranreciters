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
						 <script>
							var div = document.getElementById('player-buttons'); 
							var part1 = "<a href='#' class='btn  ' role='button' onClick=";
							var part2 = '"api_loadPlaylist(hap_players[0],{hidden: false, id: ';
							var part3 = "'#taraweeh-1432'}); return false;";
							var part4 = '"><i class="fa fa-book"></i> Taraweeh 1432</a>'; 
							 
							var part5 = "'#taraweeh-1430'}); return false;";
							var part6 = '"><i class="fa fa-book"></i> Taraweeh 1430</a>'
							 
							var part7 = "'#taraweeh-1429'}); return false;";
							var part8 = '"><i class="fa fa-book"></i> Taraweeh 1429</a>'
							div.innerHTML = div.innerHTML + part1 + part2 + part3 + part4 + part1 + part2 + part5 + part6 + part1 + part2 + part7 + part8; 
						</script>
						<div id="playlist_list">
						<!-- local playlist -->
							<ul id='clear'></ul>
							<ul id='playlist1' class = "full-quran-player">
								<?php 
									$quranURL = "Tilawat-Cheikh_Mohammad_Khalil_karee_uP_bY_mUSLEm";
									$fullQuran = array( "001.MP3", "015.MP3", "017.MP3", "019.MP3", "021.MP3", "022.MP3", "023.MP3", "025.MP3", "028.MP3", "030.MP3", "031.MP3", "037.MP3", "042.MP3", "046.MP3", "047.MP3", "052.MP3", "053.MP3", "054.MP3", "058.MP3", "059.MP3", "060.MP3", "061.MP3", "067.MP3", "068.MP3", "069.MP3", "070.MP3", "071.MP3", "078.MP3", "079.MP3", "080.MP3", "081.MP3", "082.MP3", "083.MP3", "084.MP3", "085.MP3", "086.MP3", "087.MP3", "088.MP3", "089.MP3", "090.MP3", "091.MP3", "092.MP3", "093.MP3", "094.MP3", "095.MP3", "096.MP3", "097.MP3", "098.MP3", "099.MP3", "100.MP3", "101.MP3", "102.MP3", "103.MP3", "104.MP3", "105.MP3", "106.MP3", "107.MP3", "108.MP3", "109.MP3", "110.MP3", "111.MP3", "112.MP3", "113.MP3", "114.MP3", "115.MP3");
									
									$partialNames = array( "1", "15", "17", "19", "21", "22", "23", "25", "28", "30", "31", "37", "42", "46", "47", "52", "53", "54", "58", "59", "60", "61", "67", "68", "69", "70", "71", "78", "79", "80", "81", "82", "83", "84", "85", "86", "87", "88", "89", "90", "91", "92", "93", "94", "95", "96", "97", "98", "99", "100", "101", "102", "103", "104", "105", "106", "107", "108", "109", "110", "111", "112", "113", "114", "115" );
									include $path . '/pages/more/surah-names.php'; 
									
									$lengthFullQuran = count($fullQuran);
									$i = 0;
									foreach ($fullQuran as $fullQuranOne){
											$temp = $partialNames[$i];
											$temp--;
											echo "<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne;
											echo "' data-ogg='' data-download><a class='playlistNonSelected' href='#'>";
											echo $surahNames[$temp] . "   " . $arabicNames[$temp];
											echo "</a><a class='dlink' href='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne . "' data-dlink='https://archive.org/download/" . $quranURL . "/" . $fullQuranOne;
											echo "'><img src='media/data/dlink.png' alt = ''/></a></li>";
											$i++;
											
									}
								
								?> 
							</ul>
							<ul id='taraweeh-1430' class = "full-quran-player">
								<?php 
									$quranURL = "SheikhMuhammadKhaleelAl-Qari-1430";
									$fullQuran = array("001.MP3", "017.MP3", "019.MP3", "021.MP3", "023.MP3", "025.MP3", "028.MP3", "030.MP3", "031.MP3", "035.mp3", "037.MP3", "054.MP3", "061.MP3", "069.mp3", "071.MP3", "078.mp3", "079.MP3", "080.MP3", "081.MP3", "082.MP3");
									
									$partialNames = array( "1", "17", "19", "21", "23", "25", "28", "30", "31", "35", "37", "54", "61", "69", "71", "78", "79", "80", "81", "82");
									include $path . '/pages/more/surah-names.php'; 
									
									$lengthFullQuran = count($fullQuran);
									$i = 0;
									foreach ($fullQuran as $fullQuranOne){
											$temp = $partialNames[$i];
											echo "<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne;
											echo "' data-ogg='' data-download><a class='playlistNonSelected' href='#'>";
											echo $surahNames[$temp] . "   " . $arabicNames[$temp];
											echo "</a><a class='dlink' href='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne . "' data-dlink='https://archive.org/download/" . $quranURL . "/" . $fullQuranOne;
											echo "'><img src='media/data/dlink.png' alt = ''/></a></li>";
											$i++;
											
									}
								
								?> 
							</ul>
							<ul id='taraweeh-1432' class = "full-quran-player">
								<?php 
									$quranURL = "SheikhMuhammadKhaleelAl-Qari-1432";
									$fullQuran = array( "015.MP3", "022.MP3", "035.mp3", "037.MP3", "042.MP3", "046.MP3", "047.MP3", "052.MP3", "053.MP3", "058.MP3", "059.MP3", "060.MP3", "067.MP3", "068.MP3", "069.MP3", "070.MP3", "078.mp3", "080.MP3", "083.MP3", "084.MP3", "085.MP3", "086.MP3", "087.MP3", "088.MP3");
									$partialNames = array( "15", "17", "22", "35", "37", "42", "46", "47", "52", "53", "58", "59", "60", "67", "68", "69", "70", "78", "80", "83", "84", "85", "86", "87", "88");
									include $path . '/pages/more/surah-names.php'; 
									
									$lengthFullQuran = count($fullQuran);
									$i = 0;
									foreach ($fullQuran as $fullQuranOne){
											$temp = $partialNames[$i];
											echo "<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne;
											echo "' data-ogg='' data-download><a class='playlistNonSelected' href='#'>";
											echo $surahNames[$temp] . "   " . $arabicNames[$temp];
											echo "</a><a class='dlink' href='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne . "' data-dlink='https://archive.org/download/" . $quranURL . "/" . $fullQuranOne;
											echo "'><img src='media/data/dlink.png' alt = ''/></a></li>";
											$i++;
											
									}
								
								?> 
							</ul>
							<ul id='taraweeh-1429' class = "full-quran-player">
								<?php 
									$quranURL = "SheikhMuhammadKhaleelAl-Qari-1429";
									$fullQuran = array( "035.mp3", "037.MP3", "069.mp3", "078.mp3", "089.MP3", "090.MP3", "091.MP3", "092.MP3", "093.MP3", "094.MP3", "095.MP3", "096.MP3", "097.MP3", "098.MP3", "099.MP3", "100.MP3", "101.MP3", "102.MP3", "103.MP3", "104.MP3", "105.MP3", "106.MP3", "107.MP3", "108.MP3", "109.MP3", "110.MP3", "111.MP3", "112.MP3", "113.MP3" );
									$partialNames = array( "17", "35", "37", "69", "78", "89", "90", "91", "92", "93", "94", "95", "96", "97", "98", "99", "100", "101", "102", "103", "104", "105", "106", "107", "108", "109", "110", "111", "112", "113");
									include $path . '/pages/more/surah-names.php'; 
									
									$lengthFullQuran = count($fullQuran);
									$i = 0;
									foreach ($fullQuran as $fullQuranOne){
											$temp = $partialNames[$i];
											echo "<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne;
											echo "' data-ogg='' data-download><a class='playlistNonSelected' href='#'>";
											echo $surahNames[$temp] . "   " . $arabicNames[$temp];
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
						var videosURL = ["jpi2dV_zkok","OYl-AByzZJc","mryEt918pT0","rbjJ5pQ4W_Y","Fyb-9e5ePu8","jpi2dV_zkok"];
					</script>	 
					<?php  include $path . '/pages/videos.php';     ?>  	 	
 
					 
		    </div> 
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة </strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p >Sheikh Muhammad Khalil Al Qari - Imam of Masjid Quba Madinah</p>
				</div>  	
			</div>
 
			 


</div>
				  		


		
<?php  include $path . '/pages/footer.php'; ?>

