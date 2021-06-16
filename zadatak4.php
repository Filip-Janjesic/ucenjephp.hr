// U izbornik postaviti poziv stranice zadatak4.php?naslov=2&tekst=Osijek
// stranica ispisuje primljeni tekst u veličini naslova (h1 - h6)
// ukoliko je naslov manji od 1 ili veći od 6 stranica javlja poruku:
// neispravan parametar

<br>
<br>

<?php
$naslov=(int) $_GET["naslov"];
$tekst=$_GET["tekst"];

if($naslov<1 || $naslov>6){
    echo"Neispravan parametar";
}

else {
    echo "<h$naslov>$tekst<h$naslov>";
}