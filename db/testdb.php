<?php
//Verbindung starten
require("dbcon.php");

//Abfragen
$result = $link->query("SELECT * from artikel.test ");

//Ergebnis darstellen
while ($row = $result->fetch_assoc()) {
    echo $row['test'];
    echo "<br>";
}

//Verbindung schließen
require("dbclose.php");
?>