<?php 
	$dbHost = 'localhost'; // localhost will be used in most cases
	// set these to your mysql database userName and password.
	$dbUser = 'ahqiplan'; 
	$dbPass = 'F9bcyqlS!@';
	$dbDatabase = 'ahqiplan_users'; // the database you put the table into.
	$con = mysql_connect($dbHost, $dbUser, $dbPass) or trigger_error("Failed to connect to MySQL Server. Error: " . mysql_error());

	mysql_select_db($dbDatabase) or trigger_error("Failed to connect to database {$dbDatabase}. Error: " . mysql_error());

	// Set up our error check and result check array
	$error = array();
	
	$pageId = str_replace('.php', '', $pageId);
	
	$results = array();
	$sql = "SELECT * FROM `comments` WHERE pageId = '$pageId' ORDER BY createdAt ASC"; 
	$searchResult = mysql_query($sql) or trigger_error("There was an error." . mysql_error() . "SQL Was: {$sql}");
	
			
	if (mysql_num_rows($searchResult) < 1) {
		 echo '<div class="container"><div class="row reciters-container"><p>Be the first to comment<p>';    
		  
		 echo '</div></div>'; 
	 
	}
	else { 
		 echo '<div class="container"><div class="row reciters-container">';    
		 while ($row = mysql_fetch_assoc($searchResult)) {
			echo '<div id = "comment-div-single" class = "panel panel-default">';    
			echo '<div class="col-md-3"><i class="glyphicon glyphicon-user"></i> '; 
			echo  $row['personName']; 
			echo '<br>';				
			echo  $row['createdAt'];
			echo '</div><div class="col-md-8">'; 
			echo  $row['personMessage'];  
			echo  '</div></div>' ;   
		 } 
		 echo '</div></div>'; 
	}  
?>