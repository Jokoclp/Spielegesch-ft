
<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpassword= "megagame";
$db= "artikel";
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $db)or die("Could not connect: " . mysqli_error());
$link->set_charset("utf8");
?>
