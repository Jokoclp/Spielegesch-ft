<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gameshop Playstation 4</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
<!-- Header laden -->
<?php include('header.php') ?>

<div class="unterseite">
    <?php
    //Verbindung starten
    require("db/dbcon.php");

    //Abfragen
    $name = $link->query("SELECT * from artikel.spiele where konsolen_id like '10%'");

    //Ergebnis darstellen
    while ($row = $name->fetch_assoc()) {
        echo "<img class=bilder_spiele src=\"";
        echo $row ['Pfad'];
        echo "\" >";
        echo "<div class=\"text_spiele\">";
        echo "<h1>";
        echo $row['Name'];
        echo "</h1>";
        echo "<h3>";
        echo "USK:";
        echo $row['USK_Einstufung'];
        echo "</h3>";
        echo "<br>";
        echo "Erschienen am: ";
        echo $row['Erscheinungsdatum'];
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo $row['Beschreibung'];
        echo "<br>";
        echo "<div class=\"btn-preis\">";
        echo "<button >";
        echo $row['Preis'];
        echo ",00 €";
        echo "</button>";
        echo "</div>";
        echo "</div>";
    }

    //Verbindung schließen
    require("db/dbclose.php");
    ?>
</div>

</body>
<!-- Footer laden -->
<?php include('footer.php') ?>
</html>