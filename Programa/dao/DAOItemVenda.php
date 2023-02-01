<?php

require_once 'Conexao.php';
require_once '../modelo/ItemVenda.php';

class DAOItemVenda
{
    public function __construct()
    {
    }

    public function getLista(string $filtro = "")
    {
        $sql = "Select * from ItemVenda " . $filtro . ";";
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

    public function incluir(ItemVenda $obj)
    {
        $sql = 'insert into ItemVenda (qtd, venda_fk, produto_fk) values(?, ?, ?)';
        try {
            $pst = Conexao::getPreparedStament($sql);
            $pst->bindValue(1, $obj->getQtd());
            $pst->bindValue(2, $obj->getVenda_fk());
            $pst->bindValue(2, $obj->getProduto_fk());
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