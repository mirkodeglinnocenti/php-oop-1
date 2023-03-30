<?php

class Movie {
    public string $titolo;
    public $anno;
    public string $genere;
    public float $durata;

    function __construct ($titolo){
        $this->titolo = $titolo;
    }

    public function setAnno ($anno){
        $stile = "moderno";

        if($anno < 2010){
            $stile = "vecchio";
        }

        $this->anno = $anno. " " .$stile;
    }

}

?>