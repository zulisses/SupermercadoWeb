<?php

class Fornecedor{
    private $idFornecedor;
    private $razaoSocial;
    private $nomeFantasia;
    private $email;
    private $telefone;
    private $cnpj;
    private $dataCadastro;
    private $ramo_fk;
    private $logradouro_fk;
    
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }
    public function setIdFornecedor($idFornecedor)
    {
        $this->idFornecedor = $idFornecedor;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function getRamo_fk()
    {
        return $this->ramo_fk;
    }
    public function setRamo_fk($ramo_fk)
    {
        $this->ramo_fk = $ramo_fk;
    }

    public function getLogradouro_fk()
    {
        return $this->logradouro_fk;
    }
    public function setLogradouro_fk($logradouro_fk)
    {
        $this->logradouro_fk = $logradouro_fk;
    }
}