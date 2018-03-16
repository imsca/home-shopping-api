<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 */
class Endereco
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
    private $logradouro;

    /**
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $complemento;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $bairro;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $cidade;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $uf;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $cep;

    public function getId() {
        return $this->id;
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

    public function setLogradouro(string $logradouro) {
        $this->logradouro = $logradouro;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero(int $numero) {
        $this->numero = $numero;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento(string $complemento) {
        $this->complemento = $complemento;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro(string $bairro) {
        $this->bairro = $bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade(string $cidade) {
        $this->cidade = $cidade;
    }
    
    public function getUf() {
        return $this->uf;
    }

    public function setUf(string $uf) {
        $this->uf = $uf;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep(string $cep) {
        $this->cep = $cep;
    } 
}
