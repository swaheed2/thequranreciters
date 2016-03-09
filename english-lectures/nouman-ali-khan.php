<?php  
	$path = $_SERVER['DOCUMENT_ROOT'];
	$section = "reciters"; 
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); 
	$current = $englishs["$basename"]; 
	
 
 
	    
?>  
<div class="container">
			<div class="row reciter-container">
				<?php  
					echo reciterHeader($current); 
				?>  
				
			</div> 
			<div class="row reciter-container">	
					<div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Tafseer</strong>  </h1>
					</div> 
					<iframe src="https://archive.org/embed/078NabaA&playlist=1" width="100%" height="480px" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe> 
		    </div>   	  
		    <div class="row reciter-container" id="youtube-videos">	
				<script>
					var videosURL = ["G_Q5mJ6-QPY","qWIfouH984U","a6INwEt_jb8","W-vDB94Axwg","xZ8LLOrHvFA","mX1oRcMbLzA","Njuq145ESzk","HWZf3NE4KXw","T-kQ9EnDKog","-KUnZ7AZA8Q","G_AVYLNJj70","rPh3qIPnx2w","jz9TMFdDSKM","HksWRnYK8no","tV4LiyUwSbg","3s6ad9g0jak","kvtsJ9QEyGQ","SzP8e9b_OT8","UpZH1lQmuE4","U5h19uUTZTw","P1_OAQDcQXs","cKEASyiSHaY","xB-LzuEsejA","IyYoPuifGaw","0boorFw4eT0","Oc3nhOD5los","YLQC3TFcYDA","PEhHbNlF5x4","0vRY_frjdfU" ,"vQPQkBHIN3Q","aRHxyQPJQuw","FemDGxSwVcM","pyLgggDFVg0","FHb5QKQcC2s","XIs-MBPbVeE","F11vfkUHjTE","JBmbKTU98TA","j6KDYg15XUI","zLT23owWZh8","V4tyf0WrlZM","EhxDCZ5orpw","dpPTTWITd9s","GAx8lm6RlcA","yJGTabeZlaY","3OzQFz3Kwnc","ptvWCd3tIMQ","DYyfPIXeJyQ","pFAnMQf8ZUw","7SPivf0ZQzg","HBMg1D3IEa4"];
				</script>	 
				<?php  include $path . '/pages/videos.php';     ?>   
		    </div>  
			
			<?php  include $path . '/pages/gallery.php';     ?> 
			 	
		    
			<div class="row reciter-container">		
				<?php  include $path . '/player/player_code.php';     ?> 
				<div id="playlist_list">
					<!-- local playlist -->
					<ul id='clear'></ul>
					<ul id='playlist1'>
						 
					</ul>
				</div> 	    
		    </div>			
			<div class="row reciter-container">
			    <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Biography | سيرة</strong>  </h1>
				</div>
				<div id="reciter-bio">
					<p>Nouman Ali Khan (Urdu: نعمان علی خان‎) is an American Muslim speaker and founder, CEO and lead instructor at The Bayyinah Institute for Arabic and Qur'anic Studies. 

					Nouman founded Bayyinah in 2006, after serving as a professor of Arabic at Nassau Community College.[2][3] His current residence is in Dallas, Texas. He also lectures internationally on the matters of Tafsir and learning Arabic to understand the Quran. 
					</p>
				</div>  	
			</div>
			
</div>			



<?php  include $path . '/pages/footer.php'; ?>
