<?php

class Bairro{
    private $idBairro;
    private $nome;
    private $cidade_fk;

    public function getIdBairro()
    {
        return $this->idBairro;
    }
    public function setIdBairro($idBairro)
    {
        $this->idBairro = $idBairro;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCidade_fk()
    {
        return $this->cidade_fk;
    }
    public function setCidade_fk($cidade_fk)
    {
        $this->cidade_fk = $cidade_fk;
    }
}