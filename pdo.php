<?php

$dsn='mysql:host=localhost;dbname=edunovapp23';
$user='edunova';
$pass='edunova';

$pdo = new PDO($dsn,$user,$pass);

echo $pdo->query('select version()')->fetchColumn();