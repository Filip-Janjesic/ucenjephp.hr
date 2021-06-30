<?php

// da bi fukciju koristio prvo ju morađ kreirati

// 1. vrsta
// ne prima parametre, ne vraća vrijednost
function posao()
{ // tijelo funckcije
    echo 'Hello';
    echo '<hr />';
}

//poziv funkcije
//for($i=0;$i<10;$i++){
    posao();
//}

//phpinfo();

// 2. vrsta
// prima parametre, ne vraća vrijednost
function logiranje($varijabla)
{
    if(gettype($varijabla)!=='array'){
        echo gettype($varijabla), '<br />';
    }
    echo '<pre>';
    print_r($varijabla);
    echo '</pre>';
    echo '<hr />';
}

$niz = ['ime'=>'Pero', 'podaci'=>[1,2,3,2]];

logiranje($niz);
logiranje('Edunova');
logiranje(12.9);

// 3. vrsta
// ne prima parametre, vraća vrijednost
function slucajnaLista()
{
    $broj = rand(10,20); 
    $html='<ol>'; 
    while($broj-->0){
        $html.='<li>' . rand(1,5) . '</li>';
    }
    $html.='</ol>';
    return $html;
}

echo slucajnaLista();


echo '<hr />';


// 4. vrsta
// prima parametre, vraća vrijednost - najčešće korištena
function primBroj($broj)
{
    for($i=2;$i<$broj;$i++){
        if($broj % $i===0){
            return false;
        }
    }
    return true;
}
$b=30;
if(primBroj($b)){
    echo $b, ' PRIM';
}else{
    echo $b, ' NIJE PRIM';
}


echo '<hr />';


// ispisati sve prim brojeve između dva primljena broja
function primBrojevi($pb,$db)
{
    for($i=$pb;$i<=$db;$i++){
        if(primBroj($i)){
            echo $i, '<br />';
        }
    }
}

primBrojevi(45,998);


echo '<hr />';

// svaka funkcija može imati opcionalne parametre
function log2($varijabla,$element='pre')
{
    echo '<', $element, '>';
    print_r($varijabla);
    echo '</', $element, '>';
}

log2($niz);
log2($niz,'code');


// ovo ne radi

$godina=2021;

function godina(){
    echo $godina;
}

godina(); //Notice: Undefined variable: godina in E:\pp23\ucenjephp.hr\vlastitefunkcije.php on line 112