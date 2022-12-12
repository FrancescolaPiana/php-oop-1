<?php

class Movie
{
    public $name;
    public $price;
    public $dataUscita;
    public $durata;
    public $voto;

    public $votoStella;

    function __construct($_name, $_price, $_dataUscita, $_durata, $_voto)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->dataUscita = $_dataUscita;
        $this->durata = $_durata;
        $this->voto = $_voto;

        $this->votostelle();
    }

    public function votostelle()
    {
        if ($this->voto >= 8) {
            $this->votoStella = '&#9733 &#9733 &#9733';
        } elseif ($this->voto <= 3) {
            $this->votoStella = '&#9733';
        } else {
            $this->votoStella = '&#9733 &#9733';
        }
    }
}