<?php
    //collego Gatti a Categoria
    require_once __DIR__ . '/Categoria.php';

    class Gatti extends Categoria {
        protected $icona = '<i class="fa-solid fa-cat"></i>'; //assegno un valore all'icona
    }