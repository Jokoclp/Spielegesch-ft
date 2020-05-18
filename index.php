<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <title>Gameshop</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

    <?php include('header.php') ?>

<body>






<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="img/slide-2.png" >
    </div>

    <div class="mySlides fade">
        <img src="img/slide-1.png" >
    </div>
    <div class="mySlides fade">
        <img src="img/slide-3.png" >
    </div>



    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>


<div class="startseite" >

    <?php
    //Verbindung starten
    require("db/dbcon.php");

    //Abfragen
    $name = $link->query("SELECT * from artikel.spiele where konsolen_id=10001");

    //Ergebnis darstellen
    while ($row = $name->fetch_assoc()) {
        echo "<img class=bilder_spiele src=\"";
        echo $row ['Pfad'];
        echo "\" >";
        echo "<div class=\"text_spiele\">";
        echo "<h1>";
        echo $row['Name'];
        echo "</h1>";
        echo "USK:";
        echo $row['USK_Einstufung'];
        echo "<br>";
        echo "Erscheinungsdatum: ";
        echo $row['Erscheinungsdatum'];
        echo "<br>";
        echo "<br>";
        echo "</div>";
    }

    //Verbindung schließen
    require("db/dbclose.php");
    ?>

</div>


</body>
<?php include('footer.php') ?>
<script src="java.js"></script>
</html>