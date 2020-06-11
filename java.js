/*
       * Javascript - Megagame
       * Autor: Megagame
*/


var slideIndex = 1;
showSlides(slideIndex);


/* Slides nach links und rechts umschalten */
function plusSlides(n) {
    showSlides(slideIndex += n);
}
/* Slides anzeigen */
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    /* Slides-Ende */
    if (n > slides.length) {slideIndex = 1}
    /* Slides-Anfang */
    if (n < 1) {slideIndex = slides.length}
    /* Nur aktuellen Slide anzeigen */
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}