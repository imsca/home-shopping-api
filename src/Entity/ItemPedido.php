<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Pedido;
use App\Entity\Produto;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemPedidoRepository")
 */
class ItemPedido
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $quantidade;
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $valor;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pedido")
     * @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     */
    private $pedido;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produto")
     * @ORM\JoinColumn(name="produto_id", referencedColumnName="id")
     */
    private $produto;

    public function getId() {
        return $this->id;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
    public function getPedido() {
        return $this->pedido;
    }

    public function setPedido(Pedido $pedido) {
        $this->pedido = $pedido;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setProduto(Produto $produto) {
        $this->produto = $produto;
    }
}
