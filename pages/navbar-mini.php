<div class="navbar navbar-default "> 
			<div class="navbar-header pull-left"> 
			   <a class="navbar-brand" href="#"> <img alt="logo" src="/img/logo/logo.png"> </a>
			</div>  
			<div class="navbar-header pull-left navbar-brand-name">
				<a href="/home" class=""><?php echo $siteName; ?></a> 
			</div> 	
			<div class="navbar-header pull-left dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sort <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#" id="sort-normal">Normal</a></li>
					<li><a href="#" id="sort-alpha" >A-Z</a></li>   
				</ul>
			</div>
			<div class="navbar-header pull-left dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Size <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#" id="size-normal">Normal</a></li>
				<li><a href="#" id="size-large" >Large</a></li>   
			  </ul>
			</div>
			<div class="navbar-header pull-left hidden-xs"> 
				<div
						  class="fb-like"
						  data-share="true"
						  data-width="450"
						  layout = "button_count"
						  href = "https://www.facebook.com/theQuranReciters"
						  data-show-faces="false">
				</div>
			</div>
			<div class="navbar-header pull-right">
				<ol class="breadcrumb language">
				  <li <?php  if ($section == 'home') {echo 'class="active"';} ?> ><a href="/home">En</a></li>
				  <li <?php  if ($section == 'arabic') { echo 'class="active"';} ?> ><a href="/ar/home">Ar</a></li> 
				</ol>
			</div>
</div> 