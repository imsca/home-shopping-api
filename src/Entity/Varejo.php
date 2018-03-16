<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Endereco;
use App\Entity\Usuario;
/**
 * @ORM\Entity(repositoryClass="App\Repository\VarejoRepository")
 */
class Varejo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $cnpj;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fantasia;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telefone;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $responsavel;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $area;


    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Endereco")
     * @ORM\JoinColumn(name="endereco_id", referencedColumnName="id")
     */
    private $endereco;
    
    public function getId() {
        return $this->id;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getRazao() {
        return $this->razao;
    }

    public function setRazao($razao) {
        $this->razao = $razao;
    }

    public function getFantasia() {
        return $this->fantasia;
    }

    public function setFantasia($fantasia) {
        $this->fantasia = $fantasia;
    }

    public function getTelefone() {
        return $this->telefone;
    }


    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }


    public function getResponsavel() {
        return $this->responsavel;
    }


    public function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco(Endereco $endereco) {
        $this->endereco = $endereco;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }
}