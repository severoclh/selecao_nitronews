<?php

class Usuario {

    private static function formatPhone($phone) {
        $formatedPhone = preg_replace('/[^0-9]/', '', $phone);
        $matches = [];
        preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $formatedPhone, $matches);
        if ($matches) {
            return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
        }

        return $phone; 
    }

// Métodos públicos

    public function preencherDados($nome, $telefone, $nivel) {
        $this->nome = $nome;
        $this->telefone = $telefone;

        $this->permissao = new Permissao();
        $this->permissao->setNivel($nivel);
    }

    public function cadastrar() {
        if (empty($this->nome) || !is_string($this->nome))    throw new Exception("Nome invalido ou nao preenchido.");
        if (!$this->telefone || !is_numeric($this->telefone)) throw new Exception("Telefone invalido ou nao preenchido.");
        if ($this->permissao->getNivel() === null)            throw new Exception("Nivel de permissao nao preenchido.");

        $this->data_cadastro = date("d/m/Y H:i:s");
    }

    public function __toString() {
        $telFormatado = self::formatPhone($this->telefone);

        return "Info. do Cadastro:<br><br>".
               "<b>Nome: </b>{$this->nome}<br>".
               "<b>Telefone: </b>$telFormatado<br>".
               "{$this->permissao}<br>".
               "<b>Data do cadastro: </b>{$this->data_cadastro}";
    }

// Atributos privados

    private $nome = null;
    private $telefone = null;
    private $permissao = null;
    private $data_cadastro = null;

}
