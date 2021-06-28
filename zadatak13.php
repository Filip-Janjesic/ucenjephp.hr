<?php
function  tablicamnozenja (){
    $html = '<ol>';
$redova=2;
$kolona=2;
echo '<table border="1">';
for($i=1;$i<=$redova;$i++){
    echo '<tr>';
    for($j=1;$j<=$kolona;$j++){
        echo '<td>', $i*$j, '</td>';
    }
    echo '</tr>';
}
echo '</table>';
$html.= '<ol>';
return $html;
}