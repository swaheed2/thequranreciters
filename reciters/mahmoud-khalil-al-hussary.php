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
									$quranURL = "Mahmoud_Khalil_Al-Hussary";
									$fullQuran = array( "001.mp3", "002.mp3", "003.mp3", "004.mp3", "005.mp3", "006.mp3", "007.mp3", "008.mp3", "009.mp3", "010.mp3", "011.mp3", "012.mp3", "013.mp3", "014.mp3", "015.mp3", "016.mp3", "017.mp3", "018.mp3", "019.mp3", "020.mp3", "021.mp3", "022.mp3", "023.mp3", "024.mp3", "025.mp3", "026.mp3", "027.mp3", "028.mp3", "029.mp3", "030.mp3", "031.mp3", "032.mp3", "033.mp3", "034.mp3", "035.mp3", "036.mp3", "037.mp3", "038.mp3", "039.mp3", "040.mp3", "041.mp3", "042.mp3", "043.mp3", "044.mp3", "045.mp3", "046.mp3", "047.mp3", "048.mp3", "049.mp3", "050.mp3", "051.mp3", "052.mp3", "053.mp3", "054.mp3", "055.mp3", "056.mp3", "057.mp3", "058.mp3", "059.mp3", "060.mp3", "061.mp3", "062.mp3", "063.mp3", "064.mp3", "065.mp3", "066.mp3", "067.mp3", "068.mp3", "069.mp3", "070.mp3", "071.mp3", "072.mp3", "073.mp3", "074.mp3", "075.mp3", "076.mp3", "077.mp3", "078.mp3", "079.mp3", "080.mp3", "081.mp3", "082.mp3", "083.mp3", "084.mp3", "085.mp3", "086.mp3", "087.mp3", "088.mp3", "089.mp3", "090.mp3", "091.mp3", "092.mp3", "093.mp3", "094.mp3", "095.mp3", "096.mp3", "097.mp3", "098.mp3", "099.mp3", "100.mp3", "101.mp3", "102.mp3", "103.mp3", "104.mp3", "105.mp3", "106.mp3", "107.mp3", "108.mp3", "109.mp3", "110.mp3", "111.mp3", "112.mp3", "113.mp3", "114.mp3" );
									
									include $path . '/pages/more/surah-names.php'; 
									
									$lengthFullQuran = count($fullQuran);
									$i = 0;
									foreach ($fullQuran as $fullQuranOne){
											echo "<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne;
											echo "' data-ogg='' data-download><a class='playlistNonSelected' href='#'>";
											echo $surahNames[$i] . "   " . $arabicNames[$i];
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
						var videosURL = ["LslCuXcXoig","JOs3D7yVlHw", "OZvctUE3umg"];
					</script>	 
					<?php  include $path . '/pages/videos.php';     ?>  	 	
 
					 
		    </div>
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة <strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p>Mahmoud Khalil Al Hussary is a renowned reciter of the Holy Qur’an. He was born in a village called Shobra Al Namla in Tanta, Egypt. <br><br>

					Mahmoud entered the Qur’an School at the age of four. At 8, he had already memorized the whole Qur’an and at 12, he entered to the religious institute and learnt the ten recitations in Al Azhar.<br><br>

					Mahmoud Khalil Al Hussary first recited the Holy Qur’an in his village mosque. In 1944, he entered the official radio station as reciter where he made his first recitation on 16 February 1944. On August 7, 1948, he was nominated Muadhin (Prayer caller) of Sidi Hamza Mosque and then a reciter in the same mosque. He was also supervising recitation centers of Al Gharbia province.<br><br>

					In 1949, Mahmoud Khalil Al Hussary was appointed reciter of Sidi Ahmed Al Badaoui of Tanta , of Al Ahmadi Mosque and then of Al Imam Al Hussein Mosque in Cairo by 1955.<br><br>

					Mahmoud Khalil Al Hussary was one of the most esteemed reciters of his time. A serial, “Imam Al Moqr’ine”, starring Hassan Youssef, was dedicated to Al Hussary’s life and performances. source: http://www.assabile.com/mahmoud-khalil-al-hussary-27/mahmoud-khalil-al-hussary.htm</p>
				</div>  	
			</div> 
			


</div> 


		 

<?php  include $path . '/pages/footer.php'; ?>