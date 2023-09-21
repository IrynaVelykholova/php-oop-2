<?php
    //collego Gatti a Categoria
    require_once __DIR__ . '/Categoria.php';

    class Gatti extends Categoria {

    public function __construct($_razza, $_colore, $_taglia, $_immagine) {
        $this->razza = $_razza;
        $this->colore = $_colore;
        $this->taglia = $_taglia;
        $this->icona = '<i class="fa-solid fa-cat"></i>';
        $this->immagine = $_immagine;
    }

}