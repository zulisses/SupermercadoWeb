<?php

class Ramo{
    private $idRamo;
    private $nome;

    public function getIdRamo()
    {
        return $this->idRamo;
    }
    public function setIdRamo($idRamo)
    {
        $this->idRamo = $idRamo;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}