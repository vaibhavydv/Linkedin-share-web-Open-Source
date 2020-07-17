<?php
/* 

Code by
Vaibhav Yadav
Full Stack Developer 
(Surmount Soft)

*/
require "init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LinkedIn Share</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            background-image: url("/images/bg.png");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg">
    <div class="container">
        <br><br><br><br><br><br>
        <div class="row">
            <div class="col-6 offset-3" style="margin: auto;background: white; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);  border-radius: 5px; transition: 0.3s;">
                <div class="panel-heading">
                    <h1>LinkedIn Share</h1>
                    <p style="font-style: italic;">by Vaibhav Yadav</p>
                </div>
                <hr>
                <div class="panel-body">
                    <a href="<?php echo $linkedin->getAuthUrl() ?>" class="btn btn-primary btn-block">Sign In with LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>