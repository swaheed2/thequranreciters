<?php  
	$path = $_SERVER['DOCUMENT_ROOT']; 
	include $path. '/pages/reciters.php'; 
	include $path. '/pages/mujawwad.php'; 
	include $path. '/pages/english-lectures.php'; 
	include $path. '/pages/urdu-lectures.php'; 
	
	
	$pageUrl = $_SERVER['REQUEST_URI'];
	 
	include $path . '/ar/pages/reciter-functions-ar.php'; 
	
	include $path . '/pages/search-function.php';
	 
?>

 
 
</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
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
									if($section == "home"){ echo "current-tab"; } ?>"    ><a href="/ar/home.php"><i class="fa fa-home"></i> الرئيسية</a> 
								</li> 

								<li class="mega-menu <?php 
									if($section == "reciters"){ echo "current-tab"; } ?>"><a href=""><i class="fa fa-user"></i>القراء</a>
									<ul class="mega-menu-body">
										<div class="col-lg-6 col-sm-6 no-padding">
											<li>
												<h3>القراء</h3> 
												<ul class="category-title">
													<?php 
														$reciterTemp = $reciters;
														foreach($reciterTemp as $reciter ){  ?>   
															<div style="display:block;">
																<a href="<?php echo $reciter["url"]; ?>" class="category-list-reciters"><img src="<?php echo $reciter["img"]; ?>" class=""  alt="<?php echo $reciter["arabic"]; ?> " />  <?php echo $reciter["arabic"]; ?>  
																</a>
															</div> 
													<?php } ?>  
												</ul>
											</li>
										</div> 
										<div class="col-lg-6 col-sm-6 no-padding">
											<li>
												<h3>القراء مجود  </h3>
												<ul class="category-title">
													<?php 
														$mujawwadsTemp = $mujawwads;
														foreach($mujawwadsTemp as $mujawwad ){  ?>  
															<div style="display:block;">
																	<a href="<?php echo $mujawwad["url"]; ?>" class="category-list-reciters"><img src="<?php echo $mujawwad["img"]; ?>" class="hidden-sm hidden-xs"  alt="<?php echo $mujawwad["arabic"]; ?> " />  <?php echo $mujawwad["arabic"]; ?>  
																	</a>
															</div>
															   
													<?php } ?>   
												</ul>
											</li>
										</div>  
										<div class="col-lg-6 col-sm-6 no-padding">
											<li>
												<h3>محاضرات الانجليزية</h3>
												<ul class="category-title">
													<?php 
														$englishsTemp = $englishs;
														foreach($englishsTemp as $english ){  ?>   
															<div style="display:block;">
																	<a href="<?php echo $english["url"]; ?>" class="category-list-reciters"><img src="<?php echo $english["img"]; ?>" class="hidden-sm hidden-xs"  alt="<?php echo $english["arabic"]; ?> " />  <?php echo $english["arabic"]; ?>  
																	</a>
															</div>  
															   
													<?php } ?>   
												</ul>
											</li>
										</div> 
										<div class="col-lg-6 col-sm-6 no-padding">
											<li>
												<h3>الأردية محاضرات</h3>
												<ul class="category-title">
													<?php 
														$urdusTemp = $urdus;
														foreach($urdusTemp as $urdu ){  ?>    
															<div style="display:block;">
																	<a href="<?php echo $urdu["url"]; ?>" class="category-list-reciters"><img src="<?php echo $urdu["img"]; ?>" class="hidden-sm hidden-xs"  alt="<?php echo $urdu["arabic"]; ?> " />  <?php echo $urdu["arabic"]; ?>  
																	</a>
															</div> 
															   
													<?php } ?>
												</ul>
											</li>
										</div>
									</ul>
									   
								</li>
								<li class="<?php 
									if($section == "links"){ echo "current-tab"; } ?>" ><a href="#"><i class="fa fa-link"></i>الروابط</a>
									<ul class="single-nav"> 
										 
											 <a href="http://ahqiplano.org" class ="category-list-link" > Abdul Haleem Q.I. </a>
										 
										 
											 <a href="http://mdayyoub.com/" class ="category-list-link" > M Ayyub Official </a>
										 
										 
											 <a href="http://alqasimproductions.com/" class ="category-list-link" > Al Qasim Produc. </a>
										 
										 
											 <a href="http://www.islamicity.com/quransearch/" class ="category-list-link" > Quran Search </a>
										 
									</ul>
								</li>
								<li class="<?php 
									if($section == "download"){ echo "current-tab"; } ?>" ><a href="/pages/full-downloads.php"><i class="fa fa-download"></i>تحميل</a>
									 
								</li>
								<li><a href="#"><i class="fa fa-phone"></i>إتصل بنا</a>
									<ul class="single-nav"> 
										<li><a href="/pages/contact.php"><i class="fa fa-envelope align-left"> اتصال</i></a></li>
										<li><a href="/pages/submission.php"><i class="fa fa-arrow-circle-down align-left"> سبمة القراء</i> </a></li>  
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
															<button name="submit" class="btn btn-default no-radius" type="submit" >بحث</button> 
														</span>
													</div><!-- /input-group -->
												</div>
												
											</form>
											 
												
										</li>
									</ul>
								</li> 
								<li  class="user-login <?php 
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
													echo '"  class="btn btn-success btn-block" role="button">Login</a><a href="/login/register.php"  class="btn btn-primary btn-block" role="button">Register</a><a href="/login/password-reset.php"  class="btn btn-danger btn-block" role="button">Password Reset</a>'; 
												} 
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