<?php

// čitati: https://www.php.net/manual/en/language.oop5.magic.php

class Primjer{

    private $podaci;

    // konstruktor se poziva ključnom rječju new
    public function __construct()
    {
        echo 'konstruktor','<br />';
        $podaci=[];
    }

    public function __set($varijabla, $vrijednost)
    {
        echo 'Postavljam ', $varijabla, ' na ', $vrijednost,'<br />';
        $this->podaci[$varijabla]=$vrijednost;
    }

    public function __get($varijabla)
    {
        echo 'Čitam ', $varijabla,'<br />';
        if(isset($this->podaci[$varijabla])){
            return $this->podaci[$varijabla];
        }else{
            return '';
        }
        
    }


}

// new je poziv konstruktora
$p = new Primjer();

// poziv magične metode __set. ime je varijabla, Marko je vrijednost
$p->ime = 'Marko';

// poziv magične metode __get. ime je varijabla
echo $p->ime;

$p->lllll=555;

echo $p->lllll;
