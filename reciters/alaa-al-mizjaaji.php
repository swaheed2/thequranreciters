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
									$quranURL = "001002_201503";
									$fullQuran = array( "001", "001-002.mp3",  "002", "003", "004", "012.mp3", "015-Ramadan1435h_2.mp3", "015-Ramadan1435h.mp3", "015.mp3", "016.mp3", "017-Ramadan1435h.mp3", "017.mp3", "017-Ramadan1435h_2.mp3", "018.mp3", "019.mp3", "020.mp3", "021.mp3", "023.mp3", "024.mp3", "025.mp3", "026.mp3", "029.mp3", "030.mp3", "031.mp3", "032.mp3", "035.mp3", "036.mp3", "037.mp3", "037-Ramadan1435h_2.mp3", "037-Ramadan1435h.mp3", "039.mp3", "043.mp3", "044.mp3", "048.mp3", "049.mp3", "050.mp3", "051.mp3", "053.mp3", "AlaaAlmezjajiRamadan1434h-SuratYaseenHejaziyah.mp3", "FromAlmolk_almutaffifinFajr23-8-1435h.mp3", "Alaa Almezjaji 14-9-1434H - from Taraweeh.mp3", "AlaaAlmezjajiRamadan1434h-SuratAlrahman.mp3", "AlaaAlmezjajiRamadan1434h-SuratAlwaqeah.mp3", "AlaaAlmezjajiRamadan1434h-SuratYaseenHejaziyah_2.mp3", "055.mp3", "AlaaAlhakami3-9-1434h-Duaa.mp3", "SuratAl-kahfAlaaAl-hakami1434h.mp3", "SuratAl-kahfAlaaAl-mezjaji.mp3", "1-9-1435H.mp3", "AlaaAlhakami4-9-1434h-SuratMaryam.mp3", "AlaaAlmezjaji19-9-1434h-Taraweeh.mp3", "AlaaAlmezjajiRamadan1434h-SuratAlwaqeah_2.mp3", "AlaaAlmezjaji19-9-1434h-Taraweeh_2.mp3", "FromHud17-44_2.mp3", "AlaaAlmezjajiRamadan1434h-FromSuratAlhadid.mp3", "SuratAl-kahfAlaaAl-mezjaji_2.mp3", "FromAlmolk_almutaffifinFajr23-8-1435h_2.mp3", "1-9-1435H_2.mp3", "AlaaAlhakami23-9-1434h-SuratAlkahf.mp3", "Alaa Almezjaji 14-9-1434H - from Taraweeh_2.mp3", "FromHud17-44.mp3", "AlaaAlmezjajiRamadan1434h-FromSuratAlhadid_2.mp3", "AlaaAlmezjajiRamadan1434h-SuratAlrahman_2.mp3", "056.mp3", "057.mp3", "058.mp3", "059.mp3", "061.mp3", "062.mp3", "063.mp3", "064.mp3", "065.mp3", "066.mp3", "067.mp3", "068.mp3", "070.mp3", "071.mp3", "072.mp3", "073.mp3", "074.mp3", "075.mp3", "076.mp3", "078-114.mp3");
									
									$titles = array( "Al-Fatiha", "Al-Fatiha & سورة البقرة", "Al-Baqarah" , "'Al-Imran", "An-Nisaa","سورة يوسف", "سورة الحجر من ليالي رمضان 1435هـ", "سورة الحجر", "Al-Hijr" , "سورة النحل", "سورة الإسراء من ليالي رمضان 1435هـ", "سورة الإسراء", "سورة الإسراء من ليالي رمضان 1435هـ", "سورة الكهف", "سورة مريم", "سورة طه", "سورة الأنبياء", "سورة المؤمنون", "سورة النور", "سورة الفرقان", "سورة الشعراء", "سورة العنكبوت", "سورة الروم", "سورة لقمان", "سورة السجدة", "سورة فاطر", "سورة يس", "سورة الصافات","سورة الصافات", "سورة الصافات من ليالي رمضان 1435هـ", "سورة الزمر", "سورة الزخرف", "سورة الدخان", "سورة الفتح", "سورة الحجرات", "سورة ق", "سورة الذاريات", "سورة النجم", "AlaaAlmezjajiRamadan1434h-SuratYaseenHejaziyah", "ما تيسر من سورتي الملك و المطففين - فجر 23 شعبان 1435هـ", "Alaa Almezjaji 14-9-1434H - from Taraweeh", "AlaaAlmezjajiRamadan1434h-SuratAlrahman", "AlaaAlmezjajiRamadan1434h-SuratAlwaqeah", "AlaaAlmezjajiRamadan1434h-SuratYaseenHejaziyah_2", "سورة الرحمن", "AlaaAlhakami3-9-1434h-Duaa", "SuratAl-kahfAlaaAl-hakami1434h", "SuratAl-kahfAlaaAl-mezjaji", "ما تيسر من سورة البقرة 1-37 مع الدعاء - ليلة 1 رمضان 1435هـ", "AlaaAlhakami4-9-1434h-SuratMaryam", "AlaaAlmezjaji19-9-1434h-Taraweeh", "AlaaAlmezjajiRamadan1434h-SuratAlwaqeah_2", "AlaaAlmezjaji19-9-1434h-Taraweeh_2", "ما تيسر من سورة هود", "AlaaAlmezjajiRamadan1434h-FromSuratAlhadid", "SuratAl-kahfAlaaAl-mezjaji_2", "ما تيسر من سورتي الملك و المطففين - فجر 23 شعبان 1435هـ", "ما تيسر من سورة البقرة 1-37 مع الدعاء - ليلة 1 رمضان 1435هـ", "AlaaAlhakami23-9-1434h-SuratAlkahf", "Alaa Almezjaji 14-9-1434H - from Taraweeh_2", "ما تيسر من سورة هود", "AlaaAlmezjajiRamadan1434h-FromSuratAlhadid_2", "AlaaAlmezjajiRamadan1434h-SuratAlrahman_2", "سورة الواقعة", "سورة الحديد - محاكاة للمعيقلي", "سورة المجادلة", "سورة الحشر", "سورة الصف", "سورة الجمعة", "سورة المنافقون", "سورة التغابن", "سورة الطلاق - محاكاة للشيخ عبدالله خياط", "سورة التحريم", "سورة الملك", "سورة القلم", "سورة المعارج", "سورة نوح", "سورة الجن", "سورة المزمل", "سورة المدثر", "سورة القيامة", "سورة الإنسان", "جزء عم");
									
									include $path . '/pages/more/surah-names.php'; 
									
									$lengthFullQuran = count($fullQuran);
									$i = 0;
									foreach ($fullQuran as $fullQuranOne){
											echo "<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/";
											echo $quranURL . "/";
											echo $fullQuranOne;
											echo "' data-ogg='' data-download><a class='playlistNonSelected' href='#'>";
											echo $titles[$i];
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
						var videosURL = ["M161qHhvrrs","FhJDqr7uwPI","1F_BH_QV3fo"];
					</script>	 
					<?php  include $path . '/pages/videos.php';     ?>  	 	
 
					 
		    </div> 
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة</strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p>Student of Sheikh Muhammad Ayyub</p><p>الشيخ علاء ابراهيم سلمان المزجاجي
					متزوج ولديه أنس و جنى حفظهما الله ، لديه إجازة بقراءة الإمام عاصم برواية عن طريق الشاطبية .  <br><br> امام مسجد تجار جده سابقا - مسجد الاخوان حافظ (الله يرحمهم ) حاليا  <br><br> - بدايته في حفظ القرآن الكريم - كانت بداية حفظي لكتاب الله في سن الخامسة وذلك في مسجد رمضان بحي البغدادية الشرقية وكان ذلك بتشجيع من والديّ الكريمين وهنا اذكر والدتي رحمها الله التي كان لها الأثر الكبير في حفظي لكتاب الله فجزاها الله عني خير الجزاء وأسكنها فسيح جناته وأسأل الله أن يبلغني تتويج والدي تاج الوقار.  <br><br>  - بدايته في الامامه - بداية إمامتي كانت في مسجد (رمضان) بالبغدادية عام 1415هـ وكنت وقتها أتشارك في امامة المصلين مع القارئ الشيخ نبيل الرفاعي حيث إنه كان يصلي التراويح في حين كنت أنا أصلي بهم التهجد واستمر هذا الحال لمدة 4 سنوات تقريبا. بعد ذلك انتقلت إلى مسجد عبدالله بن عمر ثم انتقلت إلى مصلى مجموعة بن لادن. وفي عام 1421هـ وتحديدا في رمضان كنت إمام التراويح والتهجد في مسجد عبدالله بن عباس في الكندرة ثم اصبحت إماما مشاركا في مسجد سعيد بن جبير والذي قضيت فيه أياما جميلة ففي ذلك المسجد التقيت برفقة صالحة وإخوة أعزاء بعد ذلك انتقلت إلى مسجد النور بترشيح من الشيخ عبدالله صنعان ومكثت فيه حتى الثالث من رمضان للعام 1425هـ بعدها انتقلت إلى مسجد تجار جدة و أكملت مايقارب الـ5 سنوات إماما له و الان امام مسجد الاخوان حافظ الكائن بحي الشاطئ </p>

				</div>  	
			</div>
 
			 


</div>
				  		


		
<?php  include $path . '/pages/footer.php'; ?>

