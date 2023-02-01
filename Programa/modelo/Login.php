<?php

class Login{
    private $idLogin;
    private $login;
    private $senha;
    private $nivelAcesso;
    
    public function getIdLogin()
    {
        return $this->idLogin;
    }
    public function setIdLogin($idLogin)
    {
        $this->idLogin = $idLogin;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getNivelAcesso()
    {
        return $this->nivelAcesso;
    }
    public function setNivelAcesso($nivelAcesso)
    {
        $this->nivelAcesso = $nivelAcesso;
    }
}