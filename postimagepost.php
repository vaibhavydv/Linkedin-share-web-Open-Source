<?php

require "init.php";

$profile = $_POST['profile'];
$content = $_POST['content'];
$image_title = $_POST['image_title'];
$image_desc = $_POST['image_desc'];
$privacy = $_POST['privacy'];
$image = $_FILES['image']['tmp_name'];

$post = $linkedin->linkedInPhotoPost($_SESSION['linkedInAccessToken'],   $profile, $content, $image,  $image_title, $image_desc , $privacy);
$post = json_decode($post);

if (isset($post->id)) {
    echo "POSTED";
} else {
    echo "FAILED";
}
?>
<br>
<a href="/profile.php">BACK TO PROFILE</a>