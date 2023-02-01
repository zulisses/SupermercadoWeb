<?php

require_once 'Conexao.php';
require_once '../modelo/Logradouro.php';

class DAOLogradouro
{
    public function __construct()
    {
    }

    public function getLista(string $filtro = "")
    {
        $sql = "Select * from Logradouro " . $filtro . ";";
        $lista = array();
        try {
            $pst = Conexao::getPreparedStament($sql);
            $pst->execute();
            $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $lista;
    }

    public function salvar()
    {
    }

    public function incluir(Logradouro $obj)
    {
        $sql = 'insert into Logradouro (logradouro, numero, complemento, bairro_fk) values(?, ?, ?, ?)';
        try {
            $pst = Conexao::getPreparedStament($sql);
            $pst->bindValue(1, $obj->getLogradouro());
            $pst->bindValue(2, $obj->getNumero());
            $pst->bindValue(3, $obj->getComplemento());
            $pst->bindValue(4, $obj->getBairro_fk());
            if ($pst->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function alterar()
    {
    }

    public function remover()
    {
    }

    public function localizar()
    {
    }
}