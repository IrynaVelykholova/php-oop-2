<?php
    //collego Cuccia a Prodotto
    require_once __DIR__ . '/Prodotto.php';

    class Cuccia extends Prodotto {

        public function __construct($_nome, $_tipologia, $_prezzo, $_immagine) {
            $this->nome = $_nome;
            $this->tipologia = $_tipologia;
            $this->prezzo = $_prezzo;
            $this->immagine = $_immagine;
        }
    }
?>