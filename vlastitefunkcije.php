<?php

function posao () {
    echo 'Hello';
    echo '<hr />';
}

for ($i=0;$i<10;$i++){
posao();
}

function logiranje($varijabla){
    echo '<pre>';
    print_r($varijabla);
    echo '</pre>';
    echo '<hr />';
}

$niz = ['ime'=>'Pero','podaci' => [1,2,3,4]];

logiranje($niz);
logiranje('Edunova');
logiranje(12.9);


function slucajnalista(){
    $broj = rand(10,20);
    $html = '<ol>';
    while ($broj-->0){
        $html.= '<li>' . rand (1,5) . '</li>';
    }
    $html.= '<ol>';
    return $html;
}

echo slucajnalista();


function primbroj($broj){
    for($i=2;$i<$broj;&i++){
        if($broj % $i===0){
            return false;
        }
    }
}