<?php

class Funcionario{
    private $idFuncionario;
    private $nome;
    private $email;
    private $telefone;
    private $cpf;
    private $sexo;
    private $dataNascimento;
    private $cargo;
    private $dataCadastro;
    private $logradouro_fk;
    private $login_fk;
    
    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }
    public function setIdFuncionario($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
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

    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getCargo()
    {
        return $this->cargo;
    }
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function getLogradouro_fk()
    {
        return $this->logradouro_fk;
    }
    public function setLogradouro_fk($logradouro_fk)
    {
        $this->logradouro_fk = $logradouro_fk;
    }

    public function getLogin_fk()
    {
        return $this->login_fk;
    }
    public function setLogin_fk($login_fk)
    {
        $this->login_fk = $login_fk;
    }
}