<?php

class Categoria {
    public $razza;
    public $colore;
    public $taglia;
    public $icona;
    public $immagine;

    
    public function __construct($_razza, $_colore, $_taglia, $_icona, $_immagine) {
        $this->razza = $_razza;
        $this->colore = $_colore;
        $this->taglia = $_taglia;
        $this->icona = $_icona;
        $this->immagine = $_immagine;
    }


    public function getIcon() {
        return $this->icona;
    }

}