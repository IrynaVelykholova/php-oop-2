<?php
    class Prodotto {
        protected $nome;
        protected $tipologia;
        protected $prezzo;
        protected $immagine;



        public function __construct($_nome, $_tipologia, $_prezzo, $_immagine) {
            $this->nome = $_nome;
            $this->tipologia = $_tipologia;
            $this->prezzo = $_prezzo;
            $this->immagine = $_immagine;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getTipologia() {
            return $this->tipologia;
        }

        public function getPrezzo() {
            return $this->prezzo;
        }

        public function getImmagine() {
            return $this->immagine;
        }
        
    }
?>