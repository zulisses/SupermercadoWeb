<?php

class SubGrupo{
    private $idSubGrupo;
    private $nome;
    private $grupo_fk;
    
    public function getIdSubGrupo()
    {
        return $this->idSubGrupo;
    }
    public function setIdSubGrupo($idSubGrupo)
    {
        $this->idSubGrupo = $idSubGrupo;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getGrupo_fk()
    {
        return $this->grupo_fk;
    }
    public function setGrupo_fk($grupo_fk)
    {
        $this->grupo_fk = $grupo_fk;
    }
}