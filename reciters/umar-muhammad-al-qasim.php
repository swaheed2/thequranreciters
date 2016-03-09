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
				
			</div>  
	        <div class="row reciter-container">	  
					    <div class="row btns-player-catagory">  
							 <a href='#' class=" btn btn-success" role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#playlist1'}); return false;"><i class="fa fa-book"></i> Ramadan 2015 - Jami' Nurul Iman in Jeddah by the Corniche</a> 
							 
							 <a href='#' class=" btn " role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#ramadan-2012'}); return false;"><i class="fa fa-book"></i> Ramadan 2012</a> 
							 <a href='#' class=" btn " role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#houston'}); return false;"><i class="fa fa-book"></i> Houston, TX Recordings</a> 
							 
							 <a href='#' class=" btn " role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#selected-surahs'}); return false;"><i class="fa fa-book"></i> Selected Surahs</a>    
								
							  <a href='#' class="btn  " role="button"  onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#clear'}); return false;"><i class="fa fa-bars"></i> Clear</a> 
							  
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
							<ul id='ramadan-2012'> 

								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim//Surah Al-Taubah Part 3.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Surah Al-Taubah Part 3 </a><a class='dlink' href=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Al-Taubah Part 3.mp3' data-dlink=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Al-Taubah Part 3.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim//Surah Al-Taubah Part 2.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Surah Al-Taubah Part 2 </a><a class='dlink' href=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Al-Taubah Part 2.mp3' data-dlink=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Al-Taubah Part 2.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim//Surah Yusuf Part 2.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Surah Yusuf Part 2 </a><a class='dlink' href=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Yusuf Part 2.mp3' data-dlink=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Yusuf Part 2.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim//Surah Al-Taubah Part 1.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Surah Al-Taubah Part 1 </a><a class='dlink' href=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Al-Taubah Part 1.mp3' data-dlink=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Al-Taubah Part 1.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim//Surah Al-An'aam.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Surah Al-An'aam </a><a class='dlink' href=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Al-An'aam.mp3' data-dlink=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Al-An'aam.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim//Surah Yusuf Part 1.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Surah Yusuf Part 1 </a><a class='dlink' href=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Yusuf Part 1.mp3' data-dlink=' https://archive.org/download/Ramadhan2012-QariUmarMAl-Qasim/Surah Yusuf Part 1.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								 
							</ul>
							<ul id='playlist1'>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/ramadan-2015-umar-muhammad-al-qasim//Al-Baqarah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Baqarah </a><a class='dlink' href=' https://archive.org/download/ramadan-2015-umar-muhammad-al-qasim/Al-Baqarah.mp3' data-dlink=' https://archive.org/download/ramadan-2015-umar-muhammad-al-qasim/Al-Baqarah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/ramadan-2015-umar-muhammad-al-qasim//Al-Baqarah [75-86].mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Baqarah [75-86] </a><a class='dlink' href=' https://archive.org/download/ramadan-2015-umar-muhammad-al-qasim/Al-Baqarah [75-86].mp3' data-dlink=' https://archive.org/download/ramadan-2015-umar-muhammad-al-qasim/Al-Baqarah [75-86].mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							</ul>
							<ul id='houston'>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//01 Track 1.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 1 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/01 Track 1.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/01 Track 1.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//02 Track 2.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 2 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/02 Track 2.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/02 Track 2.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//03 Track 3.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 3 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/03 Track 3.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/03 Track 3.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//04 Track 4.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 4 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/04 Track 4.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/04 Track 4.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//05 Track 5.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 5 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/05 Track 5.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/05 Track 5.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//06 Track 6.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 6 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/06 Track 6.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/06 Track 6.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//07 Track 7.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 7 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/07 Track 7.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/07 Track 7.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//08 Track 8.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 8 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/08 Track 8.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/08 Track 8.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//09 Track 9.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 9 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/09 Track 9.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/09 Track 9.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim//10 Track 10.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Track 10 </a><a class='dlink' href=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/10 Track 10.mp3' data-dlink=' https://archive.org/download/houston-tx-recording-umar-muhammad-al-qasim/10 Track 10.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							</ul>
							
							
							<ul id='selected-surahs'>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Maidah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Maidah </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Maidah.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Maidah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Mum-Ta7inah Beautiful    .mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Mum-Ta7inah Beautiful     </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Mum-Ta7inah Beautiful    .mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Mum-Ta7inah Beautiful    .mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Nahl.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Nahl </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Nahl.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Nahl.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Qaf.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Qaf </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Qaf.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Qaf.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Ra'ad.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Ra'ad </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Ra'ad.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Ra'ad.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Salatal-FajarPart 1.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Salatal-FajarPart 1 </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Salatal-FajarPart 1.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Salatal-FajarPart 1.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Taraweeh 2010.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Taraweeh 2010 </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Taraweeh 2010.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Taraweeh 2010.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Taraweeh Prayer at Al-Furqaan Centre 2013 - Day 10.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Taraweeh Prayer at Al-Furqaan Centre 2013 - Day 10 </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Taraweeh Prayer at Al-Furqaan Centre 2013 - Day 10.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Taraweeh Prayer at Al-Furqaan Centre 2013 - Day 10.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Taraweeh2011.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Day 3 </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Taraweeh2011.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Taraweeh2011.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Yusuf Part 1.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Yusuf Part 1 </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Yusuf Part 1.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Yusuf Part 1.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Yusuf Part 2.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Yusuf2 </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Yusuf Part 2.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Yusuf Part 2.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Al-Anaam2012.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Anaam2012 </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Anaam2012.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Anaam2012.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Al-Furqan (35..77).mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Furqan (35..77) </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Furqan (35..77).mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Furqan (35..77).mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Al-Imran.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Imran </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Imran.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Imran.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Al-Insaan.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Insaan </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Insaan.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Insaan.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Al-Maidah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Maidah </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Maidah.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Maidah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Al-Muminn    .mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Muminn     </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Muminn    .mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Muminn    .mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Al-Taubah1.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Taubah1 </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Taubah1.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Taubah1.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Al-Taubah2.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Taubah2 </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Taubah2.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Al-Taubah2.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Green Lane Masjid.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Green Lane Masjid </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Green Lane Masjid.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Green Lane Masjid.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
								<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/selected-surahs-umar-muhammad-al-qasim//Jathiyah.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Jathiyah </a><a class='dlink' href=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Jathiyah.mp3' data-dlink=' https://archive.org/download/selected-surahs-umar-muhammad-al-qasim/Jathiyah.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
							</ul>
							<ul id='clear'> 
							
							</ul>
						</div>  
			</div>  
	        <div class="row reciter-container">	
					<div class="col-md-4 col-sm-6 overflow-hidden">
						<iframe src="//yourlisten.com/embed/html5?17169184" class="bg-color-white" frameborder="0" class="yourlistenplayer"></iframe>
					</div> 
					<div class="col-md-4 col-sm-6 overflow-hidden">
						<iframe src="//yourlisten.com/embed/html5?17169187" class="bg-color-white" frameborder="0" class="yourlistenplayer"></iframe>
					</div> 
					<div class="col-md-4 col-sm-6"><iframe width="100%" height="150" src="//www.youtube.com/embed/muS7cqgRGD8?rel=0" frameborder="0" allowfullscreen></iframe>
						<a href="" class="btn btn-primary btn-lg btn-block" role="button">Download Mp3</a>
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
					<p>official website <a href="http://alqasimproductions.com">alqasimproductions.com</a></p>
					<p>Sh.‘Umar Muhammad Al-Qasim </br>   </br>  
					</br>
					Born in 1982/1404AH in the city of Bradford, United Kingdom.</br>
					Sh.’Umar Muhammad bin Munir Al-Qasim Abdur-Raheem, a British national and a recitor of the Holy Qur’aan, currently residing in Makkah Al-Mukarramah, Saudi Arabia.  He studies in the College of Da’wa and Usul ud-Din, specifically in the department of Kitab and Sunnah at Umm-Al-Qura University, Makkah. He is also a student of Qiraa’aat under the noble Shaykh Muhammad Nabhan, and has also studied under the Imam Al-Haram in Makkah Al-Mukarramah, Shaikh Dr. Khalid Al-Ghamdi.
					</br></br>
					He completed memorisation of the Qur’aan at the age of 16, and was twice awarded 1st prize in the United Kingdom Annual Qur’aan competition. He was also chosen to represent the United Kingdom in the International Holy Qur’aan Competition in Makkah Al-Mukarramah in 1999 and the Dubai International Holy Qur’aan Award in 2003. Sh.‘Umar has led prayers at various Masaajid in Makkah and Jeddah, Saudi Arabia and has been leading Taraweeh Prayers for over 13 years in various Masaajid around the globe including those in the United Kingdom, USA, Kuwait and most recently in masjid Sh.Abdul ‘Azeez Ibn Baaz RA and masjid Abdul Qadir Faqeeh, Makkah Al-Mukarramah, Saudi Arabia.</br></br>

					In 2010, he led Taraweeh Prayers in Austin, USA, where the complete recitation of the  Qur’aan was recorded over the course of the month, now available  in various audio formats. His recitations can be also found on various websites including youtube and Islamweb.net.</p>
				</div>  	
			</div>
			
</div>			



<?php  include $path . '/pages/footer.php'; ?>