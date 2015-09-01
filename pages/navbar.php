<?php  
	$path = $_SERVER['DOCUMENT_ROOT']; 
	     
	define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/../Facebook/');
	require_once  ( __DIR__ . '/../Facebook/autoload.php' );	
 
	 
	include $path. '/pages/reciters.php'; 
	include $path. '/pages/mujawwad.php'; 
	include $path. '/pages/english-lectures.php'; 
	include $path. '/pages/urdu-lectures.php'; 
	
	$pageUrl = $_SERVER['REQUEST_URI'];
	 
	include $path . '/pages/reciter-functions.php'; 
	
	include $path . '/pages/search-function.php';
	
		
	$fb = new Facebook\Facebook ([
	  'app_id' => '399299573601013',
	  'app_secret' => '1af7b3b28744ef1aadb432adf5515c79',
	  'default_graph_version' => 'v2.4',
	]);

	$helper = $fb->getRedirectLoginHelper(); 
	$permissions = ['email']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('http://www.thequranreciters.com/Facebook/fb-callback', $permissions);

?>

	
 
</head>
<body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '399299573601013',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
 
<?php
   
  define("_VALID_PHP", true);
  require_once $path. "/login/init.php";
   
?>

<header class="flatMenu">
			<div class="container"> 
				<?php
				if ($user->logged_in) 
					 include $path. '/pages/more/header-buttons-loggedin.php'; 
				else  
					 include $path. '/pages/more/header-buttons.php'; 
				?>
			</div> 
			<div class="container">
				<div class="row"> 
					<div class="col-md-12 no-padding">
						<div class="flat-mega-menu">
							<div class="title " ><a href="#" class="<?php if ($user->logged_in)echo "user-login-true"; else echo "user-login-false";  ?>"><i class="fa fa-user "></i></a></div> 
							<div class="top-search">
								<a href="#"><i class="fa fa-search"></i></a>
							</div>
							<form  class ="search-body" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" Name="searchForm">
												<div class="form-group">
													<div class="input-group">
														<input type="text" Name="search" value="<?php echo isset($searchTerms)?htmlspecialchars($searchTerms):''; ?>" class="form-control"  placeholder="Type keyword here to search"/>
														<span class="input-group-btn-small">
															<button name="submit" class="btn btn-default no-radius" type="submit" >Search</button> 
														</span>
													</div><!-- /input-group -->
												</div>
												
							</form>
							<div class="user-body row" id="user-body-mobile">
								<?php 
									$row = $user->getUserData();  
									if ($user->logged_in){
										echo '<p class = "welcome"><i class="fa fa-user"></i> Welcome ' . $row->fname . ' ' . $row->lname .  '</p>';
										echo ' <a href="/login/account.php"  class="btn btn-primary btn-block" role="button">Profile</a>  <a href="/login/logout.php"  class="btn btn-danger btn-block" role="button">Sign Out</a> ';
										
									}
									else{
									 
										$result = $_SERVER['REQUEST_URI'];
										echo '<div class="col col-md-6 col-xs-4"><a href="/login/index.php?=';
										echo $result;
										echo '"  class="btn btn-success btn-block" role="button">Login</a></div><div class="col col-md-6 col-xs-4" ><a href="/login/register.php"  class="btn btn-default btn-block" style="color:black; " role="button">Sign Up</a></div>';
										 
									
									}

							
								?>
							</div>
							<ul>
								<li class="<?php 
									if($section == "home"){ echo "current-tab"; } ?>"    ><a href="/home.php"><i class="fa fa-home"></i>Home</a>
									 
								</li> 

								<li class="mega-menu <?php 
									if($section == "reciters"){ echo "current-tab"; } ?>"><a href=""><i class="fa fa-user"></i>Reciters</a>
									<ul class="mega-menu-body">
										<div class="col-lg-6 col-sm-6 no-padding">
											<li>
												<h3>Reciters</h3> 
												<ul class="category-title">
													<?php 
														$reciterTemp = $reciters;
														foreach($reciterTemp as $reciter ){  ?>   
															<div style="display:block;">
																<a href="<?php echo $reciter["url"]; ?>" class="category-list-reciters"><img src="<?php echo $reciter["img"]; ?>" class=""  alt="<?php echo $reciter["name"]; ?> " />  <?php echo $reciter["name"]; ?>  
																</a>
															</div> 
													<?php } ?>  
												</ul>
											</li>
										</div> 
										<div class="col-lg-6 col-sm-6 no-padding">
											<li>
												<h3>Mujawwad Reciters</h3>
												<ul class="category-title">
													<?php 
														$mujawwadsTemp = $mujawwads;
														foreach($mujawwadsTemp as $mujawwad ){  ?>  
															<div style="display:block;">
																	<a href="<?php echo $mujawwad["url"]; ?>" class="category-list-reciters"><img src="<?php echo $mujawwad["img"]; ?>" class="hidden-sm hidden-xs"  alt="<?php echo $mujawwad["name"]; ?> " />  <?php echo $mujawwad["name"]; ?>  
																	</a>
															</div>
															   
													<?php } ?>   
												</ul>
											</li>
										</div>  
										<div class="col-lg-6 col-sm-6 no-padding">
											<li>
												<h3>English Lectures</h3>
												<ul class="category-title">
													<?php 
														$englishsTemp = $englishs;
														foreach($englishsTemp as $english ){  ?>   
															<div style="display:block;">
																	<a href="<?php echo $english["url"]; ?>" class="category-list-reciters"><img src="<?php echo $english["img"]; ?>" class="hidden-sm hidden-xs"  alt="<?php echo $english["name"]; ?> " />  <?php echo $english["name"]; ?>  
																	</a>
															</div>  
															   
													<?php } ?>   
												</ul>
											</li>
										</div> 
										<div class="col-lg-6 col-sm-6 no-padding">
											<li>
												<h3>Urdu Lectures</h3>
												<ul class="category-title">
													<?php 
														$urdusTemp = $urdus;
														foreach($urdusTemp as $urdu ){  ?>    
															<div style="display:block;">
																	<a href="<?php echo $urdu["url"]; ?>" class="category-list-reciters"><img src="<?php echo $urdu["img"]; ?>" class="hidden-sm hidden-xs"  alt="<?php echo $urdu["name"]; ?> " />  <?php echo $urdu["name"]; ?>  
																	</a>
															</div> 
															   
													<?php } ?>
												</ul>
											</li>
										</div>
									</ul>
									   
								</li>
								<li class="<?php 
									if($section == "links"){ echo "current-tab"; } ?>" ><a href="#"><i class="fa fa-link"></i>Links</a>
									<ul class="single-nav"> 
									 
											 <a href="http://ahqiplano.org" target="_blank" class ="category-list-link" > Abdul Haleem Q.I. </a>
										 
										 
											 <a href="http://mdayyoub.com/"  target="_blank"class ="category-list-link" > M Ayyub Official </a>
										 
										 
											 <a href="http://alqasimproductions.com/" target="_blank" class ="category-list-link" > Al Qasim Produc. </a>
										 
										 
											 <a href="http://www.islamicity.com/quransearch/ " target="_blank" class ="category-list-link" > Quran Search </a>
											 <a href="/pages/top-five-reciters.php" target="_blank" class ="category-list-link" > Top Five Reciters </a>
											 
											 
											
										 
									</ul>
								</li>
								<li class="<?php 
									if($section == "download"){ echo "current-tab"; } ?>" ><a href="/pages/full-downloads.php"><i class="fa fa-download"></i>Download</a>
									 
								</li>
								<li><a href="#"><i class="fa fa-phone"></i>Contact Us</a>
									<ul class="single-nav"> 
										<li><a href="/pages/contact.php"><i class="fa fa-envelope align-left"> Contact</i></a></li>
										<li><a href="/pages/submission.php"><i class="fa fa-arrow-circle-down align-left"> Submit Reciter</i> </a></li>  
									</ul> 
								</li> 
								<li id="search" class="mega-menu"><a href="#"><i class="fa fa-search"></i></a>
									<ul class="mega-menu-body">
										<li>
										
											<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" Name="searchForm">
												<div class="form-group">
													<div class="input-group">
														<input type="text" Name="search" value="<?php echo isset($searchTerms)?htmlspecialchars($searchTerms):''; ?>" class="form-control"  placeholder="Type keyword here to search"/>
														<span class="input-group-btn">
															<button name="submit" class="btn btn-default no-radius" type="submit" >Search</button> 
														</span>
													</div><!-- /input-group -->
												</div>
												
											</form>
											 
												
										</li>
									</ul>
								</li> 
								
								<li  id = "user-login-li" class="user-login <?php 
									 if($section == "login"){ echo "current-tab"; } if ($user->logged_in)echo "user-login-true"; else echo "user-login-false";  ?>"><a href="#"><i class="fa fa-user"></i></a>
									<ul id="user-form">
										<li>
											<footer id = "user-form-footer">
											<?php 
												 
												$row = $user->getUserData();  
												if ($user->logged_in){
													echo '<p class = "welcome"><i class="fa fa-user"></i> Welcome ' . $row->fname . ' ' . $row->lname .  '</p>';
													echo '<div class="row"><div class="col col-md-6"><a href="/login/account.php"  class="btn btn-primary" role="button">Profile</a> </div> <div class="col col-md-6"><a href="/login/logout.php"  class="btn btn-danger  " role="button">Sign Out</a></div></div>'; 
												}
												else{
												 
													$result = $_SERVER['REQUEST_URI'];
													echo '<a href="/login/index.php?=';
													echo $result;
													echo '"  class="btn btn-success btn-block" role="button">Login</a>';
												    //echo '<a href="' . $loginUrl . '" class="btn btn-facebook btn-block" role="button">Log in with Facebook!</a>';
													echo '<a href="/login/register.php"  class="btn btn-primary btn-block" role="button">Register</a>'; 
												}
												//$version = phpversion();
												//echo $version;												
											?>
											 
											 
											
											</footer>
										 
										</li>
									</ul>
								</li>
							</ul>
						</div> 	
					</div>
				</div>
			</div>
</header> 
<?php echo (count($error) > 0)?'<div class="container"> <div class="row reciters-container"><center><h1 class="color-secondary"><strong>Error</strong></h1></center>' . implode(''	, $error) . "</div>":""; ?>
 <?php echo (count($results) > 0)?"" . implode("", $results):""; ?>	
 
 
 <?php include $path . '/pages/more/users-online.php'; ?>
 
 
 

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

 