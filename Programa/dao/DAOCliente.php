<?php

require_once 'Conexao.php';
require_once '../modelo/Cliente.php';

class DAOCliente
{
    public function __construct()
    {
    }

    public function getLista(string $filtro = "")
    {
        $sql = "Select * from Cliente " . $filtro . ";";
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

    public function incluir(Cliente $obj)
    {
        $sql = 'insert into Cliente (nome, email, telefone, cpf, sexo, dataNascimento, dataCadastro, logradouro_fk) values(?, ?, ?, ?, ?, ?, ?, ?)';
        try {
            $pst = Conexao::getPreparedStament($sql);
            $pst->bindValue(1, $obj->getNome());
            $pst->bindValue(2, $obj->getEmail());
            $pst->bindValue(3, $obj->getTelefone());
            $pst->bindValue(4, $obj->getCpf());
            $pst->bindValue(5, $obj->getSexo());
            $pst->bindValue(6, $obj->getDataNascimento());
            $pst->bindValue(7, $obj->getDataCadastro());
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