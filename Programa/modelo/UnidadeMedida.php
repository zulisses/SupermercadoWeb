<?php

class UnidadeMedida{
    private $idUnidadeMedida;
    private $nome;

    public function getIdUnidadeMedida()
    {
        return $this->idUnidadeMedida;
    }
    public function setIdUnidadeMedida($idUnidadeMedida)
    {
        $this->idUnidadeMedida = $idUnidadeMedida;
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