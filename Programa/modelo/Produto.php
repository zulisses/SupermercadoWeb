<?php

class Produto{
    private $idProduto;
    private $nome;
    private $precoCompra;
    private $precoVenda;
    private $precoPromocao;
    private $dataCadastro;
    private $grupo_fk;
    private $unidadeMedida_fk;

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPrecoCompra()
    {
        return $this->precoCompra;
    }
    public function setPrecoCompra($precoCompra)
    {
        $this->precoCompra = $precoCompra;
    }

    public function getPrecoVenda()
    {
        return $this->precoVenda;
    }
    public function setPrecoVenda($precoVenda)
    {
        $this->precoVenda = $precoVenda;
    }

    public function getPrecoPromocao()
    {
        return $this->precoPromocao;
    }
    public function setPrecoPromocao($precoPromocao)
    {
        $this->precoPromocao = $precoPromocao;
    }

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function getGrupo_fk()
    {
        return $this->grupo_fk;
    }
    public function setGrupo_fk($grupo_fk)
    {
        $this->grupo_fk = $grupo_fk;
    }

    public function getUnidadeMedida_fk()
    {
        return $this->unidadeMedida_fk;
    }
    public function setUnidadeMedida_fk($unidadeMedida_fk)
    {
        $this->unidadeMedida_fk = $unidadeMedida_fk;
    }
}