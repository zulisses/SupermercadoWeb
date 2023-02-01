<?php

class Logradouro{
    private $idLogradouro;
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro_fk;
    
    public function getIdLogradouro()
    {
        return $this->idLogradouro;
    }
    public function setIdLogradouro($idLogradouro)
    {
        $this->idLogradouro = $idLogradouro;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getComplemento()
    {
        return $this->complemento;
    }
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    public function getBairro_fk()
    {
        return $this->bairro_fk;
    }
    public function setBairro_fk($bairro_fk)
    {
        $this->bairro_fk = $bairro_fk;
    }
}