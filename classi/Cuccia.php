<?php
    //collego Cuccia a Prodotto
    require_once __DIR__ . '/Prodotto.php';

    class Cuccia extends Prodotto {
        //creo il costruttore
        public function __construct($_nome, $_prezzo, $_categoria, $_immagine) {
            $this->nome=$_nome;
            $this->prezzo=$_prezzo;
            $this->categoria=$_categoria;
            $this->immagine=$_immagine;
        }
    }
    
?>