<?php
session_start();

require_once __DIR__ . '/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '399299573601013',
    'app_secret' => '1af7b3b28744ef1aadb432adf5515c79',
    'default_graph_version' => 'v2.2',
]); 

$helper = $fb->getRedirectLoginHelper();
try {
    $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (isset($accessToken)) {
    // Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;

    // Now you can redirect to another page and use the
    // access token from $_SESSION['facebook_access_token'] 
    header("Location: http://thequranreciters.com/Facebook/login.php");
}


?>