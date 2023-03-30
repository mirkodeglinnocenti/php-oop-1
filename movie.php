<?php

class Movie {
    public string $titolo;
    public string $genere;
    public float $durata;

    function __construct ($titolo){
        $this->titolo = $titolo;
    }

}

?>