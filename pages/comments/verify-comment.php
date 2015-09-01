<?php 
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment']) && isset($_POST['g-recaptcha-response'])){ 
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

			// define variables and set to empty values
			$nameErr = $emailErr = $txtUrl = "";
			$captcha;
			$name = $email =   $comment =  "";
			$pageId = $_POST["pageId"];
			$pageId = str_replace(' ', '', $pageId);
			$pageId = str_replace('.php', '', $pageId);
			$pageId = str_replace('#comment-form', '', $pageId);
			$date = date('m/d/Y h:i:s a', time());

			if (empty($_POST["name"])) {
			 $nameErr = "Name is required";
			} else {
			 $name = test_input($_POST["name"]);
			 // check if name only contains letters and whitespace
			 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			   $nameErr = "Only letters and white space allowed"; 
			 }
			}

			if (empty($_POST["email"])) {
			 $emailErr = "Email is required";
			} else {
			 $email = test_input($_POST["email"]);
			 // check if e-mail address is well-formed
			 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			   $emailErr = "Invalid email format"; 
			 }
			}

			
			if (empty($_POST["comment"])) {
			 $comment = "";
			} else {
			 $comment = test_input($_POST["comment"]);
			}
			
			
			
			
			if(isset($_POST['g-recaptcha-response'])){
			  $captcha=$_POST['g-recaptcha-response'];
			  
				if(!$captcha){
				  echo '<h2>Please check the the captcha form.</h2>';
				  exit;
				}
				// add your google capcha secret here after ?secret=
				$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdAPgsTAAAAAP6LX8raHsrT16oPARsM4ydycKxw&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
				if($response.success==false)
				{
				  echo 'spam';
				}else
				{
				  echo '';
				}
				
				$txtUrl =   $_POST["txtUrl"];
				header('Location:' . $txtUrl . '#comment-form');
			}
			$comment = mysql_real_escape_string($comment);
			$name = mysql_real_escape_string($name);
			$email = mysql_real_escape_string($email);
			
			$sql = "INSERT INTO comments (pageId, personName, personEmail, personMessage, createdAt)
			VALUES ('$pageId', '$name', '$email', '$comment','$date')";

			
			$insert = mysql_query($sql) or trigger_error("There was an error." . mysql_error() . "SQL Was: {$sql}");
			
			
			exit; 	
			
	}
	
	 
	function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	} 	
			
?>