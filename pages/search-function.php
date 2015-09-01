<?php
/*****************************
 *  Simple SQL Search Tutorial by Frost
 *  of Slunked.com
 ******************************/

$dbHost = 'localhost'; // localhost will be used in most cases
// set these to your mysql database userName and password.
$dbUser = 'ahqiplan'; 
$dbPass = 'F9bcyqlS!@';
$dbDatabase = 'ahqiplan_users'; // the database you put the table into.
$con = mysql_connect($dbHost, $dbUser, $dbPass) or trigger_error("Failed to connect to MySQL Server. Error: " . mysql_error());

mysql_select_db($dbDatabase) or trigger_error("Failed to connect to database {$dbDatabase}. Error: " . mysql_error());

// Set up our error check and result check array
$error = array();



$results = array();

// First check if a form was submitted. 
// Since this is a search we will use $_GET
if (isset($_GET['search'])) {
   $searchTerms = trim($_GET['search']);
   $searchTerms = strip_tags($searchTerms); // remove any html/javascript.
   
   if (strlen($searchTerms) < 3) {
      $error[] = "Search terms must be longer than 3 characters.";
   }else {
      $searchTermDB = mysql_real_escape_string($searchTerms); // prevent sql injection.
   }
   
   // If there are no errors, lets get the search going.
   if (count($error) < 1) {
      $searchSQL = "SELECT Name, URL, img, keywords FROM reciter_list WHERE ";
      
      // grab the search types.
      $types = array();
      $types[] = isset($_GET['Name'])?"`Name` LIKE '%{$searchTermDB}%'":'';
      $types[] = isset($_GET['URL'])?"`URL` LIKE '%{$searchTermDB}%'":'';
      $types[] = isset($_GET['img'])?"`img` LIKE '%{$searchTermDB}%'":'';
      $types[] = isset($_GET['keywords'])?"`keywords` LIKE '%{$searchTermDB}%'":'';
	  
      $types = array_filter($types, "removeEmpty"); // removes any item that was empty (not checked)
      
      if (count($types) < 1)
         $types[] = "`keywords` LIKE '%{$searchTermDB}%'"; // use the body as a default search if none are checked
      
          $andOr = isset($_GET['matchall'])?'AND':'OR';
      $searchSQL .= implode(" {$andOr} ", $types) . " ORDER BY `Name`"; // order by title.

      $searchResult = mysql_query($searchSQL) or trigger_error("There was an error.<br/>" . mysql_error() . "<br />SQL Was: {$searchSQL}");
      
      if (mysql_num_rows($searchResult) < 1) {
         $error[] = "The search term provided {$searchTerms} yielded no results.";
      }else {
	   
         $results = array(); // the result array 
		 $results[] = '<div class="container">';
		 $results[] = '<div class="row reciters-container">';
		 $results[] = '<center><h1 class="color-secondary"><strong>Search Results for " ';
		 $results[] =  $searchTerms; 
		 $results[] = ' "</strong></h1></center>'; 
         $i = 1;
         while ($row = mysql_fetch_assoc($searchResult)) {
				$results[] = '<div class="col-md-2 col-xs-6 col-sm-4 reciters-row">';
				$results[] =   '<a href="';
				$results[] =     $row['URL'];
				$results[] =  '">';
				$results[] =  '<img class="img-responsive img-thumbnail" src="';
				$results[] =  $row['img'];  
				$results[] =  '"  alt="';
				$results[] =  $row['Name']; 
				$results[] =  '"/></a> <p>';
				$results[] =  $row['Name'];  
				$results[] =  '</p>';
				$results[] =  '</div>' ;  		
            //$results[] = "{$i}: {$row['Name']}<br />{$row['URL']}<br />{$row['img']}<br /><br />";
            $i++;
         } 
		 $results[] = '</div>';
      }
   } 
}

function removeEmpty($var) {
   return (!empty($var)); 
}
?>