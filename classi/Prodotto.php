<?php
require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '../traits/WithDimensione';
class Prodotto {
        use WithDimensione;
        protected $nome;
        protected $prezzo;
        protected $categoria; 
        protected $immagine;
        //non creo costruct perchè andrò a farlo nei singoli prodotti

        public function __construct($dimensione) {
                $this->setDimensione($dimensione);
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of prezzo
         */ 
        public function getPrezzo()
        {
                return $this->prezzo;
        }

        /**
         * Set the value of prezzo
         *
         * @return  self
         */ 
        public function setPrezzo($prezzo)
        {
                $this->prezzo = $prezzo;

                return $this;
        }

        /**
         * Get the value of categoria
         */ 
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @return  self
         */ 
        public function setCategoria($categoria)
        {
                $this->categoria = $categoria;

                return $this;
        }

        /**
         * Get the value of immagine
         */ 
        public function getImmagine()
        {
                return $this->immagine;
        }

        /**
         * Set the value of immagine
         *
         * @return  self
         */ 
        public function setImmagine($immagine)
        {
                $this->immagine = $immagine;

                return $this;
        }

}
try {
        $prodotto = new Prodotto('Extra Grande');  // dimensione non valida
} catch (InvalidArgumentException $e) {
        echo 'Errore: ' . $e->getMessage();
}
?>