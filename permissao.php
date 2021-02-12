<?php

class Permissao {

// Definições

    const MIN_NIVEL = 0;
    const MAX_NIVEL = 100;

// Métodos públicos

    public function setNivel($nivel) {
        if ($nivel < self::MIN_NIVEL || $nivel > self::MAX_NIVEL)
            throw new Exception("Nivel de permissao invalido");

        $this->nivel = intval($nivel);
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function __toString() {
        return "<b>Nivel: </b>".$this->nivel;
    }

// Atributos privados

    private $nivel = null;

}
