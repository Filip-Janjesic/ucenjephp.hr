<?php

class Osoba
{
    private $ime;
    private $prezime;

   

    /**
     * Get the value of ime
     */ 
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * Set the value of ime
     *
     */ 
    public function setIme($ime)
    {
        $this->ime = $ime;
    }

    /**
     * Get the value of prezime
     */ 
    public function getPrezime()
    {
        return $this->prezime;
    }

    /**
     * Set the value of prezime
     *
     * @return  self
     */ 
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;

        return $this;
    }
}


class Polaznik extends Osoba
{
    private $brojUgovora;

    /**
     * Get the value of brojUgovora
     */ 
    public function getBrojUgovora()
    {
        return $this->brojUgovora;
    }

    /**
     * Set the value of brojUgovora
     *
     * @return  self
     */ 
    public function setBrojUgovora($brojUgovora)
    {
        $this->brojUgovora = $brojUgovora;

        return $this;
    }
}

class Predavac extends Osoba
{
    private $iban;

    /**
     * Get the value of iban
     */ 
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set the value of iban
     *
     * @return  self
     */ 
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }
}

$metoda = 'setIme';

$predavac = new Predavac();
$predavac->$metoda('Pero');

echo $predavac->getIme();