<?php

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