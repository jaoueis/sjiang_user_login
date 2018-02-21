<?php
require_once('phpscripts/config.php');
confirmLogin();

date_default_timezone_set('America/Toronto');

$midnight = "24:00:00";
$dawn     = "06:00:00";
$noon     = "12:00:00";
$sunset   = "18:00:00";
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Welcome</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="main-header-wrap">
    <div class="header-buttons-wrap">
        <a href="create_user.php">Sign up</a>
        <a href="phpscripts/caller.php?caller_id=loggingout">Log out</a>
    </div>
</div>
<div class="main-wrap">
    <div class="info-wrap">
        <span class="welcome">
            <?php
            if (time() >= strtotime($midnight) && time() <= strtotime($dawn)) {
                echo "Good morning" . " " . $_SESSION['user_name'] . "! The early bird catches the worm!";
            } else if (time() >= strtotime($dawn) && time() <= strtotime($noon)) {
                echo "Hello" . " " . $_SESSION['user_name'] . "! Hope you have a great morning!";
            } else if (time() >= strtotime($noon) && time() <= strtotime($sunset)) {
                echo "Good afternoon" . " " . $_SESSION['user_name'] . "! What you up to?";
            } else if (time() >= strtotime($sunset) && time() <= strtotime($midnight)) {
                echo "Hi" . " " . $_SESSION['user_name'] . "! Hope you have a great evening!";
            }
            ?>
        </span>
        <br><br>
        <span class="lastLogin"><?php echo "Your last login was at " . $_SESSION['user_date']; ?></span>
    </div>
</div>
</body>
</html>
