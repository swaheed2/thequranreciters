<?php
	//get file name 
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);  
	$pageUrl = $_SERVER['REQUEST_URI'];  
	//get the current reciter
	if (strpos($pageUrl,'reciters/') !== false) {
		$current = $reciters["$basename"];  
	}
	else if (strpos($pageUrl,'reciters/mujawwad') !== false) {
		$current = $mujawwads["$basename"];  
	}
	else if(strpos($pageUrl,'english-lectures') !== false) {
		$current = $englishs["$basename"];  
	}
	else if(strpos($pageUrl,'urdu-lectures') !== false) {
		$current = $urdus["$basename"];  
	}
	else{
		$current = "home";  
	}
	 
	ksort($reciters);
	function getReciters(){
			global $reciters; 
			$test = "";
			$A = $B = 0;
			$letters = range('A', 'Z'); 
			$output = " ";
			$output = $output  . ' <br>'; 
			
			foreach($letters as $letter){
				$output = $output  . '<div class = "row alphabet-sort"    ><div class = "col col-md-1 col-xs-1 col-sm-1 letter"><h1>' . $letter . '</h1></div> <div class="col-md-11 col-xs-11 col-sm-11">'; 
				foreach($reciters as $reciter ){
						$id = $reciter["url"];
						$id = str_replace("/","",$id);
						$id = str_replace("-","",$id);
						$id = str_replace(".php","",$id);
						if( substr($reciter["name"],0,1) == $letter){ 
							$output = $output  .  '<div class="col-md-2 col-xs-6 col-sm-4 reciters-row">'; 
							$output = $output  .  '<a href="';
							$output = $output  .  $reciter["url"];    
							$output = $output  .  '">';
							$output = $output  .  '<img class="img-responsive img-thumbnail center-block" src="';
							$output = $output  .  $reciter["img"];  
							$output = $output  .  '"  alt="';
							$output = $output  .  $reciter["name"]; 
							$output = $output  .  '"></a><center> <p>';
							$output = $output  .  $reciter["name"];  
							$output = $output  .  '</p></center>';
							$output = $output  .  '</div>' ;   
							//$test = $test . '("' . $reciter["name"] .'","' . $reciter["url"] . '","' . $reciter["img"] . '"), ' ; 
						} 
				} 
				$output = $output  .  '</div></div>' ; 
			}
			
			$output = $output  . '<div class = "row regular-sort center-block"   >'; 
			foreach($reciters as $reciter ){
				$id = $reciter["url"];
				$id = str_replace("/","",$id);
				$id = str_replace("-","",$id);
				$id = str_replace(".php","",$id);
				$output = $output  .  '<div class="col-md-2 col-xs-6 col-sm-4 reciters-row ">'; 
				$output = $output  .  '<a href="';
				$output = $output  .  $reciter["url"];    
				$output = $output  .  '">';
				$output = $output  .  '<img class="img-responsive img-thumbnail center-block" src="';
				$output = $output  .  $reciter["img"];  
				$output = $output  .  '"  alt="';
				$output = $output  .  $reciter["name"]; 
				$output = $output  .  '"></a><center> <p>';
				$output = $output  .  $reciter["name"];  
				$output = $output  .  '</p></center>';
				$output = $output  .  '</div>' ;    
					 
			} 
			$output = $output  .  '</div>' ; 
			
			$output = $output  . '<div class = "row big-reciters center-block"   >'; 
			foreach($reciters as $reciter ){ 
				$id = $reciter["url"] . "lg";
				$id = str_replace("/","",$id);
				$id = str_replace("-","",$id);
				$id = str_replace(".php","",$id);
				$output = $output  .  '<div class="col-md-3 col-xs-12 col-sm-4 reciters-row">'; 
				$output = $output  .  '<a href="';
				$output = $output  .  $reciter["url"];    
				$output = $output  .  '">';
				$output = $output  .  '<img class="img-responsive img-thumbnail center-block" src="';
				$output = $output  .  $reciter["imgLg"];  
				$output = $output  .  '"  alt="';
				$output = $output  .  $reciter["name"]; 
				$output = $output  .  '"></a> <center> <p>';
				$output = $output  .  $reciter["name"];  
				$output = $output  .  '</p></center>';
				$output = $output  .  '</div>' ;    	 
			} 
			$output = $output  .  '</div>' ; 
			
			$output = $output  .  '<script>' ;   
			
			$output = $output  . "
				if (typeof $.cookie('sort') === 'undefined'){ 
					$.cookie('sort', '0', { expires: 30 }); 
					$('.alphabet-sort').hide(); 
				} 
				else { 
					var sort = $.cookie('sort'); 
					if(sort == '0'){ 
						$('.alphabet-sort').hide();  
					}
					else if(sort == '1'){ 
						$('.regular-sort').hide();  
					}
				}
				if (typeof $.cookie('size') === 'undefined'){ 
					$.cookie('size', '0', { expires: 30 }); 
					$('.big-reciters').hide();
				} 
				else { 
					var size = $.cookie('size'); 
					if(size == '0'){ 
						$('.big-reciters').hide();  
					}
					else if(size == '1'){ 
						$('.regular-sort').hide();  
					}
				}
				$(function() { 
					$('#test-fav').switchButton({
						labels_placement: 'right'
					});
				})
				
				
				";  
			
			$output = $output  . '$("#sort-alpha").click(function(){ 
						$(".regular-sort").hide(); 
						$(".alphabet-sort").show(); 
						$.cookie("sort", "1", { expires: 30 });  
				});';
			
			$output = $output  . '$("#sort-normal").click(function() { 
					$(".alphabet-sort").hide(); 
					$(".regular-sort").show(); 
					$.cookie("sort", "0", { expires: 30 }); 
				});';
			 
			$output = $output  . '$("#size-normal").click(function(){
					$(".regular-sort").show();
					$(".big-reciters").hide();
					$.cookie("size", "0", { expires: 30 });  
				});';
			$output = $output  . '$("#size-large").click(function(){
					$(".regular-sort").hide(); 
					$(".big-reciters").show();
					$.cookie("size", "1", { expires: 30 });  
				});';
		 
			$output = $output  . "</script>";
			
			//error_log(print_r($test, TRUE));
			return $output;
	}
	function getGallery($current){
			
			$galleryURLS = $current["galleryURLS"];
			$output = '<div  class="owl-carousel owl-theme">'; 
			$count = 1;
			foreach($galleryURLS as $galleryURL ){
					$output = $output  .  '<div class="reciter-gallery"><img class="owl-lazy" data-src="/reciters/images/gallery/' .  $galleryURL . $count . '.jpg" alt="' . $current["name"] .
					'" alt=""></div>';  
					$count++;
				 
			} 
			$output = $output  . '</div>';
			return $output;
	}
	function getMujawwad(){
			global $mujawwads; 
			$output = "<center><h1><strong>Mujawwad</strong> Reciters</h1>	</center>";
			$test = '';
			$output = $output  . '<div class = "row center-block"   >'; 
			foreach($mujawwads as $mujawwad ){
					$output = $output  .  '<div class="col-md-2 col-xs-6 col-sm-4 reciters-row">';
					$output = $output  .  '<a href="';
					$output = $output  .  $mujawwad["url"];    
					$output = $output  .  '">';
					$output = $output  .  '<img class="img-responsive img-thumbnail center-block" src="';
					$output = $output  .  $mujawwad["img"];  
					$output = $output  .  '"  alt="';
					$output = $output  .  $mujawwad["name"]; 
					$output = $output  .  '"></a><center> <p>';
					$output = $output  .  $mujawwad["name"];  
					$output = $output  .  '</p></center>';
					$output = $output  .  '</div>' ;  
					//$test = $test . '("' . $mujawwad["name"] .'","' . $mujawwad["url"] . '","' . $mujawwad["img"] . '"), ' ; 	
					
			} 
			$output = $output  . '</div>'; 
			//error_log(print_r($test, TRUE));
			return $output;
	}
	function getEnglish(){
			global $englishs; 
			$output = "<center><h1><strong>English</strong> Lectures</h1>	</center>	<br>";
			$test = '';
		    $output = $output  . '<div class = "row center-block"   >'; 
			foreach($englishs as $english ){
					$output = $output  .  '<div class="col-md-2 col-xs-6 col-sm-4 reciters-row">';
					$output = $output  .  '<a href="';
					$output = $output  .  $english["url"];    
					$output = $output  .  '">';
					$output = $output  .  '<img class="img-responsive img-thumbnail" src="';
					$output = $output  .  $english["img"];  
					$output = $output  .  '"  alt="';
					$output = $output  .  $english["name"]; 
					$output = $output  .  '"></a> <p>';
					$output = $output  .  $english["name"];  
					$output = $output  .  '</p>';
					$output = $output  .  '</div>' ;  
					//$test = $test . '("' . $english["name"] .'","' . $english["url"] . '","' . $english["img"] . '"), ' ; 	
					
			} 
			$output = $output  . '</div>'; 
			//error_log(print_r($test, TRUE));
			return $output;
	}
	function getUrdu(){
			global $urdus; 
			$output = "<center><h1><strong>Urdu</strong> Lectures</h1>	</center>	<br>";
			$test = '';
			$output = $output  . '<div class = "row center-block"   >'; 
			foreach($urdus as $urdu ){
					$output = $output  .  '<div class="col-md-2 col-xs-6 col-sm-4 reciters-row">';
					$output = $output  .  '<a href="';
					$output = $output  .  $urdu["url"];    
					$output = $output  .  '">';
					$output = $output  .  '<img class="img-responsive img-thumbnail" src="';
					$output = $output  .  $urdu["img"];  
					$output = $output  .  '"  alt="';
					$output = $output  .  $urdu["name"]; 
					$output = $output  .  '"></a> <p>';
					$output = $output  .  $urdu["name"];  
					$output = $output  .  '</p>';
					$output = $output  .  '</div>' ;  
					
					//$test = $test . '("' . $urdu["name"] .'","' . $urdu["url"] . '","' . $urdu["img"] . '"), ' ; 	
			} 
			$output = $output  . '</div>'; 
			//error_log(print_r($test, TRUE));
			return $output;
	}
	
	function reciterHeaderNew($current,$isLoggedIn){
		 
		$output = "";
		$output = $output  . '<div class="col-md-2 col-sm-3 col-xs-6" > ';
		$output = $output  . '<img class="img-responsive img-thumbnail" src="';
		$output = $output  .    $current["imgLg"];  
		$output = $output  . ' "  alt=" ';
		$output = $output  .   $current["name"];  
		$output = $output  . ' "/> ';
		$output = $output  . '</div>';
		$output = $output  . '<div class="col-md-10 col-sm-9 col-xs-6 overflow-hidden"> ';
		$output = $output  . '<h1><strong>';
		$output = $output  .   $current["fullName"];  
		$output = $output  . '</strong>  </h1>	';  
		$output = $output  . '</div>';
		$output = $output  . '<h1><strong>'; 
		$output = $output  .   $current["arabic"];  
		$output = $output  . '</strong>  </h1>';
		$output = $output  . "<span class='st_facebook_vcount' ";
		$output = $output  . " displayText='Facebook'></span> ";
		$output = $output  . "<span class='st_twitter_vcount' ";
		$output = $output  . " displayText='Tweet'></span> ";
		$output = $output  . "<span class='st_googleplus_vcount' ";
		$output = $output  . " displayText='Google +'></span> 	"; 
		if (!$isLoggedIn){ 
			// $output = $output  . '<div class="login-to-download" > Please ';
			// $result = $_SERVER['REQUEST_URI'];
			// $output = $output . '<a href="/login/index.php?location=';
			// $output = $output . $result; 
			// $output = $output . '"<a href="/login/"  class="btn btn-success" role="button">Login</a> to view individual download links next to surah name. <i class="glyphicon glyphicon-download-alt"></i></div>' ; 				
		}
		return $output; 
	}
	function reciterHeader($current){
		 
		$output = "";
		$output = $output  . '<div class="col-md-2 col-sm-3 col-xs-6" > ';
		$output = $output  . '<img class="img-responsive img-thumbnail" src="';
		$output = $output  .    $current["imgLg"];  
		$output = $output  . ' "  alt=" ';
		$output = $output  .   $current["name"];  
		$output = $output  . ' "/> ';
		$output = $output  . '</div>';
		$output = $output  . '<div class="col-md-10 col-sm-9 col-xs-6 overflow-hidden"> ';
		$output = $output  . '<h1><strong>';
		$output = $output  .   $current["fullName"];  
		$output = $output  . '</strong>  </h1>	';  
		$output = $output  . '</div>';
		$output = $output  . '<h1><strong>'; 
		$output = $output  .   $current["arabic"];  
		$output = $output  . '</strong>  </h1>';
		$output = $output  . "<span class='st_facebook_vcount' ";
		$output = $output  . " displayText='Facebook'></span> ";
		$output = $output  . "<span class='st_twitter_vcount' ";
		$output = $output  . " displayText='Tweet'></span> ";
		$output = $output  . "<span class='st_googleplus_vcount' ";
		$output = $output  . " displayText='Google +'></span> 	";  
		return $output; 
	}	
	function getTitle($current){  //get title of page
		if($current != "home"){
			$output = "";
			$output = $output  .   $current["fullName"];
			$output = $output  .   " - "; 
			$output = $output  .   $current["arabic"]; 		
			return $output;
		}
		else 
			return "home";
	}
	function getDescription($current){  //get description of page
		$output = "";
		$output = $output  .   $current["description"];  		
		return $output;
	}


	
	// set title and description

	if($current != "home"){  
		echo '<title>';  
		echo getTitle($current) .' - The Quran Reciters</title>';
		echo '<meta name="description" content="' . getDescription($current) . '">'; 
	} 
	else if ($pageTitle != ''){ 
		echo '<title>';  
		echo $pageTitle;
		echo '</title><meta name="description" content="An every growing list of the words most recognized and amazing reciters of the Quran with full Quran, mp3, video, and picture collection.">'; 
	} 
	else {  
		echo '<title>';  
		echo "Listen and download Qur'an recitations from reciters around the world "   . '- The Quran Reciters</title>';
		echo '<meta name="description" content="An every growing list of the words most recognized and amazing reciters of the Quran with full Quran, mp3, video, and picture collection.">'; 	
	} 
	
	 
	if (!empty($_SESSION['error'])) {
		 echo $_SESSION['error'];
		 unset($_SESSION['error']);
	}