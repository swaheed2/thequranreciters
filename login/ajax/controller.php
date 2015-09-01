<?php
  /**
   * Controller
   *
   * @package Advanced Login System
   * @author wojoscripts.com
   * @copyright 2010
   * @version $Id: controller.php, v2.00 2011-07-10 10:12:05 gewa Exp $
   */
  define("_VALID_PHP", true);
  require_once("../init.php");

  if (!$user->logged_in)
      redirect_to("../index.php");
?>
<?php
  /* Proccess User */
  if (isset($_POST['processUser']))
      : if (intval($_POST['processUser']) == 0 || empty($_POST['processUser']))
      : redirect_to("../account.php");
  endif;
  $user->updateProfile();
  endif;
?>