<?php

	$to = $_POST['mail'];
	$subject = 'Your download link - The Quran Reciters';
	$name = $_POST['name'];
	$path = str_replace(' ', '%20', $_POST['path']);
	$path = str_replace('http://thequranreciters.com/reciters/%20', '', $path);
	 
	$message = 'Download link for the requested surah named "'. $name .'" has been generated: '. $path;
	$header = "From: admin@thequranreciters.com\r\n"; 
	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
	$header.= "X-Priority: 1\r\n"; 
	
	if(!mail($to, $subject, $message, $header)){
		die('Error sending email!');
	}else{
		die('Email sent!');
	}
?>