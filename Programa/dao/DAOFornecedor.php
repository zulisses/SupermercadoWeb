<?php

require_once 'Conexao.php';
require_once '../modelo/Fornecedor.php';

class DAOFornecedor
{
    public function __construct()
    {
    }

    public function getLista(string $filtro = "")
    {
        $sql = "Select * from Fornecedor " . $filtro . ";";
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

    public function incluir(Fornecedor $obj)
    {
        $sql = 'insert into Fornecedor (razaoSocial, nomeFantasia, email, telefone, cnpj, dataCadastro, ramo_fk, logradouro_fk) values(?, ?, ?, ?, ?, ?, ?, ?)';
        try {
            $pst = Conexao::getPreparedStament($sql);
            $pst->bindValue(1, $obj->getRazaoSocial());
            $pst->bindValue(2, $obj->getNomeFantasia());
            $pst->bindValue(3, $obj->getEmail());
            $pst->bindValue(4, $obj->getTelefone());
            $pst->bindValue(5, $obj->getCnpj());
            $pst->bindValue(6, $obj->getDataCadastro());
            $pst->bindValue(7, $obj->getRamo_fk());
            $pst->bindValue(8, $obj->getLogradouro_fk());
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