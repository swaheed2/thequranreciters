<?php 
	$pageTitle = 'تحميل تلاوات القرآن الكريم و الاستماع اليها من القراء حول العالم';
	$siteName = "القراء";
	$section = 'arabic';
	$path = $_SERVER['DOCUMENT_ROOT'];
	include $path . '/pages/header.php';
	include $path . '/ar/pages/navbar-ar.php';    
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
				echo getMujawwadAr();
		 ?> 
		 
	</div>
	<div class="row reciters-container"> 
		 <?php  
				echo getEnglishAr();
		 ?> 
	</div>
	<div class="row reciters-container"> 
		 <?php  
				echo getUrduAr();
		 ?> 
	</div> 
	
</div>

<?php include $path . '/pages/footer.php'; ?>
				  		
		

