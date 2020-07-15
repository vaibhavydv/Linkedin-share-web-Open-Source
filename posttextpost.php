<?php

require_once "init.php";

$profile = $_POST['profile'];
$content = $_POST['content'];
$privacy = $_POST['privacy'];

$post = $linkedin->linkedInTextPost($_SESSION['linkedInAccessToken'] , $profile,  $content, $privacy);

$post = json_decode($post);
if (isset($post->id)) {
    echo "POSTED";
} else {
    echo "FAILED.";
}
?>
<br>
<a href="/profile.php">BACK TO PROFILE</a>