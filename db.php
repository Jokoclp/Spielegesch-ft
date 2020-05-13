<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <title>Gameshop</title>
</head>
<body>
<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpassword= "megagame";
$db= "artikel";
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $db)or die("Could not connect: " . mysqli_error());

$query = "SELECT * FROM test;";$result = mysqli_query($query, $link)or die("Query failed: " . mysqli_error());
echo $query
?>
</body>
</html>