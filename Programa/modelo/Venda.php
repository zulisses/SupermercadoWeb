<?php

class Venda{
    private $idVenda;
    private $dataVenda;
    private $precoTotal;
    private $precoTotalFinal;
    private $formaPagamento;
    private $realizarEntraga;
    private $desconto;
    private $funcionario_fk;
    private $cliente_fk;
    private $entregue;
    private $pago;

    public function getIdVenda()
    {
        return $this->idVenda;
    }
    public function setIdVenda($idVenda)
    {
        $this->idVenda = $idVenda;
    }

    public function getDataVenda()
    {
        return $this->dataVenda;
    }
    public function setDataVenda($dataVenda)
    {
        $this->dataVenda = $dataVenda;
    }

    public function getPrecoTotal()
    {
        return $this->precoTotal;
    }
    public function setPrecoTotal($precoTotal)
    {
        $this->precoTotal = $precoTotal;
    }

    public function getPrecoTotalFinal()
    {
        return $this->precoTotalFinal;
    }
    public function setPrecoTotalFinal($precoTotalFinal)
    {
        $this->precoTotalFinal = $precoTotalFinal;
    }

    public function getFormaPagamento()
    {
        return $this->formaPagamento;
    }
    public function setFormaPagamento($formaPagamento)
    {
        $this->formaPagamento = $formaPagamento;
    }

    public function getRealizarEntraga()
    {
        return $this->realizarEntraga;
    }
    public function setRealizarEntraga($realizarEntraga)
    {
        $this->realizarEntraga = $realizarEntraga;
    }

    public function getDesconto()
    {
        return $this->desconto;
    }
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;
    }

    public function getFuncionario_fk()
    {
        return $this->funcionario_fk;
    }
    public function setFuncionario_fk($funcionario_fk)
    {
        $this->funcionario_fk = $funcionario_fk;
    }

    public function getCliente_fk()
    {
        return $this->cliente_fk;
    }
    public function setCliente_fk($cliente_fk)
    {
        $this->cliente_fk = $cliente_fk;
    }

    public function getEntregue()
    {
        return $this->entregue;
    }
    public function setEntregue($entregue)
    {
        $this->entregue = $entregue;
    }

    public function getPago()
    {
        return $this->pago;
    }
    public function setPago($pago)
    {
        $this->pago = $pago;
    }
}