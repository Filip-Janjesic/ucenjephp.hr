<?php


// U izbornik postaviti poziv stranice zadatak3.php?b1=2&b2=6
// stranica ispisuje veći broj

$b1=(int)$_GET['b1'];
$b2=(int)$_GET['b2'];

if($b1>$b2){
    echo $b1;
}else if($b1===$b2){
    echo 'Jednaki su';
}else{
    echo $b2;
}

