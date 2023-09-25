<?php

trait WithDimensione {
    public static $S = 'Piccolo';
    public static $M = 'Medio';
    public static $L = 'Grande';

    protected $dimensione;

    public function setDimensione($dimensione) {
        if (!in_array($dimensione, [self::$S, self::$M, self::$L])) {
            throw new InvalidArgumentException('La dimensione non è valida.');
        }

        $this->dimensione = $dimensione;
    }
}
