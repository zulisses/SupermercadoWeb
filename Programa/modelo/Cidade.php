<?php

class Cidade{
    private $idCidade;
    private $nome;
    private $estado_fk;
    
    public function getIdCidade()
    {
        return $this->idCidade;
    }
    public function setIdCidade($idCidade)
    {
        $this->idCidade = $idCidade;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEstado_fk()
    {
        return $this->estado_fk;
    }
    public function setEstado_fk($estado_fk)
    {
        $this->estado_fk = $estado_fk;
    }
}