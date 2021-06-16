// U izbornik postaviti poziv stranice zadatak5.php?broj=2&ime=4&t=9
// stranica ispisuje najveći primljeni broj

<?php

$broj=(int)$_GET["broj"];
$ime=(int)$_GET["ime"];
$t=(int)$_GET["t"];

echo"<br>";

if($broj>$ime && $broj>$t){
    echo $broj;
}

else if ($ime>$broj && $broj>$t){
    echo $ime;
}

else if ($t> $ime && $t>$broj){
    echo $t;
}

else {
    echo 'Dva ili više su ista!';
}