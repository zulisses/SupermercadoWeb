<?php

class Compra{
    private $idCompra;
    private $dataCompra;
    private $precoTotal;
    private $precoTotalFinla;
    private $formaPagamento;
    private $realizarEntrega;
    private $desconto;
    private $pago;
    private $entregue;
    private $funcionario_fk;
    private $fornecedor_fk;

    public function getIdCompra()
    {
        return $this->idCompra;
    }
    public function setIdCompra($idCompra)
    {
        $this->idCompra = $idCompra;
    }

    public function getDataCompra()
    {
        return $this->dataCompra;
    }
    public function setDataCompra($dataCompra)
    {
        $this->dataCompra = $dataCompra;
    }

    public function getPrecoTotal()
    {
        return $this->precoTotal;
    }
    public function setPrecoTotal($precoTotal)
    {
        $this->precoTotal = $precoTotal;
    }

    public function getPrecoTotalFinla()
    {
        return $this->precoTotalFinla;
    }
    public function setPrecoTotalFinla($precoTotalFinla)
    {
        $this->precoTotalFinla = $precoTotalFinla;
    }

    public function getFormaPagamento()
    {
        return $this->formaPagamento;
    }
    public function setFormaPagamento($formaPagamento)
    {
        $this->formaPagamento = $formaPagamento;
    }

    public function getRealizarEntrega()
    {
        return $this->realizarEntrega;
    }
    public function setRealizarEntrega($realizarEntrega)
    {
        $this->realizarEntrega = $realizarEntrega;
    }

    public function getDesconto()
    {
        return $this->desconto;
    }
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;
    }

    public function getPago()
    {
        return $this->pago;
    }
    public function setPago($pago)
    {
        $this->pago = $pago;
    }

    public function getEntregue()
    {
        return $this->entregue;
    }
    public function setEntregue($entregue)
    {
        $this->entregue = $entregue;
    }

    public function getFuncionario_fk()
    {
        return $this->funcionario_fk;
    }
    public function setFuncionario_fk($funcionario_fk)
    {
        $this->funcionario_fk = $funcionario_fk;
    }

    public function getFornecedor_fk()
    {
        return $this->fornecedor_fk;
    }
    public function setFornecedor_fk($fornecedor_fk)
    {
        $this->fornecedor_fk = $fornecedor_fk;
    }
}