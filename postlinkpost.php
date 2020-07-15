<?php

require "init.php";

$profile = $_POST['profile'];
$content = $_POST['content'];
$link_title = $_POST['link_title'];
$link_desc = $_POST['link_desc'];
$link_url = $_POST['link_url'];
$privacy = $_POST['privacy'];


$post = $linkedin->linkedInLinkPost($_SESSION['linkedInAccessToken'], $profile, $content, $link_title, $link_desc, $link_url , $privacy);
$post = json_decode($post);

if (isset($post->id)) {
    echo "POSTED";
} else {
    echo "FAILED.";
}
?>
<br>
<a href="/profile.php">BACK TO PROFILE</a>