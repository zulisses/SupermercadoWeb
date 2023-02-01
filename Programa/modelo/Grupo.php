<?php

class Grupo{
    private $idGrupo;
    private $nome;

    public function getIdGrupo()
    {
        return $this->idGrupo;
    }
    public function setIdGrupo($idGrupo)
    {
        $this->idGrupo = $idGrupo;
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