<?php 
	define('FullDownloads', TRUE);
	$pageTitle = 'Listen and Download Qur\'an Recitations from Reciters Around the World';
	$section = 'download';
	$path = $_SERVER['DOCUMENT_ROOT'];
	include $path . '/pages/header.php';
	include $path . '/pages/navbar.php';  
	$result = $_SERVER['REQUEST_URI'];	
 ?> 
            
 <?php
	define("_VALID_PHP", true);
	require_once($path . "/login/init.php");
  
	if ($user->logged_in){ 
		include $path . '/pages/more/full-downloads-content.php';
	}
	else{
		echo '<div class="container"> ';
			echo '<div class="row reciter-container">';
					echo '<p> Please Login First </p> ';
					echo '<a href="/login/?location=';
					echo $result;
					echo '"  class="btn btn-success" role="button">Login</a>';
			echo '</div> ';
		echo '</div>';
	}
?> 
 


 

<?php include $path . '/pages/footer.php'; ?>