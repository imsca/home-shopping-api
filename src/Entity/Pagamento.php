<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagamentoRepository")
 */
class Pagamento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
    * @ORM\Column(type="decimal", scale=2)
    */
    private $troco;
    /**
    * @ORM\Column(type="decimal", scale=2)
    */
    private $valor;

    public function getId() {
        return $this->id;
    }

    public function getTroco() {
        return $this->troco;
    }

    public function setTroco($troco) {
        $this->troco = $troco;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
}
