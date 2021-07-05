<?php

// petljom po izboru zbrojite prvih 100 brojeva i ispišite rezultat
$zbroj=0;
for($i=1;$i<=100;$i++){
    $zbroj+=$i;
}

echo $zbroj, '<br />';

// rekurzija je koncept kada funkcija poziva samu sebe
// OBAVEZNO prvo definirati uvjet izlaska iz rekurzije

function suma($broj)
{
    //uvjet izlaska iz rekurzije
    if($broj===1){
        return 1;
    }
    //echo $broj, '<br />';
    // funkcija zove samu sebe
    return $broj + suma($broj-1);
}
// 100 + 99 + 98 + .... + 1      -> zbrajanje se vrši od 1 prema 100

echo suma(100);