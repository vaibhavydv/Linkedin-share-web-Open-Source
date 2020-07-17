<?php

/* 

Code by
Vaibhav Yadav
Full Stack Developer 
(Surmount Soft)

*/

session_start();

require "vendor/autoload.php";
require "LinkedIn.php";

use myPHPnotes\LinkedIn;

$app_id = "86qrgtb9bw6id0";  // app id from linkedin dev app
$app_secret = "1zmtGNNNPWyp4yhr"; // app seceret app id from linkedin dev app

$app_callback = "http://localhost:85/callback.php";  // path for call back file
$app_scopes = "r_emailaddress r_liteprofile w_member_social ";

$ssl = false; // ALWAYS TRUE FOR PRODUCTION USE

$linkedin = new LinkedIn($app_id, $app_secret, $app_callback, $app_scopes, $ssl);