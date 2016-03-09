<?php
  /**
   * Core Class
   *
   * @package Advanced Login System
   * @author wojoscripts.com
   * @copyright 2010
   * @version $Id: class_core.php, v2.00 2011-07-10 10:12:05 gewa Exp $
   */
  
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
  
  class Core
  {
      
	  const sTable = "settings";
	  const nTable = "news";
	  const eTable = "email_templates";
      public $year = null;
      public $month = null;
      public $day = null;
	  private static $db;
	  
	  
      /**
       * Core::__construct()
       * 
       * @return
       */
      function __construct()
      {
		  self::$db = Registry::get("Database");
		  $this->getSettings();
		  
          $this->year = (get('year')) ? get('year') : strftime('%Y');
          $this->month = (get('month')) ? get('month') : strftime('%m');
          $this->day = (get('day')) ? get('day') : strftime('%d');
          
          return mktime(0, 0, 0, $this->month, $this->day, $this->year);
      }
	        
      /**
       * Core::getSettings()
       *
       * @return
       */
      private function getSettings()
      {

          $sql = "SELECT * FROM " . self::sTable;
          $row = self::$db->first($sql);
          
          $this->site_name = $row->site_name;
          $this->site_url = $row->site_url;
		  $this->site_email = $row->site_email;
		  $this->perpage = $row->user_perpage;
		  $this->logo = $row->logo;
		  $this->backup = $row->backup;
		  $this->thumb_w = $row->thumb_w;
		  $this->thumb_h = $row->thumb_h;
		  $this->reg_allowed = $row->reg_allowed;
		  $this->user_limit = $row->user_limit;
		  $this->reg_verify = $row->reg_verify;
		  $this->notify_admin = $row->notify_admin;
		  $this->auto_verify = $row->auto_verify;
          $this->mailer = $row->mailer;
          $this->smtp_host = $row->smtp_host;
          $this->smtp_user = $row->smtp_user;
          $this->smtp_pass = $row->smtp_pass;
          $this->smtp_port = $row->smtp_port;
		  $this->is_ssl = $row->is_ssl;
		  $this->version = $row->version;

      }

      /**
       * Core::processConfig()
       * 
       * @return
       */
	  public function processConfig()
	  {
		  
		  if (empty($_POST['site_name']))
			  Filter::$msgs['site_name'] = "Please enter Website Name!";
		  
		  if (empty($_POST['site_url']))
			  Filter::$msgs['site_url'] = "Please enter Website Url!";
		  
		  if (empty($_POST['site_email']))
			  Filter::$msgs['site_email'] = "Please enter valid Website Email address!";
		  
		  if (empty($_POST['thumb_w']))
			  Filter::$msgs['thumb_w'] = "Please enter Thumbnail Width!";
		  
		  if (empty($_POST['thumb_h']))
			  Filter::$msgs['thumb_h'] = "Please enter Thumbnail Height!";
			  
          if ($_POST['mailer'] == "SMTP") {
              Filter::checkPost('smtp_host', "Please enter Valid SMTP Host!");
              Filter::checkPost('smtp_user', "Please enter Valid SMTP Username!");
              Filter::checkPost('smtp_pass', "Please enter Valid SMTP Password");
              Filter::checkPost('smtp_port', "Please enter Valid SMTP Porty!");
          }
		  
		  if (empty(Filter::$msgs)) {
			  $data = array(
					  'site_name' => sanitize($_POST['site_name']), 
					  'site_url' => sanitize($_POST['site_url']),
					  'site_email' => sanitize($_POST['site_email']),
					  'reg_allowed' => intval($_POST['reg_allowed']),
					  'user_limit' => intval($_POST['user_limit']),
					  'reg_verify' => intval($_POST['reg_verify']),
					  'notify_admin' => intval($_POST['notify_admin']),
					  'auto_verify' => intval($_POST['auto_verify']),
					  'user_perpage' => intval($_POST['user_perpage']),
					  'thumb_w' => intval($_POST['thumb_w']),
					  'thumb_h' => intval($_POST['thumb_h']),
					  'mailer' => sanitize($_POST['mailer']),
					  'smtp_host' => sanitize($_POST['smtp_host']),
					  'smtp_user' => sanitize($_POST['smtp_user']),
					  'smtp_pass' => sanitize($_POST['smtp_pass']),
					  'smtp_port' => intval($_POST['smtp_port']),
					  'is_ssl' => intval($_POST['is_ssl'])

			  );
			  
			  self::$db->update(self::sTable, $data);
			  (self::$db->affected()) ? Filter::msgOk("<span>Success!</span>System Configuration updated successfully!") : Filter::msgAlert("<span>Alert!</span>Nothing to process.");
		  } else
			  print $this->msgStatus();
	  }

	  /**
	   * Core::processNewsletter()
	   * 
	   * @return
	   */
	  public function processNewsletter()
	  {
		  
		  if (empty($_POST['subject']))
			  Filter::$msgs['subject'] = "Please Enter Newsletter Subject";
		  
		  if (empty($_POST['body']))
			  Filter::$msgs['body'] = "Please Enter Email Message!";
		  
		  if (empty(Filter::$msgs)) {
				  $to = sanitize($_POST['recipient']);
				  $subject = sanitize($_POST['subject']);
				  $body = cleanOut($_POST['body']);

			  switch ($to) {
				  case "all":
					  require_once(BASEPATH . "lib/class_mailer.php");
					  $mailer = $mail->sendMail();
					  $mailer->registerPlugin(new Swift_Plugins_AntiFloodPlugin(100,30));
					  
					  $sql = "SELECT email, CONCAT(fname,' ',lname) as name FROM " . Users::uTable . " WHERE id != 1";
					  $userrow = self::$db->fetch_all($sql);
					  
					  $replacements = array();
					  foreach ($userrow as $cols) {
						  $replacements[$cols->email] = array('[NAME]' => $cols->name,'[SITE_NAME]' => $this->site_name,'[URL]' => $this->site_url);
					  }
					  
					  $decorator = new Swift_Plugins_DecoratorPlugin($replacements);
					  $mailer->registerPlugin($decorator);
					  
					  $message = Swift_Message::newInstance()
								->setSubject($subject)
								->setFrom(array($this->site_email => $this->site_name))
								->setBody($body, 'text/html');
					  
					  foreach ($userrow as $row)
						  $message->addTo($row->email, $row->name);
					  unset($row);
					  
					  $numSent = $mailer->batchSend($message);
					  break;
					  
				  case "newsletter":
					  require_once(BASEPATH . "lib/class_mailer.php");
					  $mailer = $mail->sendMail();
					  $mailer->registerPlugin(new Swift_Plugins_AntiFloodPlugin(100,30));
					  
					  $sql = "SELECT email, CONCAT(fname,' ',lname) as name FROM " . Users::uTable . " WHERE newsletter = '1' AND id != 1";
					  $userrow = self::$db->fetch_all($sql);
					  
					  $replacements = array();
					  foreach ($userrow as $cols) {
						  $replacements[$cols->email] = array('[NAME]' => $cols->name,'[SITE_NAME]' => $this->site_name,'[URL]' => $this->site_url);
					  }
					  
					  $decorator = new Swift_Plugins_DecoratorPlugin($replacements);
					  $mailer->registerPlugin($decorator);
					  
					  $message = Swift_Message::newInstance()
								->setSubject($subject)
								->setFrom(array($this->site_email => $this->site_name))
								->setBody($body, 'text/html');
					  
					  foreach ($userrow as $row)
						  $message->addTo($row->email, $row->name);
					  unset($row);
					  
					  $numSent = $mailer->batchSend($message);
					  break;
					  					  	  
				  default:
					  require_once(BASEPATH . "lib/class_mailer.php");
					  $mailer = $mail->sendMail();	
					  			  
					  $row = self::$db->first("SELECT email, CONCAT(fname,' ',lname) as name FROM " . Users::uTable . " WHERE email LIKE '%" . sanitize($to) . "%'");
					  
					  $newbody = str_replace(array('[NAME]', '[SITE_NAME]', '[URL]'), 
					  array($row->name, $this->site_name, $this->site_url), $body);

					  $message = Swift_Message::newInstance()
								->setSubject($subject)
							    ->setTo(array($to => $row->name))
								->setFrom(array($this->site_email => $this->site_name))
								->setBody($newbody, 'text/html');
					  
					  $numSent = $mailer->send($message);
					  break;
			  }

			  ($numSent) ? Filter::msgOk("<span>Success!</span>All Email(s) have been sent successfully!") :  Filter::msgAlert("<span>Error!</span>Some of the emails could not be reached!");

		  } else
			  print Filter::msgStatus();
	  }

      /**
       * Core::getEmailTemplates()
       * 
       * @return
       */
      public function getEmailTemplates()
      {
          $sql = "SELECT * FROM " . self::eTable . " ORDER BY name ASC";
          $row = self::$db->fetch_all($sql);
          
          return ($row) ? $row : 0;
      }

	  /**
	   * Core:::processEmailTemplate()
	   * 
	   * @return
	   */
	  public function processEmailTemplate()
	  {
		  
		  if (empty($_POST['name']))
			  Filter::$msgs['name'] = "Please Enter Template Title!";
		  
		  if (empty($_POST['subject']))
			  Filter::$msgs['subject'] = "Please Enter Email Subject!";

		  if (empty($_POST['body']))
			  Filter::$msgs['body'] = "Template Content is required!";
			  		  
		  if (empty(Filter::$msgs)) {
			  $data = array(
					  'name' => sanitize($_POST['name']), 
					  'subject' => sanitize($_POST['subject']),
					  'body' => $_POST['body'],
					  'help' => $_POST['help']
			  );

			  self::$db->update(self::eTable, $data, "id='" . Filter::$id . "'");
			  (self::$db->affected()) ? Filter::msgOk("<span>Success!</span>Email Template Updated Successfully") :  Filter::msgAlert("<span>Alert!</span>Nothing to process.");
		  } else
			  print Filter::msgStatus();
	  }

      /**
       * Core::getNews()
       * 
       * @return
       */
      public function getNews()
      {
          $sql = "SELECT *, DATE_FORMAT(created, '%d. %b. %Y') as cdate FROM " . self::nTable . " ORDER BY title ASC";
          $row = self::$db->fetch_all($sql);
          
          return ($row) ? $row : 0;
      }

      /**
       * Core::renderNews()
       * 
       * @return
       */
      public function renderNews()
      {
          $sql = "SELECT *, DATE_FORMAT(created, '%d. %b. %Y') as cdate FROM " . self::nTable . " WHERE active = 1";
          $row = self::$db->first($sql);
          
          return ($row) ? $row : 0;
      }
	  
	  /**
	   * Content::processNews()
	   * 
	   * @return
	   */
	  public function processNews()
	  {
		  
		  if (empty($_POST['title']))
			  Filter::$msgs['title'] = 'Please Enter News Title';

		  if (empty($_POST['body']))
			  Filter::$msgs['body'] = 'Please Enter News Content';
			  		  
		  if (empty($_POST['created']))
			  Filter::$msgs['created'] = 'Please Enter Valid Date';
		  
		  if (empty(Filter::$msgs)) {
			  $data = array(
				  'title' => sanitize($_POST['title']), 
				  'author' => sanitize($_POST['author']), 
				  'body' => sanitize($_POST['body']),
				  'created' => sanitize($_POST['created']),
				  'active' => intval($_POST['active'])
			  );

			  if ($data['active'] == 1) {
				  $news['active'] = "DEFAULT(active)";
				  self::$db->update(self::nTable, $news);
			  }
			  
			  (Filter::$id) ? self::$db->update(self::nTable, $data, "id='" . Filter::$id . "'") : self::$db->insert(self::nTable, $data);
			  $message = (Filter::$id) ? '<span>Success!</span>News item updated successfully!' : '<span>Success!</span>News item added successfully!';
			  
			  (self::$db->affected()) ? Filter::msgOk($message) :  Filter::msgAlert('<span>Alert!</span>Nothing to process.');
		  } else
			  print Filter::msgStatus();
	  }
	  	  
      /**
       * Core::monthList()
       * 
       * @return
       */ 	  
      public function monthList()
	  {
		  $selected = is_null(get('month')) ? strftime('%m') : get('month');
		  
		  $arr = array(
				'01' => "Jan",
				'02' => "Feb",
				'03' => "Mar",
				'04' => "Apr",
				'05' => "May",
				'06' => "Jun",
				'07' => "Jul",
				'08' => "Aug",
				'09' => "Sep",
				'10' => "Oct",
				'11' => "Nov",
				'12' => "Dec"
		  );
		  
		  $monthlist = '';
		  foreach ($arr as $key => $val) {
			  $monthlist .= "<option value=\"$key\"";
			  $monthlist .= ($key == $selected) ? ' selected="selected"' : '';
			  $monthlist .= ">$val</option>\n";
          }
          unset($val);
          return $monthlist;
      }

      /**
       * Core::yearList()
	   *
       * @param mixed $start_year
       * @param mixed $end_year
       * @return
       */
	  function yearList($start_year, $end_year)
	  {
		  $selected = is_null(get('year')) ? date('Y') : get('year');
		  $r = range($start_year, $end_year);
		  
		  $select = '';
		  foreach ($r as $year) {
			  $select .= "<option value=\"$year\"";
			  $select .= ($year == $selected) ? ' selected="selected"' : '';
			  $select .= ">$year</option>\n";
		  }
		  return $select;
	  }

      /**
       * Core::yearlyStats()
       * 
       * @return
       */
      public function yearlyStats()
      {
          $sql = "SELECT *, YEAR(created) as year, MONTH(created) as month," 
		  . "\n COUNT(id) as total" 
		  . "\n FROM " . Users::uTable 
		  . "\n WHERE YEAR(created) = '" . $this->year . "'" 
		  . "\n GROUP BY year DESC, month DESC ORDER by created";

          $row = Registry::get("Database")->fetch_all($sql);

          return ($row) ? $row : 0;
      }
	  
	   
      /**
       * Core::getYearlySummary()
       * 
       * @return
       */
      public function getYearlySummary()
      {
          $sql = "SELECT YEAR(created) as year, MONTH(created) as month," 
		  . "\n COUNT(id) as total" 
		  . "\n FROM " . Users::uTable 
		  . "\n WHERE YEAR(created) = '" . $this->year . "' GROUP BY year";

          $row = Registry::get("Database")->first($sql);

          return ($row) ? $row : 0;
      }
				  
      /**
       * Core::getRowById()
       * 
       * @param mixed $table
       * @param mixed $id
       * @param bool $and
       * @param bool $is_admin
       * @return
       */
      public static function getRowById($table, $id, $and = false, $is_admin = true)
      {
          $id = sanitize($id, 8, true);
          if ($and) {
              $sql = "SELECT * FROM " . (string )$table . " WHERE id = '" . Registry::get("Database")->escape((int)$id) . "' AND " . Registry::get("Database")->escape($and) . "";
          } else
              $sql = "SELECT * FROM " . (string )$table . " WHERE id = '" . Registry::get("Database")->escape((int)$id) . "'";

          $row = Registry::get("Database")->first($sql);

          if ($row) {
              return $row;
          } else {
              if ($is_admin)
                  Filter::error("You have selected an Invalid Id - #" . $id, "Core::getRowById()");
          }
      }

      /**
       * Core::doDelete()
       * 
       * @param mixed $title
       * @param mixed $varpost
       * @param string $url
       * @param string $attr
       * @param string $id
	   * @param string $extra
       * @return
       */
      public static function doDelete($title, $varpost, $url = 'controller.php', $attr = 'item_', $id = 'a.delete', $extra = false)
      {
          $display = "
		  <script type=\"text/javascript\"> 
		  // <![CDATA[
		  $(document).ready(function () {
		      $('body').on('click', '" . $id . "', function () {
		          var id = $(this).attr('id').replace('" . $attr . "', '')
		          var parent = $(this).parent().parent().parent();
		          var name = $(this).attr('data-rel');
		          new Messi('<p class=\"messi-warning\"><i class=\"icon-warning-sign icon-3x pull-left\"></i>Are you sure you want to delete this record?<br /><strong>This action cannot be undone!!!</strong></p>', {
		              title: '" . $title . "',
		              titleClass: '',
		              modal: true,
		              closeButton: true,
		              buttons: [{
		                  id: 0,
		                  label: 'Delete',
		                  class: '',
		                  val: 'Y'
		              }],
		              callback: function (val) {
		                  if (val === 'Y') {
		                      $.ajax({
		                          type: 'post',
		                          url: '" . $url . "',
		                          data: {
									  '" . $varpost . "': id,
									  'title':encodeURIComponent(name)
									  " . $extra . "
								  },
		                          beforeSend: function () {
		                              parent.animate({
		                                  'backgroundColor': '#FFBFBF'
		                              }, 400);
		                          },
		                          success: function (msg) {
		                              parent.fadeOut(400, function () {
		                                  parent.remove();
		                              });
		                              $('html, body').animate({
		                                  scrollTop: 0
		                              }, 600);
		                              $('#msgholder').html(decodeURIComponent(msg));
		                          }
		                      });
		                  }
		              }

		          });
		      });
		  });
		  // ]]>
		  </script>";

          print $display;
      }
	  
      /**
       * Core::doForm()
       * 
       * @param mixed $data
       * @param string $url
       * @param integer $reset
       * @param integer $clear
       * @param string $form_id
       * @param string $msgholder
       * @return
       */
      public static function doForm($data, $url = "controller.php", $reset = 0, $clear = 0, $form_id = "admin_form", $msgholder = "msgholder")
      {
          $display = '
		  <script type="text/javascript">
		  // <![CDATA[
			  $(document).ready(function () {
				  var options = {
					  target: "#' . $msgholder . '",
					  beforeSubmit:  showLoader,
					  success: showResponse,
					  url: "' . $url . '",
					  resetForm : ' . $reset . ',
					  clearForm : ' . $clear . ',
					  data: {
						  ' . $data . ': 1
					  }
				  };
				  $("#' . $form_id . '").ajaxForm(options);
			  });
			  function showResponse(msg) {
				  hideLoader();
				  $(this).html(msg);
				  $("html, body").animate({
					  scrollTop: 0
				  }, 600);
			  }
			  ';
          $display .= '
		  // ]]>
		  </script>';

          print $display;
      }
  }
?>