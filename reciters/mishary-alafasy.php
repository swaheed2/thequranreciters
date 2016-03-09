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
			var part3 = "'#nasheed'}); return false;";
			var part4 = '"><i class="fa fa-book"></i> Nasheed</a>'; 
			div.innerHTML = div.innerHTML + part1 + part2 + part3 + part4; 
		</script>
		<div id="playlist_list">
		<!-- local playlist -->
			<ul id='clear'></ul>
			<ul id='playlist1' class = "full-quran-player">
				<?php 
					$quranURL = "Mishary_Alafasy_Quran";
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
			<ul id='nasheed' class = "full-quran-player">
				<?php 
					$quranURL = "Mishary_Alafasy_Quran";
					$fullQuran = array( "86-Uyoon_Al-Afaaee.mp3", "62-Bait_Allah.mp3", "63-Bakat_3iny.mp3", "61-Ashko_Ela_Allah.mp3", "40-Shafe3alkhalaeq.mp3", "50-Laysal_Al-Ghareeb.mp3", "29-Yaa.Rabbanaa.mp3", "51-Qareeh_Al-Qalb.mp3", "03.Allah.3la.El.Zalem.mp3", "76-Aya_Man_Yadda3y_Alfahma.mp3", "88-Wajl_Qoowm.mp3", "39-saidalaklaq.mp3", "41-so7btek.mp3", "02.Al.Shaheed.mp3", "84-Intro-1.mp3", "67-Qalbi_Sagheer.mp3", "21-Haneeni.mp3", "24-Ma3a.Allah.mp3", "83-Hunaak_Rasololaah.mp3", "31-Aldarir.mp3", "07.La.3ad.mp3", "34-entameen.mp3", "64-Ketab_Allah.mp3", "37-matal3na.mp3", "22-Ilaahi.Sayyidi.mp3", "26-Qif.bil.Ghudooe.mp3", "65-Laylat_Al_Qadr.mp3", "53-Tufoolah.mp3", "20-Da3awny.Unaadji.mp3", "60-Ashad_Al_Jehad.mp3", "10.Qattar.mp3", "44-yabelady.mp3", "33-elaallah.mp3", "78-Djazaal_Allaah.mp3", "89-Ohab-Elsalehen.mp3", "04.Dawman.Laka.El.Hamd.mp3", "68-Ya_Sorory.mp3", "18-Bi.Kulli.Shouk.mp3", "80-Firaaq_Al-Hub.mp3", "55-Al_Nema_Zawoala.mp3", "85-Minhaadj_Al-Hudaa.mp3", "59-Ara_Al_Donya.mp3", "30-adfet.mp3", "23-Illa.Salati.mp3", "49-Izdaa_Qrabt.mp3", "52-Tagayyarat_Al-Mawaddah.mp3", "17-Aseer.Ghatayaa.mp3", "47-Ielaahi_wa_Ghalaaqee.mp3", "75-ya_sahby.mp3", "70-Yamn_Yra.mp3", "57-Anta_Al_Mo3een.mp3", "87-Wa_Aghsan_Ghalkallaah.mp3", "14.YaSa7by.mp3", "42-thakrt.mp3", "45-yuba.mp3", "16-Arham.Ruhamaa.mp3", "25-Nouh.Alhamaamie.mp3", "38-Rid_ya_altaresh.mp3", "27-Rabbi.Subhanak.mp3", "58-Anta_Ra7many.mp3", "35-gllaalbadia.mp3", "81-Ghaatim_Al-Rasul.mp3", "71-allah_ala_alzalem.mp3", "82-Hosan_Razan.mp3", "13.Ya.Rab.mp3", "19-Bil.Kibriyaaee.mp3", "28-Yaa.Allah.mp3", "05.Haze.Zakaty.mp3", "66-O9ally_3laik.mp3", "69-Yado_El_Ebda3.mp3", "08.M3a.Al.Habeeb.mp3", "15-Abal.Anbiyaaee.mp3", "32-Asmaallahalhosna.mp3", "72-dawman_laka_alhamdo.mp3", "79-Fa_Ashau_Annallaah.mp3", "74-ya_rab.mp3", "12.Tazakkar.Remix.mp3", "46-Bima_Anaa.mp3", "06.Jarrabtuha.mp3", "36-laelahaellaallah.mp3", "11.Shokran.Ya.Masr.mp3", "43-Ya_mn_ethamahmoudAllam.mp3", "01.Agheb.mp3", "77-Burhaan.mp3", "48-Intro.mp3", "56-Ana_Al_Abdu.mp3", "54-Waqafu_Ala_Al-Qubur.mp3", "73-hathe_zakaty.mp3", "09.Nakhtalef.mp3");
					
					$nasheedName = array( "عيون الافاعي - ألبوم عيون الافاعي", "بيت الله - ألبوم قلبي الصغير", "بكت عيني - ألبوم قلبي الصغير", "أشكو إلى الله - ألبوم قلبي الصغير", "شفيع الخلائق - ألبوم ذكريات", "ليس الغريب - ألبوم ليس الغريب", "ياربنا - ألبوم حنينى", "قريح القلب - ألبوم ليس الغريب", "الله على الظالم- ألبوم عناقيد", "أيا من يدّعى الفهم - ألبوم عيون الافاعي", "ويل قوم - ألبوم عيون الافاعي", "سيد الأخلاق - ألبوم ذكريات", "صحبتك - ألبوم ذكريات", "الشهيد- ألبوم عناقيد", "مقدمة - ألبوم عيون الافاعي", "قلبي الصغير - ألبوم قلبي الصغير", "حنيني - ألبوم حنينى", "مع الله - ألبوم حنينى", "هناك رسول الله - ألبوم عيون الافاعي", "الضرير - ألبوم ذكريات", "لاعاد- ألبوم عناقيد", "أنـت مين - ألبوم ذكريات", "كتاب الله - ألبوم قلبي الصغير", "ما طلعنا من جزاك - ألبوم ذكريات", "إلهي سيدي - ألبوم حنينى", "قف بالخضوع - ألبوم حنينى", "ليلة القدر - ألبوم قلبي الصغير", "يا حلو معنى الطفولة - ألبوم ليس الغريب", "دعوني أناجي - ألبوم حنينى", "أشد الجهاد - ألبوم قلبي الصغير", "قطر- ألبوم عناقيد", "يابلادي - ألبوم ذكريات", "الى الله - ألبوم ذكريات", "جزى الله - ألبوم عيون الافاعي", "احب الصالحين ولست منهم", "دوما لك الحمد- ألبوم عناقيد", "يا سروري - ألبوم قلبي الصغير", "بكل الشوق - ألبوم حنينى", "فراق الحبيب - ألبوم عيون الافاعي", "النعمه زواله - ألبوم قلبي الصغير", "منهاج الهدى - ألبوم عيون الافاعي", "أرى الدنيا - ألبوم قلبي الصغير", "أضفيت - ألبوم ذكريات", "إلا صلاتي - ألبوم حنينى", "إذا قربت - ألبوم ليس الغريب", "تغيرت المودة والإخاء - ألبوم ليس الغريب", "أسير الخطايا- ألبوم حنينى", "الهي - ألبوم ليس الغريب", "ياصاحبي - ألبوم لك الحمد", "يا من يرى - ألبوم قلبي الصغير", "أنت المعين - ألبوم قلبي الصغير", "و أحسن خلق الله - ألبوم عيون الافاعي", "يا صاحبى- ألبوم عناقيد", "تذكر - ألبوم ذكريات", "يـبة - ألبوم ذكريات", "أرحم الرحماء - ألبوم حنينى", "نوح الحمام - ألبوم حنينى", "ريض يالطارش - ألبوم ذكريات", "رب سبحانك - ألبوم حنينى", "أنت رحماني - ألبوم قلبي الصغير", "جل البديع - ألبوم ذكريات", "خاتم الرسل - ألبوم عيون الافاعي", "الله على الظالم - ألبوم لك الحمد", "حصان رزان - ألبوم عيون الافاعي", "يا رب- ألبوم عناقيد", "متفرد بالكبرياء - ألبوم حنينى", "يالله - ألبوم حنينى", "هذه زكاتى- ألبوم عناقيد", "أصلي عليك - ألبوم قلبي الصغير", "يد الإبداع - ألبوم قلبي الصغير", "مع الحبيب- ألبوم عناقيد", "أبا الأنبياء - ألبوم حنينى", "أسماء الله الحسنى - ألبوم ذكريات", "دوما لك الحمد - ألبوم لك الحمد", "فأشهد أن الله - ألبوم عيون الافاعي", "يارب - ألبوم لك الحمد", "تذكر- ألبوم عناقيد", "يمه - ألبوم ليس الغريب", "جربتها- ألبوم عناقيد", "لا اله الا الله - ألبوم ذكريات", "شكرا يا مصر- ألبوم عناقيد", "يامن اذا - ألبوم ذكريات", "أغيب - ألبوم عناقيد", "براهين - ألبوم عيون الافاعي", "مقدمة - ألبوم ليس الغريب", "أنا العبد - ألبوم قلبي الصغير", "مالي وقفت على القبور - ألبوم ليس الغريب", "هذى زكاتى - ألبوم لك الحمد", "نختلف- ألبوم عناقيد" );
					 
					
					$lengthFullQuran = count($fullQuran);
					$i = 0;
					foreach ($fullQuran as $fullQuranOne){
							echo "<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/";
							echo $quranURL . "/";
							echo $fullQuranOne;
							echo "' data-ogg='' data-download><a class='playlistNonSelected' href='#'>";
							echo $nasheedName[$i];
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
	<div class="row reciter-container">
		<div class="col-md-12 archive-playlist-title">
				<h1 class="reciters"><strong>Biography | سيرة</strong>  </h1>
		</div>
		<div id="reciter-bio">
			<p>Sheikh Mishary bin Rashid Al-Afasy or Mishary Rashid Ghareeb Mohammed Rashed Al-Afasy is a Kuwaiti international-renewed qari, he is born in&nbsp;<a href="http://www.assabile.com/quran/Kuwait" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">Kuwait</a>&nbsp;in September 5th, 1976 ( Sunday 11th of&nbsp;<a href="http://www.assabile.com/a/date-ramadan-debut-ramadan-2" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">Ramadan</a>&nbsp;1396 H).</p>

			<p>He studied Quran in the College of the Holly Quran and Islamic Studies at the Islamic University of Madinah ( Kingdom Of Saudi Arabia), in specialization &#39; the ten readings and translations of&nbsp;<a href="http://www.assabile.com/quran/suwar" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">the Holy Quran</a>&#39;. He has read the Quran to Sheikh Ahmed Abdulaziz Al-Zaiat, Sheikh Ibrahim Ali Shahata Al-Samanodei, and the Sheikh Abdurarea Radwan. He impressed number of great scholars of Quran.</p>

			<p>Actually Sheikh Mishary Al Afasy, is he Imam of Masjid Al-Kabir (Grand Mosque) in Kuwait City, and every Ramadan he leads the Taraweh prayers in this Mosque.</p>

			<p>Recently, Sheikh Mishary bin Rashed Al-Afasy has visited two mosques in the United States of America : the Islamic Center of Irvine (ICOI) in California and the Islamic Center of Detroit (ICD) in Michigan.</p>

			<p>Al Afasy has 2 Space Channels specialized in the recitation of the Hol Quran, the first is Alafasy TV and Alafasy Q.</p>

			<p>Sheikh Alafasy is married and has two daughters. He&#39;s also nicknamed Abu Nora.</p>
			
			<h3 ">مشاري بن راشد العفاسي.. قارئ متعدد المواهب والتخصصات !</h3>

			<p>هو مشاري بن راشد العفاسي أو بالأحرى مشاري راشد غريب محمد راشد العفاسي (أبو نورة)، إمام و من أشهر قراء القرآن الكريم على الصعيد الدولي. من مواليد 5 شتنبر 1976م الموافق ل ۱۱ رمضان ۱۳۹٦ه&nbsp;<a href="http://ar.assabile.com/quran/Kuwait" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">بالكويت</a>. له أسلوب متفرد وقدرة كبيرة على التحكم في الطبقات الصوتية مما يضفي لمسة جمالية على&nbsp;<a href="http://ar.assabile.com/mishary-rashid-alafasy-1/quran" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">تلاواته للقرآن الكريم</a>&nbsp;وعلى أناشيده الإسلامية أيضا.</p>

			<p>خلال صباه، درس مشاري راشد العفاسي الذكر الحكيم في كلية &quot;القرآن الكريم&quot; فتخصص في القراءات العشر والتفسير، ثم تابع دراساته الدينية في الجامعة الإسلامية بالمدينة المنورة (المملكة العربية السعودية). و قد بهر العديد من المشايخ بقراءته للذكر الحكيم أمثال: الشيخ أحمد عبد العزيز الزيات، الشيخ إبراهيم علي شحاته السمنودي و الشيخ عبد الرافع رضوان.</p>

			<p>حُبه للقرآن الكريم و وَلَعُه بالتلاوة والتجويد عوامل من بين أخرى ساهمت في تمكنه من إتقان القراءات العشر ودفعته إلى محاولة إحيائها بين الناس، فأنشأ لهذا الغرض خدمة العفاسي، وأخرج للوجود إصدارات قرآنية متنوعة ضمت مُتوناً في القراءات و التجويد، كما شارك في لجان التحكيم بمسابقاتٍ للقرآن الكريم في دول عربية وغربية، إضافة إلى تقديمه لعدد من المحاضرات حول القرآن الكريم وقواعد تلاوته، وله مشاريع خيرية متنوعة.</p>

			<p>حاليا، يؤمم العفاسي الصلاة بالمسجد الكبير بالكويت كما يؤمم التراويح كل&nbsp;<a href="http://ar.assabile.com/a/ramadan-1" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">رمضان</a>&nbsp;في هذا المسجد. له قناتان متخصصتان في قراءة القرآن الكريم: قناة العفاسي الفضائية و محطة القرآن الكريم، حيث يسعى من خلالهما إلى نشر القرآن الكريم والتعريف بالقراءات العشر والترويج للقيم الإسلامية النبيلة من خلال دروس ومحاضرات وأناشيد هادفة.</p>

			<p>&nbsp;</p>

			<p >مشاري راشد العفاسي من&nbsp;<a href="http://ar.assabile.com/mishary-rashid-alafasy-1/album" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">المنشدين الإسلاميين</a>، له عدة أناشيد مثل:&nbsp;<a href="http://ar.assabile.com/mishary-rashid-alafasy-1/album/dekryat-27" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">ذكريات</a>، طلع البدر،<a href="http://ar.assabile.com/mishary-rashid-alafasy-1/album/qalbi-saghir-30/anta-ra7mani-32.htm" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">&nbsp;أنت رحماني</a>، كن مع الله،<a href="http://ar.assabile.com/mishary-rashid-alafasy-1/album/qalbi-saghir-30/ara-aldonya-33.htm" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none; color: rgb(198, 102, 40);">&nbsp;أرى الدنيا</a>... الخ.<br />
			حيث تعالج في عمومها علاقة المسلم بخالقه، وتحاول بشكل غير مباشر نشر الرسائل الإيجابية والحث على التمسك بالدين والاعتصام بالهوية الإسلامية. كما يتوفر على عدة شرائط و أسطوانات مسجلة لتلاواته للقرآن الكريم، وله ندوات تتناول عدة مواضيع تخص الدين الإسلامي.</p>

			<p>وتقديرا لمواهبه الفطرية وإسهاماته الفكرية والدينية، حصل الشيخ العفاسي على عدد من الجوائز والشواهد التقديرية أبرزها حصوله على جائزة أوسكار المبدعين العرب، ووسام مجلس التعاون الخليجي، ونَيلُه للقب الشخصية الفنية المثالية الأولى في إستفتاء مجلة زهرة الخليج، إضافة إلى فوز شريطه المصور (طلع البدر علينا) بالمركز الرابع في مسابقة الأناشيد الهادفة، وتُصنَّف قناته الفضائية ضمن القنوات الدينية الأكثر مشاهدة.</p>

			<p>يُذكر أن الشيخ العفاسي متزوج و والد لبنتين.</p>
		</div>  	
	</div>
			
</div>			



<?php  include $path . '/pages/footer.php'; ?>