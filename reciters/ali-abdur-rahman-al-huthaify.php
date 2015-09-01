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
									$quranURL = "Ali_Abdur-Rahman_al-Huthaify";
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
						var videosURL = ["EsCBDEMNBeM","ZEX7W7wI5Ok","4vUH-XuUWPk","uHX5sR2F7h0"];
					</script>	 
					<?php  include $path . '/pages/videos.php';     ?>  	 	
 
					 
		    </div> 
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة</strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p>Abdur Rahman al Huthaify (Al Awamer,1947) is the chief imam and the khateeb of the Great mosque of Medina, and a former imam of Quba Mosque. He was a lecturer of Islamic jurisprudence and tawheed at the Islamic University of Saudi Arabia. He is known as one of the best qari of the Middle East, in fact he has many recordings that are used and broadcast all over the world. His style of reciting the Quran in a slow,deep tune is widely recognised</p>
					<p>Life and career 
					Ali Huthaify grew up in a religious family. His father, Muhammad Abdul Hudaify, was a scholar and an imam in the Saudi Arabian Army. He received his early education from the knowledgeable in his village and he completed to memorising Quran by learning at the hand of Shaykh Mohammed bin Ibrahiim Alhodaifi. He also studied many texts in various forensic science.
					In 1961 he joined the Salafist School, after that he joined in the Scientific Institute, and finally he entered the Sharia’s Faculty of Riyadh. In 1972 he graduated in Bachelor of Laws from the Imam Muhammad bin Saud Islamic University. In 1975 he received a master’s degree in Islamic law from Al-Azhar University and then he took his doctorate from the same university. He was also an imam of Quba Mosque. In 1979 he became the chief imam of the Al-Masjid al-Nabawi. In 1401, during the month of Ramadan, he was appointed imam of the Masjid al-Haram and then he went back to Great Mosque of Medina where he continues to lead salat. [2]</p>
					<p>From: Wikipedia</p> 
				</div>  	
			</div>
 
			 


</div>
				  		


		
<?php  include $path . '/pages/footer.php'; ?>

