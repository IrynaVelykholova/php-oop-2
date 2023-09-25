<?php
    //collego Gioco a Prodotto
    require_once __DIR__ . '/Prodotto.php';

    class Gioco extends Prodotto {
    //creo il costruttore
    public function __construct($_nome, $_prezzo, $_categoria, $_immagine) {
        $this->nome=$_nome;
        $this->prezzo=$_prezzo;
        $this->categoria=$_categoria;
        $this->immagine=$_immagine;
    }
    }
?>