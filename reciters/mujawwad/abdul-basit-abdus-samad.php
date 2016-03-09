<?php  
	$path = $_SERVER['DOCUMENT_ROOT']; 
	$section = 'reciters'; 
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); 
	$current = $mujawwads["$basename"]; 
	    
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
									$quranURL = "abdulbasit_201406";
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
						var videosURL = ["Zcrsfg-EeqM","PD6Ov8JHTfk","wZPdOh6uITc","9UfT8ld39xk"];
					</script>	 
					<?php  include $path . '/pages/videos.php';     ?>  	 	
 
					 
		    </div>
			 	
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة</strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p>Qari ‘Abdul-Basit ‘Abdus-Samad (1927–1988) (عبد الباسط عبد الصمد), was a renowned Egyptian Qari (reciter of the Qur'an). As such, many modern reciters try to imitate his style. The Qari had won three world Qira'at competitions in the early 1970s. ‘Abdus-Samad was one of the first huffaz to make commercial recordings of his recitations, and the first president of the Reciters' Union in Egypt. He is best known for his recitation of sura al-Fatiha, the first chapter of the Qur'an, which is a key sura (chapter) in the five daily Islamic canonical prayers</p>
					<p> 
					‘Abdul-Basit was born in a village near Armant city in southern Egypt. He was raised in an environment which nourished his motivating force and passion for reciting the Quran. His father Mohammed Abdus-Samad and grand father Abdus-Samad, were both recognized and respected for memorizing and reciting the Quran. His father was of Kurdish decent and his mother was Egyptian.

					In 1950, he came to Cairo where Muslims in many mosques were captivated by his recitations. On one occasion, he was reciting verses from sura al-Ahzab (The Confederates) he was requested to recite for longer than his allotted 10 minutes by the audience, and he continued to recite for over an hour and a half; his listeners were captivated by his mastery of pitch, tone and the rules of tajweed (Qur'anic recitation).</p>
					<p>‘Abdus-Samad travelled extensively outside Egypt; in 1961, he recited at the Badshahi Masjid, in Lahore, Pakistan as well as reciting in one of the biggest Tablighi Madrasa's in Bangladesh, the Hathazari Madrasa in Chittagong. He visited Indonesia (1964/1965 ), Jakarta, and recited the Qur'an in that country's biggest Mosque. The audience filled the entire room of the mosque, including the frontyard; about a 1/4 of a million people were hearing his recitation till dawn. Also in Pekalongan (city of Batik ), he recited at the Masjid Jame' (Masjid Kauman), His recitation captivated the audience. He also recited for more than two hours at the Darul Uloom Deoband's 100 years celebration in the early 1980s where scholars from all over the world were present in the thousands. In 1987, whilst on a visit to America, ‘Abdus-Samad related a story from one trip he made to the Soviet Union, with then Egyptian president Gamal Abdel Naser.

					‘Abdus-Samad was asked to recite for some leaders of the Soviet party. ‘Abdus-Samad recounts that four to five of his listeners from the Communist Party were in tears on hearing the recitation, although they didn't understand what was being recited, but they cried, touched by the Qur'an.

					Indira Gandhi, an Indian prime minister and political leader always felt touched by his recitation and would stop alongside to appreciate his recitation.

					The circumstances of his death are unknown. However, it has been suggested that he suffered from a fatal heart trauma after having been involved in a car accident while other accounts state he passed away either from diabetes or an acute hepatitis. There are also rumors that report he died from straining a vein until it popped while reciting Surat Ya-Sin in few breaths. The exact date of his death has been confirmed to be on Wednesday, November 30, 1988, and he is survived by his three sons (from oldest to the youngest): Yasir, Hisham, and Tariq. Following his father's footsteps, Yasir has also become a Qari.</p>
					<p><a href="https://en.wikipedia.org/wiki/Abdul_Basit_'Abd_us-Samad">https://en.wikipedia.org/wiki/Abdul_Basit_&#39;Abd_us-Samad</a></https:></p>
					
					 
					<p >ولد القارئ الشيخ عبد الباسط محمد عبد الصمد عام 1927 بقرية المراعزة التابعة لمدينة ومركز&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A3%D8%B1%D9%85%D9%86%D8%AA" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="أرمنت">أرمنت</a>&nbsp;بمحافظة&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D9%82%D9%86%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="قنا">قنا</a>&nbsp;بجنوب&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%B5%D8%B9%D9%8A%D8%AF" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="الصعيد">الصعيد</a>. حيث نشأ في بيئة تهتم بالقرآن الكريم حفظاً وتجويداً. فالجد الشيخ عبد الصمد كان من الحفظة المشهود لهم بالتمكن من حفظ القرآن وتجويده بالأحكام، والوالد هو الشيخ محمد عبد الصمد، كان أحد المجودين المجيدين للقرآن حفظًا وتجويدًا.</p>

					<p >أما الشقيقان محمود وعبد الحميد فكانا يحفظان القرآن بالكتاب فلحق بهما أخوهما الأصغر سنًّا. عبد الباسط، وهو في السادسة من عمره.</p>

					<p >التحق الطفل الموهوب عبد الباسط بكتاب الشيخ الأمير بأرمنت فاستقبله شيخه أحسن استقبال؛ لأنه توسم فيه كل المؤهلات القرآنية التي أصقلت من خلال سماعه القرآن يُتلَى بالبيت ليل نهار بكرةً وأصيلاً.</p>

					<p >لاحظ الشيخ على تلميذه الموهوب أنه يتميز بجملةٍ من المواهب والنبوغ تتمثل في سرعة استيعابه لما أخذه من القرآن وشدة انتباهه وحرصه على متابعة شيخه بشغف وحب، ودقة التحكم في مخارج الألفاظ والوقف والابتداء وعذوبة في الصوت تشنف الآذان بالسماع والاستماع. وأثناء عودته إلى البيت كان يرتل ما سمعه من الشيخ رفعت بصوته القوي الجميل متمتعًا بأداءٍ طيبٍ يستوقف كل ذي سمع.</p>

					<p >يقول الشيخ عبد الباسط في مذكراته: [اقتباس]: &quot;كانت سني عشر سنوات أتممت خلالها حفظ القرآن الذي كان يتدفق على لساني كالنهر الجاري وكان والدي موظفًا بوزارة المواصلات، وكان جدي من العلماء فطلبت منهما أن أتعلم القراءات فأشارا عليَّ أن أذهب إلى مدينة&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%B7%D9%86%D8%B7%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="طنطا">طنطا</a>&nbsp;بالوجه البحري لأتلقى علوم القرآن والقراءات على يد الشيخ (محمد سليم) ولكن المسافة بين أرمنت إحدى مدن جنوب&nbsp;<a href="https://ar.wikipedia.org/wiki/%D9%85%D8%B5%D8%B1" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="مصر">مصر</a>&nbsp;وبين طنطا إحدى مدن الوجه البحري كانت بعيدة جداً، ولكن الأمر كان متعلقاً بصياغة مستقبلي ورسم معالمه مما جعلني أستعد للسفر، وقبل التوجه إلى طنطا بيومٍ واحدٍ علمنا بوصول الشيخ محمد سليم إلى (أرمنت) ليستقر بها مدرسًا للقراءات بالمعهد الديني بأرمنت واستقبله أهل أرمنت أحسن استقبال واحتفلوا به؛ لأنهم يعلمون قدراته وإمكاناته لأنه من أهل العلم والقرآن، وكأن القدر قد سَاقَ إلينا هذا الرجل في الوقت المناسب. وأقام له أهل البلاد جمعية للمحافظة على القرآن الكريم (بأصفون المطاعنة) فكان يحفظ القرآن ويعلم علومه والقراءات. فذهبت إليه وراجعت عليه القرآن كله، ثم حفظت الشاطبية التي هي المتن الخاص بعلم القراءات السبع&quot;. بعد أن وصل الشيخ عبد الباسط الثانية عشرة من العمر انهالت عليه الدعوات من كل مدن وقرى محافظة&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D9%82%D9%86%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="قنا">قنا</a>&nbsp;وخاصة أصفون المطاعنة بمساعدة الشيخ محمد سليم الذي زكّى الشيخ عبد الباسط في كل مكان يذهب إليه، وشهادة الشيخ سليم كانت محل ثقة الناس جميعاً.</p>

					<h2 ><span >دخوله الإذاعة المصرية</span><span class="mw-editsection" style="-webkit-user-select: none; font-size: small; margin-right: 1em; vertical-align: baseline; line-height: 1em; display: inline-block; white-space: nowrap; unicode-bidi: -webkit-isolate;"><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">[</span><a href="https://ar.wikipedia.org/w/index.php?title=%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%A8%D8%A7%D8%B3%D8%B7_%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%B5%D9%85%D8%AF&amp;action=edit&amp;section=2" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="عدل القسم: دخوله الإذاعة المصرية">عدل</a><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">]</span></span></h2>

					<p >مع نهاية عام 1951 م طلب الشيخ الضباع من الشيخ عبد الباسط أن يتقدم إلى الإذاعة كقارئ بها ولكن الشيخ عبد الباسط أراد أن يؤجل هذا الموضوع نظراً لإرتباطه بمسقط رأسه وأهله ولأن الإذاعة تحتاج إلى ترتيب خاص. ولكنه تقدم بالنهاية.</p>

					<p >كان الشيخ الضباع قد حصل على تسجيل لتلاوة الشيخ عبد الباسط بالمولد الزينبي وقدم هذا التسجيل للجنة الإذاعة فانبهر الجميع بالأداء القوي العالي الرفيع المحكم المتمكن وتم اعتماد الشيخ عبد الباسط بالإذاعة عام 1951 ليكون أحد قرائها.</p>

					<p >وبعد الشهرة التي حققها الشيخ عبد الباسط في بضعة أشهر كان لابد من إقامة دائمة في&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%82%D8%A7%D9%87%D8%B1%D8%A9" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="القاهرة">القاهرة</a>&nbsp;مع أسرته التي نقلها معه إلى حي&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%B3%D9%8A%D8%AF%D8%A9_%D8%B2%D9%8A%D9%86%D8%A8" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="السيدة زينب">السيدة زينب</a>.</p>

					<p >بسبب إلتحاقه بالإذاعة زاد الإقبال على شراء أجهزة الراديو وتضاعف إنتاجها وانتشرت بمعظم البيوت للإستماع إلى صوت الشيخ عبد الباسط، وكان الذي يمتلك (راديو) في منطقة أو قرية من القرى كان يقوم برفع صوت الراديو لأعلى درجة حتى يتمكن الجيران من سماع الشيخ عبد الباسط وهم بمنازلهم وخاصة كل يوم سبت على موجات البرنامج العام من الثامنة وحتى الثامنة والنصف مساءً.</p>

					<h2 ><span >شهرته</span><span class="mw-editsection" style="-webkit-user-select: none; font-size: small; margin-right: 1em; vertical-align: baseline; line-height: 1em; display: inline-block; white-space: nowrap; unicode-bidi: -webkit-isolate;"><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">[</span><a href="https://ar.wikipedia.org/w/index.php?title=%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%A8%D8%A7%D8%B3%D8%B7_%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%B5%D9%85%D8%AF&amp;action=edit&amp;section=3" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="عدل القسم: شهرته">عدل</a><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">]</span></span></h2>

					<p >عن بداية شهرة عبد الباسط روى الشيخ البطيخي فقال: في شهر&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%B1%D9%85%D8%B6%D8%A7%D9%86" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="رمضان">رمضان</a>&nbsp;كان الشيخ عبد الباسط يحيي لياليه في دواوين القرية ولا يرد أحدا يطلب منه أن يقرأ له بضع آيات من القرآن، ثم بدأ بعدها في التنقل بين المحافظات، وفي إحدى المرات قرأ في مجلس المقرئين&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D9%85%D8%B3%D8%AC%D8%AF_%D8%A7%D9%84%D8%AD%D8%B3%D9%8A%D9%86" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="مسجد الحسين">بمسجد الحسين</a>&nbsp;بالقاهرة، وعندما جاء دوره في القراءة كان من نصيبه ربع من سورة النحل، وأعجب به الناس حتى إن المشايخ كانوا يُلوحون بعمائمهم وكان يستوقفه المستمعون من حين لآخر ليعيد لهم ما قرأه من شدة الإعجاب، ثم تهافت الناس على طلبه حتى طلبته سوريا ليحيي فيها شهر رمضان فرفض إلا بعد أن يأذن له شيخه.</p>

					<p >ويضيف الشيخ عبد الصبور: كنا ذات مرة في زيارة إلى&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%AD%D8%B1%D9%85_%D8%A7%D9%84%D9%85%D9%83%D9%8A" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="الحرم المكي">الحرم المكي</a>&nbsp;وكان شيخ الحرم المكي في ذلك الوقت يقرأ من سورة&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%A8%D9%82%D8%B1%D8%A9" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="البقرة">البقرة</a>&nbsp;إلى سورة&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%A3%D9%86%D8%B9%D8%A7%D9%85" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="الأنعام">الأنعام</a>&nbsp;ب&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D9%82%D8%B1%D8%A7%D8%A1%D8%A9_%D9%88%D8%B1%D8%B4" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="قراءة ورش">قراءة ورش</a>&nbsp;عن&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D9%86%D8%A7%D9%81%D8%B9" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="نافع">نافع</a>&nbsp;فرتل قائلا: &quot;وقال لهم نبيهم إن الله قد بعث لكم طالوت ملكا&quot; وقرأ في الركعة الثانية: &quot;إن ناشئة الليل هي أشد وطئا وأقوم قيلا&quot; فحرص الشيخ عبد الباسط على أن يقابله ليصحح له سهوه في القراءة، فقال له: كان ينبغي أن تقرأ وتقول: نبيئهم، بدلا من نبيهم، وأشد وطائا بدلا من أشد وطئا، فقد قرأت في الآية الأولى بقراءة حفص ولم تقرأ بقراءة ورش فأقره الشيخ على هذا السهو في القراءة وطلب منه أن يبقى في&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%AD%D8%B1%D9%85_%D8%A7%D9%84%D9%85%D9%83%D9%8A" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="الحرم المكي">الحرم المكي</a>&nbsp;معهم.</p>

					<h2 ><span>زياراته العالمية</span><span class="mw-editsection" style="-webkit-user-select: none; font-size: small; margin-right: 1em; vertical-align: baseline; line-height: 1em; display: inline-block; white-space: nowrap; unicode-bidi: -webkit-isolate;"><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">[</span><a href="https://ar.wikipedia.org/w/index.php?title=%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%A8%D8%A7%D8%B3%D8%B7_%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%B5%D9%85%D8%AF&amp;action=edit&amp;section=4" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="عدل القسم: زياراته العالمية">عدل</a><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">]</span></span></h2>

					<p >بدأ الشيخ عبد الباسط رحلته الإذاعية في رحاب القرآن الكريم منذ عام 1952 م فانهالت عليه الدعوات من شتى بقاع الدنيا في شهر رمضان وغير شهر رمضان.</p>

					<p >كانت بعض الدعوات توجه إليه ليس للإحتفال بمناسبة معينة وإنما كانت الدعوة للحضور إلى الدولة التي أرسلت إليه لإقامة حفل بغير مناسبة وإذا سألتهم عن المناسبة التي من أجلها حضر الشيخ عبد الباسط فكان ردهم (بأن المناسبة هو وجود الشيخ عبد الباسط) فكان الاحتفال به ومن أجله لأنه كان يضفي جواً من البهجة والفرحة على المكان الذي يحل به.</p>

					<p >هذا يظهر من خلال استقبال شعوب دول العالم له إستقبالاً رسمياً على المستوى القيادي والحكومي والشعبي. حيث استقبله الرئيس الباكستاني في أرض المطار وصافحه وهو ينزل من الطائرة. وفي&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%AC%D8%A7%D9%83%D8%B1%D8%AA%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="جاكرتا">جاكرتا</a>&nbsp;بدولة&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%86%D8%AF%D9%88%D9%86%D9%8A%D8%B3%D9%8A%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="اندونيسيا">اندونيسيا</a>قرأ القرآن الكريم بأكبر مساجدها فامتلأت جنبات المسجد بالحاضرين وامتد المجلس خارج المسجد لمسافة كيلو متر مربع فامتلأ الميدان المقابل للمسجد بأكثر من ربع مليون مسلم يستمعون إليه وقوفا على الأقدام حتى مطلع الفجر.</p>

					<p >في&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%AC%D9%86%D9%88%D8%A8_%D8%A3%D9%81%D8%B1%D9%8A%D9%82%D9%8A%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="جنوب أفريقيا">جنوب أفريقيا</a>&nbsp;عندما علم المسؤولون بوصوله أرسلوا إليه فريق عمل إعلامي من رجال الصحافة والإذاعة والتليفزيون لإجراء لقاءات معه ومعرفة رأيه عما إذا كانت هناك تفرقة عنصرية أم لا من وجهة نظره، فكان أذكى منهم وأسند كل شيء إلى زميله وابن بلده ورفيق رحلته القارئ الشيخ أحمد الرزيقي الذي رد عليهم بكل لباقة وأنهى اللقاء بوعي ودبلوماسية أضافت إلى أهل القرآن مكاسب لا حد لها فرضت إحترامهم على الجميع.</p>

					<p >كانت أول زيارة للشيخ عبد الباسط خارج مصر بعد إلتحاقه بالإذاعة عام 1952 زار خلالها&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="السعودية">السعودية</a>&nbsp;لأداء فريضة الحج ومعه والده. واعتبر السعوديون هذه الزيارة مهيأة من قبل الله فهي فرصة يجب أن تجنى منها الثمار، فطلبوا منه أن يسجل عدة تسجيلات للمملكة لتذاع عبر موجات الإذاعة. لم يتردد الشيخ عبد الباسط وقام بتسجيل عدة تلاوات للمملكة العربية السعودية أشهرها التي سجلت بالحرم المكي&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%85%D8%B3%D8%AC%D8%AF_%D8%A7%D9%84%D9%86%D8%A8%D9%88%D9%8A_%D8%A7%D9%84%D8%B4%D8%B1%D9%8A%D9%81" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="المسجد النبوي الشريف">والمسجد النبوي الشريف</a>، (لقب بعدها بصوت مكة). لم تكن هذه المرة الأخيرة التي زار فيها&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="السعودية">السعودية</a>&nbsp;وإنما تعددت الزيارات ما بين دعوات رسمية وبعثات وزيارات لحج بيت الله الحرام.</p>

					<p >من بين الدول التي زارها&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%87%D9%86%D8%AF" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="الهند">الهند</a>&nbsp;لإحياء احتفال ديني كبير أقامه أحد الأغنياء المسلمين هناك. فوجئ الشيخ عبد الباسط بجميع الحاضرين يخلعون الأحذية ويقفون على الأرض وقد حنّوا رؤوسهم إلى أسفل ينظرون محل السجود وأعينهم تفيض من الدمع يبكون إلى أن انتهى من التلاوة وعيناه تذرفان الدمع تأثراً بهذا الموقف الخاشع.</p>

					<p >لم يقتصر الشيخ عبد الباسط في سفره على الدول العربية والإسلامية فقط وإنما جاب العالم شرقاً وغرباً شمالاً وجنوباً وصولاً إلى المسلمين في أي مكان من أرض الله الواسعة، ومن أشهر المساجد التي قرأ بها القرآن هي<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%85%D8%B3%D8%AC%D8%AF_%D8%A7%D9%84%D8%AD%D8%B1%D8%A7%D9%85" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="المسجد الحرام">المسجد الحرام</a>&nbsp;بمكة&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%85%D8%B3%D8%AC%D8%AF_%D8%A7%D9%84%D9%86%D8%A8%D9%88%D9%8A" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="المسجد النبوي">والمسجد النبوي</a>&nbsp;الشريف بالمدينة المنورة&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%85%D8%B3%D8%AC%D8%AF_%D8%A7%D9%84%D8%A3%D9%82%D8%B5%D9%89" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="المسجد الأقصى">والمسجد الأقصى</a>&nbsp;ب&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%82%D8%AF%D8%B3" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="القدس">القدس</a>&nbsp;وكذلك&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%85%D8%B3%D8%AC%D8%AF_%D8%A7%D9%84%D8%A5%D8%A8%D8%B1%D8%A7%D9%87%D9%8A%D9%85%D9%8A" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="المسجد الإبراهيمي">المسجد الإبراهيمي</a>&nbsp;ب&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%AE%D9%84%D9%8A%D9%84" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="الخليل">الخليل</a>&nbsp;ب&nbsp;<a href="https://ar.wikipedia.org/wiki/%D9%81%D9%84%D8%B3%D8%B7%D9%8A%D9%86" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="فلسطين">فلسطين</a>&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%85%D8%B3%D8%AC%D8%AF_%D8%A7%D9%84%D8%A3%D9%85%D9%88%D9%8A" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="المسجد الأموي">والمسجد الأموي</a>&nbsp;ب&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%AF%D9%85%D8%B4%D9%82" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="دمشق">دمشق</a>&nbsp;وأشهر المساجد بآسيا&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A5%D9%81%D8%B1%D9%8A%D9%82%D9%8A%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="إفريقيا">وإفريقيا</a>&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%88%D9%84%D8%A7%D9%8A%D8%A7%D8%AA_%D8%A7%D9%84%D9%85%D8%AA%D8%AD%D8%AF%D8%A9" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="الولايات المتحدة">والولايات المتحدة</a><a href="https://ar.wikipedia.org/wiki/%D9%81%D8%B1%D9%86%D8%B3%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="فرنسا">وفرنسا</a>&nbsp;<a href="https://ar.wikipedia.org/wiki/%D9%84%D9%86%D8%AF%D9%86" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="لندن">ولندن</a>&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%87%D9%86%D8%AF" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="الهند">والهند</a>&nbsp;ومعظم دول العالم، فلم تخل جريدة رسمية أو غير رسمية من صورة وتعليقات تظهر أنه أسطورة تستحق التقدير والاحترام.</p>

					<h2 ><span >تكريمه</span><span class="mw-editsection" style="-webkit-user-select: none; font-size: small; margin-right: 1em; vertical-align: baseline; line-height: 1em; display: inline-block; white-space: nowrap; unicode-bidi: -webkit-isolate;"><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">[</span><a href="https://ar.wikipedia.org/w/index.php?title=%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%A8%D8%A7%D8%B3%D8%B7_%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%B5%D9%85%D8%AF&amp;action=edit&amp;section=5" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="عدل القسم: تكريمه">عدل</a><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">]</span></span></h2>

					<p >يعتبر الشيخ عبد الباسط القارئ الوحيد الذي نال من التكريم حظاً لم يحصل عليه أحد بهذا القدر من الشهرة والمنزلة التي تربع بها على عرش تلاوة&nbsp;<a class="mw-redirect" href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%82%D8%B1%D8%A2%D9%86_%D8%A7%D9%84%D9%83%D8%B1%D9%8A%D9%85" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="القرآن الكريم">القرآن الكريم</a>&nbsp;لما يقرب من نصف قرن من الزمان نال خلالها قدر من الحب الذي جعل منه أسطورة لن تتأثر بمرور السنين بل كلما مر عليها الزمان زادت قيمتها وارتفع قدرها كالجواهر النفيسة ولم ينس حياً ولا ميتاً.</p>

					<p >فكان تكريمه حياً عام 1956 عندما كرمته&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%B3%D9%88%D8%B1%D9%8A%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="سوريا">سوريا</a>&nbsp;بمنحه وسام الاستحقاق ووسام الأرز من&nbsp;<a href="https://ar.wikipedia.org/wiki/%D9%84%D8%A8%D9%86%D8%A7%D9%86" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="لبنان">لبنان</a>&nbsp;والوسام الذهبي من&nbsp;<a href="https://ar.wikipedia.org/wiki/%D9%85%D8%A7%D9%84%D9%8A%D8%B2%D9%8A%D8%A7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="ماليزيا">ماليزيا</a>&nbsp;ووسام من&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D8%B3%D9%86%D8%BA%D8%A7%D9%84" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="السنغال">السنغال</a>&nbsp;وآخر من&nbsp;<a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%85%D8%BA%D8%B1%D8%A8" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="المغرب">المغرب</a>&nbsp;وآخر الأوسمة التي حصل عليها كان قبل رحيله من الرئيس محمد حسنى مبارك في الاحتفال بليلة القدر عام 1987 م.</p>

					<h3 ><span >الأوسمة التي حصل عليها</span><span class="mw-editsection" style="-webkit-user-select: none; font-size: small; font-weight: normal; margin-right: 1em; vertical-align: baseline; line-height: 1em; display: inline-block; white-space: nowrap; unicode-bidi: -webkit-isolate;"><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">[</span><a href="https://ar.wikipedia.org/w/index.php?title=%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%A8%D8%A7%D8%B3%D8%B7_%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%B5%D9%85%D8%AF&amp;action=edit&amp;section=6" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="عدل القسم: الأوسمة التي حصل عليها">عدل</a><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">]</span></span></h3>

					<ul >
						<li style="margin-bottom: 0.1em;">وسام من رئيس وزراء سوريا عام 1959.</li>
						<li style="margin-bottom: 0.1em;">وسام من رئيس حكومة ماليزيا عام 1965.</li>
						<li style="margin-bottom: 0.1em;">وسام الاستحقاق من الرئيس السنغالي عام 1975.</li>
						<li style="margin-bottom: 0.1em;">الوسام الذهبي من باكستان عام 1980.</li>
						<li style="margin-bottom: 0.1em;">وسام العلماء من الرئيس الباكستاني ضياء الحق عام 1984.</li>
						<li style="margin-bottom: 0.1em;">وسام الإذاعة المصرية في عيدها الخمسين</li>
						<li style="margin-bottom: 0.1em;">وسام الاستحقاق من الرئيس المصري السابق محمد حسني مبارك أثناء الاحتفال بيوم الدعاة في عام 1987.</li>
						<li style="margin-bottom: 0.1em;">وسام الأرز من الجمهورية اللبنانية</li>
					</ul>

					<h2 ><span >المرض والوفاة</span><span class="mw-editsection" style="-webkit-user-select: none; font-size: small; margin-right: 1em; vertical-align: baseline; line-height: 1em; display: inline-block; white-space: nowrap; unicode-bidi: -webkit-isolate;"><span class="mw-editsection-bracket" style="margin-top: 0px !important; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; color: rgb(85, 85, 85);">[</span><a href="https://ar.wikipedia.org/w/index.php?title=%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%A8%D8%A7%D8%B3%D8%B7_%D8%B9%D8%A8%D8%AF_%D8%A7%D9%84%D8%B5%D9%85%D8%AF&amp;action=edit&amp;section=7" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="عدل القسم: المرض والوفاة">عدل</a><span >]</span></span></h2>

					<p >تمكن مرض السكر منه وكان يحاول مقاومته بالحرص الشديد والالتزام في تناول الطعام والمشروبات ولكن تزامن الكسل الكبدي مع السكر فلم يستطع أن يقاوم هذين المرضين الخطيرين فأصيب بالتهاب كبدي قبل رحيله بأقل من شهر فدخل المستشفى إلا أن صحته تدهورت مما دفع أبناءه والأطباء إلى نصحه بالسفر إلى الخارج ليعالج بلندن حيث مكث بها أسبوعاً وكان بصحبته ابنه طارق فطلب منه أن يعود به إلى مصر.</p>

					<p >توفى يوم الأربعاء&nbsp;<a href="https://ar.wikipedia.org/wiki/30_%D9%86%D9%88%D9%81%D9%85%D8%A8%D8%B1" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="30 نوفمبر">30 نوفمبر</a>&nbsp;<a href="https://ar.wikipedia.org/wiki/1988" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="1988">1988م</a>، وكانت جنازته وطنية ورسمية على المستويين المحلي والعالمي، فحضر تشييع الجنازة كثير من سفراء دول العالم نيابة عن شعوبهم وملوك ورؤساء دولهم تقديراً لدوره في مجال الدعوة بكافة أشكالها.</p>

					<p><https: abd_us-samad="" en.wikipedia.org="" https:="" p="" wiki=""></https:></p>
				</div>  	
			</div> 
</div>

 		  		
		
<?php  include $path . '/pages/footer.php';?> 
   