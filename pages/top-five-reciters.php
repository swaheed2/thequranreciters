<?php  
	$pageTitle = 'Top Five Reciters from Saudi Arabia';
	$section = 'home';
	$path = $_SERVER['DOCUMENT_ROOT'];
	include $path . '/pages/header.php';
	
	include $path . '/pages/navbar.php';  	
?>

<div class="container">
	<div class="row reciters-container reciters-container-main ">
		<div class = "top-ad"> 
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- The Quran Reciters one line text -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:468px;height:15px"
					 data-ad-client="ca-pub-9126659759556489"
					 data-ad-slot="3303083995"></ins>
			<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		
		</div>
		<ol class="breadcrumb language">
				  <li <?php if ($section == 'home') {echo 'class="active"';} ?> ><a href="/home">En</a></li>
				  <li <?php if ($section == 'arabic') { echo 'class="active"';} ?> ><a href="/ar/home">Ar</a></li> 
		</ol>
		<div
			  class="fb-like"
			  data-share="true"
			  data-width="450"
			  layout = "button_count"
			  href = "https://www.facebook.com/theQuranReciters"
			  data-show-faces="false">
			  
			  
		</div>	
		<br><br>
		<h2 class = "color-secondary-light center-block"> The Quran Reciters </h2>  
		<h1 class = "center-block"> Top Five Reciters from Saudi Arabia</h1> <br>
		<p> The best Quran reciters from Saudi Arabic in our opinion. Notice we didn't say 'most famous'. What do you think?</p> 
		<center>

		</center>
		
		<div class = "row" > 
			<div class = "col col-md-3">
				<a href = "/reciters/muhammad-ayyub.php"><img src = "/reciters/images/lg/muhammad-ayyub-lg.jpg" width = "100%" height = "100%" alt = "Muhammad Ayyub"></a> 
			</div>
			<div class = "col col-md-8">
				<h3>Sheikh Muhammad Ayyub Bin Muhammad Yusuf </h3>
				
			</div>
		</div>
		<hr>
		<div class = "row" > 
			<div class = "col col-md-3">
				<a href = "/reciters/bandar-baleela.php"><img src = "/reciters/images/gallery/bb1.jpg" width = "100%" height = "100%" alt = "bandar-baleela"></a> 
			</div>
			<div class = "col col-md-8">
				<h3>Sheikh Bandar Bin 'Abdul Azeez Baleela</h3>
				
			</div>
		</div>
		<hr>
		<div class = "row" > 
			<div class = "col col-md-3">
				<a href = "/reciters/muhammad-khaleel-al-qari.php"><img src = "/reciters/images/lg/muhammad-khaleel-al-qari-lg.jpg" 
				width = "100%" height = "100%" alt = "Muhammad Khaleel"></a> 
			</div>
			<div class = "col col-md-8">
				<h3>Sheikh Muhammad Khaleel Al-Qari</h3>
				
			</div>
		</div>
		<hr>
		<div class = "row" > 
			<div class = "col col-md-3">
				<a href = "/reciters/ahmad-al-hudhaify.php"><img src = "/reciters/images/lg/ahmad-al-hudhaify-lg.jpg" 
				width = "100%" height = "100%" alt = "ahmad-al-hudhaify"></a> 
			</div>
			<div class = "col col-md-8">
				<h3>Sheikh Ahmad-Al-Hudhaify</h3>
				
			</div>
		</div> 
		<hr>
		<div class = "row" > 
			<div class = "col col-md-3">
				<a href = "/reciters/alaa-al-mizjaaji.php"><img src = "/reciters/images/lg/alaa-al-mizjaaji-lg.jpg" 
				width = "100%" height = "100%" alt = "alaa-al-mizjaaji"></a> 
			</div>
			<div class = "col col-md-8">
				<h3>Sheikh Alaa Al Mizjaaji</h3>
				
			</div>
		</div>
		
	</div>
	
	<div class="row reciters-container">
		 
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
		 
	</div>
	 
	
</div>

<?php include $path . '/pages/footer.php'; ?>
				  		
		

