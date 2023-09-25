<?php
    require_once __DIR__ . '/Prodotto.php';
    require_once __DIR__ . '/traits/DammiDimensione.php';

    class Cibo extends Prodotto {
        //creo il costruttore
        public function __construct($_nome, $_prezzo, $_categoria, $_dimensione, $_immagine) {
            $this->nome=$_nome;
            $this->prezzo=$_prezzo;
            $this->categoria=$_categoria;
            $this->dimensione=$_dimensione;
            $this->immagine=$_immagine;
        }
    }
?>