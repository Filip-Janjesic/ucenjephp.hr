<?php

// https://www.php.net/manual/en/ref.array.php

//ovo nije dobra praksa
$t=1;
$t1=2;
$t2=3673;

$niz = [1,2,3,2];

echo gettype($niz);
//ispis pojedinog elementa niza
echo $niz[0];

echo '<pre>';
print_r($niz);
echo '</pre>';

// dodavanje nofog elementa u niz
$niz[]=7;

echo '<pre>';
print_r($niz);
echo '</pre>';

// niz nizova
$nizNizova = [
[0,0,0],
[0,0,0],
[0,0,0],
];

echo '<pre>';
print_r($nizNizova);
echo '</pre>';


$nizNizova[1][1]=1;

echo '<pre>';
print_r($nizNizova);
echo '</pre>';


$niz = [1,true,3.6,[2,3],'Edunova', new stdClass()];

echo $niz[4];

// foreach petljom
echo '<hr />';

$niz=['Osijek','Zagreb','Donji Miholjac'];
echo '<pre>';
print_r($niz);
echo '</pre>';

foreach($niz as $grad){
    echo $grad, '<br />';
}



