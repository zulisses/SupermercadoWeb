<?php

require_once 'Conexao.php';
require_once '../modelo/Produto.php';

class DAOProduto
{
    public function __construct()
    {
    }

    public function getLista(string $filtro = "")
    {
        $sql = "Select * from Produto " . $filtro . ";";
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

    public function incluir(Produto $obj)
    {
        $sql = 'insert into Produto (nome, precoCompra, precoVenda, precoPromocao, dataCadastro, grupo_fk, unidadeMedida_fk) values(?, ?, ?, ?, ?, ?, ?)';
        try {
            $pst = Conexao::getPreparedStament($sql);
            $pst->bindValue(1, $obj->getNome());
            $pst->bindValue(2, $obj->getPrecoCompra());
            $pst->bindValue(3, $obj->getPrecoVenda());
            $pst->bindValue(4, $obj->getPrecoPromocao());
            $pst->bindValue(5, $obj->getDataCadastro());
            $pst->bindValue(6, $obj->getGrupo_fk());
            $pst->bindValue(7, $obj->getUnidadeMedida_fk());
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