<?php

require_once 'Conexao.php';
require_once '../modelo/UnidadeMedida.php';

class DAOUnidadeMedida
{
    public function __construct()
    {
    }

    public function getLista(string $filtro = "")
    {
        $sql = "Select * from UnidadeMedida " . $filtro . ";";
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

    public function incluir(UnidadeMedida $obj)
    {
        $sql = 'insert into UnidadeMedida (nome) values(?, ?)';
        try {
            $pst = Conexao::getPreparedStament($sql);
            $pst->bindValue(1, $obj->getNome());
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