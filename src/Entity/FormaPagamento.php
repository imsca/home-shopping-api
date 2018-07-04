<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Varejo;
/**
 * @ORM\Entity(repositoryClass="App\Repository\FormaPagamentoRepository")
 */
class FormaPagamento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $descricao;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Varejo")
     * @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     */
    private $varejo;
    
    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }
    public function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }


    /**
     * Get the value of varejo
     */ 
    public function getVarejo()
    {
        return $this->varejo;
    }

    /**
     * Set the value of varejo
     *
     * @return  self
     */ 
    public function setVarejo(Varejo $varejo)
    {
        $this->varejo = $varejo;

        return $this;
    }
}