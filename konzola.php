<?php

$ime='';
for(;;){
    $ime = readline('Unesi ime: ');
    if(strlen($ime)>0){
        break;
    }
    echo "Obavezno ime\n" ;
}


echo $ime, ', ti si najbolji';