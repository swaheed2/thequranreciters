<?php  
	$pageTitle = 'Listen and Download Qur\'an Recitations from Reciters Around the World';
	$siteName = "The Quran Reciters";
	$section = 'home';
	$path = $_SERVER['DOCUMENT_ROOT'];
	include $path . '/pages/header.php';
	
	include $path . '/pages/navbar.php';  	
?> 
<div class="container"> 
	<div class="row reciters-container reciters-container-main">   
		 <?php   
				include $path . '/pages/navbar-mini.php';
				echo getReciters();
				
				include $path . '/pages/more/adsense-ad.php';   
		 ?>   	 
	</div>
	
	<div class="row reciters-container">
		 <?php  
				echo getMujawwad();
		 ?> 
		 
	</div>
	<div class="row reciters-container"> 
		 <?php  
				echo getEnglish();
		 ?> 
	</div>
	<div class="row reciters-container"> 
		 <?php  
				echo getUrdu();
		 ?> 
	</div> 
	
</div>

<?php include $path . '/pages/footer.php'; ?>
				  		
		

