<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Endereco;
use App\Entity\Usuario;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ConsumidorRepository")
 */
class Consumidor
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $rg;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $sexo;

    /**
     * @ORM\Column(type="date")
     */
    private $nascimento;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telefone;

    /**
     * 
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

    public function getRg() {
        return $this->rg;
    }

    public function setRg(string $rg) {
        $this->rg = $rg;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo(string $sexo) {
        $this->sexo = $sexo;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

    public function setNascimento(DateTime $nascimento) {
        $this->nascimento = $nascimento;
    }
 
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone(string $telefone) {
        $this->telefone = $telefone;
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
