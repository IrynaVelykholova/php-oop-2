<?php
    //collego Gioco a Prodotto
    require_once __DIR__ . '/Prodotto.php';

    class Gioco extends Prodotto {

        public function __construct($_nome, $_tipologia, $_prezzo, $_immagine) {
            $this->nome = $_nome;
            $this->tipologia = $_tipologia;
            $this->prezzo = $_prezzo;
            $this->immagine = $_immagine;
        }
    }
?>