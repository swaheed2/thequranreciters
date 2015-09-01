<?php
  /**
   * Index
   *
   * @package Advanced Login System
   * @author wojoscripts.com
   * @copyright 2010
   * @version $Id: index.php, v2.00 2011-07-10 10:12:05 gewa Exp $
   */
  $path = $_SERVER['DOCUMENT_ROOT'];
  define("_VALID_PHP", true);
  require_once("init.php");
  
 
	$returnPath = $_SERVER['REQUEST_URI'];
	$orgReturnPath = $_SERVER['REQUEST_URI']; 
	$returnPathLength = strlen($returnPath); 
	$pos = strpos($returnPath, '='); 
	$returnPath = substr($returnPath,$pos+1,$returnPathLength); 
	
	if ($user->logged_in){
		if (strpos($orgReturnPath,'=') !== false) {
			$returnPath = 'http://thequranreciters.com' . $returnPath;
			redirect_to($returnPath); 
		}
		else{
			redirect_to("http://thequranreciters.com/home");
		} 
	}
	  
	  
  if (isset($_POST['doLogin']))
      : $result = $user->login($_POST['username'], $_POST['password']);
  
  /* Login Successful */
	if ($result){  
		if (strpos($orgReturnPath,'=') !== false) {
			$returnPath = 'http://thequranreciters.com' . $returnPath;
			redirect_to($returnPath); 
		}
		else{
			redirect_to("http://thequranreciters.com/home");
		}  
	}
  
  endif;
?>
<?php  
	$path = $_SERVER['DOCUMENT_ROOT']; 
	$section = 'login'; 
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);  
	    
?> 
<?php include("header.php");?>
<div id="msgholder2"><?php print Filter::$showMsg;?></div>
<form method="post" id="login_form" name="login_form" class="xform">
  <header>User Login</header>
  <section>
    <div class="row">
      <div class="col col-3">
        <label>Username</label>
      </div>
      <div class="col col-9">
        <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
          <input  type="text" name="username" placeholder="Username">
        </label>
      </div>
    </div>
  </section>
  <section>
    <div class="row">
      <div class="col col-3">
        <label>Password</label>
      </div>
      <div class="col col-9">
        <label class="input"> <i class="icon-prepend icon-lock"></i> <i class="icon-append icon-asterisk"></i>
          <input type="password"  name="password" placeholder="**********">
        </label>
      </div>
    </div>
  </section>
  <footer>
    <div class="row">
      <div class="col col-4">
        <button id="do-passreset" type="button" class="button button-red doleft">Password Reset</button>
      </div>
      <div class="col col-8">
        <button type="submit" name="dosubmit" class="button">Login Now!<span><i class="icon-ok"></i></span></button>
        <?php if($core->reg_allowed):?>
        <a href="register.php" class="button button-secondary">Register Account</a>
        <?php endif;?>
      </div>
    </div>
  </footer>
  <input name="doLogin" type="hidden" value="1" />
</form>
<div id="show-passreset" style="display:none">
  <p class="pagetip"><i class="icon-lightbulb icon-3x pull-left"></i> Enter your username and email address below to reset your password. A verification token will be sent to your email address.<br />
    Once you have received the token, you will be able to choose a new password for your account</p>
  <form class="xform" id="admin_form" method="post">
    <header> Lost Password</header>
    <section>
      <div class="row">
        <div class="col col-3">
          <label>Username</label>
        </div>
        <div class="col col-9">
          <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
            <input  type="text" name="uname" placeholder="Username">
          </label>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col col-3">
          <label>Email Address</label>
        </div>
        <div class="col col-9">
          <label class="input"> <i class="icon-prepend icon-envelope-alt"></i> <i class="icon-append icon-asterisk"></i>
            <input  type="text" name="email" placeholder="Email Address">
          </label>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col col-3">
          <label>Captcha Code</label>
        </div>
        <div class="col col-9">
          <label class="input"> <img src="lib/captcha.php" alt="" class="captcha-append" /> <i class="icon-prepend icon-eye-open"></i>
            <input type="text" name="captcha" placeholder="Captcha Code">
          </label>
        </div>
      </div>
    </section>
    <footer>
      <button class="button" name="dosubmit" type="submit">Submit Request</button>
    </footer>
  </form>
</div>
<?php echo Core::doForm("passReset","ajax/user.php");?>
<?php include("footer.php");?>