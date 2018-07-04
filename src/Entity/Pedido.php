<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Varejo;
use App\Entity\Consumidor;
use App\Entity\FormaPagamento;
use App\Entity\Pagamento;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PedidoRepository")
 */
class Pedido
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dataPedido;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dataEntrega;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $total;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Varejo")
     * @ORM\JoinColumn(name="varejo_id", referencedColumnName="id")
     */
    private $varejo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Consumidor")
     * @ORM\JoinColumn(name="consumidor_id", referencedColumnName="id")
     */
    private $consumidor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FormaPagamento")
     * @ORM\JoinColumn(name="forma_pagamento_id", referencedColumnName="id")
     */
    private $formaPagamento;
    
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Pagamento")
     * @ORM\JoinColumn(name="pagamento_id", referencedColumnName="id")
     */
    private $pagamento;
    
    public function getId() {
        return $this->id;
    }

    public function getDataPedido()
    {
        return $this->dataPedido;
    }

    public function setDataPedido(\DateTime $dataPedido) {
        $this->dataPedido = $dataPedido;
    }

    public function getDataEntrega() {
        return $this->dataEntrega;
    }

    public function setDataEntrega(\DateTime $dataEntrega) {
        $this->dataEntrega = $dataEntrega;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function getVarejo() {
        return $this->varejo;
    }

    public function setVarejo(Varejo $varejo) {
        $this->varejo = $varejo;
    }

    public function getConsumidor() {
        return $this->consumidor;
    }

    public function setConsumidor(Consumidor $consumidor) {
        $this->consumidor = $consumidor;
    }

    public function getFormaPagamento() {
        return $this->formaPagamento;
    }

    public function setFormaPagamento(FormaPagamento $formaPagamento) {
        $this->formaPagamento = $formaPagamento;
    }

    public function getPagamento() {
        return $this->pagamento;
    }

    public function setPagamento(Pagamento $pagamento) {
        $this->pagamento = $pagamento;
    }
    public function getStatus() {
        return $this->status;
    }
    
    public function setStatus($status) {
        return $this->status = $status;
    }
}
