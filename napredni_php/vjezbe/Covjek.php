<?php

class Covjek{

    public $ime;
    private $godine;
    protected $spol;
    public $adresa;

    public function posudjujeFilm(){
        echo 'Film Posudjen';
    }

    private function seUclanjuje(){
        echo 'Korisnik je Uclanjen';
    }

}


$covjek = new Covjek();
$covjek->posudjujeFilm();