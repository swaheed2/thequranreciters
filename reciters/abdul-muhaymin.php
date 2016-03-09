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
			   <div class=" archive-playlist-title">
									<p class="reciters">Ramadan 2015 - Renaissance Academy - Austin, TX</p> 
				</div>
				<?php  include $path . '/player/player_code.php';     ?> 
					
				<div id="playlist_list">
				<!-- local playlist -->
					<ul id='playlist1'> 
						<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/ramadan-2015-hafidh-abdul-muhaymin//Al-Anaam [151-157].mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Anaam [151-157] </a><a class='dlink' href=' https://archive.org/download/ramadan-2015-hafidh-abdul-muhaymin/Al-Anaam [151-157].mp3' data-dlink=' https://archive.org/download/ramadan-2015-hafidh-abdul-muhaymin/Al-Anaam [151-157].mp3'><img src='media/data/dlink.png' alt = ''/></a></li>  
						<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/ramadan-2015-hafidh-abdul-muhaymin//Furqaan2015.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Furqan </a><a class='dlink' href=' https://archive.org/download/ramadan-2015-hafidh-abdul-muhaymin/Furqaan2015.mp3' data-dlink=' https://archive.org/download/ramadan-2015-hafidh-abdul-muhaymin/Furqaan2015.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
						<li class= 'playlistItem' data-type='local' data-mp3='https://archive.org/download/ramadan-2015-hafidh-abdul-muhaymin//Ahzab-2015.mp3' data-ogg='' data-download><a class='playlistNonSelected' href='#'>Al-Ahzab </a><a class='dlink' href=' https://archive.org/download/ramadan-2015-hafidh-abdul-muhaymin/Ahzab-2015.mp3' data-dlink=' https://archive.org/download/ramadan-2015-hafidh-abdul-muhaymin/Ahzab-2015.mp3'><img src='media/data/dlink.png' alt = ''/></a></li>
					</ul>
				</div>  
			</div>	 
			<?php  include $path . '/pages/gallery.php';     ?>	 	  	
		    <div class="row reciter-container" id="youtube-videos">	
					<script> 
						var videosURL = ["HcGSWZXfn68","86WqzZy4rhM","zzmuwKNN-co","L7loDB5ujUs","fbW_dcP47xM","3daS2EToPzg","eRZyuCsik1M","xz1eGER-uv0","2aHUvaJbGzo","","",""];
					</script>	  	 
		    </div>  
 

