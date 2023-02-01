<?php

class ItemVenda{
    private $idItemVenda;
    private $qtd;
    private $venda_fk;
    private $Produto_fk;

    public function getIdItemVenda()
    {
        return $this->idItemVenda;
    }
    public function setIdItemVenda($idItemVenda)
    {
        $this->idItemVenda = $idItemVenda;
    }

    public function getQtd()
    {
        return $this->qtd;
    }
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;
    }

    public function getVenda_fk()
    {
        return $this->venda_fk;
    }
    public function setVenda_fk($venda_fk)
    {
        $this->venda_fk = $venda_fk;
    }

    public function getProduto_fk()
    {
        return $this->Produto_fk;
    }
    public function setProduto_fk($Produto_fk)
    {
        $this->Produto_fk = $Produto_fk;
    }
}