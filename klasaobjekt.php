<?php
require_once 'funkcije.php';
// čitati https://github.com/tjakopec/OOP_JAVA_PHP_PYTHON_SWIFT/

// klasa je opisnik objekta
class Smjer
{
    // klasa se sastoji od svojstava i metoda (funkcija)
    // funkcija u klasi je metoda, funkcija van klase je funkcija

    //svojstva
    private $sifra;  //
    private $naziv;  // OOP princip učahurivanja. Skrivena svojstva
    private $cijena; //

    // OOP princip učahurivanja. Javne metode
    public function setCijena($cijena)
    {
        $this->cijena=$cijena;
    }

    //metode
    public function popust($postotak)
    {
        return $this->cijena * ((100 - $postotak)/100); 
    }

    //http://mikeangstadt.name/projects/getter-setter-gen/
}

$php = new Smjer();
$php->setCijena(100);
echo $php->popust(20);

logiranje($php);

echo '<hr />';

$smjer = new stdClass();
$smjer->naziv='PHP';
$smjer->cijena=5000;

logiranje($smjer);