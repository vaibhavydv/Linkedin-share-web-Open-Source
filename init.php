<?php

session_start();

require "vendor/autoload.php";
require "LinkedIn.php";

use myPHPnotes\LinkedIn;

$app_id = "86qrgtb9bw6id0";
$app_secret = "1zmtGNNNPWyp4yhr";
$app_callback = "http://localhost/li/callback.php";
$app_scopes = "r_emailaddress r_basicprofile r_liteprofile w_member_social rw_company_admin w_share";

$ssl = false; // ALWAYS TRUE FOR PRODUCTION USE

$linkedin = new LinkedIn($app_id, $app_secret, $app_callback, $app_scopes, $ssl);