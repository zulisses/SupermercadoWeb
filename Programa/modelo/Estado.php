<?php

class Estado{
    private $idEstado;
    private $uf;
    private $nome;

    public function getIdEstado()
    {
        return $this->idEstado;
    }
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    }

    public function getUf()
    {
        return $this->uf;
    }
    public function setUf($uf)
    {
        $this->uf = $uf;
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