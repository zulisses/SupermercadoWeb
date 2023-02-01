<?php

require_once 'Conexao.php';
require_once '../modelo/Venda.php';

class DAOVenda
{
    public function __construct()
    {
    }

    public function getLista(string $filtro = "")
    {
        $sql = "Select * from Venda " . $filtro . ";";
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

    public function incluir(Venda $obj)
    {
        $sql = 'insert into Venda (dataVenda, precoTotal, precoTotalFinal, realizarEntrega, desconto, funcionario_fk, cliente_fk, formaPagamento, entregue, pago) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        try {
            $pst = Conexao::getPreparedStament($sql);
            $pst->bindValue(1, $obj->getDataVenda());
            $pst->bindValue(2, $obj->getPrecoTotal());
            $pst->bindValue(3, $obj->getPrecoTotalFinal());
            $pst->bindValue(4, $obj->getRealizarEntraga());
            $pst->bindValue(5, $obj->getDesconto());
            $pst->bindValue(6, $obj->getFuncionario_fk());
            $pst->bindValue(7, $obj->getCliente_fk());
            $pst->bindValue(8, $obj->getFormaPagamento());
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