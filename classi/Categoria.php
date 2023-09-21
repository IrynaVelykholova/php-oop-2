<?php

class Categoria {
    protected $razza;
    protected $colore;
    protected $taglia;
    protected $icona;
    protected $immagine;

    
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

    public function setIcon($icona){
        $this->icona = $icona;

        return $this;
    }
}