</div>
			   
										<script>   
											var cars = ["001002_201503"];
											var surahNames = ["Al-Fatiha", "Al-Baqarah", "Al Imran", "An-Nisa", "Al-Maidah", "Al-Anam", "Al-Araf","Al-Anfal", "At-Taubah","Yunus", "Hud","Yusuf", "Ar-Rad", "Ibrahim", "Al-Hijr", "An-Nahl", "Al-Isra", "Al-Kahf", "Maryam", "Ta-Ha", "Al-Anbiya", "Al-Hajj","Al-Muminun", "An-Nur", "Al-Furqan", "Ash-Shuara", "An-Naml", "Al-Qasas", "Al-Ankabut", "Ar-Rum", "Luqman","As-Sajdah", "Al-Ahzab", "Saba", "Fatir", "Ya-Sin", "As-Saffaat", "Saad", "Az-Zumar", "Ghafir", "Fussilat","Ash-Shura", "Az-Zukhruf", "Ad-Dukhan", "Al-Jathiyah", "Al-Ahqaf", "Muhammad", "Al-Fath", "Al-Hujuraat", "Qaf", "Adh-Dhariyat","At-Tur", "An-Najm", "Al-Qamar", "Ar-Rahman", "Al-Waqiah", "Al-Hadid", "Al-Mujadilah", "Al-Hashr", "Al-Mumtahana", "As-Saff","Al-Jumuah", "Al-Munafiqun", "At-Taghabun", "At-Talaaq", "At-Tahrim", "Al-Mulk", "Al-Qalam", "Al-Haqqah", "Al-Maarij","Nuh", "Al-Jinn", "Al-Muzzammil", "Al-Muddathir", "Al-Qiyamah", "Al-Insan", "Al-Mursalaat", "An-Naba", "An-Naziaat", "Abasa", "At-Takwir", "Al-Infitaar", "Al-Mutaffifi", "Al-Inshiqaq", "Al-Buruj", "At-Tariq", "Al-Ala", "Al-Ghaashiya", "Al-Fajr", "Al-Balad", "Ash-Shams", "Al-Lail", "Ad-Duha", "Ash-Sharh", "At-Tin", "Al Alaq", "Al-Qadr", "Al-Baiyyinah", "Az-Zalzalah", "Al-Aadiyaat", "Al-Qariah", "At-Takaathur", "Al-Asr", "Al-Humazah", "Al-Fil", "Al-Quraish", "Al-Maaun", "Al-Kauthar", "Al-Kaafirun", "An-Nasr", "Al-Masad", "Al-Ikhlaas", "Al-Falaq", "An-Naas"];

											arabicNames = ["الفاتحة", "البقرة", "آل عمران",
													"النساء", "المائدة", "الأنعام", "الأعراف", "الأنفال", "التوبة",
													"يونس", "هود", "يوسف", "الرعد", "إبراهيم", "الحجر", "النحل",
													"الإسراء", "الكهف", "مريم", "طه", "الأنبياء", "الحج", "المؤمنون",
													"النور", "الفرقان", "الشعراء", "النمل", "القصص", "العنكبوت",
													"الروم", "لقمان", "السجدة", "الأحزاب", "سبأ", "فاطر", "يس",
													"الصافات", "ص", "الزمر", "غافر", "فصلت", "الشورى", "الزخرف",
													"الدخان", "الجاثية", "الأحقاف", "محمد", "الفتح", "الحجرات", "ق",
													"الذاريات", "الطور", "النجم", "القمر", "الرحمن", "الواقعة",
													"الحديد", "المجادلة", "الحشر", "الممتحنة", "الصف", "الجمعة",
													"المنافقون", "التغابن", "الطلاق", "التحريم", "الملك", "القلم",
													"الحاقة", "المعارج", "نوح", "الجن", "المزمل", "المدثر", "القيامة",
													"الإنسان", "المرسلات", "النبأ", "النازعات", "عبس", "التكوير",
													"الانفطار", "المطففين", "الانشقاق", "البروج", "الطارق", "الأعلى",
													"الغاشية", "الفجر", "البلد", "الشمس", "الليل", "الضحى", "الشرح",
													"التين", "العلق", "القدر", "البينة", "الزلزلة", "العاديات",
													"القارعة", "التكاثر", "العصر", "الهمزة", "الفيل", "قريش",
													"الماعون", "الكوثر", "الكافرون", "النصر", "المسد", "الإخلاص",
													"الفلق", "الناس"];
												var data = [];
												function DataValues (key,part1,title,part2) {
													this.key = key;
													this.part1 = part1; 
													this.title = title; 
													this.part2 = part2;
													this.getInfo = function() {
														if( (this.part1 != undefined) )
															return this.part1;
													};	
													this.getKey = function() {
														return this.key;
													};
													this.getPart1 = function() {
														return this.part1;
													};
													this.getTitle = function() {
														return this.title;
													};
													this.getPart2 = function() {
														return this.part2;
													};
												}
											
											var count = 0;
											valuesCount = 0;
											for(var i=0; i < cars.length; i++){
												var name = cars[i];
												var urlJ = "https://archive.org/embed/" + name;
												function functionName() {
													var url = "https://archive.org/metadata/" + name + "/files";
													var details = "https://archive.org/download/" + name + "/";
													var output = ' ';
													function jsonpCallback(response) {
														//after success some staff
														var files = response.result;
														
														for (var i = files.length - 1; i >= 0; i--)
																	if (typeof files[i].mtime === 'undefined')
																		files.splice(i, 1);
																
														   
														for(var i=0; i < files.length; i++){
															if(files[i].source == "original"){
																var title = "";
																var orgTitle = files[i].title;
																var orgName = files[i].name;
																if(typeof orgTitle === 'undefined'){
																	title = orgName.substring(0,orgName.length-4); 
																}
																else{
																	title = orgTitle; 
																}
																if( (orgName.indexOf(".xml") > -1) || (orgName.indexOf(".sql") > -1)){
																	continue;
																}
																var fileURL = "<li class= 'playlistItem' data-type='local' data-mp3='" +
																details + "/" + files[i].name + 
																"' data-ogg='' data-download><a class='playlistNonSelected' href='#'>" + 
																title + "</a><a class='dlink' href=' " +
																details + files[i].name + 
																"' data-dlink=' " +
																details + files[i].name + 
																"'><img src='media/data/dlink.png' alt = ''/></a></li>";
																  
																// test version start   
																var key = orgName.substring(0,3);   									
																key = key.replace(/^0+/, ''); 
																key = Number(key);
																var part1 = files[i].name;  
																var part2 = "";																
																
																var values = new DataValues(key,part1,title,part2);
																data[i] = values;
																
																
																 
																
																
																 
																
																
																 
																//console.log(key + " " + data[key]); 
																
																// test version end 


																 
																
																
																count++;
															}
																 
														}
														//test 
														
														
														console.log("$fullQuran = array(");   
														
														data.sort(function(x, y){ 
															if (x.getKey() < y.getKey()) {
																//console.log(x.getKey() + "<" + y.getKey());
																return -1;
															}
															if (x.getKey() > y.getKey()) {
																//console.log(x.getKey() + ">" + y.getKey());
																return 1;
															}
															return 0;
														});
														for (var i=0; i < data.length; i++){
															if(data[i] != undefined){
																console.log('"' +  data[i].getTitle() + '",'); 
															}
														}
														console.log(");"); 

														for (var i=0; i < data.length; i++){
															if(data[i] != undefined){
																console.log('"' +  data[i].getPart1() + '",'); 
															}
														}
														console.log(");");
														//test
														 
													}
													
								 
													$.ajax({
														url: url,
														dataType: 'jsonp',
														error: function(xhr, status, error) {
															alert(error.message);
														},
														success: jsonpCallback
													});
													return false;
												}
												functionName(); 
											}
										</script>
										
										
										<script>   
											var cars = ["Comments.json"];
											 
											
											var count = 0;
											valuesCount = 0;
											for(var i=0; i < cars.length; i++){
												var name = cars[i]; 
												function functionName() {
													var url = "http://thequranreciters.com/Comments.json"; 
													var output = ' ';
													function jsonpCallback(response) {
														//after success some staff
														var files = response.results;
														
														 
														for(var i=0; i < files.length; i++){
															 console.log("INSERT INTO comments VALUES('" + files[i].pageId + "','" + files[i].personName + "','" + files[i].email + "','" + files[i].personMessage + "','" + files[i].createdAt + "');")
														}
														  
														 
													}
													
								 
													$.ajax({
														url: url,
														dataType: 'json',
														error: function(xhr, status, error) {
															alert(error.message);
														},
														success: jsonpCallback
													});
													return false;
												}
												//functionName(); 
											}
										</script>
										
										 
 

<?php  include $path . '/pages/footer.php'; ?>