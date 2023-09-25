<?php
    //collego Cani a Categoria
    require_once __DIR__ . '/Categoria.php';

    class Cani extends Categoria {
        protected $icona = '<i class="fa-solid fa-dog"></i>'; //assegno un valore all'icona
    }

