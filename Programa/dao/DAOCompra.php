<?php

require_once 'Conexao.php';
require_once '../modelo/Compra.php';

class DAOCompra
{
    public function __construct()
    {
    }

    public function getLista(string $filtro = "")
    {
        $sql = "Select * from Compra " . $filtro . ";";
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

    public function incluir(Compra $obj)
    {
        $sql = 'insert into Compra (dataCompra, precoTotal, precoTotalFinal, formaPagamento, realizarEntrega, desconto, funcionario_fk, fornecedor_fk, entregue, pago) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        try {
            $pst = Conexao::getPreparedStament($sql);
            $pst->bindValue(1, $obj->getDataCompra());
            $pst->bindValue(2, $obj->getPrecoTotal());
            $pst->bindValue(3, $obj->getPrecoTotalFinla());
            $pst->bindValue(4, $obj->getFormaPagamento());
            $pst->bindValue(5, $obj->getRealizarEntrega());
            $pst->bindValue(6, $obj->getDesconto());
            $pst->bindValue(7, $obj->getFuncionario_fk());
            $pst->bindValue(8, $obj->getFornecedor_fk());
            $pst->bindValue(9, $obj->getEntregue());
            $pst->bindValue(10, $obj->getPago());
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