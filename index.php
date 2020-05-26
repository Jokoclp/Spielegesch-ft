<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gameshop_index</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<!-- Header laden -->
<?php include('header.php') ?>

<!-- Slider -->
<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="img/slide-2.png" >
    </div>
    <div class=" mySlides fade">
        <img src="img/slide-1.png" >
    </div>
    <div class="mySlides fade">
        <img src="img/slide-3.png">
    </div>

    <!-- Rechts- Links- Buttons im Slider -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div class="startseite" >
    <p>
    <br>
    <br>
    <h1 style="text-align: center;"><strong>Herzlich willkommen!</strong></h1>
    <p>Wir freuen uns, Sie auf unserer Homepage begr&uuml;&szlig;en zu k&ouml;nnen. Informieren Sie sich auf unserer Internetpr&auml;senz &uuml;ber unser Unternehmen und unsere Leistungen. Unser Gesch&auml;ft stellt Ihnen eine gro&szlig;e Bandbreite zur Verf&uuml;gung, aus der Sie ganz nach Ihrem Geschmack w&auml;hlen k&ouml;nnen. Dabei unterst&uuml;tzen wir Sie mit einer umfassenden und fachlich kompetenten Beratung. Sie m&ouml;chten mehr &uuml;ber uns und unser Angebot erfahren? Gerne stellen wir uns Ihnen vor. Unser Team ist jederzeit gerne f&uuml;r Sie da. Wir freuen uns auf Sie!</p>
    <p>&nbsp;</p>
    <h3 style="text-align: center;">Wir beraten Sie gerne</h3>
    <p>Bei einem gro&szlig;en Sortiment f&auml;llt die Entscheidung f&uuml;r das richtige Produkt manchmal nicht leicht. Damit Sie sich leichter orientieren k&ouml;nnen, erg&auml;nzen wir regelm&auml;&szlig;ig unser Angebot. Informieren Sie sich gerne auf unseren Seiten und lassen Sie sich von unseren Tipps und Hinweisen inspirieren. Wir unterst&uuml;tzen Sie, die richtige Kaufentscheidung zu treffen und freuen uns, wenn Sie lange Freude an Ihrem Produkt haben.</p>
    <p>&nbsp;</p>
    <h3 style="text-align: center;">Guter Service? Bei uns selbstverst&auml;ndlich!</h3>
    <p>Denn wir kommunizieren mit Ihnen. Nach erfolgreichem Einkauf werden unsere Kunden detailliert &uuml;ber den aktuellen Status ihrer Bestellung informiert. Um alle Fragen rund um den Einkauf k&uuml;mmern wir uns. Ihre Anregungen und Kritik nehmen wir ernst, denn wir wollen Ihnen das optimale Einkaufserlebnis bieten. Und das Lob vieler zufriedener Kunden best&auml;tigt unseren Erfolg in diesem Anliegen.</p>
    </p>
</div>
</body>

<!-- Footer laden -->
<?php include('footer.php') ?>

<!-- Javascript für Slider -->
<script src="java.js"></script>

</html>