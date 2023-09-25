<?php

class Categoria {
    protected $icona; //estendo a Cani e Gatti e do subito un valore


    /**
     * Get the value of icona
     */ 
    public function getIcona()
    {
        return $this->icona;
    }

    /**
     * Set the value of icona
     *
     * @return  self
     */ 
    public function setIcona($icona)
    {
        $this->icona = $icona;

        return $this;
    }
}