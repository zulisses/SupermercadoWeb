<?php

class Estoque{
    private $produto_fk;
    private $qtd;
    
    public function getProduto_fk()
    {
        return $this->produto_fk;
    }
    public function setProduto_fk($produto_fk)
    {
        $this->produto_fk = $produto_fk;
    }

    public function getQtd()
    {
        return $this->qtd;
    }
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;
    }
}