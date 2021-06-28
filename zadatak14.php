<?php
function aritmetickaSredina($niz)
{
    foreach($niz as $b){
        $suma+=$b;
    }
    return $suma/count($niz);
}

echo aritmetickaSredina ( 'lk' );