<?php
/* 

Code by
Vaibhav Yadav
Full Stack Developer 
(Surmount Soft)

*/
$type = $_GET['type'];
switch ($type) {
    case 'text':
        header("location: /gettextpost.php");
        die();
        break;
    case 'link':
        header("location: /getlinkpost.php");
        die();
        break;
    case 'image':
        header("location: /getimagepost.php");
        die();
        break;
    default:
        die("INVALID USE OF HEADER INFORMATION");
        break;
}