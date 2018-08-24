<?php

require_once './config/config.php';
if (isset($_SESSION['access_token'])) {
    $client->setAccessToken($_SESSION['access_token']);
} else if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenwithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
} else {
    header('Location:index.php');
    exit;
}
$oAuth = new Google_Service_Oauth2($client);
$userdata = $oAuth->userinfo_v2_me->get();

//echo "<pre>";
//print_r($userdata);

$_SESSION['email'] = $userdata['email'];
$_SESSION['gender'] = $userdata['gender'];
$_SESSION['picture'] = $userdata['picture'];
$_SESSION['familyName'] = $userdata['familyName'];
$_SESSION['givenName'] = $userdata['givenName'];

print_r($_SESSION);
//if ($_SESSION['email'] != '') {
header('Location:profile.php');
exit;
//}
?>