<?php  
	$path = $_SERVER['DOCUMENT_ROOT'];
	$section = 'reciters';
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
				
			</div> </p>  	
	        <div class="row reciter-container">	  
				    <div class="row btns-player-catagory">  
						 <a href='#' class=" btn btn-default btn-player-catagory" role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#playlist1'}); return false;"><i class="fa fa-book"></i>Taraweeh 2014 - Austin, TX</a> 
						 
						 <a href='#' class=" btn btn-default btn-player-catagory" role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#special-surahs'}); return false;"><i class="fa fa-book"></i>Special Surahs</a> 
						 
						 <a href='#' class=" btn btn-default btn-player-catagory" role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#khutbahs'}); return false;"><i class="fa fa-book"></i>Khutbahs</a> 
						 
						 <a href='#' class=" btn btn-default btn-player-catagory" role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#juz-amma'}); return false;"><i class="fa fa-book"></i>Juz Amma</a>  
							
						  <a href='#' class="btn btn-black" role="button"  onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#clear'}); return false;"><i class="fa fa-bars"></i> Clear</a> 
					</div> 
						<?php  include $path . '/player/player_code.php';     ?> 
					
						<div id="playlist_list">
						<!-- local playlist -->
							<ul id='playlist1'> 
								  <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/dr-hafiz-abdul-waheed//an'aam-ramadan2014-hw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>an'aam-ramadan2014-hw </a><a class='dlink' href=' https://archive.org/download/dr-hafiz-abdul-waheed/an'aam-ramadan2014-hw.mp3' data-dlink=' https://archive.org/download/dr-hafiz-abdul-waheed/an'aam-ramadan2014-hw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/dr-hafiz-abdul-waheed//maryam-ramadan2014-hw.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>maryam-ramadan2014-hw </a><a class='dlink' href=' https://archive.org/download/dr-hafiz-abdul-waheed/maryam-ramadan2014-hw.mp3' data-dlink=' https://archive.org/download/dr-hafiz-abdul-waheed/maryam-ramadan2014-hw.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/dr-hafiz-abdul-waheed//zumer-hafidh-waheed.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>zumer-hafidh-waheed </a><a class='dlink' href=' https://archive.org/download/dr-hafiz-abdul-waheed/zumer-hafidh-waheed.mp3' data-dlink=' https://archive.org/download/dr-hafiz-abdul-waheed/zumer-hafidh-waheed.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							</ul>
							<ul id="special-surahs">
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed//Hadeed.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Hadeed </a><a class='dlink' href=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Hadeed.mp3' data-dlink=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Hadeed.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed//Mulk.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Mulk </a><a class='dlink' href=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Mulk.mp3' data-dlink=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Mulk.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed//Rahman.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Rahman </a><a class='dlink' href=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Rahman.mp3' data-dlink=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Rahman.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed//Waqiah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Waqiah </a><a class='dlink' href=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Waqiah.mp3' data-dlink=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Waqiah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed//Yaseen.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Yaseen </a><a class='dlink' href=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Yaseen.mp3' data-dlink=' https://archive.org/download/special-surahs-dr.hafiz-abdul-waheed/Yaseen.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							</ul>
							<ul id='khutbahs'> 
							    <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed//Characteristics of a Mu'min (Believer) 4-30-10.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Characteristics of a Mu'min (Believer) 4-30-10 </a><a class='dlink' href=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Characteristics of a Mu'min (Believer) 4-30-10.mp3' data-dlink=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Characteristics of a Mu'min (Believer) 4-30-10.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed//Forgiveness of Sins - Taubah 6-4-10.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Forgiveness of Sins - Taubah 6-4-10 </a><a class='dlink' href=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Forgiveness of Sins - Taubah 6-4-10.mp3' data-dlink=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Forgiveness of Sins - Taubah 6-4-10.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed//Gaining Knowledge and Giving Tarbiyah  July 9 2010.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Gaining Knowledge and Giving Tarbiyah  July 9 2010 </a><a class='dlink' href=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Gaining Knowledge and Giving Tarbiyah  July 9 2010.mp3' data-dlink=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Gaining Knowledge and Giving Tarbiyah  July 9 2010.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed//Importance of Supplication [Dua] (Part 1) 3-19-2010.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Importance of Supplication [Dua] (Part 1) 3-19-2010 </a><a class='dlink' href=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Importance of Supplication [Dua] (Part 1) 3-19-2010.mp3' data-dlink=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Importance of Supplication [Dua] (Part 1) 3-19-2010.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed//Importance of Supplication [Dua] (Part 2).mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Importance of Supplication [Dua] (Part 2) </a><a class='dlink' href=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Importance of Supplication [Dua] (Part 2).mp3' data-dlink=' https://archive.org/download/Khutbah-Dr.HafizAbdulWaheed/Importance of Supplication [Dua] (Part 2).mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							</ul>
							<ul id='juz-amma'> 
								 <li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//1-An-Naba.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>1-An-Naba </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/1-An-Naba.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/1-An-Naba.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//2-An-Naziat.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>2-An-Naziat </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/2-An-Naziat.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/2-An-Naziat.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//3-Abasa.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>3-Abasa </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/3-Abasa.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/3-Abasa.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//4-At-Takwir.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>4-At-Takwir </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/4-At-Takwir.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/4-At-Takwir.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//5-Al-Infitar.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>5-Al-Infitar </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/5-Al-Infitar.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/5-Al-Infitar.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//6-Al-Mutaffifin.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>6-Al-Mutaffifin </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/6-Al-Mutaffifin.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/6-Al-Mutaffifin.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//7-Al-Inshiqaq.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>7-Al-Inshiqaq </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/7-Al-Inshiqaq.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/7-Al-Inshiqaq.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//8-Al-Burooj.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>8-Al-Burooj </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/8-Al-Burooj.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/8-Al-Burooj.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//9-At-Tariq.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>9-At-Tariq </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/9-At-Tariq.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/9-At-Tariq.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//10-Al-Ala.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>10-Al-Ala </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/10-Al-Ala.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/10-Al-Ala.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//11-Al-Ghashiya.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>11-Al-Ghashiya </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/11-Al-Ghashiya.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/11-Al-Ghashiya.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//12-Al-Fajr.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>12-Al-Fajr </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/12-Al-Fajr.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/12-Al-Fajr.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//13-Al-Balad.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>13-Al-Balad </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/13-Al-Balad.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/13-Al-Balad.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//14-Ash-Shams.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>14-Ash-Shams </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/14-Ash-Shams.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/14-Ash-Shams.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//15-Al-Lail.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>15-Al-Lail </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/15-Al-Lail.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/15-Al-Lail.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//16-Ad-Dhuha.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>16-Ad-Dhuha </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/16-Ad-Dhuha.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/16-Ad-Dhuha.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//17-Al-Inshirah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>17-Al-Inshirah </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/17-Al-Inshirah.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/17-Al-Inshirah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//18-At-Tin.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>18-At-Tin </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/18-At-Tin.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/18-At-Tin.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//19-Al-Alaq.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>19-Al-Alaq </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/19-Al-Alaq.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/19-Al-Alaq.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//20-Al-Qadr.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>20-Al-Qadr </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/20-Al-Qadr.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/20-Al-Qadr.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//21-Al-Baiyinah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>21-Al-Baiyinah </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/21-Al-Baiyinah.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/21-Al-Baiyinah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//22-Az-Zalzalah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>22-Az-Zalzalah </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/22-Az-Zalzalah.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/22-Az-Zalzalah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//23-Al 'Adiyaat.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>23-Al 'Adiyaat </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/23-Al 'Adiyaat.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/23-Al 'Adiyaat.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//24-Al Qari'ah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>24-Al Qari'ah </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/24-Al Qari'ah.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/24-Al Qari'ah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//25-At Takathur.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>25-At Takathur </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/25-At Takathur.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/25-At Takathur.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//26-Al 'Asr.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>26-Al 'Asr </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/26-Al 'Asr.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/26-Al 'Asr.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//27-Al Humazah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>27-Al Humazah </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/27-Al Humazah.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/27-Al Humazah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//28-Al Feel.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>28-Al Feel </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/28-Al Feel.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/28-Al Feel.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//29-Quraish.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>29-Quraish </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/29-Quraish.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/29-Quraish.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//30-Al Ma'oon.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>30-Al Ma'oon </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/30-Al Ma'oon.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/30-Al Ma'oon.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//31-Al Kauthar.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>31-Al Kauthar </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/31-Al Kauthar.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/31-Al Kauthar.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//32-Al Kafiroon.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>32-Al Kafiroon </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/32-Al Kafiroon.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/32-Al Kafiroon.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//33-An-Nasr.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>33-An-Nasr </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/33-An-Nasr.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/33-An-Nasr.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//34-Al-Masad.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>34-Al-Masad </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/34-Al-Masad.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/34-Al-Masad.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//35-Al-Ikhlas.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>35-Al-Ikhlas </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/35-Al-Ikhlas.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/35-Al-Ikhlas.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//36-Al-Falaq.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>36-Al-Falaq </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/36-Al-Falaq.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/36-Al-Falaq.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed//37-An-Naas.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>37-An-Naas </a><a class='dlink' href=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/37-An-Naas.mp3' data-dlink=' https://archive.org/download/juz-amma-dr-hafiz-abdul-waheed/37-An-Naas.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							</ul>
							<ul id='clear'> 
								  
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
					<p>Dr. Hafiz Abdul Waheed Awan, the son of a great Sheikh-ul-Hadeeth Molana Abdul Haleem, was born in Okara, Pakistan in December 1964. After becoming a Hafidh-ul-Quran at the age of 10, he graduated from Jamia Muhammadia Okara, Pakistan and earned his Darse Nizammi and Wifaqul Madaaris degrees at the age of 16. <br><br>
			In 1986, Dr. Abdul&nbsp; Waheed became an Honors Graduate from the International Islamic University Islambad, Pakistan majoring in Kulliah Usuluddin (Islamic Studies Qiraat). He completed his Masters from the same University in Tafseer and Hadeeth in 1990. The Islamia University Bahawalpur, Pakistan awarded him with The Doctorates degree in Hadeeth&nbsp; in 2010.<br><br>
			  Dr. Hafiz Abdul Waheed served as a lecturer in Islamic Studies at the Govt. College of Commerce Rawalpindi, Pakistan from 1989 to 2004. He was also a research scholar for the Dawah Academy at the International Islamic University Islamabad, Pakistan from 1992 to 1996.
			  <br><br>
			  In the US, Dr. Waheed served as a Senior Quranic Teacher at the IACC Plano in Texas, USA from 2004 to 2012<br><br>
			 Currently, Dr. Waheed is the Directory of Abdul Haleem Quranic Institute.		</p>
				</div>  	
			</div>

		</diV>
			 



			
		</div>
				  		
		
<?php  include $path . '/pages/footer.php'; ?>

