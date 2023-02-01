<?php

class ItemCompra{
    private $idItemVenda;
    private $qtd;
    private $compra_fk;
    private $produto_fk;

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

    public function getCompra_fk()
    {
        return $this->compra_fk;
    }
    public function setCompra_fk($compra_fk)
    {
        $this->compra_fk = $compra_fk;
    }

    public function getProduto_fk()
    {
        return $this->produto_fk;
    }
    public function setProduto_fk($produto_fk)
    {
        $this->produto_fk = $produto_fk;
    }
}