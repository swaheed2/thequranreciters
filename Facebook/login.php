<?php
 
$pageTitle = 'Listen and Download Qur\'an Recitations from Reciters Around the World';
$siteName = "The Quran Reciters";
$section = 'home';
$path = $_SERVER['DOCUMENT_ROOT'];
include $path . '/pages/header.php';

require_once __DIR__ . '/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '399299573601013',
    'app_secret' => '1af7b3b28744ef1aadb432adf5515c79',
    'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://thequranreciters.com/Facebook/login-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
$token =  $_SESSION['facebook_access_token'];
$oAuth2Client = $fb->getOAuth2Client();
$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($token);

$fb->setDefaultAccessToken($longLivedAccessToken);

try {
  $response = $fb->get('/me');
  $userNode = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

echo 'Logged in as ' . $userNode->getName();


?>
 

<?php include $path . '/pages/footer.php'; ?>