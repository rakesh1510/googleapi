<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
require_once 'googleapi/vendor/autoload.php';
$client = new Google_Client();
$client->setClientId("417805324540-g6k3aejrqga7aiaelumde83nnh6su2ag.apps.googleusercontent.com");
$client->setClientSecret("g86iVS0qJfSFIZidTyNBaiTt");
$client->setApplicationName("Google Api login");
$client->setRedirectUri("http://localhost/googleapi/g-callback.php");
$client->addScope("https://www.googleapis.com/auth/plus.login  https://www.googleapis.com/auth/userinfo.email");
?>