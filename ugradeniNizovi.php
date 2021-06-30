<?php

//https://www.php.net/manual/en/reserved.variables.php

require_once 'funkcije.php';

echo '$_GET';
logiranje($_GET);

// $_POST frontend je u postprimjer.php
echo '$_POST';
logiranje($_POST);

echo '$_REQUEST';
logiranje($_REQUEST);

echo '$_SERVER';
logiranje($_SERVER);

//ispisati samo verziju PHP-a iz $_REQUEST niza
//$v = $_SERVER['SERVER_SOFTWARE'];
//$niz = explode(' ',$v);
//$djelovi = explode('/',$niz[count($niz)-1]);
//echo $djelovi[1];


setcookie('Edunova', 'Postavio ja', time()+3600);  /* expire in 1 hour */

echo '$_COOKIE';
logiranje($_COOKIE);


session_start();
$_SESSION['MojaLozinka']='Ovo nije dobro';
echo '$_SESSION';
logiranje($_SESSION);

echo '$_FILES';
logiranje($_FILES);

$varijabla='Ovo ću vidjeti u $GLOBALS';

echo '$GLOBALS';
logiranje($GLOBALS);